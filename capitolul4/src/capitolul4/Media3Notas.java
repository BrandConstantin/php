/*
 * To change this license header, choose License Headers in Project Properties.
 * Realiza un programa que calcule la media de tres notas.
 */
package capitolul4;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class Media3Notas {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        
        System.out.print("Introduce la primera nota: ");
        int nota1 = t.nextInt();
        System.out.print("Introduce la segunda nota: ");
        int nota2 = t.nextInt();
        System.out.print("Introduce la tercera nota: ");
        int nota3 = t.nextInt();
        
        double media = (nota1 + nota2 + nota3) / 3;
        
        System.out.printf("La media de las tres notas es %.2f", media);
    }
}
