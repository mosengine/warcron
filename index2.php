<?php
session_start();

if(isset($_SESSION['login']))
{
    $dir = 'warcron/home/'.$_SESSION['login'].'/';
    $skin = file_get_contents($dir.'skin');
}



include 'config.php';

?>
<html>
<head>
    <META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<link REL="SHORTCUT ICON" HREF="new-hp/images/favicon.ico">
    <title>WeboW BL for Mangos</title>
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
	<link rel="alternate" href="inc/news/news.rss.xml" type="application/rss+xml" title="WeboW BL for Mangos Latest News"/>
    <script src="shared/wow-com/includes-client/detection.js" language="JavaScript"></script>
	
    
	<?php
        //Скин
        if(isset($skin) && $skin != NULL)
        {
            echo '<link rel="stylesheet" href="new-hp/templates/'.$skin.'/layout.css">';
        } 
        else
        {
            echo '<link rel="stylesheet" href="new-hp/templates/Orc/layout.css">'; 
        }
        ?>
        
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
						<a href="?">WeboW BL for Mangos</a>
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
                            # Скрипт меню
                            #
                            ############################
                            
                            include 'menu.php';
                            
                            #
                            #
                            #
                            ############################
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
    <iframe name="menuIframe8" id="menuIframe8" frameborder="0" height="0" width="0" src="new-hp/menus/menu8.php?level=-1"></iframe>
                                              <table border="0" cellpadding="0" cellspacing="0" width=710 height=900>
                                                <tr>
                                                  <td valign="top">
                                                    <div>													<div id="cntMain">
                                                      <div id="cnt-top">
                                                        <div>
                                                          <div></div>
                                                        </div>
                                                      </div>
	
                                                      <div id="content">
		
                                                        <div id="content-left">
			
                                                          <div id="content-right">
				
                                                            <div id="cnt-wrapper">    
<style>
.news-archive-button { background: url('new-hp/images/UK/news-archives.gif') no-repeat; }
.news-archive-button { height: 15px; width: 136px; margin: 5px auto 0; background: url('new-hp/images/UK/news-archives.gif') no-repeat; }
.news-archive-button a, .news-archive-button a:active, .news-archive-button a:visited { display: block; height: 15px; width: 136px; background: url('new-hp/images/UK/news-archives.gif') no-repeat 0 0; }

.smallTeaser h3.contests { background-image: url('new-hp/images/UK/header-contest.gif'); }
.smallTeaser h3.wallpapers { background-image: url('new-hp/images/UK/header-wallpapers.gif'); }
.smallTeaser h3.fanarts { background-image: url('new-hp/images/UK/header-fanarts.gif'); }

h2.community { background: url('new-hp/images/UK/header-comm.gif') no-repeat 0 0; }

.twoCol-smallTeaser h3.needhelp { background-image: url('new-hp/images/UK/header-needhelp.gif'); }
.twoCol-smallTeaser h3.jobs { background-image: url('new-hp/images/UK/header-jobs.gif'); }
</style>
<div id="imageSwitcher" style="z-index: 11;">

							<div id="flashContainer">

							  <div id="mainFlash"></div>
							<script language="javascript">
							printFlash("mainFlash", "new-hp/flash/loader.swf", "transparent", "false", "#000000", "540", "320", "high", "new-hp/flash", "xmlname=news.xmls", "<div style='position:relative;top:52px;left:32px;'></div>");
							</script>

							</div>

						  </div>


						  <script language="javascript">
