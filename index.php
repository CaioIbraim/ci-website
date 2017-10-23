<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{blog_title}</title>

    <!-- Bootstrap -->
  <link href="/ci-site/gp/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/ci-site/gp/css/font-awesome.min.css">
	<link href="/ci-site/gp/css/animate.min.css" rel="stylesheet">
  <link href="/ci-site/gp/css/prettyPhoto.css" rel="stylesheet">
	<link href="/ci-site/gp/css/style.css" rel="stylesheet">
	<link href="/ci-site/gp/css/responsive.css" rel="stylesheet">

  <style>
    .modal-header{
      background: #000;

    }
    .modal-header h4{
      color: gold;
    }
  </style>



  </head>
  <body class="homepage">


    <div class="container">

<!-- Este bloco será apresentado sempre que a variável slide existir -->

<div class="row">
  <div class="col-md-12 col-sm-6 col-xs-12">
    <div class="slider">
  		<div class="container">
  			<div id="about-slider">
             <img src="/ci-site/gp/images/slider_tree.png" class="img-responsive" alt="">
  			</div>
  		</div>
  	</div>
  </div>
</div>

<!--/#about-slider-->


<header id="header">
 <nav class="navbar-custom">
     <div class="container">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>

         </div>

         <div class="collapse navbar-collapse navbar-left">
             <ul class="nav navbar-nav">
               {menu}
                 <li><a  href="<?= base_url(); ?>{link}">{titulo}</a></li>
               {/menu}
             </ul>
         </div>
     </div><!--/.container-->
 </nav><!--/nav-->
</header><!--/header-->

Seja bem vindo : <span id="wellcomeName"></span>

	 <section id="feature" >
        <div class="container-fluid">
            <div class="col-md-8 col-sm-8 col-xs-8">

<!-- Apresentar Banner caso exista -->
<?php if(isset($slide)){ ?>
                                <div class="row">
                                    <div class="features">
                                        <div class="col-md-12">
                                            <div class="feature-wrap">
                                                <!-- Este bloco será apresentado sempre que a variável slide existir -->
                                                <div class="row">
                                                  <div class="col-md-12 col-sm-6 col-xs-12">
                                                    <div class="slider">
                                                      <div class="container-fluid">
                                                        <div id="about-slider">
                                                              {slide}
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <!--/#about-slider-->
                                            </div>
                                        </div><!--/.col-md-4-->
                                    </div><!--/.services-->
                                </div><!--/.row-->
<?php  }?>

                        <div class="row">
                            <div class="features">
                                <div class="col-md-7">
                                    <div class="feature-wrap">
                                        <h1>Quem Somos</h1>
                                          <h3>
                                             <a href="<?= base_url(); ?>sobre"> <?= mb_strimwidth($sobre, 0, 195, "..."); ?> </a>
                                          </h3>
                                    </div>
                                </div><!--/.col-md-4-->
                            </div><!--/.services-->
                        </div><!--/.row-->
            </div>

            <!-- Segunda coluna -->

            <div class="col-md-4 col-sm-4 col-xs-4">

              <div class="row">
                <div class="feature-wrap">
                   <h2>ARTIGOS EM DESTAQUE</h2>
                   <hr>
                      <small> <?= $lastPost[0]['data'] ?>  </small>
                      <a href="<?= base_url();?>estudos/exibe/<?= $lastPost[0]['id_post'] ?>" target="_blank">
                      <h4><?= $lastPost[0]['titulo'] ?></h4>
                      <?= mb_strimwidth($lastPost[0]['texto'] , 0, 150, "..."); ?>
                    </a>
                  <hr>
                </div>
              </div>



{banner}
              <div class="row">
                <div class="feature-wrap">
                    {tag}
                  </div>
              </div>
{/banner}

            </div>
            <!-- Fim da segunda coluna -->

        </div><!--/.container-->
    </section><!--/#feature-->
</div> <!-- Continer principal-->





<!--
	<section id="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3
            </div>
        </div>
    </section><!--/#bottom-->




	<div class="top-bar">
		<div class="container">
			<div class="row">
			    <div class="col-lg-12">
				   <div class="social">
						<ul class="social-share">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
						</ul>
				   </div>
                </div>
			</div>
		</div><!--/.container-->
	</div><!--/.top-bar-->




	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; MBM. Todos Direitos Reservados.
                    <div class="credits">
                        <a href="">Desenvolvido</a> por: <a href="">Caio Ibraim</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                      {menu}
                        <li><a  href="<?= base_url(); ?>{link}">{titulo}</a></li>
                      {/menu}
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->







