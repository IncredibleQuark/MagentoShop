<?php

namespace MMAcademy\Greetings\Model\ResourceModel\Message;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use MMAcademy\Greetings\Model\ResourceModel\Message as MessageResource;
use MMAcademy\Greetings\Model\ResourceModel\Message;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(\MMAcademy\Greetings\Model\Message::class, MessageResource::class);
        parent::_construct();
    }
}