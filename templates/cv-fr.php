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
        <?php require 'sidebar/profile.php' ?>

        <?php require 'sidebar/contact.php' ?>

        <div class="skills-section">
            <h3 class="section-title">Compétences Techniques</h3>

            <div class="skill-category">
                <h4>Backend</h4>
                <?php require 'sidebar/skills/backend.php' ?>
            </div>

            <div class="skill-category">
                <h4>Frontend</h4>
                <?php require 'sidebar/skills/frontend.php' ?>
            </div>

            <div class="skill-category">
                <h4>Architecture</h4>
                <?php require 'sidebar/skills/architecture.php' ?>
            </div>

            <div class="skill-category">
                <h4>DevOps & Monitoring</h4>
                <?php require 'sidebar/skills/devops.php' ?>
            </div>

            <div class="skill-category">
                <h4>Principes & Méthodes</h4>
                <?php require 'sidebar/skills/principles.php' ?>
            </div>

            <div class="skill-category">
                <h4>Ingénierie Augmentée par IA ⚡</h4>
                <?php require 'sidebar/skills/artificial-intelligence.php' ?>
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

            <div class="experience-item">
                <div class="experience-header">
                    <div>
                        <h3 class="job-title">Ingénieur R&D Indépendant</h3>
                        <div class="company">Veille technologique & montée en compétences</div>
                    </div>
                    <div class="job-period">06/2025 - Présent</div>
                </div>
                <div class="job-description">
                    Extension de stack technique et élaboration de méthodologies assistées par IA.
                </div>
                <ul class="achievements">
                    <li><strong>Application mobile IoT :</strong> POC de transcription vocale continue (React Native/Expo), pivot vers Flutter/Dart, benchmark de LLMs avec scoring des stratégies de prompting</li>
                    <li><strong>Autoformation Python :</strong> Clean architecture asynchrone (asyncio, threading, Celery). Supervision par IA comme mentor (méthode publiée sur GitHub)</li>
                    <li><strong>Autoformation React 19 / Next.js :</strong> Fonctionnalités avancées, même méthodologie par IA</li>
                    <li><strong>Méthodologie IA :</strong> Maturation du workflow de développement : planification collaborative, documentations, gestion de contexte, review systématique</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">Python</span>
                    <span class="tech-tag">FastAPI</span>
                    <span class="tech-tag">asyncio</span>
                    <span class="tech-tag">Celery</span>
                    <span class="tech-tag">React 19</span>
                    <span class="tech-tag">Next.js</span>
                    <span class="tech-tag">Flutter</span>
                    <span class="tech-tag">Dart</span>
                    <span class="tech-tag">React Native</span>
                    <span class="tech-tag">Expo</span>
                    <span class="tech-tag">Claude Code</span>
                    <span class="tech-tag">Ollama</span>
                    <span class="tech-tag">LLM</span>
                    <span class="tech-tag">Prompt Engineering</span>
                </div>
            </div>

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
                    Plateforme SaaS de création de vidéos professionnelles pour le marketing et la communication interne ou externe.
                </div>
                <ul class="achievements">
                    <li><strong>API d'édition vidéo :</strong> Conception, monitoring et optimisations : refactoring, performance, scaling</li>
                    <li><strong>Pilotage qualité :</strong> Conformité et ROI des livrables backend</li>
                    <li><strong>Encadrement Équipe :</strong> Priorisation, planification et mentorat</li>
                    <li><strong>Expérience Développeur :</strong> Optimisation d'intégration continue GitHub</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">AI Dev</span>
                    <span class="tech-tag">PHP 8.4</span>
                    <span class="tech-tag">Laravel 10</span>
                    <span class="tech-tag">Hexagonal</span>
                    <span class="tech-tag">DDD</span>
                    <span class="tech-tag">CQRS</span>
                    <span class="tech-tag">Clean code</span>
                    <span class="tech-tag">REST</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">BigQuery</span>
                    <span class="tech-tag">Kubernetes</span>
                    <span class="tech-tag">GCP</span>
                    <span class="tech-tag">Datadog</span>
                    <span class="tech-tag">GitHub Actions</span>
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
                    <li><strong>Squad Monetization :</strong> Microservice Go d'indexation publicitaire pour le catalogue produits. Facturation des clics : 70+ k€ en 6 mois</li>
                    <li><strong>Squad Catalog :</strong> Framework d'intégration asynchrone multi-sources (Google Sheets, CSV, Excel, Shopify) → 80 assistants réaffectés</li>
                    <li><strong>Coordination technique :</strong> 3 équipes via scalabilité modulaire de l'intégrateur multi-sources</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">PHP 8.1</span>
                    <span class="tech-tag">Laravel 9</span>
                    <span class="tech-tag">Go 1.21</span>
                    <span class="tech-tag">Hexagonal</span>
                    <span class="tech-tag">DDD</span>
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
                    <li><strong>Leadership :</strong> Mentorat équipe internationale backend (8+ ingénieurs)</li>
                    <li><strong>Architecture :</strong> SSO Zendesk, refonte des attestations et liste des avis</li>
                    <li><strong>Performances :</strong> Optimisations API → gains x3</li>
                    <li><strong>Recrutement :</strong> Evaluation des profils techniques senior</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">PHP 7.4</span>
                    <span class="tech-tag">Symfony 4.4</span>
                    <span class="tech-tag">Hexagonal</span>
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
                    <li><strong>Architecture & DevOps :</strong> SSO et API REST, administration AWS</li>
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
                    Refonte complète du système d'information qui distingue le site Frontend de l'ERM Back Office : <a href="https://www.mychezmoi.com" target="_blank" style="color: #3498db; text-decoration: none;">https://www.mychezmoi.com</a>
                </div>
                <ul class="achievements">
                    <li><strong>Innovation R&D :</strong> Architecture API-first accélérée par adaptation REST de Doctrine ORM</li>
                    <li><strong>Développement Fullstack :</strong> Volume optimisé pour 1000+ annonces immobilières</li>
                    <li><strong>Coordination :</strong> Collaboration PO et encadrement technique de 2 développeurs fullstack</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">PHP 5.6</span>
                    <span class="tech-tag">Symfony 2.8</span>
                    <span class="tech-tag">Doctrine</span>
                    <span class="tech-tag">API Platform</span>
                    <span class="tech-tag">REST</span>
                    <span class="tech-tag">PostgreSQL</span>
                    <span class="tech-tag">Google Maps API</span>
                    <span class="tech-tag">JavaScript</span>
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
                    <li><strong>SO-BUZZ (03/2015-04/2016) :</strong> Responsable R&D Symfony, plateforme SOA REST de gamification sociale</li>
                    <li><strong>HighCo Data (11/2014-03/2015) :</strong> Refonte plateforme couponing - Frontend & Backoffice</li>
                    <li><strong>Virgin Mobile / ACENSI (11/2012-03/2014) :</strong> Lead Developer, équipe de 12, industrialisation CI/CD, migrations PHP 4→5</li>
                    <li><strong>INFOTEL (03/2004-11/2011) :</strong> Architecte Java/PHP @ PSA, BNP Paribas, AGF, BEL, Min. Éducation Nationale. Encadrement jusqu'à 10 personnes</li>
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
                    <span class="tech-tag">jQuery</span>
                    <span class="tech-tag">HTML</span>
                    <span class="tech-tag">CSS</span>
                    <span class="tech-tag">Apache</span>
                </div>
            </div>
        </section>
    </div>
</div>
</body>
</html>
