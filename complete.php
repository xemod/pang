<?php
require_once 'meekrodb.php';
DB::$user = 'proposal';
DB::$password = 'l;il2016';
DB::$dbName = 'proposal';
DB::$encoding = 'utf8';


DB::query("SELCT * FROM accounts"); // misspelled SELECT
?>

<pre>
  <?php print_r($_POST); ?>
</pre>
