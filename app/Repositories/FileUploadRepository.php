<?php

namespace App\Repositories;

use App\Constants\Constants;
use App\Interfaces\FileUploadInterFace;
use Exception;

class FileUploadRepository implements FileUploadInterFace
{
    protected $fileModel;
    
    protected $data = Constants::BLANK_ARRAY;
    protected $code = Constants::HTTP_INTERNAL_SERVER_ERROR;
    protected $message = Constants::BLANK_STRING;
    
    public function __construct()
    {
        $this->fileModel = config('modeldetails.model.files.class');
    }

    /**
     * Upload File From User Input
     * @param array
     * @return array
    */
    public function fileUpload(array $data)
    {
        try {
            $name = $data['file']->getClientOriginalName();
            $path = $data['file']->store('public/files');
            $data = $this->fileModel::create([
                'file_name' => $name,
                'path' => $path
            ]);
            $this->message = __('messages.message.success');
            // __('Auth::user.form.lable.message.create_user')
            $this->code = 200;
        } catch (Exception $exception) {
            $this->message = $exception->getMessage();
        }   
        return sendResponse(200, $this->data, $this->message);
    }
}