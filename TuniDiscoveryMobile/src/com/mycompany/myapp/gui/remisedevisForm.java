/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.components.ImageViewer;
import com.codename1.components.ToastBar;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import static com.codename1.ui.Component.CENTER;
import static com.codename1.ui.Component.LEFT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.table.TableLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.HomeForm;
import com.mycompany.myapp.entities.Evenement;
import com.mycompany.myapp.entities.Reservation;
import com.mycompany.myapp.services.ServiceReservation;

/**
 *
 * @author Lenovo
 */
public class remisedevisForm extends Form {
    

        Form current;
         Resources res;
         String remise,id;


 public remisedevisForm(Form previous,Reservation r) 
 {
          
         setLayout(BoxLayout.y());
         
   
         
         
        res = UIManager.initFirstTheme("/theme");   
         
        current = this;    
        
         Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
        
        Container cntb=new Container(new FlowLayout(LEFT,CENTER));    
       
         Container cnt=new Container(BoxLayout.y()); 
        Image profilePic = res.getImage("ppp.png");
        Image mask = res.getImage("round-mask.png");
        profilePic = profilePic.fill(mask.getWidth(), mask.getHeight());
        Label profilePicLabel = new Label(profilePic, "ProfilePicTitle");
        profilePicLabel.setMask(mask.createMask());
       
        Label lab=new Label("Devis N° "+r.getDevis().idtoString(), "Title");
        lab.getAllStyles().setFgColor(0x66CC99);

        Container titleCmp = BoxLayout.encloseY(
                        BorderLayout.centerAbsolute(
                                BoxLayout.encloseY(
                                   lab,
                                   new Label("", "SubTitle")
                                   
                                )
                            ).add(BorderLayout.WEST, profilePicLabel)
               );
        cnt.addAll(cntb,titleCmp);
        add(cnt);
        
         
       Label lremise = new Label("Remise:");
        Label pourc = new Label(" % ");
            
       TextField tfremise = new TextField("0","");  
       tfremise.getAllStyles().setFgColor(0x339bff);
 
        Button btnValider = new Button("Valider");
        btnValider.setUIID("LoginButton");
        btnValider.getAllStyles().setBgColor(0x339bff);
        btnValider.setPreferredSize(new Dimension(450,100));

        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                 
               //contrôle de saisie
                remise=tfremise.getText().toString();
                id=r.getDevis().idtoString();
                boolean n=true;
                String ch=tfremise.getText().toString().toUpperCase();
                for(int i=0;i<ch.length();i++)
                    if((ch.charAt(i)<'0')||(ch.charAt(i)>'9'))
                            n=false;
                float remint= Float.parseFloat(tfremise.getText());
                if ((tfremise.getText().length()==0))
                    Dialog.show("Alert", "Veuiller saisir la reemise", new Command("OK"));
                else if(n==false)     
                    Dialog.show("Alert", "Veuiller saisir un nombre", new Command("OK"));
                else if ((remint<=0)||(remint>=100))
                     Dialog.show("Alert", "Veuiller saisir un nombre entre 0 et 100", new Command("OK"));
                else if  ( ServiceReservation.getInstance().effectuerRemise(remise,id))
                        {
                          Dialog.show("Succès", "Remise effectuée avec succès", new Command("OK"));
             
                          ToastBar.showMessage("Remise", FontImage.MATERIAL_DEVICES);
                         new listedevisForm(current).show();
                        }
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));

            } 
                
            });
        

            

                 
          Container cnt11=new Container(new TableLayout(1, 3));
        Container cnt2= new Container(BoxLayout.xCenter());
        cnt11.addAll(lremise,tfremise,pourc);
        cnt2.addAll(btnValider);
         add(cnt11);
         add(cnt2);
     
     
        

  
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> previous.showBack()); // Revenir vers l'interface précédente
                
    }
    
    
}
