<?php

namespace DC\SMS;

interface MessageReceiptInterface {
    /**
     * @return string
     */
    function getMessageIdentifier();

    /**
     * @return bool
     */
    function wasEnqueued();
} 