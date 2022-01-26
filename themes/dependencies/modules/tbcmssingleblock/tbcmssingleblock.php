<?php
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2019 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once('classes/tbcmssingleblock_status.class.php');
include_once('classes/tbcmssingleblock_image_upload.class.php');

class TbcmsSingleBlock extends Module
{
    public function __construct()
    {
        $this->name = 'tbcmssingleblock';
        $this->tab = 'front_office_features';
        $this->version = '2.1.9';
        $this->author = 'TemplateBeta';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('TemplateBeta - Single Block');
        $this->description = $this->l('Its show single block on front-side.');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->module_key = '';

        $this->confirmUninstall = $this->l('Warning: all the data saved in your database will be deleted.'.
            ' Are you sure you want uninstall this module?');
    }


    public function install()
    {
        $this->installTab();
        $this->createVariable();
        
        return parent::install()
            && $this->registerHook('displayBackOfficeHeader')
            && $this->registerHook('displayHeader')
            && $this->registerHook('displayHome');
    }

    public function installTab()
    {
        $response = true;

        // First check for parent tab
        $parentTabID = Tab::getIdFromClassName('AdminTemplateBeta');

        if ($parentTabID) {
            $parentTab = new Tab($parentTabID);
        } else {
            $parentTab = new Tab();
            $parentTab->active = 1;
            $parentTab->name = array();
            $parentTab->class_name = "AdminTemplateBeta";
            foreach (Language::getLanguages() as $lang) {
                $parentTab->name[$lang['id_lang']] = "TemplateBeta Extension";
            }
            $parentTab->id_parent = 0;
            $parentTab->module = $this->name;
            $response &= $parentTab->add();
        }
        
        // Check for parent tab2
        $parentTab_2ID = Tab::getIdFromClassName('AdminTemplateBetaModules');
        if ($parentTab_2ID) {
            $parentTab_2 = new Tab($parentTab_2ID);
        } else {
            $parentTab_2 = new Tab();
            $parentTab_2->active = 1;
            $parentTab_2->name = array();
            $parentTab_2->class_name = "AdminTemplateBetaModules";
            foreach (Language::getLanguages() as $lang) {
                $parentTab_2->name[$lang['id_lang']] = "TemplateBeta Configure";
            }
            $parentTab_2->id_parent = $parentTab->id;
            $parentTab_2->module = $this->name;
            $response &= $parentTab_2->add();
        }
        // Created tab
        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = 'Admin'.$this->name;
        $tab->name = array();
        foreach (Language::getLanguages() as $lang) {
            $tab->name[$lang['id_lang']] = "Single Block";
        }
        $tab->id_parent = $parentTab_2->id;
        $tab->module = $this->name;
        $response &= $tab->add();

        return $response;
    }

    public function createVariable()
    {
        $languages = Language::getLanguages();
        $result = array();
        foreach ($languages as $lang) {
            $result['TBCMSSINGLEBLOCK_IMG'][$lang['id_lang']] = 'demo_img_1.png';
            $result['TBCMSSINGLEBLOCK_TITLE'][$lang['id_lang']] = 'Kyara Fashion';
            $result['TBCMSSINGLEBLOCK_SUB_DESCRIPTION'][$lang['id_lang']] = 'a Frindly cosmetics store';
            $result['TBCMSSINGLEBLOCK_DESCRIPTION'][$lang['id_lang']] = 'We are a global housewares product'
                .' design company. We bring thought and creativity to everyday items through original design.';


            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG'][$lang['id_lang']] = 'demo_img_2.jpg';
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2'][$lang['id_lang']] = 'demo_img_3.png';
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3'][$lang['id_lang']] = 'demo_img_4.png';
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4'][$lang['id_lang']] = 'demo_img_5.png';
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_TITLE'][$lang['id_lang']] = 'The Choise Of Your Style';
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_SUB_DESCRIPTION'][$lang['id_lang']] = 'Get Started With Decor';
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_DESCRIPTION'][$lang['id_lang']] = 'We are offering you the unique'
            .' goods because our product is the real treasure. If you are a true fan, you’ll love it.We are offering'
            .' you the unique goods because our product is the real treasure. If you are a true';
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_BTN_CAPTION'][$lang['id_lang']] = 'View More';
        }

        Configuration::updateValue('TBCMSSINGLEBLOCK_IMG', $result['TBCMSSINGLEBLOCK_IMG']);
        Configuration::updateValue('TBCMSSINGLEBLOCK_TITLE', $result['TBCMSSINGLEBLOCK_TITLE']);
        Configuration::updateValue('TBCMSSINGLEBLOCK_SUB_DESCRIPTION', $result['TBCMSSINGLEBLOCK_SUB_DESCRIPTION']);
        Configuration::updateValue('TBCMSSINGLEBLOCK_DESCRIPTION', $result['TBCMSSINGLEBLOCK_DESCRIPTION']);


        Configuration::updateValue(
            'TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG',
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG']
        );
        Configuration::updateValue(
            'TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2',
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2']
        );
        Configuration::updateValue(
            'TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3',
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3']
        );
        Configuration::updateValue(
            'TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4',
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4']
        );
        Configuration::updateValue(
            'TBCMSSINGLEBLOCK_SINGLE_BLOCK_TITLE',
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_TITLE']
        );
        Configuration::updateValue(
            'TBCMSSINGLEBLOCK_SINGLE_BLOCK_SUB_DESCRIPTION',
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_SUB_DESCRIPTION']
        );
        Configuration::updateValue(
            'TBCMSSINGLEBLOCK_SINGLE_BLOCK_DESCRIPTION',
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_DESCRIPTION']
        );
        Configuration::updateValue(
            'TBCMSSINGLEBLOCK_SINGLE_BLOCK_BTN_CAPTION',
            $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_BTN_CAPTION']
        );
        Configuration::updateValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_LINK', '#');
        Configuration::updateValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_STATUS', '1');
    }

