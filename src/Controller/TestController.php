<?php
namespace App\Controller;


class TestControleler
{
    public function index()
    {
        dd("ça fonctionne");
    }

    /**
    *@Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"}, 
    * host="localhost", schemes={"http", "https"} )
    */
    public function test(Request $Request)
    {
        return new Response("Vous avez $age ans !")
    }
}