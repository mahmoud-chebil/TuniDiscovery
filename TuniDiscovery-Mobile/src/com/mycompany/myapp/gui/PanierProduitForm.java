/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;
import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import static com.codename1.ui.CN.getCurrentForm;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;

import java.util.ArrayList;

import com.mycompany.myapp.entities.Commande;
import com.mycompany.myapp.entities.Cart;
import com.mycompany.myapp.entities.Product;
import com.codename1.ui.util.Resources;
import com.company.myapp.services.ServiceCommande;

import static java.lang.Boolean.FALSE;
import java.util.List;
public class PanierProduitForm  extends Form{
    Resources theme;
    Form form;
   List<Product>  llp=new ArrayList<>();
   int i=0;
    public PanierProduitForm(Form previous,ArrayList<Product> cartlist){
                
                super(BoxLayout.y());
                
                Label totalelabel = new Label();
                getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
    double total = 0;
    
       Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
     
    Button menuButton = new Button("");
        menuButton.setUIID("Title");
       // FontImage.setMaterialIcon(menuButton, FontImage.MATERIAL_MENU);
       
     Container titleCmp = BoxLayout.encloseY(
                        FlowLayout.encloseIn(menuButton),
                        BorderLayout.centerAbsolute(
                                BoxLayout.encloseY(
                                    new Label("Votre Panier", "Title")
                                )
                            )
                );
      Commande c = new Commande() ;
      int i = 0;
      tb.setTitleComponent(titleCmp);
     if(cartlist.isEmpty()){
           Label label1 = new Label("Surprise, c'est vide !");
         label1.setTextPosition(Component.TOP);
           add(label1);
        
       } 
       else{
         
           for (Product p : cartlist){
                
         
                total = total + (p.getPrice()*p.getQuantite());
                Container cnt1 = new Container(new LayeredLayout());
                LayeredLayout ll1 = (LayeredLayout)cnt1.getLayout();
              
         
         
                Label name = new Label(p.getName());
                Label description = new Label(p.getDescription());
                Label quantityText = new Label("Quantité : ");
                quantityText.getAllStyles().setFgColor(0xff0000);
                
                Label quantity = new Label(Integer.toString(p.getQuantite()));
                
                Button additionquantity = new Button();
                FontImage.setMaterialIcon(additionquantity, FontImage.MATERIAL_ADD, 5);
                
                Button substractquantity = new Button();
                FontImage.setMaterialIcon(substractquantity, FontImage.MATERIAL_REMOVE, 5);
                
                Label priceproducttext = new Label("prix : ");
                priceproducttext.getAllStyles().setFgColor(0xff0000);
                
                Label price = new Label(Double.toString(p.getPrice()*p.getQuantite()));
                
                Button trash = new Button("Supprimer Du Panier");
                FontImage.setMaterialIcon(trash, FontImage.MATERIAL_REMOVE_SHOPPING_CART, 4);
      
              String urll = "http://localhost/projectpidev/public/uploads/" ;
            EncodedImage enc = EncodedImage.createFromImage(theme.getImage("shoes.jpg").scaled(250, 250), false);

            URLImage urlimg = URLImage.createToStorage(enc, p.getName(), urll);
            ImageViewer image = new ImageViewer(urlimg);
            Image im = image.getImage();

            cnt1.add(im);
                cnt1.add(name);
                cnt1.add(description);
                cnt1.add(quantityText);
                cnt1.add(quantity);
                cnt1.add(additionquantity);
                cnt1.add(substractquantity);
                cnt1.add(priceproducttext);
                cnt1.add(price);
                cnt1.add(trash);
               // ll1.setInsets(imgv, "auto auto auto 1mm");
                ll1.setInsets(name, "auto auto 26mm 22mm");
                ll1.setInsets(description, "auto auto 21mm 22mm");
                ll1.setInsets(quantityText, "auto auto 15mm 22mm");
                
                ll1.setInsets(additionquantity, "auto auto 12mm 34mm");
                ll1.setInsets(quantity,"auto auto 15mm 41mm");
                ll1.setInsets(substractquantity, "auto auto 12mm 43mm");
                
                ll1.setInsets(priceproducttext, "auto auto 9mm 22mm");
                ll1.setInsets(price, "auto auto 9mm 33mm");
                ll1.setInsets(trash, "auto auto 3mm 24mm");
                add(cnt1);
                
               additionquantity.addActionListener(event -> {
                    
                  
                        substractquantity.setEnabled(true);
                        double test = Double.parseDouble(totalelabel.getText());
                    
                    int quantityy = p.getQuantite()+1;
                    p.setQuantite(quantityy);
                    quantity.setText(Integer.toString(p.getQuantite()));
                    price.setText(Double.toString(p.getQuantite()*p.getPrice()));
                    totalelabel.setText(Double.toString(test+p.getPrice()));
                    
                   
                    
                });
                substractquantity.addActionListener(event -> {
        
                        additionquantity.setEnabled(true);
                        double test = Double.parseDouble(totalelabel.getText());
                    
                    int quantityy = p.getQuantite()-1;
                    p.setQuantite(quantityy);
                    quantity.setText(Integer.toString(p.getQuantite()));
                    price.setText(Double.toString(p.getQuantite()*p.getPrice()));
                    totalelabel.setText(Double.toString(test-p.getPrice()));
                   
                });
                
                trash.addActionListener(event -> {
                     Cart.getInstance().RemoveProduct(p);
                    getCurrentForm().repaint();
                    getCurrentForm().refreshTheme();
                    getCurrentForm().revalidate();
                });
                  
            Label straightline = new Label("____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________");
            add(straightline);  
           }}
     
     
            if(cartlist.isEmpty()){}
            else{
            Container cnt2 = new Container(new LayeredLayout());
            LayeredLayout ll2 = (LayeredLayout)cnt2.getLayout();
            
            totalelabel.setText(Double.toString(total));
            cnt2.add(totalelabel);
            Label totaltext = new Label("Totale : ");
            
            
            ll2.setInsets(totalelabel,"auto 0 0 auto");
            ll2.setInsets(totaltext, "auto 0 0 43mm");
            cnt2.add(totaltext);
            add(cnt2);
            }
            Button order = new Button("Commander ");
            order.setUIID("LoginButton");
            
            order.setPreferredSize(new Dimension(450,100));
            add(order);
           
            
            order.addActionListener(e -> {
                
                    
            Dialog d = new Dialog("Merci d'Ajouter vos Informations");
         
            
            TextField info = new TextField("","Nom",15,TextArea.ANY);
            TextField pre = new TextField("","Prénom",15,TextArea.ANY);
            TextField adress = new TextField("","Adresse complet",15,TextArea.ANY);
            TextField tlf = new TextField("","Numéro de Téléphone",15,TextArea.ANY);
            TextField email = new TextField("","Email",15,TextArea.NUMERIC);
            
            info.getAllStyles().setFgColor(0x339bff);
            pre.getAllStyles().setFgColor(0x339bff);
            adress.getAllStyles().setFgColor(0x339bff);
            tlf.getAllStyles().setFgColor(0x339bff);
            email.getAllStyles().setFgColor(0x339bff);
            
            Button valider = new Button("Valider Commande");
            valider.setUIID("LoginButton");
            valider.getAllStyles().setBgColor(0x339bff);
            valider.setPreferredSize(new Dimension(450,100));
            d.setLayout(BoxLayout.y());
            d.add(info);
            d.add(pre);
            d.add(adress);
            d.add(tlf);
            d.add(email);
            d.add(valider);
            
            
           float f=Float.parseFloat(totalelabel.getText());
        valider.addActionListener(new ActionListener() {
                String addressComplet = info.getText()+" "+pre.getText()+" "+adress.getText()+" "+tlf.getText()+" "+email.getText();
            Commande c = new Commande();
           int etat = 0;
            @Override
            public void actionPerformed(ActionEvent evt) {
              if ((info.getText().length()==0)||(info.getText().length()==0))
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                else
                {
                    try {
                        Commande c = new Commande(info.getText(),pre.getText(),adress.getText(),tlf.getText(),f,etat,email.getText());

                        if( ServiceCommande.getInstance().addCommande(c))
                            Dialog.show("Success user added","Commande Ajoutée ",new Command("OK"));
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a text", new Command("OK"));
                    }
                    
                }
                
                
            }
        });
        
     
          Dialog.show("Success", "Votre commande a été enregitrée!", new Command("OK"));
                   d.showPopupDialog(order);
                   
              
                   new ListCommandeForm(previous).show();
                   Cart.getInstance().cleanCartSession();
   });}

    public PanierProduitForm(Form current) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}