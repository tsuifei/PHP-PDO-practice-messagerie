<?php
    // escape function 輸入跳脫字元
    function escapeIn($str) {
        return htmlspecialchars($str, ENT_QUOTES);
    }
    // escape function 輸出跳脫字元
    function escapeOut($str) {
        return htmlentities($str, ENT_QUOTES, 'UTF-8');
    }

?>