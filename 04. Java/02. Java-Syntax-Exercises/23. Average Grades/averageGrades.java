import java.util.ArrayList;
import java.util.Arrays;
import java.util.Comparator;
import java.util.Scanner;

public class averageGrades {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        ArrayList<Student> students = new ArrayList<>();

        int n = Integer.parseInt(scanner.nextLine());
        for (int i = 0; i < n; i++) {
            String[] input = scanner.nextLine().split(" ");
            String name = input[0];
            double[] grades = Arrays.stream(input)
                    .skip(1)
                    .mapToDouble(Double::parseDouble)
                    .toArray();

            double averageGrade = calculateAverageGrade(grades);

            Student currStudent = new Student();
            currStudent.setName(name);
            currStudent.setGrades(grades);
            currStudent.setAverage(averageGrade);

            students.add(currStudent);
        }
        students
                .stream()
                .filter(x -> x.getAverage() >= 5.00)
                .sorted(Comparator.comparing(Student::getName)
                        .reversed()
                        .thenComparing(Student::getAverage)
                        .reversed())
                .forEach(s-> System.out.printf("%s -> %.2f\r\n", s.getName(), s.getAverage()));
        }

    private static double calculateAverageGrade(double[] grades){
        double average = 0;
        for (double grade : grades) {
            average += grade;
        }
        average /= grades.length;

        return average;
    }
}
class Student{
    private String Name;

    private double[] Grades;

    private double Average;

    public String getName() {
        return Name;
    }

    public void setName(String name) {
        Name = name;
    }

    public double[] getGrades() {
        return Grades;
    }

    public void setGrades(double[] grades) {
        Grades = grades;
    }

    public double getAverage() {
        return Average;
    }

    public void setAverage(double average) {
        Average = average;
    }

}
