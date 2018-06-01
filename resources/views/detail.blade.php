@extends('layouts.app')

@section('title', isset($category) ? $category->name : '全部商品')

@section('header')
    @include('layouts._header_2')
@endsection

@section('content')
    @include('layouts._banner_2')
    @include('goods._detail')
@endsection