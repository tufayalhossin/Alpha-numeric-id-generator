<?php 
// callback function
  function alphaNumeric($length)
      {
          $chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
          $charLen   = strlen($chars)-1;
          $id  = '';

          for ($i = 0; $i < $length; $i++) {
                  $id .= $chars[mt_rand(0,$charLen)];
          }
          return ($id);
      }

// call the function
$alphaId = alphaNumeric(10);
echo $alphaId;