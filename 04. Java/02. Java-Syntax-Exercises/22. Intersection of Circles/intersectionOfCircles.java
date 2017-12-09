import java.util.Arrays;
import java.util.Scanner;

public class intersectionOfCircles {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] firstLine = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();
        int firstX = firstLine[0];
        int firstY = firstLine[1];
        int firstRadius = firstLine[2];

        int[] secondLine = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();
        int secondX = secondLine[0];
        int secondY = secondLine[1];
        int secondRadius = secondLine[2];

        Point pointA = new Point();
        pointA.setX(firstX);
        pointA.setY(firstY);

        Point pointB = new Point();
        pointB.setX(secondX);
        pointB.setY(secondY);

        Circle circleA = new Circle();
        circleA.setCenter(pointA);
        circleA.setRadius(firstRadius);

        Circle circleB = new Circle();
        circleB.setCenter(pointB);
        circleB.setRadius(secondRadius);

        intersect(circleA, circleB);
    }
    private static void intersect(Circle c1, Circle c2){
        double distance = getDistance(c1.getCenter(), c2.getCenter());

        if(distance <= c1.getRadius() + c2.getRadius()){
            System.out.println("Yes");
        }else{
            System.out.println("No");
        }
    }

    private static double getDistance(Point a, Point b){
        return Math.sqrt(Math.pow(b.getX() - a.getX(), 2) + Math.pow(b.getY() - a.getY(), 2));
    }
}
class Circle{
    private Point Center;

    private double Radius;

    public Point getCenter() {
        return Center;
    }

    public void setCenter(Point center) {
        Center = center;
    }

    public double getRadius() {
        return Radius;
    }

    public void setRadius(double radius) {
        Radius = radius;
    }
}

class Point{
    private int X;
    private int Y;

    public int getX() {
        return X;
    }

    public void setX(int x) {
        X = x;
    }

    public int getY() {
        return Y;
    }

    public void setY(int y) {
        Y = y;
    }

    public Point() {
    }
}


