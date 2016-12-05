/*
 * Vamos a ampliar uno de los ejercicios de la relación anterior para considerar
las horas extras. Escribe un programa que calcule el salario semanal de un
trabajador teniendo en cuenta que las horas ordinarias (40 primeras horas de
trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se pagan a 16
euros la hora.
 */
package capitolul4;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class SalarioSemanal {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        
        int horas;
        
        System.out.print("Cuantas horas tienes trabajadas? ");
        horas = t.nextInt();
        
        if(horas <= 40){
            int salario = horas * 12;
            System.out.println("--------------------------------------------");
            System.out.println("Tu salario semanal es de " + salario);
        }else{
            int salario = (40 * 12) + ((horas - 40) * 16);
            System.out.println("--------------------------------------------");
            System.out.println("Tu salario semanal es de " + salario);            
        }
    }
}
