<!--?php
$pageTitle = "Über uns";
$pageDescription = "Erfahren Sie mehr über unser Team und unsere Leidenschaft für nachhaltigen Tourismus";
$pageKeywords = "über uns, tourismus, team, nachhaltigkeit, reisen";
$pageUrl = baseUrl('about');
$canonicalUrl = $pageUrl;
$ogImage = baseUrl('images/about-og.jpg');

// Brand constants for this specific implementation
$brandName = "Nordreisen";
$primaryDomain = "nordreisen.de";
$supportEmail = "info@domain.com";
$companyAddress = "Alexanderstraße 45, 10179 Berlin, Deutschland";
$companyPhone = "+49 30 2394 5678";

// Team members data
$teamMembers = [
    [
        'name' =-->
<html>
 <head>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
 </head>
 <body>
  <header>
   <nav class="navbar navbar-expand-md sticky-top bg-white border-bottom" role="navigation" aria-label="Hauptnavigation">
    <div class="container">
     <!-- Brand Logo -->
     <a class="navbar-brand d-flex align-items-center" href="/" aria-label="&lt;?php echo BRAND_NAME; ?&gt; - Startseite"> <img src="https://images.unsplash.com/photo-1576673442112-a4330d6575d0?w=40&amp;h=40&amp;fit=crop" alt="&lt;?php echo BRAND_NAME; ?&gt; Logo" width="40" height="40" class="me-2 rounded-circle"> <span class="fw-bold text-primary"><!--?php echo BRAND_NAME; ?--></span> </a> <!-- Mobile Toggle Button -->
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Navigation umschalten"><span class="navbar-toggler-icon"></span></button>
     <!-- Navigation Menu -->
     <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
       <li class="nav-item"><a class="nav-link" href="/" aria-current="page">Startseite</a></li>
       <li class="nav-item"><a class="nav-link" href="about.php">Über uns</a></li>
       <li class="nav-item"><a class="nav-link" href="services.php">Reisen</a></li>
       <li class="nav-item"><a class="nav-link" href="contact.php">Kontakt</a></li>
       <li class="nav-item"><a class="nav-link btn btn-outline-primary ms-2 px-3" href="contact.php" role="button">Beratung</a></li>
      </ul>
     </div>
    </div>
   </nav>
  </header>
  'Erik Lindström', 'position' =&gt; 'Geschäftsführer &amp; Gründer', 'bio' =&gt; 'Mit über 15 Jahren Erfahrung im nachhaltigen Tourismus hat Erik seine Vision verwirklicht, unvergessliche Reiseerlebnisse zu schaffen.', 'image' =&gt; 'team-erik.jpg' ], [ 'name' =&gt; 'Anna Müller', 'position' =&gt; 'Reiseberaterin', 'bio' =&gt; 'Anna ist unsere Expertin für maßgeschneiderte Reiserouten und kennt die schönsten versteckten Orte Skandinaviens.', 'image' =&gt; 'team-anna.jpg' ], [ 'name' =&gt; 'Lars Hansen', 'position' =&gt; 'Nachhaltigkeitsexperte', 'bio' =&gt; 'Lars sorgt dafür, dass alle unsere Reisen den höchsten Umweltstandards entsprechen und lokale Gemeinschaften unterstützen.', 'image' =&gt; 'team-lars.jpg' ] ]; // Media contacts $mediaContacts = [ [ 'type' =&gt; 'Presse', 'name' =&gt; 'Sophie Weber', 'email' =&gt; 'info@domain.com', 'phone' =&gt; '+49 30 2394 5679' ], [ 'type' =&gt; 'Partnerschaften', 'name' =&gt; 'Michael Schneider', 'email' =&gt; 'info@domain.com', 'phone' =&gt; '+49 30 2394 5680' ] ]; // Office photos $officePhotos = [ [ 'image' =&gt; 'office-main.jpg', 'alt' =&gt; 'Unser Hauptbüro in Berlin', 'caption' =&gt; 'Modernes und umweltfreundliches Arbeitsumfeld' ], [ 'image' =&gt; 'office-meeting.jpg', 'alt' =&gt; 'Besprechungsraum für Kundenberatung', 'caption' =&gt; 'Persönliche Beratung in gemütlicher Atmosphäre' ], [ 'image' =&gt; 'office-workspace.jpg', 'alt' =&gt; 'Arbeitsplätze unseres Teams', 'caption' =&gt; 'Kreative Arbeitsplätze für innovative Reiseideen' ] ]; ?&gt;
  <section class="about-hero py-5">
   <div class="container">
    <div class="row align-items-center">
     <div class="col-lg-8 col-md-10 mx-auto text-center">
      <nav aria-label="breadcrumb" class="mb-4">
       <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="&lt;?php echo baseUrl(); ?&gt;">Startseite</a></li>
        <li class="breadcrumb-item active" aria-current="page">Über uns</li>
       </ol>
      </nav>
      <h1 class="display-4 mb-4 text-primary" data-aos="fade-up"><!--?php echo sanitize($pageTitle); ?--></h1>
      <p class="lead mb-5 text-muted" data-aos="fade-up" data-aos-delay="100"><!--?php echo sanitize($pageDescription); ?--></p>
     </div>
    </div>
   </div>
  </section>
  <section class="company-story py-5">
   <div class="container">
    <div class="row">
     <div class="col-lg-6 mb-5" data-aos="fade-right">
      <div class="ratio ratio-4x3">
       <img src="&lt;?php echo baseUrl('images/about-story.jpg'); ?&gt;" alt="Unsere Unternehmensgeschichte" class="img-fluid rounded shadow-sm" loading="lazy" style="object-fit: cover;">
      </div>
     </div>
     <div class="col-lg-6 d-flex align-items-center" data-aos="fade-left">
      <div>
       <h2 class="h3 mb-4 text-primary">Unsere Geschichte</h2>
       <p class="mb-4">Gegründet aus der Leidenschaft für die unberührte Schönheit Nordeuropas, hat sich <strong><!--?php echo sanitize($brandName); ?--></strong> zu einem führenden Anbieter für nachhaltigen Tourismus entwickelt.</p>
       <p class="mb-4">Seit 2008 organisieren wir unvergessliche Reisen, die nicht nur beeindruckende Naturerlebnisse bieten, sondern auch lokale Gemeinschaften unterstützen und die Umwelt respektieren.</p>
       <div class="row g-3 mt-4">
        <div class="col-sm-6">
         <div class="text-center p-3 bg-light rounded">
          <h4 class="h5 mb-1 text-primary">15+</h4>
          <small class="text-muted">Jahre Erfahrung</small>
         </div>
        </div>
        <div class="col-sm-6">
         <div class="text-center p-3 bg-light rounded">
          <h4 class="h5 mb-1 text-primary">2500+</h4>
          <small class="text-muted">Zufriedene Kunden</small>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="our-values py-5 bg-light">
   <div class="container">
    <div class="row">
     <div class="col-lg-8 mx-auto text-center mb-5">
      <h2 class="h3 mb-4 text-primary" data-aos="fade-up">Unsere Werte</h2>
      <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Diese Prinzipien leiten uns in allem, was wir tun</p>
     </div>
    </div>
    <div class="row g-4">
     <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="card h-100 border-0 shadow-sm text-center">
       <div class="card-body p-4">
        <div class="ratio ratio-1x1 mx-auto mb-3" style="width: 80px;">
         <svg class="text-primary" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
         </svg>
        </div>
        <h3 class="h5 mb-3">Nachhaltigkeit</h3>
        <p class="text-muted small">Wir schützen die Natur und unterstützen lokale Gemeinden durch verantwortlichen Tourismus.</p>
       </div>
      </div>
     </div>
     <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
      <div class="card h-100 border-0 shadow-sm text-center">
       <div class="card-body p-4">
        <div class="ratio ratio-1x1 mx-auto mb-3" style="width: 80px;">
         <svg class="text-primary" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
         </svg>
        </div>
        <h3 class="h5 mb-3">Authentizität</h3>
        <p class="text-muted small">Echte Begegnungen mit Land und Leuten stehen im Mittelpunkt unserer Reiseerlebnisse.</p>
       </div>
      </div>
     </div>
     <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
      <div class="card h-100 border-0 shadow-sm text-center">
       <div class="card-body p-4">
        <div class="ratio ratio-1x1 mx-auto mb-3" style="width: 80px;">
         <svg class="text-primary" viewBox="0 0 24 24" fill="currentColor">
          <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6h-6z" />
         </svg>
        </div>
        <h3 class="h5 mb-3">Qualität</h3>
        <p class="text-muted small">Höchste Standards in Service und Durchführung sorgen für unvergessliche Reiseerlebnisse.</p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="team-section py-5">
   <div class="container">
    <div class="row">
     <div class="col-lg-8 mx-auto text-center mb-5">
      <h2 class="h3 mb-4 text-primary" data-aos="fade-up">Unser Team</h2>
      <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Lernen Sie die Menschen kennen, die Ihre Träume wahr werden lassen</p>
     </div>
    </div>
    <div class="row g-4">
     <!--?php foreach ($teamMembers as $index =-->
     $member): ?&gt;
     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="&lt;?php echo ($index + 1) * 100; ?&gt;">
      <div class="card h-100 border-0 shadow-sm">
       <div class="ratio ratio-1x1">
        <img src="&lt;?php echo baseUrl('images/' . sanitize($member['image'])); ?&gt;" alt="&lt;?php echo sanitize($member['name']); ?&gt;" class="card-img-top" loading="lazy" style="object-fit: cover; border-radius: 50%; margin: 20px;">
       </div>
       <div class="card-body text-center d-flex flex-column">
        <h3 class="h5 mb-1"><!--?php echo sanitize($member['name']); ?--></h3>
        <p class="text-primary small mb-3"><!--?php echo sanitize($member['position']); ?--></p>
        <p class="text-muted small mt-auto"><!--?php echo sanitize($member['bio']); ?--></p>
       </div>
      </div>
     </div>
     <!--?php endforeach; ?-->
    </div>
   </div>
  </section>
  <section class="office-photos py-5 bg-light">
   <div class="container">
    <div class="row">
     <div class="col-lg-8 mx-auto text-center mb-5">
      <h2 class="h3 mb-4 text-primary" data-aos="fade-up">Unser Büro</h2>
      <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Ein Blick hinter die Kulissen unserer Arbeit</p>
     </div>
    </div>
    <div class="row g-4">
     <!--?php foreach ($officePhotos as $index =-->
     $photo): ?&gt;
     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="&lt;?php echo ($index + 1) * 100; ?&gt;">
      <div class="card border-0 shadow-sm">
       <div class="ratio ratio-4x3">
        <img src="&lt;?php echo baseUrl('images/' . sanitize($photo['image'])); ?&gt;" alt="&lt;?php echo sanitize($photo['alt']); ?&gt;" class="card-img-top" loading="lazy" style="object-fit: cover;">
       </div>
       <div class="card-body text-center">
        <p class="small text-muted mb-0"><!--?php echo sanitize($photo['caption']); ?--></p>
       </div>
      </div>
     </div>
     <!--?php endforeach; ?-->
    </div>
   </div>
  </section>
  <section class="contact-info py-5">
   <div class="container">
    <div class="row">
     <div class="col-lg-8 mx-auto">
      <div class="row g-4">
       <div class="col-md-6">
        <div class="card h-100 border-0 bg-primary text-white">
         <div class="card-body p-4 text-center">
          <div class="ratio ratio-1x1 mx-auto mb-3" style="width: 60px;">
           <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
           </svg>
          </div>
          <h3 class="h5 mb-3">Besuchen Sie uns</h3>
          <p class="mb-3"><!--?php echo sanitize($companyAddress); ?--></p>
          <p class="mb-0">Mo-Fr: 9:00-18:00 Uhr</p>
         </div>
        </div>
       </div>
       <div class="col-md-6">
        <div class="card h-100 border-0 bg-light">
         <div class="card-body p-4 text-center">
          <div class="ratio ratio-1x1 mx-auto mb-3" style="width: 60px;">
           <svg class="text-primary" viewBox="0 0 24 24" fill="currentColor">
            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
           </svg>
          </div>
          <h3 class="h5 mb-3">Kontakt</h3>
          <p class="mb-2"><a href="tel:&lt;?php echo sanitize($companyPhone); ?&gt;" class="text-decoration-none"> <!--?php echo sanitize($companyPhone); ?--> </a></p>
          <p class="mb-0"><a href="mailto:&lt;?php echo sanitize($supportEmail); ?&gt;" class="text-decoration-none"> <!--?php echo sanitize($supportEmail); ?--> </a></p>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="media-contacts py-5">
   <div class="container">
    <div class="row">
     <div class="col-lg-8 mx-auto text-center mb-5">
      <h2 class="h3 mb-4 text-primary" data-aos="fade-up">Medien &amp; Kooperationen</h2>
      <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Ihre direkten Ansprechpartner</p>
     </div>
    </div>
    <div class="row g-4 justify-content-center">
     <!--?php foreach ($mediaContacts as $index =-->
     $contact): ?&gt;
     <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="&lt;?php echo ($index + 1) * 100; ?&gt;">
      <div class="card h-100 border-0 shadow-sm">
       <div class="card-body p-4 text-center">
        <h3 class="h5 mb-3 text-primary"><!--?php echo sanitize($contact['type']); ?--></h3>
        <h4 class="h6 mb-3"><!--?php echo sanitize($contact['name']); ?--></h4>
        <p class="mb-2"><a href="mailto:&lt;?php echo sanitize($contact['email']); ?&gt;" class="text-decoration-none"> <!--?php echo sanitize($contact['email']); ?--> </a></p>
        <p class="mb-0"><a href="tel:&lt;?php echo sanitize($contact['phone']); ?&gt;" class="text-decoration-none"> <!--?php echo sanitize($contact['phone']); ?--> </a></p>
       </div>
      </div>
     </div>
     <!--?php endforeach; ?-->
    </div>
   </div>
  </section>
  <section class="cta-section py-5 bg-primary text-white">
   <div class="container">
    <div class="row">
     <div class="col-lg-8 mx-auto text-center">
      <h2 class="h3 mb-4" data-aos="fade-up">Bereit für Ihr nächstes Abenteuer?</h2>
      <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Lassen Sie uns gemeinsam Ihre perfekte Nordeuropa-Reise planen</p>
      <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center" data-aos="fade-up" data-aos-delay="200">
       <a href="&lt;?php echo baseUrl('contact.php'); ?&gt;" class="btn btn-light btn-lg"> Kostenlose Beratung </a> <a href="&lt;?php echo baseUrl('services.php'); ?&gt;" class="btn btn-outline-light btn-lg"> Unsere Reisen </a>
      </div>
     </div>
    </div>
   </div>
  </section>
  <footer class="bg-dark text-light py-4 py-md-5">
   <div class="container">
    <div class="row g-4">
     <!-- Brand Section -->
     <div class="col-lg-4 mb-4 mb-lg-0">
      <div class="d-flex align-items-center mb-3">
       <img src="https://images.unsplash.com/photo-1576673442112-a4330d6575d0?w=40&amp;h=40&amp;fit=crop" alt="&lt;?php echo BRAND_NAME; ?&gt; Logo" width="40" height="40" class="me-2 rounded-circle">
       <h3 class="h4 fw-bold text-primary mb-0"><!--?php echo BRAND_NAME; ?--></h3>
      </div>
      <p class="text-light-emphasis mb-3">Ihre Experten für authentische Skandinavien-Reisen. Entdecken Sie mit uns die Schönheit des Nordens.</p>
      <div class="d-flex gap-3">
       <a href="#" class="text-light-emphasis" aria-label="Facebook"> 
        <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
         <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
        </svg> 
       </a> <a href="#" class="text-light-emphasis" aria-label="Instagram"> 
        <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
         <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C23.975 5.367 18.63.029 12.017.029zM15.017 18h-6c-1.105 0-2-.895-2-2V8c0-1.105.895-2 2-2h6c1.105 0 2 .895 2 2v8c0 1.105-.895 2-2 2z" />
        </svg> 
       </a>
      </div>
     </div>
     <!-- Navigation Links -->
     <div class="col-lg-2 col-md-4">
      <h4 class="h6 fw-bold mb-3">Navigation</h4>
      <ul class="list-unstyled">
       <li class="mb-2"><a href="/" class="text-light-emphasis text-decoration-none">Startseite</a></li>
       <li class="mb-2"><a href="about.php" class="text-light-emphasis text-decoration-none">Über uns</a></li>
       <li class="mb-2"><a href="services.php" class="text-light-emphasis text-decoration-none">Reisen</a></li>
       <li class="mb-2"><a href="contact.php" class="text-light-emphasis text-decoration-none">Kontakt</a></li>
      </ul>
     </div>
     <!-- Services -->
     <div class="col-lg-2 col-md-4">
      <h4 class="h6 fw-bold mb-3">Services</h4>
      <ul class="list-unstyled">
       <li class="mb-2"><a href="services.php" class="text-light-emphasis text-decoration-none">Gruppenreisen</a></li>
       <li class="mb-2"><a href="services.php" class="text-light-emphasis text-decoration-none">Individualreisen</a></li>
       <li class="mb-2"><a href="services.php" class="text-light-emphasis text-decoration-none">Reiseberatung</a></li>
       <li class="mb-2"><a href="contact.php" class="text-light-emphasis text-decoration-none">Maßgeschneidert</a></li>
      </ul>
     </div>
     <!-- Contact Info -->
     <div class="col-lg-4 col-md-4">
      <h4 class="h6 fw-bold mb-3">Kontakt</h4>
      <address class="text-light-emphasis mb-3">
       <div class="mb-2">
        <strong><!--?php echo BRAND_NAME; ?--></strong>
       </div>
       <div class="mb-2">
        <!--?php echo COMPANY_ADDRESS; ?-->
       </div>
       <div class="mb-2">
        <a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="text-light-emphasis text-decoration-none"><!--?php echo SUPPORT_EMAIL; ?--></a>
       </div>
       <div class="mb-2">
        <a href="tel:&lt;?php echo str_replace(' ', '', COMPANY_PHONE); ?&gt;" class="text-light-emphasis text-decoration-none"><!--?php echo COMPANY_PHONE; ?--></a>
       </div>
      </address>
     </div>
    </div>
    <!-- Footer Bottom -->
    <hr class="border-light-subtle my-4">
    <div class="row align-items-center">
     <div class="col-md-6">
      <p class="text-light-emphasis mb-2 mb-md-0">© 2025 <!--?php echo BRAND_NAME; ?-->. Alle Rechte vorbehalten.</p>
     </div>
     <div class="col-md-6 text-md-end">
      <a href="privacy.php" class="text-light-emphasis text-decoration-none me-3">Datenschutz</a> <a href="privacy.php" class="text-light-emphasis text-decoration-none">Impressum</a>
     </div>
    </div>
   </div>
  </footer>
  <script src="script.js" defer></script>
 </body>
</html>