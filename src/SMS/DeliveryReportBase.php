<?php

namespace DC\SMS;

abstract class DeliveryReportBase implements DeliveryReportInterface
{

    function isError()
    {
        return $this->getState() >= DeliveryState::Failed;
    }

    function isDelivered()
    {
        return $this->getState() == DeliveryState::Delivered;
    }
}