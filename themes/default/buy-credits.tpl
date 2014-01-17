
<!-- script pour le bouton "j'aime" de facebook ! -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
function getValue(selected){
}
</script>



<div class="fb"><a href="http://www.facebook.com">	
		<img border="0" src="img/fb.jpg" alt="Facebook" title="Facebook" style="float: left;" />
	</a>
	<h2>Cliquez maintenant sur J'aime</h2></br>
et recevez tout de suite 2 BukyZ gratuitement !
	
</div>
<!-- Insertion du bouton "j'aime" de facebook ! -->
<div class="fb-like" data-href="https://www.facebook.com/pages/Buzcom/1404881823086454" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>

<br></br><br></br>
<div class="tableDiv">
	<h2>1.Choisissez un Pack de BukyZ</h2>
		<span>Choisissez la quantité de BukyZ souhaitée, le bonus augmente en fonction de la quantité choisie.</span>
	 <br></br>
	 <table align="center" width="500px">
	<tr>
		<td align="center"><img src="img/fleche_bas.png"></td>
		<td align="center">Pack</td>
		<td align="center">BukyZ</td>
		<td align="center">Bonus</td>
		<td align="center">TOTAL</td>
	</tr>
   <tbody>
   <tr onclick="getValue('5');">
		<td  align="center"><input type="radio" id="a5" value="5" name="price"></td>
		<td align="center"><strong>5€</strong></td>
		<td  align="center"><span>5</span></td>
		<td align="center"><span>+0</span></td>
		<td  align="center"><span>5</span></td>
	</tr>
	 <tr onclick="getValue('20');">
		<td align="center"><input type="radio" id="a20" value="20" name="price"></td>
		<td align="center"><strong>20€</strong></td>
		<td align="center"><span>20</span></td>
		<td align="center"><span>+2</span></td>
		<td align="center"><span>22</span></td>
	</tr>
	<tr onclick="getValue('50');">
		<td align="center"><input type="radio" id="a50" value="50" name="price"></td>
		<td align="center"><strong>50€</strong></td>
		<td align="center"><span>50</span></td>
		<td align="center"><span>+15</span></td>
		<td align="center"><span>65</span></td>
	</tr>
	<tr onclick="getValue('100');">
		<td align="center"><input type="radio" id="a100" value="100" name="price"></td>
		<td align="center"><span><strong>100€</strong></span></td>
		<td align="center"><span class="fontBlack">100</span></td>
		<td align="center"><span class="fontOrange">+40</span></td>
		<td align="center"><span class="fontBlack">140</span></td>
	</tr>
	<tr onclick="getValue('250');">
		<td align="center"><input type="radio" id="a250" value="250" name="price"></td>
		<td align="center"><strong>250€</strong></td>
		<td align="center"><span>250</span></td>
		<td align="center"><span>+125</span></td>
		<td align="center"><span>375</span></td>
	</tr>
	<tr onclick="getValue('600');">
    	<td align="center"><input type="radio" id="a600" value="600" name="price"></td>
    	<td align="center"><strong>600€</strong></td>
    	<td align="center"><span>600</span></td>
        <td align="center"><span>+390</span></td>
		<td align="center"><span>990</span></td>
	</tr>
</tbody>	
	 </table>
</div>
<p id="affichage"></p>
<br></br>
{include file="$tpl_dir./credit-payment.tpl"}