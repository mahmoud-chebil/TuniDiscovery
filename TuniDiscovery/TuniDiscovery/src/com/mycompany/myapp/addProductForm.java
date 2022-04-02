package com.mycompany.myapp;


import com.codename1.capture.Capture;
import com.codename1.ui.*;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.entities.TypeProduct;
import com.mycompany.myapp.entities.Product;
import java.io.IOException;
import com.company.myapp.services.ServiceProduit;
import com.mycompany.myapp.myapp.services.ServiceType;


/**
 *
 * @author MSI
 */
public class addProductForm extends Form {
    public addProductForm (Form previous){
        setTitle("add new product");
        setLayout(BoxLayout.y());
        TextField name=new TextField("","name");
        name.animate();
        TextField description=new TextField("","description");
        TextField price=new TextField("","price");
        ComboBox tftypes = new ComboBox();
        try {
            for(TypeProduct tp : ServiceType.getInstance().getAllTypes()){

                tftypes.addItem(tp.getId());
            }
        } catch (Exception e) {
        }


        Button capture=new Button("capture");
        Label image=new Label("image");
        Button valider=new Button("valider");
        capture.addActionListener(new ActionListener(){
            @Override
            public void actionPerformed(ActionEvent evt) {
                String path=Capture.capturePhoto(Display.getInstance().getDisplayWidth(), -1);
                if(path!=null){
                    try{

                        Image img=Image.createImage(path);
                        image.setIcon(img);
                       // image.setText(path);
                    }catch(IOException o){               o.printStackTrace();
                    }
                }

            }

        });
        valider.addActionListener(new ActionListener(){
            @Override
            public void actionPerformed(ActionEvent evt) {

                if(name.getText().length()==0||description.getText().length()==0||price.getText().length()==0 ){
                    Dialog.show("alert","please fill all the fields",new Command("ok"));

                }

                else {try{
                    //String name, String description, String price, String image, TypeProduct category
                    TypeProduct c=new TypeProduct("test");
                    Product p=new Product(name.getText(),description.getText(),price.getText(),image.getText(),c);

                      if (new ServiceProduit().addProduit(p,tftypes.getSelectedItem().toString()))
                    Dialog.show("sucess","product added", new Command("ok"));

                }catch(NumberFormatException e){
                    Dialog.show("ERROR","price must be a number", new Command("ok"));
                }

                }

            }

        });

        addAll(name,description,tftypes,price,capture,valider,image);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> new ListProductForm(previous).show());
    }

}
