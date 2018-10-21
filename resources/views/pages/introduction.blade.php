@extends('layouts.app')

@section('page', 'introduction')
@section('title', 'Introduction')
@section('name', 'Introduction')

@section('content')
<div class="card-body container-fluid">
    <div class="row">
        <div class="col-lg-4 offset-lg-1 col-md-6 text-center">
            <figure>
                <img class="img-fluid" src="images/{{ $image }}" alt="Kévin CASTEJON" />
                <figcaption>
                    <h2>Kévin CASTEJON</h2>
                </figcaption>
            </figure>
            <ul class="fa-ul">
                <li class="my-3">
                    <span class="fa-li">
                        <i class="fas fa-user fa-2x"></i>
                    </span>
                    <span class="ml-3">{{ $age }} ans</span>
                </li>
                <li class="my-3">
                    <span class="fa-li">
                        <i class="fas fa-at fa-2x"></i>
                    </span>
                    <a class="ml-3" href="mailto:{{ $email }}">{{ $email }}</a>
                </li>
                <li class="my-3">
                    <span class="fa-li">
                        <i class="fas fa-mobile fa-2x"></i>
                    </span>
                    <a class="ml-3" href="tel:{{ $mobile }}">{{ $mobile }}</a>
                </li>
                <li class="my-3">
                    <span class="fa-li">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </span>
                    <a class="ml-3" href="{{ $linkedin }}" target="_blank">{{ $linkedin }}</a>
                </li>
                <li class="my-3">
                    <span class="fa-li">
                        <i class="fab fa-github fa-2x"></i>
                    </span>
                    <a class="ml-3" href="{{ $github }}" target="_blank">{{ $github }}</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-4 offset-lg-2 col-md-6">
            <pre class="normal">Iis igitur est difficilius satis facere, qui se Latina scripta dicunt contemnere. in quibus hoc primum est in quo admirer, cur in gravissimis rebus non delectet eos sermo patrius, cum idem fabellas Latinas ad verbum e Graecis expressas non inviti legant. quis enim tam inimicus paene nomini Romano est, qui Ennii Medeam aut Antiopam Pacuvii spernat aut reiciat, quod se isdem Euripidis fabulis delectari dicat, Latinas litteras oderit?

Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis ut conscius ductus est aliique congregati sunt ex diversis civitatibus multi, qui atrocium criminum ponderibus urgebantur.

Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso vivendi termino his vocabulis appellatos fabricarum culpasse tribunos ut adminicula futurae molitioni pollicitos.
            </pre>
            <p class="text-center">
                <a href="#" class="btn btn-primary" role="button">
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

