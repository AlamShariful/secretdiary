<?php 

function valid_pass($candidate) {
   $r1='/[A-Z]/';  //Uppercase
   $r2='/[a-z]/';  //lowercase
   //$r3='/[!@#$%^&*()\-_=+{};:,<.>]/';  // whatever you mean by 'special char'
   $r4='/[0-9]/';  //numbers

   

   if(preg_match($r1,$candidate)>0){
   	 if(preg_match($r2,$candidate)>0){
   	 	if(preg_match($r4,$candidate)>0){
   	 		if(strlen($candidate)>7){
   	 			return TRUE;
   	 		}else { echo "Atleast 8 charachter\n"; return FALSE;}
   	 	}else { echo "Atleast 1 Number\n"; return FALSE;}
   	 }else { echo "Atleast 1 lowercase charachter\n"; return FALSE;}
   }else { echo "Atleast 1 Uppercase charachter\n"; return FALSE;}


}

?>