/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.myapp.services;

import com.codename1.io.*;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.TypeProduct;
import com.mycompany.myapp.utils.Statics;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

;

/**
 *
 * @author MSI
 */
public class ServiceType {
    public ArrayList<TypeProduct> types;
    
    public static ServiceType instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    private ServiceType() {
         req = new ConnectionRequest();
    }

    public static ServiceType getInstance() {
        if (instance == null) {
            instance = new ServiceType();
        }
        return instance;
    }
    
    
   
    public ArrayList<TypeProduct> parseTypes(String jsonText){
        try {
            types =new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            
            for(Map<String,Object> obj : list){
                TypeProduct p = new TypeProduct();
                
              int id=(int) Float.parseFloat(obj.get("id").toString());

                p.setId((int)id);
                p.setName(obj.get("name").toString());

            
                
                 
                types.add(p);
            }
            
            
        } catch (IOException ex) {
            
        }
        return types;
    }
     
     
     public ArrayList<TypeProduct> getAllTypes(){
       
         
         String url = Statics.BASE_URL+"/CategoryProduct/listcat_1_json";
        req.setUrl(url);
        req.setPost(false);
        
   
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                types = parseTypes(new String(req.getResponseData()));
            
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return types;
    }
    
     
     public boolean deleteCategory(TypeProduct p) {
        String url = Statics.BASE_URL + "/CategoryProduct/delete_cat_json/" + p.getId();
               
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
     
     
        public boolean addCategorie(TypeProduct p) {
        String url = Statics.BASE_URL + "/CategoryProduct/addcat_json/" +p.getName() ;
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
        
           public boolean updateCategorie(TypeProduct p) {
        String url = Statics.BASE_URL + "/CategoryProduct/updatecat_json/" + p.getId()+ "?name=" +p.getName() ;
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