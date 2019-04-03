<?php
include_once('getputfile.php');

function addgrouplink($groupname, $ref)
{
    if (($groups = getfile("groups")) != FALSE)
    {
        foreach ($groups as $key => $value)
        {
            if ($value["groupname"] === $groupname && $value["ref"] === $ref)
            {
                echo "ERROR A1\n";
                return FALSE;
            }
        }
    }
    $link = array("groupname" => $groupname, "ref" => $ref);
    $groups[] = $link;
    if (putfile("groups", $groups) == FALSE)
    {
        echo "ERROR A2\n";
        return FALSE;
    }
    echo "OK\n";
    return TRUE;
}

function delgrouplink($groupname, $ref)
{
    if (($groups = getfile("groups")) != FALSE)
    {
        foreach ($groups as $key => $value)
        {
            //verification si login present fichier
            if ($value["groupname"] === $groupname && $value["ref"] === $ref)
            {
                $groups[$key] = NULL;
                if (putfile("groups", $groups) == FALSE)
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

function getgroupitems($groupname)
{
    if (($groups = getfile("groups")) != FALSE)
    {
        foreach ($groups as $key => $value)
        {
            if ($value["groupname"] === $groupname)
                $items[] = $value["ref"];
        }
        return $items;
    }
}

?>