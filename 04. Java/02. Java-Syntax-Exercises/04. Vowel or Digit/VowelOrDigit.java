import java.lang.reflect.Array;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;

public class VowelOrDigit {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        ArrayList<String> digits = new ArrayList<>(Arrays.asList("0","1","2","3","4","5","6","7","8","9"));
        ArrayList<String> vowels = new ArrayList<>(Arrays.asList("a", "o", "e", "i", "u", "y"));

        if(vowels.contains(input)) {
            System.out.println("vowel");
        } else if(digits.contains(input)){
            System.out.println("digit");
        } else{
            System.out.println("other");
        }
    }
}
