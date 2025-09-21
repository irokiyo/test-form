<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    //categoriesテーブルのデータをadminページに表示
    public function index()
    {
        $categories = Category::all();
        return view('admin', compact('categories'));
    }
    public function confirm(CategoryRequest $request)
    {
        $categories = $request->only(['content']);
        return view('confirm',compact('categories'));
    }
    //categoryテーブルに追加
    public function store(CategoryRequest $request)
    {
        $category = $request->only(['content']);
        Category::create($category);
        return view('thanks');
    }
}