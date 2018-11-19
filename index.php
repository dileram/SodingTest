<?php 

$primes = array();
$is_prime_no = false;
$is_sum_prime = false;
$sum = 0;
$ct =0;
$largestSum = 0;
for ($i = 2; $i<1000000; $i++) {
    $is_prime_no = true;
       for ($j = 2; $j<=($i/2); $j++) {
               if ($i%$j==0) {
                         $is_prime_no = false;
                                 break;
                               }
                  }
       if ($is_prime_no) {
$sum = $sum + $i;
	$ct = $ct+1; 
$is_sum_prime = true;
       for ($j = 2; $j<($sum); $j++) {
               if ($sum%$j==0) {
                         $is_sum_prime=false;
                                 break;
                               }

                  
                   array_push($primes,$i);
                
}
if($is_sum_prime){

//echo "Sum:" .$sum.",<br/>";
if($sum<1000000){
$largestSum = $sum;

}
else if($sum>1000000){
	break;
}
}

                 }
       if (count($primes)==1000000) {
              break;
                 }
				
}
echo "Total No: ".$ct."<br/>";
echo "Largest Sum:". $largestSum;