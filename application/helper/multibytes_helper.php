<?php

/* Compatibility with multi-byte functions */

if(!function_exists("mb_strtolower"))
{
    function mb_strtolower($str)
    {
        log_message('debug', 'Compatibility (mb_strtolower) is not available, falling back to strtolower().');
        return strtolower($str);
    }
}

if(!function_exists("mb_strtoupper"))
{
    function mb_strtoupper($str)
    {
        log_message('debug', 'Compatibility (mb_strtoupper) is not available, falling back to strtoupper().');
        return strtoupper($str);
    }
}

if(!function_exists("mb_strlen"))
{
    function mb_strlen($str)
    {
        log_message('debug', 'Compatibility (mb_strlen) is not available, falling back to strlen().');
        return strlen($str);
    }
}

if(!function_exists("mb_substr"))
{
    function mb_substr($str,$start,$length = NULL)
    {
        log_message('debug', 'Compatibility (mb_substr) is not available, falling back to substr().');
        return substr($str,$start,$length);
    }
}

if(!function_exists("mb_strpos"))
{
    function mb_strpos($haystack ,$needle,$offset = 0)
    {
        log_message('debug', 'Compatibility (mb_strpos) is not available, falling back to strpos().');
        return strpos($haystack ,$needle,$offset);
    }
}
?>