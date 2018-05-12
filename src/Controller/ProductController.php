<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    /**
     * @Route("/product", name="product")
     */
    public function index()
    {
        $product=$this->getDoctrine()
            ->getRepository(Product::class)
            ->findAll();
       // dump($product);

        return $this->render('product/index.html.twig', [
            'product' => $product,
        ]);
    }
    /**
     * @Route("/product/{id}",name="details")
     */
    public function details($id){
        $product=$this->getDoctrine()
    ->getRepository(Product::class)
            ->find($id);
       // dump($product);
        return $this->render("product/details.html.twig", [
            'product'=>$product
        ]);
    }
}
