/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

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
import java.util.List;

/**
 *
 * @author Raef
 */
public class UpdateCommandForm extends Form {
  Resources theme;

   
  
  public  UpdateCommandForm(Commande c, Form previous) {
          theme = UIManager.initFirstTheme("/theme");
        setTitle("Modifier  Commande");
        setLayout(BoxLayout.y());
        Label tfNom1 = new Label("Nom");
        TextField tfNom = new TextField(c.getNom());
        Label tfpre1 = new Label("Prénom");
        TextField tfpre = new TextField(c.getPrenom());
        Label tfadr1 = new Label("Adresse complet");
        TextField tfadr = new TextField(c.getAdressecomplet());
         Label tfnum1 = new Label("Numéro de Téléphone");
        TextField tfnum = new TextField(c.getTelephone());
        Label tfemail1 = new Label("Email");
        TextField tfemail = new TextField(c.getEmail());
       
        Button btnValider = new Button("Modifier");

        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfNom.getText().length() == 0) || (tfpre.getText().length() == 0) || (tfadr.getText().length() == 0) || (tfnum.getText().length() == 0) || (tfemail.getText().length() == 0)){
                    Dialog.show("Alert", "Les champs sont vides , Veuillez les remplir", new Command("OK"));
                } else {
                    try {
                        c.setId(c.getId());
                        c.setNom(tfNom.getText());
                        c.setPrenom(tfpre.getText());
                        c.setAdressecomplet(tfadr.getText());
                        c.setTelephone(tfnum.getText());
                  
                        c.setEmail(tfemail.getText());
                        ServiceCommande.getInstance().UpdateCommande(c);

                        Dialog.show("", "La commande a été modifié avec succès", new Command("OK"));

                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Telephone must be a number", new Command("OK"));
                    }

                }

            }
        });

        addAll(tfNom1,tfNom, tfpre1,tfpre, tfadr1,tfadr, tfnum1,tfnum, tfemail1, tfemail);
     //add(tftel);
        add(btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> new ListCommandeForm(previous).show());

    }

}
