<?php

/**
 * Created by PhpStorm.
 * User: magento
 * Date: 23.05.17
 * Time: 19:28
 */
namespace MMAcademy\Hello\Block;


class Hello extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'MMAcademy_Hello::hello.phtml';

    public function getGreetingText ()
    {
        $name= $this->getRequest()->getParam('name');
        if(!empty($name)) {
            return __('Hello %1 !', $name);
        }
        return __('Hello World!');
    }

    public function getFormUrl()
    {
        return $this->getUrl('hello/index/index');
    }
}