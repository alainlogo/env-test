{*
* 2007-2019 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
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
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{strip}
{extends file='page.tpl'}

{block name='page_content_container' prepend}
    <div id="content-hook_order_confirmation" class="card">
      <div class="card-block">
        <div class="row">
          <div class="col-md-12">

            {block name='order_confirmation_header'}
              <h3 class="h1 card-title">
                <i class="material-icons rtl-no-flip done">&#xE876;</i>{l s='Your order is confirmed' d='Shop.Theme.Checkout'}
              </h3>
            {/block}

            <p>
              {l s='An email has been sent to your mail address %email%.' d='Shop.Theme.Checkout' sprintf=['%email%' => $customer.email]}
              {if $order.details.invoice_url}
                {* [1][/1] is for a HTML tag. *}
                {l
                  s='You can also [1]download your invoice[/1]'
                  d='Shop.Theme.Checkout'
                  sprintf=[
                    '[1]' => "<a href='{$order.details.invoice_url}'>",
                    '[/1]' => "</a>"
                  ]
                }
              {/if}
            </p>

            {block name='hook_order_confirmation'}
              {$HOOK_ORDER_CONFIRMATION nofilter}
            {/block}

          </div>
        </div>
      </div>
    </div>
{/block}

{block name='page_content_container'}
  <div class="tborder-conformation-wrapper">
    <div id="content" class="page-content page-order-confirmation card">
      <div class="card-block">
        <div class="row">

          {block name='order_confirmation_table'}
            {include
              file='checkout/_partials/order-confirmation-table.tpl'
              products=$order.products
              subtotals=$order.subtotals
              totals=$order.totals
              labels=$order.labels
              add_product_link=false
            }
          {/block}

          {block name='order_details'}
            <div id="order-details" class="col-md-4">
              <h3 class="h3 card-title">{l s='Order details' d='Shop.Theme.Checkout'}:</h3>
              <ul>
                <li>{l s='Order reference: %reference%' d='Shop.Theme.Checkout' sprintf=['%reference%' => $order.details.reference]}</li>
                <li>{l s='Payment method: %method%' d='Shop.Theme.Checkout' sprintf=['%method%' => $order.details.payment]}</li>
                {if !$order.details.is_virtual}
                  <li>
                    {l s='Shipping method: %method%' d='Shop.Theme.Checkout' sprintf=['%method%' => $order.carrier.name]}<br>
                    <em>{$order.carrier.delay}</em>
                  </li>
                {/if}
              </ul>
            </div>
          {/block}

        </div>
      </div>
    </div>

    {block name='hook_payment_return'}
      {if ! empty($HOOK_PAYMENT_RETURN)}
      <div id="content-hook_payment_return" class="card definition-list">
        <div class="card-block">
          <div class="row">
            <div class="col-md-12">
              {$HOOK_PAYMENT_RETURN nofilter}
            </div>
          </div>
        </div>
      </div>
      {/if}
    {/block}
  </div>

  {block name='customer_registration_form'}
    {if $customer.is_guest}
      <div id="registration-form" class="card">
        <div class="card-block">
          <h4 class="h4">{l s='Save time on your next order, sign up now' d='Shop.Theme.Checkout'}</h4>
          {render file='customer/_partials/customer-form.tpl' ui=$register_form}
        </div>
      </div>
    {/if}
  {/block}

  {block name='hook_order_confirmation_1'}
    {hook h='displayOrderConfirmation1'}
  {/block}

  {block name='hook_order_confirmation_2'}
    <div id="content-hook-order-confirmation-footer">
      {hook h='displayOrderConfirmation2'}
    </div>
  {/block}
{/block}
{/strip}