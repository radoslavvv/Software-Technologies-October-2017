import java.util.*;

public class Largest3Numbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] a = new String[]{};
        int[] numbers = Arrays
                .stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        int count = Math.min(3,numbers.length);

        Arrays.sort(numbers);
        for (int i = 0; i < count; i++) {
            System.out.println(numbers[numbers.length - 1 - i]);
        }
    }
}
