<?php
session_start();
?>

<html>
<head>
    <META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<link REL="SHORTCUT ICON" HREF="new-hp/images/favicon.ico">
    <title>BlizzMWF</title>
    <style media="screen" title="currentStyle" type="text/css">
        @import "new-hp/css/loader_screen.css";
	</style>
		
	<script type="text/javascript">
		function changelayout(layout) {
			if (layout=="") { layout='Wrath_of_the_Lich_King'; }
			var oLink = document.createElement("link")
			oLink.href = 'new-hp/templates/' + layout + "/layout.css";
			oLink.rel = "stylesheet";
			oLink.type = "text/css";
			document.body.appendChild(oLink);
			if (is_ie) { 
				var eoLink = document.createElement("link")
				eoLink.href = 'new-hp/templates/' + layout + "/layout_ie.css";
				eoLink.rel = "stylesheet";
				eoLink.type = "text/css";
				document.body.appendChild(eoLink);
			}
		}

		var scriptsLoaded=0;
	</script>
    <link title="orc" href="new-hp/css/orc.css" media="screen, projection" type="text/css" rel="alternate stylesheet">
	<link rel="stylesheet" href="new-hp/css/extra.css">
	<script language="JavaScript" type="text/javascript" src='new-hp/js/tooltip.js'></script>
	<script language="JavaScript" type="text/javascript" src='new-hp/js/menu132_com.js'></script>
	<link rel="alternate" href="inc/news/news.rss.xml" type="application/rss+xml" title="BlizzMWF Latest News"/>
    <script src="shared/wow-com/includes-client/detection.js" language="JavaScript"></script>
	
	<link rel="stylesheet" href="new-hp/templates/Orc/layout.css">
	<script language="javascript">	
	//
	if (is_ie) {
		document.write('<link rel="stylesheet" href="new-hp/templates/Wrath_of_the_Lich_King/layout_ie.css" />');
		document.write('<link rel="stylesheet" type="text/css" href="new-hp/css/additional_win_ie.css" media="screen, projection" />');
	}

	if(is_opera)
		document.write('<link rel="stylesheet" type="text/css" href="new-hp/css/additional_opera.css" media="screen, projection" />');
	//
	</script>
	<script src="new-hp/js/cookies.js" type="text/javascript"></script>
	<script src="new-hp/js/functions.js" type="text/javascript"></script>
	<script src="new-hp/js/p7_eqCols2_10.js" type="text/javascript"></script>
  </head>
  <body>
<div style="height: 21px; left: -1000px; top: 484px; visibility: hidden;" id="contents">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody>
	<tr>
		<td><img src="new-hp/images/pixel.gif" height="1" width="1"></td>
		<td bgcolor="#000000"></td>

		<td><img src="new-hp/images/pixel.gif" height="1" width="1"></td>
	</tr>
	<tr>
		<td bgcolor="#000000"></td>
		<td>
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody>
				<tr>
					<td bgcolor="#000000" height="1" width="1"></td>

					<td bgcolor="#d5d5d7" height="1"><img src="new-hp/images/pixel.gif" height="1" width="1"></td>
					<td bgcolor="#000000" height="1" width="1"></td>
				</tr>
				<tr>
					<td bgcolor="#a5a5a5" width="1"><img src="new-hp/images/pixel.gif" height="1" width="1"></td>
					<td class="trans_div" valign="top"><div style="visibility: visible;" id="tooltipText"></div></td> 
					<td bgcolor="#a5a5a5" width="1"><img src="new-hp/images/pixel.gif" height="1" width="1"></td>
				</tr>
				<tr>

					<td bgcolor="#000000" height="1" width="1"></td>
					<td bgcolor="#4f4f4f"><img src="new-hp/images/pixel.gif" height="2" width="1"></td>
					<td bgcolor="#000000" height="1" width="1"></td>
				</tr>
				</tbody>
			</table>
		</td>
		<td bgcolor="#000000"></td>
	</tr>

	<tr>
		<td><img src="new-hp/images/pixel.gif" height="1" width="1"></td>
		<td bgcolor="#000000"></td>
		<td><img src="new-hp/images/pixel.gif" height="1" width="1"></td>
	</tr>
	</tbody>
