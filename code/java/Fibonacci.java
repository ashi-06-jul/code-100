public class Fibonacci
{
    public static void main(String args[])
    {
        int i=0,j=1,f=0,temp=0,k;
        System.out.println(i+" "+j);
        for(k=2;k<20;k++)
        {
        f=i+j;
        System.out.println(f);
        temp=j;
        j=f;
        i=temp;
        }
    }
}