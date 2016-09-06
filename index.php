<?php
class PhpProblem{
   
    private $count="";
    private $strlen;
    private $temp; 
  
    public function Logic($str,$klen){
        $strlen=strlen($str);    
        for($i=0;$i<=$strlen;$i++ ) {
            $temp="";
            for($j=$i;$j<$i+$klen;$j++){
                $temp.= $str[$j]; 
            }
  
           if(strlen($temp)==$klen){
               if($temp==strrev($temp)){
                  $count++;
               }
           }
        }
     return $count;
   }
}

$classobj=new PhpProblem();
$result=$classobj->Logic("aabbcc",2);
echo $result;

?>
