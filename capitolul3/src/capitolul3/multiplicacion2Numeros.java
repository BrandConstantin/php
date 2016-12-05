/*
Realiza un programa que pida dos números y que luego muestre el resultado
de su multiplicación.or.
 */
package capitolul3;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class multiplicacion2Numeros {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        
        double nota1;
        double nota2;
        
        System.out.println("Introduce las 2 notas obtenidas en los examenes de java");
        System.out.println("(las notas deben ser separadas por espacio o pulsando enter)");
        System.out.println("............................................");
        nota1 = t.nextDouble();
        nota2 = t.nextDouble();
        
        double media = (nota1 + nota2) / 2;
        System.out.println("............................................");
        System.out.println("Tu media de Java es:" + media);
    }
}
