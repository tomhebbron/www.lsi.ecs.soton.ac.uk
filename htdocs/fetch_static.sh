#!/bin/bash

if [ "$1" != "clean" ] && [ "$1" != "update" ]
then
	echo Use: $0 clean to remove static html files, or $0 update to refresh them
else

	for i in $(find . -name "index.php"); 
	do
		IN=$(dirname $i)
		OUT=$(dirname $i)/$(basename $i .php).html
	
		#clean it
		if [ -f "$OUT" ]
		then
			rm $OUT
		fi
		
		if [ "$1" != "clean" ]
		then
			#replace it
			curl -L http://www.lsi.ecs.soton.ac.uk/$IN/ -o $OUT
		fi
	done
fi