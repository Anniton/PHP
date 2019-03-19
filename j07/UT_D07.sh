#!/bin/bash
# How to use : sh UT_D07.sh && diff D07.log D07.corr && rm D07.log
LOG=D07.log
CORR=D07.out
TESTS=(
	'ex00 test.php'
	'ex01 test1.php'
	'ex01 test2.php'
	'ex02 test.php'
	'ex03 test1.php'
	'ex03 test2.php'
	'ex04 test.php'
	'ex05 test1.php'
	'ex05 test2.php'
	'ex06 test1.php'
	'ex06 test2.php'
	)
ADDON=(
	'ex01 Euron.class.php'
	)
RSRCDIR='j07'

UT_runner (){
	cd $1 && echo "" && php -f $2
	cd ..
}
UT_cleaner (){
	cd $1 && echo "Removing $2" && rm $2
	cd ..
}
UT_setup (){
	dirname=$(echo $i | cut -d ' ' -f 1)
	filename=$(echo $i | cut -d ' ' -f 2)
	file=$(echo ./$dirname/$filename)
	if [ ! -f $file ]; then
    cp ./$RSRCDIR/$dirname/$filename ./$dirname
	fi
}

UT_set (){
	echo "Running : $0"
	if [ -f $LOG ]; then
    	rm $LOG
	fi
	for i in "${TESTS[@]}"
	do
		UT_setup $i
	done
	for i in "${ADDON[@]}"
	do
		UT_setup $i
	done
}
UT_make (){
	for i in "${TESTS[@]}"
	do
   filename=$(echo $i | cut -d ' ' -f 2)
   if [ "$filename" == "test2.php" ]
   then
		UT_runner $i | cut -d ':' -f 1 | grep Fatal --colour >>$LOG
	else
		UT_runner $i >>$LOG
	fi
	done
}
UT_clean (){
	for i in "${TESTS[@]}"
	do
   		UT_cleaner $i >>$LOG
	done
	for i in "${ADDON[@]}"
	do
		UT_cleaner $i >>$LOG
	done
}
UT_set
UT_make
UT_clean