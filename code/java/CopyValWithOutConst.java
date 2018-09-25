public class CopyValWithOutConst
{
    int id;
    String name;
    CopyValWithOutConst(int i,String n)
    {
        id=i;
        name=n;
    }
    CopyValWithOutConst(){}
    void display()
    {
        System.out.println(id+" "+name);

    }
    public static void main(String args[])
    {
        CopyValWithOutConst s1=new CopyValWithOutConst(1000,"ashi");
        CopyValWithOutConst s2=new CopyValWithOutConst();
        s1.id=s2.id;
        s2.name=s2.name;
        s1.display();
        s2.display();
    }
}