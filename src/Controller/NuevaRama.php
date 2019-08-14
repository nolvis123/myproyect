<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class NuevaRama
{
    public function index($name)
    {
        return new Response('Hello $name!');
    }

}