import java.util.ArrayList;
import java.util.Random;
import java.util.Scanner;

public class advertisementMessage {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int messagesCount = Integer.parseInt(scanner.nextLine());

        ArrayList<String> phrases = new ArrayList<String>();
        phrases.add("Excellent product.");
        phrases.add("Such a great product.");
        phrases.add("I always use that product.");
        phrases.add("Best product of its category.");
        phrases.add("Exceptional product.");
        phrases.add("I can't live without this product.");


        ArrayList<String> events = new ArrayList<String>();
        events.add("Now I feel good.");
        events.add("I have succeeded with this product.");
        events.add("Makes miracles. I am happy of the results!");
        events.add("I cannot believe but now I feel awesome.");
        events.add("Try it yourself, I am very satisfied.");
        events.add("I feel great!");

        ArrayList<String> authors = new ArrayList<String>();
        authors.add("Diana");
        authors.add("Petya");
        authors.add("Stella");
        authors.add("Elena");
        authors.add("Katya");
        authors.add("Annie");

        ArrayList<String> cities = new ArrayList<String>();
        cities.add("Sofia");
        cities.add("Burgas");
        cities.add("Plovdiv");
        cities.add("Varna");
        cities.add("Ruse");


        for (int i = 0; i < messagesCount; i++) {
            Random random = new Random();

            String phrase = phrases.get(random.nextInt(phrases.size() - 1));
            String event = events.get(random.nextInt(events.size() - 1));
            String author = authors.get(random.nextInt(authors.size() - 1));
            String city = cities.get(random.nextInt(cities.size() - 1));



            String result = String.format("%s %s %s - %s", phrase, event, author,city);

            System.out.println(result);
        }
    }
}
