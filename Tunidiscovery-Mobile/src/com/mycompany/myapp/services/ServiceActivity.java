package com.mycompany.myapp.services;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Activite;
import static com.mycompany.myapp.services.ServiceActivity.instance;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author IDIZUOB
 */
public class ServiceActivity {
    
    public ArrayList<Activite> activities;
    
    public static ServiceActivity instance=null;
    public boolean resultOK;
    private ConnectionRequest req;
    
        private ServiceActivity() {
         req = new ConnectionRequest();
    }
        public static ServiceActivity getInstance() {
        if (instance == null) {
            instance = new ServiceActivity();
        }
        return instance;
    }
        
    //ADD

    public boolean addActivity(Activite ac) {
        String url = Statics.BASE_URL + "/createA?nom_activite="+ac.getNom_activite()+"&type_activite="+ac.getType_activite()+"&prix_activite="+ac.getPrix_activite(); //création de l'URL
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

     public ArrayList<Activite> parseActivities(String jsonText){
        try {
            activities=new ArrayList<>();
            JSONParser j = new JSONParser();// Instanciation d'un objet JSONParser permettant le parsing du résultat json


            
            Map<String,Object> activitiesListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)activitiesListJson.get("root");
            
            //Parcourir la liste des tâches Json
            for(Map<String,Object> obj : list){
                //Création des tâches et récupération de leurs données
                Activite a = new Activite();
                
                float id = Float.parseFloat(obj.get("id").toString());
                a.setId((int)id);
                
                float prix_activite = Float.parseFloat(obj.get("prix_activite").toString());
                a.setPrix_activite(((int)prix_activite));
                
                a.setNom_activite(obj.get("nom_activite").toString());
                
                a.setType_activite(obj.get("type_activite").toString());

                
                //Ajouter la tâche extraite de la réponse Json à la liste
                activities.add(a);
            }
            
            
        } catch (IOException ex) {
            
        }
         /*
            A ce niveau on a pu récupérer une liste des tâches à partir
        de la base de données à travers un service web
        
        */
        return activities;
    }
    
     //Affiche
     
    public ArrayList<Activite> getAllAcitivities(){
        String url = Statics.BASE_URL+"/getallactivites";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                activities = parseActivities(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return activities;
    }
    
    //Delete
    
         public boolean deleteActivite(Activite Act) {
        String url = Statics.BASE_URL + "/deleteA/" + Act.getId();
               
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
         
         
    //Update
         
    public boolean updateActivite(Activite Act) {
        String url = Statics.BASE_URL+ "/updateA/";
        req.setUrl(url);
        
        req.addArgument("id", Act.getId()+"");
        req.addArgument("nom", Act.getNom_activite());
        req.addArgument("type", Act.getType_activite());
        req.addArgument("prix", Act.getPrix_activite()+"");

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
