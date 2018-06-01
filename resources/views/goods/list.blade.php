@extends('layouts.app')

@section('title', isset($category) ? $category->name : '全部商品')

@section('header')
    @include('layouts._header_2')
@endsection

@section('content')
    @include('layouts._banner_2')

    <div class="ps-section--page">
        <div class="container">
            <div class="row">
                @include('goods._gird', ['categories' => $categories,'goods' => $goods])
                @include('goods._sidebar' , ['categories' => $categories, 'best' => $best, 'tags' => $tags])
            </div>
        </div>
    </div>
@endsection