<?php

namespace DC\SMS;

abstract class DeliveryState
{
    const Unknown = -1;

    const Queued = 0;
    const Accepted = 1;
    const Delivered = 2;

    const MMSRetrieved = 3;
    const MMSRejected = 4;
    const MMSForwardedLastResort = 5;

    const Failed = 8;
    const Expired = 9;
    const BarredPermanent = 10;
    const BarredTemporary = 11;
    const BarredPremium = 12;
    const BarredAge = 13;
    const BarredPrepaid = 14;
    const BarredZeroBalance = 15;

    const Rejected = 16;
    const Deleted = 17;
    const Undeliverable = 18;

    const UnknownNetwork = 19;
    const UnknownError = 20;

    const OperatorError = 21;
    const ProviderError = 22;
}