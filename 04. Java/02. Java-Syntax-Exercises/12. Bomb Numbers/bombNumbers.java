import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class bombNumbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] firstArray = Arrays.stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();
        int[] secondArray = Arrays.stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        ArrayList<Integer> numbers = new ArrayList<>();
        for (int num : firstArray) {
            numbers.add(num);
        }

        ArrayList<Integer> bombs = new ArrayList<>();
        for (int num : secondArray) {
            bombs.add(num);
        }

        int bombIndex = bombs.get(0);
        int bombPower = bombs.get(1);

        int index = 0 ;
        while(index < numbers.size()){
                if(numbers.get(index).equals(bombIndex)) {
                    int leftExplosion = Math.max(index - bombPower, 0);
                    int rightExplosion = Math.min(index + bombPower + 1, numbers.size());

                    numbers.subList(leftExplosion, rightExplosion).clear();
                    index = 0;
                }
                index++;
        }
        int sum = 0;

        for (Integer number : numbers) {
            sum += number;
        }
        System.out.println(sum);
    }

}
