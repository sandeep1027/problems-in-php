<?php
/* 
*You are given a string S and you need to tell
*the number of substrings in S of length K which
*is the palindrome.
*
* @class PhpProblem
*/


class PhpProblem{
   
   /*
   *@access private
   *@var int
   */
   private $counts="";
    /*
    * Logic function
    *@param var $str(String)  var $klen(int)
    *@return var integer
    */
   
    public function Logic($str,$klen){
        $strlen=strlen($str);    
        for($i=0;$i<=$strlen;$i++ ) {
            $temp="";
            for($j=$i;$j<$i+$klen;$j++){
                if(isset($str[$j])){
                    $temp.= $str[$j];
                } 
            }
          
           if(strlen($temp)==$klen){
               if($temp==strrev($temp)){
                     $this->counts++;
               }
           }
        }
     return $this->counts;
   }
}

$classobj=new PhpProblem();
$result=$classobj->Logic("aabbccc",2);
echo $result;

?>
