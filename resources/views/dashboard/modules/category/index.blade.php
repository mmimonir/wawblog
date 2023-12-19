@extends('dashboard.layouts.master')
@section('content')
@inject('path', \App\Models\Category::class)
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Sl</th>
            <th>Name
                <x-tool-tip :title="'Top one is category name and bottom one is category slug'" />
            </th>
            <th>Parent</th>
            <th>Status</th>
            <th>Date Time
                <x-tool-tip :title="'Top one is created date and bellow one is updated date'" />
            </th>
            <th>Action By
                <x-tool-tip :title="'Top one is created by and bellow one is updated by'" />
            </th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $category)
        <tr>
            <td>
                <x-table-serial :serial="$loop->iteration" :model="$categories" />
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ image_url($category->image, $path::IMAGE_UPLOAD_PATH) }}"
                            alt="{{ $category->name }}" class="table-image" />
                    </div>
                    <div class="flex-grow-1 ms-1">
                        <p>{{ $category->name }}</p>
                        <p class="text-success">{{ $category->slug }}</p>
                    </div>
                </div>
            </td>
            <td>{{ $category->parent?->name }}</td>
            <td class="text-center">
                @if ($category->status == \App\Models\Category::STATUS_ACTIVE)
                <x-active />
                @else
                <x-inactive />
                @endif
            </td>
            <td>
                <x-date-time :created="$category->created_at" :updated="$category->updated_at" />
            </td>
            <td>
                <x-action-by :created="$category->created_by?->name" :updated="$category->updated_by?->name" />
            </td>
            <td>
                <div class="d-flex">
                    <x-action-view :route="route('category.show', $category->id)" />
                    <x-action-edit class="mx-1" :route="route('category.edit', $category->id)" />
                    <x-action-delete :route="route('category.destroy', $category->id)" />
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center text-danger">
                <p>No Data Found</p>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
{{ $categories->links() }}
@endsection
@push('script')
<script>

</script>
@endpush