@extends('layouts.app')

@section('page', 'introduction')
@section('title', 'Introduction')
@section('name', 'Introduction')

@section('content')
<div class="card-body container-fluid">
  <div class="row">
  <div class="col-xl-4 offset-xl-1 col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
    <figure>
      <img class="img-fluid" src="images/{{ $aData['image'] }}" alt="Kévin CASTEJON" />
      <figcaption>
        <h2>Kévin CASTEJON</h2>
      </figcaption>
    </figure>
  </div>
  <div class="col-xl-4 offset-xl-2 col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
    <ul class="fa-ul">
      <li class="my-3">
        <span class="fa-li">
          <i class="fas fa-user fa-2x"></i>
        </span>
        <span class="ml-3">{{ $aData['age'] }} ans</span>
      </li>
      <li class="my-3">
        <span class="fa-li">
          <i class="fas fa-map-marker-alt fa-2x"></i>
        </span>
        <span class="ml-3">{{ $aData['address'] }}</span>
      </li>
      <li class="my-3">
        <span class="fa-li">
          <i class="fas fa-at fa-2x"></i>
        </span>
        <a class="ml-3" href="mailto:{{ $aData['email'] }}">{{ $aData['email'] }}</a>
      </li>
      <li class="my-3">
        <span class="fa-li">
          <i class="fas fa-mobile fa-2x"></i>
        </span>
        <a class="ml-3" href="tel:{{ $aData['mobile'] }}">{{ $aData['mobile'] }}</a>
      </li>
      <li class="my-3">
        <span class="fa-li">
          <i class="fab fa-linkedin fa-2x"></i>
        </span>
        <a class="ml-3" href="{{ $aData['linkedin'] }}" target="_blank">{{ $aData['linkedin'] }}</a>
      </li>
      <li class="my-3">
        <span class="fa-li">
          <i class="fab fa-github fa-2x"></i>
        </span>
        <a class="ml-3" href="{{ $aData['github'] }}" target="_blank">{{ $aData['github'] }}</a>
      </li>
    </ul>
    <p class="text-center mt-3">
      <a href="medias/Kévin-CASTEJON.pdf" download class="btn btn-primary" role="button">
        <span class="d-flex align-items-center">
          <i class="fas fa-file-pdf fa-3x"></i>
          <span class="h2 p-0 m-0 ml-3">CV</span>
        </span>
      </a>
    </p>
  </div>
  </div>
</div>
@stop

