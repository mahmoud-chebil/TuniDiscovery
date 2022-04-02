/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;

import com.codename1.ui.*;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.TypeProduct;
import com.mycompany.myapp.myapp.services.ServiceType;

/**
 *
 * @author MSI
 */
public class UpdateCategoryForm extends Form {
  Resources theme;
    UpdateCategoryForm(TypeProduct p, Form previous) {
          theme = UIManager.initFirstTheme("/theme");
        setTitle("Modifier  produit");
        setLayout(BoxLayout.y());
        
        Label tfNamel = new Label("Nom ");
        TextField tfName = new TextField(p.getName());

        


        Button btnValider = new Button("Modifier");

        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (tfName.getText().length() == 0) {
                    Dialog.show("Alert", "Les champs sont vides , Veuillez les remplir", new Command("OK"));
                } else {
                    try {
                        p.setId(p.getId());
                        p.setName(tfName.getText());

                      
//                        p.setTel(Integer.parseInt(tftel.getText()));
                        ServiceType.getInstance().updateCategorie(p);

                        Dialog.show("", "Le produit a été modifié avec succès", new Command("OK"));

                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Price must be a number", new Command("OK"));
                    }

                }

            }
        });

        addAll(tfNamel,tfName);
        add(btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> new ListProduct_AdminForm(previous).show());

    }

}