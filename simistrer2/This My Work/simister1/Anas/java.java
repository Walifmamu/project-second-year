import java.util.Scanner;

public class java {
    public static void main(String[] args) {
        int number = (int)(Math.random() * 100 + 1);
        Scanner input = new Scanner(System.in);
        System.out.println("Guess a number between 1 and 100:");
        int guess = input.nextInt();
        while (guess != number) {
            if (guess < number) {
                System.out.println("Too low. Guess again:");
            } else {
                System.out.println("Too high. Guess again:");
            }
            guess = input.nextInt();
        }
        System.out.println("You guessed it! The number was " + number);
    }
}