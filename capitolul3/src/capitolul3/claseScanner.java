package capitolul3;


import java.util.Scanner;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author costy
 */
public class claseScanner {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        
        String nombre;
        int edad;
        
        System.out.println("Cual es tu nombre:");
        nombre = t.nextLine();
        System.out.println("Que edad tienes:");
        edad = t.nextInt();
        
        System.out.println("....................................");
        System.out.println(nombre + " = " + edad);
    }
}
