@extends('dashboard.layouts.master')
@section('content')
<div class="row">
    <div class="col-md-8">
        <fieldset>
            <legend>Category Information</legend>
            <table class="table table-striped table-bordered table-hover mt-4">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $category->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $category->name }}</td>
                    </tr>
                    <tr>
                        <th>Parent</th>
                        <td>{{ $category->parent?->name }}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ $category->slug }}</td>
                    </tr>
                    <tr>
                        <th>Discription</th>
                        <td>{{ $category->description }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            @if($category->status == \App\Models\Category::STATUS_ACTIVE)
                            <x-active />
                            @else
                            <x-inactive />
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Action By</th>
                        <td>
                            <x-action-by :created="$category->created_by?->name"
                                :updated="$category->updated_by?->name" />
                        </td>
                    </tr>
                    <tr>
                        <th>Date Time</th>
                        <td>
                            <x-date-time :created="$category->created_at" :updated="$category->updated_at" />
                        </td>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td>
                            <img data-bs-toggle="modal" data-bs-target="#exampleModal"
                                src="{{ image_url($category->image, \App\Models\Category::IMAGE_UPLOAD_PATH) }}"
                                alt="{{ $category->name }}" class="table-image cursor-pointer" />
                        </td>
                </tbody>
            </table>
        </fieldset>

    </div>
    <div class="col-md-4">
        <fieldset>
            <legend>SEO Information</legend>
            <table class="table table-striped table-bordered table-hover mt-4">
                <tbody>
                    <tr>
                        <th>Title</th>
                        <td>{{ $category->seo?->meta_title }}</td>
                    </tr>
                    <tr>
                        <th>Keywords</th>
                        <td>{{ $category->seo?->meta_keywords }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $category->seo?->meta_description }}</td>
                    </tr>
                    <tr>
                        <th>OG Image</th>
                        <td>
                            <img id="og_image" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                src="{{ image_url($category->seo?->og_image, \App\Models\Seo::IMAGE_UPLOAD_PATH) }}"
                                alt="{{ $category->name }}" class="table-image cursor-pointer" />
                        </td>
                </tbody>
            </table>
        </fieldset>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header p-2">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Category Photo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="display_big_photo" src="" alt="{{ $category->name }}" class="img-thumbnail" />
            </div>
        </div>
    </div>
</div>

@endsection
@push('script')
<script>
    $(document).ready(function () {
        $('.table-image').click(function () {
            $('#display_big_photo').attr('src', $(this).attr('src'));
        });
    });
</script>
@endpush
