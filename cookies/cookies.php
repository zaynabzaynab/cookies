<?php
/***
 * zineb el amri
 * Avril 2021
 */

if (!defined('_CAN_LOAD_FILES_')) {
    exit;
}

/**
 * Class Cookies
 */
class Cookies extends Module
{

    /**
     * Cookies constructor.
     */
    public function __construct()
    {
        $this->name = 'cookies';
        $this->author = 'zineb el amri';
        $this->version = '1.0';

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = 'Cookie Alert';
        $this->description = 'Show message alerting users about cookies';

        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);
    }

    /**
     * @return bool
     */
    public function install()
    {
        if (!parent::install() ||
                !$this->registerHook('displayHeader') ||
                !$this->registerHook('header'))
            return false;
        else return true ;
    }

    /**
     * @return bool
     */
    public function uninstall()
    {
        return  parent::uninstall();
    }

    public function hookdisplayHeader() {
        $this->context->smarty->assign([
           'message' => 'Ce site utilise des Cookies et vous donne le contrôle sur ceux que vous souhaitez activer.',
            'test' => $this->context->link->getModuleLink('cookies','Cookies'),
            'cookie' => $this->context->cookie->__get('cookie')

        ]);

            return $this->display(__file__, 'views/alert.tpl');
    }
    public function hookHeader()
    {
        return $this->hookDisplayHeader();
    }

}