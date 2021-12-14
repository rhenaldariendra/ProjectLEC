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
            <a href="#reserve">Make a Reservation</a>
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



    <div id="reserve"class="reserve-form-container">
        <h1>Reservation</h1>
        <form action="" method="POST">
            @csrf
            <input type="date" name="" id="">
            <select name="time" id="time">
                <option value="">Select Time</option>
                <option value="">11:00 AM</option>
                <option value="">12:00 PM</option>
                <option value="">01:00 PM</option>
                <option value="">02:00 PM</option>
                <option value="">03:00 PM</option>
                <option value="">04:00 PM</option>
                <option value="">05:00 PM</option>
                <option value="">06:00 PM</option>
                <option value="">07:00 PM</option>
                <option value="">08:00 PM</option>
                <option value="">09:00 PM</option>
            </select>

        </form>
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
