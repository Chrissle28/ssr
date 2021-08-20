<?php

namespace Lit\Config\Form\Pages;

use Ignite\Crud\Config\FormConfig;
use Ignite\Crud\CrudShow;
use Lit\Http\Controllers\Form\Pages\TeamController;

class TeamConfig extends FormConfig
{
    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = TeamController::class;

    /**
     * Form route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return "pages/team";
    }

    /**
     * Form singular name. This name will be displayed in the navigation.
     *
     * @return array
     */
    public function names()
    {
        return [
            'singular' => 'Team',
        ];
    }

    /**
     * Setup form page.
     *
     * @param \Lit\Crud\CrudShow $page
     * @return void
     */
    public function show(CrudShow $page)
    {
        $page->card(function($form) {

            $form->input('text');

            // ...
        });
    }
}
