<?php
 function tool($str,$start,$end){
 return  mb_substr($str, $start, $end, 'utf-8');
 }
?>