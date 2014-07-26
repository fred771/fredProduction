<?php
 
namespace Twig\TwigBundle;
 
use Symfony\Component\HttpKernel\Bundle\Bundle;
 
class TwigTwigBundle extends Bundle
{
    public function getParent()
    {
        return 'TwigBundle';
    }
}
