(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else if(typeof exports === 'object')
		exports["EmailGenie"] = factory();
	else
		root["EmailGenie"] = factory();
})(window, function() {
return /******/ (function(modules) { // webpackBootstrap
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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var EmailGenie =
/*#__PURE__*/
function () {
  function EmailGenie(el, settings) {
    _classCallCheck(this, EmailGenie);

    this.dom = {
      el: el
    };

    if (typeof el === 'string') {
      this.dom.el = document.querySelector(el);
    } else if (el.jquery) {
      this.dom.el = el[0];
    }

    if (this.dom.el === null) {
      throw new Error('EmailGenie: No input defined');
    }

    this.originalSettings = {
      id: "emailGenie-".concat(this.uuidv4),
      domains: ['gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com', 'msn.com', 'live.com', 'googlemail.com', 'yahoo.in', 'me.com', 'icloud.com'],
      overrideDomains: false,
      insert: 'afterend'
    };

    if (settings && settings.domains) {
      if (settings.overrideDomains) {
        settings.domains = settings.domains;
      } else {
        settings.domains = [].concat(_toConsumableArray(this.originalSettings.domains), _toConsumableArray(settings.domains));
      }
    }

    this.settings = _objectSpread({}, this.originalSettings, {}, settings);
    this.init();
  }

  _createClass(EmailGenie, [{
    key: "init",
    value: function init() {
      this.createDataList();
      this.bindEvents();
    }
  }, {
    key: "createDataList",
    value: function createDataList() {
      this.dom.el.setAttribute('list', this.settings.id);
      var list = "<datalist id=\"".concat(this.settings.id, "\"></datalist>");

      if (this.settings.insert === 'documentend') {
        document.body.insertAdjacentHTML('beforeend', list);
      } else {
        this.dom.el.insertAdjacentHTML(this.settings.insert, list);
      }

      this.dom.list = document.querySelector("#".concat(this.settings.id));
    }
  }, {
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      this.dom.el.addEventListener('keyup', function (e) {
        return _this.handleKeyup(e);
      });
    }
  }, {
    key: "handleKeyup",
    value: function handleKeyup(e) {
      var _this2 = this;

      if (!this.dom.el.value.includes('@')) return;
      this.user = this.dom.el.value.substring(0, this.dom.el.value.lastIndexOf('@'));
      this.domain = this.dom.el.value.substring(this.dom.el.value.lastIndexOf('@') + 1);
      var suggestions = this.settings.domains.filter(function (domain) {
        return domain.startsWith(_this2.domain);
      });
      var list = '';
      suggestions.slice(0, 6).forEach(function (suggestion) {
        return list += "<option value=\"".concat(_this2.user, "@").concat(suggestion, "\">");
      });
      this.dom.list.innerHTML = list;
    }
  }, {
    key: "uuidv4",
    get: function get() {
      var crypto = window.crypto || window.msCrypto;
      return ([1e7] + -1e3 + -4e3 + -8e3 + -1e11).replace(/[018]/g, function (c) {
        return (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16);
      });
    }
  }]);

  return EmailGenie;
}();

/* harmony default export */ __webpack_exports__["default"] = (EmailGenie);

/***/ })
/******/ ])["default"];
});
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9FbWFpbEdlbmllL3dlYnBhY2svdW5pdmVyc2FsTW9kdWxlRGVmaW5pdGlvbiIsIndlYnBhY2s6Ly9FbWFpbEdlbmllL3dlYnBhY2svYm9vdHN0cmFwIiwid2VicGFjazovL0VtYWlsR2VuaWUvLi9lbWFpbC1nZW5pZS5qcyJdLCJuYW1lcyI6WyJFbWFpbEdlbmllIiwiZWwiLCJzZXR0aW5ncyIsImRvbSIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsImpxdWVyeSIsIkVycm9yIiwib3JpZ2luYWxTZXR0aW5ncyIsImlkIiwidXVpZHY0IiwiZG9tYWlucyIsIm92ZXJyaWRlRG9tYWlucyIsImluc2VydCIsImluaXQiLCJjcmVhdGVEYXRhTGlzdCIsImJpbmRFdmVudHMiLCJzZXRBdHRyaWJ1dGUiLCJsaXN0IiwiYm9keSIsImluc2VydEFkamFjZW50SFRNTCIsImFkZEV2ZW50TGlzdGVuZXIiLCJlIiwiaGFuZGxlS2V5dXAiLCJ2YWx1ZSIsImluY2x1ZGVzIiwidXNlciIsInN1YnN0cmluZyIsImxhc3RJbmRleE9mIiwiZG9tYWluIiwic3VnZ2VzdGlvbnMiLCJmaWx0ZXIiLCJzdGFydHNXaXRoIiwic2xpY2UiLCJmb3JFYWNoIiwic3VnZ2VzdGlvbiIsImlubmVySFRNTCIsImNyeXB0byIsIndpbmRvdyIsIm1zQ3J5cHRvIiwicmVwbGFjZSIsImMiLCJnZXRSYW5kb21WYWx1ZXMiLCJVaW50OEFycmF5IiwidG9TdHJpbmciXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLENBQUM7QUFDRCxPO1FDVkE7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7OztRQUdBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQSww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VCxDQUFja0IsU0FBZCxHQUEwQmxCLElBQTFCO0FBQ0Q7Ozt3QkFFWTtBQUNYLFVBQUltQixNQUFNLEdBQUdDLE1BQU0sQ0FBQ0QsTUFBUCxJQUFpQkMsTUFBTSxDQUFDQyxRQUFyQztBQUNBLGFBQU8sQ0FBQyxDQUFDLEdBQUQsSUFBUSxDQUFDLEdBQVQsR0FBZSxDQUFDLEdBQWhCLEdBQXNCLENBQUMsR0FBdkIsR0FBNkIsQ0FBQyxJQUEvQixFQUFxQ0MsT0FBckMsQ0FBNkMsUUFBN0MsRUFBdUQsVUFBQUMsQ0FBQztBQUFBLGVBQzdELENBQUNBLENBQUMsR0FBR0osTUFBTSxDQUFDSyxlQUFQLENBQXVCLElBQUlDLFVBQUosQ0FBZSxDQUFmLENBQXZCLEVBQTBDLENBQTFDLElBQStDLE1BQU1GLENBQUMsR0FBRyxDQUE5RCxFQUFpRUcsUUFBakUsQ0FBMEUsRUFBMUUsQ0FENkQ7QUFBQSxPQUF4RCxDQUFQO0FBR0Q7Ozs7OztBQUdZNUMseUVBQWYsRSIsImZpbGUiOiJlbWFpbC1nZW5pZS5qcyIsInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbiB3ZWJwYWNrVW5pdmVyc2FsTW9kdWxlRGVmaW5pdGlvbihyb290LCBmYWN0b3J5KSB7XG5cdGlmKHR5cGVvZiBleHBvcnRzID09PSAnb2JqZWN0JyAmJiB0eXBlb2YgbW9kdWxlID09PSAnb2JqZWN0Jylcblx0XHRtb2R1bGUuZXhwb3J0cyA9IGZhY3RvcnkoKTtcblx0ZWxzZSBpZih0eXBlb2YgZGVmaW5lID09PSAnZnVuY3Rpb24nICYmIGRlZmluZS5hbWQpXG5cdFx0ZGVmaW5lKFtdLCBmYWN0b3J5KTtcblx0ZWxzZSBpZih0eXBlb2YgZXhwb3J0cyA9PT0gJ29iamVjdCcpXG5cdFx0ZXhwb3J0c1tcIkVtYWlsR2VuaWVcIl0gPSBmYWN0b3J5KCk7XG5cdGVsc2Vcblx0XHRyb290W1wiRW1haWxHZW5pZVwiXSA9IGZhY3RvcnkoKTtcbn0pKHdpbmRvdywgZnVuY3Rpb24oKSB7XG5yZXR1cm4gIiwiIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7IGVudW1lcmFibGU6IHRydWUsIGdldDogZ2V0dGVyIH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBkZWZpbmUgX19lc01vZHVsZSBvbiBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIgPSBmdW5jdGlvbihleHBvcnRzKSB7XG4gXHRcdGlmKHR5cGVvZiBTeW1ib2wgIT09ICd1bmRlZmluZWQnICYmIFN5bWJvbC50b1N0cmluZ1RhZykge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBTeW1ib2wudG9TdHJpbmdUYWcsIHsgdmFsdWU6ICdNb2R1bGUnIH0pO1xuIFx0XHR9XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCAnX19lc01vZHVsZScsIHsgdmFsdWU6IHRydWUgfSk7XG4gXHR9O1xuXG4gXHQvLyBjcmVhdGUgYSBmYWtlIG5hbWVzcGFjZSBvYmplY3RcbiBcdC8vIG1vZGUgJiAxOiB2YWx1ZSBpcyBhIG1vZHVsZSBpZCwgcmVxdWlyZSBpdFxuIFx0Ly8gbW9kZSAmIDI6IG1lcmdlIGFsbCBwcm9wZXJ0aWVzIG9mIHZhbHVlIGludG8gdGhlIG5zXG4gXHQvLyBtb2RlICYgNDogcmV0dXJuIHZhbHVlIHdoZW4gYWxyZWFkeSBucyBvYmplY3RcbiBcdC8vIG1vZGUgJiA4fDE6IGJlaGF2ZSBsaWtlIHJlcXVpcmVcbiBcdF9fd2VicGFja19yZXF1aXJlX18udCA9IGZ1bmN0aW9uKHZhbHVlLCBtb2RlKSB7XG4gXHRcdGlmKG1vZGUgJiAxKSB2YWx1ZSA9IF9fd2VicGFja19yZXF1aXJlX18odmFsdWUpO1xuIFx0XHRpZihtb2RlICYgOCkgcmV0dXJuIHZhbHVlO1xuIFx0XHRpZigobW9kZSAmIDQpICYmIHR5cGVvZiB2YWx1ZSA9PT0gJ29iamVjdCcgJiYgdmFsdWUgJiYgdmFsdWUuX19lc01vZHVsZSkgcmV0dXJuIHZhbHVlO1xuIFx0XHR2YXIgbnMgPSBPYmplY3QuY3JlYXRlKG51bGwpO1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIobnMpO1xuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkobnMsICdkZWZhdWx0JywgeyBlbnVtZXJhYmxlOiB0cnVlLCB2YWx1ZTogdmFsdWUgfSk7XG4gXHRcdGlmKG1vZGUgJiAyICYmIHR5cGVvZiB2YWx1ZSAhPSAnc3RyaW5nJykgZm9yKHZhciBrZXkgaW4gdmFsdWUpIF9fd2VicGFja19yZXF1aXJlX18uZChucywga2V5LCBmdW5jdGlvbihrZXkpIHsgcmV0dXJuIHZhbHVlW2tleV07IH0uYmluZChudWxsLCBrZXkpKTtcbiBcdFx0cmV0dXJuIG5zO1xuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCJcIjtcblxuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IDApO1xuIiwiY2xhc3MgRW1haWxHZW5pZSB7XG4gIGNvbnN0cnVjdG9yKGVsLCBzZXR0aW5ncykge1xuICAgIHRoaXMuZG9tID0ge1xuICAgICAgZWwsXG4gICAgfTtcblxuICAgIGlmICh0eXBlb2YgZWwgPT09ICdzdHJpbmcnKSB7XG4gICAgICB0aGlzLmRvbS5lbCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoZWwpO1xuICAgIH0gZWxzZSBpZiAoZWwuanF1ZXJ5KSB7XG4gICAgICB0aGlzLmRvbS5lbCA9IGVsWzBdO1xuICAgIH1cblxuICAgIGlmICh0aGlzLmRvbS5lbCA9PT0gbnVsbCkge1xuICAgICAgdGhyb3cgbmV3IEVycm9yKCdFbWFpbEdlbmllOiBObyBpbnB1dCBkZWZpbmVkJyk7XG4gICAgfVxuXG4gICAgdGhpcy5vcmlnaW5hbFNldHRpbmdzID0ge1xuICAgICAgaWQ6IGBlbWFpbEdlbmllLSR7dGhpcy51dWlkdjR9YCxcbiAgICAgIGRvbWFpbnM6IFsnZ21haWwuY29tJywgJ291dGxvb2suY29tJywgJ2hvdG1haWwuY29tJywgJ21zbi5jb20nLCAnbGl2ZS5jb20nLCAnZ29vZ2xlbWFpbC5jb20nLCAneWFob28uY29tJywgJ21lLmNvbScsICdpY2xvdWQuY29tJ10sXG4gICAgICBvdmVycmlkZURvbWFpbnM6IGZhbHNlLFxuICAgICAgaW5zZXJ0OiAnYWZ0ZXJlbmQnXG4gICAgfTtcblxuICAgIGlmIChzZXR0aW5ncyAmJiBzZXR0aW5ncy5kb21haW5zKSB7XG4gICAgICBpZiAoc2V0dGluZ3Mub3ZlcnJpZGVEb21haW5zKSB7XG4gICAgICAgIHNldHRpbmdzLmRvbWFpbnMgPSBzZXR0aW5ncy5kb21haW5zO1xuICAgICAgfSBlbHNlIHtcbiAgICAgICAgc2V0dGluZ3MuZG9tYWlucyA9IFsuLi50aGlzLm9yaWdpbmFsU2V0dGluZ3MuZG9tYWlucywgLi4uc2V0dGluZ3MuZG9tYWluc107XG4gICAgICB9XG4gICAgfVxuXG4gICAgdGhpcy5zZXR0aW5ncyA9IHsgLi4udGhpcy5vcmlnaW5hbFNldHRpbmdzLCAuLi5zZXR0aW5ncyB9O1xuXG4gICAgdGhpcy5pbml0KCk7XG4gIH1cblxuICBpbml0KCkge1xuICAgIHRoaXMuY3JlYXRlRGF0YUxpc3QoKTtcbiAgICB0aGlzLmJpbmRFdmVudHMoKTtcbiAgfVxuXG4gIGNyZWF0ZURhdGFMaXN0KCkge1xuICAgIHRoaXMuZG9tLmVsLnNldEF0dHJpYnV0ZSgnbGlzdCcsIHRoaXMuc2V0dGluZ3MuaWQpO1xuICAgIGNvbnN0IGxpc3QgPSBgPGRhdGFsaXN0IGlkPVwiJHt0aGlzLnNldHRpbmdzLmlkfVwiPjwvZGF0YWxpc3Q+YDtcbiAgICBpZiAodGhpcy5zZXR0aW5ncy5pbnNlcnQgPT09ICdkb2N1bWVudGVuZCcpIHtcbiAgICAgIGRvY3VtZW50LmJvZHkuaW5zZXJ0QWRqYWNlbnRIVE1MKCdiZWZvcmVlbmQnLCBsaXN0KTtcbiAgICB9IGVsc2Uge1xuICAgICAgdGhpcy5kb20uZWwuaW5zZXJ0QWRqYWNlbnRIVE1MKHRoaXMuc2V0dGluZ3MuaW5zZXJ0LCBsaXN0KTtcbiAgICB9XG4gICAgdGhpcy5kb20ubGlzdCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoYCMke3RoaXMuc2V0dGluZ3MuaWR9YCk7XG4gIH1cblxuICBiaW5kRXZlbnRzKCkge1xuICAgIHRoaXMuZG9tLmVsLmFkZEV2ZW50TGlzdGVuZXIoJ2tleXVwJywgZSA9PiB0aGlzLmhhbmRsZUtleXVwKGUpKTtcbiAgfVxuXG4gIGhhbmRsZUtleXVwKGUpIHtcbiAgICBpZiAoIXRoaXMuZG9tLmVsLnZhbHVlLmluY2x1ZGVzKCdAJykpIHJldHVybjtcbiAgICB0aGlzLnVzZXIgPSB0aGlzLmRvbS5lbC52YWx1ZS5zdWJzdHJpbmcoMCwgdGhpcy5kb20uZWwudmFsdWUubGFzdEluZGV4T2YoJ0AnKSk7XG4gICAgdGhpcy5kb21haW4gPSB0aGlzLmRvbS5lbC52YWx1ZS5zdWJzdHJpbmcodGhpcy5kb20uZWwudmFsdWUubGFzdEluZGV4T2YoJ0AnKSArIDEpO1xuICAgIGxldCBzdWdnZXN0aW9ucyA9IHRoaXMuc2V0dGluZ3MuZG9tYWlucy5maWx0ZXIoZG9tYWluID0+IGRvbWFpbi5zdGFydHNXaXRoKHRoaXMuZG9tYWluKSk7XG4gICAgbGV0IGxpc3QgPSAnJztcbiAgICBzdWdnZXN0aW9ucy5zbGljZSgwLCAzKS5mb3JFYWNoKHN1Z2dlc3Rpb24gPT4gbGlzdCArPSBgPG9wdGlvbiB2YWx1ZT1cIiR7dGhpcy51c2VyfUAke3N1Z2dlc3Rpb259XCI+YCk7XG4gICAgdGhpcy5kb20ubGlzdC5pbm5lckhUTUwgPSBsaXN0O1xuICB9XG5cbiAgZ2V0IHV1aWR2NCgpIHtcbiAgICB2YXIgY3J5cHRvID0gd2luZG93LmNyeXB0byB8fCB3aW5kb3cubXNDcnlwdG87XG4gICAgcmV0dXJuIChbMWU3XSArIC0xZTMgKyAtNGUzICsgLThlMyArIC0xZTExKS5yZXBsYWNlKC9bMDE4XS9nLCBjID0+XG4gICAgICAoYyBeIGNyeXB0by5nZXRSYW5kb21WYWx1ZXMobmV3IFVpbnQ4QXJyYXkoMSkpWzBdICYgMTUgPj4gYyAvIDQpLnRvU3RyaW5nKDE2KVxuICAgICk7XG4gIH1cbn1cblxuZXhwb3J0IGRlZmF1bHQgRW1haWxHZW5pZTtcblxuXG4iXSwic291cmNlUm9vdCI6IiJ9