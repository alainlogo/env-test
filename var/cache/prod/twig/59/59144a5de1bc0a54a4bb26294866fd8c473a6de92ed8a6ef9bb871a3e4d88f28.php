<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__d5307eee14a51fba264be531d0f286be2088d10c42c5897d9cbfd401706e614f */
class __TwigTemplate_5abd86466668187861c4bc45ab466b36900c1e17500028aa1fd90a4ec4ee6f3c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/test-ab/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/test-ab/img/app_icon.png\" />

<title>Thème et logo > Thème • Atout Beauté</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.8.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '27244aa4e6c87a7e373a9e0275d1f589';
    var token_admin_orders = 'd97e1fe69ed6725f3611830cc840703b';
    var token_admin_customers = 'dbb207f90bc8b317bba37515b34a46f4';
    var token_admin_customer_threads = 'f055b537c8cd851fe63b9d1e03203dbe';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '4fb104e9d02ef3c954a0fb8e702999cd';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/test-ab/admin789fh1mfc/index.php/improve/modules/catalog/recommended?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU';
    var admin_notification_get_link = '/test-ab/admin789fh1mfc/index.php/common/notifications?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU';
    var admin_notification_push_link = '/test-ab/admin789fh1mfc/index.php/common/notifications/ack?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/test-ab/admin789fh1mfc/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/admin789fh1mfc/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/js/jquery/ui/themes/base/jquery.ui.core.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/js/jquery/ui/themes/base/jquery.ui.theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/modules/tbcmscustomsetting/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/modules/tbcmstabproducts/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/modules/tbcmspaymenticon/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/modules/tbcmstestimonial/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test-ab/modules/tbcmsbrandlist/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/test-ab\\/admin789fh1mfc\\/\";
var baseDir = \"\\/test-ab\\/\";
var changeFormLanguageUrl = \"\\/test-ab\\/admin789fh1mfc\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/test-ab/admin789fh1mfc/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/js/admin.js?v=1.7.8.2\"></script>
<script type=\"text/javascript\" src=\"/test-ab/admin789fh1mfc/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/js/tools.js?v=1.7.8.2\"></script>
<script type=\"text/javascript\" src=\"/test-ab/admin789fh1mfc/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/admin789fh1mfc/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/test-ab/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/js/jquery/ui/jquery.ui.core.min.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/js/jquery/ui/jquery.ui.widget.min.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/js/jquery/ui/jquery.ui.mouse.min.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/js/jquery/ui/jquery.ui.sortable.min.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/modules/tbcmscustomsetting/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/modules/tbcmstabproducts/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/modules/tbcmspaymenticon/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/modules/tbcmstestimonial/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/test-ab/modules/tbcmsbrandlist/views/js/back.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/test-ab\\/admin789fh1mfc\\/index.php?controller=AdminGamification&token=403788f5db4f0aef76ef76974fc81303\";
            var current_id_tab = 53;
        </script>

