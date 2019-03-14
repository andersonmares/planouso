<?php
/**
 * Created by PhpStorm.
 * User: fabio.teixeira
 * Date: 31/01/2018
 * Time: 19:37
 */

namespace AppBundle\Twig;


class AppExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('ucwords', 'ucwords')
        ];
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('ucwords', 'ucwords')
        ];
    }

    public function getName()
    {
        return 'ext.ucwords';
    }
}