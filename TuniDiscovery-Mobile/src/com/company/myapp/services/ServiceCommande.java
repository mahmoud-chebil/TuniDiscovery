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
import com.mycompany.myapp.entities.Commande;
import com.mycompany.myapp.entities.Product;
import com.mycompany.myapp.entities.commandeProduct;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import com.codename1.io.ConnectionRequest;
import static com.company.myapp.services.ServiceProduit.instance;
import java.text.ParseException;
import com.mycompany.myapp.utils.DataSource;
/**
 *
 * @author Insaf-Nefzi
 */
public class ServiceCommande {
     public boolean resultOkl=true;
    public ArrayList<Product> products;
    private ConnectionRequest req;
    public static ServiceCommande instance=null;
  public boolean resultOK;
  public ArrayList<Commande> commandes;
    public ServiceCommande() {
       req = DataSource.getInstance().getRequest();
    }
   
    public void ajoutercommande(int id,int idclient){
    
        String url=Statics.BASE_URL+"ajoutercommandejson?id="+id+"&idClient="+idclient;
        req.setUrl(url);
        req.addResponseListener(e->{
            String str=new String(req.getResponseData());
            System.out.println("data=="+str);
        
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
    }
     /*public ArrayList<Commande> getallcommandes()
  {
      ArrayList<Commande> commandes=new ArrayList<>();
      String url=Statics.BASE_URL+"commande/cd/new/jason/";
      req.setUrl(url);
      req.addResponseListener(new ActionListener<NetworkEvent>() {
     
              }}*/
         public ArrayList<Commande> getAllCommandes(){
 
         String url = Statics.BASE_URL+"commande/cd/new/jason/jasonf";      
        req.setUrl(url);
req.setPost(false);
    req.setHttpMethod("GET"); //Change to GET if necessary
    req.setDuplicateSupported(true);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                commandes = parseCommandes(new String(req.getResponseData()));
           
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return commandes;
    }
          
          public ArrayList<Commande> parseCommandes(String jsonText) {
              try {
            commandes=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson 
                    = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));   
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                Commande c = new Commande();
              /* Map<String,Object> objType =(Map<String,Object>) obj.get("typeP");
                float idType=Float.parseFloat(objType.get("idTp").toString());
               
                float id=Float.parseFloat(obj.get("idP").toString());
                p.setId((int)id);*/
                int id=(int) Float.parseFloat(obj.get("id").toString());
                int etat=(int) Float.parseFloat(obj.get("etat").toString());
                c.setId((int)id);
                c.setNom(obj.get("nom").toString());
                 c.setPrenom(obj.get("prenom").toString());
                 c.setAdressecomplet(obj.get("adressecomplet").toString());
                 c.setTelephone(obj.get("telephone").toString());
                 c.setTotal(((float)Float.parseFloat(obj.get("total").toString())));    
                 c.setEtat((int)etat);
                 c.setEmail(obj.get("email").toString());           
//             
//                 Map<String,Object> objuser =(Map<String,Object>) obj.get("userid");
//                float idUser=Float.parseFloat(objuser.get("id").toString());
//               int idUserI=(int) idUser;
//               p.setUserId(idUserI);
//                
                commandes.add(c);
            }
            
            
        } catch (IOException ex) {
            
        }
        return commandes;
    }
          
          
          
           
  
     public boolean supprimercommande(int id){
     
        String url=Statics.BASE_URL+"commande/cd/deletejson/"+id;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                req.removeResponseCodeListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOkl;
     }
     public void viderpanier(int idclient){
         String url=Statics.BASE_URL+"viderpanierJSON?idClient="+idclient;
        req.setUrl(url);
        req.addResponseListener(e->{
            String str=new String(req.getResponseData());
            System.out.println("data=="+str);
        
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
     }
    public void valider(int id){
        String url=Statics.BASE_URL+"validerJSON?idClient="+id;
        req.setUrl(url);
        req.addResponseListener(e->{
            String str=new String(req.getResponseData());
            System.out.println("data=="+str);
        
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
    }
      public boolean addCommande(Commande p){
      
           String url = Statics.BASE_URL + "commande/cd/new/jason?id=" +p.getId()+"&nom="+p.getNom()+ 
                   "&prenom=" +p.getPrenom()+ "&adressecomplet="+p.getAdressecomplet()+"&telephone=" 
                   +p.getTelephone()+"&total=" +p.getTotal()+"&etat="+p.getEtat()+"&email="+p.getEmail();
         
  
         req.setUrl(url);
       
         
         req.addResponseListener(new ActionListener<NetworkEvent>() {
             @Override
             public void actionPerformed(NetworkEvent evt) {
                 resultOK=req.getResponseCode() == 200;
                 req.removeResponseListener(this);
             }
         });
         NetworkManager.getInstance().addToQueueAndWait(req);
         return resultOK;
     }
      
       public boolean addCommandeLine(int id, String nom, String prenom, String adressecomplet, int id_user_id , String telephone, String email, double total){
            String url = Statics.BASE_URL+"commande/cd/new/jason/"+nom+prenom+adressecomplet+id_user_id+telephone+email+total;
  
            req.setUrl(url);
         req.setPost(false);
         
         req.addResponseListener(new ActionListener<NetworkEvent>() {
             @Override
             public void actionPerformed(NetworkEvent evt) {
                 resultOK=req.getResponseCode() == 20;
                 req.removeResponseListener(this);
             }
         });    
         NetworkManager.getInstance().addToQueueAndWait(req);
         return resultOK;
     }

       public boolean UpdateCommande(Commande c) {

        String url = Statics.BASE_URL + "commande/cd/update/json/" + c.getId()+ "/" +c.getNom()+ "/" +c.getPrenom()+"/" 
                +c.getAdressecomplet()+"/"+c.getTelephone() + "/" +c.getEmail();
     
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
        public boolean UpdateCommandeAdmin(Commande c) {

        String url = Statics.BASE_URL + "commande/cd/updateAdmin/json/" + c.getId()+ "/" +c.getEtat();
     
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
       
       
        public ArrayList<Commande> getAllProduitsCom(){
       
         
         String url = Statics.BASE_URL+"getall/{id}";      
        req.setUrl(url);
        req.setPost(false);
        
   
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                commandes = parseCommandes(new String(req.getResponseData()));
            
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return commandes;
    }
       
       

        public static ServiceCommande getInstance() {
             if (instance == null) {
            instance = new ServiceCommande();
        }
        return instance;
        }
    }


