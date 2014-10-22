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
}