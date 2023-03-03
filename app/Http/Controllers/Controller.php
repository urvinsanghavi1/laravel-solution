<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUploadRequest;
use App\Interfaces\FileUploadInterFace;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    private $fileUploadInterface;

    public function __construct(FileUploadInterFace $fileUploadInterface)
    {
        $this->fileUploadInterface = $fileUploadInterface;
    }

    /**
     * Upload File From User Input
     * @param FileUploadRequest
     * @return RedirectResponse
     */
    public function fileUpload(FileUploadRequest $request)
    {
        $fileUploadedByUser = $this->fileUploadInterface->fileUpload($request->all());
        if(isset($fileUploadedByUser['code'])) {
            return redirect('/')->withSuccess($fileUploadedByUser['message']);
        }
        return redirect()->back()->withError($fileUploadedByUser['message']);
    }

    /**
     * Get File From Table
     */
    public function getFiles()
    {

    }
    

}
