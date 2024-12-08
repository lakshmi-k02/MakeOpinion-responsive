<html><head>
      <title>Visible</title>
      <meta http-equiv="content-type" content="text/html; charset=UTF8">
</head>
<body>
      <iframe src="https://www.trustpilot.com/evaluate/embed/cpx-research.com"></iframe>
      <div id="state"></div>

<script>
var vis = (function(){
      var stateKey, eventKey, keys = {
            hidden: "visibilitychange",
            webkitHidden: "webkitvisibilitychange",
            mozHidden: "mozvisibilitychange",
            msHidden: "msvisibilitychange"
      };
      for (stateKey in keys) {
            if (stateKey in document) {
                  eventKey = keys[stateKey];
                  break;
            }
      }
      return function(c) {
            if (c) {
                  document.addEventListener(eventKey, c);
                  //document.addEventListener("blur", c);
                  //document.addEventListener("focus", c);
            }
            return !document[stateKey];
      }
})();

vis(function(){
      document.title = vis() ? 'Page Visible' : 'Page Not visible';
      console.log(new Date, 'visible ?', vis());
});
// to set the initial state
document.getElementById("state").innerHTML = vis() ? 'Page Visible' : 'Page Not visible';

</script>

</body></html>