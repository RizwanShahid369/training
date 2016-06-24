<?php
/* Smarty version 3.1.28, created on 2016-06-24 03:13:39
  from "/var/www/html/training/training/Muneeba/MVC/app/views/film/insert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576cdda3016279_74961317',
  'file_dependency' => 
  array (
    'b1c07dfc34ac666d005eab676f1cae7c6bfc65e2' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/MVC/app/views/film/insert.tpl',
      1 => 1466752307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576cdda3016279_74961317 ($_smarty_tpl) {
?>


<a href="../film/view">back</a>
<form action="../film/add" method="post">

    Title: <input type="text" name="Film[title]"><br>
    Description: <input type="text" name="Film[description]"><br>

    Release Date: <input type="text" name="Film[release_year]"><br>
    Language ID: <input type="text" name="Film[language_id]"><br>

    Original language ID : <input type="text" name="Film[original_language_id]"><br>
    Rental Duration: <input type="text" name="Film[rental_duration]"><br>

    Length: <input type="text" name="Film[length]"><br>
    Replacement cost: <input type="text" name="Film[replacement_cost]"><br>

    Rating: <input type="text" name="Film[rating]"><br>
    Special Features: <input type="text" name="Film[special_features]"><br>

    <input type="submit" name="insert" value="insert">
</form>

<?php }
}
