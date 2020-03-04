<?php

/**
 * Created by PhpStorm.
 * User: бейсеевс
 * Date: 11.02.2020
 * Time: 15:53
 */
class Link extends BaseTag
{
    function __construct(array $attributes = [])
    {
        parent::__construct('a',$attributes);
    }
    public function href($url){
        return $this->setAttributes('href',$url);
    }
}