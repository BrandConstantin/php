/*
Realiza un programa que calcule la nota que hace falta sacar en el segundo
examen de la asignatura Programación para obtener la media deseada. Hay
que tener en cuenta que la nota del primer examen cuenta el 40% y la del
segundo examen un 60%.
 */
package capitolul3;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class NotaExamen {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        
        int notaExam1;
        double media;
        
        System.out.print("Que nota sacaste en el primer examen? ");
        notaExam1 = t.nextInt();
        System.out.print("Que media quieres sacar en programación: ");
        media = t.nextDouble();
        System.out.println("\n..........................................");
        
        double notaExam2 = (media - (((notaExam1 * 0.4)) / 2) * 0.6);
        
        System.out.println("Para sacar una media de " + media + " hace falta sacar "
                + "una nota de " + notaExam2 + " en el segundo examen");
    }
}
