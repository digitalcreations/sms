<?php

namespace DC\SMS;

class TextMessage implements TextMessageInterface {

    public function __construct($text, $receiver) {
        $this->text = $text;
        $this->receiver = $receiver;
    }

    private $text;
    private $receiver;
    private $sender;
    private $shortCode = null;
    private $tariff = null;
    private $ttl = null;
    private $silentBilling = false;

    /**
     * @return string Message text. Messages above 160 characters will be split. Messages above 804 characters are truncated.
     */
    function getText()
    {
        return $this->text;
    }

    /**
     * @return string Phone number
     */
    function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @return string Phone number
     */
    function getSender()
    {
        return $this->sender;
    }

    /**
     * @return \DC\SMS\TypeOfNumber Type of number for sender number
     */
    function getSenderTypeOfNumber()
    {
        return \DC\SMS\TypeOfNumber::ALPHANUMERIC;
    }

    /**
     * @return string|null
     */
    function getShortCode()
    {
        return $this->shortCode;
    }

    /**
     * @param null $shortCode
     */
    public function setShortCode($shortCode)
    {
        $this->shortCode = $shortCode;
    }

    /**
     * @param mixed $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @param mixed $receiver
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return int|void Price in lowest monetary unit.
     */
    function getTariff()
    {
        return $this->tariff;
    }

    /**
     * @param null $tariff
     */
    public function setTariff($tariff)
    {
        $this->tariff = $tariff;
    }

    public function setTTL($ttl) {
        $this->ttl = $ttl;
    }

    /**
     * @return int|null Number of seconds this message should live.
     */
    public function getTTL()
    {
        return $this->ttl;
    }

    /**
     * @param bool $silentBilling Should this message be silently billed without sending a text message to the user?
     */
   public function setSilentBilling($silentBilling) {
        $this->silentBilling = $silentBilling;
    }

    /**
     * @return bool Should this message be silently billed without sending a text message to the user?
     */
    public function getSilentBilling()
    {
        return $this->silentBilling;
    }
}