<?php

namespace App\Http\Controllers;

use View;

class BaseController extends Controller
{
  public function __construct()
  {
    $aRoutes = array(
      'introduction' => 'Introduction',
      'experiences' => 'Expériences',
      'projects' => 'Projets',
    );

    View::share('A_ROUTES', $aRoutes);
  }
}
