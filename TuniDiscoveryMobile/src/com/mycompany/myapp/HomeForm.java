/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;


/**
 *
 * @author poste 1
 */
public class HomeForm extends Form{
Form current;
    public HomeForm(Resources res)  {
        current = this; //Récupération de l'interface(Form) en cours
        
       
         Container cnt=new Container(BoxLayout.y());
        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
        
        Image profilePic = res.getImage("logo.JPG");
        Image mask = res.getImage("round-mask.png");
        profilePic = profilePic.fill(mask.getWidth(), mask.getHeight());
        Label profilePicLabel = new Label(profilePic, "ProfilePicTitle");
        profilePicLabel.setMask(mask.createMask());

       
   

        Container titleCmp = BoxLayout.encloseY(
                        BorderLayout.centerAbsolute(
                                BoxLayout.encloseY(
                                    new Label("TuniDiscovery", "Title"),
                                    new Label("", "SubTitle")
                                )
                            ).add(BorderLayout.WEST, profilePicLabel)
                        
                );
          
   


        Button btnBack = new Button("Back");
        Button btnFront = new Button("Front");
        btnBack.addActionListener(e -> new menuback(res).show());
        btnFront.addActionListener(e -> new LoginForm(res).show());
       
        cnt.addAll(titleCmp,btnBack, btnFront);
        add(cnt);

    }
    
    
}
