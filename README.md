3D Supercar Showcase
====================

Overview
--------
This is a responsive single-page website that showcases interactive 3D car models. 
Users can explore Lamborghini Terzo, Ferrari, and Benz C63 with zoom and rotation features. 
A contact form is included, saving messages to a file and redirecting users to a Thank You page.

Features
--------
- Dark-themed responsive design
- Three interactive 3D car models using <model-viewer>
- Auto-rotation with hover-to-pause
- Zoom & Pan support
- Contact form with:
  - Message storage in submissions.txt
  - Thank You page redirection

Project Structure
-----------------
3d-supercar-showcase/
│── index.html          # Main page with 3D models
│── contact.php         # Contact page with form
│── thankyou.php        # Thank You page
│── submissions.txt     # Stores messages
│── style.css           # Styling
│── script.js           # Smooth scrolling & interactions
│── models/             # 3D models (.glb)
    ├── lamborghini_terzo.glb
    ├── ferrari.glb
    └── benz_g63.glb

How to Run Locally
------------------
1. Install PHP (Mac/Linux)
   brew install php
   php -v  # Verify installation

2. Start PHP server
   php -S localhost:8000

3. Open in browser
   - Main Page: http://localhost:8000/index.html
   - Contact Page: http://localhost:8000/contact.php

Testing the Contact Form
------------------------
1. Open contact.php
2. Submit a message
3. You will be redirected to the Thank You page
4. Check submissions.txt to confirm the message was saved


