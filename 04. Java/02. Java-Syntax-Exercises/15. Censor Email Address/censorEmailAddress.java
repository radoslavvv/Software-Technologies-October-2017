import java.util.Scanner;

public class censorEmailAddress {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String email = scanner.nextLine();
        String[] emailParams = email.split("@");

        String input = scanner.nextLine();

        String censoredPart = "";
        for (int i = 0; i < emailParams[0].length(); i++) {
            censoredPart += "*";
        }

        System.out.println(input.replace(email,String.format("%s@%s",censoredPart, emailParams[1])));
    }
}

