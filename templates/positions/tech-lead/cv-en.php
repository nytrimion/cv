<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David OURY - <?= $title ?></title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
<div class="cv-container">
    <div class="sidebar">
        <?php $this->render('profile') ?>

        <?php $this->render('contact') ?>

        <div class="skills-section">
            <h3 class="section-title">Technical Skills</h3>

            <div class="skill-category">
                <h4>Backend</h4>
                <?php $this->render('skills/backend') ?>
            </div>

            <div class="skill-category">
                <h4>Frontend</h4>
                <?php $this->render('skills/frontend') ?>
            </div>

            <div class="skill-category">
                <h4>Architecture</h4>
                <?php $this->render('skills/architecture') ?>
            </div>

            <div class="skill-category">
                <h4>DevOps & Monitoring</h4>
                <?php $this->render('skills/devops') ?>
            </div>

            <div class="skill-category">
                <h4>Principles & Methods</h4>
                <?php $this->render('skills/principles') ?>
            </div>

            <div class="skill-category">
                <h4>AI-Enhanced Engineering ⚡</h4>
                <?php $this->render('skills/artificial-intelligence') ?>
            </div>
        </div>

        <div class="education-section">
            <h3 class="section-title">Training</h3>
            <div class="skill-tags">
                <span class="skill-tag">2017 - Agile & SCRUM</span>
                <span class="skill-tag">2012 - Symfony 2</span>
                <span class="skill-tag">2009 - Zend PHP 5 Certification</span>
                <span class="skill-tag">2009 - Zend Server</span>
                <span class="skill-tag">2006 - UML Design (Orsys)</span>
                <span class="skill-tag">2004 - Java, Struts (Infotel)</span>
                <span class="skill-tag">2002 - EPITA - Systems & Networks</span>
            </div>
        </div>
    </div>

    <div class="main-content">

        <section class="summary-section">

            <div class="summary-item">
                <div class="summary-description">
                    <p>
                        My 20+ years of experience in architecture and leading international teams
                        have convinced me that Tech is only a means to serve business goals.
                    </p>
                    <p>
                        My approach:
                        analyze business needs,
                        deliver value in production,
                        structure code for maintainability,
                        and integrate AI methodology that improves quality and productivity.
                    </p>
                    <p>
                        What drives me: sharing expertise and continuous growth.
                    </p>
                </div>
            </div>

        </section>

        <section class="experience-section">

            <?php $this->render("experiences/{$lang}/rd") ?>

            <?php $this->render("experiences/{$lang}/playplay") ?>

            <?php $this->render("experiences/{$lang}/ankorstore") ?>

            <?php $this->render("experiences/{$lang}/netreviews") ?>

            <?php $this->render("experiences/{$lang}/kaliti") ?>

            <?php $this->render("experiences/{$lang}/mychezmoi") ?>

            <?php $this->render("experiences/{$lang}/history") ?>

        </section>
    </div>
</div>
</body>
</html>
