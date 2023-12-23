<?php

namespace App\Models;

use Illuminate\Http\Request;
use App\Manager\Utility\Utility;
use App\Manager\Image\ImageManager;
use App\Models\Trait\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seo extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $guarded = [];

    public const IMAGE_UPLOAD_PATH = 'image/uploads/seo/';
    public const IMAGE_WIDTH = 1200;
    public const IMAGE_HEIGHT = 630;


    final public function storeSeo(Request $request, Model $model)
    {
        return $model->seo()->create($this->prepareData($request));
    }

    public function updateSeo(Request $request, Model $model)
    {
        return $model->seo()->updateOrCreate(['id' => $model?->seo?->id], $this->prepareData($request, $model));
    }

    public function delete_seo(Model $model)
    {
        if (!empty($model->seo->og_image)) {
            (new ImageManager)->remove_photo($model->seo->og_image, self::IMAGE_UPLOAD_PATH);
        }
        $model->seo()->delete();
    }
    private function prepareData(Request $request, Model|null $model = null): array
    {
        $image_file = $request->file('og_image');

        $data =  [
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
        ];
        if ($request->hasFile('og_image')) {
            $image = $image_file->getPathname();
            if ($model && !empty($model->seo->og_image)) {
                $data['og_image'] = (new ImageManager())
                    ->file($image)
                    ->name(Utility::prepare_name($request->input('meta_title')))
                    ->path(self::IMAGE_UPLOAD_PATH)
                    ->height(self::IMAGE_HEIGHT)
                    ->width(self::IMAGE_WIDTH)
                    ->remove_old_image($model?->seo?->og_image)
                    ->upload();
            } else {
                $data['og_image'] = (new ImageManager())
                    ->file($image)
                    ->name(Utility::prepare_name($request->input('meta_title')))
                    ->path(self::IMAGE_UPLOAD_PATH)
                    ->height(self::IMAGE_HEIGHT)
                    ->width(self::IMAGE_WIDTH)
                    ->upload();
            }
        }

        return $data;
    }
    /**
     *
     * @return BelongsTo
     */
    final public function created_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    /**
     *
     * @return BelongsTo
     */
    final public function updated_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by_id');
    }
    /**
     *
     * @return MorphTo
     */
    final public function seoable(): MorphTo
    {
        return $this->morphTo();
    }
}
