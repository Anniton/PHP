<?php
include_once('getputfile.php');

function additem($ref, $name, $photo, $price, $color, $qty)
{
    if (($items = getfile("items")) != FALSE)
    {
        foreach ($items as $key => $value)
        {
            if ($value["ref"] === $ref)
            {
                echo "ERROR A1\n";
                return FALSE;
            }
        }
    }
    $item = array("ref" => $ref, "name" => $name, "photo" => $photo, "price => $price", "color" => $color, "qty" => $qty);
    $items[] = $item;
    if (putfile("items", $items) == FALSE)
    {
        echo "ERROR A2\n";
        return FALSE;
    }
    echo "OK\n";
    return TRUE;
}

function moditem($ref, $name, $photo, $price, $color, $qty)
{
    if (($items = getfile("items")) != FALSE)
    {
        foreach ($items as $key => $value)
        {
            if ($value["ref"] === $ref)
            {
                //modif
                $item = array("ref" => $ref, "name" => $name, "photo" => $photo, "price => $price", "color" => $color, "qty" => $qty);
                $items[$key] = $item;
                if (putfile("items", $items) == FALSE)
                {
                    echo "ERROR B1\n";
                    return FALSE;
                }
                echo "OK\n";
                return TRUE;
            }
        }
        echo "ERROR B2\n";
        return FALSE;
    }
}

function delitem($ref)
{
    if (($items = getfile("items")) != FALSE)
    {
        foreach ($items as $key => $value)
        {
            //verification si login present fichier
            if ($value["ref"] === $ref)
            {
                $items[$key] = NULL;
                if (putfile("items", $items) == FALSE)
                {
                    echo "ERROR C1\n";
                    return FALSE;
                }
                echo "OK\n";
                return TRUE;
            }
        }
        echo "ERROR C2\n";
        return FALSE;
    }
}

function getitem($ref)
{
    if (($items = getfile("items")) != FALSE)
    {
        foreach ($items as $key => $value)
        {
            //verification si login present fichier
            if ($value["ref"] === $ref)
            {
                echo "OK\n";
                return $value;
            }
        }
        echo "ERROR D\n";
        return FALSE;
    }
}

?>