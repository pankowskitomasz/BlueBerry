
function loadMenu(){
    $.ajax("../json/menu.json").then(function(data){
        var hnd,contentArr;
        for(aprop in data){
            hnd = $(".menu-table tbody[data-ext='"+aprop+"']");
            if(hnd.length>0){
                contentArr = data[aprop];
                for(item in contentArr){
                    hnd.append("<tr><td>"+contentArr[item].name+"</td><td>"+contentArr[item].price+"</td></tr>");
                }
            }
        }
    });
}

$("input, textarea").on("paste",function(){
    return false;
});

function pointsMap() {
	var opts = {
	    center: new google.maps.LatLng(44.2911, -73.9928),
	    zoom:15,
	    maxZoom:15,
	    panControl: false,
	    zoomControl: true,
	    mapTypeControl: false,
	    scaleControl: false,
	    streetViewControl: false,
	    overviewMapControl: false,
	    rotateControl: false,
	    scrollwheel: false
	};
	var map = new google.maps.Map(document.getElementById("pointsmap"),opts);
	var point1 = new google.maps.Marker({
	 	position: new google.maps.LatLng(44.2911, -73.9928),
	 	map: map,
	 	animation: google.maps.Animation.Drop
	});
}

function checkFormText(){
    var inputArray = $("input[type='text']");
    var rgx = new RegExp(/[^a-zA-Z]+$/i);  
    for(var i=0;i<inputArray.length;i++){
        if(inputArray[i].value.match(rgx)){
            return false;
        }
    }
    return true;
}

function checkFormTel(){
    var inputArray = $("input[type='tel']");
    var rgx = new RegExp(/[^0-9]+$/i);  
    for(var i=0;i<inputArray.length;i++){
        if(inputArray[i].value.match(rgx)){
            return false;
        }
    }
    return true;
}

function checkFormEmail(){
    var inputArray = $("input[type='email']");
    var rgx = new RegExp(/[^a-zA-Z0-9.@]+$/i);
    for(var i=0;i<inputArray.length;i++){
        if(inputArray[i].value.match(rgx)){
            return false;
        }
    }
    return true;
}

function checkFormTextarea(){
    var inputArray = $("input[type='textarea']");
    var rgx = new RegExp(/[^a-zA-Z0-9.,!?#\- ]+$/i);
    for(var i=0;i<inputArray.length;i++){
        if(inputArray[i].value.match(rgx)){
            return false;
        }
    }
    return true;
}

function checkForm(){
    if(checkFormText()===true
        && checkFormTel()===true
        && checkFormEmail()===true
        && checkFormTextarea()===true){
            return true;
        }
    return false;
}

function swapTarget(){
    $(".contact-form").attr("action","confirm.php#message");
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}

function acceptPrivacyPolicy(){
    setCookie("privacy_accepted","1",1);
    $("#privacyModal").modal('hide');
}

function gpdrDeclaration(){
    if(getCookie("privacy_accepted")!="1"){
        $("#privacyModal").modal();
    }
}

$("#modal-portfolio, #modal-portfolio *").click(function(){
    $(this).modal('hide');
});

gpdrDeclaration();
setTimeout(swapTarget,11000);

loadMenu();