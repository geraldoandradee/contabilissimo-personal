<?php

use Contabilissimo\Library\Routers\Route;

return [
  'settings' => [
    // router settings
    'routes' => [
      // personal app
      new Route('GET', '/personal', 'personal-home', 'Contabilissimo\Personal\Controllers\HomeController::index'),
      new Route('GET', '/personal/cards', 'personal-cards', 'Contabilissimo\Personal\Controllers\CardController::index'),
    ],
  ],
];
