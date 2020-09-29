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
                
                  
                    <li class="active"><a href="theme-settings.php" title="Theme Settings">Theme Settings</a></li>
                  
                
                  
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
    Theme Settings
  </h1>
</div>

<div class="sixteen columns page">
    <div class="ten columns alpha">
<ul>
<li><a href="#theme-settings">Theme Settings</a></li>
<li><a href="#dropdown-menu">Creating a Dropdown Menu</a></li>
<li><a href="#slideshow-setup">Setting up the Slideshow</a></li>
<li><a href="#enable-newsletter">Enabling the Newsletter</a></li>
<li><a href="#mailchimp">Setting up MailChimp</a></li>
<li><a href="#products-per-row">Products Per Row</a></li>
<li><a href="#adding_tabs">Adding Tabs</a></li>
<li><a href="#videos">Embedding Videos</a></li>
<li><a href="#products-on-sale">Products on Sale</a></li>
<li><a href="#new-products">New Products</a></li>
<li><a href="#recent-articles">Recent Blog Articles on the Home Page</a></li>
<li><a href="#images-variants">Associate Product Variants with Product Images</a></li>
<li><a href="#homepage-collections">Home Page Collections</a></li>
<li><a href="#related-products">Related Products</a></li>
<li><a href="#lookbook">Create a Lookbook or Slideshow on any Page</a></li>
<li><a href="#shopify">Removing the Shopify Link</a></li>
<li><a href="#contact_form">Creating a Contact Form</a></li>
</ul>
<h4 id="theme-settings">Theme Settings</h4>
<p style="background-color: #fff;"><img alt="" src="../s/files/1/0189/7204/files/Screen_Shot_2012-11-16_at_12.03.22_PM2421.png?436" /><img alt="" src="../s/files/1/0189/7204/files/Screen_Shot_2012-11-16_at_12.03.38_PM2421.png?436" /><img alt="" src="../s/files/1/0189/7204/files/Screen_Shot_2012-11-16_at_12.04.00_PM2421.png?436" /><img alt="" src="../s/files/1/0189/7204/files/Screen_Shot_2012-11-16_at_12.04.09_PM2421.png?436" /><img alt="" src="../s/files/1/0189/7204/files/Screen_Shot_2012-11-16_at_12.04.19_PM2421.png?436" /><img alt="" src="../s/files/1/0189/7192/files/Screen_Shot_2013-03-25_at_3.56.26_PM8597.png?1119" /><img alt="" src="../s/files/1/0189/7192/files/Screen_Shot_2013-03-25_at_3.56.32_PM3a15.png?1121" /><img alt="" src="../s/files/1/0189/7192/files/Screen_Shot_2013-03-25_at_3.56.53_PM2cfd.png?1123" /><img alt="" src="../s/files/1/0189/7192/files/Screen_Shot_2013-03-25_at_3.57.06_PMc210.png?1125" /><img alt="" src="../s/files/1/0189/7192/files/Screen_Shot_2013-03-25_at_3.57.33_PM678a.png?1127" /><img alt="" src="../s/files/1/0179/8721/files/mobilia1_grande806f.png?2337" /><img alt="" src="../s/files/1/0179/8721/files/mobilia2_grande3593.png?2339" /><img alt="" src="../s/files/1/0189/7192/files/Screen_Shot_2013-03-25_at_3.57.50_PM69a5.png?1129" /><img alt="" src="../s/files/1/0189/7204/files/Screen_Shot_2012-11-16_at_12.05.18_PM2421.png?436" /><img alt="" src="../s/files/1/0114/1962/files/Screen_Shot_2013-06-19_at_9.09.10_PMc32d.png?979" /><img alt="" src="../s/files/1/0189/7204/files/Screen_Shot_2012-11-16_at_12.05.26_PM2421.png?436" /><img alt="" src="../s/files/1/0189/7204/files/Screen_Shot_2012-11-16_at_12.05.34_PM2421.png?436" /><img alt="" src="../s/files/1/0189/7204/files/Screen_Shot_2012-11-16_at_12.05.43_PM2421.png?436" /></p>
<h4 id="dropdown-menu">Creating a Dropdown Menu</h4>
<p>To create a dropdown menu, first decide on which menu item in your Main Menu you would like to have as a dropdown. From the Navigation tab in the Shopify Admin, create a new "link list". The title of this "link list" must be the same as the title of the menu item from your Main Menu. For example, if you have a Main Menu with a link called "Collections", create a new "link list" with the title "Collections". Each link in this new "link list" will appear as a dropdown under "Collections".</p>
<p><img alt="" src="http://static.shopify.com/s/files/1/0104/4372/files/step1_grande.jpeg?4131" /><img alt="" src="http://static.shopify.com/s/files/1/0104/4372/files/step2_grande.jpeg?4131" /></p>
<h4 id="slideshow-setup">Setting up the Slideshow</h4>
<p>To enable the home page slide show, go to your theme settings (<strong>Themes &gt; Theme Settings</strong>). Select the "Home Page" section. Ensure that "Slideshow Enabled" is checked. Then you can choose up to four images to include in the slideshow. Each image can link to whichever URL you choose. An optional caption can be included for each image.</p>
<h4 id="enable-newsletter">Enabling the Newsletter</h4>
<p>The Newsletter is directly tied into your Shopify store. New subscribers will appear in your Customers. To enable the Newsletter, go to your theme settings (<strong>Themes &gt; Theme Settings</strong>). Select the "Footer" section and check "Newsletter Sign Up Form". New signups will appear in your Customers section. You can also choose to use <a href="http://mailchimp.com/">MailChimp</a>, which requires a MailChimp account. You can insert your custom MailChimp form URL to submit to your mailing list.</p>
<p><img alt="" src="../s/files/1/0104/4372/files/Screen_Shot_2012-01-07_at_9.04.08_PM_grandeb3dd.png?5380" /></p>
<h4 id="mailchimp">Setting up MailChimp</h4>
<p>To enable MailChimp for your email subscriptions, first select the MailChimp option in the Footer section of your Theme Settings. Then login into your MailChimp account and from&nbsp;the Lists section, go to "For Your Website" &gt; "Signup Form Embed Code". See below for &nbsp;the URL required for your Theme Settings:</p>
<p><img alt="" src="../s/files/1/0104/4372/files/mailchimp_grandeddb1.jpg?5413" /></p>
<h4 id="products-per-row">Products Per Row</h4>
<p>One of the great features of the Mobilia theme is the ability to adjust the number of products displayed per row. This can have a great impact on how your products are displayed, featuring larger images or more products. You can adjust the number of products displayed on the Home Page as well as the Collection pages for browsing. Go to you theme settings (<strong>Themes &gt; Theme Settings</strong>). Select the "Home Page" section to adjust the products and content on the home page. Select the "Collection Page" to adjust the products displayed on the collection pages.</p>
<p><img alt="" src="../s/files/1/0104/4372/files/Screen_Shot_2011-11-14_at_2.38.51_PM_grandeca8a.png?4127" /></p>
<h4 id="adding_tabs">Adding Tabs</h4>
<p>When editing a page or product description, you can click on the HTML button to toggle into HTML mode. You create tabs by following this code example:</p>
<pre><code>
&lt;ul class="tabs"&gt;
  &lt;li&gt;&lt;a class="active" href="#tab1"&gt;Tab 1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#tab2"&gt;Tab 2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#tab3"&gt;Tab 3&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="tabs-content"&gt;
  &lt;li class="active" id="tab1"&gt;Tab 1 content&lt;/li&gt;
  &lt;li id="tab2"&gt;Tab 2 content&lt;/li&gt;
  &lt;li id="tab3"&gt;Tab 3 content&lt;/li&gt;
