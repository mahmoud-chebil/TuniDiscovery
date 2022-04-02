
package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
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
public class AddEventForm extends Form{

    public AddEventForm(Form previous) {

        setTitle("Ajouter Un Evenement");
        setLayout(BoxLayout.y());
        
        TextField evTitle = new TextField("","EventTitle");
        TextField evDesc = new TextField("","EventDescription");
        TextField evPlaces= new TextField("", "Nombre de Places");
        TextField evPhone= new TextField("", "Phone Number");
        TextField evEmail= new TextField("", "Email");
        TextField evPrice= new TextField("", "Price");
        TextField evDateDebut= new TextField("", "Date Debut");
        TextField evDateFin= new TextField("", "Date Fin");

        
        ComboBox tftypes=new ComboBox();
         try {
           for(Activite a : ServiceActivity.getInstance().getAllAcitivities()){
               
               tftypes.addItem(a.getId());
           }
           } catch (Exception e) {
       }
         
        Button btnValider = new Button("Ajouter");
        
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((evTitle.getText().length()==0)||(evDesc.getText().length()==0)||(evPlaces.getText().length()==0)
                        ||(evPhone.getText().length()==0)||(evEmail.getText().length()==0)||(evPrice.getText().length()==0))
                    Dialog.show("Alert", "Les champs sont vides , Veuillez les remplir", new Command("OK"));
                else
                {
                    try {
                        Evenement ev = new Evenement(Integer.parseInt(evPrice.getText()),evDesc.getText(),evTitle.getText(), Integer.parseInt(evPlaces.getText()), 
                                evDateDebut.getText(), evDateFin.getText(),Integer.parseInt(evPhone.getText()), evEmail.getText());
                        if( ServiceEvent.getInstance().addEvent(ev,tftypes.getSelectedItem().toString()))
                            Dialog.show("Success","Ajouter Avec Succés",new Command("OK"));
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }
                    
                }
                
                
            }
        });
        
        addAll(evTitle,evDesc,evPlaces,evPhone,evEmail,evPrice,evDateDebut,evDateFin ,tftypes, btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> previous.showBack()); // Revenir vers l'interface précédente
                
    }
    
    
}
