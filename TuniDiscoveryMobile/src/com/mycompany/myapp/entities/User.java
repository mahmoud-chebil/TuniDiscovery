/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author Lenovo
 */
public class User {
 private int id;
 private String userName;
 private String password;
 private String adresse;
 private String email;
 private String  role;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getUserName() {
        return userName;
    }

    public void setUserName(String userName) {
        this.userName = userName;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getRole() {
        return role;
    }

    public void setRole(String role) {
        this.role = role;
    }

    @Override
    public String toString() {
        return "User{" + "id=" + id + ", userName=" + userName + ", password=" + password + ", adresse=" + adresse + ", email=" + email + ", role=" + role + '}';
    }

    public User(int id, String userName, String password, String adresse, String email, String role) {
        this.id = id;
        this.userName = userName;
        this.password = password;
        this.adresse = adresse;
        this.email = email;
        this.role = role;
    }

    public User() {
    }
 
    
    
}
