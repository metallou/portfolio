@extends('layouts.app')

@section('page', 'projects')
@section('title', 'Projets')
@section('name', 'Projets')

@section('content')
<div class="card-body container-fluid">
  <div class="row">
    @foreach($aProjects as $aProject)
      <section class="col-lg-3 col-md-4 col-sm-6">
        <div class="border rounded p-2 m-1 my-3">
          <figure class="text-center m-0">
            <a href="{{ $aProject['url'] }}" target="_blank">
              <img class="img-fluid" src="images/projects/{{ $aProject['image'] }}" alt="{{ $aProject['name'] }}" />
            </a>
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

