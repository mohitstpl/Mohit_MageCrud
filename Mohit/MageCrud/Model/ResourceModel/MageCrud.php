<?php
namespace Mohit\MageCrud\Model\ResourceModel;
class MageCrud extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('crud_test_emp1', 'id');   //here "crud_test_emp1" is table name, "id" is the primary key
    }
}