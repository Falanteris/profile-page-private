<?php
// Personal Profile Data
$tz = $_GET["tz"] ?? "Asia/Jakarta";

$date = shell_exec('TZ="'.$tz.'" date');
$profile = [
    "name" => "Rayhan Rabiul Tsani",
    "title" => "Security Enthusiast",
    "tagline" => "One small step at a time",
    "avatar_initials" => "RT",
    "email" => "rayhan@madhava.co.id",
    "location" => "San Francisco, CA",
    "website" => "falanteris.github.io",
    "github" => "github.com/Falanteris",
    "linkedin" => "linkedin.com/Falanteris",
    "bio" => "Aspiring Security Enthusiast interested in all avenues of Cyber Security",
    "stats" => [
        ["value" => "4+", "label" => "Years Exp."],
        ["value" => "10+", "label" => "Projects"],
        ["value" => "40+", "label" => "Clients"],
        ["value" => "99%", "label" => "Satisfaction"],
    ],
    "skills" => [
        ["name" => "Blue Teaming", "level" => 90],
        ["name" => "Mobile Pentest", "level" => 80],
        ["name" => "Web Pentest", "level" => 85],
        ["name" => "Relational Database", "level" => 88],
        ["name" => "Docker / DevOps", "level" => 78],
        ["name" => "Forensic", "level" => 80],
    ],
    "projects" => [
        [
            "title" => "NexaCommerce",
            "desc" => "A headless e-commerce platform handling 50k+ daily transactions with real-time inventory sync.",
            "tags" => ["PHP", "React", "Redis"],
            "year" => "2024",
        ],
        [
            "title" => "PulseAnalytics",
            "desc" => "SaaS dashboard with live data streaming, custom report builder, and multi-tenant architecture.",
            "tags" => ["Laravel", "Vue", "WebSocket"],
            "year" => "2023",
        ],
        [
            "title" => "TerraNova CMS",
            "desc" => "Open-source CMS with visual page builder, plugin ecosystem, and headless API support.",
            "tags" => ["PHP", "MySQL", "REST API"],
            "year" => "2023",
        ],
    ],
    "experience" => [
        ["role" => "Lead Developer", "company" => "Vertex Labs", "period" => "2022 — Present"],
        ["role" => "Senior Engineer", "company" => "Brightwave Inc.", "period" => "2020 — 2022"],
        ["role" => "Frontend Developer", "company" => "Pixelcraft Studio", "period" => "2018 — 2020"],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  <?= htmlspecialchars($profile['name']) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg: #0a0a0f;
            --surface: #111118;
            --card: #16161f;
            --border: rgba(255,255,255,0.07);
            --accent: #e8ff47;
            --accent2: #7b6cff;
            --text: #e8e8f0;
            --muted: #6e6e8a;
            --font-display: 'Syne', sans-serif;
            --font-body: 'DM Sans', sans-serif;
        }

        html { scroll-behavior: smooth; }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: var(--font-body);
            line-height: 1.6;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Noise texture overlay */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 0;
            opacity: 0.4;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 24px;
            position: relative;
            z-index: 1;
        }

        /* ── HERO ── */
        .hero {
            padding: 80px 0 60px;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 48px;
            align-items: center;
            border-bottom: 1px solid var(--border);
            animation: fadeUp 0.7s ease both;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(232,255,71,0.08);
            border: 1px solid rgba(232,255,71,0.2);
            border-radius: 100px;
            padding: 6px 14px;
            font-size: 12px;
            font-weight: 500;
            color: var(--accent);
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .hero-badge::before {
            content: '';
            width: 6px; height: 6px;
            background: var(--accent);
            border-radius: 50%;
            box-shadow: 0 0 8px var(--accent);
            animation: pulse 2s ease infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }

        .hero h1 {
            font-family: var(--font-display);
            font-size: clamp(2.4rem, 5vw, 3.8rem);
            font-weight: 800;
            line-height: 1.05;
            letter-spacing: -0.03em;
            margin-bottom: 16px;
        }

        .hero h1 span { color: var(--accent); }

        .hero-title {
            font-size: 1rem;
            color: var(--muted);
            font-weight: 300;
            margin-bottom: 12px;
        }

        .hero-tagline {
            font-size: 1.05rem;
            color: rgba(232,232,240,0.7);
            max-width: 480px;
            font-style: italic;
        }

        .avatar {
            width: 130px;
            height: 130px;
            border-radius: 24px;
            background: linear-gradient(135deg, var(--accent2), var(--accent));
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-display);
            font-size: 2.4rem;
            font-weight: 800;
            color: #0a0a0f;
            position: relative;
            flex-shrink: 0;
        }

        .avatar::after {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: 26px;
            background: linear-gradient(135deg, var(--accent2), var(--accent));
            z-index: -1;
            filter: blur(16px);
            opacity: 0.4;
        }

        /* ── CONTACT STRIP ── */
        .contact-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 28px 0;
            border-bottom: 1px solid var(--border);
            animation: fadeUp 0.7s 0.1s ease both;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--muted);
            font-size: 0.88rem;
            text-decoration: none;
            transition: color 0.2s;
        }

        .contact-item:hover { color: var(--accent); }

        .contact-item svg { width: 15px; height: 15px; flex-shrink: 0; }

        /* ── STATS ── */
        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1px;
            background: var(--border);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            margin: 48px 0;
            animation: fadeUp 0.7s 0.2s ease both;
        }

        .stat {
            background: var(--card);
            padding: 28px 20px;
            text-align: center;
            transition: background 0.2s;
        }

        .stat:hover { background: #1c1c28; }

        .stat-value {
            font-family: var(--font-display);
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--accent);
            letter-spacing: -0.04em;
            line-height: 1;
            margin-bottom: 6px;
        }

        .stat-label {
            font-size: 0.78rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        /* ── SECTION ── */
        section {
            padding: 48px 0;
            border-bottom: 1px solid var(--border);
            animation: fadeUp 0.7s ease both;
        }

        section:last-child { border-bottom: none; }

        .section-label {
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 8px;
        }

        .section-title {
            font-family: var(--font-display);
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            margin-bottom: 32px;
        }

        /* ── BIO ── */
        .bio-text {
            font-size: 1.05rem;
            color: rgba(232,232,240,0.8);
            max-width: 680px;
            font-weight: 300;
            line-height: 1.8;
        }

        /* ── SKILLS ── */
        .skills-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .skill-item { }

        .skill-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .skill-name { font-size: 0.9rem; font-weight: 500; }

        .skill-pct {
            font-size: 0.8rem;
            color: var(--muted);
            font-family: var(--font-display);
        }

        .skill-bar {
            height: 4px;
            background: rgba(255,255,255,0.06);
            border-radius: 2px;
            overflow: hidden;
        }

        .skill-fill {
            height: 100%;
            border-radius: 2px;
            background: linear-gradient(90deg, var(--accent2), var(--accent));
            transform-origin: left;
            animation: barGrow 1.2s cubic-bezier(0.16,1,0.3,1) both;
        }

        @keyframes barGrow {
            from { transform: scaleX(0); }
            to { transform: scaleX(1); }
        }

        /* ── PROJECTS ── */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .project-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 24px;
            transition: border-color 0.2s, transform 0.2s;
            position: relative;
            overflow: hidden;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--accent2), var(--accent));
            opacity: 0;
            transition: opacity 0.3s;
        }

        .project-card:hover {
            border-color: rgba(232,255,71,0.2);
            transform: translateY(-3px);
        }

        .project-card:hover::before { opacity: 1; }

        .project-year {
            font-size: 0.75rem;
            color: var(--muted);
            letter-spacing: 0.1em;
            margin-bottom: 10px;
        }

        .project-title {
            font-family: var(--font-display);
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 10px;
            letter-spacing: -0.01em;
        }

        .project-desc {
            font-size: 0.85rem;
            color: rgba(232,232,240,0.6);
            line-height: 1.6;
            margin-bottom: 16px;
            font-weight: 300;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .tag {
            font-size: 0.72rem;
            background: rgba(123,108,255,0.12);
            color: rgba(123,108,255,0.9);
            border: 1px solid rgba(123,108,255,0.2);
            padding: 3px 10px;
            border-radius: 100px;
            letter-spacing: 0.05em;
        }

        /* ── EXPERIENCE ── */
        .exp-list { display: flex; flex-direction: column; gap: 0; }

        .exp-item {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid var(--border);
            transition: padding-left 0.2s;
            cursor: default;
        }

        .exp-item:last-child { border-bottom: none; }
        .exp-item:hover { padding-left: 12px; }

        .exp-role {
            font-family: var(--font-display);
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: -0.01em;
            margin-bottom: 4px;
        }

        .exp-company {
            font-size: 0.85rem;
            color: var(--muted);
        }

        .exp-period {
            font-size: 0.8rem;
            color: var(--muted);
            font-family: var(--font-display);
            letter-spacing: 0.05em;
        }

        /* ── FOOTER ── */
        footer {
            padding: 40px 0;
            text-align: center;
            color: var(--muted);
            font-size: 0.82rem;
        }

        footer span { color: var(--accent); }

        /* ── ANIMATIONS ── */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 720px) {
            .hero { grid-template-columns: 1fr; }
            .avatar { display: none; }
            .stats { grid-template-columns: repeat(2, 1fr); }
            .skills-grid { grid-template-columns: 1fr; }
            .projects-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
<div class="container">
    
    <!-- HERO -->
    <header class="hero">
        <div>
            <div class="hero-badge">Available for work</div>
            <p class="hero-title" style="font-color: white;"><b><?= $date ?></b></p>
            <h1> My Name is <?= htmlspecialchars($profile['name']) ?><span>.</span></h1>
            <p class="hero-title"><?= htmlspecialchars($profile['title']) ?></p>
            <p class="hero-tagline"><?= htmlspecialchars($profile['tagline']) ?></p>
        </div>
        <div class="avatar"><?= htmlspecialchars($profile['avatar_initials']) ?></div>
    </header>

    <!-- CONTACT -->
    <div class="contact-strip">
        <a href="mailto:<?= htmlspecialchars($profile['email']) ?>" class="contact-item">
            <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            <?= htmlspecialchars($profile['email']) ?>
        </a>
        <a href="#" class="contact-item">
            <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            <?= htmlspecialchars($profile['location']) ?>
        </a>
        <a href="https://<?= htmlspecialchars($profile['github']) ?>" class="contact-item">
            <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.31 9.42 7.9 10.95.58.1.79-.25.79-.56v-2c-3.2.7-3.88-1.54-3.88-1.54-.52-1.33-1.28-1.69-1.28-1.69-1.05-.71.08-.7.08-.7 1.16.08 1.77 1.2 1.77 1.2 1.03 1.76 2.7 1.25 3.36.96.1-.75.4-1.25.73-1.54-2.55-.29-5.23-1.28-5.23-5.7 0-1.26.45-2.29 1.19-3.1-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.18 1.19a11.1 11.1 0 012.9-.39c.98 0 1.97.13 2.9.39 2.2-1.5 3.17-1.19 3.17-1.19.63 1.59.23 2.76.11 3.05.74.81 1.19 1.84 1.19 3.1 0 4.43-2.69 5.41-5.25 5.69.41.36.78 1.06.78 2.13v3.16c0 .31.21.67.8.56C20.19 21.42 23.5 17.1 23.5 12 23.5 5.65 18.35.5 12 .5z"/></svg>
            <?= htmlspecialchars($profile['github']) ?>
        </a>
        <a href="https://<?= htmlspecialchars($profile['linkedin']) ?>" class="contact-item">
            <svg fill="currentColor" viewBox="0 0 24 24"><path d="M20.45 20.45h-3.56v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.13 1.45-2.13 2.94v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.63-1.85 3.35-1.85 3.58 0 4.24 2.36 4.24 5.43v6.31zM5.34 7.43a2.07 2.07 0 110-4.14 2.07 2.07 0 010 4.14zM7.12 20.45H3.55V9h3.57v11.45zM22.22 0H1.77C.79 0 0 .78 0 1.73v20.54C0 23.22.79 24 1.77 24h20.45c.98 0 1.78-.78 1.78-1.73V1.73C24 .78 23.2 0 22.22 0z"/></svg>
            <?= htmlspecialchars($profile['linkedin']) ?>
        </a>
    </div>

    <!-- STATS -->
    <div class="stats">
        <?php foreach ($profile['stats'] as $stat): ?>
        <div class="stat">
            <div class="stat-value"><?= htmlspecialchars($stat['value']) ?></div>
            <div class="stat-label"><?= htmlspecialchars($stat['label']) ?></div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- BIO -->
    <section style="animation-delay:0.1s">
        <div class="section-label">About</div>
        <h2 class="section-title">Who I am</h2>
        <p class="bio-text"><?= htmlspecialchars($profile['bio']) ?></p>
    </section>

    <!-- SKILLS -->
    <section style="animation-delay:0.2s">
        <div class="section-label">Expertise</div>
        <h2 class="section-title">Skills & Tools</h2>
        <div class="skills-grid">
            <?php foreach ($profile['skills'] as $skill): ?>
            <div class="skill-item">
                <div class="skill-header">
                    <span class="skill-name"><?= htmlspecialchars($skill['name']) ?></span>
                    <span class="skill-pct"><?= $skill['level'] ?>%</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-fill" style="width:<?= $skill['level'] ?>%"></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- PROJECTS -->
    <section style="animation-delay:0.3s">
        <div class="section-label">Work</div>
        <h2 class="section-title">Selected Projects</h2>
        <div class="projects-grid">
            <?php foreach ($profile['projects'] as $project): ?>
            <div class="project-card">
                <div class="project-year"><?= htmlspecialchars($project['year']) ?></div>
                <div class="project-title"><?= htmlspecialchars($project['title']) ?></div>
                <p class="project-desc"><?= htmlspecialchars($project['desc']) ?></p>
                <div class="project-tags">
                    <?php foreach ($project['tags'] as $tag): ?>
                    <span class="tag"><?= htmlspecialchars($tag) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- EXPERIENCE -->
    <section style="animation-delay:0.4s">
        <div class="section-label">History</div>
        <h2 class="section-title">Experience</h2>
        <div class="exp-list">
            <?php foreach ($profile['experience'] as $exp): ?>
            <div class="exp-item">
                <div>
                    <div class="exp-role"><?= htmlspecialchars($exp['role']) ?></div>
                    <div class="exp-company"><?= htmlspecialchars($exp['company']) ?></div>
                </div>
                <div class="exp-period"><?= htmlspecialchars($exp['period']) ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>Built with <span>PHP</span> · <?= htmlspecialchars($profile['name']) ?> · <?= date('Y') ?></p>
    </footer>

</div>
</body>
</html>