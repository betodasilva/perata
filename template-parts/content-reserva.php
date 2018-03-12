<form id="frm" name="frm" action="https://bookitbutton.booking.com/hotel/br/recanto-alternativo.pt-pt.html?aid=330843&amp;sid=59c4356d1884aca35e610eaf0169ce85;tmpl=fb_bb_app_hotellabel=socnet_fb_bb_app_546947035346816;aid=330843;tmpl=fb_bb_app_hotel;signed_request=Lafwkelg618s82SjUUwQkN4uioXLJo_T8cmYvZ_g4qI.eyJhbGdvcml0aG0iOiJITUFDLVNIQTI1NiIsImlzc3VlZF9hdCI6MTUxOTE1MDc1OCwicGFnZSI6eyJpZCI6IjU0Njk0NzAzNTM0NjgxNiIsImFkbWluIjp0cnVlLCJsaWtlZCI6dHJ1ZX0sInVzZXIiOnsiY291bnRyeSI6ImJyIiwibG9jYWxlIjoicHRfQlIiLCJhZ2UiOnsibWluIjoyMX19fQ" method="get" target="iframe-reserva">
<fieldset>
<input type="hidden" name="aid" value="330843">
<input type="hidden" name="label" value="socnet_fb_bb_app_">
<input type="hidden" name="tmpl" value="fb_bb_app_hotel">
<input type="hidden" name="signed_request" value="Lafwkelg618s82SjUUwQkN4uioXLJo_T8cmYvZ_g4qI.eyJhbGdvcml0aG0iOiJITUFDLVNIQTI1NiIsImlzc3VlZF9hdCI6MTUxOTE1MDc1OCwicGFnZSI6eyJpZCI6IjU0Njk0NzAzNTM0NjgxNiIsImFkbWluIjp0cnVlLCJsaWtlZCI6dHJ1ZX0sInVzZXIiOnsiY291bnRyeSI6ImJyIiwibG9jYWxlIjoicHRfQlIiLCJhZ2UiOnsibWluIjoyMX19fQ">
<input type="hidden" name="lang" value="pt-pt">
<h1 class="show_prices title">Mostrar preços</h1>
<div id="inout">
<div id="homein">
<h3>Data de check-in</h3>
<select id="b_checkin_day" name="checkin_monthday" onchange="checkDateOrder('frm', 'b_checkin_day', 'b_checkin_month', 'b_checkout_day', 'b_checkout_month') ; tickCheckBox('b_availcheck');">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
</select>
<select id="b_checkin_month" name="checkin_year_month" onchange="checkDateOrder('frm', 'b_checkin_day', 'b_checkin_month', 'b_checkout_day', 'b_checkout_month') ; tickCheckBox('b_availcheck');">
<script language="Javascript">
var monthArray=new Array("Janeiro","Fevereiro","Mar&ccedil;o","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
var today = new Date();
var month= today.getMonth();
var year = today.getFullYear()%100;
var fullYear=today.getFullYear();
year=new String(year);
year=addzero(year);
var countMonth=month;
for(var i=0;i<12;i++,countMonth++){
if(countMonth%12==0 && i>0){
countMonth=0;
year++;
year=new String(year);
year=addzero(year);
fullYear++;
}
document.writeln("<option value=\""+fullYear+"-"+(countMonth+1)+"\">"+monthArray[countMonth]+" '"+year);
}
</script>
<option value="2018-2">Fevereiro '18</option>
<option value="2018-3">Março '18</option>
<option value="2018-4">Abril '18</option>
<option value="2018-5">Maio '18</option>
<option value="2018-6">Junho '18</option>
<option value="2018-7">Julho '18</option>
<option value="2018-8">Agosto '18</option>
<option value="2018-9">Setembro '18</option>
<option value="2018-10">Outubro '18</option>
<option value="2018-11">Novembro '18</option>
<option value="2018-12">Dezembro '18</option>
<option value="2019-1">Janeiro '19</option>
</select>
<a onclick="showCalendar(this, 'calendar', 'checkin');" class="calender inlineJsRequired" href="#calender"><img src="https://r-ec.bstatic.com/static/img/button-calender/4afffebb8841af58a1b85bab15137303f49af30c.png" width="21" height="17" alt="calendar" title="Abra o calendário e escolha uma data"></a>
</div>
<div id="homeout">
<h3>Data de check-out</h3>
<select id="b_checkout_day" name="checkout_monthday" onchange="tickCheckBox('b_availcheck');">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
</select>
<select id="b_checkout_month" name="checkout_year_month" onchange="tickCheckBox('b_availcheck');">
<script language="Javascript">
var monthArray=new Array("Janeiro","Fevereiro","Mar&ccedil;o","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
var today = new Date();
var month= today.getMonth();
var year = today.getFullYear()%100;
var fullYear=today.getFullYear();
year=new String(year);
year=addzero(year);
var countMonth=month;
for(var i=0;i<12;i++,countMonth++){
if(countMonth%12==0 && i>0){
countMonth=0;
year++;
year=new String(year);
year=addzero(year);
fullYear++;
}
document.writeln("<option value=\""+fullYear+"-"+(countMonth+1)+"\">"+monthArray[countMonth]+" '"+year);
}
</script><option value="2018-2">Fevereiro '18
</option><option value="2018-3">Março '18
</option><option value="2018-4">Abril '18
</option><option value="2018-5">Maio '18
</option><option value="2018-6">Junho '18
</option><option value="2018-7">Julho '18
</option><option value="2018-8">Agosto '18
</option><option value="2018-9">Setembro '18
</option><option value="2018-10">Outubro '18
</option><option value="2018-11">Novembro '18
</option><option value="2018-12">Dezembro '18
</option><option value="2019-1">Janeiro '19

</option></select>
<a onclick="showCalendar(this, 'calendar', 'checkout');" class="calender inlineJsRequired" href="#calender"><img src="https://r-ec.bstatic.com/static/img/button-calender/4afffebb8841af58a1b85bab15137303f49af30c.png" width="21" height="17" alt="calendar" title="Abra o calendário e escolha uma data"></a>
</div>
</div>
<div class="but">
<button id="search_button" class="big_blue_button" type="submit">Ok!</button>
</div>
<div id="searchbox_bottom_fix" class="clearfix"></div>
</fieldset>
</form>

<script language="Javascript">
var currentDate = new Date(); var currentYear = 1900 + currentDate.getYear();
var dailyMS = 24*60*60*1000;
var arrivalDate = new Date(currentDate.getTime());
var departureDate = new Date(currentDate.getTime() + 1*dailyMS);
var arrivalYear = 1900+arrivalDate.getYear();
var arrivalMonth = 1+arrivalDate.getMonth(); var arrivalDay = arrivalDate.getDate();
var departureYear = 1900+departureDate.getYear();
var departureMonth = 1+departureDate.getMonth(); var departureDay = departureDate.getDate();
var a=document.frm;
if ((a.checkin_monthday.selectedIndex == 0) && (a.checkout_monthday.selectedIndex == 0)){
a.checkin_monthday.options[arrivalDay-1].selected = true;
a.checkout_monthday.options[departureDay-1].selected = true;
}
var frm = document.getElementById('frm');
// create date object from checkin values
// set date to 12:00 to avoid problems with one
// date being wintertime and the other summertime
var my = frm['b_checkin_month'].value.split("-");
var ci = new Date (my[0], my[1]-1, frm['b_checkin_day'].value, 12, 0, 0, 0);
// create date object from checkout values
my = frm['b_checkout_month'].value.split("-");
var co = new Date (my[0], my[1]-1, frm['b_checkout_day'].value, 12, 0, 0, 0);
if (ci >= co){
co.setTime(ci.getTime() + 1000 * 60 * 60 * 24);
frm['b_checkout_day'].value = co.getDate();
var com = co.getMonth()+1;
frm['b_checkout_month'].value = co.getFullYear() + "-" + com;
}
</script>
<script type="text/javascript">
var calendar = new Object();
var tr = new Object();
tr.nextMonth = "M&ecirc;s seguinte";
tr.prevMonth = "M&ecirc;s anterior";
tr.closeCalendar = "Fechar calend&aacute;rio";
tr.pressCtlD = "Pressione control + D ou escolha marcadores/adicionar ou favoritos/adicionar no seu browser";
tr.pressCtlP = "Pressione control + P ou escolha ficheiro/imprimir no seu browser";
tr.url = "https://secure.booking.com/facebook.pt-pt.html?aid=330843;label=fac419jc-facebook-XX-XX-fbUbbUappUmultiUhotelUpreview-unspec-br-com-L%3Apt-O%3Aabn-B%3Achrome-N%3AXX-S%3Abo-U%3Aao-H%3As;sid=59c4356d1884aca35e610eaf0169ce85;tmpl=fb_bb_app_multi_hotel_preview;action=show;signed_request=Lafwkelg618s82SjUUwQkN4uioXLJo_T8cmYvZ_g4qI.eyJhbGdvcml0aG0iOiJITUFDLVNIQTI1NiIsImlzc3VlZF9hdCI6MTUxOTE1MDc1OCwicGFnZSI6eyJpZCI6IjU0Njk0NzAzNTM0NjgxNiIsImFkbWluIjp0cnVlLCJsaWtlZCI6dHJ1ZX0sInVzZXIiOnsiY291bnRyeSI6ImJyIiwibG9jYWxlIjoicHRfQlIiLCJhZ2UiOnsibWluIjoyMX19fQ&amp;";
tr.title = "Booking.com: Bem-vindo";
tr.icons = "https://r-ec.bstatic.com/static/img";
var months = ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];
var $t_hotels = 'Hot&eacute;is'.toLowerCase();
var $t_hotels_around = 'Alojamentos nas imedia&ccedil;&otilde;es'.toLowerCase().replace(/ /g, '&#160;');
var b_today = "Hoje";
var day = "dia";
Date.MILLISECONDS_PER_DAY = Date.prototype.MILLISECONDS_PER_DAY = 86400000;
var browser = navigator.appName
var version = navigator.appVersion
var startstring = parseFloat(version.indexOf("MSIE"))+1
var browserverion = parseFloat(version.substring(startstring+4,startstring+7))
var isIE5 = ((browser=="Microsoft Internet Explorer") && (browserverion < 6))? true : false;
var isIE6 = ((browser=="Microsoft Internet Explorer") && (browserverion > 5.5) && (browserverion < 6))? true : false;
function tickCheckBox(el) {
if (document.getElementById) {
if (document.getElementById(el)) {
document.getElementById(el).checked = false;
}
}
return true;
}
Date.prototype.getTwoDigitMonth = function () {
// Returns a two-digit string from '01' to '12' representing the month property of a Date object.
var month = (this.getMonth() + 1).toFixed().toString();
if (month.length == 1) {
month = '0' + month;
}
return month;
};
function checkDateOrder(me, ci_day, ci_month_year, co_day, co_month_year) {
var
frm = document.getElementById('frm'),
my,
ci = new Date( 0 ),
co = new Date( 0 ),
com,
today = new Date();
// create date object from checkin values
// set date to 12:00 to avoid problems with one
// date being wintertime and the other summertime
if ( frm[ci_day].value !== '0' )
{
ci.setDate( frm[ci_day].value );
}
if ( frm[ci_month_year].value !== '0' )
{
my = frm[ci_month_year].value.split( "-" );
ci.setFullYear( my[0] );
ci.setMonth( my[1] - 1 );
}
ci.setHours( 12 );
ci.setMinutes( 0 );
ci.setSeconds( 0 );
// create date object from checkout values
if ( frm[co_day].value !== '0' )
{
co.setDate( frm[co_day].value );
}
if ( frm[co_month_year].value !== '0' )
{
my = frm[co_month_year].value.split( "-" );
co.setFullYear( my[0] );
co.setMonth( my[1] - 1 );
}
co.setHours( 12 );
co.setMinutes( 0 );
co.setSeconds( 0 );
// If the new checkin date's month does not match
// the current value of the dropdown, then it is
// because the month was incremented creating an
// invalid date (e.g. February 31st).
// We'll cycle back the checkin date until we're in
// the correct month.
if ( frm[ci_month_year].value !== '0' )
{
while ( ci.getMonth() != frm[ci_month_year].value.split( "-" )[1] - 1 )
{
ci.setDate( ci.getDate() - 1 );
frm[ci_day].value = ci.getDate();
}
var cim = ci.getMonth() + 1;
frm[ci_month_year].value = ci.getFullYear() + "-" + cim;
}
// if checkin date is at or after checkout date,
// add a day full of milliseconds, and set the
// selectbox values for checkout date to new value
if ( ci >= co )
{
co.setTime( ci.getTime() + Date.prototype.MILLISECONDS_PER_DAY );
com = co.getMonth() + 1;
if ( frm[ci_day].value !== '0' )
{
frm[co_day].value = co.getDate();
}
if ( frm[ci_month_year].value !== '0' )
{
frm[co_month_year].value = co.getFullYear() + "-" + com;
}
}
}
function updateDaySelect( me )
{
// 1-2 testing
if ( !booking.env.b_simple_weekdays_for_js )
{
return;
}
var frm = document.getElementById('frm');
if ( frm.getAttribute( 'id' ) !== 'frm' && frm.className !== 'availForm' )
{
return;
}
// Check if we have all fields. If not, we are in the first stage
// of the book process and should not auto-update selects since there
// is only the check-in select and the amount of nights.
if ( !frm.checkin_monthday || !frm.checkout_monthday || !frm.checkin_year_month || !frm.checkout_year_month )
{
return;
}
if ( frm.checkin_monthday.value === '0' && frm.checkout_monthday.value === '0' && frm.checkin_year_month.value === '0' && frm.checkout_year_month.value === '0' )
{
return;
}
// If the year-month fields have nonzero values, prepend the day of the week to each monthday in the check-in and check-out monthday Selects.
var
ci_d = frm.checkin_monthday,
co_d = frm.checkout_monthday,
ci_my,
co_my,
todaysDate;
// If the form field has a nonzero value, use it;
if ( frm.checkin_year_month.value !== '0' )
{
ci_my = frm.checkin_year_month.value.split( "-" );
}
else
{
// Use the current date value.
todaysDate = new Date();
ci_my = [ todaysDate.getFullYear(), todaysDate.getTwoDigitMonth() ];
}
if ( frm.checkout_year_month.value !== '0' )
{
co_my = frm.checkout_year_month.value.split( "-" );
}
else
{
todaysDate = new Date();
co_my = [ todaysDate.getFullYear(), todaysDate.getTwoDigitMonth() ];
}
var
ci_sel = Math.max( ci_d.selectedIndex, 0 ),
co_sel = Math.max( co_d.selectedIndex, 0 ),
ci_sel_value = ci_d[ ci_sel ].value,
co_sel_value = co_d[ co_sel ].value,
monthDays = [],
opt,
i;
ci_d.innerHTML = '';
co_d.innerHTML = '';
var MonthdayPromptOption = function ()
{
this.option = {
"_this" : this,
"@selected" : "selected",
"@class" : "day prompt site_experiment_encourage_date_entry_2",
"@value" : 0,
"#text" : "dia"
};
};
if ( ci_sel_value === '0' )
{
buildHtmlNode( new MonthdayPromptOption(), ci_d ).selected = true;
}
if ( co_sel_value === '0' )
{
buildHtmlNode( new MonthdayPromptOption(), co_d ).selected = true;
}
function writeMonthdaysOptions( numberOfMonthdaysToShow, yearMonthSelectElement, monthDaysArray, monthDaysSelectElement, monthDaySelectValue )
{
var i, optionElementInnerHTML, optionElement;
for ( i = 0; i < numberOfMonthdaysToShow; i++ )
{
optionElement = document.createElement( 'option' );
optionElementInnerHTML = i + 1;
if ( yearMonthSelectElement.value !== '0' )
{
optionElementInnerHTML = monthDaysArray[i] + ' ' + optionElementInnerHTML;
}
optionElement.innerHTML = optionElementInnerHTML;
optionElement.value = ( i + 1 );
if ( i > 0 && monthDaySelectValue == i + 1 )
{
optionElement.defaultSelected = optionElement.selected = true;
}
monthDaysSelectElement.appendChild( optionElement );
}
}
// Check-in month
monthDays = buildDaysForMonth( ci_my[0], ci_my[1] );
var numberOfMonthdaysToShow = 31;
if ( frm.checkin_year_month.value !== '0' )
{
numberOfMonthdaysToShow = monthDays.length;
}
writeMonthdaysOptions( numberOfMonthdaysToShow, frm.checkin_year_month, monthDays, ci_d, ci_sel_value );
// Checkout month
monthDays = buildDaysForMonth( co_my[0], co_my[1] );
numberOfMonthdaysToShow = 31;
if ( frm.checkout_year_month.value !== '0' )
{
numberOfMonthdaysToShow = monthDays.length;
}
writeMonthdaysOptions( numberOfMonthdaysToShow, frm.checkout_year_month, monthDays, co_d, co_sel_value );
// IE 6 exhibits a bug whereby the value of the monthday select always jumps to zero.
if (isIE6) {
ci_d.value = ci_sel_value;
co_d.value = co_sel_value;
}
}
function buildDaysForMonth( year, month )
{
// Month index starts on 0(-11) in Date()-object
var monthDate = new Date( year, month - 1 );
var orgMonth = monthDate.getMonth();
var dayArray = [], weekDay;
while ( monthDate.getMonth() == orgMonth )
{
// Week starts on Sunday in Date()-object
weekDay = ( monthDate.getDay() == 0 ) ? 6 : ( monthDate.getDay() - 1 );
dayArray.push( booking.env.b_simple_weekdays_for_js[weekDay] );
monthDate.setDate( monthDate.getDate() + 1 );
}
return dayArray;
}
function buildHtmlNode (elementsObject, targetNode, refChild)
{
/*
Accepts an object of elements where the key specifies the tagname unless prefixed by @, in which case it specifies an attribute of the parent, or when it is #cdata, in which case it specifies a CDATA child.
http://xml.com/pub/a/2006/05/31/converting-between-xml-and-json.html
The big flaw now is the case <a><b/><c/><b/><a/>, which cannot be represented as a JS object. In that case interject an array of generic div or span elements.
*/
// If we want to validate as JSON, we must make sure what we pass in is JSON, which it presently isnot.
//elementsObject = booking.json.validate(elementsObject);
var
key,
counter,
found,
newElement,
newNode;
for (key in elementsObject)
{
if (elementsObject.hasOwnProperty(key))
{
var
prefix = key.substring(0, 1),
primaryKey = key.substring(1);
if (prefix != '_') // We窶决e on a non-DOM key, so skip.
{
if (prefix == '@') // Attribute
{
if (!targetNode.getAttribute(primaryKey))
{
// Perhaps extend this in the future to support multiple class values.
targetNode.setAttribute(primaryKey, elementsObject[key]);
}
}
else
{
if (prefix == '#') // Text or CDATA
{
if (primaryKey == 'text') // Text
{
found = false;
if (targetNode.childNodes && targetNode.childNodes.length > 0)
{
// Traverse text node children and append only if it isn窶冲 already there.
counter = 0;
while (counter < targetNode.childNodes.length && !found)
{
if (targetNode.childNodes[counter].nodeType == Node.TEXT_NODE && targetNode.childNodes[counter].nodeValue == elementsObject[key])
{
found = true;
}
counter++;
}
}
if (!found)
{
// MGP 040209: Cope with strings split by linebreaks - need to insert <br> elements
if ( elementsObject[key].indexOf("\n") == -1 )
{
newNode = document.createTextNode(elementsObject[key]);
if (refChild)
{
targetNode.insertBefore(newNode, refChild);
}
else
{
targetNode.appendChild(newNode);
}
}
else
{
// Found some linebreaks - split the string into component parts
var newNodeParts = elementsObject[key].split("\n");
// Loop through the parts, adding a linebreak after each one (except the last one)
for ( var i = 0; i < newNodeParts.length; i++ )
{
// Check for the existence of a star rating in the text node
if ( newNodeParts[i].match(/\d\*$/) )
{
// Found a star rating - extract the star
lastSpace = newNodeParts[i].lastIndexOf(" ");
newNodeString = newNodeParts[i].substring( 0, lastSpace );
starImgSrc = '/static/img/icons/stars/' + newNodeParts[i].substr( lastSpace + 1, 1 ) + 'sterren-small.png';
}
else
{
newNodeString = newNodeParts[i];
starImgSrc = '';
}
newNode = document.createTextNode(newNodeString);
if (refChild)
{
targetNode.insertBefore(newNode, refChild);
if ( starImgSrc )
{
newImg = document.createElement('img');
newImg.setAttribute('src', starImgSrc);
newImg.className = "stars";
targetNode.insertBefore(newImg, refChild);
}
}
else
{
targetNode.appendChild(newNode);
if ( starImgSrc )
{
newImg = document.createElement('img');
newImg.setAttribute('src', starImgSrc);
newImg.className = "stars";
targetNode.appendChild(newImg);
}
}
if ( i < newNodeParts.length - 1)
{
// Add a <br>
newBR = document.createElement("br");
if (refChild)
{
targetNode.insertBefore(newBR, refChild);
}
else
{
targetNode.appendChild(newBR);
}
}
}
}
}
}
else
{
if (primaryKey == 'cdata') // CDATA
{
targetNode.appendChild(document.createCDATASection(elementsObject[key]));
}
}
}
else // Element
{
// If targetNode was passed into this function, append the new child to it窶ｦ
if (targetNode)
{
// If elementsObject[key] is an array, we窶冤l create an element of type key for each array member.
if (elementsObject[key].length > 0)
{
for (counter = 0; counter < elementsObject[key].length; counter++)
{
if (elementsObject[key][counter])
{
if (!elementsObject[key][counter]._node)
{
newElement = document.createElement(key);
elementsObject[key][counter]._node = newElement;
var r = counter + 1;
while (r < elementsObject[key].length && !refChild)
{
if (elementsObject[key][r])
{
refChild = elementsObject[key][r]._node;
}
r++;
}
if (refChild)
{
newNode = targetNode.insertBefore(
elementsObject[key][counter]._node,
refChild);
}
else
{
newNode = targetNode.appendChild(
elementsObject[key][counter]._node);
}
arguments.callee(
elementsObject[key][counter],
newNode);
newElement._elementTree = elementsObject[key][counter];
}
else
{
arguments.callee(
elementsObject[key][counter],
elementsObject[key][counter]._node);
}
}
}
}
else
{
if (elementsObject[key].length !== 0)
{
if (!elementsObject[key]._node)
{
newElement = document.createElement(key);
elementsObject[key]._node = newElement;
if (refChild)
{
newNode = targetNode.insertBefore(
elementsObject[key]._node,
refChild);
}
else
{
newNode = targetNode.appendChild(
elementsObject[key]._node);
}
arguments.callee(
elementsObject[key],
newNode);
newElement._elementTree = elementsObject;
}
else
{
arguments.callee(
elementsObject[key],
elementsObject[key]._node);
}
}
}
}
// else create the new element as targetNode.
else
{
if (!elementsObject[key]._node)
{
arguments.callee(elementsObject[key],
elementsObject[key]._node = targetNode = document.createElement(key));
}
else
{
arguments.callee(elementsObject[key],
elementsObject[key]._node);
}
}
}
}
}
}
}
return targetNode;
};
/*extern DOM, calendar, dn, getChildImage, getDimensions, m, months, n, tr, y, checkDateOrder, d, booking.env.b_simple_weekdays, booking.env.b_simple_weekdays_for_js, i, tickCheckBox, updateDaySelect, booking, buildDaysForMonth, monthDaysArray */
// showCalendar without requirements for unique id's
//	@me	DOMNode context node
//	@calId	String	id of calendar node
//	@dt	String	'checkin' or 'checkout' prefix
var td;
function buildCal( y, m, d )
{
var daysInMonth = [31, 0, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
// Create today's date.
td = new Date();
if ( !y )
{
y = td.getFullYear();
}
if ( !m )
{
m = td.getMonth() + 1;
}
if ( !d )
{
d = td.getDate;
}
var dt = calendar.caldt;
var mDate = new Date( y, m - 1, 1 );
var firstMonthDay = mDate.getDay();
daysInMonth[1] = ( ( ( mDate.getFullYear() % 100 != 0 ) && ( mDate.getFullYear() % 4 == 0 ) ) || ( mDate.getFullYear() % 400 == 0 ) ) ? 29 : 28;
var t = '<table class="caltable" cellspacing="0"><tr>';
t += '<td class="calheader" colspan="7" class="monthYear">';
if ( y == td.getFullYear() && m == td.getMonth() + 1 )
{
t += '<img class="calNoPrevMonth" src="' + tr.icons + '/transparent.png" width="24" height="24" alt="' + tr.prevMonth + '" />';
}
else
{
t += '<a class="calPrevMonth" href="" onclick="prevMonth( ' + y + ',' + m + ' ); return false;" title="' + tr.prevMonth + '"><img src="' + tr.icons + '/transparent.png" width="24" height="24" alt="' + tr.prevMonth + '" /></a>';
}
t += '&nbsp;<select name="ym" onchange="goYearMonth( this.options[this.selectedIndex].value );">';
var mn = td.getMonth() + 1;
var yr = td.getFullYear();
var last_month = 0;
for ( n = 0; n <= 11; n++ )
{
t += '<option value="' + yr + '-' + mn + '"';
if ( mn == m && yr == y )
{
t += ' selected="selected"';
last_month = 1;
}
else
{
last_month = 0;
}
t += '>' + months[mn - 1] + ' ' + yr +'</option>';
mn++;
if ( mn > 12 )
{
mn = 1;
yr++;
}
}
t += ' </select>&nbsp;';
if ( last_month == 1 )
{
t += '<img class="calNoNextMonth" src="' + tr.icons + '/transparent.png" width="24" height="24" alt="' + tr.nextMonth + '" />';
}
else
{
t += '<a class="calNextMonth" href="" onclick="nextMonth( ' + y + ',' + m + ' ); return false;" title="' + tr.nextMonth +'"><img src="' + tr.icons + '/transparent.png" width="24" height="24" alt="' + tr.nextMonth + '" /></a>';
}
t += '</td></tr>';
t += '<tr class="dayNames">';
var cl;
for ( dn = 0; dn < 7; dn++ )
{
cl = '';
if ( ( dn % 7 == 5 ) || ( dn % 7 == 6 ) )
{
cl += ' weekend';
}
t += '<td class="' + cl + '">' + booking.env.b_simple_weekdays[dn] + '</td>';
}
t += '</tr><tr class="days">';
for ( i = 1; i <= 42; i++ )
{
var x = i - ( firstMonthDay + 6 ) % 7;
if ( x > daysInMonth[m - 1] || x < 1 )
{
x = '&nbsp;';
}
cl = '';
var href = 0;
if ( ( i % 7 == 0 ) || ( i % 7 == 6 ) )
{
cl += ' weekend';
}
if ( x > 0 )
{
var xDay = new Date( y, m - 1, x );
if ( ( xDay.getFullYear() == y ) && ( xDay.getMonth() + 1 == m ) && ( xDay.getDate() == d ) )
{
cl += ' selected';
href = 1;
}
if ( ( xDay.getFullYear() == td.getFullYear() ) && ( xDay.getMonth() == td.getMonth() ) && ( xDay.getDate() == td.getDate() ) )
{
cl += ' today';
href = 1;
}
else
{
if ( xDay > td )
{
cl += ' future';
href = 1;
}
else
{
if ( xDay < td )
{
cl += ' past';
}
}
}
}
t += '<td class="' + cl + '">';
if ( href )
{
t += '<a href="#" onclick="pickDate( ' + y + ',' + m + ',' + x + ',\'' + dt + '\' ); return false;">' + x + '</a>';
}
else
{
t += x;
}
t += '</td>';
if ( ( ( i ) % 7 == 0 ) && ( i < 36 ) )
{
t += '</tr><tr class="days">';
}
}
t += '</tr><tr><td colspan="7"><a href="#" onclick="closeCal(); return false;">' + tr.closeCalendar + '</a></td></tr></table>';
document.getElementById( "calendar" ).innerHTML = t;
}
function showCalendar( me, calId, dt )
{
getDimensions( me );
if ( document.getElementById )
{
var c = document.getElementById( calId );
var i = getChildImage( me );
var f = document.getElementById('frm');
calendar.cal = c;
calendar.caldt = dt;
calendar.calf = f;
var my = f[dt + '_year_month'].value.split( "-" );
y = my[0];
m = my[1];
d = f[dt + '_monthday'].value;
// Ensure y is nonzero so the pop-up calendar correctly figures out the past/current/future classes for each monthday.
if ( y === '0' )
{
y = new Date().getFullYear();
}
buildCal( y, m, d );
var box = getDimensions( i );
var
left = box.x - 120,
top = ( box.y + i.offsetHeight );
c.style.left = left + 'px';
c.style.top = top + 'px';
c.style.display = "block";
}
}
function closeCal()
{
calendar.cal.style.display = 'none';
}
function prevMonth( y, m )
{
if ( new Date( y, m - 1, 1 ) < td )
{
return;
}
if ( m > 1 )
{
m--;
}
else
{
m = 12;
y--;
}
buildCal( y, m );
}
//does this finction need to check for max month/year?
function nextMonth( y, m )
{
if ( m < 12 )
{
m++;
}
else
{
m = 1;
y++;
}
buildCal( y, m );
}
function goYearMonth( ym )
{
var ymlist = ym.split("-");
buildCal( ymlist[0], ymlist[1] );
}
function pickDate( y, m, d, dt )
{
// set form values
var f = calendar.calf;
var dt = calendar.caldt;
f[dt + '_year_month'].value = y + "-" + m;
f[dt + '_monthday'].value = d;
tickCheckBox( 'availcheck' );
if ( dt == "checkin" )
{
checkDateOrder( f, 'checkin_monthday', 'checkin_year_month', 'checkout_monthday', 'checkout_year_month' );
}
closeCal();
updateDaySelect( f );
}
function initDaySelect()
{
var forms = document.getElementsByTagName( 'form' );
for ( var i = 0; i < forms.length; i++ )
{
if ( forms[i].checkin_monthday )
{
updateDaySelect( forms[i] );
}
}
}
function updateDaySelect( me )
{
// 1-2 testing
if ( !booking.env.b_simple_weekdays_for_js )
{
return;
}
var frm = document.getElementById('frm');
if ( frm.getAttribute( 'id' ) !== 'frm' && frm.className !== 'availForm' )
{
return;
}
// Check if we have all fields. If not, we are in the first stage
// of the book process and should not auto-update selects since there
// is only the check-in select and the amount of nights.
if ( !frm.checkin_monthday || !frm.checkout_monthday || !frm.checkin_year_month || !frm.checkout_year_month )
{
return;
}
if ( frm.checkin_monthday.value === '0' && frm.checkout_monthday.value === '0' && frm.checkin_year_month.value === '0' && frm.checkout_year_month.value === '0' )
{
return;
}
// If the year-month fields have nonzero values, prepend the day of the week to each monthday in the check-in and check-out monthday Selects.
var
ci_d = frm.checkin_monthday,
co_d = frm.checkout_monthday,
ci_my,
co_my,
todaysDate;
// If the form field has a nonzero value, use it;
if ( frm.checkin_year_month.value !== '0' )
{
ci_my = frm.checkin_year_month.value.split( "-" );
}
else
{
// Use the current date value.
todaysDate = new Date();
ci_my = [ todaysDate.getFullYear(), todaysDate.getTwoDigitMonth() ];
}
if ( frm.checkout_year_month.value !== '0' )
{
co_my = frm.checkout_year_month.value.split( "-" );
}
else
{
todaysDate = new Date();
co_my = [ todaysDate.getFullYear(), todaysDate.getTwoDigitMonth() ];
}
var
ci_sel = Math.max( ci_d.selectedIndex, 0 ),
co_sel = Math.max( co_d.selectedIndex, 0 ),
ci_sel_value = ci_d[ ci_sel ].value,
co_sel_value = co_d[ co_sel ].value,
monthDays = [],
opt,
i;
ci_d.innerHTML = '';
co_d.innerHTML = '';
// Build the Day/Month prompt Options if the monthday values aren't already set or, if they are set, they are nonzero; and if the client isn't IE 5. This condition mimics the TMPL_IF in datebox.inc/div#avail (except for the inclusion here of IE5).
var MonthdayPromptOption = function ()
{
this.option = {
"_this" : this,
"@selected" : "selected",
"@class" : "day prompt site_experiment_encourage_date_entry_2",
"@value" : 0,
"#text" : day
};
};
if ( ci_sel_value === '0' )
{
buildHtmlNode( new MonthdayPromptOption(), ci_d ).selected = true;
}
if ( co_sel_value === '0' )
{
buildHtmlNode( new MonthdayPromptOption(), co_d ).selected = true;
}
function writeMonthdaysOptions( numberOfMonthdaysToShow, yearMonthSelectElement, monthDaysArray, monthDaysSelectElement, monthDaySelectValue )
{
var i, optionElementInnerHTML, optionElement;
for ( i = 0; i < numberOfMonthdaysToShow; i++ )
{
optionElement = document.createElement( 'option' );
optionElementInnerHTML = i + 1;
if ( yearMonthSelectElement.value !== '0' )
{
optionElementInnerHTML = monthDaysArray[i] + ' ' + optionElementInnerHTML;
}
optionElement.innerHTML = optionElementInnerHTML;
optionElement.value = ( i + 1 );
if ( i > 0 && monthDaySelectValue == i + 1 )
{
optionElement.defaultSelected = optionElement.selected = true;
}
monthDaysSelectElement.appendChild( optionElement );
}
}
// Check-in month
monthDays = buildDaysForMonth( ci_my[0], ci_my[1] );
var numberOfMonthdaysToShow = 31;
if ( frm.checkin_year_month.value !== '0' )
{
numberOfMonthdaysToShow = monthDays.length;
}
writeMonthdaysOptions( numberOfMonthdaysToShow, frm.checkin_year_month, monthDays, ci_d, ci_sel_value );
// Checkout month
monthDays = buildDaysForMonth( co_my[0], co_my[1] );
numberOfMonthdaysToShow = 31;
if ( frm.checkout_year_month.value !== '0' )
{
numberOfMonthdaysToShow = monthDays.length;
}
writeMonthdaysOptions( numberOfMonthdaysToShow, frm.checkout_year_month, monthDays, co_d, co_sel_value );
// IE 6 exhibits a bug whereby the value of the monthday select always jumps to zero.
if (isIE6) {
ci_d.value = ci_sel_value;
co_d.value = co_sel_value;
}
}
function buildDaysForMonth( year, month )
{
// Month index starts on 0(-11) in Date()-object
var monthDate = new Date( year, month - 1 );
var orgMonth = monthDate.getMonth();
var dayArray = [], weekDay;
while ( monthDate.getMonth() == orgMonth )
{
// Week starts on Sunday in Date()-object
weekDay = ( monthDate.getDay() == 0 ) ? 6 : ( monthDate.getDay() - 1 );
dayArray.push( booking.env.b_simple_weekdays_for_js[weekDay] );
monthDate.setDate( monthDate.getDate() + 1 );
}
return dayArray;
}
// Hides "Available rooms" and shows date input for stay.
// This currently works without unique id's under the assumption that
// the two (or more) divs containing the different "views" are in the same container.
function switchDateStack(me, page) {
var stackPage = me;
var testMe = me.parentNode;
try {
while (testMe.nodeName != 'div') {
stackPage = testMe;
testMe = testMe.parentNode;
}
} catch(e) {}
var stackCount = 0;
while ( stackPage ) {
if ( stackPage.nodeName.toLowerCase() == 'div' ) {
stackCount++;
if ( stackCount == page ) {
stackPage.style.display = 'block';
} else {
stackPage.style.display = 'none';
}
}
stackPage = stackPage.nextSibling;
}
}
// Searches children to find image
function getChildImage( contextElm )
{
contextElm = contextElm.firstChild;
while ( contextElm.nodeName.toLowerCase() != 'img' && contextElm.nextSibling )
{
contextElm = contextElm.nextSibling;
}
return contextElm;
}
// Getting element dimensions
function getDimensions( elm ) {
var box = { x:0, y:0, w:0, h:0 };
if(document.getBoxObjectFor) {
var boxRef = document.getBoxObjectFor(elm);
box.x = boxRef.x;
box.y = boxRef.y;
box.w = boxRef.width;
box.h = boxRef.height;
}
else if(elm.getBoundingClientRect) {
var boxRef = elm.getBoundingClientRect();
box.x = boxRef.left;
box.y = boxRef.top;
box.w = (boxRef.right - boxRef.left);
box.h = (boxRef.bottom - boxRef.top);
if(document.compatMode && document.compatMode != 'BackCompat') {
// IE6/compliance mode
box.x += document.documentElement.scrollLeft - 2;
box.y += document.documentElement.scrollTop - 2;
}
else if(!isIE5) {
// IE5.5
box.x += document.body.scrollLeft - 2;
box.y += document.body.scrollTop - 2;
}
}
else {
// No known box information available, walking
// manually through offsetParents to calculate x/y coordinates
box.w = elm.offsetWidth;
box.h = elm.offsetHeight;
while(elm) {
box.x += elm.offsetLeft;
box.y += elm.offsetTop;
if(elm.offsetParent) // Required for Safari 1.3 :(
elm = elm.offsetParent;
else
break;
}
}
var cc;
if(cc = document.getElementById('bodyconstraint'))
box.x -= cc.offsetLeft;
return box;
}
</script>


