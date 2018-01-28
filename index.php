<?php
if(file_exists('install.lock')){
    echo '檔案存在';
}else{
    if(!is_dir('install')) {
        echo '安裝檔案已經遺失，請從官方網站下載一份<br>';
    } else {
        $path_parts = pathinfo($_SERVER[PHP_SELF]);
        echo preg_replace("\\",'/',$path_parts['dirname']);
    }
}