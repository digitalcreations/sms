<?php

namespace DC\SMS;

interface ResponseInterface
{
    /**
     * @return int
     */
    function getHTTPResponseCode();

    /**
     * @return string[]
     */
    function getHeaders();

    /**
     * @return string
     */
    function getContent();
}