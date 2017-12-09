import java.util.Scanner;

public class ReverseCharacters {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] array = new String[3];

        for (int i = 0; i < 3; i++) {
            String input = scanner.nextLine();
            array[i] = input;
        }
        String result = "";
        for (int i = array.length - 1; i >= 0; i--) {
            result += array[i];
        }
        System.out.println(result);
    }
}
