import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;

public class maxSequenceOfIncreasingElements {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] input = Arrays.stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        ArrayList<Integer> maxIncreasingSeq = new ArrayList<>();
        ArrayList<Integer> currSeq = new ArrayList<>();

        for (int i = 1; i < input.length; i++) {
            if (input[i] > input[i - 1]) {
                currSeq.add(input[i - 1]);
            } else {
                if (currSeq.size() > maxIncreasingSeq.size()) {
                    currSeq.add(input[i - 1]);
                    maxIncreasingSeq.clear();
                    maxIncreasingSeq.addAll(currSeq);
                    currSeq.clear();
                }
            }
        }
        if (currSeq.size() > maxIncreasingSeq.size()) {
            currSeq.add(input[input.length - 1]);
            maxIncreasingSeq.clear();
            maxIncreasingSeq.addAll(currSeq);
            currSeq.clear();
        }

        String[] result = new String[maxIncreasingSeq.size()];
        for (int i = 0; i < maxIncreasingSeq.size(); i++) {
            result[i] = Integer.toString(maxIncreasingSeq.get(i));
        }
        System.out.println(String.join(" ", result));
    }

}
