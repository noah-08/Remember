<?php


class Key
{
    /**
     * 从关联数组中取得键名
     * key ( array $array ) : mixed
     * @param $array array 目标数组
     */
    public function KeyLearn($array)
    {
        while ($fruit_name = current($array)) {
            if ($fruit_name == 'apple') {
                echo key($array)."\n"; // 输出: fruit1 fruit4 fruit5
            }
            next($array);
        }
    }

}

$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple'
);
$KeyExample = new Key();
$KeyExample->KeyLearn($array);