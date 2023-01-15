<?php
declare(strict_types=1);

namespace CustomEditablesBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FrontendController
{
    /**
     * @Route("/custom_editables")
     */
    public function indexAction(Request $request)
    {
        return new Response('Hello world from custom_editables');
    }
}
