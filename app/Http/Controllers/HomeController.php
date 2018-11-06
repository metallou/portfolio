<?php

namespace App\Http\Controllers;

use Illuminate\View\View as View;

use App\Http\Resources\HomeResource;

final class HomeController extends BaseControllerAbstract
{
  public function introduction(): View
  {
    $aResource = HomeResource::introduction();

    return view('pages.introduction', $aResource);
  }

  public function experiences(): View
  {
    $aResource = HomeResource::experiences();

    return view('pages.experiences', $aResource);
  }

  public function projects(): View
  {
    $aResource = HomeResource::projects();

    return view('pages.projects', $aResource);
  }

  public function carpediem(): View
  {
    $aResource = HomeResource::carpediem();

    return view('pages.carpediem', $aResource);
  }

  public function cv(): View
  {
    $aResource = HomeResource::cv();
    $aResource['anonymous'] = false;

    return view('pages.cv', $aResource);
  }

  public function cvAnonymous(): View
  {
    $aResource = HomeResource::cv();
    $aResource['anonymous'] = true;

    return view('pages.cv', $aResource);
  }
}
