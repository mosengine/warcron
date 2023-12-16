                              <div id="leftMenuContainer">
                                <div id="menuNews">
                                  <div onclick="javascript:toggleNewMenu(1-1);" class="menu-button-off" id="menuNews-button">
                                    <span class="menuNews-icon-off" id="menuNews-icon">&nbsp;</span><a class="menuNews-header-off" id="menuNews-header"><em>Game Guide</em></a><a id="menuNews-collapse"></a><span class="menuEntry-rightBorder"></span>
                                  </div>
                                  <div id="menuNews-inner">
                                    <script type="text/javascript">

								//This script handles the default status of each menu based on the user's cookies
                                if (menuCookie[1-1] == 0) {
		
                                    document.getElementById("menuNews-inner").style.display = "none";		
                                    document.getElementById("menuNews-button").className = "menu-button-off";
                                    document.getElementById("menuNews-collapse").className = "leftMenu-plusLink";
                                    document.getElementById("menuNews-icon").className = "menuNews-icon-off";
                                    document.getElementById("menuNews-header").className = "menuNews-header-off";
                                } else {

                                    document.getElementById("menuNews-inner").style.display = "block";		
                                    document.getElementById("menuNews-button").className = "menu-button-on";
                                    document.getElementById("menuNews-collapse").className = "leftMenu-minusLink";
                                    document.getElementById("menuNews-icon").className = "menuNews-icon-on";
                                    document.getElementById("menuNews-header").className = "menuNews-header-on";
                                }

                            </script>
                                    <div class="leftMenu-cont-top"></div>
                                    <div class="leftMenu-cont-mid">
                                      <div class="m-left">
                                        <div class="m-right">
                                          <div class="leftMenu-cnt">
                                            <ul class="mainNav">
                                                <div style="position:relative;" id="menuFiller1">
                                                <?php
                                                ######
                                                # 
                                                #   Скрипт меню News
                                                #    
                                                    
                                                    $dir    = 'warcron/menus/news/';

                                                            
                                                    $files = array_diff( scandir($dir), array('..', '.'));

                                                    $id = 0;

                                                    foreach ($files as $value) {
                                                        
                                                        $link = file_get_contents($dir.$value);
                                                        $keywords = preg_split("/\_/", $value);
                                                        

                                                ?>    
                                                        <div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif');        width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
                                                          <?php echo '<a class="menuFiller" href="'.$link.'">'.$keywords[1].'</a>' ?>
                                                        </div>
                                                <?php    
                                                
                                                    }
                                                #
                                                #
                                                #####
                                                ?>
                                                    
                                                </div>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="leftMenu-cont-bot"></div>
                                  </div>
                                </div>
                                <div id="menuAccount">
                                  <div onclick="javascript:toggleNewMenu(2-1);" class="menu-button-off" id="menuAccount-button">
                                    <span class="menuAccount-icon-off" id="menuAccount-icon">&nbsp;</span><a class="menuAccount-header-off" id="menuAccount-header"><em>Game Guide</em></a><a id="menuAccount-collapse"></a><span class="menuEntry-rightBorder"></span>
                                  </div>
                                  <div id="menuAccount-inner">
                                    <script type="text/javascript">

								//This script handles the default status of each menu based on the user's cookies
                                if (menuCookie[2-1] == 0) {
		
                                    document.getElementById("menuAccount-inner").style.display = "none";		
                                    document.getElementById("menuAccount-button").className = "menu-button-off";
                                    document.getElementById("menuAccount-collapse").className = "leftMenu-plusLink";
                                    document.getElementById("menuAccount-icon").className = "menuAccount-icon-off";
                                    document.getElementById("menuAccount-header").className = "menuAccount-header-off";
                                } else {

                                    document.getElementById("menuAccount-inner").style.display = "block";		
                                    document.getElementById("menuAccount-button").className = "menu-button-on";
                                    document.getElementById("menuAccount-collapse").className = "leftMenu-minusLink";
                                    document.getElementById("menuAccount-icon").className = "menuAccount-icon-on";
                                    document.getElementById("menuAccount-header").className = "menuAccount-header-on";
                                }
                            </script>
                                    <div class="leftMenu-cont-top"></div>
                                    <div class="leftMenu-cont-mid">
                                      <div class="m-left">
                                        <div class="m-right">
                                          <div class="leftMenu-cnt">
                                            <ul class="mainNav">
                                              <div style="position:relative;" id="menuFiller2">
                                                <?php
                                                ######
                                                # 
                                                #   Скрипт меню Account
                                                #    
                                                    
                                                    $dir    = 'warcron/menus/account/';

                                                            
                                                    $files = array_diff( scandir($dir), array('..', '.'));

                                                    $id = 0;

                                                    foreach ($files as $value) {
                                                        
                                                        $link = file_get_contents($dir.$value);
                                                        $keywords = preg_split("/\_/", $value);
                                                        

                                                ?>    
                                                        <div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif');        width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
                                                          <?php echo '<a class="menuFiller" href="'.$link.'">'.$keywords[1].'</a>' ?>
                                                        </div>
                                                <?php    
                                                
                                                    }
                                                #
                                                #
                                                #####
                                                ?>
                                              </div>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="leftMenu-cont-bot"></div>
                                  </div>
                                </div>
                                  
                                  
                                <div id="menuGameGuide">
                                  <div onclick="javascript:toggleNewMenu(3-1);" class="menu-button-off" id="menuGameGuide-button">
                                    <span class="menuGameGuide-icon-off" id="menuGameGuide-icon">&nbsp;</span><a class="menuGameGuide-header-off" id="menuGameGuide-header"><em>Game Guide</em></a><a id="menuGameGuide-collapse"></a><span class="menuEntry-rightBorder"></span>
                                  </div>
                                  <div id="menuGameGuide-inner">
                                    <script type="text/javascript">

								//This script handles the default status of each menu based on the user's cookies
                                if (menuCookie[3-1] == 0) {
		
                                    document.getElementById("menuGameGuide-inner").style.display = "none";		
                                    document.getElementById("menuGameGuide-button").className = "menu-button-off";
                                    document.getElementById("menuGameGuide-collapse").className = "leftMenu-plusLink";
                                    document.getElementById("menuGameGuide-icon").className = "menuGameGuide-icon-off";
                                    document.getElementById("menuGameGuide-header").className = "menuGameGuide-header-off";
                                } else {

                                    document.getElementById("menuGameGuide-inner").style.display = "block";		
                                    document.getElementById("menuGameGuide-button").className = "menu-button-on";
                                    document.getElementById("menuGameGuide-collapse").className = "leftMenu-minusLink";
                                    document.getElementById("menuGameGuide-icon").className = "menuGameGuide-icon-on";
                                    document.getElementById("menuGameGuide-header").className = "menuGameGuide-header-on";
                                }

                            </script>
                                    <div class="leftMenu-cont-top"></div>
                                    <div class="leftMenu-cont-mid">
                                      <div class="m-left">
                                        <div class="m-right">
                                          <div class="leftMenu-cnt">
                                            <ul class="mainNav">
                                              <div style="position:relative;" id="">
                                                <?php
                                                ######
                                                # 
                                                #   Скрипт меню Game Guide
                                                #    
                                                    
                                                    $dir    = 'warcron/menus/game_guide/';

                                                            
                                                    $files = array_diff( scandir($dir), array('..', '.'));

                                                    $id = 0;

                                                    foreach ($files as $value) {
                                                        
                                                        $link = file_get_contents($dir.$value);
                                                        $keywords = preg_split("/\_/", $value);
                                                        

                                                ?>    
                                                        <div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif');        width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
                                                          <?php echo '<a class="menuFiller" href="'.$link.'">'.$keywords[1].'</a>' ?>
                                                        </div>
                                                <?php    
                                                
                                                    }
                                                #
                                                #
                                                #####
                                                ?>
                                                  
                                              </div>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="leftMenu-cont-bot"></div>
                                  </div>
                                </div>

                                <div id="menuInteractive">
                                  <div onclick="javascript:toggleNewMenu(4-1);" class="menu-button-off" id="menuInteractive-button">
                                    <span class="menuInteractive-icon-off" id="menuInteractive-icon">&nbsp;</span><a class="menuInteractive-header-off" id="menuInteractive-header"><em>Game Guide</em></a><a id="menuInteractive-collapse"></a><span class="menuEntry-rightBorder"></span>
                                  </div>
                                  <div id="menuInteractive-inner">
                                    <script type="text/javascript">

								//This script handles the default status of each menu based on the user's cookies
                                if (menuCookie[4-1] == 0) {
		
                                    document.getElementById("menuInteractive-inner").style.display = "none";		
                                    document.getElementById("menuInteractive-button").className = "menu-button-off";
                                    document.getElementById("menuInteractive-collapse").className = "leftMenu-plusLink";
                                    document.getElementById("menuInteractive-icon").className = "menuInteractive-icon-off";
                                    document.getElementById("menuInteractive-header").className = "menuInteractive-header-off";
                                } else {

                                    document.getElementById("menuInteractive-inner").style.display = "block";		
                                    document.getElementById("menuInteractive-button").className = "menu-button-on";
                                    document.getElementById("menuInteractive-collapse").className = "leftMenu-minusLink";
                                    document.getElementById("menuInteractive-icon").className = "menuInteractive-icon-on";
                                    document.getElementById("menuInteractive-header").className = "menuInteractive-header-on";
                                }

                            </script>
                                    <div class="leftMenu-cont-top"></div>
                                    <div class="leftMenu-cont-mid">
                                      <div class="m-left">
                                        <div class="m-right">
                                          <div class="leftMenu-cnt">
                                            <ul class="mainNav">
                                              <div style="position:relative;" id="menuFiller4">
                                                <?php
                                                ######
                                                # 
                                                #   Скрипт меню Game Guide
                                                #    
                                                    
                                                    $dir    = 'warcron/menus/news/';

                                                            
                                                    $files = array_diff( scandir($dir), array('..', '.'));

                                                    $id = 0;

                                                    foreach ($files as $value) {
                                                        
                                                        $link = file_get_contents($dir.$value);
                                                        $keywords = preg_split("/\_/", $value);
                                                        

                                                ?>    
                                                        <div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif');        width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
                                                          <?php echo '<a class="menuFiller" href="'.$link.'">'.$keywords[1].'</a>' ?>
                                                        </div>
                                                <?php    
                                                
                                                    }
                                                #
                                                #
                                                #####
                                                ?>
                                                  
                                                  
                                              </div>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="leftMenu-cont-bot"></div>
                                  </div>
                                </div>
                                <div id="menuMedia">
                                  <div onclick="javascript:toggleNewMenu(5-1);" class="menu-button-off" id="menuMedia-button">
                                    <span class="menuMedia-icon-off" id="menuMedia-icon">&nbsp;</span><a class="menuMedia-header-off" id="menuMedia-header"><em>Game Guide</em></a><a id="menuMedia-collapse"></a><span class="menuEntry-rightBorder"></span>
                                  </div>
                                  <div id="menuMedia-inner">
                                    <script type="text/javascript">

								//This script handles the default status of each menu based on the user's cookies
                                if (menuCookie[5-1] == 0) {
		
                                    document.getElementById("menuMedia-inner").style.display = "none";		
                                    document.getElementById("menuMedia-button").className = "menu-button-off";
                                    document.getElementById("menuMedia-collapse").className = "leftMenu-plusLink";
                                    document.getElementById("menuMedia-icon").className = "menuMedia-icon-off";
                                    document.getElementById("menuMedia-header").className = "menuMedia-header-off";
                                } else {

                                    document.getElementById("menuMedia-inner").style.display = "block";		
                                    document.getElementById("menuMedia-button").className = "menu-button-on";
                                    document.getElementById("menuMedia-collapse").className = "leftMenu-minusLink";
                                    document.getElementById("menuMedia-icon").className = "menuMedia-icon-on";
                                    document.getElementById("menuMedia-header").className = "menuMedia-header-on";
                                }

                            </script>
                                    <div class="leftMenu-cont-top"></div>
                                    <div class="leftMenu-cont-mid">
                                      <div class="m-left">
                                        <div class="m-right">
                                          <div class="leftMenu-cnt">
                                            <ul class="mainNav">
                                              <div style="position:relative;" id="">
                                                <?php
                                                ######
                                                # 
                                                #   Скрипт меню Media
                                                #    
                                                    
                                                    $dir    = 'warcron/menus/media/';

                                                            
                                                    $files = array_diff( scandir($dir), array('..', '.'));

                                                    $id = 0;

                                                    foreach ($files as $value) {
                                                        
                                                        $link = file_get_contents($dir.$value);
                                                        $keywords = preg_split("/\_/", $value);
                                                        

                                                ?>    
                                                        <div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif');        width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
                                                          <?php echo '<a class="menuFiller" href="'.$link.'">'.$keywords[1].'</a>' ?>
                                                        </div>
                                                <?php    
                                                
                                                    }
                                                #
                                                #
                                                #####
                                                ?>
                                              </div>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="leftMenu-cont-bot"></div>
                                  </div>
                                </div>
                                <div id="menuForums">
                                  <div onclick="javascript:toggleNewMenu(6-1);" class="menu-button-off" id="menuForums-button">
                                    <span class="menuForums-icon-off" id="menuForums-icon">&nbsp;</span><a class="menuForums-header-off" id="menuForums-header"><em>Game Guide</em></a><a id="menuForums-collapse"></a><span class="menuEntry-rightBorder"></span>
                                  </div>
                                  <div id="menuForums-inner">
                                    <script type="text/javascript">

								//This script handles the default status of each menu based on the user's cookies
                                if (menuCookie[6-1] == 0) {
		
                                    document.getElementById("menuForums-inner").style.display = "none";		
                                    document.getElementById("menuForums-button").className = "menu-button-off";
                                    document.getElementById("menuForums-collapse").className = "leftMenu-plusLink";
                                    document.getElementById("menuForums-icon").className = "menuForums-icon-off";
                                    document.getElementById("menuForums-header").className = "menuForums-header-off";
                                } else {

                                    document.getElementById("menuForums-inner").style.display = "block";		
                                    document.getElementById("menuForums-button").className = "menu-button-on";
                                    document.getElementById("menuForums-collapse").className = "leftMenu-minusLink";
                                    document.getElementById("menuForums-icon").className = "menuForums-icon-on";
                                    document.getElementById("menuForums-header").className = "menuForums-header-on";
                                }

                            </script>
                                    <div class="leftMenu-cont-top"></div>
                                    <div class="leftMenu-cont-mid">
                                      <div class="m-left">
                                        <div class="m-right">
                                          <div class="leftMenu-cnt">
                                            <ul class="mainNav">
                                              <div style="position:relative;" id="menuFiller6">
