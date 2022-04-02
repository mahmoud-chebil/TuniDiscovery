/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author Raef
 */
public class Product {

    private int id;
     private int category_id;
    private String name;
    private String description;
    private float price;
    private int quantite;
  public static int focusedId;
  
    public Product() {
    }

    public Product(int id) {
        this.id = id;
    }

    public Product(int id, String name) {
        this.id = id;
        this.name = name;
    }

    public Product(int id, int category_id) {
        this.id = id;
        this.category_id = category_id;
    }

    public Product(int id, int category_id, String name) {
        this.id = id;
        this.category_id = category_id;
        this.name = name;
    }

    public Product(int id, int category_id, String name, String description) {
        this.id = id;
        this.category_id = category_id;
        this.name = name;
        this.description = description;
    }

    public Product(int id, String name, String description, float price) {
        this.id = id;
        this.name = name;
        this.description = description;
        this.price = price;
    }

    public Product(int id, String name, String description, float price, int quantite) {
        this.id = id;
        this.name = name;
        this.description = description;
        this.price = price;
        this.quantite = quantite;
    }

    
    
    
    
    public Product(int id, int category_id, String name, String description, float price) {
        this.id = id;
        this.category_id = category_id;
        this.name = name;
        this.description = description;
        this.price = price;
    }

    public Product(int id, int category_id, String name, String description, float price, int quantite) {
        this.id = id;
        this.category_id = category_id;
        this.name = name;
        this.description = description;
        this.price = price;
        this.quantite = quantite;
    }

    public Product(String name, int quantite) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    

    public int getId() {
        return id;
    }

    public int getCategory_id() {
        return category_id;
    }

    public String getName() {
        return name;
    }

    public String getDescription() {
        return description;
    }

    public float getPrice() {
        return price;
    }

    public int getQuantite() {
        return quantite;
    }

    public void setQuantite(int quantite) {
        this.quantite = quantite;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setCategory_id(int category_id) {
        this.category_id = category_id;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public void setPrice(float price) {
        this.price = price;
    }

    @Override
    public String toString() {
        return "Product{" + "id=" + id + ", category_id=" + category_id + ", name=" + name + ", description=" + description + ", price=" + price + '}';
    }
   
    
  

  
}
