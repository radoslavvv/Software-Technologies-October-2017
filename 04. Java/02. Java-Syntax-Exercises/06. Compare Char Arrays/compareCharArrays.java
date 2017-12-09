import java.util.Arrays;
import java.util.Scanner;

public class compareCharArrays {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] firstArray = scanner.nextLine().split(" ");
        String[] secondArray = scanner.nextLine().split(" ");

        boolean areDifferent = false;

        for (int i = 0; i < firstArray.length ; i++) {
            if(i == secondArray.length){
                break;
            }

            char firstChar = firstArray[i].charAt(0);
            char secondChar = secondArray[i].charAt(0);

            if(firstChar < secondChar){
                System.out.println(String.join("",firstArray));
                System.out.println(String.join("",secondArray));

                areDifferent = true;
                break;
            }else if(secondChar < firstChar){
                System.out.println(String.join("",secondArray));
                System.out.println(String.join("",firstArray));

                areDifferent = true;
                break;
            }
        }
        if(!areDifferent){
            if(firstArray.length > secondArray.length){
                System.out.println(String.join("",secondArray));
                System.out.println(String.join("",firstArray));
            }else{
                System.out.println(String.join("",firstArray));
                System.out.println(String.join("",secondArray));
            }
        }
    }
}
