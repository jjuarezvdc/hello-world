<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{ 
    public function index(){
        return new Response('
            <html>
                <body>
                    <h1>Hello Symfony 4  rama chingona</h1>
                    <h1>Hello Symfony 4  World. sucediendo en master?</h1>
                    <h2>Podremos pasar esto a master?</h2>
                </body>
                <footer>
                    tex(esto solo esta en foobaz)to
                </footer>
            </html>
        ');
    }
}