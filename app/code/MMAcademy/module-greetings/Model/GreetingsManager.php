<?php

namespace MMAcademy\Greetings\Model;

use Magento\Framework\Message\CollectionFactory;
use MMAcademy\Greetings\Api\Data\MessageInterface;
use MMAcademy\Greetings\Api\GreetingsInterface;
use MMAcademy\Greetings\Model\ResourceModel\Message\Collection;

class GreetingsManager implements GreetingsInterface
{

    /**
     * @var ResourceModel\Message
     */
    private $messageResource;
    /**
     * @var MessageFactory
     */
    private $messageFactory;
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    public function __construct(\MMAcademy\Greetings\Model\ResourceModel\Message $messageResource,
                                \MMAcademy\Greetings\Model\MessageFactory $messageFactory,
                                CollectionFactory $collectionFactory)
    {
        $this->messageResource = $messageResource;
        $this->messageFactory = $messageFactory;
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * Returns last 5 messages
     *
     * @return \MMAcademy\Greetings\Api\Data\MessageInterface[]
     */
    public function getLastMessages()
    {
        /**@var Collection $collection */
        $collection = $this->collectionFactory->create();
        $collection->setPageSize(5);
        $collection->setOrder('creation_time');
        //$collection->addFieldToFilter('creation_time', ['gt' => ''])

//        foreach($collection as $message) {
//            $message->getValue();
//        }  ---------------------- pobranie wartosci recznie

        return $collection->getAllIds();
    }

    /**
     * Allows to create a new message
     *
     * @param \MMAcademy\Greetings\Api\Data\MessageInterface $message
     * @return void
     */
    public function send(MessageInterface $message)
    {
        $this->messageResource->save($message);
    }
}