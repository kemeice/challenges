<?php
/*
James found a love letter his friend Harry has written for his girlfriend. James is a prankster, so he decides to meddle with the letter. He changes all the words in the letter into palindromes.

To do this, he follows two rules:

    He can reduce the value of a letter, e.g. he can change d to c, but he cannot change c to d.
    In order to form a palindrome, if he has to repeatedly reduce the value of a letter, he can do it until the letter becomes a. Once a letter has been changed to a, it can no longer be changed.

Each reduction in the value of any letter is counted as a single operation. Find the minimum number of operations required to convert a given string into a palindrome.

Input Format

The first line contains an integer TT, i.e., the number of test cases.
The next TT lines will contain a string each. The strings do not contain any spaces.

Constraints
1=T=101=T=10
1=1= length of string =104=104
All characters are lower case English letters.
*/


function isplandrome ($word)
{
 $reverse=str_split($word);
 $reverseString = implode(array_reverse($reverse));
 if($reverseString===$word)
 return true;
 else 
 return false;
 
 
 
    
}

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$cases=fgets($_fp);
for($i=1; $i<=$cases ; $i++)
    {
    $word=fgets($_fp);
   $word=trim($word);
    $word=str_replace(PHP_EOL, '', $word); 
    
    $len=strlen($word);
    
    $x=$len/2;
$x=(int)$x; // return int in case $len is a odd number 
$k=0;
 $finalcount=0;
$end= $len - 1;
  
while($k<$x)
{

   
    $first=ord($word[$k]) ; 
  $last=ord($word[$end]);
  if($last>$first):
  $moves=$last- $first;
  else:
  $moves=$first- $last;
  endif;
    
    
  $finalcount += $moves;
  $k++;
  $end--;
  
    
}
echo $finalcount;
    echo PHP_EOL;   
    
}




?>