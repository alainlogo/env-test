{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
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
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

{if $homeslider.slides}
    <div id="carousel" data-ride="carousel" class="carousel slide home-image-slider" data-interval="{$homeslider.speed}" data-wrap="{(string)$homeslider.wrap}" data-pause="{$homeslider.pause}">
        <div class="image-slider">
            <ul class="carousel-inner" role="listbox">
                {foreach from=$homeslider.slides item=slide name='homeslider'}
                    <li class="carousel-item {if $smarty.foreach.homeslider.first}active{/if}" role="option" aria-hidden="{if $smarty.foreach.homeslider.first}false{else}true{/if}">
                        <div class="slider-image" style="background: url({$slide.image_url}) center center no-repeat; background-size: cover;">
                            <a href="{$slide.url}">
                                <figure>
                                    <img src="{$slide.image_url}" alt="{$slide.legend|escape}">
                                    <div class="slider-description">
                                        {if $slide.title || $slide.description}
                                            <div class="container">
                                                <figcaption class="caption">
                                                    <h2 class="display-1 text-uppercase">{$slide.title}</h2>
                                                    <div class="caption-description">
                                                        {$slide.description nofilter}
                                                    </div>
                                                </figcaption>
                                            </div>
                                        {/if}
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </li>
                {/foreach}
            </ul>
            <div class="direction" aria-label="{l s='Carousel buttons' d='Shop.Theme.Global'}">
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="icon-prev hidden-xs" aria-hidden="true">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="icon-next" aria-hidden="true">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>

                    </span>
                    <span class="sr-only">{l s='Next' d='Shop.Theme.Global'}</span>
                </a>
            </div>
        </div>
    </div>
{/if}