&lt;/ul&gt;
</code>
</pre>
<h4 id="videos">Embedding Videos</h4>
<p>To embed a resizable YouTube or Vimeo video, you'll need to wrap the embed code snippet with an extra div tag. Here is an example below:</p>
<pre><code>
&lt;div class="video-container"&gt;
  &lt;iframe width="560" height="315" 
  src="http://www.youtube.com/embed/HQId6xDGEVo" 
  frameborder="0" allowfullscreen=""&gt;  
  &lt;/iframe&gt;
&lt;/div&gt;

</code></pre>
<div class="video-container"><iframe src="http://www.youtube.com/embed/HQId6xDGEVo" height="315" width="560"></iframe></div>
<br /> <br />
<h4 id="products-on-sale">Products on Sale</h4>
<p>To have a product display a "SALE" banner, update your "Compare at price" to be greater than the current price.</p>
<p><img alt="" src="../s/files/1/0104/4372/files/Screen_Shot_2012-01-11_at_8.26.16_PM_grande3bc7.png?5411" /></p>
<h4 id="new-products">New Products</h4>
<p>To have a product display a "NEW" banner, create a product collection called "New". Any products added to that collection will automatically display the banner.</p>
<h4 id="recent-articles">Recent Blog Articles on the Home Page</h4>
<p>To add recent blogs articles to your home page, go to the Home Page section of the Theme Settings. Enable the Recent Blog Articles Widget setting. To display images from your articles on the home page, be sure to click '<strong>add an excerpt</strong>' when editing an article.</p>
<h4 id="images-variants">Associate Product Variants with Product Images</h4>
<p>You can have the featured product image change when selecting an associated variant. Match up your product&rsquo;s variants with your product image&rsquo;s ALT text. The product&rsquo;s variants must be exactly the same as the product image&rsquo;s ALT text.</p>
<p><img alt="" src="../s/files/1/0104/4372/files/variants_and_product_image_alt_tags1_grande1890.png?5707" /></p>
<h4 id="homepage-collections">Home Page Collections</h4>
<p>You can display featured collections on the home page. The first thing you'll need to do is create a link list of your collections from the Navigation tab. Go to the Navigation page and click on the <em>Add link list</em> link at the top of the page:</p>
<p><img alt="" src="../s/files/1/0104/4372/files/Awesome_theme___Admin___Shop_Navigation_grandec1cd.png?5883" /></p>
<p>The link list can have any name, this will not be displayed:</p>
<p><img alt="" src="../s/files/1/0104/4372/files/Awesome_theme___Admin___Shop_Navigation-1_grande6d37.png?5881" /></p>
<p>Then add links to the link list that point to a <em>Product Collection</em>. The titles of the links will be used for the collection names.</p>
<p><img alt="" src="../s/files/1/0104/4372/files/collection_grande927e.png?5879" /></p>
<p>When you are finished, go to Themes &gt; Theme Settings &gt; Home Page section to select your featured collections link list. You can also select how many collections to display per row.</p>
<p>The image used for each collection will either be the first product in that collection, or you can upload an image when editing each collection.</p>
<h4 id="related-products">Related Products</h4>
<p>By default, the related products are simply other products from the same product collection.</p>
<p>If you would like a specific collection to be used for your product's related products, you can follow these instructions:</p>
<ol>
<li>Create the related collection and make note of the collection's handle. You can find out how to <a href="http://support.shopify.com/customer/portal/articles/261197-what-is-a-collection-handle-" target="_blank">find the collection handle &rarr;</a></li>
<li>Edit your product and add a new tag that specifies the collection's handle: <br /> <strong>meta-related-collection-<i>handle-name</i> <br /> <br /> <img alt="Related Product Meta Tags" src="../s/files/1/0179/8721/files/Screen_Shot_2013-01-16_at_3.46.23_PM7fd8.png?2444" /> </strong></li>
<li>The products in this collection should now be displayed in the Related Products section. You can also find other methods for displaying the related products in the <a href="http://wiki.shopify.com/Related_Products" target="_blank">Shopify Wiki</a>.</li>
</ol>
<h4 id="lookbook">Create a Lookbook or Slideshow on any Page</h4>
<p>It's possible to use the slideshow on other pages, but it does require a bit of HTML editing. If you edit one of your pages in HTML mode (click the HTML button in the editor), you can follow this example:</p>
<pre><code>
&lt;div class="flexslider slider"&gt;
  &lt;ul class="slides"&gt;
    &lt;li&gt;
      &lt;img src="IMAGE_URL1" /&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;img src="IMAGE_URL2" /&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;img src="IMAGE_URL3" /&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;

