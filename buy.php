<?php
  /**
   * Created by PhpStorm.
   * User: Doug Duke
   * Date: 7/31/14
   * Time: 11:50 AM
   */
  $get = ""
     for( item in $_GET[] ) {
       $get += $_GET[item] + " "
     }

  $form = <<<EOF

<form method=post action="purchase.php?" + buyUrl>
  Name: <input type="text" name="name" /><br />
  Address: <input type="address" name="address"><br />
  <input type="hidden" name="purchase" value=$get />
  <input type="submit" name="submit" value="Submit Order" />
</form>

EOF;

  echo json_encode( $form );
console.log( print_r($_GET));
//test

