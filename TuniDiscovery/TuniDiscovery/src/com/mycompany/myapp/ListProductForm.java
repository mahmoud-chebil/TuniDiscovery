/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;

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
import com.mycompany.myapp.SideMenuBaseForm;
import com.mycompany.myapp.UpdateProductForm;

/**
 *
 * @author MSI
 */
public class ListProductForm extends SideMenuBaseForm {

    Resources theme;
    Form current;

    public ListProductForm(Form previous) {

        current = this;
        setLayout(BoxLayout.y());
        theme = UIManager.initFirstTheme("/theme");
    
       
   Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
     
        Button menuButton = new Button("");
        menuButton.setUIID("Title");
        FontImage.setMaterialIcon(menuButton, FontImage.MATERIAL_MENU);
        menuButton.addActionListener(e -> getToolbar().openSideMenu());
        
        
        
        

        Container titleCmp = BoxLayout.encloseY(
                        FlowLayout.encloseIn(menuButton),
                        BorderLayout.centerAbsolute(
                                BoxLayout.encloseY(
                                    new Label("Nos produits", "Title")
                                )
                            )
                );
        
        

        tb.setTitleComponent(titleCmp);
        
        
        
        
        
        
        Label Labfiltrer = new Label("Filter par :");
        ComboBox list = new ComboBox();
        list.addItem("Tous les produits");
        list.addItem("prix élevé -> prix bas");
        list.addItem("prix bas -> prix prix élevé");
        addAll(Labfiltrer, list);

        list.addActionListener((e) -> {
            if (list.getSelectedIndex() == 0) {

                new ListProductForm(previous).show();
            }

           

        });

        for (Product p : ServiceProduit.getInstance().getAllProduits()) {

            Label tfname = new Label();
            tfname.setText("Nom : " + p.getName());
            Label tfprice = new Label();
            tfprice.setText("Prix : " +p.getPrice() + " DT");
            Label tfdesc = new Label();
            tfdesc.setText("Description : " +p.getDescription());
            Container cnt1 = new Container(BoxLayout.x());
            Container cnt2 = new Container(BoxLayout.y());
            Container cnt3 = new Container(BoxLayout.x());
            Button tfdelete = new Button(FontImage.MATERIAL_DELETE);
            Button tfShowSingle = new Button("Détails");
            Button tfModifier = new Button("Modifier");
             Button tfPanier = new Button(FontImage.MATERIAL_ADD_SHOPPING_CART);
             cnt3.addAll(tfShowSingle,tfPanier, tfModifier, tfdelete);
            cnt2.addAll(tfname, tfprice,tfdesc, cnt3);
            

            String urll = "http://localhost/projectpidev/public/uploads/" ;
            EncodedImage enc = EncodedImage.createFromImage(theme.getImage("shoes.jpg").scaled(250, 250), false);

            URLImage urlimg = URLImage.createToStorage(enc, p.getName(), urll);
            ImageViewer image = new ImageViewer(urlimg);
            Image im = image.getImage();

            cnt1.add(im);
            cnt1.add(cnt2);
            add(cnt1);
            tfdelete.addActionListener((e) -> {
                if (Dialog.show("Alert", "Voulez vous supprimer  " + p.getName() + " !!", "OK", "Cancel")) {
                    if (ServiceProduit.getInstance().deleteProduit(p)) {
                        ToastBar.showMessage("Le produit a été supprimé", FontImage.MATERIAL_WARNING);
                        new ListProductForm(previous).show();
                    } else {
                        new ListProductForm(previous).show();
                    }
                }

            });
            tfShowSingle.addActionListener((e) -> {

                ServiceProduit.getInstance().getProduitSingle(p);
                        



            });
  try {
            tfModifier.addActionListener((e1) -> {
              
               
                new UpdateProductForm(p, current).show();
                   
               
            });                     
             } catch (Exception e) {System.out.println(e.getMessage());
                }
 
    tfPanier.addActionListener((e2) -> {
            
            ServiceProduit.getInstance().AddPanierProduit(p);
            
            
            if(ServiceProduit.getInstance().AddPanierProduit(p)){
            
              ToastBar.showMessage("Le produit a été ajouté à votre panier ", FontImage.MATERIAL_INFO);
            
            }
                 
            });
        }

   
    
     setupSideMenu(theme);   
    }

    public ListProductForm(Resources res) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    protected void showOtherForm(Resources res) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

}