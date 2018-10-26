@extends('layouts.app')

@section('page', 'projects')
@section('title', 'Projets')
@section('name', 'Projets')

@section('content')
<div class="card-body container-fluid">
  <div class="row">
    @foreach($aData['aProjects'] as $aProject)
      <section class="col-lg-3 col-md-4 col-sm-6">
        <div class="JSproject border rounded p-2 m-1 my-3">
          <figure class="text-center m-0">
            <div class="position-relative">
              <img class="JSimage img-fluid" src="images/projects/{{ $aProject['image'] }}" alt="{{ $aProject['name'] }}" style="opacity:1;" />
              <div class="CSSoverlay JSoverlay invisible position-absolute">
                <div class="text-center text-nowrap">
                  <a href="{{ $aProject['github'] }}" target="_blank" class="@if(empty($aProject['github'])) invisible @endif mr-4">
                    <span class="fa-stack fa-4x" style="width:1em;">
                      <i class="fas fa-circle fa-stack-1x text-white"></i>
                      <i class="fab fa-github fa-stack-1x text-dark"></i>
                    </span>
                  </a>
                  <a href="{{ $aProject['url'] }}" target="_blank" class="ml-4">
                    <span class="fa-stack fa-4x" style="width:1em;">
                      <i class="fas fa-circle fa-stack-1x text-white"></i>
                      <i class="fas fa-globe fa-stack-1x text-dark"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <figcaption class="font-weight-bold text-left">{{ $aProject['name'] }}</figcaption>
          </figure>
          <p>{{ $aProject['description'] }}</p>
          <i>{{ $aProject['techs'] }}</i>
        </div>
      </section>
    @endforeach
  </div>
</div>
@stop

