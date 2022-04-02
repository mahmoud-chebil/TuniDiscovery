/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;



import com.mycompany.myapp.entities.Product;
//import iservice.Panier.IPanier;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author jean
 */
public class FonctionPanier {
   
    
    public static  List<Product>  panier=new ArrayList<>();

    public FonctionPanier() {
      // panier = new ArrayList<>();
    }
    
    
    public static List<Product> getListeProduit(){
        
        return  panier;
    }
    
    //@Override
    public  static int rechercherProduit(String nomProduit) {

   for(int i=0; i<panier.size() ;i++){ 
       
        if(panier.get(i).getName().equals(nomProduit))
            return i;
    }
        return 0;
    
    }
    
   // @Override
    public  static void  ajouterArticle(Product p){
    
     if(!panier.isEmpty()){
         
       if(ProduitExiste(p))
       {
       
        int positionProduit=1;
        
         positionProduit+= rechercherProduit(p.getName());
        
         
        if(positionProduit !=0){
 
       // panier.get(positionProduit-1).setQuantiteProduitClient(panier.get(positionProduit-1).getQuantiteProduitClient()+p.getQuantiteProduitClient());
         //   System.out.println("modification quantité du Produit: "+ panier.get(positionProduit-1).getNomProduit());
        }//
       
       }else{
             
        panier.add(p);
            System.out.println("ajout nouveau Produit");
        }
         
     }else{
             
        panier.add(p);
            System.out.println("ajout nouveau Produit");
        }
        
        System.out.println(panier);
    }
    
    
    
   // @Override
    public static Boolean modifierQTeArticle(Product p,int qteProduit){
    
        Boolean result=false;
        if(!panier.isEmpty()){
            
            System.out.println("aaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
           // System.out.println(p.getQuantiteProduit());
            //System.out.println(p.getQuantiteProduitClient());
            System.out.println(qteProduit);
            System.out.println(panier);
            System.out.println(p);
             System.out.println("aaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
             /*if(ProduitExiste(p))
       {
           System.out.println("oooooooooooooooooooooooooooo");
           if(qteProduit>0)
           {
            int positionProduit=1;
            
           
                
            
         positionProduit+= rechercherProduit(p.getName());
         System.out.println("oooooooooooooooooooooooooooo");
           if(positionProduit !=0){
               
              // if(qteProduit<= panier.get(positionProduit-1).getQuantiteProduit())
               //{
               //System.out.println(panier.get(positionProduit-1).getQuantiteProduit());
                 //panier.get(positionProduit-1).setQuantiteProduitClient(qteProduit);
                 System.out.println("oooooooooooooooooooooooooooo");
                 result=true;
             }
           }
           
           }
       
       }
        else
        {
            supprimerArticle(p);
        }
             
        }
        return result;
    }*/
        }return null;
}
    //@Override
    public static Boolean supprimerArticle(Product p){
    
        boolean result = false ;
        if(!panier.isEmpty()){
            
            if(ProduitExiste(p))
       {
       
        int positionProduit=1;
        
         positionProduit+= rechercherProduit(p.getName());
        
         
        if(positionProduit !=0){
 
        panier.remove(p);
        result=true;
        }
            
         
        }
        
        } 
        
        return result;
    }
    //@Override
    public static void afficherPanier(){
        
        //panier.forEach(p -> System.out.println(p));
       /* panier.forEach((p) -> {
            System.out.println(p);
        });*/
    }
    //@Override
    /*  public static double MontantGlobal(){
    
    double total=0;
    for(int i=0; i<panier.size();i++){
    total += panier.get(i).getQuantiteProduitClient()*panier.get(i).getPrixProduit();
    }
    return total;
    }

    */
    
   // @Override
    public static void  supprimePanier(){
  panier.clear();
}
    
   // @Override
    public static int compterArticles(){
    
        if(!panier.isEmpty()){
        return panier.size();
        }
        return 0;
    }

    //@Override
    public static boolean ProduitExiste(Product p) {
    return panier.contains(p);
    }
    
}