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
import com.mycompany.myapp.entities.TypeProduct;
import com.mycompany.myapp.myapp.services.ServiceType;


/**
 *
 * @author MSI
 */
public class AddCategoryForm extends Form{

    public AddCategoryForm(Form previous) {

        setTitle("Ajouter un categorie");
        setLayout(BoxLayout.y());
        TextField tfName = new TextField("","Nom");

       
       
        

   
         

       
       // add(listens);
        
        
        Button btnValider = new Button("Ajouter");
        
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfName.getText().length()==0)||(tfName.getText().length()==0))
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                else
                {
                    try {
                        TypeProduct t = new TypeProduct(tfName.getText());
                       
                       
               
                        if( ServiceType.getInstance().addCategorie(t))
                            Dialog.show("Success user added","Category added ",new Command("OK"));
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }
                    
                }
                
                
            }
        });
        
        addAll(tfName,btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> previous.showBack()); // Revenir vers l'interface précédente
                
    }
    
    
}
