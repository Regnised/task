<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Crawler;
use Acme\HelloBundle\Entity\Category;
use Acme\HelloBundle\Entity\products;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        ini_set('memory_limit', '-1');
        set_time_limit(0);
        $res = simplexml_load_file('dylerprice.xml');
        foreach ($res as $catOne)
        {
            $category = new Category();
            $category->setName($catOne->name);
            $category->setNameRu($catOne->name_ru);
            $em = $this->getDoctrine()->getManager();

            foreach($catOne->attributes() as $a => $b)
            {
                if ($a == "kod") {
                    $category->setKod($b);
                }
            }
            $em->persist($category);


                foreach ($catOne as $catTwo)
                {
                    if ($catTwo->name != "" or $catTwo->name_ru != "") {

                        $category2 = new Category();
                        $category2->setName($catTwo->name);
                        $category2->setNameRu($catTwo->name_ru);
                        $category2->setParentcat($catOne->name);
                        $em = $this->getDoctrine()->getManager();

                        foreach($catTwo->attributes() as $a => $b)
                        {
                            if ($a == "kod") {
                                $category2->setKod($b);
                            }
                        }
                        $em->persist($category2);
                    }

                    foreach ($catTwo as $catThree)
                    {
                        if ($catThree->name != "" or $catThree->name_ru != "") {
                            $category3 = new Category();
                            $category3->setName($catThree->name);
                            $category3->setNameRu($catThree->name_ru);
                            $category3->setParentcat($catTwo->name);
                            $em = $this->getDoctrine()->getManager();

                            foreach($catThree->attributes() as $a => $b)
                            {
                                if ($a == "kod") {
                                    $category3->setKod($b);
                                }
                            }
                            $em->persist($category3);
                        }

                        foreach ($catThree as $product)
                        {
                            if ($product->name != "")
                            {
                                $products = new products();
                                $products->setPname($product->name);
                                $products->setPnameRu($product->name_ru);
                                $products->setFullname($product->fullname);
                                $products->setPartnumber($product->partnumber);
                                $products->setManufacturer($product->manufacturer);
                                $products->setProductcategory($catThree->name);
                                $em = $this->getDoctrine()->getManager();

                                foreach($product->attributes() as $a => $b)
                                    {
                                        switch ($a) {
                                            case "kod":
                                                $products->setKod($b);;
                                            case "garant":
                                                $products->setGarant($b);;
                                            case "cena_dyler":
                                                $products->setCenaDyler($b);;
                                            case "cena_gurt":
                                                $products->setCenaGurt($b);;
                                            case "cena_dribnyj_gurt":
                                                $products->setCenaDribnyjGurt($b);;
                                            case "cena_rozdrib":
                                                $products->setCenaRozdrib($b);;
                                            case "ostatok_lviv":
                                                $products->setOstatokLviv($b);;
                                            case "ostatok_kyyiv":
                                                $products->setOstatokKyyiv($b);;
                                            case "ostatok_odesa":
                                                $products->setOstatokOdesa($b);
                                        }
                                    }
                                $em->persist($products);
                            }
                        }
                    }
                }

        }
        $em->flush();
        return $this->render('MagazHelloBundle:Default:index.html.twig');
    }

/*    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $category = new Category();
//        $category->setName();
//        $category->setNameRu();
//        $category->setKod();
//        $category->setParentcat();
//
//        $form = $this->createFormBuilder($task)
//            ->add('Name', 'text')
//            ->add('NameRu', 'text')
//            ->add('Kod', 'integer')
//            ->add('Parentcat', 'text')
//            ->getForm();

        $form = $this->createFormBuilder($category)
            ->add('name', 'entity', array(
            'class' => 'MagazHelloBundle:Category',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.name', 'ASC');
            },
        ));
        return $this->render('AcmeTaskBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }*/

    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $category = new Category();
        $category->setName('Write a blog post');
        $category->setNameRu('tomorrow12');
        $category->setKod(123);
        $category->setParentcat('1234');


        $form = $this->createFormBuilder($category)
            ->add('Name', 'text')
            ->add('NameRu', 'text')
            ->add('Kod', 'integer')
            ->add('Parentcat', 'text')
            ->add('name', 'entity', array(
            'class' => 'MagazHelloBundle:Category',
            'property' => 'name',
        ))
            ->getForm();

        return $this->render('MagazHelloBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
