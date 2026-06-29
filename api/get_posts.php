<?php include_once "db.php";

$list=$News->all(['type'=>$_GET['text']]);
foreach($list as $l){
    echo "<a href='' style='margin:10px 0;display:block'>";
    echo $l['title'];
    echo "</a>";
}

?>