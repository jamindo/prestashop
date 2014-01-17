{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- Block user information module HEADER -->
<div id="header_user" {if $PS_CATALOG_MODE}class="header_user_catalog"{/if}>
	<ul id="header_nav">
		{if !$PS_CATALOG_MODE}
		{/if}
		<li id="your_account"><a href="{$link->getPageLink('my-account', trhue)|escape:'html'}" title="{l s='View my customer account' mod='blockuserinfo'}" rel="nofollow">{l s='Your Account' mod='blockuserinfo'}</a></li>
	</ul>
	<p id="header_user_info">
		{if $logged}
		<div id="loggedblock">
		<h3>{$cookie->customer_login}</h3>
			<a href="{$link->getPageLink('followed-bid', true)|escape:'html'}" title="{l s='View my current bid' mod='blockuserinfo'}" class="myAccount" rel="nofollow">{l s='My current bid' mod='blockuserinfo'}</a>
			<br></br>
			<a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="myAccount" rel="nofollow">{l s='My account' mod='blockuserinfo'}</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html'}" title="{l s='Log me out' mod='blockuserinfo'}" class="logout" rel="nofollow">{l s='Log out' mod='blockuserinfo'}</a>
			<br></br>
			<h4>Mon solde: {$cookie->nb_credits} bukyz</h4>
		</div>
		{else}
		<div id="notloggedblock">
		<h3>Espace Client</h3>
		<form action="{$link->getPageLink('authentication', true)|escape:'html'}" method="post" id="login_form" class="std">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mot de passe
			<input type="text" id="email" name="email" style="width: 150px" value="{if isset($smarty.post.email)}{$smarty.post.email|stripslashes}{/if}" class="account_input" />
			<input type="password" id="passwd" name="passwd" style="width: 150px" value="{if isset($smarty.post.passwd)}{$smarty.post.passwd|stripslashes}{/if}" class="account_input" />
			{if isset($back)}<input type="hidden" class="hidden" name="back" value="{$back|escape:'htmlall':'UTF-8'}" />{/if}
			<input type="submit" id="SubmitLogin" name="SubmitLogin" class="button" value="Ok">
			<br></br>
			<input type="checkbox" name="rememberMe" id="rememberMe" value="1" autocomplete="off">
				<label for="rememberMe"> Se souvenir de moi</label> &nbsp;&nbsp;
				<a href="http://localhost/prestashop/index.php?controller=password" title="Récupérez votre mot de passe" rel="nofollow">Mot de passe oublie ? / </a>
				<a href="http://localhost/prestashop/index.php?controller=authentication#account-creation" title="Register" class="login">Inscription</a>
		</form>
		</div>
		{/if}
	</p>
</div>
<!-- /Block user information module HEADER -->
