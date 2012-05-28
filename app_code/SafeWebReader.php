<?php

class SafeWebReader{

   public function Get($var)
   {
      if(isset( $_GET[$var]))
      {
          return $_GET[$var];
      }
      if(isset( $_POST[$var]))
      {
          return $_POST[$var];
      }

      return "";
   }

}

?>