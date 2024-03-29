<?php


namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

abstract class BaseController extends AbstractController
{
    protected function getUser(): User
    {
        return parent::getUser();
    }

    protected function getToken(Request $request)
    {
        return $request->getSession()->get('token');
    }
}