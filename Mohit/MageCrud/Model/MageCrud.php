<?php
namespace Mohit\MageCrud\Model;
use Magento\Framework\Model\AbstractModel;
class MageCrud extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Mohit\MageCrud\Model\ResourceModel\MageCrud');
    }
}