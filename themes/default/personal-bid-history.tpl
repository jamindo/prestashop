<h1>Historique de mes encheres</h1>

<h2>Effectuer une recherche</h2>

<form action="{$link->getPageLink('personal-history', true)|escape:'html'}" method="post">
	Selectionner un lot : 
	<select name="BidList">
		<option value="all"> Indifferent </option>
		{for $i=0 to $nb_bids_list}
			<option value="{$bids_list[$i].id_bid}">Lot n&deg;{$bids_list[$i].id_bid} - {$bids_list[$i].product_name}</option>
		{/for}
	</select>
	<input type="submit" id="SubmitSearch" name="SubmitSearch" class="button" value="Go">
</form>
<br></br>
{if isset($fromSearch)}
	<Table Border=3 WIDTH=500>
	<tr>
		<td ALIGN="center">Lot</td>
		<td ALIGN="center">Mise</td>
		<td ALIGN="center">Resultat</td>
	</tr>
	{for $i=0 to $nb_results_history}
		<tr>
<td ALIGN="center"><a href="index.php?controller=bid?id={$lot_history[$i].id_bid}">Lot n&deg;{$lot_name[$i].id_bid} - {$lot_name[$i].product_name}</a></td>
			<td ALIGN="center">
				{$credits_history[$i].bid_value}
			</td>
			
			{if $result_history[$i] == 1}
			<td ALIGN="center" BGCOLOR="green">Enchere Unique la plus Basse !</td>
			{/if}
			{if $result_history[$i] == 2}
			<td ALIGN="center" BGCOLOR="orange">Enchere Unique mais trop Haute !</td>
			{/if}
			{if $result_history[$i] == 3}
			<td ALIGN="center" BGCOLOR="red">Enchere non Unique !</td>
			{/if}
		</tr>
	{/for}
</Table>
{/if}
<br></br>
<h2>Dernieres mises</h2>
<Table Border=3 WIDTH=500>
	<tr>
    	<td ALIGN="center">Lot</td>
        <td ALIGN="center">Mise</td>
        <td ALIGN="center">Resultat</td>
        <td ALIGN="center">Date</td>
    </tr>
    {for $i=0 to $nb_lasts_bids}
	<tr>
		<td ALIGN="center"><a href="index.php?controller=bid?id={$lasts_bids[$i].id_bid}">Lot n&deg;{$lasts_bids[$i].id_bid} - {$lot_history[$i].product_name}</a></td>
		<td ALIGN="center">{$lasts_bids[$i].bid_value}</td>
		{if $result_history[$i] == 1}
		<td ALIGN="center" BGCOLOR="green">Enchere Unique la plus Basse !</td>
		{/if}
		{if $result_history[$i] == 2}
		<td ALIGN="center" BGCOLOR="orange">Enchere Unique mais trop Haute !</td>
		{/if}
		{if $result_history[$i] == 3}
		<td ALIGN="center" BGCOLOR="red">Enchere non Unique !</td>
		{/if}
		<td ALIGN="center">{$lasts_bids[$i].bid_date}</td>
	</tr>
    {/for}
</Table>
