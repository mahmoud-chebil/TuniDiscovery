/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author Lenovo
 */
public class Devis {
    private int id;
    private float prixTot;
    private float remise;

     
       
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public float getPrixTot() {
        return prixTot;
    }

    public void setPrixTot(float prixTot) {
        this.prixTot = prixTot;
    }

    public float getRemise() {
        return remise;
    }

    public void setRemise(float remise) {
        this.remise = remise;
    }

    
      public String remisetoString ()
    {
        return String.valueOf(remise);
    }
       public String prixTottoString ()
    {
        return String.valueOf(prixTot);
    } 
              
       public String idtoString ()
    {
        return String.valueOf(id);
    }
          

             

    @Override
    public String toString() {
        return "Devis{" + "id=" + id + ", prixTot=" + prixTot + ", remise=" + remise + '}';
    }

    public Devis() {
    }

    public Devis(int id, float prixTot, float remise) {
        this.id = id;
        this.prixTot = prixTot;
        this.remise = remise;
    }
    
}
