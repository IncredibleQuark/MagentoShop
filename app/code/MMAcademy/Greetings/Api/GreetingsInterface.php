<?php

namespace MMAcademy\Greetings\Api;

use MMAcademy\Greetings\Api\Data\MessageInterface;

interface GreetingsInterface
{
    /**
     * Returns last 5 messages
     *
     * @return \MMAcademy\Greetings\Api\Data\MessageInterface[]
     */
    public function getLastMessages();

    /**
     * Allows to create a new message
     *
     * @param \MMAcademy\Greetings\Api\Data\MessageInterface $message
     * @return void
     */
    public function send(MessageInterface $message);
}