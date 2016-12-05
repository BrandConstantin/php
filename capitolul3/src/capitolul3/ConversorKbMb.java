/*
Realiza un conversor de Kb a Mb.
 */
package capitolul3;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class ConversorKbMb {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        
        int kb;
        
        System.out.print("Introduce el tamaño en KB: ");
        kb = t.nextInt();
        
        int mb = kb / 1000;
        System.out.println("-----------------------------------");
        System.out.printf("%d Kb == %d Mb\n", kb, mb);
    }
}
