<?php

namespace MMAcademy\Hello\Controller\index;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Raw;

class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        /**
         * @var Raw $result
         */
        $result = $this->resultFactory->create('page');

        return $result;
    }
}