</table>
</div>
  <style><!--
 #contents{
	visibility: hidden;
	position: absolute;
	Z-INDEX: 999999;
	width: 5px;
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod=scale src='new-hp/images/blue-bg.png');
}
.trans_div[class] {
background-image:url(new-hp/images/blue-bg.png);
}
	--></style>
	<link rel="stylesheet"  type="text/css" href="new-hp/css/topnav.css">
	<div class="tn_wow" id="shared_topnav" style="position: inherit; height: 25px;">
		<div class="topnav">
			<div class="tn_interior">
						<a href="?">BlizzMWF</a>
				<img src="shared/wow-com/images/topnav/topnav_div.gif">
			<a href="?n=armory">The Armory</a>
				<img src="shared/wow-com/images/topnav/topnav_div.gif">
			<a href="?n=forums"><img src="new-hp/images/pixel.gif" style="position: absolute; width: 15px; height: 15px; border: 0;" id="topnaveforums">Forums</a>
						</div>
		</div>
	</div>

	    <div class="page-bg-top">
		<div id="header" align=center>
			<div class="logo-container">
				<div class="logo-right">
					<h1 class="wow-logof"><a HREF="?"><img SRC="new-hp/images/pixel.gif" border="0" alt="World Of Warcraft" title="World Of Warcraft" width="262" height="106" /></a></h1>
				</div>
			</div>
		</div>
	</div>
<script>

function countryopt(state) {

	cm = document.getElementById('countrymenu');

	if (state == "") {
		if (cm.style.visibility == "visible") {
			cm.style.visibility = "hidden";
		} else {
			cm.style.visibility = "visible";
		}
	} else {
		cm.style.visibility = state;
	}
	
}

</script>

	<div class="mainlayout" align=center style="position: absolute; width: 100%;">
    <center>
      <table border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>
            <div id="hp">
              <div style="position:relative; z-index:999999;">
                <div class="top-nav">
                  <form method=post action="index.php?n=forum&f=search" id="topSearch" name="topSearch" onsubmit="return se_valid()">
                    <div id="searchBoxContainer">
                      <div class="searchBoxLeft"></div>
                      <div class="searchBoxBg">
                        <ul>
                          <li class="searchBoxInput">
                            <input class="searchBoxForm" id="searchBox" name="searchBox" value="">
                          </li>
                          <li class="searchBoxSelect">
                            <select class="searchBoxForm" name="t" id="searchType">
							<option value="community" SELECTED>All</option>
							<option value="news">News</option>
							<option value="community">Community</option>
							</select>
                          </li>
                          <li class="searchBoxButton"><a href="#">
                            <div class="redButton-container">
                              <div class="leftNopadd">
                                <img height="22" width="5" src="new-hp/images/button-left.gif"></div>
                              <div class="leftNopadd">
                                <div id="searchBoxButton"> </div>
									<img onclick="return se_valid(); javascript:document.topSearch.submit()" OnMouseOver='javascript:void(document.topSearch.searchbt.src="shared/wow-com/images/buttons/searchrol.png");' OnMouseOut='javascript:void(document.topSearch.searchbt.src="shared/wow-com/images/buttons/search.png");' name="searchbt" src='shared/wow-com/images/buttons/search.png'>
                              </div>
                              <div class="leftNopadd">
                                <img height="22" width="7" src="new-hp/images/button-right.gif"></div>
                            </div></a>
                          </li>
                        </ul>
                      </div>
                      <div class="searchBoxRight"></div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="top-nav-container">
                <div style="position: absolute; right: 170px; top: 38px; z-index:98">
                  <div style="z-index:999999999;" id="countryDropDown"></div>
                </div>
                <div style="position: absolute; top: 0; left: 0; z-index: 99;">
                 <div id="wow-logo">
                    <a href="?"><img src="new-hp/images/pixel.gif" width="200" height="100"></a>
                  </div>
                </div>
              </div>
              <div>
                <div id="hpWrapper">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td valign="top">
                        <div id="navWrapper">
                          <div id="nav">
                            <div id="ne-top-left"></div>
                            <div id="ne-center"></div>
                            <div id="ne-bottom-left"></div>
                            <div id="ne-nav-bg"></div>
                            <div id="leftMenu">
