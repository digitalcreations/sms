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
    private $senderTypeOfNumber = \DC\SMS\TypeOfNumber::ALPHANUMERIC;
    private $shortCode = null;
    private $tariff = null;
    private $productDescription = null;
    private $ttl = null;
    private $silentBilling = false;
    private $referenceId = '';

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
        return $this->senderTypeOfNumber;
    }

    /**
     * @param \DC\SMS\TypeOfNumber $ton Type of number for sender number
     */
    function setSenderTypeOfNumber($ton)
    {
        $this->senderTypeOfNumber = $ton;
    }

    /**
     * @return string|null
     */
    function getShortCode()
    {
        return $this->shortCode;
    }

    /**
     * @param string|null $shortCode
     */
    public function setShortCode($shortCode)
    {
        $this->shortCode = $shortCode;
        if ($shortCode != null) {
            $this->senderTypeOfNumber = \DC\SMS\TypeOfNumber::SHORTNUMBER;
        }
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
     * @return string|null Product description (required for premium messages)
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * @param string|null $tariff Product description (required for premium messages)
     */
    public function setProductDescription($description)
    {
        $this->productDescription = $description;
    }

    /**
     * @param int|null $tariff Price in lowest monetary unit.
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

    public function setReferenceId($value) {
        $this->referenceId = $value;
    }

    public function getReferenceId() {
        return $this->referenceId;
    }
}