@extends('frontend.layouts.apps')
@section('content')

@push('style')
<style>
	

root {
  --main-color: #4a90e2;
  --sub-color: #4a90e2;
  --extra-color: #00aeef;
  --black-color: #23232b;
  --blue-color: #00aeef;
  --orange-color: #ef4e22;
}
/*body,
div,
dl,
dt,
dd,
ul,
ol,
li,
h1,
h2,
h3,
h4,
h5,
h6,
pre,
code,
form,
legend,
input,
button,
textarea,
p,
blockquote {
  margin: 0;
  padding: 0;
}*/
/*body {
  font: 14px/18px Helvetica, Arial, "DejaVu Sans", "Liberation Sans", Freesans,
    sans-serif;
  margin: 0;
  padding: 0;
  width: 100%;
  background: #fff;
}*/
blockquote {
  position: relative;
  padding: 8px 0px 8px 13px;
  border-left: 3px solid #d4d4d4;
  margin-bottom: 12px;
  margin-left: 25px;
}
blockquote p,
blockquote div,
blockquote li,
blockquote h2,
blockquote h3 {
  margin-bottom: 0px !important;
}
.fieldset {
  margin: 0;
  padding: 10px;
}
th,
td {
  margin: 0;
}
a {
  color: #000;
  text-decoration: none;
  -moz-transition: all 0.2s ease-in 0;
  -webkit-transition: all 0.2s ease-in;
  -webkit-transition-delay: 0;
  transition: all 0.2s ease-in 0;
}
a:hover {
  color: var(--blue-color);
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
.red,
.label_error {
  color: red;
}
.redborder {
  border: 1px solid red;
}
.bold {
  font-weight: bold;
}
img {
  border: 0;
  max-width: 100%;
  height: auto;
}
del,
ins {
  text-decoration: none;
}
li {
  list-style: none;
}
.content_li li {
  list-style: initial;
  margin-left: 40px;
}
caption,
th {
  text-align: left;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: 100%;
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
}
q:before,
q:after {
  content: "";
}
abbr,
acronym {
  border: 0;
  font-variant: normal;
}
sup {
  vertical-align: baseline;
}
sub {
  vertical-align: baseline;
}
legend {
  color: #000000;
  font-weight: bold;
  padding: 0 8px;
}
figure {
  margin: 0;
  text-align: center;
  margin-bottom: 12px;
}
.figcaption {
  font-style: italic;
}
input,
button,
textarea,
select,
optgroup,
option {
  font-family: inherit;
  font-size: inherit;
  font-style: inherit;
  font-weight: inherit;
  outline: none;
}
input,
button,
textarea,
select {
  *font-size: 100%;
}
table {
  font: 100%;
  border-collapse: collapse;
}
pre,
code,
kbd,
samp,
tt {
  font-family: monospace;
  *font-size: 108%;
  line-height: 100%;
}
.clear,
.clearfix {
  clear: both;
}
.cls::after {
  content: "";
  display: block;
  clear: both;
}
.hidden,
.hide,
.hiden {
  display: none;
}
.pagination {
  text-align: center;
  margin-top: 40px;
  margin-bottom: 20px;
  width: 100%;
  padding-bottom: 10px;
}
.scroll_bar::-webkit-scrollbar-track {
  border-radius: 10px;
  background-color: #ebebeb;
}
.scroll_bar::-webkit-scrollbar {
  width: 8px;
  background-color: #ebebeb;
  border-radius: 10px;
}
.scroll_bar::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background: scroll center center var(--main-color);
  border: 1px solid #ebebeb;
}
.pagination .current {
  background: none repeat scroll 0 0 var(--main-color);
  color: #ffffff;
  border: 1px solid var(--main-color);
  display: inline-block;
  font-size: 14px;
  margin-left: 6px;
  padding: 6px 12px;
  box-sizing: border-box;
  border-radius: 3px;
}
.block_testimonials .title_icon {
  width: 40px;
  height: 40px;
  float: left;
  position: relative;
}
.block_videos .title_icon {
  width: 40px;
  height: 40px;
  float: left;
  position: relative;
}
.pagination a,
.pagination b {
  background: none repeat scroll 0 0 #fff;
  color: #4c4c4c;
  display: inline-block;
  font-size: 13px;
  margin-left: 6px;
  padding: 6px 12px;
  border-radius: 3px;
  text-decoration: none;
  box-sizing: border-box;
  border: 1px solid #eee;
  margin-bottom: 10px;
}
.pagination a:hover,
.pagination b:hover {
  background: none repeat scroll 0 0 #2080ca;
  color: #ffffff;
  -webkit-transition: 0.15s ease-in-out all;
  transition: 0.15s ease-in-out all;
}
.next-page {
  padding: 6px 13px 6px !important;
}
.pre-page {
  padding: 6px 13px 6px !important;
}
.next-page:hover {
  -webkit-transition: 0.15s ease-in-out all;
  transition: 0.15s ease-in-out all;
}
.pre-page:hover {
  -webkit-transition: 0.15s ease-in-out all;
  transition: 0.15s ease-in-out all;
}
.left {
  float: left;
}
.right {
  float: right;
}
.right-col .block {
  background: #fff;
  margin-top: 20px;
  box-sizing: border-box;
}
.page_title {
  position: relative;
  margin-bottom: 10px;
  border-bottom: 1px solid #dedede;
}
@media all and (max-width: 900px) {
  .page_title {
    padding-top: 15px;
  }
}
.page_title span {
  font-weight: normal;
  padding: 0px 20px 14px 0px;
  display: inline-block;
  position: relative;
  margin-left: 0px;
  z-index: 1;
  min-width: 78px;
  text-align: center;
  webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
  font-size: 28px;
  text-decoration: none;
  text-align: left;
}
.page_title:after {
  content: "";
  position: absolute;
  bottom: 0px;
  left: 0;
  width: 83px;
  height: 0;
  border-style: solid;
  border-width: 3px 0px 0 0;
  border-color: var(--main-color) transparent transparent transparent;
  webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
@media screen and (max-width: 768px) {
  .page_title span {
    font-size: 20px;
  }
}
.fr {
  float: right;
}
.fl {
  float: left;
}
.benmarch {
  display: none;
}
.hide {
  display: none;
}
.hidetime {
  display: none;
}
.submit_bt,
.reset_bt {
  padding: 5px 14px;
  border-radius: 4px;
  font-size: 15px;
  cursor: pointer;
}
.submit_bt {
  border: 1px solid #2080ca;
  background: #2080ca;
  color: #fff;
}
.submit_bt:hover {
  border: 1px solid #c90008;
  background: #c90008;
}
.reset_bt {
  border: 1px solid #b3b1b1;
  background: #f9f9f9;
  color: #000;
}
.reset_bt:hover {
  border: 1px solid #b3b1b1;
  background: #cecdcd;
}
.redborder {
  border-color: #ed1c24 !important;
}
.scroll-bar::-webkit-scrollbar-track {
  border-radius: 15px;
  background-color: #ebebeb;
}
.scroll-bar::-webkit-scrollbar {
  width: 5px;
  background-color: #ebebeb;
  border-radius: 15px;
}
.scroll-bar::-webkit-scrollbar-thumb {
  border-radius: 15px;
  background: #2080ca;
  border: 1px solid #ebebeb;
}
.right-col {
  width: 290px;
  float: right;
  position: relative;
}
.main-area-2col-right {
  width: -webkit-calc(100% - 290px);
  width: -moz-calc(100% - 290px);
  width: calc(100% - 290px);
  float: left;
  padding-right: 40px;
  box-sizing: border-box;
}
.container {
  width: 1170px;
  max-width: 100%;
  margin: 0 auto;
}
@media only screen and (max-width: 1260px) {
  .container {
    padding-left: 10px;
    padding-right: 10px;
    box-sizing: border-box;
  }
}
@media only screen and (max-width: 1260px) {
  .container_main_wrapper {
    background: #fff;
  }
}
.lazy {
  opacity: 0;
  transition: all 300ms ease-in-out;
}
.after-lazy {
  opacity: 1;
  display: inline-block !important;
}
.header_wrapper_wrap {
  min-height: 52px;
  width: 100%;
  z-index: 9;
  background-color: var(--main-color);
}
.header_wrapper {
  padding: 12px 0px 12px;
  background-color: var(--main-color);
  width: 100%;
  z-index: 100;
  transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
}
@media screen and (max-width: 760px) {
  .header_wrapper {
    padding: 7px 0px 8px;
  }
}
.header-l {
  float: left;
  width: calc(100% - 320px);
}
@media screen and (max-width: 1090px) {
  .header-l {
    width: calc(100% - 200px);
  }
}
@media all and (max-width: 760px) {
  .header-l {
    width: calc(100% - 82px);
  }
}
@media all and (max-width: 420px) {
  .header-l {
    width: calc(100% - 34px);
  }
}
.header-r {
  float: left;
  width: 320px;
  padding-top: 20px;
  box-sizing: border-box;
}
@media screen and (max-width: 1090px) {
  .header-r {
    width: 200px;
  }
}
@media screen and (max-width: 860px) {
  .header-r {
    padding-top: 17px;
  }
}
@media screen and (max-width: 760px) {
  .header-r {
    width: 82px;
  }
}
@media all and (max-width: 420px) {
  .header-r {
    width: 34px;
  }
}
.header-r .support_top {
  position: relative;
  color: #222;
  padding-left: 29px;
  width: 86px;
}
.header-r .support_top svg {
  width: 18px;
  height: 18px;
  position: absolute;
  fill: #000;
  left: 0px;
  top: 0px;
}
.header-r .support_top a {
  color: #fff !important;
}
@media all and (max-width: 1090px) {
  .header-r .support_top {
    display: none;
  }
}
.header-r .login-hd {
  position: relative;
  padding-left: 30px;
  width: 98px;
  margin-right: 0px;
}
.header-r .login-hd svg {
  width: 18px;
  height: 18px;
  position: absolute;
  left: 2px;
  top: -2px;
  fill: #fff;
}
.header-r .login-hd a {
  color: #fff !important;
}
@media all and (max-width: 760px) {
  .header-r .login-hd {
    width: 26px;
  }
  .header-r .login-hd a span {
    display: none;
  }
  .header-r .login-hd svg {
    width: 26px;
    height: 26px;
    position: absolute;
    left: 0px;
    top: -6px;
  }
}
@media all and (max-width: 450px) {
  .header-r .login-hd {
    display: none;
  }
  .header-r .login-hd svg {
    width: 23px;
    height: 23px;
  }
}
@media all and (max-width: 350px) {
  .header-r .login-hd svg {
    width: 21px;
    height: 21px;
    stop: -4px;
  }
}
.header-r .shopcart {
  width: 89px;
}
@media screen and (max-width: 760px) {
  .header-r .shopcart {
    float: left;
    margin-left: 9px;
    width: 31px;
  }
}
@media screen and (max-width: 420px) {
  .header-r .shopcart {
    margin-left: 4px;
    margin-right: 4px;
  }
}
.header-r > div {
  float: right;
  box-sizing: border-box;
  margin-right: 20px;
}
.header-r .fb_header {
  float: left;
}
.header-r .hotline_header {
  float: left;
  margin-left: 40px;
  position: relative;
  padding-left: 50px;
}
.header-r .hotline_header .hotline_head_item {
  line-height: 20px;
}
.header-r .hotline_header .hotline_head_item a {
  font-weight: bold;
}
.header-r .hotline_header .hotline_head_item span {
  width: 50px;
  display: inline-block;
}
.header-r .hotline_header svg {
  position: absolute;
  width: 36px;
  height: 36px;
  top: 2px;
  left: 0px;
  fill: var(--extra-color);
}
.logo_img {
  max-width: 232px;
  width: auto !important;
}
@media all and (max-width: 990px) {
  .logo_img {
    max-width: 118px;
  }
}
@media all and (max-width: 600px) {
  .logo_img {
    height: 26px;
  }
}
.logo_img_small {
  display: none;
  height: 40px;
  width: auto !important;
}
@media all and (max-width: 600px) {
  .logo_img_small {
    height: 26px;
  }
}
.regions_search {
  float: right;
  width: calc(100% - 282px);
  padding: 10px 50px 0px 0px;
  box-sizing: border-box;
}
@media all and (max-width: 1024px) {
  .regions_search {
    width: calc(100% - 332px);
    padding: 11px 55px 0px;
  }
}
@media all and (max-width: 860px) {
  .regions_search {
    width: calc(100% - 244px);
    padding: 4px 26px 0px;
    position: relative;
  }
}
@media all and (max-width: 550px) {
  .regions_search {
    width: calc(100% - 30px);
  }
}
@media screen and (max-width: 550px) {
  .regions_search #search {
    right: 50%;
    transform: translateX(50%);
    position: absolute;
    width: 300px;
    top: 0px;
    z-index: 6;
    display: none;
  }
}
.regions_search .click_search_mobile {
  display: none;
}
@media all and (max-width: 550px) {
  .regions_search .click_search_mobile {
    display: block;
    position: absolute;
    right: 14px;
    top: -31px;
  }
  .regions_search .click_search_mobile svg {
    width: 25px;
    height: 25px;
    fill: #fff;
  }
}
@media all and (max-width: 420px) {
  .regions_search .click_search_mobile svg {
    width: 22px;
    height: 22px;
  }
}
@media all and (max-width: 370px) {
  .regions_search .click_search_mobile {
    top: -29px;
  }
}
@media all and (max-width: 350px) {
  .regions_search .click_search_mobile svg {
    width: 20px;
    height: 20px;
  }
}
.regions_search .block_regions {
  width: 100px;
  float: left;
}
@media all and (max-width: 800px) {
  .regions_search .block_regions {
    display: none;
  }
}
.regions_search select {
  border: none;
  height: 40px;
  box-sizing: border-box;
  background: #eee;
  border-radius: 4px 0 0 4px;
  font-size: 13px;
  display: inline-block;
  font: inherit;
  padding: 10px;
  width: 100px;
  margin: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-image: linear-gradient(45deg, transparent 50%, #333 50%),
    linear-gradient(135deg, #333 50%, transparent 50%),
    linear-gradient(to right, #eee, #eee);
  background-position: calc(100% - 19px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px), 100% 0;
  background-size: 5px 5px, 5px 5px, 2.5em 2.5em;
  background-repeat: no-repeat;
}
.regions_search_mb {
  float: right;
  width: 200px;
  margin-top: 6px;
}
.regions_search_mb select {
  border: none;
  height: 40px;
  box-sizing: border-box;
  background: #eee;
  border-radius: 4px;
  padding: 0 5px;
  float: right;
  margin-right: 5px;
}
.header .logo {
  display: inline-block;
  float: left;
  padding-top: 6px;
}
@media all and (max-width: 500px) {
  .header .logo img {
    width: 90px;
  }
}
.address_header,
.header .hotline {
  margin-top: 31px;
}
.address_header_head,
.header .hotline {
  position: relative;
  padding-left: 41px;
}
.header .hotline > li:first-child {
  font-weight: bold;
  text-transform: uppercase;
  font-size: 15px;
  color: #5d5a5c;
}
.address_header label {
  font-weight: bold;
  text-transform: uppercase;
  font-size: 14px;
  color: #5d5a5c;
  margin-top: 10px;
}
.address_header:hover label {
  color: #000;
}
.address_header_head::before,
.header .hotline::before {
  position: absolute;
  content: " ";
  width: 33px;
  height: 31px;
  top: 4px;
  left: 0px;
}
.support_phone li {
  margin-bottom: 10px;
  border-bottom: 1px solid #f9f9f9;
  padding-bottom: 10px;
  position: relative;
  padding-left: 39px;
}
.support_phone li::before {
  position: absolute;
  background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24" width="24" fill="dodgerblue" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><path d="M78.014,20.385c8.463,8.75,12.51,18.127,12.84,29.081c0.076,2.519-1.453,4.183-3.876,4.312  c-2.557,0.136-4.293-1.441-4.356-4.012c-0.134-5.394-1.357-10.521-4.033-15.211C72.491,23.871,63.191,18.302,50.95,17.603  c-1.358-0.077-2.631-0.218-3.586-1.305c-1.223-1.391-1.33-2.991-0.672-4.62c0.664-1.642,2.01-2.382,3.759-2.352  c7.969,0.135,15.321,2.353,21.955,6.761C74.697,17.61,76.787,19.437,78.014,20.385z M50.11,24.674  c-0.732-0.01-1.53,0.134-2.189,0.44c-1.704,0.79-2.505,2.791-2.048,4.786c0.402,1.758,1.954,2.972,3.906,2.996  c4.562,0.056,8.597,1.499,11.951,4.624c3.688,3.434,5.41,7.741,5.588,12.751c0.032,0.891,0.367,1.904,0.891,2.618  c1.094,1.49,3.037,1.864,4.821,1.184c1.577-0.601,2.506-2.014,2.492-3.886c-0.051-6.981-2.592-12.943-7.5-18.08  C63.098,27.364,57.118,24.773,50.11,24.674z M73.486,87.206c1.689-1.888,3.575-3.599,5.361-5.401  c2.643-2.667,2.664-5.902,0.036-8.55c-3.134-3.157-6.28-6.302-9.44-9.433c-2.586-2.562-5.819-2.556-8.393-0.005  c-1.966,1.948-3.936,3.893-5.86,5.882c-0.133,0.137-0.261,0.247-0.389,0.328l-1.346,1.346c-0.375,0.239-0.748,0.236-1.236-0.029  c0.73-0.689-2.619-1.246-3.839-2.012c-5.695-3.575-10.471-8.183-14.694-13.374c-2.101-2.582-3.968-5.329-5.259-8.431  c-0.215-0.517-0.221-0.888,0.067-1.281l1.346-1.346c0.064-0.087,0.137-0.175,0.231-0.265c0.59-0.569,1.175-1.143,1.757-1.72  c1.361-1.348,2.706-2.711,4.057-4.069c2.69-2.703,2.684-5.88-0.015-8.604c-1.531-1.544-3.074-3.077-4.612-4.614  c-1.585-1.584-3.157-3.181-4.756-4.75c-2.59-2.543-5.824-2.548-8.408-0.007c-1.973,1.941-3.882,3.948-5.886,5.856  c-1.866,1.777-2.817,3.931-3.007,6.463c-0.307,4.104,0.699,7.983,2.106,11.77c2.909,7.832,7.333,14.766,12.686,21.137  c7.239,8.617,15.894,15.436,26.017,20.355c4.554,2.213,9.283,3.915,14.409,4.196C67.944,90.844,71.028,89.954,73.486,87.206z"/></svg>');
  background-repeat: no-repeat;
  content: " ";
  width: 33px;
  height: 33px;
  top: 1px;
  left: 0px;
  border: 1px solid #ddd;
  border-radius: 50%;
  box-sizing: border-box;
  background-position: center;
}
.support_phone li:last-child {
  margin-bottom: 0px;
  border-bottom: none;
  padding-bottom: 10px;
}
.address_header_head::before {
  background-position: -133px 1px;
}
.header .hotline::before {
  background-position: -35px 1px;
}
.header .more_info {
  color: #999999;
  font-size: 12px;
  margin-top: 0px;
  position: relative;
  padding-right: 23px;
}
.header .more_info::before {
  position: absolute;
  content: " ";
  width: 10px;
  height: 10px;
  top: 3px;
  right: 0px;
  background-position: -45px -70px;
  background-repeat: no-repeat;
  z-index: 100;
  background-color: #fff;
}
.header .hotline {
  margin-right: 30px;
}
.sb-toggle-left {
  display: none;
  width: 40px;
  float: left;
  margin-top: 18px;
}
@media all and (max-width: 1024px) {
  .sb-toggle-left {
    display: block;
  }
}
@media all and (max-width: 860px) {
  .sb-toggle-left {
    margin-top: 14px;
  }
}
@media all and (max-width: 420px) {
  .sb-toggle-left {
    width: 35px;
  }
}
@media all and (max-width: 350px) {
  .sb-toggle-left {
    margin-top: 14px;
  }
}
.navicon-line {
  width: 24px;
  height: 3px;
  border-radius: 0px;
  margin-bottom: 5px;
  background-color: #ffffff;
}
@media all and (max-width: 420px) {
  .navicon-line {
    width: 20px;
  }
}
.modal-menu-full-screen {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  display: none;
  background: #000000cc;
  z-index: 5;
}
.modal-menu-full-screen_white {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  display: none;
  background: #ffffffc9;
  z-index: 2;
}
.text-compare {
  margin-top: 4px;
  text-align: right;
}
.text-compare a {
  color: #999999;
  display: block;
  font-size: 12px;
}
.div_megamenu {
  width: 100%;
  z-index: 99;
  position: relative;
}
@media screen and (max-width: 1024px) {
  .div_megamenu .top_menu {
    display: none;
  }
}
.div_megamenu .div_megamenu_left {
  width: 282px;
  float: left;
  box-sizing: border-box;
  background: var(--sub-color);
}
@media screen and (max-width: 1024px) {
  .div_megamenu .div_megamenu_left {
    width: 100%;
    float: none;
    text-align: center;
    border: none;
    box-shadow: 0px 0px #ccc;
    display: none;
  }
}
.div_megamenu .div_megamenu_left:hover .product_menu_fix_top {
  display: block;
}
.div_megamenu .div_megamenu_left .product_menu_fix_top {
  display: none;
}
@media only screen and (max-width: 1140px) {
  .slideshow_countdown {
    width: 100%;
    float: none;
  }
}
@media only screen and (max-width: 780px) {
  .slideshow_countdown {
    padding-top: 0px;
  }
}
.slideshow_countdown .slideshow {
  width: calc(100% - 300px);
  position: relative;
  margin-right: 14px;
}
@media all and (max-width: 1140px) {
  .slideshow_countdown .slideshow {
    width: calc(68% - 14px);
  }
}
@media all and (max-width: 1024px) {
  .slideshow_countdown .slideshow {
    width: calc(68% - 10px);
  }
}
.slideshow_countdown > .countdown {
  width: 280px;
}
.slideshow_countdown > .countdown .item {
  margin-bottom: 20px;
}
.slideshow_countdown > .countdown .item:nth-child(3) {
  margin-bottom: 0px;
}
@media all and (max-width: 1140px) {
  .slideshow_countdown > .countdown .item:nth-child(3) {
    display: none;
  }
}
.slideshow_countdown > .countdown .item a {
  display: grid;
}
@media all and (max-width: 1140px) {
  .slideshow_countdown > .countdown {
    width: 32%;
  }
}
@media all and (max-width: 1024px) {
  .slideshow_countdown > .countdown {
    width: calc(32% - 6px);
  }
}
.slideshow_countdown > .countdown .block {
  margin-top: 15px;
}
.slideshow_countdown > .countdown .block:first-child {
  margin-top: 0px;
}
.home_pos {
  margin-top: 30px;
}
@media all and (max-width: 600px) {
  .home_pos {
    display: none;
  }
}
.home_pos .banners {
  display: flex;
  flex-wrap: wrap;
  margin: 0px -10px;
}
.home_pos .banners .item {
  width: calc(100% / 3 - 20px);
  margin: 0px 10px;
}
.block_banner_3_colunm {
  margin-left: -15px;
  margin-right: -15px;
}
.block_banner_3_colunm .banner_item {
  display: block;
  float: left;
  width: 33.333%;
  box-sizing: border-box;
  padding: 0 15px;
  overflow: hidden;
}
.block_banner_3_colunm .banner_item img {
  transition: all 0.3s ease 0s;
  -webkit-transition: all 0.3s ease 0s;
}
@media only screen and (min-width: 768px) {
  .pos_mixed {
    margin-top: 15px;
  }
}
.pos_mixed_left {
  float: left;
  width: 57.365%;
}
.pos_mixed_right {
  float: right;
  width: 40.24%;
}
.pos_mixed .block_title {
  background: #fbfbfb;
  border: 1px solid #ececec;
  line-height: 48px;
  margin-bottom: 12px;
}
.pos_mixed .block_title span {
  margin-left: 31px;
  text-transform: uppercase;
  font-size: 17px;
  font-weight: normal;
  margin-top: 10px;
}
.pos_mixed .block_content {
  border: 1px solid #e7e7e7;
  padding: 15px;
}
.main_wrapper .left-col .block,
.main_wrapper .right-col .block {
  margin-bottom: 20px;
  border: 1px solid #ebebeb;
}
.main_wrapper .right-col .newslist_0 {
  border: 1px solid var(--extra-color);
  margin-top: 0px;
}
.right-col .block_title,
.left-col .block_title {
  color: #2080ca;
  cursor: pointer;
  font-size: 15px;
  text-transform: uppercase;
  font-weight: 500;
  text-align: center;
  padding-bottom: 10px;
  padding-top: 10px;
  background: var(--extra-color);
  font-weight: bold;
  color: #fff;
}
.main_wrapper {
  background: #fff;
}
.main_wrapper_home {
  padding: 0px;
}
.main_wrapper_user {
  background: #f4f4f4;
  padding: 15px 0px;
}
.block_title {
  font-weight: bold;
  font-size: 20px;
  color: #252525;
  text-transform: uppercase;
  margin-bottom: 18px;
  display: block;
}
.block_title .tt_green {
  color: var(--main-color);
}
@media all and (max-width: 600px) {
  .block_title {
    font-size: 16px;
  }
}
.block_title_view_all {
  margin-bottom: 33px;
}
.block_title_view_all .link_title {
  font-weight: bold;
  font-size: 24px;
  float: left;
}
@media screen and (max-width: 736px) {
  .block_title_view_all .link_title {
    font-size: 20px;
  }
}
.block_title_view_all .view_all {
  float: right;
  padding-right: 30px;
  font-weight: bold;
  color: var(--main-color);
  position: relative;
}
.block_title_view_all .view_all svg {
  position: absolute;
  right: 0px;
  top: 50%;
  transform: translateY(-50%);
  fill: var(--main-color);
  width: 18px;
  height: 18px;
}
@media screen and (max-width: 736px) {
  .block_title_view_all .view_all {
    display: none;
  }
}
.slideshow-top {
  background-color: #2172b9;
}
.big-banner {
  text-align: center;
  margin: 0 auto;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  margin-bottom: 30px;
}
.big-banner a {
  width: 1920px;
  min-width: 1920px;
  display: block;
  overflow: hidden;
  margin: 0 auto;
}
.big-banner a img {
  width: 100%;
  height: auto;
  position: relative;
  object-fit: cover;
  display: block;
  margin: 0 auto;
  width: 100%;
  height: auto;
  margin: -1px auto;
}
.pos1 {
  margin-top: 176px;
  position: relative;
}
@media screen and (max-width: 736px) {
  .pos1 {
    margin-top: 40px;
  }
}
.pos2,
.pos3,
.pos4 {
  margin-top: 64px;
  position: relative;
}
@media screen and (max-width: 500px) {
  .pos2,
  .pos3,
  .pos4 {
    margin-top: 50px;
  }
}
@media screen and (max-width: 500px) {
  .pos4 {
    margin-top: 0px;
  }
}
.pos5 {
  margin-top: 110px;
}
@media screen and (max-width: 500px) {
  .pos5 {
    margin-top: 30px;
  }
}
.pos6,
.pos8,
.pos9,
.pos10 {
  margin-top: 54px;
}
@media screen and (max-width: 736px) {
  .pos6,
  .pos8,
  .pos9,
  .pos10 {
    margin-top: 25px;
  }
}
.pos7 {
  margin-top: 74px;
}
@media screen and (max-width: 736px) {
  .pos7 {
    margin-top: 30px;
  }
}
.pos7 .block_title_view_all {
  margin-bottom: 36px;
}
@media screen and (max-width: 736px) {
  .pos7 .block_title_view_all {
    margin-bottom: 22px;
  }
}
.pos7 .block_title_view_all .link_title {
  position: relative;
  padding-left: 50px;
}
.pos7 .block_title_view_all .link_title svg {
  position: absolute;
  left: 0px;
  top: -13px;
}
@media screen and (max-width: 736px) {
  .pos7 .block_title_view_all .link_title {
    padding-left: 40px;
  }
  .pos7 .block_title_view_all .link_title svg {
    top: -7px;
    width: 30px;
    height: 30px;
  }
}
.pos9 .block_title_view_all {
  text-align: center;
  position: relative;
  margin-bottom: 0px;
}
.pos9 .block_title_view_all:after {
  position: absolute;
  content: "";
  height: 1px;
  width: 100%;
  background: #ededed;
  top: 8px;
  left: 0px;
  z-index: -1;
}
.pos9 .block_title_view_all .link_title {
  float: none;
  background: #fff;
  padding: 0px 50px;
}
.pos10 {
  padding: 40px 0px;
  background: #f3f8f5;
}
@media screen and (max-width: 736px) {
  .pos10 {
    padding: 25px 0px;
  }
}
.line-1 {
  padding: 65px 75px 0px;
}
@media screen and (max-width: 500px) {
  .line-1 {
    padding: 30px 50px 0px;
  }
}
.line-2 {
  padding-left: 73px;
}
.line-3 {
  padding-left: 73px;
  margin-top: -100px;
}
.slider-collection {
  background: #fff;
  padding: 20px;
  box-sizing: border-box;
  margin-top: 20px;
}
@media all and (max-width: 768px) {
  .slider-collection {
    padding: 20px 10px;
  }
}
.pos_footer {
  background: #f3f5f5;
  padding-top: 40px;
  padding-bottom: 40px;
}
.pos_footer .container {
  display: flex;
}
.pos_footer .block_title {
  font-size: 22px;
  padding: 30px 0 10px;
}
.pos_footer .address_home {
  background: #fff;
  border-radius: 10px;
  width: calc(50% - 10px);
  float: left;
  margin-left: 10px;
  padding: 20px;
  padding-bottom: 0px;
  padding-top: 0;
  box-sizing: border-box;
}
footer {
  background: #f0f0f04a;
  padding: 60px 0px 0px;
  border-top: 1px solid #e4e4e440;
}
@media screen and (max-width: 1024px) {
  footer {
    padding: 35px 0px 0px;
  }
}
footer .top-ft {
  padding-bottom: 60px;
}
@media screen and (max-width: 1024px) {
  footer .top-ft {
    padding-bottom: 10px;
  }
}
footer .top-ft .top-ft-l {
  width: 24%;
  float: left;
}
footer .top-ft .top-ft-l .logo-footer img {
  max-width: 250px;
}
footer .top-ft .top-ft-l .footer_info {
  margin-top: 14px;
  line-height: 24px;
  font-size: 14px;
}
@media screen and (max-width: 768px) {
  footer .top-ft .top-ft-l {
    width: 100%;
    float: none;
    margin-bottom: 18px;
    text-align: center;
  }
  footer .top-ft .top-ft-l .footer_info {
    margin-top: 10px;
    font-size: 14px;
  }
}
footer .top-ft .top-ft-c {
  width: calc(30% - 45px);
  float: left;
  margin-left: 45px;
  line-height: 22px;
  font-size: 14px;
}
@media screen and (max-width: 768px) {
  footer .top-ft .top-ft-c {
    width: 100%;
    margin-left: 0px;
    float: none;
  }
}
footer .top-ft .top-ft-r {
  width: calc(45% - 20px);
  margin-left: 20px;
  margin-top: 2px;
  float: right;
  box-sizing: border-box;
}
footer .top-ft .top-ft-r .dmca {
  width: 53px;
}
footer .top-ft .top-ft-r .bct {
  width: 158px;
}
@media screen and (max-width: 768px) {
  footer .top-ft .top-ft-r {
    width: 100%;
    float: none;
    padding-left: 0px;
    margin-left: 0px;
  }
}
@media screen and (max-width: 430px) {
  footer .top-ft .top-ft-r {
    width: 100%;
    float: none;
    padding-left: 0px;
  }
}
footer .top-ft .top-ft-c .title,
footer .top-ft .top-ft-r .title {
  text-transform: uppercase;
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 28px;
}
@media screen and (max-width: 500px) {
  footer .top-ft .top-ft-c .title,
  footer .top-ft .top-ft-r .title {
    margin-bottom: 10px;
    font-size: 14px;
  }
}
footer .top-ft .top-ft-c .content,
footer .top-ft .top-ft-r .content {
  line-height: 18px;
}
footer .top-ft .top-ft-c .content > div,
footer .top-ft .top-ft-r .content > div {
  margin-bottom: 16px;
}
@media screen and (max-width: 600px) {
  footer .top-ft .top-ft-c .content,
  footer .top-ft .top-ft-r .content {
    line-height: 14px;
  }
  footer .top-ft .top-ft-c .content > div,
  footer .top-ft .top-ft-r .content > div {
    margin-bottom: 12px;
  }
}
footer .bot-ft {
  background: #f6f6f6;
  padding: 18px 0px;
}
footer .bot-ft .bot-ft-l {
  width: 70%;
  float: left;
  line-height: 20px;
}
footer .bot-ft .bot-ft-r {
  width: 30%;
  float: right;
}
@media screen and (max-width: 680px) {
  footer .bot-ft .bot-ft-l {
    width: 100%;
    float: none;
    text-align: center;
  }
  footer .bot-ft .bot-ft-r {
    width: 100%;
    float: none;
    text-align: center;
  }
}
@media screen and (max-width: 500px) {
  footer .bot-ft {
    margin-bottom: 50px;
  }
}
footer .adv_footer {
  width: 33%;
  float: right;
}
@media all and (max-width: 800px) {
  footer .adv_footer {
    width: 100%;
    float: none;
  }
}
footer .adv_footer h3 {
  text-transform: uppercase;
  margin-bottom: 30px;
  font-size: 16px;
  color: #fff;
  font-weight: bold;
  display: block;
}
@media all and (max-width: 600px) {
  footer .adv_footer h3 {
    margin-bottom: 15px;
  }
}
footer .regions #regions_footer {
  height: 34px;
  background: #f3f3f3;
  border: none;
  border-radius: 4px;
  padding-left: 10px;
  box-sizing: border-box;
}
.footer_im {
  padding: 20px 0;
  margin-top: 20px;
  border-top: 1px dashed #bbbbbb;
  border-bottom: 1px dashed #bbbbbb;
}
.footer_im .dtb {
  display: inline-block;
  margin-left: 20%;
  margin-top: -10px;
  margin-bottom: -32px;
  float: left;
}
@media all and (max-width: 800px) {
  .footer_im .dtb {
    margin-left: 20px;
  }
}
@media all and (max-width: 600px) {
  .footer_im .dtb {
    margin-left: 0;
    margin-top: 0;
  }
}
.footer_im .copyright {
  float: right;
  line-height: 40px;
  color: #848484;
}
.footer_im .copyright span {
  color: #222;
}
footer .regions {
  width: 30%;
  padding-left: 50px;
  box-sizing: border-box;
}
@media all and (max-width: 800px) {
  footer .regions {
    width: 30%;
    padding-right: 10px;
    box-sizing: border-box;
  }
}
@media all and (max-width: 600px) {
  footer .regions {
    width: 50%;
    padding-left: 0;
  }
}
footer .info {
  width: 20%;
  float: left;
  box-sizing: border-box;
}
@media all and (max-width: 800px) {
  footer .info {
    padding-left: 50px;
    width: 30%;
    padding-right: 10px;
    box-sizing: border-box;
  }
}
@media all and (max-width: 600px) {
  footer .info {
    width: 50%;
    padding-left: 20px;
    padding-right: 0px;
  }
}
footer .info h3 {
  text-transform: uppercase;
  margin-bottom: 20px;
  font-weight: bold;
  font-size: 15px;
}
@media all and (max-width: 600px) {
  footer .info h3 {
    margin-bottom: 15px;
  }
}
footer .info p {
  line-height: 18px;
  margin-bottom: 12px;
}
@media all and (max-width: 600px) {
  footer .info p {
    line-height: 15px;
    margin-bottom: 10px;
  }
}
.region_name {
  text-transform: uppercase;
  margin-top: 15px;
  text-decoration: underline;
}
.footer_title {
  text-transform: uppercase;
  margin-bottom: 20px;
  font-weight: bold;
  font-size: 15px;
  color: #222;
}
@media all and (max-width: 600px) {
  .footer_title {
    margin-bottom: 15px;
  }
}
.address_regions ul {
  margin-top: 12px;
  color: #252525;
  position: relative;
}
.address_regions ul li {
  position: relative;
  padding-left: 20px;
}
.address_regions ul li svg {
  width: 15px;
  height: 15px;
  position: absolute;
  left: 0;
  fill: var(--main-color);
}
@media all and (max-width: 600px) {
  .address_regions ul {
    margin-top: 5px;
  }
}
.address_regions ul:before {
  width: 9px;
  height: 20px;
  display: inline-block;
  margin-right: 10px;
  background: url('data:image/svg+xml;utf8,<svg aria-hidden="true" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12"><path fill="white" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" class=""></path></svg>');
  background-repeat: no-repeat;
  position: absolute;
  top: 2px;
  left: 0px;
}
.address_regions ul li:nth-child(1) i {
  width: 9px;
  height: 20px;
  display: inline-block;
  margin-right: 10px;
  background: url('data:image/svg+xml;utf8,<svg aria-hidden="true" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12"><path fill="white" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" class=""></path></svg>');
  background-repeat: no-repeat;
  position: absolute;
  top: 4px;
  left: 0;
}
.address_regions ul li:nth-child(2) {
  color: #cccccc;
}
.address_regions ul li:nth-child(2) a {
  color: #cccccc;
}
.address_regions > span {
  margin-right: 10px;
}
.banner_top {
  text-align: center;
  background: var(--main-color);
  position: relative;
}
.banner_top img {
  margin-bottom: -4px;
}
.banner_top .close_banner_top {
  position: absolute;
  right: 30px;
  top: 50%;
  cursor: pointer;
  transform: translate(0, -50%);
}
.banner_top .close_banner_top svg {
  fill: #ccc;
  width: 20px;
  height: 20px;
}
.banner_top .close_banner_top svg:hover {
  fill: red;
}
.banner-off {
  display: none;
}
.top1 {
  background-image: url("https://maychieuminikaw.com/templates/dienmaytl/images/bg_top1.jpg");
  background-size: 100% 100%;
  padding: 35px 0 15px 35px;
}
.number1 {
  color: #fff;
}
.number1 .stt1 {
  display: inline-block;
  font-size: 60px;
  font-weight: bold;
  line-height: 60px;
  transform: scale(0.9, 1);
  text-shadow: 2px 2px #868686cc;
}
@media all and (max-width: 600px) {
  .number1 .stt1 {
    font-size: 40px;
  }
}
@media all and (max-width: 325) {
  .number1 .stt1 {
    font-size: 30px;
  }
}
.number1 font {
  font-size: 45px;
  display: inline-block;
  font-weight: bold;
  line-height: 60px;
  margin: 0 3px;
  width: 65px;
  position: relative;
  height: 30px;
}
@media all and (max-width: 600px) {
  .number1 font {
    width: 45px;
  }
}
@media all and (max-width: 325px) {
  .number1 font {
    width: 30px;
  }
}
.number1 font:after {
  content: "";
  height: 90px;
  background-image: url("https://maychieuminikaw.com/templates/dienmaytl/images/bg1.png");
  width: 65px;
  position: absolute;
  top: -30px;
  left: 0px;
  animation: 4s ease-in-out 0s normal none infinite running
    chang-rotage-anim-2-bh;
}
@media all and (max-width: 600px) {
  .number1 font:after {
    background-size: 100% 100%;
    top: -8px;
    height: 55px;
    width: 40px;
  }
}
.number1 .stt2 {
  display: inline-block;
  font-size: 22px;
  text-transform: uppercase;
  line-height: 25px;
  transform: scale(0.85, 1);
  text-shadow: 2px 2px #868686cc;
}
@media all and (max-width: 600px) {
  .number1 .stt2 {
    font-size: 16px;
  }
}
.countdown .number1 {
  color: #fff;
}
@media all and (max-width: 800px) {
  .countdown .number1 {
    display: none;
  }
}
.bot1 {
  background-size: 100% 100%;
  text-align: center;
}
.bot1 img {
  width: 100%;
}
@media all and (max-width: 1250px) {
  .bot1 {
    margin-top: 0px;
  }
}
@media all and (max-width: 800px) {
  .bot1 {
    width: 48%;
    float: left;
    padding-right: 10px;
    box-sizing: border-box;
  }
}
@media all and (max-width: 600px) {
  .bot1 {
    margin-top: 0;
    width: 100%;
    padding-right: 0px;
  }
}
.newtop {
  margin-top: 10px;
}
@media all and (max-width: 800px) {
  .newtop {
    width: 52%;
    float: left;
    margin-top: 0px;
  }
}
@media all and (max-width: 600px) {
  .newtop {
    margin-top: 0;
    width: 100%;
    padding-right: 0px;
    display: none;
  }
}
@media all and (min-width: 800px) {
  .banner-home-top .number1 font:after {
    animation: unset;
  }
}
.time-dow-event .time {
  display: inline-block;
  margin: 3px;
  background: #f3f1f2;
  padding: 3px 0px;
  width: 56px;
}
@media all and (max-width: 1200px) {
  .time-dow-event .time {
    width: 50px;
  }
}
.time-dow-event .time_1 {
  font-weight: bold;
}
.footer_l {
  width: 25%;
}
@media all and (max-width: 1000px) {
  .footer_l {
    width: 100%;
  }
}
.footer_r_w {
  width: 25%;
}
.footer_r_w .block_title {
  padding: 0;
  text-transform: uppercase;
  margin-bottom: 30px;
  font-weight: bold;
  font-size: 15px;
  color: #222;
  background: none;
}
.footer_r {
  width: 270px;
  float: right;
}
@media all and (max-width: 800px) {
  .footer_r {
    width: 50%;
    float: left;
    margin-top: 20px;
  }
}
@media all and (max-width: 500px) {
  .footer_r {
    width: 100%;
    float: left;
    margin-top: 20px;
  }
}
.footer_r .block_title {
  background: none;
  padding: 0;
  font-size: 15px;
  margin-bottom: 20px;
}
footer .tags {
  margin-top: 15px;
}
footer .tags,
footer .tags a {
  color: #929292;
  font-size: 12px;
  color: #929292;
  font-size: 12px;
}
.footer2 {
  background: #1b1b1b;
  color: #ccc;
  padding: 8px 0;
  text-align: center;
  border-top: 1px solid #7d7d7d;
}
#menu-fixed-bar {
  width: 40%;
  z-index: 999;
  transition: all 0.25s cubic-bezier(0.55, 0, 0.1, 1);
  float: right;
}
.slide-down {
  -ms-transform: translateY(-100%);
  transform: translateY(-100%);
  transition: 0.5s;
}
.slide-up {
  -ms-transform: translateY(0);
  transform: translateY(0);
  transition: 0.5s;
  background: #fff;
}
.m-slide-down {
  -ms-transform: translateY(-100%);
  transform: translateY(-100%);
}
.m-slide-up {
  -ms-transform: translateY(0);
  transform: translateY(0);
  background: #fdfdfd;
  z-index: 1000;
  box-shadow: 0px 0px 2px 2px #ccc;
}
#fixed-bar {
  position: fixed;
  bottom: 0;
  height: 45px;
  z-index: 999;
}
#fixed-bar > div {
  float: left;
  max-width: 22%;
  cursor: pointer;
  text-align: center;
  text-transform: uppercase;
  font-size: 11px;
  width: 35px;
}
#fixed-bar > div .wrap_icon {
  margin-top: 5px;
  margin-bottom: 3px;
}
#fixed-bar > div .wrap_icon i {
  padding: 5px 15px;
}
#fixed-bar .buy_now_bt .wrap_icon i {
  background-position: 0px -351px;
}
#fixed-bar .call .wrap_icon i {
  background-position: -34px -351px;
}
#fixed-bar #bar-inner .wrap_icon i {
  background-position: -64px -351px;
}
.certified_bct {
  background-position: 0px -92px;
  content: " ";
  height: 36px;
  display: block;
  margin-top: 11px;
  padding-top: 12px;
  width: 131px;
}
.suntory-alo-phone {
  background-color: transparent;
  cursor: pointer;
  height: 120px;
  position: fixed;
  transition: visibility 0.5s ease 0s;
  width: 120px;
  z-index: 200000 !important;
  display: none;
  left: -13px;
  bottom: -25px;
}
.suntory-alo-ph-circle {
  animation: 1.2s ease-in-out 0s normal none infinite running
    suntory-alo-circle-anim;
  background-color: transparent;
  border: 2px solid rgba(30, 30, 30, 0.4);
  border-radius: 100%;
  height: 100px;
  left: 0px;
  opacity: 0.1;
  position: absolute;
  top: 0px;
  transform-origin: 50% 50% 0;
  transition: all 0.5s ease 0s;
  width: 100px;
}
.suntory-alo-phone.suntory-alo-green .suntory-alo-ph-circle {
  border-color: #1aa23ee8;
  opacity: 1;
}
.suntory-alo-ph-circle-fill {
  animation: 2.3s ease-in-out 0s normal none infinite running
    suntory-alo-circle-fill-anim;
  border: 2px solid transparent;
  border-radius: 100%;
  height: 70px;
  left: 15px;
  position: absolute;
  top: 15px;
  transform-origin: 50% 50% 0;
  transition: all 0.5s ease 0s;
  width: 70px;
}
.suntory-alo-phone.suntory-alo-green .suntory-alo-ph-circle-fill {
  background-color: #1aa23ee8;
}
.suntory-alo-ph-img-circle {
  border: 2px solid transparent;
  border-radius: 100%;
  height: 50px;
  left: 25px;
  position: absolute;
  top: 25px;
  transform-origin: 50% 50% 0;
  width: 50px;
}
.suntory-alo-phone.suntory-alo-green .suntory-alo-ph-img-circle {
  background-color: #1aa23ee8;
}
.suntory-alo-ph-img-circle svg {
  position: absolute;
  top: 13px;
  left: 13px;
}
.description a {
  color: var(--blue-color);
}
.description a:hover {
  color: var(--blue-color);
}
ol {
  padding-left: 30px;
}
ol li {
  list-style: decimal !important;
}
@keyframes suntory-alo-circle-anim {
  0% {
    opacity: 0.1;
    transform: rotate(0deg) scale(0.5) skew(1deg);
  }
  30% {
    opacity: 0.5;
    transform: rotate(0deg) scale(0.7) skew(1deg);
  }
  100% {
    opacity: 0.6;
    transform: rotate(0deg) scale(1) skew(1deg);
  }
}
@keyframes suntory-alo-circle-img-anim {
  0% {
    transform: rotate(0deg) scale(1) skew(1deg);
  }
  10% {
    transform: rotate(-25deg) scale(1) skew(1deg);
  }
  20% {
    transform: rotate(25deg) scale(1) skew(1deg);
  }
  30% {
    transform: rotate(-25deg) scale(1) skew(1deg);
  }
  40% {
    transform: rotate(25deg) scale(1) skew(1deg);
  }
  50% {
    transform: rotate(0deg) scale(1) skew(1deg);
  }
  100% {
    transform: rotate(0deg) scale(1) skew(1deg);
  }
}
@keyframes suntory-alo-circle-fill-anim {
  0% {
    opacity: 0.2;
    transform: rotate(0deg) scale(0.7) skew(1deg);
  }
  50% {
    opacity: 0.2;
    transform: rotate(0deg) scale(1) skew(1deg);
  }
  100% {
    opacity: 0.2;
    transform: rotate(0deg) scale(0.7) skew(1deg);
  }
}
#cfacebook a.chat_fb_openned:before {
  content: "x";
  position: absolute;
  right: 10px;
  color: #fff;
  top: 3px;
}
#cfacebook .fchat {
  float: left;
  width: 100%;
  height: 270px;
  overflow: hidden;
  display: none;
  background-color: #fff;
}
#cfacebook .fchat .fb-page {
  margin-top: -130px;
  float: left;
}
#cfacebook a.chat_fb:hover {
  color: #ff0;
  text-decoration: none;
}
#cfacebook {
  position: fixed;
  bottom: 30px;
  left: 10px;
  z-index: 99999;
  height: auto;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  overflow: hidden;
}
@media all and (max-width: 600px) {
  #cfacebook {
    display: none;
  }
}
#cfacebook a.chat_fb {
  float: left;
  padding: 6px 6px 0px 6px;
  color: #fff;
  text-decoration: none;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
  background-repeat: repeat-x;
  background-size: auto;
  background-position: 0 0;
  background-color: #3a5795;
  border: 0;
  z-index: 9999999;
  font-size: 15px;
  box-sizing: border-box;
  text-align: center;
  font-weight: bold;
  border-radius: 50%;
  display: block;
  position: relative;
}
#cfacebook a.chat_fb:after {
  display: block;
  width: 19px;
  height: 19px;
  color: #fff;
  content: "2";
  position: absolute;
  top: 0px;
  right: 0px;
  background: red;
  border-radius: 50%;
  font-size: 13px;
  line-height: 18px;
}
#cfacebook a.chat_fb svg {
  width: 45px;
  height: 45px;
}
#cfacebook a.chat_fb span {
  display: none;
}
#cfacebook .fchat .fb-page {
  margin-top: 0px;
  float: left;
}
#cfacebook a.chat_fb_openned {
  border-radius: 0;
  width: 100%;
}
#cfacebook a.chat_fb_openned svg {
  display: none;
}
#cfacebook a.chat_fb_openned i {
  display: none;
}
#cfacebook a.chat_fb_openned::after {
  display: none;
}
#cfacebook a.chat_fb_openned span {
  display: block;
}
.fixed_icons {
  position: fixed;
  right: 0;
  top: 40%;
  transform: translate(0, -50px);
  z-index: 100;
  display: none;
}
.fixed_icons .icon_v1 {
  width: 44px;
  height: 44px;
  display: inline-block;
  background-color: var(--extra-color);
}
.address_header .more_info {
  position: relative;
}
.address_header .more_info::before {
  position: absolute;
  content: " ";
  width: 10px;
  height: 10px;
  top: 3px;
  right: 0px;
  background-position: -45px -70px;
  background-repeat: no-repeat;
  z-index: 100;
  background-color: #fff;
}
.address_header {
  display: none;
}
.address_fixed_popup {
  margin-top: -3px;
}
.hotline_fixed_popup,
.address_fixed_popup {
  position: relative;
}
.hotline_fixed_popup .icon_v1:after {
  content: "";
  background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28" width="28" fill="white" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><path d="M78.014,20.385c8.463,8.75,12.51,18.127,12.84,29.081c0.076,2.519-1.453,4.183-3.876,4.312  c-2.557,0.136-4.293-1.441-4.356-4.012c-0.134-5.394-1.357-10.521-4.033-15.211C72.491,23.871,63.191,18.302,50.95,17.603  c-1.358-0.077-2.631-0.218-3.586-1.305c-1.223-1.391-1.33-2.991-0.672-4.62c0.664-1.642,2.01-2.382,3.759-2.352  c7.969,0.135,15.321,2.353,21.955,6.761C74.697,17.61,76.787,19.437,78.014,20.385z M50.11,24.674  c-0.732-0.01-1.53,0.134-2.189,0.44c-1.704,0.79-2.505,2.791-2.048,4.786c0.402,1.758,1.954,2.972,3.906,2.996  c4.562,0.056,8.597,1.499,11.951,4.624c3.688,3.434,5.41,7.741,5.588,12.751c0.032,0.891,0.367,1.904,0.891,2.618  c1.094,1.49,3.037,1.864,4.821,1.184c1.577-0.601,2.506-2.014,2.492-3.886c-0.051-6.981-2.592-12.943-7.5-18.08  C63.098,27.364,57.118,24.773,50.11,24.674z M73.486,87.206c1.689-1.888,3.575-3.599,5.361-5.401  c2.643-2.667,2.664-5.902,0.036-8.55c-3.134-3.157-6.28-6.302-9.44-9.433c-2.586-2.562-5.819-2.556-8.393-0.005  c-1.966,1.948-3.936,3.893-5.86,5.882c-0.133,0.137-0.261,0.247-0.389,0.328l-1.346,1.346c-0.375,0.239-0.748,0.236-1.236-0.029  c0.73-0.689-2.619-1.246-3.839-2.012c-5.695-3.575-10.471-8.183-14.694-13.374c-2.101-2.582-3.968-5.329-5.259-8.431  c-0.215-0.517-0.221-0.888,0.067-1.281l1.346-1.346c0.064-0.087,0.137-0.175,0.231-0.265c0.59-0.569,1.175-1.143,1.757-1.72  c1.361-1.348,2.706-2.711,4.057-4.069c2.69-2.703,2.684-5.88-0.015-8.604c-1.531-1.544-3.074-3.077-4.612-4.614  c-1.585-1.584-3.157-3.181-4.756-4.75c-2.59-2.543-5.824-2.548-8.408-0.007c-1.973,1.941-3.882,3.948-5.886,5.856  c-1.866,1.777-2.817,3.931-3.007,6.463c-0.307,4.104,0.699,7.983,2.106,11.77c2.909,7.832,7.333,14.766,12.686,21.137  c7.239,8.617,15.894,15.436,26.017,20.355c4.554,2.213,9.283,3.915,14.409,4.196C67.944,90.844,71.028,89.954,73.486,87.206z"/></svg>');
  background-repeat: no-repeat;
  width: 28px;
  height: 28px;
  display: block;
  margin: 8px;
}
.address_fixed_popup .icon_v1:after {
  content: "";
  background: url('data:image/svg+xml;utf8,<svg aria-hidden="true" data-prefix="fas" data-icon="map-marker-alt" role="img" height="28" width="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12"><path fill="white" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" class=""></path></svg>');
  background-repeat: no-repeat;
  width: 28px;
  height: 28px;
  display: block;
  margin: 8px;
}
.hotline_fixed_popup_content,
.address_header {
  position: absolute;
  width: 260px;
  top: 0;
  right: 100%;
  padding-right: 10px;
  display: none;
  margin-top: 0;
}
.hotline_fixed_popup:hover .hotline_fixed_popup_content {
  display: block;
}
.address_fixed_popup:hover .address_header {
  display: block;
  max-height: 166px;
  overflow-y: auto;
  overflow-x: hidden;
}
.add_full,
.support_phone {
  position: relative;
  width: 100%;
  right: 0;
  background: #fff;
  border: 1px solid #f5f5f5;
  padding: 10px;
  border-radius: 0 0 4px 4px;
  border-top: 3px solid #0183bf;
  z-index: 101;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
  box-sizing: border-box;
}
.add_full ul {
  position: relative;
  padding-left: 18px;
  margin-bottom: 10px;
}
.add_full ul::before {
  position: absolute;
  content: " ";
  width: 14px;
  height: 20px;
  top: 4px;
  left: 0px;
  position: absolute;
  background: url('data:image/svg+xml;utf8,<svg aria-hidden="true" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12"><path fill="dodgerblue" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" class=""></path></svg>');
  background-repeat: no-repeat;
  content: " ";
  top: 1px;
  left: 0px;
}
.add_full ul li:nth-child(2) {
  color: #999999;
  font-size: 13px;
  margin-top: 2px;
}
.support_phone ul li .name {
  font-weight: bold;
}
.support_phone ul li .phone {
  color: #afafaf;
  font-size: 15px;
  margin-top: 6px;
}
.support_phone ul li .phone a {
  color: #777;
  font-size: 13px;
}
.address_header:hover .add_full {
  display: block !important;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.header .hotline:hover .support_phone {
  display: block !important;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.arrow_box {
  position: relative;
  background: #fff;
  border: 1px solid #f5f5f5;
}
.arrow_box:after,
.arrow_box:before {
  left: 100%;
  top: 20px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.arrow_box:after {
  border-color: rgba(136, 183, 213, 0);
  border-left-color: #fff;
  border-width: 8px;
  margin-top: -8px;
}
.arrow_box:before {
  border-color: rgba(194, 225, 245, 0);
  border-left-color: #f5f5f5;
  border-width: 9px;
  margin-top: -9px;
}
@media only screen and (max-width: 880px) {
  .pos_mixed_left {
    float: none;
    width: 100%;
  }
  .pos_mixed_right {
    float: none;
    width: 100%;
    margin-top: 15px;
  }
}
@media only screen and (max-width: 800px) {
  .slideshow_countdown .slideshow {
    width: 100%;
    float: left;
    max-width: 100%;
    margin-top: 5px;
  }
  .slideshow_countdown > .countdown {
    width: 100%;
    clear: both;
    margin-top: 5px;
    display: none;
  }
}
@media only screen and (max-width: 600px) {
  .address_header {
    display: none;
  }
  footer .menu_footer {
    width: 100%;
    margin-top: 20px;
    padding: 0;
  }
  .suntory-alo-phone {
    display: block;
    bottom: 60px;
    width: 40px;
    height: 40px;
  }
}
@media only screen and (max-width: 450px) {
  .regions_search .block_regions {
    width: 80px;
  }
}
.banner-home-top {
  margin-top: 20px;
  background-size: cover;
}
@media all and (max-width: 800px) {
  .banner-home-top {
    margin-top: 0px;
  }
}
@media all and (max-width: 600px) {
  .banner-home-top {
    display: flex;
    flex-wrap: wrap;
    margin-top: 10px;
    display: none;
  }
}
.banner-home-bottom {
  margin-bottom: 10px;
}
@keyframes spin2 {
  0% {
    transform: rotate(0deg);
  }
  40% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(10deg);
  }
  70% {
    transform: rotate(-10deg);
  }
  100% {
    transform: rotate(0deg);
  }
}
@keyframes fade-bg1111 {
  0% {
    transform: translate(30px);
    opacity: 0, 5;
  }
  50% {
    transform: translate(-140px);
    opacity: 1;
  }
  51% {
    transform: translate(-140px);
    opacity: 0.5;
  }
  100% {
    transform: translate(30px);
    opacity: 1;
  }
}
@keyframes fade-bg1112 {
  0% {
    transform: scale(0.9, 1.1);
  }
  50% {
    transform: scale(0.7, 0.8);
  }
  51% {
    transform: scale(0.7, 0.8);
  }
  100% {
    transform: scale(0.9, 1.1);
  }
}
@keyframes chang-rotage-anim-2-bh {
  0% {
    transform: rotate(0deg) scale(1) skew(1deg);
  }
  50% {
    transform: rotate(0deg) scale(1) skew(1deg);
  }
  45% {
    transform: rotate(-25deg) scale(1.3) skew(1deg);
  }
  60% {
    transform: rotate(25deg) scale(1) skew(1deg);
  }
  65% {
    transform: rotate(-25deg) scale(1.3) skew(1deg);
  }
  70% {
    transform: rotate(25deg) scale(1) skew(1deg);
  }
  85% {
    transform: rotateY(360deg) scale(1) skew(1deg);
  }
  100% {
    transform: rotate(0deg) scale(1) skew(1deg);
  }
}
#fixed-bar {
  margin: 0;
  padding: 0;
  z-index: 100;
  right: 3px;
  border-radius: 50%;
}
@media all and (max-width: 600px) {
  #fixed-bar {
    bottom: 54px !important;
  }
}
#fixed-bar #bar-inner {
  height: 50px;
  margin: 0 10px 0 auto;
}
#fixed-bar #bar-inner a {
  background: #fc860059;
  opacity: 0.7;
  display: block;
  border-radius: 50%;
  text-decoration: none;
  -moz-transition: all 0.2s ease-in 0;
  -webkit-transition: all 0.2s ease-in;
  -webkit-transition-delay: 0;
  transition: all 0.2s ease-in 0;
  width: 44px;
  height: 44px;
  text-align: center;
  line-height: 44px;
  box-sizing: border-box;
  transition: 0.5s;
  -moz-transition: 0.5s;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
}
#fixed-bar #bar-inner a svg {
  width: 20px;
  height: 20px;
  margin-top: 12px;
  fill: #fff;
  transition: 0.5s;
  -moz-transition: 0.5s;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
}
#fixed-bar:hover #bar-inner a {
  opacity: 1;
}
#fixed-bar:hover #bar-inner a svg {
  fill: var(--main-color);
}
.tag_foot {
  margin-top: 5px;
}
.tag_foot a {
  color: #bdbdbd;
}
@media all and (max-width: 800px) {
  .support {
    width: 100%;
    padding-left: 0px;
  }
}
@media all and (max-width: 600px) {
  .support {
    width: 100%;
    padding-right: 0;
  }
}
.support .item {
  position: relative;
  padding-left: 70px;
  padding-top: 15px;
  padding-bottom: 15px;
  color: #fff;
  margin-bottom: 20px;
}
@media all and (max-width: 800px) and (min-width: 500px) {
  .support .item {
    width: 50%;
    float: left;
    box-sizing: border-box;
  }
}
.support .item:nth-child(1) {
  background: #22d000;
}
.support .item:nth-child(2) {
  background: #e71b1b;
}
.support .item svg {
  position: absolute;
  width: 40px;
  height: 40px;
  fill: #fff;
  left: 15px;
}
.support .item span {
  text-transform: uppercase;
  font-size: 18px;
}
.support .item a {
  margin-top: 6px;
  color: #fff;
  font-style: italic;
  font-size: 16px;
  transition: 0.5s;
}
.support .item a:hover {
  color: #fff900;
}
#modal_alert {
  position: fixed;
  background: rgba(0, 0, 0, 0.75);
  z-index: 99999;
  overflow-y: auto;
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
}
.modal_alert_inner {
  width: 350px;
  background: white;
  border-radius: 2px;
  max-width: 96%;
  margin: 2% auto;
}
.modal_alert_title {
  background: var(--main-color);
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  padding: 7px 0;
  font-size: 17px;
  position: relative;
  border-radius: 2px 2px 0 0;
}
.modal_alert_title .close {
  position: absolute;
  right: 0px;
  padding: 0px 10px 8px;
  top: 7px;
  color: #fff;
  font-size: 22px;
}
.modal_alert_body {
  background: white;
  color: #616161;
  padding: 20px;
  -moz-user-select: text;
  -khtml-user-select: text;
  -webkit-user-select: text;
  -o-user-select: text;
  user-select: text;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
}
.modal_alert_2 {
  position: fixed;
  background: rgba(0, 0, 0, 0.75);
  z-index: 99999;
  overflow-y: auto;
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
}
.modal_alert_2 .modal_alert_inner {
  width: 350px;
  background: white;
  border-radius: 2px;
  max-width: 96%;
  margin: 2% auto;
}
.modal_alert_2 .modal_alert_title {
  background: var(--main-color);
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  padding: 7px 0;
  font-size: 17px;
  position: relative;
  border-radius: 2px 2px 0 0;
}
.modal_alert_2 .modal_alert_title .close {
  position: absolute;
  right: 0px;
  padding: 0px 10px 8px;
  top: 7px;
  color: #fff;
  font-size: 22px;
}
.modal_alert_2 .modal_alert_body {
  background: white;
  color: #616161;
  padding: 20px;
  -moz-user-select: text;
  -khtml-user-select: text;
  -webkit-user-select: text;
  -o-user-select: text;
  user-select: text;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
}
#embed_vchat {
  bottom: 70px !important;
}
#embed_fill {
  bottom: 60px !important;
}
#embed_circle {
  bottom: 53px !important;
}
.owl-carousel .owl-item .owl-lazy {
  opacity: 1 !important;
}
.popup {
  width: 100%;
  height: 700px;
  background: #ddddddab;
  position: fixed;
  z-index: 99999;
  text-align: center;
}
.popup .container {
  border-radius: 10px;
  position: relative;
  height: 100%;
}
@media all and (max-width: 800px) {
  .popup .container {
    padding: 10px;
  }
}
.popup .container .close {
  font-size: 25px;
  color: red;
  position: absolute;
  top: 0px;
  right: 0px;
  width: 30px;
  height: 30px;
  background: #fff;
  text-align: center;
  line-height: 28px;
  border-radius: 0 10px 0 0;
  cursor: pointer;
}
.popup .container .block_banner_banner {
  max-width: 600px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
@media all and (max-width: 600px) {
  .popup .container .block_banner_banner {
    max-width: 100%;
  }
}
.popup .container .block_banner_banner .item {
  position: relative;
}
.popup .container .block_banner_banner .item img {
  border-radius: 10px;
}
.popup .container .block_banner_banner .hide {
  display: block;
}
#cfacebookmb .fchat {
  float: left;
  width: 100%;
  height: 270px;
  overflow: hidden;
  display: none;
  background-color: #fff;
}
#cfacebookmb .fchat .fb-page {
  margin-top: -130px;
  float: left;
}
#cfacebookmb a.chat_mb:hover {
  color: #ff0;
  text-decoration: none;
}
#cfacebookmb {
  position: fixed;
  bottom: 100px;
  left: 10px;
  z-index: 100;
  height: auto;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  overflow: hidden;
}
#cfacebookmb a.chat_mb {
  float: left;
  padding: 6px 6px 0px 6px;
  color: #fff;
  text-decoration: none;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
  background-repeat: repeat-x;
  background-size: auto;
  background-position: 0 0;
  background-color: #006cd2;
  border: 0;
  z-index: 9999999;
  font-size: 15px;
  box-sizing: border-box;
  text-align: center;
  font-weight: bold;
  border-radius: 50%;
  display: block;
  position: relative;
}
#cfacebookmb a.chat_mb:after {
  display: none;
  width: 19px;
  height: 19px;
  color: #fff;
  content: "2";
  position: absolute;
  top: 0px;
  right: 0px;
  background: #3a5795;
  border-radius: 50%;
  font-size: 13px;
  line-height: 18px;
}
#cfacebookmb a.chat_mb svg {
  width: 34px;
  height: 34px;
}
#cfacebookmb a.chat_fb span {
  display: none;
}
#cfacebookmb .fchat .fb-page {
  margin-top: 0px;
  float: left;
}
#cfacebookmb a.chat_fb_openned {
  border-radius: 0;
  width: 100%;
}
#cfacebookmb a.chat_fb_openned svg {
  display: none;
}
#cfacebookmb a.chat_fb_openned i {
  display: none;
}
#cfacebookmb a.chat_fb_openned::after {
  display: none;
}
#cfacebookmb a.chat_fb_openned span {
  display: block;
}
#sms .fchat {
  float: left;
  width: 100%;
  height: 270px;
  overflow: hidden;
  display: none;
  background-color: #fff;
}
#sms .fchat .fb-page {
  margin-top: -130px;
  float: left;
}
#sms a.chat_mb:hover {
  color: #ff0;
  text-decoration: none;
}
#sms {
  position: fixed;
  top: 265px;
  right: 10px;
  z-index: 99999;
  height: auto;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  overflow: hidden;
}
#sms a.chat_mb {
  float: left;
  padding: 15px 15px 12px;
  color: #fff;
  text-decoration: none;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
  background-repeat: repeat-x;
  background-size: auto;
  background-position: 0 0;
  background-color: #ffae00;
  border: 0;
  z-index: 9999999;
  font-size: 15px;
  box-sizing: border-box;
  text-align: center;
  font-weight: bold;
  border-radius: 50%;
  display: block;
  position: relative;
}
#sms a.chat_mb svg {
  width: 30px;
  height: 30px;
  fill: #fff;
}
#zalo .fchat {
  float: left;
  width: 100%;
  height: 270px;
  overflow: hidden;
  display: none;
  background-color: #fff;
}
#sms .fchat .fb-page {
  margin-top: -130px;
  float: left;
}
#zalo a.chat_mb:hover {
  color: #ff0;
  text-decoration: none;
}
#zalo {
  position: fixed;
  left: 0px;
  z-index: 100;
  height: auto;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  overflow: hidden;
  bottom: 128px;
}
@media all and (min-width: 800px) {
  #zalo {
    bottom: 100px;
  }
}
#zalo a.chat_mb {
  float: left;
  padding: 0;
  color: #fff;
  text-decoration: none;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
  background-repeat: repeat-x;
  background-size: auto;
  background-position: 0 0;
  border: 0;
  z-index: 9999999;
  font-size: 15px;
  box-sizing: border-box;
  text-align: center;
  font-weight: bold;
  border-radius: 50%;
  display: block;
  position: relative;
  background: #0ea9e1;
  width: 36px;
  height: 36px;
  position: relative;
}
@media all and (min-width: 800px) {
  #zalo a.chat_mb {
    width: 56px;
    height: 56px;
  }
}
#zalo a.chat_mb:before {
  content: "";
  width: 25px;
  height: 25px;
  background-image: url(https://maychieuminikaw.com/templates/dienmaytl/images/zalo.png);
  position: absolute;
  top: 5px;
  left: 6px;
  background-size: cover;
}
@media all and (min-width: 800px) {
  #zalo a.chat_mb:before {
    width: 44px;
    height: 44px;
  }
}
#zalo a.chat_mb svg {
  width: 60px;
  height: 60px;
  fill: #fff;
}
#vgc_btn_chat_mobile {
  bottom: 55px !important;
}
.tab_fix {
  position: fixed;
  width: 100%;
  z-index: 999;
  bottom: 0px;
  background: var(--main-color);
}
.tab_fix li {
  width: 33.33%;
  float: left;
  padding: 10px 0;
  text-align: center;
}
.tab_fix li a {
  color: #fff;
}
.tab_fix li a svg {
  fill: #fff;
  width: 15px;
  height: 15px;
}
.region_list {
  max-height: 150px;
  overflow-y: scroll;
}
.ul_footer .li_f {
  position: relative;
  margin-bottom: 13px;
}
.ul_footer .li_f:nth-child(5) {
  margin-bottom: 1px;
}
.ul_footer .li_f .svg {
  float: left;
  padding: 8px;
  border: 1px solid #5d5d5d;
  width: 36px;
  height: 36px;
  box-sizing: border-box;
  border-radius: 3px;
}
.ul_footer .li_f .svg svg {
  width: 18px;
  height: 18px;
  fill: #fff;
}
.ul_footer .li_f .text {
  float: left;
  margin-left: 10px;
  font-size: 13px;
  width: calc(100% - 46px);
}
.ul_footer .li_f font {
  font-weight: bold;
}
.ul_footer2 .li_f {
  margin-bottom: 20px;
  position: relative;
}
@media all and (max-width: 600px) {
  .ul_footer2 .li_f {
    width: 50%;
    float: left;
  }
}
.ul_footer2 .li_f .svg {
  float: left;
  padding: 8px;
  border: 1px solid #5d5d5d;
  width: 36px;
  height: 36px;
  box-sizing: border-box;
  border-radius: 3px;
}
.ul_footer2 .li_f .svg svg {
  width: 18px;
  height: 18px;
  fill: #fff;
}
.ul_footer2 .li_f .text {
  float: left;
  margin-left: 10px;
  font-size: 13px;
  width: calc(100% - 46px);
}
.ul_footer2 .li_f font {
  font-weight: bold;
}
.footer_icon {
  padding: 15px 25px;
  box-sizing: border-box;
  border: 1px solid #404040;
}
.footer_icon .chung_nhan {
  padding-left: 50px;
  width: 50%;
  float: left;
  box-sizing: border-box;
}
@media all and (max-width: 600px) {
  .footer_icon .chung_nhan {
    width: 100%;
    padding-left: 0;
  }
}
.footer_icon .chung_nhan span {
  display: inline-block;
  float: left;
  line-height: 38px;
  margin-right: 50px;
  width: 80px;
}
@media all and (max-width: 800px) {
  .footer_icon .chung_nhan span {
    line-height: 26px;
  }
}
.footer_icon .chung_nhan .chung_nhan_inner {
  display: flex;
  float: left;
  width: calc(100% - 130px);
}
@media all and (max-width: 800px) {
  .footer_icon .chung_nhan .chung_nhan_inner {
    width: 100%;
  }
}
.footer_icon .chung_nhan a {
  display: inline-block;
  margin-right: 5px;
}
@media all and (max-width: 1200px) {
  .footer_icon .chung_nhan a img {
    height: auto;
  }
}
.height_auto {
  height: auto !important;
}
.position_auto {
  position: relative !important;
  bottom: auto !important;
}
.right_b .block_title {
  font-size: 18px;
  position: relative;
  color: #333;
  font-weight: bold;
  background: #ecececa3;
  padding: 16px 24px;
}
.right_b .block_title:after {
  position: absolute;
  height: 50px;
  width: 6px;
  background: var(--main-color);
  content: "";
  left: 0px;
  bottom: 0px;
}
@media only screen and (max-width: 550px) {
  .right_b .block_title {
    font-size: 16px;
    padding: 10px 16px;
  }
  .right_b .block_title:after {
    height: 38px;
    width: 3px;
  }
}
.right_b .blocks0 .news_list_body_default {
  margin-top: 26px;
}
@media only screen and (max-width: 550px) {
  .right_b .blocks0 .news_list_body_default {
    margin-top: 10px;
  }
}
.right_b .blocks1 .block_title {
  font-size: 18px;
  text-transform: uppercase;
  position: relative;
  color: #333;
  font-weight: bold;
}
.right_b .blocks1 .block_title:after {
  position: absolute;
  height: 4px;
  width: 68px;
  background: var(--main-color);
  content: "";
  left: 0px;
  bottom: -16px;
}
@media screen and (max-width: 768px) {
  .right_b .blocks1 .block_title {
    font-size: 16px;
  }
  .right_b .blocks1 .block_title:after {
    height: 2px;
  }
}
.display-flex {
  display: flex !important;
}
.display_open,
.display-open {
  display: block !important;
}
.display_off,
.display-off {
  display: none !important;
}
.full-screen-block-popup {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  background: #0000009c;
  display: none;
  z-index: 2000;
}
.mm-opening .all-navicon-line {
  transform: rotate(45deg);
}
.mm-opening .all-navicon-line .navicon-line-1 {
  transform: rotate(-45deg);
  margin-top: 8px;
  width: 28px;
}
.mm-opening .all-navicon-line .navicon-line-2 {
  transform: rotate(-135deg);
  margin-top: -8px;
  width: 28px;
}
.mm-opening .all-navicon-line .navicon-line-3 {
  display: none;
}
.fotorama__arr,
.fotorama__fullscreen-icon,
.fotorama__video-close,
.fotorama__video-play {
  background: url("https://maychieuminikaw.com/templates/dienmaytl/images/fotorama.png")
    no-repeat;
}
@media (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 2dppx) {
  .fotorama__arr,
  .fotorama__fullscreen-icon,
  .fotorama__video-close,
  .fotorama__video-play {
    background: url("https://maychieuminikaw.com/templates/dienmaytl/images/fotorama@2x.png")
      0 0/96px 160px no-repeat;
  }
}
.header_wrapper_img {
  background-position: center;
  background-repeat: repeat-x;
  background-size: 100%;
}
.bg_footer_img {
  background-position: top;
  background-repeat: repeat-x;
  background-size: 100%;
}
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 60px;
  height: 60px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
  position: fixed;
  top: 50%;
  left: 50%;
  z-index: 1111;
  transform: translate(-50%, -50%);
  display: none;
}
@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.top-head {
  background: var(--sub-color);
  padding: 9px 0px;
}
@media screen and (max-width: 550px) {
  .top-head {
    padding: 4px 0px;
  }
}
.top-head .box-l {
  width: 300px;
  float: left;
}
@media screen and (max-width: 880px) {
  .top-head .box-l {
    display: none;
  }
}
.top-head .box-l a {
  color: #fff;
  position: relative;
  padding-left: 22px;
  margin-right: 36px;
  margin-top: 2px;
  display: inline-block;
  font-size: 13px;
}
.top-head .box-l a:nth-child(2) svg {
  transform: rotate(258deg);
}
.top-head .box-l svg {
  position: absolute;
  width: 16px;
  height: 16px;
  fill: #fff;
  left: -1px;
  top: 0px;
}
@media all and (max-width: 880px) {
  .top-head .box-l a {
    margin-right: 0px;
  }
  .top-head .box-l a:nth-child(1),
  .top-head .box-l a:nth-child(3) {
    display: none;
  }
}
.top-head .box-c {
  width: calc(100% - 500px);
  float: right;
}
@media all and (max-width: 880px) {
  .top-head .box-c {
    width: calc(100% - 90px);
    float: right;
  }
}
@media all and (max-width: 380px) {
  .top-head .box-c {
    width: 100%;
  }
}
.top-head .box-r {
  width: 90px;
  float: right;
}
@media all and (max-width: 380px) {
  .top-head .box-r {
    display: none;
  }
}
.coppy-right {
  font-size: 14px;
  text-align: center;
  background: #e0e0e0;
  line-height: 38px;
}
@media all and (max-width: 550px) {
  .coppy-right {
    font-size: 14px;
    line-height: 20px;
    padding: 10px 0px;
  }
}
.box-bct {
  width: 50%;
  float: right;
  text-align: left;
}
.box-bct > a {
  display: block;
}
.box-bct img {
  max-width: 150px;
}
@media all and (max-width: 550px) {
  .box-bct {
    width: 100%;
    float: none;
    text-align: center;
  }
}
@media all and (max-width: 768px) {
  .strengths#strengths_content .title_strengths {
    margin-bottom: 25px !important;
  }
  .strengths#strengths_content .contents .frame_images {
    max-width: none !important;
    width: 100% !important;
    position: static !important;
    transform: translate(0) !important;
    text-align: center;
  }
  .strengths#strengths_content .contents .item {
    width: 100% !important;
    padding: 0px 0px 0px 70px !important;
  }
  .strengths#strengths_content .contents .item img {
    width: 60px !important;
    height: 60px !important;
    left: 0px !important;
  }
  .strengths#strengths_content .contents .item p:first-child {
    margin-bottom: 5px;
  }
}
.image_r {
  margin-bottom: 30px;
}
.image_r .frame_image {
  text-align: right;
}
.content_inner {
  margin-bottom: 20px;
  line-height: 24px;
}
.image_l {
  margin-bottom: 30px;
}
.image_l .frame_image {
  text-align: left;
}
.image_r,
.text_inside {
  opacity: 1;
  transition: all 0.3s ease;
  transform: translateY(0px);
}
.image_r .content .description_inner,
.text_inside .content .description_inner {
  max-height: 250px;
  overflow-y: auto;
  padding-right: 15px;
  text-align: justify;
}
.image_r .content .description_inner::-webkit-scrollbar-track,
.text_inside .content .description_inner::-webkit-scrollbar-track {
  border-radius: 5px;
  background-color: #ccc !important;
}
.image_r .content .description_inner::-webkit-scrollbar-thumb,
.text_inside .content .description_inner::-webkit-scrollbar-thumb {
  border: 0;
}
.image_r.hello,
.text_inside.hello {
  opacity: 1;
  visibility: visible;
  transform: translateY(0px);
  transition: all 1s ease;
}
.text_inside {
  position: relative;
  width: 100%;
}
.text_inside .frame_images {
  padding-top: 30px;
}
.text_inside .contents {
  width: 500px;
}
.text_inside .contents .description_inner {
  max-height: 220px;
  overflow-y: auto;
  padding-right: 15px;
  text-align: justify;
}
.text_inside .contents .description_inner::-webkit-scrollbar-track {
  border-radius: 5px;
  background-color: #ccc !important;
}
.text_inside .contents .description_inner::-webkit-scrollbar-thumb {
  border: 0;
}
.strengths .title_strengths {
  text-align: center;
  margin-bottom: 100px;
  font-weight: bold;
}
.strengths .title_strengths span {
  font-size: 25px;
}
.strengths .contents .frame_images img {
  opacity: 1;
  transform: translateY(0px);
  transition: all 0.3s;
}
.strengths .contents .item {
  transition: all 0.3s;
}
.strengths .contents .item .effect_img {
  animation: rotate 3s running infinite linear 0.5s;
}
.strengths .contents .item .title_str {
  color: var(--main-color);
}
.strengths .contents .item img {
  position: absolute;
  top: 20px;
}
@media all and (max-width: 768px) {
  .strengths .contents .item img {
    position: absolute;
    top: 50%;
    transform: translate(0px, -50%);
  }
}
.strengths .contents .item span {
  color: var(--main-color);
  font-weight: bold;
  font-size: 16px;
  text-transform: uppercase;
  margin-bottom: 10px;
  display: inline-block;
}
.strengths .contents .content_des {
  padding-bottom: 25px;
  border-bottom: 1px solid var(--main-color);
  margin-bottom: 10px;
  position: relative;
}
.strengths .contents .content_des:before {
  position: absolute;
  width: 8px;
  height: 8px;
  background-color: var(--main-color);
  content: "";
  border-radius: 50px;
  bottom: -4px;
}
.strengths .contents .item1,
.strengths .contents .item3,
.strengths .contents .item5 {
  transform: translate(0px, 0);
  opacity: 1;
}
.strengths .contents .item1 img,
.strengths .contents .item3 img,
.strengths .contents .item5 img {
  left: 0px;
}
.strengths .contents .item1 .content_des:before,
.strengths .contents .item3 .content_des:before,
.strengths .contents .item5 .content_des:before {
  right: 0px;
}
.strengths .contents .item2,
.strengths .contents .item4,
.strengths .contents .item6 {
  transform: translate(0px, 0);
  opacity: 1;
}
.strengths .contents .item2 img,
.strengths .contents .item4 img,
.strengths .contents .item6 img {
  left: 160px;
}
.strengths.hello .item {
  opacity: 1;
  visibility: visible;
  transform: translate(0);
  transition: all 1s ease;
}
.strengths.hello .item3,
.strengths.hello .item4 {
  transition-delay: 0.3s;
}
.strengths.hello .frame_images img {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
  transition: all 1s ease 0.3s;
}
.customers_table_div {
  border-collapse: collapse;
  width: 100%;
}
.customers_table_div .td,
.customers_table_div .th {
  padding: 8px 5px;
  box-sizing: border-box;
  display: inline-block;
  position: relative;
}
.customers_table_div .tr:nth-child(even) {
  background-color: #f2f2f24f;
}
.customers_table_div .tr:hover {
  background-color: #ddd;
}
.customers_table_div .th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: var(--main-color);
  color: white;
}
.customers_table {
  border-collapse: collapse;
  width: 100%;
}
.customers_table td,
.customers_table th {
  border: 1px solid #ddd;
  padding: 8px;
}
.customers_table tr:nth-child(even) {
  background-color: #f2f2f2;
}
.customers_table tr:hover {
  background-color: #ddd;
}
.customers_table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: var(--main-color);
  color: white;
}
.share-point {
  display: inline-block;
  height: 20px;
  background: #1877f2;
  color: #fff;
  border-radius: 3px;
  padding: 0px 7px 0px 22px;
  box-sizing: border-box;
  position: relative;
  line-height: 20px;
  cursor: pointer;
  font-size: 12px;
}
.share-point svg {
  position: absolute;
  fill: #fff;
  left: 5px;
  top: 3px;
  width: 13px;
  height: 13px;
}
#loading_box {
  position: fixed;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 100000;
  opacity: 0;
  visibility: hidden;
}
#loading_image {
  width: 100%;
  height: 100%;
  background: url("https://maychieuminikaw.com/templates/dienmaytl/images/giphy.gif")
    no-repeat center center;
  -webkit-background-size: 70px 70px;
  background-size: 70px 70px;
}
/*# sourceMappingURL=template.css.map */
.admin_edit {
  position: absolute;
  z-index: 9999;
}
.admin_edit a {
  width: 20px;
  height: 20px;
  background-image: url("https://maychieuminikaw.com/templates/dienmaytl/images/edit.png");
  display: inline-block;
}
.block_area .name_block {
  position: absolute;
  background: #ffffff94;
  z-index: 999;
}
.position_area {
  background: #fff;
  position: relative;
}
.position_area .position_area_label {
  position: absolute;
  z-index: 9999;
  top: 0px;
  background: #ffffff94;
}
.position_area .block_area_label {
  position: absolute;
  z-index: 9999;
  top: 18px;
  background: #ffffff94;
}
.admin_edit_block {
  position: absolute;
  z-index: 9999;
  top: -3px;
  background: #ffffff;
  padding: 5px;
  width: 75px;
  left: 20px;
  padding-left: 10px;
}
.admin_edit_block a {
  font-weight: bold;
  color: blue;
}
.admin_edit_module {
  position: absolute;
  z-index: 9999;
  top: 25px;
  left: 20px;
  padding: 5px;
  background: #ffffff;
  width: 100px;
  padding-left: 10px;
}
.admin_edit_module a {
  font-weight: bold;
  color: blue;
}
.setting_admin {
  position: absolute;
  z-index: 9999;
  top: 36px;
  background: #ffffff94;
  left: 0px;
  width: 20px;
  height: 20px;
  background-image: url("https://maychieuminikaw.com/templates/dienmaytl/images/setting.png");
  display: inline-block;
  cursor: pointer;
  overflow: hidden;
}
.setting_admin:hover {
  overflow: unset;
}
.admin_edit_detail {
  position: absolute;
  z-index: 9999;
  right: 0px;
  bottom: 0px;
  padding: 5px;
  background: #ffffff94;
}
.admin_edit_detail a {
  width: 20px;
  height: 20px;
  background-image: url("https://maychieuminikaw.com/templates/dienmaytl/images/edit_content.png");
  display: inline-block;
}
.admin_edit_detail_md {
  z-index: 9999;
  right: 0px;
  bottom: 0px;
  padding: 5px;
  background: #ffffff94;
}
.admin_edit_detail_md a {
  color: blue;
  font-weight: bold;
  background-image: url("https://maychieuminikaw.com/templates/dienmaytl/images/edit_content.png");
  background-repeat: no-repeat;
  display: inline-block;
  padding-left: 25px;
}
.admin_edit_block_direct {
  position: absolute;
  z-index: 9999;
  top: 20px;
  padding: 5px;
  background: #ffffff94;
}
.admin_edit_block_direct a {
  width: 20px;
  height: 20px;
  background-image: url("https://maychieuminikaw.com/templates/dienmaytl/images/edit_content.png");
  display: inline-block;
}
/*# sourceMappingURL=admin_edit.css.map */
.detail_inner_l {
  width: 60%;
  float: left;
}
@media all and (max-width: 800px) {
  .detail_inner_l {
    width: 100%;
    float: none;
    margin-bottom: 25px;
  }
}
.detail_inner_r {
  width: calc(40% - 20px);
  float: right;
  padding: 20px;
  box-sizing: border-box;
  background: #fff;
}
@media all and (max-width: 800px) {
  .detail_inner_r {
    width: 100%;
    float: none;
    margin-bottom: 25px;
    padding: 20px 10px;
  }
}
.detail_inner_r h1 {
  font-size: 18px;
  font-weight: bold;
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}
#buy-type {
  text-align: center;
  margin-bottom: 15px;
}
#buy-type .btn-buy {
  text-align: center;
  padding: 5px;
  border-radius: 4px;
  transition: all 0.3s ease;
  border: solid 1px #ddd;
  display: inline-block;
  width: 240px;
  margin: 0 2px;
  color: #666;
}
#buy-type .btn-buy b {
  text-transform: uppercase;
  font-size: 16px;
  display: block;
}
#buy-type .btn-buy.active,
#buy-type .btn-buy:hover {
  border-color: var(--blue-color);
  color: var(--blue-color);
}
#form-login {
  background: #fff;
}
#form-login .btn {
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
    border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
