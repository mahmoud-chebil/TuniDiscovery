
package com.mycompany.myapp.gui;


import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.services.ServiceEvent;
import com.mycompany.myapp.entities.Evenement;



/**
 *
 * @author IDIZUOB
 */
public class ListEventsForm extends Form{
    Form current;
    public ListEventsForm(Form previous) {
        setTitle("List Events");
        
         for (Evenement evn : ServiceEvent.getInstance().getAllEvents()) {
        Label tfTitre = new Label();
        tfTitre.setText("Titre : " + evn.getTitre_evenement());
        Label tfDesc = new Label();
        tfDesc.setText("Description : " + evn.getDecription_evenement());
        Label tfDebut = new Label();
        tfDebut.setText("Date Debut : " + evn.getDate_debut());
        Label tfFin = new Label();
        tfFin.setText("Date Fin : " + evn.getDate_fin());
        Label tfTel = new Label();
        tfTel.setText("Phone : " + evn.getTel());
        Label tfEmail = new Label();
        tfEmail.setText("Email : " + evn.getEmail());
        Label tfPrix = new Label();
        tfPrix.setText("Prix : " + evn.getPrix_evenement()+ " DT");
        Label tfPlaces = new Label();
        tfPlaces.setText("Nombre des Places : " + evn.getNbre_places());
        
        Container cnt1 = new Container(BoxLayout.y());
            Container cnt2 = new Container(BoxLayout.y());
            Container cnt3 = new Container(BoxLayout.x());
            
            Button tfUpdate = new Button("Modifier");
            Button tfDelete = new Button("Supprimer");
            cnt2.addAll(tfTitre,tfDesc, tfDebut,tfFin,tfTel,tfEmail,tfPrix,tfPlaces,cnt3);
            cnt3.addAll(tfUpdate,tfDelete);
            cnt1.add(cnt2);
            add(cnt1);
            
            //delete
            tfDelete.addActionListener((e) -> {

                ServiceEvent.getInstance().deleteEvent(evn);
                new ListEventsForm(previous).show();
                 
                 
            });
            
            //update
            
                tfUpdate.addActionListener(e-> new UpdateEventForm(evn,current).show());
        
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
        
       
    }
    
    }
}
