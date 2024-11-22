@extends('layouts.frontend')

@section('title')
    About Us
@endsection

@section('content')
<!-- Header Section (Title) -->

    <section class="header-about">
      <div class="container header-title-container">
        <h2 class="header-title"><span class="ungu">/</span>about-us</h2>
        <p class="header-descript">A page about us.</p>
      </div>
    </section>

    <!-- End header -->

    <!-- About page Section -->

    <section class="about-complete-page">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="about-complete-text">
              {{ $setting->text_aboutus }}
            </p>
          </div>
          <div class="col-md-6"></div>
        </div>
      </div>
    </section>

    <!-- End about -->
@endsection
