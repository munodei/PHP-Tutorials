<?php

declare(strict_types=1);
error_reporting(1);

#Start Displaying Time in Unix TimeStamp Example

$currentTime = time();

echo $currentTime;

echo "<br />";

#End Displaying Time in Unix TimeStamp Example

#Start Adding Time in Unix TimeStamp Example

$time_to_be_added_in_secs = 4 * 24 * 60 * 60; // 4 days

$currentTime += $time_to_be_added_in_secs;

// displays time in the future in seconds
echo currentTime;

echo "<br />";


#End Adding Time in Unix TimeStamp Example

#Start Substracting Time in Unix TimeStamp Examples

$time_to_be_removed_in_secs = 5 * 24 * 60 * 60; // 5 days

$currentTime -= $time_to_be_added_in_secs;

// displays time in the past in seconds
echo currentTime;

echo "<br />";

#End Substracting Time in Unix TimeStamp Examples

#Start Setting Unix TimeStamp into a Readable Format Example


// displays time in a readable format to your preference
echo date('d M Y h:i:s',currentTime);

echo "<br />";

#End Setting Unix TimeStamp into a Readable Format Example

#Start Setting Unix TimeStamp into a Readable Format Example

// sets timezone
date_default_timezone_set('UTC');

// displays time in a readable format to your preference
echo date('d M Y h:i:s',currentTime);

echo "<br />";

#End Setting Unix TimeStamp into a Readable Format Example