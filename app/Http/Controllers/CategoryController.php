<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = Category::latest()->paginate(config('app.paginate'));

        return view('Admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_category = $this->category->all();

        return view('Admin.category.create', compact('list_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::create($request->all());

        return redirect()->route('categories.index')->with(
            'success',
            trans('create_category_success')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->category->find($id);
        $categories = Category::whereNull('parent_id')->get();

        return view('Admin.category.edit', compact('categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $categories)
    {
        $list_category = $request->all();
        $category = $categories->update($list_category);
        if (!$category) {
            return redirect()->route('categories.index')->with(
                'success',
                trans('update_category_success')
            );
        }
        return redirect()->route('categories.index')->with(
            'danger',
            trans('update_category_error')
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $category = $this->category->delete($id);
            if (!$category) {
                return redirect()->route('categories.index')->with(
                    'success',
                    trans('delete_category_success')
                );
            }
            return redirect()->route('categories.index')->with(
                'danger',
                trans('delete_category_error')
            );
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
