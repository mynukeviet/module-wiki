<?php

/**
 * @Project NUKEVIET 4.x
 * @Author mynukeviet (contact@mynukeviet.com)
 * @Copyright (C) 2018 mynukeviet. All rights reserved
 * @Createdate Mon, 19 Mar 2018 07:49:37 GMT
 */

if (!defined('NV_IS_MOD_WIKI')) die('Stop!!!');

$url = array();

$cacheFile = NV_LANG_DATA . '_Sitemap_' . NV_CACHE_PREFIX . '.cache';
$pa = NV_CURRENTTIME - 7200;

if (($cache = $nv_Cache->getItem($module_name, $cacheFile)) != false and filemtime(NV_ROOTDIR . '/' . NV_CACHEDIR . '/' . $module_name . '/' . $cacheFile) >= $pa) {
    $url = unserialize($cache);
} else {
    /*$sql = 'SELECT alias, add_time FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE status=1';
     $result = $db->query( $sql );
     while ( list( $alias, $publtime ) = $result->fetch( 3 ) )
     {
     $url[] = array(
     'link' => NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $alias,
     'publtime' => $publtime
     );
     }*/
    
    $cache = serialize($url);
    $nv_Cache->setItem($module_name, $cacheFile, $cache);
}

nv_xmlSitemap_generate($url);
die();