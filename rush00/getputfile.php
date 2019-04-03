<?php

//filename ex: users, items, panier

function getfile($filename)
{
    $pathfile = "htdocs/private/".$filename;
    if (file_exists($pathfile) == TRUE)
    {
        if (($filestr = file_get_contents($pathfile)) !== FALSE)
        {
            if (($file = unserialize($filestr)) !== FALSE)
            return $file;
        }
    }
}

function putfile($filename, $content)
{
    if (file_exists("htdocs") == FALSE)
        mkdir("htdocs");
    if (file_exists("htdocs/private") == FALSE)
        mkdir("htdocs/private");
    $pathfile = "htdocs/private/".$filename;
    if (($filestr = serialize($content)) !== FALSE)
    {
        if (file_put_contents($pathfile, $filestr) == FALSE)
            return FALSE;
        return TRUE;
    }
}

?>