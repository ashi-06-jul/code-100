public class VarEx {
	int a,b;
	static int c ;
	void check(){
		System.out.println("Method");
		System.out.println("a= "+ ++a);
		System.out.println("b= "+ ++b);
		System.out.println("c= "+ ++c);
	}
}
class Main {
	public static void main(String ar[]){
		new VarEx().check();
		new VarEx().check();
		new VarEx().check();
	}
}