<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$output = shell_exec('ls -lart');
echo "<pre>$output</pre>";
?>


</body>
</html>
