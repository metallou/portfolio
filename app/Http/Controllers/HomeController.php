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
    $tz = config('app.timezone');

    $oBirthDate = Date::parse('1993-06-18', $tz);
    $oToday = Date::parse('today', $timezone);
    $age = $oToday->diffInYears($oBirthDate);

    $aModel = array(
      'image' => 'profile.jpg',
      'age' => $age,
      'mobile' => '+33647493737',
      'email' => 'kevincastejon13@gmail.com',
      'linkedin' => 'https://fr.linkedin.com/in/k%C3%A9vin-castejon-61925a134',
      'github' => 'https://github.com/metallou',
    );

    return view('pages.introduction', $aModel);
  }

  public function experiences(): View
  {
    $tz = config('app.timezone');

    $fSort = function($a1, $a2) {
      return $a1['endDate'] < $a2['endDate'];
    };
    $fMap = function($a) use ($tz) {
      if (isset($a['techs'])) {
        $a['techs'] = implode(', ', $a['techs']);
      }
      $a['startDate'] = Date::parse($a['startDate'], $tz)->format('F Y');
      $a['endDate'] = Date::parse($a['endDate'], $tz)->format('F Y');

      return $a;
    };

    $aExperiencesRaw = [
      // studies
      array(
        'type' => 'STUDY',
        'name' => 'CPGE PCSI-PSI*',
        'title' => 'prépa',
        'location' => 'Lycée Jean Perrin, Marseille',
        'startDate' => '2011-09',
        'endDate' => '2013-06',
      ),
      array(
        'type' => 'STUDY',
        'name' => 'ENSIMAG',
        'title' => 'Ecole d\'ingénieur',
        'location' => 'ENS Informatique et Mathématiques Appliquées de Grenoble',
        'startDate' => '2013-09',
        'endDate' => '2015-06',
      ),
      array(
        'type' => 'STUDY',
        'name' => 'SIMPLonMARS',
        'title' => 'Formation web developper',
        'location' => 'Centrale Marseille',
        'startDate' => '2016-10',
        'endDate' => '2017-05',
      ),
      // experiences
      array(
        'type' => 'EXPERIENCE',
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
        'startDate' => '2017-03',
        'endDate' => '2017-03',
      ),
      array(
        'type' => 'EXPERIENCE',
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
        'startDate' => '2017-04',
        'endDate' => '2017-04',
      ),
      array(
        'type' => 'EXPERIENCE',
        'name' => 'SWAM',
        'title' => 'Startup Weekend',
        'location' => 'TheCamp',
        'techs' => [
          'PHP',
          'Laravel',
          'Git',
          'bash',
        ],
        'startDate' => '2018-04',
        'endDate' => '2018-04',
      ),
      array(
        'type' => 'EXPERIENCE',
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
        'startDate' => '2017-07',
        'endDate' => '2018-10',
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
    $fSort = function($a1, $a2) {
      return $a1['startDate'] < $a2['startDate'];
    };
    $fMap = function($a) {
      $a['techs'] = implode(', ', $a['techs']);
      unset($a['startDate']);

      return $a;
    };

    $aProjectsRaw = [
      array(
        'name' => 'Journal',
        'startDate' => '2016-10-1',
        'url' => 'https://github.com/metallou/journal',
        'image' => 'github.png',
        'description' => 'Projet d\'entrée de formation',
        'techs' => [
          'HTML', 'CSS',
        ],
      ),
      array(
        'name' => 'Affiche de film',
        'startDate' => '2016-10-27',
        'url' => 'https://github.com/metallou/affiche',
        'image' => 'github.png',
        'description' => 'Projet de formation: affiche de film',
        'techs' => [
          'HTML', 'CSS',
        ],
      ),
      array(
        'name' => 'CSS Framework',
        'startDate' => '2016-11-16',
        'url' => 'https://github.com/metallou/cssframework',
        'image' => 'github.png',
        'description' => 'Projet de formation: création d\'un framework CSS',
        'techs' => [
          'HTML', 'CSS',
        ],
      ),
      array(
        'name' => 'Parcs et Jardins',
        'startDate' => '2017-01-27',
        'url' => 'https://github.com/metallou/ParcsEtJardins',
        'image' => 'github.png',
        'description' => 'Projet de formation: présentation de données API',
        'techs' => [
          'JavaScript', 'HTML', 'CSS',
        ],
      ),
      array(
        'name' => 'Demoscript',
        'startDate' => '2017-04-28',
        'url' => 'https://github.com/metallou/demoscript',
        'image' => 'github.png',
        'description' => 'Projet de fin de formation: Rédaction démocratique',
        'techs' => [
          'JavaScript (NodeJS, jQuery)', 'HTML', 'CSS',
        ],
      ),
      array(
        'name' => 'Aquabellum',
        'startDate' => '2017-02-26',
        'url' => 'https://github.com/metallou/naval_battle',
        'image' => 'github.png',
        'description' => 'Projet d\'afterwork: bataille navele',
        'techs' => [
          'JavaScript', 'HTML', 'CSS',
        ],
      ),
      array(
        'name' => 'Trombinoscope',
        'startDate' => '2016-11-24',
        'url' => 'https://github.com/metallou/trombino',
        'image' => 'github.png',
        'description' => 'Projet de formation: Trombinoscope de la formation',
        'techs' => [
          'JavaScript', 'HTML', 'CSS',
        ],
      ),
      array(
        'name' => 'ISS Live',
        'startDate' => '2017-02-08',
        'url' => 'https://github.com/metallou/ISS-live',
        'image' => 'github.png',
        'description' => 'Projet de formation: Utilisation d\'API',
        'techs' => [
          'JavaScript', 'HTML', 'CSS',
        ],
      ),
      array(
        'name' => 'SIMPLe Graphics',
        'startDate' => '2016-12-06',
        'url' => 'https://github.com/metallou/SIMPLe_graphics',
        'image' => 'github.png',
        'description' => 'Projet de formation: application graphique',
        'techs' => [
          'JavaScript', 'HTML', 'CSS',
        ],
      ),
      array(
        'name' => 'Roman Photo',
        'startDate' => '2016-11-03',
        'url' => 'https://github.com/metallou/romanphoto',
        'image' => 'github.png',
        'description' => 'Projet de formation: roman photo',
        'techs' => [
          'HTML', 'CSS',
        ],
      ),
    ];
    usort($aProjectsRaw, $fSort);
    $aProjects = array_map($fMap, $aProjectsRaw);

    $aModel = array(
      'aProjects' => $aProjects,
    );

    return view('pages.projects', $aModel);
  }

  public function carpediem(): View
  {
    $aFAQ = array(
      'framework' => array(
        'laravel'  => 'Laravel',
        'symfony'  => 'Symfony',
        'homemade' => 'maison',
        'neutral'  => 'Aucune préférence',
      ),
    );

    $aModel = array(
      'aFAQ' => $aFAQ,
    );

    return view('pages.carpediem', $aModel);
  }
}
