var dayOfWeek = new Date().getDay();
var elem = $("[data-day=" + dayOfWeek + "]");
if (elem.length) {
  elem.addClass("info");
}
