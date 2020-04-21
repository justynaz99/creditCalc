<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 09:43:13
  from 'C:\xampp\htdocs\creditCalc\app\calc\calcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9c01119333d6_05984614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79b6d4a204e05bfdc6d178df0b6ff55b4bb1a3d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creditCalc\\app\\calc\\calcView.tpl',
      1 => 1587281698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9c01119333d6_05984614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13971474585e9c011190f8d0_64148276', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4901294575e9c0111931a02_08311146', 'footer');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'content'} */
class Block_13971474585e9c011190f8d0_64148276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13971474585e9c011190f8d0_64148276',
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
    <form action= "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post" class="pure-form pure-form-stacked">
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
class Block_4901294575e9c0111931a02_08311146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_4901294575e9c0111931a02_08311146',
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
