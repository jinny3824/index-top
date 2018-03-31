<?php
function head(){
  if (isset( $_GET["nick"])) {
    echo $_GET["nick"];
  }
  else {
    echo "!welcome!";
  }
}
function llist(){
  $list = scandir('./data');
  $i = 0;
  while ($i<count($list)) {
    if ($list[$i]!="."){
      if ($list[$i]!="..") {

      echo "<li><a href=\"index.php?nick=$list[$i]\"> $list[$i] </a></li>\n";}
    }
    $i=$i+1;
  }
}
function thebody(){
  if(isset( $_GET['nick'])){

   echo file_get_contents('data/'.$_GET['nick']);
 }else {
   echo "Hello hansei".'<br>';
 }

}

?>
