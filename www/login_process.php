<?php

if(!isset($_POST['email_form'])){
    echo "geen email veld gevonden";

    exit;

}
if(!isset($_POST['wachtwoord_form'])){
    echo "geen wachtwoord veld gevonden";

    exit;

}
if(empty($_POST['email_form'])){
    echo "email field is required";
    exit;
}
if(empty($_POST['password_form'])){
    echo "password field is required";
    exit;
}
