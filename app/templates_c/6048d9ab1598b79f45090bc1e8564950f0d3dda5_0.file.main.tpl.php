<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 14:26:27
  from 'C:\xampp\htdocs\creditCalc\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9c43738ee516_74455662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6048d9ab1598b79f45090bc1e8564950f0d3dda5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creditCalc\\templates\\main.tpl',
      1 => 1587024997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9c43738ee516_74455662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your credit calculator</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-old-ie-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/style/style.css">
</head>
<body>

<div class="content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13442842005e9c43738ed912_57891258', 'content');
?>

</div>

<div class="footer">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3219569355e9c43738ee036_65733627', 'footer');
?>

</div>

</body>
</html><?php }
/* {block 'content'} */
class Block_13442842005e9c43738ed912_57891258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13442842005e9c43738ed912_57891258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_3219569355e9c43738ee036_65733627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3219569355e9c43738ee036_65733627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'footer'} */
}
