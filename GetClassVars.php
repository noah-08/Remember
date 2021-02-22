<?php

class GetClassVars
{
    var $var1; // this has no default value...
    var $var2 = "xyz";
    var $var3 = 100;
    private $var4;

    // constructor
    function __construct()
    {
        // change some properties
        $this->var1 = "foo";
        $this->var2 = "bar";
        return true;
    }
}

/**
 * 返回由类的默认属性组成的数组
 * get_class_vars ( string $class_name ) : array
 */
$my_class = new GetClassVars();
$class_vars = get_class_vars(get_class($my_class));
foreach ($class_vars as $name => $value) {
    echo "$name : $value \n";   // 输出: var1 :   var2 : xyz  var3 : 100
}