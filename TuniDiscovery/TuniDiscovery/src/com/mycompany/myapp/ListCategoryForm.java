/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;

import com.codename1.components.ImageViewer;
import com.codename1.components.ToastBar;
import com.codename1.ui.*;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.company.myapp.services.ServiceProduit;
import com.mycompany.myapp.entities.Product;
import com.mycompany.myapp.entities.TypeProduct;
import com.mycompany.myapp.myapp.services.ServiceType;

/**
 *
 * @author MSI
 */
public class ListCategoryForm extends SideMenuBaseForm {

    Resources theme;
    Form current;
    Product c ;

    public ListCategoryForm(Form previous) {

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
                                    new Label("Categories", "Title")
                                )
                            )
                );
        
        

        tb.setTitleComponent(titleCmp);
        
        
        
        
        
        
        


        for (TypeProduct p : ServiceType.getInstance().getAllTypes()) {

            Label tfname = new Label();
            tfname.setText("Nom : " + p.getName());
            Label tfprice = new Label();
            
            Container cnt1 = new Container(BoxLayout.x());
            Container cnt2 = new Container(BoxLayout.y());
            Container cnt3 = new Container(BoxLayout.x());
            Container cnt4 = new Container(BoxLayout.x());
            Container cnt5 = new Container(BoxLayout.x());
            Button tfdelete = new Button(FontImage.MATERIAL_DELETE);
            Button tfAdd = new Button("Ajouter");
            Button tfModifier = new Button("Modifier");

          
             Button tfPanier = new Button(FontImage.MATERIAL_ADD_SHOPPING_CART);
             cnt3.addAll(tfModifier);
            cnt4.addAll(tfdelete);
            cnt2.addAll(tfname, tfprice, cnt3,cnt4);
            cnt5.addAll(tfAdd);
            


            cnt1.add(cnt2);
            add(cnt1);
            add(cnt5);
            tfdelete.addActionListener((e) -> {
                if (Dialog.show("Alert", "Voulez vous supprimer  " + p.getId() + " !!", "OK", "Cancel")) {
                    if (ServiceType.getInstance().deleteCategory(p)) {
                        ToastBar.showMessage("Le produit a été supprimé", FontImage.MATERIAL_WARNING);
                        new ListProductForm(previous).show();
                    } else {
                        new ListProductForm(previous).show();
                    }
                }

            });
             tfModifier.addActionListener((e) -> {
               
               

                
                 new UpdateCategoryForm(p,current).show();
                 
                 



            });












            tfAdd.addActionListener((e) -> {




                new AddCategoryForm(current).show();





            });
        }



     setupSideMenu(theme);   
    }

    @Override
    protected void showOtherForm(Resources res) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

}