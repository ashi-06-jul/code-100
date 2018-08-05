echo  "enter a no"
read num
rev=0
while [ $num -gt 0 ]
do
r=`expr $num % 10`
num=`expr $num / 10` 
rev=`expr $rev \* 10 + $r`
done
echo  "the value is" $rev
