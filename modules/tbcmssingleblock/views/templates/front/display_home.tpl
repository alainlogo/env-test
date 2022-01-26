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
{if $dis_arr_result.status}
	<div class='container-fluid tbcmssingle-block'>
		<div class='container tbsingle-block'>
			
			<div class='tbsingle-block-main-title-wrapper'>
				{include file='_partials/tbcms-main-title.tpl' main_heading=$main_heading path=$dis_arr_result['path']}
	        </div> 

			<div class="tbsingle-block-image-info-wrapper row">
				<div class="tb-single-block-image-wrapper-1 col-lg-6 col-md-6 col-sm-12" >
					<div class="tbsingle-block-image-content-inner">
						<div class="tb-single-block-mainimage">
							<img src='{$dis_arr_result.path}{$dis_arr_result.data.image}' alt="{$dis_arr_result.data.title}"/>
						</div>
					</div>
				</div>

				<div class='tbsingle-block-info-box col-lg-6 col-md-6 col-sm-12'>
					<div class='tbsingleblock-main-title'>
						{$dis_arr_result.data.title}
			        </div> 

					<div class="tbsingle-block-desc">
						{$dis_arr_result.data.description}
					</div>
					<div class="tbsingle-bolck-btn-link-wrapper">
						<a href="{$dis_arr_result.data.link}" class="tbsingle-bolck-btn-link">
							<button class="tbsingle-bolck-btn">{$dis_arr_result.data.btn_caption}</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
{/if}
{/strip}