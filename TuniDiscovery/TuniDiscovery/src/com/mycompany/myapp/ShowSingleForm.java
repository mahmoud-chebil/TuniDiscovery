/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;


import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Product;

/**
 *
 * @author MSI
 */
public class ShowSingleForm extends Form{
    Resources theme;

    ShowSingleForm(Product p,Form previous) {
        theme = UIManager.initFirstTheme("/theme");
      setTitle("Détails du produit");
        setLayout(new FlowLayout(CENTER,BRB_CONSTANT_ASCENT));
        Container cont=new Container(BoxLayout.y());
       
            Label lbprix=new Label("Prix : "+p.getPrice()+" DT");
            Label lbNom=new Label("Nom : "+p.getName());
            Label lbcat=new Label("Catégorie : "+p.getCategory_id());
            Label lbdesc=new Label("Déscription : "+p.getDescription());
        
        cont.add(lbprix);
        
        cont.add(lbNom);
        cont.add(lbcat);
        cont.add(lbdesc);
        
        add(cont);
        
         getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
    }
    
}
