import java.util.Scanner;

public class integerToHexAndBinary {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int input = Integer.parseInt(scanner.nextLine());

        String inputHex = Integer.toString(input,16).toUpperCase();
        String inputBinary = Integer.toBinaryString(input).toUpperCase();

        System.out.println(inputHex);
        System.out.println(inputBinary);
    }
}
