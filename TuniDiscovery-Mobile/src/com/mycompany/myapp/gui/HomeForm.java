/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;
import com.codename1.ui.Button;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import java.io.IOException;
import com.mycompany.myapp.SideMenuBaseForm;
import com.mycompany.myapp.*;
/**
 *
 * @author poste 1
 */
public class HomeForm extends SideMenuBaseForm{

  public HomeForm(Resources res) throws IOException {
        super(BoxLayout.y());
        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
        Button menuButton = new Button("");
        menuButton.setUIID("Title");
        FontImage.setMaterialIcon(menuButton, FontImage.MATERIAL_MENU);
        menuButton.addActionListener(e -> getToolbar().openSideMenu());
       
        setupSideMenu(res);
    }
    
   

    protected void showOtherForm(Resources res) {
        new StatsForm(res).show();
    }

 
    
}
