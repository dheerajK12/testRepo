<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class SignupController extends AbstractController
{
    /**
     * @Route("/signup", name="signup")
     */
    public function index(Request $request)
    {
        $username=$request->query->get("username");
        $email=$request->query->get("email");
        return $this->render('signup/signup.html.twig',["username"=>$username,"email"=>$email]);
    }
}
?>
