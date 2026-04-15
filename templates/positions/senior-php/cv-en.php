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

        </div>

        <div class="education-section">
            <h3 class="section-title">Training</h3>
            <div class="skill-tags">
                <span class="skill-tag">2017 - Agile & SCRUM</span>
                <span class="skill-tag">2012 - Symfony 2</span>
                <span class="skill-tag">Zend PHP 5 Certification</span>
                <span class="skill-tag">UML Design</span>
                <span class="skill-tag">Java / Struts</span>
                <span class="skill-tag">EPITA - Systems & Networks</span>
            </div>
        </div>
    </div>

    <div class="main-content">

        <section class="summary-section">

            <div class="summary-item">
                <div class="summary-description">
                    <p>
                        Senior backend developer, specialized in PHP / Symfony / Laravel.
                        I work on high-traffic SaaS platforms:
                        API design, performance, code quality, structural refactorings.
                    </p>
                    <p>
                        My approach:
                        understand business needs,
                        ship quickly and cleanly,
                        maintain readable code.
                    </p>
                    <p>
                        I have coordinated teams when the context required it,
                        but my day-to-day remains development,
                        increasingly assisted by AI as a productivity tool (Claude Code).
                    </p>
                </div>
            </div>

        </section>

        <section class="experience-section">

            <div class="experience-item">
                <div class="experience-header">
                    <div>
                        <h3 class="job-title">Independent R&D Engineer</h3>
                        <div class="company">Technology watch & Skill development</div>
                    </div>
                    <div class="job-period">06/2025 - Present</div>
                </div>
                <div class="job-description">
                    Stack expansion and AI integration in backend projects. Public repositories including unit tests and quality tooling.
                </div>
                <ul class="achievements">
                    <li><strong>Python Backend Test</strong> (<a href="https://github.com/nytrimion/user-registration" target="_blank" style="color: #3498db; text-decoration: none;">nytrimion/user-registration</a>): FastAPI, raw SQL, Docker, GitHub Actions CI, documentation, ADRs, structured AI assistance</li>
                    <li><strong>React / Next.js Self-Training</strong> (<a href="https://github.com/nytrimion/react-training" target="_blank" style="color: #3498db; text-decoration: none;">nytrimion/react-training</a>): Fundamentals, recent versions, exercises and tests: Modal, Data List, Accordion, Tabs, Todo, Infinite List... In progress.</li>
                    <li><strong>Python Self-Training</strong> (<a href="https://github.com/nytrimion/python-training" target="_blank" style="color: #3498db; text-decoration: none;">nytrimion/python-training</a>): Structured lessons, exercises with unit tests, AI as tutor</li>
                    <li><strong>Voice interpretation mobile POC</strong> (<a href="https://github.com/nytrimion/device-steward" target="_blank" style="color: #3498db; text-decoration: none;">nytrimion/device-steward</a>): React Native/Expo, LLM benchmarking, Docker with CI quality validation</li>
                </ul>
                <div class="tech-stack">
                    <span class="tech-tag">Python</span>
                    <span class="tech-tag">FastAPI</span>
                    <span class="tech-tag">asyncio</span>
                    <span class="tech-tag">Celery</span>
                    <span class="tech-tag">React 19</span>
                    <span class="tech-tag">Next.js</span>
                    <span class="tech-tag">React Native</span>
                    <span class="tech-tag">Expo</span>
                    <span class="tech-tag">Docker</span>
                    <span class="tech-tag">GitHub Actions</span>
                    <span class="tech-tag">Claude Code</span>
                    <span class="tech-tag">LLM</span>
                </div>
            </div>

            <div class="experience-item">
                <div class="experience-header">
                    <div>
                        <h3 class="job-title">Senior Backend Engineer</h3>
                        <div class="company">PlayPlay - B2B video creation SaaS</div>
                        <div class="job-location">Paris - Full-time, remote</div>
                    </div>
                    <div class="job-period">10/2024 - 05/2025</div>
                </div>
                <div class="job-description">
                    SaaS platform for creating professional videos for marketing and internal/external communications.
                </div>
                <ul class="achievements">
                    <li><strong>Video Editing APIs:</strong> Design, monitoring and optimizations: refactoring, performance, scaling</li>
                    <li><strong>Quality Management:</strong> Compliance and ROI of backend deliverables</li>
                    <li><strong>Team Leadership:</strong> Prioritization, planning and mentoring</li>
                    <li><strong>Developer Experience:</strong> GitHub continuous integration optimization</li>
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
                        <div class="company">Ankorstore - European B2B Marketplace</div>
                        <div class="job-location">Paris - Full-time, remote</div>
                    </div>
                    <div class="job-period">04/2022 - 09/2024</div>
                </div>
                <div class="job-description">
                    European marketplace connecting 30,000+ brands and independent retailers. Contribution to several English-speaking engineering teams (+50).
                </div>
                <ul class="achievements">
                    <li><strong>Monetization Squad:</strong> Go microservice for ads indexing in product catalog. Click billing: €70k+ in 6 months</li>
                    <li><strong>Catalog Squad:</strong> Asynchronous & multi-source integrator framework (Google Sheets, CSV, Excel, Shopify) → 80 client assistants reassigned</li>
                    <li><strong>Technical Coordination:</strong> 3 teams via modular scalability of the multi-source product integrator</li>
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
                        <div class="company">Avis Vérifiés (NetReviews) - SaaS Platform</div>
                        <div class="job-location">Marseille - Full-time, remote</div>
                    </div>
                    <div class="job-period">03/2021 - 01/2022</div>
                </div>
                <div class="job-description">
                    Refactoring monolithic platform towards modern microservices architecture with international English-speaking team.
                </div>
                <ul class="achievements">
                    <li><strong>Leadership:</strong> International backend team mentoring (8+ engineers)</li>
                    <li><strong>Architecture:</strong> Zendesk SSO, attestation and reviews listing refactoring</li>
                    <li><strong>Performance:</strong> API optimizations → 3x gains</li>
                    <li><strong>Recruitment:</strong> Evaluation of senior technical profiles</li>
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
                        <div class="company">KALITI - SaaS Platform (Construction Sector)</div>
                        <div class="job-location">Marseille - Full-time, remote</div>
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
                        <div class="company">MYCHEZMOI - Real Estate Agency</div>
                        <div class="job-location">Marseille - Full-time</div>
                    </div>
                    <div class="job-period">04/2016 - 11/2018</div>
                </div>
                <div class="job-description">
                    Complete information system refactoring separating the Frontend site from the Back Office ERM: <a href="https://www.mychezmoi.com" target="_blank" style="color: #3498db; text-decoration: none;">https://www.mychezmoi.com</a>
                </div>
                <ul class="achievements">
                    <li><strong>R&D Innovation:</strong> API-first architecture accelerated by REST adaptation of Doctrine ORM</li>
                    <li><strong>Fullstack Development:</strong> Optimized volume for 1000+ real estate listings</li>
                    <li><strong>Team Lead:</strong> PO collaboration, technical management of 2 developers</li>
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
        </section>
    </div>
</div>
</body>
</html>