    public function uninstall()
    {
        $this->uninstallTab();
        $this->deleteVariable();
        return parent::uninstall();
    }

    public function deleteVariable()
    {
        Configuration::deleteByName('TBCMSSINGLEBLOCK_IMG');
        Configuration::deleteByName('TBCMSSINGLEBLOCK_TITLE');
        Configuration::deleteByName('TBCMSSINGLEBLOCK_SUB_DESCRIPTION');
        Configuration::deleteByName('TBCMSSINGLEBLOCK_DESCRIPTION');

        Configuration::deleteByName('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG');
        Configuration::deleteByName('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2');
        Configuration::deleteByName('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3');
        Configuration::deleteByName('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4');
        Configuration::deleteByName('TBCMSSINGLEBLOCK_SINGLE_BLOCK_TITLE');
        Configuration::deleteByName('TBCMSSINGLEBLOCK_SINGLE_BLOCK_SUB_DESCRIPTION');
        Configuration::deleteByName('TBCMSSINGLEBLOCK_SINGLE_BLOCK_DESCRIPTION');
        Configuration::deleteByName('TBCMSSINGLEBLOCK_SINGLE_BLOCK_BTN_CAPTION');
        Configuration::deleteByName('TBCMSSINGLEBLOCK_SINGLE_BLOCK_LINK');
        Configuration::deleteByName('TBCMSSINGLEBLOCK_SINGLE_BLOCK_STATUS');
    }

    public function uninstallTab()
    {
        $id_tab = Tab::getIdFromClassName('Admin'.$this->name);
        $tab = new Tab($id_tab);
        $tab->delete();
        return true;
    }

    public function getContent()
    {
        $message = $this->postProcess();
        $output = $message
                .$this->renderForm();
        return $output;
    }

