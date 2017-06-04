<?php

namespace MMAcademy\Greetings\Controller\Message;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use MMAcademy\Greetings\Api\GreetingsInterface;
use MMAcademy\Greetings\Model\MessageFactory;

class Save extends Action
{
    /**
     * @var GreetingsInterface
     */
    private $greetings;
    /**
     * @var MessageFactory
     */
    private $messageFactory;

    public function __construct(Context $context, GreetingsInterface $greetings, MessageFactory $messageFactory)
    {
        parent::__construct($context);

        $this->greetings = $greetings;
        $this->messageFactory = $messageFactory;
    }


    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $author = $this->getRequest()->getParam('name');
        $text = $this->getRequest()->getParam('msg');

        $message = $this->messageFactory->create();
        $message->setAuthor($author);
        $message->setValue($text);

        $this->greetings->send($message);

        $result = $this->resultRedirectFactory->create();
        $result->setPath('home');
        return $result;
    }
}