<style>
.menuNews-header-on { background-image: url('new-hp/images/UK/leftmenu/header-news-on.gif'); }
.menuNews-header-off { background-image: url('new-hp/images/UK/leftmenu/header-news-off.gif'); }
.menuGameGuide-header-on { background-image: url('new-hp/images/UK/leftmenu/header-gameguide-on.gif'); }
.menuGameGuide-header-off { background-image: url('new-hp/images/UK/leftmenu/header-gameguide-off.gif'); }
.menuInteractive-header-on { background-image: url('new-hp/images/UK/leftmenu/header-workshop-on.gif'); }
.menuInteractive-header-off { background-image: url('new-hp/images/UK/leftmenu/header-workshop-off.gif'); }
.menuCommunity-header-on { background-image: url('new-hp/images/UK/leftmenu/header-community-on.gif'); }
.menuCommunity-header-off { background-image: url('new-hp/images/UK/leftmenu/header-community-off.gif'); }
.menuForums-header-on {	background-image: url('new-hp/images/UK/leftmenu/header-forums-on.gif'); }
.menuForums-header-off { background-image: url('new-hp/images/UK/leftmenu/header-forums-off.gif'); }
.menuAccount-header-on { background-image: url('new-hp/images/UK/leftmenu/header-account-on.gif'); }
.menuAccount-header-off { background-image: url('new-hp/images/UK/leftmenu/header-account-off.gif'); }
.menuSupport-header-on { background-image: url('new-hp/images/UK/leftmenu/header-support-on.gif'); }
.menuSupport-header-off { background-image: url('new-hp/images/UK/leftmenu/header-support-off.gif'); }
.menuMedia-header-on { background-image: url('new-hp/images/UK/leftmenu/header-media-on.gif'); }
.menuMedia-header-off { background-image: url('new-hp/images/UK/leftmenu/header-media-off.gif'); }
</style>
                             <?php
                             #
                             #  Скрипт меню
                             #
                             ######
                             
                             include 'menu.php';
                             
                             #
                             #
                             ######
                             ?>
                            </div>
                          </div>
                          <div style="clear: both;"></div>
                        </div>
                      </td><td valign="top">
					  <div id="mainWrapper">

                          <div id="main">
                            <div id="main-content-wrapper">
                              <div id="main-content">

                                <table cellspacing="0" cellpadding="0" border="0">
                                  <tr>
                                    <td>
									
                                      <div id="main-top">

                                        <div>
                                          <div></div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div id="contentPadding">
                                        <div id="cnt">
                                          <div id="cnt-wrapper">
                                            <div id="contentContainer">

                                              <link href="new-hp/css/newhp_specific.css" media="screen, projection" rel="stylesheet" type="text/css">
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="/new-hp/css/newhp_specific_ie.css" media="screen, projection" />
<![endif]-->
    <iframe name="menuIframe1" id="menuIframe1" frameborder="0" height="0" width="0" src="new-hp/menus/menu1.php"></iframe>
    <iframe name="menuIframe2" id="menuIframe2" frameborder="0" height="0" width="0" src="new-hp/menus/menu2.php?islog=&ttpm=&actpm="></iframe>
    <iframe name="menuIframe3" id="menuIframe3" frameborder="0" height="0" width="0" src="new-hp/menus/menu3.php"></iframe>
    <iframe name="menuIframe4" id="menuIframe4" frameborder="0" height="0" width="0" src="new-hp/menus/menu4.php"></iframe>
    <iframe name="menuIframe5" id="menuIframe5" frameborder="0" height="0" width="0" src="new-hp/menus/menu5.php"></iframe>
    <iframe name="menuIframe7" id="menuIframe7" frameborder="0" height="0" width="0" src="new-hp/menus/menu7.php"></iframe>
    <iframe name="menuIframe8" id="menuIframe8" frameborder="0" height="0" width="0" src="new-hp/menus/menu8.php?level=4"></iframe>
                                              <table border="0" cellpadding="0" cellspacing="0" width=710 height=900>
                                                <tr>
                                                  <td valign="top">
                                                    <div>							<table cellspacing =" 0" cellpadding =" 0" border =" 0" width ="100%" style="
							border-bottom: 1px solid #666666;							" background='shared/wow-com/images/parchment/plain/light.jpg'>
							<tr>
								<td colspan =" 5"><img src ="new-hp/images/pixel.gif" width =" 1" height =" 12"></td>
							</tr>
							<tr>
							<tr>
							
								<td align=center>
