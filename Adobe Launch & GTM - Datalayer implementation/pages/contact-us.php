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
          
        
          
            <li ><a href="collections.php" title="Shop">Shop</a>
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
          
        
          
            <li ><a href="theme-features.php" title="Theme Features">Theme Features</a>
              <ul>
                
                  
                    <li ><a href="theme-settings.php" title="Theme Settings">Theme Settings</a></li>
                  
                
                  
                    <li ><a href="theme-styles.php" title="Theme Styles">Theme Styles</a></li>
                  
                
                  
                    <li ><a href="http://outofthesandbox.com/products/mobilia-theme-tokyo" title="Purchase Theme">Purchase Theme</a></li>
                  
                
              </ul>
            </li>
          
        
        
          
            <li>
              <a href="contact-us.php" title="Contact Us">Contact Us</a>
            </li>
          
        
        
          <li>
            <a href="../account/login.php" title="My Account ">My Account</a>
          </li>
          
        
      </ul>
    </div>  
      
      <div class="fixed_header"></div>

      
        <div class="container main content"> 
      

      
        <div class="sixteen columns clearfix collection_nav">
  <h1 class="collection_title">
    Contact Us
  </h1>
</div>

<form method='post' action='http://tokyo-teas.myshopify.com/contact' class='contact-form' accept-charset='UTF-8'><input name='form_type' type='hidden' value='contact'/><input name="utf8" type="hidden" value="✓"> 
  

  


  <div class="ten columns page">
      <p>This is an example of a 'Contact' template. When you edit a page, you can select this template to display the contact form.</p>
<p><img src="http://cdn.shopify.com/s/files/1/0179/8721/files/bg_grande.jpeg?1059" />&nbsp;</p>

  </div>
  
  <div class="five columns offset-by-one">

       <label for="contact_form_name">Name <span class="red">*</span></label>
       <input type="text" id="contact_form_name" name="contact[name]" required value="" />

       <label for="contact_form_email">Email <span class="red">*</span></label>
       <input type="text" id="contact_form_email" name="contact[email]" required pattern="[^ @]*@[^ @]*" value=""/>

       <label for="contact_form_phone">Phone Number</label>
       <input type="text" id="contact_form_phone" name="contact[phone]" value="" />

       <label for="contact_message">Message</label>       
       <textarea id="contact_message" name="contact[body]" required rows="5"></textarea>

        <input type='submit' class="submit action_button" value="Submit" />
  </div>

</form>
  
      
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

<!-- Mirrored from tokyo-teas.myshopify.com/pages/contact-us by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 14 Oct 2013 15:14:34 GMT -->
</html>