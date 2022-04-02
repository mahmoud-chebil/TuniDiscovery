/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

import java.util.Date;

/**
 *
 * @author Lenovo
 */
public class Evenement {
    private int id;
    private float prix_even;
    private String desc_even;
    private String titre_even;
    private int nbre_place;
    private String date_debut;
    private String date_fin;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public float getPrix_even() {
        return prix_even;
    }

    public void setPrix_even(float prix_even) {
        this.prix_even = prix_even;
    }

      public String getputostring ()
    {
        return String.valueOf(prix_even);
    }
    public String getDesc_even() {
        return desc_even;
    }

    public void setDesc_even(String desc_even) {
        this.desc_even = desc_even;
    }

    public String getTitre_even() {
        return titre_even;
    }

    public void setTitre_even(String titre_even) {
        this.titre_even = titre_even;
    }

    public int getNbre_place() {
        return nbre_place;
    }

    public void setNbre_place(int nbre_place) {
        this.nbre_place = nbre_place;
    }

    public String getDate_debut() {
        return date_debut;
    }

    public void setDate_debut(String date_debut) {
        this.date_debut = date_debut;
    }

    public String getDate_fin() {
        return date_fin;
    }

    public void setDate_fin(String date_fin) {
        this.date_fin = date_fin;
    }
    
      public String nbplacetostring ()
    {
        return String.valueOf(nbre_place);
    }

    @Override
    public String toString() {
        return "Evenement{" + "id=" + id + ", prix_even=" + prix_even + ", desc_even=" + desc_even + ", titre_even=" + titre_even + ", nbre_place=" + nbre_place + ", date_debut=" + date_debut + ", date_fin=" + date_fin + '}';
    }

    public Evenement() {
    }

    public Evenement(int id, float prix_even, String desc_even, String titre_even, int nbre_place, String date_debut, String date_fin) {
        this.id = id;
        this.prix_even = prix_even;
        this.desc_even = desc_even;
        this.titre_even = titre_even;
        this.nbre_place = nbre_place;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
    }

                            
                            
}
