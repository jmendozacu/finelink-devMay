<?php

class Chili_Web2print_Model_Mysql4_Concept_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {
    public function _construct() {
        parent::_construct();
        $this->_init('web2print/concept');
    }

}