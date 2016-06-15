<html>
<body>

<?php
$myfile = fopen("file1.txt", "r") or die("Unable to open file!");
$text =  fread($myfile,filesize("file1.txt"));
$file2 = fopen("file2.txt","w");
fwrite($file2, $text);
fclose($myfile);
fclose($file2);
echo "text has read and wrote to the files!<br> <b>This was the content</b><br>";
echo $text;
?>

</body>
</html>