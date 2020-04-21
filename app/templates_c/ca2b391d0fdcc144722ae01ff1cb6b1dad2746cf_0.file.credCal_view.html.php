<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-16 10:36:17
  from 'C:\xampp\htdocs\creditCalc\app\calcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9819017a4204_22586240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca2b391d0fdcc144722ae01ff1cb6b1dad2746cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creditCalc\\app\\calcView.tpl',
      1 => 1587026174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9819017a4204_22586240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9412722725e98190177e5c4_48969694', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12806241455e9819017a34a0_11993467', 'footer');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_9412722725e98190177e5c4_48969694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9412722725e98190177e5c4_48969694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Calculator</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li>
    </ul>
</div>

<div class="banner">
    <h1 class="banner-head">
        Your simple credit calculator
    </h1>
</div>


<div style="width:90%; margin: 2em auto;">
	
<div id="calc">
    <form action= "<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/credCal.php" method="post" class="pure-form pure-form-stacked">
        <fieldset>
            <label for ="amount" style="letter-spacing: 1px">Amount of the credit: </label>
            <input id ="amount" type="text" name="amount"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
" /><br>
            <lable for ="duration" style="letter-spacing: 1px">Duration of the credit:  </lable>
            <input id ="duration" type="text" name="duration"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->duration;?>
" /><br>
            <lable for ="installment" style="letter-spacing: 1px">The number of installments in one year: </lable>
            <select name="installment">
                <option value="four">4</option>
                <option value="eight">8</option>
                <option value="ten">10</option>
                <option value="twelve">12</option>
            </select><br/>
        </fieldset>
        <button class="pure-button pure-button-active" style="letter-spacing: 1px">Calculate</button>
    </form>


    <?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
        <ol class="messages">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
    <?php }?>
    <br>

    <?php if (isset($_smarty_tpl->tpl_vars['result']->value->result)) {?>
        <div class="result" >
            Monthly payment: <?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>
 PLN
        </div>
    <?php }?>


</div>

</div>

<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_12806241455e9819017a34a0_11993467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_12806241455e9819017a34a0_11993467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="footer">
    Copyright &copy; 2020 - 2020
</div>

<?php
}
}
/* {/block 'footer'} */
}
