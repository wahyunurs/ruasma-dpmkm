<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadTrait
{
    public function UploadFile(UploadedFile $file, $folder = null, $disk = 'public', $filename)
    {
        $filename = time() . "_" . $file->getClientOriginalName();
        return $file->storeAs(
            $folder,
            $filename,
            $disk
        );
    }

    public function deleteFile($path, $disk = 'public')
    {
        Storage::disk($disk)->delete($path);
    }
}
