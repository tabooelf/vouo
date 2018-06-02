@extends('layouts.app')

@section('title', isset($good) ? 'VOUO蛋糕官网' . $good->name : "VOUO蛋糕官网-商品")
@section('keywords', '为优美|蛋糕|vouo|VOUO|面包|烘焙')
@section('description', 'Vouo蛋糕线上抢购中-专注健康-想你所想')

@section('header')
    @include('layouts._header_2')
@endsection

@section('content')
    <div class="ps-section--hero"><img src="{{ asset('images/hero/01.jpg') }}" alt=""></div>
    @include('goods._detail')
@endsection