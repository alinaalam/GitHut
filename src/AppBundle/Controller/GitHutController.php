<?php
/**
 * Created by PhpStorm.
 * User: Alina Alam
 * Date: 24/07/2017
 * Time: 17:52
 */

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GitHutController extends Controller {

    /**
     * @Route("/", name="githut")
     */
    public function githutAction(Request $request) {
        return $this->render('githut/index.html.twig');
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profileAction(Request $request) {
        return $this->render('githut/profile.html.twig', [
            'avatar_url'    => 'https://avatars2.githubusercontent.com/u/12968163?v=4',
            'name'          => 'Code Review Videos',
            'login'         => 'codereviewvideos'
        ]);
    }
}