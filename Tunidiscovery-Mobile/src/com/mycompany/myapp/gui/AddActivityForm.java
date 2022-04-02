
package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.entities.Activite;
import com.mycompany.myapp.services.ServiceActivity;


/**
 *
 * @author IDIZUOB
 */
public class AddActivityForm extends Form{
    
     public AddActivityForm(Form previous) {
  
        setTitle("Ajouter Activite");
        setLayout(BoxLayout.y());
        
        TextField aNom = new TextField("","Nom Activite");
        TextField aType = new TextField("","Type Activite");
        TextField aPrix= new TextField("", "Prix Activite");
        Button btnValider = new Button("Ajouter");
        
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((aNom.getText().length()==0)||(aType.getText().length()==0)||(aPrix.getText().length()==0))
                    Dialog.show("Alert", "Les champs sont vides , Veuillez les remplir", new Command("OK"));
                else
                {
                    try {
                        Activite ac = new Activite(aNom.getText(), aType.getText(), Integer.parseInt(aPrix.getText()));
                        if( ServiceActivity.getInstance().addActivity(ac))
                            Dialog.show("Success","Ajouter Avec Succés",new Command("OK"));
                            
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Prix must be a number", new Command("OK"));
                    }
                    
                }
                
                
            }
        });
        
        addAll(aNom,aType,aPrix, btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> previous.showBack()); // Revenir vers l'interface précédente
                
    }
    
    
}
