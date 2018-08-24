public interface Inter{
	void m1();
	int q=4+28;
}
class Int implements Inter {
	public void m1(){
			System.out.println("First");
			System.out.println(q+q);
	}
}
class Main{
	public static void main(String ar[]){
		Int i=new Int();
		i.m1();
		Intt j= new Intt();
		j.m2();
		j.m3();
		j.m4();
	}
}
interface I2{
	void m2();
}
interface I3{
	void m3();
}
interface I4 extends I2,I3{
	void m4();
}
class Intt extends Int implements Inter,I4{
	public void m2(){
		System.out.println("Second");
	}
	public void m3(){
		System.out.println("Third");
	}
	public void m4(){
		System.out.println("Fourth");
	}
}