/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

;

import com.codename1.io.Log;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import static com.codename1.ui.Component.CENTER;
import static com.codename1.ui.Component.LEFT;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Toolbar;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.HomeForm;
import com.mycompany.myapp.entities.*;
import com.mycompany.myapp.services.ServiceReservation;



/**
 *
 * @author bhk
 */
public class devisselectionneForm extends Form{

     Form current;
     Resources res;
     int idr;
     SimpleDateFormat formater = new SimpleDateFormat("yyyy-MM-dd");
  
       public devisselectionneForm(Form previous,Reservation resinser) {
         
      
        current = this; //Récupération de l'interface(Form) en cours   
       
        res = UIManager.initFirstTheme("/theme");
        
        setLayout(BoxLayout.y());
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());

        Container cnt=new Container(BoxLayout.y()); 
       

        Container cntb=new Container(new FlowLayout(LEFT,CENTER));

        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
        
        Image profilePic = res.getImage("logo.JPG");
        Label lab=new Label("TuniDiscovery", "Title");
        lab.getAllStyles().setFgColor(0x66CC99);
       
        Container cntx1= new Container(BoxLayout.x());
        cntx1.add(profilePic);
        cntx1.add(lab);
            
        add(cntx1);
           
         
        Container cntuser= new Container(BoxLayout.xRight());
        Label name=new Label(resinser.getUser().getUserName());
        cntuser.add(name);
        add(cntuser);

        Container cntusermail= new Container(BoxLayout.xRight());
        Label mail=new Label(resinser.getUser().getEmail());
        cntusermail.add(mail);
        add(cntusermail);
                  
        Container cnt1= new Container(BoxLayout.x());
        Label labd=new Label("Devis N° ");
        labd.getAllStyles().setFgColor(0x339bff);
        Label iddev=new Label(Integer.toString(resinser.getDevis().getId())); 
        cnt1.addAll(labd,iddev);
        add(cnt1);
        
        Container cntl= new Container(BoxLayout.xCenter());
        Label ligne = new Label("________________________________________________________________");
        cntl.addAll(ligne);
        add(cntl);

         
        Container cntdr= new Container(BoxLayout.x());
        Label lbdr=new Label("Date de réservation: ");
        lbdr.getAllStyles().setFgColor(0x339bff);
        Label lbdater=new Label(formater.format(resinser.getDateres())); 
        cntdr.addAll(lbdr,lbdater);
        add(cntdr);
        
        
        Container cntev= new Container(BoxLayout.x());
        Label lbe=new Label("Evènement: ");
        lbe.getAllStyles().setFgColor(0x339bff);
        Label lbeven=new Label(resinser.getEven().getDesc_even()); 
        cntev.addAll(lbe,lbeven);
        add(cntev);
        
        Container cntdd= new Container(BoxLayout.x());
        Label lbdd=new Label("Date de début: ");
        lbdd.getAllStyles().setFgColor(0x339bff);
        Label lbdated=new Label(formater.format(resinser.getEven().getDate_debut())); 
        cntdd.addAll(lbdd,lbdated);
        add(cntdd);
        

        Container cntdf= new Container(BoxLayout.x());
        Label lbdf=new Label("Date de fin: ");
        lbdf.getAllStyles().setFgColor(0x339bff);
        Label lbdfin=new Label(formater.format(resinser.getEven().getDate_fin()));
        cntdf.addAll(lbdf,lbdfin);
        add(cntdf);
        
        Container cntl2= new Container(BoxLayout.xCenter());
        Label ligne2 = new Label("__________________________");
        ligne2.getAllStyles().setFgColor(0x339bff);
        cntl2.addAll(ligne2);
        add(cntl2);

   
        Container cntx= new Container(BoxLayout.x());

        Container cny1= new Container(BoxLayout.y());

        
        Label lb1=new Label("Nombre de personne : ");
        lb1.getAllStyles().setFgColor(0x339bff);
        Label lb2=new Label("Prix Unitaire : ");
        lb2.getAllStyles().setFgColor(0x339bff);    
        Label lb3=new Label("Total à payer : ");
        lb3.getAllStyles().setFgColor(0x339bff);
        cny1.addAll(lb1,lb2,lb3);

        
        Container cny2= new Container(BoxLayout.y());

             
        Label lbn=new Label(Integer.toString(resinser.getNbPersonne()));
        Label lbpu=new Label(Float.toString(resinser.getEven().getPrix_even()));
        Label lbtot=new Label(Float.toString(resinser.getDevis().getPrixTot()));
        cny2.addAll(lbn,lbpu,lbtot);
        cntx.addAll(cny1,cny2);
                
        add(cntx);

        
          


    }
    
    
}

    
       