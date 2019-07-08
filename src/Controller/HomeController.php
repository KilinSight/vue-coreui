<?php
// src/AppBundle/Controller/HomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class HomeController
 * @package Controller
 */
class HomeController extends AbstractController
{
    /**
     * @Route(
     *     path={"/", "/{spaRouting}"},
     *     methods={"GET"},
     *     name="index_view",
     *     requirements={"spaRouting": ".*"}
     * )
     *
     * @return Response
     */
    public function indexAction(): Response
    {
        return $this->render('home/index.html.twig');
    }
}