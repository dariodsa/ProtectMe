<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?
//print_r($_GET);
function decrypt($value)
{
	$num=0;
	$string="";
	for($i=0;$i<strlen($value);$i+=4)
	{
		$hexValue=0;
		$hexString="";
		for($j=$i;$j<=$i+3;++$j)
		{
			$hexString=$hexString.$value[$j];
		}
		$hexValue=hexdec($hexString);
		//$hexValue-=$num;
		
		$string=$string.utf8(giveCharacter($hexValue,413,3233)-$num);
		
		++$num;
	}
	
	
	return $string;
}
function giveCharacter($value,$d,$n)
{
	$answer=1;
	for($i=0;$i<$d;++$i)
	{
		$answer=($answer*$value)%$n;
	}
	return $answer;
}
function utf8($num)
{
    if($num<=0x7F)       return chr($num);
    if($num<=0x7FF)      return chr(($num>>6)+192).chr(($num&63)+128);
    if($num<=0xFFFF)     return chr(($num>>12)+224).chr((($num>>6)&63)+128).chr(($num&63)+128);
    if($num<=0x1FFFFF)   return chr(($num>>18)+240).chr((($num>>12)&63)+128).chr((($num>>6)&63)+128).chr(($num&63)+128);
    return '';
}

foreach($_GET as $key => $value)
{
	$$key=decrypt($value);
	echo''.$key.'-->'.$$key.'<br>';
}

?></html>