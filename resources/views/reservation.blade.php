@extends('layouts.main')
@section('title', 'Reservation')
@section('content')

<link rel="stylesheet" href="/asset/css/reservation.css">
<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>


<div class="conts">
    <div class="paralax">
        <div class="info">
            <h1>Experience Italian Food at Its Finest</h1>
            <a href="#">Make a Reservation</a>
        </div>
        <div class="shadow"></div>
    </div>


    <div class="slider">
        <div class="judul">

                <div class="garis"></div>

            <h2 class="the">THE</h2>
            <h2>AMBIENCE</h2>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="/asset/img/slider1.jpeg" />
              </div>
              <div class="swiper-slide">
                <img src="/asset/img/slider2.jpeg" />
              </div>
              <div class="swiper-slide">
                <img src="/asset/img/slider3.jpeg" />
              </div>
              <div class="swiper-slide">
                <img src="/asset/img/slider4.jpeg" />
              </div>
              <div class="swiper-slide">
                <img src="/asset/img/slider5.jpeg" />
              </div>
              <div class="swiper-slide">
                <img src="/asset/img/slider6.jpeg" />
              </div>
              <div class="swiper-slide">
                <img src="/asset/img/slider7.jpeg" />
              </div>
              <div class="swiper-slide">
                <img src="/asset/img/slider8.jpeg" />
              </div>
              <div class="swiper-slide">
                <img src="/asset/img/slider9.jpeg" />
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
    </div>


</div>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "2",
      coverflowEffect: {
        rotate: 20,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows: true,
      },
      loop: true,
    });
  </script>
@endsection
