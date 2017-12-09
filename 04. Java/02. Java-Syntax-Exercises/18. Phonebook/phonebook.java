import java.util.LinkedHashMap;
import java.util.Scanner;

public class phonebook {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        LinkedHashMap<String, String> phonebook = new LinkedHashMap<String, String>();

        String input = scanner.nextLine();
        while(!input.equals("END")){
            String[] params = input.split(" ");
            String action = params[0];
            String name = params[1];

            if(action.equals("A")){
                String phoneNumber = params[2];
                phonebook.put(name, phoneNumber);
            }else if(action.equals("S")){
                if(!phonebook.containsKey(name)){
                    System.out.printf("Contact %s does not exist.\r\n", name);
                }else{
                    System.out.printf("%s -> %s\r\n", name, phonebook.get(name));
                }
            }
            input = scanner.nextLine();
        }

    }
}