#form-login .btn-login {
  width: 112px;
  font-size: 1em;
  color: #fff;
  padding: 0;
  transition: all 0.2s ease;
}
#form-login .btn-login i {
  width: 33px !important;
  height: 33px !important;
  display: block;
  float: left;
  line-height: 33px;
  border-right: solid 1px #8c8c8c;
  position: relative;
}
#form-login .btn-login i svg {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
#form-login .btn-login span {
  padding: 0.375rem 0;
  display: block;
}
#form-login .fb {
  background: #3b5998;
}
#form-login .go {
  background: #df4a32;
}
#form-login .zl {
  background: #0f8edd;
}
#form-login .btn-primary {
  color: #fff;
  background-color: #d9282f;
  border-color: #d9282f;
  width: 100%;
  cursor: pointer;
}
#form-login .form-login {
  padding: 0px 1rem 1rem;
}
#form-login .form-login .form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  box-sizing: border-box;
}
.title-box-cart {
  line-height: 40px;
  background-color: var(--main-color);
  text-transform: uppercase;
  font-weight: bold;
  font-size: 16px;
  padding: 0 10px;
  color: #fff;
  margin-bottom: 10px;
}
#eshopcart_info .sex {
  background: #fff;
  padding: 15px;
}
#eshopcart_info .sex label {
  margin-bottom: 0;
  margin-right: 30px;
  display: inline-block;
}
#eshopcart_info .input_text {
  display: block;
  width: calc(100% - 10px);
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  box-sizing: border-box;
  margin: 5px;
}
#eshopcart_info .input_text_50 {
  width: calc(50% - 10px);
}
@media all and (max-width: 500px) {
  #eshopcart_info .input_text_50 {
    width: 100%;
  }
}
#eshopcart_info .input_text_33 {
  width: calc(33.333% - 10px);
}
@media all and (max-width: 500px) {
  #eshopcart_info .input_text_33 {
    width: 100%;
  }
}
#eshopcart_info .box-input {
  display: flex;
  flex-wrap: wrap;
  padding: 10px;
  margin-bottom: 30px;
}
@media all and (max-width: 500px) {
  #eshopcart_info .box-input {
    padding: 5px;
  }
}
#tax-invoice {
  border: solid 1px #ddd;
  background: #fbfbfb;
  margin: 20px 0px;
  padding: 15px;
}
.all-button-cart .back-home {
  text-transform: uppercase;
  font-size: 14px;
  color: var(--main-color);
  font-weight: bold;
  padding-top: 9px;
  display: inline-block;
  position: relative;
  padding-left: 30px;
}
.all-button-cart .back-home svg {
  height: 20px;
  width: 20px;
  fill: var(--main-color);
  position: absolute;
  left: 0px;
  top: 7px;
}
@media all and (max-width: 500px) {
  .all-button-cart .back-home span {
    display: none;
  }
}
.all-button-cart .button-submit {
  background: var(--main-color);
  color: #fff;
  padding: 7px 20px;
  font-size: 15px;
  border-radius: 3px;
  -moz-border-radius: 3px;
  border: solid 1px var(--main-color);
  display: inline-block;
  cursor: pointer;
  float: right;
  text-transform: uppercase;
}
.checkbox,
.radio {
  display: inline-block;
}
.checkbox input,
.radio input {
  display: none;
}
.checkbox input:checked ~ .icon {
  background: var(--main-color);
  border-color: var(--main-color);
  position: relative;
}
.checkbox input:checked ~ .icon:before {
  content: "";
  display: inline-block;
  line-height: 13px;
  width: 13px;
  height: 13px;
  font-size: 11px;
  color: #ffffff;
  position: absolute;
  left: 0;
  font-weight: normal;
  background: url('data:image/svg+xml;utf8,<svg fill="white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 515.556 515.556" height="13px" viewBox="0 0 515.556 515.556" width="13px"><path d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z"/></svg>');
  background-repeat: no-repeat;
}
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
.checkbox .icon,
.radio .icon {
  height: 13px;
  width: 13px;
  background: #fff;
  border: solid 2px #ddd;
  display: inline-block;
  border-radius: 2px;
  vertical-align: middle;
  margin-right: 4px;
  position: relative;
  margin-top: -3px;
}
.checkbox input:checked ~ .icon:before,
.radio input:checked ~ .icon:before {
  display: inline-block;
  line-height: 13px;
  height: 13px;
  font-size: 11px;
  color: #ffffff;
  position: absolute;
  left: 0;
  font-weight: normal;
}
.sex .radio input:checked ~ .icon {
  border-color: var(--main-color);
}
.sex .checkbox input:checked ~ .icon:before,
.radio input:checked ~ .icon:before {
  display: inline-block;
  line-height: 13px;
  height: 13px;
  font-size: 11px;
  color: #ffffff;
  position: absolute;
  left: 0;
  font-weight: normal;
}
.sex .radio input:checked ~ .icon:before {
  background-color: #000;
  content: "";
  display: block;
  width: 5px;
  height: 5px;
  border-radius: 100%;
  left: 2px;
  top: 2px;
}
.radio .icon {
  border-radius: 50% !important;
  background: #ffffff;
  border: solid 2px #bbb;
  overflow: hidden;
}
.active .radio .icon {
  border-color: var(--main-color) !important;
}
.active .radio .icon:before {
  background-color: #000 !important;
  content: "";
  display: inline-block !important;
  width: 5px !important;
  height: 5px !important;
  border-radius: 50% !important;
  left: 2px !important;
  top: 2px !important;
  position: absolute !important;
}
.reset-pass {
  margin-bottom: 0.5rem !important;
  margin-top: 0.5rem !important;
}
.reset-pass a {
  color: var(--blue-color);
}
.m-3 {
  display: block;
  margin: 1rem !important;
}
.mb-2 {
  margin-bottom: 0.5rem !important;
}
.fs-16 {
  font-size: 16px;
}
.shadow {
  box-shadow: 0 0 8px #ddd !important;
}
.overflow-hidden {
  overflow: hidden !important;
}
.text-center {
  text-align: center !important;
}
hr {
  border: 0;
  border-top: 1px solid #eee;
  margin: 0.75em 0;
}
#tax-form table {
  display: none;
}
.table-wrap .row-table {
  display: flex;
  flex-wrap: wrap;
  border-bottom: 1px solid #eee;
}
@media all and (max-width: 500px) {
  .table-wrap .row-table {
    display: flex;
    flex-wrap: wrap;
    border-bottom: 1px solid #eee;
    position: relative;
    padding-left: 100px;
    padding-bottom: 30px;
    line-height: 22px;
    padding-top: 10px;
  }
}
.table-wrap .row-table .col-td {
  width: 100px;
  padding: 10px 8px 5px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.table-wrap .row-table .col-td .price {
  display: block;
  font-weight: bold;
  color: #df4a32;
  font-size: 16px;
  margin-bottom: 10px;
}
@media all and (max-width: 500px) {
  .table-wrap .row-table .col-td .price {
    font-size: 15px;
    margin-bottom: 5px;
  }
}
.table-wrap .row-table .col-td:nth-child(1) {
  text-align: center;
}
@media all and (max-width: 500px) {
  .table-wrap .row-table .col-td:nth-child(1) {
    text-align: center;
    position: absolute;
    left: 0px;
    padding: 10px 0px;
  }
}
.table-wrap .row-table .col-td:nth-child(1) img {
  width: 90px;
}
.table-wrap .row-table .col-td:nth-child(2) {
  width: calc(100% - 200px);
}
@media all and (max-width: 500px) {
  .table-wrap .row-table .col-td:nth-child(2) {
    width: 100%;
    padding: 0px 0px 0px 5px;
  }
}
.table-wrap .row-table .col-td:last-child {
  border-right: none;
}
@media all and (max-width: 500px) {
  .table-wrap .row-table .col-td:last-child {
    border-right: none;
    width: 120px;
    padding-top: 0px;
    padding: 0px 0px 0px 5px;
  }
}
.table-wrap .row-table .col-td .name-item {
  display: block;
  font-weight: bold;
}
.table-wrap .row-table .col-td .string_info_extent {
  font-size: 12px;
}
.table-wrap .row-table .col-td .del-item {
  color: #626262;
  position: relative;
  padding-left: 20px;
  margin-top: 3px;
  display: inline-block;
}
.table-wrap .row-table .col-td .del-item svg {
  width: 16px;
  height: 16px;
  position: absolute;
  left: 0px;
}
.table-wrap .row-table .col-td-number .error-number-item {
  color: red;
}
.table-wrap .row-table .col-td-number .btn-minus,
.table-wrap .row-table .col-td-number .btn-plus {
  width: 27%;
  height: 36px;
  display: block;
  border: 1px solid #d8d7d7;
  text-align: center;
  box-sizing: border-box;
  font-size: 20px;
  padding-top: 6px;
  cursor: pointer;
}
.table-wrap .row-table .col-td-number .btn-minus {
  float: left;
  border-right: 0px;
  border-radius: 3px 0px 0px 3px;
}
.table-wrap .row-table .col-td-number .btn-plus {
  float: left;
  border-left: 0px;
  border-radius: 0px 3px 3px 0px;
}
.table-wrap .row-table .col-td-number .numbers-pro {
  text-align: center;
  width: 46%;
  height: 36px;
  padding: 2px 10px;
  border: 1px solid #d8d7d7;
  color: #333;
  display: block;
  box-sizing: border-box;
  margin-right: 0px;
  float: left;
}
.payment-type {
  background: #fff;
  padding: 25px 20px 18px;
  border: 1px solid #eee;
  margin-bottom: 25px;
}
@media all and (max-width: 500px) {
  .payment-type {
    padding: 15px 10px 10px;
  }
}
.payment-type .container-rd {
  display: block;
  position: relative;
  margin-bottom: 12px;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.payment-type .container-rd input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  left: 0px;
}
.payment-type .checkmark {
  position: absolute;
  top: -2px;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
  border-radius: 50%;
}
.payment-type .container-rd:hover input ~ .checkmark {
  background-color: #ccc;
}
.payment-type .container-rd input:checked ~ .checkmark {
  background-color: #2196f3;
}
.payment-type .checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
.payment-type .container-rd input:checked ~ .checkmark:after {
  display: block;
}
.payment-type .container-rd .checkmark:after {
  top: 7px;
  left: 7px;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: white;
}
.total-card-code .note {
  font-size: 12px;
  color: #d9282f;
  margin-top: 7px;
}
.total-card-code .card_code {
  margin-top: 20px;
}
.total-card-code .card_code input {
  width: calc(100% - 130px);
  float: left;
  border: 1px solid #eee;
  line-height: 36px;
  padding: 0 10px;
  box-sizing: border-box;
  border-right: 0px;
}
.total-card-code .ship-total {
  margin-top: 20px;
}
.total-card-code .ship-total .total-mn,
.total-card-code .ship-total .cart-code-mn,
.total-card-code .ship-total .payment_method_5,
.total-card-code .ship-total .payment_method_6 {
  font-size: 14px;
  margin-bottom: 10px;
}
.total-card-code .ship-total .ship-mn {
  padding-bottom: 14px;
  border-bottom: 1px solid #eee;
  margin-bottom: 10px;
}
.total-card-code .ship-total .total-price-inner {
  font-size: 15px;
  color: #d9282f;
}
.total-card-code .ship-total font {
  width: 180px;
  display: inline-block;
  float: left;
  text-transform: uppercase;
}
.total-card-code .ship-total span {
  width: calc(100% - 180px);
  float: left;
}
.resubmit_form {
  border: none;
  background: #f6f6f6;
  line-height: 38px;
  width: 130px;
  text-align: center;
  float: right;
  cursor: pointer;
}
.resubmit_form:hover {
  background: #c90008;
  color: #fff;
}
.no-product-cart a {
  color: var(--blue-color);
}
.list_bankings {
  display: flex;
  flex-wrap: wrap;
  margin: 0px 0px 15px;
  border: 1px solid #ddd;
  padding: 10px;
  display: none;
}
.list_bankings .item {
  width: calc(50% - 20px);
  margin: 0px 10px 10px;
}
#addess_books {
  width: calc(100% - 10px);
  margin: 5px;
}
#addess_books select {
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  height: 38px;
  padding: 10px 12px;
  width: 200px;
}
#massage_voucher {
  margin-top: 5px;
  color: #288ad6;
}
#distance_form {
  width: 160px;
  height: 38px;
  background: #288ad6;
  border: none;
  color: #fff;
  margin: 5px;
  padding: 10px;
  border-radius: 4px;
  cursor: pointer;
}
.gift_price_next {
  margin-top: 10px;
  color: var(--main-color);
  line-height: 20px;
  border: 1px dashed var(--main-color);
  padding: 7px 10px;
}
@keyframes chang-color-anim {
  0% {
    color: #0187cf;
  }
  30% {
    color: #f79606;
  }
  70% {
    color: #cd1c2c;
  }
}
.note-payment {
  line-height: 22px;
  padding-top: 30px;
}
.wrap_list_banks_onepay .step,
.wrap_list_banks_alepay .step {
  font-weight: bold;
  margin: 10px 0px;
}
.wrap_list_banks_onepay .images_banks,
.wrap_list_banks_onepay .card_item_group,
.wrap_list_banks_alepay .images_banks,
.wrap_list_banks_alepay .card_item_group {
  display: flex;
  flex-wrap: wrap;
  margin: 0px -5px;
}
.wrap_list_banks_onepay .item,
.wrap_list_banks_onepay .card_item,
.wrap_list_banks_alepay .item,
.wrap_list_banks_alepay .card_item {
  width: calc(20% - 10px);
  margin: 0px 5px 10px;
  border: 1px solid #ededed;
  text-align: center;
  padding: 5px;
  box-sizing: border-box;
  cursor: pointer;
  transition: 0.2s;
  float: left;
}
@media all and (max-width: 600px) {
  .wrap_list_banks_onepay .item,
  .wrap_list_banks_onepay .card_item,
  .wrap_list_banks_alepay .item,
  .wrap_list_banks_alepay .card_item {
    width: calc(25% - 10px);
  }
}
.wrap_list_banks_onepay .item img,
.wrap_list_banks_onepay .card_item img,
.wrap_list_banks_alepay .item img,
.wrap_list_banks_alepay .card_item img {
  object-fit: contain;
}
.wrap_list_banks_onepay .item:hover,
.wrap_list_banks_onepay .card_item:hover,
.wrap_list_banks_alepay .item:hover,
.wrap_list_banks_alepay .card_item:hover {
  border: 1px solid var(--main-color);
}
@media all and (max-width: 600px) {
  .wrap_list_banks_onepay .item,
  .wrap_list_banks_alepay .item {
    width: calc(33.333% - 10px);
  }
  .wrap_list_banks_onepay .item img,
  .wrap_list_banks_alepay .item img {
    height: 30px;
  }
}
.wrap_list_banks_onepay .actived,
.wrap_list_banks_alepay .actived {
  border: 1px solid #000;
  background: #000;
  color: #fff;
}
.images_cards .card_item {
  display: none;
}
.times_item_group {
  display: none;
}
.select_time_one_pay {
  border: 1px solid #03a9f4;
  display: inline-block;
  padding: 5px;
  border-radius: 3px;
  color: #03a9f4;
}
.select_time_one_pay:hover {
  border: 1px solid var(--main-color);
  color: var(--main-color);
}
.select_time_alepay {
  border: 1px solid #03a9f4;
  display: inline-block;
  padding: 5px;
  border-radius: 3px;
  color: #03a9f4;
  width: 100%;
  box-sizing: border-box;
}
.select_time_alepay:hover {
  border: 1px solid var(--main-color);
  color: var(--main-color);
}
.center_td {
  text-align: center;
}
.bold_td {
  font-weight: 700;
}
.color_blue {
  color: #03a9f4;
}
.customers_table {
  font-size: 13px;
  border-collapse: collapse;
  width: 100%;
}
@media all and (max-width: 600px) {
  .customers_table {
    white-space: nowrap;
    display: flex;
  }
}
@media all and (max-width: 600px) {
  .customers_table tbody {
    overflow: auto;
  }
}
.customers_table td,
.customers_table th {
  border: 1px solid #ddd;
  padding: 8px;
}
@media all and (max-width: 600px) {
  .customers_table .type_pay {
    width: 15%;
  }
}
.customers_table tr:nth-child(even) {
  background-color: #f2f2f2;
}
.customers_table tr:hover {
  background-color: #ddd;
}
.customers_table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04aa6d;
  color: white;
}
.all-button-cart {
  margin-top: 30px;
}
/*# sourceMappingURL=cart.css.map */
.search-contain {
  width: 100%;
  max-width: 100%;
  box-sizing: border-box;
  float: left;
}
@media all and (max-width: 800px) {
  .search-contain {
    float: none;
    margin: auto;
  }
}
.search-contain .search-content {
  border-radius: 4px;
  border: none;
}
.search-contain input[type="text"] {
  background: #fff;
  width: 100%;
  height: 40px;
  padding-left: 20px;
  box-sizing: border-box;
  font-size: 13px;
  border-radius: 3px;
  border: none;
}
#search_form {
  position: relative;
}
.button-search {
  width: 60px;
  height: 40px;
  position: absolute;
  background: no-repeat;
  border: none;
  right: 0;
  top: 0px;
  border-radius: 41px;
}
.button-search svg {
  width: 16px;
  height: 40px;
  border-radius: 24px;
  background: transparent;
  color: #7d7d7d;
  fill: #7d7d7d;
}
.button-search i {
  width: 26px;
  height: 29px;
  background-position: 0px 0px;
  display: block;
  margin-left: 11px;
  margin-top: 4px;
}
.autocomplete-suggestions {
  position: absolute;
  top: 4px;
  right: -5px;
  margin: 6px 0 0 6px;
  _background: none;
  _margin: 1px 0 0 0;
}
.autocomplete-suggestions {
  border: 1px solid #ececec;
  background: #fff;
  cursor: default;
  overflow: auto;
  margin: 0 0px 6px -1px;
  width: 100%;
  top: 31px;
  left: 101px;
}
@media only screen and (min-width: 1180px) {
  .autocomplete-suggestions {
    width: 33% !important;
  }
}
@media only screen and (max-width: 1024px) {
  .autocomplete-suggestions {
    top: 66px;
    left: 263px;
  }
}
@media only screen and (max-width: 768px) {
  .autocomplete-suggestions {
    top: 56px;
    left: 158px;
  }
}
@media only screen and (max-width: 414px) {
  .autocomplete-suggestions {
    top: 44px;
    left: 91px;
  }
}
.autocomplete-suggestions driv {
  cursor: pointer;
  width: 100%;
  display: inline-block;
  clear: both;
  padding: 0;
  margin: 0;
  margin-bottom: -5px;
}
.autocomplete-suggestions .autocomplete-group {
  padding: 8px 3%;
  width: 100%;
  background: #f9f9f9;
  box-sizing: border-box;
}
.autocomplete-suggestions div a,
.autocomplete-suggestions div a:link,
.autocomplete-suggestions div a:visited {
  display: inline-block;
  margin: 0;
  padding: 6px 3%;
  width: 100%;
  font-size: 13px;
  color: #333;
  background: #fff;
  clear: both;
  border-bottom: 1px solid #eee;
  box-sizing: border-box;
}
.autocomplete-suggestions div a:hover {
  background: #ececec;
}
.autocomplete-suggestions div a img {
  width: 64px;
  float: left;
  margin-right: 20px;
}
.autocomplete-suggestions div a label {
  font-weight: normal;
  cursor: pointer;
  margin: 0;
  float: left;
  width: calc(100% - 84px);
}
.autocomplete-suggestions div a span {
  display: block;
  clear: both;
  cursor: pointer;
  margin: 0;
  padding: 0;
}
.autocomplete-suggestions div a span.price {
  color: #fd0000;
  padding-top: 10px;
}
.autocomplete-suggestions div.last {
  border: none;
}
.autocomplete-suggestions strong {
  font-weight: 500;
  color: #0083bf;
}
.autocomplete-suggestions::-webkit-scrollbar-track {
  border-radius: 15px;
  background-color: #fff;
}
.autocomplete-suggestions::-webkit-scrollbar {
  width: 5px;
  background-color: #fff;
  border-radius: 15px;
}
.autocomplete-suggestions::-webkit-scrollbar-thumb {
  border-radius: 15px;
  background: var(--main-color);
  border: 1px solid #fff;
}
@media only screen and (max-width: 450px) {
  .search-contain {
    width: 100%;
  }
}
/*# sourceMappingURL=search.css.map */
.shopcart_simple {
  position: relative;
}
.shopcart_simple .buy_icon {
  display: inline-block;
  color: #fff;
  position: relative;
  padding-left: 32px;
}
.shopcart_simple .buy_icon svg {
  width: 20px;
  height: 20px;
  fill: #fff;
  transition: 0.5s;
  position: absolute;
  left: 0px;
  top: 0px;
}
.shopcart_simple .buy_icon .text-mn {
  display: block;
}
@media screen and (max-width: 760px) {
  .shopcart_simple .buy_icon .text-mn,
  .shopcart_simple .buy_icon .text-c {
    display: none;
  }
  .shopcart_simple .buy_icon svg {
    top: -21px;
    width: 28px;
    height: 28px;
  }
}
@media all and (max-width: 420px) {
  .shopcart_simple .buy_icon svg {
    top: -18px;
    width: 23px;
    height: 23px;
  }
}
@media all and (max-width: 350px) {
  .shopcart_simple .buy_icon svg {
    width: 21px;
    height: 22px;
  }
}
.shopcart_simple .buy_icon .quality {
  color: #ff2244;
  font-size: 12px;
  display: inline-block;
  width: 16px;
  height: 16px;
  text-align: center;
  border-radius: 50%;
  transition: 0.5s;
  position: absolute;
  top: -8px;
  left: 10px;
  background: #ffeb3b;
}
@media screen and (max-width: 760px) {
  .shopcart_simple .buy_icon .quality {
    top: -26px;
    left: 12px;
  }
}
@media all and (max-width: 420px) {
  .shopcart_simple .buy_icon .quality {
    top: -23px;
  }
}
/*# sourceMappingURL=shopcart_simple.css.map */
.dcjq-mega-menu #megamenu {
  z-index: 99;
}
.top_menu .active a {
  color: var(--main-color);
}
#megamenu .menu-sepa {
  display: none;
}
.dcjq-mega-menu ul.menu li.level_0 {
  float: left;
  padding-right: 5px;
  text-align: center;
  box-sizing: border-box;
  display: flex;
}
@media all and (max-width: 1260px) {
  .dcjq-mega-menu ul.menu li.level_0 {
    padding-right: 30px;
  }
}
@media screen and (max-width: 1110px) {
  .dcjq-mega-menu ul.menu li.level_0 {
    padding-right: 5px;
  }
}
.dcjq-mega-menu ul.menu li.level_0:hover svg {
  fill: var(--main-color);
}
.dcjq-mega-menu ul.menu li.level_0:last-child {
  border-right: none;
  padding-right: 0px;
}
.dcjq-mega-menu ul.menu li.home.mega-hover a,
.dcjq-mega-menu ul.menu > li.home.activated > a,
.dcjq-mega-menu ul.menu > li.home:hover > a {
  color: var(--main-color);
}
.dcjq-mega-menu ul.menu li.home.mega-hover svg,
.dcjq-mega-menu ul.menu > li.home.activated > svg,
.dcjq-mega-menu ul.menu > li.home:hover > svg {
  fill: #000000;
}
.dcjq-mega-menu .menu_item_a {
  float: left;
  font-size: 15px;
  padding: 10px 20px 10px 0px;
  white-space: nowrap;
  position: relative;
  color: #fff;
}
.dcjq-mega-menu .drop_down {
  color: #ffffff;
  display: flex;
  float: left;
  padding: 4px 0px;
  position: relative;
  box-sizing: border-box;
  align-items: center;
  margin-top: -2px;
}
.dcjq-mega-menu .drop_down svg {
  fill: #888888;
  width: 9px;
  height: 9px;
  position: unset;
}
@media screen and (max-width: 990px) {
  .dcjq-mega-menu .drop_down svg {
    fill: #fff;
    width: 11px;
    height: 11px;
  }
}
@media all and (max-width: 990px) {
  .dcjq-mega-menu .drop_down {
    display: block;
    float: left;
    padding: 8px 10px;
    display: block;
    position: absolute;
    right: 10px;
    top: 3px;
    -webkit-transition: 0.3s ease-in-out all;
    transition: 0.3s ease-in-out all;
  }
}
.dcjq-mega-menu .highlight {
  position: absolute;
  text-align: left;
  top: 38px;
  border-top: 1px solid #ededed;
  left: 0px;
  width: 100%;
  z-index: 99999999;
  -webkit-transition: 0s ease-in-out all;
  transition: 0s ease-in-out all;
  opacity: 0;
  visibility: hidden;
  overflow: hidden;
  background: #fff;
  padding: 20px 0;
  height: auto;
}
.dcjq-mega-menu .highlight .highlight1 {
  background: #fff;
  font-size: 16px;
}
.dcjq-mega-menu .highlight .highlight1 .menu-child_list {
  width: 30%;
  float: left;
  padding-right: 20px;
  box-sizing: border-box;
}
.dcjq-mega-menu .highlight .highlight1 .menu-child_list .sub-menu-level1 {
  position: relative;
}
.dcjq-mega-menu .highlight .highlight1 .menu-child_list .sub-menu-level1 a {
  padding: 0 25px 0 10px;
  line-height: 35px;
  text-transform: uppercase;
  border: none;
  font-size: 13px;
  border-radius: 5px;
  transition: 0s;
  font-weight: bold;
  display: block;
}
.dcjq-mega-menu .highlight .highlight1 .wraper_item .image_sub {
  width: 45%;
  float: left;
  box-sizing: border-box;
  transition: 0s;
}
.dcjq-mega-menu .highlight .highlight1 .wraper_item .image_sub a {
  transition: 0s;
}
.dcjq-mega-menu .highlight .highlight1 .wraper_item .image_sub img {
  max-width: 100%;
  max-height: 100%;
  object-fit: cover;
  display: block;
  margin: 0 auto;
  width: 100%;
  height: 360px;
  transition: 0s;
}
.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item {
  width: 25%;
  float: left;
  padding-left: 20px;
  box-sizing: border-box;
}
.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item .item {
  width: 100%;
  float: left;
  margin-bottom: 15px;
}
.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item .item a {
  color: #ffffff;
  text-transform: uppercase;
  font-size: 12px;
  line-height: 20px;
  display: block;
  font-weight: bold;
  display: block;
  padding: 0;
  border-bottom: none;
}
.dcjq-mega-menu
  .highlight
  .highlight1
  .wraper_item
  .product_item
  .item
  .frame_img_cat {
  width: 40%;
  float: left;
  display: flex;
  align-items: center;
}
.dcjq-mega-menu
  .highlight
  .highlight1
  .wraper_item
  .product_item
  .item
  .frame_img_cat
  img {
  max-width: 100%;
  max-height: 100%;
  object-fit: cover;
  display: block;
}
.dcjq-mega-menu
  .highlight
  .highlight1
  .wraper_item
  .product_item
  .item
  .frame_view {
  width: 60%;
  float: right;
}
.dcjq-mega-menu
  .highlight
  .highlight1
  .wraper_item
  .product_item
  .item
  .item-info {
  width: 100%;
  float: left;
  padding-left: 10px;
}
.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item .item .name {
  font-weight: normal;
  font-size: 14px;
  margin-bottom: 10px;
  line-height: 20px;
  color: #000;
  text-transform: none;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  text-overflow: ellipsis;
}
.dcjq-mega-menu .highlight .highlight1 .wraper_item .product_item .item .price {
  font-weight: bold;
  color: #ff0000;
  font-size: 16px;
}
.dcjq-mega-menu .highlight .highlight1 .has_child {
  position: relative;
}
.dcjq-mega-menu .highlight .highlight1 .has_child:after {
  content: "";
  position: absolute;
  right: 5px;
  top: 50%;
  transform: translate(0px, -50%);
  color: #02587b;
  line-height: 41px;
  width: 13px;
  height: 13px;
  background: url('data:image/svg+xml;utf8,<svg width="13px" height="13px" fill="rgb(85, 85, 85)" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 284.935 284.936" style="enable-background:new 0 0 284.935 284.936;" xml:space="preserve"><g><path d="M222.701,135.9L89.652,2.857C87.748,0.955,85.557,0,83.084,0c-2.474,0-4.664,0.955-6.567,2.857L62.244,17.133 c-1.906,1.903-2.855,4.089-2.855,6.567c0,2.478,0.949,4.664,2.855,6.567l112.204,112.204L62.244,254.677 c-1.906,1.903-2.855,4.093-2.855,6.564c0,2.477,0.949,4.667,2.855,6.57l14.274,14.271c1.903,1.905,4.093,2.854,6.567,2.854 c2.473,0,4.663-0.951,6.567-2.854l133.042-133.044c1.902-1.902,2.854-4.093,2.854-6.567S224.603,137.807,222.701,135.9z"/></g></svg>');
  background-repeat: no-repeat;
  text-align: center;
}
.dcjq-mega-menu ul.menu .level_0:hover .highlight {
  opacity: 1;
  visibility: initial;
  transition-delay: 0.6s;
}
.dcjq-mega-menu .highlight .sub-menu-level1 a {
  font-size: 14px;
}
.dcjq-mega-menu .highlight .highlight1 .menu-child_list .sub-menu-level1:hover {
  cursor: pointer;
  -webkit-transition: 0.15s ease-in-out all;
  transition: 0.15s ease-in-out all;
}
.dcjq-mega-menu
  .highlight
  .highlight1
  .menu-child_list
  .sub-menu-level1:hover
  .level_0 {
  background: var(--main-color);
  color: #fff;
}
.dcjq-mega-menu .highlight .highlight1 .menu-child_list .has_child:hover:after {
  background: url('data:image/svg+xml;utf8,<svg width="13px" height="13px" fill="rgb(255, 255, 255)" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 284.935 284.936" style="enable-background:new 0 0 284.935 284.936;" xml:space="preserve"><g><path d="M222.701,135.9L89.652,2.857C87.748,0.955,85.557,0,83.084,0c-2.474,0-4.664,0.955-6.567,2.857L62.244,17.133 c-1.906,1.903-2.855,4.089-2.855,6.567c0,2.478,0.949,4.664,2.855,6.567l112.204,112.204L62.244,254.677 c-1.906,1.903-2.855,4.093-2.855,6.564c0,2.477,0.949,4.667,2.855,6.57l14.274,14.271c1.903,1.905,4.093,2.854,6.567,2.854 c2.473,0,4.663-0.951,6.567-2.854l133.042-133.044c1.902-1.902,2.854-4.093,2.854-6.567S224.603,137.807,222.701,135.9z"/></g></svg>');
  background-repeat: no-repeat;
}
.dcjq-mega-menu .highlight .sub-menu-level1:hover a {
  text-decoration: none;
}
.dcjq-mega-menu .sb-toggle-left {
  float: left;
  display: none;
  cursor: pointer;
  margin-top: 2px;
  position: relative;
  margin-left: 10px;
  z-index: 99;
}
.slide-up {
  -ms-transform: translateY(0);
  transform: translateY(0);
  box-shadow: 0px 0px 5px #a7a7a7;
  transition: bottom 1s linear;
}
.slide-up .logo_img {
  max-height: 75px;
}
.slide-up .logo {
  padding: 15px 0;
}
.slide-down {
  -ms-transform: translateY(0);
  transform: translateY(0);
  box-shadow: 0px 0px 5px #a7a7a7;
  transition: bottom 1s linear;
}
.m-slide-up {
  -ms-transform: translateY(0);
  transform: translateY(0);
}
@media screen and (max-width: 650px) {
  .m-slide-up #languges .dropbtn .a-flag {
    padding: 16px 10px 16px 23px;
  }
}
.m-slide-down {
  -ms-transform: translateY(-100%);
  transform: translateY(-100%);
}
@media screen and (max-width: 650px) {
  .m-slide-down #languges .dropbtn .a-flag {
    padding: 16px 10px 16px 23px;
  }
}
@media screen and (max-width: 990px) {
  .top_menu #megamenu {
    position: absolute;
    background: var(--main-color);
    width: 100%;
    left: 0px;
    top: 70px;
    z-index: 999;
    border-left: 1px solid #efefef;
    border-bottom: 1px solid #efefef;
    display: none;
  }
  .dcjq-mega-menu .sb-toggle-left {
    display: block;
    position: relative;
  }
}
@media screen and (max-width: 990px) and (max-width: 990px) {
  .dcjq-mega-menu .sb-toggle-left {
    position: unset;
  }
}
@media screen and (max-width: 990px) {
  .dcjq-mega-menu .sb-toggle-left svg {
    color: black;
    width: 25px;
    height: 25px;
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translate(0px, -50%);
    fill: var(--main-color);
  }
  .dcjq-mega-menu .menu_item_a {
    display: block;
    float: none;
    text-align: left;
    padding: 10px 0 10px 10px;
    text-transform: uppercase;
    text-decoration: unset;
  }
  .dcjq-mega-menu ul.menu li.level_0 {
    float: none;
    padding: 0px;
    border-top: 1px solid rgba(255, 255, 255, 0.56);
    margin: 0;
    display: block;
  }
  .dcjq-mega-menu ul.menu li.level_0:before {
    display: none;
  }
  .dcjq-mega-menu ul.menu li.level_0:after {
    display: none;
  }
  .dcjq-mega-menu .highlight {
    background: transparent;
    border: none;
    box-shadow: none;
    position: relative;
    text-align: left;
    float: none;
    top: 0px;
    width: auto;
    display: none;
    opacity: 1;
    visibility: visible;
    left: 0;
    padding-top: 0;
  }
  .dcjq-mega-menu .highlight .highlight1 {
    background: transparent;
    border: none;
    border-top: 1px solid rgba(255, 255, 255, 0.5);
    text-transform: none;
  }
  .dcjq-mega-menu .highlight .highlight1 a {
    color: #fff;
  }
  .dcjq-mega-menu .highlight .sub-menu-level1 {
    border-top: none;
    padding: 9px 0 9px 22px;
  }
  .dcjq-mega-menu ul.menu li.mega-hover a,
  .dcjq-mega-menu ul.menu > li.activated > a,
  .dcjq-mega-menu ul.menu > li:hover > a {
    -webkit-transition: 0.25s ease-in-out all;
    transition: 0.25s ease-in-out all;
    background: var(--extra-color);
  }
  .dcjq-mega-menu .highlight .sub-menu-level1:hover {
    background: #9c0278;
  }
}
.activated .drop_down svg {
  fill: var(--main-color);
}
#megamenu .activated svg {
  fill: var(--main-color);
}
.dcjq-mega-menu .level_0 > a {
  display: flex;
  align-items: center;
}
.dcjq-mega-menu .level_0 > a span {
  display: flex;
  align-items: center;
  width: 30px;
  height: 30px;
  box-sizing: border-box;
  border-radius: 50px;
  justify-content: center;
  margin-right: 0px;
  position: absolute;
  left: 0px;
  top: 2px;
  display: none;
}
.dcjq-mega-menu .level_0 > a span svg {
  width: 17px;
  fill: #000;
  height: 17px;
  box-sizing: border-box;
}
/*# sourceMappingURL=imgmenu.css.map */
.breadcrumbs {
  background: #fff;
}
.breadcrumb {
  padding: 10px 0 10px 0;
}
.breadcrumb_detail {
  border-bottom: 1px solid #ededed;
  margin-bottom: 20px;
}
.breadcrumb::after {
  display: block;
  clear: both;
  content: " ";
}
.breadcrumb__item {
  display: inline-block;
  margin-right: 20px;
  list-style: none;
  color: #131518;
  position: relative;
}
.breadcrumb__item h1 {
  font-weight: normal;
}
.breadcrumb__item a {
  color: #565656;
  text-decoration: none;
}
.breadcrumb__item a:hover {
  color: #000;
}
.breadcrumb__item::after {
  display: block;
  width: 14px;
  height: 15px;
  color: #b6af96;
  content: "";
  background: url('data:image/svg+xml;utf8,<svg  width="10px" height="10px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" ><path fill="gray" d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg>');
  background-repeat: no-repeat;
  position: absolute;
  top: 6px;
  right: -21px;
}
.breadcrumb__item:last-child {
  color: var(--main-color);
}
.breadcrumb__item:last-child::after {
  content: "" !important;
  display: none;
}
@media screen and (max-width: 400px) {
  .breadcrumb__item {
    font-size: 13px;
  }
}
@media screen and (max-width: 360px) {
  .breadcrumb__item {
    font-size: 12px;
  }
}
/*# sourceMappingURL=breadcrumbs_simple.css.map */
.onlinesupport_list_row {
  z-index: 9999;
  position: fixed;
  bottom: 45%;
  right: 0px;
  width: 46px;
  height: 72px;
}
@media screen and (max-width: 600px) {
  .onlinesupport_list_row {
    bottom: 35%;
  }
}
.onlinesupport_list_row .item {
  margin-bottom: 8px;
  cursor: pointer;
}
@media screen and (max-width: 600px) {
  .onlinesupport_list_row .item svg {
    width: 42px;
  }
}
.onlinesupport_list_row .item_map a {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: #1461d3;
  box-sizing: border-box;
  text-align: center;
  padding-top: 9px;
}
.onlinesupport_list_row .item_map a svg {
  width: 28px;
  height: 28px;
  fill: #fff;
}
.onlinesupport_list_row .item-show a {
  position: relative;
  display: inline-block;
}
.onlinesupport_list_row .item-show a span {
  position: absolute;
  left: calc(-100% - 82px);
  display: block;
  top: 12px;
  width: 184px;
  background: #fff;
  z-index: -1;
  padding-left: 4px;
  border-radius: 10px;
  display: none;
}
.onlinesupport_list_row .item-show:nth-child(2) a span {
  left: calc(-100% - 47px);
}
.onlinesupport_list_row .item-show:nth-child(3) a span {
  left: calc(-100% - 87px);
}
.onlinesupport_list_row .click-open,
.onlinesupport_list_row .click-off a {
  background: var(--main-color);
  border-radius: 50%;
  width: 44px;
  height: 44px;
  display: block;
  padding: 5px;
  box-sizing: border-box;
  text-align: center;
}
.onlinesupport_list_row .click-open svg,
.onlinesupport_list_row .click-off a svg {
  fill: #fff;
  width: 32px;
  height: 32px;
}
.onlinesupport_list_row .click-off {
  display: none;
}
.onlinesupport_list_row .click-off a {
  padding-top: 11px;
}
.onlinesupport_list_row .click-off a svg {
  width: 20px;
  height: 20px;
}
/*# sourceMappingURL=fix_right.css.map */
.share_column a {
  display: block;
  position: relative;
  margin-bottom: 12px;
  padding-left: 36px;
  line-height: 22px;
}
.share_column a svg {
  width: 14px;
  height: 14px;
  fill: #fff;
  padding: 5px;
  background: #ccc;
  border-radius: 50%;
  position: absolute;
  left: 0px;
  top: 0px;
}
/*# sourceMappingURL=column.css.map */
ul.menu-bottom li.level0 {
  float: left;
  width: 50%;
  box-sizing: border-box;
}
@media screen and (max-width: 768px) {
  ul.menu-bottom li.level0 {
    width: 100% !important;
    float: none;
  }
}
ul.menu-bottom li.level0 > a,
ul.menu-bottom li.level0 > span {
  text-transform: uppercase;
  margin-bottom: 40px;
  font-size: 18px;
  font-weight: bold;
  display: block;
  color: #000;
}
@media screen and (max-width: 1024px) {
  ul.menu-bottom li.level0 > a,
  ul.menu-bottom li.level0 > span {
    font-size: 18px;
  }
}
@media screen and (max-width: 500px) {
  ul.menu-bottom li.level0 > a,
  ul.menu-bottom li.level0 > span {
    font-size: 14px;
  }
}
ul.menu-bottom li.level0:last-child a {
  display: block;
}
ul.menu-bottom li.level0:last-child span {
  display: block;
}
ul.menu-bottom li.level0 ul li {
  margin-bottom: 16px;
}
ul li.level1 a:hover,
ul li.level1 span:hover {
  color: #0066b2;
}
ul.menu-bottom li.level0 span.click-mobile {
  background: transparent
    url("https://maychieuminikaw.com/blocks/mainmenu/assets/images/icon-click.png")
    no-repeat scroll center;
  position: absolute;
  cursor: pointer;
  padding: 0;
  right: 8px;
  top: 8px;
  display: none;
  content: "";
  width: 15px;
  height: 15px;
  z-index: 12;
}
ul.menu-bottom li.level0 span.click-mobile.active {
  background: transparent
    url("https://maychieuminikaw.com/blocks/mainmenu/assets/images/icon-click-active.png")
    no-repeat scroll center;
}
.menu-bottom ul li.mid-sitem > span i {
  background-position: 0px -92px;
  content: " ";
  height: 36px;
  display: block;
  margin-top: 11px;
  padding-top: 12px;
  width: 131px;
}
@media screen and (max-width: 768px) {
  ul.menu-bottom li.level0 {
    float: none;
    width: 100%;
    border: 1px solid #e3e3e3;
    margin-bottom: 10px;
    position: relative;
  }
  ul.menu-bottom li.level0 span.click-mobile {
    display: block;
  }
  ul.menu-bottom li.level0 > a,
  ul.menu-bottom li.level0 > span {
    display: block;
    padding: 8px;
    margin-bottom: 0;
  }
  ul.menu-bottom li.level0 ul {
    display: none;
  }
  ul li.level1 {
    border-top: 1px solid #f5f5f5;
    padding: 8px 0px 7px 0px;
    margin-left: 22px;
  }
  ul.menu-bottom li.level0 ul li {
    margin-bottom: 0px;
  }
  ul li.level1.first-sitem,
  ul li.level1:first-child {
    border-top: 0;
  }
}
/*# sourceMappingURL=bottommenu.css.map */
#icon_hot {
  position: absolute;
  left: 0px;
  top: 14px;
  font-size: 9px;
  text-transform: uppercase;
  color: red;
}
#dot {
  width: 6px;
  height: 6px;
  background-color: #f33;
  border-radius: 100%;
  position: absolute;
  left: 16px;
  top: 27px;
  margin-top: -5px;
  display: block;
}
#dot .ping {
  border: 1px solid #f33;
  width: 6px;
  height: 6px;
  opacity: 1;
  background-color: rgba(238, 46, 36, 0.2);
  border-radius: 100%;
  -webkit-animation-duration: 1.25s;
  animation-duration: 1.25s;
  -webkit-animation-name: sonar;
  animation-name: sonar;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  display: block;
  margin: -1px 0 0 -1px;
}
.megamenu_mb,
.highlight {
  position: fixed;
  width: 500px;
  height: 100vh;
  background: #fff;
  z-index: 999;
  padding: 0px 0px;
  box-sizing: border-box;
  top: 0;
  left: -100%;
  transition: all 0.5s;
}
@media screen and (max-width: 768px) {
  .megamenu_mb,
  .highlight {
    width: 86%;
  }
}
.megamenu_mb_show {
  left: 0;
}
:root {
  --body-color: #eee;
}
.modal-menu-full-screen-menu {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  background: #0000008c;
  z-index: -99;
  opacity: 0;
  transition: 0.5s;
}
.show_screen {
  z-index: 990;
  opacity: 1;
}
.close_all {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: #000;
  position: absolute;
  right: -40px;
  top: 10px;
}
.close_all .navicon-line {
  width: 16px;
  height: 1px;
  border-radius: 1px;
  margin-bottom: 0px;
  background-color: #fff;
  transition: 0.5s;
  position: absolute;
  left: 0;
  top: 0;
}
.close_all .navicon-line:nth-child(1) {
  transform: rotate(45deg) translate(15px, 5px);
}
.close_all .navicon-line:nth-child(2) {
  transform: rotate(-45deg) translate(-5px, 15px);
}
.megamenu_mb .label {
  text-align: center;
  padding: 15px 0;
  border-bottom: 1px solid var(--body-color);
  font-size: 18px;
  position: relative;
}
.megamenu_mb li {
  position: relative;
  border-bottom: 1px solid #eee;
  box-sizing: border-box;
}
.megamenu_mb li a,
.megamenu_mb li span {
  display: flex;
  align-items: center;
  float: none;
  padding: 17px 10px 15px 11px;
  font-size: 18px;
}
.megamenu_mb li a span,
.megamenu_mb li span span {
  padding: 0px;
}
.megamenu_mb li .check_icon {
  padding: 17px 6px 15px 37px;
}
.megamenu_mb li svg {
  width: 16px;
  margin-right: 10px;
  fill: var(--main-color);
  height: 16px;
}
.megamenu_mb .next_menu {
  position: absolute;
  right: 0;
  top: 0;
  padding: 0;
  box-sizing: border-box;
  height: 100%;
  width: 40px;
  border-left: 1px solid var(--body-color);
  z-index: 99;
}
.megamenu_mb .label:after,
.megamenu_mb .label:before,
.megamenu_mb .next_menu:after,
.megamenu_mb .next_menu:before {
  width: 7px;
  height: 7px;
  border-right: 1px solid #000;
  border-top: 1px solid #000;
  position: absolute;
  content: "";
  left: calc(50% - 3px);
  top: 50%;
  transform: translate(-50%, -50%) rotate(45deg);
}
.megamenu_mb .label:after,
.megamenu_mb .label:before {
  left: 25px;
  transform: translate(0, -50%) rotate(-135deg);
}
.megamenu_mb #menu_:after,
.megamenu_mb #menu_:before {
  display: none;
}
.megamenu_mb ul.menu,
.megamenu_mb .highlight {
  height: 100%;
  overflow: auto;
}
.group_id_menu_23 {
  background: #e4e4e430;
}
@keyframes sonar {
  0% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  100% {
    -webkit-transform: scale(3);
    transform: scale(3);
    opacity: 0;
  }
}
/*# sourceMappingURL=megamenu_mb.css.map */

