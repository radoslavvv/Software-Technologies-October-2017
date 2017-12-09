import javax.xml.crypto.dsig.keyinfo.KeyValue;
import java.security.Key;
import java.util.*;
import java.util.stream.Collectors;

public class bookLibrary {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int n = Integer.parseInt(scanner.nextLine());

        ArrayList<Book> books = new ArrayList<>();
        for (int i = 0; i < n; i++) {
            String[] line = scanner.nextLine().split(" ");

            Book currBook = new Book();
            currBook.setTitle(line[0]);
            currBook.setAuthor(line[1]);
            currBook.setPublisher(line[2]);
            currBook.setRealeaseDate(line[3]);
            currBook.setISBN(line[4]);
            currBook.setPrice(Double.parseDouble(line[5]));

            books.add(currBook);
        }
        LinkedHashMap<String,Double> result = new LinkedHashMap<>();

        for (Book book: books) {
            if(!result.containsKey(book.getAuthor())){
                result.put(book.getAuthor(), 0.0);
            }
            result.put(book.getAuthor(), result.get(book.getAuthor()) + book.getPrice());
        }

        result
                .entrySet()
                .stream()
                .sorted(Comparator.comparing(Map.Entry<String,Double>::getValue)
                        .reversed()
                        .thenComparing(Map.Entry<String,Double>::getKey))
                .forEach(a-> System.out.printf("%s -> %.2f\r\n",a.getKey(),a.getValue()));
    }
}

class Book{
    private String Title;

    private String Author;

    private String Publisher;

    private String RealeaseDate;

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

    public String getRealeaseDate() {
        return RealeaseDate;
    }

    public void setRealeaseDate(String realeaseDate) {
        RealeaseDate = realeaseDate;
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
