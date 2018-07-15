import java.util.Scanner;

public class ReverseBasedOnWords
 {

public static void main(String[] args)
 {

Scanner sc = new Scanner(System.in);

System.out.println("Enter the line");

String input = sc.nextLine();

String[] token = input.split(" ");

for(int i = token.length-1 ; i>=0 ; i--)

{

System.out.print(token[i]+" ");

}}}