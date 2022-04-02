/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author poste 1
 */
public class commandeProduct {
    int idCom;
    int idpro;

    public commandeProduct() {
    }

    public commandeProduct(int idCom) {
        this.idCom = idCom;
    }

    public commandeProduct(int idCom, int idpro) {
        this.idCom = idCom;
        this.idpro = idpro;
    }

    public int getIdCom() {
        return idCom;
    }

    public int getIdpro() {
        return idpro;
    }

    public void setIdCom(int idCom) {
        this.idCom = idCom;
    }

    public void setIdpro(int idpro) {
        this.idpro = idpro;
    }

    @Override
    public String toString() {
        return "commandeProduct{" + "idCom=" + idCom + ", idpro=" + idpro + '}';
    }
    
    
    
    
}
