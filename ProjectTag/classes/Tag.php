<?php

/** PHPDoc
 * Class Tag
 * @method static Tag a(array $attributes=[])
 * @method static Tag b(array $attributes=[])
 * @method static Tag body(array $attributes=[])
 * @method static Tag head(array $attributes=[])
 * @method static Tag html(array $attributes=[])
 * @method static Tag div(array $attributes=[])
 * @method static Tag section(array $attributes=[])
 * @method static Tag ul(array $attributes=[])
 * @method static Tag ol(array $attributes=[])
 * @method static Tag li(array $attributes=[])
 * @method static Tag form(array $attributes=[])
 * @method static Tag input(array $attributes=[])
 * @method static Tag label(array $attributes=[])
 * @method static Tag link(array $attributes=[])
 * @method static Tag p(array $attributes=[])
 * @method static Tag h1(array $attributes=[])
 * @method static Tag font(array $attributes=[])
 * @method static Tag table(array $attributes=[])
 * @method static Tag textarea(array $attributes=[])
 * @method static Tag select(array $attributes=[])
 * @method static Tag img(array $attributes=[])
 */
class Tag extends BaseTag
{

    public static function make($name, $arguments=[]){
        return new self($name,$arguments);
    }
    //превращает любое название фунцкии в строку с аргументами в виде массива
    public static function __callStatic($name, $arguments){
        //var_dump($name,$arguments);

        //вызова метода с названием и аргументами
        //call_user_func([self::class,"__construct"],$name,$arguments[0]);
        array_unshift($arguments,$name);
        return call_user_func_array([self::class,"make"],$arguments);

        //return new self($name);
    }

}