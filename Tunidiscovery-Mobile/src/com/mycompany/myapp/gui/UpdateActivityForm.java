
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
import com.mycompany.myapp.services.ServiceActivity;

/**
 *
 * @author IDIZUOB
 */
public class UpdateActivityForm extends Form{

    public UpdateActivityForm(Activite Act , Form previous) {
        setTitle("Modifier  Activite");
        setLayout(BoxLayout.y());
        
        
        Label tfNamel = new Label("Nom ");
        TextField tfName = new TextField(Act.getNom_activite());
        
        Label tfTypeAct1 = new Label("Type ");
        TextField tfTypeAct = new TextField(Act.getType_activite());
        
        Label tfPrix1 = new Label("Prix ");
        TextField tfPrix = new TextField(Act.getPrix_activite());
        
               ComboBox tftypes=new ComboBox();
         try {
           for(Activite tp : ServiceActivity.getInstance().getAllAcitivities()){
               
               tftypes.addItem(tp.getId());
           }
           } catch (Exception e) {
       }
        
        
        Button btnValider = new Button("Modifier");
               addAll(tfNamel,tfName,tfTypeAct1,tfTypeAct,tfPrix1,tfPrix,btnValider);

        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e->  new ListActivityForm(previous).show());

        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfName.getText().length() == 0) || (tfTypeAct.getText().length() == 0)|| (tfPrix.getText().length() == 0) ) {
                    Dialog.show("Alert", "Les champs sont vides , Veuillez les remplir", new Command("OK"));
                } else {
                    try {
                        Act.setId(Act.getId());
                        Act.setNom_activite(tfName.getText());
                        Act.setType_activite(tfTypeAct.getText());
                        Act.setPrix_activite((Integer.parseInt(tfPrix.getText())));
                       
                        ServiceActivity.getInstance().updateActivite(Act);

                        Dialog.show("", "Modifié avec succès", new Command("OK"));

                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Price must be a number", new Command("OK"));
                    }

                }

            }
        });

    }
            
    
    
}
