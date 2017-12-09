import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.time.DayOfWeek;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.*;

public class countWorkingDays {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String start = scanner.nextLine();
        String end = scanner.nextLine();

        DateTimeFormatter formatter_1=DateTimeFormatter.ofPattern("dd-MM-yyyy");
        LocalDate localDate_1= LocalDate.parse(start, formatter_1);
        LocalDate localDate_2= LocalDate.parse(end, formatter_1);

        ArrayList<LocalDate> holidays = new ArrayList<LocalDate>();
        holidays.add(LocalDate.parse("26-12-2016", formatter_1));
        holidays.add(LocalDate.parse("25-12-2016", formatter_1));
        holidays.add(LocalDate.parse("24-12-2016", formatter_1));
        holidays.add(LocalDate.parse("01-11-2016", formatter_1));
        holidays.add(LocalDate.parse("22-09-2016", formatter_1));
        holidays.add(LocalDate.parse("06-09-2016", formatter_1));
        holidays.add(LocalDate.parse("24-05-2016", formatter_1));
        holidays.add(LocalDate.parse("06-05-2016", formatter_1));
        holidays.add(LocalDate.parse("01-05-2016", formatter_1));
        holidays.add(LocalDate.parse("03-03-2016", formatter_1));
        holidays.add(LocalDate.parse("01-01-2016", formatter_1));

        int count = 0;

        for (LocalDate date = localDate_1; date.isBefore(localDate_2.plusDays(1)); date = date.plusDays(1))
        {
            boolean isHoliday = false;

            if(date.getDayOfWeek().equals(DayOfWeek.SUNDAY) || date.getDayOfWeek().equals(DayOfWeek.SATURDAY)){
                isHoliday = true;
            }else{
                for (LocalDate holiday : holidays) {
                    int currHolidayMonth = holiday.getMonthValue();
                    int currHolidayDay = holiday.getDayOfMonth();

                    int currDateMonth = date.getMonthValue();
                    int currDateDay = date.getDayOfMonth();

                    boolean day = (currDateDay == currHolidayDay);
                    boolean month = (currDateMonth == currHolidayMonth);

                    if (day && month) {
                        isHoliday = true;
                        break;
                    }
                }
            }
            if(!isHoliday){
                count++;
            }
        }
        System.out.println(count);
    }
}
