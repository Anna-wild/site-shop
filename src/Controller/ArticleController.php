<?php
/**
 * Created by PhpStorm.
 * User: OMEN-666
 * Date: 12.05.2018
 * Time: 9:08
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
public function homepage()
{
    return new Response("my response");
}

    /**
     * @Route("page/{slug}")
     */
public function show($slug)
{
return new Response(sprintf(
    'Future page to show the article: "%s"',
    $slug
));
}
}