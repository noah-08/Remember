<?php

/**
 * 返回与某个特定名称的过滤器相光联的ID
 * filter_id ( string $filtername  ) : int
 */

$filters = filter_list();

foreach($filters as $filter_name) {
    echo $filter_name .": ".filter_id($filter_name) ."<br>";
}

/**
 * 输出类似:
 * int: 257
 * boolean: 258
 * float: 259
 * validate_regexp: 272
 * validate_domain: 277
 * validate_url: 273
 * validate_email: 274
 * validate_ip: 275
 * validate_mac: 276
 * string: 513
 * stripped: 513
 * encoded: 514
 * special_chars: 515
 * full_special_chars: 522
 * unsafe_raw: 516
 * email: 517
 * url: 518
 * number_int: 519
 * number_float: 520
 * magic_quotes: 521
 * add_slashes: 523
 * callback: 1024
 */