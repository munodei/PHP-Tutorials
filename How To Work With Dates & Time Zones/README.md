# How To Work With Dates & Time Zones 


1. The time function prints the unix timestamp which is time seconds

2. Adding seconds to a unix timestamp will create a future time in seconds

3. Subtracting the unix timestamp in seconds will create a past/previous time in seconds

4. Parsing the time in seconds into the date function will format time into a readable string format

5.  Timezone used by unix timestamp is what is set in the php.ini file ,but altenatively you can configure it in your script using the date_default_timezone_set function.

6. mktime function allows you to create a unix timestamp based on the arguments provided

7. strtotime convert dates in string formst to time in a unix timestamp

8. parse_date function returns an array with specific details of a date

9. parse_date_format allows you to do the same thing ,but a datetime format has to be provided in return the array values are in the provided format

