<?php

function equalCheck($um,$dois,$erro){
	if(!$um == $dois){
		echo "<script>alert($erro)</script>";
	}
}

function fodase($link, $sql3){
                mysqli_query($link,$sql3);
            }

?>