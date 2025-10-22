# 🛫 Airport Badge Management System

## 📘 Project Overview
The **Airport Badge Management System** is a web-based application designed to streamline and secure the management of airport access badges for staff, contractors, and visitors.  
It provides a centralized platform to register, verify, and manage access permissions while ensuring compliance with airport safety regulations.

---

## ⚙️ Features
- 🔐 **User Authentication:** Secure login and logout system (`connexion.php`, `verifier_connexion.php`, `logout.php`)
- 🧾 **Badge Management:** Register, edit, and delete badges (`enregistrer_badge.php`)
- 👨‍💼 **Professional Management:** Manage airport personnel and professionals (`professionnels.php`)
- 🧩 **Form Handling:** Dynamic forms for badge and contact requests (`formulaire.php`, `contact.php`)
- 📄 **Homepage and Navigation:** User-friendly homepage and structured navigation (`accueil.php`, `modele.php`, `tarif.php`)
- 🎨 **Frontend Design:** Styled with `stage.css` and dynamic interactivity using `stage.js`
- 🖼️ **Media Management:** Images stored in the `/image` directory

---

## 🏗️ Project Structure
├── image/ # Project images and assets
├── accueil.php # Homepage
├── connexion.php # Login page
├── contact.php # Contact form
├── enregistrer_badge.php # Badge registration logic
├── formulaire.php # Form for badge requests
├── logout.php # Logout script
├── modeles.php # Page template or model management
├── professionnels.php # Management of professionals/staff
├── stage.css # Main stylesheet
├── stage.js # Main JavaScript file
├── stage.php # Main page or dashboard
├── tarif.php # Tariff or pricing information
├── verifier_connexion.php # Login verification script

---

## 🧰 Technologies Used
- **Frontend:** HTML5, CSS3, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL (recommended)  
- **Version Control:** Git & GitHub  

---

## 🚀 Installation & Setup
1. Clone the repository:
   ```bash
   git clone https://github.com/<your-username>/airport-badge-management.git
2.Place the project in your local server directory (e.g., htdocs for XAMPP).

3.Create a MySQL database and import the provided SQL file (if available).

4.Configure your database credentials in the PHP connection file (e.g., connexion.php).

5.Start your local server and open the project in your browser:
      http://localhost/airport-badge-management/accueil.php

🧑‍💻 Author

Abderrahmane Merstani
All files for my Project.

📜 License

This project is licensed under the MIT License — feel free to use, modify, and distribute it.


Would you like me to include a **“Database Structure” section** (with example tables like `users`, `badges`, `zones`, etc.) to make it more complete for your GitHub?
