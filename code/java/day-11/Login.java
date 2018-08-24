package pack;

import java.awt.Color;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import javax.swing.JButton;
import javax.swing.JDialog;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPasswordField;
import javax.swing.JTextField;



public class Login extends JDialog implements ActionListener
{
	private JTextField u;
	private JPasswordField p;
	private JButton submit;

	public Login() 
	{
		getContentPane().setBackground(new Color(127, 255, 212));
		setResizable(false);
		setTitle("My Login Page");
		getContentPane().setLayout(null);
		
		JLabel lblUsername = new JLabel("Username :");
		lblUsername.setFont(new Font("Tahoma", Font.PLAIN, 16));
		lblUsername.setBounds(22, 76, 118, 35);
		getContentPane().add(lblUsername);
		
		JLabel lblNewLabel = new JLabel("Password :");
		lblNewLabel.setFont(new Font("Tahoma", Font.PLAIN, 16));
		lblNewLabel.setBounds(22, 126, 86, 25);
		getContentPane().add(lblNewLabel);
		
		u = new JTextField();
		u.setBounds(128, 85, 181, 26);
		getContentPane().add(u);
		u.setColumns(10);
		
		p = new JPasswordField();
		p.setBounds(128, 122, 181, 25);
		getContentPane().add(p);
		
		submit = new JButton("Login");
		submit.addActionListener(this);
		submit.setBackground(Color.CYAN);
		submit.setMnemonic('l');
		submit.setFont(new Font("Tahoma", Font.BOLD, 16));
		submit.setBounds(135, 192, 101, 35);
		getContentPane().add(submit);
		setSize(400,300);
		getRootPane().setDefaultButton(submit); //for enter
		setLocationRelativeTo(null);// center of the screen
		
		setVisible(true);
		
	}

	public static void main(String[] args) 
	{
		new Login();

	}

	@Override
	public void actionPerformed(ActionEvent e) {
		if(e.getSource()==submit){
			String user=u.getText();
			String pass=new String (p.getPassword());
			String st="select *from login where username=? and password=?";
			Connection c=MyConnection.connect();
			try {
				PreparedStatement ps=c.prepareStatement(st);
				ps.setString(1, user);
				ps.setString(2, pass);
				ResultSet rs=ps.executeQuery();
				if(rs.next()){
					new MainPage();
					dispose();
				}
				else {
					JOptionPane.showMessageDialog(null, "Invalid");
					p.setText("");
					u.setText("");
					u.requestFocusInWindow();
				}
			}
			catch(SQLException se) {
				se.printStackTrace();
			}
		}
		
	}
}
