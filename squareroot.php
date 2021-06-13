<html>
<body>
<h2> <p> number generated randomly is

<?php
$choice=rand(1,100);
echo $choice;
?> </p>
<p> and its square root is 
<?php
echo round(sqrt($choice),3);
?></p></h2>
</body>
</html>