<?php
session_start();
 $userIdForQuery = $database->get_user_profile_id($_SESSION['profId']);


var_dump($userIdForQuery['id']);
$id = $userIdForQuery['id'];

 echo $database->get_post_data($id);

