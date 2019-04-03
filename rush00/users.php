<?php
include_once('getputfile.php');

function adduser($login, $passwd, $fname, $lname, $mail, $stat)
{
    if (($users = getfile("users")) != FALSE)
    {
        foreach ($users as $key => $value)
        {
            if ($value["login"] === $login)
            {
                echo "ERROR A1\n";
                return FALSE;
            }
        }
    }
    $hashpass = hash("whirlpool", $passwd);
    $user = array("login" => $login, "passwd" => $hashpass, "fname" => $fname, "lname" => $lname, "mail => $mail", "stat" => $stat);
    $users[] = $user;
    if (putfile("users", $users) == FALSE)
    {
        echo "ERROR A2\n";
        return FALSE;
    }
    echo "OK\n";
    return TRUE;
}

function moduser($login, $passwd, $fname, $lname, $mail, $stat)
{
    if (($users = getfile("users")) != FALSE)
    {
        foreach ($users as $key => $value)
        {
            if ($value["login"] === $login)
            {
                //modif
                $user = array("login" => $login, "passwd" => $hashpass, "fname" => $fname, "lname" => $fname, "mail => $mail", "stat" => $stat);
                $users[$key] = $user;
                if (putfile("users", $users) == FALSE)
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

function deluser($login)
{
    if (($users = getfile("users")) != FALSE)
    {
        foreach ($users as $key => $value)
        {
            //verification si login present fichier
            if ($value["login"] === $login)
            {
                $users[$key] = NULL;
                if (putfile("users", $users) == FALSE)
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

?>