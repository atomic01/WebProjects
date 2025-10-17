# ToDoListApp

A simple full-stack **task management web application** built with PHP, MySQL, JavaScript, HTML, and CSS.  
Originally created as part of a **technical test for Locastic**, the project demonstrates authentication, CRUD functionality, and user session handling without the use of external frameworks.

---

## Overview

The ToDoListApp allows users to:
- Register and log in securely.
- Create, update, and delete personal task lists and tasks.
- Sort and filter tasks by **date, priority, or status**.
- Reset passwords and verify accounts through email (disabled on free hosting).

The project was intended to follow **object-oriented principles**, though implemented in a procedural style for simplicity.

---

## Technical Details

**Backend:** PHP 7 (procedural)  
**Frontend:** HTML5, CSS3, JavaScript  
**Database:** MySQL  
**Hosting:** Originally deployed on [Epizy free hosting](https://www.infinityfree.net/) (now inactive)

---

### Key Features
- User authentication (registration, login, password reset)
- CRUD operations for tasks and lists
- Data validation and sanitization
- Dynamic dashboard interface
- Simple, responsive UI with plain JavaScript

---

## Folder Structure

```
ToDoList_App/
│
├── css/                          # Styling files (main styles, dashboard layout)
├── js/                           # Front-end logic (form validation, UI interactions)
│
├── dashboard/                    # Authenticated user area
│   ├── add_task/, edit_task/, delete_task/   # Task CRUD operations
│   ├── sort_by_date/, sort_by_priority/      # Task sorting and filtering
│   ├── preview_list/, add_list/              # List management views
│   └── includes/                            # Shared PHP components
│
├── mysql_connect.php              # Database connection handler
├── index.php                      # Login and registration entry point
├── register_user.php              # Handles new user registration
├── verification_process.php       # Email verification logic
├── reset_password.php             # Password reset handler
├── login_user.php                 # Login form handler
│
└── assets/
    └── back.jpg                   # Background image
```

---

## Notes

- Email verification and password reset relied on PHP’s `mail()` function, which was **disabled** on the free hosting provider — these features are non-functional in the current version.
- The hosted link and database instance are no longer active.
- Example credentials (`tester@gmail.com / 12345678`) from the hosted demo are now deprecated.

---


## Technologies Used
- **PHP** (Core logic and authentication)
- **MySQL** (Data persistence)
- **HTML / CSS / JavaScript** (Front-end presentation)

---

## Project Status

🗂️ **Archived** — kept for portfolio and educational reference.  
📚 Demonstrates basic **full-stack CRUD**, form handling, and server-client logic integration in PHP.

---

*Created by Ante Tomičić as part of a coding test for Locastic.*
