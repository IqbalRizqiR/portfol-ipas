@extends('layouts.frontend')

@section('title')
    About Us
@endsection

@section('content')
<!-- Header Section (Title) -->

    <section class="header-about">
      <div class="container header-title-container">
        <h2 class="header-title"><span class="ungu">/</span>about-me</h2>
        <p class="header-descript">A page about {{ $anggota->name }}.</p>
      </div>
    </section>

    <!-- End header -->

    <!-- About page Section -->

    <section class="about-complete-page">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p class="about-complete-text">
              Name : {{ $anggota->name }}<br>
              Job : {{ $anggota->job }}<br>
              Role : {{ $anggota->role }}<br>
              Class : {{ $anggota->class }}<br>
              Age : {{ $anggota->age }}<br>
              Descript : {{ $anggota->descript }}<br>
              Motto : {{ $anggota->motto }}
            </p>
          </div>
          <div class="col-md-4">
            <img class="foto-individu" src="{{ asset('/storage/'.$anggota->photo) }}" width="350" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- End about -->
@endsection
