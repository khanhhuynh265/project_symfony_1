<?php

namespace App\Controller;

use App\Entity\Task;
use App\Entity\Product;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\Exception\RedirectionException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Type\TaskType;
use Symfony\Component\HttpFoundation\Request;

class ControllerproductController extends AbstractController
{
    /**
     * @Route("/product", name="product_index")
     */

    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $products = $repository->findAll();



        return $this->render('product/index.html.twig', [
            'controller_name' => 'ControllerproductController',
            'product' => $products,
        ]);
    }

    /**
     * @Route("/product/add", name="product_add",)
     */

    public function add(Request $request)
    {

        $form = $this->createFormBuilder()
            ->add('ten', TextType::class)
            ->add('gia', TextType::class)
            ->add('soluong', TextType::class)
            ->add('loai', EntityType::class,
                array(
                    'class' => \App\Entity\Loaisanpham::class,
                    'choice_label' => 'tenloai',
                    'choice_value' => 'id')
            )
            ->add('giakhuyenmai', TextType::class)
            ->add('khuyenmai', CheckboxType::class)
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

        $getManager = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setTen($data['ten']);
        $product->setGia($data['gia']);
        $product->setSoluong($data['soluong']);

        $product->setLoai($data['loai']->getId());
        $product->setGia($data['giakhuyenmai']);
        $product->setTen($data['khuyenmai']);

        //tell to save product
        $getManager->persist($product);
        $getManager-> flush();//save

        $req = new RedirectResponse('/product');
        $req->prepare($request);// refresh

        return $req->send();
    }
        return $this->render('product/add.html.twig', [
        'form' => $form->createView(),
        ]);

    }

}
