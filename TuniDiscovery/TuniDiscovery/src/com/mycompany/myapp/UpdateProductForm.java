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
import com.mycompany.myapp.entities.Product;
import com.company.myapp.services.ServiceProduit;
import com.mycompany.myapp.entities.TypeProduct;
import com.mycompany.myapp.myapp.services.ServiceType;

/**
 *
 * @author MSI
 */
public class UpdateProductForm extends Form {
  Resources theme;

   
  
  public  UpdateProductForm(Product p, Form previous) {
          theme = UIManager.initFirstTheme("/theme");
        setTitle("Modifier  produit");
        setLayout(BoxLayout.y());
        Label tfNom1 = new Label("Nom");
        TextField tfNom = new TextField(p.getName());

        Label tftypes1 = new Label("Catégorie");

      ComboBox tftypes = new ComboBox();
      try {
          for(TypeProduct tp : ServiceType.getInstance().getAllTypes()){

              tftypes.addItem(tp.getId()+tp.getName());
          }
      } catch (Exception e) {
      }



      Label tfPrix1 = new Label("Prix");
        TextField tfPrix = new TextField(p.getPrice());


        Button btnValider = new Button("Modifier");

        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfNom.getText().length() == 0) || (tfPrix.getText().length() == 0)) {
                    Dialog.show("Alert", "Les champs sont vides , Veuillez les remplir", new Command("OK"));
                } else {
                    try{
                        p.setId(p.getId());
                        p.setName(tfNom.getText());


                   
                        p.setPrice(tfPrix.getText());
//
                        ServiceProduit.getInstance().UpdateProduit(p,tftypes.getSelectedItem().toString());

                        Dialog.show("", "Le produit a été modifié avec succès", new Command("OK"));

                } catch (NumberFormatException e) {
                    Dialog.show("ERROR", "Price must be a number", new Command("OK"));
                }

                }

            }
        });

        addAll(tfNom1,tfNom,tftypes,tftypes1,tfPrix1,tfPrix);

        add(btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> new ListProductForm(previous).show());

    }

}
