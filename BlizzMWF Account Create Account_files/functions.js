//operaBool handles an issue related to Opera wanting to create two copies of each left side menu
var operaBool=1;
if (is_opera)
	operaBool=0;

//loadMenu function launches a specified left side menu
function loadMenu(menuNum){

	if (menuCookie[menuNum-1]==1)
		eval("window.frames.menuIframe" + menuNum + ".Go()");
	
}

//menuClear reinitializes all other menus except the menu calling the function. It's purpose is to allow all of the seperate menus to function together all one more cleanly
function menuClear(menuNum){
	if(menuNum!=1){window.frames.menuIframe1.Initiate();window.frames.menuIframe1.menuOverCounter=0;}
	if(menuNum!=2){window.frames.menuIframe2.Initiate();window.frames.menuIframe2.menuOverCounter=0;}
	if(menuNum!=3){window.frames.menuIframe3.Initiate();window.frames.menuIframe3.menuOverCounter=0;}
	if(menuNum!=4){window.frames.menuIframe4.Initiate();window.frames.menuIframe4.menuOverCounter=0;}
	if(menuNum!=5){window.frames.menuIframe5.Initiate();window.frames.menuIframe5.menuOverCounter=0;}
	if(menuNum!=6){window.frames.menuIframe6.Initiate();window.frames.menuIframe6.menuOverCounter=0;}
	if(menuNum!=7){window.frames.menuIframe7.Initiate();window.frames.menuIframe7.menuOverCounter=0;}
	if(menuNum!=8){window.frames.menuIframe8.Initiate();window.frames.menuIframe8.menuOverCounter=0;}
}

//rePosition adjusts the posistioning of all menus... used when resizing the browser
window.onresize=rePosition;
function rePosition(){
	try{RePos();}catch(err){}
	
	for(var count=1; count<=8; count++) {
		if(menuCookie[count-1]==1)
			try{eval("window.frames.menuIframe"+ count +".RePos()");}catch(err){}
	}
}

//hideNewMenu hides a selected dynamic menu
function hideNewMenu(menuNum){
	document.getElementById("menuContainer"+menuNum).style.display="none";
}

//showNewMenu displays a selected dynamic menu or loads it if it hasn't already been loaded.
function showNewMenu(menuNum){

	try{
	if(eval("window.frames.menuIframe" + menuNum + ".Crtd!=true")){
		eval("window.frames.menuIframe" + menuNum + ".Go()");
	}
	}catch(err){}
	try{
	document.getElementById("menuContainer"+menuNum).style.display="block";
	}catch(err){}

}

//printFlash uses innerHTML to render flash objs to get around the IE flash rendering issue
function printFlash(id, src, wmode, menu, bgcolor, width, height, quality, base, flashvars, noflash){
	//alert("here")
	
	if(MM_FlashCanPlay){
	
		
		flashString = '<object id= "' + id + 'Flash" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="' + width + '" height="' + height + '">\
				            <param name="movie" value="' + src + '"/>\
				            <param name="quality" value="' + quality + '"/>';
		if(base){
		flashString+='<param name="base" value="' + base + '"/>';
		}
		
		flashString+='		<param name="flashvars" value="' + flashvars + '"/>\
							<param name="bgcolor" value="' + bgcolor + '" />\
							<param name="menu" value="' + menu + '"/>\
							<param name="wmode" value="' + wmode + '"/>\
							<param name="salign" value="l" />\
				            <embed name= "' + id + 'Flash" src="' + src + '" wmode="' + wmode + '" menu="' + menu + '" bgcolor="' + bgcolor + '" width="' + width + '" height="' + height + '" quality="' + quality + '" pluginspage="http://www.macromedia.com/go/getflas/new-hplayer" type="application/x-shockwave-flash" salign="l" base="' + base + '" flashvars="' + flashvars + '" />\
						</object>';
		
	}else{
	
		flashString=noflash;
	
	}
	
	if(is_ie)
		document.write(flashString);
	else
		document.getElementById(id).innerHTML = flashString;
}


