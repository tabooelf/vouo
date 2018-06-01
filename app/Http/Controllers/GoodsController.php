<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Good;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function show(Good $good){
        $info = $good->toArray();
        $info['category'] = $good->category->toArray();
        // var_dump($info);
        return view('detail', compact('info'));
    }
}
