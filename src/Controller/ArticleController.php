<?php
/**
 * Created by PhpStorm.
 * User: OMEN-666
 * Date: 12.05.2018
 * Time: 9:08
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
public function homepage()
{
    return $this->render('base.html.twig',[]);
}

    /**
     * @Route("page/{slug}")
     */
public function show($slug)
{
    return $this->render('show.html.twig', [
        'title' => ucwords(str_replace('-', ' ', $slug)),
        ]);
}
}