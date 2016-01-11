<?php

namespace ClassyLlama\AvaTax\Controller\Adminhtml\Tax\Classes\Customer;

use ClassyLlama\AvaTax\Controller\Adminhtml\Tax\Classes\Base;

/**
 * Adminhtml controller
 */
class Edit extends Base\Edit
{
    /**
     * Tax class type
     *
     * @var null|string
     */
    protected $classType = \Magento\Tax\Model\ClassModel::TAX_CLASS_TYPE_CUSTOMER;
}