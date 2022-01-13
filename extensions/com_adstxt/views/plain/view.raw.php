<?php

class AdstxtViewPlain extends JViewLegacy
{
    public function display($tpl = null) {
        $handle = fopen ("https://yieldlove.com/ads.txt", "r");
        
        if (!$handle) exit;
        
        while (($line = fgets($handle)) !== false) {
            if (preg_match("/^\s+$/", $line) or preg_match("/^#/", $line)) continue;
            echo $line;
        }
        
        fclose($handle);
    }
}
