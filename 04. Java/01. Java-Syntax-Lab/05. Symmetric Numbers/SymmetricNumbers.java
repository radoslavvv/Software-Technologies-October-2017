import java.util.Scanner;

public class symmetricNumbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int n = Integer.parseInt(scanner.nextLine());

        for (int i = 1; i <= n; i++) {
            String currentNumber = Integer.toString(i);
            String currentNumberReversed = new StringBuilder(currentNumber).reverse().toString();
            if(currentNumber.equals(currentNumberReversed)){
                System.out.println(currentNumber);
            }
        }
    }
}
