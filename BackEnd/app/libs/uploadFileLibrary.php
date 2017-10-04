<?php

namespace App\libs;

    class uploadFileLibrary
    {
        public function upload($file)
        {
            $nameFile = 'pic-'.$file->getClientOriginalName();
            $file->move('upload',$nameFile);
            return $nameFile;
        }

        public function reload($newFile, $oldFile)
        {
            $nameOldFile = strstr($oldFile, 'pic-');
            if($newFile!=null) {
                unlink('upload/' . $nameOldFile);
                $nameNewFile = 'pic-' . $newFile->getClientOriginalName();
                $newFile->move('upload', $nameNewFile);
                $nameFile = $nameNewFile;
            }else {
                $nameFile = $nameOldFile;
            }
            return $nameFile;
        }
        public function deleteFile($file)
        {
            $nameFile = strstr($file, 'pic-');
            unlink('upload/'.$nameFile);
        }
    }
?>