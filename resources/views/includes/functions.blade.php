<?php
    //to replace '\' in path by the default '/', all because voyeger saves the image path with '\'
    function fixPath($path){
        $x = str_replace('\\', '/', $path);
        // $x = str_replace('//', '/', $x);
        return $x;
    }


    //to truncate the post body to show on post interface
    function cutParagraph($paragraph, $characterLimit){
        $paragraph = strip_tags($paragraph);
        if (strlen($paragraph) > $characterLimit) {
            // truncate string
            $stringCut = substr($paragraph, 0, $characterLimit);
            $endPoint = strrpos($stringCut, ' ');

            //if the string doesn't contain any space then it will cut without word basis.
            $paragraph = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
            $paragraph = $paragraph."...";
        }
        return $paragraph;

    }

    //extracting the given indexed image name from the array of images stored in database
    function extractImgPath($stringArray, $index){
        $array = explode(',', $stringArray);
        $array[$index] = str_replace("[","",$array[$index]);
        $array[$index] = str_replace('"',"",$array[$index]);
        $array[$index] = str_replace("]","",$array[$index]);
        return fixPath($array[$index]);
    }
    //simply turning it into array and returning it
    function stringArraySize($stringArray){
        $array = explode(',', $stringArray);
        return count($array);
    }
?>
