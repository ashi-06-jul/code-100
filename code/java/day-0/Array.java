public class Array
{
	public static void main(String ar[])
	{
		int m[]={2,7,10,9,1,3};
		int sum=0;

		for (int i=0;i<m.length;i++)
		{
			System.out.println(m[i]);
			sum+=m[i];
		}
		System.out.println("Total= "+sum);
	}
}
