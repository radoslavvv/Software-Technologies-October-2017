import java.util.ArrayList;
import java.util.Scanner;
import java.util.TreeMap;

public class sumsByTown {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int n = Integer.parseInt(scanner.nextLine());

        TreeMap<String, Double> sumsByTown = new TreeMap<>();
        for (int i = 0; i < n; i++) {
            String currentLine = scanner.nextLine();
            String[] params = currentLine.split("\\|");
            String town = params[0].trim();
            double income = Double.parseDouble(params[1].trim());

            if(!sumsByTown.containsKey(town)){
                sumsByTown.put(town, 0.0);
            }
            sumsByTown.put(town, sumsByTown.get(town) + income);
        }

        for (String s : sumsByTown.keySet()) {
            System.out.println(s + " -> " + sumsByTown.get(s));
        }
    }
}
