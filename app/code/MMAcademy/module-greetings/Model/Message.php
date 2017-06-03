<?php

namespace MMAcademy\Greetings\Model;

use Magento\Framework\Model\AbstractModel;

class Message extends AbstractModel
{
    public function _construct()
    {
        $this->_init(ResourceModel\Message::class);
        parent::_construct();
    }
}