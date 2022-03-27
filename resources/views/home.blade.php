@extends('layouts.main')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Dashboard</h1>
        </div>

        <div class="row">
            <div class="col-12 mb-4">
              <div class="hero bg-primary text-white">
                <div class="hero-inner">
                  <h2>Welcome Back, {{ auth()->user()->name  }}</h2>
                  <p class="lead">This page is a place to manage akun premium.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Netflix premium</h4>
                  </div>
                  <div class="card-body">
                    {{ $netflix }}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Spotify premium</h4>
                  </div>
                  <div class="card-body">
                    {{ $spotify }}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Canva Pro</h4>
                  </div>
                  <div class="card-body">
                    {{ $canva }}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Youtube premium</h4>
                  </div>
                  <div class="card-body">
                    {{ $youtube }}
                  </div>
                </div>
              </div>
            </div>
    </section>
</div>
@endsection