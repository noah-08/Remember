<?php

/**
 * 检查类或对象是否具有该属性
 * property_exists ( mixed $class, string $property ) : bool
 */

class PropertyExists
{
    public $mine;
    private $xpto;
    static protected $test;

    static function test() {
        var_dump(property_exists('PropertyExists', 'xpto'));    // true
    }
}

var_dump(property_exists('PropertyExists','mine'));    // bool(true)
var_dump(property_exists(new PropertyExists,'mine'));       // bool(true)
var_dump(property_exists('PropertyExists', 'xpto'));  // bool(true)
var_dump(property_exists('PropertyExists','bar'));   // bool(false)
var_dump(property_exists('PropertyExists','test'));  // bool(true)

PropertyExists::test(); // bool(true)