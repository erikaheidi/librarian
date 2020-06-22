<?php

namespace App\Command\Web;

use Minicli\Miniweb\Provider\TwigServiceProvider;
use Minicli\Miniweb\WebController;
use Minicli\Miniweb\Response;
use Librarian\Provider\ContentServiceProvider;

class IndexController extends WebController
{
    public function handle()
    {
        /** @var TwigServiceProvider $twig */
        $twig = $this->getApp()->twig;

        $per_page = 10;
        $params = $this->getRequest()->getParams();
        $page = $params['page'] ?? 1;

        /** @var ContentServiceProvider $static_provider */
        $content_provider = $this->getApp()->content;

        $start_at = ($page * $per_page) - $per_page;

        $content_list = $content_provider->fetchAll($start_at, $per_page);
        $total_pages = $content_provider->fetchTotalPages($per_page);

        $output = $twig->render('content/index.html.twig', [
            'content_list'  => $content_list,
            'total_pages' => $total_pages,
            'current_page' => $page
        ]);

        $response = new Response($output);

        $response->output();
    }
}