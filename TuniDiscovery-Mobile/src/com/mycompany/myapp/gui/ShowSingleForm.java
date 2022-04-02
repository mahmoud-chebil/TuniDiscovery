/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.components.ImageViewer;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Product;
import com.mycompany.myapp.entities.Commande;
/**
 *
 * @author Raef
 */
public class ShowSingleForm extends Form{
    Resources theme;

    ShowSingleForm(Commande c,Form previous) {
        theme = UIManager.initFirstTheme("/theme");
      setTitle("Détails de commande");
        setLayout(new FlowLayout(CENTER,BRB_CONSTANT_ASCENT));
        Container cont=new Container(BoxLayout.y());
         Label tfname = new Label();
             
           
            Label lbNom=new Label("Nom : "+c.getNom());
            Label lbpre=new Label("Prénom : "+c.getPrenom());
            Label lbadr=new Label("Adresse_complet : "+c.getAdressecomplet());  
            Label lbtlf=new Label("Numéro de telephone : "+c.getTelephone());
            Label lbmail=new Label("Email : "+c.getEmail());
            Label lbtot=new Label("Total : "+c.getTotal());
            
            Label lbetat=new Label("Etat : "+c.getEtat());
        
        cont.add(lbNom);
        cont.add(lbpre);
        cont.add(lbadr);
        cont.add(lbtlf);
        cont.add(lbmail);
        cont.add(lbtot);
        cont.add(lbetat);
        
        add(cont);
        
         getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
    }
    
}