<table cellspacing =" 0" cellpadding =" 0" border =" 0" width ="710">
	<tr>
		<td width=10>&nbsp;</td>
		<td width =" 29"><img src ="shared/wow-com/images/headers/dateheader/dateheader-left.gif" width =" 31" height =" 38"></td>
		<td background ="shared/wow-com/images/headers/dateheader/dateheader-bg.gif"><h3 class =" titleLight"> <font color=white><?php echo ucfirst($_GET['page']); ?></font> </h3></td>
		<td width =" 17"><img src ="shared/wow-com/images/headers/dateheader/dateheader-right.gif" width =" 17" height =" 38"></td>
		<td width=10>&nbsp;</td>
	</tr>

</table>
<!---Subnav----->


<!---End Subnav----->
	<br>
								</td>
							</tr>
						</table>
						<table cellspacing =" 0" cellpadding =" 0" border =" 0" width ="100%">
							<tr >
								<td  height=5></td>
							</tr>
						</table>
							<table cellspacing =" 0" cellpadding =" 0" border =" 0" width ="100%" style="
							border-top: 1px solid #666666;border-bottom: 1px solid #666666;							" background='shared/wow-com/images/parchment/plain/light.jpg'>
							<tr>
								<td colspan =" 5"><img src ="new-hp/images/pixel.gif" width =" 1" height =" 12"></td>
							</tr>
							<tr>
							<tr>
							
								<td align=center>

                        <?php
                        ######
                        # 
                        #   Скрипт html страниц
                        #   
                        
                            $dir    = 'warcron/pages/';
                            $page = $_GET['page'];  
                            
//                            $page_html = file_get_contents($dir.$page.'.html');
//
//                            echo $page_html;

                            include $dir.$page;
                            
                        #
                        #
                        #####
                            
                            
                        ?>
                        


<br>
								</td>
							</tr>
						</table>
						<table cellspacing =" 0" cellpadding =" 0" border =" 0" width ="100%">
							<tr >
								<td  height=5></td>
							</tr>
						</table>
                                                    </div>
                                                  </td>
											<td valign="top">
													         
                                                </tr>
                                              </table>

                                            </div>
                                          </div>
                                        </div>

                                        <div style="clear: both; font-size: 1px; position: relative;">&nbsp;</div>
                                        <center>
                                          <div id="copyright">
                                             <span class="textlinks"><small><a href="index.php?n=support.rules">Rules</a> | <a href="index.php?n=support.license">License</a> | <a href="mailto:nelsson302@gmail.com">Contact</a>
                                                <br>&copy; World of Warcraft and Blizzard Entertainment are trademarks or registered trademarks of Blizzard Entertainment, Inc. in the U.S. and/or other countries.<br>
													BlizzMWF is in no way associated with Blizzard Entertainment.<br>
												WeboW BL for Mangos v1.0.2.6 Beta | Main Developer, Author - Zynaga | Page Load Time - 0.32 Second(s)</small></span>                                          </div>
                                        </center>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>

                                      <div id="main-bottom">
                                        <div>
                                          <div>							  
                                            <!-- ex blizz logo-->
                                          </div>

                                        </div>

                                      </div>
                                    </td>
                                  </tr>
                                </table>
								
                              </div>
                            </div>

                           <div style="position: relative;">
                              <img class="statue-left" src="new-hp/images/pixel.gif"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
				 </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </center>

    <div id="ironFrame">
		<table align=center border=0 cellspacing=0 cellpadding=0>
			<tr>
				<td width=130 class="tbblizzlogo">
				</td>
				<td width=760 align=center>
					<div id="blizzlogo-bot">
		            <a href="http://www.blizzard.com"><img alt="Blizzard.com" border="0" class="blizzylogo" src="new-hp/images/pixel.gif"></a>
			</div>
				</td>
			</tr>
		</table>
	</div>
    <div id="pageEnd"></div>
  </body>
<script>window.status='Welcome to BlizzMWF!';</script>
</html><script>document.title="BlizzMWF :: Game Guide > Introduction";</script>