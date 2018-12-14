<?php

namespace Drupal\xmas\Controller;

use Symfony\Component\HttpFoundation\Response;
use Drupal\xmas\XmasServices\HelloGenerator;

class xmasController{

    public function greet($name){

        $helloGenerator = new HelloGenerator();
        $hello = $helloGenerator->getHello($name);

        return new Response($hello);
    }
}