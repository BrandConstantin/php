/*
Escribe un programa que sume, reste, multiplique y divida dos números
introducidos por teclado.
 */
package capitolul3;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class OperacionesMatematicas {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        
        double suma;
        double resta;
        double multiplica;
        double restar;
        
        int numUno;
        int numDos;
        
        System.out.println("Introduce dos números enteros:");
        numUno = t.nextInt();
        numDos = t.nextInt();
        
        suma = (double)(numUno + numDos);
        resta = (double)(numUno - numDos);
        multiplica = (double)(numUno * numDos);
        restar = (double)(numUno / numDos);
        
        System.out.println(".........................................");
        System.out.println("Los resultados son: ");
        System.out.print("Suma " + suma + "\nResta " + resta + 
                "\nMultiplicación " + multiplica + "\nRestar " + restar);
    }
}
