/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.myapp.services;

import com.codename1.io.*;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Product;
import com.mycompany.myapp.utils.Statics;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author Msi
 */
public class ServiceProduct {
    
     public ArrayList<Product> products;
    
    public static ServiceProduct instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    private ServiceProduct() {
         req = new ConnectionRequest();
    }

    public static ServiceProduct getInstance() {
        if (instance == null) {
            instance = new ServiceProduct();
        }
        return instance;
    }

     public boolean addProduct(Product p,String tp) {
        String url = Statics.BASE_URL + "/add_jason?name=" +p.getName()+ "&category=" +tp+"&description=" +p.getDescription()+"&price="+p.getPrice();
      req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
     
     
     
     
     public boolean deleteProduct(Product p) {
        String url = Statics.BASE_URL + "/remove_json/" + p.getId();
               
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
     
     
     
     
    
     
     public ArrayList<Product> parseProduct(String jsonText){
        try {
            products =new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            
            for(Map<String,Object> obj : list){
                Product p = new Product();
                
           /*     Map<String,Object> objType =(Map<String,Object>) obj.get("typeproduct");
                
                float idType=Float.parseFloat(objType.get("idTp").toString());
                
                int idTypeI=(int) idType;
                p.setTypeproduct(idTypeI); */
                
                int id=(int) Float.parseFloat(obj.get("id").toString());
                
                p.setId((int)id);
                p.setName(obj.get("name").toString());

                p.setPrice((obj.get("price").toString()));

               p.setDescription(obj.get("description").toString());

             
//             
//                 Map<String,Object> objuser =(Map<String,Object>) obj.get("userid");
//                float idUser=Float.parseFloat(objuser.get("id").toString());
//               int idUserI=(int) idUser;
//               p.setUserId(idUserI);
//                
                products.add(p);
            }
            
            
        } catch (IOException ex) {
            
        }
        return products;
    }
     
     
     public ArrayList<Product> getAllProducts(){
       
         
         String url = Statics.BASE_URL+"/listproduct_jason";      
        req.setUrl(url);
      /*  req.setPost(false); */
        
   
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            /**/          @Override
            public void actionPerformed(NetworkEvent evt) {
                products = parseProduct(new String(req.getResponseData()));
            
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return products;
    }
     
       public ArrayList<Product> getProductSingle_cat(int z){
       
         String url = Statics.BASE_URL+"/listproduct_json/"+ z;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return products;
    }
     
     
     
 
    
    
     
      public ArrayList<Product> getProductSingle(Product p){
       
         
         String url = Statics.BASE_URL+"/listproduct_1_json/"+ p.getId();
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return products;
    }
      
      
      
       public boolean UpdateProduct(Product p,String tp) {
        String url = Statics.BASE_URL + "/update_json/" + p.getId()+ "?name=" +p.getName()+ "&category=" +tp+"&description=" +p.getDescription()+"&price="+p.getPrice();
               
               
        
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
 
    
       
       


     
     
        
       
     

       
       
}