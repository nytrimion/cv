<!DOCTYPE html>
<html lang="fr">
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
            <h3 class="section-title">Compétences Techniques</h3>

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
                <h4>Principes & Méthodes</h4>
                <?php $this->render('skills/principles') ?>
            </div>

            <div class="skill-category">
                <h4>Ingénierie Augmentée par IA ⚡</h4>
                <?php $this->render('skills/artificial-intelligence') ?>
            </div>
        </div>

        <div class="education-section">
            <h3 class="section-title">Formations</h3>
            <div class="skill-tags">
                <span class="skill-tag">2017 - Agile & SCRUM</span>
                <span class="skill-tag">2012 - Symfony 2</span>
                <span class="skill-tag">2009 - Certification Zend PHP 5</span>
                <span class="skill-tag">2009 - Zend Server</span>
                <span class="skill-tag">2006 - Design UML (Orsys)</span>
                <span class="skill-tag">2004 - Java, Struts (Infotel)</span>
                <span class="skill-tag">2002 - EPITA - Systèmes & Réseaux</span>
            </div>
        </div>
    </div>

    <div class="main-content">

        <section class="summary-section">

            <div class="summary-item">
                <div class="summary-description">
                    <p>
                        Mon expérience de plus de 20 ans en architecture et encadrement d'équipes
                        internationales m'a convaincu que la Tech n'est qu'un moyen au service du business.
                    </p>
                    <p>
                        Mon approche :
                        analyser le besoin métier,
                        livrer de la valeur en production,
                        structurer le code pour sa maintenabilité,
                        et intégrer une méthodologie IA qui améliore qualité et productivité.
                    </p>
                    <p>
                        Ce qui me motive : partager l'expertise et progresser sans cesse.
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
