<?php
    // get_called_class 后期静态绑定 ("Late Static Binding") 类的名称
    // get_called_class () : string
    class foo {
        static public function test()
        {
            var_dump(get_called_class());
        }
    }

    class bar extends foo {
    }

    foo::test(); // 输出: string(3) "foo"
    bar::test(); // 输出: string(3) "bar"