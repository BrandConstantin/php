/*
Realiza un conversor de Mb a Kb.
 */
package capitolul3;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class ConversorMbKb {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        
        int mb;
        
        System.out.print("Introduce el tamaño en MB: ");
        mb = t.nextInt();
        
        int kb = mb * 1000;
        System.out.println("-----------------------------------");
        System.out.printf("%dMb == %dKb\n", mb, kb);
    }
}
