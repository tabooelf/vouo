<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Good;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function show(Request $request, Category $category){

        $categories = Category::get()->sortBy('order')->toArray();

        $goods = Good::where('category_id',$category->id)->withOrder($request->order)->paginate(9);

        $best = Good::best(4);

        $tags = Good::tags(10);

        return view('goods.list', compact('categories', 'goods', 'best', 'tags'));
    }

    public function all(Request $request, Category $category){
        $categories = Category::get()->sortBy('order')->toArray();

        $goods =  Good::withOrder($request->order)->paginate(9);

        $best = Good::best(4);

        $tags = Good::tags(10);

        return view('goods.list', compact('categories', 'goods', 'best', 'tags'));
    }
}
