<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class NuevaRama
{
    public function index()
    {
        return new Response('Hello $name!');
    }
    public function porciento()
    {
        return new Response('Calcular porciento!');
    }

}