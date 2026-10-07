# 📝 PHP Multi-User Blog Application

A complete and secure **Blog Management System** built using **PHP, MySQL, and Bootstrap 5**[cite: 8, 9, 10]. This application allows registered users to create, publish, manage, and read blog posts with user authentication[cite: 8, 9, 13, 15].

---

## 📌 Project Description

This web application provides a platform for users to publish their blogs with custom title, content, and cover images[cite: 8]. It includes session-based authentication[cite: 8, 9, 13] and ensures that users can only edit or delete their own posts while viewing all community blogs on the dashboard[cite: 9, 11, 12].

---

## 🚀 Key Features

* 🔐 **User Registration & Login:** Secure authentication using hashed passwords (`password_hash`)[cite: 13, 15].
* 📝 **Create Blog Posts:** Upload blog posts with title, image, and detailed content[cite: 8].
* 📊 **Interactive Dashboard:** View all blogs along with author details and creation date[cite: 9].
* ✏️ **Edit & Delete Access:** Users can edit or remove their own published blogs[cite: 9, 11, 12].
* 🖼️ **Image File Uploads:** Supports custom cover images for blog posts[cite: 8, 12].
* 🔒 **Session Management:** Protected routes ensuring non-logged-in users cannot access dashboard or blog creation[cite: 8, 9, 11, 12, 14].

---

## 🛠️ Tech Stack & Dependencies

* **Language:** PHP 8.x[cite: 8, 9]
* **Database:** MySQL
* **Frontend:** HTML5, CSS3, Bootstrap 5[cite: 8, 9]
* **Server:** Apache (XAMPP / WAMP / Localhost)

---

## 📁 File Structure

```text
blog-application/
│── db.php               # Database connection script[cite: 10]
│── register.php         # User registration form & logic[cite: 15]
│── login.php            # User authentication & session start[cite: 13]
│── dashbord.php         # Main blog feed and dashboard[cite: 9]
│── addblog.php          # Form to create and publish new blog posts[cite: 8]
│── edit.php             # Edit existing blog posts[cite: 12]
│── delete.php           # Delete blog posts[cite: 11]
│── logout.php           # Destroys session and logs out user[cite: 14]
└── uplad/               # Directory to store uploaded blog images[cite: 8, 9, 12]

## 📷 Screenshots
### 🟢 User Registration Page
<img width="844" height="450" alt="Screenshot 2026-10-06 172723" src="https://github.com/user-attachments/assets/d1073444-391d-4f5e-bff8-1dc87c9a3221" />
### 🔵 User Login Page
<img width="860" height="594" alt="Screenshot 2026-10-06 172647" src="https://github.com/user-attachments/assets/d2f5e8a3-139f-4c45-bd43-c331a287a9d1" />
### 🔴 Add New Blog Post
<img width="721" height="632" alt="Screenshot 2026-10-06 172603" src="https://github.com/user-attachments/assets/f9746003-83e3-467e-b3b9-7bb17eaaf86d" />
### 🟣 Main Blog Dashboard
<img width="1517" height="695" alt="Screenshot 2026-10-06 172305" src="https://github.com/user-attachments/assets/8217ca36-42e0-46d3-95c1-78ff57306b5f" />
<img width="1266" height="905" alt="Screenshot 2026-10-06 172521" src="https://github.com/user-attachments/assets/6045aca6-8230-4603-84fc-49a165f536cf" />


