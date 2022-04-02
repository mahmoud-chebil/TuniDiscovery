/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;
 import com.codename1.components.ToastBar;
import com.codename1.ui.Button;
 import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
 import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
 import com.codename1.ui.Label;
 import com.codename1.ui.geom.Dimension;
 import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.LayeredLayout;

import java.io.IOException;
import java.util.ArrayList;

import com.company.myapp.services.ServiceProduit;
 import com.mycompany.myapp.entities.Product;


/**
 *
 * @author MSI
 */
public class ShopForm extends Form{
    Form current;
    int test = 0;
    
    public ShopForm(Form previous) throws IOException{
      

      super(BoxLayout.y());
      
  //new HomeForm(theme).show();
        current=this;
        Button showShoppingCart = new Button("Cart");
        FontImage.setMaterialIcon(showShoppingCart, FontImage.MATERIAL_SHOPPING_BASKET, 3);
        
        Button showChart = new Button("Chart");
        FontImage.setMaterialIcon(showChart, FontImage.MATERIAL_ADD_CHART, 3);
        

        Container cnt4 = new Container(new LayeredLayout());
        LayeredLayout ll4 = (LayeredLayout)cnt4.getLayout();
        
        cnt4.add(showShoppingCart);
        cnt4.add(showChart);
        ll4.setInsets(showShoppingCart, "auto auto auto 50mm");
        ll4.setInsets(showChart, "auto auto auto 1mm");
                
        add(cnt4);

        
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
            Button tfShowSingle = new Button("details");
            Button tfModifier = new Button("Modifier");
            Button tfAdd = new Button("add");

             Button tfPanier = new Button(FontImage.MATERIAL_ADD_SHOPPING_CART);
             cnt3.addAll(tfShowSingle,tfPanier, tfModifier, tfdelete,tfAdd);
            cnt2.addAll(tfname, tfprice,tfdesc, cnt3);



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


                new ShowSingleForm(p, current).show();

            });
  try {
            tfModifier.addActionListener((e1) -> {
              
               
                new UpdateProductForm(p, current).show();
                   
               
            });                     
             } catch (Exception e) {System.out.println(e.getMessage());
                }

            tfAdd.addActionListener((e3) -> {


                new addProductForm().show();


            });

 
    tfPanier.addActionListener((e2) -> {
            
            ServiceProduit.getInstance().AddPanierProduit(p);
            
            
            if(ServiceProduit.getInstance().AddPanierProduit(p)){
            
              ToastBar.showMessage("Le produit a été ajouté à votre panier ", FontImage.MATERIAL_INFO);
            
            }
                 
            });
        

   
    
    
    

            
            
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
            

            

             
            Container cntf = new Container(new LayeredLayout());
            LayeredLayout ll = (LayeredLayout)cntf.getLayout();
            cntf.add(viewitembutton);
            cntf.add(addtocartbutton);
            ll.setInsets(addtocartbutton, "auto auto auto 30mm");
            ll.setInsets(viewitembutton, "auto auto auto 3mm");

      add(cntf);


          
            }}}
        
    

