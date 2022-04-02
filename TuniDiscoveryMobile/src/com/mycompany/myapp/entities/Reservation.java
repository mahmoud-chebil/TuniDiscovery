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
public class Reservation {
    private int id;
    private int nbPersonne;
    private String dateres;
    private boolean etat;
    private Evenement even;
    private User  user;
    private Devis  devis;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

     public String idtoString ()
    {
        return String.valueOf(id);
    }
      public String nbpertoString ()
    {
        return String.valueOf(nbPersonne);
    }
    public int getNbPersonne() {
        return nbPersonne;
    }

    public void setNbPersonne(int nbPersonne) {
        this.nbPersonne = nbPersonne;
    }

    public String getDateres() {
        return dateres;
    }

    public void setDateres(String dateres) {
        this.dateres = dateres;
    }

    public boolean getEtat() {
        return etat;
    }

    public void setEtat(boolean etat) {
        this.etat = etat;
    }

    public Evenement getEven() {
        return even;
    }

    public void setEven(Evenement even) {
        this.even = even;
    }

    public User getUser() {
        return user;
    }

    public void setUser(User user) {
        this.user = user;
    }

    public Devis getDevis() {
        return devis;
    }

    public void setDevis(Devis devis) {
        this.devis = devis;
    }

    @Override
    public String toString() {
        return "Reservation{" + "id=" + id + ", nbPersonne=" + nbPersonne + ", dateres=" + dateres + ", etat=" + etat + ", even=" + even + ", user=" + user + ", devis=" + devis + '}';
    }





    public Reservation( int nbPersonne, String dateres, boolean etat) {
        this.nbPersonne = nbPersonne;
        this.dateres = dateres;
        this.etat = etat;
    }

    public Reservation() {}

    public Reservation(int nbPersonne) {
        this.nbPersonne = nbPersonne;
    }

    
}
