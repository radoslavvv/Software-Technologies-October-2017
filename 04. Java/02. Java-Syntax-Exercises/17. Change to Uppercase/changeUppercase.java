import jdk.nashorn.internal.runtime.regexp.joni.Regex;

import java.util.Scanner;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class changeUppercase {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String input = scanner.nextLine();

        Pattern pattern = Pattern.compile("<upcase>(.+?)<\\/upcase>");
        Matcher matcher = pattern.matcher(input);

        while(matcher.find()){
            String text = matcher.group(1);
            input = input.replace(String.format("<upcase>%s</upcase>", text),text.toUpperCase());
        }
        System.out.println(input);

    }
}
