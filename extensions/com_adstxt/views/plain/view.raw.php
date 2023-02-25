<?php

class AdstxtViewPlain extends JViewLegacy
{
    public function display($tpl = null) {
        $file = JPATH_SITE . '/images/ads.txt';

        if (file_exists($file)) {
            echo "# static\n";
            echo preg_replace("~\r\n?~", "\n", file_get_contents($file));
        }
        
        $handle = fopen ("https://yieldlove.com/ads.txt", "r");
        
        if (!$handle) exit;
        
        echo "# dynamic\n";
        while (($line = fgets($handle)) !== false) {
            if (preg_match("/^\s+$/", $line) or preg_match("/^#/", $line)) continue;
            echo $line;
        }
        
        fclose($handle);
    }
}
