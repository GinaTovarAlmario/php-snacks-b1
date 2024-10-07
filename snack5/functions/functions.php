<!-- mi creo una funzione per vedere se è palindrioma -->
<?php 

// function isPalindrome($word){
//     $result = false;
//     if($word == strrev($word)){
//         return $result = true;
//     }
//     return $result;
// }

    function isPalindrome($word){
        $result = '';
        for($i = strlen($word) - 1; $i >= 0 ; $i--){
            $result .= $word[$i];
        }
        if( $result === $word){
            return true;
        }
        return false;
    }

?>