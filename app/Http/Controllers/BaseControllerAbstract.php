<?php

namespace App\Http\Controllers;

use View;

abstract class BaseControllerAbstract extends ControllerAbstract
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
