<?php
function security($text){
    trim($text);
    stripslashes($text);
    htmlspecialchars($text);
    return $text;
    
}
?>