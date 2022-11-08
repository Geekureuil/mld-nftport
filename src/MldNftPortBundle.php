<?php

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class MldNftPortBundle extends AbstractBundle
{
    
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
    
}