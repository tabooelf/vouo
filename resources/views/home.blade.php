@extends('layouts.app')

@section('title', 'VOUO蛋糕官网' . '-首页')
@section('keywords', '为优美|蛋糕|vouo|VOUO|面包|烘焙')
@section('description', 'Vouo蛋糕线上抢购中-专注健康-想你所想')

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