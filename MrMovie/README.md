# 🎬 MrMovie

**MrMovie** is a Java-based cloud web application that provides full CRUD operations on a movie database.  
It was developed as part of the *Enterprise Programming* module for the **MSc Advanced Computer Science** program at **Manchester Metropolitan University**.

---

## 🧩 Overview

The goal of this project was to design a REST-style web service that allows users to **create, read, update, and delete** movie records stored in a remote database.  
The service was deployed on **Google Cloud Platform** and supports multiple data formats (`XML`, `JSON`, and `String`).

The application provides both:
- A **browser-based interface** for direct interaction with the database  
- A **programmatic API** for testing and integration

---

## ⚙️ Core Functionality

| Operation | Description |
|------------|-------------|
| `addFilm()` | Adds a new film to the database |
| `deleteFilm()` | Deletes a film by its unique ID |
| `updateFilm()` | Updates existing movie records |
| `listFilm()` | Displays all available movies |
| `searchFilm()` | Searches movies by title or ID |

---

## 🌐 Deployment

- Hosted on **Google App Engine**  
- Backend implemented in **Java EE (Servlets & JSP)**  
- Uses **MySQL** for data persistence  
- Supports both **UI-based** and **API-based** interactions  

---

## 🖥️ Technology Stack

- **Java EE** – Core application logic  
- **Google Cloud Platform (App Engine)** – Deployment environment  
- **MySQL** – Persistent data storage  
- **HTML / CSS / JavaScript** – Client-side interface  
- **RESTful Web Services** – API endpoints  

---

## 📄 Repository Contents

| File / Folder | Description |
|----------------|-------------|
| `source/` | Full implementation code for the web application |
| `Proof of coursework.pdf` | Demonstrates the system in action with screenshots and explanations |
| `Critical assessment.pdf` | Contains evaluation and analysis of the coursework |
| `README.txt` | Original project documentation from submission |

---

## 🎓 Academic Context

This coursework focused on building a scalable Java web service capable of performing full CRUD operations through both a web interface and a RESTful API.  
The goal was to demonstrate clean software architecture, separation of concerns, and reliable cloud deployment.  
It also explored secure user interactions, database integration, and structured data serialization (JSON/XML).

---

> *Developed by Ante Tomić*  
> *Manchester Metropolitan University – 2019 / 2020*
