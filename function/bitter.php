<!DOCTYPE html>
<html>
<head>
<title>Code</title>
</head>
<body>
<?php
function isBitten(){
$bitten=rand(0,1);
if($bitten==1){
  return True;
}else{
  return False;
 }
}
$res=isBitten();
if($res==True){  
echo "Charlie bit your finger!";  
}
else{  
echo "Charlie did not bite your finger!";  
}  
?>
</body>
</html>