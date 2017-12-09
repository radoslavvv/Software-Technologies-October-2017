import java.util.Scanner;

public class ThreeIntegersSum {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int firstNumber = scanner.nextInt();
        int secondNumber = scanner.nextInt();
        int thirdNumber = scanner.nextInt();

        if(firstNumber + secondNumber == thirdNumber){
            System.out.printf("%d + %d = %d", Math.min(firstNumber,secondNumber), Math.max(firstNumber,secondNumber), thirdNumber);
        }else if(firstNumber + thirdNumber == secondNumber){
            System.out.printf("%d + %d = %d", Math.min(firstNumber,thirdNumber), Math.max(firstNumber,thirdNumber), secondNumber);
        }else if(secondNumber + thirdNumber == firstNumber){
            System.out.printf("%d + %d = %d", Math.min(secondNumber,thirdNumber), Math.max(secondNumber,thirdNumber), firstNumber);
        }else{
            System.out.println("No");
        }
    }
}
