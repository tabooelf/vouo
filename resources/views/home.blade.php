@extends('layouts.app')

@section('title', '首页')

@section('header')
    @include('layouts._header_1')
@endsection

@section('content')
    @include('layouts._banner_1')
    @include('plugins._best', ['best' => $best])
    @include('plugins._info')
    @include('plugins._offer')
    @include('plugins._partner')
    @include('plugins._map')
@endsection