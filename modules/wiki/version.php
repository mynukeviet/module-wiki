<?php

/**
 * @Project NUKEVIET 4.x
 * @Author mynukeviet (contact@mynukeviet.com)
 * @Copyright (C) 2018 mynukeviet. All rights reserved
 * @Createdate Mon, 19 Mar 2018 07:49:37 GMT
 */

if (!defined('NV_MAINFILE')) die('Stop!!!');

$module_version = array(
    'name' => 'Wiki',
    'modfuncs' => 'main,detail,search',
    'change_alias' => 'main,detail,search',
    'submenu' => 'main,detail,search',
    'is_sysmod' => 0,
    'virtual' => 1,
    'version' => '1.0.00',
    'date' => 'Mon, 19 Mar 2018 07:49:37 GMT',
    'author' => 'mynukeviet (contact@mynukeviet.com)',
    'uploads_dir' => array(
        $module_name
    ),
    'note' => ''
);