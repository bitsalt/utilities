<?php
/**
 * Created by BitSalt Digital LLC
 * Author: BitSalt
 * Date: 2019-01-02
 * Time: 07:52
 */
class AutoVersion {
    
    public static function version($filePath) {
        if(strpos($filePath, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $filePath)) {
            return $filePath;
        }
        
        $modTime = filemtime($_SERVER['DOCUMENT_ROOT'] . $filePath);
        
        return preg_replace('{\\.([^./]+)$}', ".$modTime.\$1", $filePath);
    }
}
