{**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 
{strip}
<div class="tbcms-newsletter-wrapper bottom-to-top hb-animate-element">
	<div class="tbcms-newsletter-inner">
		<div class="block_newsletter tb-newsletter-wrapeer">
			<div class="tbnewsletter-block">
				<div class="tbnewsletter-lable-wrapper col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
					{if Configuration::get('TBCMSCUSTOMSETTING_NEWSLETTER_TITLE', $language.id)}
					<div class="tbnewsletter-icon"></div>
						{if Configuration::get('TBCMSCUSTOMSETTING_NEWSLETTER_SHORT_DESC', $language.id)}
							<p class="tbnewsletter-sub-title">
								{Configuration::get('TBCMSCUSTOMSETTING_NEWSLETTER_SHORT_DESC', $language.id)}
							</p>
						{/if} 
						<p id="block-newsletter-label" class="tbnewsletter-title">
							{Configuration::get('TBCMSCUSTOMSETTING_NEWSLETTER_TITLE', $language.id)}
						</p>
						
					{/if}

				</div>
				<div class="tbnewsletter-input col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<form action="{$urls.pages.index}#footer" method="post">
						<div class="tbnewsleeter-input-button-wraper">
							<div class="input-wrapper">
								<input name="email" type="email" value="{$value}" placeholder="{l s='Your email address' d='Shop.Forms.Labels'}" aria-labelledby="block-newsletter-label"
								>
							</div>
							<div class="tbnewsleteer-btn-wrapper">
								<button class='btn btn-primary' name="submitNewsletter" type="submit">
									<span class='tbnewslatter-btn-title hidden-lg-down'>{l s='Subscribe' d='Shop.Theme.Actions'}</span>
									<span class='tbnewslatter-btn-title hidden-xl-up'>{l s='OK' d='Shop.Theme.Actions'}</span>
									{*<i class='material-icons'>&#xe0be;</i>*}
								</button>
							</div>
						</div>
						<input type="hidden" name="action" value="0">

						<div class="tbnewsletter-description">
							{if $conditions}
								<p class="alert-description">{$conditions}</p>
							{/if}
							
							{if isset($id_module)}
								{hook h='displayGDPRConsent' id_module=$id_module}
							{/if}
						</div>
						{if $msg}
							<p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
								{$msg}
							</p>
						{/if}
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>
{/strip}