</code></pre>
<p>Where you would need to replace the <strong>IMAGE_URL</strong> values. If you don't know what your image URLs are, you could use the 'Insert' button to add an image then toggle to HTML mode to view the source.</p>
<h4 id="shopify">Removing the Shopify Link</h4>
<p>From the Template Editor, select theme.liquid. At the end of line 344, you can remove <br /> {{ powered_by_link }}</p>
<h4 id="contact_form">Creating a Contact Form</h4>
<p>There is a special page template specifically for contact forms. Here is an example <a href="contact-us.php">Contact Us page</a>. To use this layout, you'll need to select the page.contact template when editing a page.</p>
<p><img alt="" src="../s/files/1/0104/4372/files/Screen_Shot_2011-11-29_at_3.31.12_PM_grande8ef0.png?5211" /></p>
<h4>More Dynamic Contact Form</h4>
<a title="Shopify Contact Form" href="http://apps.shopify.com/contact-form"><img class="left" style="margin-right: 15px; margin-bottom: 20px;" alt="" src="../s/files/applications/89ecb7b4529d7c726194c62fe676c44a.png" /></a>
<p>If you would like a contact form with enhanced visual appeal, instant accessibility and more flexibility, the Mobilia theme includes a promo code for the popular <a href="http://apps.shopify.com/contact-form">Shopify Contact Form</a> app. Look in the Theme Settings to try the <a href="http://apps.shopify.com/contact-form">Contact Form</a> <strong><em>FREE</em></strong> for 60 days!</p>
</div>
<div class="five columns offset-by-one omega">
<h4>Support</h4>
<p><small>Developed by <a href="http://outofthesandbox.com/">Out of the Sandbox</a><br /> Contact <a href="mailto:info@outofthesandbox.com">info@outofthesandbox.com</a></small></p>
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

<!-- Mirrored from tokyo-teas.myshopify.com/pages/theme-settings by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 14 Oct 2013 15:15:42 GMT -->
</html>