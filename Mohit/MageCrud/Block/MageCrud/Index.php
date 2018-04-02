<?php
namespace Mohit\MageCrud\Block\MageCrud;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $_magecrud;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Mohit\MageCrud\Model\MageCrudFactory $magecrud
    )
    {
        $this->_magecrud = $magecrud;
        parent::__construct($context);
    }

    public function addRecord($name, $age)
    {
        $data=array('name' => $name, 'age' => $age);
        $this->_magecrud->create()->setData($data)->save();
    }

    public function getValue()
    {
        $data=$this->_magecrud->create()->getCollection();
        foreach ($data as $d)
        {
            echo $d->getName().' - ';   //table field "name"
            echo $d->getAge().'<br>';    //table field "age"
        }
    }
}