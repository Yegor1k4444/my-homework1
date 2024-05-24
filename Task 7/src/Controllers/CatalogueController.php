<?php

namespace Iplague\Project\Controllers;

use Iplague\Project\Viewer;

class CatalogueController
{
    public function index(): void
    {
        $page = 'catalogue';
        $title = 'Catalogue Page';
        $content = 'Hello! Its Catalogue page';

        $view = new Viewer(
            [
                'page' => $page,
                'title' => $title,
                'content' => $content,
            ]
        );

        $view->render();
    }

}