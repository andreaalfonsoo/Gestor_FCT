<?php

namespace GestorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmpresaController extends Controller
{
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('GestorBundle:Empresa');
        // find *all* empresas
        $empress = $repository->findAll();
        return $this->render('GestorBundle:Empresa:all.html.twig',array("empresas"=>$empress));
    }
}
