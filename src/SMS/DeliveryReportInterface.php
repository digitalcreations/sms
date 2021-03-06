<?php

namespace DC\SMS;

interface DeliveryReportInterface {
    function getMessageIdentifier();
    function isFinalDeliveryReport();
    function isError();
    function isDelivered();

    /**
     * @return int See DeliveryState
     */
    function getState();

    /**
     * @return ResponseInterface
     */
    function getSuccessfullyProcessedResponse();

    /**
     * @return ResponseInterface
     */
    function getErrorInProcessingResponse();
}

