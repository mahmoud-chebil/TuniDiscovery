
package com.mycompany.myapp.entities;



/**
 *
 * @author IDIZUOB
 */
public class Evenement {
    private int id;
    private int prix_evenement;
    private String decription_evenement;
    private String titre_evenement;
    private int nbre_places;
    private String date_debut;
    private String date_fin;
    private int tel;
    private String email;


    public Evenement() {
    }

    public Evenement(int id, int prix_evenement, String decription_evenement, String titre_evenement, int nbre_places, String date_debut, String date_fin, int tel, String email) {
        this.id = id;
        this.prix_evenement = prix_evenement;
        this.decription_evenement = decription_evenement;
        this.titre_evenement = titre_evenement;
        this.nbre_places = nbre_places;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
        this.tel = tel;
        this.email = email;
    }

    public Evenement(int prix_evenement, String decription_evenement, String titre_evenement, int nbre_places, String date_debut, String date_fin, int tel, String email) {
        this.prix_evenement = prix_evenement;
        this.decription_evenement = decription_evenement;
        this.titre_evenement = titre_evenement;
        this.nbre_places = nbre_places;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
        this.tel = tel;
        this.email = email;
    }

    public Evenement(int prix_evenement, String titre_evenement, int nbre_places, String date_debut, String date_fin, int tel, String email) {
        this.prix_evenement = prix_evenement;
        this.titre_evenement = titre_evenement;
        this.nbre_places = nbre_places;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
        this.tel = tel;
        this.email = email;
    }


    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getPrix_evenement() {
        return prix_evenement;
    }

    public void setPrix_evenement(int prix_evenement) {
        this.prix_evenement = prix_evenement;
    }

    public String getDecription_evenement() {
        return decription_evenement;
    }

    public void setDecription_evenement(String decription_evenement) {
        this.decription_evenement = decription_evenement;
    }

    public String getTitre_evenement() {
        return titre_evenement;
    }

    public void setTitre_evenement(String titre_evenement) {
        this.titre_evenement = titre_evenement;
    }

    public int getNbre_places() {
        return nbre_places;
    }

    public void setNbre_places(int nbre_places) {
        this.nbre_places = nbre_places;
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

    public int getTel() {
        return tel;
    }

    public void setTel(int tel) {
        this.tel = tel;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    @Override
    public String toString() {
        return "Evenement{" + "id=" + id + ", prix_evenement=" + prix_evenement + ", decription_evenement=" + decription_evenement + ", titre_evenement=" + titre_evenement + ", nbre_places=" + nbre_places + ", date_debut=" + date_debut + ", date_fin=" + date_fin + ", tel=" + tel + ", email=" + email + '}';
    }

   
    


    }
    
    

   




    



        

