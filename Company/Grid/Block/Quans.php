<?php
namespace Company\Grid\Block;
class Quans extends \Magento\Framework\View\Element\Template
{
        protected $_registry;
        
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,        
        \Magento\Framework\Registry $registry,
        array $data = []
    )
    {        
        $this->_registry = $registry;
        parent::__construct($context, $data);
    }
    
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    
    public function getCurrentCategory()
    {        
        return $this->_registry->registry('current_category');
    }
    
    public function getCurrentProduct()
    {        
        return $this->_registry->registry('current_product');
    }    
    public function getFormAction()
    {
        return $this->getUrl('grid/index/post', ['_secure' => true]);
    }
    
}
?>