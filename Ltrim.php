<?php


class Ltrim
{

    /**
     * 删除目标字符串开头的空白字符 (或者指定的其他字符)
     * ltrim ( string $str , string $character_mask = ? ) : string
     * @param $text     string  目标字符串
     * @param $split    string  你指定删除的字符
     */
    public function LtrimLearn($text, $split)
    {
        var_dump(ltrim($text, $split)); // 输出: string(7) "o world"
    }

}

$text = "hello world";
$LtrimExample = new Ltrim();
$LtrimExample->LtrimLearn($text, 'hdle');