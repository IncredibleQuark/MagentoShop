<?php

namespace MMAcademy\Greetings\Model;

use Magento\Framework\Model\AbstractModel;
use MMAcademy\Greetings\Api\Data\MessageInterface;


class Message extends AbstractModel implements MessageInterface
{
    public function _construct()
    {
        $this->_init(ResourceModel\Message::class);
        parent::_construct();
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->getData('value');
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->getData('author');
    }

    /**
     * @return string
     */
    public function getCreationTime()
    {
        return $this->getData('creation_time');
    }

    /**
     * @param string $text
     * @return void
     */
    public function setValue($text)
    {
        $this->setData('value', $text);
    }

    /**
     * @param string $author
     * @return void
     */
    public function setAuthor($author)
    {
        $this->setData('author', $author);
    }
}