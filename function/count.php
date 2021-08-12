<!DOCTYPE html>
<html>
<head>
<title>Code</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  text-align:center;
  align;center;
}
</style>
<body>
<form style="text-align:center;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
<input name="string" type="text" placeholder="string" required/><br/><br/>
<input type="submit" value="submit">
</form>
</br></br></br></br></br>
<?php
function countWords($str){
$str=str_replace(' ', '', $str);
return $count_array=count_chars($str,1);
}
if(!empty($_GET['string'])){
$str=htmlspecialchars($_GET['string']);
$count_array=countWords($str);
asort($count_array);
?>
<table style="border:1px solid black;">
<tr>
<th>Charachter</th>
<th>Occurances</th>
</tr>
<?php
foreach ($count_array as $chr => $occurences) {
?>
<tr>
<td><?=chr($chr)?></td>
<td><?=$occurences?></td>
</tr>
<?php }}?>
</table>
</body>
</html>