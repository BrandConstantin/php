/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package capitolul3;

/**
 *
 * @author costy
 */
public class claseReadLine {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        String nombre;
        int edad;
        
        System.out.print("Dime tu nombre: ");
        nombre = System.console().readLine();
        System.out.print("Cual es tu edad:");
        edad = Integer.parseInt(System.console().readLine());
        
        System.out.println("-------------------------------------------");
        System.out.println(nombre + " = " + edad);
    }
    
}
