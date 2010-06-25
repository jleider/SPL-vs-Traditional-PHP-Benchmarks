#!/bin/bash
# Called like so where 20 is the number of executions to perform:
# ./SPLTests.sh 20

STDTests=`ls STD* |sort -n`

for STDFile in $STDTests
do 
	SPLFile="SPL${STDFile:3}"
	
	time=`php-cgi -q -T $1 $STDFile 2>&1 | tail -n 1 | cut -d " " -f 3`;
       	STDavg=`echo "scale=6; $time / $1" | bc`;
        echo "$STDFile $STDavg";

	time=`php-cgi -q -T $1 $SPLFile 2>&1 | tail -n 1 | cut -d " " -f 3`;
	SPLavg=`echo "scale=6; $time / $1" | bc`;
        echo "$SPLFile $SPLavg";

	ratio=`echo "scale=6; $STDavg / $SPLavg" | bc`;
	echo "Ratio of ${SPLFile/.php/} : ${STDFile/.php/} is 1 : $ratio";
	echo
done