//
if(is_mac && is_moz) document.getElementById("flashContainer").style.left="-30px";
//
</script>
<div class="module-container">
<script type="text/javascript">
var postId1=21-3-23-1</script>



                                                        <?php
                                                        ######
                                                        # 
                                                        #   Скрипт вывода новостей
                                                        #

                                                            $dir    = 'warcron/news/';

                                                            
                                                            $files = array_diff( scandir($dir,SCANDIR_SORT_DESCENDING), array('..', '.'));
                                                            
                                                            $id = 0;
                                                            
                                                            foreach ($files as $value) {
                                                                
                                                                $new = file_get_contents($dir.$value.'/new');
                                                                
                                                                $item_icon = file_get_contents($dir.$value.'/item-icon');
                                                                
                                                                $keywords = preg_split("/\_/", $value);
                                                                
                                                                ?>

                                                                        <div class="news-expand" id="news<?php echo $value; ?>">
                                                                          <div class="news-border-left"></div>
                                                                          <div class="news-border-right"></div>
                                                                          <div class="news-listing">
                                                                                <div onclick="javascript:toggleEntry('<?php echo $value; ?>','alt')" onmouseout="javascript:this.style.background='none'" onmouseover="javascript:this.style.background='#EEDB99'" class="hoverContainer">
                                                                                  <div>
                                                                                        <div class="news-top">
                                                                                          <ul>
                                                                                                <li class="item-icon">
                                                                                                  <img border="0" src="<?php echo $item_icon; ?> ">
                                                                                                </li>
                                                                                                <li class="news-entry">
                                                                                                  <h1>
                                                                                                        <a href="javascript:dummyFunction();"><?php echo $keywords[1]; ?></a>
                                                                                                  </h1>
                                                                                                  <span class="user">Posted by: </span><small><?php echo $keywords[2]; ?><span class="user">|</span>&nbsp;<span class="posted-date"><?php echo $keywords[3]; ?></span></small>
                                                                                                </li>

                                                                                                <li class="news-toggle">
                                                                                                  <a href="javascript:toggleEntry('21-3-23-1','')"><img alt="" src="new-hp/images/pixel.gif"></a>
                                                                                                </li>
                                                                                          </ul>
                                                                                        </div>


                                                                                  </div>
                                                                                </div>


                                                                          </div>

                                                                          <div class="news-item">
                                                                                <blockquote>
                                                                                  <dl>
                                                                                        <dd>
                                                                                          <ul>
                                                                                                <li>
                                                                                                  <div class="letter-box0"></div>
                                                                                                  <div class="blog-post">
                                                                                                        <description>
                                                                                                            <?php echo $new;?>
                                                                                                            
                                                                                                            
                                                                                                        </description>
                                                                                                  </div>
                                                                                                </li>

                                                                                          </ul>
                                                                                        </dd>
                                                                                  </dl>
                                                                                </blockquote>
                                                                          </div>


                                                                        </div>
                                                                        <?php
                                                                        if($id != 0)
                                                                        {
                                                                        ?>

                                                                            <script>
                                                                                toggleEntry('<?php echo $value; ?>','<?php echo "alt"; ?>')
                                                                            </script> 


                                                                        <?php
                                                                        }
                                                                        ?>




                                                                <?php

                                                               $id++; 
                                                            }

                                                        #
                                                        #
                                                        ######
                                                        ?>

							  <div class="news-archive-link">

								<div class="news-archive-button">
								  <a href="?n=news.archive"><span>News Archives</span></a>
								</div>

							  </div>
	<div id="threeCol-teasers">

								<h2>
							  <span class="hide">Community Teasers</span>
							</h2>

								
							<div class="smallTeaser firstTeaser">

							  <span class="smallTeaser-visual community-contests"></span>

							  <div class="smallTeaser-bg">

								<h3 class="contests">
								  <span>Contests</span>
								</h3>


								<span class="arrow-readmore"><a href="?n=community.contests"><span>Click here to see more Contests</span></a></span>
<a href="?n=community.contests"><img alt="Contest" src="new-hp/images/featured/contest.jpg" title="Contest"></a>
<span class="button-readmore"><a href="?n=contest.php"><span>read more...</span></a></span>


							  </div>                                                        

							</div>
	
							<div class="smallTeaser">

							  <span class="smallTeaser-visual community-fanarts"></span>

							  <div class="smallTeaser-bg">

								<h3 class="fanarts">
								  <span>Fan Art</span>
								</h3>

								<span class="arrow-readmore"><a href="/fanart.php"><span>Click here to see more Fan Art</span></a></span>
