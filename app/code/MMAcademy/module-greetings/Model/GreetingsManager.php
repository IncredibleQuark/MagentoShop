<?php

namespace MMAcademy\Greetings\Model;

use MMAcademy\Greetings\Api\Data\MessageInterface;
use MMAcademy\Greetings\Api\GreetingsInterface;

class GreetingsManager implements GreetingsInterface
{

    /**
     * @var ResourceModel\Message
     */
    private $messageResource;

    public function __construct(\MMAcademy\Greetings\Model\ResourceModel\Message $messageResource)
    {

        $this->messageResource = $messageResource;
    }

    /**
     * Returns last 5 messages
     *
     * @return \MMAcademy\Greetings\Api\Data\MessageInterface[]
     */
    public function getLastMessages()
    {
        // TODO: Implement getLastMessages() method.
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