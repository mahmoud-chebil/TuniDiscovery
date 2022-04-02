/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;


import com.codename1.ui.util.Resources;
import com.codename1.components.ImageViewer;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import com.codename1.messaging.Message;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Component;
import static com.codename1.ui.Component.BOTTOM;
import static com.codename1.ui.Component.CENTER;
import static com.codename1.ui.Component.LEFT;
import static com.codename1.ui.Component.RIGHT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.InfiniteContainer;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;

import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;

import java.io.IOException;
import java.util.ArrayList;


import com.codename1.payment.Product;
import com.codename1.payment.Purchase;
import com.codename1.payment.Receipt;
import com.codename1.payment.PurchaseCallback;
import com.codename1.payment.ReceiptStore;
import com.codename1.payment.RestoreCallback;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Form;
import com.codename1.ui.plaf.UIManager;
import java.util.*;
import com.company.myapp.services.ServiceProduit;
import com.mycompany.myapp.entities.Commande;
import com.mycompany.myapp.entities.Cart;
import com.mycompany.myapp.entities.User;
import com.company.myapp.services.ServiceCommande;

import com.mycompany.myapp.SideMenuBaseForm;

/**
 *
 * @author Aziz
 */
public class ListCommandeAdminForm extends SideMenuBaseForm  {
    
    
    Resources theme;
    String ss="";
    Form current;
ArrayList<Commande> c;
    public ListCommandeAdminForm(Form previous) {
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
        list.addItem("Commande Traitée");
        list.addItem("Commande Non Traitée");
        addAll(Labfiltrer, list);

        list.addActionListener((e) -> {
            if (list.getSelectedIndex() == 0) {

                new ListCommandeAdminForm(previous).show();
            }

            if (list.getSelectedIndex() == 1) {
                new CommandeTraiteForm(previous).show();

            }
            if (list.getSelectedIndex() == 2) {

                new CommandeNonTraiteForm(previous).show();
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
           Label tfetat = new Label();
            tfetat.setText("Etat : " +c.getEtat());
            
            Container cnt1 = new Container(BoxLayout.x());
            Container cnt2 = new Container(BoxLayout.y());
            Container cnt3 = new Container(BoxLayout.x());
            Button tfdelete = new Button(FontImage.MATERIAL_DELETE);
            Button tfShowSingle = new Button("Détails");
            Button tfModifier = new Button("Modifier");
            cnt2.addAll(tfname, tfpre,tfadr,tfnum,tfemail,tfetat);
            cnt3.addAll(tfShowSingle,tfModifier);
            
            
           
            cnt1.add(cnt3,cnt2);
            add(cnt3);
        
            tfShowSingle.addActionListener((e) -> {

                ServiceCommande.getInstance().getAllCommandes();
                        

               new ShowSingleForm(c, current).show(); 

            });
  try {
            tfModifier.addActionListener((e1) -> {
              
               
                new UpdateCommandAdmin(c, current).show();
                   
               
            });                     
             } catch (Exception e) {System.out.println(e.getMessage());
                }
 
  
}
      getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());

   
}
    
    
    

    @Override
    protected void showOtherForm(Resources res) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
 
    }
     

