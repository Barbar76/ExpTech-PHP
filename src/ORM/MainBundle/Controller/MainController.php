<?php

namespace ORM\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityRepository as ER;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('ORMMainBundle:Main:index.html.twig');
    }

    public function countAction()
    {
        $persRepo = $this->getDoctrine()->getRepository('ORMMainBundle:Person')->CountAll()[0][1];

        $addRepo = $this->getDoctrine()->getRepository('ORMMainBundle:Address')->CountAll()[0][1];

        $citiesRepo = $this->getDoctrine()->getRepository('ORMMainBundle:GdCities')->CountAll()[0][1];

        $countriesRepo = $this->getDoctrine()->getRepository('ORMMainBundle:GdCountries')->CountAll()[0][1];

        $regionsRepo = $this->getDoctrine()->getRepository('ORMMainBundle:GdRegions')->CountAll()[0][1];

        return $this->render('ORMMainBundle:Main:count.html.twig',
            array(
                'person' => $persRepo,
                'address' => $addRepo,
                'cities' => $citiesRepo,
                'countries' => $countriesRepo,
                'regions' => $regionsRepo,
            ));
    }

    public function getbydateAction()
    {
        $detail = "Compte le nombre de personnes nées le 01/01/1940";

        $start = round(microtime(true) * 1000);

        $repository = $this->getDoctrine()->getRepository('ORMMainBundle:Person');

        $person = $repository->CountByBirthDate("01/01/1940");

        if($person === null)
        {
            throw $this->createNotFoundException('Person does not exist.');
        }

        return $this->render('ORMMainBundle:Main:getbydate.html.twig',
            array(
                'person' => $person[0][1],
                'time' => round(microtime(true) * 1000) - $start,
                'details' => $detail,
            ));
    }
}