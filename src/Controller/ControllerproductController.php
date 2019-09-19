<?php

namespace App\Controller;

use App\Entity\Task;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Type\TaskType;
use Symfony\Component\HttpFoundation\Request;

class ControllerproductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */

    public function index(Request $request)
    {

//         $form = $this->createForm(TaskType::class, $task);


//        return $this->render('product/index.html.twig', [
//        'form' => $form->createkView(),
//         'controller_name' => 'ControllerproductController',
//
//        ]);
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $products = $repository->findAll();
        dump($products);


        return $this->render('product/index.html.twig', [
            'controller_name' => 'ControllerproductController',
            'product' => $products,
        ]);
    }
}
