@extends('layouts.master')



@section('content')

<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12 text-left">
<h1 class="text-custom-white">Association</h1>
<ul class="custom-flex">
<li class="fw-500"> <a href="index.html" class="text-custom-white">Home</a> </li>
<li class="active fw-500"> Association </li>
</ul>
</div>
</div>
</div>
</div>

<section class="section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<div class="listing-top-heading mb-xl-20">
<h6 class="no-margin text-custom-black"></h6>
<div class="sort-by"> <span class="text-custom-black fs-14 fw-600">Sort by</span>
<div class="group-form">
<select class="form-control form-control-custom custom-select">
<option>A to Z</option>
<option>Z to A</option>
</select>
</div>
</div>
</div>
</div>
@foreach($associations as $item)

<div class=" col-lg-4 col-md-6">
<div class="bicycle-grid mb-xl-30">
<div class="bicycle-grid-wrapper bicycle-grid bx-wrapper">
<div class="image-sec animate-img"> <a href="#"> <img src="assets/aa.jpeg" class="full-width" alt="img"> </a> </div>
<div class="bicycle-grid-caption padding-20 bg-custom-white p-relative">
<h4 class="title fs-16"><a href="#" class="text-custom-black">{{ $item->nom }}<small class="text-light-dark">{{ $item->owner }}</small></a></h4>
      <span class="price"><small>{{ $item->objective }}</small></span>
   <!-- <div class="action"> <a class="btn-second btn-small" href="#">View</a> <a class="btn-first btn-submit" href="#">Book</a> </div> -->
</div>
</div>
</div>
</div>


@endforeach

</section>



@endsection