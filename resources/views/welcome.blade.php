<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kristoffer Chrone Lorenzen</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="page">

    <div class="container">

        <header class="site-header">
            <img src="/images/profile1.webp" alt="Kristoffer Chrone Lorenzen" class="site-avatar">
            <div>
                <a href="/" class="site-name">Kristoffer Chrone Lorenzen</a>
                <p class="site-role">Folkeskolelærer</p>
            </div>
        </header>

        <main class="main-content">

            <section class="section">
                <h2 class="section-label">Om mig</h2>
                <div class="prose">
                    <p>
                        Folkeskolelærer færdiguddannet i 2019 med erfaring fra indskolingen, mellemtrinnet og udskolingen samt specialklasser. De seneste 5 år primært i udskolingen med dansk, geografi, biologi og kulturfagene.
                    </p>
                    <p class="muted">
                        Min tilgang er "relationen først" — relationer er fundamentet for trivsel og et godt undervisningsmiljø. Jeg har også stor interesse for teknologi og finder glæde i at lade det understøtte lærergerningen.
                    </p>
                </div>
            </section>

            <section class="section">
                <h2 class="section-label">Webprojekter</h2>
                <div class="link-list">
                    @foreach ([
                        ['title' => 'Analysebanken', 'description' => 'Database med elev- og læreranalyser til censorer og eksaminator', 'href' => 'http://www.analysebanken.dk', 'preview' => '/images/sites/analysebanken.png'],
                    ] as $project)
                        <a href="{{ $project['href'] }}" class="link-row link-row--stacked link-row--preview" target="_blank" rel="noopener" data-preview="{{ $project['preview'] }}">
                            <span class="link-row__title">{{ $project['title'] }} <i data-lucide="arrow-up-right" class="link-row__external"></i></span>
                            <span class="link-row__meta">{{ $project['description'] }}</span>
                        </a>
                    @endforeach
                </div>
            </section>

            <div class="cursor-preview" id="cursorPreview">
                <img src="" alt="" id="cursorPreviewImg">
            </div>

            <section class="section">
                <h2 class="section-label">Uddannelse & kurser</h2>
                <div class="link-list">
                    @foreach ([
                        ['title' => 'Sikkerheds- og laboratoriekursus i naturfagene, Balle Kursus & læring', 'description' => '2025'],
                        ['title' => 'Kompetenceudvikling for erfarne medarbejere på specialområdet, Odense Kommune', 'description' => '2024'],
                        ['title' => 'Skrivedidaktik 1.0, 2.0 og 3.0, UCL', 'description' => '2022-2024'],
                        ['title' => 'Norsk perspektiv på god skrivedidaktik, Erasmusrejse ved UCL', 'description' => '2023'],
                        ['title' => 'Kompetenceudvikling for nye medarbejere på specialområdet, Odense Kommune', 'description' => '2022'],
                        ['title' => 'Læreruddannelsen, UCL', 'description' => '2015-2019'],
                    ] as $education)
                        <div class="link-row link-row--spread">
                            <span class="link-row__title">{{ $education['title'] }}</span>
                            <span class="link-row__meta">{{ $education['description'] }}</span>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="section">
                <h2 class="section-label">Kontakt</h2>
                <p class="contact-intro">Tag endelig fat i mig — jeg hører gerne fra jer.</p>
                <div class="more-links">
                    <a href="mailto:kristoffercl@hotmail.com" class="more-link email">E-mail <i data-lucide="mail" class="more-link__icon"></i></a>
                    <a href="https://www.linkedin.com/in/kristoffer-chrone-lund-83a518193/" class="more-link">LinkedIn <i data-lucide="arrow-up-right" class="more-link__icon"></i></a>
                    <a href="https://www.facebook.com/kclund" class="more-link">Facebook<i data-lucide="arrow-up-right" class="more-link__icon"></i></a>
                </div>
            </section>

        </main>

    </div>

</body>
</html>
