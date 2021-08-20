<?php

namespace App\Http\Controllers\Pages;

use Inertia\Inertia;
use Lit\Config\Form\Pages\TeamConfig;

class TeamController
{
    public function __invoke()
    {
        return Inertia::render('Team/Team', [
            'form' => TeamConfig::loadResourceArray(),
        ]);
    }
}
