{**
* 2007-2019 PrestaShop
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2019 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{strip}
{if $dis_arr_result['status']}
	<div class="tbfooter-payment-icon-img-block">
		{include file='_partials/tbcms-main-title.tpl' main_heading=$main_heading path=$dis_arr_result['path']}
		<div class="tbfooter-payment-icon-wrapper">
			{foreach $dis_arr_result['data'] as $data}
				<div class="tbfooter-payment-content-block">
					<div class="tbfooter-payment-icon">
						<a href="{$data['link']}" >
							<img src="{$dis_arr_result['path']}tiny/{$data['image']}" data-org-src="{$dis_arr_result['path']}{$data['image']}" alt="{$data['title']}">
						</a>
					</div>
				</div>
			{/foreach}
		</div>
	</div>
{/if}
{/strip}