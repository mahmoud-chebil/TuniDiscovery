
package com.mycompany.myapp.entities;

/**
 *
 * @author IDIZUOB
 */
public class Activite {
    private int id;
    private String nom_activite;
    private String type_activite;
    private int prix_activite;

    public Activite() {
    }

    
    public Activite(String nom_activite, String type_activite, int prix_activite) {
        this.nom_activite = nom_activite;
        this.type_activite = type_activite;
        this.prix_activite = prix_activite;
    }
    

    public Activite(int id, String nom_activite, String type_activite, int prix_activite) {
        this.id = id;
        this.nom_activite = nom_activite;
        this.type_activite = type_activite;
        this.prix_activite = prix_activite;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom_activite() {
        return nom_activite;
    }

    public void setNom_activite(String nom_activite) {
        this.nom_activite = nom_activite;
    }

    public String getType_activite() {
        return type_activite;
    }

    public void setType_activite(String type_activite) {
        this.type_activite = type_activite;
    }

    public int getPrix_activite() {
        return prix_activite;
    }

    public void setPrix_activite(int prix_activite) {
        this.prix_activite = prix_activite;
    }

    @Override
    public String toString() {
        return "Activite{" + "id=" + id + ", nom_activite=" + nom_activite + ", type_activite=" + type_activite + ", prix_activite=" + prix_activite + '}';
    }
    
    
    
    
}
