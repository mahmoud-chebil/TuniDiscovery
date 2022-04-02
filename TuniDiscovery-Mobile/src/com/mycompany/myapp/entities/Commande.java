/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

import static com.mycompany.myapp.entities.Cart.instance;
import java.util.ArrayList;

/**
 *
 * @author Insaf-Nefzi
 */
public class Commande {
    
     public static Commande instance;
    private int id;
    private int idpro;
    private int id_user_id;
     private String nom;
     private String prenom;
     private String adressecomplet;
     private double total;
     private ArrayList<Product> quantites ;
     private String telephone;
    private String prixpro;
    private int etat;
    private String email;
    private String detailspro;
    private Product pc;
       private  ArrayList<Commande> c;
         private  ArrayList<Product> p;

    public Commande() {
         c = new ArrayList<Commande>();
    }

    public Commande(ArrayList<Commande> c) {
        this.c = c;
    }

    
    public Commande(double total, String adressecomplet) {
        this.total = total;
        this.adressecomplet = adressecomplet;
    }

    public Commande(int id, String nom, String prenom, String adressecomplet, String telephone, String email) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.adressecomplet = adressecomplet;
        this.telephone = telephone;
        this.email = email;
    }

    public Commande(int id, String nom, String prenom, String adressecomplet, int id_user_id, double total,ArrayList<Product> list, ArrayList quantites, int etat, String telephone, String email ) {
        this.id = id;
        this.id_user_id = id_user_id;
        this.nom = nom;
        this.prenom = prenom;
          this.adressecomplet = adressecomplet;
        this.total = total;
        this.quantites = quantites;
        this.telephone = telephone;
        this.etat = etat;
        this.email = email;
        this.p = p;
    }

    public Commande(int id, String nom, String prenom, String adressecomplet, int id_user_id, String telephone, String email, double total) {
        this.id = id;
         this.nom = nom;
        this.prenom = prenom;
        this.adressecomplet = adressecomplet;
        this.id_user_id = id_user_id;
           this.telephone = telephone;
        this.email = email;
        this.total = total;
    
    }

    public Commande( String nom, String prenom, String adressecomplet, String telephone, double total, int etat, String email) {
        
        this.nom = nom;
        this.prenom = prenom;
        this.adressecomplet = adressecomplet;
        this.total = total;
        this.telephone = telephone;
        this.etat = etat;
        this.email = email;
    }

    
    
    
   

   
   

    public ArrayList<Commande> getC() {
        return c;
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

    public ArrayList<Product> getQuantites() {
        return quantites;
    }

    public void setQuantites(ArrayList<Product> quantites) {
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

    public Product getPc() {
        return pc;
    }

    public String getTelephone() {
        return telephone;
    }

    public void setTelephone(String telephone) {
        this.telephone = telephone;
    }

    public void setPc(Product pc) {
        this.pc = pc;
    }


  public ArrayList<Product> getLIST(){
      return p;
  }

    
    @Override
    public String toString() {
        return "Commande{" + "id=" + id + ", idpro=" + idpro + ", id_user_id=" + id_user_id + ", nom=" + nom + ", prenom=" + prenom + ", adressecomplet=" + adressecomplet + ", total=" + total + ", quantites=" + quantites + ", prixpro=" + prixpro + ", etat=" + etat + ", email=" + email + ", detailspro=" + detailspro + '}';
    }

    public void setQuantites(Product p) {
this.quantites = quantites;}    
 
  
    
}
