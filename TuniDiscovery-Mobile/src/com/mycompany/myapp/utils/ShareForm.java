/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.utils;

import com.codename1.io.FileSystemStorage;
import com.codename1.io.Util;
import com.codename1.ui.*;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.util.ImageIO;
import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;

/**
 *
 * @author Chen
 */
class ShareForm extends Form{

    private TextField to = new TextField();
    private TextArea message = new TextArea(5, 20);
    private Button post = new Button("Post");

    ShareForm(final Form contacts, String title, String toShare, String txt, ActionListener share) {
        this(contacts, title, toShare, txt, null, share);
    }

    ShareForm(final Form contacts, String title, String toShare, String txt, String image,
              ActionListener share) {
        setTitle(title);
        setLayout(new BorderLayout());
        this.message.setText(txt);
        post.addActionListener(share);
        if(toShare != null){
            this.to.setText(toShare);
            addComponent(BorderLayout.NORTH, to);
        }
        if(image == null){
            addComponent(BorderLayout.CENTER, message);
        }else{
            Container body = new Container(new BorderLayout());
            if(txt != null && txt.length() > 0){
                body.addComponent(BorderLayout.SOUTH, message);
            }
            Label im = new Label();
            ImageIO scale = ImageIO.getImageIO();
            if(scale != null){
                InputStream is = null;
                ByteArrayOutputStream os = new ByteArrayOutputStream();
                try {
                    is = FileSystemStorage.getInstance().openInputStream(image);
                    scale.save(is, os, ImageIO.FORMAT_JPEG, 200, 200, 1);
                    Image i = Image.createImage(os.toByteArray(), 0, os.toByteArray().length);
                    im.setIcon(i);
                } catch (IOException ex) {
                    //if failed to open the image file simply put the path as text
                    im.setText(image);
                }finally{
                    Util.cleanup(os);
                    Util.cleanup(is);
                }
            }else{
                im.setText(image);
            }
            body.addComponent(BorderLayout.CENTER, im);
            addComponent(BorderLayout.CENTER, body);
        }
        addComponent(BorderLayout.SOUTH, post);
        Command back = new Command("Back") {

            public void actionPerformed(ActionEvent evt) {

                contacts.showBack();
            }
        };
        addCommand(back);
        setBackCommand(back);
    }

    String getTo(){
        return to.getText();
    }

    String getMessage(){
        return message.getText();
    }

}
