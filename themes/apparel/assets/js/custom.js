/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

$(document).ready(function() {
    $(".new-product-slider").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsTabletSmall: [639, 2],
        itemsMobile: [479, 2],
        pagination: false,
        navigationText: ["<div class='prev-arrow'><i class='fa fa-arrow-left'></i></div>", "<div class='next-arrow'><i class='fa fa-arrow-right'></div>"],
        navigation: true
    });
    $(".category-product-slider").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsTabletSmall: [639, 2],
        itemsMobile: [479, 2],
        pagination: false,
        navigationText: ["<div class='prev-arrow'><i class='fa fa-arrow-left'></i></div>", "<div class='next-arrow'><i class='fa fa-arrow-right'></div>"],
        navigation: true
    });
    $(".best-seller-slider").owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsTabletSmall: [639, 2],
        itemsMobile: [479, 2],
        pagination: false,
        navigationText: ["<div class='prev-arrow'><i class='fa fa-arrow-left'></i></div>", "<div class='next-arrow'><i class='fa fa-arrow-right'></div>"],
        navigation: true
    });
    $(".product-slider").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsTabletSmall: [639, 2],
        itemsMobile: [479, 2],
        pagination: false,
        navigationText: ["<div class='prev-arrow'><i class='fa fa-arrow-left'></i></div>", "<div class='next-arrow'><i class='fa fa-arrow-right'></div>"],
        navigation: true
    });
    $(".blog-slider").owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 2],
        itemsTablet: [767, 2],
        itemsTabletSmall: [639, 1],
        itemsMobile: [479, 1],
        pagination: false,
        navigationText: ["<div class='prev-arrow'><i class='fa fa-arrow-left'></i></div>", "<div class='next-arrow'><i class='fa fa-arrow-right'></div>"],
        navigation: true
    });
    $(".testimonial-slider-block").owlCarousel({
        autoPlay: true,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [991, 1],
        itemsTablet: [767, 1],
        itemsTabletSmall: [639, 1],
        itemsMobile: [479, 1],
        pagination: false,
        navigationText: ["<div class='prev-arrow'><i class='fa fa-arrow-left'></i></div>", "<div class='next-arrow'><i class='fa fa-arrow-right'></div>"],
        navigation: true
    });
});
$(document).ready(function() {
    $('.show_list').click(function() {
        $('#js-product-list div.product-item').addClass('list-view');
        $(this).addClass('active');
        $('.show_grid').removeClass('active');
    });
    $('.show_grid').click(function() {
        $('#js-product-list div.product-item').removeClass('list-view');
        $(this).addClass('active');
        $('.show_list').removeClass('active');
    });
    $('#header-menu-btn').click(function() {
        $('#header-menu-content').slideToggle();
    });
});

$(document).ready(function() {
    if (jQuery(window).width() <= 767) {
        $('#search-tog-btn > span').click(function() {
            $('#search_widget').slideToggle();
        });
    }
});
$(document).ready(function() {
    if (jQuery(window).width() <= 767) {
        $('#search-tog-btn').appendTo('#header .header-nav .text-sm-center mobile');
        $('#search-tog-btn').insertAfter('#_mobile_user_info');
        $('#search_widget').appendTo('#header .header-nav .text-sm-center mobile #search-tog-btn');
    }
});
