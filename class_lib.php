<?php
class user{

    public $username;
    public $email;
    public $password;


    function __construct($username){
        $this->name = $username;
    }

    function set_name($new_name){
        $this->name = $new_name;
    }

    function get_name(){
        return $this->name;
    }
}

class playlist{

    function __construct($playlist){
        $this->name = $playlist;
    }

    function set_name($playName){
        $this->name = $playName;
    }

    function get_name(){
        return $this->name;
    }
}