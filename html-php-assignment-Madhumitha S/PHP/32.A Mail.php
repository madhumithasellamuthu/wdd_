<?php
$mail = "admin@example.com";              // Step 1: $mail = "admin@example.com"
$mail = str_replace("a","@",$mail);       // Step 2: Replace every "a" with "@"
echo "Contact me at $mail.";              // Step 3: Output the final string
?>

OUTPUT:
Contact me at @dmin@ex@mple.com.