<a href="/fanart.php"><img alt="Fan Art" border="0" src="new-hp/images/featured/fanart.jpg" title="Fan Art"></a>
<span class="button-readmore"><a href="?n=fanart"><span>read more...</span></a></span>

							  </div>

							</div>
							<div class="smallTeaser">

							  <span class="smallTeaser-visual community-wallpapers"></span>

							  <div class="smallTeaser-bg">


								<h3 class="wallpapers">
								  <span>Wallpapers</span>
								</h3>

								<span class="arrow-readmore"><a href="wallpapers.php"><span>Click here to see more Wallpapers</span></a></span>
<!--<img src="/new-hp/images/featured/wallpaperfloat.gif" width="32" height="10" style="width:32px; height:10px; position:absolute; left:52px; top:10px;" />-->
<a href="wallpapers.php"><img alt="Wallpapers" src="new-hp/images/featured/wallpaper.jpg" title="Wallpapers"></a>									
<span class="button-readmore"><a href="?n=wallpapers"><span>read more...</span></a></span>                                                            
							  </div>

							</div>


						  </div>


		<div id="container-community">

							<div class="phatLootBox-top">

							  <a href="index.php?n=community" style="cursor: hand;">
								<h2 class="community">
								  <span class="hide">Community</span>
								</h2>
							  </a>
<a href="index.php?n=community" style="cursor: hand;"><span class="phatLootBox-visual comm"></span></a>
<span class="arrow-readmore"><a href="index.php?n=community"><span>read more...</span></a></span>

							</div>

							<div class="phatLootBox-wrapper">

							  <div class="community-top">

								<h3>How to connect to our Server?<i> - admin2 on 21-03-23 </i>
								</h3>

							  </div>

							  <div class="community-cnt">

								<div class="community-portrait">
								  <img alt="" src="new-hp/images/portrait-frame.gif" style="background: url(new-hp/images/UK/forum/no-character-icon.gif) no-repeat 50% 50%; vertical-align: bottom;"></div>

								<p>
								First make an account on our website then, set your realmlist.wtf (edit it with Notepad), located in your World of Warcraft root folder, to:<br />
<br />
<div class="community-watch">set realmlist 0.0.0.0</div><br />
<p>Login and have fun.<br />
<br />
Thank You.</p>								<p>

								</p>

							  </div>

							  </div>

							<div class="phatLootBox-bottom">
							  <div>
								<a href="index.php?n=community"><img alt="button-red-more" height="12" src="new-hp/images/icons/button-red-more.jpg" width="72"></a>
							  </div>
							</div>

						  </div>

<hr>

						  <div id="container-service">
							<h2>
							  <span class="hide">Customer Services</span>
							</h2>

							<div class="twoCol-smallTeaser left" style="margin-left: 1px;">

							  <a href="?n=support" style="cursor: hand;"><span class="smallTeaser-visual services-needhelp"></span></a>

							  <div class="twoCol-smallTeaser-bg">

								<div class="chains"></div>

								<a href="?n=forums&f=1" style="cursor: hand;">
								  <h3 class="needhelp">
									<span>Need Help?</span>
								  </h3>
								</a>
<span class="arrow-readmore"><a href="?n=support"><span>Click here to get to our Support website</span></a></span>
<a href="?n=support"><img alt="needhelp-gnome" height="89" src="new-hp/images/needhelp-gnome.gif" style="position: absolute; left: 105px; top: -8px; cursor: pointer;" title="Support" width="111">
<div style="background: url(new-hp/images/UK/needhelp-bg.jpg) no-repeat 0 0; height: 61px; width: 211px; margin-left: 8px; cursor: pointer;">

								  </div>
								</a>
<span class="button-readmore"><a href="?n=support"><span>read more...</span></a></span>                                            

							  </div>
	

							  </div>
