<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class HomeController
 * @package AppBundle\Controller
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/home")
     *
     * @return Response
     * @throws \Exception
     */
    public function indexAction()
    {
        $number = random_int(0, 100);

        return $this->render("home");
    }
}