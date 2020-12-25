<?php


class Uniqid
{
    /**
     * 获取一个带前缀、基于当前时间微秒数的唯一ID。
     * uniqid ([ string $prefix = "" [, bool $more_entropy = false ]] ) : string
     * @param $prefix string 前缀
     * @param $moreEntropy bool 如果为 true 会在返回的字符串结尾增加额外的熵(即无序字符串)
     * %s 是汇编语言中的格式符用来输出一个字符串
     */
    public function UniqidLearn($prefix,$moreEntropy)
    {
        printf("uniqid(): %s\r\n", uniqid()); // 输出:uniqid(): 5fe545273356f

        printf("uniqid('PHP_') %s\r\n", uniqid($prefix)); // 输出: uniqid('PHP_'):PHP_5fe54527335c8

        printf("uniqid('', true): %s\r\n", uniqid('', $moreEntropy)); // 输出: uniqid('', true):5fe54527336025.70957254
    }

}

$UniqidExample = new Uniqid();
$UniqidExample->UniqidLearn('PHP_',true);