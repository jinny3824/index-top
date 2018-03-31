<?php

file_put_contents('data/'.$_POST['head'],$_POST['body']);
header('location: /index.php?nick='.$_POST['head']);
 ?>
