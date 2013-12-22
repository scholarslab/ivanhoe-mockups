<style type="text/css">
header, body{background-color:hsl(120,60%,70%);}
title, h1{text-align: center;}
</style>


<html>
<head>
	<title>Homework</title>
</head>
<body>
	<h1>My Homework</h1>
	<h2>Homework Week #1</h2>
	<p><?php echo 'Is dinosaur free';?></p>
</hr>
	<p><?php echo 42+3;?></p>
	<?php $address="114 Observatory" ;?>
	<p><?php echo $address;?></p>
</hr>	
	<ul>
		<?php 
		$authors = array(
		'1870' => 'Charles Dickens', 
		'1863' => 'William Thackeray', 
		'1882' => 'Anthony Trollope', 
		'1889' => 'Gerard Manley Hopkins'
		);
	foreach ($authors as $year => $author):
		?><li><?php echo "$author died in $year."?></li> <?php endforeach;?>
	</ul>
</hr>
</hr>
<h2>Homework Week #2</h2>
<p><?php 
function seconds_to_years($seconds)
{
	$conversion=(60*60*24*365.25);
	return $seconds/$conversion;
}
$a=2;
$b=4;
echo $a/$b;
?>

<hr/>
<h3>Seconds to Years</h3>
<?php
	echo seconds_to_years(60000);
	echo '<p>' . seconds_to_years(40000000000000) . '</p>';
?>

<hr/>
<h3>Days to Weeks</h3>
<?php
function days_to_weeks($days)
{
	return $days/7;

}
?>
<p><?php echo days_to_weeks(14);?></p>
<p><?php echo days_to_weeks(28);?></p>

<hr/>
</hr>

<h2>Homework Week #3</h2>
<h3>Function for Multiplication</h3>

<?php 
function multiply($x,$y)
{
	return $x*$y;
}
?>
<p><?php echo multiply(4,2);?></p>
<p><?php echo multiply(0,4);?><p>
<p><?php echo multiply(900,32);?><p>
<p><?php echo multiply(299999,23);?><p>

</hr>

<h3>Function for Division</h3>
<?php
function divide($x,$y)
{
	return $x/$y;
}
?>
<p><?php echo divide(4,2);?></p>
<p><?php echo divide(2,4);?></p>
<p><?php echo divide(0,384);?></p>
<p><?php echo divide(900,32);?></p>

</hr>

<h3>Greater-Than, Less-Than, or Equal-To</h3>
<?php
function less_than($x,$y)
{
	$result=0;
	if ($x < $y) {
		$result = $x;
		# code...
	}
	if ($y < $x) {
		$result = $y;
		# code...
	}
	if ($x == $y) {
		$result = "$x and $y are equivalent.";
		# code...
	}
	return $result;
}


?>
<p><?php echo less_than(4,2);?></p>
<p><?php echo less_than(3,5);?></p>
<p><?php echo less_than(3,3);?></p>
<p><?php echo less_than(200,1000);?></p>

</hr>

<h3>String Length</h3>
<?php
$str = 'abcdef';
echo strlen($str);

function string_length($str)
{
$string_length = strlen($str);
return $string_length;
}
?>
<p><?php echo string_length("Knightley");?></p>
<p><?php echo string_length("Stephanie");?></p>
<p><?php echo string_length("Praxis Team Yay");?></p>

</hr>

<h3>String Reversal</h3>
<p>PHP documentation example:</p>
<?php
echo strrev("Hello world!");?>

<p>My function:</p>
<?php
function string_reversal($str)
{
$string_reversed = strrev($str);
return $string_reversed;
}
?>
<p><?php echo string_reversal("Knightley Kingsley")?></p>
<p><?php echo string_reversal("Stephanie")?></p>
<p><?php echo string_reversal("Praxis Team Yay!")?></p>

<?php
echo strlen(strrev("Praxis Team Yay"));

?>

</hr>

<h3>Exploding Strings!!!!!!!</h3>
<p><img src="prettyexplosion.jpg"></p>

<p>PHP Doc's Example:</p>
<?php
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0];
echo $pieces[1];?>

<p>My exploded string of Kingsley family cats:</p>
<p>Disclaimer: No cats were harmed in the making of this code.</p>
<?php
$cats = "Daisy Mitzi Gracie Sam Frodo Knightley";
$catlist = explode(" ", $cats);
?>

<ul>
	<?php foreach ($catlist as $cat):?>
		<li><?php echo $cat; ?></li>
	<?php endforeach;?>
</ul>

</hr>

<h4>Now as a function into which you can plug any sentence--that is, any sentence of four words. : / </h4>

<?php
function explode_sentence($sentence)
{
	$word = explode(" ", $sentence);
	echo "$sentence reads as";
	?>
	<ul>
		<?php foreach ($variable as $key => $value) {
			# code...
		}?>
    <li><?php echo $word[0];?></li>
    <li><?php echo $word[1];?></li>
    <li><?php echo $word[2];?></li>
    <li><?php echo $word[3];?></li>
	</ul>
	<?php
 };
 ?>

<p><?php echo explode_sentence("The cat is black.")?></p>
<p><?php echo explode_sentence("The quick brown fox jumped over the lazy dog.");?></p>

<p>So my question now is, can I somehow program it to count the number of words in the sentence and generate that number of word slots?</p>
 

<?php
function word_count($platitude)
{
	echo "There are ";
    echo str_word_count($platitude);
	echo " words in this sentence: ";
	echo $platitude;
}
?>
<ul>
<li><?php echo word_count("What goes around comes around.")?></li>
<li><?php echo word_count("Early to bed, early to rise, makes a man healthy, wealthy, and wise.")?></li>
<li><?php echo word_count("A bird in the hand is worth two in the bush.")?></li>
</ul>



<p>So I know how to count, but how do I apply that to exploding my sentences?</p>

<img src="stuck.jpg">

</hr>











</hr>

<h3>An array based on authors exercise from last week</h3>

<ul>
<?php
$cats = array(
	'Daisy' => 'turkey and ice cream',
	'Mitzi' => 'hairball control Science Diet',
	'Sam' => 'wet canned Fancy Feast',
	'Frodo' => 'wet canned Fancy Feast',
	'Knightley' => 'Iams kitten food'
	);
foreach ($cats as $cat => $food):
    ?><li><?php echo "$cat always eats $food."?></li>
<?php endforeach;?>
</ul>

</hr>

<h3>Calculate Average</h3>








</body>
</html>