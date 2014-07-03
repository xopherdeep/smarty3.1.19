<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-07-03 04:34:16
         compiled from "x/html/frontdoor/portal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43630259853b53fb8199679-19106458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a811a1bb8e0af6e5765c54500586f6f55b50de0c' => 
    array (
      0 => 'x/html/frontdoor/portal.tpl',
      1 => 1404386299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43630259853b53fb8199679-19106458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oBlox' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53b53fb81e4839_06394388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b53fb81e4839_06394388')) {function content_53b53fb81e4839_06394388($_smarty_tpl) {?>
	<script type="text/javascript">

		function executeAfterFade() {
		    //alert('Done!');

	
			setTimeout(function(){

							$('.godbar').css({
						    	top: 0
						    });
			},777);

		}

		function fadeInElements(elementSelectors, lastFunction) {
		    $(elementSelectors[0]).hide().load('/html/'+$(elementSelectors[0]).attr('blox').slice(1).toLowerCase().replace('-','/'),function (){
		        $(elementSelectors[0]).show(function  () {
		        	elementSelectors[1] ? 
		        	fadeInElements(elementSelectors.splice(1, elementSelectors.length - 1), lastFunction) : lastFunction(); 
		        }); 
		    });
		}

		$(document).ready(function() { 
			
			<?php if (0==count($_smarty_tpl->tpl_vars['oBlox']->value)) {?>
				$('.godbar').css({
			    	top: 0
			    });
			<?php } else { ?>

			 fadeInElements($('.blox-panel'), executeAfterFade);	  
			<?php }?>

		});
		
	</script>

<?php }} ?>
