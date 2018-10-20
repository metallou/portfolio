<?php

namespace App\Http\Controllers;

use \DateTimeZone;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use Illuminate\View\View as View;

class HomeController extends BaseController
{
  public function introduction(): View
  {
    $timezone = config('app.timezone');

    $oBirthDate = Date::parse('1993-6-18', $timezone);
    $oToday = Date::parse('today', $timezone);

    $aModel = array(
      'age' => $oToday->diffInYears($oBirthDate),
      'mobile' => '+33647493737',
      'email' => 'kevincastejon13@gmail.com',
      'linkedin' => 'https://fr.linkedin.com/in/k%C3%A9vin-castejon-61925a134',
    );

    return view('pages.introduction', $aModel);
  }

  public function studies(): View
  {
    $timezone = config('app.timezone');

    $fSort = function($a1, $a2) {
      return $a1['endDate'] < $a2['endDate'];
    };
    $fMap = function($a) {
      $a['startDate'] = $a['startDate']->format('F Y');
      $a['endDate'] = $a['endDate']->format('F Y');

      return $a;
    };

    $aStudiesRaw = [
        array(
          'name' => 'CPGE PCSI-PSI*',
          'location' => 'Lycée Jean Perrin, Marseille',
          'startDate' => Date::parse('2011-9', $timezone),
          'endDate' => Date::parse('2013-6', $timezone),
        ),
        array(
          'name' => 'ENSIMAG',
          'location' => 'ENS Informatique et Mathématiques Appliquées de Grenoble',
          'startDate' => Date::parse('2013-9', $timezone),
          'endDate' => Date::parse('2015-6', $timezone),
        ),
        array(
          'name' => 'SIMPLonMARS',
          'location' => 'Centrale Marseille',
          'startDate' => Date::parse('2013-9', $timezone),
          'endDate' => Date::parse('2015-6', $timezone),
        ),
    ];
    usort($aStudiesRaw, $fSort);
    $aStudies = array_map($fMap, $aStudiesRaw);

    $aModel = array(
      'aStudies' => $aStudies,
    );

    return view('pages.studies', $aModel);
  }

  public function experiences(): View
  {
    $timezone = config('app.timezone');

    $fSort = function($a1, $a2) {
      return $a1['endDate'] < $a2['endDate'];
    };
    $fMap = function($a) {
      $a['startDate'] = $a['startDate']->format('F Y');
      $a['endDate'] = $a['endDate']->format('F Y');

      return $a;
    };

    $aExperiencesRaw = [
        array(
          'name' => 'KMS',
          'title' => 'stage de refonte du site web',
          'location' => 'Marseille',
          'techs' => [
            'PHP',
            'mySQL',
            'JavaScript',
            'jQuery',
            'HTML',
            'CSS',
          ],
          'startDate' => Date::parse('2017-3', $timezone),
          'endDate' => Date::parse('2017-3', $timezone),
        ),
        array(
          'name' => 'SWAM',
          'title' => 'Startup Weekend',
          'location' => 'Technopôle de l\'environnement Arbois Méditerranée',
          'techs' => [
            'PHP',
            'Laravel',
            'JavaScript',
            'jQuery',
            'Bootstrap',
            'HTML',
            'CSS',
            'Git',
            'bash',
          ],
          'startDate' => Date::parse('2017-4', $timezone),
          'endDate' => Date::parse('2017-4', $timezone),
        ),
        array(
          'name' => 'SWAM',
          'title' => 'Startup Weekend',
          'location' => 'TheCamp',
          'techs' => [
            'PHP',
            'Laravel',
            'Git',
            'bash',
          ],
          'startDate' => Date::parse('2018-4', $timezone),
          'endDate' => Date::parse('2018-4', $timezone),
        ),
        array(
          'name' => 'GRC Contact',
          'title' => 'Développeur web',
          'location' => 'Aix les Milles',
          'techs' => [
            'PHP',
            'mySQL',
            'JavaScript',
            'jQuery',
            'Bootstrap',
            'HTML',
            'CSS',
            'Git',
            'bash',
            'Microsoft Office',
          ],
          'startDate' => Date::parse('2017-7', $timezone),
          'endDate' => Date::parse('2018-10', $timezone),
        ),
    ];
    usort($aExperiencesRaw, $fSort);
    $aExperiences = array_map($fMap, $aExperiencesRaw);

    $aModel = array(
      'aExperiences' => $aExperiences,
    );

    return view('pages.experiences', $aModel);
  }

  public function projects(): View
  {
    $aModel = array(
      'aProjects' => [],
    );

    return view('pages.projects', $aModel);
  }
}
