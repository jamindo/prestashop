<?php /* Smarty version Smarty-3.1.14, created on 2014-01-11 10:40:24
         compiled from "C:\xampp\htdocs\prestashop\themes\default\buy-credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1311652d11188829382-49016751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85e0a371eff5ae79810451f0016edd209a86276e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\buy-credits.tpl',
      1 => 1389433126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1311652d11188829382-49016751',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d1118887ad91_27610493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d1118887ad91_27610493')) {function content_52d1118887ad91_27610493($_smarty_tpl) {?>
<!-- script pour le bouton "j'aime" de facebook ! -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb"><a href="http://www.facebook.com">	
		<img border="0" src="img/fb.jpg" alt="Facebook" title="Facebook" style="float: left;" />
	</a>
	<h1>Cliquez maintenant sur J'aime</h1></br>
et recevez tout de suite 2 BukyZ gratuitement !
	
</div>



<!-- Insertion du bouton "j'aime" de facebook ! -->
<div class="fb-like" data-href="https://www.facebook.com/pages/Buzcom/1404881823086454" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>


<div class="tableDivWhite">
	 <table class="list" style="BORDER-TOP-STYLE: none" cellspacing="0" cellpadding="0" width="90%" border="0" align="center">
	<tbody><tr valign="bottom" height="30">
		<th class="tableHeader">&nbsp;</th>
		<th class="tableHeader" valign="middle" align="center"><img src="img/fleche_bas.png" width="15" height="14" align="middle">&nbsp;&nbsp; </th>
		<th class="tableHeader" align="center" valign="middle">Pack</th>
		<th class="tableHeader" align="center" valign="middle">BukyZ</th>
		<th class="tableHeader" align="center" valign="middle">Bonus</th>
		<th class="tableHeaderT" align="center" valign="middle">TOTAL</th>
	</tr></tbody>
   <tbody>
   <tr onclick="document.getElementById('a5').checked=true;">
		<td width="4%" align="center" class="tableGrisL"></td>
		<td class="tableGrisL" width="2%" align="center"><input type="radio" id="a5" value="5" name="price"></td>
		<td class="tableGris" width="19%" align="right"><strong>5 &#x20AC</strong></td>
		<td class="tableGris" width="18%" align="right"><span class="fontBlack">5</span></td>
		<td class="tableGris" width="20%" align="right"><span class="fontOrange">+0</span></td>
		<td class="tableGris" width="19%" align="right"><b><span class="fontBlack">5</span></b></td>
	</tr>
	 <tr onclick="document.getElementById('a20').checked=true;">
		<td width="4%" align="center" class="tableGrisL"></td>
		<td class="tableGrisL" width="2%" align="center"><input type="radio" id="a20" value="20" name="price"></td>
		<td class="tableGris" width="19%" align="right"><strong>20 &#x20AC</strong></td>
		<td class="tableGris" width="18%" align="right"><span class="fontBlack">20</span></td>
		<td class="tableGris" width="20%" align="right"><span class="fontOrange">+2</span></td>
		<td class="tableGris" width="19%" align="right"><b><span class="fontBlack">22</span></b></td>
	</tr>
	<tr class="secondRow" onclick="document.getElementById('a50').checked=true;">
		<td width="4%" align="center" class="tableGrisL"></td>
		<td class="tableGrisL" width="2%" align="center"><input type="radio" id="a50" value="50" name="price" checked = ""></td>
		<td class="tableGris" width="19%" align="right"><strong>50 &#x20AC</strong></td>
		<td class="tableGris" width="18%" align="right"><span class="fontBlack">50</span></td>
		<td class="tableGris" width="20%" align="right"><span class="fontOrange">+15</span></td>
		<td class="tableGris" width="19%" align="right"><b><span class="fontBlack">65</span></b></td>
	</tr>
	<tr onclick="document.getElementById('a100').checked=true;">
		<td width="4%" align="center" class="tableGrisL"></td>
		<td class="tableGrisL" width="2%" align="center"><input type="radio" id="a100" value="100" name="price"></td>
		<td class="tableGris" width="19%" align="right"><span class="fontBlue16b"><strong>100 &#x20AC</strong></span></td>
		<td class="tableGris" width="18%" align="right"><span class="fontBlack">100</span></td>
		<td class="tableGris" width="20%" align="right"><span class="fontOrange"><b>+40</b></span></td>
		<td class="tableGris" width="19%" align="right"><b><span class="fontBlack">140</span></b></td>
	</tr>
	<tr class="secondRow" onclick="document.getElementById('a250').checked=true;">
    	<td width="4%" align="center" class="tableGrisL"></td>
		<td class="tableGrisL" width="2%" align="center"><input type="radio" id="a250" value="250" name="price"></td>
		<td class="tableGris" width="19%" align="right"><strong>250 &#x20AC</strong></td>
		<td class="tableGris" width="18%" align="right"><span class="fontBlack">250</span></td>
		<td class="tableGris" width="20%" align="right"><span class="fontOrange"><b>+125</b></span></td>
		<td class="tableGris" width="19%" align="right"><b><span class="fontBlack">375</span></b></td>
	</tr>
	<tr onclick="document.getElementById('a250').checked=true;">
    	<td width="4%" align="center" class="tableGrisL"></td>
    	<td class="tableGrisL" width="2%" align="center"><input type="radio" id="a600" value="600" name="price"></td>
    	<td class="tableGris" width="19%" align="right"><strong>600 &#x20AC</strong></td>
    	<td class="tableGris" width="18%" align="right"><span class="fontBlack">600</span></td>
        <td class="tableGris" width="20%" align="right"><span class="fontOrange"><b>+390</span></td>
		<td class="tableGris" width="19%" align="right"><b><span class="fontBlack">990</span></b></td>
	</tr>
</tbody>	
	 </table>
	 
	 
</div>



<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>