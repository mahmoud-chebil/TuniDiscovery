/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.table.TableLayout;
import com.mycompany.myapp.entities.Reservation;
import com.mycompany.myapp.services.ServiceReservation;
import java.util.ArrayList;

/**
 *
 * @author Lenovo
 */
public class reservUserForm extends Form{
    Form current;
   SimpleDateFormat formater = new SimpleDateFormat("yyyy-MM-dd");
 ServiceReservation ServiceReservation = new ServiceReservation();
    public  Container  addItem(Reservation r)
    {
        current=this;
        
       

         Container cntg=new Container(BoxLayout.y());
         Container cnt5=new Container(BoxLayout.y());

     
        Label tlid = new Label("N°");
        tlid.getAllStyles().setFgColor(0x407F7F);
        Label tleven=new Label("Evènement:");
        tleven.getAllStyles().setFgColor(0x407F7F);
        Label tldate = new Label("Date: "); 
        tldate.getAllStyles().setFgColor(0x407F7F);
            
        Label lbid=new Label(r.idtoString());
        Label leven=new Label(r.getEven().getDesc_even()); 
        String dateres = formater.format(r.getDateres());
        Label ldate=new Label(dateres);
        Label letat=new Label(r.getEtat()+"");
        
        if(r.getEtat()==true)
        {
            Image placeholder = Image.createImage(50, 50, 0xbfc9d2);
        EncodedImage encImage = EncodedImage.createFromImage(placeholder, false);
        Image image = URLImage.createToStorage(encImage,"Etatvalide", "http://localhost/TuniDiscovery/imageMobile/valide.jpg", URLImage.RESIZE_SCALE);
        ImageViewer imageViewer = new ImageViewer();
        imageViewer.setImage(image.fill(150, 150));
        cnt5.add(imageViewer);
        }
        else if((r.getEtat()==false)&&(r.getNbPersonne()<=r.getEven().getNbre_place()))
          {Image placeholder = Image.createImage(50, 50, 0xbfc9d2);
        EncodedImage encImage = EncodedImage.createFromImage(placeholder, false);
        Image image = URLImage.createToStorage(encImage,"Etatenattente", "http://localhost/TuniDiscovery/imageMobile/enattente.jpg", URLImage.RESIZE_SCALE);
        ImageViewer imageViewer = new ImageViewer();
        imageViewer.setImage(image.fill(150, 150));
        cnt5.add(imageViewer);
        }
        else if((r.getEtat()==false)&&(r.getNbPersonne()>r.getEven().getNbre_place()))
        {Image placeholder = Image.createImage(50, 50, 0xbfc9d2);
        EncodedImage encImage = EncodedImage.createFromImage(placeholder, false);
        Image image = URLImage.createToStorage(encImage,"Etatinvalide", "http://localhost/TuniDiscovery/imageMobile/invalide.jpg", URLImage.RESIZE_SCALE);
        ImageViewer imageViewer = new ImageViewer();
        imageViewer.setImage(image.fill(150, 150));
        cnt5.add(imageViewer);
        }
            
     
        if((r.getEtat()==false)&&(r.getNbPersonne()<=r.getEven().getNbre_place()))
        {
        Button btdelete=new Button("Annuler");
        FontImage.setMaterialIcon(btdelete, FontImage.MATERIAL_REMOVE_SHOPPING_CART, 4);
         btdelete.addActionListener(e ->{
             if (Dialog.show("Alert", "Voulez vous annulez votre réservation !!", "OK", "Cancel"))
             { if(ServiceReservation.annulerResrvation(r.getId()))
                {
                 ToastBar.showMessage("Réservation annulée", FontImage.MATERIAL_WARNING);
                new reservUserForm(current).show();
                } 
             else
                 new reservUserForm(current).show() ;
             }
         });
         cnt5.add(btdelete);
        }
        
        Label tr = new Label("____________________________________________________");
        tr.getAllStyles().setFgColor(0x407F7F);
        Button btndevis=new Button("Devis");
        btndevis.addActionListener(e ->{
                new devisselectionneForm(current,r).show();
         });
         
        
        

        Container cnt2=new Container(new TableLayout(1, 3));
        Container cnt3=new Container(BoxLayout.y());
        Container cnt4=new Container(BoxLayout.y());


        
        cnt3.addAll(tlid,tleven,tldate);
        cnt4.addAll(lbid,leven,ldate);
        cnt5.add(btndevis);
        cnt2.addAll(cnt3,cnt4,cnt5);
        cntg.addAll(cnt2,tr);
    return cntg;
    }
    public reservUserForm(Form previous) {
        setTitle("Liste des réservations");
             
        ArrayList<Reservation> list=ServiceReservation.getInstance().ListReservationUserForm();
        SpanLabel sp = new SpanLabel();
//        sp.setText(ServiceReservation.getInstance().getAllTasks().toString());
        add(sp);
       
        
        for (Reservation r : list) {
            
           add(addItem(r));
        }
        
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
    }
    
}
