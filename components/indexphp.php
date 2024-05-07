<?php
$submit=0; 
 $subject=[];

 if (isset($_GET['submit'])){   
    $submit=1;    
$branch =$_GET["branch"];
$year =$_GET["year"];
$semester =$_GET["semester"];

if($branch==1){
    if($year==1){

        if($semester==1){  
            $subject=["Engineering_Mathematics_1","Engineering_Physics","Engineering_Graphics","Communication_Skills","Energy_&_Environment_Engineering"];
        }
        if($semester==2){ 
            $subject=["Engineering_Mathematics_2","Engineering_Chemistry","Engineering_Mechanics","Computer_Programming_in_C"];
         }
    }
    if($year==2){
        if($semester==1){ 
            
         }
        if($semester==2){  }

    }
    if($year==3){

        if($semester==1){  }
        if($semester==2){  }

    }
    if($year==4){
        if($semester==1){  }
        if($semester==2){  }
    }

}

if($branch==2){
    if($year==1){

        if($semester==1){  
            $subject=["Engineering_Mathematics_1","Engineering_Physics","Engineering_Graphics","Communication_Skills","Energy_&_Environment_Engineering"];
          
        }
        if($semester==2){ 
            $subject=["Engineering_Mathematics_2","Engineering_Chemistry","Engineering_Mechanics","Computer_Programming_in_C"];

         }
    }
    if($year==2){
        if($semester==1){ 
            
         }
        if($semester==2){  }

    }
    if($year==3){

        if($semester==1){  }
        if($semester==2){  }

    }
    if($year==4){
        if($semester==1){  }
        if($semester==2){  }
    }

}

if($branch==3){
    if($year==1){

        if($semester==1){  
            $subject=["Engineering_Mathematics_1","Engineering_Chemistry","Engineering_Mechanics","Computer_Programming_in_C"];
          
        }
        if($semester==2){ 
            $subject=["Engineering_Mathematics_2","Engineering_Physics","Engineering_Graphics","Communication_Skills","Energy_&_Environment_Engineering","Basic_civil_&_Mechanical_Engineering"];

         }
    }
    if($year==2){
        if($semester==1){ 
            
         }
        if($semester==2){  }

    }
    if($year==3){

        if($semester==1){  }
        if($semester==2){  }

    }
    if($year==4){
        if($semester==1){  }
        if($semester==2){  }
    }

}

if($branch==4){
    if($year==1){

        if($semester==1){  
            $subject=["Engineering_Mathematics_1","Engineering_Chemistry","Engineering_Mechanics","Computer_Programming_in_C"];
          
        }
        if($semester==2){ 
            $subject=["Engineering_Mathematics_2","Engineering_Physics","Engineering_Graphics","Communication_Skills","Energy_&_Environment_Engineering","Basic_civil_&_Mechanical_Engineering"];

         }
    }
    if($year==2){
        if($semester==1){ 
            
         }
        if($semester==2){  }

    }
    if($year==3){

        if($semester==1){  }
        if($semester==2){  }

    }
    if($year==4){
        if($semester==1){  }
        if($semester==2){  }
    }

}


if($branch==5){
    if($year==1){

        if($semester==1){  
            $subject=["Engineering_Mathematics_1","Engineering_Chemistry","Engineering_Mechanics","Computer_Programming_in_C"];
          
        }
        if($semester==2){
            $subject=["Engineering_Mathematics_2","Engineering_Physics","Engineering_Graphics","Communication_Skills","Energy_&_Environment_Engineering","Basic_civil_&_Mechanical_Engineering"];

          }
    }
    if($year==2){
        if($semester==1){ 
            
         }
        if($semester==2){  }

    }
    if($year==3){

        if($semester==1){  }
        if($semester==2){  }

    }
    if($year==4){
        if($semester==1){  }
        if($semester==2){  }
    }

}









}


if (isset($_GET['submit2'])){ 
   
    // header('Location: g.php');
}
?>