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
        <?php require 'profile-section.php' ?>

        <div class="about-section">
            La Tech n'est qu'un moyen, pas une fin en soi.
        </div>

        <div class="contact-info">
            <div class="contact-item">
                <span class="contact-icon">📧</span>
                <span>oury.david@gmail.com</span>
            </div>
            <div class="contact-item">
                <span class="contact-icon">📱</span>
                <span>06 89 46 15 59</span>
            </div>
            <div class="contact-item">
                <span class="contact-icon">📍</span>
                <span>Marseille 13006</span>
            </div>
            <div class="contact-item">
                <span class="contact-icon">🌍</span>
                <span>Anglais bilingue</span>
            </div>
        </div>

        <div class="skills-section">
            <h3 class="section-title">Compétences Techniques</h3>

            <div class="skill-category">
                <h4>Backend</h4>
                <?php require 'skills/backend.php' ?>
            </div>

            <div class="skill-category">
                <h4>Frontend</h4>
                <?php require 'skills/frontend.php' ?>
            </div>

            <div class="skill-category">
                <h4>Architecture</h4>
                <?php require 'skills/architecture.php' ?>
            </div>

            <div class="skill-category">
                <h4>DevOps & Monitoring</h4>
                <?php require 'skills/devops.php' ?>
            </div>

            <div class="skill-category">
                <h4>Principes & Méthodes</h4>
                <?php require 'skills/principles.php' ?>
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
        <section class="experience-section">

            <div class="experience-item">
                <div class="experience-header">
                    <div>
                        <h3 class="job-title">Senior Backend Engineer</h3>
                        <div class="company">PlayPlay - SaaS de création de vidéos B2B</div>
                        <div class="job-location">Paris - CDI en télétravail</div>
                    </div>
                    <div class="job-period">10/2024 - 05/2025</div>
                </div>
                <div class="job-description">
                    Plateforme SaaS de création de vidéos professionnelles à usage du marketing et de communication interne ou externe.
                </div>
                <ul class="achievements">
                    <li><strong>API d'édition vidéo :</strong> Conception, monitoring et optimisations : refactoring, performance, scaling</li>
                    <li><strong>Pilotage qualité :</strong> Conformité et ROI des livrables backend</li>
                    <li><strong>Encadrement Équipe :</strong> Priorisation, planification et mentorat</li>
                    <li><strong>Innovation :</strong> Veille technologique + partage expertise backend</li>
                    <li><strong>Expérience Développeur :</strong> Optimisation d'intégration continue GitHub</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">AI Dev</span>
                    <span class="tech-tag">PHP 8.4</span>
                    <span class="tech-tag">Laravel 10</span>
                    <span class="tech-tag">Architecture hexagonale</span>
                    <span class="tech-tag">CQRS</span>
                    <span class="tech-tag">Clean code</span>
                    <span class="tech-tag">REST</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">BigQuery</span>
                    <span class="tech-tag">Kubernetes</span>
                    <span class="tech-tag">GCP</span>
                    <span class="tech-tag">Datadog</span>
                </div>
            </div>

            <div class="experience-item">
                <div class="experience-header">
                    <div>
                        <h3 class="job-title">Senior Backend Engineer</h3>
                        <div class="company">Ankorstore - Marketplace B2B européenne</div>
                        <div class="job-location">Paris - CDI en télétravail</div>
                    </div>
                    <div class="job-period">04/2022 - 09/2024</div>
                </div>
                <div class="job-description">
                    Marketplace européenne mettant en relation plus de 30 000 marques et commerces de détail indépendants. Contribution à plusieurs équipes d'ingénieurs anglophones (+50).
                </div>
                <ul class="achievements">
                    <li><strong>Squad Monetization :</strong> Conception du microservice Go d'indexation des publicités pertinentes à insérer dans le catalogue des produits. Facturation des clics : 70+ k€ en 6 mois</li>
                    <li><strong>Squad Catalog :</strong> Ré-implémentation des stocks/variations des produits + Framework de l'intégrateur produits asynchrone et multi-sources : Google Sheets, CSV, Excel, Shopify... 80 assistants client réaffectés</li>
                    <li><strong>Coordination technique :</strong> 3 équipes via scalabilité modulaire de l'intégrateur multi-sources</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">PHP 8.1</span>
                    <span class="tech-tag">Laravel 9</span>
                    <span class="tech-tag">Golang 1.21</span>
                    <span class="tech-tag">REST</span>
                    <span class="tech-tag">JSONAPI</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">PostgreSQL</span>
                    <span class="tech-tag">Redis</span>
                    <span class="tech-tag">Elasticsearch</span>
                    <span class="tech-tag">RabbitMQ</span>
                    <span class="tech-tag">Grafana</span>
                    <span class="tech-tag">GCP</span>
                </div>
            </div>

            <div class="experience-item">
                <div class="experience-header">
                    <div>
                        <h3 class="job-title">Lead Developer</h3>
                        <div class="company">Avis Vérifiés (NetReviews) - Plateforme SaaS</div>
                        <div class="job-location">Marseille - CDI en télétravail</div>
                    </div>
                    <div class="job-period">03/2021 - 01/2022</div>
                </div>
                <div class="job-description">
                    Refonte de plateforme monolithique vers architecture microservices moderne avec équipe internationale anglophone.
                </div>
                <ul class="achievements">
                    <li><strong>Leadership :</strong> Encadrement et monitorat backend équipe internationale 8+ ingénieurs</li>
                    <li><strong>Architecture :</strong> SSO Zendesk, refonte des attestations et liste des avis</li>
                    <li><strong>Performances :</strong> Optimisations API (stratégie, scénarios, analyse, correctifs, gains x3)</li>
                    <li><strong>Recrutement :</strong> Evaluation des profils techniques senior</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">PHP 7.4</span>
                    <span class="tech-tag">Symfony 4.4</span>
                    <span class="tech-tag">Architecture hexagonale</span>
                    <span class="tech-tag">REST</span>
                    <span class="tech-tag">JWT</span>
                    <span class="tech-tag">MongoDB</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">Redis</span>
                    <span class="tech-tag">RabbitMQ</span>
                    <span class="tech-tag">Gatling</span>
                    <span class="tech-tag">GraphQL</span>
                    <span class="tech-tag">Git Flow</span>
                    <span class="tech-tag">AWS</span>
                    <span class="tech-tag">X-Ray</span>
                </div>
            </div>

            <div class="experience-item">
                <div class="experience-header">
                    <div>
                        <h3 class="job-title">Lead Fullstack Developer</h3>
                        <div class="company">KALITI - Plateforme SaaS (Secteur BTP)</div>
                        <div class="job-location">Marseille - CDI en télétravail</div>
                    </div>
                    <div class="job-period">04/2019 - 03/2021</div>
                </div>
                <div class="job-description">
                    Service dédié au secteur du bâtiment (Nexity, Bouygues, Vinci) : gestion de réserves et suivi sur plans.
                </div>
                <ul class="achievements">
                    <li><strong>Encadrement technique :</strong> Equipe internationale de 9 membres</li>
                    <li><strong>Architecture & DevOps:</strong> SSO et API REST, administration AWS</li>
                    <li><strong>Développement Fullstack :</strong> Optimisation performances (cache, SQL)</li>
                    <li><strong>Leadership 360° :</strong> Intégration de données, support client et recrutement</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">PHP 7.3</span>
                    <span class="tech-tag">Symfony 4</span>
                    <span class="tech-tag">Yii 2</span>
                    <span class="tech-tag">REST</span>
                    <span class="tech-tag">NodeJS</span>
                    <span class="tech-tag">JavaScript</span>
                    <span class="tech-tag">TypeScript</span>
                    <span class="tech-tag">jQuery</span>
                    <span class="tech-tag">Less</span>
                    <span class="tech-tag">GraphQL</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">Git Flow</span>
                    <span class="tech-tag">Nginx</span>
                    <span class="tech-tag">AWS</span>
                    <span class="tech-tag">Lambda</span>
                </div>
            </div>

            <div class="experience-item">
                <div class="experience-header">
                    <div>
                        <h3 class="job-title">Lead Fullstack Developer</h3>
                        <div class="company">MYCHEZMOI - Agence immobilière</div>
                        <div class="job-location">Marseille - CDI</div>
                    </div>
                    <div class="job-period">04/2016 - 11/2018</div>
                </div>
                <div class="job-description">
                    Refonte complète du système d'information avec architecture REST séparant l'ERM Back Office du site Frontend : <a href="https://www.mychezmoi.com" target="_blank" style="color: #3498db; text-decoration: none;">http://www.mychezmoi.com</a>
                </div>
                <ul class="achievements">
                    <li><strong>Innovation R&D :</strong> Architecture API-first accélérée par adaptation REST de Doctrine ORM</li>
                    <li><strong>Développement Fullstack :</strong> Volume optimisé pour 1000+ annonces immobilières</li>
                    <li><strong>Organisation :</strong> Collaboration PO et encadrement technique de 2 développeurs fullstack</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">PHP 5.6</span>
                    <span class="tech-tag">Symfony 2.8</span>
                    <span class="tech-tag">Doctrine</span>
                    <span class="tech-tag">API Platform</span>
                    <span class="tech-tag">PostgreSQL</span>
                    <span class="tech-tag">Google Maps API</span>
                    <span class="tech-tag">jQuery</span>
                    <span class="tech-tag">CSS3</span>
                    <span class="tech-tag">SASS</span>
                </div>
            </div>

            <div class="experience-item">
                <div class="experience-header">
                    <div>
                        <h3 class="job-title">Parcours Développeur & Architecte</h3>
                        <div class="company">ESN et éditeurs - Expériences antérieures</div>
                        <div class="job-location">Paris, Marseille, Aix-en-Provence</div>
                    </div>
                    <div class="job-period">03/2004 - 04/2016</div>
                </div>
                <ul class="achievements">
                    <li><strong>Responsable R&D Symfony - SO-BUZZ (03/2015-04/2016) :</strong> Gamification des réseaux sociaux, Conception plateforme SOA REST</li>
                    <li><strong>Ingénieur Web - HighCo Data - 2S Computing (11/2014-03/2015) :</strong> Refonte plateforme couponing - Frontend & Backoffice</li>
                    <li><strong>Lead Developer - Virgin Mobile - ACENSI (11/2012-03/2014) :</strong> Encadrement technique d'équipe de 12 personnes, industrialisation des process de développement/déploiement, migrations PHP 4 vers PHP 5, optimisation roadmaps et recrutement</li>
                    <li><strong>Architecte Java/PHP - INFOTEL (03/2004-11/2011) :</strong> Clients : Peugeot PSA, BNP Paribas, AGF, BEL, Ministère Éducation Nationale. Référent PHP, conception & réalisation, encadrement technique jusqu'à 10 personnes, régie & forfait, veille technologique et R&D</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">PHP 4/5</span>
                    <span class="tech-tag">Symfony 2</span>
                    <span class="tech-tag">Java/J2EE</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">Oracle</span>
                    <span class="tech-tag">REST</span>
                    <span class="tech-tag">SOAP</span>
                    <span class="tech-tag">JavaScript</span>
                    <span class="tech-tag">Apache</span>
                </div>
            </div>
        </section>
    </div>
</div>
</body>
</html>
