#include<stdio.h>
#include<conio.h>

void main()
{
int year;
clrscr();
scanf("%d", &year);
if((year%4==0 && year%100!=0)||(year%400==0))
printf("Year %d is a leap year!!",year);
else
printf("Not leap year!!");
getch();
}