    public function postProcess()
    {
        $message = '';
        $result = array();
        $obj_image = new TbcmsSingleBlockImageUpload();
        $languages = Language::getLanguages();
        if (Tools::isSubmit('submittbcmsSingleBlockMainTitleForm')) {
            foreach ($languages as $lang) {
                if (!empty($_FILES['TBCMSSINGLEBLOCK_IMG_'.$lang['id_lang']]['name'])) {
                    $old_file = Configuration::get('TBCMSSINGLEBLOCK_IMG', $lang['id_lang']);
                    $new_file = $_FILES['TBCMSSINGLEBLOCK_IMG_'.$lang['id_lang']];
                    $ans = $obj_image->imageUploading($new_file, $old_file);
                    if ($ans['success']) {
                        $result['TBCMSSINGLEBLOCK_IMG'][$lang['id_lang']] = $ans['name'];
                    } else {
                        $message .= $ans['error'];
                        $result['TBCMSSINGLEBLOCK_IMG'][$lang['id_lang']] = $old_file;
                    }
                } else {
                    $old_file = Configuration::get('TBCMSSINGLEBLOCK_IMG', $lang['id_lang']);
                    $result['TBCMSSINGLEBLOCK_IMG'][$lang['id_lang']] = $old_file;
                }

                $tmp = Tools::getValue('TBCMSSINGLEBLOCK_TITLE_'.$lang['id_lang']);
                $result['TBCMSSINGLEBLOCK_TITLE'][$lang['id_lang']] = $tmp;

                $tmp = Tools::getValue('TBCMSSINGLEBLOCK_SUB_DESCRIPTION_'.$lang['id_lang']);
                $result['TBCMSSINGLEBLOCK_SUB_DESCRIPTION'][$lang['id_lang']] = $tmp;

                $tmp = Tools::getValue('TBCMSSINGLEBLOCK_DESCRIPTION_'.$lang['id_lang']);
                $result['TBCMSSINGLEBLOCK_DESCRIPTION'][$lang['id_lang']] = $tmp;
            }
            Configuration::updateValue('TBCMSSINGLEBLOCK_IMG', $result['TBCMSSINGLEBLOCK_IMG']);
           
            $tmp = $result['TBCMSSINGLEBLOCK_TITLE'];
            Configuration::updateValue('TBCMSSINGLEBLOCK_TITLE', $tmp);

            $tmp = $result['TBCMSSINGLEBLOCK_SUB_DESCRIPTION'];
            Configuration::updateValue('TBCMSSINGLEBLOCK_SUB_DESCRIPTION', $tmp);

            $tmp = $result['TBCMSSINGLEBLOCK_DESCRIPTION'];
            Configuration::updateValue('TBCMSSINGLEBLOCK_DESCRIPTION', $tmp);


            $message .= $this->displayConfirmation($this->l("Footer Logo is Updated."));
        }



        if (Tools::isSubmit('submittbcmsSingleBlockSingleBlockForm')) {
            foreach ($languages as $lang) {
                if (!empty($_FILES['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_'.$lang['id_lang']]['name'])) {
                    $old_file = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG', $lang['id_lang']);
                    $new_file = $_FILES['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_'.$lang['id_lang']];
                    $ans = $obj_image->imageUploading($new_file, $old_file);
                    if ($ans['success']) {
                        $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG'][$lang['id_lang']] = $ans['name'];
                    } else {
                        $message .= $ans['error'];
                        $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG'][$lang['id_lang']] = $old_file;
                    }
                } else {
                    $old_file = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG', $lang['id_lang']);
                    $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG'][$lang['id_lang']] = $old_file;
                }

                if (!empty($_FILES['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2_'.$lang['id_lang']]['name'])) {
                    $old_file = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2', $lang['id_lang']);
                    $new_file = $_FILES['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2_'.$lang['id_lang']];
                    $ans = $obj_image->imageUploading($new_file, $old_file);
                    if ($ans['success']) {
                        $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2'][$lang['id_lang']] = $ans['name'];
                    } else {
                        $message .= $ans['error'];
                        $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2'][$lang['id_lang']] = $old_file;
                    }
                } else {
                    $old_file = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2', $lang['id_lang']);
                    $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2'][$lang['id_lang']] = $old_file;
                }

                if (!empty($_FILES['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3_'.$lang['id_lang']]['name'])) {
                    $old_file = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3', $lang['id_lang']);
                    $new_file = $_FILES['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3_'.$lang['id_lang']];
                    $ans = $obj_image->imageUploading($new_file, $old_file);
                    if ($ans['success']) {
                        $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3'][$lang['id_lang']] = $ans['name'];
                    } else {
                        $message .= $ans['error'];
                        $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3'][$lang['id_lang']] = $old_file;
                    }
                } else {
                    $old_file = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3', $lang['id_lang']);
                    $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3'][$lang['id_lang']] = $old_file;
                }

                if (!empty($_FILES['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4_'.$lang['id_lang']]['name'])) {
                    $old_file = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4', $lang['id_lang']);
                    $new_file = $_FILES['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4_'.$lang['id_lang']];
                    $ans = $obj_image->imageUploading($new_file, $old_file);
                    if ($ans['success']) {
                        $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4'][$lang['id_lang']] = $ans['name'];
                    } else {
                        $message .= $ans['error'];
                        $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4'][$lang['id_lang']] = $old_file;
                    }
                } else {
                    $old_file = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4', $lang['id_lang']);
                    $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4'][$lang['id_lang']] = $old_file;
                }

                $tmp = Tools::getValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_TITLE_'.$lang['id_lang']);
                $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_TITLE'][$lang['id_lang']] = $tmp;

                $tmp = Tools::getValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_SUB_DESCRIPTION_'.$lang['id_lang']);
                $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_SUB_DESCRIPTION'][$lang['id_lang']] = $tmp;

                $tmp = Tools::getValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_DESCRIPTION_'.$lang['id_lang']);
                $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_DESCRIPTION'][$lang['id_lang']] = $tmp;

                $tmp = Tools::getValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_BTN_CAPTION_'.$lang['id_lang']);
                $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_BTN_CAPTION'][$lang['id_lang']] = $tmp;
            }

            $tmp = $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG'];
            Configuration::updateValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG', $tmp);

            $tmp = $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2'];
            Configuration::updateValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2', $tmp);

            $tmp = $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3'];
            Configuration::updateValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3', $tmp);

            $tmp = $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4'];
            Configuration::updateValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4', $tmp);

            $tmp = $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_TITLE'];
            Configuration::updateValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_TITLE', $tmp);
            $tmp = $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_SUB_DESCRIPTION'];
            Configuration::updateValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_SUB_DESCRIPTION', $tmp);
            $tmp = $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_DESCRIPTION'];
            Configuration::updateValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_DESCRIPTION', $tmp);
            $tmp = $result['TBCMSSINGLEBLOCK_SINGLE_BLOCK_BTN_CAPTION'];
            Configuration::updateValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_BTN_CAPTION', $tmp);

            $tmp = Tools::getValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_LINK');
            Configuration::updateValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_LINK', $tmp);

            $tmp = Tools::getValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_STATUS');
            Configuration::updateValue('TBCMSSINGLEBLOCK_SINGLE_BLOCK_STATUS', $tmp);
        }

        $this->clearCustomSmartyCache('tbcmssingleblock_display_home.tpl');
        return $message;
    }

