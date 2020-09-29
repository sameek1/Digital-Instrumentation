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
                  
                
                  
                    <li class="active"><a href="theme-styles.php" title="Theme Styles">Theme Styles</a></li>
                  
                
                  
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
    Theme Styles
  </h1>
</div>

<div class="sixteen columns page">
    <div class="quote">
  <p>The <a href="http://themes.shopify.com/themes/mobilia/styles/tokyo?ref=out-of-the-sandbox">Mobilia theme</a> supports all common styles that will render beautifully across all screen sizes and devices.</p>
</div>  



<div class="section">
  <h1>Heading One</h1>
  <h2>Heading Two</h2>
  <h3>Heading Three</h3>
  <h4>Heading Four</h4>
  <h5>Heading Five</h5>
  <h6>Heading Six</h6>
</div>
<div class="section">
  <p>
				      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</div>

<div class="section">
<br class="clear" />
<!-- Standard <ul> with class of "tabs" -->
  <ul class="tabs"><!-- Give href an ID value of corresponding "tabs-content" <li>'s -->
    <li><a class="active" href="#simple">Tab 1</a></li>
    <li><a href="#lightweight">Tab 2</a></li>
    <li><a href="#mobileFriendly">Tab 3</a></li>
</ul>

<!-- Standard <ul> with class of "tabs-content" -->
  <ul class="tabs-content"><!-- Give ID that matches HREF of above anchors -->
    <li class="active" id="simple">The tabs are clean and simple unordered-list markup and basic CSS.</li>
    <li id="lightweight">The tabs are cross-browser, but don't need a ton of hacky CSS or markup.</li>
    <li id="mobileFriendly">The tabs work like a charm even on mobile devices.</li>
</ul>
</div>

<div class="section">
<br class="clear" />
  <ul>
    <li>Unordered List example</li>
    <li>Nulla fringilla ultricies aliquet</li>
    <li>Vivamus cursus vehicula congue</li>
    <li>Lorem ipsum dolor sit amet</li>
    <li>Pharetra ut auctor at</li>
    <li>Cras in ligula quis nisl tincidunt</li>
  </ul>
  <p><br />
  </p>			  
  
  
  
  
  
  <ol>
    <li>Ordered list example</li>
    <li>Nulla fringilla ultricies aliquet</li>
    <li>Vivamus cursus vehicula congue</li>
    <li>Lorem ipsum dolor sit amet</li>
    <li>Pharetra ut auctor at</li>
    <li>Cras in ligula quis nisl tincidunt</li>
  </ol>

          </div>
<div class="section">
  <blockquote>This is a blockquote style example</blockquote>
</div>
<div class="section">
  <table cellspacing="0">
    <thead>
      <tr>
        <th>Company</th>
        <th>Q1</th>
        <th>Q2</th>
        <th>Q3</th>
        <th>Q4</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Profit One</td>
        <td>20.3</td>
        <td>30.5</td>
        <td>23.5</td>
        <td>40.3</td>
      </tr>
      <tr>
        <td>Profit Two</td>
        <td>50.2</td>
        <td>40.63</td>
        <td>45.23</td>
        <td>39.3</td>
      </tr>
      <tr>
        <td>Profit Three</td>
        <td>25.4</td>
        <td>30.2</td>
        <td>33.3</td>
        <td>36.7</td>
      </tr>
      <tr>
        <td>Profit Four</td>
        <td>20.4</td>
        <td>15.6</td>
        <td>22.3</td>
        <td>29.3</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="section">
  <form action="#">

              <!-- Label and text input --><label for="regularInput">Regular Input</label><input type="text" id="regularInput">

              <!-- Label and textarea --><label for="regularTextarea">Regular Textarea</label><textarea id="regularTextarea"></textarea>

              <!-- Label and select list --><label for="selectList">Select List</label><select id="selectList">
    <option value="Option 1">Option 1</option>
    <option value="Option 2">Option 2</option>
    <option value="Option 3">Option 3</option>
  </select>

              <!-- Wrap checkbox/radio button groups in fieldsets -->
    <fieldset>

                <!-- Give the fieldset a label --><label for="">Checkboxes</label>

                <!-- Wrap each checkbox in a label, then give it the input and span for the text option --><label for="regularCheckbox"><input type="checkbox" id="regularCheckbox" value="checkbox 1"><span>Regular Checkbox</span></label>

                <label for="secondRegularCheckbox"><input type="checkbox" id="secondRegularCheckbox" value="checkbox 2"><span>Regular Checkbox</span></label></fieldset>
    <fieldset><label for="">Radio Buttons</label><label for="regularRadio"><input type="radio" name="radios" id="regularRadio" value="radio 1"><span>Regular Radio</span></label><label for="secondRegularRadio"><input type="radio" name="radios" id="secondRegularRadio" value="radio 2"><span>Regular Radio</span></label></fieldset>

              <button type="submit">Submit Form</button>

            </form>
</div>

<div class="section">
  <h4>Videos</h4>
  <div class="video-container">
    <iframe width="560" height="315" src="http://www.youtube.com/embed/HQId6xDGEVo" frameborder="0" allowfullscreen=""></iframe>
</div>
</div>

<div class="section">
  <h4>The Grid</h4>
  <p>
The base grid is a variation of the 960 grid system. The syntax is simple and it's effective cross browser. <strong>Go ahead, resize the browser and watch as the layout reacts!</strong>
</p>
  <div id="grid">
    <div class="example-grid">
      <div class="one column alpha">One</div>
      <div class="fifteen columns omega">Fifteen</div>
      <div class="two columns alpha">Two</div>
      <div class="fourteen columns omega">Fourteen</div>
      <div class="three columns alpha">Three</div>
      <div class="thirteen columns omega">Thirteen</div>
      <div class="four columns alpha">Four</div>
      <div class="twelve columns omega">Twelve</div>
      <div class="five columns alpha">Five</div>
      <div class="eleven columns omega">Eleven</div>
      <div class="six columns alpha">Six</div>
      <div class="ten columns omega">Ten</div>
      <div class="seven columns alpha">Seven</div>
      <div class="nine columns omega">Nine</div>
      <div class="eight columns alpha">Eight</div>
      <div class="eight  columns omega">Eight</div>
      <div class="nine columns alpha">Nine</div>
      <div class="seven columns omega">Seven</div>
      <div class="ten columns alpha">Ten</div>
      <div class="six columns omega">Six</div>
      <div class="eleven columns alpha">Eleven</div>
      <div class="five columns omega">Five</div>
      <div class="twelve columns alpha">Twelve</div>
      <div class="four columns omega">Four</div>
      <div class="thirteen columns alpha">Thirteen</div>
      <div class="three columns omega">Three</div>
      <div class="fourteen columns alpha">Fourteen</div>
      <div class="two columns omega">Two</div>
      <div class="fifteen columns alpha">Fifteen</div>
      <div class="one column omega">One</div>
      <div class="sixteen columns alpha omega">Sixteen</div>
    </div>
   </div>
</div>

</div>
      
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

<!-- Mirrored from tokyo-teas.myshopify.com/pages/theme-styles by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 14 Oct 2013 15:15:42 GMT -->
</html>