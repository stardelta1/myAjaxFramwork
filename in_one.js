<?php if(isset($_POST['fn'])){
echo 'Thank you '. $_POST['fn'] . ' ' . $_POST['ln'] . ', says the PHP file';
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="frw/ajax_frw.js"></script>
<script>
	function o(obj){
		return document.getElementById(obj);
	}
	//Usage of the FrameWork
	function ajaxPost(){
		//var fn = o("firstname").value;
		//var ln = o("lastname").value;
		var ajax = ajaxObj("POST", "index.php");
		ajax.onreadystatechange = function(){
			if(ajaxReturn(ajax) == true){
				alert(ajax.responseText);	
			}
		}
		ajax.send("fn=Sylvester&ln=Emeshili");
	}
</script>

<title>Ajax Post</title>
</head>

<body>
</body>
</html>