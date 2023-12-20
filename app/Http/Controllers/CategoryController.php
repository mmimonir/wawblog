<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use Throwable;
use App\Models\Category;
use Intervention\Image\Facades\Image;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cms_content = [
            'module_name' => 'Category',
            'module_route' => route('category.index'),
            'sub_module_name' => 'List',
            'button_type' => 'create',
            'button_route' => route('category.create'),
        ];
        $categories = (new Category())->get_category_list();
        return view(
            'dashboard.modules.category.index',
            compact('cms_content', 'categories')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cms_content = [
            'module_name' => 'Category',
            'module_route' => route('category.index'),
            'sub_module_name' => 'Create',
            'button_type' => 'list',
            'button_route' => route('category.index'),
        ];
        $categories = (new Category())->get_category_assoc();
        return view('dashboard.modules.category.create', compact('cms_content', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        try {
            $category = (new Category())->storeCategory($request);
            $seo = (new Seo())->storeSeo($request, $category);
        } catch (Throwable $throwable) {
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $cms_content = [
            'module_name' => 'Category',
            'module_route' => route('category.index'),
            'sub_module_name' => 'Show',
            'button_type' => 'list',
            'button_route' => route('category.index'),
        ];
        return view('dashboard.modules.category.show', compact('cms_content', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $cms_content = [
            'module_name' => 'Category',
            'module_route' => route('category.index'),
            'sub_module_name' => 'Edit',
            'button_type' => 'list',
            'button_route' => route('category.index'),
        ];
        $categories = (new Category())->get_category_assoc();
        return view('dashboard.modules.category.edit', compact('cms_content', 'category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        dd($request->all(), $category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
