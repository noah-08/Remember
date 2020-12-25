<?php


class Getcwd
{
    /**
     * 取得当前工作目录
     * getcwd ( void ) : string
     */
    public function GetcwdLearn()
    {
        echo getcwd() . "\n"; // 输出类似: E:\phpstudy_pro\WWW\remember

        chdir('cvs');

        echo getcwd() . "\n"; // 输出类似: E:\phpstudy_pro\WWW\remember\cvs
    }

}

$GetcwdExample = new Getcwd();
$GetcwdExample->GetcwdLearn();