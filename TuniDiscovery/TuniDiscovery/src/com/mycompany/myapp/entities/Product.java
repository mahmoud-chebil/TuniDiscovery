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
public class Product {

    private int id;
    private String name, description ,price,image;
    private TypeProduct category;
  
    public Product() {
    }


    public Product(String name, String description, String price, String image, TypeProduct category) {
        this.name = name;
        this.description = description;
        this.price = price;
        this.image = image;
        this.category = category;
    }
    public double getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    public String getDescription() {
        return description;
    }

    public String getPrice() {
        return price;
    }

    public String getImage() {
        return image;
    }

    public TypeProduct getCategory_id() {
        return category;
    }

    public void setId(double id) {
        this.id = (int) id;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public void setPrice(String price) {
        this.price = price;
    }

    public void setImage(String image) {
        this.image = image;
    }
    public void setCategory(TypeProduct category) {
        this.category = category;
    }
    @Override
    public String toString() {
        return "Product{" + "id=" + id + ", name=" + name + ", description=" + description + ", price=" + price + ", image=" + image + '}';
    }
    
  

  
}
