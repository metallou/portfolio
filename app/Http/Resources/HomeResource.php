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
      ->addData('address', '75 rue Sauveur Tobelem, 13007 Marseille')
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
      $a['endDate'] = array_key_exists('endDate', $a)
          ? Date::parse($a['endDate'], $tz)->format('F Y')
          : null;

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
      array(
        'type' => 'EXPERIENCE',
        'name' => 'Jalis',
        'title' => 'Développeur web',
        'location' => 'Marseille',
        'techs' => [
          'PHP (vanilla, Symfony + bundles, phpunit)',
          'TypeScript (Bootstrap, Vue)
          'HTML (Bootstrap)',
          'CSS (SCSS, Bootstrap)',
          'Git (GitHub, actions CI/CD)',
        ],
        'startDate' => '2018-11',
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
        'name' => 'L\'Aberration',
        'startDate' => '2016-10-1',
        'github' => 'https://github.com/metallou/journal',
        'url' => 'https://metallou.github.io/journal',
        'image' => 'journal.png',
        'description' => 'Projet d\'entrée de formation',
        'techs' => [
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'Halloween',
        'startDate' => '2016-10-27',
        'github' => 'https://github.com/metallou/movie-poster',
        'url' => 'https://metallou.github.io/movie-poster',
        'image' => 'movie-poster.png',
        'description' => 'Projet de formation: affiche de film',
        'techs' => [
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'CSS Framework',
        'startDate' => '2016-11-16',
        'github' => 'https://github.com/metallou/CSS-framework',
        'url' => 'https://metallou.github.io/CSS-framework',
        'image' => 'CSS-framework.png',
        'description' => 'Projet de formation: création d\'un framework CSS',
        'techs' => [
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'Parcs et Jardins',
        'startDate' => '2017-01-27',
        'github' => 'https://github.com/metallou/parcs-jardins',
        'url' => 'https://metallou.github.io/parcs-jardins',
        'image' => 'parcs-jardins.png',
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
        'github' => 'https://github.com/metallou/demoscript',
        'url' => 'https://demoscript.herokuapp.com',
        'image' => 'demoscript.png',
        'description' => 'Projet de fin de formation',
        'techs' => [
          'JavaScript (NodeJS, jQuery)',
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'Aquabellum',
        'startDate' => '2017-02-26',
        'github' => 'https://github.com/metallou/aquabellum',
        'url' => 'https://metallou.github.io/aquabellum',
        'image' => 'aquabellum.png',
        'description' => 'Projet d\'afterwork de la formation',
        'techs' => [
          'JavaScript',
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'Trombinoscope',
        'startDate' => '2016-11-24',
        'github' => 'https://github.com/metallou/trombino',
        'url' => 'https://metallou.github.io/trombino',
        'image' => 'trombino.png',
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
        'github' => 'https://github.com/metallou/ISS-live',
        'url' => 'https://metallou.github.io/ISS-live',
        'image' => 'ISS-live.png',
        'description' => 'Projet de formation: Utilisation d\'API',
        'techs' => [
          'JavaScript',
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'SIMPLe Trip to MARS',
        'startDate' => '2016-12-06',
        'github' => 'https://github.com/metallou/SIMPLe-graphics',
        'url' => 'https://metallou.github.io/SIMPLe-graphics',
        'image' => 'SIMPLe-graphics.png',
        'description' => 'Projet de formation: application graphique',
        'techs' => [
          'JavaScript',
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'Sausage Kittens',
        'startDate' => '2016-11-03',
        'github' => 'https://github.com/metallou/roman-photo',
        'url' => 'https://metallou.github.io/roman-photo',
        'image' => 'roman-photo.png',
        'description' => 'Projet de formation: roman photo',
        'techs' => [
          'HTML',
          'CSS',
        ],
      ),
      array(
        'name' => 'Portfolio',
        'startDate' => '2018-10-18',
        'github' => 'https://github.com/metallou/portfolio',
        'url' => 'https://kevin-castejon.herokuapp.com',
        'image' => 'portfolio.png',
        'description' => 'Site de présentation',
        'techs' => [
          'PHP (Laravel)',
          'JavaScript (jQuery)',
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
        'Synfony',
        'Doctrine',
        'VueJS',
        'TypeScript',
        'Xunit',
        'webpack',
      ],
      'Système' => [
        'Git (shell, GitHub)',
        'Linux (shell)',
        'PhpStorm, Vim, DataGrip',
      ],
      'Autres' => [
        'mRemoteNG'
        'Bitwarden',
        'Discord',
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