";
        // line 107
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-fr adminthemes\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminDashboard&amp;token=4328962e8837606f08c8f2b455a565d1\"></a>
      <span id=\"shop_version\">1.7.8.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminOrders&amp;token=d97e1fe69ed6725f3611830cc840703b\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=6463b2cc2557ac6bb3a6406acef741c2\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/test-ab/admin789fh1mfc/index.php/improve/modules/manage?token=4c5a77611a670a4dc09630bb9b124785\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=52dd5badcc0e0fbfcb5bb2117a6905f4\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/test-ab/admin789fh1mfc/index.php/sell/catalog/products/new?token=4c5a77611a670a4dc09630bb9b124785\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/test-ab/admin789fh1mfc/index.php/sell/catalog/categories/new?token=4c5a77611a670a4dc09630bb9b124785\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminModules&amp;&amp;configure=tbcmsblog&amp;token=f6e67f72e7d976d8846a405aaca6c2be\"
                 data-item=\"TemplateBeta Settings\"
      >TemplateBeta Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"155\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes\"
        data-post-link=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminQuickAccesses&token=06fdf981feb1ba43cb6ae56d3c4b0344\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Th&egrave;me et logo - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminQuickAccesses&token=06fdf981feb1ba43cb6ae56d3c4b0344\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/test-ab/admin789fh1mfc/index.php?controller=AdminSearch&amp;token=f977ab78f96699431dfcf1559d803ff0\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/test-ab/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=8a27822ff776ea7ac2a9a5174ce85828\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/test-ab/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Alain</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/test-ab/admin789fh1mfc/index.php/configure/advanced/employees/1/edit?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\">
      <i class=\"material-icons\">settings</i>
      Votre profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminLogin&amp;logout=1&amp;token=a782cf4f007005baa93797b233af71c3\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/test-ab/admin789fh1mfc/index.php/configure/advanced/employees/toggle-navigation?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminDashboard&amp;token=4328962e8837606f08c8f2b455a565d1\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"/test-ab/admin789fh1mfc/index.php/sell/orders/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Commandes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/sell/orders/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/sell/orders/invoices/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/sell/orders/credit-slips/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/sell/orders/delivery-slips/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminCarts&amp;token=8a27822ff776ea7ac2a9a5174ce85828\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/test-ab/admin789fh1mfc/index.php/sell/catalog/products?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/sell/catalog/products?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/sell/catalog/categories?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/sell/catalog/monitoring/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminAttributesGroups&amp;token=266961a33c9574e0bbad892693e98982\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/sell/catalog/brands/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/sell/attachments/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminCartRules&amp;token=52dd5badcc0e0fbfcb5bb2117a6905f4\" class=\"link\"> Réductions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/sell/stocks/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Stock
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/test-ab/admin789fh1mfc/index.php/sell/customers/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clients
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/sell/customers/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/sell/addresses/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminCustomerThreads&amp;token=f055b537c8cd851fe63b9d1e03203dbe\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    SAV
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminCustomerThreads&amp;token=f055b537c8cd851fe63b9d1e03203dbe\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/sell/customer-service/order-messages/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminReturn&amp;token=86b7949971b34041117ab070a4f5005d\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminLegacyStatsMetrics&amp;token=3610cd92351850497da1f3f131d9fa55\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"151\" id=\"subtab-AdminLegacyStatsMetrics\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminLegacyStatsMetrics&amp;token=3610cd92351850497da1f3f131d9fa55\" class=\"link\"> Statistiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"152\" id=\"subtab-AdminMetricsStats\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminMetricsStats&amp;token=0a4d451dd42480ba696821acdbdf444a\" class=\"link\"> PrestaShop Metrics
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/test-ab/admin789fh1mfc/index.php/improve/modules/manage?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/improve/modules/manage?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Gestionnaire de modules 
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/modules/addons/modules/catalog?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/test-ab/admin789fh1mfc/index.php/improve/design/themes/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Apparence
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/improve/design/themes/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/modules/addons/themes/catalog?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/improve/design/mail_theme/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Thème d&#039;email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/improve/design/cms-pages/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/improve/design/modules/positions/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminImages&amp;token=63e79453973d0b579d8a8bd364366745\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/modules/link-widget/list?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Liste de liens
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminCarriers&amp;token=2e6221b14d9771f5b440c499493f94a7\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Livraison
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminCarriers&amp;token=2e6221b14d9771f5b440c499493f94a7\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/improve/shipping/preferences/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/test-ab/admin789fh1mfc/index.php/improve/payment/payment_methods?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Paiement
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/improve/payment/payment_methods?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/improve/payment/preferences?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/test-ab/admin789fh1mfc/index.php/improve/international/localization/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/improve/international/localization/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/improve/international/zones/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/improve/international/taxes/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/improve/international/translations/settings?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"153\" id=\"subtab-Marketing\">
                  <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminPsfacebookModule&amp;token=e78f38c474a1dd307d233adba1f81f4d\" class=\"link\">
                    <i class=\"material-icons mi-campaign\">campaign</i>
                    <span>
                    Marketing
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-153\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"154\" id=\"subtab-AdminPsfacebookModule\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminPsfacebookModule&amp;token=e78f38c474a1dd307d233adba1f81f4d\" class=\"link\"> Facebook
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"156\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=c52e69aba3a2149e6d55374e444c872d\" class=\"link\"> Google
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"159\" id=\"subtab-Adminxprtdashboard\">
                  <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmspost&amp;token=e6c6140b3d49356a39ae80bffde657f6\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    TemplateBeta Blog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-159\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"160\" id=\"subtab-Admintbcmspost\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmspost&amp;token=e6c6140b3d49356a39ae80bffde657f6\" class=\"link\"> Blog Posts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"161\" id=\"subtab-Admintbcmscategory\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmscategory&amp;token=6a788471bb64555f1fb44c08a0ee90d6\" class=\"link\"> Blog Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"162\" id=\"subtab-Admintbcmscomment\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmscomment&amp;token=f012aef665b6d41753f2046cbb881d89\" class=\"link\"> Blog Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"163\" id=\"subtab-Admintbcmsimagetype\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmsimagetype&amp;token=13ca6bb11ee4e55a459f438243dc4d92\" class=\"link\"> Blog Image Type
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/test-ab/admin789fh1mfc/index.php/configure/shop/preferences/preferences?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Paramètres de la boutique
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/shop/preferences/preferences?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/shop/order-preferences/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/shop/product-preferences/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/shop/customer-preferences/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/shop/contacts/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/shop/seo-urls/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminSearchConf&amp;token=b168cbede80a4663bd843bc59de6e3d4\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminGamification&amp;token=403788f5db4f0aef76ef76974fc81303\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/test-ab/admin789fh1mfc/index.php/configure/advanced/system-information/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Paramètres avancés
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/advanced/system-information/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/advanced/performance/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/advanced/administration/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/advanced/emails/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/advanced/import/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/advanced/employees/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/advanced/sql-requests/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/advanced/logs/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/advanced/webservice-keys/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                                
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                              <a href=\"/test-ab/admin789fh1mfc/index.php/configure/advanced/feature-flags/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" class=\"link\"> Fonctionnalités Expérimentales
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"164\" id=\"tab-AdminTemplateBeta\">
              <span class=\"title\">TemplateBeta Extension</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"165\" id=\"subtab-AdminTemplateBetaModules\">
                  <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmsblogdisplayposts&amp;token=2828b4d550a0d79aafa03a0c659a91cc\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    TemplateBeta Configure
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-165\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"166\" id=\"subtab-Admintbcmsblogdisplayposts\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmsblogdisplayposts&amp;token=2828b4d550a0d79aafa03a0c659a91cc\" class=\"link\"> Blog on Home Page
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"167\" id=\"subtab-Admintbcmsbrandlist\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmsbrandlist&amp;token=77274695d1d3da1d96c701ed1e8be549\" class=\"link\"> Brand List
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"168\" id=\"subtab-Admintbcmscookiesnotice\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmscookiesnotice&amp;token=26daea60b52cf4678610af4fa4cb2acc\" class=\"link\"> Cookies Text
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"170\" id=\"subtab-Admintbcmscustomerservices\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmscustomerservices&amp;token=115d8666adfb805a8b3a833cd61b8f7d\" class=\"link\"> Customer Services
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"171\" id=\"subtab-Admintbcmsinfinitescroll\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmsinfinitescroll&amp;token=6227741eeeb7e5c71ceecc65513d5399\" class=\"link\"> Infinite Scroll
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"172\" id=\"subtab-Admintbcmsnewsletterpopup\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmsnewsletterpopup&amp;token=780bcf7b3fb15bb5c2269b2b67b1d596\" class=\"link\"> Newsletter Popup
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"173\" id=\"subtab-Admintbcmspaymenticon\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmspaymenticon&amp;token=985d8625a79cc03916fb5ead10adb7d5\" class=\"link\"> Payment Icon
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"174\" id=\"subtab-Admintbcmsproductcomments\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmsproductcomments&amp;token=f5fc00a8a366f6908e69ce9000dfe9c7\" class=\"link\"> Product Comment
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"175\" id=\"subtab-Admintbcmsrightsideofferbanner\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmsrightsideofferbanner&amp;token=88dc70de7225fb709da0e9b4ec41d6f4\" class=\"link\"> Right Side Offer Banner
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"176\" id=\"subtab-Admintbcmsstockinfo\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmsstockinfo&amp;token=9f28277303b52ccf626a68f39b78924f\" class=\"link\"> Stock Indicator
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"177\" id=\"subtab-Admintbcmstabproducts\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmstabproducts&amp;token=afde0e98dd5b35a9834f241a32e2547b\" class=\"link\"> Tab Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"178\" id=\"subtab-Admintbcmstestimonial\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmstestimonial&amp;token=aa0253daa3fbb24390032e5ed9ece90e\" class=\"link\"> Testimonial
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"179\" id=\"subtab-Admintbcmswishlist\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmswishlist&amp;token=87650edb7c7f2de3e0e505dddf196659\" class=\"link\"> Customer&#039;s Wishlist
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"180\" id=\"subtab-Admintbcmsslider\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmsslider&amp;token=ffcedb2e0c049d514923fb276d194e14\" class=\"link\"> Main Slider
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"181\" id=\"subtab-Admintbcmsmultibanner1\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmsmultibanner1&amp;token=c553b3458ca7aa18dcdfa56273acda65\" class=\"link\"> MultiBanner 1
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"182\" id=\"subtab-Admintbcmssingleblock\">
                              <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmssingleblock&amp;token=fa873d321064885e2c6560f5d8ff9ef5\" class=\"link\"> Single Block
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"169\" id=\"subtab-Admintbcmscustomsetting\">
                  <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=Admintbcmscustomsetting&amp;token=ec5055f8c2e7ffe0f7c3ca23eec5f4fb\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Custom Setting
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Thème et logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Thème et logo &gt; Thème          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/test-ab/admin789fh1mfc/index.php/improve/design/themes/import?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\"                  title=\"Ajouter un thème\"                >
                  <i class=\"material-icons\">add</i>                  Ajouter un thème
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/test-ab/admin789fh1mfc/index.php/improve/design/themes/export?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\"                  title=\"Exporter le thème actif\"                >
                  <i class=\"material-icons\">cloud_download</i>                  Exporter le thème actif
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/test-ab/admin789fh1mfc/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminThemes%253Fversion%253D1.7.8.2%2526country%253Dfr/Aide?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li class=\"nav-item\">
                    <a href=\"/test-ab/admin789fh1mfc/index.php/improve/design/themes/?_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"53\">
                      Thème et logo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminPsThemeCustoConfiguration&token=a06560171a4d1d17c7148b1f90b1273d\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"131\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminPsThemeCustoAdvanced&token=90aa6272ccf349ac2e05d6d38abbc78b\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"132\">
                      Personnalisation avancée
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
    </div>
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Modules et services recommandés',
        'Close': 'Fermer',
      },
      recommendedModulesUrl: '/test-ab/admin789fh1mfc/index.php/modules/addons/modules/recommended?tabClassName=AdminThemes&_token=sMMfzArgGz6om7iuH1mW2j0bSCqDwcdJnV2zb2SdGVU',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1414
        $this->displayBlock('content_header', $context, $blocks);
        // line 1415
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1416
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1417
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1418
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/test-ab/admin789fh1mfc/index.php?controller=AdminDashboard&amp;token=4328962e8837606f08c8f2b455a565d1\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=alain%40stellagreen.fr&amp;firstname=Alain&amp;lastname=Logossoukpe&amp;website=http%3A%2F%2Flocalhost%2Ftest-ab%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/test-ab/admin789fh1mfc/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=alain%40stellagreen.fr&amp;firstname=Alain&amp;lastname=Logossoukpe&amp;website=http%3A%2F%2Flocalhost%2Ftest-ab%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1525
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 107
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1414
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1415
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1416
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1417
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1525
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__d5307eee14a51fba264be531d0f286be2088d10c42c5897d9cbfd401706e614f";
    }

    public function getDebugInfo()
    {
        return array (  1615 => 1525,  1610 => 1417,  1605 => 1416,  1600 => 1415,  1595 => 1414,  1586 => 107,  1578 => 1525,  1469 => 1418,  1466 => 1417,  1463 => 1416,  1460 => 1415,  1458 => 1414,  147 => 107,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d5307eee14a51fba264be531d0f286be2088d10c42c5897d9cbfd401706e614f", "");
    }
}
