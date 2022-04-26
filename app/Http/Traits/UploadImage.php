<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

/**
 * Trait UploadImage containing functions for uploading files
 */
trait UploadImage
{
    /**
     * Upload multiple files 
     * 
     * @param array $files
     * @param string $path
     */
    public function uploadMultiple($files, $path)
    {
        if(!isset($files) || count($files) == 0) {
            return false;
        }
        $nFiles = array();

        foreach($files as $file) {

            $fileName   = time() . $file->getClientOriginalName();
            Storage::disk('public')->put($path . $fileName, File::get($file));
            $file_name  = $file->getClientOriginalName();
            $file_type  = $file->getClientOriginalExtension();
            $filePath   = 'storage/'.$path . $fileName;

            array_push($nFiles, [
                'fileName' => $file_name,
                'fileType' => $file_type,
                'filePath' => $filePath,
                'fileSize' => $file->getSize()
            ]);
        }

        return $nFiles;
    }
}