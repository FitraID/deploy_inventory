

  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  <style>
    @charset "UTF-8";
table.dataTable td.dt-control {
  text-align: center;
  cursor: pointer;
}
table.dataTable td.dt-control:before {
  height: 1em;
  width: 1em;
  margin-top: -9px;
  display: inline-block;
  color: white;
  border: 0.15em solid white;
  border-radius: 1em;
  box-shadow: 0 0 0.2em #444;
  box-sizing: content-box;
  text-align: center;
  text-indent: 0 !important;
  font-family: "Courier New", Courier, monospace;
  line-height: 1em;
  content: "+";
  background-color: #31b131;
}
table.dataTable tr.dt-hasChild td.dt-control:before {
  content: "-";
  background-color: #d33333;
}

table.dataTable thead > tr > th.sorting, table.dataTable thead > tr > th.sorting_asc, table.dataTable thead > tr > th.sorting_desc, table.dataTable thead > tr > th.sorting_asc_disabled, table.dataTable thead > tr > th.sorting_desc_disabled,
table.dataTable thead > tr > td.sorting,
table.dataTable thead > tr > td.sorting_asc,
table.dataTable thead > tr > td.sorting_desc,
table.dataTable thead > tr > td.sorting_asc_disabled,
table.dataTable thead > tr > td.sorting_desc_disabled {
  cursor: pointer;
  position: relative;
  padding-right: 26px;
}
table.dataTable thead > tr > th.sorting:before, table.dataTable thead > tr > th.sorting:after, table.dataTable thead > tr > th.sorting_asc:before, table.dataTable thead > tr > th.sorting_asc:after, table.dataTable thead > tr > th.sorting_desc:before, table.dataTable thead > tr > th.sorting_desc:after, table.dataTable thead > tr > th.sorting_asc_disabled:before, table.dataTable thead > tr > th.sorting_asc_disabled:after, table.dataTable thead > tr > th.sorting_desc_disabled:before, table.dataTable thead > tr > th.sorting_desc_disabled:after,
table.dataTable thead > tr > td.sorting:before,
table.dataTable thead > tr > td.sorting:after,
table.dataTable thead > tr > td.sorting_asc:before,
table.dataTable thead > tr > td.sorting_asc:after,
table.dataTable thead > tr > td.sorting_desc:before,
table.dataTable thead > tr > td.sorting_desc:after,
table.dataTable thead > tr > td.sorting_asc_disabled:before,
table.dataTable thead > tr > td.sorting_asc_disabled:after,
table.dataTable thead > tr > td.sorting_desc_disabled:before,
table.dataTable thead > tr > td.sorting_desc_disabled:after {
  position: absolute;
  display: block;
  opacity: 0.125;
  right: 10px;
  line-height: 9px;
  font-size: 0.8em;
}
table.dataTable thead > tr > th.sorting:before, table.dataTable thead > tr > th.sorting_asc:before, table.dataTable thead > tr > th.sorting_desc:before, table.dataTable thead > tr > th.sorting_asc_disabled:before, table.dataTable thead > tr > th.sorting_desc_disabled:before,
table.dataTable thead > tr > td.sorting:before,
table.dataTable thead > tr > td.sorting_asc:before,
table.dataTable thead > tr > td.sorting_desc:before,
table.dataTable thead > tr > td.sorting_asc_disabled:before,
table.dataTable thead > tr > td.sorting_desc_disabled:before {
  bottom: 50%;
  content: "▲";
}
table.dataTable thead > tr > th.sorting:after, table.dataTable thead > tr > th.sorting_asc:after, table.dataTable thead > tr > th.sorting_desc:after, table.dataTable thead > tr > th.sorting_asc_disabled:after, table.dataTable thead > tr > th.sorting_desc_disabled:after,
table.dataTable thead > tr > td.sorting:after,
table.dataTable thead > tr > td.sorting_asc:after,
table.dataTable thead > tr > td.sorting_desc:after,
table.dataTable thead > tr > td.sorting_asc_disabled:after,
table.dataTable thead > tr > td.sorting_desc_disabled:after {
  top: 50%;
  content: "▼";
}
table.dataTable thead > tr > th.sorting_asc:before, table.dataTable thead > tr > th.sorting_desc:after,
table.dataTable thead > tr > td.sorting_asc:before,
table.dataTable thead > tr > td.sorting_desc:after {
  opacity: 0.6;
}
table.dataTable thead > tr > th.sorting_desc_disabled:after, table.dataTable thead > tr > th.sorting_asc_disabled:before,
table.dataTable thead > tr > td.sorting_desc_disabled:after,
table.dataTable thead > tr > td.sorting_asc_disabled:before {
  display: none;
}
table.dataTable thead > tr > th:active,
table.dataTable thead > tr > td:active {
  outline: none;
}

div.dataTables_scrollBody table.dataTable thead > tr > th:before, div.dataTables_scrollBody table.dataTable thead > tr > th:after,
div.dataTables_scrollBody table.dataTable thead > tr > td:before,
div.dataTables_scrollBody table.dataTable thead > tr > td:after {
  display: none;
}

div.dataTables_processing {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 200px;
  margin-left: -100px;
  margin-top: -26px;
  text-align: center;
  padding: 2px;
}
div.dataTables_processing > div:last-child {
  position: relative;
  width: 80px;
  height: 15px;
  margin: 1em auto;
}
div.dataTables_processing > div:last-child > div {
  position: absolute;
  top: 0;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  background: rgba(13, 110, 253, 0.9);
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
}
div.dataTables_processing > div:last-child > div:nth-child(1) {
  left: 8px;
  animation: datatables-loader-1 0.6s infinite;
}
div.dataTables_processing > div:last-child > div:nth-child(2) {
  left: 8px;
  animation: datatables-loader-2 0.6s infinite;
}
div.dataTables_processing > div:last-child > div:nth-child(3) {
  left: 32px;
  animation: datatables-loader-2 0.6s infinite;
}
div.dataTables_processing > div:last-child > div:nth-child(4) {
  left: 56px;
  animation: datatables-loader-3 0.6s infinite;
}

@keyframes datatables-loader-1 {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes datatables-loader-3 {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes datatables-loader-2 {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(24px, 0);
  }
}
table.dataTable.nowrap th, table.dataTable.nowrap td {
  white-space: nowrap;
}
table.dataTable th.dt-left,
table.dataTable td.dt-left {
  text-align: left;
}
table.dataTable th.dt-center,
table.dataTable td.dt-center,
table.dataTable td.dataTables_empty {
  text-align: center;
}
table.dataTable th.dt-right,
table.dataTable td.dt-right {
  text-align: right;
}
table.dataTable th.dt-justify,
table.dataTable td.dt-justify {
  text-align: justify;
}
table.dataTable th.dt-nowrap,
table.dataTable td.dt-nowrap {
  white-space: nowrap;
}
table.dataTable thead th,
table.dataTable thead td,
table.dataTable tfoot th,
table.dataTable tfoot td {
  text-align: left;
}
table.dataTable thead th.dt-head-left,
table.dataTable thead td.dt-head-left,
table.dataTable tfoot th.dt-head-left,
table.dataTable tfoot td.dt-head-left {
  text-align: left;
}
table.dataTable thead th.dt-head-center,
table.dataTable thead td.dt-head-center,
table.dataTable tfoot th.dt-head-center,
table.dataTable tfoot td.dt-head-center {
  text-align: center;
}
table.dataTable thead th.dt-head-right,
table.dataTable thead td.dt-head-right,
table.dataTable tfoot th.dt-head-right,
table.dataTable tfoot td.dt-head-right {
  text-align: right;
}
table.dataTable thead th.dt-head-justify,
table.dataTable thead td.dt-head-justify,
table.dataTable tfoot th.dt-head-justify,
table.dataTable tfoot td.dt-head-justify {
  text-align: justify;
}
table.dataTable thead th.dt-head-nowrap,
table.dataTable thead td.dt-head-nowrap,
table.dataTable tfoot th.dt-head-nowrap,
table.dataTable tfoot td.dt-head-nowrap {
  white-space: nowrap;
}
table.dataTable tbody th.dt-body-left,
table.dataTable tbody td.dt-body-left {
  text-align: left;
}
table.dataTable tbody th.dt-body-center,
table.dataTable tbody td.dt-body-center {
  text-align: center;
}
table.dataTable tbody th.dt-body-right,
table.dataTable tbody td.dt-body-right {
  text-align: right;
}
table.dataTable tbody th.dt-body-justify,
table.dataTable tbody td.dt-body-justify {
  text-align: justify;
}
table.dataTable tbody th.dt-body-nowrap,
table.dataTable tbody td.dt-body-nowrap {
  white-space: nowrap;
}

/*! Bootstrap 5 integration for DataTables
 *
 * ©2020 SpryMedia Ltd, all rights reserved.
 * License: MIT datatables.net/license/mit
 */
table.dataTable {
  clear: both;
  margin-top: 6px !important;
  margin-bottom: 6px !important;
  max-width: none !important;
  border-collapse: separate !important;
  border-spacing: 0;
}
table.dataTable td,
table.dataTable th {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
table.dataTable td.dataTables_empty,
table.dataTable th.dataTables_empty {
  text-align: center;
}
table.dataTable.nowrap th,
table.dataTable.nowrap td {
  white-space: nowrap;
}
table.dataTable.table-striped > tbody > tr:nth-of-type(2n+1) > * {
  box-shadow: none;
}
table.dataTable > tbody > tr {
  background-color: transparent;
}
table.dataTable > tbody > tr.selected > * {
  box-shadow: inset 0 0 0 9999px rgba(13, 110, 253, 0.9);
  color: white;
}
table.dataTable > tbody > tr.selected a {
  color: #090a0b;
}
table.dataTable.table-striped > tbody > tr.odd > * {
  box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.05);
}
table.dataTable.table-striped > tbody > tr.odd.selected > * {
  box-shadow: inset 0 0 0 9999px rgba(13, 110, 253, 0.95);
}
table.dataTable.table-hover > tbody > tr:hover > * {
  box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.075);
}
table.dataTable.table-hover > tbody > tr.selected:hover > * {
  box-shadow: inset 0 0 0 9999px rgba(13, 110, 253, 0.975);
}

div.dataTables_wrapper div.dataTables_length label {
  font-weight: normal;
  text-align: left;
  white-space: nowrap;
}
div.dataTables_wrapper div.dataTables_length select {
  width: auto;
  display: inline-block;
}
div.dataTables_wrapper div.dataTables_filter {
  text-align: right;
}
div.dataTables_wrapper div.dataTables_filter label {
  font-weight: normal;
  white-space: nowrap;
  text-align: left;
}
div.dataTables_wrapper div.dataTables_filter input {
  margin-left: 0.5em;
  display: inline-block;
  width: auto;
}
div.dataTables_wrapper div.dataTables_info {
  padding-top: 0.85em;
}
div.dataTables_wrapper div.dataTables_paginate {
  margin: 0;
  white-space: nowrap;
  text-align: right;
}
div.dataTables_wrapper div.dataTables_paginate ul.pagination {
  margin: 2px 0;
  white-space: nowrap;
  justify-content: flex-end;
}
div.dataTables_wrapper div.dt-row {
  position: relative;
}

div.dataTables_scrollHead table.dataTable {
  margin-bottom: 0 !important;
}

div.dataTables_scrollBody > table {
  border-top: none;
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}
div.dataTables_scrollBody > table > thead .sorting:before,
div.dataTables_scrollBody > table > thead .sorting_asc:before,
div.dataTables_scrollBody > table > thead .sorting_desc:before,
div.dataTables_scrollBody > table > thead .sorting:after,
div.dataTables_scrollBody > table > thead .sorting_asc:after,
div.dataTables_scrollBody > table > thead .sorting_desc:after {
  display: none;
}
div.dataTables_scrollBody > table > tbody tr:first-child th,
div.dataTables_scrollBody > table > tbody tr:first-child td {
  border-top: none;
}

div.dataTables_scrollFoot > .dataTables_scrollFootInner {
  box-sizing: content-box;
}
div.dataTables_scrollFoot > .dataTables_scrollFootInner > table {
  margin-top: 0 !important;
  border-top: none;
}

@media screen and (max-width: 767px) {
  div.dataTables_wrapper div.dataTables_length,
div.dataTables_wrapper div.dataTables_filter,
div.dataTables_wrapper div.dataTables_info,
div.dataTables_wrapper div.dataTables_paginate {
    text-align: center;
  }
  div.dataTables_wrapper div.dataTables_paginate ul.pagination {
    justify-content: center !important;
  }
}
table.dataTable.table-sm > thead > tr > th:not(.sorting_disabled) {
  padding-right: 20px;
}

table.table-bordered.dataTable {
  border-right-width: 0;
}
table.table-bordered.dataTable thead tr:first-child th,
table.table-bordered.dataTable thead tr:first-child td {
  border-top-width: 1px;
}
table.table-bordered.dataTable th,
table.table-bordered.dataTable td {
  border-left-width: 0;
}
table.table-bordered.dataTable th:first-child, table.table-bordered.dataTable th:first-child,
table.table-bordered.dataTable td:first-child,
table.table-bordered.dataTable td:first-child {
  border-left-width: 1px;
}
table.table-bordered.dataTable th:last-child, table.table-bordered.dataTable th:last-child,
table.table-bordered.dataTable td:last-child,
table.table-bordered.dataTable td:last-child {
  border-right-width: 1px;
}
table.table-bordered.dataTable th,
table.table-bordered.dataTable td {
  border-bottom-width: 1px;
}

div.dataTables_scrollHead table.table-bordered {
  border-bottom-width: 0;
}

div.table-responsive > div.dataTables_wrapper > div.row {
  margin: 0;
}
div.table-responsive > div.dataTables_wrapper > div.row > div[class^=col-]:first-child {
  padding-left: 0;
}
div.table-responsive > div.dataTables_wrapper > div.row > div[class^=col-]:last-child {
  padding-right: 0;
}

  </style>
<style>
  @charset "UTF-8";
/*
* NobleUI - Laravel Admin Dashboard Template v2.2
* Copyright © 2023 NobleUI
* Licensed under ThemeForest License
*/
:root {
  --bs-blue: #0d6efd;
  --bs-indigo: #6610f2;
  --bs-purple: #6f42c1;
  --bs-pink: #d63384;
  --bs-red: #dc3545;
  --bs-orange: #fd7e14;
  --bs-yellow: #ffc107;
  --bs-green: #198754;
  --bs-teal: #20c997;
  --bs-cyan: #0dcaf0;
  --bs-black: #000;
  --bs-white: #fff;
  --bs-gray: #7987a1;
  --bs-gray-dark: #212a3a;
  --bs-gray-100: #f8f9fa;
  --bs-gray-200: #e9ecef;
  --bs-gray-300: #dee2e6;
  --bs-gray-400: #ced4da;
  --bs-gray-500: #adb5bd;
  --bs-gray-600: #7987a1;
  --bs-gray-700: #495057;
  --bs-gray-800: #212a3a;
  --bs-gray-900: #060c17;
  --bs-primary: #6571ff;
  --bs-secondary: #7987a1;
  --bs-success: #05a34a;
  --bs-info: #66d1d1;
  --bs-warning: #fbbc06;
  --bs-danger: #ff3366;
  --bs-light: #e9ecef;
  --bs-dark: #060c17;
  --bs-primary-rgb: 101, 113, 255;
  --bs-secondary-rgb: 121, 135, 161;
  --bs-success-rgb: 5, 163, 74;
  --bs-info-rgb: 102, 209, 209;
  --bs-warning-rgb: 251, 188, 6;
  --bs-danger-rgb: 255, 51, 102;
  --bs-light-rgb: 233, 236, 239;
  --bs-dark-rgb: 6, 12, 23;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-body-color-rgb: 0, 0, 0;
  --bs-body-bg-rgb: 249, 250, 251;
  --bs-font-sans-serif: "Roboto", Helvetica, sans-serif;
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 0.875rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.5;
  --bs-body-color: #000;
  --bs-body-bg: #f9fafb;
  --bs-border-width: 1px;
  --bs-border-style: solid;
  --bs-border-color: #e9ecef;
  --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
  --bs-border-radius: 0.25rem;
  --bs-border-radius-sm: 0.25rem;
  --bs-border-radius-lg: 0.5rem;
  --bs-border-radius-xl: 1rem;
  --bs-border-radius-2xl: 2rem;
  --bs-border-radius-pill: 50rem;
  --bs-link-color: #6571ff;
  --bs-link-hover-color: #515acc;
  --bs-code-color: #d63384;
  --bs-highlight-bg: #fff3cd;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}

body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

hr {
  margin: 1rem 0;
  color: inherit;
  border: 0;
  border-top: 1px solid;
  opacity: 0.1;
}

h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
  margin-top: 0;
  margin-bottom: 0;
  font-weight: 500;
  line-height: 1.2;
}

h1, .h1 {
  font-size: calc(1.375rem + 1.5vw);
}
@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2.5rem;
  }
}

h2, .h2 {
  font-size: calc(1.325rem + 0.9vw);
}
@media (min-width: 1200px) {
  h2, .h2 {
    font-size: 2rem;
  }
}

h3, .h3 {
  font-size: calc(1.275rem + 0.3vw);
}
@media (min-width: 1200px) {
  h3, .h3 {
    font-size: 1.5rem;
  }
}

h4, .h4 {
  font-size: 1.25rem;
}

h5, .h5 {
  font-size: 1rem;
}

h6, .h6 {
  font-size: 0.875rem;
}

p {
  margin-top: 0;
  margin-bottom: 0;
}

abbr[title] {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
  cursor: help;
  -webkit-text-decoration-skip-ink: none;
          text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul {
  padding-left: 2rem;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 500;
}

dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: 700;
}

small, .small {
  font-size: 0.875em;
}

mark, .mark {
  padding: 0.1875em;
  background-color: var(--bs-highlight-bg);
}

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

a {
  color: var(--bs-link-color);
  text-decoration: none;
}
a:hover {
  color: var(--bs-link-hover-color);
}

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
}

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875em;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

code {
  font-size: 0.875em;
  color: var(--bs-code-color);
  word-wrap: break-word;
}
a > code {
  color: inherit;
}

kbd {
  padding: 0.1875rem 0.375rem;
  font-size: 0.875em;
  color: var(--bs-body-bg);
  background-color: var(--bs-body-color);
  border-radius: 0.25rem;
}
kbd kbd {
  padding: 0;
  font-size: 1em;
}

figure {
  margin: 0 0 1rem;
}

img,
svg {
  vertical-align: middle;
}

table {
  caption-side: bottom;
  border-collapse: collapse;
}

caption {
  padding-top: 0.85rem;
  padding-bottom: 0.85rem;
  color: #7987a1;
  text-align: left;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
select {
  text-transform: none;
}

[role=button] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}
select:disabled {
  opacity: 1;
}

[list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
  display: none !important;
}

button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}
button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}
legend + * {
  clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}

::-webkit-inner-spin-button {
  height: auto;
}

[type=search] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
  padding: 0;
}

::file-selector-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

iframe {
  border: 0;
}

summary {
  display: list-item;
  cursor: pointer;
}

progress {
  vertical-align: baseline;
}

[hidden] {
  display: none !important;
}

.lead {
  font-size: 1.09375rem;
  font-weight: 300;
}

.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-1 {
    font-size: 5rem;
  }
}

.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-2 {
    font-size: 4.5rem;
  }
}

.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-3 {
    font-size: 4rem;
  }
}

.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-4 {
    font-size: 3.5rem;
  }
}

.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-5 {
    font-size: 3rem;
  }
}

.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-6 {
    font-size: 2.5rem;
  }
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 0.875em;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.09375rem;
}
.blockquote > :last-child {
  margin-bottom: 0;
}

.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.875em;
  color: #7987a1;
}
.blockquote-footer::before {
  content: "— ";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #f9fafb;
  border: 1px solid var(--bs-border-color);
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 0.875em;
  color: #7987a1;
}

.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}
@media (min-width: 1400px) {
  .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1320px;
  }
}
.row {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-0.5 * var(--bs-gutter-x));
  margin-left: calc(-0.5 * var(--bs-gutter-x));
}
.row > * {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-top: var(--bs-gutter-y);
}

.col {
  flex: 1 0 0%;
}

.row-cols-auto > * {
  flex: 0 0 auto;
  width: auto;
}

.row-cols-1 > * {
  flex: 0 0 auto;
  width: 100%;
}

.row-cols-2 > * {
  flex: 0 0 auto;
  width: 50%;
}

.row-cols-3 > * {
  flex: 0 0 auto;
  width: 33.3333333333%;
}

.row-cols-4 > * {
  flex: 0 0 auto;
  width: 25%;
}

.row-cols-5 > * {
  flex: 0 0 auto;
  width: 20%;
}

.row-cols-6 > * {
  flex: 0 0 auto;
  width: 16.6666666667%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
}

.col-1 {
  flex: 0 0 auto;
  width: 8.33333333%;
}

.col-2 {
  flex: 0 0 auto;
  width: 16.66666667%;
}

.col-3 {
  flex: 0 0 auto;
  width: 25%;
}

.col-4 {
  flex: 0 0 auto;
  width: 33.33333333%;
}

.col-5 {
  flex: 0 0 auto;
  width: 41.66666667%;
}

.col-6 {
  flex: 0 0 auto;
  width: 50%;
}

.col-7 {
  flex: 0 0 auto;
  width: 58.33333333%;
}

.col-8 {
  flex: 0 0 auto;
  width: 66.66666667%;
}

.col-9 {
  flex: 0 0 auto;
  width: 75%;
}

.col-10 {
  flex: 0 0 auto;
  width: 83.33333333%;
}

.col-11 {
  flex: 0 0 auto;
  width: 91.66666667%;
}

.col-12 {
  flex: 0 0 auto;
  width: 100%;
}

.offset-1 {
  margin-left: 8.33333333%;
}

.offset-2 {
  margin-left: 16.66666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333333%;
}

.offset-5 {
  margin-left: 41.66666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333333%;
}

.offset-8 {
  margin-left: 66.66666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333333%;
}

.offset-11 {
  margin-left: 91.66666667%;
}

.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}

.g-0,
.gy-0 {
  --bs-gutter-y: 0;
}

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem;
}

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem;
}

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem;
}

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem;
}

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem;
}

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem;
}

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem;
}

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem;
}

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem;
}

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem;
}

.g-6,
.gx-6 {
  --bs-gutter-x: 4.5rem;
}

.g-6,
.gy-6 {
  --bs-gutter-y: 4.5rem;
}

.g-7,
.gx-7 {
  --bs-gutter-x: 6rem;
}

.g-7,
.gy-7 {
  --bs-gutter-y: 6rem;
}

@media (min-width: 576px) {
  .col-sm {
    flex: 1 0 0%;
  }
  .row-cols-sm-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-sm-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-sm-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-sm-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-sm-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-sm-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-sm-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-sm-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-sm-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-sm-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333333%;
  }
  .offset-sm-2 {
    margin-left: 16.66666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333333%;
  }
  .offset-sm-5 {
    margin-left: 41.66666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333333%;
  }
  .offset-sm-8 {
    margin-left: 66.66666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333333%;
  }
  .offset-sm-11 {
    margin-left: 91.66666667%;
  }
  .g-sm-0,
  .gx-sm-0 {
    --bs-gutter-x: 0;
  }
  .g-sm-0,
  .gy-sm-0 {
    --bs-gutter-y: 0;
  }
  .g-sm-1,
  .gx-sm-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-sm-1,
  .gy-sm-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-sm-2,
  .gx-sm-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-sm-2,
  .gy-sm-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-sm-3,
  .gx-sm-3 {
    --bs-gutter-x: 1rem;
  }
  .g-sm-3,
  .gy-sm-3 {
    --bs-gutter-y: 1rem;
  }
  .g-sm-4,
  .gx-sm-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-sm-4,
  .gy-sm-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-sm-5,
  .gx-sm-5 {
    --bs-gutter-x: 3rem;
  }
  .g-sm-5,
  .gy-sm-5 {
    --bs-gutter-y: 3rem;
  }
  .g-sm-6,
  .gx-sm-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-sm-6,
  .gy-sm-6 {
    --bs-gutter-y: 4.5rem;
  }
  .g-sm-7,
  .gx-sm-7 {
    --bs-gutter-x: 6rem;
  }
  .g-sm-7,
  .gy-sm-7 {
    --bs-gutter-y: 6rem;
  }
}
@media (min-width: 768px) {
  .col-md {
    flex: 1 0 0%;
  }
  .row-cols-md-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-md-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-md-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-md-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-md-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-md-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-md-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-md-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-md-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-md-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-md-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-md-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-md-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-md-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-md-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-md-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-md-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-md-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-md-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333333%;
  }
  .offset-md-2 {
    margin-left: 16.66666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333333%;
  }
  .offset-md-5 {
    margin-left: 41.66666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333333%;
  }
  .offset-md-8 {
    margin-left: 66.66666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333333%;
  }
  .offset-md-11 {
    margin-left: 91.66666667%;
  }
  .g-md-0,
  .gx-md-0 {
    --bs-gutter-x: 0;
  }
  .g-md-0,
  .gy-md-0 {
    --bs-gutter-y: 0;
  }
  .g-md-1,
  .gx-md-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-md-1,
  .gy-md-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-md-2,
  .gx-md-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-md-2,
  .gy-md-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-md-3,
  .gx-md-3 {
    --bs-gutter-x: 1rem;
  }
  .g-md-3,
  .gy-md-3 {
    --bs-gutter-y: 1rem;
  }
  .g-md-4,
  .gx-md-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-md-4,
  .gy-md-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-md-5,
  .gx-md-5 {
    --bs-gutter-x: 3rem;
  }
  .g-md-5,
  .gy-md-5 {
    --bs-gutter-y: 3rem;
  }
  .g-md-6,
  .gx-md-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-md-6,
  .gy-md-6 {
    --bs-gutter-y: 4.5rem;
  }
  .g-md-7,
  .gx-md-7 {
    --bs-gutter-x: 6rem;
  }
  .g-md-7,
  .gy-md-7 {
    --bs-gutter-y: 6rem;
  }
}
@media (min-width: 992px) {
  .col-lg {
    flex: 1 0 0%;
  }
  .row-cols-lg-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-lg-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-lg-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-lg-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-lg-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-lg-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-lg-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-lg-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-lg-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-lg-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-lg-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-lg-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-lg-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-lg-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-lg-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333333%;
  }
  .offset-lg-2 {
    margin-left: 16.66666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333333%;
  }
  .offset-lg-5 {
    margin-left: 41.66666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333333%;
  }
  .offset-lg-8 {
    margin-left: 66.66666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333333%;
  }
  .offset-lg-11 {
    margin-left: 91.66666667%;
  }
  .g-lg-0,
  .gx-lg-0 {
    --bs-gutter-x: 0;
  }
  .g-lg-0,
  .gy-lg-0 {
    --bs-gutter-y: 0;
  }
  .g-lg-1,
  .gx-lg-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-lg-1,
  .gy-lg-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-lg-2,
  .gx-lg-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-lg-2,
  .gy-lg-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-lg-3,
  .gx-lg-3 {
    --bs-gutter-x: 1rem;
  }
  .g-lg-3,
  .gy-lg-3 {
    --bs-gutter-y: 1rem;
  }
  .g-lg-4,
  .gx-lg-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-lg-4,
  .gy-lg-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-lg-5,
  .gx-lg-5 {
    --bs-gutter-x: 3rem;
  }
  .g-lg-5,
  .gy-lg-5 {
    --bs-gutter-y: 3rem;
  }
  .g-lg-6,
  .gx-lg-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-lg-6,
  .gy-lg-6 {
    --bs-gutter-y: 4.5rem;
  }
  .g-lg-7,
  .gx-lg-7 {
    --bs-gutter-x: 6rem;
  }
  .g-lg-7,
  .gy-lg-7 {
    --bs-gutter-y: 6rem;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    flex: 1 0 0%;
  }
  .row-cols-xl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xl-11 {
    margin-left: 91.66666667%;
  }
  .g-xl-0,
  .gx-xl-0 {
    --bs-gutter-x: 0;
  }
  .g-xl-0,
  .gy-xl-0 {
    --bs-gutter-y: 0;
  }
  .g-xl-1,
  .gx-xl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xl-1,
  .gy-xl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xl-2,
  .gx-xl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xl-2,
  .gy-xl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xl-3,
  .gx-xl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xl-3,
  .gy-xl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xl-4,
  .gx-xl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xl-4,
  .gy-xl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xl-5,
  .gx-xl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xl-5,
  .gy-xl-5 {
    --bs-gutter-y: 3rem;
  }
  .g-xl-6,
  .gx-xl-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-xl-6,
  .gy-xl-6 {
    --bs-gutter-y: 4.5rem;
  }
  .g-xl-7,
  .gx-xl-7 {
    --bs-gutter-x: 6rem;
  }
  .g-xl-7,
  .gy-xl-7 {
    --bs-gutter-y: 6rem;
  }
}
@media (min-width: 1400px) {
  .col-xxl {
    flex: 1 0 0%;
  }
  .row-cols-xxl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xxl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xxl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xxl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xxl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xxl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xxl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xxl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xxl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xxl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xxl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xxl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xxl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xxl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xxl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xxl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xxl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xxl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xxl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xxl-0 {
    margin-left: 0;
  }
  .offset-xxl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xxl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xxl-3 {
    margin-left: 25%;
  }
  .offset-xxl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xxl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xxl-6 {
    margin-left: 50%;
  }
  .offset-xxl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xxl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xxl-9 {
    margin-left: 75%;
  }
  .offset-xxl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xxl-11 {
    margin-left: 91.66666667%;
  }
  .g-xxl-0,
  .gx-xxl-0 {
    --bs-gutter-x: 0;
  }
  .g-xxl-0,
  .gy-xxl-0 {
    --bs-gutter-y: 0;
  }
  .g-xxl-1,
  .gx-xxl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xxl-1,
  .gy-xxl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xxl-2,
  .gx-xxl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xxl-2,
  .gy-xxl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xxl-3,
  .gx-xxl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xxl-3,
  .gy-xxl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xxl-4,
  .gx-xxl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xxl-4,
  .gy-xxl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xxl-5,
  .gx-xxl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xxl-5,
  .gy-xxl-5 {
    --bs-gutter-y: 3rem;
  }
  .g-xxl-6,
  .gx-xxl-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-xxl-6,
  .gy-xxl-6 {
    --bs-gutter-y: 4.5rem;
  }
  .g-xxl-7,
  .gx-xxl-7 {
    --bs-gutter-x: 6rem;
  }
  .g-xxl-7,
  .gy-xxl-7 {
    --bs-gutter-y: 6rem;
  }
}
.table {
  --bs-table-color: var(--bs-body-color);
  --bs-table-bg: transparent;
  --bs-table-border-color: var(--bs-border-color);
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: var(--bs-body-color);
  --bs-table-striped-bg: #e9ecef;
  --bs-table-active-color: var(--bs-body-color);
  --bs-table-active-bg: #dee2e6;
  --bs-table-hover-color: var(--bs-body-color);
  --bs-table-hover-bg: #e9ecef;
  width: 100%;
  margin-bottom: 1rem;
  color: var(--bs-table-color);
  vertical-align: top;
  border-color: var(--bs-table-border-color);
}
.table > :not(caption) > * > * {
  padding: 0.85rem 0.85rem;
  background-color: var(--bs-table-bg);
  border-bottom-width: 1px;
  box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}
.table > tbody {
  vertical-align: inherit;
}
.table > thead {
  vertical-align: bottom;
}

.table-group-divider {
  border-top: 2px solid #e9ecef;
}

.caption-top {
  caption-side: top;
}

.table-sm > :not(caption) > * > * {
  padding: 0.55rem 0.55rem;
}

.table-bordered > :not(caption) > * {
  border-width: 1px 0;
}
.table-bordered > :not(caption) > * > * {
  border-width: 0 1px;
}

.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0;
}
.table-borderless > :not(:first-child) {
  border-top-width: 0;
}

.table-striped > tbody > tr:nth-of-type(odd) > * {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color);
}

.table-striped-columns > :not(caption) > tr > :nth-child(even) {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color);
}

.table-active {
  --bs-table-accent-bg: var(--bs-table-active-bg);
  color: var(--bs-table-active-color);
}

.table-hover > tbody > tr:hover > * {
  --bs-table-accent-bg: var(--bs-table-hover-bg);
  color: var(--bs-table-hover-color);
}

.table-primary {
  --bs-table-color: #000;
  --bs-table-bg: #e0e3ff;
  --bs-table-border-color: #cacce6;
  --bs-table-striped-bg: #d5d8f2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #cacce6;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #cfd2ec;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-secondary {
  --bs-table-color: #000;
  --bs-table-bg: #e4e7ec;
  --bs-table-border-color: #cdd0d4;
  --bs-table-striped-bg: #d9dbe0;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #cdd0d4;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #d3d6da;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-success {
  --bs-table-color: #000;
  --bs-table-bg: #cdeddb;
  --bs-table-border-color: #b9d5c5;
  --bs-table-striped-bg: #c3e1d0;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #b9d5c5;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bedbcb;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-info {
  --bs-table-color: #000;
  --bs-table-bg: #e0f6f6;
  --bs-table-border-color: #cadddd;
  --bs-table-striped-bg: #d5eaea;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #cadddd;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #cfe4e4;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-warning {
  --bs-table-color: #000;
  --bs-table-bg: #fef2cd;
  --bs-table-border-color: #e5dab9;
  --bs-table-striped-bg: #f1e6c3;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e5dab9;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #ebe0be;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-danger {
  --bs-table-color: #000;
  --bs-table-bg: #ffd6e0;
  --bs-table-border-color: #e6c1ca;
  --bs-table-striped-bg: #f2cbd5;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e6c1ca;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #ecc6cf;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-light {
  --bs-table-color: #000;
  --bs-table-bg: #e9ecef;
  --bs-table-border-color: #d2d4d7;
  --bs-table-striped-bg: #dde0e3;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #d2d4d7;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #d8dadd;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-dark {
  --bs-table-color: #fff;
  --bs-table-bg: #060c17;
  --bs-table-border-color: #1f242e;
  --bs-table-striped-bg: #121823;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #1f242e;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #191e28;
  --bs-table-hover-color: #fff;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
.form-label {
  margin-bottom: 0.5rem;
}

.col-form-label {
  padding-top: calc(0.469rem + 1px);
  padding-bottom: calc(0.469rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1rem;
}

.col-form-label-sm {
  padding-top: calc(0.391rem + 1px);
  padding-bottom: calc(0.391rem + 1px);
  font-size: 0.812rem;
}

.form-text {
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #7987a1;
}

.form-control, .typeahead.tt-input,
.typeahead.tt-hint, .select2-container--default .select2-search--dropdown .select2-search__field {
  display: block;
  width: 100%;
  padding: 0.469rem 0.8rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  color: #000;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #e9ecef;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control, .typeahead.tt-input,
  .typeahead.tt-hint, .select2-container--default .select2-search--dropdown .select2-search__field {
    transition: none;
  }
}
.form-control[type=file], [type=file].typeahead.tt-input,
[type=file].typeahead.tt-hint, .select2-container--default .select2-search--dropdown [type=file].select2-search__field {
  overflow: hidden;
}
.form-control[type=file]:not(:disabled):not([readonly]), [type=file].typeahead.tt-input:not(:disabled):not([readonly]),
[type=file].typeahead.tt-hint:not(:disabled):not([readonly]), .select2-container--default .select2-search--dropdown [type=file].select2-search__field:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control:focus, .typeahead.tt-input:focus,
.typeahead.tt-hint:focus, .select2-container--default .select2-search--dropdown .select2-search__field:focus {
  color: #000;
  background-color: #fff;
  border-color: #ced4da;
  outline: 0;
  box-shadow: none;
}
.form-control::-webkit-date-and-time-value, .typeahead.tt-input::-webkit-date-and-time-value,
.typeahead.tt-hint::-webkit-date-and-time-value, .select2-container--default .select2-search--dropdown .select2-search__field::-webkit-date-and-time-value {
  height: 1.5em;
}
.form-control::-moz-placeholder, .typeahead.tt-input::-moz-placeholder, .typeahead.tt-hint::-moz-placeholder, .select2-container--default .select2-search--dropdown .select2-search__field::-moz-placeholder {
  color: #adb5bd;
  opacity: 1;
}
.form-control::placeholder, .typeahead.tt-input::placeholder,
.typeahead.tt-hint::placeholder, .select2-container--default .select2-search--dropdown .select2-search__field::placeholder {
  color: #adb5bd;
  opacity: 1;
}
.form-control:disabled, .typeahead.tt-input:disabled,
.typeahead.tt-hint:disabled, .select2-container--default .select2-search--dropdown .select2-search__field:disabled {
  background-color: #e9ecef;
  opacity: 1;
}
.form-control::file-selector-button, .typeahead.tt-input::file-selector-button,
.typeahead.tt-hint::file-selector-button, .select2-container--default .select2-search--dropdown .select2-search__field::file-selector-button {
  padding: 0.469rem 0.8rem;
  margin: -0.469rem -0.8rem;
  -webkit-margin-end: 0.8rem;
          margin-inline-end: 0.8rem;
  color: #000;
  background-color: #f8f9fa;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control::file-selector-button, .typeahead.tt-input::file-selector-button,
  .typeahead.tt-hint::file-selector-button, .select2-container--default .select2-search--dropdown .select2-search__field::file-selector-button {
    transition: none;
  }
}
.form-control:hover:not(:disabled):not([readonly])::file-selector-button, .typeahead.tt-input:hover:not(:disabled):not([readonly])::file-selector-button,
.typeahead.tt-hint:hover:not(:disabled):not([readonly])::file-selector-button, .select2-container--default .select2-search--dropdown .select2-search__field:hover:not(:disabled):not([readonly])::file-selector-button {
  background-color: #ecedee;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.469rem 0;
  margin-bottom: 0;
  line-height: 1.5;
  color: #000;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}
.form-control-plaintext:focus {
  outline: 0;
}
.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  min-height: calc(1.5em + 0.782rem + 2px);
  padding: 0.391rem 0.8rem;
  font-size: 0.812rem;
  border-radius: 0.25rem;
}
.form-control-sm::file-selector-button {
  padding: 0.391rem 0.8rem;
  margin: -0.391rem -0.8rem;
  -webkit-margin-end: 0.8rem;
          margin-inline-end: 0.8rem;
}

.form-control-lg {
  min-height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 0.8rem;
  font-size: 1rem;
  border-radius: 0.25rem;
}
.form-control-lg::file-selector-button {
  padding: 0.5rem 0.8rem;
  margin: -0.5rem -0.8rem;
  -webkit-margin-end: 0.8rem;
          margin-inline-end: 0.8rem;
}

textarea.form-control, textarea.typeahead.tt-input,
textarea.typeahead.tt-hint, .select2-container--default .select2-search--dropdown textarea.select2-search__field {
  min-height: calc(1.5em + 0.938rem + 2px);
}
textarea.form-control-sm {
  min-height: calc(1.5em + 0.782rem + 2px);
}
textarea.form-control-lg {
  min-height: calc(1.5em + 1rem + 2px);
}

.form-control-color {
  width: 3rem;
  height: calc(1.5em + 0.938rem + 2px);
  padding: 0.469rem;
}
.form-control-color:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control-color::-moz-color-swatch {
  border: 0 !important;
  border-radius: 0.25rem;
}
.form-control-color::-webkit-color-swatch {
  border-radius: 0.25rem;
}
.form-control-color.form-control-sm {
  height: calc(1.5em + 0.782rem + 2px);
}
.form-control-color.form-control-lg {
  height: calc(1.5em + 1rem + 2px);
}

.form-select {
  display: block;
  width: 100%;
  padding: 0.469rem 2.4rem 0.469rem 0.8rem;
  -moz-padding-start: calc(0.8rem - 3px);
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  color: #000;
  background-color: #fff;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23212a3a' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.8rem center;
  background-size: 16px 12px;
  border: 1px solid #e9ecef;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-select {
    transition: none;
  }
}
.form-select:focus {
  border-color: #ced4da;
  outline: 0;
  box-shadow: 0 0 0 0 rgba(101, 113, 255, 0.25);
}
.form-select[multiple], .form-select[size]:not([size="1"]) {
  padding-right: 0.8rem;
  background-image: none;
}
.form-select:disabled {
  background-color: #e9ecef;
}
.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}

.form-select-sm {
  padding-top: 0.391rem;
  padding-bottom: 0.391rem;
  padding-left: 0.8rem;
  font-size: 0.812rem;
  border-radius: 0.25rem;
}

.form-select-lg {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 0.8rem;
  font-size: 1rem;
  border-radius: 0.25rem;
}

.form-check {
  display: block;
  min-height: 1.3125rem;
  padding-left: 1.8em;
  margin-bottom: 0.125rem;
}
.form-check .form-check-input {
  float: left;
  margin-left: -1.8em;
}

.form-check-reverse {
  padding-right: 1.8em;
  padding-left: 0;
  text-align: right;
}
.form-check-reverse .form-check-input {
  float: right;
  margin-right: -1.8em;
  margin-left: 0;
}

.form-check-input {
  width: 1.3em;
  height: 1.3em;
  margin-top: 0.1em;
  vertical-align: top;
  background-color: #fff;
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: 1px solid rgba(0, 0, 0, 0.25);
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  -webkit-print-color-adjust: exact;
          print-color-adjust: exact;
}
.form-check-input[type=checkbox] {
  border-radius: 0.15em;
}
.form-check-input[type=radio] {
  border-radius: 50%;
}
.form-check-input:active {
  filter: brightness(90%);
}
.form-check-input:focus {
  border-color: #ced4da;
  outline: 0;
  box-shadow: none;
}
.form-check-input:checked {
  background-color: #6571ff;
  border-color: #6571ff;
}
.form-check-input:checked[type=checkbox] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e");
}
.form-check-input:checked[type=radio] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
}
.form-check-input[type=checkbox]:indeterminate {
  background-color: #6571ff;
  border-color: #6571ff;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
}
.form-check-input:disabled {
  pointer-events: none;
  filter: none;
  opacity: 0.5;
}
.form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
  cursor: default;
  opacity: 0.5;
}

.form-switch {
  padding-left: 2.5em;
}
.form-switch .form-check-input {
  width: 2em;
  margin-left: -2.5em;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
  background-position: left center;
  border-radius: 2em;
  transition: background-position 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-switch .form-check-input {
    transition: none;
  }
}
.form-switch .form-check-input:focus {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23ced4da'/%3e%3c/svg%3e");
}
.form-switch .form-check-input:checked {
  background-position: right center;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}
.form-switch.form-check-reverse {
  padding-right: 2.5em;
  padding-left: 0;
}
.form-switch.form-check-reverse .form-check-input {
  margin-right: -2.5em;
  margin-left: 0;
}

.form-check-inline {
  display: inline-block;
  margin-right: 1rem;
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.btn-check[disabled] + .btn, .wizard > .actions .btn-check[disabled] + a, div.tox .btn-check[disabled] + .tox-button, .swal2-popup .swal2-actions .btn-check[disabled] + button, div.fc .btn-check[disabled] + .fc-button-primary, .btn-check:disabled + .btn, .wizard > .actions .btn-check:disabled + a, div.tox .btn-check:disabled + .tox-button, .swal2-popup .swal2-actions .btn-check:disabled + button, div.fc .btn-check:disabled + .fc-button-primary {
  pointer-events: none;
  filter: none;
  opacity: 0.65;
}

.form-range {
  width: 100%;
  height: 1rem;
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
.form-range:focus {
  outline: 0;
}
.form-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #f9fafb, none;
}
.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #f9fafb, none;
}
.form-range::-moz-focus-outer {
  border: 0;
}
.form-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #6571ff;
  border: 0;
  border-radius: 1rem;
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
          appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none;
  }
}
.form-range::-webkit-slider-thumb:active {
  background-color: #d1d4ff;
}
.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}
.form-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #6571ff;
  border: 0;
  border-radius: 1rem;
  -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -moz-appearance: none;
       appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-moz-range-thumb {
    -moz-transition: none;
    transition: none;
  }
}
.form-range::-moz-range-thumb:active {
  background-color: #d1d4ff;
}
.form-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}
.form-range:disabled {
  pointer-events: none;
}
.form-range:disabled::-webkit-slider-thumb {
  background-color: #adb5bd;
}
.form-range:disabled::-moz-range-thumb {
  background-color: #adb5bd;
}

.form-floating {
  position: relative;
}
.form-floating > .form-control, .form-floating > .typeahead.tt-input,
.form-floating > .typeahead.tt-hint, .select2-container--default .select2-search--dropdown .form-floating > .select2-search__field,
.form-floating > .form-control-plaintext,
.form-floating > .form-select {
  height: calc(3.5rem + 2px);
  line-height: 1.25;
}
.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 1rem 0.8rem;
  overflow: hidden;
  text-align: start;
  text-overflow: ellipsis;
  white-space: nowrap;
  pointer-events: none;
  border: 1px solid transparent;
  transform-origin: 0 0;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-floating > label {
    transition: none;
  }
}
.form-floating > .form-control, .form-floating > .typeahead.tt-input,
.form-floating > .typeahead.tt-hint, .select2-container--default .select2-search--dropdown .form-floating > .select2-search__field,
.form-floating > .form-control-plaintext {
  padding: 1rem 0.8rem;
}
.form-floating > .form-control::-moz-placeholder, .form-floating > .typeahead.tt-input::-moz-placeholder, .form-floating > .typeahead.tt-hint::-moz-placeholder, .select2-container--default .select2-search--dropdown .form-floating > .select2-search__field::-moz-placeholder, .form-floating > .form-control-plaintext::-moz-placeholder {
  color: transparent;
}
.form-floating > .form-control::placeholder, .form-floating > .typeahead.tt-input::placeholder,
.form-floating > .typeahead.tt-hint::placeholder, .select2-container--default .select2-search--dropdown .form-floating > .select2-search__field::placeholder,
.form-floating > .form-control-plaintext::placeholder {
  color: transparent;
}
.form-floating > .form-control:not(:-moz-placeholder-shown), .form-floating > .typeahead.tt-input:not(:-moz-placeholder-shown), .form-floating > .typeahead.tt-hint:not(:-moz-placeholder-shown), .select2-container--default .select2-search--dropdown .form-floating > .select2-search__field:not(:-moz-placeholder-shown), .form-floating > .form-control-plaintext:not(:-moz-placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:focus, .form-floating > .typeahead.tt-input:focus,
.form-floating > .typeahead.tt-hint:focus, .select2-container--default .select2-search--dropdown .form-floating > .select2-search__field:focus, .form-floating > .form-control:not(:placeholder-shown), .form-floating > .typeahead.tt-input:not(:placeholder-shown),
.form-floating > .typeahead.tt-hint:not(:placeholder-shown), .select2-container--default .select2-search--dropdown .form-floating > .select2-search__field:not(:placeholder-shown),
.form-floating > .form-control-plaintext:focus,
.form-floating > .form-control-plaintext:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:-webkit-autofill, .form-floating > .typeahead.tt-input:-webkit-autofill,
.form-floating > .typeahead.tt-hint:-webkit-autofill, .select2-container--default .select2-search--dropdown .form-floating > .select2-search__field:-webkit-autofill,
.form-floating > .form-control-plaintext:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) ~ label, .form-floating > .typeahead.tt-input:not(:-moz-placeholder-shown) ~ label, .form-floating > .typeahead.tt-hint:not(:-moz-placeholder-shown) ~ label, .select2-container--default .select2-search--dropdown .form-floating > .select2-search__field:not(:-moz-placeholder-shown) ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:focus ~ label, .form-floating > .typeahead.tt-input:focus ~ label,
.form-floating > .typeahead.tt-hint:focus ~ label, .select2-container--default .select2-search--dropdown .form-floating > .select2-search__field:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .typeahead.tt-input:not(:placeholder-shown) ~ label,
.form-floating > .typeahead.tt-hint:not(:placeholder-shown) ~ label,
.select2-container--default .select2-search--dropdown .form-floating > .select2-search__field:not(:placeholder-shown) ~ label,
.form-floating > .form-control-plaintext ~ label,
.form-floating > .form-select ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:-webkit-autofill ~ label, .form-floating > .typeahead.tt-input:-webkit-autofill ~ label,
.form-floating > .typeahead.tt-hint:-webkit-autofill ~ label, .select2-container--default .select2-search--dropdown .form-floating > .select2-search__field:-webkit-autofill ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control-plaintext ~ label {
  border-width: 1px 0;
}

.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}
.input-group > .form-control, .input-group > .typeahead.tt-input,
.input-group > .typeahead.tt-hint, .select2-container--default .select2-search--dropdown .input-group > .select2-search__field,
.input-group > .form-select,
.input-group > .form-floating {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}
.input-group > .form-control:focus, .input-group > .typeahead.tt-input:focus,
.input-group > .typeahead.tt-hint:focus, .select2-container--default .select2-search--dropdown .input-group > .select2-search__field:focus,
.input-group > .form-select:focus,
.input-group > .form-floating:focus-within {
  z-index: 5;
}
.input-group .btn, .input-group .wizard > .actions a, .wizard > .actions .input-group a, .input-group div.tox .tox-button, div.tox .input-group .tox-button, .input-group .swal2-popup .swal2-actions button, .swal2-popup .swal2-actions .input-group button, .input-group div.fc .fc-button-primary, div.fc .input-group .fc-button-primary {
  position: relative;
  z-index: 2;
}
.input-group .btn:focus, .input-group .wizard > .actions a:focus, .wizard > .actions .input-group a:focus, .input-group div.tox .tox-button:focus, div.tox .input-group .tox-button:focus, .input-group .swal2-popup .swal2-actions button:focus, .swal2-popup .swal2-actions .input-group button:focus, .input-group div.fc .fc-button-primary:focus, div.fc .input-group .fc-button-primary:focus {
  z-index: 5;
}

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.469rem 0.563rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  color: #000;
  text-align: center;
  white-space: nowrap;
  background-color: #f8f9fa;
  border: 1px solid #e9ecef;
  border-radius: 0.25rem;
}

.input-group-lg > .form-control, .input-group-lg > .typeahead.tt-input,
.input-group-lg > .typeahead.tt-hint, .select2-container--default .select2-search--dropdown .input-group-lg > .select2-search__field,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text,
.input-group-lg > .btn,
.wizard > .actions .input-group-lg > a,
div.tox .input-group-lg > .tox-button,
.swal2-popup .swal2-actions .input-group-lg > button,
div.fc .input-group-lg > .fc-button-primary {
  padding: 0.5rem 0.8rem;
  font-size: 1rem;
  border-radius: 0.25rem;
}

.input-group-sm > .form-control, .input-group-sm > .typeahead.tt-input,
.input-group-sm > .typeahead.tt-hint, .select2-container--default .select2-search--dropdown .input-group-sm > .select2-search__field,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text,
.input-group-sm > .btn,
.wizard > .actions .input-group-sm > a,
div.tox .input-group-sm > .tox-button,
.swal2-popup .swal2-actions .input-group-sm > button,
div.fc .input-group-sm > .fc-button-primary {
  padding: 0.391rem 0.8rem;
  font-size: 0.812rem;
  border-radius: 0.25rem;
}

.input-group-lg > .form-select,
.input-group-sm > .form-select {
  padding-right: 3.2rem;
}

.input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.tt-menu):not(.form-floating),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n+3),
.input-group:not(.has-validation) > .form-floating:not(:last-child) > .form-control,
.input-group:not(.has-validation) > .form-floating:not(:last-child) > .typeahead.tt-input,
.input-group:not(.has-validation) > .form-floating:not(:last-child) > .typeahead.tt-hint,
.select2-container--default .select2-search--dropdown .input-group:not(.has-validation) > .form-floating:not(:last-child) > .select2-search__field,
.input-group:not(.has-validation) > .form-floating:not(:last-child) > .form-select {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation > :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.tt-menu):not(.form-floating),
.input-group.has-validation > .dropdown-toggle:nth-last-child(n+4),
.input-group.has-validation > .form-floating:nth-last-child(n+3) > .form-control,
.input-group.has-validation > .form-floating:nth-last-child(n+3) > .typeahead.tt-input,
.input-group.has-validation > .form-floating:nth-last-child(n+3) > .typeahead.tt-hint,
.select2-container--default .select2-search--dropdown .input-group.has-validation > .form-floating:nth-last-child(n+3) > .select2-search__field,
.input-group.has-validation > .form-floating:nth-last-child(n+3) > .form-select {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > :not(:first-child):not(.dropdown-menu):not(.tt-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -1px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group > .form-floating:not(:first-child) > .form-control, .input-group > .form-floating:not(:first-child) > .typeahead.tt-input,
.input-group > .form-floating:not(:first-child) > .typeahead.tt-hint, .select2-container--default .select2-search--dropdown .input-group > .form-floating:not(:first-child) > .select2-search__field,
.input-group > .form-floating:not(:first-child) > .form-select {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #05a34a;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.812rem;
  color: #fff;
  background-color: rgba(5, 163, 74, 0.9);
  border-radius: 0.25rem;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .was-validated .typeahead.tt-input:valid,
.was-validated .typeahead.tt-hint:valid, .was-validated .select2-container--default .select2-search--dropdown .select2-search__field:valid, .select2-container--default .select2-search--dropdown .was-validated .select2-search__field:valid, .form-control.is-valid, .is-valid.typeahead.tt-input,
.is-valid.typeahead.tt-hint, .select2-container--default .select2-search--dropdown .is-valid.select2-search__field {
  border-color: #05a34a;
  padding-right: calc(1.5em + 0.938rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2305a34a' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.2345rem) center;
  background-size: calc(0.75em + 0.469rem) calc(0.75em + 0.469rem);
}
.was-validated .form-control:valid:focus, .was-validated .typeahead.tt-input:valid:focus,
.was-validated .typeahead.tt-hint:valid:focus, .was-validated .select2-container--default .select2-search--dropdown .select2-search__field:valid:focus, .select2-container--default .select2-search--dropdown .was-validated .select2-search__field:valid:focus, .form-control.is-valid:focus, .is-valid.typeahead.tt-input:focus,
.is-valid.typeahead.tt-hint:focus, .select2-container--default .select2-search--dropdown .is-valid.select2-search__field:focus {
  border-color: #05a34a;
  box-shadow: 0 0 0 0 rgba(5, 163, 74, 0.25);
}

.was-validated textarea.form-control:valid, .was-validated textarea.typeahead.tt-input:valid,
.was-validated textarea.typeahead.tt-hint:valid, .was-validated .select2-container--default .select2-search--dropdown textarea.select2-search__field:valid, .select2-container--default .select2-search--dropdown .was-validated textarea.select2-search__field:valid, textarea.form-control.is-valid, textarea.is-valid.typeahead.tt-input,
textarea.is-valid.typeahead.tt-hint, .select2-container--default .select2-search--dropdown textarea.is-valid.select2-search__field {
  padding-right: calc(1.5em + 0.938rem);
  background-position: top calc(0.375em + 0.2345rem) right calc(0.375em + 0.2345rem);
}

.was-validated .form-select:valid, .form-select.is-valid {
  border-color: #05a34a;
}
.was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"] {
  padding-right: 4.4rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23212a3a' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2305a34a' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-position: right 0.8rem center, center right 2.4rem;
  background-size: 16px 12px, calc(0.75em + 0.469rem) calc(0.75em + 0.469rem);
}
.was-validated .form-select:valid:focus, .form-select.is-valid:focus {
  border-color: #05a34a;
  box-shadow: 0 0 0 0 rgba(5, 163, 74, 0.25);
}

.was-validated .form-control-color:valid, .form-control-color.is-valid {
  width: calc(3rem + calc(1.5em + 0.938rem));
}

.was-validated .form-check-input:valid, .form-check-input.is-valid {
  border-color: #05a34a;
}
.was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
  background-color: #05a34a;
}
.was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
  box-shadow: 0 0 0 0 rgba(5, 163, 74, 0.25);
}
.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #05a34a;
}

.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group > .form-control:not(:focus):valid, .was-validated .input-group > .typeahead.tt-input:not(:focus):valid,
.was-validated .input-group > .typeahead.tt-hint:not(:focus):valid, .was-validated .select2-container--default .select2-search--dropdown .input-group > .select2-search__field:not(:focus):valid, .select2-container--default .select2-search--dropdown .was-validated .input-group > .select2-search__field:not(:focus):valid, .input-group > .form-control:not(:focus).is-valid, .input-group > .typeahead.tt-input:not(:focus).is-valid,
.input-group > .typeahead.tt-hint:not(:focus).is-valid, .select2-container--default .select2-search--dropdown .input-group > .select2-search__field:not(:focus).is-valid,
.was-validated .input-group > .form-select:not(:focus):valid,
.input-group > .form-select:not(:focus).is-valid,
.was-validated .input-group > .form-floating:not(:focus-within):valid,
.input-group > .form-floating:not(:focus-within).is-valid {
  z-index: 3;
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #ff3366;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.812rem;
  color: #fff;
  background-color: rgba(255, 51, 102, 0.9);
  border-radius: 0.25rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .was-validated .typeahead.tt-input:invalid,
.was-validated .typeahead.tt-hint:invalid, .was-validated .select2-container--default .select2-search--dropdown .select2-search__field:invalid, .select2-container--default .select2-search--dropdown .was-validated .select2-search__field:invalid, .form-control.is-invalid, .is-invalid.typeahead.tt-input,
.is-invalid.typeahead.tt-hint, .select2-container--default .select2-search--dropdown .is-invalid.select2-search__field {
  border-color: #ff3366;
  padding-right: calc(1.5em + 0.938rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23ff3366'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ff3366' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.2345rem) center;
  background-size: calc(0.75em + 0.469rem) calc(0.75em + 0.469rem);
}
.was-validated .form-control:invalid:focus, .was-validated .typeahead.tt-input:invalid:focus,
.was-validated .typeahead.tt-hint:invalid:focus, .was-validated .select2-container--default .select2-search--dropdown .select2-search__field:invalid:focus, .select2-container--default .select2-search--dropdown .was-validated .select2-search__field:invalid:focus, .form-control.is-invalid:focus, .is-invalid.typeahead.tt-input:focus,
.is-invalid.typeahead.tt-hint:focus, .select2-container--default .select2-search--dropdown .is-invalid.select2-search__field:focus {
  border-color: #ff3366;
  box-shadow: 0 0 0 0 rgba(255, 51, 102, 0.25);
}

.was-validated textarea.form-control:invalid, .was-validated textarea.typeahead.tt-input:invalid,
.was-validated textarea.typeahead.tt-hint:invalid, .was-validated .select2-container--default .select2-search--dropdown textarea.select2-search__field:invalid, .select2-container--default .select2-search--dropdown .was-validated textarea.select2-search__field:invalid, textarea.form-control.is-invalid, textarea.is-invalid.typeahead.tt-input,
textarea.is-invalid.typeahead.tt-hint, .select2-container--default .select2-search--dropdown textarea.is-invalid.select2-search__field {
  padding-right: calc(1.5em + 0.938rem);
  background-position: top calc(0.375em + 0.2345rem) right calc(0.375em + 0.2345rem);
}

.was-validated .form-select:invalid, .form-select.is-invalid {
  border-color: #ff3366;
}
.was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"] {
  padding-right: 4.4rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23212a3a' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23ff3366'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ff3366' stroke='none'/%3e%3c/svg%3e");
  background-position: right 0.8rem center, center right 2.4rem;
  background-size: 16px 12px, calc(0.75em + 0.469rem) calc(0.75em + 0.469rem);
}
.was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
  border-color: #ff3366;
  box-shadow: 0 0 0 0 rgba(255, 51, 102, 0.25);
}

.was-validated .form-control-color:invalid, .form-control-color.is-invalid {
  width: calc(3rem + calc(1.5em + 0.938rem));
}

.was-validated .form-check-input:invalid, .form-check-input.is-invalid {
  border-color: #ff3366;
}
.was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
  background-color: #ff3366;
}
.was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
  box-shadow: 0 0 0 0 rgba(255, 51, 102, 0.25);
}
.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #ff3366;
}

.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group > .form-control:not(:focus):invalid, .was-validated .input-group > .typeahead.tt-input:not(:focus):invalid,
.was-validated .input-group > .typeahead.tt-hint:not(:focus):invalid, .was-validated .select2-container--default .select2-search--dropdown .input-group > .select2-search__field:not(:focus):invalid, .select2-container--default .select2-search--dropdown .was-validated .input-group > .select2-search__field:not(:focus):invalid, .input-group > .form-control:not(:focus).is-invalid, .input-group > .typeahead.tt-input:not(:focus).is-invalid,
.input-group > .typeahead.tt-hint:not(:focus).is-invalid, .select2-container--default .select2-search--dropdown .input-group > .select2-search__field:not(:focus).is-invalid,
.was-validated .input-group > .form-select:not(:focus):invalid,
.input-group > .form-select:not(:focus).is-invalid,
.was-validated .input-group > .form-floating:not(:focus-within):invalid,
.input-group > .form-floating:not(:focus-within).is-invalid {
  z-index: 4;
}

.btn, .wizard > .actions a,
.wizard > .actions a:active,
.wizard > .actions a:hover, div.tox .tox-button, .swal2-popup .swal2-actions button, div.fc .fc-button-primary {
  --bs-btn-padding-x: 0.8rem;
  --bs-btn-padding-y: 0.469rem;
  --bs-btn-font-family: ;
  --bs-btn-font-size: 0.875rem;
  --bs-btn-font-weight: 400;
  --bs-btn-line-height: 1.5;
  --bs-btn-color: #000;
  --bs-btn-bg: transparent;
  --bs-btn-border-width: 1px;
  --bs-btn-border-color: transparent;
  --bs-btn-border-radius: 0.25rem;
  --bs-btn-hover-border-color: transparent;
  --bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
  --bs-btn-disabled-opacity: 0.65;
  --bs-btn-focus-box-shadow: 0 0 0 0 rgba(var(--bs-btn-focus-shadow-rgb), .5);
  display: inline-block;
  padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
  font-family: var(--bs-btn-font-family);
  font-size: var(--bs-btn-font-size);
  font-weight: var(--bs-btn-font-weight);
  line-height: var(--bs-btn-line-height);
  color: var(--bs-btn-color);
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
  border-radius: var(--bs-btn-border-radius);
  background-color: var(--bs-btn-bg);
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn, .wizard > .actions a,
  .wizard > .actions a:active,
  .wizard > .actions a:hover, div.tox .tox-button, .swal2-popup .swal2-actions button, div.fc .fc-button-primary {
    transition: none;
  }
}
.btn:hover, .wizard > .actions a:hover, div.tox .tox-button:hover, .swal2-popup .swal2-actions button:hover, div.fc .fc-button-primary:hover {
  color: var(--bs-btn-hover-color);
  background-color: var(--bs-btn-hover-bg);
  border-color: var(--bs-btn-hover-border-color);
}
.btn-check + .btn:hover, .wizard > .actions .btn-check + a:hover, div.tox .btn-check + .tox-button:hover, .swal2-popup .swal2-actions .btn-check + button:hover, div.fc .btn-check + .fc-button-primary:hover {
  color: var(--bs-btn-color);
  background-color: var(--bs-btn-bg);
  border-color: var(--bs-btn-border-color);
}
.btn:focus-visible, .wizard > .actions a:focus-visible, div.tox .tox-button:focus-visible, .swal2-popup .swal2-actions button:focus-visible, div.fc .fc-button-primary:focus-visible {
  color: var(--bs-btn-hover-color);
  background-color: var(--bs-btn-hover-bg);
  border-color: var(--bs-btn-hover-border-color);
  outline: 0;
  box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn-check:focus-visible + .btn, .wizard > .actions .btn-check:focus-visible + a, div.tox .btn-check:focus-visible + .tox-button, .swal2-popup .swal2-actions .btn-check:focus-visible + button, div.fc .btn-check:focus-visible + .fc-button-primary {
  border-color: var(--bs-btn-hover-border-color);
  outline: 0;
  box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn-check:checked + .btn, .wizard > .actions .btn-check:checked + a, div.tox .btn-check:checked + .tox-button, .swal2-popup .swal2-actions .btn-check:checked + button, div.fc .btn-check:checked + .fc-button-primary, :not(.btn-check) + .btn:active, .wizard > .actions :not(.btn-check) + a:active, div.tox :not(.btn-check) + .tox-button:active, .swal2-popup .swal2-actions :not(.btn-check) + button:active, div.fc :not(.btn-check) + .fc-button-primary:active, .btn:first-child:active, .wizard > .actions a:first-child:active, div.tox .tox-button:first-child:active, .swal2-popup .swal2-actions button:first-child:active, div.fc .fc-button-primary:first-child:active, .btn.active, .wizard > .actions a.active, div.tox .active.tox-button, .swal2-popup .swal2-actions button.active, div.fc .active.fc-button-primary, .btn.show, .wizard > .actions a.show, div.tox .show.tox-button, .swal2-popup .swal2-actions button.show, div.fc .show.fc-button-primary {
  color: var(--bs-btn-active-color);
  background-color: var(--bs-btn-active-bg);
  border-color: var(--bs-btn-active-border-color);
}
.btn-check:checked + .btn:focus-visible, .wizard > .actions .btn-check:checked + a:focus-visible, div.tox .btn-check:checked + .tox-button:focus-visible, .swal2-popup .swal2-actions .btn-check:checked + button:focus-visible, div.fc .btn-check:checked + .fc-button-primary:focus-visible, :not(.btn-check) + .btn:active:focus-visible, .wizard > .actions :not(.btn-check) + a:active:focus-visible, div.tox :not(.btn-check) + .tox-button:active:focus-visible, .swal2-popup .swal2-actions :not(.btn-check) + button:active:focus-visible, div.fc :not(.btn-check) + .fc-button-primary:active:focus-visible, .btn:first-child:active:focus-visible, .wizard > .actions a:first-child:active:focus-visible, div.tox .tox-button:first-child:active:focus-visible, .swal2-popup .swal2-actions button:first-child:active:focus-visible, div.fc .fc-button-primary:first-child:active:focus-visible, .btn.active:focus-visible, .wizard > .actions a.active:focus-visible, div.tox .active.tox-button:focus-visible, .swal2-popup .swal2-actions button.active:focus-visible, div.fc .active.fc-button-primary:focus-visible, .btn.show:focus-visible, .wizard > .actions a.show:focus-visible, div.tox .show.tox-button:focus-visible, .swal2-popup .swal2-actions button.show:focus-visible, div.fc .show.fc-button-primary:focus-visible {
  box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn:disabled, .wizard > .actions a:disabled, div.tox .tox-button:disabled, .swal2-popup .swal2-actions button:disabled, div.fc .fc-button-primary:disabled, .btn.disabled, .wizard > .actions a.disabled, div.tox .disabled.tox-button, .swal2-popup .swal2-actions button.disabled, div.fc .disabled.fc-button-primary, fieldset:disabled .btn, fieldset:disabled .wizard > .actions a, .wizard > .actions fieldset:disabled a, fieldset:disabled div.tox .tox-button, div.tox fieldset:disabled .tox-button, fieldset:disabled .swal2-popup .swal2-actions button, .swal2-popup .swal2-actions fieldset:disabled button, fieldset:disabled div.fc .fc-button-primary, div.fc fieldset:disabled .fc-button-primary {
  color: var(--bs-btn-disabled-color);
  pointer-events: none;
  background-color: var(--bs-btn-disabled-bg);
  border-color: var(--bs-btn-disabled-border-color);
  opacity: var(--bs-btn-disabled-opacity);
}

.btn-primary, .wizard > .actions a,
.wizard > .actions a:active,
.wizard > .actions a:hover, div.tox .tox-button:not(.tox-button--naked):not(.tox-button--secondary), .swal2-popup .swal2-actions button.swal2-confirm {
  --bs-btn-color: #fff;
  --bs-btn-bg: #6571ff;
  --bs-btn-border-color: #6571ff;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #5660d9;
  --bs-btn-hover-border-color: #515acc;
  --bs-btn-focus-shadow-rgb: 124, 134, 255;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #515acc;
  --bs-btn-active-border-color: #4c55bf;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #6571ff;
  --bs-btn-disabled-border-color: #6571ff;
}

.btn-secondary, div.tox .tox-button--secondary {
  --bs-btn-color: #fff;
  --bs-btn-bg: #7987a1;
  --bs-btn-border-color: #7987a1;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #677389;
  --bs-btn-hover-border-color: #616c81;
  --bs-btn-focus-shadow-rgb: 141, 153, 175;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #616c81;
  --bs-btn-active-border-color: #5b6579;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #7987a1;
  --bs-btn-disabled-border-color: #7987a1;
}

.btn-success {
  --bs-btn-color: #fff;
  --bs-btn-bg: #05a34a;
  --bs-btn-border-color: #05a34a;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #048b3f;
  --bs-btn-hover-border-color: #04823b;
  --bs-btn-focus-shadow-rgb: 43, 177, 101;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #04823b;
  --bs-btn-active-border-color: #047a38;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #05a34a;
  --bs-btn-disabled-border-color: #05a34a;
}

.btn-info {
  --bs-btn-color: #000;
  --bs-btn-bg: #66d1d1;
  --bs-btn-border-color: #66d1d1;
  --bs-btn-hover-color: #000;
  --bs-btn-hover-bg: #7dd8d8;
  --bs-btn-hover-border-color: #75d6d6;
  --bs-btn-focus-shadow-rgb: 87, 178, 178;
  --bs-btn-active-color: #000;
  --bs-btn-active-bg: #85dada;
  --bs-btn-active-border-color: #75d6d6;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #000;
  --bs-btn-disabled-bg: #66d1d1;
  --bs-btn-disabled-border-color: #66d1d1;
}

.btn-warning {
  --bs-btn-color: #000;
  --bs-btn-bg: #fbbc06;
  --bs-btn-border-color: #fbbc06;
  --bs-btn-hover-color: #000;
  --bs-btn-hover-bg: #fcc62b;
  --bs-btn-hover-border-color: #fbc31f;
  --bs-btn-focus-shadow-rgb: 213, 160, 5;
  --bs-btn-active-color: #000;
  --bs-btn-active-bg: #fcc938;
  --bs-btn-active-border-color: #fbc31f;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #000;
  --bs-btn-disabled-bg: #fbbc06;
  --bs-btn-disabled-border-color: #fbbc06;
}

.btn-danger, .swal2-popup .swal2-actions button.swal2-cancel {
  --bs-btn-color: #fff;
  --bs-btn-bg: #ff3366;
  --bs-btn-border-color: #ff3366;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #d92b57;
  --bs-btn-hover-border-color: #cc2952;
  --bs-btn-focus-shadow-rgb: 255, 82, 125;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #cc2952;
  --bs-btn-active-border-color: #bf264d;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #ff3366;
  --bs-btn-disabled-border-color: #ff3366;
}

.btn-light {
  --bs-btn-color: #000;
  --bs-btn-bg: #e9ecef;
  --bs-btn-border-color: #e9ecef;
  --bs-btn-hover-color: #000;
  --bs-btn-hover-bg: #c6c9cb;
  --bs-btn-hover-border-color: #babdbf;
  --bs-btn-focus-shadow-rgb: 198, 201, 203;
  --bs-btn-active-color: #000;
  --bs-btn-active-bg: #babdbf;
  --bs-btn-active-border-color: #afb1b3;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #000;
  --bs-btn-disabled-bg: #e9ecef;
  --bs-btn-disabled-border-color: #e9ecef;
}

.btn-dark {
  --bs-btn-color: #fff;
  --bs-btn-bg: #060c17;
  --bs-btn-border-color: #060c17;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #2b303a;
  --bs-btn-hover-border-color: #1f242e;
  --bs-btn-focus-shadow-rgb: 43, 48, 58;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #383d45;
  --bs-btn-active-border-color: #1f242e;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #060c17;
  --bs-btn-disabled-border-color: #060c17;
}

.btn-outline-primary, div.fc .fc-button-primary {
  --bs-btn-color: #6571ff;
  --bs-btn-border-color: #6571ff;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #6571ff;
  --bs-btn-hover-border-color: #6571ff;
  --bs-btn-focus-shadow-rgb: 101, 113, 255;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #6571ff;
  --bs-btn-active-border-color: #6571ff;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #6571ff;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #6571ff;
  --bs-gradient: none;
}

.btn-outline-secondary {
  --bs-btn-color: #7987a1;
  --bs-btn-border-color: #7987a1;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #7987a1;
  --bs-btn-hover-border-color: #7987a1;
  --bs-btn-focus-shadow-rgb: 121, 135, 161;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #7987a1;
  --bs-btn-active-border-color: #7987a1;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #7987a1;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #7987a1;
  --bs-gradient: none;
}

.btn-outline-success {
  --bs-btn-color: #05a34a;
  --bs-btn-border-color: #05a34a;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #05a34a;
  --bs-btn-hover-border-color: #05a34a;
  --bs-btn-focus-shadow-rgb: 5, 163, 74;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #05a34a;
  --bs-btn-active-border-color: #05a34a;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #05a34a;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #05a34a;
  --bs-gradient: none;
}

.btn-outline-info {
  --bs-btn-color: #66d1d1;
  --bs-btn-border-color: #66d1d1;
  --bs-btn-hover-color: #000;
  --bs-btn-hover-bg: #66d1d1;
  --bs-btn-hover-border-color: #66d1d1;
  --bs-btn-focus-shadow-rgb: 102, 209, 209;
  --bs-btn-active-color: #000;
  --bs-btn-active-bg: #66d1d1;
  --bs-btn-active-border-color: #66d1d1;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #66d1d1;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #66d1d1;
  --bs-gradient: none;
}

.btn-outline-warning {
  --bs-btn-color: #fbbc06;
  --bs-btn-border-color: #fbbc06;
  --bs-btn-hover-color: #000;
  --bs-btn-hover-bg: #fbbc06;
  --bs-btn-hover-border-color: #fbbc06;
  --bs-btn-focus-shadow-rgb: 251, 188, 6;
  --bs-btn-active-color: #000;
  --bs-btn-active-bg: #fbbc06;
  --bs-btn-active-border-color: #fbbc06;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fbbc06;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #fbbc06;
  --bs-gradient: none;
}

.btn-outline-danger {
  --bs-btn-color: #ff3366;
  --bs-btn-border-color: #ff3366;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #ff3366;
  --bs-btn-hover-border-color: #ff3366;
  --bs-btn-focus-shadow-rgb: 255, 51, 102;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #ff3366;
  --bs-btn-active-border-color: #ff3366;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #ff3366;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #ff3366;
  --bs-gradient: none;
}

.btn-outline-light {
  --bs-btn-color: #e9ecef;
  --bs-btn-border-color: #e9ecef;
  --bs-btn-hover-color: #000;
  --bs-btn-hover-bg: #e9ecef;
  --bs-btn-hover-border-color: #e9ecef;
  --bs-btn-focus-shadow-rgb: 233, 236, 239;
  --bs-btn-active-color: #000;
  --bs-btn-active-bg: #e9ecef;
  --bs-btn-active-border-color: #e9ecef;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #e9ecef;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #e9ecef;
  --bs-gradient: none;
}

.btn-outline-dark {
  --bs-btn-color: #060c17;
  --bs-btn-border-color: #060c17;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #060c17;
  --bs-btn-hover-border-color: #060c17;
  --bs-btn-focus-shadow-rgb: 6, 12, 23;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #060c17;
  --bs-btn-active-border-color: #060c17;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #060c17;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #060c17;
  --bs-gradient: none;
}

.btn-link {
  --bs-btn-font-weight: 400;
  --bs-btn-color: var(--bs-link-color);
  --bs-btn-bg: transparent;
  --bs-btn-border-color: transparent;
  --bs-btn-hover-color: var(--bs-link-hover-color);
  --bs-btn-hover-border-color: transparent;
  --bs-btn-active-color: var(--bs-link-hover-color);
  --bs-btn-active-border-color: transparent;
  --bs-btn-disabled-color: #7987a1;
  --bs-btn-disabled-border-color: transparent;
  --bs-btn-box-shadow: none;
  --bs-btn-focus-shadow-rgb: 124, 134, 255;
  text-decoration: none;
}
.btn-link:focus-visible {
  color: var(--bs-btn-color);
}
.btn-link:hover {
  color: var(--bs-btn-hover-color);
}

.btn-lg, .btn-group-lg > .btn, .wizard > .actions .btn-group-lg > a, div.tox .btn-group-lg > .tox-button, .swal2-popup .swal2-actions .btn-group-lg > button, div.fc .btn-group-lg > .fc-button-primary {
  --bs-btn-padding-y: 0.5rem;
  --bs-btn-padding-x: 0.8rem;
  --bs-btn-font-size: 1rem;
  --bs-btn-border-radius: 0.25rem;
}

.btn-sm, div.fc .fc-button-primary, .btn-group-sm > .btn, .wizard > .actions .btn-group-sm > a, div.tox .btn-group-sm > .tox-button, .swal2-popup .swal2-actions .btn-group-sm > button {
  --bs-btn-padding-y: 0.391rem;
  --bs-btn-padding-x: 0.8rem;
  --bs-btn-font-size: 0.812rem;
  --bs-btn-border-radius: 0.25rem;
}

.fade {
  transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}
.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing.collapse-horizontal {
    transition: none;
  }
}

.dropup,
.dropend,
.dropdown,
.dropstart,
.dropup-center,
.dropdown-center {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu, .tt-menu {
  --bs-dropdown-zindex: 1000;
  --bs-dropdown-min-width: 10rem;
  --bs-dropdown-padding-x: 0;
  --bs-dropdown-padding-y: 0.5rem;
  --bs-dropdown-spacer: 0.125rem;
  --bs-dropdown-font-size: 0.875rem;
  --bs-dropdown-color: #000;
  --bs-dropdown-bg: #fff;
  --bs-dropdown-border-color: #f2f4f9;
  --bs-dropdown-border-radius: 0.25rem;
  --bs-dropdown-border-width: 1px;
  --bs-dropdown-inner-border-radius: calc(0.25rem - 1px);
  --bs-dropdown-divider-bg: #f2f4f9;
  --bs-dropdown-divider-margin-y: 0.5rem;
  --bs-dropdown-box-shadow: 0 5px 10px 0 rgba(183, 192, 206, 0.2);
  --bs-dropdown-link-color: #060c17;
  --bs-dropdown-link-hover-color: #050b15;
  --bs-dropdown-link-hover-bg: #e9ecef;
  --bs-dropdown-link-active-color: #fff;
  --bs-dropdown-link-active-bg: #6571ff;
  --bs-dropdown-link-disabled-color: #adb5bd;
  --bs-dropdown-item-padding-x: 1rem;
  --bs-dropdown-item-padding-y: 0.25rem;
  --bs-dropdown-header-color: #7987a1;
  --bs-dropdown-header-padding-x: 1rem;
  --bs-dropdown-header-padding-y: 0.5rem;
  position: absolute;
  z-index: var(--bs-dropdown-zindex);
  display: none;
  min-width: var(--bs-dropdown-min-width);
  padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
  margin: 0;
  font-size: var(--bs-dropdown-font-size);
  color: var(--bs-dropdown-color);
  text-align: left;
  list-style: none;
  background-color: var(--bs-dropdown-bg);
  background-clip: padding-box;
  border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
  border-radius: var(--bs-dropdown-border-radius);
}
.dropdown-menu[data-bs-popper], [data-bs-popper].tt-menu {
  top: 100%;
  left: 0;
  margin-top: var(--bs-dropdown-spacer);
}

.dropdown-menu-start {
  --bs-position: start;
}
.dropdown-menu-start[data-bs-popper] {
  right: auto;
  left: 0;
}

.dropdown-menu-end {
  --bs-position: end;
}
.dropdown-menu-end[data-bs-popper] {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start;
  }
  .dropdown-menu-sm-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-end {
    --bs-position: end;
  }
  .dropdown-menu-sm-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start;
  }
  .dropdown-menu-md-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-end {
    --bs-position: end;
  }
  .dropdown-menu-md-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start;
  }
  .dropdown-menu-lg-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-end {
    --bs-position: end;
  }
  .dropdown-menu-lg-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start;
  }
  .dropdown-menu-xl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-end {
    --bs-position: end;
  }
  .dropdown-menu-xl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start;
  }
  .dropdown-menu-xxl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xxl-end {
    --bs-position: end;
  }
  .dropdown-menu-xxl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
.dropup .dropdown-menu[data-bs-popper], .dropup [data-bs-popper].tt-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: var(--bs-dropdown-spacer);
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropend .dropdown-menu[data-bs-popper], .dropend [data-bs-popper].tt-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: var(--bs-dropdown-spacer);
}
.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}
.dropend .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropend .dropdown-toggle::after {
  vertical-align: 0;
}

.dropstart .dropdown-menu[data-bs-popper], .dropstart [data-bs-popper].tt-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: var(--bs-dropdown-spacer);
}
.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}
.dropstart .dropdown-toggle::after {
  display: none;
}
.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}
.dropstart .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-divider {
  height: 0;
  margin: var(--bs-dropdown-divider-margin-y) 0;
  overflow: hidden;
  border-top: 1px solid var(--bs-dropdown-divider-bg);
  opacity: 1;
}

.dropdown-item, .tt-menu .tt-suggestion {
  display: block;
  width: 100%;
  padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
  clear: both;
  font-weight: 400;
  color: var(--bs-dropdown-link-color);
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}
.dropdown-item:hover, .tt-menu .tt-suggestion:hover, .dropdown-item:focus, .tt-menu .tt-suggestion:focus {
  color: var(--bs-dropdown-link-hover-color);
  background-color: var(--bs-dropdown-link-hover-bg);
}
.dropdown-item.active, .tt-menu .active.tt-suggestion, .dropdown-item:active, .tt-menu .tt-suggestion:active {
  color: var(--bs-dropdown-link-active-color);
  text-decoration: none;
  background-color: var(--bs-dropdown-link-active-bg);
}
.dropdown-item.disabled, .tt-menu .disabled.tt-suggestion, .dropdown-item:disabled, .tt-menu .tt-suggestion:disabled {
  color: var(--bs-dropdown-link-disabled-color);
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show, .show.tt-menu {
  display: block;
}

.dropdown-header {
  display: block;
  padding: var(--bs-dropdown-header-padding-y) var(--bs-dropdown-header-padding-x);
  margin-bottom: 0;
  font-size: 0.812rem;
  color: var(--bs-dropdown-header-color);
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
  color: var(--bs-dropdown-link-color);
}

.dropdown-menu-dark {
  --bs-dropdown-color: #dee2e6;
  --bs-dropdown-bg: #212a3a;
  --bs-dropdown-border-color: #f2f4f9;
  --bs-dropdown-box-shadow: ;
  --bs-dropdown-link-color: #dee2e6;
  --bs-dropdown-link-hover-color: #fff;
  --bs-dropdown-divider-bg: #f2f4f9;
  --bs-dropdown-link-hover-bg: rgba(255, 255, 255, 0.15);
  --bs-dropdown-link-active-color: #fff;
  --bs-dropdown-link-active-bg: #6571ff;
  --bs-dropdown-link-disabled-color: #adb5bd;
  --bs-dropdown-header-color: #adb5bd;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group > .btn, .wizard > .actions .btn-group > a, div.tox .btn-group > .tox-button, .swal2-popup .swal2-actions .btn-group > button, div.fc .btn-group > .fc-button-primary,
.btn-group-vertical > .btn,
.wizard > .actions .btn-group-vertical > a,
div.tox .btn-group-vertical > .tox-button,
.swal2-popup .swal2-actions .btn-group-vertical > button,
div.fc .btn-group-vertical > .fc-button-primary {
  position: relative;
  flex: 1 1 auto;
}
.btn-group > .btn-check:checked + .btn, .wizard > .actions .btn-group > .btn-check:checked + a, div.tox .btn-group > .btn-check:checked + .tox-button, .swal2-popup .swal2-actions .btn-group > .btn-check:checked + button, div.fc .btn-group > .btn-check:checked + .fc-button-primary,
.btn-group > .btn-check:focus + .btn,
.wizard > .actions .btn-group > .btn-check:focus + a,
div.tox .btn-group > .btn-check:focus + .tox-button,
.swal2-popup .swal2-actions .btn-group > .btn-check:focus + button,
div.fc .btn-group > .btn-check:focus + .fc-button-primary,
.btn-group > .btn:hover,
.wizard > .actions .btn-group > a:hover,
div.tox .btn-group > .tox-button:hover,
.swal2-popup .swal2-actions .btn-group > button:hover,
div.fc .btn-group > .fc-button-primary:hover,
.btn-group > .btn:focus,
.wizard > .actions .btn-group > a:focus,
div.tox .btn-group > .tox-button:focus,
.swal2-popup .swal2-actions .btn-group > button:focus,
div.fc .btn-group > .fc-button-primary:focus,
.btn-group > .btn:active,
.wizard > .actions .btn-group > a:active,
div.tox .btn-group > .tox-button:active,
.swal2-popup .swal2-actions .btn-group > button:active,
div.fc .btn-group > .fc-button-primary:active,
.btn-group > .btn.active,
.wizard > .actions .btn-group > a.active,
div.tox .btn-group > .active.tox-button,
.swal2-popup .swal2-actions .btn-group > button.active,
div.fc .btn-group > .active.fc-button-primary,
.btn-group-vertical > .btn-check:checked + .btn,
.wizard > .actions .btn-group-vertical > .btn-check:checked + a,
div.tox .btn-group-vertical > .btn-check:checked + .tox-button,
.swal2-popup .swal2-actions .btn-group-vertical > .btn-check:checked + button,
div.fc .btn-group-vertical > .btn-check:checked + .fc-button-primary,
.btn-group-vertical > .btn-check:focus + .btn,
.wizard > .actions .btn-group-vertical > .btn-check:focus + a,
div.tox .btn-group-vertical > .btn-check:focus + .tox-button,
.swal2-popup .swal2-actions .btn-group-vertical > .btn-check:focus + button,
div.fc .btn-group-vertical > .btn-check:focus + .fc-button-primary,
.btn-group-vertical > .btn:hover,
.wizard > .actions .btn-group-vertical > a:hover,
div.tox .btn-group-vertical > .tox-button:hover,
.swal2-popup .swal2-actions .btn-group-vertical > button:hover,
div.fc .btn-group-vertical > .fc-button-primary:hover,
.btn-group-vertical > .btn:focus,
.wizard > .actions .btn-group-vertical > a:focus,
div.tox .btn-group-vertical > .tox-button:focus,
.swal2-popup .swal2-actions .btn-group-vertical > button:focus,
div.fc .btn-group-vertical > .fc-button-primary:focus,
.btn-group-vertical > .btn:active,
.wizard > .actions .btn-group-vertical > a:active,
div.tox .btn-group-vertical > .tox-button:active,
.swal2-popup .swal2-actions .btn-group-vertical > button:active,
div.fc .btn-group-vertical > .fc-button-primary:active,
.btn-group-vertical > .btn.active,
.wizard > .actions .btn-group-vertical > a.active,
div.tox .btn-group-vertical > .active.tox-button,
.swal2-popup .swal2-actions .btn-group-vertical > button.active,
div.fc .btn-group-vertical > .active.fc-button-primary {
  z-index: 1;
}

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}

.btn-group {
  border-radius: 0.25rem;
}
.btn-group > :not(.btn-check:first-child) + .btn, .wizard > .actions .btn-group > :not(.btn-check:first-child) + a, div.tox .btn-group > :not(.btn-check:first-child) + .tox-button, .swal2-popup .swal2-actions .btn-group > :not(.btn-check:first-child) + button, div.fc .btn-group > :not(.btn-check:first-child) + .fc-button-primary,
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}
.btn-group > .btn:not(:last-child):not(.dropdown-toggle), .wizard > .actions .btn-group > a:not(:last-child):not(.dropdown-toggle), div.tox .btn-group > .tox-button:not(:last-child):not(.dropdown-toggle), .swal2-popup .swal2-actions .btn-group > button:not(:last-child):not(.dropdown-toggle), div.fc .btn-group > .fc-button-primary:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn.dropdown-toggle-split:first-child,
.wizard > .actions .btn-group > a.dropdown-toggle-split:first-child,
div.tox .btn-group > .dropdown-toggle-split.tox-button:first-child,
.swal2-popup .swal2-actions .btn-group > button.dropdown-toggle-split:first-child,
div.fc .btn-group > .dropdown-toggle-split.fc-button-primary:first-child,
.btn-group > .btn-group:not(:last-child) > .btn,
.wizard > .actions .btn-group > .btn-group:not(:last-child) > a,
div.tox .btn-group > .btn-group:not(:last-child) > .tox-button,
.swal2-popup .swal2-actions .btn-group > .btn-group:not(:last-child) > button,
div.fc .btn-group > .btn-group:not(:last-child) > .fc-button-primary {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:nth-child(n+3), .wizard > .actions .btn-group > a:nth-child(n+3), div.tox .btn-group > .tox-button:nth-child(n+3), .swal2-popup .swal2-actions .btn-group > button:nth-child(n+3), div.fc .btn-group > .fc-button-primary:nth-child(n+3),
.btn-group > :not(.btn-check) + .btn,
.wizard > .actions .btn-group > :not(.btn-check) + a,
div.tox .btn-group > :not(.btn-check) + .tox-button,
.swal2-popup .swal2-actions .btn-group > :not(.btn-check) + button,
div.fc .btn-group > :not(.btn-check) + .fc-button-primary,
.btn-group > .btn-group:not(:first-child) > .btn,
.wizard > .actions .btn-group > .btn-group:not(:first-child) > a,
div.tox .btn-group > .btn-group:not(:first-child) > .tox-button,
.swal2-popup .swal2-actions .btn-group > .btn-group:not(:first-child) > button,
div.fc .btn-group > .btn-group:not(:first-child) > .fc-button-primary {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 0.6rem;
  padding-left: 0.6rem;
}
.dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropend .dropdown-toggle-split::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, div.fc .fc-button-primary + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split, .wizard > .actions .btn-group-sm > a + .dropdown-toggle-split, div.tox .btn-group-sm > .tox-button + .dropdown-toggle-split, .swal2-popup .swal2-actions .btn-group-sm > button + .dropdown-toggle-split {
  padding-right: 0.6rem;
  padding-left: 0.6rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split, .wizard > .actions .btn-group-lg > a + .dropdown-toggle-split, div.tox .btn-group-lg > .tox-button + .dropdown-toggle-split, .swal2-popup .swal2-actions .btn-group-lg > button + .dropdown-toggle-split, div.fc .btn-group-lg > .fc-button-primary + .dropdown-toggle-split {
  padding-right: 0.6rem;
  padding-left: 0.6rem;
}

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}
.btn-group-vertical > .btn, .wizard > .actions .btn-group-vertical > a, div.tox .btn-group-vertical > .tox-button, .swal2-popup .swal2-actions .btn-group-vertical > button, div.fc .btn-group-vertical > .fc-button-primary,
.btn-group-vertical > .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn:not(:first-child), .wizard > .actions .btn-group-vertical > a:not(:first-child), div.tox .btn-group-vertical > .tox-button:not(:first-child), .swal2-popup .swal2-actions .btn-group-vertical > button:not(:first-child), div.fc .btn-group-vertical > .fc-button-primary:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle), .wizard > .actions .btn-group-vertical > a:not(:last-child):not(.dropdown-toggle), div.tox .btn-group-vertical > .tox-button:not(:last-child):not(.dropdown-toggle), .swal2-popup .swal2-actions .btn-group-vertical > button:not(:last-child):not(.dropdown-toggle), div.fc .btn-group-vertical > .fc-button-primary:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn,
.wizard > .actions .btn-group-vertical > .btn-group:not(:last-child) > a,
div.tox .btn-group-vertical > .btn-group:not(:last-child) > .tox-button,
.swal2-popup .swal2-actions .btn-group-vertical > .btn-group:not(:last-child) > button,
div.fc .btn-group-vertical > .btn-group:not(:last-child) > .fc-button-primary {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn ~ .btn, .wizard > .actions .btn-group-vertical > a ~ .btn, .wizard > .actions .btn-group-vertical > .btn ~ a, .wizard > .actions .btn-group-vertical > a ~ a, div.tox .btn-group-vertical > .tox-button ~ .btn, div.tox .wizard > .actions .btn-group-vertical > .tox-button ~ a, .wizard > .actions div.tox .btn-group-vertical > .tox-button ~ a, div.tox .btn-group-vertical > .btn ~ .tox-button, div.tox .wizard > .actions .btn-group-vertical > a ~ .tox-button, .wizard > .actions div.tox .btn-group-vertical > a ~ .tox-button, div.tox .btn-group-vertical > .tox-button ~ .tox-button, .swal2-popup .swal2-actions .btn-group-vertical > button ~ .btn, .swal2-popup .swal2-actions .wizard > .actions .btn-group-vertical > button ~ a, .wizard > .actions .swal2-popup .swal2-actions .btn-group-vertical > button ~ a, .swal2-popup .swal2-actions div.tox .btn-group-vertical > button ~ .tox-button, div.tox .swal2-popup .swal2-actions .btn-group-vertical > button ~ .tox-button, .swal2-popup .swal2-actions .btn-group-vertical > .btn ~ button, .swal2-popup .swal2-actions .wizard > .actions .btn-group-vertical > a ~ button, .wizard > .actions .swal2-popup .swal2-actions .btn-group-vertical > a ~ button, .swal2-popup .swal2-actions div.tox .btn-group-vertical > .tox-button ~ button, div.tox .swal2-popup .swal2-actions .btn-group-vertical > .tox-button ~ button, .swal2-popup .swal2-actions .btn-group-vertical > button ~ button, div.fc .btn-group-vertical > .fc-button-primary ~ .btn, div.fc .wizard > .actions .btn-group-vertical > .fc-button-primary ~ a, .wizard > .actions div.fc .btn-group-vertical > .fc-button-primary ~ a, div.fc div.tox .btn-group-vertical > .fc-button-primary ~ .tox-button, div.tox div.fc .btn-group-vertical > .fc-button-primary ~ .tox-button, div.fc .swal2-popup .swal2-actions .btn-group-vertical > .fc-button-primary ~ button, .swal2-popup .swal2-actions div.fc .btn-group-vertical > .fc-button-primary ~ button, div.fc .btn-group-vertical > .btn ~ .fc-button-primary, div.fc .wizard > .actions .btn-group-vertical > a ~ .fc-button-primary, .wizard > .actions div.fc .btn-group-vertical > a ~ .fc-button-primary, div.fc div.tox .btn-group-vertical > .tox-button ~ .fc-button-primary, div.tox div.fc .btn-group-vertical > .tox-button ~ .fc-button-primary, div.fc .swal2-popup .swal2-actions .btn-group-vertical > button ~ .fc-button-primary, .swal2-popup .swal2-actions div.fc .btn-group-vertical > button ~ .fc-button-primary, div.fc .btn-group-vertical > .fc-button-primary ~ .fc-button-primary,
.btn-group-vertical > .btn-group:not(:first-child) > .btn,
.wizard > .actions .btn-group-vertical > .btn-group:not(:first-child) > a,
div.tox .btn-group-vertical > .btn-group:not(:first-child) > .tox-button,
.swal2-popup .swal2-actions .btn-group-vertical > .btn-group:not(:first-child) > button,
div.fc .btn-group-vertical > .btn-group:not(:first-child) > .fc-button-primary {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav {
  --bs-nav-link-padding-x: 1rem;
  --bs-nav-link-padding-y: 0.5rem;
  --bs-nav-link-font-weight: ;
  --bs-nav-link-color: var(--bs-link-color);
  --bs-nav-link-hover-color: var(--bs-link-hover-color);
  --bs-nav-link-disabled-color: #7987a1;
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
  font-size: var(--bs-nav-link-font-size);
  font-weight: var(--bs-nav-link-font-weight);
  color: var(--bs-nav-link-color);
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .nav-link {
    transition: none;
  }
}
.nav-link:hover, .nav-link:focus {
  color: var(--bs-nav-link-hover-color);
}
.nav-link.disabled {
  color: var(--bs-nav-link-disabled-color);
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  --bs-nav-tabs-border-width: 1px;
  --bs-nav-tabs-border-color: #dee2e6;
  --bs-nav-tabs-border-radius: 0.25rem;
  --bs-nav-tabs-link-hover-border-color: #e9ecef #e9ecef #dee2e6;
  --bs-nav-tabs-link-active-color: #495057;
  --bs-nav-tabs-link-active-bg: #fff;
  --bs-nav-tabs-link-active-border-color: #dee2e6 #dee2e6 #fff;
  border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color);
}
.nav-tabs .nav-link {
  margin-bottom: calc(-1 * var(--bs-nav-tabs-border-width));
  background: none;
  border: var(--bs-nav-tabs-border-width) solid transparent;
  border-top-left-radius: var(--bs-nav-tabs-border-radius);
  border-top-right-radius: var(--bs-nav-tabs-border-radius);
}
.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  isolation: isolate;
  border-color: var(--bs-nav-tabs-link-hover-border-color);
}
.nav-tabs .nav-link.disabled, .nav-tabs .nav-link:disabled {
  color: var(--bs-nav-link-disabled-color);
  background-color: transparent;
  border-color: transparent;
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: var(--bs-nav-tabs-link-active-color);
  background-color: var(--bs-nav-tabs-link-active-bg);
  border-color: var(--bs-nav-tabs-link-active-border-color);
}
.nav-tabs .dropdown-menu, .nav-tabs .tt-menu {
  margin-top: calc(-1 * var(--bs-nav-tabs-border-width));
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills {
  --bs-nav-pills-border-radius: 0.25rem;
  --bs-nav-pills-link-active-color: #fff;
  --bs-nav-pills-link-active-bg: #6571ff;
}
.nav-pills .nav-link {
  background: none;
  border: 0;
  border-radius: var(--bs-nav-pills-border-radius);
}
.nav-pills .nav-link:disabled {
  color: var(--bs-nav-link-disabled-color);
  background-color: transparent;
  border-color: transparent;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: var(--bs-nav-pills-link-active-color);
  background-color: var(--bs-nav-pills-link-active-bg);
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%;
}

.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}

.navbar {
  --bs-navbar-padding-x: 0;
  --bs-navbar-padding-y: 0.5rem;
  --bs-navbar-color: rgba(0, 0, 0, 0.55);
  --bs-navbar-hover-color: rgba(0, 0, 0, 0.7);
  --bs-navbar-disabled-color: rgba(0, 0, 0, 0.3);
  --bs-navbar-active-color: rgba(0, 0, 0, 0.9);
  --bs-navbar-brand-padding-y: 0.40625rem;
  --bs-navbar-brand-margin-end: 1rem;
  --bs-navbar-brand-font-size: 1rem;
  --bs-navbar-brand-color: rgba(0, 0, 0, 0.9);
  --bs-navbar-brand-hover-color: rgba(0, 0, 0, 0.9);
  --bs-navbar-nav-link-padding-x: 0.5rem;
  --bs-navbar-toggler-padding-y: 0.25rem;
  --bs-navbar-toggler-padding-x: 0.75rem;
  --bs-navbar-toggler-font-size: 1rem;
  --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
  --bs-navbar-toggler-border-color: rgba(0, 0, 0, 0.1);
  --bs-navbar-toggler-border-radius: 0.25rem;
  --bs-navbar-toggler-focus-width: 0;
  --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
}
.navbar > .container,
.navbar > .container-fluid,
.navbar > .container-sm,
.navbar > .container-md,
.navbar > .container-lg,
.navbar > .container-xl,
.navbar > .container-xxl {
  display: flex;
  flex-wrap: inherit;
  align-items: center;
  justify-content: space-between;
}
.navbar-brand {
  padding-top: var(--bs-navbar-brand-padding-y);
  padding-bottom: var(--bs-navbar-brand-padding-y);
  margin-right: var(--bs-navbar-brand-margin-end);
  font-size: var(--bs-navbar-brand-font-size);
  color: var(--bs-navbar-brand-color);
  white-space: nowrap;
}
.navbar-brand:hover, .navbar-brand:focus {
  color: var(--bs-navbar-brand-hover-color);
}

.navbar-nav {
  --bs-nav-link-padding-x: 0;
  --bs-nav-link-padding-y: 0.5rem;
  --bs-nav-link-font-weight: ;
  --bs-nav-link-color: var(--bs-navbar-color);
  --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
  --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .show > .nav-link,
.navbar-nav .nav-link.active {
  color: var(--bs-navbar-active-color);
}
.navbar-nav .dropdown-menu, .navbar-nav .tt-menu {
  position: static;
}

.navbar-text {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: var(--bs-navbar-color);
}
.navbar-text a,
.navbar-text a:hover,
.navbar-text a:focus {
  color: var(--bs-navbar-active-color);
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
  font-size: var(--bs-navbar-toggler-font-size);
  line-height: 1;
  color: var(--bs-navbar-color);
  background-color: transparent;
  border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
  border-radius: var(--bs-navbar-toggler-border-radius);
  transition: var(--bs-navbar-toggler-transition);
}
@media (prefers-reduced-motion: reduce) {
  .navbar-toggler {
    transition: none;
  }
}
.navbar-toggler:hover {
  text-decoration: none;
}
.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width);
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-image: var(--bs-navbar-toggler-icon-bg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-nav-scroll {
  max-height: var(--bs-scroll-height, 75vh);
  overflow-y: auto;
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu, .navbar-expand-sm .navbar-nav .tt-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
  .navbar-expand-sm .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu, .navbar-expand-md .navbar-nav .tt-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
  .navbar-expand-md .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu, .navbar-expand-lg .navbar-nav .tt-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
  .navbar-expand-lg .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu, .navbar-expand-xl .navbar-nav .tt-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xl .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1400px) {
  .navbar-expand-xxl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xxl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu, .navbar-expand-xxl .navbar-nav .tt-menu {
    position: absolute;
  }
  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xxl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xxl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xxl .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-xxl .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-xxl .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
.navbar-expand {
  flex-wrap: nowrap;
  justify-content: flex-start;
}
.navbar-expand .navbar-nav {
  flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu, .navbar-expand .navbar-nav .tt-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: var(--bs-navbar-nav-link-padding-x);
  padding-left: var(--bs-navbar-nav-link-padding-x);
}
.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}
.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}
.navbar-expand .offcanvas {
  position: static;
  z-index: auto;
  flex-grow: 1;
  width: auto !important;
  height: auto !important;
  visibility: visible !important;
  background-color: transparent !important;
  border: 0 !important;
  transform: none !important;
  transition: none;
}
.navbar-expand .offcanvas .offcanvas-header {
  display: none;
}
.navbar-expand .offcanvas .offcanvas-body {
  display: flex;
  flex-grow: 0;
  padding: 0;
  overflow-y: visible;
}

.navbar-dark {
  --bs-navbar-color: rgba(255, 255, 255, 0.55);
  --bs-navbar-hover-color: rgba(255, 255, 255, 0.75);
  --bs-navbar-disabled-color: rgba(255, 255, 255, 0.25);
  --bs-navbar-active-color: #fff;
  --bs-navbar-brand-color: #fff;
  --bs-navbar-brand-hover-color: #fff;
  --bs-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
  --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.card {
  --bs-card-spacer-y: 1.5rem;
  --bs-card-spacer-x: 1.5rem;
  --bs-card-title-spacer-y: 0.875rem;
  --bs-card-border-width: 1px;
  --bs-card-border-color: #f2f4f9;
  --bs-card-border-radius: 0.25rem;
  --bs-card-box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
  --bs-card-inner-border-radius: calc(0.25rem - 1px);
  --bs-card-cap-padding-y: 0.875rem;
  --bs-card-cap-padding-x: 1.5rem;
  --bs-card-cap-bg: rgba(0, 0, 0, 0.01);
  --bs-card-cap-color: ;
  --bs-card-height: ;
  --bs-card-color: ;
  --bs-card-bg: #fff;
  --bs-card-img-overlay-padding: 1rem;
  --bs-card-group-margin: 0.75rem;
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  height: var(--bs-card-height);
  word-wrap: break-word;
  background-color: var(--bs-card-bg);
  background-clip: border-box;
  border: var(--bs-card-border-width) solid var(--bs-card-border-color);
  border-radius: var(--bs-card-border-radius);
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: var(--bs-card-inner-border-radius);
  border-top-right-radius: var(--bs-card-inner-border-radius);
}
.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: var(--bs-card-inner-border-radius);
  border-bottom-left-radius: var(--bs-card-inner-border-radius);
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}

.card-body {
  flex: 1 1 auto;
  padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
  color: var(--bs-card-color);
}

.card-title {
  margin-bottom: var(--bs-card-title-spacer-y);
}

.card-subtitle {
  margin-top: calc(-0.5 * var(--bs-card-title-spacer-y));
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link + .card-link {
  margin-left: var(--bs-card-spacer-x);
}

.card-header {
  padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
  margin-bottom: 0;
  color: var(--bs-card-cap-color);
  background-color: var(--bs-card-cap-bg);
  border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-header:first-child {
  border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
}

.card-footer {
  padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
  color: var(--bs-card-cap-color);
  background-color: var(--bs-card-cap-bg);
  border-top: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-footer:last-child {
  border-radius: 0 0 var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius);
}

.card-header-tabs {
  margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
  margin-bottom: calc(-1 * var(--bs-card-cap-padding-y));
  margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
  border-bottom: 0;
}
.card-header-tabs .nav-link.active {
  background-color: var(--bs-card-bg);
  border-bottom-color: var(--bs-card-bg);
}

.card-header-pills {
  margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
  margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: var(--bs-card-img-overlay-padding);
  border-radius: var(--bs-card-inner-border-radius);
}

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%;
}

.card-img,
.card-img-top {
  border-top-left-radius: var(--bs-card-inner-border-radius);
  border-top-right-radius: var(--bs-card-inner-border-radius);
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: var(--bs-card-inner-border-radius);
  border-bottom-left-radius: var(--bs-card-inner-border-radius);
}

.card-group > .card {
  margin-bottom: var(--bs-card-group-margin);
}
@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }
  .card-group > .card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
  .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
  .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
  .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
  .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.accordion {
  --bs-accordion-color: #000;
  --bs-accordion-bg: #fff;
  --bs-accordion-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
  --bs-accordion-border-color: #e9ecef;
  --bs-accordion-border-width: 1px;
  --bs-accordion-border-radius: 0.25rem;
  --bs-accordion-inner-border-radius: calc(0.25rem - 1px);
  --bs-accordion-btn-padding-x: 1.25rem;
  --bs-accordion-btn-padding-y: 1rem;
  --bs-accordion-btn-color: #000;
  --bs-accordion-btn-bg: var(--bs-accordion-bg);
  --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  --bs-accordion-btn-icon-width: 0.875rem;
  --bs-accordion-btn-icon-transform: rotate(-180deg);
  --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
  --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%235b66e6'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  --bs-accordion-btn-focus-border-color: #ced4da;
  --bs-accordion-btn-focus-box-shadow: none;
  --bs-accordion-body-padding-x: 1.25rem;
  --bs-accordion-body-padding-y: 1rem;
  --bs-accordion-active-color: #5b66e6;
  --bs-accordion-active-bg: #f0f1ff;
}

.accordion-button {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
  font-size: 0.875rem;
  color: var(--bs-accordion-btn-color);
  text-align: left;
  background-color: var(--bs-accordion-btn-bg);
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  transition: var(--bs-accordion-transition);
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button {
    transition: none;
  }
}
.accordion-button:not(.collapsed) {
  color: var(--bs-accordion-active-color);
  background-color: var(--bs-accordion-active-bg);
  box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
}
.accordion-button:not(.collapsed)::after {
  background-image: var(--bs-accordion-btn-active-icon);
  transform: var(--bs-accordion-btn-icon-transform);
}
.accordion-button::after {
  flex-shrink: 0;
  width: var(--bs-accordion-btn-icon-width);
  height: var(--bs-accordion-btn-icon-width);
  margin-left: auto;
  content: "";
  background-image: var(--bs-accordion-btn-icon);
  background-repeat: no-repeat;
  background-size: var(--bs-accordion-btn-icon-width);
  transition: var(--bs-accordion-btn-icon-transition);
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button::after {
    transition: none;
  }
}
.accordion-button:hover {
  z-index: 2;
}
.accordion-button:focus {
  z-index: 3;
  border-color: var(--bs-accordion-btn-focus-border-color);
  outline: 0;
  box-shadow: var(--bs-accordion-btn-focus-box-shadow);
}

.accordion-header {
  margin-bottom: 0;
}

.accordion-item {
  color: var(--bs-accordion-color);
  background-color: var(--bs-accordion-bg);
  border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);
}
.accordion-item:first-of-type {
  border-top-left-radius: var(--bs-accordion-border-radius);
  border-top-right-radius: var(--bs-accordion-border-radius);
}
.accordion-item:first-of-type .accordion-button {
  border-top-left-radius: var(--bs-accordion-inner-border-radius);
  border-top-right-radius: var(--bs-accordion-inner-border-radius);
}
.accordion-item:not(:first-of-type) {
  border-top: 0;
}
.accordion-item:last-of-type {
  border-bottom-right-radius: var(--bs-accordion-border-radius);
  border-bottom-left-radius: var(--bs-accordion-border-radius);
}
.accordion-item:last-of-type .accordion-button.collapsed {
  border-bottom-right-radius: var(--bs-accordion-inner-border-radius);
  border-bottom-left-radius: var(--bs-accordion-inner-border-radius);
}
.accordion-item:last-of-type .accordion-collapse {
  border-bottom-right-radius: var(--bs-accordion-border-radius);
  border-bottom-left-radius: var(--bs-accordion-border-radius);
}

.accordion-body {
  padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x);
}

.accordion-flush .accordion-collapse {
  border-width: 0;
}
.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}
.accordion-flush .accordion-item:first-child {
  border-top: 0;
}
.accordion-flush .accordion-item:last-child {
  border-bottom: 0;
}
.accordion-flush .accordion-item .accordion-button, .accordion-flush .accordion-item .accordion-button.collapsed {
  border-radius: 0;
}

.breadcrumb {
  --bs-breadcrumb-padding-x: 0;
  --bs-breadcrumb-padding-y: 0;
  --bs-breadcrumb-margin-bottom: 1rem;
  --bs-breadcrumb-bg: ;
  --bs-breadcrumb-border-radius: ;
  --bs-breadcrumb-divider-color: #7987a1;
  --bs-breadcrumb-item-padding-x: 0.5rem;
  --bs-breadcrumb-item-active-color: #7987a1;
  display: flex;
  flex-wrap: wrap;
  padding: var(--bs-breadcrumb-padding-y) var(--bs-breadcrumb-padding-x);
  margin-bottom: var(--bs-breadcrumb-margin-bottom);
  font-size: var(--bs-breadcrumb-font-size);
  list-style: none;
  background-color: var(--bs-breadcrumb-bg);
  border-radius: var(--bs-breadcrumb-border-radius);
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: var(--bs-breadcrumb-item-padding-x);
}
.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: var(--bs-breadcrumb-item-padding-x);
  color: var(--bs-breadcrumb-divider-color);
  content: var(--bs-breadcrumb-divider, "/") /* rtl: var(--bs-breadcrumb-divider, "/") */;
}
.breadcrumb-item.active {
  color: var(--bs-breadcrumb-item-active-color);
}

.pagination {
  --bs-pagination-padding-x: 1rem;
  --bs-pagination-padding-y: 0.469rem;
  --bs-pagination-font-size: 0.875rem;
  --bs-pagination-color: #6571ff;
  --bs-pagination-bg: #fff;
  --bs-pagination-border-width: 1px;
  --bs-pagination-border-color: #dee2e6;
  --bs-pagination-border-radius: 0.25rem;
  --bs-pagination-hover-color: var(--bs-link-hover-color);
  --bs-pagination-hover-bg: #e9ecef;
  --bs-pagination-hover-border-color: #dee2e6;
  --bs-pagination-focus-color: var(--bs-link-hover-color);
  --bs-pagination-focus-bg: #e9ecef;
  --bs-pagination-focus-box-shadow: none;
  --bs-pagination-active-color: #fff;
  --bs-pagination-active-bg: #6571ff;
  --bs-pagination-active-border-color: #6571ff;
  --bs-pagination-disabled-color: #7987a1;
  --bs-pagination-disabled-bg: #fff;
  --bs-pagination-disabled-border-color: #dee2e6;
  display: flex;
  padding-left: 0;
  list-style: none;
}

.page-link {
  position: relative;
  display: block;
  padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
  font-size: var(--bs-pagination-font-size);
  color: var(--bs-pagination-color);
  background-color: var(--bs-pagination-bg);
  border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .page-link {
    transition: none;
  }
}
.page-link:hover {
  z-index: 2;
  color: var(--bs-pagination-hover-color);
  background-color: var(--bs-pagination-hover-bg);
  border-color: var(--bs-pagination-hover-border-color);
}
.page-link:focus {
  z-index: 3;
  color: var(--bs-pagination-focus-color);
  background-color: var(--bs-pagination-focus-bg);
  outline: 0;
  box-shadow: var(--bs-pagination-focus-box-shadow);
}
.page-link.active, .active > .page-link {
  z-index: 3;
  color: var(--bs-pagination-active-color);
  background-color: var(--bs-pagination-active-bg);
  border-color: var(--bs-pagination-active-border-color);
}
.page-link.disabled, .disabled > .page-link {
  color: var(--bs-pagination-disabled-color);
  pointer-events: none;
  background-color: var(--bs-pagination-disabled-bg);
  border-color: var(--bs-pagination-disabled-border-color);
}

.page-item:not(:first-child) .page-link {
  margin-left: -1px;
}
.page-item:first-child .page-link {
  border-top-left-radius: var(--bs-pagination-border-radius);
  border-bottom-left-radius: var(--bs-pagination-border-radius);
}
.page-item:last-child .page-link {
  border-top-right-radius: var(--bs-pagination-border-radius);
  border-bottom-right-radius: var(--bs-pagination-border-radius);
}

.pagination-lg {
  --bs-pagination-padding-x: 1.1rem;
  --bs-pagination-padding-y: 0.5rem;
  --bs-pagination-font-size: 1rem;
  --bs-pagination-border-radius: 0.5rem;
}

.pagination-sm {
  --bs-pagination-padding-x: 0.75rem;
  --bs-pagination-padding-y: 0.391rem;
  --bs-pagination-font-size: 0.812rem;
  --bs-pagination-border-radius: 0.25rem;
}

.badge {
  --bs-badge-padding-x: 0.65em;
  --bs-badge-padding-y: 0.35em;
  --bs-badge-font-size: 0.8em;
  --bs-badge-font-weight: 500;
  --bs-badge-color: #fff;
  --bs-badge-border-radius: 0.25rem;
  display: inline-block;
  padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
  font-size: var(--bs-badge-font-size);
  font-weight: var(--bs-badge-font-weight);
  line-height: 1;
  color: var(--bs-badge-color);
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: var(--bs-badge-border-radius);
}
.badge:empty {
  display: none;
}

.btn .badge, .wizard > .actions a .badge, div.tox .tox-button .badge, .swal2-popup .swal2-actions button .badge, div.fc .fc-button-primary .badge {
  position: relative;
  top: -1px;
}

.alert {
  --bs-alert-bg: transparent;
  --bs-alert-padding-x: 1rem;
  --bs-alert-padding-y: 1rem;
  --bs-alert-margin-bottom: 1rem;
  --bs-alert-color: inherit;
  --bs-alert-border-color: transparent;
  --bs-alert-border: 1px solid var(--bs-alert-border-color);
  --bs-alert-border-radius: 0.25rem;
  position: relative;
  padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
  margin-bottom: var(--bs-alert-margin-bottom);
  color: var(--bs-alert-color);
  background-color: var(--bs-alert-bg);
  border: var(--bs-alert-border);
  border-radius: var(--bs-alert-border-radius);
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 500;
}

.alert-dismissible {
  padding-right: 3rem;
}
.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.25rem 1rem;
}

.alert-primary {
  --bs-alert-color: #3d4499;
  --bs-alert-bg: #e0e3ff;
  --bs-alert-border-color: #d1d4ff;
}
.alert-primary .alert-link {
  color: #31367a;
}

.alert-secondary {
  --bs-alert-color: #495161;
  --bs-alert-bg: #e4e7ec;
  --bs-alert-border-color: #d7dbe3;
}
.alert-secondary .alert-link {
  color: #3a414e;
}

.alert-success {
  --bs-alert-color: #03622c;
  --bs-alert-bg: #cdeddb;
  --bs-alert-border-color: #b4e3c9;
}
.alert-success .alert-link {
  color: #024e23;
}

.alert-info {
  --bs-alert-color: #3d7d7d;
  --bs-alert-bg: #e0f6f6;
  --bs-alert-border-color: #d1f1f1;
}
.alert-info .alert-link {
  color: #316464;
}

.alert-warning {
  --bs-alert-color: #977104;
  --bs-alert-bg: #fef2cd;
  --bs-alert-border-color: #feebb4;
}
.alert-warning .alert-link {
  color: #795a03;
}

.alert-danger {
  --bs-alert-color: #991f3d;
  --bs-alert-bg: #ffd6e0;
  --bs-alert-border-color: #ffc2d1;
}
.alert-danger .alert-link {
  color: #7a1931;
}

.alert-light {
  --bs-alert-color: #8c8e8f;
  --bs-alert-bg: #fbfbfc;
  --bs-alert-border-color: #f8f9fa;
}
.alert-light .alert-link {
  color: #707272;
}

.alert-dark {
  --bs-alert-color: #04070e;
  --bs-alert-bg: #cdced1;
  --bs-alert-border-color: #b4b6b9;
}
.alert-dark .alert-link {
  color: #03060b;
}

@keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem;
  }
}
.progress {
  --bs-progress-height: 1rem;
  --bs-progress-font-size: 0.65625rem;
  --bs-progress-bg: #e9ecef;
  --bs-progress-border-radius: 0.25rem;
  --bs-progress-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
  --bs-progress-bar-color: #fff;
  --bs-progress-bar-bg: #6571ff;
  --bs-progress-bar-transition: width 0.6s ease;
  display: flex;
  height: var(--bs-progress-height);
  overflow: hidden;
  font-size: var(--bs-progress-font-size);
  background-color: var(--bs-progress-bg);
  border-radius: var(--bs-progress-border-radius);
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: var(--bs-progress-bar-color);
  text-align: center;
  white-space: nowrap;
  background-color: var(--bs-progress-bar-bg);
  transition: var(--bs-progress-bar-transition);
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: var(--bs-progress-height) var(--bs-progress-height);
}

.progress-bar-animated {
  animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    animation: none;
  }
}

.list-group {
  --bs-list-group-color: #060c17;
  --bs-list-group-bg: #fff;
  --bs-list-group-border-color: rgba(0, 0, 0, 0.125);
  --bs-list-group-border-width: 1px;
  --bs-list-group-border-radius: 0.25rem;
  --bs-list-group-item-padding-x: 1.25rem;
  --bs-list-group-item-padding-y: 0.75rem;
  --bs-list-group-action-color: #495057;
  --bs-list-group-action-hover-color: #495057;
  --bs-list-group-action-hover-bg: #f8f9fa;
  --bs-list-group-action-active-color: #000;
  --bs-list-group-action-active-bg: #e9ecef;
  --bs-list-group-disabled-color: #7987a1;
  --bs-list-group-disabled-bg: #fff;
  --bs-list-group-active-color: #fff;
  --bs-list-group-active-bg: #6571ff;
  --bs-list-group-active-border-color: #6571ff;
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: var(--bs-list-group-border-radius);
}

.list-group-numbered {
  list-style-type: none;
  counter-reset: section;
}
.list-group-numbered > .list-group-item::before {
  content: counters(section, ".") ". ";
  counter-increment: section;
}

.list-group-item-action {
  width: 100%;
  color: var(--bs-list-group-action-color);
  text-align: inherit;
}
.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: var(--bs-list-group-action-hover-color);
  text-decoration: none;
  background-color: var(--bs-list-group-action-hover-bg);
}
.list-group-item-action:active {
  color: var(--bs-list-group-action-active-color);
  background-color: var(--bs-list-group-action-active-bg);
}

.list-group-item {
  position: relative;
  display: block;
  padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x);
  color: var(--bs-list-group-color);
  background-color: var(--bs-list-group-bg);
  border: var(--bs-list-group-border-width) solid var(--bs-list-group-border-color);
}
.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.list-group-item.disabled, .list-group-item:disabled {
  color: var(--bs-list-group-disabled-color);
  pointer-events: none;
  background-color: var(--bs-list-group-disabled-bg);
}
.list-group-item.active {
  z-index: 2;
  color: var(--bs-list-group-active-color);
  background-color: var(--bs-list-group-active-bg);
  border-color: var(--bs-list-group-active-border-color);
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
.list-group-item + .list-group-item.active {
  margin-top: calc(-1 * var(--bs-list-group-border-width));
  border-top-width: var(--bs-list-group-border-width);
}

.list-group-horizontal {
  flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child:not(:last-child) {
  border-bottom-left-radius: var(--bs-list-group-border-radius);
  border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child:not(:first-child) {
  border-top-right-radius: var(--bs-list-group-border-radius);
  border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: var(--bs-list-group-border-width);
  border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: calc(-1 * var(--bs-list-group-border-width));
  border-left-width: var(--bs-list-group-border-width);
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    flex-direction: row;
  }
  .list-group-horizontal-xxl > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
.list-group-flush {
  border-radius: 0;
}
.list-group-flush > .list-group-item {
  border-width: 0 0 var(--bs-list-group-border-width);
}
.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  color: #3d4499;
  background-color: #e0e3ff;
}
.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #3d4499;
  background-color: #cacce6;
}
.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #3d4499;
  border-color: #3d4499;
}

.list-group-item-secondary {
  color: #495161;
  background-color: #e4e7ec;
}
.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #495161;
  background-color: #cdd0d4;
}
.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #495161;
  border-color: #495161;
}

.list-group-item-success {
  color: #03622c;
  background-color: #cdeddb;
}
.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #03622c;
  background-color: #b9d5c5;
}
.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #03622c;
  border-color: #03622c;
}

.list-group-item-info {
  color: #3d7d7d;
  background-color: #e0f6f6;
}
.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #3d7d7d;
  background-color: #cadddd;
}
.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #3d7d7d;
  border-color: #3d7d7d;
}

.list-group-item-warning {
  color: #977104;
  background-color: #fef2cd;
}
.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #977104;
  background-color: #e5dab9;
}
.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #977104;
  border-color: #977104;
}

.list-group-item-danger {
  color: #991f3d;
  background-color: #ffd6e0;
}
.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #991f3d;
  background-color: #e6c1ca;
}
.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #991f3d;
  border-color: #991f3d;
}

.list-group-item-light {
  color: #8c8e8f;
  background-color: #fbfbfc;
}
.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #8c8e8f;
  background-color: #e2e2e3;
}
.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #8c8e8f;
  border-color: #8c8e8f;
}

.list-group-item-dark {
  color: #04070e;
  background-color: #cdced1;
}
.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #04070e;
  background-color: #b9b9bc;
}
.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #04070e;
  border-color: #04070e;
}

.btn-close {
  box-sizing: content-box;
  width: 0.8em;
  height: 0.8em;
  padding: 0.25em 0.25em;
  color: #000;
  background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e") center/0.8em auto no-repeat;
  border: 0;
  border-radius: 0.25rem;
  opacity: 0.5;
}
.btn-close:hover {
  color: #000;
  text-decoration: none;
  opacity: 0.75;
}
.btn-close:focus {
  outline: 0;
  box-shadow: none;
  opacity: 1;
}
.btn-close:disabled, .btn-close.disabled {
  pointer-events: none;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  opacity: 0.25;
}

.btn-close-white {
  filter: invert(1) grayscale(100%) brightness(200%);
}

.toast {
  --bs-toast-zindex: 1090;
  --bs-toast-padding-x: 0.75rem;
  --bs-toast-padding-y: 0.5rem;
  --bs-toast-spacing: 1.5rem;
  --bs-toast-max-width: 350px;
  --bs-toast-font-size: 0.875rem;
  --bs-toast-color: ;
  --bs-toast-bg: rgba(255, 255, 255, 0.85);
  --bs-toast-border-width: 1px;
  --bs-toast-border-color: var(--bs-border-color-translucent);
  --bs-toast-border-radius: 0.25rem;
  --bs-toast-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  --bs-toast-header-color: #7987a1;
  --bs-toast-header-bg: rgba(255, 255, 255, 0.85);
  --bs-toast-header-border-color: rgba(0, 0, 0, 0.05);
  width: var(--bs-toast-max-width);
  max-width: 100%;
  font-size: var(--bs-toast-font-size);
  color: var(--bs-toast-color);
  pointer-events: auto;
  background-color: var(--bs-toast-bg);
  background-clip: padding-box;
  border: var(--bs-toast-border-width) solid var(--bs-toast-border-color);
  box-shadow: var(--bs-toast-box-shadow);
  border-radius: var(--bs-toast-border-radius);
}
.toast.showing {
  opacity: 0;
}
.toast:not(.show) {
  display: none;
}

.toast-container {
  --bs-toast-zindex: 1090;
  position: absolute;
  z-index: var(--bs-toast-zindex);
  width: -moz-max-content;
  width: max-content;
  max-width: 100%;
  pointer-events: none;
}
.toast-container > :not(:last-child) {
  margin-bottom: var(--bs-toast-spacing);
}

.toast-header {
  display: flex;
  align-items: center;
  padding: var(--bs-toast-padding-y) var(--bs-toast-padding-x);
  color: var(--bs-toast-header-color);
  background-color: var(--bs-toast-header-bg);
  background-clip: padding-box;
  border-bottom: var(--bs-toast-border-width) solid var(--bs-toast-header-border-color);
  border-top-left-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
  border-top-right-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
}
.toast-header .btn-close {
  margin-right: calc(-0.5 * var(--bs-toast-padding-x));
  margin-left: var(--bs-toast-padding-x);
}

.toast-body {
  padding: var(--bs-toast-padding-x);
  word-wrap: break-word;
}

.modal {
  --bs-modal-zindex: 1055;
  --bs-modal-width: 500px;
  --bs-modal-padding: 1rem;
  --bs-modal-margin: 0.5rem;
  --bs-modal-color: ;
  --bs-modal-bg: #fff;
  --bs-modal-border-color: #e9ecef;
  --bs-modal-border-width: 1px;
  --bs-modal-border-radius: 0.5rem;
  --bs-modal-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  --bs-modal-inner-border-radius: calc(0.5rem - 1px);
  --bs-modal-header-padding-x: 1rem;
  --bs-modal-header-padding-y: 1rem;
  --bs-modal-header-padding: 1rem 1rem;
  --bs-modal-header-border-color: var(--bs-border-color);
  --bs-modal-header-border-width: 1px;
  --bs-modal-title-line-height: 1.5;
  --bs-modal-footer-gap: 0.5rem;
  --bs-modal-footer-bg: ;
  --bs-modal-footer-border-color: var(--bs-border-color);
  --bs-modal-footer-border-width: 1px;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--bs-modal-zindex);
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: var(--bs-modal-margin);
  pointer-events: none;
}
.modal.fade .modal-dialog {
  transition: transform 0.4s ease;
  transform: scale(0.8);
}
@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}
.modal.show .modal-dialog {
  transform: none;
}
.modal.modal-static .modal-dialog {
  transform: scale(1.02);
}

.modal-dialog-scrollable {
  height: calc(100% - var(--bs-modal-margin) * 2);
}
.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - var(--bs-modal-margin) * 2);
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  color: var(--bs-modal-color);
  pointer-events: auto;
  background-color: var(--bs-modal-bg);
  background-clip: padding-box;
  border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
  border-radius: var(--bs-modal-border-radius);
  outline: 0;
}

.modal-backdrop {
  --bs-backdrop-zindex: 1050;
  --bs-backdrop-bg: #000;
  --bs-backdrop-opacity: 0.5;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--bs-backdrop-zindex);
  width: 100vw;
  height: 100vh;
  background-color: var(--bs-backdrop-bg);
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: var(--bs-backdrop-opacity);
}

.modal-header {
  display: flex;
  flex-shrink: 0;
  align-items: center;
  justify-content: space-between;
  padding: var(--bs-modal-header-padding);
  border-bottom: var(--bs-modal-header-border-width) solid var(--bs-modal-header-border-color);
  border-top-left-radius: var(--bs-modal-inner-border-radius);
  border-top-right-radius: var(--bs-modal-inner-border-radius);
}
.modal-header .btn-close {
  padding: calc(var(--bs-modal-header-padding-y) * 0.5) calc(var(--bs-modal-header-padding-x) * 0.5);
  margin: calc(-0.5 * var(--bs-modal-header-padding-y)) calc(-0.5 * var(--bs-modal-header-padding-x)) calc(-0.5 * var(--bs-modal-header-padding-y)) auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: var(--bs-modal-title-line-height);
}

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: var(--bs-modal-padding);
}

.modal-footer {
  display: flex;
  flex-shrink: 0;
  flex-wrap: wrap;
  align-items: center;
  justify-content: flex-end;
  padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * 0.5);
  background-color: var(--bs-modal-footer-bg);
  border-top: var(--bs-modal-footer-border-width) solid var(--bs-modal-footer-border-color);
  border-bottom-right-radius: var(--bs-modal-inner-border-radius);
  border-bottom-left-radius: var(--bs-modal-inner-border-radius);
}
.modal-footer > * {
  margin: calc(var(--bs-modal-footer-gap) * 0.5);
}

@media (min-width: 576px) {
  .modal {
    --bs-modal-margin: 1.75rem;
    --bs-modal-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  }
  .modal-dialog {
    max-width: var(--bs-modal-width);
    margin-right: auto;
    margin-left: auto;
  }
  .modal-sm {
    --bs-modal-width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    --bs-modal-width: 800px;
  }
}
@media (min-width: 1200px) {
  .modal-xl {
    --bs-modal-width: 1140px;
  }
}
.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}
.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
}
.modal-fullscreen .modal-header,
.modal-fullscreen .modal-footer {
  border-radius: 0;
}
.modal-fullscreen .modal-body {
  overflow-y: auto;
}

@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-header,
  .modal-fullscreen-sm-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-header,
  .modal-fullscreen-md-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-header,
  .modal-fullscreen-lg-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-header,
  .modal-fullscreen-xl-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xxl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-header,
  .modal-fullscreen-xxl-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-body {
    overflow-y: auto;
  }
}
.tooltip {
  --bs-tooltip-zindex: 1080;
  --bs-tooltip-max-width: 200px;
  --bs-tooltip-padding-x: 0.5rem;
  --bs-tooltip-padding-y: 0.25rem;
  --bs-tooltip-margin: ;
  --bs-tooltip-font-size: 0.812rem;
  --bs-tooltip-color: #fff;
  --bs-tooltip-bg: #000;
  --bs-tooltip-border-radius: 0.25rem;
  --bs-tooltip-opacity: 0.9;
  --bs-tooltip-arrow-width: 0.8rem;
  --bs-tooltip-arrow-height: 0.4rem;
  z-index: var(--bs-tooltip-zindex);
  display: block;
  padding: var(--bs-tooltip-arrow-height);
  margin: var(--bs-tooltip-margin);
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--bs-tooltip-font-size);
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: var(--bs-tooltip-opacity);
}
.tooltip .tooltip-arrow {
  display: block;
  width: var(--bs-tooltip-arrow-width);
  height: var(--bs-tooltip-arrow-height);
}
.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
  bottom: 0;
}
.bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
  top: -1px;
  border-width: var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
  border-top-color: var(--bs-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
  left: 0;
  width: var(--bs-tooltip-arrow-height);
  height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
  right: -1px;
  border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
  border-right-color: var(--bs-tooltip-bg);
}

/* rtl:end:ignore */
.bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
  top: 0;
}
.bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
  bottom: -1px;
  border-width: 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
  border-bottom-color: var(--bs-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
  right: 0;
  width: var(--bs-tooltip-arrow-height);
  height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
  left: -1px;
  border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
  border-left-color: var(--bs-tooltip-bg);
}

/* rtl:end:ignore */
.tooltip-inner {
  max-width: var(--bs-tooltip-max-width);
  padding: var(--bs-tooltip-padding-y) var(--bs-tooltip-padding-x);
  color: var(--bs-tooltip-color);
  text-align: center;
  background-color: var(--bs-tooltip-bg);
  border-radius: var(--bs-tooltip-border-radius);
}

.popover {
  --bs-popover-zindex: 1070;
  --bs-popover-max-width: 276px;
  --bs-popover-font-size: 0.812rem;
  --bs-popover-bg: #fff;
  --bs-popover-border-width: 1px;
  --bs-popover-border-color: #e9ecef;
  --bs-popover-border-radius: 0.5rem;
  --bs-popover-inner-border-radius: calc(0.5rem - 1px);
  --bs-popover-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  --bs-popover-header-padding-x: 1rem;
  --bs-popover-header-padding-y: 0.5rem;
  --bs-popover-header-font-size: 0.875rem;
  --bs-popover-header-color: ;
  --bs-popover-header-bg: #e9ecef;
  --bs-popover-body-padding-x: 1rem;
  --bs-popover-body-padding-y: 1rem;
  --bs-popover-body-color: #000;
  --bs-popover-arrow-width: 1rem;
  --bs-popover-arrow-height: 0.5rem;
  --bs-popover-arrow-border: var(--bs-popover-border-color);
  z-index: var(--bs-popover-zindex);
  display: block;
  max-width: var(--bs-popover-max-width);
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--bs-popover-font-size);
  word-wrap: break-word;
  background-color: var(--bs-popover-bg);
  background-clip: padding-box;
  border: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
  border-radius: var(--bs-popover-border-radius);
}
.popover .popover-arrow {
  display: block;
  width: var(--bs-popover-arrow-width);
  height: var(--bs-popover-arrow-height);
}
.popover .popover-arrow::before, .popover .popover-arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
  border-width: 0;
}

.bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow {
  bottom: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before, .bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
  border-width: var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before {
  bottom: 0;
  border-top-color: var(--bs-popover-arrow-border);
}
.bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
  bottom: var(--bs-popover-border-width);
  border-top-color: var(--bs-popover-bg);
}

/* rtl:begin:ignore */
.bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow {
  left: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
  width: var(--bs-popover-arrow-height);
  height: var(--bs-popover-arrow-width);
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before, .bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
  border-width: calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before {
  left: 0;
  border-right-color: var(--bs-popover-arrow-border);
}
.bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
  left: var(--bs-popover-border-width);
  border-right-color: var(--bs-popover-bg);
}

/* rtl:end:ignore */
.bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow {
  top: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before, .bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
  border-width: 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before {
  top: 0;
  border-bottom-color: var(--bs-popover-arrow-border);
}
.bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
  top: var(--bs-popover-border-width);
  border-bottom-color: var(--bs-popover-bg);
}
.bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: var(--bs-popover-arrow-width);
  margin-left: calc(-0.5 * var(--bs-popover-arrow-width));
  content: "";
  border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-header-bg);
}

/* rtl:begin:ignore */
.bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow {
  right: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
  width: var(--bs-popover-arrow-height);
  height: var(--bs-popover-arrow-width);
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before, .bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
  border-width: calc(var(--bs-popover-arrow-width) * 0.5) 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before {
  right: 0;
  border-left-color: var(--bs-popover-arrow-border);
}
.bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
  right: var(--bs-popover-border-width);
  border-left-color: var(--bs-popover-bg);
}

/* rtl:end:ignore */
.popover-header {
  padding: var(--bs-popover-header-padding-y) var(--bs-popover-header-padding-x);
  margin-bottom: 0;
  font-size: var(--bs-popover-header-font-size);
  color: var(--bs-popover-header-color);
  background-color: var(--bs-popover-header-bg);
  border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
  border-top-left-radius: var(--bs-popover-inner-border-radius);
  border-top-right-radius: var(--bs-popover-inner-border-radius);
}
.popover-header:empty {
  display: none;
}

.popover-body {
  padding: var(--bs-popover-body-padding-y) var(--bs-popover-body-padding-x);
  color: var(--bs-popover-body-color);
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  transition: transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-start,
  .carousel-fade .active.carousel-item-end {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}
.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
}

/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: flex;
  justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
  list-style: none;
}
.carousel-indicators [data-bs-target] {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-indicators [data-bs-target] {
    transition: none;
  }
}
.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center;
}

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #000;
}
.carousel-dark .carousel-caption {
  color: #000;
}

.spinner-grow,
.spinner-border {
  display: inline-block;
  width: var(--bs-spinner-width);
  height: var(--bs-spinner-height);
  vertical-align: var(--bs-spinner-vertical-align);
  border-radius: 50%;
  animation: var(--bs-spinner-animation-speed) linear infinite var(--bs-spinner-animation-name);
}

@keyframes spinner-border {
  to {
    transform: rotate(360deg) /* rtl:ignore */;
  }
}
.spinner-border {
  --bs-spinner-width: 2rem;
  --bs-spinner-height: 2rem;
  --bs-spinner-vertical-align: -0.125em;
  --bs-spinner-border-width: 0.25em;
  --bs-spinner-animation-speed: 0.75s;
  --bs-spinner-animation-name: spinner-border;
  border: var(--bs-spinner-border-width) solid currentcolor;
  border-right-color: transparent;
}

.spinner-border-sm {
  --bs-spinner-width: 1rem;
  --bs-spinner-height: 1rem;
  --bs-spinner-border-width: 0.2em;
}

@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
.spinner-grow {
  --bs-spinner-width: 2rem;
  --bs-spinner-height: 2rem;
  --bs-spinner-vertical-align: -0.125em;
  --bs-spinner-animation-speed: 0.75s;
  --bs-spinner-animation-name: spinner-grow;
  background-color: currentcolor;
  opacity: 0;
}

.spinner-grow-sm {
  --bs-spinner-width: 1rem;
  --bs-spinner-height: 1rem;
}

@media (prefers-reduced-motion: reduce) {
  .spinner-border,
  .spinner-grow {
    --bs-spinner-animation-speed: 1.5s;
  }
}
.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.text-bg-primary {
  color: #fff !important;
  background-color: RGBA(101, 113, 255, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-secondary {
  color: #fff !important;
  background-color: RGBA(121, 135, 161, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-success {
  color: #fff !important;
  background-color: RGBA(5, 163, 74, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-info {
  color: #000 !important;
  background-color: RGBA(102, 209, 209, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-warning {
  color: #000 !important;
  background-color: RGBA(251, 188, 6, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-danger {
  color: #fff !important;
  background-color: RGBA(255, 51, 102, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-light {
  color: #000 !important;
  background-color: RGBA(233, 236, 239, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-dark {
  color: #fff !important;
  background-color: RGBA(6, 12, 23, var(--bs-bg-opacity, 1)) !important;
}

.link-primary {
  color: #6571ff !important;
}
.link-primary:hover, .link-primary:focus {
  color: #515acc !important;
}

.link-secondary {
  color: #7987a1 !important;
}
.link-secondary:hover, .link-secondary:focus {
  color: #616c81 !important;
}

.link-success {
  color: #05a34a !important;
}
.link-success:hover, .link-success:focus {
  color: #04823b !important;
}

.link-info {
  color: #66d1d1 !important;
}
.link-info:hover, .link-info:focus {
  color: #85dada !important;
}

.link-warning {
  color: #fbbc06 !important;
}
.link-warning:hover, .link-warning:focus {
  color: #fcc938 !important;
}

.link-danger {
  color: #ff3366 !important;
}
.link-danger:hover, .link-danger:focus {
  color: #cc2952 !important;
}

.link-light {
  color: #e9ecef !important;
}
.link-light:hover, .link-light:focus {
  color: #edf0f2 !important;
}

.link-dark {
  color: #060c17 !important;
}
.link-dark:hover, .link-dark:focus {
  color: #050a12 !important;
}

.ratio {
  position: relative;
  width: 100%;
}
.ratio::before {
  display: block;
  padding-top: var(--bs-aspect-ratio);
  content: "";
}
.ratio > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.ratio-1x1 {
  --bs-aspect-ratio: 100%;
}

.ratio-4x3 {
  --bs-aspect-ratio: 75%;
}

.ratio-16x9 {
  --bs-aspect-ratio: 56.25%;
}

.ratio-21x9 {
  --bs-aspect-ratio: 42.8571428571%;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1020;
}

.sticky-bottom {
  position: sticky;
  bottom: 0;
  z-index: 1020;
}

@media (min-width: 576px) {
  .sticky-sm-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-sm-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 768px) {
  .sticky-md-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-md-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 992px) {
  .sticky-lg-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-lg-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 1200px) {
  .sticky-xl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-xl-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-xxl-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
.hstack {
  display: flex;
  flex-direction: row;
  align-items: center;
  align-self: stretch;
}

.vstack {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  align-self: stretch;
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.vr {
  display: inline-block;
  align-self: stretch;
  width: 1px;
  min-height: 1em;
  background-color: currentcolor;
  opacity: 0.1;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.float-start {
  float: left !important;
}

.float-end {
  float: right !important;
}

.float-none {
  float: none !important;
}

.opacity-0 {
  opacity: 0 !important;
}

.opacity-25 {
  opacity: 0.25 !important;
}

.opacity-50 {
  opacity: 0.5 !important;
}

.opacity-75 {
  opacity: 0.75 !important;
}

.opacity-100 {
  opacity: 1 !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.overflow-visible {
  overflow: visible !important;
}

.overflow-scroll {
  overflow: scroll !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-grid {
  display: grid !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: flex !important;
}

.d-inline-flex {
  display: inline-flex !important;
}

.d-none, .navbar .search-form {
  display: none !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.top-0 {
  top: 0 !important;
}

.top-10 {
  top: 10% !important;
}

.top-20 {
  top: 20% !important;
}

.top-25 {
  top: 25% !important;
}

.top-30 {
  top: 30% !important;
}

.top-40 {
  top: 40% !important;
}

.top-50 {
  top: 50% !important;
}

.top-60 {
  top: 60% !important;
}

.top-70 {
  top: 70% !important;
}

.top-75 {
  top: 75% !important;
}

.top-80 {
  top: 80% !important;
}

.top-90 {
  top: 90% !important;
}

.top-100 {
  top: 100% !important;
}

.bottom-0 {
  bottom: 0 !important;
}

.bottom-10 {
  bottom: 10% !important;
}

.bottom-20 {
  bottom: 20% !important;
}

.bottom-25 {
  bottom: 25% !important;
}

.bottom-30 {
  bottom: 30% !important;
}

.bottom-40 {
  bottom: 40% !important;
}

.bottom-50 {
  bottom: 50% !important;
}

.bottom-60 {
  bottom: 60% !important;
}

.bottom-70 {
  bottom: 70% !important;
}

.bottom-75 {
  bottom: 75% !important;
}

.bottom-80 {
  bottom: 80% !important;
}

.bottom-90 {
  bottom: 90% !important;
}

.bottom-100 {
  bottom: 100% !important;
}

.start-0 {
  left: 0 !important;
}

.start-10 {
  left: 10% !important;
}

.start-20 {
  left: 20% !important;
}

.start-25 {
  left: 25% !important;
}

.start-30 {
  left: 30% !important;
}

.start-40 {
  left: 40% !important;
}

.start-50 {
  left: 50% !important;
}

.start-60 {
  left: 60% !important;
}

.start-70 {
  left: 70% !important;
}

.start-75 {
  left: 75% !important;
}

.start-80 {
  left: 80% !important;
}

.start-90 {
  left: 90% !important;
}

.start-100 {
  left: 100% !important;
}

.end-0 {
  right: 0 !important;
}

.end-10 {
  right: 10% !important;
}

.end-20 {
  right: 20% !important;
}

.end-25 {
  right: 25% !important;
}

.end-30 {
  right: 30% !important;
}

.end-40 {
  right: 40% !important;
}

.end-50 {
  right: 50% !important;
}

.end-60 {
  right: 60% !important;
}

.end-70 {
  right: 70% !important;
}

.end-75 {
  right: 75% !important;
}

.end-80 {
  right: 80% !important;
}

.end-90 {
  right: 90% !important;
}

.end-100 {
  right: 100% !important;
}

.translate-middle {
  transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
  transform: translateX(-50%) !important;
}

.translate-middle-y {
  transform: translateY(-50%) !important;
}

.border {
  border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-0 {
  border: 0 !important;
}

.border-top {
  border-top: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-end {
  border-right: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-end-0 {
  border-right: 0 !important;
}

.border-bottom {
  border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-start {
  border-left: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-start-0 {
  border-left: 0 !important;
}

.border-primary {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-primary-rgb), var(--bs-border-opacity)) !important;
}

.border-secondary {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-secondary-rgb), var(--bs-border-opacity)) !important;
}

.border-success {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;
}

.border-info {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-info-rgb), var(--bs-border-opacity)) !important;
}

.border-warning {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-warning-rgb), var(--bs-border-opacity)) !important;
}

.border-danger, .swal2-popup .swal2-actions button.swal2-cancel {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-danger-rgb), var(--bs-border-opacity)) !important;
}

.border-light {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-light-rgb), var(--bs-border-opacity)) !important;
}

.border-dark {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-dark-rgb), var(--bs-border-opacity)) !important;
}

.border-white {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)) !important;
}

.border-1 {
  --bs-border-width: 1px;
}

.border-2 {
  --bs-border-width: 2px;
}

.border-3 {
  --bs-border-width: 3px;
}

.border-4 {
  --bs-border-width: 4px;
}

.border-5 {
  --bs-border-width: 5px;
}

.border-opacity-10 {
  --bs-border-opacity: 0.1;
}

.border-opacity-25 {
  --bs-border-opacity: 0.25;
}

.border-opacity-50 {
  --bs-border-opacity: 0.5;
}

.border-opacity-75 {
  --bs-border-opacity: 0.75;
}

.border-opacity-100 {
  --bs-border-opacity: 1;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100, .dataTables_wrapper.dt-bootstrap4 .dataTables_length select {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.vw-100 {
  width: 100vw !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mh-100 {
  max-height: 100% !important;
}

.vh-100 {
  height: 100vh !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.flex-fill {
  flex: 1 1 auto !important;
}

.flex-row {
  flex-direction: row !important;
}

.flex-column {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.flex-grow-1 {
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  flex-shrink: 1 !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.justify-content-start {
  justify-content: flex-start !important;
}

.justify-content-end {
  justify-content: flex-end !important;
}

.justify-content-center, .dataTables_wrapper div.dataTables_paginate ul.pagination {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.justify-content-evenly {
  justify-content: space-evenly !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center, .navbar .search-form {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch {
  align-self: stretch !important;
}

.order-first {
  order: -1 !important;
}

.order-0 {
  order: 0 !important;
}

.order-1 {
  order: 1 !important;
}

.order-2 {
  order: 2 !important;
}

.order-3 {
  order: 3 !important;
}

.order-4 {
  order: 4 !important;
}

.order-5 {
  order: 5 !important;
}

.order-last {
  order: 6 !important;
}

.m-0 {
  margin: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.m-6 {
  margin: 4.5rem !important;
}

.m-7 {
  margin: 6rem !important;
}

.m-auto {
  margin: auto !important;
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}

.mx-6 {
  margin-right: 4.5rem !important;
  margin-left: 4.5rem !important;
}

.mx-7 {
  margin-right: 6rem !important;
  margin-left: 6rem !important;
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.my-6 {
  margin-top: 4.5rem !important;
  margin-bottom: 4.5rem !important;
}

.my-7 {
  margin-top: 6rem !important;
  margin-bottom: 6rem !important;
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-1 {
  margin-top: 0.25rem !important;
}

.mt-2 {
  margin-top: 0.5rem !important;
}

.mt-3, .dataTables_wrapper div.dataTables_paginate ul.pagination {
  margin-top: 1rem !important;
}

.mt-4 {
  margin-top: 1.5rem !important;
}

.mt-5 {
  margin-top: 3rem !important;
}

.mt-6 {
  margin-top: 4.5rem !important;
}

.mt-7 {
  margin-top: 6rem !important;
}

.mt-auto {
  margin-top: auto !important;
}

.me-0 {
  margin-right: 0 !important;
}

.me-1 {
  margin-right: 0.25rem !important;
}

.me-2 {
  margin-right: 0.5rem !important;
}

.me-3 {
  margin-right: 1rem !important;
}

.me-4 {
  margin-right: 1.5rem !important;
}

.me-5 {
  margin-right: 3rem !important;
}

.me-6 {
  margin-right: 4.5rem !important;
}

.me-7 {
  margin-right: 6rem !important;
}

.me-auto {
  margin-right: auto !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-1, .example .btn-group {
  margin-bottom: 0.25rem !important;
}

.mb-2 {
  margin-bottom: 0.5rem !important;
}

.mb-3 {
  margin-bottom: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mb-6 {
  margin-bottom: 4.5rem !important;
}

.mb-7 {
  margin-bottom: 6rem !important;
}

.mb-auto {
  margin-bottom: auto !important;
}

.ms-0 {
  margin-left: 0 !important;
}

.ms-1 {
  margin-left: 0.25rem !important;
}

.ms-2 {
  margin-left: 0.5rem !important;
}

.ms-3 {
  margin-left: 1rem !important;
}

.ms-4 {
  margin-left: 1.5rem !important;
}

.ms-5 {
  margin-left: 3rem !important;
}

.ms-6 {
  margin-left: 4.5rem !important;
}

.ms-7 {
  margin-left: 6rem !important;
}

.ms-auto {
  margin-left: auto !important;
}

.m-n1 {
  margin: -0.25rem !important;
}

.m-n2 {
  margin: -0.5rem !important;
}

.m-n3 {
  margin: -1rem !important;
}

.m-n4 {
  margin: -1.5rem !important;
}

.m-n5 {
  margin: -3rem !important;
}

.m-n6 {
  margin: -4.5rem !important;
}

.m-n7 {
  margin: -6rem !important;
}

.mx-n1 {
  margin-right: -0.25rem !important;
  margin-left: -0.25rem !important;
}

.mx-n2 {
  margin-right: -0.5rem !important;
  margin-left: -0.5rem !important;
}

.mx-n3 {
  margin-right: -1rem !important;
  margin-left: -1rem !important;
}

.mx-n4 {
  margin-right: -1.5rem !important;
  margin-left: -1.5rem !important;
}

.mx-n5 {
  margin-right: -3rem !important;
  margin-left: -3rem !important;
}

.mx-n6 {
  margin-right: -4.5rem !important;
  margin-left: -4.5rem !important;
}

.mx-n7 {
  margin-right: -6rem !important;
  margin-left: -6rem !important;
}

.my-n1 {
  margin-top: -0.25rem !important;
  margin-bottom: -0.25rem !important;
}

.my-n2 {
  margin-top: -0.5rem !important;
  margin-bottom: -0.5rem !important;
}

.my-n3 {
  margin-top: -1rem !important;
  margin-bottom: -1rem !important;
}

.my-n4 {
  margin-top: -1.5rem !important;
  margin-bottom: -1.5rem !important;
}

.my-n5 {
  margin-top: -3rem !important;
  margin-bottom: -3rem !important;
}

.my-n6 {
  margin-top: -4.5rem !important;
  margin-bottom: -4.5rem !important;
}

.my-n7 {
  margin-top: -6rem !important;
  margin-bottom: -6rem !important;
}

.mt-n1 {
  margin-top: -0.25rem !important;
}

.mt-n2 {
  margin-top: -0.5rem !important;
}

.mt-n3 {
  margin-top: -1rem !important;
}

.mt-n4 {
  margin-top: -1.5rem !important;
}

.mt-n5 {
  margin-top: -3rem !important;
}

.mt-n6 {
  margin-top: -4.5rem !important;
}

.mt-n7 {
  margin-top: -6rem !important;
}

.me-n1 {
  margin-right: -0.25rem !important;
}

.me-n2 {
  margin-right: -0.5rem !important;
}

.me-n3 {
  margin-right: -1rem !important;
}

.me-n4 {
  margin-right: -1.5rem !important;
}

.me-n5 {
  margin-right: -3rem !important;
}

.me-n6 {
  margin-right: -4.5rem !important;
}

.me-n7 {
  margin-right: -6rem !important;
}

.mb-n1 {
  margin-bottom: -0.25rem !important;
}

.mb-n2 {
  margin-bottom: -0.5rem !important;
}

.mb-n3 {
  margin-bottom: -1rem !important;
}

.mb-n4 {
  margin-bottom: -1.5rem !important;
}

.mb-n5 {
  margin-bottom: -3rem !important;
}

.mb-n6 {
  margin-bottom: -4.5rem !important;
}

.mb-n7 {
  margin-bottom: -6rem !important;
}

.ms-n1 {
  margin-left: -0.25rem !important;
}

.ms-n2 {
  margin-left: -0.5rem !important;
}

.ms-n3 {
  margin-left: -1rem !important;
}

.ms-n4 {
  margin-left: -1.5rem !important;
}

.ms-n5 {
  margin-left: -3rem !important;
}

.ms-n6 {
  margin-left: -4.5rem !important;
}

.ms-n7 {
  margin-left: -6rem !important;
}

.p-0 {
  padding: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.p-6 {
  padding: 4.5rem !important;
}

.p-7 {
  padding: 6rem !important;
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}

.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}

.px-6 {
  padding-right: 4.5rem !important;
  padding-left: 4.5rem !important;
}

.px-7 {
  padding-right: 6rem !important;
  padding-left: 6rem !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}

.py-6 {
  padding-top: 4.5rem !important;
  padding-bottom: 4.5rem !important;
}

.py-7 {
  padding-top: 6rem !important;
  padding-bottom: 6rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-1 {
  padding-top: 0.25rem !important;
}

.pt-2 {
  padding-top: 0.5rem !important;
}

.pt-3 {
  padding-top: 1rem !important;
}

.pt-4 {
  padding-top: 1.5rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pt-6 {
  padding-top: 4.5rem !important;
}

.pt-7 {
  padding-top: 6rem !important;
}

.pe-0 {
  padding-right: 0 !important;
}

.pe-1 {
  padding-right: 0.25rem !important;
}

.pe-2 {
  padding-right: 0.5rem !important;
}

.pe-3 {
  padding-right: 1rem !important;
}

.pe-4 {
  padding-right: 1.5rem !important;
}

.pe-5 {
  padding-right: 3rem !important;
}

.pe-6 {
  padding-right: 4.5rem !important;
}

.pe-7 {
  padding-right: 6rem !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-1 {
  padding-bottom: 0.25rem !important;
}

.pb-2 {
  padding-bottom: 0.5rem !important;
}

.pb-3 {
  padding-bottom: 1rem !important;
}

.pb-4 {
  padding-bottom: 1.5rem !important;
}

.pb-5 {
  padding-bottom: 3rem !important;
}

.pb-6 {
  padding-bottom: 4.5rem !important;
}

.pb-7 {
  padding-bottom: 6rem !important;
}

.ps-0 {
  padding-left: 0 !important;
}

.ps-1 {
  padding-left: 0.25rem !important;
}

.ps-2 {
  padding-left: 0.5rem !important;
}

.ps-3 {
  padding-left: 1rem !important;
}

.ps-4 {
  padding-left: 1.5rem !important;
}

.ps-5 {
  padding-left: 3rem !important;
}

.ps-6 {
  padding-left: 4.5rem !important;
}

.ps-7 {
  padding-left: 6rem !important;
}

.gap-0 {
  gap: 0 !important;
}

.gap-1 {
  gap: 0.25rem !important;
}

.gap-2 {
  gap: 0.5rem !important;
}

.gap-3 {
  gap: 1rem !important;
}

.gap-4 {
  gap: 1.5rem !important;
}

.gap-5 {
  gap: 3rem !important;
}

.gap-6 {
  gap: 4.5rem !important;
}

.gap-7 {
  gap: 6rem !important;
}

.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
  font-size: calc(1.375rem + 1.5vw) !important;
}

.fs-2 {
  font-size: calc(1.325rem + 0.9vw) !important;
}

.fs-3 {
  font-size: calc(1.275rem + 0.3vw) !important;
}

.fs-4 {
  font-size: 1.25rem !important;
}

.fs-5 {
  font-size: 1rem !important;
}

.fs-6 {
  font-size: 0.875rem !important;
}

.fst-italic {
  font-style: italic !important;
}

.fst-normal {
  font-style: normal !important;
}

.fw-light {
  font-weight: 300 !important;
}

.fw-lighter {
  font-weight: lighter !important;
}

.fw-normal {
  font-weight: 400 !important;
}

.fw-bold {
  font-weight: 500 !important;
}

.fw-semibold {
  font-weight: 600 !important;
}

.fw-bolder {
  font-weight: 700 !important;
}

.lh-1 {
  line-height: 1 !important;
}

.lh-sm {
  line-height: 1.25 !important;
}

.lh-base {
  line-height: 1.5 !important;
}

.lh-lg {
  line-height: 2 !important;
}

.text-start {
  text-align: left !important;
}

.text-end {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-decoration-underline {
  text-decoration: underline !important;
}

.text-decoration-line-through {
  text-decoration: line-through !important;
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
}

.text-secondary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
}

.text-success {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
}

.text-info {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
}

.text-warning {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
}

.text-danger {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
}

.text-light {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
}

.text-dark {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
}

.text-black {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important;
}

.text-white {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
}

.text-body {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important;
}

.text-muted, .dropzone.dz-clickable .dz-message * {
  --bs-text-opacity: 1;
  color: #7987a1 !important;
}

.text-black-50 {
  --bs-text-opacity: 1;
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  --bs-text-opacity: 1;
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-reset {
  --bs-text-opacity: 1;
  color: inherit !important;
}

.text-opacity-25 {
  --bs-text-opacity: 0.25;
}

.text-opacity-50 {
  --bs-text-opacity: 0.5;
}

.text-opacity-75 {
  --bs-text-opacity: 0.75;
}

.text-opacity-100 {
  --bs-text-opacity: 1;
}

.bg-primary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-success {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}

.bg-info {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
}

.bg-warning {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
}

.bg-danger {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
}

.bg-light {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
}

.bg-dark {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}

.bg-black {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important;
}

.bg-white {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
}

.bg-body {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important;
}

.bg-transparent {
  --bs-bg-opacity: 1;
  background-color: transparent !important;
}

.bg-opacity-10 {
  --bs-bg-opacity: 0.1;
}

.bg-opacity-25 {
  --bs-bg-opacity: 0.25;
}

.bg-opacity-50 {
  --bs-bg-opacity: 0.5;
}

.bg-opacity-75 {
  --bs-bg-opacity: 0.75;
}

.bg-opacity-100 {
  --bs-bg-opacity: 1;
}

.bg-gradient {
  background-image: var(--bs-gradient) !important;
}

.user-select-all {
  -webkit-user-select: all !important;
     -moz-user-select: all !important;
          user-select: all !important;
}

.user-select-auto {
  -webkit-user-select: auto !important;
     -moz-user-select: auto !important;
          user-select: auto !important;
}

.user-select-none {
  -webkit-user-select: none !important;
     -moz-user-select: none !important;
          user-select: none !important;
}

.pe-none {
  pointer-events: none !important;
}

.pe-auto {
  pointer-events: auto !important;
}

.rounded {
  border-radius: var(--bs-border-radius) !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.rounded-1 {
  border-radius: var(--bs-border-radius-sm) !important;
}

.rounded-2 {
  border-radius: var(--bs-border-radius) !important;
}

.rounded-3 {
  border-radius: var(--bs-border-radius-lg) !important;
}

.rounded-4 {
  border-radius: var(--bs-border-radius-xl) !important;
}

.rounded-5 {
  border-radius: var(--bs-border-radius-2xl) !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: var(--bs-border-radius-pill) !important;
}

.rounded-top {
  border-top-left-radius: var(--bs-border-radius) !important;
  border-top-right-radius: var(--bs-border-radius) !important;
}

.rounded-end {
  border-top-right-radius: var(--bs-border-radius) !important;
  border-bottom-right-radius: var(--bs-border-radius) !important;
}

.rounded-bottom {
  border-bottom-right-radius: var(--bs-border-radius) !important;
  border-bottom-left-radius: var(--bs-border-radius) !important;
}

.rounded-start {
  border-bottom-left-radius: var(--bs-border-radius) !important;
  border-top-left-radius: var(--bs-border-radius) !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

.bg-gray-100 {
  background-color: #f8f9fa !important;
}

.bg-gray-200 {
  background-color: #e9ecef !important;
}

.bg-gray-300 {
  background-color: #dee2e6 !important;
}

.bg-gray-400 {
  background-color: #ced4da !important;
}

.bg-gray-500 {
  background-color: #adb5bd !important;
}

.bg-gray-600 {
  background-color: #7987a1 !important;
}

.bg-gray-700 {
  background-color: #495057 !important;
}

.bg-gray-800 {
  background-color: #212a3a !important;
}

.bg-gray-900 {
  background-color: #060c17 !important;
}

@media (min-width: 576px) {
  .float-sm-start {
    float: left !important;
  }
  .float-sm-end {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-grid {
    display: grid !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
  .d-sm-none {
    display: none !important;
  }
  .border-sm {
    border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-sm-0 {
    border: 0 !important;
  }
  .border-top-sm {
    border-top: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-top-sm-0 {
    border-top: 0 !important;
  }
  .border-end-sm {
    border-right: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-end-sm-0 {
    border-right: 0 !important;
  }
  .border-bottom-sm {
    border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-bottom-sm-0 {
    border-bottom: 0 !important;
  }
  .border-start-sm {
    border-left: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-start-sm-0 {
    border-left: 0 !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .justify-content-sm-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
  .order-sm-first {
    order: -1 !important;
  }
  .order-sm-0 {
    order: 0 !important;
  }
  .order-sm-1 {
    order: 1 !important;
  }
  .order-sm-2 {
    order: 2 !important;
  }
  .order-sm-3 {
    order: 3 !important;
  }
  .order-sm-4 {
    order: 4 !important;
  }
  .order-sm-5 {
    order: 5 !important;
  }
  .order-sm-last {
    order: 6 !important;
  }
  .m-sm-0 {
    margin: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .m-sm-6 {
    margin: 4.5rem !important;
  }
  .m-sm-7 {
    margin: 6rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-sm-6 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-sm-7 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-sm-6 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-sm-7 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-sm-0 {
    margin-top: 0 !important;
  }
  .mt-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mt-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mt-sm-3 {
    margin-top: 1rem !important;
  }
  .mt-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mt-sm-5 {
    margin-top: 3rem !important;
  }
  .mt-sm-6 {
    margin-top: 4.5rem !important;
  }
  .mt-sm-7 {
    margin-top: 6rem !important;
  }
  .mt-sm-auto {
    margin-top: auto !important;
  }
  .me-sm-0 {
    margin-right: 0 !important;
  }
  .me-sm-1 {
    margin-right: 0.25rem !important;
  }
  .me-sm-2 {
    margin-right: 0.5rem !important;
  }
  .me-sm-3 {
    margin-right: 1rem !important;
  }
  .me-sm-4 {
    margin-right: 1.5rem !important;
  }
  .me-sm-5 {
    margin-right: 3rem !important;
  }
  .me-sm-6 {
    margin-right: 4.5rem !important;
  }
  .me-sm-7 {
    margin-right: 6rem !important;
  }
  .me-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-sm-3 {
    margin-bottom: 1rem !important;
  }
  .mb-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-sm-5 {
    margin-bottom: 3rem !important;
  }
  .mb-sm-6 {
    margin-bottom: 4.5rem !important;
  }
  .mb-sm-7 {
    margin-bottom: 6rem !important;
  }
  .mb-sm-auto {
    margin-bottom: auto !important;
  }
  .ms-sm-0 {
    margin-left: 0 !important;
  }
  .ms-sm-1 {
    margin-left: 0.25rem !important;
  }
  .ms-sm-2 {
    margin-left: 0.5rem !important;
  }
  .ms-sm-3 {
    margin-left: 1rem !important;
  }
  .ms-sm-4 {
    margin-left: 1.5rem !important;
  }
  .ms-sm-5 {
    margin-left: 3rem !important;
  }
  .ms-sm-6 {
    margin-left: 4.5rem !important;
  }
  .ms-sm-7 {
    margin-left: 6rem !important;
  }
  .ms-sm-auto {
    margin-left: auto !important;
  }
  .m-sm-n1 {
    margin: -0.25rem !important;
  }
  .m-sm-n2 {
    margin: -0.5rem !important;
  }
  .m-sm-n3 {
    margin: -1rem !important;
  }
  .m-sm-n4 {
    margin: -1.5rem !important;
  }
  .m-sm-n5 {
    margin: -3rem !important;
  }
  .m-sm-n6 {
    margin: -4.5rem !important;
  }
  .m-sm-n7 {
    margin: -6rem !important;
  }
  .mx-sm-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-sm-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-sm-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-sm-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-sm-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-sm-n6 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-sm-n7 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .my-sm-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-sm-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-sm-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-sm-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-sm-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-sm-n6 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-sm-n7 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .mt-sm-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-sm-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-sm-n3 {
    margin-top: -1rem !important;
  }
  .mt-sm-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-sm-n5 {
    margin-top: -3rem !important;
  }
  .mt-sm-n6 {
    margin-top: -4.5rem !important;
  }
  .mt-sm-n7 {
    margin-top: -6rem !important;
  }
  .me-sm-n1 {
    margin-right: -0.25rem !important;
  }
  .me-sm-n2 {
    margin-right: -0.5rem !important;
  }
  .me-sm-n3 {
    margin-right: -1rem !important;
  }
  .me-sm-n4 {
    margin-right: -1.5rem !important;
  }
  .me-sm-n5 {
    margin-right: -3rem !important;
  }
  .me-sm-n6 {
    margin-right: -4.5rem !important;
  }
  .me-sm-n7 {
    margin-right: -6rem !important;
  }
  .mb-sm-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-sm-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-sm-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-sm-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-sm-n5 {
    margin-bottom: -3rem !important;
  }
  .mb-sm-n6 {
    margin-bottom: -4.5rem !important;
  }
  .mb-sm-n7 {
    margin-bottom: -6rem !important;
  }
  .ms-sm-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-sm-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-sm-n3 {
    margin-left: -1rem !important;
  }
  .ms-sm-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-sm-n5 {
    margin-left: -3rem !important;
  }
  .ms-sm-n6 {
    margin-left: -4.5rem !important;
  }
  .ms-sm-n7 {
    margin-left: -6rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .p-sm-6 {
    padding: 4.5rem !important;
  }
  .p-sm-7 {
    padding: 6rem !important;
  }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-sm-6 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-sm-7 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-sm-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-sm-7 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .pt-sm-0 {
    padding-top: 0 !important;
  }
  .pt-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pt-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pt-sm-3 {
    padding-top: 1rem !important;
  }
  .pt-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pt-sm-5 {
    padding-top: 3rem !important;
  }
  .pt-sm-6 {
    padding-top: 4.5rem !important;
  }
  .pt-sm-7 {
    padding-top: 6rem !important;
  }
  .pe-sm-0 {
    padding-right: 0 !important;
  }
  .pe-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pe-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pe-sm-3 {
    padding-right: 1rem !important;
  }
  .pe-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pe-sm-5 {
    padding-right: 3rem !important;
  }
  .pe-sm-6 {
    padding-right: 4.5rem !important;
  }
  .pe-sm-7 {
    padding-right: 6rem !important;
  }
  .pb-sm-0 {
    padding-bottom: 0 !important;
  }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pb-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-sm-5 {
    padding-bottom: 3rem !important;
  }
  .pb-sm-6 {
    padding-bottom: 4.5rem !important;
  }
  .pb-sm-7 {
    padding-bottom: 6rem !important;
  }
  .ps-sm-0 {
    padding-left: 0 !important;
  }
  .ps-sm-1 {
    padding-left: 0.25rem !important;
  }
  .ps-sm-2 {
    padding-left: 0.5rem !important;
  }
  .ps-sm-3 {
    padding-left: 1rem !important;
  }
  .ps-sm-4 {
    padding-left: 1.5rem !important;
  }
  .ps-sm-5 {
    padding-left: 3rem !important;
  }
  .ps-sm-6 {
    padding-left: 4.5rem !important;
  }
  .ps-sm-7 {
    padding-left: 6rem !important;
  }
  .gap-sm-0 {
    gap: 0 !important;
  }
  .gap-sm-1 {
    gap: 0.25rem !important;
  }
  .gap-sm-2 {
    gap: 0.5rem !important;
  }
  .gap-sm-3 {
    gap: 1rem !important;
  }
  .gap-sm-4 {
    gap: 1.5rem !important;
  }
  .gap-sm-5 {
    gap: 3rem !important;
  }
  .gap-sm-6 {
    gap: 4.5rem !important;
  }
  .gap-sm-7 {
    gap: 6rem !important;
  }
  .text-sm-start {
    text-align: left !important;
  }
  .text-sm-end {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}
@media (min-width: 768px) {
  .float-md-start {
    float: left !important;
  }
  .float-md-end {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-grid {
    display: grid !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex, .navbar .search-form {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
  .d-md-none {
    display: none !important;
  }
  .border-md {
    border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-md-0 {
    border: 0 !important;
  }
  .border-top-md {
    border-top: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-top-md-0 {
    border-top: 0 !important;
  }
  .border-end-md {
    border-right: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-end-md-0 {
    border-right: 0 !important;
  }
  .border-bottom-md {
    border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-bottom-md-0 {
    border-bottom: 0 !important;
  }
  .border-start-md {
    border-left: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-start-md-0 {
    border-left: 0 !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end, .dataTables_wrapper div.dataTables_paginate ul.pagination {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .justify-content-md-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
  .order-md-first {
    order: -1 !important;
  }
  .order-md-0 {
    order: 0 !important;
  }
  .order-md-1 {
    order: 1 !important;
  }
  .order-md-2 {
    order: 2 !important;
  }
  .order-md-3 {
    order: 3 !important;
  }
  .order-md-4 {
    order: 4 !important;
  }
  .order-md-5 {
    order: 5 !important;
  }
  .order-md-last {
    order: 6 !important;
  }
  .m-md-0 {
    margin: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .m-md-6 {
    margin: 4.5rem !important;
  }
  .m-md-7 {
    margin: 6rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-md-6 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-md-7 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-md-6 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-md-7 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-md-0, .dataTables_wrapper div.dataTables_paginate ul.pagination {
    margin-top: 0 !important;
  }
  .mt-md-1 {
    margin-top: 0.25rem !important;
  }
  .mt-md-2 {
    margin-top: 0.5rem !important;
  }
  .mt-md-3 {
    margin-top: 1rem !important;
  }
  .mt-md-4 {
    margin-top: 1.5rem !important;
  }
  .mt-md-5 {
    margin-top: 3rem !important;
  }
  .mt-md-6 {
    margin-top: 4.5rem !important;
  }
  .mt-md-7 {
    margin-top: 6rem !important;
  }
  .mt-md-auto {
    margin-top: auto !important;
  }
  .me-md-0 {
    margin-right: 0 !important;
  }
  .me-md-1 {
    margin-right: 0.25rem !important;
  }
  .me-md-2 {
    margin-right: 0.5rem !important;
  }
  .me-md-3 {
    margin-right: 1rem !important;
  }
  .me-md-4 {
    margin-right: 1.5rem !important;
  }
  .me-md-5 {
    margin-right: 3rem !important;
  }
  .me-md-6 {
    margin-right: 4.5rem !important;
  }
  .me-md-7 {
    margin-right: 6rem !important;
  }
  .me-md-auto {
    margin-right: auto !important;
  }
  .mb-md-0, .example .btn-group {
    margin-bottom: 0 !important;
  }
  .mb-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-md-3 {
    margin-bottom: 1rem !important;
  }
  .mb-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-md-5 {
    margin-bottom: 3rem !important;
  }
  .mb-md-6 {
    margin-bottom: 4.5rem !important;
  }
  .mb-md-7 {
    margin-bottom: 6rem !important;
  }
  .mb-md-auto {
    margin-bottom: auto !important;
  }
  .ms-md-0 {
    margin-left: 0 !important;
  }
  .ms-md-1 {
    margin-left: 0.25rem !important;
  }
  .ms-md-2 {
    margin-left: 0.5rem !important;
  }
  .ms-md-3 {
    margin-left: 1rem !important;
  }
  .ms-md-4 {
    margin-left: 1.5rem !important;
  }
  .ms-md-5 {
    margin-left: 3rem !important;
  }
  .ms-md-6 {
    margin-left: 4.5rem !important;
  }
  .ms-md-7 {
    margin-left: 6rem !important;
  }
  .ms-md-auto {
    margin-left: auto !important;
  }
  .m-md-n1 {
    margin: -0.25rem !important;
  }
  .m-md-n2 {
    margin: -0.5rem !important;
  }
  .m-md-n3 {
    margin: -1rem !important;
  }
  .m-md-n4 {
    margin: -1.5rem !important;
  }
  .m-md-n5 {
    margin: -3rem !important;
  }
  .m-md-n6 {
    margin: -4.5rem !important;
  }
  .m-md-n7 {
    margin: -6rem !important;
  }
  .mx-md-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-md-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-md-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-md-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-md-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-md-n6 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-md-n7 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .my-md-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-md-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-md-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-md-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-md-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-md-n6 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-md-n7 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .mt-md-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-md-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-md-n3 {
    margin-top: -1rem !important;
  }
  .mt-md-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-md-n5 {
    margin-top: -3rem !important;
  }
  .mt-md-n6 {
    margin-top: -4.5rem !important;
  }
  .mt-md-n7 {
    margin-top: -6rem !important;
  }
  .me-md-n1 {
    margin-right: -0.25rem !important;
  }
  .me-md-n2 {
    margin-right: -0.5rem !important;
  }
  .me-md-n3 {
    margin-right: -1rem !important;
  }
  .me-md-n4 {
    margin-right: -1.5rem !important;
  }
  .me-md-n5 {
    margin-right: -3rem !important;
  }
  .me-md-n6 {
    margin-right: -4.5rem !important;
  }
  .me-md-n7 {
    margin-right: -6rem !important;
  }
  .mb-md-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-md-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-md-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-md-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-md-n5 {
    margin-bottom: -3rem !important;
  }
  .mb-md-n6 {
    margin-bottom: -4.5rem !important;
  }
  .mb-md-n7 {
    margin-bottom: -6rem !important;
  }
  .ms-md-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-md-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-md-n3 {
    margin-left: -1rem !important;
  }
  .ms-md-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-md-n5 {
    margin-left: -3rem !important;
  }
  .ms-md-n6 {
    margin-left: -4.5rem !important;
  }
  .ms-md-n7 {
    margin-left: -6rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .p-md-6 {
    padding: 4.5rem !important;
  }
  .p-md-7 {
    padding: 6rem !important;
  }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-md-6 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-md-7 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-md-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-md-7 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .pt-md-0 {
    padding-top: 0 !important;
  }
  .pt-md-1 {
    padding-top: 0.25rem !important;
  }
  .pt-md-2 {
    padding-top: 0.5rem !important;
  }
  .pt-md-3 {
    padding-top: 1rem !important;
  }
  .pt-md-4 {
    padding-top: 1.5rem !important;
  }
  .pt-md-5 {
    padding-top: 3rem !important;
  }
  .pt-md-6 {
    padding-top: 4.5rem !important;
  }
  .pt-md-7 {
    padding-top: 6rem !important;
  }
  .pe-md-0 {
    padding-right: 0 !important;
  }
  .pe-md-1 {
    padding-right: 0.25rem !important;
  }
  .pe-md-2 {
    padding-right: 0.5rem !important;
  }
  .pe-md-3 {
    padding-right: 1rem !important;
  }
  .pe-md-4 {
    padding-right: 1.5rem !important;
  }
  .pe-md-5 {
    padding-right: 3rem !important;
  }
  .pe-md-6 {
    padding-right: 4.5rem !important;
  }
  .pe-md-7 {
    padding-right: 6rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0 !important;
  }
  .pb-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-md-3 {
    padding-bottom: 1rem !important;
  }
  .pb-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-md-5 {
    padding-bottom: 3rem !important;
  }
  .pb-md-6 {
    padding-bottom: 4.5rem !important;
  }
  .pb-md-7 {
    padding-bottom: 6rem !important;
  }
  .ps-md-0 {
    padding-left: 0 !important;
  }
  .ps-md-1 {
    padding-left: 0.25rem !important;
  }
  .ps-md-2 {
    padding-left: 0.5rem !important;
  }
  .ps-md-3 {
    padding-left: 1rem !important;
  }
  .ps-md-4 {
    padding-left: 1.5rem !important;
  }
  .ps-md-5 {
    padding-left: 3rem !important;
  }
  .ps-md-6 {
    padding-left: 4.5rem !important;
  }
  .ps-md-7 {
    padding-left: 6rem !important;
  }
  .gap-md-0 {
    gap: 0 !important;
  }
  .gap-md-1 {
    gap: 0.25rem !important;
  }
  .gap-md-2 {
    gap: 0.5rem !important;
  }
  .gap-md-3 {
    gap: 1rem !important;
  }
  .gap-md-4 {
    gap: 1.5rem !important;
  }
  .gap-md-5 {
    gap: 3rem !important;
  }
  .gap-md-6 {
    gap: 4.5rem !important;
  }
  .gap-md-7 {
    gap: 6rem !important;
  }
  .text-md-start {
    text-align: left !important;
  }
  .text-md-end {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}
@media (min-width: 992px) {
  .float-lg-start {
    float: left !important;
  }
  .float-lg-end {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-grid {
    display: grid !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
  .d-lg-none {
    display: none !important;
  }
  .border-lg {
    border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-lg-0 {
    border: 0 !important;
  }
  .border-top-lg {
    border-top: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-top-lg-0 {
    border-top: 0 !important;
  }
  .border-end-lg {
    border-right: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-end-lg-0 {
    border-right: 0 !important;
  }
  .border-bottom-lg {
    border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-bottom-lg-0 {
    border-bottom: 0 !important;
  }
  .border-start-lg {
    border-left: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-start-lg-0 {
    border-left: 0 !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .justify-content-lg-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
  .order-lg-first {
    order: -1 !important;
  }
  .order-lg-0 {
    order: 0 !important;
  }
  .order-lg-1 {
    order: 1 !important;
  }
  .order-lg-2 {
    order: 2 !important;
  }
  .order-lg-3 {
    order: 3 !important;
  }
  .order-lg-4 {
    order: 4 !important;
  }
  .order-lg-5 {
    order: 5 !important;
  }
  .order-lg-last {
    order: 6 !important;
  }
  .m-lg-0 {
    margin: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .m-lg-6 {
    margin: 4.5rem !important;
  }
  .m-lg-7 {
    margin: 6rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-lg-6 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-lg-7 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-lg-6 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-lg-7 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-lg-0 {
    margin-top: 0 !important;
  }
  .mt-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mt-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mt-lg-3 {
    margin-top: 1rem !important;
  }
  .mt-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mt-lg-5 {
    margin-top: 3rem !important;
  }
  .mt-lg-6 {
    margin-top: 4.5rem !important;
  }
  .mt-lg-7 {
    margin-top: 6rem !important;
  }
  .mt-lg-auto {
    margin-top: auto !important;
  }
  .me-lg-0 {
    margin-right: 0 !important;
  }
  .me-lg-1 {
    margin-right: 0.25rem !important;
  }
  .me-lg-2 {
    margin-right: 0.5rem !important;
  }
  .me-lg-3 {
    margin-right: 1rem !important;
  }
  .me-lg-4 {
    margin-right: 1.5rem !important;
  }
  .me-lg-5 {
    margin-right: 3rem !important;
  }
  .me-lg-6 {
    margin-right: 4.5rem !important;
  }
  .me-lg-7 {
    margin-right: 6rem !important;
  }
  .me-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-0 {
    margin-bottom: 0 !important;
  }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-6 {
    margin-bottom: 4.5rem !important;
  }
  .mb-lg-7 {
    margin-bottom: 6rem !important;
  }
  .mb-lg-auto {
    margin-bottom: auto !important;
  }
  .ms-lg-0 {
    margin-left: 0 !important;
  }
  .ms-lg-1 {
    margin-left: 0.25rem !important;
  }
  .ms-lg-2 {
    margin-left: 0.5rem !important;
  }
  .ms-lg-3 {
    margin-left: 1rem !important;
  }
  .ms-lg-4 {
    margin-left: 1.5rem !important;
  }
  .ms-lg-5 {
    margin-left: 3rem !important;
  }
  .ms-lg-6 {
    margin-left: 4.5rem !important;
  }
  .ms-lg-7 {
    margin-left: 6rem !important;
  }
  .ms-lg-auto {
    margin-left: auto !important;
  }
  .m-lg-n1 {
    margin: -0.25rem !important;
  }
  .m-lg-n2 {
    margin: -0.5rem !important;
  }
  .m-lg-n3 {
    margin: -1rem !important;
  }
  .m-lg-n4 {
    margin: -1.5rem !important;
  }
  .m-lg-n5 {
    margin: -3rem !important;
  }
  .m-lg-n6 {
    margin: -4.5rem !important;
  }
  .m-lg-n7 {
    margin: -6rem !important;
  }
  .mx-lg-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-lg-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-lg-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-lg-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-lg-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-lg-n6 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-lg-n7 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .my-lg-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-lg-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-lg-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-lg-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-lg-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-lg-n6 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-lg-n7 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .mt-lg-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-lg-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-lg-n3 {
    margin-top: -1rem !important;
  }
  .mt-lg-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-lg-n5 {
    margin-top: -3rem !important;
  }
  .mt-lg-n6 {
    margin-top: -4.5rem !important;
  }
  .mt-lg-n7 {
    margin-top: -6rem !important;
  }
  .me-lg-n1 {
    margin-right: -0.25rem !important;
  }
  .me-lg-n2 {
    margin-right: -0.5rem !important;
  }
  .me-lg-n3 {
    margin-right: -1rem !important;
  }
  .me-lg-n4 {
    margin-right: -1.5rem !important;
  }
  .me-lg-n5 {
    margin-right: -3rem !important;
  }
  .me-lg-n6 {
    margin-right: -4.5rem !important;
  }
  .me-lg-n7 {
    margin-right: -6rem !important;
  }
  .mb-lg-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-lg-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-lg-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-lg-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-lg-n5 {
    margin-bottom: -3rem !important;
  }
  .mb-lg-n6 {
    margin-bottom: -4.5rem !important;
  }
  .mb-lg-n7 {
    margin-bottom: -6rem !important;
  }
  .ms-lg-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-lg-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-lg-n3 {
    margin-left: -1rem !important;
  }
  .ms-lg-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-lg-n5 {
    margin-left: -3rem !important;
  }
  .ms-lg-n6 {
    margin-left: -4.5rem !important;
  }
  .ms-lg-n7 {
    margin-left: -6rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .p-lg-6 {
    padding: 4.5rem !important;
  }
  .p-lg-7 {
    padding: 6rem !important;
  }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-lg-6 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-lg-7 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-lg-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-lg-7 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .pt-lg-0 {
    padding-top: 0 !important;
  }
  .pt-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pt-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pt-lg-3 {
    padding-top: 1rem !important;
  }
  .pt-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pt-lg-5 {
    padding-top: 3rem !important;
  }
  .pt-lg-6 {
    padding-top: 4.5rem !important;
  }
  .pt-lg-7 {
    padding-top: 6rem !important;
  }
  .pe-lg-0 {
    padding-right: 0 !important;
  }
  .pe-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pe-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pe-lg-3 {
    padding-right: 1rem !important;
  }
  .pe-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pe-lg-5 {
    padding-right: 3rem !important;
  }
  .pe-lg-6 {
    padding-right: 4.5rem !important;
  }
  .pe-lg-7 {
    padding-right: 6rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0 !important;
  }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 3rem !important;
  }
  .pb-lg-6 {
    padding-bottom: 4.5rem !important;
  }
  .pb-lg-7 {
    padding-bottom: 6rem !important;
  }
  .ps-lg-0 {
    padding-left: 0 !important;
  }
  .ps-lg-1 {
    padding-left: 0.25rem !important;
  }
  .ps-lg-2 {
    padding-left: 0.5rem !important;
  }
  .ps-lg-3 {
    padding-left: 1rem !important;
  }
  .ps-lg-4 {
    padding-left: 1.5rem !important;
  }
  .ps-lg-5 {
    padding-left: 3rem !important;
  }
  .ps-lg-6 {
    padding-left: 4.5rem !important;
  }
  .ps-lg-7 {
    padding-left: 6rem !important;
  }
  .gap-lg-0 {
    gap: 0 !important;
  }
  .gap-lg-1 {
    gap: 0.25rem !important;
  }
  .gap-lg-2 {
    gap: 0.5rem !important;
  }
  .gap-lg-3 {
    gap: 1rem !important;
  }
  .gap-lg-4 {
    gap: 1.5rem !important;
  }
  .gap-lg-5 {
    gap: 3rem !important;
  }
  .gap-lg-6 {
    gap: 4.5rem !important;
  }
  .gap-lg-7 {
    gap: 6rem !important;
  }
  .text-lg-start {
    text-align: left !important;
  }
  .text-lg-end {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important;
  }
  .float-xl-end {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-grid {
    display: grid !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
  .d-xl-none {
    display: none !important;
  }
  .border-xl {
    border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-xl-0 {
    border: 0 !important;
  }
  .border-top-xl {
    border-top: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-top-xl-0 {
    border-top: 0 !important;
  }
  .border-end-xl {
    border-right: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-end-xl-0 {
    border-right: 0 !important;
  }
  .border-bottom-xl {
    border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-bottom-xl-0 {
    border-bottom: 0 !important;
  }
  .border-start-xl {
    border-left: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-start-xl-0 {
    border-left: 0 !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .justify-content-xl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
  .order-xl-first {
    order: -1 !important;
  }
  .order-xl-0 {
    order: 0 !important;
  }
  .order-xl-1 {
    order: 1 !important;
  }
  .order-xl-2 {
    order: 2 !important;
  }
  .order-xl-3 {
    order: 3 !important;
  }
  .order-xl-4 {
    order: 4 !important;
  }
  .order-xl-5 {
    order: 5 !important;
  }
  .order-xl-last {
    order: 6 !important;
  }
  .m-xl-0 {
    margin: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .m-xl-6 {
    margin: 4.5rem !important;
  }
  .m-xl-7 {
    margin: 6rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xl-6 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-xl-7 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xl-6 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-xl-7 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xl-0 {
    margin-top: 0 !important;
  }
  .mt-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xl-3 {
    margin-top: 1rem !important;
  }
  .mt-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xl-5 {
    margin-top: 3rem !important;
  }
  .mt-xl-6 {
    margin-top: 4.5rem !important;
  }
  .mt-xl-7 {
    margin-top: 6rem !important;
  }
  .mt-xl-auto {
    margin-top: auto !important;
  }
  .me-xl-0 {
    margin-right: 0 !important;
  }
  .me-xl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xl-3 {
    margin-right: 1rem !important;
  }
  .me-xl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xl-5 {
    margin-right: 3rem !important;
  }
  .me-xl-6 {
    margin-right: 4.5rem !important;
  }
  .me-xl-7 {
    margin-right: 6rem !important;
  }
  .me-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-6 {
    margin-bottom: 4.5rem !important;
  }
  .mb-xl-7 {
    margin-bottom: 6rem !important;
  }
  .mb-xl-auto {
    margin-bottom: auto !important;
  }
  .ms-xl-0 {
    margin-left: 0 !important;
  }
  .ms-xl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xl-3 {
    margin-left: 1rem !important;
  }
  .ms-xl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xl-5 {
    margin-left: 3rem !important;
  }
  .ms-xl-6 {
    margin-left: 4.5rem !important;
  }
  .ms-xl-7 {
    margin-left: 6rem !important;
  }
  .ms-xl-auto {
    margin-left: auto !important;
  }
  .m-xl-n1 {
    margin: -0.25rem !important;
  }
  .m-xl-n2 {
    margin: -0.5rem !important;
  }
  .m-xl-n3 {
    margin: -1rem !important;
  }
  .m-xl-n4 {
    margin: -1.5rem !important;
  }
  .m-xl-n5 {
    margin: -3rem !important;
  }
  .m-xl-n6 {
    margin: -4.5rem !important;
  }
  .m-xl-n7 {
    margin: -6rem !important;
  }
  .mx-xl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-xl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-xl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-xl-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-xl-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-xl-n6 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-xl-n7 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .my-xl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-xl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-xl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-xl-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-xl-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-xl-n6 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-xl-n7 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .mt-xl-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-xl-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-xl-n3 {
    margin-top: -1rem !important;
  }
  .mt-xl-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-xl-n5 {
    margin-top: -3rem !important;
  }
  .mt-xl-n6 {
    margin-top: -4.5rem !important;
  }
  .mt-xl-n7 {
    margin-top: -6rem !important;
  }
  .me-xl-n1 {
    margin-right: -0.25rem !important;
  }
  .me-xl-n2 {
    margin-right: -0.5rem !important;
  }
  .me-xl-n3 {
    margin-right: -1rem !important;
  }
  .me-xl-n4 {
    margin-right: -1.5rem !important;
  }
  .me-xl-n5 {
    margin-right: -3rem !important;
  }
  .me-xl-n6 {
    margin-right: -4.5rem !important;
  }
  .me-xl-n7 {
    margin-right: -6rem !important;
  }
  .mb-xl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-xl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-xl-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-xl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-xl-n5 {
    margin-bottom: -3rem !important;
  }
  .mb-xl-n6 {
    margin-bottom: -4.5rem !important;
  }
  .mb-xl-n7 {
    margin-bottom: -6rem !important;
  }
  .ms-xl-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-xl-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-xl-n3 {
    margin-left: -1rem !important;
  }
  .ms-xl-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-xl-n5 {
    margin-left: -3rem !important;
  }
  .ms-xl-n6 {
    margin-left: -4.5rem !important;
  }
  .ms-xl-n7 {
    margin-left: -6rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .p-xl-6 {
    padding: 4.5rem !important;
  }
  .p-xl-7 {
    padding: 6rem !important;
  }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-xl-6 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-xl-7 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-xl-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-xl-7 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .pt-xl-0 {
    padding-top: 0 !important;
  }
  .pt-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xl-3 {
    padding-top: 1rem !important;
  }
  .pt-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xl-5 {
    padding-top: 3rem !important;
  }
  .pt-xl-6 {
    padding-top: 4.5rem !important;
  }
  .pt-xl-7 {
    padding-top: 6rem !important;
  }
  .pe-xl-0 {
    padding-right: 0 !important;
  }
  .pe-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xl-3 {
    padding-right: 1rem !important;
  }
  .pe-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xl-5 {
    padding-right: 3rem !important;
  }
  .pe-xl-6 {
    padding-right: 4.5rem !important;
  }
  .pe-xl-7 {
    padding-right: 6rem !important;
  }
  .pb-xl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xl-5 {
    padding-bottom: 3rem !important;
  }
  .pb-xl-6 {
    padding-bottom: 4.5rem !important;
  }
  .pb-xl-7 {
    padding-bottom: 6rem !important;
  }
  .ps-xl-0 {
    padding-left: 0 !important;
  }
  .ps-xl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xl-3 {
    padding-left: 1rem !important;
  }
  .ps-xl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xl-5 {
    padding-left: 3rem !important;
  }
  .ps-xl-6 {
    padding-left: 4.5rem !important;
  }
  .ps-xl-7 {
    padding-left: 6rem !important;
  }
  .gap-xl-0 {
    gap: 0 !important;
  }
  .gap-xl-1 {
    gap: 0.25rem !important;
  }
  .gap-xl-2 {
    gap: 0.5rem !important;
  }
  .gap-xl-3 {
    gap: 1rem !important;
  }
  .gap-xl-4 {
    gap: 1.5rem !important;
  }
  .gap-xl-5 {
    gap: 3rem !important;
  }
  .gap-xl-6 {
    gap: 4.5rem !important;
  }
  .gap-xl-7 {
    gap: 6rem !important;
  }
  .text-xl-start {
    text-align: left !important;
  }
  .text-xl-end {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}
@media (min-width: 1400px) {
  .float-xxl-start {
    float: left !important;
  }
  .float-xxl-end {
    float: right !important;
  }
  .float-xxl-none {
    float: none !important;
  }
  .d-xxl-inline {
    display: inline !important;
  }
  .d-xxl-inline-block {
    display: inline-block !important;
  }
  .d-xxl-block {
    display: block !important;
  }
  .d-xxl-grid {
    display: grid !important;
  }
  .d-xxl-table {
    display: table !important;
  }
  .d-xxl-table-row {
    display: table-row !important;
  }
  .d-xxl-table-cell {
    display: table-cell !important;
  }
  .d-xxl-flex {
    display: flex !important;
  }
  .d-xxl-inline-flex {
    display: inline-flex !important;
  }
  .d-xxl-none {
    display: none !important;
  }
  .border-xxl {
    border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-xxl-0 {
    border: 0 !important;
  }
  .border-top-xxl {
    border-top: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-top-xxl-0 {
    border-top: 0 !important;
  }
  .border-end-xxl {
    border-right: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-end-xxl-0 {
    border-right: 0 !important;
  }
  .border-bottom-xxl {
    border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-bottom-xxl-0 {
    border-bottom: 0 !important;
  }
  .border-start-xxl {
    border-left: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
  }
  .border-start-xxl-0 {
    border-left: 0 !important;
  }
  .flex-xxl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xxl-row {
    flex-direction: row !important;
  }
  .flex-xxl-column {
    flex-direction: column !important;
  }
  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xxl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xxl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xxl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xxl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xxl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xxl-center {
    justify-content: center !important;
  }
  .justify-content-xxl-between {
    justify-content: space-between !important;
  }
  .justify-content-xxl-around {
    justify-content: space-around !important;
  }
  .justify-content-xxl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xxl-start {
    align-items: flex-start !important;
  }
  .align-items-xxl-end {
    align-items: flex-end !important;
  }
  .align-items-xxl-center {
    align-items: center !important;
  }
  .align-items-xxl-baseline {
    align-items: baseline !important;
  }
  .align-items-xxl-stretch {
    align-items: stretch !important;
  }
  .align-content-xxl-start {
    align-content: flex-start !important;
  }
  .align-content-xxl-end {
    align-content: flex-end !important;
  }
  .align-content-xxl-center {
    align-content: center !important;
  }
  .align-content-xxl-between {
    align-content: space-between !important;
  }
  .align-content-xxl-around {
    align-content: space-around !important;
  }
  .align-content-xxl-stretch {
    align-content: stretch !important;
  }
  .align-self-xxl-auto {
    align-self: auto !important;
  }
  .align-self-xxl-start {
    align-self: flex-start !important;
  }
  .align-self-xxl-end {
    align-self: flex-end !important;
  }
  .align-self-xxl-center {
    align-self: center !important;
  }
  .align-self-xxl-baseline {
    align-self: baseline !important;
  }
  .align-self-xxl-stretch {
    align-self: stretch !important;
  }
  .order-xxl-first {
    order: -1 !important;
  }
  .order-xxl-0 {
    order: 0 !important;
  }
  .order-xxl-1 {
    order: 1 !important;
  }
  .order-xxl-2 {
    order: 2 !important;
  }
  .order-xxl-3 {
    order: 3 !important;
  }
  .order-xxl-4 {
    order: 4 !important;
  }
  .order-xxl-5 {
    order: 5 !important;
  }
  .order-xxl-last {
    order: 6 !important;
  }
  .m-xxl-0 {
    margin: 0 !important;
  }
  .m-xxl-1 {
    margin: 0.25rem !important;
  }
  .m-xxl-2 {
    margin: 0.5rem !important;
  }
  .m-xxl-3 {
    margin: 1rem !important;
  }
  .m-xxl-4 {
    margin: 1.5rem !important;
  }
  .m-xxl-5 {
    margin: 3rem !important;
  }
  .m-xxl-6 {
    margin: 4.5rem !important;
  }
  .m-xxl-7 {
    margin: 6rem !important;
  }
  .m-xxl-auto {
    margin: auto !important;
  }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xxl-6 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-xxl-7 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xxl-6 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-xxl-7 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xxl-0 {
    margin-top: 0 !important;
  }
  .mt-xxl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xxl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xxl-3 {
    margin-top: 1rem !important;
  }
  .mt-xxl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xxl-5 {
    margin-top: 3rem !important;
  }
  .mt-xxl-6 {
    margin-top: 4.5rem !important;
  }
  .mt-xxl-7 {
    margin-top: 6rem !important;
  }
  .mt-xxl-auto {
    margin-top: auto !important;
  }
  .me-xxl-0 {
    margin-right: 0 !important;
  }
  .me-xxl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xxl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xxl-3 {
    margin-right: 1rem !important;
  }
  .me-xxl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xxl-5 {
    margin-right: 3rem !important;
  }
  .me-xxl-6 {
    margin-right: 4.5rem !important;
  }
  .me-xxl-7 {
    margin-right: 6rem !important;
  }
  .me-xxl-auto {
    margin-right: auto !important;
  }
  .mb-xxl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xxl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xxl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xxl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xxl-6 {
    margin-bottom: 4.5rem !important;
  }
  .mb-xxl-7 {
    margin-bottom: 6rem !important;
  }
  .mb-xxl-auto {
    margin-bottom: auto !important;
  }
  .ms-xxl-0 {
    margin-left: 0 !important;
  }
  .ms-xxl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xxl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xxl-3 {
    margin-left: 1rem !important;
  }
  .ms-xxl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xxl-5 {
    margin-left: 3rem !important;
  }
  .ms-xxl-6 {
    margin-left: 4.5rem !important;
  }
  .ms-xxl-7 {
    margin-left: 6rem !important;
  }
  .ms-xxl-auto {
    margin-left: auto !important;
  }
  .m-xxl-n1 {
    margin: -0.25rem !important;
  }
  .m-xxl-n2 {
    margin: -0.5rem !important;
  }
  .m-xxl-n3 {
    margin: -1rem !important;
  }
  .m-xxl-n4 {
    margin: -1.5rem !important;
  }
  .m-xxl-n5 {
    margin: -3rem !important;
  }
  .m-xxl-n6 {
    margin: -4.5rem !important;
  }
  .m-xxl-n7 {
    margin: -6rem !important;
  }
  .mx-xxl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-xxl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-xxl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-xxl-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-xxl-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-xxl-n6 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-xxl-n7 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .my-xxl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-xxl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-xxl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-xxl-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-xxl-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-xxl-n6 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-xxl-n7 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .mt-xxl-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-xxl-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-xxl-n3 {
    margin-top: -1rem !important;
  }
  .mt-xxl-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-xxl-n5 {
    margin-top: -3rem !important;
  }
  .mt-xxl-n6 {
    margin-top: -4.5rem !important;
  }
  .mt-xxl-n7 {
    margin-top: -6rem !important;
  }
  .me-xxl-n1 {
    margin-right: -0.25rem !important;
  }
  .me-xxl-n2 {
    margin-right: -0.5rem !important;
  }
  .me-xxl-n3 {
    margin-right: -1rem !important;
  }
  .me-xxl-n4 {
    margin-right: -1.5rem !important;
  }
  .me-xxl-n5 {
    margin-right: -3rem !important;
  }
  .me-xxl-n6 {
    margin-right: -4.5rem !important;
  }
  .me-xxl-n7 {
    margin-right: -6rem !important;
  }
  .mb-xxl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-xxl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-xxl-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-xxl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-xxl-n5 {
    margin-bottom: -3rem !important;
  }
  .mb-xxl-n6 {
    margin-bottom: -4.5rem !important;
  }
  .mb-xxl-n7 {
    margin-bottom: -6rem !important;
  }
  .ms-xxl-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-xxl-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-xxl-n3 {
    margin-left: -1rem !important;
  }
  .ms-xxl-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-xxl-n5 {
    margin-left: -3rem !important;
  }
  .ms-xxl-n6 {
    margin-left: -4.5rem !important;
  }
  .ms-xxl-n7 {
    margin-left: -6rem !important;
  }
  .p-xxl-0 {
    padding: 0 !important;
  }
  .p-xxl-1 {
    padding: 0.25rem !important;
  }
  .p-xxl-2 {
    padding: 0.5rem !important;
  }
  .p-xxl-3 {
    padding: 1rem !important;
  }
  .p-xxl-4 {
    padding: 1.5rem !important;
  }
  .p-xxl-5 {
    padding: 3rem !important;
  }
  .p-xxl-6 {
    padding: 4.5rem !important;
  }
  .p-xxl-7 {
    padding: 6rem !important;
  }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-xxl-6 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-xxl-7 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-xxl-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-xxl-7 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .pt-xxl-0 {
    padding-top: 0 !important;
  }
  .pt-xxl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xxl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xxl-3 {
    padding-top: 1rem !important;
  }
  .pt-xxl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xxl-5 {
    padding-top: 3rem !important;
  }
  .pt-xxl-6 {
    padding-top: 4.5rem !important;
  }
  .pt-xxl-7 {
    padding-top: 6rem !important;
  }
  .pe-xxl-0 {
    padding-right: 0 !important;
  }
  .pe-xxl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xxl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xxl-3 {
    padding-right: 1rem !important;
  }
  .pe-xxl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xxl-5 {
    padding-right: 3rem !important;
  }
  .pe-xxl-6 {
    padding-right: 4.5rem !important;
  }
  .pe-xxl-7 {
    padding-right: 6rem !important;
  }
  .pb-xxl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xxl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xxl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xxl-5 {
    padding-bottom: 3rem !important;
  }
  .pb-xxl-6 {
    padding-bottom: 4.5rem !important;
  }
  .pb-xxl-7 {
    padding-bottom: 6rem !important;
  }
  .ps-xxl-0 {
    padding-left: 0 !important;
  }
  .ps-xxl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xxl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xxl-3 {
    padding-left: 1rem !important;
  }
  .ps-xxl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xxl-5 {
    padding-left: 3rem !important;
  }
  .ps-xxl-6 {
    padding-left: 4.5rem !important;
  }
  .ps-xxl-7 {
    padding-left: 6rem !important;
  }
  .gap-xxl-0 {
    gap: 0 !important;
  }
  .gap-xxl-1 {
    gap: 0.25rem !important;
  }
  .gap-xxl-2 {
    gap: 0.5rem !important;
  }
  .gap-xxl-3 {
    gap: 1rem !important;
  }
  .gap-xxl-4 {
    gap: 1.5rem !important;
  }
  .gap-xxl-5 {
    gap: 3rem !important;
  }
  .gap-xxl-6 {
    gap: 4.5rem !important;
  }
  .gap-xxl-7 {
    gap: 6rem !important;
  }
  .text-xxl-start {
    text-align: left !important;
  }
  .text-xxl-end {
    text-align: right !important;
  }
  .text-xxl-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .fs-1 {
    font-size: 2.5rem !important;
  }
  .fs-2 {
    font-size: 2rem !important;
  }
  .fs-3 {
    font-size: 1.5rem !important;
  }
}
@media print {
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-grid {
    display: grid !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
  .d-print-none {
    display: none !important;
  }
}
@keyframes dropdownAnimation {
  from {
    opacity: 0;
    transform: translate3d(0, 20px, 0);
  }
  to {
    opacity: 1;
    transform: none;
    transform: translate3d(0, 0px, 0);
  }
}
.dropdownAnimation, .navbar .navbar-content .navbar-nav .nav-item.dropdown .dropdown-menu, .navbar .navbar-content .navbar-nav .nav-item.dropdown .tt-menu {
  animation-name: dropdownAnimation;
  animation-duration: 0.2s;
  animation-fill-mode: both;
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
.fadeOut {
  animation-name: fadeOUt;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }
  to {
    opacity: 1;
    transform: none;
  }
}
.fadeInUp {
  animation-name: fadeInUp;
}

.infinite-spin, .settings-sidebar .sidebar-body .settings-sidebar-toggler svg {
  animation-name: spin;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}
@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

.pulse, .navbar .navbar-content .navbar-nav .nav-item .nav-link .indicator .circle::before {
  animation-name: pulse;
  animation-duration: 0.9s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-out;
}
@keyframes pulse {
  0% {
    opacity: 1;
    width: 7px;
    height: 7px;
    left: 0;
    top: 0;
  }
  95% {
    opacity: 0.1;
    left: -10.5px;
    top: -10.5px;
    width: 28px;
    height: 28px;
  }
  100% {
    opacity: 0;
    width: 7px;
    height: 7px;
    left: 0;
    top: 0;
  }
}

.wd-5 {
  width: 5px;
}

.wd-5p {
  width: 5%;
}

.mx-wd-5p {
  max-width: 5%;
}

.mn-wd-5p {
  min-width: 5%;
}

.wd-5-f {
  width: 5px !important;
}

.wd-5p-f {
  width: 5% !important;
}

.mx-wd-5p-f {
  max-width: 5% !important;
}

.mn-wd-5p-f {
  min-width: 5% !important;
}

.wd-10 {
  width: 10px;
}

.wd-10p {
  width: 10%;
}

.mx-wd-10p {
  max-width: 10%;
}

.mn-wd-10p {
  min-width: 10%;
}

.wd-10-f {
  width: 10px !important;
}

.wd-10p-f {
  width: 10% !important;
}

.mx-wd-10p-f {
  max-width: 10% !important;
}

.mn-wd-10p-f {
  min-width: 10% !important;
}

.wd-15 {
  width: 15px;
}

.wd-15p {
  width: 15%;
}

.mx-wd-15p {
  max-width: 15%;
}

.mn-wd-15p {
  min-width: 15%;
}

.wd-15-f {
  width: 15px !important;
}

.wd-15p-f {
  width: 15% !important;
}

.mx-wd-15p-f {
  max-width: 15% !important;
}

.mn-wd-15p-f {
  min-width: 15% !important;
}

.wd-20 {
  width: 20px;
}

.wd-20p {
  width: 20%;
}

.mx-wd-20p {
  max-width: 20%;
}

.mn-wd-20p {
  min-width: 20%;
}

.wd-20-f {
  width: 20px !important;
}

.wd-20p-f {
  width: 20% !important;
}

.mx-wd-20p-f {
  max-width: 20% !important;
}

.mn-wd-20p-f {
  min-width: 20% !important;
}

.wd-25 {
  width: 25px;
}

.wd-25p {
  width: 25%;
}

.mx-wd-25p {
  max-width: 25%;
}

.mn-wd-25p {
  min-width: 25%;
}

.wd-25-f {
  width: 25px !important;
}

.wd-25p-f {
  width: 25% !important;
}

.mx-wd-25p-f {
  max-width: 25% !important;
}

.mn-wd-25p-f {
  min-width: 25% !important;
}

.wd-30 {
  width: 30px;
}

.wd-30p {
  width: 30%;
}

.mx-wd-30p {
  max-width: 30%;
}

.mn-wd-30p {
  min-width: 30%;
}

.wd-30-f {
  width: 30px !important;
}

.wd-30p-f {
  width: 30% !important;
}

.mx-wd-30p-f {
  max-width: 30% !important;
}

.mn-wd-30p-f {
  min-width: 30% !important;
}

.wd-35 {
  width: 35px;
}

.wd-35p {
  width: 35%;
}

.mx-wd-35p {
  max-width: 35%;
}

.mn-wd-35p {
  min-width: 35%;
}

.wd-35-f {
  width: 35px !important;
}

.wd-35p-f {
  width: 35% !important;
}

.mx-wd-35p-f {
  max-width: 35% !important;
}

.mn-wd-35p-f {
  min-width: 35% !important;
}

.wd-40 {
  width: 40px;
}

.wd-40p {
  width: 40%;
}

.mx-wd-40p {
  max-width: 40%;
}

.mn-wd-40p {
  min-width: 40%;
}

.wd-40-f {
  width: 40px !important;
}

.wd-40p-f {
  width: 40% !important;
}

.mx-wd-40p-f {
  max-width: 40% !important;
}

.mn-wd-40p-f {
  min-width: 40% !important;
}

.wd-45 {
  width: 45px;
}

.wd-45p {
  width: 45%;
}

.mx-wd-45p {
  max-width: 45%;
}

.mn-wd-45p {
  min-width: 45%;
}

.wd-45-f {
  width: 45px !important;
}

.wd-45p-f {
  width: 45% !important;
}

.mx-wd-45p-f {
  max-width: 45% !important;
}

.mn-wd-45p-f {
  min-width: 45% !important;
}

.wd-50 {
  width: 50px;
}

.wd-50p {
  width: 50%;
}

.mx-wd-50p {
  max-width: 50%;
}

.mn-wd-50p {
  min-width: 50%;
}

.wd-50-f {
  width: 50px !important;
}

.wd-50p-f {
  width: 50% !important;
}

.mx-wd-50p-f {
  max-width: 50% !important;
}

.mn-wd-50p-f {
  min-width: 50% !important;
}

.wd-55 {
  width: 55px;
}

.wd-55p {
  width: 55%;
}

.mx-wd-55p {
  max-width: 55%;
}

.mn-wd-55p {
  min-width: 55%;
}

.wd-55-f {
  width: 55px !important;
}

.wd-55p-f {
  width: 55% !important;
}

.mx-wd-55p-f {
  max-width: 55% !important;
}

.mn-wd-55p-f {
  min-width: 55% !important;
}

.wd-60 {
  width: 60px;
}

.wd-60p {
  width: 60%;
}

.mx-wd-60p {
  max-width: 60%;
}

.mn-wd-60p {
  min-width: 60%;
}

.wd-60-f {
  width: 60px !important;
}

.wd-60p-f {
  width: 60% !important;
}

.mx-wd-60p-f {
  max-width: 60% !important;
}

.mn-wd-60p-f {
  min-width: 60% !important;
}

.wd-65 {
  width: 65px;
}

.wd-65p {
  width: 65%;
}

.mx-wd-65p {
  max-width: 65%;
}

.mn-wd-65p {
  min-width: 65%;
}

.wd-65-f {
  width: 65px !important;
}

.wd-65p-f {
  width: 65% !important;
}

.mx-wd-65p-f {
  max-width: 65% !important;
}

.mn-wd-65p-f {
  min-width: 65% !important;
}

.wd-70 {
  width: 70px;
}

.wd-70p {
  width: 70%;
}

.mx-wd-70p {
  max-width: 70%;
}

.mn-wd-70p {
  min-width: 70%;
}

.wd-70-f {
  width: 70px !important;
}

.wd-70p-f {
  width: 70% !important;
}

.mx-wd-70p-f {
  max-width: 70% !important;
}

.mn-wd-70p-f {
  min-width: 70% !important;
}

.wd-75 {
  width: 75px;
}

.wd-75p {
  width: 75%;
}

.mx-wd-75p {
  max-width: 75%;
}

.mn-wd-75p {
  min-width: 75%;
}

.wd-75-f {
  width: 75px !important;
}

.wd-75p-f {
  width: 75% !important;
}

.mx-wd-75p-f {
  max-width: 75% !important;
}

.mn-wd-75p-f {
  min-width: 75% !important;
}

.wd-80 {
  width: 80px;
}

.wd-80p {
  width: 80%;
}

.mx-wd-80p {
  max-width: 80%;
}

.mn-wd-80p {
  min-width: 80%;
}

.wd-80-f {
  width: 80px !important;
}

.wd-80p-f {
  width: 80% !important;
}

.mx-wd-80p-f {
  max-width: 80% !important;
}

.mn-wd-80p-f {
  min-width: 80% !important;
}

.wd-85 {
  width: 85px;
}

.wd-85p {
  width: 85%;
}

.mx-wd-85p {
  max-width: 85%;
}

.mn-wd-85p {
  min-width: 85%;
}

.wd-85-f {
  width: 85px !important;
}

.wd-85p-f {
  width: 85% !important;
}

.mx-wd-85p-f {
  max-width: 85% !important;
}

.mn-wd-85p-f {
  min-width: 85% !important;
}

.wd-90 {
  width: 90px;
}

.wd-90p {
  width: 90%;
}

.mx-wd-90p {
  max-width: 90%;
}

.mn-wd-90p {
  min-width: 90%;
}

.wd-90-f {
  width: 90px !important;
}

.wd-90p-f {
  width: 90% !important;
}

.mx-wd-90p-f {
  max-width: 90% !important;
}

.mn-wd-90p-f {
  min-width: 90% !important;
}

.wd-95 {
  width: 95px;
}

.wd-95p {
  width: 95%;
}

.mx-wd-95p {
  max-width: 95%;
}

.mn-wd-95p {
  min-width: 95%;
}

.wd-95-f {
  width: 95px !important;
}

.wd-95p-f {
  width: 95% !important;
}

.mx-wd-95p-f {
  max-width: 95% !important;
}

.mn-wd-95p-f {
  min-width: 95% !important;
}

.wd-100 {
  width: 100px;
}

.wd-100p {
  width: 100%;
}

.mx-wd-100p {
  max-width: 100%;
}

.mn-wd-100p {
  min-width: 100%;
}

.wd-100-f {
  width: 100px !important;
}

.wd-100p-f {
  width: 100% !important;
}

.mx-wd-100p-f {
  max-width: 100% !important;
}

.mn-wd-100p-f {
  min-width: 100% !important;
}

.wd-150 {
  width: 150px;
}

.wd-150-f {
  width: 150px !important;
}

.wd-200 {
  width: 200px;
}

.wd-200-f {
  width: 200px !important;
}

.wd-250 {
  width: 250px;
}

.wd-250-f {
  width: 250px !important;
}

.wd-300 {
  width: 300px;
}

.wd-300-f {
  width: 300px !important;
}

.wd-350 {
  width: 350px;
}

.wd-350-f {
  width: 350px !important;
}

.wd-400 {
  width: 400px;
}

.wd-400-f {
  width: 400px !important;
}

.wd-450 {
  width: 450px;
}

.wd-450-f {
  width: 450px !important;
}

.wd-500 {
  width: 500px;
}

.wd-500-f {
  width: 500px !important;
}

.wd-550 {
  width: 550px;
}

.wd-550-f {
  width: 550px !important;
}

.wd-600 {
  width: 600px;
}

.wd-600-f {
  width: 600px !important;
}

.wd-650 {
  width: 650px;
}

.wd-650-f {
  width: 650px !important;
}

.wd-700 {
  width: 700px;
}

.wd-700-f {
  width: 700px !important;
}

.wd-750 {
  width: 750px;
}

.wd-750-f {
  width: 750px !important;
}

.wd-800 {
  width: 800px;
}

.wd-800-f {
  width: 800px !important;
}

.wd-850 {
  width: 850px;
}

.wd-850-f {
  width: 850px !important;
}

.wd-900 {
  width: 900px;
}

.wd-900-f {
  width: 900px !important;
}

.wd-950 {
  width: 950px;
}

.wd-950-f {
  width: 950px !important;
}

.wd-1000 {
  width: 1000px;
}

.wd-1000-f {
  width: 1000px !important;
}

@media (min-width: 480px) {
  .wd-xs-5 {
    width: 5px;
  }
  .wd-xs-5p {
    width: 5%;
  }
  .mx-wd-xs-5p {
    max-width: 5%;
  }
  .mn-wd-xs-5p {
    min-width: 5%;
  }
  .wd-xs-5-f {
    width: 5px !important;
  }
  .wd-xs-5p-f {
    width: 5% !important;
  }
  .mx-wd-xs-5p-f {
    max-width: 5% !important;
  }
  .mn-wd-xs-5p-f {
    min-width: 5% !important;
  }
  .wd-xs-10 {
    width: 10px;
  }
  .wd-xs-10p {
    width: 10%;
  }
  .mx-wd-xs-10p {
    max-width: 10%;
  }
  .mn-wd-xs-10p {
    min-width: 10%;
  }
  .wd-xs-10-f {
    width: 10px !important;
  }
  .wd-xs-10p-f {
    width: 10% !important;
  }
  .mx-wd-xs-10p-f {
    max-width: 10% !important;
  }
  .mn-wd-xs-10p-f {
    min-width: 10% !important;
  }
  .wd-xs-15 {
    width: 15px;
  }
  .wd-xs-15p {
    width: 15%;
  }
  .mx-wd-xs-15p {
    max-width: 15%;
  }
  .mn-wd-xs-15p {
    min-width: 15%;
  }
  .wd-xs-15-f {
    width: 15px !important;
  }
  .wd-xs-15p-f {
    width: 15% !important;
  }
  .mx-wd-xs-15p-f {
    max-width: 15% !important;
  }
  .mn-wd-xs-15p-f {
    min-width: 15% !important;
  }
  .wd-xs-20 {
    width: 20px;
  }
  .wd-xs-20p {
    width: 20%;
  }
  .mx-wd-xs-20p {
    max-width: 20%;
  }
  .mn-wd-xs-20p {
    min-width: 20%;
  }
  .wd-xs-20-f {
    width: 20px !important;
  }
  .wd-xs-20p-f {
    width: 20% !important;
  }
  .mx-wd-xs-20p-f {
    max-width: 20% !important;
  }
  .mn-wd-xs-20p-f {
    min-width: 20% !important;
  }
  .wd-xs-25 {
    width: 25px;
  }
  .wd-xs-25p {
    width: 25%;
  }
  .mx-wd-xs-25p {
    max-width: 25%;
  }
  .mn-wd-xs-25p {
    min-width: 25%;
  }
  .wd-xs-25-f {
    width: 25px !important;
  }
  .wd-xs-25p-f {
    width: 25% !important;
  }
  .mx-wd-xs-25p-f {
    max-width: 25% !important;
  }
  .mn-wd-xs-25p-f {
    min-width: 25% !important;
  }
  .wd-xs-30 {
    width: 30px;
  }
  .wd-xs-30p {
    width: 30%;
  }
  .mx-wd-xs-30p {
    max-width: 30%;
  }
  .mn-wd-xs-30p {
    min-width: 30%;
  }
  .wd-xs-30-f {
    width: 30px !important;
  }
  .wd-xs-30p-f {
    width: 30% !important;
  }
  .mx-wd-xs-30p-f {
    max-width: 30% !important;
  }
  .mn-wd-xs-30p-f {
    min-width: 30% !important;
  }
  .wd-xs-35 {
    width: 35px;
  }
  .wd-xs-35p {
    width: 35%;
  }
  .mx-wd-xs-35p {
    max-width: 35%;
  }
  .mn-wd-xs-35p {
    min-width: 35%;
  }
  .wd-xs-35-f {
    width: 35px !important;
  }
  .wd-xs-35p-f {
    width: 35% !important;
  }
  .mx-wd-xs-35p-f {
    max-width: 35% !important;
  }
  .mn-wd-xs-35p-f {
    min-width: 35% !important;
  }
  .wd-xs-40 {
    width: 40px;
  }
  .wd-xs-40p {
    width: 40%;
  }
  .mx-wd-xs-40p {
    max-width: 40%;
  }
  .mn-wd-xs-40p {
    min-width: 40%;
  }
  .wd-xs-40-f {
    width: 40px !important;
  }
  .wd-xs-40p-f {
    width: 40% !important;
  }
  .mx-wd-xs-40p-f {
    max-width: 40% !important;
  }
  .mn-wd-xs-40p-f {
    min-width: 40% !important;
  }
  .wd-xs-45 {
    width: 45px;
  }
  .wd-xs-45p {
    width: 45%;
  }
  .mx-wd-xs-45p {
    max-width: 45%;
  }
  .mn-wd-xs-45p {
    min-width: 45%;
  }
  .wd-xs-45-f {
    width: 45px !important;
  }
  .wd-xs-45p-f {
    width: 45% !important;
  }
  .mx-wd-xs-45p-f {
    max-width: 45% !important;
  }
  .mn-wd-xs-45p-f {
    min-width: 45% !important;
  }
  .wd-xs-50 {
    width: 50px;
  }
  .wd-xs-50p {
    width: 50%;
  }
  .mx-wd-xs-50p {
    max-width: 50%;
  }
  .mn-wd-xs-50p {
    min-width: 50%;
  }
  .wd-xs-50-f {
    width: 50px !important;
  }
  .wd-xs-50p-f {
    width: 50% !important;
  }
  .mx-wd-xs-50p-f {
    max-width: 50% !important;
  }
  .mn-wd-xs-50p-f {
    min-width: 50% !important;
  }
  .wd-xs-55 {
    width: 55px;
  }
  .wd-xs-55p {
    width: 55%;
  }
  .mx-wd-xs-55p {
    max-width: 55%;
  }
  .mn-wd-xs-55p {
    min-width: 55%;
  }
  .wd-xs-55-f {
    width: 55px !important;
  }
  .wd-xs-55p-f {
    width: 55% !important;
  }
  .mx-wd-xs-55p-f {
    max-width: 55% !important;
  }
  .mn-wd-xs-55p-f {
    min-width: 55% !important;
  }
  .wd-xs-60 {
    width: 60px;
  }
  .wd-xs-60p {
    width: 60%;
  }
  .mx-wd-xs-60p {
    max-width: 60%;
  }
  .mn-wd-xs-60p {
    min-width: 60%;
  }
  .wd-xs-60-f {
    width: 60px !important;
  }
  .wd-xs-60p-f {
    width: 60% !important;
  }
  .mx-wd-xs-60p-f {
    max-width: 60% !important;
  }
  .mn-wd-xs-60p-f {
    min-width: 60% !important;
  }
  .wd-xs-65 {
    width: 65px;
  }
  .wd-xs-65p {
    width: 65%;
  }
  .mx-wd-xs-65p {
    max-width: 65%;
  }
  .mn-wd-xs-65p {
    min-width: 65%;
  }
  .wd-xs-65-f {
    width: 65px !important;
  }
  .wd-xs-65p-f {
    width: 65% !important;
  }
  .mx-wd-xs-65p-f {
    max-width: 65% !important;
  }
  .mn-wd-xs-65p-f {
    min-width: 65% !important;
  }
  .wd-xs-70 {
    width: 70px;
  }
  .wd-xs-70p {
    width: 70%;
  }
  .mx-wd-xs-70p {
    max-width: 70%;
  }
  .mn-wd-xs-70p {
    min-width: 70%;
  }
  .wd-xs-70-f {
    width: 70px !important;
  }
  .wd-xs-70p-f {
    width: 70% !important;
  }
  .mx-wd-xs-70p-f {
    max-width: 70% !important;
  }
  .mn-wd-xs-70p-f {
    min-width: 70% !important;
  }
  .wd-xs-75 {
    width: 75px;
  }
  .wd-xs-75p {
    width: 75%;
  }
  .mx-wd-xs-75p {
    max-width: 75%;
  }
  .mn-wd-xs-75p {
    min-width: 75%;
  }
  .wd-xs-75-f {
    width: 75px !important;
  }
  .wd-xs-75p-f {
    width: 75% !important;
  }
  .mx-wd-xs-75p-f {
    max-width: 75% !important;
  }
  .mn-wd-xs-75p-f {
    min-width: 75% !important;
  }
  .wd-xs-80 {
    width: 80px;
  }
  .wd-xs-80p {
    width: 80%;
  }
  .mx-wd-xs-80p {
    max-width: 80%;
  }
  .mn-wd-xs-80p {
    min-width: 80%;
  }
  .wd-xs-80-f {
    width: 80px !important;
  }
  .wd-xs-80p-f {
    width: 80% !important;
  }
  .mx-wd-xs-80p-f {
    max-width: 80% !important;
  }
  .mn-wd-xs-80p-f {
    min-width: 80% !important;
  }
  .wd-xs-85 {
    width: 85px;
  }
  .wd-xs-85p {
    width: 85%;
  }
  .mx-wd-xs-85p {
    max-width: 85%;
  }
  .mn-wd-xs-85p {
    min-width: 85%;
  }
  .wd-xs-85-f {
    width: 85px !important;
  }
  .wd-xs-85p-f {
    width: 85% !important;
  }
  .mx-wd-xs-85p-f {
    max-width: 85% !important;
  }
  .mn-wd-xs-85p-f {
    min-width: 85% !important;
  }
  .wd-xs-90 {
    width: 90px;
  }
  .wd-xs-90p {
    width: 90%;
  }
  .mx-wd-xs-90p {
    max-width: 90%;
  }
  .mn-wd-xs-90p {
    min-width: 90%;
  }
  .wd-xs-90-f {
    width: 90px !important;
  }
  .wd-xs-90p-f {
    width: 90% !important;
  }
  .mx-wd-xs-90p-f {
    max-width: 90% !important;
  }
  .mn-wd-xs-90p-f {
    min-width: 90% !important;
  }
  .wd-xs-95 {
    width: 95px;
  }
  .wd-xs-95p {
    width: 95%;
  }
  .mx-wd-xs-95p {
    max-width: 95%;
  }
  .mn-wd-xs-95p {
    min-width: 95%;
  }
  .wd-xs-95-f {
    width: 95px !important;
  }
  .wd-xs-95p-f {
    width: 95% !important;
  }
  .mx-wd-xs-95p-f {
    max-width: 95% !important;
  }
  .mn-wd-xs-95p-f {
    min-width: 95% !important;
  }
  .wd-xs-100 {
    width: 100px;
  }
  .wd-xs-100p {
    width: 100%;
  }
  .mx-wd-xs-100p {
    max-width: 100%;
  }
  .mn-wd-xs-100p {
    min-width: 100%;
  }
  .wd-xs-100-f {
    width: 100px !important;
  }
  .wd-xs-100p-f {
    width: 100% !important;
  }
  .mx-wd-xs-100p-f {
    max-width: 100% !important;
  }
  .mn-wd-xs-100p-f {
    min-width: 100% !important;
  }
  .wd-xs-150 {
    width: 150px;
  }
  .wd-xs-150p {
    width: 150%;
  }
  .mx-wd-xs-150p {
    max-width: 150%;
  }
  .mn-wd-xs-150p {
    min-width: 150%;
  }
  .wd-xs-150-f {
    width: 150px !important;
  }
  .wd-xs-150p-f {
    width: 150% !important;
  }
  .mx-wd-xs-150p-f {
    max-width: 150% !important;
  }
  .mn-wd-xs-150p-f {
    min-width: 150% !important;
  }
  .wd-xs-200 {
    width: 200px;
  }
  .wd-xs-200p {
    width: 200%;
  }
  .mx-wd-xs-200p {
    max-width: 200%;
  }
  .mn-wd-xs-200p {
    min-width: 200%;
  }
  .wd-xs-200-f {
    width: 200px !important;
  }
  .wd-xs-200p-f {
    width: 200% !important;
  }
  .mx-wd-xs-200p-f {
    max-width: 200% !important;
  }
  .mn-wd-xs-200p-f {
    min-width: 200% !important;
  }
  .wd-xs-250 {
    width: 250px;
  }
  .wd-xs-250p {
    width: 250%;
  }
  .mx-wd-xs-250p {
    max-width: 250%;
  }
  .mn-wd-xs-250p {
    min-width: 250%;
  }
  .wd-xs-250-f {
    width: 250px !important;
  }
  .wd-xs-250p-f {
    width: 250% !important;
  }
  .mx-wd-xs-250p-f {
    max-width: 250% !important;
  }
  .mn-wd-xs-250p-f {
    min-width: 250% !important;
  }
  .wd-xs-300 {
    width: 300px;
  }
  .wd-xs-300p {
    width: 300%;
  }
  .mx-wd-xs-300p {
    max-width: 300%;
  }
  .mn-wd-xs-300p {
    min-width: 300%;
  }
  .wd-xs-300-f {
    width: 300px !important;
  }
  .wd-xs-300p-f {
    width: 300% !important;
  }
  .mx-wd-xs-300p-f {
    max-width: 300% !important;
  }
  .mn-wd-xs-300p-f {
    min-width: 300% !important;
  }
  .wd-xs-350 {
    width: 350px;
  }
  .wd-xs-350p {
    width: 350%;
  }
  .mx-wd-xs-350p {
    max-width: 350%;
  }
  .mn-wd-xs-350p {
    min-width: 350%;
  }
  .wd-xs-350-f {
    width: 350px !important;
  }
  .wd-xs-350p-f {
    width: 350% !important;
  }
  .mx-wd-xs-350p-f {
    max-width: 350% !important;
  }
  .mn-wd-xs-350p-f {
    min-width: 350% !important;
  }
  .wd-xs-400 {
    width: 400px;
  }
  .wd-xs-400p {
    width: 400%;
  }
  .mx-wd-xs-400p {
    max-width: 400%;
  }
  .mn-wd-xs-400p {
    min-width: 400%;
  }
  .wd-xs-400-f {
    width: 400px !important;
  }
  .wd-xs-400p-f {
    width: 400% !important;
  }
  .mx-wd-xs-400p-f {
    max-width: 400% !important;
  }
  .mn-wd-xs-400p-f {
    min-width: 400% !important;
  }
  .wd-xs-450 {
    width: 450px;
  }
  .wd-xs-450p {
    width: 450%;
  }
  .mx-wd-xs-450p {
    max-width: 450%;
  }
  .mn-wd-xs-450p {
    min-width: 450%;
  }
  .wd-xs-450-f {
    width: 450px !important;
  }
  .wd-xs-450p-f {
    width: 450% !important;
  }
  .mx-wd-xs-450p-f {
    max-width: 450% !important;
  }
  .mn-wd-xs-450p-f {
    min-width: 450% !important;
  }
  .wd-xs-500 {
    width: 500px;
  }
  .wd-xs-500p {
    width: 500%;
  }
  .mx-wd-xs-500p {
    max-width: 500%;
  }
  .mn-wd-xs-500p {
    min-width: 500%;
  }
  .wd-xs-500-f {
    width: 500px !important;
  }
  .wd-xs-500p-f {
    width: 500% !important;
  }
  .mx-wd-xs-500p-f {
    max-width: 500% !important;
  }
  .mn-wd-xs-500p-f {
    min-width: 500% !important;
  }
  .wd-xs-550 {
    width: 550px;
  }
  .wd-xs-550p {
    width: 550%;
  }
  .mx-wd-xs-550p {
    max-width: 550%;
  }
  .mn-wd-xs-550p {
    min-width: 550%;
  }
  .wd-xs-550-f {
    width: 550px !important;
  }
  .wd-xs-550p-f {
    width: 550% !important;
  }
  .mx-wd-xs-550p-f {
    max-width: 550% !important;
  }
  .mn-wd-xs-550p-f {
    min-width: 550% !important;
  }
  .wd-xs-600 {
    width: 600px;
  }
  .wd-xs-600p {
    width: 600%;
  }
  .mx-wd-xs-600p {
    max-width: 600%;
  }
  .mn-wd-xs-600p {
    min-width: 600%;
  }
  .wd-xs-600-f {
    width: 600px !important;
  }
  .wd-xs-600p-f {
    width: 600% !important;
  }
  .mx-wd-xs-600p-f {
    max-width: 600% !important;
  }
  .mn-wd-xs-600p-f {
    min-width: 600% !important;
  }
  .wd-xs-650 {
    width: 650px;
  }
  .wd-xs-650p {
    width: 650%;
  }
  .mx-wd-xs-650p {
    max-width: 650%;
  }
  .mn-wd-xs-650p {
    min-width: 650%;
  }
  .wd-xs-650-f {
    width: 650px !important;
  }
  .wd-xs-650p-f {
    width: 650% !important;
  }
  .mx-wd-xs-650p-f {
    max-width: 650% !important;
  }
  .mn-wd-xs-650p-f {
    min-width: 650% !important;
  }
  .wd-xs-700 {
    width: 700px;
  }
  .wd-xs-700p {
    width: 700%;
  }
  .mx-wd-xs-700p {
    max-width: 700%;
  }
  .mn-wd-xs-700p {
    min-width: 700%;
  }
  .wd-xs-700-f {
    width: 700px !important;
  }
  .wd-xs-700p-f {
    width: 700% !important;
  }
  .mx-wd-xs-700p-f {
    max-width: 700% !important;
  }
  .mn-wd-xs-700p-f {
    min-width: 700% !important;
  }
  .wd-xs-750 {
    width: 750px;
  }
  .wd-xs-750p {
    width: 750%;
  }
  .mx-wd-xs-750p {
    max-width: 750%;
  }
  .mn-wd-xs-750p {
    min-width: 750%;
  }
  .wd-xs-750-f {
    width: 750px !important;
  }
  .wd-xs-750p-f {
    width: 750% !important;
  }
  .mx-wd-xs-750p-f {
    max-width: 750% !important;
  }
  .mn-wd-xs-750p-f {
    min-width: 750% !important;
  }
  .wd-xs-800 {
    width: 800px;
  }
  .wd-xs-800p {
    width: 800%;
  }
  .mx-wd-xs-800p {
    max-width: 800%;
  }
  .mn-wd-xs-800p {
    min-width: 800%;
  }
  .wd-xs-800-f {
    width: 800px !important;
  }
  .wd-xs-800p-f {
    width: 800% !important;
  }
  .mx-wd-xs-800p-f {
    max-width: 800% !important;
  }
  .mn-wd-xs-800p-f {
    min-width: 800% !important;
  }
  .wd-xs-850 {
    width: 850px;
  }
  .wd-xs-850p {
    width: 850%;
  }
  .mx-wd-xs-850p {
    max-width: 850%;
  }
  .mn-wd-xs-850p {
    min-width: 850%;
  }
  .wd-xs-850-f {
    width: 850px !important;
  }
  .wd-xs-850p-f {
    width: 850% !important;
  }
  .mx-wd-xs-850p-f {
    max-width: 850% !important;
  }
  .mn-wd-xs-850p-f {
    min-width: 850% !important;
  }
  .wd-xs-900 {
    width: 900px;
  }
  .wd-xs-900p {
    width: 900%;
  }
  .mx-wd-xs-900p {
    max-width: 900%;
  }
  .mn-wd-xs-900p {
    min-width: 900%;
  }
  .wd-xs-900-f {
    width: 900px !important;
  }
  .wd-xs-900p-f {
    width: 900% !important;
  }
  .mx-wd-xs-900p-f {
    max-width: 900% !important;
  }
  .mn-wd-xs-900p-f {
    min-width: 900% !important;
  }
  .wd-xs-950 {
    width: 950px;
  }
  .wd-xs-950p {
    width: 950%;
  }
  .mx-wd-xs-950p {
    max-width: 950%;
  }
  .mn-wd-xs-950p {
    min-width: 950%;
  }
  .wd-xs-950-f {
    width: 950px !important;
  }
  .wd-xs-950p-f {
    width: 950% !important;
  }
  .mx-wd-xs-950p-f {
    max-width: 950% !important;
  }
  .mn-wd-xs-950p-f {
    min-width: 950% !important;
  }
  .wd-xs-1000 {
    width: 1000px;
  }
  .wd-xs-1000p {
    width: 1000%;
  }
  .mx-wd-xs-1000p {
    max-width: 1000%;
  }
  .mn-wd-xs-1000p {
    min-width: 1000%;
  }
  .wd-xs-1000-f {
    width: 1000px !important;
  }
  .wd-xs-1000p-f {
    width: 1000% !important;
  }
  .mx-wd-xs-1000p-f {
    max-width: 1000% !important;
  }
  .mn-wd-xs-1000p-f {
    min-width: 1000% !important;
  }
  .wd-xs-auto {
    width: auto;
  }
  .wd-xs-auto-f {
    width: auto !important;
  }
}
@media (min-width: 576px) {
  .wd-sm-5 {
    width: 5px;
  }
  .wd-sm-5p {
    width: 5%;
  }
  .mx-wd-sm-5p {
    max-width: 5%;
  }
  .mn-wd-sm-5p {
    min-width: 5%;
  }
  .wd-sm-5-f {
    width: 5px !important;
  }
  .wd-sm-5p-f {
    width: 5% !important;
  }
  .mx-wd-sm-5p-f {
    max-width: 5% !important;
  }
  .mn-wd-sm-5p-f {
    min-width: 5% !important;
  }
  .wd-sm-10 {
    width: 10px;
  }
  .wd-sm-10p {
    width: 10%;
  }
  .mx-wd-sm-10p {
    max-width: 10%;
  }
  .mn-wd-sm-10p {
    min-width: 10%;
  }
  .wd-sm-10-f {
    width: 10px !important;
  }
  .wd-sm-10p-f {
    width: 10% !important;
  }
  .mx-wd-sm-10p-f {
    max-width: 10% !important;
  }
  .mn-wd-sm-10p-f {
    min-width: 10% !important;
  }
  .wd-sm-15 {
    width: 15px;
  }
  .wd-sm-15p {
    width: 15%;
  }
  .mx-wd-sm-15p {
    max-width: 15%;
  }
  .mn-wd-sm-15p {
    min-width: 15%;
  }
  .wd-sm-15-f {
    width: 15px !important;
  }
  .wd-sm-15p-f {
    width: 15% !important;
  }
  .mx-wd-sm-15p-f {
    max-width: 15% !important;
  }
  .mn-wd-sm-15p-f {
    min-width: 15% !important;
  }
  .wd-sm-20 {
    width: 20px;
  }
  .wd-sm-20p {
    width: 20%;
  }
  .mx-wd-sm-20p {
    max-width: 20%;
  }
  .mn-wd-sm-20p {
    min-width: 20%;
  }
  .wd-sm-20-f {
    width: 20px !important;
  }
  .wd-sm-20p-f {
    width: 20% !important;
  }
  .mx-wd-sm-20p-f {
    max-width: 20% !important;
  }
  .mn-wd-sm-20p-f {
    min-width: 20% !important;
  }
  .wd-sm-25 {
    width: 25px;
  }
  .wd-sm-25p {
    width: 25%;
  }
  .mx-wd-sm-25p {
    max-width: 25%;
  }
  .mn-wd-sm-25p {
    min-width: 25%;
  }
  .wd-sm-25-f {
    width: 25px !important;
  }
  .wd-sm-25p-f {
    width: 25% !important;
  }
  .mx-wd-sm-25p-f {
    max-width: 25% !important;
  }
  .mn-wd-sm-25p-f {
    min-width: 25% !important;
  }
  .wd-sm-30 {
    width: 30px;
  }
  .wd-sm-30p {
    width: 30%;
  }
  .mx-wd-sm-30p {
    max-width: 30%;
  }
  .mn-wd-sm-30p {
    min-width: 30%;
  }
  .wd-sm-30-f {
    width: 30px !important;
  }
  .wd-sm-30p-f {
    width: 30% !important;
  }
  .mx-wd-sm-30p-f {
    max-width: 30% !important;
  }
  .mn-wd-sm-30p-f {
    min-width: 30% !important;
  }
  .wd-sm-35 {
    width: 35px;
  }
  .wd-sm-35p {
    width: 35%;
  }
  .mx-wd-sm-35p {
    max-width: 35%;
  }
  .mn-wd-sm-35p {
    min-width: 35%;
  }
  .wd-sm-35-f {
    width: 35px !important;
  }
  .wd-sm-35p-f {
    width: 35% !important;
  }
  .mx-wd-sm-35p-f {
    max-width: 35% !important;
  }
  .mn-wd-sm-35p-f {
    min-width: 35% !important;
  }
  .wd-sm-40 {
    width: 40px;
  }
  .wd-sm-40p {
    width: 40%;
  }
  .mx-wd-sm-40p {
    max-width: 40%;
  }
  .mn-wd-sm-40p {
    min-width: 40%;
  }
  .wd-sm-40-f {
    width: 40px !important;
  }
  .wd-sm-40p-f {
    width: 40% !important;
  }
  .mx-wd-sm-40p-f {
    max-width: 40% !important;
  }
  .mn-wd-sm-40p-f {
    min-width: 40% !important;
  }
  .wd-sm-45 {
    width: 45px;
  }
  .wd-sm-45p {
    width: 45%;
  }
  .mx-wd-sm-45p {
    max-width: 45%;
  }
  .mn-wd-sm-45p {
    min-width: 45%;
  }
  .wd-sm-45-f {
    width: 45px !important;
  }
  .wd-sm-45p-f {
    width: 45% !important;
  }
  .mx-wd-sm-45p-f {
    max-width: 45% !important;
  }
  .mn-wd-sm-45p-f {
    min-width: 45% !important;
  }
  .wd-sm-50 {
    width: 50px;
  }
  .wd-sm-50p {
    width: 50%;
  }
  .mx-wd-sm-50p {
    max-width: 50%;
  }
  .mn-wd-sm-50p {
    min-width: 50%;
  }
  .wd-sm-50-f {
    width: 50px !important;
  }
  .wd-sm-50p-f {
    width: 50% !important;
  }
  .mx-wd-sm-50p-f {
    max-width: 50% !important;
  }
  .mn-wd-sm-50p-f {
    min-width: 50% !important;
  }
  .wd-sm-55 {
    width: 55px;
  }
  .wd-sm-55p {
    width: 55%;
  }
  .mx-wd-sm-55p {
    max-width: 55%;
  }
  .mn-wd-sm-55p {
    min-width: 55%;
  }
  .wd-sm-55-f {
    width: 55px !important;
  }
  .wd-sm-55p-f {
    width: 55% !important;
  }
  .mx-wd-sm-55p-f {
    max-width: 55% !important;
  }
  .mn-wd-sm-55p-f {
    min-width: 55% !important;
  }
  .wd-sm-60 {
    width: 60px;
  }
  .wd-sm-60p {
    width: 60%;
  }
  .mx-wd-sm-60p {
    max-width: 60%;
  }
  .mn-wd-sm-60p {
    min-width: 60%;
  }
  .wd-sm-60-f {
    width: 60px !important;
  }
  .wd-sm-60p-f {
    width: 60% !important;
  }
  .mx-wd-sm-60p-f {
    max-width: 60% !important;
  }
  .mn-wd-sm-60p-f {
    min-width: 60% !important;
  }
  .wd-sm-65 {
    width: 65px;
  }
  .wd-sm-65p {
    width: 65%;
  }
  .mx-wd-sm-65p {
    max-width: 65%;
  }
  .mn-wd-sm-65p {
    min-width: 65%;
  }
  .wd-sm-65-f {
    width: 65px !important;
  }
  .wd-sm-65p-f {
    width: 65% !important;
  }
  .mx-wd-sm-65p-f {
    max-width: 65% !important;
  }
  .mn-wd-sm-65p-f {
    min-width: 65% !important;
  }
  .wd-sm-70 {
    width: 70px;
  }
  .wd-sm-70p {
    width: 70%;
  }
  .mx-wd-sm-70p {
    max-width: 70%;
  }
  .mn-wd-sm-70p {
    min-width: 70%;
  }
  .wd-sm-70-f {
    width: 70px !important;
  }
  .wd-sm-70p-f {
    width: 70% !important;
  }
  .mx-wd-sm-70p-f {
    max-width: 70% !important;
  }
  .mn-wd-sm-70p-f {
    min-width: 70% !important;
  }
  .wd-sm-75 {
    width: 75px;
  }
  .wd-sm-75p {
    width: 75%;
  }
  .mx-wd-sm-75p {
    max-width: 75%;
  }
  .mn-wd-sm-75p {
    min-width: 75%;
  }
  .wd-sm-75-f {
    width: 75px !important;
  }
  .wd-sm-75p-f {
    width: 75% !important;
  }
  .mx-wd-sm-75p-f {
    max-width: 75% !important;
  }
  .mn-wd-sm-75p-f {
    min-width: 75% !important;
  }
  .wd-sm-80 {
    width: 80px;
  }
  .wd-sm-80p {
    width: 80%;
  }
  .mx-wd-sm-80p {
    max-width: 80%;
  }
  .mn-wd-sm-80p {
    min-width: 80%;
  }
  .wd-sm-80-f {
    width: 80px !important;
  }
  .wd-sm-80p-f {
    width: 80% !important;
  }
  .mx-wd-sm-80p-f {
    max-width: 80% !important;
  }
  .mn-wd-sm-80p-f {
    min-width: 80% !important;
  }
  .wd-sm-85 {
    width: 85px;
  }
  .wd-sm-85p {
    width: 85%;
  }
  .mx-wd-sm-85p {
    max-width: 85%;
  }
  .mn-wd-sm-85p {
    min-width: 85%;
  }
  .wd-sm-85-f {
    width: 85px !important;
  }
  .wd-sm-85p-f {
    width: 85% !important;
  }
  .mx-wd-sm-85p-f {
    max-width: 85% !important;
  }
  .mn-wd-sm-85p-f {
    min-width: 85% !important;
  }
  .wd-sm-90 {
    width: 90px;
  }
  .wd-sm-90p {
    width: 90%;
  }
  .mx-wd-sm-90p {
    max-width: 90%;
  }
  .mn-wd-sm-90p {
    min-width: 90%;
  }
  .wd-sm-90-f {
    width: 90px !important;
  }
  .wd-sm-90p-f {
    width: 90% !important;
  }
  .mx-wd-sm-90p-f {
    max-width: 90% !important;
  }
  .mn-wd-sm-90p-f {
    min-width: 90% !important;
  }
  .wd-sm-95 {
    width: 95px;
  }
  .wd-sm-95p {
    width: 95%;
  }
  .mx-wd-sm-95p {
    max-width: 95%;
  }
  .mn-wd-sm-95p {
    min-width: 95%;
  }
  .wd-sm-95-f {
    width: 95px !important;
  }
  .wd-sm-95p-f {
    width: 95% !important;
  }
  .mx-wd-sm-95p-f {
    max-width: 95% !important;
  }
  .mn-wd-sm-95p-f {
    min-width: 95% !important;
  }
  .wd-sm-100 {
    width: 100px;
  }
  .wd-sm-100p {
    width: 100%;
  }
  .mx-wd-sm-100p {
    max-width: 100%;
  }
  .mn-wd-sm-100p {
    min-width: 100%;
  }
  .wd-sm-100-f {
    width: 100px !important;
  }
  .wd-sm-100p-f {
    width: 100% !important;
  }
  .mx-wd-sm-100p-f {
    max-width: 100% !important;
  }
  .mn-wd-sm-100p-f {
    min-width: 100% !important;
  }
  .wd-sm-150 {
    width: 150px;
  }
  .wd-sm-150p {
    width: 150%;
  }
  .mx-wd-sm-150p {
    max-width: 150%;
  }
  .mn-wd-sm-150p {
    min-width: 150%;
  }
  .wd-sm-150-f {
    width: 150px !important;
  }
  .wd-sm-150p-f {
    width: 150% !important;
  }
  .mx-wd-sm-150p-f {
    max-width: 150% !important;
  }
  .mn-wd-sm-150p-f {
    min-width: 150% !important;
  }
  .wd-sm-200 {
    width: 200px;
  }
  .wd-sm-200p {
    width: 200%;
  }
  .mx-wd-sm-200p {
    max-width: 200%;
  }
  .mn-wd-sm-200p {
    min-width: 200%;
  }
  .wd-sm-200-f {
    width: 200px !important;
  }
  .wd-sm-200p-f {
    width: 200% !important;
  }
  .mx-wd-sm-200p-f {
    max-width: 200% !important;
  }
  .mn-wd-sm-200p-f {
    min-width: 200% !important;
  }
  .wd-sm-250 {
    width: 250px;
  }
  .wd-sm-250p {
    width: 250%;
  }
  .mx-wd-sm-250p {
    max-width: 250%;
  }
  .mn-wd-sm-250p {
    min-width: 250%;
  }
  .wd-sm-250-f {
    width: 250px !important;
  }
  .wd-sm-250p-f {
    width: 250% !important;
  }
  .mx-wd-sm-250p-f {
    max-width: 250% !important;
  }
  .mn-wd-sm-250p-f {
    min-width: 250% !important;
  }
  .wd-sm-300 {
    width: 300px;
  }
  .wd-sm-300p {
    width: 300%;
  }
  .mx-wd-sm-300p {
    max-width: 300%;
  }
  .mn-wd-sm-300p {
    min-width: 300%;
  }
  .wd-sm-300-f {
    width: 300px !important;
  }
  .wd-sm-300p-f {
    width: 300% !important;
  }
  .mx-wd-sm-300p-f {
    max-width: 300% !important;
  }
  .mn-wd-sm-300p-f {
    min-width: 300% !important;
  }
  .wd-sm-350 {
    width: 350px;
  }
  .wd-sm-350p {
    width: 350%;
  }
  .mx-wd-sm-350p {
    max-width: 350%;
  }
  .mn-wd-sm-350p {
    min-width: 350%;
  }
  .wd-sm-350-f {
    width: 350px !important;
  }
  .wd-sm-350p-f {
    width: 350% !important;
  }
  .mx-wd-sm-350p-f {
    max-width: 350% !important;
  }
  .mn-wd-sm-350p-f {
    min-width: 350% !important;
  }
  .wd-sm-400 {
    width: 400px;
  }
  .wd-sm-400p {
    width: 400%;
  }
  .mx-wd-sm-400p {
    max-width: 400%;
  }
  .mn-wd-sm-400p {
    min-width: 400%;
  }
  .wd-sm-400-f {
    width: 400px !important;
  }
  .wd-sm-400p-f {
    width: 400% !important;
  }
  .mx-wd-sm-400p-f {
    max-width: 400% !important;
  }
  .mn-wd-sm-400p-f {
    min-width: 400% !important;
  }
  .wd-sm-450 {
    width: 450px;
  }
  .wd-sm-450p {
    width: 450%;
  }
  .mx-wd-sm-450p {
    max-width: 450%;
  }
  .mn-wd-sm-450p {
    min-width: 450%;
  }
  .wd-sm-450-f {
    width: 450px !important;
  }
  .wd-sm-450p-f {
    width: 450% !important;
  }
  .mx-wd-sm-450p-f {
    max-width: 450% !important;
  }
  .mn-wd-sm-450p-f {
    min-width: 450% !important;
  }
  .wd-sm-500 {
    width: 500px;
  }
  .wd-sm-500p {
    width: 500%;
  }
  .mx-wd-sm-500p {
    max-width: 500%;
  }
  .mn-wd-sm-500p {
    min-width: 500%;
  }
  .wd-sm-500-f {
    width: 500px !important;
  }
  .wd-sm-500p-f {
    width: 500% !important;
  }
  .mx-wd-sm-500p-f {
    max-width: 500% !important;
  }
  .mn-wd-sm-500p-f {
    min-width: 500% !important;
  }
  .wd-sm-550 {
    width: 550px;
  }
  .wd-sm-550p {
    width: 550%;
  }
  .mx-wd-sm-550p {
    max-width: 550%;
  }
  .mn-wd-sm-550p {
    min-width: 550%;
  }
  .wd-sm-550-f {
    width: 550px !important;
  }
  .wd-sm-550p-f {
    width: 550% !important;
  }
  .mx-wd-sm-550p-f {
    max-width: 550% !important;
  }
  .mn-wd-sm-550p-f {
    min-width: 550% !important;
  }
  .wd-sm-600 {
    width: 600px;
  }
  .wd-sm-600p {
    width: 600%;
  }
  .mx-wd-sm-600p {
    max-width: 600%;
  }
  .mn-wd-sm-600p {
    min-width: 600%;
  }
  .wd-sm-600-f {
    width: 600px !important;
  }
  .wd-sm-600p-f {
    width: 600% !important;
  }
  .mx-wd-sm-600p-f {
    max-width: 600% !important;
  }
  .mn-wd-sm-600p-f {
    min-width: 600% !important;
  }
  .wd-sm-650 {
    width: 650px;
  }
  .wd-sm-650p {
    width: 650%;
  }
  .mx-wd-sm-650p {
    max-width: 650%;
  }
  .mn-wd-sm-650p {
    min-width: 650%;
  }
  .wd-sm-650-f {
    width: 650px !important;
  }
  .wd-sm-650p-f {
    width: 650% !important;
  }
  .mx-wd-sm-650p-f {
    max-width: 650% !important;
  }
  .mn-wd-sm-650p-f {
    min-width: 650% !important;
  }
  .wd-sm-700 {
    width: 700px;
  }
  .wd-sm-700p {
    width: 700%;
  }
  .mx-wd-sm-700p {
    max-width: 700%;
  }
  .mn-wd-sm-700p {
    min-width: 700%;
  }
  .wd-sm-700-f {
    width: 700px !important;
  }
  .wd-sm-700p-f {
    width: 700% !important;
  }
  .mx-wd-sm-700p-f {
    max-width: 700% !important;
  }
  .mn-wd-sm-700p-f {
    min-width: 700% !important;
  }
  .wd-sm-750 {
    width: 750px;
  }
  .wd-sm-750p {
    width: 750%;
  }
  .mx-wd-sm-750p {
    max-width: 750%;
  }
  .mn-wd-sm-750p {
    min-width: 750%;
  }
  .wd-sm-750-f {
    width: 750px !important;
  }
  .wd-sm-750p-f {
    width: 750% !important;
  }
  .mx-wd-sm-750p-f {
    max-width: 750% !important;
  }
  .mn-wd-sm-750p-f {
    min-width: 750% !important;
  }
  .wd-sm-800 {
    width: 800px;
  }
  .wd-sm-800p {
    width: 800%;
  }
  .mx-wd-sm-800p {
    max-width: 800%;
  }
  .mn-wd-sm-800p {
    min-width: 800%;
  }
  .wd-sm-800-f {
    width: 800px !important;
  }
  .wd-sm-800p-f {
    width: 800% !important;
  }
  .mx-wd-sm-800p-f {
    max-width: 800% !important;
  }
  .mn-wd-sm-800p-f {
    min-width: 800% !important;
  }
  .wd-sm-850 {
    width: 850px;
  }
  .wd-sm-850p {
    width: 850%;
  }
  .mx-wd-sm-850p {
    max-width: 850%;
  }
  .mn-wd-sm-850p {
    min-width: 850%;
  }
  .wd-sm-850-f {
    width: 850px !important;
  }
  .wd-sm-850p-f {
    width: 850% !important;
  }
  .mx-wd-sm-850p-f {
    max-width: 850% !important;
  }
  .mn-wd-sm-850p-f {
    min-width: 850% !important;
  }
  .wd-sm-900 {
    width: 900px;
  }
  .wd-sm-900p {
    width: 900%;
  }
  .mx-wd-sm-900p {
    max-width: 900%;
  }
  .mn-wd-sm-900p {
    min-width: 900%;
  }
  .wd-sm-900-f {
    width: 900px !important;
  }
  .wd-sm-900p-f {
    width: 900% !important;
  }
  .mx-wd-sm-900p-f {
    max-width: 900% !important;
  }
  .mn-wd-sm-900p-f {
    min-width: 900% !important;
  }
  .wd-sm-950 {
    width: 950px;
  }
  .wd-sm-950p {
    width: 950%;
  }
  .mx-wd-sm-950p {
    max-width: 950%;
  }
  .mn-wd-sm-950p {
    min-width: 950%;
  }
  .wd-sm-950-f {
    width: 950px !important;
  }
  .wd-sm-950p-f {
    width: 950% !important;
  }
  .mx-wd-sm-950p-f {
    max-width: 950% !important;
  }
  .mn-wd-sm-950p-f {
    min-width: 950% !important;
  }
  .wd-sm-1000 {
    width: 1000px;
  }
  .wd-sm-1000p {
    width: 1000%;
  }
  .mx-wd-sm-1000p {
    max-width: 1000%;
  }
  .mn-wd-sm-1000p {
    min-width: 1000%;
  }
  .wd-sm-1000-f {
    width: 1000px !important;
  }
  .wd-sm-1000p-f {
    width: 1000% !important;
  }
  .mx-wd-sm-1000p-f {
    max-width: 1000% !important;
  }
  .mn-wd-sm-1000p-f {
    min-width: 1000% !important;
  }
  .wd-sm-auto {
    width: auto;
  }
  .wd-sm-auto-f {
    width: auto !important;
  }
}
@media (min-width: 768px) {
  .wd-md-5 {
    width: 5px;
  }
  .wd-md-5p {
    width: 5%;
  }
  .mx-wd-md-5p {
    max-width: 5%;
  }
  .mn-wd-md-5p {
    min-width: 5%;
  }
  .wd-md-5-f {
    width: 5px !important;
  }
  .wd-md-5p-f {
    width: 5% !important;
  }
  .mx-wd-md-5p-f {
    max-width: 5% !important;
  }
  .mn-wd-md-5p-f {
    min-width: 5% !important;
  }
  .wd-md-10 {
    width: 10px;
  }
  .wd-md-10p {
    width: 10%;
  }
  .mx-wd-md-10p {
    max-width: 10%;
  }
  .mn-wd-md-10p {
    min-width: 10%;
  }
  .wd-md-10-f {
    width: 10px !important;
  }
  .wd-md-10p-f {
    width: 10% !important;
  }
  .mx-wd-md-10p-f {
    max-width: 10% !important;
  }
  .mn-wd-md-10p-f {
    min-width: 10% !important;
  }
  .wd-md-15 {
    width: 15px;
  }
  .wd-md-15p {
    width: 15%;
  }
  .mx-wd-md-15p {
    max-width: 15%;
  }
  .mn-wd-md-15p {
    min-width: 15%;
  }
  .wd-md-15-f {
    width: 15px !important;
  }
  .wd-md-15p-f {
    width: 15% !important;
  }
  .mx-wd-md-15p-f {
    max-width: 15% !important;
  }
  .mn-wd-md-15p-f {
    min-width: 15% !important;
  }
  .wd-md-20 {
    width: 20px;
  }
  .wd-md-20p {
    width: 20%;
  }
  .mx-wd-md-20p {
    max-width: 20%;
  }
  .mn-wd-md-20p {
    min-width: 20%;
  }
  .wd-md-20-f {
    width: 20px !important;
  }
  .wd-md-20p-f {
    width: 20% !important;
  }
  .mx-wd-md-20p-f {
    max-width: 20% !important;
  }
  .mn-wd-md-20p-f {
    min-width: 20% !important;
  }
  .wd-md-25 {
    width: 25px;
  }
  .wd-md-25p {
    width: 25%;
  }
  .mx-wd-md-25p {
    max-width: 25%;
  }
  .mn-wd-md-25p {
    min-width: 25%;
  }
  .wd-md-25-f {
    width: 25px !important;
  }
  .wd-md-25p-f {
    width: 25% !important;
  }
  .mx-wd-md-25p-f {
    max-width: 25% !important;
  }
  .mn-wd-md-25p-f {
    min-width: 25% !important;
  }
  .wd-md-30 {
    width: 30px;
  }
  .wd-md-30p {
    width: 30%;
  }
  .mx-wd-md-30p {
    max-width: 30%;
  }
  .mn-wd-md-30p {
    min-width: 30%;
  }
  .wd-md-30-f {
    width: 30px !important;
  }
  .wd-md-30p-f {
    width: 30% !important;
  }
  .mx-wd-md-30p-f {
    max-width: 30% !important;
  }
  .mn-wd-md-30p-f {
    min-width: 30% !important;
  }
  .wd-md-35 {
    width: 35px;
  }
  .wd-md-35p {
    width: 35%;
  }
  .mx-wd-md-35p {
    max-width: 35%;
  }
  .mn-wd-md-35p {
    min-width: 35%;
  }
  .wd-md-35-f {
    width: 35px !important;
  }
  .wd-md-35p-f {
    width: 35% !important;
  }
  .mx-wd-md-35p-f {
    max-width: 35% !important;
  }
  .mn-wd-md-35p-f {
    min-width: 35% !important;
  }
  .wd-md-40 {
    width: 40px;
  }
  .wd-md-40p {
    width: 40%;
  }
  .mx-wd-md-40p {
    max-width: 40%;
  }
  .mn-wd-md-40p {
    min-width: 40%;
  }
  .wd-md-40-f {
    width: 40px !important;
  }
  .wd-md-40p-f {
    width: 40% !important;
  }
  .mx-wd-md-40p-f {
    max-width: 40% !important;
  }
  .mn-wd-md-40p-f {
    min-width: 40% !important;
  }
  .wd-md-45 {
    width: 45px;
  }
  .wd-md-45p {
    width: 45%;
  }
  .mx-wd-md-45p {
    max-width: 45%;
  }
  .mn-wd-md-45p {
    min-width: 45%;
  }
  .wd-md-45-f {
    width: 45px !important;
  }
  .wd-md-45p-f {
    width: 45% !important;
  }
  .mx-wd-md-45p-f {
    max-width: 45% !important;
  }
  .mn-wd-md-45p-f {
    min-width: 45% !important;
  }
  .wd-md-50 {
    width: 50px;
  }
  .wd-md-50p {
    width: 50%;
  }
  .mx-wd-md-50p {
    max-width: 50%;
  }
  .mn-wd-md-50p {
    min-width: 50%;
  }
  .wd-md-50-f {
    width: 50px !important;
  }
  .wd-md-50p-f {
    width: 50% !important;
  }
  .mx-wd-md-50p-f {
    max-width: 50% !important;
  }
  .mn-wd-md-50p-f {
    min-width: 50% !important;
  }
  .wd-md-55 {
    width: 55px;
  }
  .wd-md-55p {
    width: 55%;
  }
  .mx-wd-md-55p {
    max-width: 55%;
  }
  .mn-wd-md-55p {
    min-width: 55%;
  }
  .wd-md-55-f {
    width: 55px !important;
  }
  .wd-md-55p-f {
    width: 55% !important;
  }
  .mx-wd-md-55p-f {
    max-width: 55% !important;
  }
  .mn-wd-md-55p-f {
    min-width: 55% !important;
  }
  .wd-md-60 {
    width: 60px;
  }
  .wd-md-60p {
    width: 60%;
  }
  .mx-wd-md-60p {
    max-width: 60%;
  }
  .mn-wd-md-60p {
    min-width: 60%;
  }
  .wd-md-60-f {
    width: 60px !important;
  }
  .wd-md-60p-f {
    width: 60% !important;
  }
  .mx-wd-md-60p-f {
    max-width: 60% !important;
  }
  .mn-wd-md-60p-f {
    min-width: 60% !important;
  }
  .wd-md-65 {
    width: 65px;
  }
  .wd-md-65p {
    width: 65%;
  }
  .mx-wd-md-65p {
    max-width: 65%;
  }
  .mn-wd-md-65p {
    min-width: 65%;
  }
  .wd-md-65-f {
    width: 65px !important;
  }
  .wd-md-65p-f {
    width: 65% !important;
  }
  .mx-wd-md-65p-f {
    max-width: 65% !important;
  }
  .mn-wd-md-65p-f {
    min-width: 65% !important;
  }
  .wd-md-70 {
    width: 70px;
  }
  .wd-md-70p {
    width: 70%;
  }
  .mx-wd-md-70p {
    max-width: 70%;
  }
  .mn-wd-md-70p {
    min-width: 70%;
  }
  .wd-md-70-f {
    width: 70px !important;
  }
  .wd-md-70p-f {
    width: 70% !important;
  }
  .mx-wd-md-70p-f {
    max-width: 70% !important;
  }
  .mn-wd-md-70p-f {
    min-width: 70% !important;
  }
  .wd-md-75 {
    width: 75px;
  }
  .wd-md-75p {
    width: 75%;
  }
  .mx-wd-md-75p {
    max-width: 75%;
  }
  .mn-wd-md-75p {
    min-width: 75%;
  }
  .wd-md-75-f {
    width: 75px !important;
  }
  .wd-md-75p-f {
    width: 75% !important;
  }
  .mx-wd-md-75p-f {
    max-width: 75% !important;
  }
  .mn-wd-md-75p-f {
    min-width: 75% !important;
  }
  .wd-md-80 {
    width: 80px;
  }
  .wd-md-80p {
    width: 80%;
  }
  .mx-wd-md-80p {
    max-width: 80%;
  }
  .mn-wd-md-80p {
    min-width: 80%;
  }
  .wd-md-80-f {
    width: 80px !important;
  }
  .wd-md-80p-f {
    width: 80% !important;
  }
  .mx-wd-md-80p-f {
    max-width: 80% !important;
  }
  .mn-wd-md-80p-f {
    min-width: 80% !important;
  }
  .wd-md-85 {
    width: 85px;
  }
  .wd-md-85p {
    width: 85%;
  }
  .mx-wd-md-85p {
    max-width: 85%;
  }
  .mn-wd-md-85p {
    min-width: 85%;
  }
  .wd-md-85-f {
    width: 85px !important;
  }
  .wd-md-85p-f {
    width: 85% !important;
  }
  .mx-wd-md-85p-f {
    max-width: 85% !important;
  }
  .mn-wd-md-85p-f {
    min-width: 85% !important;
  }
  .wd-md-90 {
    width: 90px;
  }
  .wd-md-90p {
    width: 90%;
  }
  .mx-wd-md-90p {
    max-width: 90%;
  }
  .mn-wd-md-90p {
    min-width: 90%;
  }
  .wd-md-90-f {
    width: 90px !important;
  }
  .wd-md-90p-f {
    width: 90% !important;
  }
  .mx-wd-md-90p-f {
    max-width: 90% !important;
  }
  .mn-wd-md-90p-f {
    min-width: 90% !important;
  }
  .wd-md-95 {
    width: 95px;
  }
  .wd-md-95p {
    width: 95%;
  }
  .mx-wd-md-95p {
    max-width: 95%;
  }
  .mn-wd-md-95p {
    min-width: 95%;
  }
  .wd-md-95-f {
    width: 95px !important;
  }
  .wd-md-95p-f {
    width: 95% !important;
  }
  .mx-wd-md-95p-f {
    max-width: 95% !important;
  }
  .mn-wd-md-95p-f {
    min-width: 95% !important;
  }
  .wd-md-100 {
    width: 100px;
  }
  .wd-md-100p {
    width: 100%;
  }
  .mx-wd-md-100p {
    max-width: 100%;
  }
  .mn-wd-md-100p {
    min-width: 100%;
  }
  .wd-md-100-f {
    width: 100px !important;
  }
  .wd-md-100p-f {
    width: 100% !important;
  }
  .mx-wd-md-100p-f {
    max-width: 100% !important;
  }
  .mn-wd-md-100p-f {
    min-width: 100% !important;
  }
  .wd-md-150 {
    width: 150px;
  }
  .wd-md-150p {
    width: 150%;
  }
  .mx-wd-md-150p {
    max-width: 150%;
  }
  .mn-wd-md-150p {
    min-width: 150%;
  }
  .wd-md-150-f {
    width: 150px !important;
  }
  .wd-md-150p-f {
    width: 150% !important;
  }
  .mx-wd-md-150p-f {
    max-width: 150% !important;
  }
  .mn-wd-md-150p-f {
    min-width: 150% !important;
  }
  .wd-md-200 {
    width: 200px;
  }
  .wd-md-200p {
    width: 200%;
  }
  .mx-wd-md-200p {
    max-width: 200%;
  }
  .mn-wd-md-200p {
    min-width: 200%;
  }
  .wd-md-200-f {
    width: 200px !important;
  }
  .wd-md-200p-f {
    width: 200% !important;
  }
  .mx-wd-md-200p-f {
    max-width: 200% !important;
  }
  .mn-wd-md-200p-f {
    min-width: 200% !important;
  }
  .wd-md-250 {
    width: 250px;
  }
  .wd-md-250p {
    width: 250%;
  }
  .mx-wd-md-250p {
    max-width: 250%;
  }
  .mn-wd-md-250p {
    min-width: 250%;
  }
  .wd-md-250-f {
    width: 250px !important;
  }
  .wd-md-250p-f {
    width: 250% !important;
  }
  .mx-wd-md-250p-f {
    max-width: 250% !important;
  }
  .mn-wd-md-250p-f {
    min-width: 250% !important;
  }
  .wd-md-300 {
    width: 300px;
  }
  .wd-md-300p {
    width: 300%;
  }
  .mx-wd-md-300p {
    max-width: 300%;
  }
  .mn-wd-md-300p {
    min-width: 300%;
  }
  .wd-md-300-f {
    width: 300px !important;
  }
  .wd-md-300p-f {
    width: 300% !important;
  }
  .mx-wd-md-300p-f {
    max-width: 300% !important;
  }
  .mn-wd-md-300p-f {
    min-width: 300% !important;
  }
  .wd-md-350 {
    width: 350px;
  }
  .wd-md-350p {
    width: 350%;
  }
  .mx-wd-md-350p {
    max-width: 350%;
  }
  .mn-wd-md-350p {
    min-width: 350%;
  }
  .wd-md-350-f {
    width: 350px !important;
  }
  .wd-md-350p-f {
    width: 350% !important;
  }
  .mx-wd-md-350p-f {
    max-width: 350% !important;
  }
  .mn-wd-md-350p-f {
    min-width: 350% !important;
  }
  .wd-md-400 {
    width: 400px;
  }
  .wd-md-400p {
    width: 400%;
  }
  .mx-wd-md-400p {
    max-width: 400%;
  }
  .mn-wd-md-400p {
    min-width: 400%;
  }
  .wd-md-400-f {
    width: 400px !important;
  }
  .wd-md-400p-f {
    width: 400% !important;
  }
  .mx-wd-md-400p-f {
    max-width: 400% !important;
  }
  .mn-wd-md-400p-f {
    min-width: 400% !important;
  }
  .wd-md-450 {
    width: 450px;
  }
  .wd-md-450p {
    width: 450%;
  }
  .mx-wd-md-450p {
    max-width: 450%;
  }
  .mn-wd-md-450p {
    min-width: 450%;
  }
  .wd-md-450-f {
    width: 450px !important;
  }
  .wd-md-450p-f {
    width: 450% !important;
  }
  .mx-wd-md-450p-f {
    max-width: 450% !important;
  }
  .mn-wd-md-450p-f {
    min-width: 450% !important;
  }
  .wd-md-500 {
    width: 500px;
  }
  .wd-md-500p {
    width: 500%;
  }
  .mx-wd-md-500p {
    max-width: 500%;
  }
  .mn-wd-md-500p {
    min-width: 500%;
  }
  .wd-md-500-f {
    width: 500px !important;
  }
  .wd-md-500p-f {
    width: 500% !important;
  }
  .mx-wd-md-500p-f {
    max-width: 500% !important;
  }
  .mn-wd-md-500p-f {
    min-width: 500% !important;
  }
  .wd-md-550 {
    width: 550px;
  }
  .wd-md-550p {
    width: 550%;
  }
  .mx-wd-md-550p {
    max-width: 550%;
  }
  .mn-wd-md-550p {
    min-width: 550%;
  }
  .wd-md-550-f {
    width: 550px !important;
  }
  .wd-md-550p-f {
    width: 550% !important;
  }
  .mx-wd-md-550p-f {
    max-width: 550% !important;
  }
  .mn-wd-md-550p-f {
    min-width: 550% !important;
  }
  .wd-md-600 {
    width: 600px;
  }
  .wd-md-600p {
    width: 600%;
  }
  .mx-wd-md-600p {
    max-width: 600%;
  }
  .mn-wd-md-600p {
    min-width: 600%;
  }
  .wd-md-600-f {
    width: 600px !important;
  }
  .wd-md-600p-f {
    width: 600% !important;
  }
  .mx-wd-md-600p-f {
    max-width: 600% !important;
  }
  .mn-wd-md-600p-f {
    min-width: 600% !important;
  }
  .wd-md-650 {
    width: 650px;
  }
  .wd-md-650p {
    width: 650%;
  }
  .mx-wd-md-650p {
    max-width: 650%;
  }
  .mn-wd-md-650p {
    min-width: 650%;
  }
  .wd-md-650-f {
    width: 650px !important;
  }
  .wd-md-650p-f {
    width: 650% !important;
  }
  .mx-wd-md-650p-f {
    max-width: 650% !important;
  }
  .mn-wd-md-650p-f {
    min-width: 650% !important;
  }
  .wd-md-700 {
    width: 700px;
  }
  .wd-md-700p {
    width: 700%;
  }
  .mx-wd-md-700p {
    max-width: 700%;
  }
  .mn-wd-md-700p {
    min-width: 700%;
  }
  .wd-md-700-f {
    width: 700px !important;
  }
  .wd-md-700p-f {
    width: 700% !important;
  }
  .mx-wd-md-700p-f {
    max-width: 700% !important;
  }
  .mn-wd-md-700p-f {
    min-width: 700% !important;
  }
  .wd-md-750 {
    width: 750px;
  }
  .wd-md-750p {
    width: 750%;
  }
  .mx-wd-md-750p {
    max-width: 750%;
  }
  .mn-wd-md-750p {
    min-width: 750%;
  }
  .wd-md-750-f {
    width: 750px !important;
  }
  .wd-md-750p-f {
    width: 750% !important;
  }
  .mx-wd-md-750p-f {
    max-width: 750% !important;
  }
  .mn-wd-md-750p-f {
    min-width: 750% !important;
  }
  .wd-md-800 {
    width: 800px;
  }
  .wd-md-800p {
    width: 800%;
  }
  .mx-wd-md-800p {
    max-width: 800%;
  }
  .mn-wd-md-800p {
    min-width: 800%;
  }
  .wd-md-800-f {
    width: 800px !important;
  }
  .wd-md-800p-f {
    width: 800% !important;
  }
  .mx-wd-md-800p-f {
    max-width: 800% !important;
  }
  .mn-wd-md-800p-f {
    min-width: 800% !important;
  }
  .wd-md-850 {
    width: 850px;
  }
  .wd-md-850p {
    width: 850%;
  }
  .mx-wd-md-850p {
    max-width: 850%;
  }
  .mn-wd-md-850p {
    min-width: 850%;
  }
  .wd-md-850-f {
    width: 850px !important;
  }
  .wd-md-850p-f {
    width: 850% !important;
  }
  .mx-wd-md-850p-f {
    max-width: 850% !important;
  }
  .mn-wd-md-850p-f {
    min-width: 850% !important;
  }
  .wd-md-900 {
    width: 900px;
  }
  .wd-md-900p {
    width: 900%;
  }
  .mx-wd-md-900p {
    max-width: 900%;
  }
  .mn-wd-md-900p {
    min-width: 900%;
  }
  .wd-md-900-f {
    width: 900px !important;
  }
  .wd-md-900p-f {
    width: 900% !important;
  }
  .mx-wd-md-900p-f {
    max-width: 900% !important;
  }
  .mn-wd-md-900p-f {
    min-width: 900% !important;
  }
  .wd-md-950 {
    width: 950px;
  }
  .wd-md-950p {
    width: 950%;
  }
  .mx-wd-md-950p {
    max-width: 950%;
  }
  .mn-wd-md-950p {
    min-width: 950%;
  }
  .wd-md-950-f {
    width: 950px !important;
  }
  .wd-md-950p-f {
    width: 950% !important;
  }
  .mx-wd-md-950p-f {
    max-width: 950% !important;
  }
  .mn-wd-md-950p-f {
    min-width: 950% !important;
  }
  .wd-md-1000 {
    width: 1000px;
  }
  .wd-md-1000p {
    width: 1000%;
  }
  .mx-wd-md-1000p {
    max-width: 1000%;
  }
  .mn-wd-md-1000p {
    min-width: 1000%;
  }
  .wd-md-1000-f {
    width: 1000px !important;
  }
  .wd-md-1000p-f {
    width: 1000% !important;
  }
  .mx-wd-md-1000p-f {
    max-width: 1000% !important;
  }
  .mn-wd-md-1000p-f {
    min-width: 1000% !important;
  }
  .wd-md-auto {
    width: auto;
  }
  .wd-md-auto-f {
    width: auto !important;
  }
  .wd-md-120 {
    width: 120px;
  }
}
@media (min-width: 992px) {
  .wd-lg-5 {
    width: 5px;
  }
  .wd-lg-5p {
    width: 5%;
  }
  .mx-wd-lg-5p {
    max-width: 5%;
  }
  .mn-wd-lg-5p {
    min-width: 5%;
  }
  .wd-lg-5-f {
    width: 5px !important;
  }
  .wd-lg-5p-f {
    width: 5% !important;
  }
  .mx-wd-lg-5p-f {
    max-width: 5% !important;
  }
  .mn-wd-lg-5p-f {
    min-width: 5% !important;
  }
  .wd-lg-10 {
    width: 10px;
  }
  .wd-lg-10p {
    width: 10%;
  }
  .mx-wd-lg-10p {
    max-width: 10%;
  }
  .mn-wd-lg-10p {
    min-width: 10%;
  }
  .wd-lg-10-f {
    width: 10px !important;
  }
  .wd-lg-10p-f {
    width: 10% !important;
  }
  .mx-wd-lg-10p-f {
    max-width: 10% !important;
  }
  .mn-wd-lg-10p-f {
    min-width: 10% !important;
  }
  .wd-lg-15 {
    width: 15px;
  }
  .wd-lg-15p {
    width: 15%;
  }
  .mx-wd-lg-15p {
    max-width: 15%;
  }
  .mn-wd-lg-15p {
    min-width: 15%;
  }
  .wd-lg-15-f {
    width: 15px !important;
  }
  .wd-lg-15p-f {
    width: 15% !important;
  }
  .mx-wd-lg-15p-f {
    max-width: 15% !important;
  }
  .mn-wd-lg-15p-f {
    min-width: 15% !important;
  }
  .wd-lg-20 {
    width: 20px;
  }
  .wd-lg-20p {
    width: 20%;
  }
  .mx-wd-lg-20p {
    max-width: 20%;
  }
  .mn-wd-lg-20p {
    min-width: 20%;
  }
  .wd-lg-20-f {
    width: 20px !important;
  }
  .wd-lg-20p-f {
    width: 20% !important;
  }
  .mx-wd-lg-20p-f {
    max-width: 20% !important;
  }
  .mn-wd-lg-20p-f {
    min-width: 20% !important;
  }
  .wd-lg-25 {
    width: 25px;
  }
  .wd-lg-25p {
    width: 25%;
  }
  .mx-wd-lg-25p {
    max-width: 25%;
  }
  .mn-wd-lg-25p {
    min-width: 25%;
  }
  .wd-lg-25-f {
    width: 25px !important;
  }
  .wd-lg-25p-f {
    width: 25% !important;
  }
  .mx-wd-lg-25p-f {
    max-width: 25% !important;
  }
  .mn-wd-lg-25p-f {
    min-width: 25% !important;
  }
  .wd-lg-30 {
    width: 30px;
  }
  .wd-lg-30p {
    width: 30%;
  }
  .mx-wd-lg-30p {
    max-width: 30%;
  }
  .mn-wd-lg-30p {
    min-width: 30%;
  }
  .wd-lg-30-f {
    width: 30px !important;
  }
  .wd-lg-30p-f {
    width: 30% !important;
  }
  .mx-wd-lg-30p-f {
    max-width: 30% !important;
  }
  .mn-wd-lg-30p-f {
    min-width: 30% !important;
  }
  .wd-lg-35 {
    width: 35px;
  }
  .wd-lg-35p {
    width: 35%;
  }
  .mx-wd-lg-35p {
    max-width: 35%;
  }
  .mn-wd-lg-35p {
    min-width: 35%;
  }
  .wd-lg-35-f {
    width: 35px !important;
  }
  .wd-lg-35p-f {
    width: 35% !important;
  }
  .mx-wd-lg-35p-f {
    max-width: 35% !important;
  }
  .mn-wd-lg-35p-f {
    min-width: 35% !important;
  }
  .wd-lg-40 {
    width: 40px;
  }
  .wd-lg-40p {
    width: 40%;
  }
  .mx-wd-lg-40p {
    max-width: 40%;
  }
  .mn-wd-lg-40p {
    min-width: 40%;
  }
  .wd-lg-40-f {
    width: 40px !important;
  }
  .wd-lg-40p-f {
    width: 40% !important;
  }
  .mx-wd-lg-40p-f {
    max-width: 40% !important;
  }
  .mn-wd-lg-40p-f {
    min-width: 40% !important;
  }
  .wd-lg-45 {
    width: 45px;
  }
  .wd-lg-45p {
    width: 45%;
  }
  .mx-wd-lg-45p {
    max-width: 45%;
  }
  .mn-wd-lg-45p {
    min-width: 45%;
  }
  .wd-lg-45-f {
    width: 45px !important;
  }
  .wd-lg-45p-f {
    width: 45% !important;
  }
  .mx-wd-lg-45p-f {
    max-width: 45% !important;
  }
  .mn-wd-lg-45p-f {
    min-width: 45% !important;
  }
  .wd-lg-50 {
    width: 50px;
  }
  .wd-lg-50p {
    width: 50%;
  }
  .mx-wd-lg-50p {
    max-width: 50%;
  }
  .mn-wd-lg-50p {
    min-width: 50%;
  }
  .wd-lg-50-f {
    width: 50px !important;
  }
  .wd-lg-50p-f {
    width: 50% !important;
  }
  .mx-wd-lg-50p-f {
    max-width: 50% !important;
  }
  .mn-wd-lg-50p-f {
    min-width: 50% !important;
  }
  .wd-lg-55 {
    width: 55px;
  }
  .wd-lg-55p {
    width: 55%;
  }
  .mx-wd-lg-55p {
    max-width: 55%;
  }
  .mn-wd-lg-55p {
    min-width: 55%;
  }
  .wd-lg-55-f {
    width: 55px !important;
  }
  .wd-lg-55p-f {
    width: 55% !important;
  }
  .mx-wd-lg-55p-f {
    max-width: 55% !important;
  }
  .mn-wd-lg-55p-f {
    min-width: 55% !important;
  }
  .wd-lg-60 {
    width: 60px;
  }
  .wd-lg-60p {
    width: 60%;
  }
  .mx-wd-lg-60p {
    max-width: 60%;
  }
  .mn-wd-lg-60p {
    min-width: 60%;
  }
  .wd-lg-60-f {
    width: 60px !important;
  }
  .wd-lg-60p-f {
    width: 60% !important;
  }
  .mx-wd-lg-60p-f {
    max-width: 60% !important;
  }
  .mn-wd-lg-60p-f {
    min-width: 60% !important;
  }
  .wd-lg-65 {
    width: 65px;
  }
  .wd-lg-65p {
    width: 65%;
  }
  .mx-wd-lg-65p {
    max-width: 65%;
  }
  .mn-wd-lg-65p {
    min-width: 65%;
  }
  .wd-lg-65-f {
    width: 65px !important;
  }
  .wd-lg-65p-f {
    width: 65% !important;
  }
  .mx-wd-lg-65p-f {
    max-width: 65% !important;
  }
  .mn-wd-lg-65p-f {
    min-width: 65% !important;
  }
  .wd-lg-70 {
    width: 70px;
  }
  .wd-lg-70p {
    width: 70%;
  }
  .mx-wd-lg-70p {
    max-width: 70%;
  }
  .mn-wd-lg-70p {
    min-width: 70%;
  }
  .wd-lg-70-f {
    width: 70px !important;
  }
  .wd-lg-70p-f {
    width: 70% !important;
  }
  .mx-wd-lg-70p-f {
    max-width: 70% !important;
  }
  .mn-wd-lg-70p-f {
    min-width: 70% !important;
  }
  .wd-lg-75 {
    width: 75px;
  }
  .wd-lg-75p {
    width: 75%;
  }
  .mx-wd-lg-75p {
    max-width: 75%;
  }
  .mn-wd-lg-75p {
    min-width: 75%;
  }
  .wd-lg-75-f {
    width: 75px !important;
  }
  .wd-lg-75p-f {
    width: 75% !important;
  }
  .mx-wd-lg-75p-f {
    max-width: 75% !important;
  }
  .mn-wd-lg-75p-f {
    min-width: 75% !important;
  }
  .wd-lg-80 {
    width: 80px;
  }
  .wd-lg-80p {
    width: 80%;
  }
  .mx-wd-lg-80p {
    max-width: 80%;
  }
  .mn-wd-lg-80p {
    min-width: 80%;
  }
  .wd-lg-80-f {
    width: 80px !important;
  }
  .wd-lg-80p-f {
    width: 80% !important;
  }
  .mx-wd-lg-80p-f {
    max-width: 80% !important;
  }
  .mn-wd-lg-80p-f {
    min-width: 80% !important;
  }
  .wd-lg-85 {
    width: 85px;
  }
  .wd-lg-85p {
    width: 85%;
  }
  .mx-wd-lg-85p {
    max-width: 85%;
  }
  .mn-wd-lg-85p {
    min-width: 85%;
  }
  .wd-lg-85-f {
    width: 85px !important;
  }
  .wd-lg-85p-f {
    width: 85% !important;
  }
  .mx-wd-lg-85p-f {
    max-width: 85% !important;
  }
  .mn-wd-lg-85p-f {
    min-width: 85% !important;
  }
  .wd-lg-90 {
    width: 90px;
  }
  .wd-lg-90p {
    width: 90%;
  }
  .mx-wd-lg-90p {
    max-width: 90%;
  }
  .mn-wd-lg-90p {
    min-width: 90%;
  }
  .wd-lg-90-f {
    width: 90px !important;
  }
  .wd-lg-90p-f {
    width: 90% !important;
  }
  .mx-wd-lg-90p-f {
    max-width: 90% !important;
  }
  .mn-wd-lg-90p-f {
    min-width: 90% !important;
  }
  .wd-lg-95 {
    width: 95px;
  }
  .wd-lg-95p {
    width: 95%;
  }
  .mx-wd-lg-95p {
    max-width: 95%;
  }
  .mn-wd-lg-95p {
    min-width: 95%;
  }
  .wd-lg-95-f {
    width: 95px !important;
  }
  .wd-lg-95p-f {
    width: 95% !important;
  }
  .mx-wd-lg-95p-f {
    max-width: 95% !important;
  }
  .mn-wd-lg-95p-f {
    min-width: 95% !important;
  }
  .wd-lg-100 {
    width: 100px;
  }
  .wd-lg-100p {
    width: 100%;
  }
  .mx-wd-lg-100p {
    max-width: 100%;
  }
  .mn-wd-lg-100p {
    min-width: 100%;
  }
  .wd-lg-100-f {
    width: 100px !important;
  }
  .wd-lg-100p-f {
    width: 100% !important;
  }
  .mx-wd-lg-100p-f {
    max-width: 100% !important;
  }
  .mn-wd-lg-100p-f {
    min-width: 100% !important;
  }
  .wd-lg-150 {
    width: 150px;
  }
  .wd-lg-150p {
    width: 150%;
  }
  .mx-wd-lg-150p {
    max-width: 150%;
  }
  .mn-wd-lg-150p {
    min-width: 150%;
  }
  .wd-lg-150-f {
    width: 150px !important;
  }
  .wd-lg-150p-f {
    width: 150% !important;
  }
  .mx-wd-lg-150p-f {
    max-width: 150% !important;
  }
  .mn-wd-lg-150p-f {
    min-width: 150% !important;
  }
  .wd-lg-200 {
    width: 200px;
  }
  .wd-lg-200p {
    width: 200%;
  }
  .mx-wd-lg-200p {
    max-width: 200%;
  }
  .mn-wd-lg-200p {
    min-width: 200%;
  }
  .wd-lg-200-f {
    width: 200px !important;
  }
  .wd-lg-200p-f {
    width: 200% !important;
  }
  .mx-wd-lg-200p-f {
    max-width: 200% !important;
  }
  .mn-wd-lg-200p-f {
    min-width: 200% !important;
  }
  .wd-lg-250 {
    width: 250px;
  }
  .wd-lg-250p {
    width: 250%;
  }
  .mx-wd-lg-250p {
    max-width: 250%;
  }
  .mn-wd-lg-250p {
    min-width: 250%;
  }
  .wd-lg-250-f {
    width: 250px !important;
  }
  .wd-lg-250p-f {
    width: 250% !important;
  }
  .mx-wd-lg-250p-f {
    max-width: 250% !important;
  }
  .mn-wd-lg-250p-f {
    min-width: 250% !important;
  }
  .wd-lg-300 {
    width: 300px;
  }
  .wd-lg-300p {
    width: 300%;
  }
  .mx-wd-lg-300p {
    max-width: 300%;
  }
  .mn-wd-lg-300p {
    min-width: 300%;
  }
  .wd-lg-300-f {
    width: 300px !important;
  }
  .wd-lg-300p-f {
    width: 300% !important;
  }
  .mx-wd-lg-300p-f {
    max-width: 300% !important;
  }
  .mn-wd-lg-300p-f {
    min-width: 300% !important;
  }
  .wd-lg-350 {
    width: 350px;
  }
  .wd-lg-350p {
    width: 350%;
  }
  .mx-wd-lg-350p {
    max-width: 350%;
  }
  .mn-wd-lg-350p {
    min-width: 350%;
  }
  .wd-lg-350-f {
    width: 350px !important;
  }
  .wd-lg-350p-f {
    width: 350% !important;
  }
  .mx-wd-lg-350p-f {
    max-width: 350% !important;
  }
  .mn-wd-lg-350p-f {
    min-width: 350% !important;
  }
  .wd-lg-400 {
    width: 400px;
  }
  .wd-lg-400p {
    width: 400%;
  }
  .mx-wd-lg-400p {
    max-width: 400%;
  }
  .mn-wd-lg-400p {
    min-width: 400%;
  }
  .wd-lg-400-f {
    width: 400px !important;
  }
  .wd-lg-400p-f {
    width: 400% !important;
  }
  .mx-wd-lg-400p-f {
    max-width: 400% !important;
  }
  .mn-wd-lg-400p-f {
    min-width: 400% !important;
  }
  .wd-lg-450 {
    width: 450px;
  }
  .wd-lg-450p {
    width: 450%;
  }
  .mx-wd-lg-450p {
    max-width: 450%;
  }
  .mn-wd-lg-450p {
    min-width: 450%;
  }
  .wd-lg-450-f {
    width: 450px !important;
  }
  .wd-lg-450p-f {
    width: 450% !important;
  }
  .mx-wd-lg-450p-f {
    max-width: 450% !important;
  }
  .mn-wd-lg-450p-f {
    min-width: 450% !important;
  }
  .wd-lg-500 {
    width: 500px;
  }
  .wd-lg-500p {
    width: 500%;
  }
  .mx-wd-lg-500p {
    max-width: 500%;
  }
  .mn-wd-lg-500p {
    min-width: 500%;
  }
  .wd-lg-500-f {
    width: 500px !important;
  }
  .wd-lg-500p-f {
    width: 500% !important;
  }
  .mx-wd-lg-500p-f {
    max-width: 500% !important;
  }
  .mn-wd-lg-500p-f {
    min-width: 500% !important;
  }
  .wd-lg-550 {
    width: 550px;
  }
  .wd-lg-550p {
    width: 550%;
  }
  .mx-wd-lg-550p {
    max-width: 550%;
  }
  .mn-wd-lg-550p {
    min-width: 550%;
  }
  .wd-lg-550-f {
    width: 550px !important;
  }
  .wd-lg-550p-f {
    width: 550% !important;
  }
  .mx-wd-lg-550p-f {
    max-width: 550% !important;
  }
  .mn-wd-lg-550p-f {
    min-width: 550% !important;
  }
  .wd-lg-600 {
    width: 600px;
  }
  .wd-lg-600p {
    width: 600%;
  }
  .mx-wd-lg-600p {
    max-width: 600%;
  }
  .mn-wd-lg-600p {
    min-width: 600%;
  }
  .wd-lg-600-f {
    width: 600px !important;
  }
  .wd-lg-600p-f {
    width: 600% !important;
  }
  .mx-wd-lg-600p-f {
    max-width: 600% !important;
  }
  .mn-wd-lg-600p-f {
    min-width: 600% !important;
  }
  .wd-lg-650 {
    width: 650px;
  }
  .wd-lg-650p {
    width: 650%;
  }
  .mx-wd-lg-650p {
    max-width: 650%;
  }
  .mn-wd-lg-650p {
    min-width: 650%;
  }
  .wd-lg-650-f {
    width: 650px !important;
  }
  .wd-lg-650p-f {
    width: 650% !important;
  }
  .mx-wd-lg-650p-f {
    max-width: 650% !important;
  }
  .mn-wd-lg-650p-f {
    min-width: 650% !important;
  }
  .wd-lg-700 {
    width: 700px;
  }
  .wd-lg-700p {
    width: 700%;
  }
  .mx-wd-lg-700p {
    max-width: 700%;
  }
  .mn-wd-lg-700p {
    min-width: 700%;
  }
  .wd-lg-700-f {
    width: 700px !important;
  }
  .wd-lg-700p-f {
    width: 700% !important;
  }
  .mx-wd-lg-700p-f {
    max-width: 700% !important;
  }
  .mn-wd-lg-700p-f {
    min-width: 700% !important;
  }
  .wd-lg-750 {
    width: 750px;
  }
  .wd-lg-750p {
    width: 750%;
  }
  .mx-wd-lg-750p {
    max-width: 750%;
  }
  .mn-wd-lg-750p {
    min-width: 750%;
  }
  .wd-lg-750-f {
    width: 750px !important;
  }
  .wd-lg-750p-f {
    width: 750% !important;
  }
  .mx-wd-lg-750p-f {
    max-width: 750% !important;
  }
  .mn-wd-lg-750p-f {
    min-width: 750% !important;
  }
  .wd-lg-800 {
    width: 800px;
  }
  .wd-lg-800p {
    width: 800%;
  }
  .mx-wd-lg-800p {
    max-width: 800%;
  }
  .mn-wd-lg-800p {
    min-width: 800%;
  }
  .wd-lg-800-f {
    width: 800px !important;
  }
  .wd-lg-800p-f {
    width: 800% !important;
  }
  .mx-wd-lg-800p-f {
    max-width: 800% !important;
  }
  .mn-wd-lg-800p-f {
    min-width: 800% !important;
  }
  .wd-lg-850 {
    width: 850px;
  }
  .wd-lg-850p {
    width: 850%;
  }
  .mx-wd-lg-850p {
    max-width: 850%;
  }
  .mn-wd-lg-850p {
    min-width: 850%;
  }
  .wd-lg-850-f {
    width: 850px !important;
  }
  .wd-lg-850p-f {
    width: 850% !important;
  }
  .mx-wd-lg-850p-f {
    max-width: 850% !important;
  }
  .mn-wd-lg-850p-f {
    min-width: 850% !important;
  }
  .wd-lg-900 {
    width: 900px;
  }
  .wd-lg-900p {
    width: 900%;
  }
  .mx-wd-lg-900p {
    max-width: 900%;
  }
  .mn-wd-lg-900p {
    min-width: 900%;
  }
  .wd-lg-900-f {
    width: 900px !important;
  }
  .wd-lg-900p-f {
    width: 900% !important;
  }
  .mx-wd-lg-900p-f {
    max-width: 900% !important;
  }
  .mn-wd-lg-900p-f {
    min-width: 900% !important;
  }
  .wd-lg-950 {
    width: 950px;
  }
  .wd-lg-950p {
    width: 950%;
  }
  .mx-wd-lg-950p {
    max-width: 950%;
  }
  .mn-wd-lg-950p {
    min-width: 950%;
  }
  .wd-lg-950-f {
    width: 950px !important;
  }
  .wd-lg-950p-f {
    width: 950% !important;
  }
  .mx-wd-lg-950p-f {
    max-width: 950% !important;
  }
  .mn-wd-lg-950p-f {
    min-width: 950% !important;
  }
  .wd-lg-1000 {
    width: 1000px;
  }
  .wd-lg-1000p {
    width: 1000%;
  }
  .mx-wd-lg-1000p {
    max-width: 1000%;
  }
  .mn-wd-lg-1000p {
    min-width: 1000%;
  }
  .wd-lg-1000-f {
    width: 1000px !important;
  }
  .wd-lg-1000p-f {
    width: 1000% !important;
  }
  .mx-wd-lg-1000p-f {
    max-width: 1000% !important;
  }
  .mn-wd-lg-1000p-f {
    min-width: 1000% !important;
  }
  .wd-lg-auto {
    width: auto;
  }
  .wd-lg-auto-f {
    width: auto !important;
  }
}
@media (min-width: 1200px) {
  .wd-xl-5 {
    width: 5px;
  }
  .wd-xl-5p {
    width: 5%;
  }
  .mx-wd-xl-5p {
    max-width: 5%;
  }
  .mn-wd-xl-5p {
    min-width: 5%;
  }
  .wd-xl-5-f {
    width: 5px !important;
  }
  .wd-xl-5p-f {
    width: 5% !important;
  }
  .mx-wd-xl-5p-f {
    max-width: 5% !important;
  }
  .mn-wd-xl-5p-f {
    min-width: 5% !important;
  }
  .wd-xl-10 {
    width: 10px;
  }
  .wd-xl-10p {
    width: 10%;
  }
  .mx-wd-xl-10p {
    max-width: 10%;
  }
  .mn-wd-xl-10p {
    min-width: 10%;
  }
  .wd-xl-10-f {
    width: 10px !important;
  }
  .wd-xl-10p-f {
    width: 10% !important;
  }
  .mx-wd-xl-10p-f {
    max-width: 10% !important;
  }
  .mn-wd-xl-10p-f {
    min-width: 10% !important;
  }
  .wd-xl-15 {
    width: 15px;
  }
  .wd-xl-15p {
    width: 15%;
  }
  .mx-wd-xl-15p {
    max-width: 15%;
  }
  .mn-wd-xl-15p {
    min-width: 15%;
  }
  .wd-xl-15-f {
    width: 15px !important;
  }
  .wd-xl-15p-f {
    width: 15% !important;
  }
  .mx-wd-xl-15p-f {
    max-width: 15% !important;
  }
  .mn-wd-xl-15p-f {
    min-width: 15% !important;
  }
  .wd-xl-20 {
    width: 20px;
  }
  .wd-xl-20p {
    width: 20%;
  }
  .mx-wd-xl-20p {
    max-width: 20%;
  }
  .mn-wd-xl-20p {
    min-width: 20%;
  }
  .wd-xl-20-f {
    width: 20px !important;
  }
  .wd-xl-20p-f {
    width: 20% !important;
  }
  .mx-wd-xl-20p-f {
    max-width: 20% !important;
  }
  .mn-wd-xl-20p-f {
    min-width: 20% !important;
  }
  .wd-xl-25 {
    width: 25px;
  }
  .wd-xl-25p {
    width: 25%;
  }
  .mx-wd-xl-25p {
    max-width: 25%;
  }
  .mn-wd-xl-25p {
    min-width: 25%;
  }
  .wd-xl-25-f {
    width: 25px !important;
  }
  .wd-xl-25p-f {
    width: 25% !important;
  }
  .mx-wd-xl-25p-f {
    max-width: 25% !important;
  }
  .mn-wd-xl-25p-f {
    min-width: 25% !important;
  }
  .wd-xl-30 {
    width: 30px;
  }
  .wd-xl-30p {
    width: 30%;
  }
  .mx-wd-xl-30p {
    max-width: 30%;
  }
  .mn-wd-xl-30p {
    min-width: 30%;
  }
  .wd-xl-30-f {
    width: 30px !important;
  }
  .wd-xl-30p-f {
    width: 30% !important;
  }
  .mx-wd-xl-30p-f {
    max-width: 30% !important;
  }
  .mn-wd-xl-30p-f {
    min-width: 30% !important;
  }
  .wd-xl-35 {
    width: 35px;
  }
  .wd-xl-35p {
    width: 35%;
  }
  .mx-wd-xl-35p {
    max-width: 35%;
  }
  .mn-wd-xl-35p {
    min-width: 35%;
  }
  .wd-xl-35-f {
    width: 35px !important;
  }
  .wd-xl-35p-f {
    width: 35% !important;
  }
  .mx-wd-xl-35p-f {
    max-width: 35% !important;
  }
  .mn-wd-xl-35p-f {
    min-width: 35% !important;
  }
  .wd-xl-40 {
    width: 40px;
  }
  .wd-xl-40p {
    width: 40%;
  }
  .mx-wd-xl-40p {
    max-width: 40%;
  }
  .mn-wd-xl-40p {
    min-width: 40%;
  }
  .wd-xl-40-f {
    width: 40px !important;
  }
  .wd-xl-40p-f {
    width: 40% !important;
  }
  .mx-wd-xl-40p-f {
    max-width: 40% !important;
  }
  .mn-wd-xl-40p-f {
    min-width: 40% !important;
  }
  .wd-xl-45 {
    width: 45px;
  }
  .wd-xl-45p {
    width: 45%;
  }
  .mx-wd-xl-45p {
    max-width: 45%;
  }
  .mn-wd-xl-45p {
    min-width: 45%;
  }
  .wd-xl-45-f {
    width: 45px !important;
  }
  .wd-xl-45p-f {
    width: 45% !important;
  }
  .mx-wd-xl-45p-f {
    max-width: 45% !important;
  }
  .mn-wd-xl-45p-f {
    min-width: 45% !important;
  }
  .wd-xl-50 {
    width: 50px;
  }
  .wd-xl-50p {
    width: 50%;
  }
  .mx-wd-xl-50p {
    max-width: 50%;
  }
  .mn-wd-xl-50p {
    min-width: 50%;
  }
  .wd-xl-50-f {
    width: 50px !important;
  }
  .wd-xl-50p-f {
    width: 50% !important;
  }
  .mx-wd-xl-50p-f {
    max-width: 50% !important;
  }
  .mn-wd-xl-50p-f {
    min-width: 50% !important;
  }
  .wd-xl-55 {
    width: 55px;
  }
  .wd-xl-55p {
    width: 55%;
  }
  .mx-wd-xl-55p {
    max-width: 55%;
  }
  .mn-wd-xl-55p {
    min-width: 55%;
  }
  .wd-xl-55-f {
    width: 55px !important;
  }
  .wd-xl-55p-f {
    width: 55% !important;
  }
  .mx-wd-xl-55p-f {
    max-width: 55% !important;
  }
  .mn-wd-xl-55p-f {
    min-width: 55% !important;
  }
  .wd-xl-60 {
    width: 60px;
  }
  .wd-xl-60p {
    width: 60%;
  }
  .mx-wd-xl-60p {
    max-width: 60%;
  }
  .mn-wd-xl-60p {
    min-width: 60%;
  }
  .wd-xl-60-f {
    width: 60px !important;
  }
  .wd-xl-60p-f {
    width: 60% !important;
  }
  .mx-wd-xl-60p-f {
    max-width: 60% !important;
  }
  .mn-wd-xl-60p-f {
    min-width: 60% !important;
  }
  .wd-xl-65 {
    width: 65px;
  }
  .wd-xl-65p {
    width: 65%;
  }
  .mx-wd-xl-65p {
    max-width: 65%;
  }
  .mn-wd-xl-65p {
    min-width: 65%;
  }
  .wd-xl-65-f {
    width: 65px !important;
  }
  .wd-xl-65p-f {
    width: 65% !important;
  }
  .mx-wd-xl-65p-f {
    max-width: 65% !important;
  }
  .mn-wd-xl-65p-f {
    min-width: 65% !important;
  }
  .wd-xl-70 {
    width: 70px;
  }
  .wd-xl-70p {
    width: 70%;
  }
  .mx-wd-xl-70p {
    max-width: 70%;
  }
  .mn-wd-xl-70p {
    min-width: 70%;
  }
  .wd-xl-70-f {
    width: 70px !important;
  }
  .wd-xl-70p-f {
    width: 70% !important;
  }
  .mx-wd-xl-70p-f {
    max-width: 70% !important;
  }
  .mn-wd-xl-70p-f {
    min-width: 70% !important;
  }
  .wd-xl-75 {
    width: 75px;
  }
  .wd-xl-75p {
    width: 75%;
  }
  .mx-wd-xl-75p {
    max-width: 75%;
  }
  .mn-wd-xl-75p {
    min-width: 75%;
  }
  .wd-xl-75-f {
    width: 75px !important;
  }
  .wd-xl-75p-f {
    width: 75% !important;
  }
  .mx-wd-xl-75p-f {
    max-width: 75% !important;
  }
  .mn-wd-xl-75p-f {
    min-width: 75% !important;
  }
  .wd-xl-80 {
    width: 80px;
  }
  .wd-xl-80p {
    width: 80%;
  }
  .mx-wd-xl-80p {
    max-width: 80%;
  }
  .mn-wd-xl-80p {
    min-width: 80%;
  }
  .wd-xl-80-f {
    width: 80px !important;
  }
  .wd-xl-80p-f {
    width: 80% !important;
  }
  .mx-wd-xl-80p-f {
    max-width: 80% !important;
  }
  .mn-wd-xl-80p-f {
    min-width: 80% !important;
  }
  .wd-xl-85 {
    width: 85px;
  }
  .wd-xl-85p {
    width: 85%;
  }
  .mx-wd-xl-85p {
    max-width: 85%;
  }
  .mn-wd-xl-85p {
    min-width: 85%;
  }
  .wd-xl-85-f {
    width: 85px !important;
  }
  .wd-xl-85p-f {
    width: 85% !important;
  }
  .mx-wd-xl-85p-f {
    max-width: 85% !important;
  }
  .mn-wd-xl-85p-f {
    min-width: 85% !important;
  }
  .wd-xl-90 {
    width: 90px;
  }
  .wd-xl-90p {
    width: 90%;
  }
  .mx-wd-xl-90p {
    max-width: 90%;
  }
  .mn-wd-xl-90p {
    min-width: 90%;
  }
  .wd-xl-90-f {
    width: 90px !important;
  }
  .wd-xl-90p-f {
    width: 90% !important;
  }
  .mx-wd-xl-90p-f {
    max-width: 90% !important;
  }
  .mn-wd-xl-90p-f {
    min-width: 90% !important;
  }
  .wd-xl-95 {
    width: 95px;
  }
  .wd-xl-95p {
    width: 95%;
  }
  .mx-wd-xl-95p {
    max-width: 95%;
  }
  .mn-wd-xl-95p {
    min-width: 95%;
  }
  .wd-xl-95-f {
    width: 95px !important;
  }
  .wd-xl-95p-f {
    width: 95% !important;
  }
  .mx-wd-xl-95p-f {
    max-width: 95% !important;
  }
  .mn-wd-xl-95p-f {
    min-width: 95% !important;
  }
  .wd-xl-100 {
    width: 100px;
  }
  .wd-xl-100p {
    width: 100%;
  }
  .mx-wd-xl-100p {
    max-width: 100%;
  }
  .mn-wd-xl-100p {
    min-width: 100%;
  }
  .wd-xl-100-f {
    width: 100px !important;
  }
  .wd-xl-100p-f {
    width: 100% !important;
  }
  .mx-wd-xl-100p-f {
    max-width: 100% !important;
  }
  .mn-wd-xl-100p-f {
    min-width: 100% !important;
  }
  .wd-xl-150 {
    width: 150px;
  }
  .wd-xl-150p {
    width: 150%;
  }
  .mx-wd-xl-150p {
    max-width: 150%;
  }
  .mn-wd-xl-150p {
    min-width: 150%;
  }
  .wd-xl-150-f {
    width: 150px !important;
  }
  .wd-xl-150p-f {
    width: 150% !important;
  }
  .mx-wd-xl-150p-f {
    max-width: 150% !important;
  }
  .mn-wd-xl-150p-f {
    min-width: 150% !important;
  }
  .wd-xl-200 {
    width: 200px;
  }
  .wd-xl-200p {
    width: 200%;
  }
  .mx-wd-xl-200p {
    max-width: 200%;
  }
  .mn-wd-xl-200p {
    min-width: 200%;
  }
  .wd-xl-200-f {
    width: 200px !important;
  }
  .wd-xl-200p-f {
    width: 200% !important;
  }
  .mx-wd-xl-200p-f {
    max-width: 200% !important;
  }
  .mn-wd-xl-200p-f {
    min-width: 200% !important;
  }
  .wd-xl-250 {
    width: 250px;
  }
  .wd-xl-250p {
    width: 250%;
  }
  .mx-wd-xl-250p {
    max-width: 250%;
  }
  .mn-wd-xl-250p {
    min-width: 250%;
  }
  .wd-xl-250-f {
    width: 250px !important;
  }
  .wd-xl-250p-f {
    width: 250% !important;
  }
  .mx-wd-xl-250p-f {
    max-width: 250% !important;
  }
  .mn-wd-xl-250p-f {
    min-width: 250% !important;
  }
  .wd-xl-300 {
    width: 300px;
  }
  .wd-xl-300p {
    width: 300%;
  }
  .mx-wd-xl-300p {
    max-width: 300%;
  }
  .mn-wd-xl-300p {
    min-width: 300%;
  }
  .wd-xl-300-f {
    width: 300px !important;
  }
  .wd-xl-300p-f {
    width: 300% !important;
  }
  .mx-wd-xl-300p-f {
    max-width: 300% !important;
  }
  .mn-wd-xl-300p-f {
    min-width: 300% !important;
  }
  .wd-xl-350 {
    width: 350px;
  }
  .wd-xl-350p {
    width: 350%;
  }
  .mx-wd-xl-350p {
    max-width: 350%;
  }
  .mn-wd-xl-350p {
    min-width: 350%;
  }
  .wd-xl-350-f {
    width: 350px !important;
  }
  .wd-xl-350p-f {
    width: 350% !important;
  }
  .mx-wd-xl-350p-f {
    max-width: 350% !important;
  }
  .mn-wd-xl-350p-f {
    min-width: 350% !important;
  }
  .wd-xl-400 {
    width: 400px;
  }
  .wd-xl-400p {
    width: 400%;
  }
  .mx-wd-xl-400p {
    max-width: 400%;
  }
  .mn-wd-xl-400p {
    min-width: 400%;
  }
  .wd-xl-400-f {
    width: 400px !important;
  }
  .wd-xl-400p-f {
    width: 400% !important;
  }
  .mx-wd-xl-400p-f {
    max-width: 400% !important;
  }
  .mn-wd-xl-400p-f {
    min-width: 400% !important;
  }
  .wd-xl-450 {
    width: 450px;
  }
  .wd-xl-450p {
    width: 450%;
  }
  .mx-wd-xl-450p {
    max-width: 450%;
  }
  .mn-wd-xl-450p {
    min-width: 450%;
  }
  .wd-xl-450-f {
    width: 450px !important;
  }
  .wd-xl-450p-f {
    width: 450% !important;
  }
  .mx-wd-xl-450p-f {
    max-width: 450% !important;
  }
  .mn-wd-xl-450p-f {
    min-width: 450% !important;
  }
  .wd-xl-500 {
    width: 500px;
  }
  .wd-xl-500p {
    width: 500%;
  }
  .mx-wd-xl-500p {
    max-width: 500%;
  }
  .mn-wd-xl-500p {
    min-width: 500%;
  }
  .wd-xl-500-f {
    width: 500px !important;
  }
  .wd-xl-500p-f {
    width: 500% !important;
  }
  .mx-wd-xl-500p-f {
    max-width: 500% !important;
  }
  .mn-wd-xl-500p-f {
    min-width: 500% !important;
  }
  .wd-xl-550 {
    width: 550px;
  }
  .wd-xl-550p {
    width: 550%;
  }
  .mx-wd-xl-550p {
    max-width: 550%;
  }
  .mn-wd-xl-550p {
    min-width: 550%;
  }
  .wd-xl-550-f {
    width: 550px !important;
  }
  .wd-xl-550p-f {
    width: 550% !important;
  }
  .mx-wd-xl-550p-f {
    max-width: 550% !important;
  }
  .mn-wd-xl-550p-f {
    min-width: 550% !important;
  }
  .wd-xl-600 {
    width: 600px;
  }
  .wd-xl-600p {
    width: 600%;
  }
  .mx-wd-xl-600p {
    max-width: 600%;
  }
  .mn-wd-xl-600p {
    min-width: 600%;
  }
  .wd-xl-600-f {
    width: 600px !important;
  }
  .wd-xl-600p-f {
    width: 600% !important;
  }
  .mx-wd-xl-600p-f {
    max-width: 600% !important;
  }
  .mn-wd-xl-600p-f {
    min-width: 600% !important;
  }
  .wd-xl-650 {
    width: 650px;
  }
  .wd-xl-650p {
    width: 650%;
  }
  .mx-wd-xl-650p {
    max-width: 650%;
  }
  .mn-wd-xl-650p {
    min-width: 650%;
  }
  .wd-xl-650-f {
    width: 650px !important;
  }
  .wd-xl-650p-f {
    width: 650% !important;
  }
  .mx-wd-xl-650p-f {
    max-width: 650% !important;
  }
  .mn-wd-xl-650p-f {
    min-width: 650% !important;
  }
  .wd-xl-700 {
    width: 700px;
  }
  .wd-xl-700p {
    width: 700%;
  }
  .mx-wd-xl-700p {
    max-width: 700%;
  }
  .mn-wd-xl-700p {
    min-width: 700%;
  }
  .wd-xl-700-f {
    width: 700px !important;
  }
  .wd-xl-700p-f {
    width: 700% !important;
  }
  .mx-wd-xl-700p-f {
    max-width: 700% !important;
  }
  .mn-wd-xl-700p-f {
    min-width: 700% !important;
  }
  .wd-xl-750 {
    width: 750px;
  }
  .wd-xl-750p {
    width: 750%;
  }
  .mx-wd-xl-750p {
    max-width: 750%;
  }
  .mn-wd-xl-750p {
    min-width: 750%;
  }
  .wd-xl-750-f {
    width: 750px !important;
  }
  .wd-xl-750p-f {
    width: 750% !important;
  }
  .mx-wd-xl-750p-f {
    max-width: 750% !important;
  }
  .mn-wd-xl-750p-f {
    min-width: 750% !important;
  }
  .wd-xl-800 {
    width: 800px;
  }
  .wd-xl-800p {
    width: 800%;
  }
  .mx-wd-xl-800p {
    max-width: 800%;
  }
  .mn-wd-xl-800p {
    min-width: 800%;
  }
  .wd-xl-800-f {
    width: 800px !important;
  }
  .wd-xl-800p-f {
    width: 800% !important;
  }
  .mx-wd-xl-800p-f {
    max-width: 800% !important;
  }
  .mn-wd-xl-800p-f {
    min-width: 800% !important;
  }
  .wd-xl-850 {
    width: 850px;
  }
  .wd-xl-850p {
    width: 850%;
  }
  .mx-wd-xl-850p {
    max-width: 850%;
  }
  .mn-wd-xl-850p {
    min-width: 850%;
  }
  .wd-xl-850-f {
    width: 850px !important;
  }
  .wd-xl-850p-f {
    width: 850% !important;
  }
  .mx-wd-xl-850p-f {
    max-width: 850% !important;
  }
  .mn-wd-xl-850p-f {
    min-width: 850% !important;
  }
  .wd-xl-900 {
    width: 900px;
  }
  .wd-xl-900p {
    width: 900%;
  }
  .mx-wd-xl-900p {
    max-width: 900%;
  }
  .mn-wd-xl-900p {
    min-width: 900%;
  }
  .wd-xl-900-f {
    width: 900px !important;
  }
  .wd-xl-900p-f {
    width: 900% !important;
  }
  .mx-wd-xl-900p-f {
    max-width: 900% !important;
  }
  .mn-wd-xl-900p-f {
    min-width: 900% !important;
  }
  .wd-xl-950 {
    width: 950px;
  }
  .wd-xl-950p {
    width: 950%;
  }
  .mx-wd-xl-950p {
    max-width: 950%;
  }
  .mn-wd-xl-950p {
    min-width: 950%;
  }
  .wd-xl-950-f {
    width: 950px !important;
  }
  .wd-xl-950p-f {
    width: 950% !important;
  }
  .mx-wd-xl-950p-f {
    max-width: 950% !important;
  }
  .mn-wd-xl-950p-f {
    min-width: 950% !important;
  }
  .wd-xl-1000 {
    width: 1000px;
  }
  .wd-xl-1000p {
    width: 1000%;
  }
  .mx-wd-xl-1000p {
    max-width: 1000%;
  }
  .mn-wd-xl-1000p {
    min-width: 1000%;
  }
  .wd-xl-1000-f {
    width: 1000px !important;
  }
  .wd-xl-1000p-f {
    width: 1000% !important;
  }
  .mx-wd-xl-1000p-f {
    max-width: 1000% !important;
  }
  .mn-wd-xl-1000p-f {
    min-width: 1000% !important;
  }
  .wd-xl-auto {
    width: auto;
  }
  .wd-xl-auto {
    width: auto !important;
  }
}
@media (min-width: 1400px) {
  .wd-xxl-5 {
    width: 5px;
  }
  .wd-xxl-5p {
    width: 5%;
  }
  .mx-wd-xxl-5p {
    max-width: 5%;
  }
  .mn-wd-xxl-5p {
    min-width: 5%;
  }
  .wd-xxl-5-f {
    width: 5px !important;
  }
  .wd-xxl-5p-f {
    width: 5% !important;
  }
  .mx-wd-xxl-5p-f {
    max-width: 5% !important;
  }
  .mn-wd-xxl-5p-f {
    min-width: 5% !important;
  }
  .wd-xxl-10 {
    width: 10px;
  }
  .wd-xxl-10p {
    width: 10%;
  }
  .mx-wd-xxl-10p {
    max-width: 10%;
  }
  .mn-wd-xxl-10p {
    min-width: 10%;
  }
  .wd-xxl-10-f {
    width: 10px !important;
  }
  .wd-xxl-10p-f {
    width: 10% !important;
  }
  .mx-wd-xxl-10p-f {
    max-width: 10% !important;
  }
  .mn-wd-xxl-10p-f {
    min-width: 10% !important;
  }
  .wd-xxl-15 {
    width: 15px;
  }
  .wd-xxl-15p {
    width: 15%;
  }
  .mx-wd-xxl-15p {
    max-width: 15%;
  }
  .mn-wd-xxl-15p {
    min-width: 15%;
  }
  .wd-xxl-15-f {
    width: 15px !important;
  }
  .wd-xxl-15p-f {
    width: 15% !important;
  }
  .mx-wd-xxl-15p-f {
    max-width: 15% !important;
  }
  .mn-wd-xxl-15p-f {
    min-width: 15% !important;
  }
  .wd-xxl-20 {
    width: 20px;
  }
  .wd-xxl-20p {
    width: 20%;
  }
  .mx-wd-xxl-20p {
    max-width: 20%;
  }
  .mn-wd-xxl-20p {
    min-width: 20%;
  }
  .wd-xxl-20-f {
    width: 20px !important;
  }
  .wd-xxl-20p-f {
    width: 20% !important;
  }
  .mx-wd-xxl-20p-f {
    max-width: 20% !important;
  }
  .mn-wd-xxl-20p-f {
    min-width: 20% !important;
  }
  .wd-xxl-25 {
    width: 25px;
  }
  .wd-xxl-25p {
    width: 25%;
  }
  .mx-wd-xxl-25p {
    max-width: 25%;
  }
  .mn-wd-xxl-25p {
    min-width: 25%;
  }
  .wd-xxl-25-f {
    width: 25px !important;
  }
  .wd-xxl-25p-f {
    width: 25% !important;
  }
  .mx-wd-xxl-25p-f {
    max-width: 25% !important;
  }
  .mn-wd-xxl-25p-f {
    min-width: 25% !important;
  }
  .wd-xxl-30 {
    width: 30px;
  }
  .wd-xxl-30p {
    width: 30%;
  }
  .mx-wd-xxl-30p {
    max-width: 30%;
  }
  .mn-wd-xxl-30p {
    min-width: 30%;
  }
  .wd-xxl-30-f {
    width: 30px !important;
  }
  .wd-xxl-30p-f {
    width: 30% !important;
  }
  .mx-wd-xxl-30p-f {
    max-width: 30% !important;
  }
  .mn-wd-xxl-30p-f {
    min-width: 30% !important;
  }
  .wd-xxl-35 {
    width: 35px;
  }
  .wd-xxl-35p {
    width: 35%;
  }
  .mx-wd-xxl-35p {
    max-width: 35%;
  }
  .mn-wd-xxl-35p {
    min-width: 35%;
  }
  .wd-xxl-35-f {
    width: 35px !important;
  }
  .wd-xxl-35p-f {
    width: 35% !important;
  }
  .mx-wd-xxl-35p-f {
    max-width: 35% !important;
  }
  .mn-wd-xxl-35p-f {
    min-width: 35% !important;
  }
  .wd-xxl-40 {
    width: 40px;
  }
  .wd-xxl-40p {
    width: 40%;
  }
  .mx-wd-xxl-40p {
    max-width: 40%;
  }
  .mn-wd-xxl-40p {
    min-width: 40%;
  }
  .wd-xxl-40-f {
    width: 40px !important;
  }
  .wd-xxl-40p-f {
    width: 40% !important;
  }
  .mx-wd-xxl-40p-f {
    max-width: 40% !important;
  }
  .mn-wd-xxl-40p-f {
    min-width: 40% !important;
  }
  .wd-xxl-45 {
    width: 45px;
  }
  .wd-xxl-45p {
    width: 45%;
  }
  .mx-wd-xxl-45p {
    max-width: 45%;
  }
  .mn-wd-xxl-45p {
    min-width: 45%;
  }
  .wd-xxl-45-f {
    width: 45px !important;
  }
  .wd-xxl-45p-f {
    width: 45% !important;
  }
  .mx-wd-xxl-45p-f {
    max-width: 45% !important;
  }
  .mn-wd-xxl-45p-f {
    min-width: 45% !important;
  }
  .wd-xxl-50 {
    width: 50px;
  }
  .wd-xxl-50p {
    width: 50%;
  }
  .mx-wd-xxl-50p {
    max-width: 50%;
  }
  .mn-wd-xxl-50p {
    min-width: 50%;
  }
  .wd-xxl-50-f {
    width: 50px !important;
  }
  .wd-xxl-50p-f {
    width: 50% !important;
  }
  .mx-wd-xxl-50p-f {
    max-width: 50% !important;
  }
  .mn-wd-xxl-50p-f {
    min-width: 50% !important;
  }
  .wd-xxl-55 {
    width: 55px;
  }
  .wd-xxl-55p {
    width: 55%;
  }
  .mx-wd-xxl-55p {
    max-width: 55%;
  }
  .mn-wd-xxl-55p {
    min-width: 55%;
  }
  .wd-xxl-55-f {
    width: 55px !important;
  }
  .wd-xxl-55p-f {
    width: 55% !important;
  }
  .mx-wd-xxl-55p-f {
    max-width: 55% !important;
  }
  .mn-wd-xxl-55p-f {
    min-width: 55% !important;
  }
  .wd-xxl-60 {
    width: 60px;
  }
  .wd-xxl-60p {
    width: 60%;
  }
  .mx-wd-xxl-60p {
    max-width: 60%;
  }
  .mn-wd-xxl-60p {
    min-width: 60%;
  }
  .wd-xxl-60-f {
    width: 60px !important;
  }
  .wd-xxl-60p-f {
    width: 60% !important;
  }
  .mx-wd-xxl-60p-f {
    max-width: 60% !important;
  }
  .mn-wd-xxl-60p-f {
    min-width: 60% !important;
  }
  .wd-xxl-65 {
    width: 65px;
  }
  .wd-xxl-65p {
    width: 65%;
  }
  .mx-wd-xxl-65p {
    max-width: 65%;
  }
  .mn-wd-xxl-65p {
    min-width: 65%;
  }
  .wd-xxl-65-f {
    width: 65px !important;
  }
  .wd-xxl-65p-f {
    width: 65% !important;
  }
  .mx-wd-xxl-65p-f {
    max-width: 65% !important;
  }
  .mn-wd-xxl-65p-f {
    min-width: 65% !important;
  }
  .wd-xxl-70 {
    width: 70px;
  }
  .wd-xxl-70p {
    width: 70%;
  }
  .mx-wd-xxl-70p {
    max-width: 70%;
  }
  .mn-wd-xxl-70p {
    min-width: 70%;
  }
  .wd-xxl-70-f {
    width: 70px !important;
  }
  .wd-xxl-70p-f {
    width: 70% !important;
  }
  .mx-wd-xxl-70p-f {
    max-width: 70% !important;
  }
  .mn-wd-xxl-70p-f {
    min-width: 70% !important;
  }
  .wd-xxl-75 {
    width: 75px;
  }
  .wd-xxl-75p {
    width: 75%;
  }
  .mx-wd-xxl-75p {
    max-width: 75%;
  }
  .mn-wd-xxl-75p {
    min-width: 75%;
  }
  .wd-xxl-75-f {
    width: 75px !important;
  }
  .wd-xxl-75p-f {
    width: 75% !important;
  }
  .mx-wd-xxl-75p-f {
    max-width: 75% !important;
  }
  .mn-wd-xxl-75p-f {
    min-width: 75% !important;
  }
  .wd-xxl-80 {
    width: 80px;
  }
  .wd-xxl-80p {
    width: 80%;
  }
  .mx-wd-xxl-80p {
    max-width: 80%;
  }
  .mn-wd-xxl-80p {
    min-width: 80%;
  }
  .wd-xxl-80-f {
    width: 80px !important;
  }
  .wd-xxl-80p-f {
    width: 80% !important;
  }
  .mx-wd-xxl-80p-f {
    max-width: 80% !important;
  }
  .mn-wd-xxl-80p-f {
    min-width: 80% !important;
  }
  .wd-xxl-85 {
    width: 85px;
  }
  .wd-xxl-85p {
    width: 85%;
  }
  .mx-wd-xxl-85p {
    max-width: 85%;
  }
  .mn-wd-xxl-85p {
    min-width: 85%;
  }
  .wd-xxl-85-f {
    width: 85px !important;
  }
  .wd-xxl-85p-f {
    width: 85% !important;
  }
  .mx-wd-xxl-85p-f {
    max-width: 85% !important;
  }
  .mn-wd-xxl-85p-f {
    min-width: 85% !important;
  }
  .wd-xxl-90 {
    width: 90px;
  }
  .wd-xxl-90p {
    width: 90%;
  }
  .mx-wd-xxl-90p {
    max-width: 90%;
  }
  .mn-wd-xxl-90p {
    min-width: 90%;
  }
  .wd-xxl-90-f {
    width: 90px !important;
  }
  .wd-xxl-90p-f {
    width: 90% !important;
  }
  .mx-wd-xxl-90p-f {
    max-width: 90% !important;
  }
  .mn-wd-xxl-90p-f {
    min-width: 90% !important;
  }
  .wd-xxl-95 {
    width: 95px;
  }
  .wd-xxl-95p {
    width: 95%;
  }
  .mx-wd-xxl-95p {
    max-width: 95%;
  }
  .mn-wd-xxl-95p {
    min-width: 95%;
  }
  .wd-xxl-95-f {
    width: 95px !important;
  }
  .wd-xxl-95p-f {
    width: 95% !important;
  }
  .mx-wd-xxl-95p-f {
    max-width: 95% !important;
  }
  .mn-wd-xxl-95p-f {
    min-width: 95% !important;
  }
  .wd-xxl-100 {
    width: 100px;
  }
  .wd-xxl-100p {
    width: 100%;
  }
  .mx-wd-xxl-100p {
    max-width: 100%;
  }
  .mn-wd-xxl-100p {
    min-width: 100%;
  }
  .wd-xxl-100-f {
    width: 100px !important;
  }
  .wd-xxl-100p-f {
    width: 100% !important;
  }
  .mx-wd-xxl-100p-f {
    max-width: 100% !important;
  }
  .mn-wd-xxl-100p-f {
    min-width: 100% !important;
  }
  .wd-xxl-150 {
    width: 150px;
  }
  .wd-xxl-150p {
    width: 150%;
  }
  .mx-wd-xxl-150p {
    max-width: 150%;
  }
  .mn-wd-xxl-150p {
    min-width: 150%;
  }
  .wd-xxl-150-f {
    width: 150px !important;
  }
  .wd-xxl-150p-f {
    width: 150% !important;
  }
  .mx-wd-xxl-150p-f {
    max-width: 150% !important;
  }
  .mn-wd-xxl-150p-f {
    min-width: 150% !important;
  }
  .wd-xxl-200 {
    width: 200px;
  }
  .wd-xxl-200p {
    width: 200%;
  }
  .mx-wd-xxl-200p {
    max-width: 200%;
  }
  .mn-wd-xxl-200p {
    min-width: 200%;
  }
  .wd-xxl-200-f {
    width: 200px !important;
  }
  .wd-xxl-200p-f {
    width: 200% !important;
  }
  .mx-wd-xxl-200p-f {
    max-width: 200% !important;
  }
  .mn-wd-xxl-200p-f {
    min-width: 200% !important;
  }
  .wd-xxl-250 {
    width: 250px;
  }
  .wd-xxl-250p {
    width: 250%;
  }
  .mx-wd-xxl-250p {
    max-width: 250%;
  }
  .mn-wd-xxl-250p {
    min-width: 250%;
  }
  .wd-xxl-250-f {
    width: 250px !important;
  }
  .wd-xxl-250p-f {
    width: 250% !important;
  }
  .mx-wd-xxl-250p-f {
    max-width: 250% !important;
  }
  .mn-wd-xxl-250p-f {
    min-width: 250% !important;
  }
  .wd-xxl-300 {
    width: 300px;
  }
  .wd-xxl-300p {
    width: 300%;
  }
  .mx-wd-xxl-300p {
    max-width: 300%;
  }
  .mn-wd-xxl-300p {
    min-width: 300%;
  }
  .wd-xxl-300-f {
    width: 300px !important;
  }
  .wd-xxl-300p-f {
    width: 300% !important;
  }
  .mx-wd-xxl-300p-f {
    max-width: 300% !important;
  }
  .mn-wd-xxl-300p-f {
    min-width: 300% !important;
  }
  .wd-xxl-350 {
    width: 350px;
  }
  .wd-xxl-350p {
    width: 350%;
  }
  .mx-wd-xxl-350p {
    max-width: 350%;
  }
  .mn-wd-xxl-350p {
    min-width: 350%;
  }
  .wd-xxl-350-f {
    width: 350px !important;
  }
  .wd-xxl-350p-f {
    width: 350% !important;
  }
  .mx-wd-xxl-350p-f {
    max-width: 350% !important;
  }
  .mn-wd-xxl-350p-f {
    min-width: 350% !important;
  }
  .wd-xxl-400 {
    width: 400px;
  }
  .wd-xxl-400p {
    width: 400%;
  }
  .mx-wd-xxl-400p {
    max-width: 400%;
  }
  .mn-wd-xxl-400p {
    min-width: 400%;
  }
  .wd-xxl-400-f {
    width: 400px !important;
  }
  .wd-xxl-400p-f {
    width: 400% !important;
  }
  .mx-wd-xxl-400p-f {
    max-width: 400% !important;
  }
  .mn-wd-xxl-400p-f {
    min-width: 400% !important;
  }
  .wd-xxl-450 {
    width: 450px;
  }
  .wd-xxl-450p {
    width: 450%;
  }
  .mx-wd-xxl-450p {
    max-width: 450%;
  }
  .mn-wd-xxl-450p {
    min-width: 450%;
  }
  .wd-xxl-450-f {
    width: 450px !important;
  }
  .wd-xxl-450p-f {
    width: 450% !important;
  }
  .mx-wd-xxl-450p-f {
    max-width: 450% !important;
  }
  .mn-wd-xxl-450p-f {
    min-width: 450% !important;
  }
  .wd-xxl-500 {
    width: 500px;
  }
  .wd-xxl-500p {
    width: 500%;
  }
  .mx-wd-xxl-500p {
    max-width: 500%;
  }
  .mn-wd-xxl-500p {
    min-width: 500%;
  }
  .wd-xxl-500-f {
    width: 500px !important;
  }
  .wd-xxl-500p-f {
    width: 500% !important;
  }
  .mx-wd-xxl-500p-f {
    max-width: 500% !important;
  }
  .mn-wd-xxl-500p-f {
    min-width: 500% !important;
  }
  .wd-xxl-550 {
    width: 550px;
  }
  .wd-xxl-550p {
    width: 550%;
  }
  .mx-wd-xxl-550p {
    max-width: 550%;
  }
  .mn-wd-xxl-550p {
    min-width: 550%;
  }
  .wd-xxl-550-f {
    width: 550px !important;
  }
  .wd-xxl-550p-f {
    width: 550% !important;
  }
  .mx-wd-xxl-550p-f {
    max-width: 550% !important;
  }
  .mn-wd-xxl-550p-f {
    min-width: 550% !important;
  }
  .wd-xxl-600 {
    width: 600px;
  }
  .wd-xxl-600p {
    width: 600%;
  }
  .mx-wd-xxl-600p {
    max-width: 600%;
  }
  .mn-wd-xxl-600p {
    min-width: 600%;
  }
  .wd-xxl-600-f {
    width: 600px !important;
  }
  .wd-xxl-600p-f {
    width: 600% !important;
  }
  .mx-wd-xxl-600p-f {
    max-width: 600% !important;
  }
  .mn-wd-xxl-600p-f {
    min-width: 600% !important;
  }
  .wd-xxl-650 {
    width: 650px;
  }
  .wd-xxl-650p {
    width: 650%;
  }
  .mx-wd-xxl-650p {
    max-width: 650%;
  }
  .mn-wd-xxl-650p {
    min-width: 650%;
  }
  .wd-xxl-650-f {
    width: 650px !important;
  }
  .wd-xxl-650p-f {
    width: 650% !important;
  }
  .mx-wd-xxl-650p-f {
    max-width: 650% !important;
  }
  .mn-wd-xxl-650p-f {
    min-width: 650% !important;
  }
  .wd-xxl-700 {
    width: 700px;
  }
  .wd-xxl-700p {
    width: 700%;
  }
  .mx-wd-xxl-700p {
    max-width: 700%;
  }
  .mn-wd-xxl-700p {
    min-width: 700%;
  }
  .wd-xxl-700-f {
    width: 700px !important;
  }
  .wd-xxl-700p-f {
    width: 700% !important;
  }
  .mx-wd-xxl-700p-f {
    max-width: 700% !important;
  }
  .mn-wd-xxl-700p-f {
    min-width: 700% !important;
  }
  .wd-xxl-750 {
    width: 750px;
  }
  .wd-xxl-750p {
    width: 750%;
  }
  .mx-wd-xxl-750p {
    max-width: 750%;
  }
  .mn-wd-xxl-750p {
    min-width: 750%;
  }
  .wd-xxl-750-f {
    width: 750px !important;
  }
  .wd-xxl-750p-f {
    width: 750% !important;
  }
  .mx-wd-xxl-750p-f {
    max-width: 750% !important;
  }
  .mn-wd-xxl-750p-f {
    min-width: 750% !important;
  }
  .wd-xxl-800 {
    width: 800px;
  }
  .wd-xxl-800p {
    width: 800%;
  }
  .mx-wd-xxl-800p {
    max-width: 800%;
  }
  .mn-wd-xxl-800p {
    min-width: 800%;
  }
  .wd-xxl-800-f {
    width: 800px !important;
  }
  .wd-xxl-800p-f {
    width: 800% !important;
  }
  .mx-wd-xxl-800p-f {
    max-width: 800% !important;
  }
  .mn-wd-xxl-800p-f {
    min-width: 800% !important;
  }
  .wd-xxl-850 {
    width: 850px;
  }
  .wd-xxl-850p {
    width: 850%;
  }
  .mx-wd-xxl-850p {
    max-width: 850%;
  }
  .mn-wd-xxl-850p {
    min-width: 850%;
  }
  .wd-xxl-850-f {
    width: 850px !important;
  }
  .wd-xxl-850p-f {
    width: 850% !important;
  }
  .mx-wd-xxl-850p-f {
    max-width: 850% !important;
  }
  .mn-wd-xxl-850p-f {
    min-width: 850% !important;
  }
  .wd-xxl-900 {
    width: 900px;
  }
  .wd-xxl-900p {
    width: 900%;
  }
  .mx-wd-xxl-900p {
    max-width: 900%;
  }
  .mn-wd-xxl-900p {
    min-width: 900%;
  }
  .wd-xxl-900-f {
    width: 900px !important;
  }
  .wd-xxl-900p-f {
    width: 900% !important;
  }
  .mx-wd-xxl-900p-f {
    max-width: 900% !important;
  }
  .mn-wd-xxl-900p-f {
    min-width: 900% !important;
  }
  .wd-xxl-950 {
    width: 950px;
  }
  .wd-xxl-950p {
    width: 950%;
  }
  .mx-wd-xxl-950p {
    max-width: 950%;
  }
  .mn-wd-xxl-950p {
    min-width: 950%;
  }
  .wd-xxl-950-f {
    width: 950px !important;
  }
  .wd-xxl-950p-f {
    width: 950% !important;
  }
  .mx-wd-xxl-950p-f {
    max-width: 950% !important;
  }
  .mn-wd-xxl-950p-f {
    min-width: 950% !important;
  }
  .wd-xxl-1000 {
    width: 1000px;
  }
  .wd-xxl-1000p {
    width: 1000%;
  }
  .mx-wd-xxl-1000p {
    max-width: 1000%;
  }
  .mn-wd-xxl-1000p {
    min-width: 1000%;
  }
  .wd-xxl-1000-f {
    width: 1000px !important;
  }
  .wd-xxl-1000p-f {
    width: 1000% !important;
  }
  .mx-wd-xxl-1000p-f {
    max-width: 1000% !important;
  }
  .mn-wd-xxl-1000p-f {
    min-width: 1000% !important;
  }
  .wd-xxl-auto {
    width: auto;
  }
  .wd-xxl-auto {
    width: auto !important;
  }
}
.bg-facebook {
  background: social-color("facebook");
}

.bg-twitter {
  background: social-color("twitter");
}

.bg-google {
  background: social-color("google");
}

.bg-youtube {
  background: social-color("youtube");
}

.bg-vimeo {
  background: social-color("vimeo");
}

.bg-dribbble {
  background: social-color("dribbble");
}

.bg-github {
  background: social-color("github");
}

.bg-instagram {
  background: social-color("instagram");
}

.bg-pinterest {
  background: social-color("pinterest");
}

.bg-flickr {
  background: social-color("flickr");
}

.bg-bitbucket {
  background: social-color("bitbucket");
}

.bg-linkedin {
  background: social-color("linkedin");
}

body {
  margin: 0;
  padding: 0;
}

.btn, .wizard > .actions a,
.wizard > .actions a:active,
.wizard > .actions a:hover, div.tox .tox-button, .swal2-popup .swal2-actions button, div.fc .fc-button-primary,
.btn-group.open .dropdown-toggle,
.btn:active,
.btn:focus,
.btn:hover,
.btn:visited,
a,
a:active,
a:checked,
a:focus,
a:hover,
a:visited,
body,
button,
button:active,
button:hover,
button:visited,
div,
input,
input:active,
input:hover,
input:focus,
input:visited,
select,
select:active,
select:focus,
select:visited,
textarea,
textarea:active,
textarea:focus,
textarea:visited {
  box-shadow: none;
}

select,
.form-check-input {
  -webkit-appearance: none;
  -moz-appearance: none;
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active {
  -webkit-box-shadow: 0 0 0 30px #fff inset;
  -webkit-text-fill-color: #000;
}

*:-moz-full-screen,
*:-webkit-full-screen,
*:fullscreen *:-ms-full-screen {
  overflow: auto;
}

pre {
  background-color: color(gray-lighter);
  padding: 15px;
  font-size: 14px;
}

code {
  padding: 5px;
  font-family: "Roboto", Helvetica, sans-serif;
  font-weight: 400;
  font-size: 0.875rem;
  border-radius: 4px;
}

.grid-margin {
  margin-bottom: 1.5rem;
}

@media (min-width: 576px) {
  .grid-margin-sm-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 768px) {
  .grid-margin-md-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 992px) {
  .grid-margin-lg-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 1200px) {
  .grid-margin-xl-0 {
    margin-bottom: 0;
  }
}

.stretch-card {
  display: flex;
  align-items: stretch;
  justify-content: stretch;
}
.stretch-card > .card {
  width: 100%;
  min-width: 100%;
}

.img-lg {
  width: 92px;
  height: 92px;
}

.img-md {
  width: 75px;
  height: 92px;
}

.img-sm {
  width: 43px;
  height: 43px;
}

.img-xs {
  width: 36px;
  height: 36px;
}

.img-ss {
  width: 26px;
  height: 26px;
}

.fw-boldest {
  font-weight: 900;
}

.tx-10 {
  font-size: 10px;
}

.tx-11 {
  font-size: 11px;
}

.tx-12 {
  font-size: 12px;
}

.tx-13 {
  font-size: 13px;
}

.tx-14 {
  font-size: 14px;
}

.tx-16 {
  font-size: 16px;
}

.tx-80 {
  font-size: 80px;
}

svg.icon-xs {
  width: 12px;
  height: 12px;
}

svg.icon-sm {
  width: 14px;
  height: 14px;
}

svg.icon-md {
  width: 16px;
  height: 16px;
}

svg.icon-lg {
  width: 20px;
  height: 20px;
}

svg.icon-xl {
  width: 26px;
  height: 26px;
}

svg.icon-xxl {
  width: 40px;
  height: 40px;
}

.icon-xs {
  font-size: 14px;
}

.icon-sm {
  font-size: 16px;
}

.icon-md {
  font-size: 18px;
}

.icon-lg {
  font-size: 20px;
}

.icon-xl {
  font-size: 24px;
}

.icon-xxl {
  font-size: 30px;
}

.cursor-pointer {
  cursor: pointer;
}

.cursor-default {
  cursor: default;
}

.pt-1px {
  padding-top: 1px;
}

.pt-2px {
  padding-top: 2px;
}

.pt-3px {
  padding-top: 3px;
}

.pb-1px {
  padding-bottom: 1px;
}

.pb-2px {
  padding-bottom: 2px;
}

.pb-3px {
  padding-bottom: 3px;
}

.mt-1px {
  margin-top: 1px;
}

.mt-2px {
  margin-top: 2px;
}

.mt-3px {
  margin-top: 3px;
}

.mb-1px {
  margin-bottom: 1px;
}

.mb-2px {
  margin-bottom: 2px;
}

.mb-3px {
  margin-bottom: 3px;
}

.ht-5 {
  height: 5px;
}

.ht-10 {
  height: 10px;
}

.ht-15 {
  height: 15px;
}

.ht-20 {
  height: 20px;
}

.ht-30 {
  height: 30px;
}

.ht-40 {
  height: 40px;
}

.ht-50 {
  height: 50px;
}

.ht-60 {
  height: 60px;
}

.ht-70 {
  height: 70px;
}

.ht-80 {
  height: 80px;
}

.ht-90 {
  height: 90px;
}

.ht-100 {
  height: 100px;
}

body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.text-facebook {
  color: #3b5998;
}

.text-twitter {
  color: #1da1f2;
}

.text-google {
  color: #dc4e41;
}

.text-youtube {
  color: #f00;
}

.text-vimeo {
  color: #1ab7ea;
}

.text-dribbble {
  color: #ea4c89;
}

.text-github {
  color: #181717;
}

.text-instagram {
  color: #e4405f;
}

.text-pinterest {
  color: #bd081c;
}

.text-flickr {
  color: #0063dc;
}

.text-bitbucket {
  color: #0052cc;
}

.text-linkedin {
  color: #0077b5;
}

.main-content {
  color: #000;
  font-size: 16px;
}
.main-content > .page-title {
  margin-bottom: 1rem;
  font-weight: 400;
}
.main-content > h4, .main-content > .h4 {
  margin-top: 1.5rem;
  margin-bottom: 0.875rem;
}
.main-content > h4::before, .main-content > .h4::before {
  display: block;
  height: 5.4rem;
  margin-top: -6rem;
  content: "";
}
.main-content > hr {
  margin-top: 40px;
  margin-bottom: 40px;
}
.main-content .example {
  font-size: 0.875rem;
  letter-spacing: normal;
  padding: 10px;
  background-color: #fff;
  border: 4px solid #e9ecef;
  position: relative;
}
@media (min-width: 576px) {
  .main-content .example {
    padding: 25px;
  }
}
.main-content .highlight {
  position: relative;
  background-color: #fff;
  padding: 15px;
}
.main-content .highlight pre {
  padding: 15px;
  font-size: 0.875rem;
  font-family: "Roboto", Helvetica, sans-serif;
  background: transparent;
  line-height: 1.4;
  margin: 0;
}
.main-content .highlight pre code {
  font-family: "Roboto", Helvetica, sans-serif;
  padding: 0;
  -moz-tab-size: 8;
    -o-tab-size: 8;
       tab-size: 8;
  color: #000;
  text-shadow: none;
}
.main-content .highlight pre code .token.url, .main-content .highlight pre code .token.string, .main-content .highlight pre code .token.entity, .main-content .highlight pre code .token.operator {
  background: none;
}
.main-content .highlight .btn-clipboard {
  position: absolute;
  top: 6px;
  right: 6px;
  font-size: 12px;
  padding: 1px 6px;
  background: rgba(101, 113, 255, 0.2);
}
.main-content .highlight .btn-clipboard:hover {
  background: rgba(101, 113, 255, 0.3);
  border-color: transparent;
  transition: background 0.3s ease-in-out;
}

.example .btn-toolbar + .btn-toolbar {
  margin-top: 0.5rem;
}
.example .modal.static {
  position: static;
  display: block;
}
.example nav.navbar, .example div.navbar {
  position: relative;
  padding: 0.5rem 1rem;
  left: auto;
  width: 100%;
  height: auto;
  z-index: 9;
  border-bottom: 0;
  box-shadow: none;
}
.example nav.navbar .navbar-brand, .example div.navbar .navbar-brand {
  font-size: 1.25rem;
}
.example .progress + .progress {
  margin-top: 10px;
}
.example .perfect-scrollbar-example {
  position: relative;
  max-height: 250px;
  background: #fff;
}
.example .scrollspy-example {
  position: relative;
  height: 200px;
  margin-top: 0.5rem;
  overflow: auto;
}
.example .scrollspy-example-2 {
  position: relative;
  height: 350px;
  overflow: auto;
}
.example nav .breadcrumb {
  margin-bottom: 0.75rem;
}
.example nav:last-child .breadcrumb {
  margin-bottom: 0;
}

.page-breadcrumb {
  margin-bottom: 15px;
}
.page-breadcrumb .breadcrumb {
  padding: 0;
  background: #f9fafb;
}

.noble-ui-logo {
  font-weight: 700;
  font-size: 25px;
  color: #000865;
}
.noble-ui-logo span {
  color: #6571ff;
  font-weight: 300;
}
.noble-ui-logo:hover {
  color: #000865;
}
.noble-ui-logo.logo-light {
  color: #000;
}

.buy-now-wrapper {
  position: fixed;
  bottom: 30px;
  right: 35px;
  z-index: 99999;
}
.rtl .buy-now-wrapper {
  right: auto;
  left: 35px;
}
.buy-now-wrapper .btn svg, .buy-now-wrapper .wizard > .actions a svg, .wizard > .actions .buy-now-wrapper a svg, .buy-now-wrapper div.tox .tox-button svg, div.tox .buy-now-wrapper .tox-button svg, .buy-now-wrapper .swal2-popup .swal2-actions button svg, .swal2-popup .swal2-actions .buy-now-wrapper button svg, .buy-now-wrapper div.fc .fc-button-primary svg, div.fc .buy-now-wrapper .fc-button-primary svg {
  width: 19px !important;
  height: 19px !important;
}

.loader-wrapper {
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9999;
  background: #f9fafb;
  display: flex;
  align-items: center;
  justify-content: center;
}
.loaded .loader-wrapper {
  visibility: hidden;
  opacity: 0;
  transition: all 0.8s ease-out;
}
.loader-wrapper .loader {
  font-size: 10px;
  margin: 50px auto;
  text-indent: -9999em;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: #6571ff;
  background: linear-gradient(to right, #6571ff 10%, rgba(0, 0, 0, 0) 42%);
  animation: loading 1.4s infinite linear;
  transform: translateZ(0);
}
.loader-wrapper .loader.loader:before {
  width: 50%;
  height: 50%;
  background: #6571ff;
  border-radius: 100% 0 0 0;
  position: absolute;
  top: 0;
  left: 0;
  content: "";
}
.loader-wrapper .loader.loader:after {
  background: #f9fafb;
  width: 75%;
  height: 75%;
  border-radius: 50%;
  content: "";
  margin: auto;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}
@keyframes loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.main-wrapper {
  display: flex;
}
.main-wrapper .page-wrapper {
  min-height: 100vh;
  background: #f9fafb;
  width: calc(100% - 240px);
  margin-left: 240px;
  display: flex;
  flex-direction: column;
  transition: margin 0.1s ease, width 0.1s ease;
}
.main-wrapper .page-wrapper .page-content {
  flex-grow: 1;
  padding: 25px;
  margin-top: 60px;
}
@media (max-width: 767px) {
  .main-wrapper .page-wrapper .page-content {
    padding: 25px 15px;
  }
}
.main-wrapper .page-wrapper.full-page {
  width: 100%;
  margin-left: 0;
}
.main-wrapper .page-wrapper.full-page .page-content {
  margin-top: 0;
}
@media (max-width: 991px) {
  .main-wrapper .page-wrapper {
    margin-left: 0;
    width: 100%;
  }
}

.page-content .content-nav-wrapper {
  padding: 0;
  position: sticky;
  top: 80px;
  height: calc(100vh - 6rem);
  overflow-y: auto;
  border-left: 1px solid #e9ecef;
  display: none;
}
@media (min-width: 1200px) {
  .page-content .content-nav-wrapper {
    display: block;
  }
}
.page-content .content-nav-wrapper .content-nav {
  padding: 0px 25px;
}
.page-content .content-nav-wrapper .content-nav .nav-item .nav-link {
  padding: 0;
  height: 30px;
  white-space: nowrap;
  color: #7987a1;
  display: flex;
  align-items: center;
}

.page-wrapper .navbar {
  width: calc(100% - 240px);
  height: 60px;
  padding: 0;
  position: fixed;
  right: 0;
  left: 240px;
}
@media (max-width: 991px) {
  .page-wrapper .navbar {
    width: 100%;
    left: 0;
  }
}

.navbar {
  background: #fff;
  border-bottom: 1px solid #e9ecef;
  display: flex;
  align-items: center;
  z-index: 978;
  box-shadow: 3px 0 10px 0 rgba(183, 192, 206, 0.2);
  transition: width 0.1s ease, left 0.1s ease;
}
@media (max-width: 991px) {
  .navbar .navbar-content {
    width: calc(100% - 70px - 1px);
  }
}
.navbar .sidebar-toggler {
  height: 100%;
  border-right: 1px solid #e9ecef;
  align-items: center;
  padding: 0 25px;
  display: none;
}
.navbar .sidebar-toggler svg {
  width: 20px;
  height: 20px;
  color: #7987a1;
}
@media (max-width: 991px) {
  .navbar .sidebar-toggler {
    display: flex;
  }
}
.navbar .search-form {
  width: 100%;
  margin-right: 60px;
}
.navbar .search-form .input-group .input-group-text {
  padding: 0;
  border: 0;
  color: #7987a1;
  background: #fff;
}
.navbar .search-form .input-group .input-group-text svg {
  width: 20px;
  height: 20px;
  cursor: pointer;
}
.navbar .search-form .input-group .form-control, .navbar .search-form .input-group .typeahead.tt-input,
.navbar .search-form .input-group .typeahead.tt-hint, .navbar .search-form .input-group .select2-container--default .select2-search--dropdown .select2-search__field, .select2-container--default .select2-search--dropdown .navbar .search-form .input-group .select2-search__field {
  border: 0;
  margin-top: 3px;
}
.navbar .navbar-content {
  display: flex;
  width: 100%;
  height: 100%;
  padding-left: 25px;
  padding-right: 25px;
}
@media (max-width: 991px) {
  .navbar .navbar-content {
    width: calc(100% - 70px - 1px);
  }
}
.navbar .navbar-content .navbar-nav {
  display: flex;
  flex-direction: row;
  margin-left: auto;
}
.navbar .navbar-content .navbar-nav .nav-item {
  position: relative;
  margin-left: 5px;
  margin-right: 5px;
  min-width: 30px;
  display: flex;
  align-items: center;
}
.navbar .navbar-content .navbar-nav .nav-item .nav-link {
  color: #000;
  padding: 0;
  position: relative;
  margin-left: auto;
  margin-right: auto;
}
.navbar .navbar-content .navbar-nav .nav-item .nav-link:hover, .navbar .navbar-content .navbar-nav .nav-item .nav-link[aria-expanded=true] {
  color: #6571ff;
}
.navbar .navbar-content .navbar-nav .nav-item .nav-link::after {
  display: none;
}
.navbar .navbar-content .navbar-nav .nav-item .nav-link svg {
  width: 20px;
  height: 20px;
}
.navbar .navbar-content .navbar-nav .nav-item .nav-link .indicator {
  position: absolute;
  top: 0px;
  right: 2px;
}
.navbar .navbar-content .navbar-nav .nav-item .nav-link .indicator .circle {
  background: #6571ff;
  width: 7px;
  height: 7px;
  border-radius: 50%;
}
.navbar .navbar-content .navbar-nav .nav-item .nav-link .indicator .circle::before {
  background-color: #6571ff;
  content: "";
  display: table;
  border-radius: 50%;
  position: absolute;
}
@media (max-width: 767px) {
  .navbar .navbar-content .navbar-nav .nav-item.dropdown {
    position: static;
  }
}
.navbar .navbar-content .navbar-nav .nav-item.dropdown .dropdown-menu, .navbar .navbar-content .navbar-nav .nav-item.dropdown .tt-menu {
  width: -moz-max-content;
  width: max-content;
  position: absolute;
  right: -20px;
  left: auto;
}
.navbar .navbar-content .navbar-nav .nav-item.dropdown .dropdown-menu::before, .navbar .navbar-content .navbar-nav .nav-item.dropdown .tt-menu::before {
  content: "";
  width: 13px;
  height: 13px;
  background: #fff;
  position: absolute;
  top: -7px;
  right: 28px;
  transform: rotate(45deg);
  border-top: 1px solid #f2f4f9;
  border-left: 1px solid #f2f4f9;
}
@media (max-width: 767px) {
  .navbar .navbar-content .navbar-nav .nav-item.dropdown .dropdown-menu, .navbar .navbar-content .navbar-nav .nav-item.dropdown .tt-menu {
    right: 20px;
    width: calc(100% - 40px);
  }
  .navbar .navbar-content .navbar-nav .nav-item.dropdown .dropdown-menu::before, .navbar .navbar-content .navbar-nav .nav-item.dropdown .tt-menu::before {
    display: none;
  }
}

.sidebar {
  width: 240px;
  height: 100%;
  position: fixed;
  left: 0;
  top: 0;
  transition: width 0.1s ease, margin 0.1s ease-in-out;
  z-index: 999;
}
.sidebar .sidebar-header {
  background: #fff;
  height: 60px;
  border-bottom: 1px solid #e9ecef;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 25px;
  border-right: 1px solid #e9ecef;
  z-index: 999;
  width: 240px;
  transition: width 0.1s ease;
}
.sidebar-open .sidebar .sidebar-header {
  border-bottom: 1px solid #e9ecef;
}
.sidebar .sidebar-header .sidebar-brand {
  opacity: 1;
  visibility: visible;
  transition: opacity 0.5s ease;
  font-weight: 700;
  font-size: 25px;
  color: #000865;
}
.sidebar .sidebar-header .sidebar-brand span {
  color: #6571ff;
  font-weight: 300;
}
.sidebar .sidebar-header .sidebar-toggler {
  cursor: pointer;
  width: 18px;
}
.sidebar .sidebar-header .sidebar-toggler span {
  display: block;
  width: 100%;
  border-radius: 3px;
  height: 2px;
  background: #7987a1;
  transition: all 0.3s;
  position: relative;
}
.sidebar .sidebar-header .sidebar-toggler span + span {
  margin-top: 4px;
}
.sidebar .sidebar-header .sidebar-toggler.active span:nth-child(1) {
  animation: ease 0.6s top forwards;
}
.sidebar .sidebar-header .sidebar-toggler.not-active span:nth-child(1) {
  animation: ease 0.6s top-2 forwards;
}
.sidebar .sidebar-header .sidebar-toggler.active span:nth-child(2) {
  animation: ease 0.6s scaled forwards;
}
.sidebar .sidebar-header .sidebar-toggler.not-active span:nth-child(2) {
  animation: ease 0.6s scaled-2 forwards;
}
.sidebar .sidebar-header .sidebar-toggler.active span:nth-child(3) {
  animation: ease 0.6s bottom forwards;
}
.sidebar .sidebar-header .sidebar-toggler.not-active span:nth-child(3) {
  animation: ease 0.6s bottom-2 forwards;
}
@keyframes top {
  0% {
    top: 0;
    transform: rotate(0);
  }
  50% {
    top: 6px;
    transform: rotate(0);
  }
  100% {
    top: 6px;
    transform: rotate(45deg);
  }
}
@keyframes top-2 {
  0% {
    top: 6px;
    transform: rotate(45deg);
  }
  50% {
    top: 6px;
    transform: rotate(0deg);
  }
  100% {
    top: 0;
    transform: rotate(0deg);
  }
}
@keyframes bottom {
  0% {
    bottom: 0;
    transform: rotate(0);
  }
  50% {
    bottom: 6px;
    transform: rotate(0);
  }
  100% {
    bottom: 6px;
    transform: rotate(135deg);
  }
}
@keyframes bottom-2 {
  0% {
    bottom: 6px;
    transform: rotate(135deg);
  }
  50% {
    bottom: 6px;
    transform: rotate(0);
  }
  100% {
    bottom: 0;
    transform: rotate(0);
  }
}
@keyframes scaled {
  50% {
    transform: scale(0);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes scaled-2 {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
.sidebar .sidebar-body {
  max-height: calc(100% - 60px);
  position: relative;
  border-right: 1px solid #e9ecef;
  height: 100%;
  box-shadow: 0 8px 10px 0 rgba(183, 192, 206, 0.2);
  background: #fff;
}
.sidebar .sidebar-body .nav {
  display: flex;
  flex-direction: column;
  padding: 25px 25px 50px 25px;
}
.sidebar .sidebar-body .nav .nav-item {
  position: relative;
}
.sidebar .sidebar-body .nav .nav-item .nav-link {
  display: flex;
  align-items: center;
  padding: 0;
  height: 32px;
  white-space: nowrap;
  color: #000;
}
.sidebar .sidebar-body .nav .nav-item .nav-link .link-icon {
  width: 16px;
  height: 16px;
  fill: rgba(233, 236, 239, 0.21);
  position: absolute;
  color: inherit;
}
.sidebar .sidebar-body .nav .nav-item .nav-link .link-title {
  margin-left: 30px;
  font-size: 14px;
  transition: all 0.2s ease-in-out;
}
.sidebar .sidebar-body .nav .nav-item .nav-link .link-arrow {
  width: 14px;
  height: 14px;
  margin-left: auto;
  transition: all 0.3s ease-in-out;
  color: inherit;
}
.sidebar .sidebar-body .nav .nav-item .nav-link .link-icon,
.sidebar .sidebar-body .nav .nav-item .nav-link .link-title,
.sidebar .sidebar-body .nav .nav-item .nav-link .link-arrow {
  transition: all 0.3s ease;
}
.sidebar .sidebar-body .nav .nav-item .nav-link[aria-expanded=true] {
  color: #6571ff;
}
.sidebar .sidebar-body .nav .nav-item .nav-link[aria-expanded=true] .link-arrow {
  transform: rotate(180deg);
}
.sidebar .sidebar-body .nav .nav-item.nav-category {
  color: #7987a1;
  font-size: 11px;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 0.5px;
  margin-bottom: 5px;
  height: 15px;
}
.sidebar .sidebar-body .nav .nav-item.nav-category:not(:first-child) {
  margin-top: 20px;
}
.sidebar .sidebar-body .nav .nav-item:hover .nav-link {
  color: #6571ff;
}
.sidebar .sidebar-body .nav .nav-item:hover .nav-link .link-title {
  margin-left: 31px;
}
.sidebar .sidebar-body .nav .nav-item:hover .nav-link .link-icon {
  color: #6571ff;
  fill: rgba(239, 243, 255, 0.5);
}
.sidebar .sidebar-body .nav .nav-item.active .nav-link {
  color: #6571ff;
}
.sidebar .sidebar-body .nav .nav-item.active .nav-link::before {
  content: "";
  width: 3px;
  height: 26px;
  background: #6571ff;
  position: absolute;
  left: -25px;
}
.sidebar .sidebar-body .nav .nav-item.active .nav-link .link-icon {
  fill: rgba(239, 243, 255, 0.5);
  color: #6571ff;
}
.sidebar .sidebar-body .nav.sub-menu {
  padding: 0 0 15px 33px;
}
.sidebar .sidebar-body .nav.sub-menu .nav-item {
  position: relative;
}
.sidebar .sidebar-body .nav.sub-menu .nav-item .nav-link {
  height: 25px;
  color: #000;
  font-size: 13px;
  transition: all 0.3s ease-in-out;
}
.sidebar .sidebar-body .nav.sub-menu .nav-item .nav-link::before {
  content: "";
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: transparent;
  border: 1px solid #aeb9c4;
  position: absolute;
  left: -29px;
  top: 10px;
  transition: all 0.4s ease-in-out;
}
.sidebar .sidebar-body .nav.sub-menu .nav-item .nav-link.active {
  color: #6571ff;
}
.sidebar .sidebar-body .nav.sub-menu .nav-item .nav-link.active::before {
  border: 1px solid #6571ff;
  background: #6571ff;
}
.sidebar .sidebar-body .nav.sub-menu .nav-item:hover .nav-link {
  color: #6571ff;
  margin-left: 3px;
}
.sidebar .sidebar-body .nav.sub-menu .nav-item:hover .nav-link::before {
  border: 1px solid #6571ff;
  background: #6571ff;
}
@media (max-width: 991px) {
  .sidebar {
    z-index: 999;
    margin-left: -240px;
    visibility: hidden;
  }
  .sidebar-open .sidebar {
    margin-left: 0;
    visibility: visible;
  }
  .sidebar .sidebar-body .nav .nav-item {
    width: auto;
  }
  .sidebar .sidebar-body .nav .nav-item .nav-link .link-icon {
    transition: none;
    margin: 0;
  }
}

.sidebar-dark .sidebar .sidebar-header {
  background: #0c1427;
  border-bottom: 1px solid rgba(233, 236, 239, 0.1);
  border-right: 1px solid rgba(233, 236, 239, 0.1);
}
.sidebar-dark .sidebar .sidebar-header .sidebar-brand {
  color: #e9ecef;
}
.sidebar-dark .sidebar .sidebar-header .sidebar-toggler span {
  background: #7987a1;
}
.sidebar-dark .sidebar .sidebar-body {
  background: #0c1427;
  border-right: 1px solid rgba(233, 236, 239, 0.1);
}
.sidebar-dark .sidebar .sidebar-body .nav .nav-item.nav-category {
  color: #fff;
}
.sidebar-dark .sidebar .sidebar-body .nav .nav-item .nav-link {
  color: #7987a1;
}
.sidebar-dark .sidebar .sidebar-body .nav .nav-item .nav-link svg {
  fill: none;
}
.sidebar-dark .sidebar .sidebar-body .nav .nav-item .nav-link[aria-expanded=true] {
  color: #6571ff;
}
.sidebar-dark .sidebar .sidebar-body .nav .nav-item:hover .nav-link svg, .sidebar-dark .sidebar .sidebar-body .nav .nav-item.active .nav-link svg {
  fill: rgba(101, 113, 255, 0.2);
}
.sidebar-dark .sidebar .sidebar-body .nav .nav-item:hover .nav-link .link-title, .sidebar-dark .sidebar .sidebar-body .nav .nav-item.active .nav-link .link-title {
  color: #6571ff;
}

.settings-sidebar {
  position: fixed;
  right: -232px;
  top: 130px;
  width: 232px;
  background: #fff;
  box-shadow: -3px 0 10px 0 rgba(183, 192, 206, 0.2);
  z-index: 999;
  border-radius: 0 0 0 4px;
  transition: all 0.2s ease-in-out;
}
.settings-open .settings-sidebar {
  right: 0;
}
.settings-sidebar .sidebar-body {
  position: relative;
  padding: 18px;
}
.settings-sidebar .sidebar-body .settings-sidebar-toggler {
  position: absolute;
  left: -44px;
  top: 0;
  padding: 12px;
  border-radius: 4px 0 0 4px;
  background: #fff;
  box-shadow: -3px 0 10px 0 rgba(183, 192, 206, 0.2);
}
.settings-sidebar .sidebar-body .settings-sidebar-toggler svg {
  width: 20px;
  height: 20px;
  color: #7987a1;
}
.settings-sidebar .sidebar-body .theme-wrapper .theme-item {
  position: relative;
  display: block;
  margin-bottom: 19px;
  border-radius: 6px;
  border: 3px solid #e9ecef;
}
.settings-sidebar .sidebar-body .theme-wrapper .theme-item::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(101, 113, 255, 0);
}
.settings-sidebar .sidebar-body .theme-wrapper .theme-item:last-child {
  margin-bottom: 0;
}
.settings-sidebar .sidebar-body .theme-wrapper .theme-item.active {
  border: 3px solid #b2b8ff;
}
.settings-sidebar .sidebar-body .theme-wrapper .theme-item img {
  width: 100%;
  border-radius: 3px;
}
.settings-sidebar .sidebar-body .theme-wrapper .theme-item:hover::after {
  background: rgba(101, 113, 255, 0.2);
  transition: all 0.3s ease-in-out;
}

.sidebar-folded .sidebar .sidebar-header {
  width: 70px;
}
.sidebar-folded .sidebar .sidebar-header .sidebar-brand {
  display: none;
}
.sidebar-folded .page-wrapper {
  width: calc(100% - 70px);
  margin-left: 70px;
}
.sidebar-folded .page-wrapper .navbar {
  width: calc(100% - 70px);
  left: 70px;
  right: 0;
}
.sidebar-folded:not(.open-sidebar-folded) .sidebar {
  width: 70px;
}
.sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-header {
  width: 70px;
}
.sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-header .sidebar-brand {
  opacity: 0;
  visibility: hidden;
  width: 0;
}
.sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item .nav-link .link-title,
.sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item .nav-link .link-arrow {
  visibility: hidden;
  opacity: 0;
}
.sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item.nav-category {
  visibility: hidden;
}
.sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item.nav-category::before {
  content: "";
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background: #7987a1;
  position: absolute;
  top: 5px;
  left: 6px;
  visibility: visible;
}
.sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav.sub-menu {
  display: none;
}

@media (max-width: 991px) {
  .sidebar-open .main-wrapper::before, .settings-open .main-wrapper::before {
    content: "";
    width: 100vw;
    background: rgba(0, 0, 0, 0.3);
    position: fixed;
    top: 0;
    bottom: 0;
    right: 0;
    z-index: 99;
    transition: all 3s ease;
    z-index: 980;
  }
}

a.badge:hover {
  color: #fff;
}

.alert-primary {
  background-color: rgba(101, 113, 255, 0.1);
  color: #4c59ff;
  border-color: rgba(101, 113, 255, 0.2);
}
.alert-primary .alert-link {
  color: #4c59ff;
}
.alert-primary svg {
  width: 19px;
  height: 19px;
  margin-right: 0.5rem;
}
.alert-primary i {
  font-size: 19px;
  margin-right: 0.5rem;
}

.alert-fill-primary {
  --bs-alert-color: #fff;
  --bs-alert-bg: #6571ff;
  --bs-alert-border-color: #6571ff;
}
.alert-fill-primary .alert-link {
  color: #cccccc;
}
.alert-fill-primary.alert-fill-light {
  color: #7987a1;
}

.alert-secondary {
  background-color: rgba(121, 135, 161, 0.1);
  color: #6a7a96;
  border-color: rgba(121, 135, 161, 0.2);
}
.alert-secondary .alert-link {
  color: #6a7a96;
}
.alert-secondary svg {
  width: 19px;
  height: 19px;
  margin-right: 0.5rem;
}
.alert-secondary i {
  font-size: 19px;
  margin-right: 0.5rem;
}

.alert-fill-secondary {
  --bs-alert-color: #fff;
  --bs-alert-bg: #7987a1;
  --bs-alert-border-color: #7987a1;
}
.alert-fill-secondary .alert-link {
  color: #cccccc;
}
.alert-fill-secondary.alert-fill-light {
  color: #7987a1;
}

.alert-success {
  background-color: rgba(5, 163, 74, 0.1);
  color: #048a3f;
  border-color: rgba(5, 163, 74, 0.2);
}
.alert-success .alert-link {
  color: #048a3f;
}
.alert-success svg {
  width: 19px;
  height: 19px;
  margin-right: 0.5rem;
}
.alert-success i {
  font-size: 19px;
  margin-right: 0.5rem;
}

.alert-fill-success {
  --bs-alert-color: #fff;
  --bs-alert-bg: #05a34a;
  --bs-alert-border-color: #05a34a;
}
.alert-fill-success .alert-link {
  color: #cccccc;
}
.alert-fill-success.alert-fill-light {
  color: #7987a1;
}

.alert-info {
  background-color: rgba(102, 209, 209, 0.1);
  color: #52cbcb;
  border-color: rgba(102, 209, 209, 0.2);
}
.alert-info .alert-link {
  color: #52cbcb;
}
.alert-info svg {
  width: 19px;
  height: 19px;
  margin-right: 0.5rem;
}
.alert-info i {
  font-size: 19px;
  margin-right: 0.5rem;
}

.alert-fill-info {
  --bs-alert-color: #fff;
  --bs-alert-bg: #66d1d1;
  --bs-alert-border-color: #66d1d1;
}
.alert-fill-info .alert-link {
  color: #cccccc;
}
.alert-fill-info.alert-fill-light {
  color: #7987a1;
}

.alert-warning {
  background-color: rgba(251, 188, 6, 0.1);
  color: #e4aa04;
  border-color: rgba(251, 188, 6, 0.2);
}
.alert-warning .alert-link {
  color: #e4aa04;
}
.alert-warning svg {
  width: 19px;
  height: 19px;
  margin-right: 0.5rem;
}
.alert-warning i {
  font-size: 19px;
  margin-right: 0.5rem;
}

.alert-fill-warning {
  --bs-alert-color: #fff;
  --bs-alert-bg: #fbbc06;
  --bs-alert-border-color: #fbbc06;
}
.alert-fill-warning .alert-link {
  color: #cccccc;
}
.alert-fill-warning.alert-fill-light {
  color: #7987a1;
}

.alert-danger {
  background-color: rgba(255, 51, 102, 0.1);
  color: #ff1a53;
  border-color: rgba(255, 51, 102, 0.2);
}
.alert-danger .alert-link {
  color: #ff1a53;
}
.alert-danger svg {
  width: 19px;
  height: 19px;
  margin-right: 0.5rem;
}
.alert-danger i {
  font-size: 19px;
  margin-right: 0.5rem;
}

.alert-fill-danger {
  --bs-alert-color: #fff;
  --bs-alert-bg: #ff3366;
  --bs-alert-border-color: #ff3366;
}
.alert-fill-danger .alert-link {
  color: #cccccc;
}
.alert-fill-danger.alert-fill-light {
  color: #7987a1;
}

.alert-light {
  background-color: rgba(233, 236, 239, 0.1);
  color: #dadfe4;
  border-color: rgba(233, 236, 239, 0.2);
}
.alert-light .alert-link {
  color: #dadfe4;
}
.alert-light svg {
  width: 19px;
  height: 19px;
  margin-right: 0.5rem;
}
.alert-light i {
  font-size: 19px;
  margin-right: 0.5rem;
}

.alert-fill-light {
  --bs-alert-color: #fff;
  --bs-alert-bg: #e9ecef;
  --bs-alert-border-color: #e9ecef;
}
.alert-fill-light .alert-link {
  color: #cccccc;
}
.alert-fill-light.alert-fill-light {
  color: #7987a1;
}

.alert-dark {
  background-color: rgba(6, 12, 23, 0.1);
  color: #010103;
  border-color: rgba(6, 12, 23, 0.2);
}
.alert-dark .alert-link {
  color: #010103;
}
.alert-dark svg {
  width: 19px;
  height: 19px;
  margin-right: 0.5rem;
}
.alert-dark i {
  font-size: 19px;
  margin-right: 0.5rem;
}

.alert-fill-dark {
  --bs-alert-color: #fff;
  --bs-alert-bg: #060c17;
  --bs-alert-border-color: #060c17;
}
.alert-fill-dark .alert-link {
  color: #cccccc;
}
.alert-fill-dark.alert-fill-light {
  color: #7987a1;
}

.breadcrumb.breadcrumb-line .breadcrumb-item + .breadcrumb-item::before {
  content: "-" !important;
}
.breadcrumb.breadcrumb-dot .breadcrumb-item + .breadcrumb-item::before {
  content: "•" !important;
}
.breadcrumb.breadcrumb-arrow .breadcrumb-item + .breadcrumb-item::before {
  content: ">" !important;
}

/* Buttons */
.btn i, .wizard > .actions a i,
.wizard > .actions a:active i,
.wizard > .actions a:hover i, div.tox .tox-button i, .swal2-popup .swal2-actions button i, div.fc .fc-button-primary i {
  font-size: 1rem;
}
.btn.btn-rounded, .wizard > .actions a.btn-rounded, div.tox .btn-rounded.tox-button, .swal2-popup .swal2-actions button.btn-rounded, div.fc .btn-rounded.fc-button-primary {
  border-radius: 50px;
}
.btn.btn-xs, .wizard > .actions a.btn-xs, div.tox .btn-xs.tox-button, .swal2-popup .swal2-actions button.btn-xs, div.fc .btn-xs.fc-button-primary {
  padding: 0.313rem 0.8rem;
  font-size: 0.75rem;
}
.btn.btn-icon, .wizard > .actions a.btn-icon, div.tox .btn-icon.tox-button, .swal2-popup .swal2-actions button.btn-icon, div.fc .btn-icon.fc-button-primary {
  width: 38px;
  height: 38px;
  padding: 0;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}
.btn.btn-icon svg, .wizard > .actions a.btn-icon svg, div.tox .btn-icon.tox-button svg, .swal2-popup .swal2-actions button.btn-icon svg, div.fc .btn-icon.fc-button-primary svg {
  height: 18px;
}
.btn.btn-icon.btn-xs, .wizard > .actions a.btn-icon.btn-xs, div.tox .btn-icon.btn-xs.tox-button, .swal2-popup .swal2-actions button.btn-icon.btn-xs, div.fc .btn-icon.btn-xs.fc-button-primary {
  width: 30px;
  height: 30px;
}
.btn.btn-icon.btn-xs svg, .wizard > .actions a.btn-icon.btn-xs svg, div.tox .btn-icon.btn-xs.tox-button svg, .swal2-popup .swal2-actions button.btn-icon.btn-xs svg, div.fc .btn-icon.btn-xs.fc-button-primary svg {
  height: 14px;
}
.btn.btn-icon.btn-sm, .wizard > .actions a.btn-icon.btn-sm, div.tox .btn-icon.btn-sm.tox-button, .swal2-popup .swal2-actions button.btn-icon.btn-sm, div.fc .btn-icon.fc-button-primary, .btn-group-sm > .btn.btn-icon, .wizard > .actions .btn-group-sm > a.btn-icon, div.tox .btn-group-sm > .btn-icon.tox-button, .swal2-popup .swal2-actions .btn-group-sm > button.btn-icon {
  width: 36px;
  height: 36px;
}
.btn.btn-icon.btn-sm svg, .wizard > .actions a.btn-icon.btn-sm svg, div.tox .btn-icon.btn-sm.tox-button svg, .swal2-popup .swal2-actions button.btn-icon.btn-sm svg, div.fc .btn-icon.fc-button-primary svg, .btn-group-sm > .btn.btn-icon svg, .wizard > .actions .btn-group-sm > a.btn-icon svg, div.tox .btn-group-sm > .btn-icon.tox-button svg, .swal2-popup .swal2-actions .btn-group-sm > button.btn-icon svg {
  height: 15px;
}
.btn.btn-icon.btn-lg, .wizard > .actions a.btn-icon.btn-lg, div.tox .btn-icon.btn-lg.tox-button, .swal2-popup .swal2-actions button.btn-icon.btn-lg, div.fc .btn-icon.btn-lg.fc-button-primary, .btn-group-lg > .btn.btn-icon, .wizard > .actions .btn-group-lg > a.btn-icon, div.tox .btn-group-lg > .btn-icon.tox-button, .swal2-popup .swal2-actions .btn-group-lg > button.btn-icon, div.fc .btn-group-lg > .btn-icon.fc-button-primary {
  width: 42px;
  height: 42px;
}
.btn.btn-icon.btn-lg svg, .wizard > .actions a.btn-icon.btn-lg svg, div.tox .btn-icon.btn-lg.tox-button svg, .swal2-popup .swal2-actions button.btn-icon.btn-lg svg, div.fc .btn-icon.btn-lg.fc-button-primary svg, .btn-group-lg > .btn.btn-icon svg, .wizard > .actions .btn-group-lg > a.btn-icon svg, div.tox .btn-group-lg > .btn-icon.tox-button svg, .swal2-popup .swal2-actions .btn-group-lg > button.btn-icon svg, div.fc .btn-group-lg > .btn-icon.fc-button-primary svg {
  height: 18px;
}
.btn.btn-icon-text .btn-icon-prepend, .wizard > .actions a.btn-icon-text .btn-icon-prepend, div.tox .btn-icon-text.tox-button .btn-icon-prepend, .swal2-popup .swal2-actions button.btn-icon-text .btn-icon-prepend, div.fc .btn-icon-text.fc-button-primary .btn-icon-prepend {
  margin-right: 0.5rem;
}
.btn.btn-icon-text .btn-icon-append, .wizard > .actions a.btn-icon-text .btn-icon-append, div.tox .btn-icon-text.tox-button .btn-icon-append, .swal2-popup .swal2-actions button.btn-icon-text .btn-icon-append, div.fc .btn-icon-text.fc-button-primary .btn-icon-append {
  margin-left: 0.5rem;
}
.btn.btn-icon-text .btn-icon-prepend, .wizard > .actions a.btn-icon-text .btn-icon-prepend, div.tox .btn-icon-text.tox-button .btn-icon-prepend, .swal2-popup .swal2-actions button.btn-icon-text .btn-icon-prepend, div.fc .btn-icon-text.fc-button-primary .btn-icon-prepend,
.btn.btn-icon-text .btn-icon-append,
.wizard > .actions a.btn-icon-text .btn-icon-append,
div.tox .btn-icon-text.tox-button .btn-icon-append,
.swal2-popup .swal2-actions button.btn-icon-text .btn-icon-append,
div.fc .btn-icon-text.fc-button-primary .btn-icon-append {
  width: 18px;
  height: 18px;
}
.btn.btn-icon-text.btn-xs .btn-icon-prepend, .wizard > .actions a.btn-icon-text.btn-xs .btn-icon-prepend, div.tox .btn-icon-text.btn-xs.tox-button .btn-icon-prepend, .swal2-popup .swal2-actions button.btn-icon-text.btn-xs .btn-icon-prepend, div.fc .btn-icon-text.btn-xs.fc-button-primary .btn-icon-prepend,
.btn.btn-icon-text.btn-xs .btn-icon-append,
.wizard > .actions a.btn-icon-text.btn-xs .btn-icon-append,
div.tox .btn-icon-text.btn-xs.tox-button .btn-icon-append,
.swal2-popup .swal2-actions button.btn-icon-text.btn-xs .btn-icon-append,
div.fc .btn-icon-text.btn-xs.fc-button-primary .btn-icon-append {
  width: 14px;
  height: 14px;
}
.btn.btn-icon-text.btn-sm .btn-icon-prepend, .wizard > .actions a.btn-icon-text.btn-sm .btn-icon-prepend, div.tox .btn-icon-text.btn-sm.tox-button .btn-icon-prepend, .swal2-popup .swal2-actions button.btn-icon-text.btn-sm .btn-icon-prepend, div.fc .btn-icon-text.fc-button-primary .btn-icon-prepend, .btn-group-sm > .btn.btn-icon-text .btn-icon-prepend, .wizard > .actions .btn-group-sm > a.btn-icon-text .btn-icon-prepend, div.tox .btn-group-sm > .btn-icon-text.tox-button .btn-icon-prepend, .swal2-popup .swal2-actions .btn-group-sm > button.btn-icon-text .btn-icon-prepend,
.btn.btn-icon-text.btn-sm .btn-icon-append,
.wizard > .actions a.btn-icon-text.btn-sm .btn-icon-append,
div.tox .btn-icon-text.btn-sm.tox-button .btn-icon-append,
.swal2-popup .swal2-actions button.btn-icon-text.btn-sm .btn-icon-append,
div.fc .btn-icon-text.fc-button-primary .btn-icon-append,
.btn-group-sm > .btn.btn-icon-text .btn-icon-append,
.wizard > .actions .btn-group-sm > a.btn-icon-text .btn-icon-append,
div.tox .btn-group-sm > .btn-icon-text.tox-button .btn-icon-append,
.swal2-popup .swal2-actions .btn-group-sm > button.btn-icon-text .btn-icon-append {
  width: 15px;
  height: 15px;
}
.btn.btn-icon-text.btn-lg .btn-icon-prepend, .wizard > .actions a.btn-icon-text.btn-lg .btn-icon-prepend, div.tox .btn-icon-text.btn-lg.tox-button .btn-icon-prepend, .swal2-popup .swal2-actions button.btn-icon-text.btn-lg .btn-icon-prepend, div.fc .btn-icon-text.btn-lg.fc-button-primary .btn-icon-prepend, .btn-group-lg > .btn.btn-icon-text .btn-icon-prepend, .wizard > .actions .btn-group-lg > a.btn-icon-text .btn-icon-prepend, div.tox .btn-group-lg > .btn-icon-text.tox-button .btn-icon-prepend, .swal2-popup .swal2-actions .btn-group-lg > button.btn-icon-text .btn-icon-prepend, div.fc .btn-group-lg > .btn-icon-text.fc-button-primary .btn-icon-prepend,
.btn.btn-icon-text.btn-lg .btn-icon-append,
.wizard > .actions a.btn-icon-text.btn-lg .btn-icon-append,
div.tox .btn-icon-text.btn-lg.tox-button .btn-icon-append,
.swal2-popup .swal2-actions button.btn-icon-text.btn-lg .btn-icon-append,
div.fc .btn-icon-text.btn-lg.fc-button-primary .btn-icon-append,
.btn-group-lg > .btn.btn-icon-text .btn-icon-append,
.wizard > .actions .btn-group-lg > a.btn-icon-text .btn-icon-append,
div.tox .btn-group-lg > .btn-icon-text.tox-button .btn-icon-append,
.swal2-popup .swal2-actions .btn-group-lg > button.btn-icon-text .btn-icon-append,
div.fc .btn-group-lg > .btn-icon-text.fc-button-primary .btn-icon-append {
  width: 18px;
  height: 18px;
}

.btn-facebook {
  background: #3b5998;
  color: #fff;
}
.btn-facebook:hover, .btn-facebook:focus {
  background: #2d4373;
  color: #fff;
}
.btn-facebook.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4c70ba;
}
.btn-facebook.btn-social-icon-text i {
  background: #3b5998;
  padding: 0.75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-facebook {
  border: 1px solid #3b5998;
  color: #3b5998;
}
.btn-outline-facebook:hover {
  background: #3b5998;
  color: #fff;
}

.btn-twitter {
  background: #1da1f2;
  color: #fff;
}
.btn-twitter:hover, .btn-twitter:focus {
  background: #0c85d0;
  color: #fff;
}
.btn-twitter.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4db5f5;
}
.btn-twitter.btn-social-icon-text i {
  background: #1da1f2;
  padding: 0.75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-twitter {
  border: 1px solid #1da1f2;
  color: #1da1f2;
}
.btn-outline-twitter:hover {
  background: #1da1f2;
  color: #fff;
}

.btn-google {
  background: #dc4e41;
  color: #fff;
}
.btn-google:hover, .btn-google:focus {
  background: #c63224;
  color: #fff;
}
.btn-google.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #e4766c;
}
.btn-google.btn-social-icon-text i {
  background: #dc4e41;
  padding: 0.75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-google {
  border: 1px solid #dc4e41;
  color: #dc4e41;
}
.btn-outline-google:hover {
  background: #dc4e41;
  color: #fff;
}

.btn-youtube {
  background: #f00;
  color: #fff;
}
.btn-youtube:hover, .btn-youtube:focus {
  background: #cc0000;
  color: #fff;
}
.btn-youtube.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ff3333;
}
.btn-youtube.btn-social-icon-text i {
  background: #f00;
  padding: 0.75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-youtube {
  border: 1px solid #f00;
  color: #f00;
}
.btn-outline-youtube:hover {
  background: #f00;
  color: #fff;
}

.btn-vimeo {
  background: #1ab7ea;
  color: #fff;
}
.btn-vimeo:hover, .btn-vimeo:focus {
  background: #1295bf;
  color: #fff;
}
.btn-vimeo.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #49c6ee;
}
.btn-vimeo.btn-social-icon-text i {
  background: #1ab7ea;
  padding: 0.75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-vimeo {
  border: 1px solid #1ab7ea;
  color: #1ab7ea;
}
.btn-outline-vimeo:hover {
  background: #1ab7ea;
  color: #fff;
}

.btn-dribbble {
  background: #ea4c89;
  color: #fff;
}
.btn-dribbble:hover, .btn-dribbble:focus {
  background: #e51e6b;
  color: #fff;
}
.btn-dribbble.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ef7aa7;
}
.btn-dribbble.btn-social-icon-text i {
  background: #ea4c89;
  padding: 0.75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-dribbble {
  border: 1px solid #ea4c89;
  color: #ea4c89;
}
.btn-outline-dribbble:hover {
  background: #ea4c89;
  color: #fff;
}

.btn-github {
  background: #181717;
  color: #fff;
}
.btn-github:hover, .btn-github:focus {
  background: black;
  color: #fff;
}
.btn-github.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #323030;
}
.btn-github.btn-social-icon-text i {
  background: #181717;
  padding: 0.75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-github {
  border: 1px solid #181717;
  color: #181717;
}
.btn-outline-github:hover {
  background: #181717;
  color: #fff;
}

.btn-instagram {
  background: #e4405f;
  color: #fff;
}
.btn-instagram:hover, .btn-instagram:focus {
  background: #d31e40;
  color: #fff;
}
.btn-instagram.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ea6d84;
}
.btn-instagram.btn-social-icon-text i {
  background: #e4405f;
  padding: 0.75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-instagram {
  border: 1px solid #e4405f;
  color: #e4405f;
}
.btn-outline-instagram:hover {
  background: #e4405f;
  color: #fff;
}

.btn-pinterest {
  background: #bd081c;
  color: #fff;
}
.btn-pinterest:hover, .btn-pinterest:focus {
  background: #8c0615;
  color: #fff;
}
.btn-pinterest.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ee0a23;
}
.btn-pinterest.btn-social-icon-text i {
  background: #bd081c;
  padding: 0.75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-pinterest {
  border: 1px solid #bd081c;
  color: #bd081c;
}
.btn-outline-pinterest:hover {
  background: #bd081c;
  color: #fff;
}

.btn-flickr {
  background: #0063dc;
  color: #fff;
}
.btn-flickr:hover, .btn-flickr:focus {
  background: #004ca9;
  color: #fff;
}
.btn-flickr.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #107cff;
}
.btn-flickr.btn-social-icon-text i {
  background: #0063dc;
  padding: 0.75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-flickr {
  border: 1px solid #0063dc;
  color: #0063dc;
}
.btn-outline-flickr:hover {
  background: #0063dc;
  color: #fff;
}

.btn-bitbucket {
  background: #0052cc;
  color: #fff;
}
.btn-bitbucket:hover, .btn-bitbucket:focus {
  background: #003e99;
  color: #fff;
}
.btn-bitbucket.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #0067ff;
}
.btn-bitbucket.btn-social-icon-text i {
  background: #0052cc;
  padding: 0.75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-bitbucket {
  border: 1px solid #0052cc;
  color: #0052cc;
}
.btn-outline-bitbucket:hover {
  background: #0052cc;
  color: #fff;
}

.btn-linkedin {
  background: #0077b5;
  color: #fff;
}
.btn-linkedin:hover, .btn-linkedin:focus {
  background: #005582;
  color: #fff;
}
.btn-linkedin.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #0099e8;
}
.btn-linkedin.btn-social-icon-text i {
  background: #0077b5;
  padding: 0.75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-linkedin {
  border: 1px solid #0077b5;
  color: #0077b5;
}
.btn-outline-linkedin:hover {
  background: #0077b5;
  color: #fff;
}

.btn-inverse-primary {
  background-color: rgba(101, 113, 255, 0.2);
  background-image: none;
  border-color: rgba(101, 113, 255, 0);
}
.btn-inverse-primary:not(.btn-inverse-light) {
  color: #6571ff;
}
.btn-inverse-primary:hover, .btn-inverse-primary.active, .btn-inverse-primary:active, .show > .btn-inverse-primary.dropdown-toggle {
  background-color: rgba(101, 113, 255, 0.3);
  border-color: rgba(101, 113, 255, 0);
}
.btn-inverse-primary.focus, .btn-inverse-primary:focus {
  box-shadow: 0 0 0 3px rgba(101, 113, 255, 0.5);
}
.btn-inverse-primary.disabled, .btn-inverse-primary:disabled {
  color: #6571ff;
  background-color: transparent;
}

.btn-inverse-secondary {
  background-color: rgba(121, 135, 161, 0.2);
  background-image: none;
  border-color: rgba(121, 135, 161, 0);
}
.btn-inverse-secondary:not(.btn-inverse-light) {
  color: #7987a1;
}
.btn-inverse-secondary:hover, .btn-inverse-secondary.active, .btn-inverse-secondary:active, .show > .btn-inverse-secondary.dropdown-toggle {
  background-color: rgba(121, 135, 161, 0.3);
  border-color: rgba(121, 135, 161, 0);
}
.btn-inverse-secondary.focus, .btn-inverse-secondary:focus {
  box-shadow: 0 0 0 3px rgba(121, 135, 161, 0.5);
}
.btn-inverse-secondary.disabled, .btn-inverse-secondary:disabled {
  color: #7987a1;
  background-color: transparent;
}

.btn-inverse-success {
  background-color: rgba(5, 163, 74, 0.2);
  background-image: none;
  border-color: rgba(5, 163, 74, 0);
}
.btn-inverse-success:not(.btn-inverse-light) {
  color: #05a34a;
}
.btn-inverse-success:hover, .btn-inverse-success.active, .btn-inverse-success:active, .show > .btn-inverse-success.dropdown-toggle {
  background-color: rgba(5, 163, 74, 0.3);
  border-color: rgba(5, 163, 74, 0);
}
.btn-inverse-success.focus, .btn-inverse-success:focus {
  box-shadow: 0 0 0 3px rgba(5, 163, 74, 0.5);
}
.btn-inverse-success.disabled, .btn-inverse-success:disabled {
  color: #05a34a;
  background-color: transparent;
}

.btn-inverse-info {
  background-color: rgba(102, 209, 209, 0.2);
  background-image: none;
  border-color: rgba(102, 209, 209, 0);
}
.btn-inverse-info:not(.btn-inverse-light) {
  color: #66d1d1;
}
.btn-inverse-info:hover, .btn-inverse-info.active, .btn-inverse-info:active, .show > .btn-inverse-info.dropdown-toggle {
  background-color: rgba(102, 209, 209, 0.3);
  border-color: rgba(102, 209, 209, 0);
}
.btn-inverse-info.focus, .btn-inverse-info:focus {
  box-shadow: 0 0 0 3px rgba(102, 209, 209, 0.5);
}
.btn-inverse-info.disabled, .btn-inverse-info:disabled {
  color: #66d1d1;
  background-color: transparent;
}

.btn-inverse-warning {
  background-color: rgba(251, 188, 6, 0.2);
  background-image: none;
  border-color: rgba(251, 188, 6, 0);
}
.btn-inverse-warning:not(.btn-inverse-light) {
  color: #fbbc06;
}
.btn-inverse-warning:hover, .btn-inverse-warning.active, .btn-inverse-warning:active, .show > .btn-inverse-warning.dropdown-toggle {
  background-color: rgba(251, 188, 6, 0.3);
  border-color: rgba(251, 188, 6, 0);
}
.btn-inverse-warning.focus, .btn-inverse-warning:focus {
  box-shadow: 0 0 0 3px rgba(251, 188, 6, 0.5);
}
.btn-inverse-warning.disabled, .btn-inverse-warning:disabled {
  color: #fbbc06;
  background-color: transparent;
}

.btn-inverse-danger {
  background-color: rgba(255, 51, 102, 0.2);
  background-image: none;
  border-color: rgba(255, 51, 102, 0);
}
.btn-inverse-danger:not(.btn-inverse-light) {
  color: #ff3366;
}
.btn-inverse-danger:hover, .btn-inverse-danger.active, .btn-inverse-danger:active, .show > .btn-inverse-danger.dropdown-toggle {
  background-color: rgba(255, 51, 102, 0.3);
  border-color: rgba(255, 51, 102, 0);
}
.btn-inverse-danger.focus, .btn-inverse-danger:focus {
  box-shadow: 0 0 0 3px rgba(255, 51, 102, 0.5);
}
.btn-inverse-danger.disabled, .btn-inverse-danger:disabled {
  color: #ff3366;
  background-color: transparent;
}

.btn-inverse-light {
  background-color: rgba(233, 236, 239, 0.2);
  background-image: none;
  border-color: rgba(233, 236, 239, 0);
}
.btn-inverse-light:not(.btn-inverse-light) {
  color: #e9ecef;
}
.btn-inverse-light:hover, .btn-inverse-light.active, .btn-inverse-light:active, .show > .btn-inverse-light.dropdown-toggle {
  background-color: rgba(233, 236, 239, 0.3);
  border-color: rgba(233, 236, 239, 0);
}
.btn-inverse-light.focus, .btn-inverse-light:focus {
  box-shadow: 0 0 0 3px rgba(233, 236, 239, 0.5);
}
.btn-inverse-light.disabled, .btn-inverse-light:disabled {
  color: #e9ecef;
  background-color: transparent;
}

.btn-inverse-dark {
  background-color: rgba(6, 12, 23, 0.2);
  background-image: none;
  border-color: rgba(6, 12, 23, 0);
}
.btn-inverse-dark:not(.btn-inverse-light) {
  color: #060c17;
}
.btn-inverse-dark:hover, .btn-inverse-dark.active, .btn-inverse-dark:active, .show > .btn-inverse-dark.dropdown-toggle {
  background-color: rgba(6, 12, 23, 0.3);
  border-color: rgba(6, 12, 23, 0);
}
.btn-inverse-dark.focus, .btn-inverse-dark:focus {
  box-shadow: 0 0 0 3px rgba(6, 12, 23, 0.5);
}
.btn-inverse-dark.disabled, .btn-inverse-dark:disabled {
  color: #060c17;
  background-color: transparent;
}

.card {
  box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
  -webkit-box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
  -moz-box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
  -ms-box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
}
.card .card-body + .card-body {
  padding-top: 1rem;
}
.card .card-title {
  text-transform: uppercase;
  font-size: 0.875rem;
  font-weight: 500;
}

.card-group {
  box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
}
.card-group .card {
  box-shadow: none;
}

.dropdown .dropdown-toggle:after,
.btn-group .dropdown-toggle:after {
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-bottom: 0;
  font: normal normal normal 24px/1 "feather";
  content: "\e842";
  width: auto;
  height: auto;
  vertical-align: middle;
  line-height: 0.625rem;
  font-size: 0.875rem;
}
.dropdown.dropup .dropdown-toggle::after,
.btn-group.dropup .dropdown-toggle::after {
  content: "\e845";
}
.dropdown.dropstart .dropdown-toggle::before,
.btn-group.dropstart .dropdown-toggle::before {
  border: 0;
  font: normal normal normal 24px/1 "feather";
  content: "\e843";
  width: auto;
  height: auto;
  vertical-align: middle;
  line-height: 0.625rem;
  font-size: 0.875rem;
}
.dropdown.dropend .dropdown-toggle::after,
.btn-group.dropend .dropdown-toggle::after {
  content: "\e844";
}

.dropdown-menu, .tt-menu {
  padding: 0.35rem;
  margin-top: 0;
  box-shadow: 0 5px 10px 0 rgba(183, 192, 206, 0.2);
}

.dropdown-item, .tt-menu .tt-suggestion {
  font-size: 0.812rem;
  padding: 0.25rem 0.875rem;
  border-radius: 2px;
}
.dropdown-item i, .tt-menu .tt-suggestion i, .dropdown-item svg, .tt-menu .tt-suggestion svg {
  color: #7987a1;
}
.dropdown-item:not(.dropdown-item:active, .dropdown-item.active):hover, .tt-menu .tt-suggestion:not(.dropdown-item:active, .dropdown-item.active):hover {
  background-color: rgba(101, 113, 255, 0.1);
}
.dropdown-item:not(.dropdown-item:active, .dropdown-item.active):hover, .tt-menu .tt-suggestion:not(.dropdown-item:active, .dropdown-item.active):hover, .dropdown-item:not(.dropdown-item:active, .dropdown-item.active):hover i, .tt-menu .tt-suggestion:not(.dropdown-item:active, .dropdown-item.active):hover i, .dropdown-item:not(.dropdown-item:active, .dropdown-item.active):hover svg, .tt-menu .tt-suggestion:not(.dropdown-item:active, .dropdown-item.active):hover svg {
  color: #6571ff;
}
.dropdown-item:active i, .tt-menu .tt-suggestion:active i, .dropdown-item:active svg, .tt-menu .tt-suggestion:active svg, .dropdown-item.active i, .tt-menu .active.tt-suggestion i, .dropdown-item.active svg, .tt-menu .active.tt-suggestion svg {
  color: #fff;
}

.form-control-xs,
.form-select-xs {
  padding: 0.313rem 0.8rem;
  font-size: 0.75rem;
}

.form-control-xs + .input-group-text {
  padding-top: 0.313rem;
  padding-bottom: 0.313rem;
}

.form-check-input {
  margin-top: 0.13em;
}

.input-group-text svg {
  width: 18px;
  height: 18px;
}

[type=tel],
[type=url],
[type=email],
[type=number] {
  direction: ltr;
}

.icons-list {
  border-left: 1px solid #e9ecef;
  border-top: 1px solid #e9ecef;
}
.icons-list > div {
  border-bottom: 1px solid #e9ecef;
  border-right: 1px solid #e9ecef;
  background: #f9fafb;
  display: flex;
  align-items: center;
  padding: 15px 20px;
  font-weight: 400;
  transition: all 0.3s ease-in-out;
}
.icons-list > div i {
  display: inline-block;
  font-size: 20px;
  text-align: left;
  margin-right: 12px;
  color: #7987a1;
  transition: all 0.3s ease-in-out;
}
.icons-list > div svg {
  width: 20px;
  margin-right: 12px;
  color: #7987a1;
  transition: all 0.3s ease-in-out;
}
.icons-list > div:hover {
  cursor: text;
}
.icons-list > div:hover i,
.icons-list > div:hover svg {
  transform: scale(1.3);
  color: #6571ff;
}

.nav.nav-tabs .nav-item .nav-link {
  border-color: #e9ecef #e9ecef #dee2e6;
  color: #000;
  background-color: #f8f9fa;
  cursor: pointer;
}
.nav.nav-tabs .nav-item .nav-link.active {
  border-color: #dee2e6 #dee2e6 #fff;
  color: #6571ff;
  background: #fff;
}
.nav.nav-tabs .nav-item .nav-link.disabled {
  background-color: transparent;
  color: #7987a1;
  border-color: rgba(233, 236, 239, 0.7) rgba(233, 236, 239, 0.7) transparent;
}
.nav.nav-tabs.nav-tabs-vertical {
  border-bottom: 0;
}
.nav.nav-tabs.nav-tabs-vertical .nav-link {
  width: 100%;
  border: 1px solid transparent;
  border-radius: 0;
  border-color: #e9ecef #e9ecef #dee2e6;
  color: #000;
  background-color: #f8f9fa;
}
.nav.nav-tabs.nav-tabs-vertical .nav-link:first-child {
  border-radius: 0.25rem 0 0 0;
}
.nav.nav-tabs.nav-tabs-vertical .nav-link:last-child {
  border-radius: 0 0 0 0.25rem;
}
.nav.nav-tabs.nav-tabs-vertical .nav-link.active {
  background-color: #fff;
  color: #6571ff;
  border-right-color: transparent;
}
.nav.nav-tabs.nav-tabs-line .nav-link {
  border: 0;
  background-color: transparent;
}
.nav.nav-tabs.nav-tabs-line .nav-link.active {
  border-bottom: 2px solid #6571ff;
}

.tab-content.tab-content-vertical {
  height: 100%;
}

.pagination .page-item .page-link svg {
  width: 18px;
  height: 18px;
}
.pagination.pagination-separated .page-item {
  margin-left: 2px;
  margin-right: 2px;
}
.pagination.pagination-separated .page-item:first-child {
  margin-left: 0;
}
.pagination.pagination-separated .page-item:last-child {
  margin-right: 0;
}
.pagination.pagination-rounded .page-item {
  margin-right: 2px;
  margin-left: 2px;
}
.pagination.pagination-rounded .page-item .page-link {
  border-radius: 50px;
}

.table {
  margin-bottom: 0;
}
.table > :not(:last-child) > :last-child > * {
  border-bottom-color: inherit;
}
.table thead th {
  border-top: 0;
  font-weight: 500;
  font-size: 12px;
  text-transform: uppercase;
  color: #7987a1;
}
.table thead th i {
  margin-left: 0.325rem;
}
.table th,
.table td {
  white-space: nowrap;
}
.table td img {
  width: 36px;
  height: 36px;
  border-radius: 100%;
}

.timeline {
  border-left: 3px solid #6571ff;
  border-bottom-right-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
  background: rgba(101, 113, 255, 0.2);
  margin: 0 auto;
  position: relative;
  padding: 50px;
  list-style: none;
  max-width: 40%;
}
@media (max-width: 767px) {
  .timeline {
    max-width: 98%;
    padding: 25px;
  }
}
.timeline .event {
  border-bottom: 1px dashed #e9ecef;
  padding-bottom: 25px;
  margin-bottom: 25px;
  position: relative;
}
@media (max-width: 767px) {
  .timeline .event {
    padding-top: 30px;
  }
}
.timeline .event .title {
  font-weight: 500;
  font-size: 1rem;
  margin-bottom: 10px;
}
.timeline .event:last-of-type {
  padding-bottom: 0;
  margin-bottom: 0;
  border: none;
}
.timeline .event:before, .timeline .event:after {
  position: absolute;
  display: block;
  top: 0;
}
.timeline .event:before {
  left: -207px;
  content: attr(data-date);
  text-align: right;
  font-weight: 500;
  font-size: 0.9em;
  min-width: 120px;
}
@media (max-width: 767px) {
  .timeline .event:before {
    left: 0px;
    text-align: left;
  }
}
.timeline .event:after {
  box-shadow: 0 0 0 3px #6571ff;
  left: -55.8px;
  background: #fff;
  border-radius: 50%;
  height: 9px;
  width: 9px;
  content: "";
  top: 5px;
}
@media (max-width: 767px) {
  .timeline .event:after {
    left: -31.8px;
  }
}

.chat-wrapper {
  height: calc(100vh - 60px - 102px);
}
@media (max-width: 991px) {
  .chat-wrapper {
    min-height: 100%;
  }
}
@media (max-width: 991px) {
  .chat-wrapper {
    height: 100%;
  }
}
@media (min-width: 992px) {
  .chat-wrapper .chat-aside {
    padding-right: 23px;
  }
}
.chat-wrapper .chat-aside .aside-body .tab-content .tab-pane {
  position: relative;
  max-height: calc(100vh - 385px);
}
.chat-wrapper .chat-aside .aside-body .tab-content .tab-pane .chat-list .chat-item a > div {
  padding-top: 11px;
  padding-bottom: 11px;
}
@media (max-width: 991px) {
  .chat-wrapper .chat-content {
    position: absolute;
    background: #fff;
    left: 0;
    bottom: -1px;
    top: 0;
    right: 0;
    display: none;
  }
  .chat-wrapper .chat-content.show {
    display: block;
  }
}
.chat-wrapper .chat-content .chat-header {
  padding: 0 10px;
}
.chat-wrapper .chat-content .chat-body {
  position: relative;
  max-height: calc(100vh - 340px);
  margin-top: 20px;
  margin-bottom: 20px;
}
@media (max-width: 767px) {
  .chat-wrapper .chat-content .chat-body {
    max-height: calc(100vh - 315px);
  }
}
@media (max-width: 991px) {
  .chat-wrapper .chat-content .chat-body {
    max-height: calc(100vh - 342px);
  }
}
.chat-wrapper .chat-content .chat-body .messages {
  padding: 0 10px;
  list-style-type: none;
}
.chat-wrapper .chat-content .chat-body .messages .message-item {
  display: flex;
  max-width: 80%;
  margin-bottom: 20px;
}
@media (max-width: 767px) {
  .chat-wrapper .chat-content .chat-body .messages .message-item {
    max-width: 95%;
  }
}
.chat-wrapper .chat-content .chat-body .messages .message-item .content .bubble {
  position: relative;
  padding: 7px 15px;
  margin-bottom: 4px;
  width: -moz-fit-content;
  width: fit-content;
}
.chat-wrapper .chat-content .chat-body .messages .message-item .content span {
  font-size: 12px;
  color: #7987a1;
}
.chat-wrapper .chat-content .chat-body .messages .message-item.friend img {
  order: 1;
  margin-right: 15px;
}
.chat-wrapper .chat-content .chat-body .messages .message-item.friend .content {
  order: 2;
}
.chat-wrapper .chat-content .chat-body .messages .message-item.friend .content .bubble {
  background: rgba(101, 113, 255, 0.1);
  border-radius: 0 5px 5px;
}
.chat-wrapper .chat-content .chat-body .messages .message-item.friend .content .bubble::before {
  content: "";
  width: 0;
  height: 0;
  position: absolute;
  left: -10px;
  top: 0;
  border-top: 5px solid rgba(101, 113, 255, 0.1);
  border-bottom: 5px solid transparent;
  border-left: 5px solid transparent;
  border-right: 5px solid rgba(101, 113, 255, 0.1);
}
.chat-wrapper .chat-content .chat-body .messages .message-item.me {
  margin-left: auto;
}
.chat-wrapper .chat-content .chat-body .messages .message-item.me img {
  order: 2;
  margin-left: 15px;
}
.chat-wrapper .chat-content .chat-body .messages .message-item.me .content {
  order: 1;
  margin-left: auto;
}
.chat-wrapper .chat-content .chat-body .messages .message-item.me .content .bubble {
  background: rgba(102, 209, 209, 0.1);
  border-radius: 5px 0 5px 5px;
  margin-left: auto;
}
.chat-wrapper .chat-content .chat-body .messages .message-item.me .content .bubble::before {
  content: "";
  width: 0;
  height: 0;
  position: absolute;
  right: -10px;
  top: 0;
  border-top: 5px solid rgba(102, 209, 209, 0.1);
  border-bottom: 5px solid transparent;
  border-left: 5px solid rgba(102, 209, 209, 0.1);
  border-right: 5px solid transparent;
}
.chat-wrapper .chat-content .chat-body .messages .message-item.me .content span {
  text-align: right;
  display: block;
}
.chat-wrapper figure {
  position: relative;
}
.chat-wrapper figure .status {
  width: 11px;
  height: 11px;
  background: #7987a1;
  position: absolute;
  bottom: 0px;
  right: -2px;
  border-radius: 50%;
  border: 2px solid #fff;
}
.chat-wrapper figure .status.online {
  background: #05a34a;
}
.chat-wrapper figure .status.offline {
  background: #7987a1;
}

.auth-page .auth-side-wrapper {
  width: 100%;
  height: 100%;
  background-size: cover;
}

.email-aside-nav.collapse {
  display: block;
}
@media (max-width: 991px) {
  .email-aside-nav.collapse {
    display: none;
  }
}
@media (max-width: 991px) {
  .email-aside-nav.collapse.show {
    display: block;
  }
}
.email-aside-nav .nav-item {
  border-radius: 0.2rem;
}
.email-aside-nav .nav-item .nav-link {
  color: #000;
}
.email-aside-nav .nav-item .nav-link svg {
  color: #7987a1;
}
.email-aside-nav .nav-item.active, .email-aside-nav .nav-item:hover {
  background: rgba(101, 113, 255, 0.1);
}
.email-aside-nav .nav-item.active .nav-link, .email-aside-nav .nav-item.active .nav-link svg, .email-aside-nav .nav-item:hover .nav-link, .email-aside-nav .nav-item:hover .nav-link svg {
  color: #6571ff;
}

.email-list-item {
  display: flex;
  align-items: center;
  border-bottom: 1px solid #e9ecef;
  padding: 10px 20px;
  cursor: pointer;
}
.email-list-item:hover {
  background: rgba(101, 113, 255, 0.08);
}
.email-list-item:last-child {
  margin-bottom: 5px;
}
.email-list-item .email-list-actions {
  width: 40px;
  vertical-align: top;
  display: table-cell;
}
.email-list-item .email-list-actions .form-check {
  margin-bottom: 0;
}
.email-list-item .email-list-actions .favorite {
  display: block;
  padding-left: 1px;
  line-height: 15px;
}
.email-list-item .email-list-actions .favorite span svg {
  width: 14px;
  color: #7987a1;
}
.email-list-item .email-list-actions .favorite:hover span {
  color: #8d8d8d;
}
.email-list-item .email-list-actions .favorite.active span svg {
  color: #fbbc06;
}
.email-list-item .email-list-detail {
  width: calc(100% - 40px);
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-grow: 1;
}
.email-list-item .email-list-detail .content {
  overflow: hidden;
}
.email-list-item .email-list-detail .content .from {
  display: block;
  margin: 0 0 1px 0;
  color: #000;
}
.email-list-item .email-list-detail .content .msg {
  width: 97%;
  color: #7987a1;
  font-size: 0.8rem;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.email-list-item .email-list-detail .date {
  color: #000;
  white-space: nowrap;
}
.email-list-item .email-list-detail .date .icon svg {
  width: 14px;
  margin-right: 7px;
  color: #3d405c;
}
.email-list-item.email-list-item--unread {
  background-color: rgba(101, 113, 255, 0.09);
}
.email-list-item.email-list-item--unread .content .from {
  font-weight: 500;
}
.email-list-item.email-list-item--unread .content .msg {
  font-weight: 700;
}

.ace_editor {
  border-radius: 0.25rem;
  margin: auto;
  height: 300px;
  width: 100%;
  font: 14px/normal SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}
.ace_editor .ace_content {
  font-size: 0.875rem;
}

div.apexcharts-canvas {
  /*rtl:ignore*/
  direction: ltr;
}
div.apexcharts-canvas .apexcharts-menu {
  background: #fff !important;
  color: #000;
  border-color: #e9ecef;
}
div.apexcharts-canvas .apexcharts-zoom-icon svg,
div.apexcharts-canvas .apexcharts-zoomin-icon svg,
div.apexcharts-canvas .apexcharts-zoomout-icon svg,
div.apexcharts-canvas .apexcharts-reset-icon svg,
div.apexcharts-canvas .apexcharts-pan-icon svg,
div.apexcharts-canvas .apexcharts-selection-icon svg,
div.apexcharts-canvas .apexcharts-menu-icon svg,
div.apexcharts-canvas .apexcharts-toolbar-custom-icon svg {
  fill: #7987a1;
}
div.apexcharts-canvas .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
div.apexcharts-canvas .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
  display: flex;
  align-items: center;
}
div.apexcharts-canvas .apexcharts-legend-marker {
  margin-right: 3px;
}
div.apexcharts-canvas .apexcharts-tooltip {
  background: rgba(255, 255, 255, 0.8);
  color: #000;
  box-shadow: 0 5px 10px 0 rgba(183, 192, 206, 0.2);
  border-radius: 0.25rem;
  border: 1px solid #f2f4f9;
}
div.apexcharts-canvas .apexcharts-tooltip .apexcharts-tooltip-title {
  border-color: #e9ecef;
  background-color: #fff;
}
div.apexcharts-canvas .apexcharts-tooltip * {
  font-family: "Roboto", Helvetica, sans-serif !important;
}
div.apexcharts-canvas .apexcharts-tooltip-series-group.apexcharts-active,
div.apexcharts-canvas .apexcharts-tooltip-series-group:last-child {
  padding: 0 10px;
}
div.apexcharts-canvas .apexcharts-tooltip-text-y-value,
div.apexcharts-canvas .apexcharts-tooltip-text-goals-value,
div.apexcharts-canvas .apexcharts-tooltip-text-z-value {
  margin-left: 0;
}
div.apexcharts-canvas .apexcharts-tooltip-title {
  margin-bottom: 0;
}
div.apexcharts-canvas .apexcharts-xaxistooltip,
div.apexcharts-canvas .apexcharts-yaxistooltip {
  background: #fff;
  color: #000;
  border-color: #f2f4f9;
}
div.apexcharts-canvas .apexcharts-xaxistooltip-bottom::before {
  border-bottom-color: #f2f4f9;
}
div.apexcharts-canvas .apexcharts-xaxistooltip-bottom::after {
  border-bottom-color: rgba(255, 255, 255, 0.8);
}
div.apexcharts-canvas .apexcharts-yaxistooltip-left:before,
div.apexcharts-canvas .apexcharts-yaxistooltip-right:before {
  border-left-color: #f2f4f9;
}
div.apexcharts-canvas .apexcharts-yaxistooltip-left:after,
div.apexcharts-canvas .apexcharts-yaxistooltip-right:after {
  border-left-color: rgba(255, 255, 255, 0.8);
}

@media (max-width: 767px) {
  .dataTables_wrapper.dt-bootstrap4 .dataTables_length {
    text-align: left;
  }
}
.dataTables_wrapper.dt-bootstrap4 .dataTables_length select {
  margin-left: 10px;
  margin-right: 10px;
}
@media (max-width: 767px) {
  .dataTables_wrapper.dt-bootstrap4 .dataTables_filter {
    text-align: left;
    margin-left: -19px;
  }
}
div.table-responsive > div.dataTables_wrapper > div.row > div[class^=col-]:first-child {
  padding-left: 0;
  padding-right: 12px;
}

div.table-responsive > div.dataTables_wrapper > div.row > div[class^=col-]:last-child {
  padding-right: 0;
  padding-left: 12px;
}

.dropify-wrapper {
  border: 1px solid #e9ecef;
  border-radius: 0.25rem;
}
.dropify-wrapper .dropify-message span.file-icon {
  font-size: 0.875rem;
  color: #7987a1;
}
.dropify-wrapper .dropify-message span.file-icon::before {
  font-family: feather;
  content: "\e8e3";
  font-size: 24px;
}

.dropzone {
  overflow: auto;
  border: 1px solid #e9ecef;
  border-radius: 0.25rem;
  max-height: 200px;
  padding: 0;
}
@media (min-width: 1400px) {
  .dropzone {
    min-height: 200px;
  }
}
.dropzone.dz-clickable .dz-message {
  margin-top: 65px;
}
.dropzone .dz-preview.dz-image-preview .dz-image, .dropzone .dz-preview.dz-file-preview .dz-image {
  border-radius: 0.25rem;
}

.form-control.flatpickr-input, .flatpickr-input.typeahead.tt-input,
.flatpickr-input.typeahead.tt-hint, .select2-container--default .select2-search--dropdown .flatpickr-input.select2-search__field {
  background-color: #fff;
}

.flatpickr-day.selected,
.flatpickr-day.startRange,
.flatpickr-day.endRange,
.flatpickr-day.selected.inRange,
.flatpickr-day.startRange.inRange,
.flatpickr-day.endRange.inRange,
.flatpickr-day.selected:focus,
.flatpickr-day.startRange:focus,
.flatpickr-day.endRange:focus,
.flatpickr-day.selected:hover,
.flatpickr-day.startRange:hover,
.flatpickr-day.endRange:hover,
.flatpickr-day.selected.prevMonthDay,
.flatpickr-day.startRange.prevMonthDay,
.flatpickr-day.endRange.prevMonthDay,
.flatpickr-day.selected.nextMonthDay,
.flatpickr-day.startRange.nextMonthDay,
.flatpickr-day.endRange.nextMonthDay {
  background: #6571ff;
  border-color: #6571ff;
}

.flatpickr-months {
  padding: 0 1rem;
  padding-top: 0.5rem;
}

.flatpickr-months .flatpickr-prev-month.flatpickr-prev-month,
.flatpickr-months .flatpickr-next-month.flatpickr-prev-month {
  left: 11px;
  right: auto !important;
  top: 8px;
}

.flatpickr-months .flatpickr-prev-month.flatpickr-next-month,
.flatpickr-months .flatpickr-next-month.flatpickr-next-month {
  right: 11px;
  left: auto !important;
  top: 8px;
}

.flatpickr-months .flatpickr-prev-month:hover svg,
.flatpickr-months .flatpickr-next-month:hover svg {
  fill: #6571ff;
}

.flatpickr-months .flatpickr-month {
  height: 42px;
}

.flatpickr-current-month .flatpickr-monthDropdown-months {
  font-size: 1rem;
  border-radius: 0.25rem;
  padding: 0.3rem 0.5rem;
}

.flatpickr-weekdays {
  padding: 0 10px;
}

.dayContainer {
  padding: 0 10px 10px;
}

div.fc {
  --fc-button-active-bg-color: #6571ff;
  --fc-button-active-border-color: #6571ff;
  --fc-border-color: #e9ecef;
}
div.fc .fc-button .fc-icon {
  font-size: 1.3em;
}
div.fc .fc-button-primary:focus,
div.fc .fc-button-primary:not(:disabled).fc-button-active:focus,
div.fc .fc-button-primary:not(:disabled):active:focus {
  box-shadow: none;
}
div.fc .fc-button-primary:disabled {
  border-color: #6571ff;
}
@media (max-width: 767px) {
  div.fc .fc-toolbar {
    flex-direction: column;
  }
  div.fc .fc-toolbar .fc-toolbar-chunk {
    margin-bottom: 12px;
  }
}
div.fc .fc-daygrid-day-number,
div.fc .fc-col-header-cell-cushion {
  color: #000;
}
div.fc .fc-daygrid-event {
  padding: 4px;
}
div.fc .fc-daygrid-day.fc-day-today {
  background-color: rgba(101, 113, 255, 0.2);
}
div.fc .fc-list-event:hover td {
  background-color: rgba(101, 113, 255, 0.2);
}
div.fc .fc-list-day-text,
div.fc .fc-list-day-side-text {
  color: #000;
}

.fc-timegrid-event-harness-inset .fc-timegrid-event,
.fc-timegrid-event.fc-event-mirror,
.fc-timegrid-more-link {
  box-shadow: none;
}

.fc-theme-standard .fc-popover {
  background-color: #fff;
  border-color: #f2f4f9;
  box-shadow: 0 5px 10px 0 rgba(183, 192, 206, 0.2);
}
.fc-theme-standard .fc-popover .fc-popover-header {
  background-color: #7987a1;
}

.fc-theme-standard .fc-list-day-cushion {
  --fc-neutral-bg-color: #f9fafb;
}

.fc-h-event.fc-daygrid-block-event {
  margin-bottom: 10px;
  padding: 8px;
  border-radius: 2px;
  background: rgba(101, 113, 255, 0.2);
  border: 0;
  border-left: 3px solid #6571ff;
  color: #000;
  font-weight: 500;
}

.fc-event.fc-h-event {
  --fc-event-text-color: #000;
  border-left-width: 3px;
  font-weight: 700;
}

.flot-chart-wrapper .flot-chart {
  width: 100%;
  position: relative;
  max-width: none;
  height: 400px;
}
@media (max-width: 767px) {
  .flot-chart-wrapper {
    height: 200px;
    min-height: 200px;
  }
  .flot-chart-wrapper .flot-chart {
    height: 100%;
  }
}

.flot-text .flot-x-axis > div,
.flot-text .flot-x-axis .flot-tick-label,
.flot-text .flot-y-axis > div,
.flot-text .flot-y-axis .flot-tick-label {
  color: #000;
}

.peity-custom svg {
  margin-right: 10px;
}

.ps__thumb-x {
  background-color: #d9d9d9;
  height: 4px;
}

.ps__rail-x.ps--clicking .ps__thumb-x,
.ps__rail-x:focus > .ps__thumb-x,
.ps__rail-x:hover > .ps__thumb-x {
  background-color: #b3b3b3;
  height: 6px;
}

.ps__rail-x {
  height: 10px;
}

.ps__thumb-y {
  background-color: #d9d9d9;
  width: 4px;
  right: 2px !important;
  left: auto !important;
}

.ps__rail-y.ps--clicking .ps__thumb-y,
.ps__rail-y:focus > .ps__thumb-y,
.ps__rail-y:hover > .ps__thumb-y {
  background-color: #b3b3b3;
  width: 6px;
}

.ps__rail-y {
  width: 10px;
  right: 0 !important;
  left: auto !important;
}

.ps .ps__rail-x.ps--clicking,
.ps .ps__rail-x:focus,
.ps .ps__rail-x:hover,
.ps .ps__rail-y.ps--clicking,
.ps .ps__rail-y:focus,
.ps .ps__rail-y:hover {
  background-color: #e9ecef;
}

.swal2-popup {
  font-size: 0.875rem;
}
.swal2-popup .swal2-title {
  font-size: 25px;
  line-height: 1;
  font-weight: 500;
  color: #000;
  margin-bottom: 0;
}
.swal2-popup .swal2-html-container {
  font-size: 0.875rem;
  color: #7987a1;
  font-weight: initial;
  margin-top: 11px;
  text-decoration: none;
}
.swal2-popup .swal2-actions button svg {
  width: 16px;
  height: 16px;
}
.swal2-popup .swal2-close {
  font-size: 22px;
}
.swal2-popup .swal2-close:focus {
  box-shadow: none;
}
.swal2-popup .swal2-timer-progress-bar {
  background: #7987a1;
}

.select2-container--default .select2-selection--single,
.select2-container--default .select2-selection--multiple {
  border: 1px solid #e9ecef;
  border-radius: 0.25rem;
}
.select2-container--focus.select2-container--default .select2-selection--single, .select2-container--focus.select2-container--default .select2-selection--multiple {
  border: 1px solid #ced4da;
}

.select2-dropdown {
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background-color: #6571ff;
}

.select2-container .select2-selection--single,
.select2-container .select2-selection--multiple {
  height: auto;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
  line-height: 1.5;
  padding: 0.469rem 0.8rem;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
  height: 100%;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
  left: 0;
}

.select2-container--default .select2-selection--multiple {
  min-height: 38px;
}
.select2-container--default .select2-selection--multiple .select2-selection__rendered {
  padding: 0 6px;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
  background-color: #6571ff;
  color: #fff;
  border-color: #6571ff;
  padding: 1px 8px;
  border-radius: 0.15rem;
  margin-top: 5px;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
  color: #fff;
  opacity: 0.5;
}

.select2-container .select2-search--inline {
  margin-top: 3px;
}

.EasyMDEContainer .CodeMirror {
  background: #fff;
  border: 1px solid #e9ecef;
  color: #000;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

.editor-toolbar {
  border: 1px solid #e9ecef;
  border-bottom: 0;
  border-radius: 0.25rem 0.25rem 0 0;
}
.editor-toolbar, .editor-toolbar:hover {
  opacity: 1;
}
.editor-toolbar button {
  color: rgba(0, 0, 0, 0.7) !important;
}
.editor-toolbar button:hover {
  background: #e9ecef;
  border: none;
}
.editor-toolbar i.separator {
  border-left: 1px solid #e9ecef;
  border-right: 1px solid #e9ecef;
}

.EasyMDEContainer .CodeMirror-fullscreen,
.editor-toolbar.fullscreen,
.editor-preview-side {
  z-index: 999;
}

.editor-preview-side {
  border-color: #e9ecef;
}

.editor-toolbar button.active, .editor-toolbar button:hover {
  background: #e9ecef;
  border-color: transparent;
}

.editor-statusbar {
  padding: 0 10px;
  border: 1px solid #e9ecef;
  border-top-color: transparent;
  border-bottom-left-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

div.tagsinput {
  padding: 6px 6px 1px;
  border-color: #e9ecef;
  border-radius: 0.25rem;
}
div.tagsinput span.tag {
  background: #6571ff;
  color: #fff;
  border: 0;
  padding: 3px 7px;
  font-family: inherit;
  border-radius: 0.15rem;
  margin-bottom: 4px;
  float: left;
  margin-right: 0;
  margin-left: 5px;
}
div.tagsinput span.tag a {
  font-size: 13px;
  font-weight: 500;
  color: #fff;
  opacity: 0.5;
}
div.tagsinput #tags_addTag {
  float: left;
  margin-left: 5px;
}
div.tagsinput input {
  margin: 0;
  padding: 1px;
  border-radius: 0.25rem;
}

.tox.tox-tinymce {
  border: 1px solid #e9ecef;
  border-radius: 0.25rem;
}
.tox.tox-tinymce .tox-menubar,
.tox.tox-tinymce .tox-toolbar-overlord,
.tox.tox-tinymce .tox-toolbar,
.tox.tox-tinymce .tox-toolbar__overflow,
.tox.tox-tinymce .tox-toolbar__primary {
  background-color: #fff;
  background-image: none;
  border-bottom: 1px solid #e9ecef;
}
.tox.tox-tinymce .tox-toolbar-overlord {
  border-bottom: none;
}
.tox.tox-tinymce:not(.tox-tinymce-inline) .tox-editor-header {
  padding: 0;
  box-shadow: none;
}
.tox.tox-tinymce .tox-edit-area__iframe {
  background-color: #fff;
}
.tox.tox-tinymce.tox:not([dir=rtl]) .tox-toolbar__group:not(:last-of-type) {
  border-right-color: #e9ecef;
  border-left-color: #e9ecef;
}
.tox.tox-tinymce .tox-statusbar {
  background-color: #fff;
  border-color: #e9ecef;
  color: #7987a1;
}
.tox.tox-tinymce .tox-statusbar a,
.tox.tox-tinymce .tox-statusbar__path-item,
.tox.tox-tinymce .tox-statusbar__wordcount {
  color: #7987a1;
}
.tox.tox-tinymce .tox-mbtn {
  color: #000;
}
.tox.tox-tinymce .tox-tbtn {
  color: rgba(0, 0, 0, 0.7);
}
.tox.tox-tinymce .tox-tbtn:hover {
  background: #e9ecef;
  color: #000;
}
.tox.tox-tinymce .tox-tbtn:hover svg {
  fill: #000;
}
.tox.tox-tinymce .tox-tbtn:focus:not(.tox-tbtn--disabled) {
  color: #000;
}
.tox.tox-tinymce .tox-mbtn:hover:not(:disabled):not(.tox-mbtn--active) {
  background: #e9ecef;
  color: #000;
}
.tox.tox-tinymce .tox-mbtn:focus:not(:disabled),
.tox.tox-tinymce .tox-mbtn--active {
  background: #e9ecef;
  color: #000;
}
.tox.tox-tinymce .tox-tbtn svg {
  fill: rgba(0, 0, 0, 0.7);
}
.tox.tox-tinymce .tox-tbtn--disabled svg,
.tox.tox-tinymce .tox-tbtn--disabled:hover svg,
.tox.tox-tinymce .tox-tbtn:disabled svg,
.tox.tox-tinymce .tox-tbtn:disabled:hover svg {
  fill: #e9ecef;
}
.tox.tox-tinymce .tox-split-button:hover {
  box-shadow: 0 0 0 1px #e9ecef inset;
}
.tox.tox-tinymce .tox-split-button:focus {
  background: #e9ecef;
}
.tox.tox-tinymce .tox-tbtn--enabled,
.tox.tox-tinymce .tox-tbtn--enabled:hover,
.tox.tox-tinymce .tox-tbtn:focus {
  background: #e9ecef;
}

div.tox .tox-menu {
  background-color: #fff;
  border-color: #f2f4f9;
}
div.tox .tox-collection__item {
  color: #000;
}
div.tox .tox-collection--list .tox-collection__item--enabled {
  background-color: #6571ff;
  color: #fff;
}
div.tox .tox-collection--list .tox-collection__group {
  border-color: #e9ecef;
}
div.tox .tox-collection--toolbar .tox-collection__item--active {
  background-color: #e9ecef;
}
div.tox .tox-collection--list .tox-collection__item--active {
  background-color: #e9ecef;
}
div.tox .tox-collection--toolbar .tox-collection__item--active:not(.tox-collection__item--state-disabled) {
  color: #000;
}
div.tox .tox-collection--list .tox-collection__item--active:not(.tox-collection__item--state-disabled) {
  color: #000;
}
div.tox .tox-dialog-wrap__backdrop {
  background-color: rgba(0, 0, 0, 0.75);
}
div.tox .tox-dialog,
div.tox .tox-dialog__header,
div.tox .tox-dialog__footer {
  background-color: #fff;
  border-color: #e9ecef;
  color: #000;
}
div.tox .tox-button--secondary:hover:not(:disabled) {
  background-color: #7987a1;
  border-color: #7987a1;
  color: #fff;
}
div.tox .tox-button--naked:hover:not(:disabled) {
  background-color: transparent;
  border-color: transparent;
}
div.tox .tox-button--naked.tox-button--icon:hover:not(:disabled) {
  color: #333333;
}
div.tox .tox-listboxfield .tox-listbox--select,
div.tox .tox-textarea,
div.tox .tox-textfield,
div.tox .tox-toolbar-textfield {
  background-color: #fff;
  border-color: #e9ecef;
  color: #000;
}
div.tox .tox-listboxfield .tox-listbox--select:focus,
div.tox .tox-textarea:focus,
div.tox .tox-textfield:focus {
  background-color: #fff;
  border-color: #ced4da;
}
div.tox .tox-dialog__table tbody tr {
  border-color: #e9ecef;
}
div.tox .tox-dialog__body {
  color: #000;
}

.typeahead.tt-input,
.typeahead.tt-hint {
  background-color: #fff !important;
  direction: ltr;
}

.tt-menu .tt-suggestion {
  cursor: pointer;
}

.tabcontrol ul, .wizard ul {
  display: flex;
}
@media (max-width: 676px) {
  .tabcontrol ul, .wizard ul {
    flex-wrap: wrap;
  }
}

.wizard > .steps > ul > li {
  width: auto;
  display: flex;
  flex-grow: 1;
}

.wizard > .steps .disabled a,
.wizard > .steps .disabled a:active,
.wizard > .steps .disabled a:hover {
  background-color: #e9ecef;
  color: #000;
  border: 1px solid transparent;
}

.wizard > .steps .current a,
.wizard > .steps .current a:active,
.wizard > .steps .current a:hover {
  background-color: #6571ff;
  border: 1px solid transparent;
}

.wizard > .steps a,
.wizard > .steps a:active,
.wizard > .steps a:hover {
  padding: 0.469rem 0.8rem;
  border-radius: 0.25rem;
  width: 100%;
}

.wizard > .steps .done a,
.wizard > .steps .done a:active,
.wizard > .steps .done a:hover {
  background-color: rgba(101, 113, 255, 0.2);
  color: #6571ff;
  border: 1px solid #6571ff;
}

.wizard > .steps ul li a, .wizard > .steps ul li a:active, .wizard > .steps ul li a:hover {
  margin: 0 0.5em 0.5em 0;
}
.wizard > .steps ul li:last-child a, .wizard > .steps ul li:last-child a:active, .wizard > .steps ul li:last-child a:hover {
  margin: 0 0 0.5em 0;
}

.wizard > .steps .number {
  font-size: inherit;
}

.wizard > .content {
  background: #fff;
  border: 1px solid #e9ecef;
  min-height: 23em;
  overflow: auto;
  margin: 0.5em 0;
}

@media (max-width: 767px) {
  .wizard > .content > .body {
    width: 90%;
    height: 90%;
    padding: 5%;
  }
}

.wizard > .actions {
  text-align: right;
}

.wizard > .actions > ul > li,
.wizard > .steps > ul > li {
  float: left;
}

.wizard.vertical > .steps {
  float: left;
}

.wizard > .actions .disabled a,
.wizard > .actions .disabled a:active,
.wizard > .actions .disabled a:hover {
  background: #e9ecef;
  border-color: #e9ecef;
  cursor: not-allowed;
  color: #adb5bd;
}

.wizard > .actions .disabled a:focus {
  box-shadow: none;
  color: #adb5bd;
}

.wizard > .actions > ul li {
  margin-right: 0;
  margin-left: 0.7em;
}

.wizard.vertical > .steps ul {
  flex-direction: column;
}

.wizard.vertical > .content {
  margin: 0 0 0.5em 2%;
  width: 68%;
}

.wizard.vertical > .steps a,
.wizard.vertical > .steps a:active,
.wizard.vertical > .steps a:hover {
  margin: 0 0 0.5em 0;
}

.wizard.vertical > .actions {
  margin: 0;
  width: 100%;
}

.wizard.vertical > .actions > ul > li {
  margin: 0 0 0 0.7em;
}

/*# sourceMappingURL=app.css.map*/
</style>


@php
    use App\Models\harga_khusus;
    use App\Models\cabang;
    use App\Models\suplier;
@endphp
<div class="row">
  <div class="col-md-12  col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title text-center" style="font-size: 18px">
              @php
                  if($status == "masuk"){
                    $nama = "Pembelian";
                  }else{
                    $nama = "Distribusi";
                  }
              @endphp
              Report Data Transaction @if ($status == "masuk")
                  Pembelian
                @else
                  Distribusi
                  @endif
              <br> 
              {{$nama}}
              <br>
              {{ $data->first()->created_at->format('d F Y') }} - {{ $data->last()->created_at->format('d F Y') }}
            </h2>
      <div class="card-body">
        {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
        
        <div class="table-responsive">
          <table id="" class="table" style="font-size: 13px">
            <thead>
              @if ($status == "masuk")
                  <tr>
                    <th>No</th>
                    <th>Product</th>
                    <th>Kode Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Pokok</th>
                    <th>Harga Jual</th>
                    <th>Supplier</th>
                    <th>Waktu</th>
                  </tr>
              @else
              <tr>
                <th>No</th>
                <th>Product</th>
                <th>Kode Barang</th>
                <th>Jumlah</th>
                <th>Harga Pokok</th>
                <th>Harga Jual</th>
                <th>Cabang</th>
                <th>Keterangan</th>
                <th>Waktu</th>
              </tr>
              @endif
            </thead>
            <tbody>
              @if ($status == "masuk")
              @foreach ($data as $item)
              @php
                  $supplier = suplier::where('uuid', $item->id_supllayer)->first();
              @endphp
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->kode_barang}}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->harga_pokok }}</td>
                <td>{{ $item->harga_jual }}</td>
                <td>{{$supplier->nama }}</td>
                <td>{{ $item->created_at->format('d F Y m:d') }}</td>
              </tr>
              @endforeach   
              @else
              @foreach ($data as $item)
              @php
                $cabang = cabang::where('uuid', $item->id_cabang)->first();
              @endphp
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->kode_barang}}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->harga_pokok }}</td>
                <td>{{ $item->harga_jual }}</td>
                <td>{{$cabang->nama }}</td>
                <td>{{$item->keterangan}}</td>
                <td>{{ $item->created_at->format('d F Y m:d') }}</td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>


  <script src="{{ asset('assets/js/data-table.js') }}"></script>
