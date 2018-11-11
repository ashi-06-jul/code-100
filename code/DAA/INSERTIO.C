#include<stdio.h>
#include<conio.h>

void main()
 {
int a[100],i,n,j,temp;
clrscr();
 
printf("Enter the value of n");
scanf("%d",&n);
printf("Enter the elements of array");
for(i=0;i < n;i++)
{
scanf("%d",&a[i]);
}
for(i=1;i<=n-1;i++)
{
j=i;
while(j>0 && a[j-1] > a[j])
{
temp=a[j];
a[j]=a[j-1];
a[j-1]=temp;
j--;
}
}
for(i=0;i<=n-1;i++)
printf("%d\t",a[i]);
getch();
 
}

