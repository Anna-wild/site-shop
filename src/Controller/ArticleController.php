<?php
/**
 * Created by PhpStorm.
 * User: OMEN-666
 * Date: 12.05.2018
 * Time: 9:08
 */

namespace App\Controller;


use App\Entity\Order;
use App\Entity\SingleOrder;
use App\Form\OrderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
public function homepage()
{
    return $this->render('base.html.twig',[]);
}

    /**
     * @Route("/contacts",name="contacts")
     */
public function show()
{
    return $this->render('contacts.html.twig',[]);
}
    /**
     * @Route("/registration", name="registration")
     */
    public function registration(Request $request){
        $entityManager=$this->getDoctrine()->getManager();

    $form=$this->createForm(OrderType::class);
    $form->handleRequest($request);//відправка даних на сервер
    if ($form->isSubmitted()&& $form->isValid()){
      $data=$form->getData();
      dump($data);

      $order=new SingleOrder();
      $order->setName($data->getName());
      $order->setNumber($data->getNumber());
      $order->setEmail($data->getEmail());
      $order->setProductName($data->getProductName());

      $entityManager->persist($order);
      $entityManager->flush();


    }

        return $this->render('registration.html.twig', [
            'form' => $form->createView()
        ]);
    }
}