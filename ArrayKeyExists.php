<?php


class ArrayKeyExists
{

    /**
     * 检查数组里是否有指定的键名或索引
     * array_key_exists ( mixed $key , array $array ) : bool
     * @param $SearchArray array 目标数组
     */
    public function ArrayKeyExistsLearn($SearchArray)
    {
        if (array_key_exists('first', $SearchArray)) {
           echo "The 'first' element is in the array\n";    // 输出: The 'first' element is in the array
        }

        $SearchArray = array('first' => null, 'second' => 4);

        // array_key_exists() 与 isset() 的对比

        //  return bool(false)
        var_dump(isset($SearchArray['first']));

        //  return bool(true)
        var_dump(array_key_exists('first',$SearchArray));
    }

}

$SearchArray = array('first' => 1, 'second' => 4);
$ArrayKeyExistsExample = new ArrayKeyExists();
$ArrayKeyExistsExample->ArrayKeyExistsLearn($SearchArray);