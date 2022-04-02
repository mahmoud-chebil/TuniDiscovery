/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author poste 1
 */
public class User {
    int id;
    String email;
    String roles;
    String password;
    int is_verified;
    String telephone;
    int is_expired;
    String image;

    public User() {
    }
public User(User u) {
     this.id = id;
        this.email = email;
        this.roles = roles;
        this.password = password;
        this.is_verified = is_verified;
        this.telephone = telephone;
        this.is_expired = is_expired;
        this.image = image;
    }
    public User(int id, String email, String roles, String password, int is_verified, String telephone, int is_expired, String image) {
        this.id = id;
        this.email = email;
        this.roles = roles;
        this.password = password;
        this.is_verified = is_verified;
        this.telephone = telephone;
        this.is_expired = is_expired;
        this.image = image;
    }

    public User(int id) {
        this.id = id;
    }

    public int getId() {
        return id;
    }

    public String getEmail() {
        return email;
    }

    public String getRoles() {
        return roles;
    }

    public String getPassword() {
        return password;
    }

    public int getIs_verified() {
        return is_verified;
    }

    public String getTelephone() {
        return telephone;
    }

    public int getIs_expired() {
        return is_expired;
    }

    public String getImage() {
        return image;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public void setRoles(String roles) {
        this.roles = roles;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public void setIs_verified(int is_verified) {
        this.is_verified = is_verified;
    }

    public void setTelephone(String telephone) {
        this.telephone = telephone;
    }

    public void setIs_expired(int is_expired) {
        this.is_expired = is_expired;
    }

    public void setImage(String image) {
        this.image = image;
    }
    
     private static User instance;
  
    public static User getInstance(){
        if (instance == null)
            instance = new User();
        
    return instance;
    }

  
    
    public static void setInstance(User user){
    instance = new User(user);
    }
    
    public  void sedeconnecter(){
    instance=null;
    }
    

    @Override
    public String toString() {
        return "User{" + "id=" + id + ", email=" + email + ", roles=" + roles + ", password=" + password + ", is_verified=" + is_verified + ", telephone=" + telephone + ", is_expired=" + is_expired + ", image=" + image + '}';
    }
    
    
    
    
}
