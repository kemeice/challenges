<?php
/*
You are given two strings, AA and BB. Find if there is a substring that appears in both AA and BB.

Input Format

Several test cases will be given to you in a single file. The first line of the input will contain a single integer TT, the number of test cases.

Then there will be TT descriptions of the test cases. Each description contains two lines. The first line contains the string AA and the second line contains the string BB.

Output Format

For each test case, display YES (in a newline), if there is a common substring. Otherwise, display NO.

Constraints
failed with big data
All the strings contain only lowercase Latin letters.
1<=T<=101<=T<=10
1<=|A|,|B|<=105
*/



$_fp = fopen("te.php", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
function checkstring($str , $strarray )
{
  foreach ($strarray as $letter) 
  {
    if(false != stripos($strarray , $letter))
    {
      return 'YES' .PHP_EOL;
    }
    
  } 
    
  return 'NO' .PHP_EOL;  
}



function arrfromstrg ($str)
{
$aa =array();

$str=str_replace(PHP_EOL, '', $str); 
$count=strlen($str);
for($x=0; $x < $count; $x++){
$newletter= $str[$x];
$aa[$x]=$newletter;
    
} 
 return $aa;   
    }
    
    

$first=0;
$a=array();
$i=0;   

while($k= fgets($_fp))
      {
     if ($first=='0')
         {
         $first++;
         continue;
         
     }
$a[$i]= $k;
$i++;

  if($i=='2')
  {
    $newarray=arrfromstrg ($a['0']);
    
    echo checkstring($a['1'] , $newarray );
    $i=0;
  }   
    
}    
          
        
     


?>