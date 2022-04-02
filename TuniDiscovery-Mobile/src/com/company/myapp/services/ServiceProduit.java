/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.company.myapp.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Product;

import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author Raef
 */
public class ServiceProduit {
    
     public ArrayList<Product> produits;
    public ArrayList<Product> chart;
    public static ServiceProduit instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    
    public ServiceProduit() {
         req = new ConnectionRequest();
    }

    public static ServiceProduit getInstance() {
        if (instance == null) {
            instance = new ServiceProduit();
        }
        return instance;
    }
    
     public boolean addProduit(Product p,String tp) {
        String url = Statics.BASE_URL + "/AddMobile/" + p.getId()
                + "/" + p.getName()
                + "/" + p.getDescription()
                + "/" +p.getCategory_id()
                + "/" +p.getPrice()    
                + "/"+tp;
               
        
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
     
     
     
     
     public boolean deleteProduit(Product p) {
        String url = Statics.BASE_URL + "/deleteProdMobile/" + p.getId();
               
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
     
     
     
     
    
     
     public ArrayList<Product> parseProduits(String jsonText){
        try {
            produits=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                Product p = new Product();
              /* Map<String,Object> objType =(Map<String,Object>) obj.get("typeP");
                float idType=Float.parseFloat(objType.get("idTp").toString());
               
                float id=Float.parseFloat(obj.get("idP").toString());
                p.setId((int)id);*/
                int id_e=(int) Float.parseFloat(obj.get("id").toString());
                
                p.setId((int)id_e);
                p.setName(obj.get("name").toString());
                           
                p.setPrice(((float)Float.parseFloat(obj.get("price").toString())));                       

               p.setDescription(obj.get("description").toString());
               
//             
//                 Map<String,Object> objuser =(Map<String,Object>) obj.get("userid");
//                float idUser=Float.parseFloat(objuser.get("id").toString());
//               int idUserI=(int) idUser;
//               p.setUserId(idUserI);
//                
                produits.add(p);
            }
            
            
        } catch (IOException ex) {
            
        }
        return produits;
    }
     
     
     public ArrayList<Product> getAllProduits(){
       
         
         String url = Statics.BASE_URL+"product/shop_jason";      
        req.setUrl(url);
        req.setPost(false);
        
   
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                produits = parseProduits(new String(req.getResponseData()));
            
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return produits;
    }
     
     
     
     public ArrayList<Product> getHighProduits(){
       
         
         String url = Statics.BASE_URL+"/highPriceMobile";      
        req.setUrl(url);
        req.setPost(false);
        
   
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                produits = parseProduits(new String(req.getResponseData()));
            
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return produits;
    }
      public ArrayList<Product> getLowProduits(){
       
         
         String url = Statics.BASE_URL+"/lowPriceMobile";      
        req.setUrl(url);
        req.setPost(false);
        
   
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                produits = parseProduits(new String(req.getResponseData()));
            
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return produits;
    }
     
    
     
      public ArrayList<Product> getProduitSingle(Product p){
       
         
         String url = Statics.BASE_URL+"/ShowMobileSingle/"+ p.getId();      
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return produits;
    }
      
      
      
       public boolean UpdateProduit(Product p) {
         String url = Statics.BASE_URL + "/AddMobile/" + p.getId()
                + "/" + p.getName()
                + "/" + p.getDescription()
                + "/" +p.getCategory_id()
                + "/" +p.getPrice()    ;
                
               
               
        
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
 
    
          public ArrayList<Product> parseChart(String jsonText) throws IOException{
              chart = new ArrayList<Product>();
              JSONParser jc = new JSONParser();
             Map<String,Object> chartListJson;
             chartListJson = jc.parseJSON(new CharArrayReader(jsonText.toCharArray()));
             List<Map<String,Object>> listchart = (List<Map<String,Object>>) chartListJson.get("root");
             
             
             for(Map<String,Object> obj : listchart){
             Product p = new Product();
             float id = Float.parseFloat(obj.get("id").toString());
             p.setId((int)id);
             float quantite = Float.parseFloat(obj.get("1").toString());
            p.setId((int)id);
             chart.add(p);
        }
             return chart;
    }
          
          public ArrayList<Product> getAllChart(){
              String url = Statics.BASE_URL+"product/shop_jason";
              req.setUrl(url);
              req.setPost(false);
        
              req.addResponseListener(new ActionListener<NetworkEvent>() {
              @Override
              public void actionPerformed(NetworkEvent evt) {

                  try {
                      chart = parseChart(new String(req.getResponseData()));
                      req.removeResponseListener(this);
                      
                  } catch (IOException ex) {

                  }
                    
                
            }
        });
     NetworkManager.getInstance().addToQueueAndWait(req);
        return chart;
          }
          
          
          public ArrayList<Product> parseOneProduct(String jsonText) throws IOException{
              chart = new ArrayList<Product>();
              JSONParser jc = new JSONParser();
             Map<String,Object> chartListJson;
             chartListJson = jc.parseJSON(new CharArrayReader(jsonText.toCharArray()));
             List<Map<String,Object>> listchart = (List<Map<String,Object>>) chartListJson.get("root");
             
             
             for(Map<String,Object> obj : listchart){
             Product p = new Product();
             p.setName(obj.get("Name").toString());
             chart.add(p);
        }
             return chart;
    }
          
          public ArrayList<Product> getOneProduct(int id){
              String url = Statics.BASE_URL+"/panierf_jason/"+id;
              req.setUrl(url);
              req.setPost(false);
        
              req.addResponseListener(new ActionListener<NetworkEvent>() {
              @Override
              public void actionPerformed(NetworkEvent evt) {

                  try {
                      chart = parseOneProduct(new String(req.getResponseData()));
                      req.removeResponseListener(this);
                      
                  } catch (IOException ex) {

                  }
                    
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return chart;
          }
       
       
       
        public boolean AddPanierProduit(Product p) {
        String url = Statics.BASE_URL + "/panier/add_jason/" + p.getId();
               
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
     
     
        
         public ArrayList<Product> getProduitsPanierMobile(){
       
         
         String url = Statics.BASE_URL+"/panierf_jason";      
        req.setUrl(url);
        req.setPost(false);
        
   
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                produits = parseProduits(new String(req.getResponseData()));
            
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
      
        return produits;
    }
     
      public boolean deleteProduitPanierMobile(Product p) {
        String url = Statics.BASE_URL + "/panier/RemovePanierMobile/" + p.getId();
               
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
