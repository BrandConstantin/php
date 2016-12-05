/*
 * To change this license header, choose License Headers in Project Properties.
Escribe un programa que calcule el salario semanal de un empleado en base
a las horas trabajadas, a razón de 12 euros la hora.
 */
package capitolul3;

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
        
        int salario = horas * 12;
        System.out.println("--------------------------------------------");
        System.out.println("Tu salario semanal es de " + salario);
    }
}