<!-- Jobs -->

							<div class="twoCol-smallTeaser right">

							  <a href="?n=support.jobs" style="cursor: hand;"><span class="smallTeaser-visual services-jobs"></span></a>

							  <div class="twoCol-smallTeaser-bg">

								<div class="chains"></div>

								<a href="?n=support.jobs" style="cursor: hand;">
								  <h3 class="jobs">
									<span>Jobs</span>
								  </h3>
								</a>
<span class="arrow-readmore"><a href="?n=support.jobs"><span>Click here to get to our Support website</span></a></span>
<a href="?n=support.jobs"><img alt="jobs-orc" src="new-hp/images/jobs-orc.gif" style="position: absolute; left: 125px; top: 3px; cursor: pointer;" title="Job Opportunities">
<div style="background: url(new-hp/images/UK/jobs-bg.jpg) no-repeat 0 0; margin-left: 8px; height: 61px; cursor: pointer;">

								  </div>
								</a>
<span class="button-readmore"><a href="?n=support.jobs"><span>read more...</span></a></span>                                            

							  </div>

							</div>

						  </div>

						
  
<div class="container-misc"> 
	
	<div class="miscBox1 left">
		<div class="miscBox-top">
			<h4> Pictures</h4>

		</div>
		<table>
			<tr>
				<td align=center valign=top>
			<img alt="image-miscbox1" class="left" height="50" src="new-hp/images/misc-image-bc.gif" width="54"/>
			</td>
			<td valign=top>
			<font size=2px>Enjoy our Picture Galleries. Share yours with us aswell.</font><br><img src='new-hp/images/pixel.gif' width=7>			<ul class="bullet-list">
			<li><a href="?n=media.screenshots">Screenshots</a><br /></li><li>
<a href="?n=media.wallpapers">Wallpapers</a><br /></li><li>
<a href="?n=community.fanart">Fan Art</a></li>			</ul>
			</span>
			</td><tr>
		</table>
	</div>
				
	
	<div class="miscBox1 right">
		<div class="miscBox-top">
			<h4> Challenges</h4>

		</div>
		<table>
			<tr>
				<td align=center valign=top>
			<img alt="image-miscbox1" class="left" height="50" src="new-hp/images/misc-icon-insider.gif" width="54"/>
			</td>
			<td valign=top>
			<font size=2px>Two different types where you must use your strategy or creativity.</font><br><img src='new-hp/images/pixel.gif' width=7>			<ul class="bullet-list">
			<li><a href="?n=community.contests">Contests</a><br /></li><li>
<a href="?n=workshop.eventscalendar">Events Calendar</a></li>			</ul>
			</span>
			</td><tr>
		</table>
	</div>
				
</div><img src='new-hp/images/pixel.gif' width=7><br></div>
													</div>
                                                      </div>
													   </div>
                                                      </div>
                                                      <div id="cnt-bot">
                                                        <div>
                                                          <div>&nbsp;</div>
                                                        </div>
                                                      </div>
													</div>
													<br>

                                                    </div>
                                                  </td>
											<td valign="top">
													         
	
<style>
	a.button-forums, a.button-armory { display: block; height: 63px; width: 220px; position: relative; top: -5px; }
	a.button-forums { background: url('new-hp/images/UK/button-forums.gif') no-repeat 0 0; }
	a.button-armory { background: url('new-hp/images/UK/button-armory.gif') no-repeat 0 0; }
	a.button-forums:hover, a.button-armory:hover  { background-position: 0 -63px; }
	
	#quicklinks h3 { background: url('new-hp/images/UK/header-quick_links.jpg') no-repeat 30px 8px; }
	
	#ssotd-container h3 { background: url('new-hp/images/UK/header-ssotd.gif') no-repeat 50px 5px; }
	
	#gameinfo-don-container h3 { background-image: url('new-hp/images/UK/header-don.gif'); }
	
	#gameinfo-newcomers-container h3 { background-image: url('new-hp/images/UK/header-newcomers.jpg'); }
	#marginal h4.begin-journey { background-image: url('new-hp/images/UK/header-journey.gif'); }
	#marginal h4.newbie-faq { background-image: url('new-hp/images/UK/subheader-newbiefaq.jpg'); }
	#marginal h4.discover {  background-image: url('new-hp/images/UK/header-discoverwow.gif'); }
	
