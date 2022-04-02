/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Devis;
import com.mycompany.myapp.entities.Evenement;
import com.mycompany.myapp.entities.Reservation;
import com.mycompany.myapp.entities.User;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;

/**
 *
 * @author bhk
 */
public class ServiceReservation {

    public ArrayList<Reservation> resrv;
    public ArrayList<Evenement> events;
    public ArrayList<Evenement> evenement;
    public Evenement even1;
    public ArrayList<User> user;
    public User user1 ;
    public ArrayList<User> listeuser = new ArrayList<>();
    public ArrayList<Evenement> listeven = new ArrayList<>();
    public static ServiceReservation instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    public ServiceReservation() {
         req = new ConnectionRequest();
    }

    public static ServiceReservation getInstance() {
        if (instance == null) {
            instance = new ServiceReservation();
        }
        return instance;
    }

    public boolean addReservation(Reservation r,String evenid) {
         
       
             String url = Statics.BASE_URL + "addres/new/";
             req.addArgument("nbper", r.getNbPersonne()+"");
             req.addArgument("evenid",evenid);
          
                       req.setUrl(url);

            req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; 
                req.removeResponseListener(this); 
           
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public ArrayList<Reservation> parseTasks(String jsonText){
        try {
            resrv=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
          
            for(Map<String,Object> obj : list){
                //Création des tâches et récupération de leurs données
                Reservation r = new Reservation();
                float id = Float.parseFloat(obj.get("id").toString());
                r.setId((int)id);
                r.setNbPersonne(((int)Float.parseFloat(obj.get("nbPersonne").toString())));;
                r.setDateres(obj.get("dateres").toString());
                
                boolean etat =  Boolean.parseBoolean(obj.get("etat").toString());
                r.setEtat(etat);
              
                //récupérer les attributs de l'objet évènement
               Map<String, Object> even = (Map<String, Object>)obj.get("even");
               Evenement event=new Evenement();
                 float idev = Float.parseFloat(even.get("id").toString());
                  event.setId((int) idev);
              
                event.setNbre_place(((int)Float.parseFloat(even.get("nbre_places").toString())));
                event.setDesc_even(even.get("decription_evenement").toString());
                event.setTitre_even(even.get("titre_evenement").toString());
                event.setDate_debut(even.get("date_debut").toString());
                event.setDate_fin(even.get("date_fin").toString());
                event.setPrix_even((float)Float.parseFloat(even.get("prix_evenement").toString()));
                
                r.setEven(event);
        
              

                              
//récupérer les attributs de l'utilisateur
               Map<String, Object> users = (Map<String, Object>)obj.get("user");
               User p=new User();
                p.setId(((int)Float.parseFloat(users.get("id").toString())));
                p.setAdresse(users.get("adresse").toString());
                p.setEmail(users.get("email").toString());
                p.setUserName(users.get("userName").toString());
                r.setUser(p);
                
                //récupérer les attributs de la devis
               Map<String, Object> devis = (Map<String, Object>)obj.get("devis");
               Devis d=new Devis();
                d.setId(((int)Float.parseFloat(devis.get("id").toString())));
                d.setPrixTot(((float)Float.parseFloat(devis.get("prixTot").toString())));
                d.setRemise(((float)Float.parseFloat(devis.get("remise").toString())));
                r.setDevis(d);
                resrv.add(r);
            }
            
            
        } catch (IOException ex) {
            
        }
         /*
            A ce niveau on a pu récupérer une liste des tâches à partir
        de la base de données à travers un service web
        
        */
        return resrv;
    }
    
    public ArrayList<Reservation> getAllReservation(){
        String url = Statics.BASE_URL+"listeResMobile/";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resrv = parseTasks(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resrv;
    }
    
    public ArrayList<Reservation> ListReservationUserForm(){
        String url = Statics.BASE_URL+"listeResUserMobile/1";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resrv = parseTasks(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resrv;
    }
    
    public ArrayList<Evenement> parseEvents(String jsonText){
        try {
            events=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
          
            for(Map<String,Object> obj : list){
                //Création des tâches et récupération de leurs données
                Evenement e = new Evenement();
               e.setId(((int)Float.parseFloat(obj.get("id").toString())));
                e.setNbre_place(((int)Float.parseFloat(obj.get("nbre_places").toString())));;
                e.setDesc_even(obj.get("decription_evenement").toString());
                e.setDesc_even(obj.get("titre_evenement").toString());
                 
              
                events.add(e);
            }
            
     
              
        } catch (IOException ex) {
            
        }
         /*
            A ce niveau on a pu récupérer une liste des tâches à partir
        de la base de données à travers un service web
        
        */
        return events;
    }
    
    public ArrayList<Evenement> getAllEvenement(){
        String url = Statics.BASE_URL+"listeEven/";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                events = parseEvents(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return events;
    }  

     
    public ArrayList<User> parseUsers(String jsonText){
        
        try {
                user =new ArrayList<>();        
            JSONParser j = new JSONParser();
            Map<String,Object> useres = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)useres.get("root");
          
            for(Map<String,Object> obj : list){
                //Création des tâches et récupération de leurs données
                User u = new User();
                float id = Float.parseFloat(obj.get("id").toString());
                u.setId((int)id);
                u.setAdresse(obj.get("adresse").toString());;
                u.setEmail(obj.get("email").toString());
                u.setUserName(obj.get("userName").toString());
               user.add(u);

            } 
            
        } catch (IOException ex) {
            
        }
  
        return user;
    }
        
    public ArrayList<User> getUser(){
        String url = Statics.BASE_URL+"userchoisi/";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
               
                user = parseUsers(new String(req.getResponseData()));
                req.removeResponseListener(this);
              
            }
            
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return user;
    }

     
         public boolean annulerResrvation(int id){
        String url = Statics.BASE_URL  + "deleteResMobile/"+id ; 
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; 
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
         
         
          public boolean validerReservation(int idres) {
         
       
             String url = Statics.BASE_URL + "validationMobile/"+idres;
            req.setUrl(url);

            req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; 
                req.removeResponseListener(this); 
           
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
          
          
          
        public boolean effectuerRemise(String remise,String iddev) {
         
       
             String url = Statics.BASE_URL + "remiseMobile/";
             req.addArgument("remise", remise);
             req.addArgument("devisid",iddev);
          
                       req.setUrl(url);

            req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; 
                req.removeResponseListener(this); 
           
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

}

 
