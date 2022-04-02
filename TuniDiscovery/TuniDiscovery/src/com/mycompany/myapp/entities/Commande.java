/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author Insaf-Nefzi
 */
public class Commande {
    
    private int id;
    private int idpro;
    private int id_user_id;
     private String nom;
     private String prenom;
     private String adressecomplet;
     private double total;
     private String quantites ;
    private String prixpro;
    private int etat;
    private String email;
    private String detailspro;

    public Commande() {
    }

    public Commande(String nom, String prenom, String adressecomplet, double total, String quantites, String prixpro, int etat, String email, String detailspro) {
        this.nom = nom;
        this.prenom = prenom;
        this.adressecomplet = adressecomplet;
        this.total = total;
        this.quantites = quantites;
        this.prixpro = prixpro;
        this.etat = etat;
        this.email = email;
        this.detailspro = detailspro;
    }

    public Commande(int id, int idpro, int id_user_id, String nom, String prenom, String adressecomplet, double total, String quantites, String prixpro, int etat, String email, String detailspro) {
        this.id = id;
        this.idpro = idpro;
        this.id_user_id = id_user_id;
        this.nom = nom;
        this.prenom = prenom;
        this.adressecomplet = adressecomplet;
        this.total = total;
        this.quantites = quantites;
        this.prixpro = prixpro;
        this.etat = etat;
        this.email = email;
        this.detailspro = detailspro;
    }

    public int getId() {
        return id;
    }

    public int getIdpro() {
        return idpro;
    }

    public int getId_user_id() {
        return id_user_id;
    }

    public String getNom() {
        return nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public String getAdressecomplet() {
        return adressecomplet;
    }

    public double getTotal() {
        return total;
    }

    public String getQuantites() {
        return quantites;
    }

    public String getPrixpro() {
        return prixpro;
    }

    public int getEtat() {
        return etat;
    }

    public String getEmail() {
        return email;
    }

    public String getDetailspro() {
        return detailspro;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setIdpro(int idpro) {
        this.idpro = idpro;
    }

    public void setId_user_id(int id_user_id) {
        this.id_user_id = id_user_id;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public void setAdressecomplet(String adressecomplet) {
        this.adressecomplet = adressecomplet;
    }

    public void setTotal(double total) {
        this.total = total;
    }

    public void setQuantites(String quantites) {
        this.quantites = quantites;
    }

    public void setPrixpro(String prixpro) {
        this.prixpro = prixpro;
    }

    public void setEtat(int etat) {
        this.etat = etat;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public void setDetailspro(String detailspro) {
        this.detailspro = detailspro;
    }

    @Override
    public String toString() {
        return "Commande{" + "id=" + id + ", idpro=" + idpro + ", id_user_id=" + id_user_id + ", nom=" + nom + ", prenom=" + prenom + ", adressecomplet=" + adressecomplet + ", total=" + total + ", quantites=" + quantites + ", prixpro=" + prixpro + ", etat=" + etat + ", email=" + email + ", detailspro=" + detailspro + '}';
    }
 
  
    
}