function newsCollapse(newsPost) {
	 var obj;
	 obj = document.getElementById(newsPost);
	 if (obj.style.display != "block")
     	obj.style.display = "block";
	 else
     	obj.style.display = "none";
}

function getexpirydate(nodays){
	var UTCstring;
	Today = new Date();
	nomilli=Date.parse(Today);
	Today.setTime(nomilli+nodays*24*60*60*1000);
	UTCstring = Today.toUTCString();
	return UTCstring;
}

function getcookie(cookiename) {
	 var cookiestring=""+document.cookie;
	 var index1=cookiestring.indexOf(cookiename);
	 if (index1==-1 || cookiename=="") return ""; 
	 var index2=cookiestring.indexOf(';',index1);
	 if (index2==-1) index2=cookiestring.length; 
	 return unescape(cookiestring.substring(index1+cookiename.length+1,index2));
}
function setcookie(name,value){
	cookiestring=name+"="+escape(value)+";EXPIRES="+ getexpirydate(365)+";PATH=/";
	document.cookie=cookiestring;
}





// ----------------------------------------------
// StyleSwitcher functions written by Paul Sowden
// http://www.idontsmoke.co.uk/ss/
// - - - - - - - - - - - - - - - - - - - - - - -
// For the details, visit ALA:
// http://www.alistapart.com/stories/alternate/

function setActiveStyleSheet(title) {
  var i, a, main;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
      a.disabled = true;
      if(a.getAttribute("title") == title) a.disabled = false;
    }
  }
  createCookie("style", getActiveStyleSheet(), 365);
}

function getActiveStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled)return a.getAttribute("title");
  }
  return null;
}

function getPreferredStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1
       && a.getAttribute("rel").indexOf("alt") == -1
       && a.getAttribute("title")
       ) return a.getAttribute("title");
  }
  return null;
}

