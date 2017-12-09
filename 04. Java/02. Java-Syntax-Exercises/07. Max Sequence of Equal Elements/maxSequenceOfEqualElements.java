import java.util.Arrays;
import java.util.Scanner;

public class maxSequenceOfEqualElements {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] firstArray = Arrays.stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        int maxSeq = 0;
        int maxSeqNumber = 0;

        int currSeq = 1;
        for (int i = 1; i < firstArray.length; i++) {
            if(firstArray[i] == firstArray[i - 1]){
                currSeq++;
            }else{
                if(currSeq > maxSeq){
                    maxSeq = currSeq;
                    maxSeqNumber = firstArray[i - 1];
                }
                currSeq = 1;
            }

            if(currSeq > maxSeq){
                maxSeq = currSeq;
                maxSeqNumber = firstArray[i - 1];
            }
        }
        String[] result = new String[maxSeq];
        for (int i = 0; i < maxSeq; i++) {
            result[i] = Integer.toString(maxSeqNumber);
        }
        System.out.println(String.join(" ", result));
    }
}
