/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author MSI
 */
public class TypeProduct {
    
    private int id;
    private String name;




    public TypeProduct(String name) {

        this.name = name;

    }

    public TypeProduct() {
       
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }



    @Override
    public String toString() {
        return "TypeProduct{" + "id=" + id + ", name=" + name + '}';
    }
    
    
    
    
    
    
    
}
