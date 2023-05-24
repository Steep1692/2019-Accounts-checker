<footer>
  <script>
  function date()
  {
  var t = new Date();
  $("#clock").html(t.toLocaleTimeString());
  }
  setInterval(date,100);
  </script>
  <div id="footer"><p>Время : <font id="clock"></font></p>
  <a href='http://vk.com/steep1692' style="color: #797F9F;text-decoration:none;">@ by Steep 2019</a></div>

</footer>
