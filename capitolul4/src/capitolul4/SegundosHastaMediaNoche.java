/*
 * Escribe un programa que dada una hora determinada (horas y minutos),
calcule los segundos que faltan para llegar a la medianoche.
 */
package capitolul4;

import java.util.Scanner;

/**
 *
 * @author costy
 */
public class SegundosHastaMediaNoche {
    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        
        System.out.println("Escribe la hora: ");
        int hora = t.nextInt();
        System.out.println("Escribe los minutos: ");
        int minutos = t.nextInt();
        
        System.out.println("-----------------------------------------");
        
        int segundos = 60;
        int horasRestantes;
        int minRestantes;
        
        if((hora < 0 || minutos < 0) || (hora > 24 || minutos > 60)){
            System.out.println("Hora o minutos incorrectos!");
        }else{
            if(hora == 0){
                horasRestantes = 0;
                minRestantes = (minutos + horasRestantes);
                segundos *= minRestantes;
            }else{
                horasRestantes = (24 - hora) * 60;
                minRestantes = (minutos + horasRestantes);
                segundos *= minRestantes;
            }
        }
        
        System.out.println("Quedan un total de: " + segundos);
    }
}
