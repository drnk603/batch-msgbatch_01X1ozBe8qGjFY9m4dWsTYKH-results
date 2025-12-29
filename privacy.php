<!--?php
// Dynamic page setup
$pageTitle = "Datenschutz";
$pageDescription = "Unsere Datenschutzerklärung informiert Sie über die Art, den Umfang und den Zweck der Erhebung und Verwendung personenbezogener Daten auf unserer Website.";
$pageKeywords = "datenschutz, datenschutzerklärung, gdpr, dsgvo, privacy";
$pageUrl = baseUrl('privacy');
$canonicalUrl = $pageUrl;

// Brand info for privacy policy
$config = Config::get('site', []);
$brandName = $config['brand_name'] ?? 'Alpine Reisen';
$contactEmail = $config['contact_email'] ?? 'info@domain.com';
$contactAddress = $config['contact_address'] ?? 'Bergstraße 42, 80331 München, Deutschland';
$contactPhone = $config['contact_phone'] ?? '+49 89 12345678';
$lastUpdated = date('d.m.Y'); // Current date in German format
?-->
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
  <nav aria-label="breadcrumb">
   <div class="container">
    <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="&lt;?php echo baseUrl(); ?&gt;">Home</a></li>
     <li class="breadcrumb-item active" aria-current="page">Datenschutz</li>
    </ol>
   </div>
  </nav>
  <div class="container py-4 py-md-5">
   <div class="row">
    <div class="col-lg-8 offset-lg-2">
     <article class="privacy-policy">
      <header class="text-center mb-5">
       <h1 class="display-5 mb-3">Datenschutzerklärung</h1>
       <p class="lead text-muted">Zuletzt aktualisiert: <!--?php echo $lastUpdated; ?--></p>
      </header>
      <div class="privacy-content">
       <!-- Einleitung -->
       <section class="mb-5">
        <h2 class="h4 mb-3">1. Einleitung</h2>
        <p>Der Schutz Ihrer persönlichen Daten ist uns ein besonderes Anliegen. In dieser Datenschutzerklärung informieren wir Sie ausführlich darüber, wie wir mit Ihren Daten umgehen. Wir verarbeiten personenbezogene Daten gemäß der Europäischen Datenschutz-Grundverordnung (DSGVO) und anderen anwendbaren Datenschutzgesetzen.</p>
        <p>Diese Datenschutzerklärung gilt für die Nutzung unserer Website <strong><!--?php echo sanitize($_SERVER['SERVER_NAME']); ?--></strong>.</p>
       </section>
       <!-- Verantwortliche Stelle -->
       <section class="mb-5">
        <h2 class="h4 mb-3">2. Verantwortliche Stelle</h2>
        <div class="card bg-light">
         <div class="card-body">
          <p class="mb-1"><strong><!--?php echo sanitize($brandName); ?--></strong></p>
          <p class="mb-1"><!--?php echo sanitize($contactAddress); ?--></p>
          <p class="mb-1">E-Mail: <a href="mailto:&lt;?php echo sanitize($contactEmail); ?&gt;"><!--?php echo sanitize($contactEmail); ?--></a></p>
          <p class="mb-0">Telefon: <!--?php echo sanitize($contactPhone); ?--></p>
         </div>
        </div>
       </section>
       <!-- Erhobene Daten -->
       <section class="mb-5">
        <h2 class="h4 mb-3">3. Welche Daten wir erheben</h2>
        <h3 class="h5 mb-2">3.1 Automatisch erhobene Daten</h3>
        <p>Bei jedem Besuch unserer Website werden automatisch Informationen erfasst:</p>
        <ul>
         <li>IP-Adresse des zugreifenden Rechners</li>
         <li>Datum und Uhrzeit der Anfrage</li>
         <li>Zeitzonendifferenz zur Greenwich Mean Time (GMT)</li>
         <li>Inhalt der Anforderung (konkrete Seite)</li>
         <li>Zugriffsstatus/HTTP-Statuscode</li>
         <li>Jeweils übertragene Datenmenge</li>
         <li>Website, von der die Anforderung kommt</li>
         <li>Browser und Betriebssystem</li>
        </ul>
        <h3 class="h5 mb-2 mt-4">3.2 Freiwillig bereitgestellte Daten</h3>
        <p>Zusätzlich verarbeiten wir personenbezogene Daten, die Sie uns freiwillig mitteilen:</p>
        <ul>
         <li><strong>Kontaktformular:</strong> Name, E-Mail-Adresse, Telefonnummer, Nachricht</li>
         <li><strong>Newsletter-Anmeldung:</strong> E-Mail-Adresse, Name (optional)</li>
         <li><strong>Buchungsanfragen:</strong> Name, Anschrift, Telefon, E-Mail, Reisedaten</li>
         <li><strong>Bewertungen:</strong> Name, E-Mail-Adresse, Bewertungstext</li>
        </ul>
       </section>
       <!-- Rechtsgrundlagen -->
       <section class="mb-5">
        <h2 class="h4 mb-3">4. Rechtsgrundlagen der Datenverarbeitung</h2>
        <p>Die Verarbeitung Ihrer personenbezogenen Daten erfolgt auf Basis folgender Rechtsgrundlagen:</p>
        <div class="row g-3">
         <div class="col-md-6">
          <div class="card h-100">
           <div class="card-body">
            <h5 class="card-title h6">Art. 6 Abs. 1 lit. a DSGVO</h5>
            <p class="card-text small">Einwilligung für Newsletter, Cookies</p>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="card h-100">
           <div class="card-body">
            <h5 class="card-title h6">Art. 6 Abs. 1 lit. b DSGVO</h5>
            <p class="card-text small">Vertragserfüllung bei Buchungen</p>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="card h-100">
           <div class="card-body">
            <h5 class="card-title h6">Art. 6 Abs. 1 lit. f DSGVO</h5>
            <p class="card-text small">Berechtigtes Interesse für Website-Sicherheit</p>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="card h-100">
           <div class="card-body">
            <h5 class="card-title h6">Art. 6 Abs. 1 lit. c DSGVO</h5>
            <p class="card-text small">Rechtliche Verpflichtung</p>
           </div>
          </div>
         </div>
        </div>
       </section>
       <!-- Cookie-Informationen -->
       <section class="mb-5">
        <h2 class="h4 mb-3">5. Cookies und ähnliche Technologien</h2>
        <p>Unsere Website verwendet Cookies, um Ihnen eine optimale Nutzererfahrung zu bieten. Cookies sind kleine Textdateien, die auf Ihrem Gerät gespeichert werden.</p>
        <h3 class="h5 mb-2">5.1 Arten von Cookies</h3>
        <div class="table-responsive">
         <table class="table table-striped">
          <thead class="table-dark">
           <tr>
            <th>Cookie-Typ</th>
            <th>Zweck</th>
            <th>Speicherdauer</th>
           </tr>
          </thead>
          <tbody>
           <tr>
            <td>Technisch notwendige Cookies</td>
            <td>Grundlegende Website-Funktionen</td>
            <td>Session</td>
           </tr>
           <tr>
            <td>Analyse-Cookies</td>
            <td>Website-Optimierung</td>
            <td>2 Jahre</td>
           </tr>
           <tr>
            <td>Marketing-Cookies</td>
            <td>Personalisierte Werbung</td>
            <td>1 Jahr</td>
           </tr>
           <tr>
            <td>Präferenz-Cookies</td>
            <td>Benutzereinstellungen speichern</td>
            <td>6 Monate</td>
           </tr>
          </tbody>
         </table>
        </div>
        <h3 class="h5 mb-2 mt-4">5.2 Cookie-Verwaltung</h3>
        <p>Sie können Ihre Cookie-Einstellungen jederzeit über Ihren Browser verwalten oder über unser Cookie-Banner anpassen. Bitte beachten Sie, dass die Deaktivierung bestimmter Cookies die Funktionalität unserer Website beeinträchtigen kann.</p>
       </section>
       <!-- Datenverwendung -->
       <section class="mb-5">
        <h2 class="h4 mb-3">6. Wie wir Ihre Daten verwenden</h2>
        <p>Wir verwenden Ihre personenbezogenen Daten für folgende Zwecke:</p>
        <div class="row g-4">
         <div class="col-md-6">
          <div class="d-flex">
           <div class="flex-shrink-0">
            <svg class="svg-icon text-primary" width="24" height="24" fill="currentColor">
             <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
            </svg>
           </div>
           <div class="flex-grow-1 ms-3">
            <h5 class="h6">Website-Bereitstellung</h5>
            <p class="small mb-0">Technische Bereitstellung und Sicherheit unserer Website</p>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="d-flex">
           <div class="flex-shrink-0">
            <svg class="svg-icon text-primary" width="24" height="24" fill="currentColor">
             <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
            </svg>
           </div>
           <div class="flex-grow-1 ms-3">
            <h5 class="h6">Kommunikation</h5>
            <p class="small mb-0">Beantwortung von Anfragen und Newsletter-Versand</p>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="d-flex">
           <div class="flex-shrink-0">
            <svg class="svg-icon text-primary" width="24" height="24" fill="currentColor">
             <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
            </svg>
           </div>
           <div class="flex-grow-1 ms-3">
            <h5 class="h6">Analyse &amp; Verbesserung</h5>
            <p class="small mb-0">Optimierung unserer Services und Website-Performance</p>
           </div>
          </div>
         </div>
         <div class="col-md-6">
          <div class="d-flex">
           <div class="flex-shrink-0">
            <svg class="svg-icon text-primary" width="24" height="24" fill="currentColor">
             <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
            </svg>
           </div>
           <div class="flex-grow-1 ms-3">
            <h5 class="h6">Rechtserfüllung</h5>
            <p class="small mb-0">Erfüllung gesetzlicher Aufbewahrungspflichten</p>
           </div>
          </div>
         </div>
        </div>
       </section>
       <!-- Ihre Rechte -->
       <section class="mb-5">
        <h2 class="h4 mb-3">7. Ihre Rechte</h2>
        <p>Sie haben als betroffene Person verschiedene Rechte bezüglich Ihrer personenbezogenen Daten:</p>
        <div class="accordion" id="rightsAccordion">
         <div class="accordion-item">
          <h3 class="accordion-header" id="headingOne">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Recht auf Auskunft (Art. 15 DSGVO)</button>
          </h3>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#rightsAccordion">
           <div class="accordion-body">Sie haben das Recht, eine Bestätigung darüber zu verlangen, ob wir personenbezogene Daten von Ihnen verarbeiten, und wenn ja, welche Daten dies sind und zu welchen Zwecken.</div>
          </div>
         </div>
         <div class="accordion-item">
          <h3 class="accordion-header" id="headingTwo">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Recht auf Berichtigung (Art. 16 DSGVO)</button>
          </h3>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#rightsAccordion">
           <div class="accordion-body">Sie haben das Recht, die Berichtigung unrichtiger oder die Vervollständigung unvollständiger personenbezogener Daten zu verlangen.</div>
          </div>
         </div>
         <div class="accordion-item">
          <h3 class="accordion-header" id="headingThree">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Recht auf Löschung (Art. 17 DSGVO)</button>
          </h3>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#rightsAccordion">
           <div class="accordion-body">Sie haben das Recht, die unverzügliche Löschung Ihrer personenbezogenen Daten zu verlangen, sofern einer der gesetzlich vorgesehenen Gründe vorliegt.</div>
          </div>
         </div>
         <div class="accordion-item">
          <h3 class="accordion-header" id="headingFour">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Recht auf Widerspruch (Art. 21 DSGVO)</button>
          </h3>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#rightsAccordion">
           <div class="accordion-body">Sie haben das Recht, aus Gründen, die sich aus Ihrer besonderen Situation ergeben, jederzeit gegen die Verarbeitung Ihrer personenbezogenen Daten Widerspruch einzulegen.</div>
          </div>
         </div>
        </div>
       </section>
       <!-- Datensicherheit -->
       <section class="mb-5">
        <h2 class="h4 mb-3">8. Datensicherheit</h2>
        <p>Wir setzen technische und organisatorische Sicherheitsmaßnahmen ein, um Ihre Daten gegen zufällige oder vorsätzliche Manipulationen, teilweisen oder vollständigen Verlust, Zerstörung oder gegen den unbefugten Zugriff Dritter zu schützen:</p>
        <div class="row g-3 mt-3">
         <div class="col-md-4">
          <div class="text-center p-3 border rounded">
           <svg class="text-success mb-2" width="32" height="32" fill="currentColor">
            <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.4 16,13V16C16,16.6 15.6,17 15,17H9C8.4,17 8,16.6 8,16V13C8,12.4 8.4,11.5 9,11.5V10C9,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.2,8.7 10.2,10V11.5H13.8V10C13.8,8.7 12.8,8.2 12,8.2Z" />
           </svg>
           <h5 class="h6">SSL-Verschlüsselung</h5>
           <p class="small mb-0">Sichere Datenübertragung</p>
          </div>
         </div>
         <div class="col-md-4">
          <div class="text-center p-3 border rounded">
           <svg class="text-success mb-2" width="32" height="32" fill="currentColor">
            <path d="M21,11C21,16.55 17.16,21.74 12,23C6.84,21.74 3,16.55 3,11V5L12,1L21,5V11M12,6A3,3 0 0,0 9,9A3,3 0 0,0 12,12A3,3 0 0,0 15,9A3,3 0 0,0 12,6Z" />
           </svg>
           <h5 class="h6">Zugangskontrollen</h5>
           <p class="small mb-0">Beschränkter Datenzugriff</p>
          </div>
         </div>
         <div class="col-md-4">
          <div class="text-center p-3 border rounded">
           <svg class="text-success mb-2" width="32" height="32" fill="currentColor">
            <path d="M3 17V19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V17H3M18.5 14L13 8.5L7.5 14H11V18H15V14H18.5Z" />
           </svg>
           <h5 class="h6">Sichere Server</h5>
           <p class="small mb-0">Geschützte Infrastruktur</p>
          </div>
         </div>
        </div>
       </section>
       <!-- Drittanbieter -->
       <section class="mb-5">
        <h2 class="h4 mb-3">9. Drittanbieter-Services</h2>
        <p>Unsere Website nutzt verschiedene Services von Drittanbietern. Hier erhalten Sie Informationen über die wichtigsten:</p>
        <div class="table-responsive">
         <table class="table">
          <thead class="table-light">
           <tr>
            <th>Service</th>
            <th>Anbieter</th>
            <th>Zweck</th>
            <th>Datenschutzerklärung</th>
           </tr>
          </thead>
          <tbody>
           <tr>
            <td>Google Analytics</td>
            <td>Google LLC</td>
            <td>Website-Analyse</td>
            <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google Privacy</a></td>
           </tr>
           <tr>
            <td>Google Maps</td>
            <td>Google LLC</td>
            <td>Kartendarstellung</td>
            <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google Privacy</a></td>
           </tr>
           <tr>
            <td>Mailchimp</td>
            <td>The Rocket Science Group LLC</td>
            <td>Newsletter-Versand</td>
            <td><a href="https://mailchimp.com/legal/privacy/" target="_blank" rel="noopener">Mailchimp Privacy</a></td>
           </tr>
          </tbody>
         </table>
        </div>
       </section>
       <!-- Kontakt -->
       <section class="mb-5">
        <h2 class="h4 mb-3">10. Kontakt für Datenschutzanfragen</h2>
        <div class="alert alert-info">
         <h5 class="alert-heading">Haben Sie Fragen zum Datenschutz?</h5>
         <p class="mb-3">Für alle Fragen rund um den Datenschutz und Ihre Rechte können Sie sich gerne an uns wenden:</p>
         <hr>
         <div class="row">
          <div class="col-md-6">
           <p class="mb-1"><strong>E-Mail:</strong></p>
           <p><a href="mailto:&lt;?php echo sanitize($contactEmail); ?&gt;"><!--?php echo sanitize($contactEmail); ?--></a></p>
          </div>
          <div class="col-md-6">
           <p class="mb-1"><strong>Telefon:</strong></p>
           <p><!--?php echo sanitize($contactPhone); ?--></p>
          </div>
         </div>
        </div>
       </section>
       <!-- Änderungen -->
       <section class="mb-5">
        <h2 class="h4 mb-3">11. Änderungen dieser Datenschutzerklärung</h2>
        <p>Wir behalten uns vor, diese Datenschutzerklärung bei Bedarf anzupassen, um den aktuellen rechtlichen Anforderungen zu entsprechen oder Änderungen unserer Leistungen in der Datenschutzerklärung umzusetzen. Für Ihren erneuten Besuch gilt dann die neue Datenschutzerklärung.</p>
        <p class="text-muted small">Diese Datenschutzerklärung wurde zuletzt am <strong><!--?php echo $lastUpdated; ?--></strong> aktualisiert.</p>
       </section>
      </div>
      <!-- Footer Navigation -->
      <div class="d-flex justify-content-between align-items-center border-top pt-4 mt-5">
       <a href="&lt;?php echo baseUrl(); ?&gt;" class="btn btn-outline-primary"> 
        <svg width="16" height="16" fill="currentColor" class="me-2">
         <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
        </svg> Zurück zur Startseite 
       </a>
       <div class="text-end">
        <a href="&lt;?php echo baseUrl('contact'); ?&gt;" class="btn btn-primary"> Bei Fragen kontaktieren 
         <svg width="16" height="16" fill="currentColor" class="ms-2">
          <path d="M8 4a4 4 0 1 1 0 8 4 4 0 0 1 0-8zM2 8a6 6 0 1 0 12 0A6 6 0 0 0 2 8z" />
         </svg> </a>
       </div>
      </div>
     </article>
    </div>
   </div>
  </div>
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