
package com.mycompany.myapp.gui;


import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.entities.Activite;
import com.mycompany.myapp.services.ServiceActivity;

/**
 *
 * @author IDIZUOB
 */
public class ListActivityForm  extends Form{
    

    Form current;
        public ListActivityForm(Form previous) {
        setTitle("Liste Acivites");
        
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
        for (Activite Act : ServiceActivity.getInstance().getAllAcitivities()) {

            Label tfname = new Label();
            tfname.setText("Nom : " + Act.getNom_activite());
            Label tftype = new Label();
            tftype.setText("Type : " + Act.getType_activite());
            Label tfprice = new Label();
            tfprice.setText("Prix : " +Act.getPrix_activite() + " DT");
            
            
            Container cnt1 = new Container(BoxLayout.y());
            Container cnt2 = new Container(BoxLayout.y());
            Container cnt3 = new Container(BoxLayout.x());
            
            Button tfUpdate = new Button("Modifier");
            Button tfDelete = new Button("Supprimer");
            cnt2.addAll(tfname, tftype,tfprice,cnt3);
            cnt3.addAll(tfUpdate,tfDelete);
            cnt1.add(cnt2);
            add(cnt1);
            
            
            //delete
            tfDelete.addActionListener((e) -> {

                ServiceActivity.getInstance().deleteActivite(Act);
                new ListActivityForm(previous).show();
                        
                 
                 
            });
            
            //update
            
                tfUpdate.addActionListener(e-> new UpdateActivityForm(Act,current).show());
                
                
                  
            
    }
         getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e->  new ListActivityForm(previous).show());
    
}
        
}
