function set_base() {
  var form = $('form')[1];
  var formData = new FormData(form);
$.ajax({
    type: 'POST',
    url: 'action.php',
    data: {a:'s_b'},
    dataType: 'html',
    processData: false,
    contentType: false,
    success: function (data) {
        $('#set_result').append(data);
      }
})
}
  <input type="text" name="sleep" value="1" placeholder="Задержка между запросами">
