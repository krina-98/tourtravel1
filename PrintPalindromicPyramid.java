import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Enter the number of rows for the pyramid: ");
        int n = scanner.nextInt();
        printPalindromicPyramid(n);
    }

    public static void printPalindromicPyramid(int n) {
        for (int i = 1; i <= n; i++) {
            // Printing spaces
            for (int j = 0; j < n - i; j++) {
                System.out.print(" ");
            }
            // Printing numbers in ascending order
            for (int j = 1; j <= i; j++) {
                System.out.print(j);
            }
            // Printing numbers in descending order
            for (int j = i - 1; j >= 1; j--) {
                System.out.print(j);
            }
            System.out.println();
        }
    }
}
