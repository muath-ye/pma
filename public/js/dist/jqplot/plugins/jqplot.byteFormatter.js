"use strict";
(self["webpackChunkphpmyadmin"] = self["webpackChunkphpmyadmin"] || []).push([[21],{

/***/ 54:
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(1);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

/**
 * jqplot formatter for byte values
 *
 * @package phpMyAdmin
 */
(function ($) {
  'use strict';

  var formatByte = function (value, index) {
    var val = value;
    var i = index;
    var units = [window.Messages.strB, window.Messages.strKiB, window.Messages.strMiB, window.Messages.strGiB, window.Messages.strTiB, window.Messages.strPiB, window.Messages.strEiB];
    while (val >= 1024 && i <= 6) {
      val /= 1024;
      i++;
    }
    var format = '%.1f';
    if (Math.floor(val) === val) {
      format = '%.0f';
    }
    return $.jqplot.sprintf(format + ' ' + units[i], val);
  };
  /**
   * The index indicates what unit the incoming data will be in.
   * 0 for bytes, 1 for kilobytes and so on...
   *
   * @param index
   *
   * @return {string}
   */
  $.jqplot.byteFormatter = function (index) {
    var i = index || 0;
    return function (format, value) {
      var val = value;
      if (typeof val === 'number') {
        val = parseFloat(val.toString()) || 0;
        return formatByte(val, i);
      } else {
        return String(val);
      }
    };
  };
})((jquery__WEBPACK_IMPORTED_MODULE_0___default()));

/***/ }),

/***/ 1:
/***/ (function(module) {

module.exports = jQuery;

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, [41], function() { return __webpack_exec__(54); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=jqplot.byteFormatter.js.map