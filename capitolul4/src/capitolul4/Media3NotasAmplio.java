/*
 * Amplía el programa anterior para que diga la nota del boletín (insuficiente,
suficiente, bien, notable o sobresaliente)
 */
package capitolul4;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class Media3NotasAmplio {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        
        System.out.print("Introduce la primera nota: ");
        int nota1 = t.nextInt();
        System.out.print("Introduce la segunda nota: ");
        int nota2 = t.nextInt();
        System.out.print("Introduce la tercera nota: ");
        int nota3 = t.nextInt();
        
        int media = 0;
        
        if ((nota1 >= 0) && (nota1 <= 10) &&
            (nota2 >= 0) && (nota2 <= 10) &&
            (nota3 >= 0) && (nota3 <= 10)){
           media = (int)(nota1 + nota2 + nota3) / 3; 
           System.out.printf("Tu media es %d \n", media);
        } else {
            System.err.println("Has introducido alguna nota erronea!");
        }
        
        switch (media){
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
                System.out.println("Has obtenido un INSUFICIENTE");  
                break;
            case 5:
            case 6:
                System.out.println("Has obtenido un SUFICIENTE");
                break;
            case 7:
                System.out.println("Has obtenido un BIEN");
                break;
            case 8:
            case 9:
                System.out.println("Has obtenido un NOTABLE");
                break;
            case 10:
                System.out.println("Has obtenido un SOBRESALIENTE");
                break;
        }
    }
}