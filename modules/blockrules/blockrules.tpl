<!-- Block rules -->
{if $logged}
{else}
<div id="rules_block" class="block">
<h4>Comment ça Marche ?</h4>
	<div class="block_content clearfix">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="200" height="260">
                <param name="movie" value="img/flash/test.swf">
                <param name="wmode" value="opaque">
                <param name="quality" value="high">
                <param name="BGCOLOR" value="#F8F8F8">
                <embed src="img/flash/test.swf" width="200" height="260" wmode="opaque" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" bgcolor="#F8F8F8">
    	</object>
	</div>
</div>
{/if}
<!-- /Block rules -->