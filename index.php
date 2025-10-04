<!-- Header -->
   <?php get_header(); ?>
       <!-- Hero -->
    <section id="home" class="hero">
        <div class="hero-overlay">
            <div class="hero-content">
                <img src="img/Filip.png" alt="Filip Jotić" class="rounded-circle mb-4 shadow" width="200">
                <h1 class="fw-bold">Hi, I'm Filip Jotić</h1>
                <p class="lead">Frontend Developer | JavaScript & React & PHP Specialist</p>
                <a href="#contact" class="btn btn-light m-2">Contact Me</a>
                <a href="docs/Filip_Jotic_CV_English.pdf" target="_blank" class="btn btn-outline-light m-3">View CV</a>
            </div>
        </div>
    </section>
    <!-- End of Hero --> 
   
   <!-- About me -->
    <section id="about">
        <div class="container">
            <div class="row g-0 align-items-center">
                <!-- Code Editor -->
                <div class="col-lg-6">
                    <div class="code-editor">
                        <div class="editor-header">
                            <span class="circle red"></span>
                            <span class="circle yellow"></span>
                            <span class="circle green"></span>
                            <span class="filename">profile.js</span>
                        </div>
                        <div class="editor-body">
                            <pre><code><span class="keyword">const</span> profile = &#123;
      name: <span class="value">'Filip Jotić'</span>,
      role: <span class="value">'Frontend Developer'</span>,
      experience: <span class="value">'3+ years'</span>,
      location: <span class="value">'Serbia'</span>,
      skills: [
        <span class="value">'HTML5'</span>, <span class="value">'CSS3'</span>,<span class="value">'JavaScript'</span>, <span class="value">'React'</span>, 
        <span class="value">'PHP'</span>, <span class="value">'Laravel'</span>,<span class="value">'MySQL'</span>,
        <span class="value">'Bootstrap'</span>, <span class="value">'Tailwind'</span>,
        <span class="value">'Git'</span>, <span class="value">'REST API'</span>, <span class="value">'WordPress'</span>
      ]
    &#125;;</code></pre>
                        </div>
                        <div class="editor-footer">
                            <span>UTF-8</span><span>JavaScript</span><span>Ln 12, Col 1</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-txt">
                    <h2 class="mb-4 fw-bold">About Me</h2>
                    <p class="text-muted">
                        I’m a frontend developer with a passion for clean, user-friendly design and seamless
                        experiences.
                        With a background in fullstack development and excellent communication skills, I build digital
                        products that truly connect with people.
                    </p>
                    <div class="row g-4 mt-4">
                        <div class="col-6">
                            <div class="d-flex align-items-start">
                                <div class="me-3 fs-4">💡</div>
                                <div>
                                    <h6 class="fw-semibold mb-1">Creative Problem Solver</h6>
                                    <p class="mb-5 small text-muted">Skilled in debugging and crafting efficient
                                        solutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-start">
                                <div class="me-3 fs-4">🧩</div>
                                <div>
                                    <h6 class="fw-semibold mb-1">Fullstack Capable</h6>
                                    <p class="mb-0 small text-muted">Experienced in PHP & MySQL for complete web
                                        solutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-start">
                                <div class="me-3 fs-4">🗣️</div>
                                <div>
                                    <h6 class="fw-bold mb-1">Excellent Communicator</h6>
                                    <p class="mb-0 small text-muted">Clear in presenting ideas and collaborating with
                                        teams.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-start">
                                <div class="me-3 fs-4">🚀</div>
                                <div>
                                    <h6 class="fw-bold mb-1">Driven to Grow</h6>
                                    <p class="mb-0 small text-muted">Always exploring new tools, tech, and approaches.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About me -->

    <!-- Skills -->
    <section id="skills-wrapper">
        <div id="skills">
            <h2>Skills & Technologies</h2>
            <div class="skills-container">
                <div class="skill-item">
                    <a class="nav-link" target="_blank" href="https://en.wikipedia.org/wiki/HTML5">
                        <img src="img/html5.svg" alt="HTML5" />
                    </a>
                    <div class="skill-name" style="color: #E34F26;">HTML5</div>
                </div>

                <div class="skill-item">
                    <a href="https://en.wikipedia.org/wiki/CSS" target="_blank" class="nav-link">
                        <img src="img/css3.svg" alt="CSS3" />
                    </a>
                    <div class="skill-name" style="color: #1572B6;">CSS3</div>
                </div>

                <div class="skill-item">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" class="nav-link">
                        <img src="img/javascript.svg" alt="JavaScript" />
                    </a>
                    <div class="skill-name" style="color: #F7DF1E;">JavaScript</div>
                </div>

                <div class="skill-item">
                    <a href="https://react.dev/" target="_blank" class="nav-link">
                        <img src="img/react.svg" alt="React" />
                    </a>
                    <div class="skill-name" style="color: #61DAFB;">React</div>
                </div>

                <div class="skill-item">
                    <a href="https://www.php.net/" target="_blank" class="nav-link">
                        <img src="img/php.svg" alt="PHP" />
                    </a>
                    <div class="skill-name" style="color: #777BB4;">PHP</div>
                </div>

                <div class="skill-item">
                    <a href="https://www.mysql.com/" target="_blank" class="nav-link">
                        <img src="img/mysql.svg" alt="MySQL" />
                    </a>
                    <div class="skill-name" style="color: #4479A1;">MySQL</div>
                </div>

                <div class="skill-item">
                    <a href="https://git-scm.com/" target="_blank" class="nav-link">
                        <img src="img/git.svg" alt="Git" />
                    </a>
                    <div class="skill-name" style="color: #F05032;">Git</div>
                </div>

                <div class="skill-item">
                    <a href="https://wordpress.org/" target="_blank" class="nav-link">
                        <img src="img/wordpress.svg" alt="WordPress" />
                    </a>
                    <div class="skill-name" style="color: #21759B;">WordPress</div>
                </div>

                <div class="skill-item">
                    <a href="https://getbootstrap.com/" target="_blank" class="nav-link">
                        <img src="img/bootstrap-logo.png" style="width:70px" alt="Bootstrap" />
                    </a>
                    <div class="skill-name" style="color: #7952B3;">Bootstrap</div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Skills -->

    <!-- Projects -->
    <section id="projects-wrapper">
        <div id="projects">
            <h2>Featured projects</h2>
            <div class="projects-container">
                <div class="project-card mb-5">
                    <a href="project_one.html" class="nav-link">
                        <h3 class="mb-4">Mini Web shop</h3>
                        <img src="img/blog1.jpg" alt="Project 1" />
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit obcaecati voluptatibus sunt
                        repudiandae alias beatae laboriosam quas est eos!</p>
                </div>
                <div class="project-card mb-5">
                    <a href="project_two.html" class="nav-link">
                        <h3 class="mb-4">CRM aplication</h3>
                        <img src="img/blog2.jpg" alt="Project 2" />
                    </a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae eligendi exercitationem eius
                        iure molestiae corporis magni rerum aut, eos dicta.</p>
                </div>

                <div class="project-card mb-5">
                    <a href="project_three.html" class="nav-link">
                        <h3 class="mb-4">Blog platform</h3>
                        <img src="img/blog3.jpg" alt="Project 3" />
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae harum officia deleniti nam
                        porro sint, repudiandae eos aliquam reprehenderit! Ducimus labore voluptatibus expedita
                        voluptate similique!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Projects -->

    <!-- Blog -->
    <section id="blog" class="blog-section">
        <div class="container">
            <h2 class="section-title">Latest Blog Posts</h2>
            <div class="blog-grid">
                <article class="blog-card">
                    <img src="img/blog1.jpg" alt="Blog Image 1" class="blog-img" />
                    <div class="blog-content">
                        <h3 class="blog-title">How I Built My Portfolio</h3>
                        <p class="blog-excerpt">A walkthrough of tools, design process, and performance tweaks I used.
                        </p>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </article>

                <article class="blog-card">
                    <img src="img/blog2.jpg" alt="Blog Image 2" class="blog-img" />
                    <div class="blog-content">
                        <h3 class="blog-title">Tips for Frontend Interviews</h3>
                        <p class="blog-excerpt">Here's how I prepared and what helped me succeed in real-world
                            interviews.
                        </p>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </article>

                <article class="blog-card">
                    <img src="img/blog3.jpg" alt="Blog Image 3" class="blog-img" />
                    <div class="blog-content">
                        <h3 class="blog-title">React vs Vanilla JS</h3>
                        <p class="blog-excerpt">When should you reach for a framework, and when does plain JS win?</p>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- End of Blog -->

    <!-- Contact -->
    <section id="contact">
        <div>
            <!-- LEFT SIDE: Contact Info -->
            <div id="left-side">
                <h2>Let’s Connect</h2>
                <p>
                    I'm always open to new opportunities, collaboration, or just a friendly tech chat. You can reach me
                    through any of the following:
                </p>

                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                    <i class="fas fa-envelope" style="font-size: 20px; color: #0077cc;"></i>
                    <a href="mailto:filipjotic.dev@gmail.com"
                        style="text-decoration: none; color: #0077cc; font-weight: 600;">filipjotic.dev@gmail.com</a>
                </div>

                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                    <i class="fas fa-location-dot" style="font-size: 20px; color: #0077cc;"></i>
                    <span style="color: #333;">Serbia, Europe (Remote Friendly 🌍)</span>
                </div>

                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                    <i class="fab fa-linkedin" style="font-size: 20px; color: #0077cc;"></i>
                    <a href="https://www.linkedin.com/in/filipjotic" target="_blank"
                        style="text-decoration: none; color: #0077cc; font-weight: 600;">linkedin.com/in/filipjotic</a>
                </div>

                <div style="display: flex; align-items: center; gap: 15px;">
                    <i class="fab fa-github" style="font-size: 20px; color: #0077cc;"></i>
                    <a href="https://github.com/filipjt88" target="_blank"
                        style="text-decoration: none; color: #0077cc; font-weight: 600;">github.com/filipjotic</a>
                </div>
            </div>

            <!-- RIGHT SIDE: Illustration -->
            <div style="flex: 1 1 350px; min-width: 280px;">
                <img src="img/contact.jpeg" alt="Contact Image"
                    style="width: 100%; max-width: 400px; border-radius: 12px;">
            </div>
        </div>
        <!-- End of RIGHT SIDE -->
    </section>
    <!-- End of Contact -->

<!-- Footer -->
 <?php get_footer(); ?>
 