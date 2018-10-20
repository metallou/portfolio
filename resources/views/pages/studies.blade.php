@extends('layouts.app')

@section('title', 'Formations')

@section('section', 'Formations')

@section('content')
<div class="card-body container-fluid">
  @foreach($aStudies as $aStudy)
    <section class="border rounded @unless($loop->first) mt-5 @endunless">
      <h2>{{ $aStudy['name'] }}</h2>
      <p class="m-0">{{ $aStudy['location'] }}</p>
      <div class="text-right">
        <p class="d-inline-block m-0 bg-dark border border-dark rounded text-white p-2">
          <i class="fas fa-calendar-alt fa-2x"></i>
          <span>{{ $aStudy['startDate'] }}</span>
          @unless($aStudy['startDate'] === $aStudy['endDate'])
            <i class="fas fa-arrow-right fa-lg"></i>
            <span>{{ $aStudy['endDate'] }}</span>
          @endunless
        </p>
      </div>
    </section>
  @endforeach
</div>
@stop