.btn-primary {
    color: #fff;
    background-color: #007bff !important;
    border-color: #007bff !important;
}

	
</style>



@endpush

<?php  
        $data_cart = Gloudemans\Shoppingcart\Facades\Cart::content();

        $arrPrice = [];
        $key = 0;
        
    ?>
<div class="main_wrapper   ">
    <div class="container container_main_wrapper">
        <div class="main-area main-area-1col main-area-full">
            <script defer="" src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;language=vi&amp;key=AIzaSyBXLiAtDTeJlvyQciDwPPTRcyvRrCevSYM" type="text/javascript"></script>
            <div class="product_cart mt20 cls">
                <div class="detail_inner cls">
                    <div class="detail_inner_r shadow">
                        <h1 class="page_title_cart"><span>Giỏ hàng của bạn</span></h1>
                        <div id="product_cart_load_ajax">
                            <div class="shopcart_product">
                               
                                    <div class="table-wrap">

                                        <?php 

                                            $arrPrice = [];
                                        ?>

                                        @if(!empty($data_cart) && count($data_cart)>0 )

                                        <?php 

                                            $z = 0;
                                        ?>

                                        @foreach($data_cart as $key => $data)
                                        <?php 
                                            $z++;
                                            $price = (int)$data->price*(int)$data->qty;
                                            $key++;
                                            array_push($arrPrice, $price);

                                            $infoProducts = App\Models\product::find($data->id);

                                        ?>
                                        <div class="row-table">
                                            <div class="col-td"> <a href="">
                                             <img width="120px" src="{{ asset($infoProducts->Image) }}"> </a>
                                             <a href="javascript:void(0)" title="Xóa" class="del-item" onclick="removeProductCart('{{ $data->rowId }}')"> 
                                                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="-40 0 427 427.00131" width="30px">
                                                        <path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path>
                                                        <path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path>
                                                        <path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"></path>
                                                        <path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path>
                                                    </svg>Xóa </a> </div>
                                            <div class="col-td"> <a class="name-item" title="{{ $data->name }}" href="{{ route('details', $infoProducts->Link) }}"> {{ $data->name }} </a>
                                                <div class="string_info_extent"> Giá sản phẩm: {{ number_format($data->price , 0, ',', '.')}}đ </div>
                                            </div>
                                            <div class="col-td col-td-number"> <span class="price"> {{ number_format($data->price , 0, ',', '.')}}đ </span> <span class="btn-minus" onclick="load_ajax_cart('5231_0_0_0_0_0','minus')">-</span> <input  class="numbers-pro  " type="text" min="0" max="1000" value="{{ $data->qty??0 }}" name="quantity_5231_0_0_0_0_0" size="8px" id="quantity_5231_0_0_0_0_0"> <span class="btn-plus" onclick="load_ajax_cart('5231_0_0_0_0_0','plus')">+</span> <span class="error-number-item error_5231_0_0_0_0_0"></span> </div>
                                        </div> 
                                        @endforeach
                                        @endif
                                       
                                    </div> <input type="hidden" value="3449000" id="price_total">
                                    <div class="clearfix"></div> <input type="hidden" name="Itemid" value="11"> <input type="hidden" name="module" value="products"> <input type="hidden" name="view" value="cart"> <input type="hidden" name="task" value="recal" id="task">
                                
                            </div>
                            <div class="total-card-code cls">
                                <div class="card_code cls"> <input placeholder="Nhập mã giảm giá" type="text" name="card_code" id="card_code" value="" class="input_text" size="30"> <button type="button" onclick="myFunction_code();" class="resubmit_form">Áp dụng </button>
                                    <div class="clear"></div>
                                    <div id="massage_voucher"> </div>
                                    <div class="note"> Lưu ý: Mỗi giỏ hàng chỉ được áp dụng 1 mã giảm giá, và chỉ giảm trên tổng số tiền của sản phẩm ( không giảm cho phí ship ). </div>
                                </div>

                                <?php 

                                    $totalPrice = array_sum($arrPrice);
                                ?>
                                <div class="ship-total">
                                    <div class="total-mn cls">
                                        <font>Tổng cộng: </font> <span class="price_tongcong">{{ number_format($totalPrice , 0, ',', '.')}}₫</span>
                                    </div>
                                    <div class="cart-code-mn cls">
                                        <font>Mã giảm giá: </font> <span class="price-cart-code"></span>
                                    </div>
                                    <div class="ship-mn cls">
                                        <font>Phí vận chuyển: </font> <span class="price_ship1"> Tính ngoài. </span>
                                    </div>
                                    <div class="total-price-inner cls">
                                        <font>Thanh toán: </font> <span class="price_thanhtoan"> {{ number_format($totalPrice , 0, ',', '.')}}₫ <div class="display-off" id="price_thanhtoan" price_thanhtoan="3449000"></div> </span>
                                    </div>
                                    <div class="note-payment hide">
                                        <p>Xin cảm ơn quý khách đã đặt mua sản phẩm tạo hệ thống Hải Linh</p>
                                        <p>Hải Linh Đại lý ủy quyền chính thức tại Việt Nam của các thương hiệu danh tiếng trên thế giới</p>
                                        <p>Vì quyền lợi của mình, Quý khách vui lòng đọc kỹ những thông tin dưới đây để hoàn thành thủ tục để đặt hàng, Hải Linh có quyền từ chối giải quyết các yêu cầu .............................</p>
                                        <p>Vì quyền lợi của mình, Quý khách vui lòng đọc kỹ những thông tin dưới đây để hoàn thành thủ tục để đặt hàng, Hải Linh có quyền từ chối giải quyết các yêu cầu .............................</p>
                                        <p>Vì quyền lợi của mình, Quý khách vui lòng đọc kỹ những thông tin dưới đây để hoàn thành thủ tục để đặt hàng, Hải Linh có quyền từ chối giải quyết các yêu cầu .............................</p>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                function myFunction_code() {
                                    $('.label_error').prev().remove();
                                    $('.label_error').remove();
                                    if(!notEmpty("card_code","Bạn phải nhập mã giảm giá"))
                                        return false;
                                
                                    var code_input = $('#card_code').val();
                                    var price_ship = $('#price_ship').val();
                                
                                    $.ajax({
                                        type: "POST",
                                        url: "/index.php?module=products&view=cart&task=check_code&raw=1&code_input="+code_input,
                                        data: {code_input:code_input,price_ship:price_ship},
                                        dataType: 'json',
                                        success: function(data) {
                                            
                                            if(data.error == false && data.type_down){
                                                if(data.type_down == 1) {
                                                    text_price_chietkhau = data.price_send+ '%';
                                                } else {
                                                    text_price_chietkhau = data.price_send+ 'đ';
                                                }
                                                $('.price-cart-code').html(data.total_down);    
                                                $('.price_thanhtoan').html(data.total_code);
                                                $('#code-sale').val(code_input);
                                                
                                
                                            }else{
                                                // $('#code-sale').val('');
                                
                                            }
                                
                                            $.ajax({
                                                type: "POST",
                                                url: "/index.php?module=products&view=cart&task=recal_ajax_map&raw=1",
                                                cache: false,
                                                success: function(html){
                                                    $("#product_cart_load_ajax").html(html);
                                                }
                                            });
                                            $('#massage_voucher').html(data.message);
                                            
                                        }
                                    });
                                }
                                
                            </script>
                        </div>
                    </div>
                    <div class="detail_inner_l">
                        <div class="buyer_info">
                            <div class="title-box-cart">Thông tin người mua hàng</div>
                            <div class="mb-2"><b class="fs-16">Thông tin người mua</b> (<span class="red">*</span>) <i>Thông tin bắt buộc</i></div>
                            <form action="{{ route('order') }}" name="eshopcart_info" method="post" id="eshopcart_info">
                            	@csrf
							    <div class="shadow">
							        <div class="sex"> 
							        	<label> 
							        		<span class="radio"> 
							        			<input type="radio" value="Nam" name="sender_sex" checked=""> 
							        			<span class="icon"></span> 
							        		</span> Nam 
							        	</label> 
							        	<label> 
							        		<span class="radio"> 
							        			<input type="radio" name="sender_sex" value="Nữ"> 
							        		<span class="icon"></span> </span> Nữ 
							        	</label> 
							        </div>
							        <div class="box-input"> 
							        	<input placeholder="Họ tên (*)" type="text" name="name" id="name_user" value="" class="input_text input_text_50" size="30" required> 
							        	<input placeholder="Điện thoại (*)" type="text" name="phone_number" id="telephone_user" value="" class="input_text input_text_50" size="30" required> 
							        	<input placeholder="Email" type="text" name="mail" id="sender_email" value="" class="input_text" size="30" required> 

							        	<input placeholder="Địa chỉ ( Nhập số nhà, ngõ...)" type="text" name="address" id="address_user" value="" class="input_text" size="30" required> 

							        	<textarea placeholder="Ghi chú" name="sender_comments" id="sender_comments" class="input_text"></textarea> 
							        </div>
							    </div>
							    <div class="title-box-cart">Phương thức thanh toán</div>
							    <div class="payment-type shadow">
							        <div class="mb-2 mt-3"><b class="fs-16">Chọn phương thức thanh toán</b></div> <label class="container-rd active" id="method-cod" data-pay-method="0"> <span class="radio"> <input onclick="pay_mothod(0)" type="radio" checked="checked" name="radio" value="0"> <span class="icon"></span> </span> Thanh toán tiền mặt khi nhận hàng (COD) </label> <label class="display-off container-rd " data-pay-method="2"> <span class="radio"> <input onclick="pay_mothod(2)" type="radio" name="radio" value="2"> <span class="icon"></span> </span> Thanh toán online Alepay (ATM,VNQR,Thẻ quốc tế...) </label> <!-- danh sách STK ngân hàng -->
							        <!-- end danh sách STK ngân hàng -->
							        <div class="pay_mothod_4_data"> </div>

							        <div class="pay_mothod_3_data"> </div> <input type="hidden" id="pay_method" value="0">
							    </div> <!-- end payment-type -->
							    <div class="all-button-cart cls"> <a class="back-home" href="javascript:history.go(-1)"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
							                <g>
							                    <g>
							                        <path d="M492,236H68.442l70.164-69.824c7.829-7.792,7.859-20.455,0.067-28.284c-7.792-7.83-20.456-7.859-28.285-0.068    l-104.504,104c-0.007,0.006-0.012,0.013-0.018,0.019c-7.809,7.792-7.834,20.496-0.002,28.314c0.007,0.006,0.012,0.013,0.018,0.019    l104.504,104c7.828,7.79,20.492,7.763,28.285-0.068c7.792-7.829,7.762-20.492-0.067-28.284L68.442,276H492    c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z"></path>
							                    </g>
							                </g>
							            </svg> <span>Quay lại mua thêm sản phẩm khác</span> </a> 
                          @if($totalPrice>0)
							            <button type="submit" class="btn-primary button-submit btn" href="javascript:void(0);" title=""> Thanh toán </button> </div> 
                          @endif
							</form>
                        </div> <!-- end info -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

@push('script')



    <script type="text/javascript">

        const form = $('form');

        // Add an event listener for the submit event
        form.on('submit', function(event) {
          // Prevent the default form submission behavior
          

          // Return false to stop the form from submitting


           const regex = /^(?:\+84|0)?([3|5|7|8|9]{1}[0-9]{8})$/i;

           phoneNumber = $('#telephone_user').val();

           if(!regex.test(phoneNumber)){
            event.preventDefault();
            alert('số điện thoại k đúng định dạng');
            return false;
           }
           else{
            return;
           }
          
          
        });
        function removeProductCart(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "{{ route('removeCart') }}",
                data: {
                    product_id: id,
                       
                },
                success: function(result){
                  
                    window.location.reload();
                    
                }
            });

        }

        function updateDataCart(key, dataId) {


        const val_number = $('#'+key).val();
        val_numbers =  parseInt(val_number);



        if(val_numbers>=0){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "{{ route('addCartNumber') }}",
                data: {
                    rowId: dataId,
                    number:val_numbers
                },
                success: function(result){

                    window.location.reload();
                }
            });

           
        }

    }
    </script>

    

@endpush
@endsection