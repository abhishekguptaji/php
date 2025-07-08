<?php
$h2_color="red";

echo "<h1 style='color:red'>PHP WITH HTML</h1>";
echo "<h2 style='color:blue'>PHP WITH HTML</h2>";
?>

<?php
$name="abhishek";
echo "<h1 style='color:orange'>My name is:$name</h1>"
?>

<!-- Alternate way -->
<h1 style="color:red">
  My name is <?php echo $name?>
</h1>

<!-- This show use variable in html.  -->
<h2 style="color:<?php echo $h2_color?>">
  <?php echo "this is h2 tags.";?>
</h2>
<h2 style="color:<?php echo $h2_color?>">
  Mera name hai:<?php echo $name?>
</h2>
<h2 style="color:<?php echo $h2_color?>">
  MY name is:<?php echo $name?>
</h2>