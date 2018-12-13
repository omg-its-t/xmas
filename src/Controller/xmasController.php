<?php

namespace Drupal\xmas\Controller;

use Symfony\Component\HttpFoundation\Response;

class xmasController{

    public function greet($name){
        return new Response("Merry Christmas $name");
    }
}