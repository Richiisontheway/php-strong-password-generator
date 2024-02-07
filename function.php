<?php
    function generate_password(){
        $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
                    '0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\|';
        
        $str = '';
        $max = strlen($chars) - 1;
        
        for ($i=0; $i < $_GET['lenght']; $i++)
            $str .= $chars[mt_rand(0, $max)];
        
        return $str;
    }