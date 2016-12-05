/*
 * Escribe un programa que pinte una pirámide rellena con un carácter introdu-
cido por teclado que podrá ser una letra, un número o un símbolo como *, +,
-, $, &, etc. El programa debe permitir al usuario mediante un menú elegir si
el vértice de la pirámide está apuntando hacia arriba, hacia abajo, hacia la
izquierda o hacia la derecha.
 */
package capitolul4;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class PiramideRellena {
    public static void main(String[] args) {
        Scanner t = new Scanner (System.in);
        
        //System.out.println("Introduce el carácter a dibujar: ");
        String caracter = "@";//t.next();
        int altura = 6;
        /*
        System.out.println("Elige la dirección del vertice: ");
        System.out.println("1. Arriba");
        System.out.println("2. Abajo");
        System.out.println("3. Izquierda");
        System.out.println("4. Derecha");
        int opcion = t.nextInt();
        
        System.out.println("////////////////////////////////////////");
        
        switch(opcion){
            case 1:*/
        int espacios = altura - 1;
        int astericos = 1;
        
        for (int i = 0; i < altura; i++) {
            for (int j = 0; j < espacios; j++) {
                System.out.print(' ');
            }
            
            for (int j = 0; j < astericos; j++) {
                System.out.print('*');
            }
            
            System.out.println();
            espacios--;
            astericos += 2;
        }
           /* case 2:
            case 3:
            case 4:
            default:
        }*/
    }
}
