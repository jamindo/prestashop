<h3>Resultat</h3>
<Table Border="3">
	<tr>
		<th>Mise</th>
		<th>Resultat</th>
	<tr>
	{for $i=0 to $table_size}
		<tr>
			<th>{$bids[$i]}</th>
			<th>{$results[$i]}</th>
		</tr>
	{/for}
</Table>