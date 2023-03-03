<?php

namespace App\Constants;

use Symfony\Component\HttpFoundation\Response;


/**
 * HTTP Headers based on IANA Message Headers Registry and Wikipedia list.
 *
 * Class Constants
*/
final class Constants extends Response
{
    /*
    |--------------------------------------------------------------------------
    | HTTP Code
    |--------------------------------------------------------------------------
    */

    /**
     * @var int
     */
    public const HTTP_OK = Response::HTTP_OK;

    /**
     * @var int
     */
    public const HTTP_CREATED = Response::HTTP_CREATED;

    /**
     * @var int
     */
    public const HTTP_NOT_ACCEPTABLE = Response::HTTP_NOT_ACCEPTABLE;

    /**
     * @var int
     */
    public const HTTP_FOUND = Response::HTTP_FOUND;

    /**
     * @var int
     */
    public const HTTP_TEMPORARY_REDIRECT = Response::HTTP_TEMPORARY_REDIRECT;

    /**
     * @var int
     * RFC7238
     */
    public const HTTP_PERMANENTLY_REDIRECT = Response::HTTP_PERMANENTLY_REDIRECT;

    /**
     * @var int
     */
    public const HTTP_BAD_REQUEST = Response::HTTP_BAD_REQUEST;

    /**
     * @var int
     */
    public const HTTP_UNAUTHORIZED = Response::HTTP_UNAUTHORIZED;

    /**
     * @var int
     */
    public const HTTP_FORBIDDEN = Response::HTTP_FORBIDDEN;

    /**
     * @var int
     */
    public const HTTP_NOT_FOUND = Response::HTTP_NOT_FOUND;

    /**
     * @var int
     */
    public const HTTP_METHOD_NOT_ALLOWED = Response::HTTP_METHOD_NOT_ALLOWED;

    /**
     * @var int
     */
    public const HTTP_REQUEST_TIMEOUT = Response::HTTP_REQUEST_TIMEOUT;

    /**
     * @var int
     */
    public const HTTP_UNSUPPORTED_MEDIA_TYPE = Response::HTTP_UNSUPPORTED_MEDIA_TYPE;

    /**
     * @var int
     * RFC4918
     */
    public const HTTP_UNPROCESSABLE_ENTITY = Response::HTTP_UNPROCESSABLE_ENTITY;

    /**
     * @var int
     * RFC4918
     */
    public const HTTP_LOCKED = Response::HTTP_LOCKED;

    /**
     * @var int
     * RFC2817
     */
    public const HTTP_UPGRADE_REQUIRED = Response::HTTP_UPGRADE_REQUIRED;

    /**
     * @var int
     * RFC6585
     */
    public const HTTP_TOO_MANY_REQUESTS = Response::HTTP_TOO_MANY_REQUESTS;

    /**
     * @var int
     */
    public const HTTP_INTERNAL_SERVER_ERROR = Response::HTTP_INTERNAL_SERVER_ERROR;

    /**
     * @var int
     */
    public const HTTP_NOT_IMPLEMENTED = Response::HTTP_NOT_IMPLEMENTED;

    /**
     * @var int
     */
    public const HTTP_BAD_GATEWAY = Response::HTTP_BAD_GATEWAY;

    /**
     * @var int
     */
    public const HTTP_SERVICE_UNAVAILABLE = Response::HTTP_SERVICE_UNAVAILABLE;

    /**
     * @var int
     */
    public const HTTP_GATEWAY_TIMEOUT = Response::HTTP_GATEWAY_TIMEOUT;

    /**
     * @var int
     */
    public const HTTP_VERSION_NOT_SUPPORTED = Response::HTTP_VERSION_NOT_SUPPORTED;

    /**
     * @var int
     * RFC4918
     */
    public const HTTP_INSUFFICIENT_STORAGE = Response::HTTP_INSUFFICIENT_STORAGE;

    /**
     * @var int
     * RFC5842
     */
    public const HTTP_LOOP_DETECTED = Response::HTTP_LOOP_DETECTED;

    /**
     * @var int
     * RFC6585
     */
    public const HTTP_NETWORK_AUTHENTICATION_REQUIRED = Response::HTTP_NETWORK_AUTHENTICATION_REQUIRED;

    /*
    |--------------------------------------------------------------------------
    | Default Constants
    |--------------------------------------------------------------------------
    */
    public const BLANK_ARRAY = [];
    
    public const BLANK_STRING = "";
}