<?php include("class_lib.php"); ?>
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

        echo "The users first name is " . $user1->get_name(). "<br>";
        echo $user1->get_name() . " has created a playlist called" . $playName->get_name(). ".";

    ?>
</head>
<body>

</body>
</html>
