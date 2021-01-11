<?php


class NatCaseSort
{

    /**
     * 用"自然排序"算法对数组进行不区分大小写字母的排序
     * natcasesort ( array &$array ) : bool
     * @param $array1
     * @param $array2
     */
    public function NatCaseSortLearn($array1, $array2)
    {
        sort($array1);
        print_r($array1);   // Array ( [0] => IMG0.png [1] => IMG3.png [2] => img1.png [3] => img10.png [4] => img12.png [5] => img2.png )

        natcasesort($array2);
        print_r($array2);   // Array ([0] => IMG0.png [4] => img1.png [3] => img2.png [5] => IMG3.png [2] => img10.png [1] => img12.png )
    }

}

$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');
$NatCaseSortExample = new NatCaseSort();
$NatCaseSortExample->NatCaseSortLearn($array1, $array2);