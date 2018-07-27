<!DOCTYPE html>
<html>
<head>
	<title>method</title>
</head>
<body>
<form method="post" action="try.php?dad">
	<input type="text" name="boy" id="boy" onblur="calculate()">
	<br>
	<span id="boyerror" style="color: white; background-color: darkgreen; max-width: 300px; max-height: 200px;"></span>
	<span id="boyerror2" style="color: white; background-color: darkred; max-width: 300px; max-height: 200px;"></span><br>
	<input type="submit" name="submit" value="save">
</form>
<?php
require("db.php");

$insert ="SELECT email FROM user_registration";
        $query =mysqli_query($db,$insert) or die("error selecting data".mysqli_error($db));
        // $result =mysqli_fetch_array($query);
        $result =mysqli_fetch_all($query);
        $jarson=json_encode($result);
        $jarson2=json_decode($jarson);
        // print_r($jarson);exit();
function dad($boy)
{
    if(isset($boy)){
        echo "<script>alert($boy)</script>";
    }
}
?>
<script type="text/javascript">
	function calculate(){
 var boy2 =document.getElementById("boy").value;
 var emails =<?php echo json_encode($result) ?>;
 // var message =document.getElementById("boyerror").value='how are you';
 // alert("how are you" +" "+ boy2);
 // var length = emails.l
 // for ($i=0; $i < emails.length; $i++) {
 // 	// emails[i]
 	// return alert(emails.length);
 // }
// var i=0; 
 for (var i=0; i < emails.length; i++) {
 	// emails[i]
 	// return alert(emails[i]);
 	if(boy2 == emails[i]){
 		document.getElementById("boyerror").innerHTML=null;
 return document.getElementById("boyerror2").innerHTML=emails[i]+" "+"<strong>is already taken</strong>";
}else{
	document.getElementById("boyerror2").innerHTML=null
 return document.getElementById("boyerror").innerHTML=boy2+" "+"<strong>is available</strong>";

}
 }
 // return alert(emails.length);
 // return document.getElementById("boyerror").innerHTML='how are you'+" "+emails.length;
 // return document.getElementById("boyerror").innerHTML='how are you'+" "+boy2;
}
</script>
</body>
</html>