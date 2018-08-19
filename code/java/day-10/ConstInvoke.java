public class ConstInvoke{
	ConstInvoke(int n ){
		System.out.println("C1");
	}
	ConstInvoke(){
		this(4);
		System.out.println("C3");
	}
	
	
}
class Con2 extends ConstInvoke{
	Con2(){
		//super(10);
		System.out.println("C2");
	}
}
class Main {
	public static void main(String ar[]){
		new Con2();
	}
}