
<?php

class  jobs{
    public function jobMenuVisible(){
        /// hol dir den status aus dem Json und counte wenn null dann nix wenn mehr als null dann etwas
        /// 
        // get content form json file content/job_info.json via system/json_files.php 
        $data = file_get_contents($GLOBALS['json']['jobs'], true);
        // JSON decode
        $obj = json_decode($data);

        /// zähle die einträge in den json file
        $count = count($obj);

        $real_count = $count-1; 
        /// Setzte den default counter 
        $default_counter = -1;
        $number = 0;
        $alleFalse = false;

        while ($default_counter < $real_count) {
            $i = $default_counter++;

            $values_active =  $obj[$default_counter]->active;

            if($values_active == 'true'){
                $number++;

            }
            
        }
        if($number > '0'){
            return true;
        }
    }
}
?>