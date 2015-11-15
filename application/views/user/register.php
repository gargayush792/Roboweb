<script src="http://code.jquery.com/jquery-latest.js"></script>

 <div id="wrap">
             
            <section id="main">
                 
                <div id="fb-root"></div>
                <script type="text/javascript">
                  window.fbAsyncInit = function() {
                    FB.init({
                      appId      : '445179998826018', // App ID
                      channelUrl : 'http://robotix.in/channel.html', // Channel File
                      status     : false, // check login status
                      cookie     : true, // enable cookies to allow the server to access the session
                      oauth      : true, // enable OAuth 2.0
                      xfbml      : true  // parse XFBML
                    });
                  };
                  (function(d){
                     var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
                     js = d.createElement('script'); js.id = id; js.async = true;
                     js.src = "//connect.facebook.net/en_US/all.js";
                     d.getElementsByTagName('head')[0].appendChild(js);
                   }(document));
                  
                </script>
                
               
                 
                <div style="margin: 0 27%">
                     
                    <div class="fb-registration"
                        data-fields='[{"name":"name"},
                                        {"name":"birthday"},
                                        {"name":"location"},
                                        {"name":"college","description":"College","type":"text"},
                                        {"name":"email"},
                                        {"name":"username","description":"Username","type":"text"},
                                        {"name":"password"}]' 
                        data-redirect-uri="http://robotix.in/siteuser/submit">
                     
                </div>
                 
            </section>
                    
        </div>
        