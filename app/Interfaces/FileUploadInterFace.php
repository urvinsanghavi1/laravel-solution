<?php

namespace App\Interfaces;

interface FileUploadInterFace
{
    /**
     * Upload File From User Input
     * @param array
     * @return array
     */
    public function fileUpload(array $data);
}