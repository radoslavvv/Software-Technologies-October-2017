import java.util.Scanner;

public class fitStringIn20Chars {
    public static void main(String[] args) {


        Scanner scanner = new Scanner(System.in);


        String input = scanner.nextLine();

        if(input.length() < 20){
            System.out.print(input);
            for (int i = 0; i < 20 - input.length(); i++) {
                System.out.print('*');
            }
        }else if(input.length() > 20){
            for (int i = 0; i < 20; i++) {
                System.out.print(input.charAt(i));
            }
        }
    }
}
