<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include 'script/head_imp_file.php';
      include 'php/function_php.php';
      if(isset($_POST['registration_step_1']))
        registration_1($_POST['email'],$_POST['fname'],$_POST['mname'],$_POST['lname'],$_POST['password']);
    ?>
  </head>

  <body onload="generateCaptcha();">

  <section id="container" >
  <?php
    include 'script/master_reg_nav.php';
    include 'script/master_reg_side_nav.php';
  ?>    
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                <h3 style="margin-left:1%;">Privacy Policies</h3><hr style="margin-left:1%;">
                <div class="col-lg-12 main-chart">
                  <div class="showback">


                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-info active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                      </div>
                    </div>

                    <h1> Privacy Policy for Asterix Education</h1>
                      <p> If you require any more information or have any questions about our privacy policy, please feel free to contact us by email at <a href="mailto:asterixeducationkolkata@gmail.com"></a>.</p>
                      <p>At www.asterixeducation we consider the privacy of our visitors to be extremely important. This privacy policy document describes in detail the types of personal information is collected and recorded by www.asterixeducation and how we use it. </p><p> <b>Log Files</b><br> Like many other Web sites, www.asterixeducation makes use of log files. These files merely logs visitors to the site - usually a standard procedure for hosting companies and a part of hosting services's analytics. The information inside the log files includes internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date/time stamp, referring/exit pages, and possibly the number of clicks. This information is used to analyze trends, administer the site, track user's movement around the site, and gather demographic information. IP addresses, and other such information are not linked to any information that is personally identifiable. </p>
                      <p> <b>Cookies and Web Beacons</b><br>www.asterixeducation does not use cookies. </p>

                      <p><b>DoubleClick DART Cookie</b><br> 
                       
                      &rarr; Google, as a third party vendor, uses cookies to serve ads on www.asterixeducation.<br> 
                      &rarr; Google's use of the DART cookie enables it to serve ads to our site's visitors based upon their visit to www.asterixeducation and other sites on the Internet. <br> 
                      &rarr; Users may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy at the following URL - <a href="http://www.google.com/privacy_ads.html" title="Opt out of the Dart Cookie">http://www.google.com/privacy_ads.html</a> </p> 
                      <p><b>Our Advertising Partners</b><br> 
                       Some of our advertising partners may use cookies and web beacons on our site. Our advertising partners include ....... <br>
                      <ul><li>Google</li>
                      <li>Commission Junction</li>
                      <li>Amazon</li>
                      <li>Widget Bucks</li>
                      <li>Adbrite</li>
                      <li>Clickbank</li>
                      <li>Linkshare</li>
                      <li>Yahoo! Publisher Network</li>
                      <li>Azoogle</li>
                      <li>Chitika</li>
                      <li>Kontera</li>
                      <li>TradeDoubler</li>
                      <li></li>
                      <li>Other</li>
                      </ul>
                      <p><em>While each of these advertising partners has their own Privacy Policy for their site, an updated and hyperlinked resource is maintained here: <a href="http://www.privacypolicyonline.com/privacy-policies">Privacy Policies</a>.<br /> 
                      You may consult this listing to find the privacy policy for each of the advertising partners of www.asterixeducation.</em></p>
                      <p> These third-party ad servers or ad networks use technology in their respective advertisements and links that appear on www.asterixeducation and which are sent directly to your browser. They automatically receive your IP address when this occurs. Other technologies (such as cookies, JavaScript, or Web Beacons) may also be used by our site's third-party ad networks to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on the site. </p> 
                      <p> www.asterixeducation has no access to or control over these cookies that are used by third-party advertisers. </p> 
                      <p> </p><p><b>Third Party Privacy Policies</b><br> 
                      You should consult the respective privacy policies of these third-party ad servers for more detailed information on their practices as well as for instructions about how to opt-out of certain practices. www.asterixeducation's privacy policy does not apply to, and we cannot control the activities of, such other advertisers or web sites. You may find a comprehensive listing of these privacy policies and their links here: <a href="http://www.privacypolicyonline.com/privacy-policy-links" title="Privacy Policy Links">Privacy Policy Links</a>.</p> 
                      <p> If you wish to disable cookies, you may do so through your individual browser options. More detailed information about cookie management with specific web browsers can be found at the browsers' respective websites. <a href="http://www.privacypolicyonline.com/what-are-cookies">What Are Cookies?</a></p>

                      <p><strong>Children's Information</strong><br />We believe it is important to provide added protection for children online. We encourage parents and guardians to spend time online with their children to observe, participate in and/or monitor and guide their online activity.
                      www.asterixeducation does not knowingly collect any personally identifiable information from children under the age of 13.  If a parent or guardian believes that www.asterixeducation has in its database the personally-identifiable information of a child under the age of 13, please contact us immediately (using the contact in the first paragraph) and we will use our best efforts to promptly remove such information from our records.

                      <p>
                      <b>Online Privacy Policy Only</b><br />
                      This privacy policy applies only to our online activities and is valid for visitors to our website and regarding information shared and/or collected there.
                      This policy does not apply to any information collected offline or via channels other than this website.</p>
                      <p><b>Consent</b><br />
                      By using our website, you hereby consent to our privacy policy and agree to its terms.
                      </p><br /><br /><p><b>Update</b><br />This Privacy Policy was last updated on: Tuesday, May 29th, 2018.
                      <a href="http://www.PrivacyPolicyOnline.com" title="PrivacyPolicyOnline.com Approved Site" target="_blank"><img src="http://www.privacypolicyonline.com/images/privacypolicyonline-seal.png" border="0" alt="Privacy Policy Online Approved Site" align="right" /></a><br /><em>Should we update, amend or make any changes to our privacy policy, those changes will be posted here.</em>
                      <br /><br /></p>
                      Tick this to continue: 
                      <input    type="checkbox"   onchange="document.getElementById('agree_terms').disabled = !this.checked;" />
                      <button   type="button"     class="btn btn-theme"  id="agree_terms" disabled><a href="Student_Page_7.php">Agree and Continue</a></button>
                  </div>	
					      </div>
              </div>
          </section>
      </section>

      <!--main content end-->
  </section>
      <?php
        include 'script/tail_imp_file.php';
        include 'script/footer.php';
      ?>
  </body>
</html>