<?php /* Smarty version Smarty-3.1.11, created on 2017-06-12 15:27:13
         compiled from ".\templates\topnavigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1237593e2861ac3c52-86909622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28b25696b875107c279456152403eff42f557923' => 
    array (
      0 => '.\\templates\\topnavigation.tpl',
      1 => 1497256031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1237593e2861ac3c52-86909622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_593e2861c46e91_91143287',
  'variables' => 
  array (
    'sessCart' => 0,
    'sessMemberID' => 0,
    'sessEmail' => 0,
    'sessFirstName' => 0,
    'sessLastName' => 0,
    'numsSum' => 0,
    'navGrandtotal' => 0,
    'navGrandtotalRp' => 0,
    'dataNavCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593e2861c46e91_91143287')) {function content_593e2861c46e91_91143287($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sessCart']->value=='1'||$_smarty_tpl->tpl_vars['sessCart']->value=='2'){?>
	
	<script>
	$(function() {
	    // setTimeout() function will be fired after page is loaded
	    // it will wait for 5 sec. and then will fire
	    // $("#successMessage").hide() function
	    setTimeout(function() {
	        $("#successMessage").hide('blind', {}, 500)
	    }, 3000);
	});
	</script>
	
	
<?php }?>

<div class="top-menu cart-menu">
	<ul class="inline">
		<?php if ($_smarty_tpl->tpl_vars['sessMemberID']->value!=''&&$_smarty_tpl->tpl_vars['sessEmail']->value!=''){?>
			
			<li>Welcome, <?php echo $_smarty_tpl->tpl_vars['sessFirstName']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['sessLastName']->value;?>
</li>
		
			<li><a href="myaccount.html">Akun Saya</a></li>
			<li>
				<a href="orderhistory-1.html">History Belanja</a>
			</li>
			

			<li><a href="logout.php">Logout</a></li>
		<?php }else{ ?>
			<li><a href="sign-in.html">login</a></li>
			<li><a href="sign-up.html">register</a></li>
		<?php }?>
		<li>
			<div class="basket">
				<div class="basket-item-count">
					<?php if ($_smarty_tpl->tpl_vars['numsSum']->value==''){?>
						0
					<?php }else{ ?>
						<?php echo $_smarty_tpl->tpl_vars['numsSum']->value;?>

					<?php }?>
				</div>
				<div class="total-price-basket">
					<?php if ($_smarty_tpl->tpl_vars['navGrandtotal']->value>0){?>
						<?php echo $_smarty_tpl->tpl_vars['navGrandtotalRp']->value;?>

					<?php }else{ ?>
						0
					<?php }?>
				</div>
				
				<?php if ($_smarty_tpl->tpl_vars['sessCart']->value=='2'||$_smarty_tpl->tpl_vars['sessCart']->value=='1'){?>
					<div class="dropdown open">
				<?php }else{ ?>
					<div class="dropdown">
				<?php }?>
					<a class="dropdown-toggle" data-hover="dropdown" href="#">
						<img alt="basket" src="images/icon-basket.png" />
					</a>
					<ul class="dropdown-menu">
						<?php if ($_smarty_tpl->tpl_vars['sessCart']->value=='1'){?>
							<div id="successMessage" style="text-align: center; color: red;">Kuantiti produk gagal ditambahkan, stok produk tidak cukup</div>
						<?php }elseif($_smarty_tpl->tpl_vars['sessCart']->value=='2'){?>
							<div id="successMessage" style="text-align: center; color: red;">Produk berhasil ditambahkan!</div>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['name'] = 'dataNavCart';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataNavCart']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataNavCart']['total']);
?>
						<li>
							<div class="basket-item">
								<div class="row-fluid">
									<div class="span4">
										<div class="thumb">
											<img alt="" src="images/products/thumb/small_<?php echo $_smarty_tpl->tpl_vars['dataNavCart']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataNavCart']['index']]['image'];?>
" />
										</div>
									</div>
									<div class="span8">
										<div class="title"><?php echo $_smarty_tpl->tpl_vars['dataNavCart']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataNavCart']['index']]['productName'];?>
</div>
										<div class="price">Rp. <?php echo $_smarty_tpl->tpl_vars['dataNavCart']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataNavCart']['index']]['priceRp'];?>
 x <?php echo $_smarty_tpl->tpl_vars['dataNavCart']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataNavCart']['index']]['qty'];?>
</div>
									</div>
								</div>
								<!--<a class="close-btn" href="#"></a>-->
							</div>
						</li>
						<?php endfor; endif; ?>
						<li class="checkout">
							<a href="checkout.html" class="cusmo-btn">checkout</a>
						</li>
					</ul>
				</div>
			</div>
		</li>
	</ul>
</div><?php }} ?>