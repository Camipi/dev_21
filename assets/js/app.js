/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),

/***/ 1:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_js_animate_scroll_dist_animate_scroll_min_js__ = __webpack_require__(14);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_js_animate_scroll_dist_animate_scroll_min_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_js_animate_scroll_dist_animate_scroll_min_js__);


jQuery(document).ready(function ($) {

	window.dataLayer = window.dataLayer || [];
	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'UA-126194309-1');

	// Initialize and add the map
	function initMap() {

		// The location of Uluru
		var uluru = { lat: -25.344, lng: 131.036 };

		// The map, centered at Uluru
		var map = new google.maps.Map(document.getElementById('map'), { zoom: 8, center: uluru });

		// The marker, positioned at Uluru
		var marker = new google.maps.Marker({ position: uluru, map: map });
	}

	$.get("https://jsonip.com", function (data) {

		var url = "https://api.ip2country.info/ip?" + data.ip;
		console.log(url);
		$.get(url, function (result) {
			var text = result.countryName + ' ' + result.countryEmoji;
			$("#country").html(text);
		});
	});

	$(".circulo").click(function () {
		console.log("entra a onclick");

		var options = {
			duration: 600,
			easing: 'easeInOutQuad',
			padding: 300,
			align: 'top',
			onFinish: function onFinish() {}
		};
		new AnimateScroll('#dev21', options);
	});

	$(".circulo2").click(function () {
		console.log("entra a onclick");

		var options = {
			duration: 600,
			easing: 'easeInOutQuad',
			padding: 200,
			align: 'top',
			onFinish: function onFinish() {}
		};
		new AnimateScroll('#servicios-fp', options);
	});
});

/***/ }),

/***/ 14:
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;!function(global,factory){if(true)!(__WEBPACK_AMD_DEFINE_ARRAY__ = [exports], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));else if("undefined"!=typeof exports)factory(exports);else{var mod_exports={};factory(mod_exports),global.AnimateScroll=mod_exports.default}}(this,function(exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}(),AnimateScroll=function(){function AnimateScroll(target,options){!function(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}(this,AnimateScroll),this._target=null,this._padding=0,this._align=this.ALIGN_TOP,this._onFinish=function(){},this._easing=this.EASING_EFFECTS[this.DEFAULT_EASING_EFFECT],this._duration=200,this._configuration(target,options||{}),this._run()}return _createClass(AnimateScroll,[{key:"DEFAULT_EASING_EFFECT",get:function(){return"linear"}},{key:"EASING_EFFECTS",get:function(){return{linear:function(t){return t},easeInQuad:function(t){return Math.pow(t,2)},easeOutQuad:function(t){return t*(2-t)},easeInOutQuad:function(t){return t<.5?2*Math.pow(t,2):(4-2*t)*t-1},easeInCubic:function(t){return Math.pow(t,3)},easeOutCubic:function(t){return--t*Math.pow(t,2)+1},easeInOutCubic:function(t){return t<.5?4*Math.pow(t,3):(t-1)*(2*t-2)*(2*t-2)+1},easeInQuart:function(t){return Math.pow(t,4)},easeOutQuart:function(t){return 1- --t*Math.pow(t,3)},easeInOutQuart:function(t){return t<.5?8*Math.pow(t,4):1-8*--t*Math.pow(t,3)},easeInQuint:function(t){return Math.pow(t,5)},easeOutQuint:function(t){return 1+--t*Math.pow(t,4)},easeInOutQuint:function(t){return t<.5?16*Math.pow(t,5):1+16*--t*Math.pow(t,4)}}}},{key:"ALIGN_CENTER",get:function(){return"center"}},{key:"ALIGN_BOTTOM",get:function(){return"bottom"}},{key:"ALIGN_TOP",get:function(){return"top"}}]),_createClass(AnimateScroll,[{key:"_configuration",value:function(target,options){this._target="string"==typeof target?document.querySelector(target):target,void 0!==options.padding&&options.padding>=0&&(this._padding=options.padding),void 0!==options.align&&(this._align=options.align),"function"==typeof options.onFinish&&(this._onFinish=options.onFinish),void 0!==options.easing&&void 0!==this.EASING_EFFECTS[options.easing]&&(this._easing=this.EASING_EFFECTS[options.easing]),void 0!==options.duration&&options.duration>=0&&(this._duration=options.duration)}},{key:"_run",value:function(){var docElem=document.documentElement,windowHeight=docElem.clientHeight,maxScroll=void 0!==window.scrollMaxY?window.scrollMaxY:docElem.scrollHeight-windowHeight,currentY=window.pageYOffset,targetY=isNaN(this._target)?currentY:this._target,elementBounds=isNaN(this._target)?this._target.getBoundingClientRect():0;this._align===this.ALIGN_CENTER?(targetY+=isNaN(this._target)?elementBounds.top+elementBounds.height/2:this._target,targetY-=windowHeight/2,targetY-=this._padding):this._align===this.ALIGN_BOTTOM?(targetY+=elementBounds.bottom||this._target,targetY-=windowHeight,targetY+=this._padding):(targetY+=elementBounds.top||this._target,targetY-=this._padding);var callback={targetY:targetY=Math.max(Math.min(maxScroll,targetY),0),deltaY:targetY-currentY,duration:this._duration,easing:this._easing,onFinish:this._onFinish,startTime:Date.now(),lastY:currentY,step:function(){if(this.deltaY>0?this.targetY<=this.lastY:this.targetY>=this.lastY)this.onFinish();else{var t=Math.min((Date.now()-this.startTime)/this.duration,1),y=this.targetY-(1-this.easing(t))*this.deltaY;window.scrollTo(window.scrollX,y),1!==t?(this.lastY=window.pageYOffset,window.requestAnimationFrame(this.step.bind(this))):this.onFinish()}}};window.requestAnimationFrame(callback.step.bind(callback))}}]),AnimateScroll}();exports.default=AnimateScroll});

/***/ }),

/***/ 2:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })

/******/ });