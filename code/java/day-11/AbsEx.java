public abstract class AbsEx{
	abstract void show1();
	abstract void show2();
	abstract void show4();
	void show3(){
		System.out.println("Third Method");
	}
}
abstract class Abs2 extends AbsEx{
	void show1(){
		System.out.println("First Method");
	}
	void show2(){
		System.out.println("Second Method");
	}
}
class Main{
	public static void main(String ar[]){
		Abs3 a=new Abs3();
		a.show3();
		a.show1();
		a.show4();
		a.show2();
		
	}
}
class Abs3 extends Abs2{
	void show4(){
		System.out.println("Fourth Method");
	}
}