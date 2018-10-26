@extends('layouts.app')

@section('page', 'projects')
@section('title', 'Projets')
@section('name', 'Projets')

@section('content')
<div class="card-body container-fluid">
  <div class="row">
    @foreach($aData['aProjects'] as $aProject)
      <section class="col-xl-3 col-lg-4 col-md-6 offset-md-0 col-sm-10 offset-sm-1 col-12 offset-0 d-flex">
      <div class="card border border-secondary rounded mx-2 my-3 flex-fill">
          <div class="card-header bg-dark text-white h2">{{ $aProject['name'] }}</div>
          <img class="card-img-top" src="images/projects/{{ $aProject['image'] }}" alt="{{ $aProject['name'] }}" />
          <div class="card-body">
            <div class="card-title font-weight-bold">{{ $aProject['description'] }}</div>
            <div class="card-text">{{ $aProject['techs'] }}</div>
          </div>
          <div class="card-footer bg-dark text-center text-nowrap">
            <a href="{{ $aProject['github'] }}" target="_blank" class="@if(empty($aProject['github'])) invisible @endif mr-4">
              <i class="fab fa-github fa-4x text-white"></i>
            </a>
            <a href="{{ $aProject['url'] }}" target="_blank" class="ml-4">
              <i class="fas fa-globe fa-4x text-white"></i>
            </a>
          </div>
        </div>
      </section>
    @endforeach
  </div>
</div>
@stop

