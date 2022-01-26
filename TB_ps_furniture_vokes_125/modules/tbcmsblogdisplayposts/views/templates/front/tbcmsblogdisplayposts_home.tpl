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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2019 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{strip}
{if $dis_arr_result['status']}
<div class="tbcmsblog-event tbcmsblog-event-home container-fluid">
    <div class="tbblog-event container">
        <div class="home_blog_post_area product_block_container tbblog-full-width tbnews-event wow zoomIn">
            <div class="tbnews-event-wrapper tball-block-box-shadows">
                
                {include file='_partials/tbcms-main-title.tpl' main_heading=$main_heading path=$dis_arr_result['path']}

                <div class="tbblog-event-all-block">
                    <div class="tbblog-event-inner-block">
                        <div class="tbnews-wrapper-info-box">
                            {$count = 1}
                            {if $dis_arr_result['status']} 
                                {foreach from=$dis_arr_result['data'] item=tbcmsblgpst}
                                    {if $count <= 2}
                                        <div class="item tbblog-event-all-content-block">
                                            {if $count == 1}
                                            <article class="blog_pos tbblog-img-content-wrapper clearfix">
                                                <div class="post_content tbnews-event-content-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="tb-event-content"> 
                                                         <div class='tbblog-date-username'>
                                                           {*<div class="meta-author tbnews-event-username">
                                                                <span class="tbdate-authore-icon"></span> 
                                                                 <p>{l s='By ' mod='tbcmsblogdisplayposts'} {$tbcmsblgpst.post_author_arr.firstname} {$tbcmsblgpst.post_author_arr.lastname}</p>
                                                            </div> *}
                                                            <div class="date_time tbdate-time"> 
                                                                <i class='material-icons'>&#xe916;</i>
                                                                {$tbcmsblgpst.post_date|date_format:'<p class="tbmonth-time"><span>%b</span></p><p class="day_time tbday-time"><span>%d,</span></p><p class="tbyear-time"><span>%Y</span></p>' nofilter}
                                                            </div> 
                                                             {*<div class="post_meta">
                                                                <div class="meta-author tbnews-event-username">
                                                                    <p>{l s='' mod='tbcmsblogdisplayposts'} {$tbcmsblgpst.post_author_arr.firstname} {$tbcmsblgpst.post_author_arr.lastname}</p>
                                                                </div> 
                                                                <div class="tb-author-comment">
                                                                    <p>{$tbcmsblgpst.total_comments}
                                                                        {if $tbcmsblgpst.total_comments == 0 || $tbcmsblgpst.total_comments > 1} 
                                                                            {l s='Comments' mod='tbcmsblogdisplayposts'}
                                                                        {else}
                                                                            {l s='Comment' mod='tbcmsblogdisplayposts'}
                                                                        {/if}
                                                                    </p>
                                                                </div>  
                                                            </div>*} 
                                                        </div> 
                                                        <div class="tbnews-event-titel"><a href="{$tbcmsblgpst.link}" class="post_title"><h3>{$tbcmsblgpst.post_title}</h3></a></div>
                                                        {*<div class="tbblog-count">01</div>*}
                                                      
                                                        <p class="post_description tbnews-event-description">
                                                            {if isset($tbcmsblgpst.post_excerpt) && !empty($tbcmsblgpst.post_excerpt)} {$tbcmsblgpst.post_excerpt|truncate:150:' ...'|escape:'html':'UTF-8'} {else} {$tbcmsblgpst.post_content|truncate:150:' ...'|escape:'html':'UTF-8'} {/if}
                                                        </p>
                                                        <div class='tbnews-event-read-more'>
                                                            <div class='tbnews-event-read-more-link'>
                                                                <a href="{$tbcmsblgpst.link}">
                                                                    {l s='Read More' mod='tbcmsblogdisplayposts'}
                                                                   {*<i class='material-icons'>&#xe8e4;</i>*}
                                                                </a>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="blog_post_content_top tbblog-img-block col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="post_thumbnail">
                                                        {if $tbcmsblgpst.post_format == 'video'}
                                                            {assign var="postvideos" value=','|explode:$tbcmsblgpst.video}
                                                            {include file="module:tbcmsblogdisplayposts/views/templates/front/post-video.tpl" videos=$postvideos width='370' height="256" firstname=$tbcmsblgpst.post_author_arr.firstname lastname=$tbcmsblgpst.post_author_arr.lastname}
                                                        {elseif $tbcmsblgpst.post_format == 'gallery'}
                                                            {include file="module:tbcmsblogdisplayposts/views/templates/front/post-gallery.tpl" gallery=$tbcmsblgpst.gallery_lists firstname=$tbcmsblgpst.post_author_arr.firstname lastname=$tbcmsblgpst.post_author_arr.lastname imagesize='medium' link=$tbcmsblgpst.link}
                                                        {else}
                                                        
                                                        <a href="{$tbcmsblgpst.link}" class="img_content">
                                                            <div class="tbnews-event-hoverbtn">
                                                                <div class="tbblog-content-img">
                                                                    <img src="{$tbcmsblgpst.post_img_medium}" alt="{$tbcmsblgpst.post_title}">
                                                                </div>
                                                                <div class="tbnews-event-buttons">
                                                                    <i class='material-icons'>&#xe8b6;</i>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        {*<div class="blog_mask">
                                                            <div class="blog_mask_content">
                                                                <a class="thumbnail_lightbox" href="{$tbcmsblgpst.post_img_medium}" target="_blank">
                                                            </a>
                                                            </div>
                                                        </div>*}
                                                        {/if}
                                                    </div>
                                                </div>
                                                
                                            </article>
                                            {/if}
                                        </div>
                                    {/if}
                                    {$count = $count + 1}
                            {/foreach} 
                            {else}
                                <p>{l s='No Blog Post Found' mod='tbcmsblogdisplayposts'}</p>
                            {/if}
                        </div>
                    </div>

                {*    <div class='tbcmsblog-event-home-pagination-wrapper'>
                        <div class="tbcmsblog-event-home-pagination">
                            <div class="tbcmsblog-event-home-next-pre-btn">
                                <div class="tbcmsblog-event-home-slider-prev tbcmsprev-btn tbcmsblogprev-btn">
                                    <i class='material-icons'>&#xe5c4;</i>
                                    <!-- <span>{l s='Prev' mod='tbcmsblogdisplayposts'}</span> -->
                                </div>
                                <div class="tbcmsblog-event-home-slider-next tbcmsnext-btn tbcmsblognext-btn">
                                    <i class='material-icons'>&#xe5c8;</i>
                                    <!-- <span>{l s='Next' mod='tbcmsblogdisplayposts'}</span> -->
                                </div>
                            </div>
                        </div>
                    </div> *}
                </div>

               
            </div>
             <div class="tbnews-event-link">
                    <a href="{tbcmsBlog::tbcmsBlogLink()}" class="">{l s='All blogs' mod='tbcmsblogdisplayposts'}<i class='material-icons'>&#xe315;</i></a>
                </div>
        </div>
    </div>
</div>
{/if}
{/strip}