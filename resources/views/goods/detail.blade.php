@extends('layouts.app')

@section('title', '首页')

@section('header')
    @include('layouts._header_2')
@endsection

@section('content')
    @include('layouts._banner_2')

    @include('goods._info')
@endsection