/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;


import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import static com.codename1.ui.Component.CENTER;
import static com.codename1.ui.Component.LEFT;
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
public class listedevisForm extends Form{

       
    Resources res;
    Form current;
    SimpleDateFormat formater = new SimpleDateFormat("yyyy-MM-dd");
    ServiceReservation ServiceReservation = new ServiceReservation();
 float totcal;
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
        Label tpu = new Label("PU: "); 
        tpu.getAllStyles().setFgColor(0x407F7F);
        Label tlnbper = new Label("Nb personnes:"); 
        tlnbper.getAllStyles().setFgColor(0x407F7F);
        Label tot = new Label("Total avant remise: "); 
        tot.getAllStyles().setFgColor(0x407F7F);
         Label tremise = new Label("Remise: "); 
        tremise.getAllStyles().setFgColor(0x407F7F);
        Label tapresremise = new Label("Total après remise: "); 
        tapresremise.getAllStyles().setFgColor(0x407F7F);
        
        Label lbid=new Label(r.getDevis().idtoString());
        
        Label lusername=new Label(r.getUser().getUserName());
        
        Label leven=new Label(r.getEven().getDesc_even());
        
        Label lpu=new Label(r.getEven().getputostring());
        
        Label lnbper=new Label(r.nbpertoString());
        
        
        totcal=r.getNbPersonne()*r.getEven().getPrix_even();
        
        Label ltotavantremise=new Label(Float.toString(totcal));
        
         Label lremise=new Label(r.getDevis().remisetoString());
  
        Label ltotapresrem=new Label(r.getDevis().prixTottoString());



        
        Label tr = new Label("____________________________________________________");
        tr.getAllStyles().setFgColor(0x407F7F);
     
        
         Image placeholder = Image.createImage(50, 50, 0xbfc9d2);
        EncodedImage encImage = EncodedImage.createFromImage(placeholder, false);
        Image image = URLImage.createToStorage(encImage,"remise", "http://localhost/TuniDiscovery/imageMobile/remise.png", URLImage.RESIZE_SCALE);
        ImageViewer imageViewer1 = new ImageViewer();
        imageViewer1.setImage(image.fill(300, 300));
        
        Button btremise=new Button("Remise");
        btremise.addActionListener(e ->{
            new remisedevisForm(current,r).show();
             });
        
         

         
        Container cntg=new Container(BoxLayout.y());
        Container cnt2=new Container(new TableLayout(1, 3));
        Container cnt3=new Container(BoxLayout.y());
        Container cnt4=new Container(BoxLayout.y());

        
        cnt3.addAll(tlid,tclient,tleven,tpu,tlnbper,tot,tremise,tapresremise);
        cnt4.addAll(lbid,lusername,leven,lpu,lnbper,ltotavantremise,lremise,ltotapresrem);
   
         cnt5.add(imageViewer1);
         cnt5.add(btremise);
  

        cnt2.addAll(cnt3,cnt4,cnt5);   
        cntg.addAll(cnt2,tr);
    return cntg;
    }
    
    public listedevisForm(Form previous) {

        res=UIManager.initFirstTheme("/theme");
        current = this; 
               
         Container cnt1= new Container(BoxLayout.xCenter());
       getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
   


        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
        
             
        Label lab=new Label("Devis", "Title");
        lab.getAllStyles().setFgColor(0x66CC99);
        
        Image placeholder = Image.createImage(50, 50, 0xbfc9d2);
        EncodedImage encImage = EncodedImage.createFromImage(placeholder, false);
        Image image = URLImage.createToStorage(encImage,"devis", "http://localhost/TuniDiscovery/imageMobile/devis.jpg", URLImage.RESIZE_SCALE);
        ImageViewer imageViewer = new ImageViewer();
        imageViewer.setImage(image.fill(300, 300));
        
        
        cnt1.add(imageViewer);
        cnt1.add(lab);
               
        addAll(cnt1);
      
        
         
        ArrayList<Reservation> list=ServiceReservation.getInstance().getAllReservation();
        SpanLabel sp = new SpanLabel();
        add(sp);
        for (Reservation r : list)
           if(r.getEtat()==true)
                 add(addItem(r));
        
        
             
       
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
        
       }
}

    
       