<?php

namespace App\Command\Web;

use Librarian\Provider\ContentServiceProvider;
use Minicli\Miniweb\Response;
use Minicli\Miniweb\WebController;
use Twig\Environment;

class LiveController extends WebController
{
    public function handle()
    {
        /** @var Environment $twig */
        $twig = $this->getApp()->twig;
        /** @var ContentServiceProvider $static_provider */
        $content_provider = $this->getApp()->content;
        $content_list = $content_provider->fetchFrom('_l');

        $output = $twig->render('content/live.html.twig', [
            'past_streams' => $content_list
        ]);

        $response = new Response($output);

        $response->output();
    }

}