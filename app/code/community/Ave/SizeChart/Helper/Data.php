<?php

/**
 * SizeChart default helper
 *
 * @category    Ave
 * @package     Ave_SizeChart
 * @author      averun <dev@averun.com>
 */
class Ave_SizeChart_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * convert array to options
     *
     * @access public
     * @param $options
     * @return array
     * @author averun <dev@averun.com>
     */
    public function convertOptions($options)
    {
        $converted = array();
        foreach ($options as $option) {
            if (isset($option['value']) && !is_array($option['value']) &&
                isset($option['label']) && !is_array($option['label'])) {
                $converted[$option['value']] = $option['label'];
            }
        }

        return $converted;
    }
}
