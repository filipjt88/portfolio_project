/* 
Template name: Project one
*/
<?php wp_header(); ?>
    <div class="container projects_one">
        <h1 class="text-center mb-4">Mini Web shop</h1>
        <dt class="mb-4">Fullstack eCommerce app with React frontend and PHP + MySQL backend. Features include cart, user auth, product management, and order system.
            This project is a fully functional fullstack eCommerce web application built with a React frontend and a PHP + MySQL backend. It allows users to browse products, add items to a cart, register and log in, and place orders. The system also includes an admin interface for managing products and viewing orders.

            The frontend communicates with the backend via a RESTful API, ensuring a clean separation of concerns and scalable architecture. All product data, user information, and order details are securely stored and managed using a MySQL database with PHP and PDO.
            Key Features:
            User Authentication: Registration, login, and protected routes for authenticated users

            Product Catalog: Dynamic product listing from the database

            Shopping Cart: Add/remove items, adjust quantities, and view cart total

            Order System: Place orders and store order history per user

            Admin Panel: Add, update, and delete products; manage store inventory

            Responsive Design: Mobile-friendly layout using Bootstrap and React components

            Validation: Frontend and backend form validation for secure data handling
        </dt>
        <div class="row">
            <div class="col-md-4">
                <div class="project-images">
                    <img src="img/about_me.jpg" class="img-fluid" alt="Project image 1" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, non?</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-images">
                    <img src="img/about.jpg" class="img-fluid" alt="Project image 1" />
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae recusandae maxime dicta provident nisi odit blanditiis deleniti molestias perferendis ipsam.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-images">
                    <img src="img/about.jpg" class="img-fluid" alt="Project image 1" />
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, corrupti tempore dolorum neque ipsa recusandae!</p>
                </div>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-md-4">
                <div class="project-images">
                    <img src="img/about_me.jpg" class="img-fluid" alt="Project image 1" />
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, placeat sapiente laborum nobis minima deleniti laudantium excepturi atque ipsam non?</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-images">
                    <img src="img/about.jpg" class="img-fluid" alt="Project image 1" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, sed fugiat animi tenetur qui neque?</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-images">
                    <img src="img/about.jpg" class="img-fluid" alt="Project image 1" />
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur dolor unde culpa fugit aliquam totam officia.</p>
                </div>
            </div>
            <a href="index.html#projects" class="back-link nav-link mt-4">← Back to Projects</a>
        </div>
    </div>

    <!-- Footer -->
<?php wp_footer(); ?>