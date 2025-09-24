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
        <?php require 'profile-section.php' ?>

        <div class="about-section">
            <div>Tech is only a means, not an end in itself.</div>
            <div>We all need others to move forward.</div>
        </div>

        <div class="contact-info">
            <div class="contact-item">
                <span class="contact-icon">📧</span>
                <span>oury.david@gmail.com</span>
            </div>
            <div class="contact-item">
                <span class="contact-icon">📱</span>
                <span>+33 6 89 46 15 59</span>
            </div>
            <div class="contact-item">
                <span class="contact-icon">📍</span>
                <span>Marseille 13006</span>
            </div>
            <div class="contact-item">
                <span class="contact-icon">🌍</span>
                <span>Fluent English</span>
            </div>
        </div>

        <div class="skills-section">
            <h3 class="section-title">Technical Skills</h3>

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
                <h4>Principles & Methods</h4>
                <?php require 'skills/principles.php' ?>
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
        <section class="experience-section">

            <div class="experience-item">
                <div class="experience-header">
                    <div>
                        <h3 class="job-title">Senior Backend Engineer</h3>
                        <div class="company">PlayPlay - B2B video creation SaaS tool</div>
                        <div class="job-location">Paris - Permanent contract remote</div>
                    </div>
                    <div class="job-period">10/2024 - Present</div>
                </div>
                <div class="job-description">
                    PlayPlay provides a SaaS service for creating professional videos for marketing and internal or external communication purposes.
                </div>
                <ul class="achievements">
                    <li>API design, development, optimization, refactoring and monitoring</li>
                    <li>Quality and ROI driver for team deliverables</li>
                    <li>Collaboration on planning with managers</li>
                    <li>Mentoring fullstack engineers in the team</li>
                    <li>Technology watch and knowledge sharing with the backend community</li>
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
                        <div class="company">Ankorstore - European B2B Marketplace</div>
                        <div class="job-location">Paris - Permanent contract remote</div>
                    </div>
                    <div class="job-period">04/2022 - 09/2024</div>
                </div>
                <div class="job-description">
                    European marketplace connecting brands and independent retailers. Contribution to several English-speaking engineering teams (+50).
                </div>
                <ul class="achievements">
                    <li><strong>Monetization Squad:</strong> Design of a Go service for relevant ads with Elasticsearch indexing and click billing</li>
                    <li><strong>Catalog Squad:</strong> Re-implementation of inventory and product variations</li>
                    <li>Design and development of a multi-source integration framework (Google Sheets, CSV, Shopify API, WooCommerce...) including asynchronous workflow and traceability</li>
                    <li>Coordination of 3 teams facilitated by the modular architecture of this multi-source integrator framework</li>
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
                        <div class="company">Avis Vérifiés (NetReviews) - SaaS Platform</div>
                        <div class="job-location">Marseille - Permanent contract remote</div>
                    </div>
                    <div class="job-period">03/2021 - 01/2022</div>
                </div>
                <div class="job-description">
                    Refactoring monolithic platform towards modern microservices architecture with international English-speaking team.
                </div>
                <ul class="achievements">
                    <li><strong>Leadership:</strong> Management and mentoring of international backend team 8+ engineers</li>
                    <li><strong>Architecture:</strong> Zendesk SSO, attestation and reviews listing refactoring</li>
                    <li><strong>Performance:</strong> API optimizations (strategy, scenarios, analysis, fixes, 3x gains)</li>
                    <li><strong>Recruitment:</strong> Evaluation of senior technical profiles</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">PHP 7.4</span>
                    <span class="tech-tag">Symfony 4.4</span>
                    <span class="tech-tag">Hexagonal Architecture</span>
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
                        <div class="company">KALITI - SaaS Platform (Construction Sector)</div>
                        <div class="job-location">Marseille - Permanent contract remote</div>
                    </div>
                    <div class="job-period">04/2019 - 03/2021</div>
                </div>
                <div class="job-description">
                    Service dedicated to the construction sector (Nexity, Bouygues, Vinci): defect management and tracking on plans.
                </div>
                <ul class="achievements">
                    <li><strong>Technical Leadership:</strong> International team of 9 members</li>
                    <li><strong>Architecture & DevOps:</strong> SSO and REST API, AWS administration</li>
                    <li><strong>Fullstack Development:</strong> Performance optimization (cache, SQL)</li>
                    <li><strong>360° Leadership:</strong> Data integration, client support and recruitment</li>
                </ul>

                <ul class="achievements">
                    <li>International team technical leadership</li>
                    <li>SSO and REST API architecture, AWS administration</li>
                    <li>Fullstack development, performance optimization (cache, SQL)</li>
                    <li>Data integration, client support and recruitment</li>
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
                        <h3 class="job-title">Lead Developer</h3>
                        <div class="company">MYCHEZMOI - Real Estate Agency</div>
                        <div class="job-location">Marseille - Permanent contract</div>
                    </div>
                    <div class="job-period">04/2016 - 11/2018</div>
                </div>
                <div class="job-description">
                    Complete information system refactoring with REST architecture separating the Back Office ERM from the Frontend site: <a href="https://www.mychezmoi.com" target="_blank" style="color: #3498db; text-decoration: none;">https://www.mychezmoi.com</a>
                </div>
                <ul class="achievements">
                    <li><strong>R&D Innovation:</strong> API-first architecture accelerated by REST adaptation of Doctrine ORM</li>
                    <li><strong>Fullstack Development:</strong> Optimized volume handling for 1000+ real estate listings</li>
                    <li><strong>Team Organization:</strong> PO collaboration and technical management of 2 fullstack developers</li>
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
                        <h3 class="job-title">Developer & Architect Background</h3>
                        <div class="company">IT companies and publishers - Previous experiences</div>
                        <div class="job-location">Paris, Marseille, Aix-en-Provence</div>
                    </div>
                    <div class="job-period">03/2004 - 04/2016</div>
                </div>
                <ul class="achievements">
                    <li><strong>SO-BUZZ - Symfony R&D Manager (03/2015-04/2016):</strong> Social networks gamification, SOA REST platform design</li>
                    <li><strong>HighCo Data - 2S Computing - Web Engineer (11/2014-03/2015):</strong> Couponing platform refactoring - Frontend & Backoffice</li>
                    <li><strong>Virgin Mobile - ACENSI - Lead Developer (11/2012-03/2014):</strong> Technical leadership of 12 team members, development/deployment process industrialization, PHP 4/5 migrations, roadmap optimization and recruitment</li>
                    <li><strong>INFOTEL - Java/PHP Architect (03/2004-11/2011):</strong> Clients: Peugeot PSA, BNP Paribas, AGF, BEL, Ministry of National Education. PHP referent, design & development, technical leadership up to 10 coworkers, outsourcing & fixed-price projects, technology watch and R&D</li>
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
