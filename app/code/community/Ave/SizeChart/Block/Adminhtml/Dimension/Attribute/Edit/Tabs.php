<?php

/**
 * Adminhtml dimension attribute edit page tabs
 *
 * @category    Ave
 * @package     Ave_SizeChart
 * @author      averun <dev@averun.com>
 */
class Ave_SizeChart_Block_Adminhtml_Dimension_Attribute_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    /**
     * constructor
     *
     * @access public
     * @author averun <dev@averun.com>
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('dimension_attribute_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('ave_sizechart')->__('Attribute Information'));
    }

    /**
     * @return Mage_Core_Block_Abstract
     */
    protected function _beforeToHtml()
    {
        $this->addTab(
            'main',
            array(
                'label'     => Mage::helper('ave_sizechart')->__('Properties'),
                'title'     => Mage::helper('ave_sizechart')->__('Properties'),
                'content'   => $this->getLayout()->createBlock(
                    'ave_sizechart/adminhtml_dimension_attribute_edit_tab_main'
                )
                ->toHtml(),
                'active'    => true
            )
        );
        $this->addTab(
            'labels',
            array(
                'label'     => Mage::helper('ave_sizechart')->__('Manage Label / Options'),
                'title'     => Mage::helper('ave_sizechart')->__('Manage Label / Options'),
                'content'   => $this->getLayout()->createBlock(
                    'ave_sizechart/adminhtml_dimension_attribute_edit_tab_options'
                )
                ->toHtml(),
            )
        );
        return parent::_beforeToHtml();
    }
}
