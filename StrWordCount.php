<?php


class StrWordCount
{

    /**
     * 返回字符串中的单词
     * str_word_count ( string $string [, int $format = 0 [, string $charlist ]] ) : mixed
     * @param $string string 目标字符串
     * @param $format int    指定函数的返回值 0:返回单词数量 1:返回一个包含 string 中全部单词的数组 2:返回关联数组。数组的键是单词在 string 中出现的数值位置，数组的值是这个单词
     * @param $charlist string 附加的字符串列表,其中的字符将被视为单纯的一部分.
     */
    public function StrWordCountLearn($string,$format)
    {
        print_r(str_word_count($string, $format)); // 输出: Array ( [0] => Hello [1] => fri [2] => nd [3] => you're [4] => looking [5] => good [6] => today [7] => fuck [8] => for [9] => real )

        print_r(str_word_count($string, $format)); // 输出: Array ( [0] => Hello [1] => fri [2] => nd [3] => you're [4] => looking [5] => good [6] => today [7] => fuck [8] => for [9] => real)

        print_r(str_word_count($string, $format, '3')); // 输出: Array ( [0] => Hello [1] => fri3nd [2] => you're [3] => looking [4] => good [5] => today [6] => fuck [7] => for [8] => real )

        echo str_word_count($string); // 输出: 10
    }
}

$string = "Hello fri3nd, you're looking good today! fuck for real ";
$StrWordCountExample = new StrWordCount();
$StrWordCountExample->StrWordCountLearn($string,1);