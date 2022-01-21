<?php
if (isset($_GET['name']) && !empty($_GET['name']) && isset($_GET['firstName']) && !empty($_GET['firstName'])) {
    echo  trim(strip_tags($_GET['name'])) . " "  . trim(strip_tags($_GET['firstName'])) ."<br>";
}

if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['firstUsername']) && !empty($_POST['firstUsername'])) {
    echo trim(strip_tags($_POST['username'])) . " " . trim(strip_tags($_POST['firstUsername'])) ."<br>";
}


