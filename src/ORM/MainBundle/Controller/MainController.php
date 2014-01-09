<?php

namespace ORM\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityRepository as ER;

class MainController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('ORMMainBundle:Person');

        $id = 578;

        $person = $repository->fBirth("01/01/1940");

        var_dump($person);

        /*
        $person = $repository->findBy(
            array(
                'birth' => "01/01/1945",
            )
        );



        if($person === null)
        {
            throw $this->createNotFoundException('Person[id='.$id.'] does not exist.');
        }
        */

       return $this->render('ORMMainBundle:Main:index.html.twig',
            array(
                'person' => $person
            ));
    }
}