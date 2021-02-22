<?php

// 说明: interface_exists ( string $interface_name [, bool $autoload = true ] ) : bool

// 在尝试使用前先检查接口是否存在
if (interface_exists('MyInterface')) {
    class InterfaceExists implements MyInterface
    {
        // Methods
    }
}