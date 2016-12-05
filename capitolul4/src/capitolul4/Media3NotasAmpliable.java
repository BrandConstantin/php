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
public class Media3NotasAmpliable {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        
        System.out.print("Introduce la primera nota: ");
        int nota1 = t.nextInt();
        System.out.print("Introduce la segunda nota: ");
        int nota2 = t.nextInt();
        System.out.print("Introduce la tercera nota: ");
        int nota3 = t.nextInt();
        
        int media = 0; 
        
        if((nota1 < 0 || nota1 > 10) || (nota2 < 0 || nota2 > 10) ||
                (nota3 < 0 || nota3 > 10)){
            System.out.println("Has introducido una nota incorrecta");
        }else{
            media = (nota1 + nota2 + nota3) / 3;            
            
            if(media == 10){
                System.out.println("La media de las tres notas es " +  media);
                System.out.println("SOBRESALIENTE");
            }else if(media < 10 && media >= 9 ){
                System.out.println("La media de las tres notas es " +  media);
                System.out.println("NOTABLE");
            }else if(media < 9 && media >= 7){
                System.out.println("La media de las tres notas es " +  media);
                System.out.println("BIEN");
            }else if(media < 7 && media >= 5){
                System.out.println("La media de las tres notas es " +  media);
                System.out.println("SUFICIENTE");
            }else{
                System.out.println("La media de las tres notas es " +  media);
                System.out.println("INSUFICIENTE");
            }
        }
    }
}