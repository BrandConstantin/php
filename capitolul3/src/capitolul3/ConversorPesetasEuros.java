/*
Realiza un conversor de pesetas a euros. La cantidad de pesetas que se quiere
convertir debe ser introducida por teclado.
 */
package capitolul3;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class ConversorPesetasEuros {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);   
        
        //int es %d, double es %f
        
        double euros;
        double pesetas;
        
        System.out.println("Introduce la cantidad de pesetas a convertir:");
        pesetas = t.nextInt();
        
        euros = pesetas / 166;
        
        System.out.println(".......................................");
        System.out.printf("Los %f pesetas convertidas son %.2f euros", pesetas, euros);
    }
}
