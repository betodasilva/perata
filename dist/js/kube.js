if("undefined"==typeof jQuery)throw new Error("Kube's requires jQuery");!function(t){var e=jQuery.fn.jquery.split(".");if(1==e[0]&&e[1]<8)throw new Error("Kube's requires at least jQuery v1.8")}(),function(){Function.prototype.inherits=function(t){var e=function(){};e.prototype=t.prototype;var s=new e;for(var i in this.prototype)s[i]=this.prototype[i];this.prototype=s,this.prototype.super=t.prototype};var t=function(t,e){e="object"==typeof e?e:{},this.$element=$(t),this.opts=$.extend(!0,this.defaults,$.fn[this.namespace].options,this.$element.data(),e),this.$target="string"==typeof this.opts.target?$(this.opts.target):null};t.prototype={getInstance:function(){return this.$element.data("fn."+this.namespace)},hasTarget:function(){return!(null===this.$target)},callback:function(t){var e=[].slice.call(arguments).splice(1);return this.$element&&(e=this._fireCallback($._data(this.$element[0],"events"),t,this.namespace,e)),this.$target&&(e=this._fireCallback($._data(this.$target[0],"events"),t,this.namespace,e)),this.opts&&this.opts.callbacks&&$.isFunction(this.opts.callbacks[t])?this.opts.callbacks[t].apply(this,e):e},_fireCallback:function(t,e,s,i){if(t&&void 0!==t[e])for(var n=t[e].length,o=0;o<n;o++){if(t[e][o].namespace===s)var a=t[e][o].handler.apply(this,i)}return void 0===a?i:a}},window.Kube=t}(),function(t){t.Plugin={create:function(e,s){return s=void 0===s?e.toLowerCase():s,$.fn[s]=function(i,n){var o=Array.prototype.slice.call(arguments,1),a="fn."+s,h=[];return this.each(function(){var s=$(this),l=s.data(a);if(n="object"==typeof i?i:n,l||(s.data(a,{}),s.data(a,l=new t[e](this,n))),"string"==typeof i)if($.isFunction(l[i])){var c=l[i].apply(l,o);void 0!==c&&h.push(c)}else $.error('No such method "'+i+'" for '+e)}),0===h.length||1===h.length?0===h.length?this:h[0]:h},$.fn[s].options={},this},autoload:function(t){for(var e=t.split(","),s=e.length,i=0;i<s;i++){var n=e[i].toLowerCase().split(",").map(function(t){return t.trim()}).join(",");this.autoloadQueue.push(n)}return this},autoloadQueue:[],startAutoload:function(){if(window.MutationObserver&&0!==this.autoloadQueue.length){var t=this;new MutationObserver(function(e){e.forEach(function(e){var s=e.addedNodes;0===s.length||1===s.length&&3===s.nodeType||t.startAutoloadOnce()})}).observe(document,{subtree:!0,childList:!0})}},startAutoloadOnce:function(){var t=this;$("[data-component]").not("[data-loaded]").each(function(){var e=$(this),s=e.data("component");-1!==t.autoloadQueue.indexOf(s)&&(e.attr("data-loaded",!0),e[s]())})},watch:function(){t.Plugin.startAutoloadOnce(),t.Plugin.startAutoload()}},$(window).on("load",function(){t.Plugin.watch()})}(Kube),function(t){t.Animation=function(e,s,i){this.namespace="animation",this.defaults={},t.apply(this,arguments),this.effect=s,this.completeCallback=void 0!==i&&i,this.prefixes=["","-moz-","-o-animation-","-webkit-"],this.queue=[],this.start()},t.Animation.prototype={start:function(){this.isSlideEffect()&&this.setElementHeight(),this.addToQueue(),this.clean(),this.animate()},addToQueue:function(){this.queue.push(this.effect)},setElementHeight:function(){this.$element.height(this.$element.height())},removeElementHeight:function(){this.$element.css("height","")},isSlideEffect:function(){return"slideDown"===this.effect||"slideUp"===this.effect},isHideableEffect:function(){return-1!==$.inArray(this.effect,["fadeOut","slideUp","flipOut","zoomOut","slideOutUp","slideOutRight","slideOutLeft"])},isToggleEffect:function(){return"show"===this.effect||"hide"===this.effect},storeHideClasses:function(){this.$element.hasClass("hide-sm")?this.$element.data("hide-sm-class",!0):this.$element.hasClass("hide-md")&&this.$element.data("hide-md-class",!0)},revertHideClasses:function(){this.$element.data("hide-sm-class")?this.$element.addClass("hide-sm").removeData("hide-sm-class"):this.$element.data("hide-md-class")?this.$element.addClass("hide-md").removeData("hide-md-class"):this.$element.addClass("hide")},removeHideClass:function(){this.$element.data("hide-sm-class")?this.$element.removeClass("hide-sm"):this.$element.data("hide-md-class")?this.$element.removeClass("hide-md"):this.$element.removeClass("hide")},animate:function(){if(this.storeHideClasses(),this.isToggleEffect())return this.makeSimpleEffects();this.$element.addClass("kubeanimated"),this.$element.addClass(this.queue[0]),this.removeHideClass();var t=this.queue.length>1?null:this.completeCallback;this.complete("AnimationEnd",$.proxy(this.makeComplete,this),t)},makeSimpleEffects:function(){"show"===this.effect?this.removeHideClass():"hide"===this.effect&&this.revertHideClasses(),"function"==typeof this.completeCallback&&this.completeCallback(this)},makeComplete:function(){this.$element.hasClass(this.queue[0])&&(this.clean(),this.queue.shift(),this.queue.length&&this.animate())},complete:function(t,e,s){var i=t.toLowerCase()+" webkit"+t+" o"+t+" MS"+t;this.$element.one(i,$.proxy(function(){"function"==typeof e&&e(),this.isHideableEffect()&&this.revertHideClasses(),this.isSlideEffect()&&this.removeElementHeight(),"function"==typeof s&&s(this),this.$element.off(i)},this))},clean:function(){this.$element.removeClass("kubeanimated").removeClass(this.queue[0])}},t.Animation.inherits(t)}(Kube),function(t){t.fn.animation=function(e,s){var i="fn.animation";return this.each(function(){var n=t(this);n.data(i);n.data(i,{}),n.data(i,new Kube.Animation(this,e,s))})},t.fn.animation.options={}}(jQuery),function(t){t.Detect=function(){},t.Detect.prototype={isMobile:function(){return/(iPhone|iPod|BlackBerry|Android)/.test(navigator.userAgent)},isDesktop:function(){return!/(iPhone|iPod|iPad|BlackBerry|Android)/.test(navigator.userAgent)},isMobileScreen:function(){return $(window).width()<=768},isTabletScreen:function(){return $(window).width()>=768&&$(window).width()<=1024},isDesktopScreen:function(){return $(window).width()>1024}}}(Kube),function(t){t.FormData=function(t){this.opts=t.opts},t.FormData.prototype={set:function(t){this.data=t},get:function(t){return this.formdata=t,this.opts.appendForms&&this.appendForms(),this.opts.appendFields&&this.appendFields(),this.data},appendFields:function(){var t=$(this.opts.appendFields);if(0!==t.length){var e=this,s="";this.formdata?t.each(function(){e.data.append($(this).attr("name"),$(this).val())}):(t.each(function(){s+="&"+$(this).attr("name")+"="+$(this).val()}),this.data=""===this.data?s.replace(/^&/,""):this.data+s)}},appendForms:function(){var t=$(this.opts.appendForms);if(0!==t.length)if(this.formdata){var e=this,s=$(this.opts.appendForms).serializeArray();$.each(s,function(t,s){e.data.append(s.name,s.value)})}else{var i=t.serialize();this.data=""===this.data?i:this.data+"&"+i}}}}(Kube),function(t){t.Response=function(t){},t.Response.prototype={parse:function(t){if(""===t)return!1;var e={};try{e=JSON.parse(t)}catch(t){return!1}if(void 0!==e[0])for(var s in e)this.parseItem(e[s]);else this.parseItem(e);return e},parseItem:function(t){return"value"===t.type?$.each(t.data,$.proxy(function(t,e){e=!0===(e=null===e||!1===e?0:e)?1:e,$(t).val(e)},this)):"html"===t.type?$.each(t.data,$.proxy(function(t,e){e=null===e||!1===e?"":e,$(t).html(this.stripslashes(e))},this)):"addClass"===t.type?$.each(t.data,function(t,e){$(t).addClass(e)}):"removeClass"===t.type?$.each(t.data,function(t,e){$(t).removeClass(e)}):"command"===t.type?$.each(t.data,function(t,e){$(e)[t]()}):"animation"===t.type?$.each(t.data,function(t,e){e.opts=void 0===e.opts?{}:e.opts,$(t).animation(e.name,e.opts)}):"location"===t.type?top.location.href=t.data:"notify"===t.type&&$.notify(t.data),t},stripslashes:function(t){return(t+"").replace(/\0/g,"0").replace(/\\([\\'"])/g,"$1")}}}(Kube),function(t){t.Utils=function(){},t.Utils.prototype={disableBodyScroll:function(){var t=$("html"),e=window.innerWidth;if(!e){var s=document.documentElement.getBoundingClientRect();e=s.right-Math.abs(s.left)}var i=document.body.clientWidth<e,n=this.measureScrollbar();t.css("overflow","hidden"),i&&t.css("padding-right",n)},measureScrollbar:function(){var t=$("body"),e=document.createElement("div");e.className="scrollbar-measure",t.append(e);var s=e.offsetWidth-e.clientWidth;return t[0].removeChild(e),s},enableBodyScroll:function(){$("html").css({overflow:"","padding-right":""})}}}(Kube),function(t){t.Message=function(e,s){this.namespace="message",this.defaults={closeSelector:".close",closeEvent:"click",animationOpen:"fadeIn",animationClose:"fadeOut",callbacks:["open","opened","close","closed"]},t.apply(this,arguments),this.start()},t.Message.prototype={start:function(){this.$close=this.$element.find(this.opts.closeSelector),this.$close.on(this.opts.closeEvent+"."+this.namespace,$.proxy(this.close,this)),this.$element.addClass("open")},stop:function(){this.$close.off("."+this.namespace),this.$element.removeClass("open")},open:function(t){t&&t.preventDefault(),this.isOpened()||(this.callback("open"),this.$element.animation(this.opts.animationOpen,$.proxy(this.onOpened,this)))},isOpened:function(){return this.$element.hasClass("open")},onOpened:function(){this.callback("opened"),this.$element.addClass("open")},close:function(t){t&&t.preventDefault(),this.isOpened()&&(this.callback("close"),this.$element.animation(this.opts.animationClose,$.proxy(this.onClosed,this)))},onClosed:function(){this.callback("closed"),this.$element.removeClass("open")}},t.Message.inherits(t),t.Plugin.create("Message"),t.Plugin.autoload("Message")}(Kube),function(t){t.Sticky=function(e,s){this.namespace="sticky",this.defaults={classname:"fixed",offset:0,callbacks:["fixed","unfixed"]},t.apply(this,arguments),this.start()},t.Sticky.prototype={start:function(){this.offsetTop=this.getOffsetTop(),this.load(),$(window).scroll($.proxy(this.load,this))},getOffsetTop:function(){return this.$element.offset().top},load:function(){return this.isFix()?this.fixed():this.unfixed()},isFix:function(){return $(window).scrollTop()>this.offsetTop+this.opts.offset},fixed:function(){this.$element.addClass(this.opts.classname).css("top",this.opts.offset+"px"),this.callback("fixed")},unfixed:function(){this.$element.removeClass(this.opts.classname).css("top",""),this.callback("unfixed")}},t.Sticky.inherits(t),t.Plugin.create("Sticky"),t.Plugin.autoload("Sticky")}(Kube),function(t){t.Toggleme=function(e,s){this.namespace="toggleme",this.defaults={toggleEvent:"click",target:null,text:"",animationOpen:"slideDown",animationClose:"slideUp",callbacks:["open","opened","close","closed"]},t.apply(this,arguments),this.start()},t.Toggleme.prototype={start:function(){this.hasTarget()&&this.$element.on(this.opts.toggleEvent+"."+this.namespace,$.proxy(this.toggle,this))},stop:function(){this.$element.off("."+this.namespace),this.revertText()},toggle:function(t){this.isOpened()?this.close(t):this.open(t)},open:function(t){t&&t.preventDefault(),this.isOpened()||(this.storeText(),this.callback("open"),this.$target.animation("slideDown",$.proxy(this.onOpened,this)),setTimeout($.proxy(this.replaceText,this),100))},close:function(t){t&&t.preventDefault(),this.isOpened()&&(this.callback("close"),this.$target.animation("slideUp",$.proxy(this.onClosed,this)))},isOpened:function(){return this.$target.hasClass("open")},onOpened:function(){this.$target.addClass("open"),this.callback("opened")},onClosed:function(){this.$target.removeClass("open"),this.revertText(),this.callback("closed")},storeText:function(){this.$element.data("replacement-text",this.$element.html())},revertText:function(){var t=this.$element.data("replacement-text");t&&this.$element.html(t),this.$element.removeData("replacement-text")},replaceText:function(){""!==this.opts.text&&this.$element.html(this.opts.text)}},t.Toggleme.inherits(t),t.Plugin.create("Toggleme"),t.Plugin.autoload("Toggleme")}(Kube),function(t){t.Offcanvas=function(e,s){this.namespace="offcanvas",this.defaults={target:null,push:!0,width:"250px",direction:"left",toggleEvent:"click",clickOutside:!0,animationOpen:"slideInLeft",animationClose:"slideOutLeft",callbacks:["open","opened","close","closed"]},t.apply(this,arguments),this.utils=new t.Utils,this.detect=new t.Detect,this.start()},t.Offcanvas.prototype={start:function(){this.hasTarget()&&(this.buildTargetWidth(),this.buildAnimationDirection(),this.$close=this.getCloseLink(),this.$element.on(this.opts.toggleEvent+"."+this.namespace,$.proxy(this.toggle,this)),this.$target.addClass("offcanvas"))},stop:function(){this.closeAll(),this.$element.off("."+this.namespace),this.$close.off("."+this.namespace),$(document).off("."+this.namespace)},toggle:function(t){this.isOpened()?this.close(t):this.open(t)},buildTargetWidth:function(){this.opts.width=$(window).width()<parseInt(this.opts.width)?"100%":this.opts.width},buildAnimationDirection:function(){"right"===this.opts.direction&&(this.opts.animationOpen="slideInRight",this.opts.animationClose="slideOutRight")},getCloseLink:function(){return this.$target.find(".close")},open:function(t){t&&t.preventDefault(),this.isOpened()||(this.closeAll(),this.callback("open"),this.$target.addClass("offcanvas-"+this.opts.direction),this.$target.css("width",this.opts.width),this.pushBody(),this.$target.animation(this.opts.animationOpen,$.proxy(this.onOpened,this)))},closeAll:function(){var t=$(document).find(".offcanvas");0!==t.length&&(t.each(function(){var t=$(this);t.hasClass("open")&&(t.css("width","").animation("hide"),t.removeClass("open offcanvas-left offcanvas-right"))}),$(document).off("."+this.namespace),$("body").css("left",""))},close:function(t){if(t){var e=$(t.target);if(("A"===e[0].tagName||"BUTTON"===e[0].tagName)&&0!==e.closest(".offcanvas").length&&!e.hasClass("close"))return;t.preventDefault()}this.isOpened()&&(this.utils.enableBodyScroll(),this.callback("close"),this.pullBody(),this.$target.animation(this.opts.animationClose,$.proxy(this.onClosed,this)))},isOpened:function(){return this.$target.hasClass("open")},onOpened:function(){this.opts.clickOutside&&$(document).on("click."+this.namespace,$.proxy(this.close,this)),this.detect.isMobileScreen()&&$("html").addClass("no-scroll"),$(document).on("keyup."+this.namespace,$.proxy(this.handleKeyboard,this)),this.$close.on("click."+this.namespace,$.proxy(this.close,this)),this.utils.disableBodyScroll(),this.$target.addClass("open"),this.callback("opened")},onClosed:function(){this.detect.isMobileScreen()&&$("html").removeClass("no-scroll"),this.$target.css("width","").removeClass("offcanvas-"+this.opts.direction),this.$close.off("."+this.namespace),$(document).off("."+this.namespace),this.$target.removeClass("open"),this.callback("closed")},handleKeyboard:function(t){27===t.which&&this.close()},pullBody:function(){this.opts.push&&$("body").animate({left:0},350,function(){$(this).removeClass("offcanvas-push-body")})},pushBody:function(){if(this.opts.push){var t="left"===this.opts.direction?{left:this.opts.width}:{left:"-"+this.opts.width};$("body").addClass("offcanvas-push-body").animate(t,200)}}},t.Offcanvas.inherits(t),t.Plugin.create("Offcanvas"),t.Plugin.autoload("Offcanvas")}(Kube),function(t){t.Collapse=function(e,s){this.namespace="collapse",this.defaults={target:null,toggle:!0,active:!1,toggleClass:"collapse-toggle",boxClass:"collapse-box",callbacks:["open","opened","close","closed"],hashes:[],currentHash:!1,currentItem:!1},t.apply(this,arguments),this.start()},t.Collapse.prototype={start:function(){this.$items=this.getItems(),this.$items.each($.proxy(this.loadItems,this)),this.$boxes=this.getBoxes(),this.setActiveItem()},getItems:function(){return this.$element.find("."+this.opts.toggleClass)},getBoxes:function(){return this.$element.find("."+this.opts.boxClass)},loadItems:function(t,e){var s=this.getItem(e);s.$el.attr("rel",s.hash),$(s.hash).hasClass("hide")||(this.opts.currentItem=s,this.opts.active=s.hash,s.$el.addClass("active")),s.$el.on("click.collapse",$.proxy(this.toggle,this))},setActiveItem:function(){!1!==this.opts.active&&(this.opts.currentItem=this.getItemBy(this.opts.active),this.opts.active=this.opts.currentItem.hash),!1!==this.opts.currentItem&&(this.addActive(this.opts.currentItem),this.opts.currentItem.$box.removeClass("hide"))},addActive:function(t){t.$box.removeClass("hide").addClass("open"),t.$el.addClass("active"),!1!==t.$caret&&t.$caret.removeClass("down").addClass("up"),!1!==t.$parent&&t.$parent.addClass("active"),this.opts.currentItem=t},removeActive:function(t){t.$box.removeClass("open"),t.$el.removeClass("active"),!1!==t.$caret&&t.$caret.addClass("down").removeClass("up"),!1!==t.$parent&&t.$parent.removeClass("active"),this.opts.currentItem=!1},toggle:function(t){t&&t.preventDefault();var e=$(t.target).closest("."+this.opts.toggleClass).get(0)||t.target,s=this.getItem(e);this.isOpened(s.hash)?this.close(s.hash):this.open(t)},openAll:function(){this.$items.addClass("active"),this.$boxes.addClass("open").removeClass("hide")},open:function(t,e){if(void 0!==t){"object"==typeof t&&t.preventDefault();var s=$(t.target).closest("."+this.opts.toggleClass).get(0)||t.target,i="object"==typeof t?this.getItem(s):this.getItemBy(t);i.$box.hasClass("open")||(this.opts.toggle&&this.closeAll(),this.callback("open",i),this.addActive(i),i.$box.animation("slideDown",$.proxy(this.onOpened,this)))}},onOpened:function(){this.callback("opened",this.opts.currentItem)},closeAll:function(){this.$items.removeClass("active").closest("li").removeClass("active"),this.$boxes.removeClass("open").addClass("hide")},close:function(t){var e=this.getItemBy(t);this.callback("close",e),this.opts.currentItem=e,e.$box.animation("slideUp",$.proxy(this.onClosed,this))},onClosed:function(){var t=this.opts.currentItem;this.removeActive(t),this.callback("closed",t)},isOpened:function(t){return $(t).hasClass("open")},getItem:function(t){var e={};e.$el=$(t),e.hash=e.$el.attr("href"),e.$box=$(e.hash);var s=e.$el.parent();e.$parent="LI"===s[0].tagName&&s;var i=e.$el.find(".caret");return e.$caret=0!==i.length&&i,e},getItemBy:function(t){var e="number"==typeof t?this.$items.eq(t-1):this.$element.find('[rel="'+t+'"]');return this.getItem(e)}},t.Collapse.inherits(t),t.Plugin.create("Collapse"),t.Plugin.autoload("Collapse")}(Kube),function(t){t.Dropdown=function(e,s){this.namespace="dropdown",this.defaults={target:null,toggleEvent:"click",height:!1,width:!1,animationOpen:"slideDown",animationClose:"slideUp",caretUp:!1,callbacks:["open","opened","close","closed"]},t.apply(this,arguments),this.utils=new t.Utils,this.detect=new t.Detect,this.start()},t.Dropdown.prototype={start:function(){this.buildClose(),this.buildCaret(),this.detect.isMobile()&&this.buildMobileAnimation(),this.$target.addClass("hide"),this.$element.on(this.opts.toggleEvent+"."+this.namespace,$.proxy(this.toggle,this))},stop:function(){this.$element.off("."+this.namespace),this.$target.removeClass("open").addClass("hide"),this.disableEvents()},buildMobileAnimation:function(){this.opts.animationOpen="fadeIn",this.opts.animationClose="fadeOut"},buildClose:function(){this.$close=this.$target.find(".close")},buildCaret:function(){this.$caret=this.getCaret(),this.buildCaretPosition()},buildCaretPosition:function(){var t=this.$element.offset().top+this.$element.innerHeight()+this.$target.innerHeight();$(document).height()>t||(this.opts.caretUp=!0,this.$caret.addClass("up"))},getCaret:function(){return this.$element.find(".caret")},toggleCaretOpen:function(){this.opts.caretUp?this.$caret.removeClass("up").addClass("down"):this.$caret.removeClass("down").addClass("up")},toggleCaretClose:function(){this.opts.caretUp?this.$caret.removeClass("down").addClass("up"):this.$caret.removeClass("up").addClass("down")},toggle:function(t){this.isOpened()?this.close(t):this.open(t)},open:function(t){t&&t.preventDefault(),this.callback("open"),$(".dropdown").removeClass("open").addClass("hide"),this.opts.height&&this.$target.css("min-height",this.opts.height+"px"),this.opts.width&&this.$target.width(this.opts.width),this.setPosition(),this.toggleCaretOpen(),this.$target.animation(this.opts.animationOpen,$.proxy(this.onOpened,this))},close:function(t){if(this.isOpened()){if(t){if(this.shouldNotBeClosed(t.target))return;t.preventDefault()}this.utils.enableBodyScroll(),this.callback("close"),this.toggleCaretClose(),this.$target.animation(this.opts.animationClose,$.proxy(this.onClosed,this))}},onClosed:function(){this.$target.removeClass("open"),this.disableEvents(),this.callback("closed")},onOpened:function(){this.$target.addClass("open"),this.enableEvents(),this.callback("opened")},isOpened:function(){return this.$target.hasClass("open")},enableEvents:function(){this.detect.isDesktop()&&this.$target.on("mouseover."+this.namespace,$.proxy(this.utils.disableBodyScroll,this.utils)).on("mouseout."+this.namespace,$.proxy(this.utils.enableBodyScroll,this.utils)),$(document).on("scroll."+this.namespace,$.proxy(this.setPosition,this)),$(window).on("resize."+this.namespace,$.proxy(this.setPosition,this)),$(document).on("click."+this.namespace+" touchstart."+this.namespace,$.proxy(this.close,this)),$(document).on("keydown."+this.namespace,$.proxy(this.handleKeyboard,this)),this.$target.find('[data-action="dropdown-close"]').on("click."+this.namespace,$.proxy(this.close,this))},disableEvents:function(){this.$target.off("."+this.namespace),$(document).off("."+this.namespace),$(window).off("."+this.namespace)},handleKeyboard:function(t){27===t.which&&this.close(t)},shouldNotBeClosed:function(t){return"dropdown-close"!==$(t).attr("data-action")&&t!==this.$close[0]&&0!==$(t).closest(".dropdown").length},isNavigationFixed:function(){return 0!==this.$element.closest(".fixed").length},getPlacement:function(t){return $(document).height()<t?"top":"bottom"},getOffset:function(t){return this.isNavigationFixed()?this.$element.position():this.$element.offset()},getPosition:function(){return this.isNavigationFixed()?"fixed":"absolute"},setPosition:function(){if(this.detect.isMobile())this.$target.addClass("dropdown-mobile");else{var t,e=this.getPosition(),s=this.getOffset(e),i=this.$target.innerHeight(),n=this.$target.innerWidth(),o=this.getPlacement(s.top+i+this.$element.innerHeight()),a=$(window).width()<s.left+n?n-this.$element.innerWidth():0,h=s.left-a;"bottom"===o?(this.isOpened()||this.$caret.removeClass("up").addClass("down"),this.opts.caretUp=!1,t=s.top+this.$element.outerHeight()+1):(this.opts.animationOpen="show",this.opts.animationClose="hide",this.isOpened()||this.$caret.addClass("up").removeClass("down"),this.opts.caretUp=!0,t=s.top-i-1),this.$target.css({position:e,top:t+"px",left:h+"px"})}}},t.Dropdown.inherits(t),t.Plugin.create("Dropdown"),t.Plugin.autoload("Dropdown")}(Kube),function(t){t.Tabs=function(e,s){this.namespace="tabs",this.defaults={equals:!1,active:!1,live:!1,hash:!0,callbacks:["init","next","prev","open","opened","close","closed"]},t.apply(this,arguments),this.start()},t.Tabs.prototype={start:function(){!1!==this.opts.live&&this.buildLiveTabs(),this.tabsCollection=[],this.hashesCollection=[],this.currentHash=[],this.currentItem=!1,this.$items=this.getItems(),this.$items.each($.proxy(this.loadItems,this)),this.$tabs=this.getTabs(),this.currentHash=this.getLocationHash(),this.closeAll(),this.setActiveItem(),this.setItemHeight(),this.callback("init")},getTabs:function(){return $(this.tabsCollection).map(function(){return this.toArray()})},getItems:function(){return this.$element.find("a")},loadItems:function(t,e){var s=this.getItem(e);s.$el.attr("rel",s.hash),this.collectItem(s),s.$parent.hasClass("active")&&(this.currentItem=s,this.opts.active=s.hash),s.$el.on("click.tabs",$.proxy(this.open,this))},collectItem:function(t){this.tabsCollection.push(t.$tab),this.hashesCollection.push(t.hash)},buildLiveTabs:function(){var t=$(this.opts.live);0!==t.length&&(this.$liveTabsList=$("<ul />"),t.each($.proxy(this.buildLiveItem,this)),this.$element.html("").append(this.$liveTabsList))},buildLiveItem:function(t,e){var s=$(e),i=$("<li />"),n=$("<a />"),o=t+1;s.attr("id",this.getLiveItemId(s,o));var a="#"+s.attr("id"),h=this.getLiveItemTitle(s);n.attr("href",a).attr("rel",a).text(h),i.append(n),this.$liveTabsList.append(i)},getLiveItemId:function(t,e){return void 0===t.attr("id")?this.opts.live.replace(".","")+e:t.attr("id")},getLiveItemTitle:function(t){return void 0===t.attr("data-title")?t.attr("id"):t.attr("data-title")},setActiveItem:function(){this.currentHash?(this.currentItem=this.getItemBy(this.currentHash),this.opts.active=this.currentHash):!1===this.opts.active&&(this.currentItem=this.getItem(this.$items.first()),this.opts.active=this.currentItem.hash),this.addActive(this.currentItem)},addActive:function(t){t.$parent.addClass("active"),t.$tab.removeClass("hide").addClass("open"),this.currentItem=t},removeActive:function(t){t.$parent.removeClass("active"),t.$tab.addClass("hide").removeClass("open"),this.currentItem=!1},next:function(t){t&&t.preventDefault();var e=this.getItem(this.fetchElement("next"));this.open(e.hash),this.callback("next",e)},prev:function(t){t&&t.preventDefault();var e=this.getItem(this.fetchElement("prev"));this.open(e.hash),this.callback("prev",e)},fetchElement:function(t){var e;if(!1!==this.currentItem){if(0===(e=this.currentItem.$parent[t]().find("a")).length)return}else e=this.$items[0];return e},open:function(t,e){if(void 0!==t){"object"==typeof t&&t.preventDefault();var s="object"==typeof t?this.getItem(t.target):this.getItemBy(t);this.closeAll(),this.callback("open",s),this.addActive(s),this.pushStateOpen(e,s),this.callback("opened",s)}},pushStateOpen:function(t,e){!1!==t&&!1!==this.opts.hash&&history.pushState(!1,!1,e.hash)},close:function(t){var e=this.getItemBy(t);e.$parent.hasClass("active")&&(this.callback("close",e),this.removeActive(e),this.pushStateClose(),this.callback("closed",e))},pushStateClose:function(){!1!==this.opts.hash&&history.pushState(!1,!1," ")},closeAll:function(){this.$tabs.removeClass("open").addClass("hide"),this.$items.parent().removeClass("active")},getItem:function(t){var e={};return e.$el=$(t),e.hash=e.$el.attr("href"),e.$parent=e.$el.parent(),e.$tab=$(e.hash),e},getItemBy:function(t){var e="number"==typeof t?this.$items.eq(t-1):this.$element.find('[rel="'+t+'"]');return this.getItem(e)},getLocationHash:function(){return!1!==this.opts.hash&&(!!this.isHash()&&top.location.hash)},isHash:function(){return!(""===top.location.hash||-1===$.inArray(top.location.hash,this.hashesCollection))},setItemHeight:function(){if(this.opts.equals){var t=this.getItemMaxHeight()+"px";this.$tabs.css("min-height",t)}},getItemMaxHeight:function(){var t=0;return this.$tabs.each(function(){var e=$(this).height();t=e>t?e:t}),t}},t.Tabs.inherits(t),t.Plugin.create("Tabs"),t.Plugin.autoload("Tabs")}(Kube),function(t){t.modalcurrent=null,t.modalwindow=function(e){var s=t.extend({},e,{show:!0});t("<span />").modal(s)}}(jQuery),function(t){t.Modal=function(e,s){this.namespace="modal",this.defaults={target:null,show:!1,url:!1,header:!1,width:"600px",height:!1,maxHeight:!1,position:"center",overlay:!0,appendForms:!1,appendFields:!1,animationOpen:"show",animationClose:"hide",callbacks:["open","opened","close","closed"]},t.apply(this,arguments),this.utils=new t.Utils,this.detect=new t.Detect,this.start()},t.Modal.prototype={start:function(){this.hasTarget()&&(this.opts.show?this.load():this.$element.on("click."+this.namespace,$.proxy(this.load,this)))},buildModal:function(){this.$modal=this.$target.find(".modal"),this.$header=this.$target.find(".modal-header"),this.$close=this.$target.find(".close"),this.$body=this.$target.find(".modal-body")},buildOverlay:function(){!1!==this.opts.overlay&&(0!==$("#modal-overlay").length?this.$overlay=$("#modal-overlay"):(this.$overlay=$('<div id="modal-overlay">').addClass("hide"),$("body").prepend(this.$overlay)),this.$overlay.addClass("overlay"))},buildHeader:function(){this.opts.header&&this.$header.html(this.opts.header)},load:function(t){this.buildModal(),this.buildOverlay(),this.buildHeader(),this.opts.url?this.buildContent():this.open(t)},open:function(t){t&&t.preventDefault(),this.isOpened()||(this.detect.isMobile()&&(this.opts.width="96%"),this.opts.overlay&&this.$overlay.removeClass("hide"),this.$target.removeClass("hide"),this.$modal.removeClass("hide"),this.enableEvents(),this.findActions(),this.resize(),$(window).on("resize."+this.namespace,$.proxy(this.resize,this)),this.detect.isDesktop()&&this.utils.disableBodyScroll(),this.$modal.find("input[type=text],input[type=url],input[type=email]").on("keydown."+this.namespace,$.proxy(this.handleEnter,this)),this.callback("open"),this.$modal.animation(this.opts.animationOpen,$.proxy(this.onOpened,this)))},close:function(t){if(this.$modal&&this.isOpened()){if(t){if(this.shouldNotBeClosed(t.target))return;t.preventDefault()}this.callback("close"),this.disableEvents(),this.$modal.animation(this.opts.animationClose,$.proxy(this.onClosed,this)),this.opts.overlay&&this.$overlay.animation(this.opts.animationClose)}},onOpened:function(){this.$modal.addClass("open"),this.callback("opened"),$.modalcurrent=this},onClosed:function(){this.callback("closed"),this.$target.addClass("hide"),this.$modal.removeClass("open"),this.detect.isDesktop()&&this.utils.enableBodyScroll(),this.$body.css("height",""),$.modalcurrent=null},isOpened:function(){return this.$modal.hasClass("open")},getData:function(){var e=new t.FormData(this);return e.set(""),e.get()},buildContent:function(){$.ajax({url:this.opts.url+"?"+(new Date).getTime(),cache:!1,type:"post",data:this.getData(),success:$.proxy(function(t){this.$body.html(t),this.open()},this)})},buildWidth:function(){var t=this.opts.width,e="2%",s="2%",i=t.match(/%$/);parseInt(this.opts.width)>$(window).width()&&!i?t="96%":i||(e="16px",s="16px"),this.$modal.css({width:t,"margin-top":e,"margin-bottom":s})},buildPosition:function(){if("center"===this.opts.position){var t=$(window).height(),e=this.$modal.outerHeight(),s=t/2-e/2+"px";this.detect.isMobile()?s="2%":e>t&&(s="16px"),this.$modal.css("margin-top",s)}},buildHeight:function(){var t=$(window).height();if(this.opts.maxHeight){var e=parseInt(this.$body.css("padding-top"))+parseInt(this.$body.css("padding-bottom")),s=parseInt(this.$modal.css("margin-top"))+parseInt(this.$modal.css("margin-bottom")),i=t-this.$header.innerHeight()-e-s;this.$body.height(i)}else!1!==this.opts.height&&this.$body.css("height",this.opts.height);this.$modal.outerHeight()>t&&(this.opts.animationOpen="show",this.opts.animationClose="hide")},resize:function(){this.buildWidth(),this.buildPosition(),this.buildHeight()},enableEvents:function(){this.$close.on("click."+this.namespace,$.proxy(this.close,this)),$(document).on("keyup."+this.namespace,$.proxy(this.handleEscape,this)),this.$target.on("click."+this.namespace,$.proxy(this.close,this))},disableEvents:function(){this.$close.off("."+this.namespace),$(document).off("."+this.namespace),this.$target.off("."+this.namespace),$(window).off("."+this.namespace)},findActions:function(){this.$body.find('[data-action="modal-close"]').on("mousedown."+this.namespace,$.proxy(this.close,this))},setHeader:function(t){this.$header.html(t)},setContent:function(t){this.$body.html(t)},setWidth:function(t){this.opts.width=t,this.resize()},getModal:function(){return this.$modal},getBody:function(){return this.$body},getHeader:function(){return this.$header},handleEnter:function(t){13===t.which&&(t.preventDefault(),this.close(!1))},handleEscape:function(t){return 27!==t.which||this.close(!1)},shouldNotBeClosed:function(t){return"modal-close"!==$(t).attr("data-action")&&t!==this.$close[0]&&0!==$(t).closest(".modal").length}},t.Modal.inherits(t),t.Plugin.create("Modal"),t.Plugin.autoload("Modal")}(Kube);