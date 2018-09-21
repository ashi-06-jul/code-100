public class BlockEx {
	{
		System.out.println("B1");
	}
	{
		System.out.println("B2");
	}
	static {
		System.out.println("Static Block");
	}	
	{	
		System.out.println("B3");
	}
}
class Main {
	public static void main(String ar[]){
		new BlockEx();
		new BlockEx();
		new BlockEx();
	}
}
		