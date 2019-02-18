<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function redirectuserAction()
    {
        $user=$this->getUser()->getId();
        return $this->render('@User/Default/index.html.twig',array("user"=>$user));
    }

    public function redirectadminAction()
    {
        return $this->render('@User/Default/Admin_HomePage.html.twig');
    }


    public function loginnAction()
    {
        return $this->render('@FOSUser/Security/login_content.html.twig');
    }
}
