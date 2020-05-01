<?php
session_start();
include ('../models/account.class.php');
$requete = new account();
if(isset($_POST['mail']))
{
    if($requete->updateemail($_SESSION['user'],$_POST['mail']))
    {
        session_destroy();
        print true;
    }
}

if(isset($_POST['password']))
{
    if($requete->updatepassword($_SESSION['user'],$_POST['password']))
    {
        session_destroy();
        print true;
    }
}

if(isset($_POST['disable']))
{
    if($requete->disableaccount($_SESSION['user']) == true)
    {
        print "disabled";
        session_destroy();
    }
}

?>