<!-- Área de modais -->




    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Criar Conta</h4>
          </div>
          <div class="modal-body">

            <form name="registerForm" id="registerForm" novalidate="">
                       <div class="form-group">
                            <label class="control-label" for="username">Email</label>
                            <input class="form-control" id="username" name="username" required="" type="email">
                            <p class="help-block hide color-red">Digite um email válido</p>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Senha</label>
                            <input name="password" class="hide" type="password">
                            <input class="form-control" id="password" name="password" autocomplete="off" required="" type="password">
                            <div class="help-block text-left hide" role="alert">
                                <div class="pattern color-red">
                                    A senha é obrigatória e deve ter no minimo 6 caracteres
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="confirmPassword">Confirme a senha</label>
                            <input class="form-control" id="confirmPassword" name="confirmPassword" required="" type="password">
                            <p class="help-block hide">As senhas digitadas não conferem</p>
                        </div>
                        <div class="formSpacer"></div>
                        <p class="text-center">
                            Ao clicar no botão estará concordando, com os
                            <a href="javascript:void(0)"  data-toggle="modal" data-target="#terms" class="text-underline">Termos e Condições</a> e com a
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#PrivacyPolicyModal" class="text-underline">Política de privacidade do Ministério Beit Midrash</a>
                        </p>
                        <button type="submit" id="registerButton" class="btn btn-primary btn-block btn-lg margin-top-40">
                            Enviar
                        </button>
                    </form>

          </div>

        </div>

      </div>
    </div>

        <!-- Trigger the modal with a button -->
        <!-- Modal -->
        <div id="wellcomeAgain" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Bem vendo novamente</h4>
              </div>
              <div class="modal-body">

              </div>

            </div>

          </div>
        </div>

    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div id="PrivacyPolicyModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Privacy Policy</h4>
          </div>
          <div class="modal-body">
            <textarea name="name" rows="25" class="form-control" readonly>

              This Privacy Policy (the “PP”) applies to User’s use of MinisterioBeitMidrash.com (the "Site"), and any software, products and service offered by Ad Maven through the Site, or otherwise (if any) (the “Product(s)”). The Product(s) and the Site shall be referred to, collectively, as the “Software”, and this document set forth the privacy policies Ad Maven practices in the Software. This PP is an integral part of Ad Maven’s Terms of Use (available at www.MinisterioBeitMidrash.com/terms.html) (the “TOU”), and both PP and TOU shall be binding upon any user using or attempting to use the Software or any portion thereof (“User”). If you do not wish to bound by this PP and/or the TOU, exit the Site and/or terminate your usage (or attempt to use) of the Product(s). Ad Maven may collect certain information about User's web usage and sites User's has visited, which may be shared with third parties and used for advertising.

              1. Non-personally Identifiable Information.
              1.1. Ad Maven and/or third parties utilizing its Software or to which Ad Maven allows access to the information gathered by the Software ("Third Parties") may collect non-personally identifiable information about Users. Non-personal identifiable information may include the User's browser name, internet protocol (IP) address, browser type, internet service provider (ISP), the type of Internet device the User's use and technical specifications of such device (such as the operating system and the Internet service such User utilize and other similar information) and other information of technical nature (such as date/time stamp, and clickstream data) or other information except for the defined below PII.
              1.2. Ad Maven does not always have access or control over Third Parties information collection mechanisms, and such Third Parties practices are not covered by this PP but by the applicable policies set forth in such Third Parties Websites or products.

              2. Personal Identifiable Information.
              2.1. Ad Maven and/or Third Parties may collect PII (as defined below) from Users if such Users voluntarily submit such information. PII may be voluntary provided in a variety of ways, such as when Users visit the Site, register on the Site, place an order, subscribe to the newsletter, respond to a survey, and fill out a form. User is advised that by providing Ad Maven PII User gives his consent to Ad Maven to make use of such PII. PII - “Personally Identifiable Information” means any information which might reasonably be used to specifically identify User and may include, among other, User's name, title, company, address, email.
              2.2. If PII is collected by Ad Maven, User is at any time entitled, under the Israeli Protection of Privacy Law, 5741-1981, whether himself or through a proxy so authorized in writing or through his/her legal guardian, to peruse information pertaining to him/herself that is stored in a database. Having perused such information and found it to be inaccurate, incomplete, unclear or out of date, such a person may contact the database owner and request to correct, amend or delete the data in question. Had the database owner refused to permit access or comply with a request to amend or delete information, the applicant may appeal to a magistrate’s court as stipulated by applicable regulations.
              2.3. Moreover, should the information contained in the database be used for purposes of personally soliciting User, based on User's affiliation to any population group as determined according to one or more attributes of people whose names are included in the database (“solicitation for commercial purposes”), the Protection of Privacy Law, 5741-1981, entitles User to submit a written request that such information pertaining to the User be deleted from the database. In such a case, the Website management will delete any information required for solicitation for commercial purposes as stated above. Please note that deleting such information might prevent User from continuing to receive services from us.

              3. Tracking Technologies and Use and Setting of Digital Identifiers.
              3.1. Digital identifier is information a site may put on User's hard disk so that this information and other related information may be utilized by such site at later time. No PII is collected Ad Maven by the use of such digital identifiers. Ad Maven and/or Third Parties collect and use the information collected through such digital identifiers for purposes such as to security purposes, analyzing trends, administrating the Site, tracking movement of Users on the Site and gather aggregate demographic information.
              3.2. One of the digital identifiers the Software utilizes is called a "cookies". "Cookies" are small piece of data sent by the Software and stored in a User's web browser while User is browsing Internet Websites. Every time User loads a Website, the browser sends the cookie back to the server and notifies Ad Maven of User's previous Internet activity. The Cookies are placed on Users hard drive for record-keeping purposes and sometimes to track information about Users' internet usage. User may choose to set their web browser to refuse Cookies, or to alert when cookies are being sent. User is advised that if User chooses to activate such Cookies refusal cookie alert functionalities, the Software may not function properly.
              3.3. Ad Maven and/or Third Parties employ sometime a software technology called clear gifs (a.k.a. web beacons/web bugs), that help Ad Maven and/or Third Parties better manage content on our site by informing Ad Maven what content is effective. Clear gifs are tiny graphics with a unique identifier, similar in function to cookies, and are used to track the online movements of Users. In contrast to cookies, which are stored on a User’s computer hard drive, clear gifs are embedded invisibly on web pages and are very small in size. Ad maven does not gather PII by clear gifs.

              4. Opt-out Option. More information about Cookies and other ‘digital identifiers’ used by Ad Maven and/or Third Parties, and the ability to configure them is available through the links below. MinisterioBeitMidrash utilizes AppNexus, amongst other adservers, as a 3rd party tool in order to deliver and track ads. In order to opt out of AppNexus 3rd party cookies, please visit: http://appnexus.com//platform-policy.
              User may delete or Opt-Out of any third party ad technology, i.e. 'digital identifiers’ cookie, web beacon, or any other tracking mechanism used for data collection according to the instruction provided in
              4.1. If technology is a member of the Network Advertising Initiative ("NAI") User shall note the NAI opt out page: http://networkadvertising.org/choices/
              4.2. If technology is not a member of the NAI, users may clear their browser cookies by following these instructions, found at:
              4.2.1. Chrome: https://support.google.com/chrome/answer/95647?hl=en
              4.2.2. FireFox: https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored
              4.2.3. Internet Explorer: https://kb.wisc.edu/page.php?id=15141

              5. How Information collected is used. Ad Maven may use data collected for various purposes including the following:
              5.1. To improve service it provides, or the Software (or any portion thereof).
              5.2. To respond to User’s requests and support Ad Maven costumers needs more efficiently.
              5.3. To personalize User(s) experience.
              5.4. To offer User(s) with Content Ad Maven believes may interest such User(s), such as targeted advertising content or other commercial information.
              5.5. To process payments.
              5.6. To share User(S) information with third parties.
              5.7. To send periodic emails.

              6. How User Information Is Protect.
              6.1 Ad Maven adopts what it believes are appropriate security measures to the data it collects, in order to protect such data from unauthorized access. However it cannot guarantee the absolute security or confidentiality of information transmitted to the Site or by the Products, and User hereby acknowledges and assumes all risks relating to any such data communication and safeguard.
              6.2 Ad Maven employs industry standard security measures to ensure the security of all data. Any data that is stored on our servers is treated as proprietary and confidential and is not available to the public. Ad Maven maintains an internal security policy with respect to the confidentiality of User's data, allowing access only to those employees or third parties who have a need to know such information.
              6.3 While Ad Maven has taken measures to protect User's information, please know that (i) no computer system is immune from intrusion; and (ii) information transmitted to the Site may need to pass through many systems in order to process such information. Therefore, Ad Maven cannot guarantee the absolute security or confidentiality of information transmitted to the Site and you hereby acknowledge and assume the risks relating to any such communication.

              7. Sharing Information. Ad Maven may use third party service providers who help Ad Maven operate its business or administer activities on our behalf, such as sending out newsletters or surveys. Ad Maven may share User's information with these third parties for those limited purposes provided that the User has given Ad Maven User's permission. However Ad Maven does not control such third parties practices and is not liable or responsible for any practices used by these third parties.

              8. Third Party Content.
              8.1 Certain content is made available to User through the Software by third parties (including Third Parties). Such content (which may include targeted advertising content) is made available to User by link to such third parties sites or products, ads displayed on User’s Internet device, or otherwise. Ad Maven does not control the content made available by such third parties or the practices employed by these third parties. Ad Maven is not and will not be liable or responsible for any content provided by such third parties or the practices they employ. User is advised to check the privacy policies and terms of use of any third party before interacting or making any use of such third Party’s software, site or product.
              8.2 Our Site may also include social media features and scripts, such as the Facebook Like button and widgets, or interactive mini-programs that run on our site. These features may collect User's IP address, which page the User is visiting on our site, and may set a cookie to enable the feature to function properly. Social Media features and widgets are either hosted by a third party or hosted directly on our site. User's interactions with these features are governed by the privacy policy of the entity providing it.

              9. Permitted Disclosures. Ad Maven may disclose information provided by Users when required to do so by law, court order, or governmental authority, or when based upon its good faith belief that disclosure is necessary including, without limitation, to protect the rights of Ad Maven other Users right or ability to freely use the Software.

              10. Compliance with Children's Online Privacy Protection Act. Protecting the privacy of the very young is especially important. For that reason, Ad Maven does not knowingly collect or maintain information from Users it actually knows are under 13.

              11. Contacting us. For any un-clarity with respect to this PP or the privacy practices employed in the Software, Users are invited to contact: info@MinisterioBeitMidrash.com.

              12. THE USER ACKNOWLEDGE AND AGREE THAT ANY DISPUTE OVER PRIVACY ISSUES IS SUBJECT TO THE TERMS AND CONDITIONS OF THIS PP AND THE TOU (INCLUDING LIMITATIONS ON LIABILITY).

              13. Ad Maven reserves the right to revise and amend this PP from time to time and any revised version will be deemed to be applicable from the first date of publication on the Site.

              This document was last updated on Octuber 23, 2017


            </textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
          </div>
        </div>

      </div>
    </div>










