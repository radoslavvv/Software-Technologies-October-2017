import java.util.Scanner;

public class SumNIntegers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int numbersCount = Integer.parseInt(scanner.nextLine());

        int sum = 0;
        for (int i = 0; i < numbersCount; i++) {
            sum += Integer.parseInt(scanner.nextLine());
        }
        System.out.printf("Sum = %d",sum);
    }
}
