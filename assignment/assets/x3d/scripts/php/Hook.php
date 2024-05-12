<?php
//Specify the path to the thumbnail images
$directory = __DIR__ . '/../../gallery/assets/images';

//Only load files with the following extensions
$allowed_extensions = array('jpg','jpeg','gif','png');

$file_parts = array();

$response = "";

$dir_handle = opendir($directory);

//Iterate through all the files
while ($file = readdir($dir_handle)){
    //First check for hidden files
    if(substr($file,0,1)!= '.'){
        //Split each file name to extract the file extension
        $file_components = explode('.',$file);
        //Grab the extension token
        $extension = strtolower(array_pop($file_components));
        //Is this file a vaild image. If so, add it to the response
        if (in_array($extension, $allowed_extensions))
        {
            //Build a response string using the ~ symbol as a string separator
            $response .= $file . '~';

            
        }
    }
}

closedir($dir_handle);

echo substr_replace($response,"",-1);
?>