//from: https://coursesweb.net/
function saveScreenshoot(ob){
 var php_file ='save_screenshoot.php'; //address of php file that get and save image on server
 var html_elm =(ob && ob.elm) ? ob.elm :'body'; //css selector of html element to get screenshoot
 var imgname =(ob && ob.img) ? ob.img : location.pathname.match(/[^\/]+$/i)[0].replace(/\.(.*?)$/i, ''); //name of the image to save (page name without extension)

 /* Ajax Function
 Send "data" to "php", using the method added to "via", and pass response to "callback" function
 data - object with data to send, name:value; ex.: {"name1":"val1", "name2":"2"}
 php - address of the php file where data is send
 via - request method, a string: 'post', or 'get'
 callback - function called to proccess the server response
 */
 function ajaxSend(data, php, via, callback) {
 var ob_ajax = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP'); //XMLHttpRequest object

 //put data from 'data' into a string to be send to 'php'
 var str_data ='isajax=1';
 for(var k in data){
 k = k.toString();
 if(data[k] || data[k] ==''){
 str_data +='&'+ k +'='+ data[k].toString().replace(/\?/g, '?').replace(/=/g, '=').replace(/&/g, '&').replace(/[ ]+/g, ' ').replace(/[\+]/g, '+');
 }
 }

 //send data to php
 ob_ajax.open(via, php, true);
 if(via =='post') ob_ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
 ob_ajax.send(str_data);

 //check the state request, if completed, pass the response to callback function
 ob_ajax.onreadystatechange = function(){
 if (ob_ajax.readyState == 4) callback(ob_ajax.responseText);
 }
 }

 var getScreenshoot = function(){
 //Uses HTML2Canvas to capture screenshoot of <body> content
 html2canvas(document.querySelector(html_elm)).then(canvas => {
 //get base64 string data of the screenshoot
 var base64image = canvas.toDataURL('image/png');

 //set data that will be send with ajaxSend() to php (base64 image-data of the canvas, and image-name)
 var img_data = {cnvimg:base64image, imgname:imgname};

 //send image-data to php file, then alert response
 ajaxSend(img_data, php_file, 'post', function(resp){
 var resp = JSON.parse(resp) ||{};
 if(resp.re && scrn_img) scrn_img.innerHTML ='<a href="'+resp.re+'" target="_blank">See Screenshoot</a>';
 else if(resp.er) alert(resp.er);
 });
 });
 }

 //add button Save-Screenshoot in the page to call getScreenshoot() on click
 var js_save_scrht = document.getElementById('js_save_scrht');
 if(js_save_scrht){
 js_save_scrht.insertAdjacentHTML('beforebegin', '<div id="scrn_btn_img" style="text-align:center;margin:8px auto;"><button id="btn_save_scrht">Save Screenshoot</button><h4 id="scrn_img"></h4></div>');
 var scrn_btn_img = document.getElementById('scrn_btn_img');
 var btn_save_scrht = document.getElementById('btn_save_scrht');
 var scrn_img = document.getElementById('scrn_img');
 if(btn_save_scrht) btn_save_scrht.addEventListener('click', (e)=>{
 scrn_btn_img.style.display ='none';
 getScreenshoot();
 window.setTimeout(function(){ scrn_btn_img.style.display ='block';}, 1000);
 });
 }
}