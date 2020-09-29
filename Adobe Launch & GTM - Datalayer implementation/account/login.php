<?php include('../header.php');?>
    <div class="toggle_menu nav">
      <ul class="mobile_menu">
        <li>
          <form class="search" action="<?php  echo $hostName; ?>search.php">
            <input type="hidden" name="type" value="article,product" />
            <input type="text" name="q" class="search_box" placeholder="Search..." value="" />
          </form>
        </li>
        
          
            <li ><a href="../index.php" title="Home">Home</a></li>
          
        
          
            <li ><a href="../pages/collections.php" title="Shop">Shop</a>
              <ul>
                
                  
                    <li ><a href="../collections/tea.php" title="Premium Tea">Premium Tea</a></li>
                  
                
                  
                  <li ><a href="../collections/teaware.php" title="Teaware">Teaware</a> 
                    <ul>
                                              
                        <li ><a href="../collections/teaware/products/kyusu-teapot.php" title="Kyusu Teapot">Kyusu Teapot</a></li>
                                              
                        <li ><a href="../collections/teaware/products/stone-tea-tray.php" title="Stone Tea Tray">Stone Tea Tray</a></li>
                                              
                        <li ><a href="../collections/teaware/products/bamboo-tea-tray.php" title="Bamboo Tea Tray">Bamboo Tea Tray</a></li>
                      
                    </ul>
                  </li>
                  
                
                  
                    <li ><a href="../collections/sidebar.php" title="Sidebar">Sidebar</a></li>
                  
                
              </ul>
            </li>
          
        
          
            <li ><a href="../blogs/news.php" title="Blog">Blog</a></li>
          
        
          
            <li ><a href="../pages/theme-features.php" title="Theme Features">Theme Features</a>
              <ul>
                
                  
                    <li ><a href="../pages/theme-settings.php" title="Theme Settings">Theme Settings</a></li>
                  
                
                  
                    <li ><a href="../pages/theme-styles.php" title="Theme Styles">Theme Styles</a></li>
                  
                
                  
                    <li ><a href="http://outofthesandbox.com/products/mobilia-theme-tokyo" title="Purchase Theme">Purchase Theme</a></li>
                  
                
              </ul>
            </li>
          
        
        
          
            <li>
              <a href="../pages/contact-us.php" title="Contact Us">Contact Us</a>
            </li>
          
        
        
          <li>
            <a href="login.php" title="My Account ">My Account</a>
          </li>
          
        
      </ul>
    </div>  
      
      <div class="fixed_header"></div>

      
        <div class="container main content"> 
      

      
        

<div class="sixteen columns clearfix collection_nav">
  <h1 class="collection_title">Customer Login</h1>
</div>

<div class="clearfix" id="customer">  
  <div class="one-third column">
    &nbsp;
  </div>
  <div class="six columns" id="login_form">

    <form method='post' action='../index.php' id='customer_login' accept-charset='UTF-8'><input name='form_type' type='hidden' value='customer_login'/><input name="utf8" type="hidden" value="✓"> 
      

      <label for="customer_email" class="login">Email Address</label>
      <input type="email" value="" name="customer[email]" id="customer_email" class="large" size="30" />

      

        

        <small><em class="right"><a href="#" onclick="showRecoverPasswordForm()">Forgot your password?</a></em></small>
        <label for="customer_password" class="login">Password</label>
        <input type="password" value="" name="customer[password]" id="customer_password" class="large password" size="16" />

      


      <input class="btn action_button" type="submit" value="Login" />

      
        <p class="right">
          New Customer? <a href="register.php" id="customer_register_link">Sign up &rarr;</a>
        </p>
      
    </form>
  </div>
    
    <div id="recover-password" style='display:none'>
      <div class="six columns">
    
        <h4>Reset Password</h4>

        <form method='post' action='http://tokyo-teas.myshopify.com/account/recover' accept-charset='UTF-8'><input name='form_type' type='hidden' value='recover_customer_password'/><input name="utf8" type="hidden" value="✓"> 
          

          <div id="recover_email" class="clearfix large_form">
            <label for="email" class="large">Email Address</label>
            <input type="email" value="" size="30" name="email" id="recover-email" class="large" />
          </div>
          
          <p>
            <em class="note">We will send you an email to reset your password.</em>
          </p>
          
          <p class="action_bottom">
            <input class="btn action_button" type="submit" value="Submit" />
            <span class="note">or <a href="#" onclick="hideRecoverPasswordForm()">Cancel</a></span>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
  function showRecoverPasswordForm() {
    document.getElementById('recover-password').style.display = 'block';
    document.getElementById('login_form').style.display='none';
    return false;
  }

  function hideRecoverPasswordForm() {
    document.getElementById('recover-password').style.display = 'none';
    document.getElementById('login_form').style.display = 'block';
    return false;
  }

  if (window.location.hash == '#recover') { showRecoverPasswordForm() }
</script>

      
    </div> <!-- end container -->

      <?php include('../footer.php');?> <!-- end footer -->

    
      <script type="text/javascript">
        (function() {
          var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
          po.src = '../script/plusone.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
      </script>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.async=true;js.src="../script/twitter/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    

  </body>

<!-- Mirrored from tokyo-teas.myshopify.com/account/login by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 14 Oct 2013 15:14:35 GMT -->
</html>