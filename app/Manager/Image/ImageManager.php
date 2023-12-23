<?php

namespace App\Manager\Image;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ImageManager
{
    public const DEFAULT_IMAGE = '';
    public const WATERMARK = '';

    public $file = '';
    public string $name = '';
    public string $path = '';
    public int $width = 0;
    public int $height = 0;
    public string $extension = 'webp';
    public int $quality = 80;
    public bool $watermark = false;

    final public function upload(): string
    {
        $image_file_name = $this->name . '.' . $this->extension;
        $this->createDirectory();
        $image = Image::make($this->file);
        $image->fit($this->width, $this->height);
        if ($this->watermark) {
            $image->insert(public_path(self::WATERMARK), 'bottom-right', 20, 10);
        }
        $image->save(public_path($this->path . $image_file_name), $this->quality, $this->extension);
        return $image_file_name;
    }

    final public function file(UploadedFile|string|null $file): self
    {
        $this->file = $file;
        return $this;
    }
    final public function name(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    final public function path(string $path): self
    {
        $this->path = $path;
        return $this;
    }
    final public function width(int $width): self
    {
        $this->width = $width;
        return $this;
    }
    final public function height(int $height): self
    {
        $this->height = $height;
        return $this;
    }
    final public function quality(int $quality): self
    {
        $this->quality = $quality;
        return $this;
    }
    final public function extension(string $extension): self
    {
        $this->extension = $extension;
        return $this;
    }
    final public function watermark(): self
    {
        $this->watermark = true;
        return $this;
    }
    private function createDirectory(): void
    {
        $path = public_path($this->path);
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
    }

    final public function remove_old_image(string $image_name): self
    {
        if (File::exists(public_path($this->path . $image_name))) {
            File::delete(public_path($this->path . $image_name));
        }
        return $this;
    }

    final public function remove_photo(string $name, string $path)
    {
        if (File::exists(public_path($path . $name))) {
            File::delete(public_path($path . $name));
        }
    }
}
