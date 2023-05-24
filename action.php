<?php
$a=$_POST['a'];
$aa=$_GET['b'];
$sw=$_GET['sw'];
$file = $_GET['file'];
$cc=$_GET['cc'];
$glob2=$_POST['glob2'];
$ccc=$_POST['ccc'];
$h = "localhost:8889";
$n = "root";
$p = "root";
$b = "pw";
$glob = 100;
if($a=='g_b'){
  $tt=$ccc*$glob2;
  $mysqli = new mysqli($h,$n,$p,$b);
  if ($mysqli->connect_errno) {
    die($mysqli->connect_error);
    exit();
  }
  $res = $mysqli->query("SELECT * FROM `accounts` ORDER BY `id` LIMIT $tt,$glob2") or die("msq");
  $arr = mysqli_fetch_array($res) or die("arr");
  do{
    echo "<button id='$tt' value='".$arr[pwd]."'>".$arr[login]."</button>";
    $tt++;
  }while($arr = mysqli_fetch_array($res));
  $ccc++;
  mysqli_close($mysqli) or die('close');

}
if($a=='s_b'){
  $path = 'bases/';
  $file = $path.$_FILES['base']['name'];
  if (!file_exists($path)){
    mkdir($path, 0700, true) or die('mkdir');
  }
  move_uploaded_file($_FILES['base']['tmp_name'], $file) or die("move");
$base_arr = file($file);
///
$mysqli = new mysqli($h,$n,$p,$b);
if($mysqli->connect_errno){
  die($mysqli->connect_error);
  exit();
  }
$mysqli->query("TRUNCATE TABLE `accounts`") or die("delete mysqli");
///
$sw = count($base_arr)/$glob;
$lgn='';
$pwd='';
$c=0;
if($sw>1){
  for($i=0;$i<$glob;$i++){
    while (substr($base_arr[$i],$c,1)!=':') {
      $c++;
    }
    for($g=0;$g<$c;$g++){
      $lgn=$lgn.substr($base_arr[$i],$g,1);
    }
    for($c++;$c<strlen($base_arr[$i])-1;$c++){
      $pwd=$pwd.substr($base_arr[$i],$c,1);
    }
    $res=$mysqli->query("SELECT * FROM `accounts` WHERE `login`='$lgn'") or die('ds');
    $check = mysqli_fetch_array($res);
    if(empty($check)){
      $pwd = urlencode($pwd) or die('urlencode');
      $pwd = str_replace("%0D","",$pwd) or die("str_replace");
      $mysqli->query("INSERT INTO `accounts` (`login`,`pwd`) VALUES ('$lgn','$pwd')") or die("add mysqli");
      echo $lgn.' добавлен</br>';
    }else{
      echo $lgn.' уже в базе.</br>';
    }
    $lgn='';
    $pwd='';
    $c=0;
  }
  $sw--;
  echo '<script>';
  echo "window.location.href='action.php?b=s_bb&sw=$sw&file=$file&cc=1';";
  echo '</script>';
  }else {
  $hm = $glob/$sw;
  for($i=0;$i<$hm;$i++){
    while (substr($base_arr[$i],$c,1)!=':') {
      $c++;
    }
    for($g=0;$g<$c;$g++){
      $lgn=$lgn.substr($base_arr[$i],$g,1);
    }
    for($c++;$c<strlen($base_arr[$i])-1;$c++){
      $pwd=$pwd.substr($base_arr[$i],$c,1);
    }
    $res=$mysqli->query("SELECT * FROM `accounts` WHERE `login`='$lgn'") or die('ds');
    $check = mysqli_fetch_array($res);
    if(empty($check)){
      $pwd = urlencode($pwd) or die('urlencode');
      $pwd = str_replace("%0D","",$pwd) or die("str_replace");
      $mysqli->query("INSERT INTO `accounts` (`login`,`pwd`) VALUES ('$lgn','$pwd')") or die("add mysqli");
      echo $lgn.' добавлен</br>';
    }else{
      echo $lgn.' уже в базе.</br>';
    }
    echo '<script>';
    echo 'window.location.href="index.php";';
    echo '</script>';
    $lgn='';
    $pwd='';
    $c=0;
  }
}
}
if($aa=='s_bb'){
$mysqli = new mysqli($h,$n,$p,$b);
  if($mysqli->connect_errno){
    die($mysqli->connect_error);
    exit();
    }
$base_arr = file($file);
$lgn='';
$pwd='';
$c=0;
$t = $cc*$glob;
if($sw>1){
  for($t;$t<$glob*$cc+$glob;$t++){
    while (substr($base_arr[$t],$c,1)!=':') {
      $c++;
    }
    for($g=0;$g<$c;$g++){
      $lgn=$lgn.substr($base_arr[$t],$g,1);
    }
    for($c++;$c<strlen($base_arr[$t])-1;$c++){
      $pwd=$pwd.substr($base_arr[$t],$c,1);
    }
    $res=$mysqli->query("SELECT * FROM `accounts` WHERE `login`='$lgn'") or die('ds');
    $check = mysqli_fetch_array($res);
    if(empty($check)){
      $pwd = urlencode($pwd) or die('urlencode');
      $pwd = str_replace("%0D","",$pwd) or die("str_replace");
      $mysqli->query("INSERT INTO `accounts` (`login`,`pwd`) VALUES ('$lgn','$pwd')") or die("add mysqli");
      echo $lgn.' добавлен</br>';
    }else{
      echo $lgn.' уже в базе.</br>';
    }
    $lgn='';
    $pwd='';
    $c=0;
  }
  $sw--;
  $cc++;
  echo '<script>';
  echo "window.location.href='action.php?b=s_bb&sw=$sw&file=$file&cc=$cc';";
  echo '</script>';
  }  else{
    $hm  = ($glob*$cc)+(round($sw,1,PHP_ROUND_HALF_DOWN)*100)-11;
    for($t;$t<$hm;$t++){
      while (substr($base_arr[$t],$c,1)!=':') {
        $c++;
      }
      for($g=0;$g<$c;$g++){
        $lgn=$lgn.substr($base_arr[$t],$g,1);
      }
      for($c++;$c<strlen($base_arr[$t])-1;$c++){
        $pwd=$pwd.substr($base_arr[$t],$c,1);
      }
      $res=$mysqli->query("SELECT * FROM `accounts` WHERE `login`='$lgn'") or die('ds');
      $check = mysqli_fetch_array($res);
      if(empty($check)){
        $pwd = urlencode($pwd) or die('urlencode');
        $pwd = str_replace("%0D","",$pwd) or die("str_replace");
        $mysqli->query("INSERT INTO `accounts` (`login`,`pwd`) VALUES ('$lgn','$pwd')") or die("add mysqli");
        echo $lgn.' добавлен</br>';
      }else{
        echo $lgn.' уже в базе.</br>';
      }
      echo '<script>';
      echo 'window.location.href="index.php";';
      echo '</script>';
      $lgn='';
      $pwd='';
      $c=0;
    }
    }
}
?>
