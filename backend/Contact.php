<?php
require_once('./dbaccess.php');

class Contact{
    private $_Name;
    private $_Email;
    private $_Pattern;
    private $_Message;
    private  $_dba;

    public function __construct(){   

    }

    public function getName(){
        return $this->_Name;
    }

    public function setName($Name){
        $this->_Name = $Name;
    }

    public function getEmail(){
        return $this->_Email;
    }

    public function setEmail($Email){
        $this->_Email = $Email;
    }

    public function getPattern(){
        return $this->_Pattern;
    }

    public function setPattern($Pattern){
        $this->_Pattern = $Pattern;
    }

    public function getMessage(){
        return $this->_Message;
    }

    public function setMessage($Message){
        $this->_Message = $Message;
    }

    public function save(){
        $_dba = new Dbaccess();
        $_dba->query("insert into Contact (name,email,pattern,message) values('" . $this->_Name . "',
                                                '" . $this->_Email . "',
                                                '"  . $this->_Pattern. "',
                                                '"  . $this->_Message . "')");
        $_dba->execute();
        return 0;
    }

};




?>