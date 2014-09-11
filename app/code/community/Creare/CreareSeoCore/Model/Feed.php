<?php
class Creare_CreareSeoCore_Model_Feed extends Mage_AdminNotification_Model_Feed {
    public function getFeedUrl() {
        $url = 
            Mage::getStoreConfigFlag(self::XML_USE_HTTPS_PATH) ? 'https://' : 'http://'
            . 'www.creare.co.uk/feed?post_type=notifications';
    }
    
    public function update() {
        $model  = Mage::getModel('notify/feed');
        $model->checkUpdate();
    }
}