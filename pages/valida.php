<?php
$login="bianca1@gmail.com";
$senha="MTIzNDU2";
$sg=base64_encode($_POST['senha']);
$hj=$_POST['email'];
   
   if($login==$hj){

    if($senha==$sg){
        header("Location:index.php");
    }else{
        header("Location:login.php?senha=erro");
    }
   }else{
    header("Location:login.php?login=erro");
}
    
     


?>