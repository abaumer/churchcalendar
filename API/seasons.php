<?php

// Date format will be "YYYY-MM-DD"
$today = date("Y-m-d");
$this_year = date("Y");
$this_christmas = date($this_year."-12-25");
$this_advent = date("Y-m-d", strtotime("last sunday -3weeks", strtotime("tomorrow", strtotime($this_christmas))));
$last_year = $this_year - 1;

if($today >= $this_advent) {
	// We're already in advent for this Calendar
	$last_year = $this_year;
	$next_year = $this_year + 2;
	$this_year = $this_year + 1;
	$advent_year = $next_year;
	$next_christmas = date($this_year."-12-25");
	$next_advent = date("Y-m-d", strtotime("last sunday -3weeks", strtotime("tomorrow", strtotime($next_christmas))));
} else {
	// We are NOT yet in Advent this Calendar year
	$last_year = $this_year - 1;
	$next_year = $this_year + 1;
	$this_year = $this_year;
	$advent_year = $this_year;
	$next_christmas = $this_christmas;
	$next_advent = $this_advent;
	$this_christmas = date($last_year."-12-25");
	$this_advent = date("Y-m-d", strtotime("last sunday -3weeks", strtotime("tomorrow", strtotime($this_christmas))));
}

// Easter Magic
function Easter($Y) {
	$C = floor($Y / 100);
	$N = $Y - (19 * floor($Y/19));
	$K = floor($C - 17)/25;
	$I = $C - floor($C/4) - floor(($C-$K)/3) + (19 * $N) + 15;
	$I = $I - 30 * floor($I/30);
	$I = $I - ( floor($I/28) * (1 - floor($I/28)) * floor(29/($I+1)) * floor((21 - $N)/11) );
	$J = $Y + (floor($Y/4)) + $I + 2 - $C + (floor($C/4));  // This one boggles me.
	$J = $J - ( 7 * floor($J/7) );
	$L = $I - $J;
	$M = 3 + floor(($L + 40)/44);
	$D = $L + 28 - ( 31 * floor($M/4) );

	return date("Y-m-d", strtotime($Y . "-" . $M . "-" . $D));
}

// Seasons
function get_seasons($name, $startend, $year)
{
  $season = "";
  $error = "oopsie daisy.";

  // We don't check for date here, just use Year Provided as base year.
	$fn_this_year = $year;
	$fn_last_year = $fn_this_year - 1;
	$fn_next_year = $fn_this_year + 1;
	$fn_next_christmas = date($fn_this_year."-12-25");
	$fn_next_advent = date("Y-m-d", strtotime("last sunday -3weeks", strtotime("tomorrow", strtotime($fn_next_christmas))));
	$fn_this_christmas = date($fn_last_year."-12-25");
	$fn_this_advent = date("Y-m-d", strtotime("last sunday -3weeks", strtotime("tomorrow", strtotime($fn_this_christmas))));

	// The Season Dates;
	$advent = date("Y-m-d", strtotime($fn_this_advent) );
	$christmas = date("Y-m-d", strtotime($fn_this_christmas) );
	$epiphany = date("Y-m-d", strtotime(date($fn_this_year."-01-06")) ); 
	$ordinary1 = date("Y-m-d", strtotime(date($fn_this_year."-01-07")) );
	$lent = date("Y-m-d", strtotime("- 44 days", strtotime(Easter($year))) );
	$easter = Easter($year);
	$pentecost = date("Y-m-d", strtotime("+ 49 days", strtotime(Easter($year))) );
	$ordinary2 = date("Y-m-d", strtotime("+ 58 days", strtotime(Easter($year))) );

	// Current Season
	$t = date("Y-m-d");
	// Test Dates
	//$t = date("Y-m-d", strtotime("july 2, 2013"));
	if($t >= $ordinary2) {
		$currentName = "Ordinary Time";
		$currentStart = $ordinary2;
		$currentEnd = date("Y-m-d", strtotime("- 1 day", strtotime(date($fn_next_advent))) );
		$currentId = "8";
	} 
	elseif($t >= $pentecost) {
		$currentName = "Pentecost";
		$currentStart = $pentecost;
		$currentEnd = date("Y-m-d", strtotime("- 1 day", strtotime(date($ordinary2))) );
		$currentId = "7";
	}
	elseif($t >= $easter) {
		$currentName = "Easter";
		$currentStart = $easter;
		$currentEnd = date("Y-m-d", strtotime("- 1 day", strtotime(date($pentecost))) );
		$currentId = "6";
	}
	elseif($t >= $lent) {
		$currentName = "Lent";
		$currentStart = $lent;
		$currentEnd = date("Y-m-d", strtotime("- 1 day", strtotime(date($easter))) );
		$currentId = "5";
	}
	elseif($t >= $ordinary1) {
		$currentName = "Ordinary Time";
		$currentStart = $ordinary1;
		$currentEnd = date("Y-m-d", strtotime("- 1 day", strtotime(date($lent))) );
		$currentId = "4";
	}
	elseif($t >= $epiphany) {
		$currentName = "Epiphany";
		$currentStart = $epiphany;
		$currentEnd = date("Y-m-d", strtotime("- 1 day", strtotime(date($ordinary1))) );
		$currentId = "3";
	}
	elseif($t >= $christmas) {
		$currentName = "Christmas";
		$currentStart = $christmas;
		$currentEnd = date("Y-m-d", strtotime("- 1 day", strtotime(date($epiphany))) );
		$currentId = "2";
	}
	elseif($t >= $advent) {
		$currentName = "Advent";
		$currentStart = $advent;
		$currentEnd = date("Y-m-d", strtotime("- 1 day", strtotime(date($christmas))) );
		$currentId = "1";
	}

  // normally this info would be pulled from a database.
  // build JSON array.
  switch ($name){
  	case "advent":
      if($startend === 0) 		{ $return = $advent; } 
      elseif($startend === 1) { $return = date("Y-m-d", strtotime("- 1 day", strtotime($christmas)) ); }
      else 										{ $return = $error; }
      break;
    case "christmas":
      if($startend === 0) 		{ $return = $christmas; } 
      elseif($startend === 1) { $return = date("Y-m-d", strtotime("- 1 days", strtotime($epiphany)) ); }
      else 										{ $return = $error; }
      break;
  	case "epiphany":
      if($startend === 0) 		{ $return = $epiphany; } 
      elseif($startend === 1) { $return = date("Y-m-d", strtotime("- 1 days", strtotime($ordinary1)) ); }
      else 										{ $return = $error; }
      break;
    case "ordinary1":
      if($startend === 0) 		{ $return = $ordinary1; } 
      elseif($startend === 1) { $return = date("Y-m-d", strtotime("- 1 days", strtotime($lent)) ); }
      else 										{ $return = $error; }
      break;
    case "lent":
      if($startend === 0) 		{ $return = $lent; } 
      elseif($startend === 1) { $return = date("Y-m-d", strtotime("- 1 days", strtotime($easter)) ); }
      else 										{ $return = $error; }
      break;
    case "easter":
      if($startend === 0) 		{ $return = $easter; } 
      elseif($startend === 1) { $return = date("Y-m-d", strtotime("- 1 days", strtotime($pentecost)) ); }
      else 										{ $return = $error; }
      break;
    case "pentecost":
      if($startend === 0) 		{ $return = $pentecost; } 
      elseif($startend === 1) { $return = date("Y-m-d", strtotime("- 1 days", strtotime($ordinary2)) ); }
      else 										{ $return = $error; }
      break;
    case "ordinary2":
      if($startend === 0) 		{ $return = $ordinary2; } 
      elseif($startend === 1) { $return = date("Y-m-d", strtotime("- 1 day", strtotime(date($fn_next_advent))) ); }
      else 										{ $return = $error; }
      break;
    case "current":
      if($startend === 0) 		{ $return = $currentStart; } 
      elseif($startend === 1) { $return = $currentEnd; }
      elseif($startend === 2) { $return = $currentName; }
      elseif($startend === 3) { $return = $currentId; }
      else 										{ $return = $error; }
      break;
  }

  return $return;
}

