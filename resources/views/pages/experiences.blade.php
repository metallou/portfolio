@extends('layouts.app')

@section('page', 'experiences')
@section('title', 'Expériences')
@section('name', 'Expériences')

@section('content')
<div class="card-body">
  @foreach($aData['aExperiences'] as $aExperience)
    <section class="border rounded @unless($loop->first) mt-5 @endunless">
      <h2 class="d-inline-block h2 text-primary">{{ $aExperience['name'] }}</h2>
      <h3 class="d-inline-block h3 text-secondary ml-2">{{ $aExperience['title'] }}</h2>
      <ul class="fa-ul">
        <li>
          <span class="fa-li">
            <i class="fas fa-map-marker-alt fa-2x"></i>
          </span>
          <span class="ml-3">{{ $aExperience['location'] }}</span>
        </li>
        @isset($aExperience['techs'])
          <li class="mt-3">
            <span class="fa-li">
              <i class="fas fa-cogs fa-2x"></i>
            </span>
            <i class="ml-3">{{ $aExperience['techs'] }}</i>
          </li>
        @endisset
      </ul>
      <div class="text-right">
        <p class="d-inline-block m-0 bg-dark rounded text-white p-2">
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

