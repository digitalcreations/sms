<?php

namespace DC\SMS;

class MessageReceipt implements MessageReceiptInterface {

    private $messageIdentifier;
    private $enqueued;

    function __construct($messageIdentifier, $enqueued)
    {
        $this->messageIdentifier = $messageIdentifier;
        $this->enqueued = $enqueued;
    }

    /**
     * @return string
     */
    function getMessageIdentifier()
    {
        return $this->messageIdentifier;
    }

    /**
     * @return bool
     */
    function wasEnqueued()
    {
        return $this->enqueued;
    }
}