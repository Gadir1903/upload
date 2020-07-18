<?php 
$maxsize  = 1*1024*1024; 
$multi= count($_FILES['fayl']['name']);
for($i=0;$i<$multi;$i++){  
$ad = date("Y.m.d.H.i.s")."-".$_FILES['fayl']['name'][$i];
$tmp = $_FILES['fayl']['tmp_name'][$i];
$tip = $_FILES["fayl"]["type"][$i];
$types = ["image/png","image/jpeg"]; 
  

if(($_FILES['fayl']['size'][$i] >= $maxsize) || ($_FILES["fayl"]["size"][$i] == 0)) {
    echo "Şəkilin həcmi böyükdür..." ;
    exit;
}
    
if(!in_array($tip,$types)){
    echo $_FILES['fayl']['name'][$i]."  Adlı faylın tipi uyğun deyil!";
    exit;
}

$move = move_uploaded_file($tmp,"file/".$ad);
};

if($move){
    echo "ok";
}
else{
    echo "error..." ;
}