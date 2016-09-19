<?php

namespace DC\SMS;

interface TextMessageInterface {
    /**
     * @return string Message text. Messages above 160 characters will be split. Messages above 804 characters are truncated.
     */
    function getText();

    /**
     * @return string Phone number
     */
    function getReceiver();

    /**
     * @return string Phone number
     */
    function getSender();

    /**
     * @return \DC\SMS\TypeOfNumber Type of number for sender number
     */
    function getSenderTypeOfNumber();

    /**
     * @return string|null
     */
    function getShortCode();

    /**
     * @return int|void Price in lowest monetary unit.
     */
    function getTariff();

    /**
     * @return string|null Product description (required for premium messages)
     */
    function getProductDescription();

    /**
     * @return int|null Number of seconds this message should live.
     */
    function getTTL();

    /**
     * @return bool Should this message be silently billed without sending a text message to the user?
     */
    function getSilentBilling();
}