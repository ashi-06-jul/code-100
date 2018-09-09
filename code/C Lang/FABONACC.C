#include<stdio.h>
#include<conio.h>
void main()
{
int a=0,b=1,c,i;
clrscr();
printf("%d\n%d\n",a,b);
for(i=1;i<=20;i++)
{
c=a+b;
a=b;
b=c;
printf("%d\n",c);
}
getch();
}
