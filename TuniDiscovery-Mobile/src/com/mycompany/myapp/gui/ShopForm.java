/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;
import com.codename1.components.FloatingActionButton;
 import com.codename1.components.ImageViewer;
import com.codename1.components.ToastBar;
import com.codename1.ui.Button;
import static com.codename1.ui.CN.getCurrentForm;
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
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;

import java.io.IOException;
import java.util.ArrayList;

import com.company.myapp.services.ServiceProduit;
import com.mycompany.myapp.entities.Commande;
import com.mycompany.myapp.entities.Cart;
import com.mycompany.myapp.entities.Product;
import java.util.List;
import com.codename1.ui.util.Resources;
import java.io.IOException;
import com.mycompany.myapp.SideMenuBaseForm;

/**
 *
 * @author paspo
 */
public class ShopForm extends SideMenuBaseForm{
    Form current;
        ArrayList<Product> listp;

    Resources theme;
     public ShopForm(Form previous) {
      
 current = this;
        setLayout(BoxLayout.y());
        theme = UIManager.initFirstTheme("/theme");
     // new HomeForm(theme).show();
    
       
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

                new ShopForm(previous).show();
            }

           

        });
         Button showCmd = new Button("Commande");
        FontImage.setMaterialIcon(showCmd, FontImage.MATERIAL_ADD_CHART, 3);
        
        showCmd.addActionListener(event -> {
            new ListCommandeForm(current).show();
        });
        ;
  
        Button showPanier = new Button("Panier");
        FontImage.setMaterialIcon(showPanier, FontImage.MATERIAL_SHOPPING_BASKET, 3);
     
       
     
        Container cnt4 = new Container(new LayeredLayout());
        LayeredLayout ll4 = (LayeredLayout)cnt4.getLayout();
        
        cnt4.add(showCmd);
        cnt4.add(showPanier);
        
        ll4.setInsets(showCmd, "auto auto auto 1mm");
        ll4.setInsets(showPanier, "auto auto auto 45mm");
        
        add(cnt4);
        
         showPanier.addActionListener(event -> {
      
               new PanierProduitForm(current, Cart.getInstance().getCartList()).show();

        });
         ArrayList<Product> pd = ServiceProduit.getInstance().getAllProduits();
        for(Product p : pd){
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
         /*   tfdelete.addActionListener((e) -> {
                if (Dialog.show("Alert", "Voulez vous supprimer  " + p.getName() + " !!", "OK", "Cancel")) {
                    if (ServiceProduit.getInstance().deleteProduit(p)) {
                        ToastBar.showMessage("Le produit a été supprimé", FontImage.MATERIAL_WARNING);
                        new ListProductForm(previous).show();
                    } else {
                        new ListProductForm(previous).show();
                    }
                }

            });*/
           /* tfShowSingle.addActionListener((e) -> {

                ServiceProduit.getInstance().getProduitSingle(p);
                        

                new ShowSingleForm(p, current).show(); 

            });*/
 /* try {
            tfModifier.addActionListener((e1) -> {
              
               
                new UpdateProductForm(p, current).show();
                   
               
            });                     
             } catch (Exception e) {System.out.println(e.getMessage());
                }*/
            Container cnt6 = new Container(new LayeredLayout());
            LayeredLayout ll = (LayeredLayout)cnt6.getLayout();
            
            Button addtocartbutton = new Button("Add to cart");
            addtocartbutton.setUIID("LoginButton");
            addtocartbutton.getAllStyles().setBgColor(0x339bff);
            addtocartbutton.setPreferredSize(new Dimension(450,100));
            Button viewitembutton = new Button("View Item");
            viewitembutton.getAllStyles().setBgColor(0x339bff);
            viewitembutton.setPreferredSize(new Dimension(450,100));
            viewitembutton.setUIID("LoginButton");
            FontImage.setMaterialIcon(addtocartbutton, FontImage.MATERIAL_SHOPPING_CART, 3);
            FontImage.setMaterialIcon(viewitembutton, FontImage.MATERIAL_VISIBILITY, 3);
            
            
            cnt6.add(viewitembutton);
            cnt6.add(addtocartbutton);
            ll.setInsets(addtocartbutton, "auto auto auto 30mm");
            ll.setInsets(viewitembutton, "auto auto auto 3mm");

            add(cnt6);          
         
            addtocartbutton.addActionListener(event -> {
               int test = 0 ;
                
                for(Product pi : Cart.getInstance().getC()){
                    if(pi.getName().equals(p.getName())){
                        test = 1;
                         
                       
                    }
                    
                }
                
                if(test == 0){
                    Product pp = new Product(p.getId(),p.getName(),p.getDescription(),p.getPrice(),p.getQuantite());
                    Cart.getInstance().AddProduct(pp);
                     for(Product pi : Cart.getInstance().getC()){
                     if(pi.getName().equals(p.getName())){
                       
                        int quantite = pi.getQuantite() +1 ;
                        pi.setQuantite(quantite);
                    
                }}}
                Dialog.show("Success", "Le produit a été ajouté dans votre panier !", new Command("OK"));
               
                  });
            
          /*  viewitembutton.addActionListener(e -> {
                new ViewItemForm(current, p).show();
            });
            */
        }
        setupSideMenu(theme);
    }

    @Override
    protected void showOtherForm(Resources res) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}

        
    

/////