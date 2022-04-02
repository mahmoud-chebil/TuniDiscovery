/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;



import static com.sun.javafx.fxml.expression.Expression.not;
import static java.lang.Boolean.FALSE;
import static java.lang.Boolean.TRUE;
import java.util.ArrayList;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

public final class Cart {

    public static Cart instance;
List<Product>  panier=new ArrayList<>();
    private final ArrayList<Product> c;
public  ArrayList<Product> cp;
    public Cart() {
        c = new ArrayList<Product>();

    }
    
    public void ListP(Product p) {
         if (this.panier == null) {
           this.panier.add(p);}
         if  (panier.contains(p)==FALSE){
             this.panier.add(p);
         }
        }
        
        
        

    

    public ArrayList<Product> getCartList() {
        return c;
    }
    

    public void AddProduct(Product e) {
        this.c.add(e);
    }

    public void RemoveProduct(Product e) {
        
       int productid = e.getId();
        for(int i=0 ; i<this.c.size();i++){
            Product product = this.c.get(i);
            if(product.getName().equals(e.getName())){
                this.c.remove(i);
            }
        }
    }
    public void RemoveAll(){
    this.c.clear();
    }

    public ArrayList<Product> getC() {
        return c;
    }

    public static Cart getInstance() {
        if (instance == null) {
            instance = new Cart();
        }
        return instance;
    }

    public void cleanCartSession() {
        instance = null;
    }

    @Override
    public String toString() {
        return "Cart{"
                + "c=" + c
                + '}';
    }
    public double total(){
        double total=0;
     for(Product product : this.c){
                    total = total + (product.getPrice()*product.getQuantite());
                }
    return total;
    }
}
