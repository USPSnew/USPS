var USPS=USPS||{};USPS.Require=USPS.Require||{};document.addEventListener('touch',{passive:!0});global_elements_jq=$.noConflict(!0);global_elements_jq(document).ready(function($){$('.mobile-hamburger').on('touch click',function(e){e.preventDefault();$('.search--wrapper-hidden,.mobile-search').removeClass('active');$('.global--navigation nav,.mobile-hamburger').toggleClass('active')});$('.mobile-search').on('touch click',function(e){e.preventDefault();$('.global--navigation nav,.mobile-hamburger').removeClass('active');$('.search--wrapper-hidden,.mobile-search').toggleClass('active')});function checkSize(){if($(window).width()<959){$('nav ul.nav-list li a').off('touch click');$('nav ul.nav-list li').off('touch click');$('.g-alert').off('touch click');$('.g-alert').on('touch click',function(e){e.preventDefault();$(this).toggleClass('expand')});$('.g-alert a').on('touch click',function(e){window.open($(this).attr('href'));return!1});$('.menuheader').off('mouseenter mouseleave');$('nav ul.nav-list li, nav ul.nav-list li a').on('touch click',function(e){e.preventDefault();e.stopPropagation();if($(this).is('a')){e.preventDefault();e.stopPropagation();if($(this).parents('.nav-list div.active').length){$('nav ul.nav-list .active').removeClass('active');window.location.href=$(this).attr('href')}else if(!$(this).parent().hasClass('active')){$('.nav-list .active').removeClass('active');$(this).parents('li.menuheader').addClass('active');$(this).parent().children('div').addClass('active');setTimeout(function(){tpOff=$('.menuheader div.active').offset().top-60;$('html, body').animate({scrollTop:tpOff},100)},350)}else if($(this).parent().hasClass('active')){$('nav ul.nav-list .active').removeClass('active');window.location.href=$(this).attr('href')}}else if($(this).is('li')){if(($(this).hasClass('active'))&&($(this).children('div').hasClass('active'))){$('.menuheader.active').removeClass('active');$('.menuheader div.active').removeClass('active');$('html, body').animate({scrollTop:0},70)}else if((!$(this).hasClass('active'))&&($(this).children('div').hasClass('active'))){$(this).removeClass('active');$(this).children('div').removeClass('active');$('html, body').animate({scrollTop:0},70)}else if(($(this).parent().hasClass('nav-list'))&&($(this).hasClass('active'))){$(this).removeClass('active');$(this).children('div').removeClass('active');$('html, body').delay(10).animate({scrollTop:0},70)}else if(($(this).parent().hasClass('nav-list'))&&(!$(this).hasClass('active'))){$('nav ul.nav-list .active').removeClass('active');$(this).addClass('active');$(this).children('div').addClass('active');setTimeout(function(){tpOff=$('.menuheader div.active').offset().top-60;$('html, body').animate({scrollTop:tpOff},100)},350)}}})}else{$('nav ul.nav-list li a').off('touch click');$('nav ul.nav-list li').off('touch click');$('nav ul.nav-list li a').on('touch click');$('nav ul.nav-list li').on('touch click');$('.g-alert').off('touch click');$('.menuheader').hover(function(e){$('.menuheader').removeClass('active');$('.menuheader .active').removeClass('active');$('.menuheader').find('div a').attr('tabindex','-1');$('.menuheader').find('ul').attr('aria-hidden','true')},function(e){$('.menuheader').removeClass('active');$('.menuheader .active').removeClass('active');$('.menuheader').find('div a').attr('tabindex','-1');$('.menuheader').find('ul').attr('aria-hidden','true');urlCheck()})}
if($('html').hasClass('touch')&&(!$('.mobile-header').is(':visible'))){$('.global--navigation li.menuheader>a:not(.hidden-skip)').on('click touch',function(e){if($(this).parent().children('div').height()<100){e.preventDefault();$(this).parent().addClass('active')}})}}
$(window).on("load resize",function(e){if(!$('input').is(':focus')){checkSize()}});$('.nav-list>.menuheader>.menuitem').focus(function(e){$(this).addClass('active')});$('.nav-list>.menuheader>.menuitem').focusout(function(e){$(this).parents('.menuheader').removeClass('active');$(this).removeClass('active')});$('nav .nav-list div a,nav .nav-list div input').focus(function(e){t=$(this).parents('.menuheader').addClass('active');$('.menuitem',t).addClass('active').attr('aria-expanded','true')});$('.global--navigation nav li.nav-search .input--wrap input').on("change paste keyup",function(e){if(($('.global--navigation nav li.nav-search .autocorrect li').length>0)){$('.global--navigation nav li.nav-search.menuheader div.autocorrect').css('height','145px');$('.global--navigation nav li.nav-search form.search .input--wrap').css('overflow','visible')}else{$('.global--navigation nav li.nav-search.menuheader div.autocorrect').css('height','auto');$('.global--navigation nav li.nav-search form.search .input--wrap').css('overflow','hidden')}});$('.menuheader *').keydown(function(event){$this=$(this).parents('.menuheader');switch(event.keyCode){case 9:$('.menuheader .focused').removeClass('focused');$('.menuheader .active').removeClass('active');break;case 13:if(!$this.hasClass('active')){event.preventDefault();event.stopPropagation();$this.find('div a').attr('tabindex','0');$this.find('ul');$this.addClass('active');if($this.children('.menuitem')){$this.children('.menuitem').attr('aria-expanded','true')}}
break;case 27:$this.find('.active').removeClass('active');$this.removeClass('active');$this.find('div a').attr('tabindex','-1');$this.find('ul').attr('aria-hidden','true');$('.focused').removeClass('focused');break;case 37:$this.find('.active').removeClass('active');$this.removeClass('active');$this.find('div a').attr('tabindex','-1');$this.find('ul').attr('aria-hidden','true');$('.focused').removeClass('focused');$this.prev().find('.menuitem').focus();break;case 38:event.preventDefault();event.stopPropagation();$this.find('div a, div input').attr('tabindex','0');$this.addClass('active');$this.find('ul').attr('aria-hidden','false');if($this.children('.menuitem')){$this.children('.menuitem').attr('aria-expanded','true')}
if($('.menuheader.active div .focused').length>0){$cur=$('.menuheader.active div .focused');tub=$cur.closest('div:not(.desktop-only)').find('a, input');it=tub.index($cur);$cur.closest('div').find('a, input').removeClass('focused');if(it==0||it<0){$this.removeClass('active');$this.find('div a, div input').attr('tabindex','-1');$this.find('ul').attr('aria-hidden','true');$('.focused').removeClass('focused');$this.find('.menuitem').focus()}else{it=it-1;$cur.closest('div:not(.desktop-only)').find('a,input').eq(it).addClass('focused').focus()}}else{$('.menuheader.active div a').eq(0).addClass('focused').focus()}
break;case 39:$this.find('.active').removeClass('active');$this.removeClass('active');$this.find('div a,div input').attr('tabindex','-1');$this.find('ul').attr('aria-hidden','true');$('.focused').removeClass('focused');$this.next().find('.menuitem').focus();break;case 40:event.preventDefault();event.stopPropagation();$this.find('div a, div input').attr('tabindex','0');$this.addClass('active');$this.find('ul').attr('aria-hidden','false');if($this.children('.menuitem')){$this.children('.menuitem').attr('aria-expanded','true')}
if($('.menuheader.active div a.focused').length>0){$cur=$('.menuheader.active div a.focused');tub=$cur.closest('div:not(.desktop-only)').find('a');it=tub.index($cur);$cur.closest('div').find('a, input').removeClass('focused');it=it+1;$cur.closest('div:not(.desktop-only)').find('a,input').eq(it).addClass('focused').focus()}else{$('.menuheader.active div a').eq(0).addClass('focused').focus()}
break}});$('.lang-select').keydown(function(event){$this=$(this);switch(event.keyCode){case 9:if($('.chinese').is(':focus')||$('.chinese.focused')>0){$this.find('a').attr('tabindex','-1');$(this).removeClass('active');$('.lang-select .focused').removeClass('focused');$('#link-lang').attr('tabindex','0').focus()}
break;case 13:it=0;event.preventDefault();event.stopPropagation();$('.lang-select').addClass('active');$('.lang-select').focus();$('.lang-select a').not('#link-lang').attr('tabindex','0');break;case 27:$this.find('a').attr('tabindex','-1');$(this).removeClass('active');$('.lang-select .focused').removeClass('focused');$('#link-lang').attr('tabindex','0').focus();break;case 38:event.preventDefault();event.stopPropagation();tub=$this.find('a').not('#link-lang');if($('.lang-select .focused')){$cur=$('.lang-select .focused');it=tub.index($cur);if(it<1){$('.lang-select').removeClass('active');$('.lang-select .focused').removeClass('focused');$this.find('a').attr('tabindex','-1')}else{it=it-1;$('.lang-select .focused').removeClass('focused');$this.find('a:not(#link-lang)').eq(it).addClass('focused').focus()}}else{it=0;$('.lang-select .focused').removeClass('focused');$this.find('a:not(#link-lang)').eq(it).addClass('focused').focus()}
break;case 40:event.preventDefault();event.stopPropagation();$('.lang-select').addClass('active');$('.lang-select').focus();$('.lang-select a').not('#link-lang').attr('tabindex','0');tub=$this.find('a:not(#link-lang)');if($('.lang-select .focused')){$cur=$('.lang-select .focused');it=tub.index($cur);it=it+1;$('.lang-select .focused').removeClass('focused');$this.find('a:not(#link-lang)').eq(it).addClass('focused').focus()}else{it=0;$this.find('a').not('#link-lang').attr('tabindex','0')}
if(it>2){$this.find('a').attr('tabindex','-1');$(this).removeClass('active');$('.lang-select .focused').removeClass('focused');$('#link-lang').attr('tabindex','0').focus()}
break}});$('.nav-tool-header .chinese').on('blur',function(e){$('.nav-tool-header').removeClass('active');$('.nav-tool-header').find('a').attr('tabindex','-1')})
$('.lang-select').hover(function(e){$('#link-lang').css('background','#ededed')},function(e){$('#link-lang').css('background','')});$('.lang-select').blur(function(e){$('.lang-select.active').removeClass('active');$('.lang-select .focused').removeClass('focused');$this.find('a').attr('tabindex','-1')});options=["boxes","bulk mail","buy stamps","careers","certified mail","change of address","claim","claims","complaint","customs form","duck stamps","every door direct mail","eddm","employment","federal duck stamps","file a claim","file claim","find a post office","first-class","first-class mail","flat rate","flat rate box","flat rate boxes","flat rate envelope","flat rate shipping","forever stamps","forms","forward mail","forwarding","history","hold mail","hours","informed delivery","insurance","insurance claim","intercept a package","jobs","locations","lost package","lost mail","mail forwarding","mail hold","mailbox","media mail","missing mail","money order","money orders","moving","my usps","overnight","parcel select","passport","passport application","passport renewal","passports","pay po box","po box","po boxes","post office box","post office locator","postage rates","postcard","postcard stamp","postcard stamps","postcards","priority","prices","price of stamps","priority mail","priority mail international","priority mail express","priority mail express international","rates","redelivery","refund","registered mail","return receipt","schedule a pickup","service alerts","service performance results","shipping history","stamp prices","stop mail","supplies","tracking","usps tracking","vacation hold","wedding stamps","ZIP code","ZIP codes"];o=[];for(i=0;i<options.length;i++){o.push(options[i])}
$('.search--track-input').on('keyup',function(e){var searchedTerm=$(this).val();var oList=[]
oLen=o.length;for(i=0;i<oLen;i++){var tempQ=o[i].toUpperCase();var tempS=searchedTerm.toUpperCase();if(tempQ.indexOf(tempS)>-1&&tempS!=null&&tempS!=''){oList.push(o[i])}}
var strList="";var limit=oList.length;if(limit>5){limit=5}
for(i=0;i<limit;i++){regEx=new RegExp(searchedTerm,"igm");replaceMask="<strong>"+searchedTerm+"</strong>";oList[i]=oList[i].replace(regEx,replaceMask);strList=strList+"<li><a>"+oList[i]+"</a></li>"}
$(this).parents('form').find('.autocorrect ul').html(strList);if(strList.length>0){$(this).parents('form').find('.autocorrect').addClass('active')}else{$(this).parents('form').find('.autocorrect').removeClass('active')}});$('body').on('click','.autocorrect a',function(e){$(this).parents('form').find('input.q').val($(this).text());$(this).parents('form').find('.autocorrect').removeClass('active');$(this).parents('form').find('.autocorrect ul').html("");$(this).parents('form').find('input.q').eq(0).focus();setTimeout(function(e){$(this).parents('form').find('.autocorrect.active').removeClass('active');$(this).parents('form').find('input.q').eq(0).focus()},100);$(this).parents('form').find('.autocorrect').removeClass('active')});$('.menuheader div').hover(function(e){$(this).parents('.menuheader').children('.menuitem').addClass('active')},function(e){});function urlCheck(){if(!urlOverride){var urlOverride};if(urlOverride){navBucket=urlOverride}else{pathArray=window.location.pathname.split('/');navBucket=pathArray[1]}
switch(navBucket){case "international":$('li.menuheader a.menuitem').eq(5).addClass('active');break;case "ship":$('li.menuheader a.menuitem').eq(1).addClass('active');break;case "manage":$('li.menuheader a.menuitem').eq(2).addClass('active');break;case "help":$('li.menuheader a.menuitem').eq(6).addClass('active');break;case "shop":$('li.menuheader a.menuitem').eq(3).addClass('active');case "store":$('li.menuheader a.menuitem').eq(3).addClass('active');break;case "business":$('li.menuheader a.menuitem').eq(4).addClass('active');break;default:break}}
urlCheck();$('li.menuheader:nth-of-type(4) .search--submit').on('click touchstart touch submit',function(e){e.stopPropagation();e.preventDefault();$('li.menuheader:nth-of-type(4) .search--submit').off('click');if($('li.menuheader:nth-of-type(4) input').val()){window.location="https://store.usps.com/store/results?_dyncharset=UTF-8&Dy=1&Nty=1&siteScope=ok&_D%3AsiteScope=+&Ntt="+$('li.menuheader:nth-of-type(4) input').val()+"&search=&_D%3Asearch=+&_DARGS=%2Fstore%2Fcartridges%2FSearchBox%2FSearchBox.jsp"}})})