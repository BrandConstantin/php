package capitolul3;

import java.util.Scanner;

/*
Escribe un programa que calcule el volumen de un cono según la fórmula V =
1
2
3 πr h
 */

/**
 *
 * @author costy
 */
public class VolumenCono {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        
        double pi = 3.14;
        int radio;
        int altura;
        
        System.out.print("Introduce el radio: ");
        radio = t.nextInt();
        System.out.print("Introduce la altura: ");
        altura = t.nextInt();
        
        double volumen = (pi * (radio * radio) * (altura)) / 3;
        System.out.println(".......................................");
        System.out.printf("El volumen del cono con radio %d y altura %d es de %.2f centimetros cubicos\n"
                , radio, altura, volumen);
    }
}
