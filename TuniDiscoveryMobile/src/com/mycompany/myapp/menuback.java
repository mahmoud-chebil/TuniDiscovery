
/*
 * Copyright (c) 2016, Codename One
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated 
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, 
 * and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions 
 * of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT 
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE 
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. 
 */

package com.mycompany.myapp;

import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
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
import com.codename1.ui.table.TableLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.gui.ListReservationForm;
import com.mycompany.myapp.gui.devisForm;
import com.mycompany.myapp.gui.listedevisForm;
import com.mycompany.myapp.gui.reservUserForm;

/**
 * Represents a user profile in the app, the first form we open after the walkthru
 *
 * @author Shai Almog
 */
public class menuback extends SideMenuBaseForm {
    public menuback(Resources res) {
        current = this; //Récupération de l'interface(Form) en cours
               
        Container cnt=new Container(BoxLayout.y()); 
       
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e->new HomeForm(res).show());


        Container cntb=new Container(new FlowLayout(LEFT,CENTER));

        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
        
        Image profilePic = res.getImage("logo.JPG");
        Image mask = res.getImage("round-mask.png");
        profilePic = profilePic.fill(mask.getWidth(), mask.getHeight());
        Label profilePicLabel = new Label(profilePic, "ProfilePicTitle");
        profilePicLabel.setMask(mask.createMask());
       
        Label lab=new Label("TuniDiscovery", "Title");
                lab.getAllStyles().setFgColor(0x66CC99);
        Container titleCmp = BoxLayout.encloseY(
                        BorderLayout.centerAbsolute(
                                BoxLayout.encloseY(
                                   lab,
                                   new Label("", "SubTitle")
                                   
                                )
                            ).add(BorderLayout.WEST, profilePicLabel)
               );

        cnt.addAll(cntb,titleCmp);
        add(cnt);
        
   
        
        Button Réservations = new Button("Réservations");
         Réservations.getAllStyles().setFgColor(0x7DBFFF);
         
        Réservations.addActionListener(e -> new ListReservationForm(current).show());
                  
        Image placeholder = Image.createImage(50, 50, 0xbfc9d2);
        EncodedImage encImage = EncodedImage.createFromImage(placeholder, false);
        Image image = URLImage.createToStorage(encImage,"btres", "http://localhost/TuniDiscovery/imageMobile/resradmin.png", URLImage.RESIZE_SCALE);
        ImageViewer imageViewer = new ImageViewer();
        imageViewer.setImage(image.fill(100, 100));
  
         Button Devis = new Button("Devis");
         Devis.getAllStyles().setFgColor(0x7DBFFF);
         Devis.addActionListener(e -> new listedevisForm(current).show());
                
        Image img2 = Image.createImage(50, 50, 0xbfc9d2);
        EncodedImage encImage2 = EncodedImage.createFromImage(img2, false);
        Image image2 = URLImage.createToStorage(encImage2,"btdev", "http://localhost/TuniDiscovery/imageMobile/devis.JPG", URLImage.RESIZE_SCALE);
        ImageViewer imageViewer2 = new ImageViewer();
        imageViewer2.setImage(image2.fill(100, 100));
        
    Container cnt1=new Container(new TableLayout(1,2));
          cnt1.addAll(imageViewer,Réservations);
     Container cnt2=new Container(new TableLayout(1,2));
          cnt2.addAll(imageViewer2,Devis);
          
          
     Container cnt3=new Container(BoxLayout.y());
     cnt3.addAll(cnt1,cnt2);
     add(cnt3);    
      
      
    }
    
   
    

    @Override
    protected void showOtherForm(Resources res) {
        new StatsForm(res).show();
    }
}

