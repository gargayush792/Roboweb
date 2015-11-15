
                <div id="fb-root"></div>
                <script type="text/javascript">
                  window.fbAsyncInit = function() {
                    FB.init({
                      appId      : '445179998826018', // App ID
                     // channelUrl : 'http://robotix.in/rbtx13/channel.html', // Channel File
                      status     : true, // check login status
                      cookie     : true, // enable cookies to allow the server to access the session
                      oauth      : true, // enable OAuth 2.0
                      xfbml      : true  // parse XFBML
                    });
                    FB.login(function(response) {
                      if (response.authResponse) {
                        // console.log('Welcome!  Fetching your information.... ');
                        FB.api('/me', function(response) {
                         // alert('Good to see you, ' + response.name + '.');
                         });
                     } else {
                        //console.log('User cancelled login or did not fully authorize.');
                      }
                    }); 
        
                  };
                  (function(d){
                     var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
                     js = d.createElement('script'); js.id = id; js.async = true;
                     js.src = "//connect.facebook.net/en_US/all.js";
                     d.getElementsByTagName('head')[0].appendChild(js);
                   }(document));
                  
                </script>
<div style="width: 100px;height: 50px" >
<fb:login-button
registration-url="http://robotix.in/siteuser/register" />
</div>
