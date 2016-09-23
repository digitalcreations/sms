<?php

namespace DC\SMS;

abstract class DeliveryReportBase implements DeliveryReportInterface
{
    function getReferenceId()
    {
        return '';
    }

    function getRawReport()
    {
        return '';
    }

    function isError()
    {
        return $this->getState() >= DeliveryState::Failed;
    }

    function isDelivered()
    {
        return $this->getState() == DeliveryState::Delivered;
    }
}