<?php
/* 
*You are given a string S and you need to tell
*the number of substrings in S of length K which
*is the palindrome.
*
*
* @class PhpProblem
*/


class PhpProblem{
   /*
   *@access private
   *@var int
   */
    private $count="";
    /*
    *@access private
    *@var int
    */
    private $strlen;
    /*
    *@access private
    *@var string
    */
    private $temp; 
    
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
