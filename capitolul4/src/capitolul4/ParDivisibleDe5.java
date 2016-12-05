/*
 * Realiza un programa que diga si un número introducido por teclado es par y/o
divisible entre 5.
 */
package capitolul4;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class ParDivisibleDe5 {
    public static void main(String[] args) {
        Scanner t = new Scanner (System.in);
        
        System.out.println("Introduce un número");
        long num = t.nextLong();
        System.out.println("---------------------------------");
        
        if(num % 5 == 0){
            System.out.println("Número divisible con 5!");
            
            if(num % 2 == 0){
                System.out.println("Y es número par!");
            }else{
                System.out.println("Y es úmero impar!");
            }
        }else{
            System.out.println("Número no divisible con 5!");
            
            if(num % 2 == 0){
                System.out.println("Y es número par!");
            }else{
                System.out.println("Y es número impar!");
            }
        }
    }
}