<!-- Politica de privacidade -->
<!-- Modal -->
<div id="terms" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Terms Of Use</h4>
      </div>
      <div class="modal-body">
        <textarea name="name" rows="25" class="form-control" readonly>

          1. The Web pages available on this Website ("Site"), as well as software and/or other services (the "Services") are provided by Ad Maven, and may be accessed by you ("User") only under the following Terms and Conditions of Use ("TCOU").
          2. By accessing this Site and/or downloading any products made available through this Site, User agrees to be unconditionally bound by these TCOU.
          3. If you do not agree with these TCOU or with any modification thereof, you must immediately stop using this Site and/or immediately stop using the Services provided by it, if applicable.
          4. Age requirement: Ad Maven defines a child as a person under the age of 18. By attempting to use any portion of the Site and/or Services you represent that you are at least 18 years old.
          5. Any access to the Site by any User who is not of legal age to form a binding agreement with Ad Maven, or by any User who is otherwise legally prohibited and unauthorized to form a binding agreement with Ad Maven under any applicable law is prohibited.
          6. Privacy Policy. Ad Maven's privacy policy is available at www.ad-maven.com/privacy.html and contains information about Ad Maven's policies and procedures regarding the collection, use and disclosure of information concerning Users ("Privacy Policy"). By using this Site and/or Services the User's is accepting all the terms of Ad Maven's Privacy Policy. Please review it carefully to understand Ad Maven's practices with respect to the collection, treatment and use of information Users provide or which is collected through the Site and/or Services.
          7. Warranties and Liability. Any use of this Site and/or any use of the Services are made at User's own risk, to the fullest extent permitted by law. Ad Maven Site and/or Services are provided "AS IS" and "AS AVAILABLE" and Ad Maven does not guarantee or promise any specific results from use of this Site and/or of the Services. Ad Maven expressly disclaim any warranties and conditions of any kind, whether express or implied, including but not limited to, the implied warranties of merchantability, accuracy, fitness for a particular purpose and non-infringement. In particular, Ad Maven makes no warranty that the use of this Site and/or Services will be uninterrupted, timely, secure or defect free or that any information obtained by the User's on, through or in connection with this Site and/or Services or third party services (including but not limited to, through any content available on this Site or third party advertisements) will be accurate, complete, up-to-date, true, not misleading, virus free, bug free or reliable.
          Users are advised to scan any files or content made available through the Site and/or Services, before downloading them. Under no circumstances will Ad Maven be responsible or liable for any loss or damage, including but not limited to, property damage, personal injury or death, resulting from use of this Site and/or Services, problems or technical malfunction in connection with use of this Site and/or Services, any content downloaded or otherwise obtained in connection with this Site and/or Services, any content, third party advertisement or third party service posted on, or made available through or in connection with this Site and/or Services, or the conduct of any Users of this Site and/or Services, whether online or offline.
          Nothing on this Site and/or Services or related therewith should be taken to constitute professional advice or a formal recommendation. User's use of this Site and/or Services, third party advertisements, third party services and the goods or services provided by any third parties is solely the User's responsibility and at the User's own risk.
          8. Limitation of Liability: in no event will Ad maven nor Ad Maven's officers, directors, employees, or agents, be liable to the user's or any third party for any direct, indirect, consequential, exemplary, incidental, special or punitive damages, whether based on warranty, contract, tort, or any other legal theory including, without limitation, lost profit, loss of contracts, data, information, goodwill, income, anticipated savings or business relationships, damages arising from the use of this site or any of the services and/or any of the products made available through the site or services. the foregoing limitations of liability shall apply whether or not Ad Maven have been advised of or should have been aware of the possibility of any such losses arising. in the event that it is found that Ad Maven has any liability with respect to the site, services or in connection therewith, Ad Maven's total liability to user or any this party for any cause whatsoever and regardless of the form of the action, will at all times be limited to an amount equal to the lower of (i) us$5 or (ii) the amount paid, if any, by user to Ad Maven during the 30 day period immediately preceding the date of the claim. in an event that no consideration was paid by user for the use of the site, Ad Maven shall have no liability for any cause whatsoever and regardless of the form of the action connected to the site and/or the services provided therein. the existence of one or more claims will not enlarge the foregoing limitation on liability. no action arising hereunder regardless of its form may be brought by the user's more than 30 days after the cause of action has accrued.
          9. Indemnity: User agrees to defend, indemnify, and hold Ad Maven and Ad Maven's affiliates, respective officers, directors, employees, and agents harmless from and against any and all claims, damages, obligations, losses, liabilities, costs, and expenses including reasonable attorney's fees arising from: User's use of the Site, Services or third party services; User's violation of these TCOU or violation of any third party right, including without limitation any license to use, copyright, proprietary, property, publicity, or privacy right or Ad Maven's use of any content in any manner that is not permitted under any applicable law. Ad Maven reserves the right, at its own expense, to assume the exclusive defense and control of any matter subject to indemnification by User. This defense and indemnification obligation will survive these TCOU and the termination of User's use of the Site and/or Services. User shall cooperate as fully as required in the defense of any claim.
          10. Third Party Services: The Services of Ad Maven may contain links to other websites ("Third Party Sites"), as well as articles, photographs, text, graphics, pictures, designs, music, sound, video, information, applications, software, and other content or items belonging to or originating from third parties. Such services, Third Party Sites, third party applications, software, and content are not investigated, monitored, or checked for accuracy, appropriateness, or completeness by Ad Maven. Neither Ad Maven nor its employees, directors, shareholders will be liable and/or responsible for any use of such services or any Third Party Sites accessed through the Ad Maven Site or any third party applications, software, or content posted on, available through, or installed from the Ad Maven Site, including the content, accuracy, offensiveness, opinions, reliability, privacy practices, or other policies of or contained in the Third Party Sites or the third party applications, software, or content. Ad Maven makes no warranties or representations whatsoever with regard to any such information content software and/or services by such third parties. Ad Maven has no control over these third party sites, each of which has separate terms of use governing their action and separate privacy and data collection practices independent of Ad Maven's. As such, Ad Maven is not responsible for, nor does it have any control over, the content or the privacy policies or terms of use of those third parties. User should review the applicable terms of use and privacy policies, including privacy policy and terms of use, of any site to which User navigates to or any applications User uses or installs from the Site.
          11. Law and Jurisdiction: By using the Site and/or Services the User's agrees that these TCOU shall be governed solely by the laws of Israel, and under the exclusive jurisdiction and venue of Tel Aviv courts for any dispute arising from or relating to these TCOU, except that Ad Maven may obtain an injunctive relief in any court worldwide.
          12. Notice and Changes: Ad Maven may, from time to time modify these TCOU. If you do not agree to (or cannot comply) with these TCOU as amended, the User's only remedy is to stop using the Site and/or Services. You are hereby advised that if you do not terminate all use of the Services, the Site or any portion thereof you will be deemed to have accepted these TCOU as amended.
          13. Miscellaneous: These TCOU shall be enforced to the fullest extent permissible under any applicable law. Accordingly, if any particular portion of these TCOU shall be adjudicated to be invalid or unenforceable, it shall be deemed to be amended to delete the portion thus adjudicated to be invalid or unenforceable, and the remaining portions of these TCOU shall remain in full force and effect. Without limiting any terms of these TCOU, Ad Maven may always in its sole discretion block the User's access to the Site or stop providing, terminate or disable the User's use Ad Maven's Services, even if Ad Maven has previously allowed you to use the Site or Services.
          14. You agree that these TCOU and Ad Maven's Privacy Policy constitute an entire agreement between you and Ad Maven, with respect to User's use of this Site and Service and supersede all previous agreements, understandings and representations relating thereto. Ad Maven's failure to exercise or enforce any of Ad Maven's rights or provisions under these TCOU shall not be deemed or operate as a waiver of any such right or provision.
          15. If the User's has any reason to believe that the Site, Services or any content provided therein or therewith in offensive or breaches the rights of any person or entity, don't hesitate to contact us at info@ministeriobeitmidrash.com.
        </textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
      </div>
    </div>

  </div>
