<!--?php
// Brand constants
define('BRAND_NAME', 'NordicWander');
define('PRIMARY_DOMAIN', 'nordicwander.de');
define('SUPPORT_EMAIL', 'info@domain.com');
define('CONTACT_PHONE', '+49 30 123 456 789');
define('CONTACT_ADDRESS', 'Unter den Linden 1, 10117 Berlin, Deutschland');

$pageTitle = "Kontakt - Reiseberatung und Buchungen";
$pageDescription = "Kontaktieren Sie unser Expertenteam für personalisierte Reiseberatung und Buchungen. Wir helfen Ihnen bei der Planung Ihres perfekten nordischen Abenteuers.";
$pageKeywords = "Kontakt, Reiseberatung, Buchung, Skandinavien, Beratung";
$pageUrl = 'contact';
$canonicalUrl = $pageUrl;

$errors = [];
$success = false;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic validation
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $privacy = isset($_POST['privacy']);
    
    // Validate required fields
    if (empty($name)) $errors['name'] = 'Name ist erforderlich';
    if (empty($email)) $errors['email'] = 'E-Mail-Adresse ist erforderlich';
    if (empty($subject)) $errors['subject'] = 'Betreff ist erforderlich';
    if (empty($message)) $errors['message'] = 'Nachricht ist erforderlich';
    if (!$privacy) $errors['privacy'] = 'Sie müssen der Datenschutzerklärung zustimmen';
    
    // Validate email format
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Bitte geben Sie eine gültige E-Mail-Adresse ein';
    }
    
    // Validate message length
    if (!empty($message) && strlen($message) < 10) {
        $errors['message'] = 'Die Nachricht muss mindestens 10 Zeichen lang sein';
    }
    
    if (empty($errors)) {
        // Here you would send the email in a real application
        $success = true;
        // Clear form data on success
        $name = $email = $phone = $subject = $message = '';
    }
}
?-->
<!doctype html>
<html lang="de">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>&lt;?php echo htmlspecialchars($pageTitle); ?&gt; | &lt;?php echo BRAND_NAME; ?&gt;</title>
  <meta name="description" content="&lt;?php echo htmlspecialchars($pageDescription); ?&gt;">
  <meta name="keywords" content="&lt;?php echo htmlspecialchars($pageKeywords); ?&gt;">
  <link rel="canonical" href="https://&lt;?php echo PRIMARY_DOMAIN; ?&gt;/&lt;?php echo $canonicalUrl; ?&gt;">
  <!-- Open Graph Tags -->
  <meta property="og:title" content="&lt;?php echo htmlspecialchars($pageTitle); ?&gt;">
  <meta property="og:description" content="&lt;?php echo htmlspecialchars($pageDescription); ?&gt;">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://&lt;?php echo PRIMARY_DOMAIN; ?&gt;/&lt;?php echo $canonicalUrl; ?&gt;">
  <meta property="og:image" content="https://&lt;?php echo PRIMARY_DOMAIN; ?&gt;/images/og-contact.jpg">
  <!-- Bootstrap CSS -->
  <!-- Custom CSS -->
  <!-- JSON-LD Schema -->
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
  <!-- Header -->
  <!-- Main Content -->
  <main>
   <!-- Contact Hero Section -->
   <section class="py-4 py-md-5" style="background: linear-gradient(135deg, var(--dusty-blue), var(--deep-dusty-blue)); color: var(--white);" data-aos="fade-in">
    <div class="container">
     <div class="row align-items-center">
      <div class="col-lg-8">
       <nav aria-label="Breadcrumb" class="mb-4">
        <ol class="breadcrumb text-white-50">
         <li class="breadcrumb-item"><a href="index.php" class="text-white-50">Startseite</a></li>
         <li class="breadcrumb-item active text-white" aria-current="page">Kontakt</li>
        </ol>
       </nav>
       <h1 class="display-4 fw-bold mb-4">Ihre Traumreise beginnt hier</h1>
       <p class="lead mb-4">Unser erfahrenes Team steht Ihnen zur Verfügung, um Ihre perfekte skandinavische Reise zu planen. Kontaktieren Sie uns für eine persönliche Beratung.</p>
      </div>
      <div class="col-lg-4 text-center">
       <div class="ratio ratio-1x1">
        <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?w=400&amp;h=400&amp;fit=crop&amp;crop=center" alt="Reiseberater bei der Arbeit" class="rounded-circle object-fit-cover" loading="lazy">
       </div>
      </div>
     </div>
    </div>
   </section>
   <!--?php if ($success): ?-->
   <!-- Success Message -->
   <section class="py-4">
    <div class="container">
     <div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="me-3" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
       <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.061L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
      </svg>
      <div>
       <h4 class="mb-1">Vielen Dank für Ihre Anfrage!</h4>
       <p class="mb-0">Wir haben Ihre Nachricht erhalten und werden uns innerhalb von 24 Stunden bei Ihnen melden.</p>
      </div>
     </div>
    </div>
   </section>
   <!--?php endif; ?-->
   <!-- Contact Info Cards -->
   <section class="py-4 py-md-5 bg-light">
    <div class="container">
     <div class="row g-4">
      <!-- Phone Card -->
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center p-4">
         <div class="ratio ratio-1x1 mx-auto mb-3" style="width: 60px;">
          <div class="rounded-circle d-flex align-items-center justify-content-center" style="background: var(--dusty-blue); color: var(--white);">
           <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122L9.98 10.9a.678.678 0 0 1-.673-.134l-1.447-1.447a.678.678 0 0 1-.134-.673l.468-1.805a.678.678 0 0 0-.122-.58L5.278 4.468z" />
           </svg>
          </div>
         </div>
         <h5 class="card-title">Telefon</h5>
         <p class="card-text text-muted mb-3">Rufen Sie uns an</p>
         <a href="tel:&lt;?php echo str_replace(' ', '', CONTACT_PHONE); ?&gt;" class="fw-semibold text-decoration-none" style="color: var(--dusty-blue);"><!--?php echo CONTACT_PHONE; ?--></a>
        </div>
       </div>
      </div>
      <!-- Email Card -->
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center p-4">
         <div class="ratio ratio-1x1 mx-auto mb-3" style="width: 60px;">
          <div class="rounded-circle d-flex align-items-center justify-content-center" style="background: var(--soft-gold); color: var(--white);">
           <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
            <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
           </svg>
          </div>
         </div>
         <h5 class="card-title">E-Mail</h5>
         <p class="card-text text-muted mb-3">Schreiben Sie uns</p>
         <a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="fw-semibold text-decoration-none" style="color: var(--soft-gold);"><!--?php echo SUPPORT_EMAIL; ?--></a>
        </div>
       </div>
      </div>
      <!-- Address Card -->
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center p-4">
         <div class="ratio ratio-1x1 mx-auto mb-3" style="width: 60px;">
          <div class="rounded-circle d-flex align-items-center justify-content-center" style="background: var(--deep-dusty-blue); color: var(--white);">
           <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
           </svg>
          </div>
         </div>
         <h5 class="card-title">Adresse</h5>
         <p class="card-text text-muted mb-3">Besuchen Sie uns</p>
         <address class="mb-0 fw-semibold" style="color: var(--deep-dusty-blue);"><!--?php echo CONTACT_ADDRESS; ?--></address>
        </div>
       </div>
      </div>
      <!-- Opening Hours Card -->
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center p-4">
         <div class="ratio ratio-1x1 mx-auto mb-3" style="width: 60px;">
          <div class="rounded-circle d-flex align-items-center justify-content-center" style="background: var(--deep-soft-gold); color: var(--white);">
           <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" /> <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
           </svg>
          </div>
         </div>
         <h5 class="card-title">Öffnungszeiten</h5>
         <p class="card-text text-muted mb-3">Wir sind für Sie da</p>
         <div class="small fw-semibold" style="color: var(--deep-soft-gold);">
          Mo-Fr: 9:00-18:00
          <br>
          Sa: 10:00-16:00
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Contact Form Section -->
   <section id="kontakt-form" class="py-4 py-md-5">
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-lg-8">
       <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-4">Kontaktieren Sie uns</h2>
        <p class="lead text-muted">Füllen Sie das Formular aus und wir melden uns innerhalb von 24 Stunden bei Ihnen.</p>
       </div>
       <div class="card border-0 shadow-lg" data-aos="fade-up" data-aos-delay="100">
        <div class="card-body p-4 p-md-5">
         <form method="POST" action="contact.php" novalidate>
          <!--?php if (!empty($errors) && !$success): ?-->
          <div class="alert alert-danger" role="alert">
           <h6 class="mb-2">Bitte korrigieren Sie folgende Fehler:</h6>
           <ul class="mb-0 ps-3">
            <!--?php foreach ($errors as $error): ?-->
            <li><!--?php echo htmlspecialchars($error); ?--></li>
            <!--?php endforeach; ?-->
           </ul>
          </div>
          <!--?php endif; ?-->
          <div class="row g-3">
           <!-- Name Field -->
           <div class="col-md-6">
            <label for="name" class="form-label fw-semibold">Name *</label> <input type="text" class="form-control form-control-lg &lt;?php echo isset($errors['name']) ? 'is-invalid' : ''; ?&gt;" id="name" name="name" value="&lt;?php echo htmlspecialchars($name ?? ''); ?&gt;" required placeholder="Ihr vollständiger Name"> <!--?php if (isset($errors['name'])): ?-->
            <div class="invalid-feedback">
             <!--?php echo htmlspecialchars($errors['name']); ?-->
            </div>
            <!--?php endif; ?-->
           </div>
           <!-- Email Field -->
           <div class="col-md-6">
            <label for="email" class="form-label fw-semibold">E-Mail-Adresse *</label> <input type="email" class="form-control form-control-lg &lt;?php echo isset($errors['email']) ? 'is-invalid' : ''; ?&gt;" id="email" name="email" value="&lt;?php echo htmlspecialchars($email ?? ''); ?&gt;" required placeholder="info@domain.com"> <!--?php if (isset($errors['email'])): ?-->
            <div class="invalid-feedback">
             <!--?php echo htmlspecialchars($errors['email']); ?-->
            </div>
            <!--?php endif; ?-->
           </div>
           <!-- Phone Field -->
           <div class="col-md-6">
            <label for="phone" class="form-label fw-semibold">Telefonnummer</label> <input type="tel" class="form-control form-control-lg" id="phone" name="phone" value="&lt;?php echo htmlspecialchars($phone ?? ''); ?&gt;" placeholder="+49 123 456 789">
           </div>
           <!-- Subject Field -->
           <div class="col-md-6">
            <label for="subject" class="form-label fw-semibold">Betreff *</label> <select class="form-select form-select-lg &lt;?php echo isset($errors['subject']) ? 'is-invalid' : ''; ?&gt;" id="subject" name="subject" required> <option value="">Bitte wählen Sie einen Betreff</option> <option value="Reiseberatung" <?php echo (($subject ?? _)="==" _reiseberatung_) ? _selected_ : _;>&gt;Allgemeine Reiseberatung</option> <option value="Buchungsanfrage" <?php echo (($subject ?? _)="==" _buchungsanfrage_) ? _selected_ : _;>&gt;Buchungsanfrage</option> <option value="Norwegen" <?php echo (($subject ?? _)="==" _norwegen_) ? _selected_ : _;>&gt;Reise nach Norwegen</option> <option value="Schweden" <?php echo (($subject ?? _)="==" _schweden_) ? _selected_ : _;>&gt;Reise nach Schweden</option> <option value="Dänemark" <?php echo (($subject ?? _)="==" _dänemark_) ? _selected_ : _;>&gt;Reise nach Dänemark</option> <option value="Gruppenreise" <?php echo (($subject ?? _)="==" _gruppenreise_) ? _selected_ : _;>&gt;Gruppenreise</option> <option value="Sonstiges" <?php echo (($subject ?? _)="==" _sonstiges_) ? _selected_ : _;>&gt;Sonstiges</option> </select> <!--?php if (isset($errors['subject'])): ?-->
            <div class="invalid-feedback">
             <!--?php echo htmlspecialchars($errors['subject']); ?-->
            </div>
            <!--?php endif; ?-->
           </div>
           <!-- Message Field -->
           <div class="col-12">
            <label for="message" class="form-label fw-semibold">Nachricht *</label> <textarea class="form-control form-control-lg &lt;?php echo isset($errors['message']) ? 'is-invalid' : ''; ?&gt;" id="message" name="message" rows="6" required placeholder="Beschreiben Sie Ihre Reisewünsche, Daten, Anzahl der Personen...">&lt;?php echo htmlspecialchars($message ?? ''); ?&gt;</textarea> <!--?php if (isset($errors['message'])): ?-->
            <div class="invalid-feedback">
             <!--?php echo htmlspecialchars($errors['message']); ?-->
            </div>
            <!--?php endif; ?-->
           </div>
           <!-- Privacy Checkbox -->
           <div class="col-12">
            <div class="form-check">
             <input class="form-check-input &lt;?php echo isset($errors['privacy']) ? 'is-invalid' : ''; ?&gt;" type="checkbox" id="privacy" name="privacy" required <?php echo isset($_post[_privacy_]) ? _checked_ : _;>&gt; <label class="form-check-label" for="privacy"> Ich stimme der <a href="privacy.php" class="text-decoration-none" style="color: var(--dusty-blue);">Datenschutzerklärung</a> zu und bin damit einverstanden, dass meine Daten zur Bearbeitung meiner Anfrage gespeichert werden. * </label> <!--?php if (isset($errors['privacy'])): ?-->
             <div class="invalid-feedback">
              <!--?php echo htmlspecialchars($errors['privacy']); ?-->
             </div>
             <!--?php endif; ?-->
            </div>
           </div>
           <!-- Submit Button -->
           <div class="col-12 text-center">
            <button type="submit" class="btn btn-lg px-5 py-3 fw-semibold text-white" style="background: linear-gradient(135deg, var(--dusty-blue), var(--deep-dusty-blue)); border: none;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(125, 141, 193, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';" onfocus="this.style.outline='2px solid var(--dusty-blue)'; this.style.outlineOffset='2px';" onblur="this.style.outline='none';">
             <svg class="me-2" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
              <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
             </svg>
             Nachricht senden
            </button>
           </div>
          </div>
         </form>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Map Section -->
   <section class="py-4 py-md-5 bg-light">
    <div class="container">
     <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
       <h3 class="display-6 fw-bold mb-4">Besuchen Sie unser Büro</h3>
       <p class="lead text-muted mb-4">Unser Reisebüro befindet sich im Herzen von Berlin. Kommen Sie vorbei für eine persönliche Beratung und lassen Sie sich von unserem Expertenteam beraten.</p>
       <div class="d-flex flex-column gap-3">
        <div class="d-flex align-items-center">
         <div class="ratio ratio-1x1 me-3" style="width: 40px;">
          <div class="rounded-circle d-flex align-items-center justify-content-center bg-primary text-white">
           <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
           </svg>
          </div>
         </div>
         <div>
          <strong>Adresse:</strong>
          <br>
          <!--?php echo CONTACT_ADDRESS; ?-->
         </div>
        </div>
        <div class="d-flex align-items-center">
         <div class="ratio ratio-1x1 me-3" style="width: 40px;">
          <div class="rounded-circle d-flex align-items-center justify-content-center bg-success text-white">
           <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
           </svg>
          </div>
         </div>
         <div>
          <strong>U-Bahn:</strong>
          <br>
          Unter den Linden (U6)
         </div>
        </div>
       </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
       <div class="ratio ratio-16x9 rounded overflow-hidden shadow">
        <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=600&amp;h=400&amp;fit=crop&amp;crop=center" alt="Karte von Berlin mit Standort" class="object-fit-cover" loading="lazy">
       </div>
       <div class="text-center mt-3">
        <a href="https://maps.google.com/?q=Unter+den+Linden+1,+10117+Berlin" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary"> 
         <svg class="me-2" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.708 2.825L15 11.105V5.383zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741zM1 11.105l4.708-2.897L1 5.383v5.722z" />
         </svg> In Google Maps öffnen 
        </a>
       </div>
      </div>
     </div>
    </div>
   </section>
  </main>
  <!-- Footer -->
  <!-- Bootstrap JS -->
  <!-- AOS Animation Library -->
  <script>
        AOS.init({
            once: false,
            duration: 600,
            easing: 'ease-out',
            offset: 120,
            mirror: false
        });
    </script>
  <!-- Custom JavaScript -->
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