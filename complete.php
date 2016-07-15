<?php
require_once 'meekrodb.php';
include_once 'config_inc.php';


DB::query("SELCT * FROM accounts"); // misspelled SELECT
?>

<pre>
  <?php print_r($_POST); ?>
</pre>