    public function clearCustomSmartyCache($cache_id)
    {
        if (Cache::isStored($cache_id)) {
            Cache::clean($cache_id);
        }
    }

    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        $form = array();

        $tbcms_obj = new TbcmsSingleBlockStatus();
        $show_fields = $tbcms_obj->fieldStatusInformation();
        if ($show_fields['main_status']) {
            $form[] = $this->tbcmsSingleBlockMainTitleForm();
        }

        if ($show_fields['record_form']) {
            $form[] = $this->tbcmsSingleBlockSingleBlockForm();
        }

        return $helper->generateForm($form);
    }

    protected function tbcmsSingleBlockMainTitleForm()
    {
        $tbcms_obj = new TbcmsSingleBlockStatus();
        $show_fields = $tbcms_obj->fieldStatusInformation();
        $input = array();

        if ($show_fields['main_image']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'image_file',
                    'name' => 'TBCMSSINGLEBLOCK_IMG',
                    'label' => $this->l('Image'),
                    'lang' => true,
                );
        }

        if ($show_fields['main_title']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'text',
                    'name' => 'TBCMSSINGLEBLOCK_TITLE',
                    'label' => $this->l('Main Title'),
                    'lang' => true,
                );
        }

        if ($show_fields['main_sub_title']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'text',
                    'name' => 'TBCMSSINGLEBLOCK_SUB_DESCRIPTION',
                    'label' => $this->l('Short Description'),
                    'lang' => true,
                );
        }

        if ($show_fields['main_description']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'text',
                    'name' => 'TBCMSSINGLEBLOCK_DESCRIPTION',
                    'label' => $this->l('Description'),
                    'lang' => true,
                );
        }

        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Main Title'),
                'icon' => 'icon-support',
                ),
                'input' => $input,
                'submit' => array(
                    'title' => $this->l('Save'),
                    'name' => 'submittbcmsSingleBlockMainTitleForm',
                ),
            ),
        );
    }

    protected function tbcmsSingleBlockSingleBlockForm()
    {
        $tbcms_obj = new TbcmsSingleBlockStatus();
        $show_fields = $tbcms_obj->fieldStatusInformation();
        $input = array();

        if ($show_fields['single_block_image']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'image_file',
                    'name' => 'TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG',
                    'label' => $this->l('Image'),
                    'lang' => true,
                );
        }

        if ($show_fields['single_block_image_2']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'image_file_2',
                    'name' => 'TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2',
                    'label' => $this->l('Image 2'),
                    'lang' => true,
                );
        }

        if ($show_fields['single_block_image_3']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'image_file_3',
                    'name' => 'TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3',
                    'label' => $this->l('Image 3'),
                    'lang' => true,
                );
        }

        if ($show_fields['single_block_image_4']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'image_file_4',
                    'name' => 'TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4',
                    'label' => $this->l('Image 4'),
                    'lang' => true,
                );
        }

        if ($show_fields['single_block_title']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'text',
                    'name' => 'TBCMSSINGLEBLOCK_SINGLE_BLOCK_TITLE',
                    'label' => $this->l('Main Title'),
                    'lang' => true,
                );
        }

        if ($show_fields['single_block_sub_title']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'text',
                    'name' => 'TBCMSSINGLEBLOCK_SINGLE_BLOCK_SUB_DESCRIPTION',
                    'label' => $this->l('Short Description'),
                    'lang' => true,
                );
        }

        if ($show_fields['single_block_description']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'text',
                    'name' => 'TBCMSSINGLEBLOCK_SINGLE_BLOCK_DESCRIPTION',
                    'label' => $this->l('Description'),
                    'lang' => true,
                );
        }

       

        if ($show_fields['single_block_btn_caption']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'text',
                    'name' => 'TBCMSSINGLEBLOCK_SINGLE_BLOCK_BTN_CAPTION',
                    'label' => $this->l('Button Caption'),
                    'lang' => true,
                );
        }


        if ($show_fields['single_block_link']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'text',
                    'name' => 'TBCMSSINGLEBLOCK_SINGLE_BLOCK_LINK',
                    'label' => $this->l('Link'),
                );
        }

        if ($show_fields['single_block_status']) {
            $input[] =  array(
                        'type' => 'switch',
                        'label' => $this->l('Status'),
                        'name' => 'TBCMSSINGLEBLOCK_SINGLE_BLOCK_STATUS',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Show')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Hide')
                            )
                        )
                    );
        }


        
        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Footer Logo'),
                'icon' => 'icon-support',
                ),
                'input' => $input,
                'submit' => array(
                    'title' => $this->l('Save'),
                    'name' => 'submittbcmsSingleBlockSingleBlockForm',
                ),
            ),
        );
    }

    protected function getConfigFormValues()
    {
        $fields = array();
        $languages = Language::getLanguages();
        
        foreach ($languages as $lang) {
            $tmp = Configuration::get('TBCMSSINGLEBLOCK_IMG', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_IMG'][$lang['id_lang']] = $tmp;

            $tmp = Configuration::get('TBCMSSINGLEBLOCK_TITLE', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_TITLE'][$lang['id_lang']] = $tmp;

            $tmp = Configuration::get('TBCMSSINGLEBLOCK_SUB_DESCRIPTION', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_SUB_DESCRIPTION'][$lang['id_lang']] = $tmp;

            $tmp = Configuration::get('TBCMSSINGLEBLOCK_DESCRIPTION', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_DESCRIPTION'][$lang['id_lang']] = $tmp;

            $tmp = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG'][$lang['id_lang']] = $tmp;

            $tmp = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2'][$lang['id_lang']] = $tmp;

            $tmp = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3'][$lang['id_lang']] = $tmp;

            $tmp = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4'][$lang['id_lang']] = $tmp;

            $tmp = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_TITLE', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_SINGLE_BLOCK_TITLE'][$lang['id_lang']] = $tmp;

            $tmp = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_SUB_DESCRIPTION', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_SINGLE_BLOCK_SUB_DESCRIPTION'][$lang['id_lang']] = $tmp;

            $tmp = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_DESCRIPTION', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_SINGLE_BLOCK_DESCRIPTION'][$lang['id_lang']] = $tmp;

            $tmp = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_BTN_CAPTION', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_SINGLE_BLOCK_BTN_CAPTION'][$lang['id_lang']] = $tmp;

            $tmp = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_LINK', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_SINGLE_BLOCK_LINK'][$lang['id_lang']] = $tmp;

            $tmp = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_LINK', $lang['id_lang']);
            $fields['TBCMSSINGLEBLOCK_SINGLE_BLOCK_LINK'][$lang['id_lang']] = $tmp;
        }

        $tmp = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_LINK');
        $fields['TBCMSSINGLEBLOCK_SINGLE_BLOCK_LINK'] = $tmp;

        $tmp = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_STATUS');
        $fields['TBCMSSINGLEBLOCK_SINGLE_BLOCK_STATUS'] = $tmp;

        $path = _MODULE_DIR_.$this->name."/views/img/";
        $this->context->smarty->assign("path", $path);
        
        return $fields;
    }

    public function hookdisplayHeader()
    {
        $this->context->controller->addJS($this->_path.'views/js/front.js');
        $this->context->controller->addCSS($this->_path.'views/css/front.css');
    }

    public function hookDisplayTopColumn()
    {
        return $this->hookdisplayFooter();
    }

    public function hookDisplayFooterBefore()
    {
        return $this->hookdisplayFooter();
    }

    public function hookdisplayFooterPart1()
    {
        return $this->hookdisplayFooter();
    }

    public function getArrMainTitle($main_heading, $main_heading_data)
    {
        if (!$main_heading['main_title'] || empty($main_heading_data['title'])) {
            $main_heading['main_title'] = false;
        }
        if (!$main_heading['main_sub_title'] || empty($main_heading_data['short_desc'])) {
            $main_heading['main_sub_title'] = false;
        }
        if (!$main_heading['main_description'] || empty($main_heading_data['desc'])) {
            $main_heading['main_description'] = false;
        }
        if (!$main_heading['main_image'] || empty($main_heading_data['image'])) {
            $main_heading['main_image'] = false;
        }

        if (!$main_heading['main_title'] &&
            !$main_heading['main_sub_title'] &&
            !$main_heading['main_description'] &&
            !$main_heading['main_image']) {
            $main_heading['main_status'] = false;
        }
        return $main_heading;
    }

    public function showFrontData()
    {
        $result = array();
        $cookie = Context::getContext()->cookie;
        $id_lang = $cookie->id_lang;

        $result['image'] = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG', $id_lang);
        $result['image_2'] = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_2', $id_lang);
        $result['image_3'] = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_3', $id_lang);
        $result['image_4'] = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_IMG_4', $id_lang);
        $result['title'] = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_TITLE', $id_lang);
        $result['sub_description'] = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_SUB_DESCRIPTION', $id_lang);
        $result['description'] = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_DESCRIPTION', $id_lang);
        $result['btn_caption'] = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_BTN_CAPTION', $id_lang);
        $result['link'] = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_LINK');
        $result['status'] = Configuration::get('TBCMSSINGLEBLOCK_SINGLE_BLOCK_STATUS');

        return $result;
    }

    public function showFrontSideResult()
    {
        $cookie = Context::getContext()->cookie;
        $id_lang = $cookie->id_lang;

        $tbcms_obj = new TbcmsSingleBlockStatus();
        $main_heading = $tbcms_obj->fieldStatusInformation();

        if ($main_heading['main_status']) {
            $main_heading_data = array();
            $main_heading_data['title'] = Configuration::get('TBCMSSINGLEBLOCK_TITLE', $id_lang);
            $main_heading_data['short_desc'] = Configuration::get('TBCMSSINGLEBLOCK_SUB_DESCRIPTION', $id_lang);
            $main_heading_data['desc'] = Configuration::get('TBCMSSINGLEBLOCK_DESCRIPTION', $id_lang);
            $main_heading_data['image'] = Configuration::get('TBCMSSINGLEBLOCK_IMG', $id_lang);
            $main_heading = $this->getArrMainTitle($main_heading, $main_heading_data);
            $main_heading['data'] = $main_heading_data;
        }

        $disArrResult = array();
        $disArrResult['data'] = $this->showFrontData();
        $disArrResult['status'] = $disArrResult['data']['status'];
        $disArrResult['path'] = _MODULE_DIR_.$this->name."/views/img/";
        $disArrResult['id_lang'] = $id_lang;

        $this->context->smarty->assign('main_heading', $main_heading);
        $this->context->smarty->assign('dis_arr_result', $disArrResult);

        return $disArrResult['status']?true:false;
    }

    public function hookdisplayHome()
    {
        if (!Cache::isStored('tbcmssingleblock_display_home.tpl')) {
            $result = $this->showFrontSideResult();

            if ($result) {
                $output = $this->display(__FILE__, 'views/templates/front/display_home.tpl');
            } else {
                $output = '';
            }


            Cache::store('tbcmssingleblock_display_home.tpl', $output);
        }

        return Cache::retrieve('tbcmssingleblock_display_home.tpl');
    }
}
