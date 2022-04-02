/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;
import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.plaf.UIManager;
import com.mycompany.myapp.entities.Product;
import com.company.myapp.services.ServiceProduit;
import com.codename1.ui.util.Resources;
import com.company.myapp.services.ServiceCommande;

import com.mycompany.myapp.gui.UpdateCommandForm;
import com.company.myapp.services.ServiceProduit;
import com.mycompany.myapp.entities.Commande;
import com.mycompany.myapp.entities.Cart;
import com.mycompany.myapp.entities.Product;
import com.mycompany.myapp.entities.Cart;
import java.util.ArrayList;
import java.util.List;
import com.mycompany.myapp.SideMenuBaseForm;
/**

/**
 *
 * @author poste 1
 */
public class ListCommandeForm extends SideMenuBaseForm{
    Resources theme;
    String ss="";
    Form current;
ArrayList<Commande> c;
    public ListCommandeForm(Form previous) {
        current = this;
        setLayout(BoxLayout.y());
        theme = UIManager.initFirstTheme("/theme");

       
   Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
     
        Button menuButton = new Button("");
        menuButton.setUIID("Title");
       // FontImage.setMaterialIcon(menuButton, FontImage.MATERIAL_MENU);
        menuButton.addActionListener(e -> getToolbar().openSideMenu());
         

        Container titleCmp = BoxLayout.encloseY(
                        FlowLayout.encloseIn(menuButton),
                        BorderLayout.centerAbsolute(
                                BoxLayout.encloseY(
                                    new Label("Liste Des Commandes", "Title")
                                )
                            )
                );
        
        
//        FloatingActionButton fab = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);
//        fab.getAllStyles().setMarginUnit(Style.UNIT_TYPE_PIXELS);
  //      fab.getAllStyles().setMargin(BOTTOM, completedTasks.getPreferredH() - fab.getPreferredH() / 2);
        tb.setTitleComponent(titleCmp);
     
        Label Labfiltrer = new Label("Filter par :");
        ComboBox list = new ComboBox();
        list.addItem("Tous les Commandes");
        
        addAll(Labfiltrer, list);

        list.addActionListener((e) -> {
            if (list.getSelectedIndex() == 0) {

                new ListCommandeForm(previous).show();
            }

           

        });

        for (Commande c : ServiceCommande.getInstance().getAllCommandes()) {

            Label tfname = new Label();
            tfname.setText("Nom : " + c.getNom());
            tfname.getAllStyles().setFgColor(0x149414);
            Label tfpre = new Label();
            tfpre.setText("Prenom : " +c.getPrenom());
            Label tfadr = new Label();
            tfadr.setText("Adresse_complet : " +c.getAdressecomplet());
             Label tfnum = new Label();
            tfnum.setText("Numéro de teléphone : " +c.getTelephone());
             Label tfemail = new Label();
            tfemail.setText("Email : " +c.getEmail());
          
            
            Container cnt1 = new Container(BoxLayout.x());
            Container cnt2 = new Container(BoxLayout.y());
            Container cnt3 = new Container(BoxLayout.x());
            Button tfdelete = new Button(FontImage.MATERIAL_DELETE);
            Button tfShowSingle = new Button("Détails");
            Button tfModifier = new Button("Modifier");
Button tfpanier = new Button(FontImage.MATERIAL_SHOPPING_CART);
             cnt3.addAll(tfShowSingle, tfModifier, tfdelete,tfpanier);
            cnt2.addAll(tfname, tfpre,tfadr,tfnum,tfemail);
            
            cnt1.add(cnt2,cnt3);
            add(cnt1);
             tfpanier.addActionListener((e) -> {
       
               ServiceProduit.getInstance().getAllProduits();
               new ShopForm(current).show(); 

            });
            
           tfdelete.addActionListener((e) -> {
                if (Dialog.show("Alert", "Voulez vous supprimer la Commande  " + c.getId()+ " !!", "OK", "Cancel")) {
                    if (ServiceCommande.getInstance().supprimercommande(c.getId())) {
                        ToastBar.showMessage("La commande a été supprimé", FontImage.MATERIAL_WARNING);
                        ServiceCommande.getInstance().getAllCommandes();
                        new ListCommandeForm(previous).show();
                    } else {
                        new ListCommandeForm(previous).show();
                    }
                }

            });
            tfShowSingle.addActionListener((e) -> {

                ServiceCommande.getInstance().getAllCommandes();
                        

               new ShowSingleForm(c, current).show(); 

            });
  try {
            tfModifier.addActionListener((e1) -> {
              
               
                new UpdateCommandForm(c, current).show();
                   
               
            });                     
             } catch (Exception e) {System.out.println(e.getMessage());
                }
 
}
     // getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
   
    
     setupSideMenu(theme);   
    

   
}

    @Override
    protected void showOtherForm(Resources res) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

}
