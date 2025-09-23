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
        <div class="profile-section">
            <div class="profile-image"></div>
            <h1 class="name">David OURY</h1>
            <div class="title"><?= $title ?></div>
            <div class="subtitle">21 ans d'expérience</div>
        </div>

        <div class="about-section">
            <div>La Tech n'est qu'un moyen, pas une fin en soi.</div>
            <div>On a tous besoin des autres pour avancer.</div>
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
                <span>Anglais courant</span>
            </div>
        </div>

        <div class="skills-section">
            <h3 class="section-title">Compétences Techniques</h3>

            <div class="skill-category">
                <h4>Backend</h4>
                <div class="skill-tags">
                    <span class="skill-tag">PHP 8</span>
                    <span class="skill-tag">Symfony</span>
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">Golang</span>
                    <span class="skill-tag">Redis</span>
                    <span class="skill-tag">API REST</span>
                    <span class="skill-tag">GraphQL</span>
                    <span class="skill-tag">PostgreSQL</span>
                    <span class="skill-tag">MySQL</span>
                </div>
            </div>

            <div class="skill-category">
                <h4>Frontend</h4>
                <div class="skill-tags">
                    <span class="skill-tag">TypeScript</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">Vue.js</span>
                    <span class="skill-tag">HTML5</span>
                    <span class="skill-tag">CSS3</span>
                    <span class="skill-tag">SASS</span>
                    <span class="skill-tag">jQuery</span>
                    <span class="skill-tag">Bootstrap</span>
                </div>
            </div>

            <div class="skill-category">
                <h4>Architecture</h4>
                <div class="skill-tags">
                    <span class="skill-tag">Clean Architecture</span>
                    <span class="skill-tag">Hexagonal</span>
                    <span class="skill-tag">CQRS</span>
                    <span class="skill-tag">DDD</span>
                    <span class="skill-tag">Microservices</span>
                </div>
            </div>

            <div class="skill-category">
                <h4>DevOps & Monitoring</h4>
                <div class="skill-tags">
                    <span class="skill-tag">Docker</span>
                    <span class="skill-tag">Apache</span>
                    <span class="skill-tag">Nginx</span>
                    <span class="skill-tag">Linux/Unix</span>
                    <span class="skill-tag">CI/CD</span>
                    <span class="skill-tag">Grafana</span>
                    <span class="skill-tag">Datadog</span>
                </div>
            </div>

            <div class="skill-category">
                <h4>Principes & Méthodes</h4>
                <div class="skill-tags">
                    <span class="skill-tag">Generative AI</span>
                    <span class="skill-tag">Clean code</span>
                    <span class="skill-tag">SOLID</span>
                    <span class="skill-tag">KISS</span>
                    <span class="skill-tag">TDD</span>
                    <span class="skill-tag">Code Review</span>
                    <span class="skill-tag">Git</span>
                    <span class="skill-tag">Agile</span>
                    <span class="skill-tag">SCRUM</span>
                </div>
            </div>
        </div>

        <div class="education-section">
            <h3 class="section-title">Formations</h3>
            <div class="tech-stack">
                <span class="skill-tag">2017 - Agile & SCRUM</span>
                <span class="skill-tag">2012 - Symfony 2</span>
                <span class="skill-tag">2009 - Certification Zend PHP 5</span>
                <span class="skill-tag">2009 - Zend Server</span>
                <span class="skill-tag">2006 - Design UML (Orsys)</span>
                <span class="skill-tag">2004 - Java, Struts (Infotel)</span>
                <span class="skill-tag">2002 - EPITA - Systèmes & réseaux</span>
            </div>
        </div>
    </div>

    <div class="main-content">
        <section class="experience-section">

            <div class="experience-item">
                <div class="experience-header">
                    <div>
                        <h3 class="job-title">Senior Backend Engineer</h3>
                        <div class="company">PlayPlay - Outil SaaS de création de vidéos B2B</div>
                        <div class="job-location">Paris - CDI en télétravail</div>
                    </div>
                    <div class="job-period">10/2024 - Présent</div>
                </div>
                <div class="job-description">
                    PlayPlay offre un service SaaS de création de vidéos professionnelles à usage du marketing et de communication interne ou externe.
                </div>
                <ul class="achievements">
                    <li>Conception, réalisation, optimisation, refactoring et monitoring de l'API</li>
                    <li>Moteur sur la qualité et le ROI des livrables de l'équipe</li>
                    <li>Collaboration à la planification avec les managers</li>
                    <li>Mentoring des ingénieurs fullstack de l'équipe</li>
                    <li>Veille technologique et partage de connaissance avec la communauté backend</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">Generative AI</span>
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
                    Marketplace européenne mettant en relation marques et commerces détaillants indépendants. Contribution à plusieurs équipes d'ingénieurs anglophones (+50).
                </div>
                <ul class="achievements">
                    <li><strong>Squad Monetization :</strong> Conception d'un service Go pour publicités pertinentes avec indexation Elasticsearch et facturation des clics</li>
                    <li><strong>Squad Catalog :</strong> Ré-implémentation des stocks et variations produits</li>
                    <li>Conception et réalisation d'un framework d'intégration multi-sources (Google Sheets, CSV, Shopify API, WooCommerce...) incluant workflow asynchrone et traçabilité</li>
                    <li>Coordination de 3 équipes facilitée par l'architecture modulaire du framework de cet intégrateur multi-sources</li>
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
                        <div class="company">Avis Vérifiés (NetReviews) - Éditeur SaaS</div>
                        <div class="job-location">Marseille - CDI en télétravail</div>
                    </div>
                    <div class="job-period">03/2021 - 01/2022</div>
                </div>
                <div class="job-description">
                    Refonte de plateforme monolithique vers architecture microservices moderne avec équipe internationale anglophone.
                </div>
                <ul class="achievements">
                    <li>Encadrement technique Backend de l'équipe internationale</li>
                    <li>Architecture SSO Zendesk, attestation et liste des avis</li>
                    <li>Tests de performance API : stratégie, scénarios, analyses, optimisations</li>
                    <li>Recrutement et évaluation des profils techniques</li>
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
                        <div class="company">KALITI - Éditeur SaaS (Secteur BTP)</div>
                        <div class="job-location">Marseille - CDI en télétravail</div>
                    </div>
                    <div class="job-period">04/2019 - 03/2021</div>
                </div>
                <div class="job-description">
                    Service SaaS dédié au secteur du bâtiment (Nexity, Bouygues, Vinci) : gestion des réserves et suivi sur plans.
                </div>
                <ul class="achievements">
                    <li>Leadership technique équipe internationale</li>
                    <li>Architecture SSO et API REST, administration AWS</li>
                    <li>Développement Fullstack, optimisation performances (cache, SQL)</li>
                    <li>Intégration de données, support client et recrutement</li>
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
                        <div class="company">Sociétés ESN et éditeurs - Expériences antérieures</div>
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
