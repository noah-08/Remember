<?php

/**
 * 获取变量的布尔值
 * boolval( mixed $value ) : bool
 * 返回 value 的 bool 值
 */

echo '0:    '.(boolval(0) ? 'true' : 'false' )."\n";    // 输出 0:    false
echo '42:   '.(boolval(42) ? 'true' : 'false')."\n";    // 输出 42:   true
echo '0.0:      '.(boolval(0.0) ? 'true' : 'false')."\n";   //  输出  0.0:    false
echo '4.2:      '.(boolval(4.2) ? 'true' : 'false')."\n";   //  输出  4.2:    true
echo '"":       '.(boolval("") ? 'true' : 'false')."\n";    //  输出  "":     false
echo '"string": '.(boolval("string") ? 'true' : 'false')."\n";  // 输出 "string":   true
echo '"0":      '.(boolval("0") ? 'true' : 'false')."\n";   //  输出  "0":    false
echo '"1":      '.(boolval("1") ? 'true' : 'false')."\n";   //  输出  "1":    true
echo '[1, 2]:   '.(boolval([1, 2]) ? 'true' : 'false')."\n";    //  输出  [1,2]:  true
echo '[]:       '.(boolval([]) ? 'true' : 'false')."\n";        //  输出  []:     false
echo 'stdClass: '.(boolval(new stdClass) ? 'true' : 'false')."\n";  // 输出 stdClass: true