/* Test 
echo "<br/>today = " . $today;
echo "<br/>this_year = " . $this_year;
echo "<br/>this_christmas = " . $this_christmas;
echo "<br/>this_advent = " . $this_advent;
echo "<br/>last_year = " . $last_year;
echo "<hr/>";

echo "<br/>next_year = " . $next_year;
echo "<br/>advent_year = " . $advent_year;
echo "<br/>next_christmas = " . $next_christmas;
echo "<br/>next_advent = " . $next_advent;
echo "<hr/>";

echo "<br/>C = " . $C;
echo "<br/>N = " . $N;
echo "<br/>K = " . $K;
echo "<br/>I = " . $I;
echo "<br/>J = " . $J;
echo "<br/>L = " . $L;
echo "<br/>M = " . $M;
echo "<br/>D = " . $D;
echo "<br/>Easter = " . Easter($this_year);
echo "<br/>Last Easter = " . Easter($last_year);
echo "<br/>Next Easter = " . Easter($next_year);

echo "<hr/>";

function showseasons($this_year) {
	echo "<br/>advent starts = " . get_seasons('advent', 0, $this_year);
	echo "<br/>advent ends = " . get_seasons('advent', 1, $this_year);
	echo "<br/>christmas starts = " . get_seasons('christmas', 0, $this_year);
	echo "<br/>christmas ends = " . get_seasons('christmas', 1, $this_year);
	echo "<br/>epiphany starts = " . get_seasons('epiphany', 0, $this_year);
	echo "<br/>epiphany ends = " . get_seasons('epiphany', 1, $this_year);
	echo "<br/>ordinary1 starts = " . get_seasons('ordinary1', 0, $this_year);
	echo "<br/>ordinary1 ends = " . get_seasons('ordinary1', 1, $this_year);
	echo "<br/>lent starts = " . get_seasons('lent', 0, $this_year);
	echo "<br/>lent ends = " . get_seasons('lent', 1, $this_year);
	echo "<br/>easter starts = " . get_seasons('easter', 0, $this_year);
	echo "<br/>easter ends = " . get_seasons('easter', 1, $this_year);
	echo "<br/>pentecost starts = " . get_seasons('pentecost', 0, $this_year);
	echo "<br/>pentecost ends = " . get_seasons('pentecost', 1, $this_year);
	echo "<br/>ordinary2 starts = " . get_seasons('ordinary2', 0, $this_year);
	echo "<br/>ordinary2 ends = " . get_seasons('ordinary2', 1, $this_year);
	echo "<br/>";
	echo "<br/>current season = " . get_seasons('current', 0, $this_year);
	echo "<br/>current season = " . get_seasons('current', 1, $this_year);
	echo "<br/>current season = " . get_seasons('current', 2, $this_year);
}
showseasons($this_year);
echo "<hr/>";
showseasons($next_year);
*/
?>