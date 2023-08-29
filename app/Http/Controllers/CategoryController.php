<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;

use function PHPSTORM_META\type;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::withCount('services')->latest('id')->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parent_categories = Category::select('id', 'name')->latest('id')->whereNull('parent_id')->get();

        return view('admin.categories.create', compact('parent_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        $data = $request->all();



        $name = json_encode([
            'en' => $data['category-name-en'],
            'ar' => $data['category-name-ar'],
        ], JSON_UNESCAPED_UNICODE);

        $description = json_encode([
            'en' => $data['category-description-en'],
            'ar' => $data['category-description-ar'],
        ], JSON_UNESCAPED_UNICODE);


        $category = Category::create([
            'name' => $name,
            'slug' => Str::slug($data['category-name-en']),
            'description' => $description,
            'icon' => $data['category-icon'],
            'parent_id' => $data['category-parent_id'],
        ]);

        $path = $request->file('category-image')->store('images', 'files');

        $category->image()->create([
            'path' => $path,
            'type' => 'cover'
        ]);

        return redirect()
            ->route('admin.categories.index')
            ->with('msg', 'Category created Success')
            ->with('type', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
