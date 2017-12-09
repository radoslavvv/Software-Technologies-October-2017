import java.util.Arrays;
import java.util.Scanner;

public class urlParser {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String input = scanner.nextLine();

        String protocol = "";
        String server = "";
        String resources = "";


        boolean hasProtocol = input.split("://").length > 1;
        String[] firstSplit = input.split("://");
        String[] secondSplit = new String[100];

        if(hasProtocol){
            protocol = firstSplit[0];
            secondSplit = firstSplit[1].split("/");
        }else{
            secondSplit = firstSplit[0].split("/");
        }
        server = secondSplit[0];
        boolean hasResources = secondSplit.length > 1;

        if(hasResources){
            for (int i = 1; i < secondSplit.length; i++) {
                if(i != secondSplit.length - 1){
                    resources += secondSplit[i] + "/";
                }else{
                    resources += secondSplit[i];
                }
            }
        }


        System.out.printf("[protocol] = \"%s\"\r\n", protocol);
        System.out.printf("[server] = \"%s\"\r\n", server);
        System.out.printf("[resource] = \"%s\"\r\n", resources);
    }
}
