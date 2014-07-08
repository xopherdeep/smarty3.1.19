<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-07-08 05:15:08
         compiled from "x/html/watchtower/scripts.html" */ ?>
<?php /*%%SmartyHeaderCode:149842000353bbe0ccd05ab2-34303130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ae7ce4865196d20665f36ef1deeccc95a81e12a' => 
    array (
      0 => 'x/html/watchtower/scripts.html',
      1 => 1404396067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149842000353bbe0ccd05ab2-34303130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REPO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53bbe0ccd0d668_81572470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bbe0ccd0d668_81572470')) {function content_53bbe0ccd0d668_81572470($_smarty_tpl) {?>
<!-- <SCRIPT src="http://code.jquery.com/jquery-latest.pack.js"></SCRIPT>
<SCRIPT src="<?php echo $_smarty_tpl->tpl_vars['REPO']->value;?>
/js/jQuery.frameReady.js"></SCRIPT>
<SCRIPT src="<?php echo $_smarty_tpl->tpl_vars['REPO']->value;?>
/js/ext/adapter/ext/ext-base.js"></SCRIPT>
<SCRIPT src="<?php echo $_smarty_tpl->tpl_vars['REPO']->value;?>
/js/ext/ext-all.js"></SCRIPT>
-->

<!-- jquery and friends -->
<script src="/x/html/layout/watchtower/lib/jquery/jquery-2.0.3.min.js"> </script>
<script src="/x/html/layout/watchtower/lib/jquery-pjax/jquery.pjax.js"></script>


<!-- jquery plugins -->
<script src="/x/html/layout/watchtower/lib/icheck.js/jquery.icheck.js"></script>
<script src="/x/html/layout/watchtower/lib/sparkline/jquery.sparkline.js"></script>
<script src="/x/html/layout/watchtower/lib/jquery-ui-1.10.3.custom.js"></script>
<script src="/x/html/layout/watchtower/lib/jquery.slimscroll.js"></script>

<!-- d3, nvd3-->
<script src="/x/html/layout/watchtower/lib/nvd3/lib/d3.v2.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/nv.d3.custom.js"></script> 

<!-- nvd3 models -->
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/scatter.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/axis.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/legend.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/stackedArea.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/stackedAreaChart.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/line.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/pie.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/pieChartTotal.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/stream_layers.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/lineChart.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/multiBar.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/multiBarChart.js"></script>

<!-- nvd3 models -->
<!-- <script src="/x/html/layout/watchtower/lib/nvd3/src/models/scatter.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/axis.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/legend.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/multiBar.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/multiBarChart.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/line.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/src/models/lineChart.js"></script>
<script src="/x/html/layout/watchtower/lib/nvd3/stream_layers.js"></script> -->

<!--backbone and friends -->
<script src="/x/html/layout/watchtower/lib/backbone/underscore-min.js"></script>
<script src="/x/html/layout/watchtower/lib/backbone/backbone-min.js"></script>
<script src="/x/html/layout/watchtower/lib/backbone/backbone.localStorage-min.js"></script> 


<!-- jquery plugins -->
<script src="/x/html/layout/watchtower/lib/fullcalendar/fullcalendar.js"></script>
<script src="/x/html/layout/watchtower/lib/jquery-ui-1.10.3.custom.js"></script>


<!--backbone and friends -->
<script src="/x/html/layout/watchtower/lib/backbone/underscore-min.js"></script>

<!-- bootstrap default plugins -->
<script src="/x/html/layout/watchtower/lib/bootstrap/transition.js"></script>
<script src="/x/html/layout/watchtower/lib/bootstrap/collapse.js"></script>
<script src="/x/html/layout/watchtower/lib/bootstrap/alert.js"></script>
<script src="/x/html/layout/watchtower/lib/bootstrap/tooltip.js"></script>
<script src="/x/html/layout/watchtower/lib/bootstrap/popover.js"></script>
<script src="/x/html/layout/watchtower/lib/bootstrap/button.js"></script>
<script src="/x/html/layout/watchtower/lib/bootstrap/dropdown.js"></script>
<script src="/x/html/layout/watchtower/lib/bootstrap/modal.js"></script>
<script src="/x/html/layout/watchtower/lib/bootstrap/tab.js"> </script>

<!-- bootstrap custom plugins -->
<script src="/x/html/layout/watchtower/lib/bootstrap-datepicker.js"></script>
<script src="/x/html/layout/watchtower/lib/bootstrap-select/bootstrap-select.js"></script>
<script src="/x/html/layout/watchtower/lib/wysihtml5/wysihtml5-0.3.0_rc2.js"></script>
<script src="/x/html/layout/watchtower/lib/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<!-- basic application js-->
<script src="/x/html/layout/watchtower/js/app.js"></script>
<script src="/x/html/layout/watchtower/js/settings.js"></script> <?php }} ?>
