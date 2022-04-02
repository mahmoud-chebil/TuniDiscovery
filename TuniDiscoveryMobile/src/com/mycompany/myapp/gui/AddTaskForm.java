/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.components.ToastBar;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import static com.codename1.ui.Component.CENTER;
import static com.codename1.ui.Component.LEFT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.entities.*;
import com.mycompany.myapp.services.ServiceReservation;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.table.TableLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.HomeForm;
import com.mycompany.myapp.menuback;


/**
 *
 * @author bhk
 */
public class AddTaskForm extends Form{

    
         Form current;
         Resources res;
         String desc;
         Evenement evenchoisi;
    public AddTaskForm(Form previous) {
     
        

        setLayout(BoxLayout.y());

        res = UIManager.initFirstTheme("/theme");
        
        current = this; //Récupération de l'interface(Form) en cours
               
        Container cntee=new Container(BoxLayout.y()); 
       
        Button back = new Button("");
        FontImage.setMaterialIcon(back, FontImage.MATERIAL_ASSIGNMENT_RETURN, 4);
         back.addActionListener(e -> new HomeForm(res).show());
        Container cntb=new Container(new FlowLayout(LEFT,CENTER));

    
        
        Image profilePic = res.getImage("reservation.png");
        Label profilePicLabel = new Label(profilePic, "ProfilePicTitle");
       
        Label lab=new Label("Nouvelle réservation", "Title");
        lab.getAllStyles().setFgColor(0x339bff);
        Container titleCmp = BoxLayout.encloseY(
                        BorderLayout.centerAbsolute(
                                BoxLayout.encloseY(
                                   lab,
                                   new Label("", "SubTitle")
                                   
                                )
                            ).add(BorderLayout.WEST, profilePicLabel)
               );
        cntb.addAll(back);
        cntee.addAll(cntb,titleCmp);
        add(cntee);
        


        
//        ImageViewer imgres = new ImageViewer(res.getImage("resradmin.png"));
   
        TextField tfnbpers = new TextField("","");
        tfnbpers.getAllStyles().setFgColor(0x339bff);
        
          
        ComboBox listeeven=new ComboBox();
    

        try
        {
            for ( Evenement even:ServiceReservation.getInstance().getAllEvenement())
                listeeven.addItem(even.getId()+":"+even.getDesc_even());
                
                
        }catch(Exception e){}


        Button btnValider = new Button("Valider");
        btnValider.setUIID("LoginButton");
        btnValider.getAllStyles().setBgColor(0x339bff);
        btnValider.setPreferredSize(new Dimension(450,100));

        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                 
               //contrôle de saisie
               
                boolean n=true;
                String ch=tfnbpers.getText().toString().toUpperCase();
                for(int i=0;i<ch.length();i++)
                    if((ch.charAt(i)<'0')||(ch.charAt(i)>'9'))
                            n=false;
                
                if ((tfnbpers.getText().length()==0))
                    Dialog.show("Alert", "Veuiller saisir le nombre de personne", new Command("OK"));
                else if(n==false)     
                    Dialog.show("Alert", "Veuiller saisir un nombre positif", new Command("OK"));
                else
                    
                {    //recherche du nombre de places disponibles pour l'évènement avant d'ajouter
                    
//                   User user=ServiceReservation.getInstance().getUser2(1);
//        Label lusername=new Label(user.getEmail());
                     
                    
                    Reservation r = new Reservation( Integer.parseInt(tfnbpers.getText()));     
                    
                         String chx=listeeven.getSelectedItem().toString();
                         String evenid=chx.substring(0,chx.indexOf(":"));
                         int idev =(int) Float.parseFloat(evenid);
                        for ( Evenement even:ServiceReservation.getInstance().getAllEvenement())
                            if(even.getId()==idev)
                                 evenchoisi=even;
                        if(evenchoisi.getNbre_place()==0)
                            Dialog.show("Désolé","Aucune place pour cet évènement",new Command("OK"));
                        else if(evenchoisi.getNbre_place()<r.getNbPersonne())
                              Dialog.show("Désolé","Cher client, il ne reste que "+evenchoisi.getNbre_place()+" places pour cet évènement",new Command("OK"));
                        else if( ServiceReservation.getInstance().addReservation(r,evenid))
                        {
                          Dialog.show("Succès", "Réservation et devis créés", new Command("OK"));
             
                          ToastBar.showMessage("Devis", FontImage.MATERIAL_DEVICES);
                         new devisForm(current).show();
              
                        }
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
              
                  
                    
                }
                
                
            }
        });
        
         Button listeresuser = new Button("consultez vos réservation");
         FontImage.setMaterialIcon(listeresuser, FontImage.MATERIAL_VIEW_LIST, 4);
         listeresuser.addActionListener(e -> new reservUserForm(current).show());
            
         Label nbpers = new Label("Nombre de personne:");
                
         Label evene = new Label("Evènement:");

                 
        Container cnt1= new Container(BoxLayout.x());
        Container cnt2= new Container(BoxLayout.x());
        cnt1.addAll(nbpers,tfnbpers);
        cnt2.addAll(evene,listeeven);
         add(cnt1);
         add(cnt2);
         add(btnValider);
         add(listeresuser);
        

  
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> previous.showBack()); // Revenir vers l'interface précédente
                
    }
    
    
}


