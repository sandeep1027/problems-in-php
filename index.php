<?php
/* 
 * You are given a string S and you need to tell
 * the number of substrings in S of length K which
 * is the palindrome.
 *
 * @class PhpProblem
*/

class PhpProblem{
   /*
    * @access private
    * @var int
   */
   private $counts="";
    /*
     * Logic function
     * @param var $str
     * @return var integer
    */
   
    public function Logic($str,$klen){
	$this->counts="";
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
		if($this->counts!=null)
		   return $this->counts;
		else
	           return 0;
   }
}
 /* class object */
 $classobj=new PhpProblem();
 
 /* 
  * Reading Sample test cases
  * 2
  * galaxy 1
  * aaa 2
  * @var filename 
 */
 
 $filename="test_case.txt";
 $file=@fopen($filename, "r");
 if ($file) {
   $input_array = explode("\n", fread($file, filesize($filename)));
 }
 fclose($file);

 for($i=1;$i<=$input_array[0];$i++){
     $result="";
     $input_data=explode(" ",$input_array[$i]);	
     $result=$classobj->Logic($input_data[0],$input_data[1]);
     echo $result."\n";
 }
//this is stagging upladte pls test uit
?>
