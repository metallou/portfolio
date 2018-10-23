<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script defer src="https://use.fontawesome.com/releases/v5.4.1/js/all.js" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>

    <title>Kévin CASTEJON</title>
  </head>
  <body>
    <main class="d-flex flex-row justify-content-around h-100 m-5">
      <div class="d-flex flex-column justify-content-between w-100 mx-5">
        <section class="p-3 my-3 bg-dark text-white">
          <h2 class="text-center h2">Kévin CASTEJON</h2>
          <h1 class="text-center h1">Web Developper</h1>
          <h3 class="text-center h3">(Full Stack)</h3>
        </section>
        <section class="p-3 my-3">
          <h2 class="text-center h2 border-bottom border-dark">Techniques</h2>
          <dl class="row">
            @foreach($aData['aTechs'] as $label => $aTechs)
              <dt class="col-2">{{ $label }}</dt>
              <dd class="col-10">
                @foreach($aTechs as $tech)
                  <p class="m-0">{{ $tech }}</p>
                @endforeach
              </dd>
            @endforeach
          </dl>
        </section>
        <section class="p-3 my-3 bg-dark text-white">
          <h2 class="text-center h2 border-bottom border-light">Compétences</h2>
          <ul class="list-unstyled m-0">
            @foreach($aData['aSkills'] as $skill)
              <li class="@unless($loop->first) mt-1 @endunless">
                <span>{{ $skill }}</span>
              </li>
            @endforeach
          </ul>
        </section>
        <section class="p-3 my-3">
          <h2 class="text-center h2 border-bottom border-dark">Intérêts</h2>
          <ul class="list-unstyled m-0">
            @foreach($aData['aInterests'] as $interest)
              <li class="@unless($loop->first) mt-1 @endunless">
                <span>{{ $interest }}</span>
              </li>
            @endforeach
          </ul>
        </section>
      </div>
      <div class="d-flex flex-column justify-content-between w-100 mx-5">
        <section class="p-3 my-3">
          <h2 class="text-center h2 border-bottom border-dark">Informations</h2>
          <ul class="fa-ul">
            <li class="my-3">
              <span class="fa-li"><i class="fas fa-user fa-2x"></i></span>
              <span class="ml-3">{{ $aData['age'] }} ans, autonome, autodidacte, perfectionniste</span>
            </li>
            <li class="my-3">
              <span class="fa-li"><i class="fas fa-map-marker-alt fa-2x"></i></span>
              <span class="ml-3">{{ $aData['address'] }}</span>
            </li>
            <li class="my-3">
              <span class="fa-li"><i class="fas fa-mobile fa-2x"></i></span>
              <a class="ml-3" href="tel:{{ $aData['mobile'] }}">{{ $aData['mobile'] }}</a>
            </li>
            <li class="my-3">
              <span class="fa-li"><i class="fas fa-at fa-2x"></i></span>
              <a class="ml-3" href="mailto:{{ $aData['email'] }}">{{ $aData['email'] }}</a>
            </li>
            <li class="my-3">
              <span class="fa-li"><i class="fab fa-linkedin fa-2x"></i></span>
              <a class="ml-3" href="{{ $aData['linkedin'] }}" target="_blank">{{ $aData['linkedin'] }}</a>
            </li>
            <li class="my-3">
              <span class="fa-li"><i class="fab fa-github fa-2x"></i></span>
              <a class="ml-3" href="{{ $aData['github'] }}" target="_blank">{{ $aData['github'] }}</a>
            </li>
            <li class="my-3">
              <span class="fa-li"><i class="fas fa-home fa-2x"></i></span>
              <a class="ml-3" href="{{ $aData['portfolio'] }}" target="_blank">{{ $aData['portfolio'] }}</a>
            </li>
          </ul>
        </section>
        <section class="p-3 my-3">
          <h2 class="text-center h2 border-bottom border-dark">Expériences</h2>
          <ul class="list-unstyled m-0">
            @foreach($aData['aExperiences'] as $aExperience)
              <li class="@unless($loop->first) mt-3 @endunless">
                <p class="m-0">
                  <b>{{ $aExperience['name'] }}</b>
                  <span>{{ $aExperience['title'] }}</span>
                  <br />
                  @if($aExperience['startDate'] === $aExperience['endDate'])
                    <i>{{ $aExperience['startDate'] }}</i>
                  @else
                    <i>{{ $aExperience['startDate'] }} - {{ $aExperience['endDate'] }}</i>
                  @endif
                  <br />
                  <span>{{ $aExperience['location'] }}</span>
                  <br />
                  <i>{{ $aExperience['techs'] }}</i>
                </p>
              </li>
            @endforeach
          </ul>
        </section>
        <section class="p-3 my-3">
          <h2 class="text-center h2 border-bottom border-dark">Formations</h2>
          <ul class="list-unstyled m-0">
            @foreach($aData['aStudies'] as $aStudy)
              <li class="@unless($loop->first) mt-3 @endunless">
                <p class="m-0">
                  <b>{{ $aStudy['name'] }}</b>
                  <span>{{ $aStudy['title'] }}</span>
                  <br />
                  @if($aStudy['startDate'] === $aStudy['endDate'])
                    <i>{{ $aStudy['startDate'] }}</i>
                  @else
                    <i>{{ $aStudy['startDate'] }} - {{ $aStudy['endDate'] }}</i>
                  @endif
                  <br />
                  <span>{{ $aStudy['location'] }}</span>
                </p>
              </li>
            @endforeach
          </ul>
        </section>
      </div>
    </main>
  </body>
</html>
