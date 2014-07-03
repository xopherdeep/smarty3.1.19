<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-07-03 04:34:15
         compiled from "x/html/layout/sidedoor/frame.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110637764053b53fb7977c69-27925228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7268defe6d891fac96b65293bb3cafe0ed446f0' => 
    array (
      0 => 'x/html/layout/sidedoor/frame.tpl',
      1 => 1404386269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110637764053b53fb7977c69-27925228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TPL_EXISTS' => 0,
    'Xtra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53b53fb79fa2a5_66310053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b53fb79fa2a5_66310053')) {function content_53b53fb79fa2a5_66310053($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['TPL_EXISTS']->value&&$_smarty_tpl->tpl_vars['Xtra']->value!=''&&($_smarty_tpl->tpl_vars['Xtra']->value!='index')) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['Door']->value)."/".((string)$_smarty_tpl->tpl_vars['Xtra']->value)."/".((string)$_smarty_tpl->tpl_vars['method']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['Door']->value)."/portal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
