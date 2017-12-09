import java.util.LinkedHashMap;
import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class phoneBookUpgrade {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        TreeMap<String, String> phonebook = new TreeMap<String, String>();

        String input = scanner.nextLine();
        while(!input.equals("END")){
            String[] params = input.split(" ");
            if(params.length == 1 ){
                for(Map.Entry<String, String> entry : phonebook.entrySet()) {
                    String key = entry.getKey();
                    String value = entry.getValue();

                    System.out.println(key + " -> " + value);
                }
            }else{

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
            }
            input = scanner.nextLine();
        }

    }
}
