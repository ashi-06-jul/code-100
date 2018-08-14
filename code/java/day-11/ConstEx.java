public class ConstEx 
{
		ConstEx(int a,int b )
		{
			System.out.println("TOTAL="+(a+b));
		}
		ConstEx()
		{
			this("Abc");
			System.out.println("default");
		}
		ConstEx(String p)
		{
			this(7,18);
			System.out.println("str="+p);
		}

}
class main 
{
	public static void main(String ar[])
	{
	new ConstEx();
	//new ConstEx(7,8);
	//new ConstEx("xyz");
	
	}
}
	
