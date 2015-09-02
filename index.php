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
		var firstname = o("firstname").value;
		var lastname = o("lastname").value;
		var vars = "fn="+firstname+"&ln="+lastname;
		var ajax = ajaxObj("POST", "parse.php");
		ajax.onreadystatechange = function(){
			if(ajaxReturn(ajax) == true){
				var return_data = ajax.responseText;
				o("status").innerHTML = return_data;	
			}
		}
		ajax.send(vars);
	}
//window.onload = ajaxPost;
</script>

<title>Ajax Post</title>
</head>
<body>
	Firstname: <input id ="firstname" name="firstname" type="text"><br><br>
	lastname: <input id ="lastname" name="lastname" type="text"><br><br>
    <input name="btn" type="submit" value="Submit" onClick="javascript:ajaxPost();">
<br><br>

    <span id="status"></span>
</body>
</html>