</style>

												<div id="marginal"> 
											<!-- quicklinks-section -->
	
                                                      <div id="quicklinks">
		
                                                        <div class="plainBox-top">
                                                          <h3>
                                                            <span>Quicklinks</span>
                                                          </h3>
                                                        </div>
		
                                                        <div class="plainBox-cnt">
			
                                                          <div class="plainBox-cnt-top">
				
                                                            <div class="plainBox-cnt-bot">
					<!--<img src="/new-hp/images/quicklinks-testimage.jpg" width="195" height="66" alt="quicklinks-testimage" /> -->
					
                                                                <?php
                                                                #
                                                                # Поле входа в аккаунт
                                                                #
                                                                ################
                                                                
                                                                if(isset($_SESSION['login']))
                                                                {
                                                                    echo 'Вы вошли под '.$_SESSION['login'].'';
                                                                }
                                                                
                                                                //print_r($_SESSION);
                                                                ?>
                                                                <a href="page.php?page=login"><h1 style="">Войти</h1></a>
                                                                <a href="exit.php"><h1 style="">Выйти</h1></a>
                                                                
                                                                <!--         <input type="text" name="login" size = "18" MaxLength="16" style = "width: 175px;" value='' tabindex="1"/>
                                                                -->
                                                                
                                                                <?php
                                                                #
                                                                #
                                                                ################
                                                                ?>
                                                            </div>
			
                                                          </div>
		
                                                        </div>
		
                                                        <div class="plainBox-bot"></div>
	
                                                      </div> 
                                                                                        
                                                      <div id="quicklinks">
		
                                                        <div class="plainBox-top">
                                                          <h3>
                                                            <span>Quicklinks</span>
                                                          </h3>
                                                        </div>
		
                                                        <div class="plainBox-cnt">
			
                                                          <div class="plainBox-cnt-top">
				
                                                            <div class="plainBox-cnt-bot">
					<!--<img src="/new-hp/images/quicklinks-testimage.jpg" width="195" height="66" alt="quicklinks-testimage" /> -->
					
                                                              <ul class="none">
															  
						
							
                                                                <li>
                                                                  <a href="index.php?n=forum&topic=Y"><img src="new-hp/images/icons/support.jpg">Support Site</a>
                                                                </li>
					
                                                                <li>
                                                                  <a href="index.php?n=account.realmstatus"><img src="new-hp/images/icons/realmstatus.jpg">Realm Status</a>
                                                                </li> 
						
                                      <li>
                                                              <a href="index.php?n=account.create"><img src="new-hp/images/icons/acc_creation.jpg">Account Creation</a>
                                                                </li>
						
																<li>
                                                                  <a href="index.php?n=account.retrievepassword"><img src="new-hp/images/icons/retrieve_pwd.jpg">Retrieve Password</a>
                                                                </li>
						
                                                                <li>
                                                                  <a href="index.php?n=gameguide.faq"><img src="new-hp/images/icons/faq.jpg">FAQ Site</a>
                                                                </li>
	
					
                                                              </ul>
				
                                                            </div>
			
                                                          </div>
		
                                                        </div>
		
                                                        <div class="plainBox-bot"></div>
	
                                                      </div> 
	
   
        
<!-- ssotd-section-->

							 	
                                                      <div id="ssotd-container">
		
                                                        <div class="marginal-infoBox-top">
			
                                                          <a href="index.php?n=media.screenshots" target="_blank" style="cursor: hand;">
                                                            <h3>
                                                              <span>Screenshot of the Day</span>
                                                            </h3>
                                                          </a>                                                               
			<a href="index.php?n=media.screenshots" target="_blank" style="cursor: hand;"><span class="infoBox-visual ssotd"></span></a>
			<span class="arrow-readmore"><a href="screenshots.php" target="_blank"><span>Click here to see more Screenshots</span></a></span>
		
                                                        </div>
		
                                                        <div class="marginal-infoBox">
			
                                                          <div class="marginal-infoBox-cnt">
                                                            <div id="ssotdContainer" style="height: 151;">
                                                                
                                                                <?php
                                                                //TODO Скрипт случайного изображения
                                                                ?>
									<a href = "screenshots.php" target="_blank"><img src = "media/screenshots/1.jpg" width =195 height =151 border =0></a>

							</div>
                                                          </div>
		
                                                        </div>
		
                                                        <div class="marginal-infoBox-bottom">&nbsp;</div>
	
                                                      </div>


