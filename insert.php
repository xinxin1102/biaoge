<?php
include "db.php";
$id=$_GET["id"];
$attr=$_GET["attr"];
$value=$_GET["value"];
$sql="update stu set $attr='$value' where id=".$id;
$result=$db->query($sql);
if($db->affected_rows>0){
    echo "修改成功";
}
?>
