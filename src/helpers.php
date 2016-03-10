<?php

if(!function_exists ('dsalert'))
{
    function dsalert($title = null, $message = null)
    {
        $flash = app('danielestefanucci\dsAlert\Flash');
        if (func_num_args() == 0) {
            return $flash;
        }
        return $flash->info($title, $message);
    }
}