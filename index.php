<!doctype html>
<html lang="en">
  <head>
    <?php require_once __DIR__ . '/feedback.php'; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#f6f4ff">
    <meta name="description" content="Project portfolio of Leynard Ayala, featuring campus and student service systems.">
    <title>
    Leynard Ayala — Work &amp; Projects
    </title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header class="wrap top">
      <a class="brand" href="#top">
      <span class="brand-icon">
      LA
      </span>
      Leynard Ayala
      </a>
      <nav class="nav" aria-label="Main navigation">
        <a href="#work">
        Projects
        </a>
        <a href="#about">
        About
        </a>
        <a class="pill-link" href="#work">
        Leave feedback
        </a>
      </nav>
    </header>
    <main id="top">
      <section class="wrap hero">
        <div class="hero-grid">
          <div class="eyebrow">
            Selected project work
          </div>
          <h1>
          Small details.
          <em>
          Better journeys.
          </em>
          </h1>
          <p>
          I’m Leynard Ayala. These projects explore how a website can make familiar tasks easier to browse, submit, and follow up on.
          </p>
          <div class="hero-foot">
            <span class="hero-chip">
            <strong>
            01
            </strong>
            Campus canteen
            </span>
            <span class="hero-chip">
            <strong>
            02
            </strong>
            Student enrollment
            </span>
            <span class="hero-chip">
            <strong>
            UI
            </strong>
            Clear workflows
            </span>
          </div>
        </div>
      </section>
      <section class="wrap work" id="work">
        <div class="work-head">
          <div>
            <div class="eyebrow dark">
              Project archive / 2026
            </div>
            <h2>
            Work in context.
            </h2>
          </div>
          <p>
          Two projects built around everyday needs: finding a campus meal and keeping an enrollment application moving.
          </p>
        </div>
        <div class="grid">
          <article class="card">
            <div class="art canteen" aria-hidden="true">
              <div class="takeout">
                <div class="small">
                  CCDI campus canteen
                </div>
                <strong>
                Browse the menu
                </strong>
                <div class="food-row">
                  <span>
                  Meals &amp; snacks
                  </span>
                  <b>
                  View
                  </b>
                </div>
                <div class="food-row">
                  <span>
                  Drinks &amp; sweets
                  </span>
                  <b>
                  View
                  </b>
                </div>
              </div>
            </div>
            <div class="body-copy">
              <div class="project-num">
                01 · CAMPUS EXPERIENCE
              </div>
              <h3>
              CCDI Campus Canteen
              </h3>
              <p>
              A multi-page site that organizes meals, drinks, sweets, and hot drinks into separate menu sections. Item pages and order-confirmation screens are part of the front-end demonstration; orders aren’t processed by a live service.
              </p>
              <div class="tags">
                <span class="tag">
                HTML
                </span>
                <span class="tag">
                CSS
                </span>
                <span class="tag">
                Multi-page site
                </span>
              </div>
              <?php render_feedback('canteen', 'Leynard'); ?>
            </div>
          </article>
          <article class="card">
            <div class="art enroll" aria-hidden="true">
              <div class="status-window">
                <div class="status-head">
                  STUDENT SERVICES · APPLICATION STATUS
                </div>
                <div class="status-content">
                  <h4>
                  Enrollment overview
                  </h4>
                  <div class="status-row">
                    <span>
                    Student profile
                    </span>
                    <span>
                    Grade 11
                    </span>
                    <b>
                    Pending
                    </b>
                  </div>
                  <div class="status-row">
                    <span>
                    Student profile
                    </span>
                    <span>
                    Grade 12
                    </span>
                    <b>
                    Accepted
                    </b>
                  </div>
                </div>
              </div>
            </div>
            <div class="body-copy">
              <div class="project-num">
                02 · STUDENT SERVICES
              </div>
              <h3>
              Student Enrollment Portal
              </h3>
              <p>
              A PHP and MySQL portal for submitting student details and checking enrollment status. Staff can review applications and mark them accepted or declined. Before real student records are used, input validation and database handling need further work.
              </p>
              <div class="tags">
                <span class="tag">
                PHP
                </span>
                <span class="tag">
                MySQL
                </span>
                <span class="tag">
                HTML
                </span>
                <span class="tag">
                CSS
                </span>
              </div>
              <?php render_feedback('enrollment', 'Leynard'); ?>
            </div>
          </article>
        </div>
      </section>
      <section class="about" id="about">
        <div class="wrap about-grid">
          <div>
            <div class="eyebrow dark">
              About Leynard
            </div>
            <h2>
            Useful work, made easier to follow.
            </h2>
          </div>
          <p>
          I’m Leynard Ayala. I’m interested in web development and the small design decisions that help people understand what to do next. These projects let me practice turning a menu and an application process into straightforward online experiences.
          </p>
        </div>
      </section>
    </main>
    <footer class="wrap footer">
      <div class="footer-inner">
        <span>
        Leynard Ayala · Project Portfolio
        </span>
        <span>
        CCDI Campus Canteen · Student Enrollment Portal
        </span>
      </div>
    </footer>
    <script src="script.js" defer>
    </script>
  </body>
</html>

