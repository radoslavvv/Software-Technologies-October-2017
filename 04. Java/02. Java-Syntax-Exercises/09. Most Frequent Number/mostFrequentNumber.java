import sun.reflect.generics.tree.Tree;

import javax.xml.crypto.dsig.keyinfo.KeyValue;
import java.util.*;

public class mostFrequentNumber {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] inputArray = Arrays.stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        LinkedHashMap <Integer, Integer> map = new LinkedHashMap <>();

        for (int key : inputArray) {
            if (!map.containsKey(key)) {
                map.put(key, 0);
            }
            map.put(key, map.get(key) + 1);
        }
        int maxValue = Collections.max(map.values());

        int result = 0;
        for (Map.Entry<Integer, Integer> keyValuePair : map.entrySet()) {
            if(keyValuePair.getValue() == maxValue){
                 result = keyValuePair.getKey();
                 break;
            }
        }

        System.out.println(result);
    }
}
