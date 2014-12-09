<?php

namespace DC\SMS;

class MessageReceipt implements MessageReceiptInterface {

    private $messageIdentifier;
    private $enqueued;
    private $content;

    function __construct($messageIdentifier, $enqueued, $content = null)
    {
        $this->messageIdentifier = $messageIdentifier;
        $this->enqueued = $enqueued;
        $this->content = $content;
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

    function getResponseContent()
    {
        return $this->content;
    }
}