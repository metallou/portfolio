@extends('layouts.app')

@section('title', 'Expériences')

@section('section', 'Expériences')

@section('content')
<div class="card-body container-fluid">
  @foreach($aExperiences as $aExperience)
    <section class="border rounded @unless($loop->first) mt-5 @endunless">
      <h2 class="d-inline-block">{{ $aExperience['name'] }}</h2>
      <h3 class="d-inline-block">{{ $aExperience['title'] }}</h2>
      <p class="m-0">{{ $aExperience['location'] }}</p>
      <ul class="m-0 ml-3 list-unstyled">
        @foreach($aExperience['techs'] as $tech)
          <li>{{ $tech }}</li>
        @endforeach
      </ul>
      <div class="text-right">
        <p class="d-inline-block m-0 bg-dark border border-dark rounded text-white p-2">
          <i class="fas fa-calendar-alt fa-2x"></i>
          <span>{{ $aExperience['startDate'] }}</span>
          @unless($aExperience['startDate'] === $aExperience['endDate'])
            <i class="fas fa-arrow-right fa-lg"></i>
            <span>{{ $aExperience['endDate'] }}</span>
          @endunless
        </p>
      </div>
    </section>
  @endforeach
</div>
@stop
