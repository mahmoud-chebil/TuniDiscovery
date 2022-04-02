

package com.mycompany.myapp;

import com.codename1.components.ImageViewer;
import com.codename1.components.ToastBar;
import com.codename1.io.Storage;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.Layout;
import com.codename1.ui.util.Resources;

import java.io.IOException;
import java.io.InputStream;

/**
 * Common code that can setup the side menu
 *
 * @author Shai Almog
 */
public abstract class SideMenuBaseForm extends Form {
  Form current = null ;
    public SideMenuBaseForm(String title, Layout contentPaneLayout) {
        super(title, contentPaneLayout);
    }

    public SideMenuBaseForm(String title) {
        super(title);
    }

    public SideMenuBaseForm() {
    }

    public SideMenuBaseForm(Layout contentPaneLayout) {
        super(contentPaneLayout);
    }
    
    public void setupSideMenu(Resources res) {
        Image profilePic = res.getImage("user-picture.png");
        Image mask = res.getImage("round-mask.png");
        mask = mask.scaledHeight(mask.getHeight() / 4 * 3);
        profilePic = profilePic.fill(mask.getWidth(), mask.getHeight());
        Label profilePicLabel = new Label("  TuniDiscovery", profilePic, "SideMenuTitle");
        profilePicLabel.setMask(mask.createMask());

        Container sidemenuTop = BorderLayout.center(profilePicLabel);
        sidemenuTop.setUIID("SidemenuTop");
        
        getToolbar().addComponentToSideMenu(sidemenuTop);
        getToolbar().addMaterialCommandToSideMenu("  Acceuil", FontImage.MATERIAL_DASHBOARD,  e -> showOtherForm(res));
         getToolbar().addMaterialCommandToSideMenu("  Nos produits", FontImage.MATERIAL_LIST,  e -> new ListProductForm(current).show());
      
     getToolbar().addMaterialCommandToSideMenu("  Shop", FontImage.MATERIAL_SHOP, e -> {
            try {
                new ShopForm(current).show();
            } catch (IOException ex) {

            }
            
        });
        getToolbar().addMaterialCommandToSideMenu("  Category", FontImage.MATERIAL_LIST,  e -> new ListCategoryForm(current).show());
      
        getToolbar().addMaterialCommandToSideMenu("  Evénement", FontImage.MATERIAL_EVENT,  e -> showOtherForm(res));
        getToolbar().addMaterialCommandToSideMenu("  Réclamation", FontImage.MATERIAL_ADD_ALERT,  e -> showOtherForm(res));
        getToolbar().addMaterialCommandToSideMenu("  Messages", FontImage.MATERIAL_CHAT,  e -> showOtherForm(res));
        getToolbar().addMaterialCommandToSideMenu("  Qui somme-nous?", FontImage.MATERIAL_CONTACT_PAGE,  e -> showOtherForm(res));

        getToolbar().addMaterialCommandToSideMenu("  Logout", FontImage.MATERIAL_EXIT_TO_APP,  e -> new LoginForm(res).show());
    }
    
    protected abstract void showOtherForm(Resources res);
}
