import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.*;
import javax.xml.crypto.dsig.keyinfo.KeyValue;
import java.security.Key;
import java.util.*;
import java.util.stream.Collectors;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;

public class bookLibraryModification {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        DateTimeFormatter formatter_1=DateTimeFormatter.ofPattern("dd.MM.yyyy");

        int n = Integer.parseInt(scanner.nextLine());

        ArrayList<BetterBook> books = new ArrayList<>();
        for (int i = 0; i < n; i++) {
            String[] line = scanner
                    .nextLine()
                    .split(" ");

            BetterBook currBook = new BetterBook();
            currBook.setTitle(line[0]);
            currBook.setAuthor(line[1]);
            currBook.setPublisher(line[2]);
            currBook.setReleaseDate(LocalDate.parse(line[3], formatter_1));
            currBook.setISBN(line[4]);
            currBook.setPrice(Double.parseDouble(line[5]));

            books.add(currBook);
        }
        LinkedHashMap<String, LocalDate> result = new LinkedHashMap<>();

        for (BetterBook book : books) {
            result.put(book.getTitle(), book.getReleaseDate());
        }

        LocalDate finalDate = LocalDate.parse(scanner.nextLine(), formatter_1);

        result
                .entrySet()
                .stream()
                .filter(d->d.getValue().isAfter(finalDate))
                .sorted(Comparator.comparing(Map.Entry<String, LocalDate>::getValue)
                        .thenComparing(Map.Entry<String, LocalDate>::getKey))
                .forEach(a -> System.out.printf("%s -> %s.%02d.%s\r\n", a.getKey(), a.getValue().getDayOfMonth(),a.getValue().getMonthValue(), a.getValue().getYear()));
    }
}
class BetterBook {
    private String Title;

    private String Author;

    private String Publisher;

    private LocalDate ReleaseDate;

    private String ISBN;

    private Double Price;

    public String getTitle() {
        return Title;
    }

    public void setTitle(String title) {
        Title = title;
    }

    public String getAuthor() {
        return Author;
    }

    public void setAuthor(String author) {
        Author = author;
    }

    public String getPublisher() {
        return Publisher;
    }

    public void setPublisher(String publisher) {
        Publisher = publisher;
    }

    public LocalDate getReleaseDate() {
        return ReleaseDate;
    }

    public void setReleaseDate(LocalDate releaseDate) {
        ReleaseDate = releaseDate;
    }

    public String getISBN() {
                return ISBN;
            }

            public void setISBN(String ISBN) {
                this.ISBN = ISBN;
            }

            public Double getPrice() {
                return Price;
            }

            public void setPrice(Double price) {
                Price = price;
            }
}
