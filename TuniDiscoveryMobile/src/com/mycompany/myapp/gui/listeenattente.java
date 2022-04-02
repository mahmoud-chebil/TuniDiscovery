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
import static com.codename1.ui.Component.CENTER;
import static com.codename1.ui.Component.LEFT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
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
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.table.TableLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Reservation;
import com.mycompany.myapp.services.ServiceReservation;
import java.util.ArrayList;

/**
 *
 * @author bhk
 */
public class listeenattente extends Form{

       
    Resources res;
    Form current;
    SimpleDateFormat formater = new SimpleDateFormat("yyyy-MM-dd");
    ServiceReservation ServiceReservation = new ServiceReservation();
 
    public  Container  addItem(Reservation r)
    {
        current=this;
        
        Container cnt5=new Container(BoxLayout.y());

        Label tlid = new Label("N°");
        tlid.getAllStyles().setFgColor(0x407F7F);
        Label tclient = new Label("Client:");
        tclient.getAllStyles().setFgColor(0x407F7F);        
        Label tleven=new Label("Evènement:");
        tleven.getAllStyles().setFgColor(0x407F7F);
        Label tldate = new Label("Date: "); 
        tldate.getAllStyles().setFgColor(0x407F7F);
        Label tlnbper = new Label("Nb personnes:"); 
        tlnbper.getAllStyles().setFgColor(0x407F7F);
        Label tlnbplace = new Label("Nb places: "); 
        tlnbplace.getAllStyles().setFgColor(0x407F7F);
        
        Label lbid=new Label(r.idtoString());
        Label lusername=new Label(r.getUser().getUserName());
        Label leven=new Label(r.getEven().getDesc_even());
        String dateres = formater.format(r.getDateres());
        Label ldate=new Label(dateres);
        Label lnbpers=new Label(r.nbpertoString());
        Label lnbplace=new Label(r.getEven().nbplacetostring());

        Image placeholder = Image.createImage(50, 50, 0xbfc9d2);
        EncodedImage encImage = EncodedImage.createFromImage(placeholder, false);
        Image image = URLImage.createToStorage(encImage,"Etatenattente", "http://localhost/TuniDiscovery/imageMobile/enattente.jpg", URLImage.RESIZE_SCALE);
        ImageViewer imageViewer = new ImageViewer();
        imageViewer.setImage(image.fill(150, 150));
        cnt5.add(imageViewer);

        
        Label tr = new Label("____________________________________________________");
        tr.getAllStyles().setFgColor(0x407F7F);
     
Button btnvalide=new Button("Valider");
        btnvalide.addActionListener(e ->{
             if (Dialog.show("Confirmation", "Voulez vous valider la réservation !!", "OK", "Cancel"))
             { if(ServiceReservation.validerReservation(r.getId()))
                {
                 ToastBar.showMessage("Réservation validée", FontImage.MATERIAL_WARNING);
                new listeenattente(current).show();
                } 
             else
                 new listeenattente(current).show() ;
             }
         });
        
         

         
        Container cntg=new Container(BoxLayout.y());
        Container cnt2=new Container(new TableLayout(1, 3));
        Container cnt3=new Container(BoxLayout.y());
        Container cnt4=new Container(BoxLayout.y());

        
        cnt3.addAll(tlid,tclient,tleven,tldate,tlnbper,tlnbplace);
        cnt4.addAll(lbid,lusername,leven,ldate,lnbpers,lnbplace);
   
        if((r.getEtat()==false)&&(r.getNbPersonne()<=r.getEven().getNbre_place()))
             cnt5.add(btnvalide);
  

        cnt2.addAll(cnt3,cnt4,cnt5);   
        cntg.addAll(cnt2,tr);
    return cntg;
    }
    public listeenattente(Form previous) {

        res=UIManager.initFirstTheme("/theme");
        current = this; 
               
        Container cnt=new Container(BoxLayout.y()); 
         
       getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
   
        Container cntb=new Container(new FlowLayout(LEFT,CENTER));

        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
        
        Image profilePic = res.getImage("listeattente.png");
        Image mask = res.getImage("round-mask.png");
        profilePic = profilePic.fill(mask.getWidth(), mask.getHeight());
        Label profilePicLabel = new Label(profilePic, "ProfilePicTitle");
        profilePicLabel.setMask(mask.createMask());
       
        Label lab=new Label("Liste en attente", "Title");
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
        
         
        ArrayList<Reservation> list=ServiceReservation.getInstance().getAllReservation();
        SpanLabel sp = new SpanLabel();
        add(sp);
        for (Reservation r : list)
           if((r.getEtat()==false)&&(r.getNbPersonne()<=r.getEven().getNbre_place()))
                 add(addItem(r));
        
        
             
       
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
        
       }
}

    
       




