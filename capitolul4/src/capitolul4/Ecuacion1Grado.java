/*
 * To change this license header, choose License Headers in Project Properties.
 * Realiza un programa que resuelva una ecuación de primer grado (del tipo ax +
b = 0).
 */
package capitolul4;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class Ecuacion1Grado {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
       
        System.out.println("Dime el x:");
        int x = t.nextInt();
        System.out.println("Dime el y:");
        int y = t.nextInt();
        
        double resultado = (double)(0 - y) / x;
        System.out.printf("El resultado de la formula \"ax + b = 0\" es %.2f\n", resultado);
    }
}
