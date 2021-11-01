<?php

$book=$_GET['book'];
if($book=='被討厭的勇氣'){

    echo "<span style='color:red'>";
    echo "書名正確:";
    echo $book;
    
    echo "</span>";
}else{
    echo "書名錯誤";
}


?>