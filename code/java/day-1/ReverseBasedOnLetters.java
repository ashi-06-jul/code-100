import java.util.Scanner;

public class ReverseBasedOnLetters {

public static void main(String[] args) {

Scanner sc = new Scanner(System.in);

System.out.println("Enter the string");

String input1 = sc.nextLine();

String [] chars = input1.split("");

for(int i = chars.length-1 ; i>=0 ; i--)

{

System.out.print(chars[i]);

}}}