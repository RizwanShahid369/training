<?php

require_once 'include/functions.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // get id value
    $id = $_GET['id'];
 
    //call the delete function
    deleteRecord($id);
 
    // redirect back to the view page
    header("Location: index.php");
} else {
    // if id isn't set, or isn't valid, redirect back to view page
    header("Location: index.php");
}
