<?php
    function generate_password($length){
        $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
                    '0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\|';
        
        $str = '';
        $max = strlen($chars) - 1;
        
        for ($i=0; $i < $length; $i++)
            $str .= $chars[mt_rand(0, $max)];
        return $str;
    }
?>