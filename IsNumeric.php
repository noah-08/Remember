<?php


class IsNumeric
{
    /**
     * 检测变量是否为数字或数字字符串
     * is_numeric ( mixed $var ) : bool
     * @return bool
     */
    public function __call($name, $arguments)
    {

        return is_numeric($arguments[1]); // 输出为 bool(true)
    }
}

$arguments = 18888888888;
$IsNumericExample = new IsNumeric();
var_dump($IsNumericExample->IsNumericExample('Example' ,$arguments));
