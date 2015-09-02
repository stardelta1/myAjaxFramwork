//Externalized portion of the Ajax Request
function ajaxObj(method, url){
	if(window.XMLHttpRequest){
		hr = new XMLHttpRequest();
	}else{
		hr = new ActiveXObject("Microsoft.XMLHTTP");
	}
	hr.open(method, url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	return hr;
}
function ajaxReturn(hr){
	if(hr.readyState ==4 & hr.status == 200){
		return true;
	}
}