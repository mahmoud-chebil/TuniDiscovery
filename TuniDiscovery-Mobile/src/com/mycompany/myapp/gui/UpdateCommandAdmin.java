/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import static com.codename1.push.PushContent.setTitle;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Product;
import com.mycompany.myapp.entities.Commande;
import com.company.myapp.services.ServiceCommande;
import com.mycompany.myapp.utils.*;
import java.util.Collections;
import java.util.List;

/**
 *
 * @author poste 1
 */
public class UpdateCommandAdmin extends Form{
    Resources theme;

   
  
  public  UpdateCommandAdmin(Commande c, Form previous) {
          theme = UIManager.initFirstTheme("/theme");
        setTitle("Modifier  Commande");
        setLayout(BoxLayout.y());
        Label tfetat1 = new Label("Etat");
        TextField tfetat = new TextField((int) c.getEtat());
       
        
//        Label tftel1 = new Label("Téléphone");
     // TextField tftel = new TextField(p.getTel());

        Button btnValider = new Button("Modifier");

        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfetat.getText().length() == 0)){
                    Dialog.show("Alert", " Veuillez les remplir", new Command("OK"));
                } else {
                    try {
                        c.setId(c.getId());
                        c.setEtat(Integer.parseInt(tfetat.getText()));
                        
                        ServiceCommande.getInstance().UpdateCommandeAdmin(c);
if (c.getEtat()==1){
            Dialog.show("", "La commande a été Traitée avec succès", new Command("OK"));
        }
                       
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Telephone must be a number", new Command("OK"));
                    }

                }

            }
        });

        
       
        addAll(tfetat1,tfetat);
   
        add(btnValider);
        if (c.getEtat()==1){
        new ListCommandeAdminForm(previous).show();
        String message="We are Taland team:\n" +
                                        "\n" +
                                        "Hi "+c.getNom()+c.getPrenom()+", Nous voulons vous informer par le présent mail "+"("+c.getEmail()+") que votre commande a été traitée avec succées\n" +
                                        " + confirm   Here";
       // Email email=new Email( "tunidiscovery2@gmail.com",  "TuniDiscovery!",  c.getEmail(),  "TuniDiscoveryteam",  message);
        }
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> new ListCommandeAdminForm(previous).show());

    }

    
}

    

