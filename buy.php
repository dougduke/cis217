<?php
/**
 * Created by PhpStorm.
 * User: Doug Duke
 * Date: 7/31/14
 * Time: 11:50 AM
 */

$form = <<<EOF

<form method=post action="purchase.php?">
  Name: <input type="test" name="name" /><br />
  Address: <input type="address" name="address"><br />
  <input type="submit" name="submit" value="Submit Order" />
</form>

EOF;

echo json_encode( $form );
