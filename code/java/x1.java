import java.awt.*;
import java.applet.*;
public class x1 extends Applet
{
public void init()
{
Label l1 = new Label("     GOOGLE ",Label.CENTER);
l1.setBounds(130,1,150,20);
l1.setVisible(true);
setLayout(null);
Label l2 = new Label("One Account.All of Google",Label.CENTER);
l2.setBounds(120,20,180,20);
l2.setVisible(true);
setLayout(null);
Label l3 = new Label("Sign in to continue to gmail",Label.CENTER);
l3.setBounds(110,40,200,20);
l3.setVisible(true);
setLayout(null);
Label l4 = new Label("User Name");
l4.setBounds(20,60,70,20);
l4.setVisible(true);
setLayout(null);
TextField t1 = new TextField(20);
t1.setBounds(180,60,200,20);
t1.setVisible(true);
setLayout(null);
Label l5 = new Label("Password");
l5.setBounds(20,100,70,20);
l5.setVisible(true);
setLayout(null);
TextField t2 = new TextField(20);
t2.setBounds(180,100,200,20);
t2.setVisible(true);
setLayout(null);
Button b1 = new Button("Login");
b1.setBounds(310,145,70,20);
b1.setVisible(true);
setLayout(null);
Label l6 = new Label("Create Account",Label.CENTER);
l6.setBounds(120,180,180,20);
l6.setVisible(true);
setLayout(null);
Label l7 = new Label("One Google Account for everything Google",Label.CENTER);
l7.setBounds(80,200,250,20);
l7.setVisible(true);
setLayout(null);
add(l1);
add(l2);
add(l3);
add(l4);
add(t1);
add(l5);
add(t2);
add(b1);
add(l6);
add(l7);
}
}