function createCookie(name,value,days) {

  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

function initTheme(e) {

  var cookie = readCookie("style");
  var title = cookie ? cookie : getPreferredStyleSheet();
  setActiveStyleSheet(title);
}


/*
var cookie = readCookie("style");
var title = cookie ? cookie : getPreferredStyleSheet();
setActiveStyleSheet(title);
*/
// Copyright (c) 1996-1997 Athenia Associates.
// http://www.webreference.com/js/
// License is granted if and only if this entire
// copyright notice is included. By Tomer Shiran.

function setCookie (name, value, expires, path, domain, secure) {
    var curCookie = name + "=" + escape(value) + ((expires) ? "; expires=" + expires.toGMTString() : "") + ((path) ? "; path=" + path : "/") + ((domain) ? "; domain=" + domain : "") + ((secure) ? "; secure" : "");
    document.cookie = curCookie;
}

function getCookie (name) {
    var prefix = name + '=';
    var c = document.cookie;
    var nullstring = '';
    var cookieStartIndex = c.indexOf(prefix);
    if (cookieStartIndex == -1)
        return nullstring;
    var cookieEndIndex = c.indexOf(";", cookieStartIndex + prefix.length);
    if (cookieEndIndex == -1)
        cookieEndIndex = c.length;
    return unescape(c.substring(cookieStartIndex + prefix.length, cookieEndIndex));
}

function deleteCookie (name, path, domain) {
    if (getCookie(name))
        document.cookie = name + "=" + ((path) ? "; path=" + path : "/") + ((domain) ? "; domain=" + domain : "") + "; expires=Thu, 01-Jan-70 00:00:01 GMT";
}

function fixDate (date) {
    var base = new Date(0);
    var skew = base.getTime();
    if (skew > 0)
        date.setTime(date.getTime() - skew);
}

function rememberMe (f) {
    var now = new Date();
    fixDate(now);
    now.setTime(now.getTime() + 365 * 24 * 60 * 60 * 1000);
    setCookie('mtcmtauth', f.author.value, now, '', HOST, '');
    setCookie('mtcmtmail', f.email.value, now, '', HOST, '');
    setCookie('mtcmthome', f.url.value, now, '', HOST, '');
}

function forgetMe (f) {
    deleteCookie('mtcmtmail', '', HOST);
    deleteCookie('mtcmthome', '', HOST);
    deleteCookie('mtcmtauth', '', HOST);
    f.email.value = '';
    f.author.value = '';
    f.url.value = '';
}


var menuCookie;
var tempString;
if(!(tempString = getcookie("menuCookie"))){
	setcookie('menuCookie', '0 0 1 1 0 1 0 0');
	menuCookie = [0, 0, 1, 1, 0, 1, 0, 0];
} else {
	menuCookie = tempString.split(" ");
}
var menuNames = ["menuNews", "menuAccount", "menuGameGuide", "menuInteractive", "menuMedia", "menuForums", "menuCommunity", "menuSupport"];

/*
function tempMenu(){

	document.getElementById("menuNews-inner").className = "left-menu-container-collapse";

}
*/

function toggleNewMenu(menuID) {
	
	var menuNum = parseInt(menuID)+1;
	//alert("hi")

		

	var toggleState = menuCookie[menuID];
	var menuName = menuNames[menuID]+ "-inner";
    var collapseLink = menuNames[menuID]+ "-collapse";
    var menuVisual = menuNames[menuID]+ "-icon";
    var menuHeader = menuNames[menuID]+ "-header";
    var menuButton = menuNames[menuID]+ "-button";
    
	
	if (toggleState == 0) {

		try{showNewMenu(menuNum);}catch(err){}
		document.getElementById(menuName).style.visibility = "visible";
		document.getElementById(menuName).style.display = "block";		
        document.getElementById(menuButton).className = "menu-button-on";
        document.getElementById(collapseLink).className = "leftMenu-minusLink";
        document.getElementById(menuVisual).className = menuNames[menuID]+ "-icon-on";
        document.getElementById(menuHeader).className = menuNames[menuID]+ "-header-on";
		menuCookie[menuID] = 1;
	} else {
		try{hideNewMenu(menuNum);}catch(err){}
		document.getElementById(menuName).style.visibility = "hidden";
		document.getElementById(menuName).style.display = "none";		
        document.getElementById(menuButton).className = "menu-button-off";
        document.getElementById(collapseLink).className = "leftMenu-plusLink";
        document.getElementById(menuVisual).className = menuNames[menuID]+ "-icon-off";
        document.getElementById(menuHeader).className = menuNames[menuID]+ "-header-off";
		menuCookie[menuID] = 0;
	}
		rePosition();
		var theString = menuCookie[0] + " " +menuCookie[1]+ " " +menuCookie[2]+ " " +menuCookie[3]+ " " +menuCookie[4]+ " " +menuCookie[5] + " " +menuCookie[6] + " " +menuCookie[7];
		setcookie('menuCookie', theString);	


}


function toggleEntry(newsID,alt) {

	var newsEntry = "news"+newsID;
    var collapseLink = "plus"+newsID;

	if (document.getElementById(newsEntry).className == 'news-expand') {
		document.getElementById(newsEntry).className = "news-collapse"+alt;	
		setcookie(newsEntry, "0");	
	} else {
		document.getElementById(newsEntry).className = "news-expand";	
		setcookie(newsEntry, "1");	
	}


}


function clearFiller(menuNum) {

	eval("window.frames.menuIframe" + menuNum + ".RePos()");
	document.getElementById("menuFiller" + menuNum).style.visibility="hidden";
}

bgTimeout = null;
function changeNavBgPos() {

    var n, e;
    e = n = document.getElementById("nav");
    y = 0;
    x = 0;
 if (e.offsetParent) {
  while (e.offsetParent) {
   y += e.offsetTop;
   x += e.offsetLeft;
   e = e.offsetParent;
        }
    } else if (e.x && e.y) {
  y += e.y;
  x += e.x;
    }
    n.style.backgroundPosition = (x*-1) + "px " + (y*-1) + "px";

}

function addEvent(obj, evType, fn) {
	
    if (obj.addEventListener) {

        obj.addEventListener(evType, fn, false);
        return true;
    } else if (obj.attachEvent) {

        var r = obj.attachEvent("on"+evType, fn);
        return r;
    } else {

        return false;
    }
}
function goBuffer(){

	Go();

}
if(is_opera)
	addEvent(window, 'load', goBuffer);
	
if(!is_ie)
	addEvent(window, 'load', rePosition);
	
//addEvent(window, 'load', searchBoxFocus);
	
var MM_contentVersion = 6;
var plugin = (navigator.mimeTypes && navigator.mimeTypes["application/x-shockwave-flash"]) ? navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin : 0;
if ( plugin ) {
		var words = navigator.plugins["Shockwave Flash"].description.split(" ");
	    for (var i = 0; i < words.length; ++i)
	    {
		if (isNaN(parseInt(words[i])))
		continue;
		var MM_PluginVersion = words[i]; 
	    }
	var MM_FlashCanPlay = MM_PluginVersion >= MM_contentVersion;
}
else if (navigator.userAgent && navigator.userAgent.indexOf("MSIE")>=0 
   && (navigator.appVersion.indexOf("Win") != -1)) {
	document.write('<SCR' + 'IPT LANGUAGE=VBScript\> \n'); //FS hide this from IE4.5 Mac by splitting the tag
	document.write('on error resume next \n');
	document.write('MM_FlashCanPlay = ( IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash." & MM_contentVersion)))\n');
	document.write('</SCR' + 'IPT\> \n');
}

//Ajax Data Loading

/*
if (is_moz) {
	var xslStylesheet;
	var myDOM;
	var xmlDoc;
	var myXMLHTTPRequest = new XMLHttpRequest();
	var myXMLHTTPRequest2 = new XMLHttpRequest();
}
*/

function xmlDataLoadListener(xmlObj, xslObj, container, loader, afterFunction){

			if (xmlObj.readyState == 4 && xslObj.readyState == 4) {
				document.getElementById(container).innerHTML = xmlObj.transformNode(xslObj);

				document.getElementById(loader).style.display = "none";
				eval(afterFunction);
				window.clearInterval(intervalHolder);
			}
			
}

function xmlDataLoadListenerMoz(xmlObj, xslObj, container, loader){

			if (xmlObj.readyState == 4 && xslObj.readyState == 4) {
					
					window.clearInterval(intervalHolder);
 					xslStylesheet = xslObj.responseXML;
					xmlDoc = xmlObj.responseXML;
				
 					var xsltProcessor = new XSLTProcessor();
					xsltProcessor.importStylesheet(xslStylesheet);
					
					xmlLoadComplete=1;
					var fragment = xsltProcessor.transformToFragment(xmlDoc, window.document);
					document.getElementById(containerGlobal).innerHTML = "";
					document.getElementById(containerGlobal).appendChild(fragment);
					document.getElementById(loader).style.display = "none";

					
			}
			
}


var xmlDataArray = new Array;
var	myXMLHTTPRequest;
var	myXMLHTTPRequest2; 
var intervalHolder;
var containerGlobal;
var loaderGlobal;

function dummyFunction(){}

function movePvpPosition(value){

	document.getElementById("pvpBoxPosition").style.top=value+"px";

}



function xmlDataLoad(xmlSource, xslSource, container, aSync, loader, afterFunction){

	if('undefined' == typeof afterFunction) {afterFunction="dummyFunction()";}

	window.clearInterval(intervalHolder);
	
	document.getElementById(loader).style.display = "block";
	if (is_ie && !is_opera) {

		
		var xml = new ActiveXObject("Microsoft.XMLDOM")
		xml.async = aSync
		xml.load(xmlSource)// Load XSL
		var xsl = new ActiveXObject("Microsoft.XMLDOM")
		xsl.async = aSync
		xsl.load(xslSource)// Transform
		
		if(!aSync){
			document.write(xml.transformNode(xsl));
		}else{

			xmlDataArray[0]=xml;
			xmlDataArray[1]=xsl;

			intervalHolder = window.setInterval("xmlDataLoadListener(xmlDataArray[0],xmlDataArray[1],'"+container+"','"+loader+"','"+afterFunction+"')",100);
			
		}
			
		return true;
		
	
	} else if (is_moz) {
			
			var xslStylesheet;
			var myDOM;
			var xmlDoc;
			myXMLHTTPRequest = new XMLHttpRequest();
			myXMLHTTPRequest2 = new XMLHttpRequest();			
			
			myXMLHTTPRequest.open("GET.html", xslSource, aSync);
			myXMLHTTPRequest.send(null);
			
			
			
			
			// load the xml file, example1.xml
			

			myXMLHTTPRequest2.open("GET.html", xmlSource, aSync);
			myXMLHTTPRequest2.send(null);
			
			
			containerGlobal=container;
			loaderGlobal=loader;
			//myXMLHTTPRequest.onreadystatechange = stateHandler;
			//myXMLHTTPRequest2.onreadystatechange = stateHandler;
			
			intervalHolder = window.setInterval("xmlDataLoadListenerMoz(myXMLHTTPRequest2,myXMLHTTPRequest,'"+container+"','"+loader+"','"+afterFunction+"')",100);
			
		  
	} 
	
	return false;


}

var pvpPage=1;
var pvpHalf=1;
var maxPvpPages=100;

function pvpNext(){

	if(pvpHalf==1){
	
		document.getElementById("pvpBoxPosition").style.top="-220px";
		pvpHalf=2;
	
	}else{
	
		if (pvpPage!=maxPvpPages)
			pvpPage++;
		else
			pvpPage=1;	
			
		pvpHalf=1;
		xmlDataLoad('pvp/rankings2a3b.xml?r='+escape(currentRealm)+'&faction='+currentFaction+'&p='+pvpPage, '/new-hp/layout/pvp.xsl', 'pvpDataContainer', true, 'pvpLoadingBox', 'movePvpPosition(0)')
	}

}

function pvpPrev(){

	if(pvpHalf!=1){
	
		document.getElementById("pvpBoxPosition").style.top="0px";
		pvpHalf=1;
	
	}else{
		if (pvpPage!=1)
			pvpPage--;
		else
			pvpPage=maxPvpPages;
			
		pvpHalf=2;
		xmlDataLoad('pvp/rankings2a3b.xml?r='+escape(currentRealm)+'&faction='+currentFaction+'&p='+pvpPage, '/new-hp/layout/pvp.xsl', 'pvpDataContainer', true, 'pvpLoadingBox', 'movePvpPosition(-220)')
	}

}

function changeFaction(){

	if (currentFaction == 'h') {
	
		//alert("alliance")
		document.getElementById("hordeLarge").style.display="none";
		document.getElementById("hordeSmall").style.display="block";
		xmlDataLoad('pvp/rankings2a3b.xml?r='+currentRealm+'&amp;faction=a', '/new-hp/layout/pvp.xsl', 'pvpDataContainer', true, 'pvpLoadingBox'); 
		setcookie('pvpFaction','a'); 
		currentFaction='a'; 
		pvpPage=1;

	
	} else {
		//alert("horde")
		document.getElementById("hordeLarge").style.display="block";
		document.getElementById("hordeSmall").style.display="none";
		xmlDataLoad('pvp/rankings2a3b.xml?r='+currentRealm+'&amp;faction=h', '/new-hp/layout/pvp.xsl', 'pvpDataContainer', true, 'pvpLoadingBox'); 
		setcookie('pvpFaction','h'); 
		currentFaction='h'; 
		pvpPage=1;
	
	}

}

function searchCall(){
	var searchTypeValue = document.topSearch.searchType.options[document.topSearch.searchType.selectedIndex].value;
	var searchBoxValue = document.topSearch.searchBox.value;
	
	if(searchTypeValue=="techsupport"){
	
		document.location.href="http://www.blizzard.com/support/wow/?id=mSearch000&strProduct=ww&query=query&strSearch=" + escape(searchBoxValue);
	
	} else if (searchTypeValue=="ingamesupport"){
	
		document.location.href="http://www.blizzard.com/support/wowgm/?id=mSearch000&strProduct=gm&query=query&strSearch=" + escape(searchBoxValue);
	
	} else if (searchTypeValue=="betaforum"){
	
		document.location.href="http://beta.worldofwarcraft.com/search.html?forumId=10001&amp;sid=1&amp;searchText=" + escape(searchBoxValue);
	
	} else if (searchTypeValue=="site"){
		
		if(document.location.href.indexOf('search/index.html')>-1)
			frames['searchFrame'].location.href="search/searchResults03d2.html?q=" + escape(searchBoxValue);
		else
			document.location.href="search/index03d2.html?q=" + escape(searchBoxValue);
	
	} else if (searchTypeValue=="encyclopedia"){
		
		if(document.location.href.indexOf('search/index.html')>-1)
			frames['searchFrame'].location.href="search/searchResults03d2.html?q=" + escape(searchBoxValue) + "&restrict=Encyclopedia";
		else
			document.location.href="search/index03d2.html?q=" + escape(searchBoxValue) + "&restrict=Encyclopedia";
	
	} 
	return false;
}
if(document.location.href.indexOf("encyclopedia")>-1 || document.location.href.indexOf("Encyclopedia")>-1)
	document.getElementById("searchType").selectedIndex = 1;

function searchBoxFocus(){

	document.getElementById("searchBox").focus();

}

  function popUpOmega (screenshot, width, height) 
  {
	var name = "Sheenscrot"; 
	widthHeight = "width=" + width + ",height=" + height;
	winFeatures = "width=" + width + ",height=" + height + ",left=50,top=50,menubar=no,resizable=no,scrollbars=no,statusbar=no,toolbar=no,locationbar=no"
	spawn = window.open("http://www.worldofwarcraft.com/shared/wow-com/images/layout/pixel.gif",name,winFeatures)
	spawn.document.write("<html><head><title>Screenshot<\/title> <\/head> <body onBlur='self.close()' style='background-image:url(" + screenshot + "); background-repeat:no-repeat;'><\/body><\/html>"); 
	spawn.document.close();
  }
  
  
  
//Begin Martin's Tooltip Code
is_safari = ((navigator.userAgent.indexOf("Safari")!=-1))?true:false;
isShowing = 2;
mouseX = 0;
mouseY = 0;

function showTip(toolTipContent)
{
  if(isShowing==2)
  	document.onmousemove = tipPosition;
  isShowing = true;
  document.getElementById("toolBox").style.left = mouseX+10+"px";
  document.getElementById("toolBox").style.top = mouseY+10+document.body.scrollTop+"px";
  document.getElementById("toolBox").innerHTML = toolTipContent;
  document.getElementById("toolBox").style.display = "block";
}

function hideTip()
{
  document.getElementById("toolBox").style.display = "none";
  isShowing = false;
}

function tipPosition(callingEvent)
{
  if (!callingEvent) callingEvent = window.event;
  mouseX = callingEvent.clientX;
  mouseY = callingEvent.clientY-1;

  if (isShowing)
  {
	document.getElementById("toolBox").style.left = mouseX+10+"px";
	document.getElementById("toolBox").style.top = (!is_safari) ? mouseY+10+document.body.scrollTop+"px" : mouseY+10+"px" ;
  }
}

//End Martin's Tooltip Code