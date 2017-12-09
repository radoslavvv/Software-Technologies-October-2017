import java.lang.reflect.Array;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class equalSums {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] inputArray = Arrays.stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        List<Integer> inputList = Arrays.stream(inputArray).boxed().collect(Collectors.toList());

        boolean foundIndex = false;

        if(inputList.size() <= 1){
            System.out.println(0);
        }else{
            for (int i = 0; i < inputList.size(); i++) {
                int leftSum = Arrays.stream(inputArray).limit(i).sum();
                int rightSum = Arrays.stream(inputArray).skip(i + 1).sum();

                if(i == 0){
                    leftSum = 0;
                }else if(i == inputList.size() - 1){
                    rightSum = 0;
                }

                if(leftSum == rightSum){
                    foundIndex = true;

                    System.out.println(i);
                }
            }
            if(!foundIndex){
                System.out.println("no");
            }
        }

    }
}
