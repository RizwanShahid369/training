<?php
/* Smarty version 3.1.28, created on 2016-06-24 03:48:48
  from "/var/www/html/training/training/Muneeba/MVC/app/views/film/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576ce5e0988d48_73758693',
  'file_dependency' => 
  array (
    '69cdbe6323cbf64edf266a18e94329239d4f580c' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/MVC/app/views/film/edit.tpl',
      1 => 1466754522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576ce5e0988d48_73758693 ($_smarty_tpl) {
?>
<a href="index.php">back</a>
<form action="../update" method="post">
    <input type="hidden" name="film_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
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

    <input type="submit" name="update" value="update">
</form>
<?php }
}