<div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif'); width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
				  <a class="menuFiller" href="index.php?n=forums">General</a>
				</div><div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif'); width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
				  <a class="menuFiller" href="index.php?n=forums">Classes</a>
				</div><div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif'); width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
				  <a class="menuFiller" href="index.php?n=forums">Realms</a>
				</div><div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif'); width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
				  <a class="menuFiller" href="index.php?n=forums">Guilds</a>
				</div><div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif'); width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
				  <a class="menuFiller" href="index.php?n=forums">Battlegroups</a>
				</div><div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif'); width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
				  <a class="menuFiller" href="index.php?n=forums">Support</a>
				</div>                                              </div>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="leftMenu-cont-bot"></div>
                                  </div>
                                </div>
 <iframe name="menuIframe6" id="menuIframe6" frameborder="0" height="0" width="0" src="new-hp/menus/menu6.php?UID="></iframe>
                                <div id="menuCommunity">
                                  <div onclick="javascript:toggleNewMenu(7-1);" class="menu-button-off" id="menuCommunity-button">
                                    <span class="menuCommunity-icon-off" id="menuCommunity-icon">&nbsp;</span><a class="menuCommunity-header-off" id="menuCommunity-header"><em>Game Guide</em></a><a id="menuCommunity-collapse"></a><span class="menuEntry-rightBorder"></span>
                                  </div>
                                  <div id="menuCommunity-inner">
                                    <script type="text/javascript">

								//This script handles the default status of each menu based on the user's cookies
                                if (menuCookie[7-1] == 0) {
		
                                    document.getElementById("menuCommunity-inner").style.display = "none";		
                                    document.getElementById("menuCommunity-button").className = "menu-button-off";
                                    document.getElementById("menuCommunity-collapse").className = "leftMenu-plusLink";
                                    document.getElementById("menuCommunity-icon").className = "menuCommunity-icon-off";
                                    document.getElementById("menuCommunity-header").className = "menuCommunity-header-off";
                                } else {

                                    document.getElementById("menuCommunity-inner").style.display = "block";		
                                    document.getElementById("menuCommunity-button").className = "menu-button-on";
                                    document.getElementById("menuCommunity-collapse").className = "leftMenu-minusLink";
                                    document.getElementById("menuCommunity-icon").className = "menuCommunity-icon-on";
                                    document.getElementById("menuCommunity-header").className = "menuCommunity-header-on";
                                }

                            </script>
                                    <div class="leftMenu-cont-top"></div>
                                    <div class="leftMenu-cont-mid">
                                      <div class="m-left">
                                        <div class="m-right">
                                          <div class="leftMenu-cnt">
                                            <ul class="mainNav">
                                              <div style="position:relative;" id="menuFiller7">
                                                <div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif');        width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
                                                  <a class="menuFiller" href="index.php?n=community.spotlight">Community Spotlight</a>
                                                </div>
                                                <div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif');        width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
                                                  <a class="menuFiller" href="index.php?n=community.online">Users On-Line (1)</a>
                                                </div>
                                                <div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif');        width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
                                                  <a class="menuFiller" href="index.php?n=community.contests">Contests</a>
                                                </div>
                                                <div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif');        width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
                                                  <a class="menuFiller" href="index.php?n=community.fanart">Fan Art</a>
                                                </div>
                                              </div>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="leftMenu-cont-bot"></div>
                                  </div>
                                </div>
                                <div id="menuSupport">
                                  <div onclick="javascript:toggleNewMenu(8-1);" class="menu-button-off" id="menuSupport-button">
                                    <span class="menuSupport-icon-off" id="menuSupport-icon">&nbsp;</span><a class="menuSupport-header-off" id="menuSupport-header"><em>Game Guide</em></a><a id="menuSupport-collapse"></a><span class="menuEntry-rightBorder"></span>
                                  </div>
                                  <div id="menuSupport-inner">
                                    <script type="text/javascript">

								//This script handles the default status of each menu based on the user's cookies
                                if (menuCookie[8-1] == 0) {
		
                                    document.getElementById("menuSupport-inner").style.display = "none";		
                                    document.getElementById("menuSupport-button").className = "menu-button-off";
                                    document.getElementById("menuSupport-collapse").className = "leftMenu-plusLink";
                                    document.getElementById("menuSupport-icon").className = "menuSupport-icon-off";
                                    document.getElementById("menuSupport-header").className = "menuSupport-header-off";
                                } else {

                                    document.getElementById("menuSupport-inner").style.display = "block";		
                                    document.getElementById("menuSupport-button").className = "menu-button-on";
                                    document.getElementById("menuSupport-collapse").className = "leftMenu-minusLink";
                                    document.getElementById("menuSupport-icon").className = "menuSupport-icon-on";
                                    document.getElementById("menuSupport-header").className = "menuSupport-header-on";
                                }

                            </script>
                                    <div class="leftMenu-cont-top"></div>
                                    <div class="leftMenu-cont-mid">
                                      <div class="m-left">
                                        <div class="m-right">
                                          <div class="leftMenu-cnt">
                                            <ul class="mainNav">
                                              <div style="position:relative;" id="menuFiller8">
												<div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif');        width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
                                                  <a class="menuFiller" href="index.php?n=support.staff">Staff Personal</a>
                                                </div>
                                                <div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif');        width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
                                                  <a class="menuFiller" href="index.php?n=support.ingame">In-Game Support</a>
                                                </div>
												<div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif');        width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
                                                  <a class="menuFiller" href="index.php?n=support.donations">Donations</a>
                                                </div>
												<div style="font-weight:bold; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; position: relative; left: -3px; background-image:url('new-hp/images/menu/mainmenu/bullet-trans-bg.gif');        width:139px; height:15px; _height:18px; padding:0px; margin:0px; _margin-bottom:-3px; border:0px; padding-left:10px;">
                                                  <a class="menuFiller" href="index.php?n=support.rules">Rules</a>
                                                </div>
												                                              </div>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="leftMenu-cont-bot"></div>
                                  </div>
                                </div>
                              </div>
                            
