@extends('layout.master')

@section('judul')
Dashboard
@endsection

@section('content')

<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>146+</h3>

            <p>SKS Needed</p>
          </div>
          <div class="icon">
            <i class="feather icon-star-on"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>0 (Belum Cukup)<sup style="font-size: 20px">%</sup></h3>

            <p>Achievements</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>
  </div>
@endsection

