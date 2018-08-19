import java.util.*;
class Abc{}
public class GenericEx {
	public static void main(String ar[]){
		ArrayList<String> list1=new ArrayList<String>();
		list1.add("Abc");
		list1.add("AAA");
		list1.add(new String("AAA"));
		list1.add(new String("cbc"));
		System.out.println(list1);
		
		ArrayList<Abc> list2=new ArrayList<Abc>();
		list2.add(new Abc());
		list2.add(new Abc());
		list2.add(new Abc());
		list2.add(new Abc());
		list2.add(new Abc());
		System.out.println(list2);
		
		ArrayList<Integer> list3=new ArrayList<Integer>();
		list3.add(20);
		list3.add(11);
		list3.add(9);
		list3.add(25);
		list3.add(21);
		System.out.println(list3);
		
	}
}