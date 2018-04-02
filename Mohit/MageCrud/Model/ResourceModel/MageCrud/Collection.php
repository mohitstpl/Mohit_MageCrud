<?php
namespace Mohit\MageCrud\Model\ResourceModel\MageCrud;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Mohit\MageCrud\Model\MageCrud',
            'Mohit\MageCrud\Model\ResourceModel\MageCrud'
        );
    }
}