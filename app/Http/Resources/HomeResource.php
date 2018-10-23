<?php

namespace App\Http\Resources;

use Jenssegers\Date\Date;

final class HomeResource extends BaseResourceAbstract
{
  public static function introduction(): array
  {
    $tz = config('app.timezone');

    $oBirthDate = Date::parse('1993-06-18', $tz);
    $oToday = Date::parse('today', $tz);
    $age = $oToday->diffInYears($oBirthDate);

    return static::factory()
      ->addData('age', $age)
      ->addData('image', 'profile.jpg')
      ->addData('address', '104A boulevard Charles Livon, 13007 Marseille')
      ->addData('mobile', '+33647493737')
      ->addData('email', 'kevincastejon13@gmail.com')
      ->addData('linkedin', 'https://fr.linkedin.com/in/k%C3%A9vin-castejon-61925a134')
      ->addData('github', 'https://github.com/metallou')
      ->addData('portfolio', 'https://kevin-castejon.herokuapp.com')
      ->toArray();
  }

  public static function experiences(): array
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
          'PHP (Laravel)',
          'JavaScript (jQuery)',
          'HTML (Blade, Bootstrap)',
          'CSS (SCSS)',
          'Git',
          'shell',
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
          'PHP (Laravel)',
          'Git',
          'shell',
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
          'mySQL (mySQL Workbench)',
          'JavaScript (jQuery, Bootstrap)',
          'HTML (Bootstrap)',
          'CSS',
          'Git (SourceTree)',
          'shell',
          'Microsoft Office',
        ],
        'startDate' => '2017-07',
        'endDate' => '2018-10',
      ),
    ];
    usort($aExperiencesRaw, $fSort);
    $aExperiences = array_map($fMap, $aExperiencesRaw);

    return static::factory()
      ->addData('aExperiences', $aExperiences)
      ->toArray();
  }

  public static function projects(): array
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
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'Affiche de film',
        'startDate' => '2016-10-27',
        'url' => 'https://github.com/metallou/affiche',
        'image' => 'github.png',
        'description' => 'Projet de formation: affiche de film',
        'techs' => [
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'CSS Framework',
        'startDate' => '2016-11-16',
        'url' => 'https://github.com/metallou/cssframework',
        'image' => 'github.png',
        'description' => 'Projet de formation: création d\'un framework CSS',
        'techs' => [
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'Parcs et Jardins',
        'startDate' => '2017-01-27',
        'url' => 'https://github.com/metallou/ParcsEtJardins',
        'image' => 'github.png',
        'description' => 'Projet de formation: présentation de données API',
        'techs' => [
          'JavaScript',
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'Demoscript',
        'startDate' => '2017-04-28',
        'url' => 'https://github.com/metallou/demoscript',
        'image' => 'github.png',
        'description' => 'Projet de fin de formation: Rédaction démocratique',
        'techs' => [
          'JavaScript (NodeJS, jQuery)',
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'Aquabellum',
        'startDate' => '2017-02-26',
        'url' => 'https://github.com/metallou/naval_battle',
        'image' => 'github.png',
        'description' => 'Projet d\'afterwork: bataille navele',
        'techs' => [
          'JavaScript',
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'Trombinoscope',
        'startDate' => '2016-11-24',
        'url' => 'https://github.com/metallou/trombino',
        'image' => 'github.png',
        'description' => 'Projet de formation: Trombinoscope de la formation',
        'techs' => [
          'JavaScript',
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'ISS Live',
        'startDate' => '2017-02-08',
        'url' => 'https://github.com/metallou/ISS-live',
        'image' => 'github.png',
        'description' => 'Projet de formation: Utilisation d\'API',
        'techs' => [
          'JavaScript',
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'SIMPLe Graphics',
        'startDate' => '2016-12-06',
        'url' => 'https://github.com/metallou/SIMPLe_graphics',
        'image' => 'github.png',
        'description' => 'Projet de formation: application graphique',
        'techs' => [
          'JavaScript',
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'Roman Photo',
        'startDate' => '2016-11-03',
        'url' => 'https://github.com/metallou/romanphoto',
        'image' => 'github.png',
        'description' => 'Projet de formation: roman photo',
        'techs' => [
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'Portfolio',
        'startDate' => '2018-10-18',
        'url' => 'https://github.com/metallou/portfolio2',
        'image' => 'github.png',
        'description' => 'Site de présentation',
        'techs' => [
          'PHP (Laravel)',
          'JavaScript (Vue)',
          'HTML (Blade)',
          'CSS (Bootstrap)',
        ],
      ),
    ];
    usort($aProjectsRaw, $fSort);
    $aProjects = array_map($fMap, $aProjectsRaw);

    return static::factory()
      ->addData('aProjects', $aProjects)
      ->toArray();
  }

  public static function carpediem(): array
  {
    return static::factory()
      ->toArray();
  }

  public static function cv(): array
  {
    $fFilterClosure = function(string $type)
    {
      return function(array $a) use ($type)
      {
        return $a['type'] === $type;
      };
    };

    $aIN1 = self::introduction();
    $aIN2 = self::experiences();

    $aIntroduction = $aIN1['aData'];
    $aStudies = array_filter($aIN2['aData']['aExperiences'], $fFilterClosure('STUDY'));
    $aExperiences = array_filter($aIN2['aData']['aExperiences'], $fFilterClosure('EXPERIENCE'));
    $aTechs = array(
      'Web' => [
        'PHP (Laravel, Symfony)',
        'JavaScript (NodeJS, ExpressJS, jQuery)',
        'SQL (mySQL, mySQL Workbench)',
        'noSQL (MongoDB, mLab)',
        'HTML (Blade, Twig, Bootstrap)',
        'CSS (SCSS, Bootstrap)',
      ],
      'Système' => [
        'Git (shell, SourceTree)',
        'Linux (shell)',
        'Netbeans, Vim',
      ],
      'Autres' => [
        'FileZilla',
        'Putty',
        'Microsoft Office',
      ],
    );
    $aSkills = [
      'Force de proposition',
      'Respect du cahier des charges',
      'Adaptivité',
      'Réactivité',
      'Anglais courant',
      'Espagnol correct',
    ];
    $aInterests = [
      'Musique',
      'Cinéma',
      'Jeux vidéos',
      'Technologies',
      'Sciences',
      'Zythologie',
    ];

      return static::factory()
      ->addDatas($aIntroduction)
      ->addData('aStudies', $aStudies)
      ->addData('aExperiences', $aExperiences)
      ->addData('aTechs', $aTechs)
      ->addData('aSkills', $aSkills)
      ->addData('aInterests', $aInterests)
      ->toArray();
  }
}
