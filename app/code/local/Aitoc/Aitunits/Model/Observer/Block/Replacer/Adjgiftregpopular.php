<?php
/**
 * Product Units and Quantities
 *
 * @category:    Aitoc
 * @package:     Aitoc_Aitunits
 * @version      1.0.11
 * @license:     0JdTQfDMswel7fbpH42tkXIHe3fixI4GH3daX0aDVf
 * @copyright:   Copyright (c) 2015 AITOC, Inc. (http://www.aitoc.com)
 */
/**
 * @copyright  Copyright (c) 2012 AITOC, Inc. 
 */
class Aitoc_Aitunits_Model_Observer_Block_Replacer_Adjgiftregpopular
    extends Aitoc_Aitunits_Model_Observer_Block_Replacer_Catalogproductlist
{
    
    protected $_requiredBlockType = 'adjgiftreg/popular';
    
    protected function _getAllowedRoutes()
    {
        return array(
            'adjgiftreg_index_popular',
        );
    }

}