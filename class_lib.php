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

abstract class song{

    public $title;
    public $artist;
    public $album;

    public function describe(){

        return  $this->title.' on '. $this->album . ' by ' . $this->artist ;

    }

    abstract public function number();

}

class song1 extends song{

    public function describe()
    {
        return parent::describe();
    }

    public function number()
    {
        return '1. ';
    }

}

class song2 extends song{
    public function describe()
    {
        return parent::describe();
    }

    public function number()
    {
        return '2. ';
    }
}

class song3 extends song{
    public function describe()
    {
        return parent::describe();
    }

    public function number()
    {
        return '3. ';
    }
}

class Users{
    public $user1 = 'Rogelio';
    public $user2 = 'Marques';
    public $user3 = 'Breadman';
    public $user4 = 'Sean';
    public $user5 = 'Nick';

}