@extends('layouts.main')
@section('title', 'Home')
@section('content')
<link href="{{ asset('/asset/css/home.css') }}" rel="stylesheet">

<div class="video-container">
    <video src="/asset/video/video_1.mp4"  class="video" autoplay muted loop></video>
</div>


<div class="content-2">
    <div class="content2-left">
        <div class="title-container"><h1>The Best Italian Food for Your Stomach</h1></div>
        <p>Welcome to Semplice de Ristorante. Our Restaurant emphasizes aut tas   hentic Italian food that are served in the most elgant ways. Made with the best ingridients and imported directly from Italy so we can served meal across all country with Italian feels. With premium ingridients we make Italian food taste at its finest.</p>
        <a href="#">Menus</a>
    </div>
    <div class="content2-right">
        <img src="/asset/img/image1.png" alt="Food Grid">
    </div>

</div>

<div class="content-3">
    <h1>Introduce Our Chef</h1>
    <div class="content3-bottom">
        <img src="/asset/img/chef.svg" alt="">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias deserunt odio ad dolor facere soluta officia, ducimus temporibus eaque architecto et nam sint officiis ipsum quas natus quia perspiciatis. Dicta.</p>
    </div>
</div>


<div class="content-4">
    <div class="content4-left">
        <img src="/asset/img/home_1.svg" alt="">
    </div>
</div>


@endsection
