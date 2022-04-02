
package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;

/**
 *
 * @author IDIZUOB
 */
public class HomeForm extends Form {

    Form current;

    
    public HomeForm() {
        current = this; 
        setTitle("Home");
        setLayout(BoxLayout.y());

        add(new Label("Choose an option"));
        Button btnAddActivite = new Button("Add Activity");
        Button btnListActivite = new Button("List Activity");

        btnAddActivite.addActionListener(e -> new AddActivityForm(current).show());
        btnListActivite.addActionListener(e -> new ListActivityForm(current).show());
        
        
        Button btnAddEvent = new Button("Add Event");
        Button btnListEvent = new Button("List Event");
        
        Button btnStat = new Button("Statistique");

        btnAddEvent.addActionListener(e -> new AddEventForm(current).show());
        btnListEvent.addActionListener(e -> new ListEventsForm(current).show());
        btnStat.addActionListener(e -> new Statistique().show());
        addAll(btnAddActivite, btnListActivite,btnAddEvent,btnListEvent,btnStat);

    }

}
