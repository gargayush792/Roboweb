<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '445179998826018', // App ID
      channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
   FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
console.log('Welcome!  Fetching your information.... ');

document.getElementById("fbloginbutton").style.display="none"; //Hide login button in form
document.getElementById("siteloginbutton").style.display="none"; 
document.getElementById("siteregisterbutton").style.display="none"; 
document.getElementById("temp").style.display="none"; 
document.getElementById("siteloggedin").style.display="block"; 

                        FB.api('/me', function(response) {
//Get personal info from facebook
                          //alert('Good to see you, ' + response.name + '.');
                         });
    var uid = response.authResponse.userID;
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }

xmlhttp.open("GET","http://robotix.in/siteuser/fblogin?uid="+uid,true);
xmlhttp.send();
document.getElementById("fbloginstatus").innerHTML=xmlhttp.responseText;

    var accessToken = response.authResponse.accessToken;
  } else if (response.status === 'not_authorized') {
    
  } else {
    
  }
 });

    // Additional initialization code here
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));

function fblogin(){
parent.window.location.reload();
//alert();
}
</script>