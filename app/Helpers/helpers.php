<?php
  
/**
 * Write code on Method
 *
 * @return response()
 */

use App\Constants\Constants;

if (! function_exists('sendResponse')) {
    function sendResponse($code, $data, $message)
    {
        return [
            'code' => $code ?? Constants::HTTP_INTERNAL_SERVER_ERROR,
            'data' => $data ?? Constants::BLANK_ARRAY,
            'message' => $message ?? Constants::BLANK_STRING
        ];
    }
}