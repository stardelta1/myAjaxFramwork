<!DOCTYPE html>
<html>
<head>
<script>

	hr = new XMLHttpRequest();
	hr.open("POST", "parse.php",true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function(){
		if(hr.readyState == 4 && hr.status == 200){
			alert(hr.responseText);
		}
	}
	hr.send("fn=Sylvester&ln=Emeshili");

</script>

<title>Ajax Post</title>
</head>

<body>
</body>
</html>