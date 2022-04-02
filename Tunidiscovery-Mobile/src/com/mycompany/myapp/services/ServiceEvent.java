
package com.mycompany.myapp.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Evenement;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author IDIZUOB
 */
public class ServiceEvent {

    public ArrayList<Evenement> events;
    
    public static ServiceEvent instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    private ServiceEvent() {
         req = new ConnectionRequest();
    }

    public static ServiceEvent getInstance() {
        if (instance == null) {
            instance = new ServiceEvent();
        }
        return instance;
    }

    public boolean addEvent(Evenement ev , String tp) {
        String url = Statics.BASE_URL + "/createE/"+ev.getPrix_evenement()+"/"+ev.getDecription_evenement()
                +"/"+ev.getTitre_evenement()+"/"+ev.getNbre_places()+"/"+ev.getDate_debut()+
                "/"+ev.getDate_fin()+"/"+ev.getTel()+"/"+ev.getEmail()+"/"+tp; //création de l'URL
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this); //Supprimer cet actionListener

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public ArrayList<Evenement> parseEvents(String jsonText){
        try {
            events=new ArrayList<>();
            JSONParser j = new JSONParser();// Instanciation d'un objet JSONParser permettant le parsing du résultat json

            Map<String,Object> eventsListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)eventsListJson.get("root");
            
            //Parcourir la liste des tâches Json
            for(Map<String,Object> obj : list){
                //Création des tâches et récupération de leurs données
                Evenement t = new Evenement();
                
                int id =(int) Float.parseFloat(obj.get("id").toString());
                t.setId((int)id);
                
                int prix = (int)Float.parseFloat(obj.get("prix_evenement").toString());
                t.setPrix_evenement(((int)prix));
                  t.setDecription_evenement(null);
                
               t.setDecription_evenement(obj.get("decription_evenement").toString());
               
                
                t.setTitre_evenement(obj.get("titre_evenement").toString());
                
                
                int places = (int)Float.parseFloat(obj.get("nbre_places").toString());
                t.setNbre_places(((int)places));
                
                t.setDate_debut((obj.get("date_debut").toString()));
                t.setDate_fin((obj.get("date_fin").toString()));
                t.setDate_debut(null);
                t.setDate_fin(null);
                
                
                
               int tel = (int)Float.parseFloat(obj.get("tel").toString());
               t.setTel(((int)tel));
                
                t.setEmail(obj.get("email").toString());
                 

                
                
                //Ajouter la tâche extraite de la réponse Json à la liste
                events.add(t);
            }
            
            
        } catch (IOException ex) {
            
        }

        return events;
    }
    
    public ArrayList<Evenement> getAllEvents(){
        String url = Statics.BASE_URL+"/getallevenements";
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
    
        //Update
         
    public boolean updateEvent(Evenement Evt ,String tp) {
        String url = Statics.BASE_URL+ "/updateE/"+Evt.getId()+"/"+Evt.getPrix_evenement()+"/"+Evt.getDecription_evenement()
                +"/"+Evt.getTitre_evenement()+"/"+Evt.getNbre_places()+"/"+Evt.getDate_debut()+
                "/"+Evt.getDate_fin()+"/"+Evt.getTel()+"/"+Evt.getEmail()+"/"+tp;
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
    
    
        //Delete
    
    public boolean deleteEvent(Evenement Evt) {
        String url = Statics.BASE_URL + "/deleteE/" + Evt.getId();
               
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
                Dialog.show(""," Supprimé avec succès", new Command("OK"));
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
}
