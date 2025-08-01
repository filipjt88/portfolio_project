/* 
Template name: Project two
*/

<?php wp_header(); ?>
    <div class="container projects_one">
        <h1 class="text-center mb-4">Blog platform</h1>
        <dt class="mb-4">Personal blog engine with post creation, user registration/login, built using PHP and JavaScript.

        This project is a custom blog platform built using PHP for the backend and JavaScript for frontend interactions. It allows users to register, log in, and create blog posts through a simple and intuitive interface.

        The application features user authentication, post creation and management, and dynamic content rendering. All posts and user data are stored in a MySQL database, and server-side logic is handled using structured and secure PHP code. JavaScript is used to enhance interactivity on the client side.

        Key Features:
        User Registration & Login: Secure authentication with session management

        Post Management: Create, edit, and delete blog posts (per user)

        Dynamic Rendering: Display posts with titles, content, author, and timestamp

        Validation: Client-side (JavaScript) and server-side (PHP) form validation

        Database Integration: All data stored in MySQL using PDO for secure queries

        Clean UI: Minimalistic design with focus on content readability
        </dt>
        </br>
        <div class="row">
            <div class="col-md-4">
                <div class="project-images">
                    <img src="img/about_me.jpg" class="img-fluid" alt="Project image 1" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-images">
                    <img src="img/about.jpg" class="img-fluid" alt="Project image 1" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-images">
                    <img src="img/about.jpg" class="img-fluid" alt="Project image 1" />
                </div>
            </div>
            <a href="index.html#projects" class="back-link nav-link mt-4">← Back to Projects</a>
        </div>
    </div>

<?php wp_footer(); ?>