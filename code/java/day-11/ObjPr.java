public class ObjPr {
	public String toString() {
		
		return "Class Name";
	}
}
class Main{
	public static void main(String ar[]){
		ObjPr a=new ObjPr();
		ObjPr b=new ObjPr();
		System.out.println(a);
		System.out.println(b);
		System.out.println(a.hashCode());
		System.out.println(b.hashCode());
	}
}