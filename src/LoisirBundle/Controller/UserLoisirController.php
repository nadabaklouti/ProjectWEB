<?php
/**
 * Created by PhpStorm.
 * User: Pirateos
 * Date: 15-Feb-19
 * Time: 13:25
 */

namespace LoisirBundle\Controller;


class UserLoisirController extends Conroller
{
    public function add_briAction()
    {
        return $this->render('@Loisir/Default/Bricolage.html.twig');
    }
}