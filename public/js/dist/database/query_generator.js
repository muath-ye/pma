"use strict";
(self["webpackChunkphpmyadmin"] = self["webpackChunkphpmyadmin"] || []).push([[7],{

/***/ 33:
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(1);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(17);


/**
 * @fileoverview    function used in QBE for DB
 * @name            Database Operations
 *
 * @requires    jQueryUI
 */
function getFormatsText() {
  return {
    '=': ' = \'%s\'',
    '>': ' > \'%s\'',
    '>=': ' >= \'%s\'',
    '<': ' < \'%s\'',
    '<=': ' <= \'%s\'',
    '!=': ' != \'%s\'',
    'LIKE': ' LIKE \'%s\'',
    'LIKE %...%': ' LIKE \'%%%s%%\'',
    'NOT LIKE': ' NOT LIKE \'%s\'',
    'NOT LIKE %...%': ' NOT LIKE \'%%%s%%\'',
    'BETWEEN': ' BETWEEN \'%s\'',
    'NOT BETWEEN': ' NOT BETWEEN \'%s\'',
    'IS NULL': ' \'%s\' IS NULL',
    'IS NOT NULL': ' \'%s\' IS NOT NULL',
    'REGEXP': ' REGEXP \'%s\'',
    'REGEXP ^...$': ' REGEXP \'^%s$\'',
    'NOT REGEXP': ' NOT REGEXP \'%s\''
  };
}
function generateCondition(criteriaDiv, table) {
  const tableName = table.val();
  const tableAlias = table.siblings('.table_alias').val();
  var query = '`' + (0,_modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__.escapeBacktick)(tableAlias === '' ? tableName : tableAlias) + '`.';
  query += '`' + (0,_modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__.escapeBacktick)(table.siblings('.columnNameSelect').first().val()) + '`';
  if (criteriaDiv.find('.criteria_rhs').first().val() === 'text') {
    var formatsText = getFormatsText();
    query += window.sprintf(formatsText[criteriaDiv.find('.criteria_op').first().val()], (0,_modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__.escapeSingleQuote)(criteriaDiv.find('.rhs_text_val').first().val()));
  } else {
    query += ' ' + criteriaDiv.find('.criteria_op').first().val();
    query += ' `' + (0,_modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__.escapeBacktick)(criteriaDiv.find('.tableNameSelect').first().val()) + '`.';
    query += '`' + (0,_modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__.escapeBacktick)(criteriaDiv.find('.columnNameSelect').first().val()) + '`';
  }
  return query;
}
function generateWhereBlock() {
  var count = 0;
  var query = '';
  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.tableNameSelect').each(function () {
    var criteriaDiv = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).siblings('.jsCriteriaOptions').first();
    var useCriteria = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).siblings('.criteria_col').first();
    if (jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).val() !== '' && useCriteria.prop('checked')) {
      if (count > 0) {
        criteriaDiv.find('input.logical_op').each(function () {
          if (jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).prop('checked')) {
            query += ' ' + jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).val() + ' ';
          }
        });
      }
      query += generateCondition(criteriaDiv, jquery__WEBPACK_IMPORTED_MODULE_0___default()(this));
      count++;
    }
  });
  return query;
}
function generateJoin(newTable, tableAliases, fk) {
  var query = '';
  query += ' \n\tLEFT JOIN ' + '`' + (0,_modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__.escapeBacktick)(newTable) + '`';
  if (tableAliases[fk.TABLE_NAME][0] !== '') {
    query += ' AS `' + (0,_modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__.escapeBacktick)(tableAliases[newTable][0]) + '`';
    query += ' ON `' + (0,_modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__.escapeBacktick)(tableAliases[fk.TABLE_NAME][0]) + '`';
  } else {
    query += ' ON `' + (0,_modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__.escapeBacktick)(fk.TABLE_NAME) + '`';
  }
  query += '.`' + fk.COLUMN_NAME + '`';
  if (tableAliases[fk.REFERENCED_TABLE_NAME][0] !== '') {
    query += ' = `' + (0,_modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__.escapeBacktick)(tableAliases[fk.REFERENCED_TABLE_NAME][0]) + '`';
  } else {
    query += ' = `' + (0,_modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__.escapeBacktick)(fk.REFERENCED_TABLE_NAME) + '`';
  }
  query += '.`' + fk.REFERENCED_COLUMN_NAME + '`';
  return query;
}
function existReference(table, fk, usedTables) {
  var isReferredBy = fk.TABLE_NAME === table && usedTables.includes(fk.REFERENCED_TABLE_NAME);
  var isReferencedBy = fk.REFERENCED_TABLE_NAME === table && usedTables.includes(fk.TABLE_NAME);
  return isReferredBy || isReferencedBy;
}
function tryJoinTable(table, tableAliases, usedTables, foreignKeys) {
  for (var i = 0; i < foreignKeys.length; i++) {
    var fk = foreignKeys[i];
    if (existReference(table, fk, usedTables)) {
      return generateJoin(table, tableAliases, fk);
    }
  }
  return '';
}
function appendTable(table, tableAliases, usedTables, foreignKeys) {
  var query = tryJoinTable(table, tableAliases, usedTables, foreignKeys);
  if (query === '') {
    if (usedTables.length > 0) {
      query += '\n\t, ';
    }
    query += '`' + (0,_modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__.escapeBacktick)(table) + '`';
    if (tableAliases[table][0] !== '') {
      query += ' AS `' + (0,_modules_functions_escape_ts__WEBPACK_IMPORTED_MODULE_1__.escapeBacktick)(tableAliases[table][0]) + '`';
    }
  }
  usedTables.push(table);
  return query;
}
function generateFromBlock(tableAliases, foreignKeys) {
  var usedTables = [];
  var query = '';
  for (var table in tableAliases) {
    if (tableAliases.hasOwnProperty(table)) {
      query += appendTable(table, tableAliases, usedTables, foreignKeys);
    }
  }
  return query;
}
window.generateWhereBlock = generateWhereBlock;
window.generateFromBlock = generateFromBlock;

/***/ }),

/***/ 1:
/***/ (function(module) {

module.exports = jQuery;

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, [41], function() { return __webpack_exec__(33); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=query_generator.js.map