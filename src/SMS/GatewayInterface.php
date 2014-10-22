<?php

namespace DC\SMS;

interface GatewayInterface
{
    /**
     * @param \DC\SMS\TextMessageInterface $message
     * @return \DC\SMS\MessageReceiptInterface
     */
    function sendMessage(\DC\SMS\TextMessageInterface $message);

    /**
     * @param string $data
     * @return \DC\SMS\DeliveryReportInterface
     */
    function parseDeliveryReport($data);
}