</div



    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->



    <script src="/ci-site/gp/js/jquery.js"></script>
    <script src="/ci-site/gp/js/bootstrap.min.js"></script>
    <script src="/ci-site/gp/js/jquery.prettyPhoto.js"></script>
    <script src="/ci-site/gp/js/jquery.isotope.min.js"></script>
    <script src="/ci-site/gp/js/wow.min.js"></script>
  	<script src="/ci-site/gp/js/main.js"></script>

    <script>
        $('.carousel-inner .item:first-child').addClass('active');


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

      function checkCookie() {
       var username = getCookie("username");
       var password = getCookie("password");
       if (username != "" || password != "") {
           //$('#wellcomeAgain').modal('show');
           $('#wellcomeName').html(username);
       } else {
          $('#myModal').modal('show');
          $("#registerButton").click(function(){
             var values = getDados();
             username = values.nome;
             password = values.pass;
             if ((username != "" && username != null) && (password != "" && password != null)) {
                 setCookie("username", username, 365);
                 setCookie("password", password, 365);
             }
           });
       }
    }
    function getDados(){
      var ps = $("#confirmPassword").val();
      var nm = $("#username").val();
      if(ps === '' || nm === ''){
          return false;
      }
      return {pass: ps, nome: nm};
    }
    checkCookie();
    </script>

</body>
</html>
