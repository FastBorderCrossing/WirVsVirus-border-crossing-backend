<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;


/**
 * Class CountryController
 * @package App\Controller
 *
 * @Route("/api", name="api__")
 */
class FormController extends FOSRestController
{
    /**
     * @todo use database fields for form fields, but we need to alter the database first
     */
    private $formTemplateFields = array(
        // Germany
        ['name' => 'firstname', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'lastname', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'street', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'place', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'country', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'email', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'mobile', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'passportid', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],

        ['name' => 'companyname', 'datatype' => 'string', 'forEntity' => 'Company', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'street', 'datatype' => 'string', 'forEntity' => 'Company', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'place', 'datatype' => 'string', 'forEntity' => 'Company', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'country', 'datatype' => 'string', 'forEntity' => 'Company', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'email', 'datatype' => 'string', 'forEntity' => 'Company', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'mobile', 'datatype' => 'string', 'forEntity' => 'Company', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],

        ['name' => 'ridefrom', 'datatype' => 'string', 'forEntity' => 'Border', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'rideto', 'datatype' => 'string', 'forEntity' => 'Border', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'date', 'datatype' => 'string', 'forEntity' => 'Border', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],


        // Italy
        /*
        ['name' => 'firstname', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'lastname', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'street', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'place', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'country', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'email', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'mobile', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        ['name' => 'passportid', 'datatype' => 'string', 'forEntity' => 'Driver', 'country' => 'be604d8a-d65c-474e-b385-020cf9252452'],
        */
    );

    /**
     * @Rest\Get("/form/field/list")
     * @return Response
     */
    public function CrossAddAction(Request $request)
    {
        return $this->handleView($this->view($this->formTemplateFields));
    }
}