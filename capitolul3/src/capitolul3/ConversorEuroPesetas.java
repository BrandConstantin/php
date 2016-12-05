/*
Realiza un conversor de euros a pesetas. La cantidad de euros que se quiere
convertir debe ser introducida por teclado.
 */
package capitolul3;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class ConversorEuroPesetas {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);   
        
        //int es %d, double es %f
        
        int euros;
        int pesetas = 166;
        
        System.out.println("Introduce la cantidad de euros a convertir:");
        euros = t.nextInt();
        
        int conversor = euros * 166;
        
        System.out.println(".......................................");
        System.out.printf("Los %d euros convertidos son %d pesetas", euros, conversor);
    }
}
