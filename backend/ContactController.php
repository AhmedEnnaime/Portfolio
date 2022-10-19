<?php
    require_once('./Contact.php');
    if(isset($_POST['submit'])){
        $ctn = new Contact();
        $ctn->setName($_POST['name']);
        $ctn->setEmail($_POST['email']);
        $ctn->setPattern($_POST['pattern']);
        $ctn->setMessage($_POST['message']);
        $ctn->save();
        header('Location: ../index.php');    
    }
    
?>