@extends('layouts.app')

@section('page', 'experiences')
@section('title', 'Expériences')
@section('name', 'Expériences')

@section('content')
<div class="card-body container-fluid">
  @foreach($aData['aExperiences'] as $aExperience)
    <section class="border rounded @unless($loop->first) mt-5 @endunless">
      <h2 class="d-inline-block h2 text-primary">{{ $aExperience['name'] }}</h2>
      <h3 class="d-inline-block h3 text-secondary">{{ $aExperience['title'] }}</h2>
      <p class="m-0">{{ $aExperience['location'] }}</p>
      @isset($aExperience['techs'])
        <i>{{ $aExperience['techs'] }}</i>
      @endisset
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

