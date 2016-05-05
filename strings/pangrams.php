<?php
/*Roy wanted to increase his typing speed for programming contests. So, his friend advised him to type the sentence "The quick brown fox jumps over the lazy dog" repeatedly, because it is a pangram. (Pangrams are sentences constructed by using every letter of the alphabet at least once.)
After typing the sentence several times, Roy became bored with it. So he started to look for other pangrams.
Given a sentence ss, tell Roy if it is a pangram or not.
Input Format
Input consists of a string ss.
Constraints
Length of ss can be at most 103103 (1=|s|=103)(1=|s|=103) and it may contain spaces, lower case and upper case letters. Lower-case and upper-case instances of a letter are considered the same.
Output Format
Output a line containing pangram if ss is a pangram, otherwise output not pangram.
Sample Input
Input #1*/
$_fp = fopen(" place input file", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$alphabeth=array();
$alphabeth=['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$sentence=fgets($_fp);
$sentence=strtolower($sentence);
function isPangram( $sen,  $alpha)
        {
            foreach ($alpha as $character) {
            if (false === stripos($sen, $character)) {
                return 'not pangram';
            }
        }
        return 'pangram';
    }  
echo isPangram( $sentence,  $alphabeth);            
            
        
      
    
          
        
     
?>