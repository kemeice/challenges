<?php
/*
Shashank likes strings in which consecutive characters are different. For example, he likes ABABA, while he doesn't like ABAA. Given a string containing characters AA and BB only, he wants to change it into a string he likes. To do this, he is allowed to delete the characters in the string.

Your task is to find the minimum number of required deletions.

Input Format

The first line contains an integer TT, i.e. the number of test cases.
The next TT lines contain a string each.

Output Format

For each test case, print the minimum number of deletions required.

Constraints

1=T=101=T=10
1=1= length of string =105
*/


$_fp = fopen("php://stdin", "r");
$first =fgets($_fp);
    
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
While($k=fgets($_fp))
    {
 
   
    $lettercount=0;
    $word= str_replace(PHP_EOL, '', $k);
    $wordarray=str_split($word);
    $count=count($wordarray);
    for($i=0; $i< $count ; $i++)
        {
        $next=$i+1;
       
        if($word[$i]==$word[$next])
         $lettercount++;   
        
    }
    
      echo $lettercount;
    echo PHP_EOL;
    }
    
    




?>