<?php
/**
 * idnovate.com
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category   Idnovate
 * @package    Idnovate_WhatsAppChat
 * @version    Release: 1.0.0
 * @author     idnovate.com (info@idnovate.com)
 * @copyright  Copyright (c) 2017 idnovate.com (http://www.idnovate.com)
 */

class Idnovate_WhatsAppChat_Block_Adminhtml_System_Config_Color extends Mage_Adminhtml_Block_System_Config_Form_Field {
	protected function _getElementHtml( Varien_Data_Form_Element_Abstract $element )
	{
		$color = new Varien_Data_Form_Element_Text();
		$data = array(
			'name'      => $element->getName(),
			'html_id'   => $element->getId(),
		);
		$color->setData($data);
		$color->setValue($element->getValue());
		$color->setForm($element->getForm());
		$color->addClass('color '.$element->getClass());
		return $color->getElementHtml();
	}
}
