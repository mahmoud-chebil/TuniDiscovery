/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.myapp.gui;

import com.codename1.charts.ChartComponent;
import com.codename1.charts.models.CategorySeries;
import com.codename1.charts.renderers.DefaultRenderer;
import com.codename1.charts.renderers.SimpleSeriesRenderer;
import com.codename1.charts.util.ColorUtil;
import com.codename1.charts.views.PieChart;
import com.codename1.ui.Form;
import com.mycompany.myapp.entities.Activite;
import com.mycompany.myapp.services.ServiceActivity;
import java.util.ArrayList;

/**
 *
 * @author IDIZUOB
 */
public class Statistique extends Form {
    public Statistique(){
        
        // Generate the values
        double[] values = new double[]{12, 14, 11, 10, 19};
        ArrayList<Activite> ActList;
        ActList = ServiceActivity.getInstance().getAllAcitivities();
        
        
        // Set up the renderer
        
        int[] colors = new int[]{ColorUtil.BLUE, ColorUtil.GREEN, ColorUtil.MAGENTA, ColorUtil.BLACK, ColorUtil.CYAN};
        DefaultRenderer renderer = buildCategoryRenderer(colors);
        renderer.setZoomButtonsVisible(true);
        renderer.setZoomEnabled(true);
        renderer.setChartTitleTextSize(20);
        renderer.setDisplayValues(true);
        renderer.setLabelsColor(ColorUtil.BLACK);
        renderer.setShowLabels(true);
        SimpleSeriesRenderer r = renderer.getSeriesRendererAt(0);
        r.setGradientEnabled(true);
        r.setGradientStart(0, ColorUtil.BLUE);
        r.setGradientStop(0, ColorUtil.GREEN);
        r.setHighlighted(true);
        
        // Create the chart ... pass the values and renderer to the chart object.
        
        PieChart chart = new PieChart(buildCategoryDataset("Activités", ActList), renderer);
        
        // Wrap the chart in a Component so we can add it to a form
        ChartComponent c = new ChartComponent(chart);

        add(c);
        
    }

   
        /**
     * Creates a renderer for the specified colors.
     */
    private DefaultRenderer buildCategoryRenderer(int[] colors) {
        DefaultRenderer renderer = new DefaultRenderer();
        renderer.setLabelsTextSize(50);
        renderer.setLegendTextSize(50);
        renderer.setMargins(new int[]{20, 30, 15, 0});
        for (int color : colors) {
            SimpleSeriesRenderer r = new SimpleSeriesRenderer();
            r.setColor(color);
            renderer.addSeriesRenderer(r);
        }
        return renderer;
    }
        /**
     * Builds a category series using the provided values.
     *
     * @param titles the series titles
     * @param values the values
     * @return the category series
     */
    protected CategorySeries buildCategoryDataset(String title, ArrayList<Activite> Activities) {
        CategorySeries series = new CategorySeries(title);
       int k=0;
        for (Activite obj : Activities) {
            
            series.add(obj.getNom_activite(), obj.getId());
            
            
        }

        return series;
    }
    
    
    
}
