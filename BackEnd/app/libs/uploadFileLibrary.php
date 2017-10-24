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
            if($oldFile!=null)
            {
                $nameOldFile = strstr($oldFile, 'pic-');
                if($newFile!=null) {
                    unlink('upload/' . $nameOldFile);
                    $nameNewFile = 'http://localhost:8000/upload/pic-' . $newFile->getClientOriginalName();
                    $newFile->move('upload', $nameNewFile);
                    $nameFile = $nameNewFile;
                    return $nameFile;
                }else {
                    $nameFile = $oldFile;
                    return $nameFile;
                }

            }elseif($oldFile==null){
                if($newFile!=null){
                    $nameNewFile = 'http://localhost:8000/upload/pic-' . $newFile->getClientOriginalName();
                    $newFile->move('upload', $nameNewFile);
                    $nameFile = $nameNewFile;
                    return $nameFile;
                }else{
                    $nameFile = null;
                    return $nameFile;
                }

            }
        }
        public function deleteFile($file)
        {
            $nameFile = strstr($file, 'pic-');
            unlink('upload/'.$nameFile);
        }
    }
?>