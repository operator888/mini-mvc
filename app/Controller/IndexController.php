<?php
/**
 * Created by IntelliJ IDEA.
 * User: mchristlieb
 * Date: 03.12.17
 * Time: 16:34
 */

namespace App\Controller;

class IndexController extends Controller
{
    public function index()
    {
        echo $this->twig->render('index.twig', ['name' => 'World']);
    }
}
