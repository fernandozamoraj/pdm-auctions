<?php
class FolderBrowser
{

   public function GetFolders($rootFolder)
   {
       $directories = glob($rootFolder . '/*' , GLOB_ONLYDIR);

       return $directories;
   }

   public function GetLeafFolder($fullPath)
   {
       $leafFolder = basename($fullPath);

       return $leafFolder;
   }

   public function GetFiles($root)
   {
       $files = array();

       if ($handle = opendir($root)) {

           /* This is the correct way to loop over the directory. */
           while (false !== ($entry = readdir($handle))) {
               $files[] = $entry;
           }

           closedir($handle);
       }

       return $files;
   }

    public function GetImageFiles($root)
    {
        $files = $this->GetFiles($root);

        $imageFiles = array();

        foreach($files as $file)
        {
            $ext = substr($file, strrpos($file, '.') + 1);
            if($ext === "jpg" || $ext == "JPG")
            {
                $imageFiles[] = $file;
            }
        }

        return $imageFiles;
    }
}

?>