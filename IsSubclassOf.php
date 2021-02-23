<?php

/**
 * 如果此对象是该类的子类,则返回 true
 * is_subclass_of ( object $object, string $class_name ) : bool
 */

// define a class
class WidgetFactory
{
    var $oink = 'moo';
}

// define a child class
class WidgetFactory_Child extends WidgetFactory
{
    var $oink = 'oink';
}

// create a new object
$WF = new WidgetFactory();
$WFC = new WidgetFactory_child();

if (is_subclass_of($WFC, 'WidgetFactory')) {
    echo "yes, \$WFC is a subclass of WidgetFactory\n";
} else {
    echo "no, \$WFC is not a subclass of WidgetFactory\n";
}

if (is_subclass_of($WF, 'WidgetFactory')) {
    echo "yes, \$WF is a subclass of WidgetFactory\n";
} else {
    echo "no, \$WF is not a subclass of WidgetFactory\n";
}

// 仅在 PHP 5.0.3 后使用
if (is_subclass_of('WidgetFactory_Child', 'WidgetFactory')) {
    echo "yes,WidgetFactory_Child is a subclass of WidgetFactory\n";
} else {
    echo "no, WidgetFactory_Child is not a subclass of WidgetFactory\n";
};

// 输出:
// yes, $WFC is a subclass of WidgetFactory
// no, $WF is not a subclass of WidgetFactory
// yes, WidgetFactory_child is a subclass of WidgetFactory