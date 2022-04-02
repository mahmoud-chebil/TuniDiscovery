package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.entities.Activite;
import com.mycompany.myapp.entities.Evenement;
import com.mycompany.myapp.services.ServiceActivity;
import com.mycompany.myapp.services.ServiceEvent;

/**
 *
 * @author IDIZUOB
 */
public class UpdateEventForm extends Form{
    
     public UpdateEventForm(Evenement Evt , Form previous) {
        setTitle("Modifier  Activite");
        setLayout(BoxLayout.y());
        
        
        Label tfTitrel = new Label("Titre ");
        TextField tfTitre = new TextField(Evt.getNbre_places());
        
        Label tfDesc1 = new Label("Description ");
        TextField tfDesc = new TextField(Evt.getDecription_evenement());
        
        Label tfPlace1 = new Label("Nombre de Places ");
        TextField tfPlace = new TextField(Evt.getPrix_evenement());
        
        Label tfPrix1 = new Label("Prix ");
        TextField tfPrix = new TextField(Evt.getPrix_evenement());
        
        Label tfDebut1 = new Label("Date Debut ");
        TextField tfDebut = new TextField(Evt.getDate_debut());
        
        Label tfFin1 = new Label("Date Fin ");
        TextField tfFin = new TextField(Evt.getDate_fin());
        
        Label tfTel1 = new Label("Phone");
        TextField tfTel = new TextField(Evt.getTel());
        
        Label tfEmail1 = new Label("Email");
        TextField tfEmail = new TextField(Evt.getEmail());
        
        ComboBox tftypes=new ComboBox();
         try {
           for(Activite a : ServiceActivity.getInstance().getAllAcitivities()){
               
               tftypes.addItem(a.getId());
           }
           } catch (Exception e) {
       }
         
        
        
        Button btnValider = new Button("Modifier");
         addAll(tfTitrel ,tfTitre,tfDesc1,tfDesc,tfPlace1,tfPlace,tfTel1,tfTel,tfEmail1,tfEmail,tfPrix1,tfPrix,tfDebut1,tfDebut,tfFin1,tfFin
                 ,tftypes,btnValider);
        
         
         
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e->  new ListEventsForm(previous).show());



        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evta) {
                if ((tfTitre.getText().length()==0)||(tfDesc.getText().length()==0)||(tfPlace.getText().length()==0)
                        ||(tfPrix.getText().length()==0)||(tfDebut.getText().length()==0)
                        ||(tfFin.getText().length()==0)||(tfTel.getText().length()==0)||(tfEmail.getText().length()==0) ) {
                    Dialog.show("Alert", "Les champs sont vides , Veuillez les remplir", new Command("OK"));
                } 
                else {
                    try {
                        Evt.setId(Evt.getId());
                        Evt.setTitre_evenement(tfTitre.getText());
                        Evt.setDecription_evenement(tfDesc.getText());
                        Evt.setPrix_evenement((Integer.parseInt(tfPrix.getText())));
                        Evt.setDate_debut(tfDebut.getText());
                        Evt.setDate_fin(tfFin.getText());
                        Evt.setTel((Integer.parseInt(tfTel.getText())));
                        Evt.setEmail(tfEmail.getText());
                        
                       
                        ServiceEvent.getInstance().updateEvent(Evt,tftypes.getSelectedItem().toString());

                        Dialog.show("", " modifié avec succès", new Command("OK"));

                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Price must be a number", new Command("OK"));
                    }

                }


           }
            
            
     
    });
        

    }
     
    
}
