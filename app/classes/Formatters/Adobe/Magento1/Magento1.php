<?php

namespace App\classes\Formatters\Adobe\Magento1;

use App\classes\Formatters\Adobe\Magento1\model\steps;
use App\classes\Formatters\FormatterClasses as FormatterClasses;

/**
 * INIT MAGENTO 1
 */
class Magento1 extends FormatterClasses
{
    public function __construct()
    {
        $this->apps['magento1'] = 'Magento1';
        $this->apps['logo'] = '<svg width="24" height="24" viewBox="0 0 256 303" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><path d="M144.852 90.67v172.192l-16.933 10.349-16.946-10.404V90.803l-43.878 27.016v147.255l60.824 37.217 61.339-37.482V117.725L144.852 90.67zM127.919 0L0 77.502v147.274l33.223 19.572V97.06l94.722-57.596 94.81 57.512.391.223-.042 146.929L256 224.776V77.502L127.919 0z" fill="#EC6737"/></svg>';
    }

    public function steps()
    {
        $stepClass = new steps;
        $steps = $stepClass->steps();
        //$steps = "lol";
        return $steps;
    }
}
