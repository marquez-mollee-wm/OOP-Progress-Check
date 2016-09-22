<?php
require ('class_lib.php');

spl_autoload_register(function($class_name){
    include $class_name.'.php';

});

$bar = new Bar;
$foo = new Foo;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php

        $user1 = new user('Mollee');
        $user1->set_name('Mollee');
        $playName = new playlist("Just Scream!");
        $playName->set_name("Just Scream!");
        $song1 = new song1();
        $song1->title = 'The Lines';
        $song1->album = 'Disgusting';
        $song1->artist = 'Beartooth';
        $song2 = new song2();
        $song2->title = 'Beaten in Lips';
        $song2->album ='Disgusting';
        $song2->artist='Beartooth';
        $song3 = new song3();
        $song3->title = 'Body Bag';
        $song3->album ='Disgusting';
        $song3->artist='Beartooth';

        echo "<h1>Welcome " . $user1->get_name(). "</h1><br>";
        echo $user1->get_name() . " has created a playlist called " . $playName->get_name(). ".<br>";
        echo $song1 ->number();
        echo $song1->describe() . '<br>';
        echo $song2->number();
        echo $song2->describe() . '<br>';
        echo $song3->number();
        echo $song3->describe(). '<br>';

        echo '<h3>Other users on:</h3>';

        $users = new Users();

        foreach($users as $key => $value){
             print "$value" . '<br>';
        }
        ?>
</head>
<body>

</body>
</html>