<!-- newbieguide-section -->
	
                                                      <div id="gameinfo-newcomers-container">
		
                                                        <div class="marginal-infoBox-top">
			
                                                            <h3>
                                                              <span>Newcomers Section</span>
                                                            </h3>
			<span class="infoBox-visual newbieguide"></span>
			<span class="arrow-readmore"><span>open Newcommers Section</span></span>
		
                                                        </div>
		
                                                        <div class="marginal-infoBox">
			
                                                          <div class="marginal-infoBox-cnt">
				
                                                            <div style="background: url(new-hp/images/marginal-infoBox-cnt-banner.jpg) no-repeat 0 0; height: 22px;">
                                                              <h4 class="discover">
                                                                <span>Discover World of Warcraft</span>
                                                              </h4>
                                                            </div>
				
                                                            <div class="parchment">
					
                                                              <div class="parchment-top">
						
                                                                <div class="parchment-bot">
							
                                                                  <div class="gameinfo-entry firstEntry">
								
                                                                    <img alt="image-retailbox" class="left" src="new-hp/images/image-retailbox.gif" style="padding-left: 5px;">
								<p>
									Looking to download <a href="">World of Warcraft</a>? Then use one of the bellow links!<br>
                                                                      <br>
								
                                                                    </p>
							
                                                                    <div class="gameinfo-entry secondEntry">
								
                                                                      <ul class="link-list">		
                                                                        <li>
                                                                          <a href="http://www.worldofwarcraft.com/downloads/files/pc/wowclient-downloader.exe">World of Warcraft</a>
                                                                        </li>
																		<li>
                                                                          <br>
                                                                        </li>
																		<li>
                                                                          <br>
                                                                        </li>
                                                                      </ul>
								
                                                                      <div id="elf-ear">
							   
                                                                        <img alt="" src="new-hp/images/elf-ear.gif"></div>
						   
                                                                    </div>
							
                                                                  </div>
				
							
                                                                  <hr>
							
                                                                  <div class="parchment-subHeader secondSubHeadline" >
								
                                                                    <h4 class="begin-journey">
                                                                      <span>Begin Your Journey</span>
                                                                    </h4>
							
                                                                  </div>
						  
                                                                  <div class="gameinfo-entry thirdEntry">
								
                                                                    <img alt="journey-human" class="left" src="new-hp/images/bg-journey-human.gif"><img alt="journey-human" class="tpng" src="new-hp/images/journey-human.gif" style="position: absolute; top: -15px; right: 130px; _right: 130px;">
								<p>
									
                                                                      <b>Connecting to the Server?</b>
                                                                      <br>
									Find how to do it in the users <a href="index.php?n=support">Support Site</a>!
								</p>
								
                                                                    <div class="opera-break"></div>
							
							   					
                                                                    <script language="javascript">
						//
						if(is_mac) document.getElementById("elf-ear").style.top="-19px";
						//
						</script>			
							
                                                                  </div>
							
                                                                  <div style="clear: both; height: 1px; font-size: 0;">&nbsp;</div>
						
                                                                </div>
					
                                                              </div>
				
                                                            </div>
				
                                                            <div style="background: url(new-hp/images/marginal-infoBox-cnt-bottompaper.jpg) no-repeat 0 0; height: 6px; font-size: 1px;"></div>
				
                                                          </div>
		
                                                        </div>
		
                                                        <div class="marginal-infoBox-bottom"></div>
	
                                                      </div>

                                                    <?php
                                                    #
                                                    # Заготовка чата
                                                    #
                                                    ##################
                                                    ?>

                                                      <div id="gameinfo-newcomers-container">
		
                                                        <div class="marginal-infoBox-top">
			
                                                            <h3>
                                                              <span>Newcomers Section</span>
                                                            </h3>
			<span class="infoBox-visual newbieguide"></span>
			<span class="arrow-readmore"><span>open Newcommers Section</span></span>
		
                                                        </div>
		
                                                        <div class="marginal-infoBox">
			
                                                          <div class="marginal-infoBox-cnt">
				
                                                            <div style="background: url(new-hp/images/marginal-infoBox-cnt-banner.jpg) no-repeat 0 0; height: 22px;">
                                                              <h4 class="discover">
                                                                <span>Discover World of Warcraft</span>
                                                              </h4>
                                                            </div>
				
                                                            <div class="parchment">
					
                                                              <div class="parchment-top">
						
                                                                <div class="parchment-bot">
							
                                                                  <div class="gameinfo-entry firstEntry">
								
                                                                    <img alt="image-retailbox" class="left" src="new-hp/images/image-retailbox.gif" style="padding-left: 5px;">
								<p>
									Looking to download <a href="">World of Warcraft</a>? Then use one of the bellow links!<br>
                                                                      <br>
								
                                                                    </p>
							
                                                                    <div class="gameinfo-entry secondEntry">
								
                                                                      <ul class="link-list">		
                                                                        <li>
                                                                          <a href="http://www.worldofwarcraft.com/downloads/files/pc/wowclient-downloader.exe">World of Warcraft</a>
                                                                        </li>
																		<li>
                                                                          <br>
                                                                        </li>
																		<li>
                                                                          <br>
                                                                        </li>
                                                                      </ul>
								
                                                                      <div id="elf-ear">
							   
                                                                        <img alt="" src="new-hp/images/elf-ear.gif"></div>
						   
                                                                    </div>
							
                                                                  </div>
				
							
                                                                  <hr>
							
                                                                  <div class="parchment-subHeader secondSubHeadline" >
								
                                                                    <h4 class="begin-journey">
                                                                      <span>Begin Your Journey</span>
                                                                    </h4>
							
                                                                  </div>
						  
                                                                  <div class="gameinfo-entry thirdEntry">
								
                                                                    <img alt="journey-human" class="left" src="new-hp/images/bg-journey-human.gif"><img alt="journey-human" class="tpng" src="new-hp/images/journey-human.gif" style="position: absolute; top: -15px; right: 130px; _right: 130px;">
								<p>
									
                                                                      <b>Connecting to the Server?</b>
                                                                      <br>
									Find how to do it in the users <a href="index.php?n=support">Support Site</a>!
								</p>
								
                                                                    <div class="opera-break"></div>
							
							   					
                                                                    <script language="javascript">
						//
						if(is_mac) document.getElementById("elf-ear").style.top="-19px";
						//
						</script>			
							
                                                                  </div>
							
                                                                  <div style="clear: both; height: 1px; font-size: 0;">&nbsp;</div>
						
                                                                </div>
					
                                                              </div>
				
                                                            </div>
				
                                                            <div style="background: url(new-hp/images/marginal-infoBox-cnt-bottompaper.jpg) no-repeat 0 0; height: 6px; font-size: 1px;"></div>
				
                                                          </div>
		
                                                        </div>
		
                                                        <div class="marginal-infoBox-bottom"></div>
	
                                                      </div>

                                                    </div>
                                                    <!-- #marginal end -->
                                                  </td>
													
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
													WeboW BL for Mangos is in no way associated with Blizzard Entertainment.<br>
												WeboW BL for Mangos v1.0.2.6 Beta | Main Developer, Author - Zynaga | Page Load Time - 0.1 Second(s)</small></span>                                          </div>
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
<script>window.status='Welcome to WeboW BL for Mangos!';</script>
</html><script>document.title="WeboW BL for Mangos :: Main Page";</script>