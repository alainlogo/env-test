/**
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
*/

var mobileViewSize  = 991;
// var blogHomePageSlider = 767;

$(document).ready(function(){

  tbcmsblogeventhome();
    $(window).resize(function(){
      tbcmsblogeventhome();
  });
    function tbcmsblogeventhome(){
      if(document.body.clientWidth <= 575 ){
        $('.tbblog-img-content-wrapper-second .tbnews-event-content-wrapper').insertAfter('.tbblog-img-content-wrapper-second .tbblog-img-block');
      }else{
        $('.tbblog-img-content-wrapper-second .tbnews-event-content-wrapper').insertBefore('.tbblog-img-content-wrapper-second .tbblog-img-block');

      }
    }


var rtlVal = false;
  if ($('body').hasClass('lang-rtl')) {
  var rtlVal = true;
}
  // blogHomepageSliderShow();
  function blogHomepageSliderShow()
  {
    if (blogHomePageSlider >= document.body.clientWidth) {
      $('.tbcmsblog-event-home .tbnews-wrapper-info-box').owlCarousel({
        loop: false,
        dots: false,
        nav: false,
        rlt: rtlVal,
        responsive: {
          0: { items: 1},
          320:{ items: 1, slideBy: 1},
          400:{ items: 1, slideBy: 1},
          768:{ items: 1, slideBy: 1},
          992:{ items: 1, slideBy: 1},
          1200:{ items: 1, slideBy: 1},
          1600:{ items: 1, slideBy: 1},
          1800:{ items: 1, slideBy: 1}
        },
      });

      $('.tbcmsblogprev-btn').click(function(e){
        e.preventDefault();
        $('.tbcmsblog-event-home .owl-nav .owl-prev').trigger('click');
      });

      $('.tbcmsblognext-btn').click(function(e){
        e.preventDefault();
        $('.tbcmsblog-event-home .owl-nav .owl-next').trigger('click');
      });  
    }
  }

  



   /*************** Start left Right  Product Toggle in Mobile Size ***************************************************/
  changePaginationPosition();
  leftRightBlogTitleToggle();
  $(window).resize(function(){
    leftRightBlogTitleToggle();
    changePaginationPosition();
  });
  function changePaginationPosition()
  {
    $('.tbcmsblog-left-side .tbcms-blog-left-side-pagination-wrapper').insertAfter('.tbcmsblog-left-side .tbleft-right-title-wrapper .tbleft-right-title');

    if(document.body.clientWidth <= 1199 ) {
        $('.tbcmsblog-left-side .tbcms-blog-left-side-pagination-wrapper').insertAfter('.tbcmsblog-left-side .tbblog-event-inner-block');
    }
  } 
  function leftRightBlogTitleToggle()
  {
    $('.tbcmsblog-left-side .tbleft-right-title-toggle, .tbleft-right-penal-all-block .tbblog-event-all-block').removeClass('open');
  }

  $('.tbcmsblog-left-side .tbleft-right-title-toggle').on('click', function(e){
      e.preventDefault();
      if(document.body.clientWidth <= 1199){
        if($(this).hasClass('open')) {
          $(this).removeClass('open');
          $(this).parent().parent().find('.tbblog-event-all-block').removeClass('open').stop(false).slideUp(500, "swing");
        } else {
          $(this).addClass('open');
          $(this).parent().parent().find('.tbblog-event-all-block').addClass('open').stop(false).slideDown(500, "swing");
        }
      }
      e.stopPropagation();
    });
  /*************** End left Right  Product Toggle in Mobile Size ***************************************************/

});
