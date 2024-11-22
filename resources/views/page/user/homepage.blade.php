@extends('layouts.frontend')

@section('title')
    Homepage
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="hero-text">
          <h2>
            Welcome to SYID Team <br />
            <span class="ungu">personal project website</span>
          </h2>
          <p>We're talented team, and also amazing team</p>
        </div>
      </div>
      <div class="col-lg-6">
          @if (count($image) != 0)
            <img src="{{ asset('/uploads/' . $image->path) }}" alt="" />
          @else

          @endif
      </div>
    </div>
  </div>
</section>

<!-- End Hero Section -->

<!-- Quote Section -->
<section class="quote-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="quote">
          <h3 class="text-center">Love what u work, then u will be work what u love.</h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Quote Section -->

<!-- projects section -->
<section class="projects-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="custom-headers">
          <h2 class="d-inline"><span class="ungu">#</span>teams</h2>
          <hr class="custom-hr" />
        </div>
      </div>
      <div class="col-lg-2">
        <h4>View all -></h4>
      </div>
    </div>
  </div>
  <div class="container projects-container">
    <div class="row">
      @forelse ($anggota as $row)
        <div class="col-md-4">
        <div class="custom-card">
          <img src="{{ asset('/uploads/' . $row->photo) }}" alt="" />
          <ul class="card-list">
            <li>{{ $row->job }}</li>
          </ul>
          <div class="custom-card-body">
            <h6>{{ $row->name }}</h6>
            <p>{{ $row->role }}</p>
            <a href="{{ route('individual', $row->id) }}" class="button-1">Profile</a>
          </div>
        </div>
      </div>
      @empty
      <div class="col-md-12">
        <h1 class="text-center">
            No Anggota's Found
        </h1>
      </div>
      @endforelse
      <div class="col-md-12 mt-3"></div>
    </div>
  </div>
</section>

<!-- End projects section -->

<!-- skills Section -->

<section class="skills-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="custom-headers">
          <h2 class="d-inline"><span class="ungu">#</span>about-us</h2>
          <hr class="custom-hr" />
        </div>
      </div>
    </div>
  </div>
  <div class="container skills-container">
    <div class="row">
      <div class="col-lg-6">
        <p class="about-paragraph">
          {{ $setting->short_aboutus }}
        </p>
        <a href="{{ route('aboutus') }}" class="button-1 mt-3 text-center">Lihat -></a>
      </div>
      <div class="col-lg-6"></div>
    </div>
  </div>
</section>

<section class="about-products-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="custom-headers">
          <h2 class="d-inline"><span class="ungu">#</span>about-products</h2>
          <hr class="custom-hr" />
        </div>
      </div>
    </div>
  </div>
  <div class="container products-container">
    <div class="row">
      <div class="col-lg-6">
        <p class="about-paragraph">
          {{ $setting->short_aboutproject }}
        </p>
        <a href="{{ route('project') }}" class="button-1 mt-3 text-center">Lihat Produk</a>
      </div>
      <div class="col-lg-6"></div>
    </div>
  </div>
</section>
@endsection
