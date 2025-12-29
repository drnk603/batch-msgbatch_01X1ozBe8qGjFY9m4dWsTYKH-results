<!--?php
// Error handling und Konfiguration
require_once 'config/constants.php';
require_once 'includes/error_handler.php';

// Session-Management
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Konfiguration und Datenbankverbindung
require_once 'config/database.php';
require_once 'config/config.php';

// Helper-Funktionen
require_once 'includes/functions.php';

// Konfiguration laden
Config::load();

// Output-Buffering für Performance
ob_start();

// Brand-Konstanten definieren
define('BRAND_NAME', 'Nordic Reisen');
define('PRIMARY_DOMAIN', 'nordic-reisen.de');
define('SUPPORT_EMAIL', 'info@' . PRIMARY_DOMAIN);
define('COMPANY_ADDRESS', 'Hansering 42, 22767 Hamburg');
define('COMPANY_PHONE', '+49 40 123 456 789');

// Routing-Logic
$type = sanitize($_GET['type'] ?? '');
$slug = sanitize($_GET['slug'] ?? '');
$page = sanitize($_GET['page'] ?? 'home');

// Seiten-Setup für index.php
$pageTitle = 'Scandinavian Simplicity - Nordic Reisen | Premium Reiseerlebnisse';
$pageDescription = 'Entdecken Sie die Schönheit Skandinaviens mit Nordic Reisen. Exklusive Reisepakete, authentische Erlebnisse und unvergessliche Momente im Norden Europas.';
$pageKeywords = 'Skandinavien Reisen, Norwegen, Schweden, Dänemark, Nordlichter, Reiseerlebnisse';
$pageUrl = 'https://domain.com';
$ogImage = 'https://domain.com/images/nordic-hero-og.jpg';
$canonicalUrl = 'https://domain.com';

// CSRF Token generieren
function generateCSRFToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

$csrfToken = generateCSRFToken();
?-->
<!doctype html>
<html lang="de">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- SEO Meta Tags -->
  <title>&lt;?php echo htmlspecialchars($pageTitle); ?&gt;</title>
  <meta name="description" content="&lt;?php echo htmlspecialchars($pageDescription); ?&gt;">
  <meta name="keywords" content="&lt;?php echo htmlspecialchars($pageKeywords); ?&gt;">
  <meta name="author" content="&lt;?php echo BRAND_NAME; ?&gt;">
  <meta name="robots" content="index, follow">
  <!-- Open Graph Tags -->
  <meta property="og:title" content="&lt;?php echo htmlspecialchars($pageTitle); ?&gt;">
  <meta property="og:description" content="&lt;?php echo htmlspecialchars($pageDescription); ?&gt;">
  <meta property="og:image" content="&lt;?php echo htmlspecialchars($ogImage); ?&gt;">
  <meta property="og:url" content="&lt;?php echo htmlspecialchars($pageUrl); ?&gt;">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="&lt;?php echo BRAND_NAME; ?&gt;">
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="&lt;?php echo htmlspecialchars($pageTitle); ?&gt;">
  <meta name="twitter:description" content="&lt;?php echo htmlspecialchars($pageDescription); ?&gt;">
  <meta name="twitter:image" content="&lt;?php echo htmlspecialchars($ogImage); ?&gt;">
  <!-- Canonical URL -->
  <link rel="canonical" href="&lt;?php echo htmlspecialchars($canonicalUrl); ?&gt;">
  <!-- Favicon -->
  <!-- Bootstrap CSS -->
  <!-- Accessibility: High contrast mode -->
  <!-- Security Headers -->
  <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' https:; img-src 'self' data: https:;">
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
  <div class="scroll-margin-anchor" style="scroll-margin-top: var(--nav-h);"></div>
  <!-- Header Navigation -->
  <main>
   <!-- Hero Section -->
   <section class="hero-section position-relative py-4 py-md-5" style="background: linear-gradient(135deg, rgba(101, 115, 146, 0.9), rgba(213, 186, 148, 0.8)), url('https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=1920&amp;h=1080&amp;fit=crop') center/cover;">
    <div class="container py-4 py-md-5">
     <div class="row justify-content-center text-center text-white">
      <div class="col-lg-8" data-aos="fade-up" data-aos-duration="800">
       <h1 class="display-4 fw-light mb-4">Authentische Skandinavien-Erlebnisse</h1>
       <p class="lead mb-4">Entdecken Sie die unberührte Schönheit des Nordens mit unseren exklusiven Reisepaketen. Von den norwegischen Fjorden bis zu den schwedischen Wäldern.</p>
       <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
        <a href="services.php" class="btn btn-light btn-lg px-4" role="button">Reisen entdecken</a> <a href="#experiences" class="btn btn-outline-light btn-lg px-4" role="button">Erfahrungen</a>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Awards Section -->
   <section class="py-4 py-md-5 bg-light">
    <div class="container">
     <div class="row text-center" data-aos="fade-up">
      <div class="col-12 mb-4">
       <h2 class="h4 fw-light mb-4">Ausgezeichnet für Exzellenz</h2>
      </div>
      <div class="col-md-4 mb-3">
       <div class="card h-100 border-0 shadow-sm" data-aos="fade-up" data-aos-delay="100">
        <div class="card-body p-4">
         <div class="ratio ratio-1x1 mb-3" style="width: 60px; margin: 0 auto;">
          <svg class="text-warning" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
           <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
         </div>
         <h3 class="h6 fw-semibold">Beste Reiseerfahrung 2024</h3>
         <p class="text-muted small mb-0">Scandinavian Travel Awards</p>
        </div>
       </div>
      </div>
      <div class="col-md-4 mb-3">
       <div class="card h-100 border-0 shadow-sm" data-aos="fade-up" data-aos-delay="200">
        <div class="card-body p-4">
         <div class="ratio ratio-1x1 mb-3" style="width: 60px; margin: 0 auto;">
          <svg class="text-primary" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
           <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
         </div>
         <h3 class="h6 fw-semibold">Nachhaltiger Tourismus</h3>
         <p class="text-muted small mb-0">Green Travel Certification</p>
        </div>
       </div>
      </div>
      <div class="col-md-4 mb-3">
       <div class="card h-100 border-0 shadow-sm" data-aos="fade-up" data-aos-delay="300">
        <div class="card-body p-4">
         <div class="ratio ratio-1x1 mb-3" style="width: 60px; margin: 0 auto;">
          <svg class="text-success" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
           <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
          </svg>
         </div>
         <h3 class="h6 fw-semibold">Kundenzufriedenheit</h3>
         <p class="text-muted small mb-0">98% Weiterempfehlung</p>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Partner Logos Section -->
   <section class="py-4 py-md-5">
    <div class="container">
     <div class="row">
      <div class="col-12 text-center mb-4">
       <h2 class="h4 fw-light mb-4">Unsere vertrauenswürdigen Partner</h2>
      </div>
     </div>
     <div class="row align-items-center justify-content-center g-4" data-aos="fade-up">
      <div class="col-6 col-md-3 text-center">
       <img src="https://images.unsplash.com/photo-1560472355-536de3962603?w=120&amp;h=60&amp;fit=crop" alt="Visit Norway Partner" width="120" height="60" class="img-fluid opacity-75" loading="lazy">
      </div>
      <div class="col-6 col-md-3 text-center">
       <img src="https://images.unsplash.com/photo-1509356843151-3e7d96241e11?w=120&amp;h=60&amp;fit=crop" alt="Visit Sweden Partner" width="120" height="60" class="img-fluid opacity-75" loading="lazy">
      </div>
      <div class="col-6 col-md-3 text-center">
       <img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?w=120&amp;h=60&amp;fit=crop" alt="Visit Denmark Partner" width="120" height="60" class="img-fluid opacity-75" loading="lazy">
      </div>
      <div class="col-6 col-md-3 text-center">
       <img src="https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=120&amp;h=60&amp;fit=crop" alt="Nordic Hotels Partner" width="120" height="60" class="img-fluid opacity-75" loading="lazy">
      </div>
     </div>
    </div>
   </section>
   <!-- Events Preview Section -->
   <section id="experiences" class="py-4 py-md-5 bg-light">
    <div class="container">
     <div class="row mb-5">
      <div class="col-12 text-center">
       <h2 class="display-6 fw-light mb-3" data-aos="fade-up">Kommende Reiseerlebnisse</h2>
       <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Exklusive Gruppenreisen und individuelle Abenteuer</p>
      </div>
     </div>
     <div class="row g-4">
      <div class="col-md-4">
       <div class="card h-100 border-0 shadow-sm" data-aos="fade-up" data-aos-delay="100">
        <div class="ratio ratio-4x3">
         <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&amp;h=300&amp;fit=crop" alt="Nordlichter in Norwegen" class="card-img-top" style="object-fit: cover;" loading="lazy">
        </div>
        <div class="card-body d-flex flex-column p-4">
         <div class="mb-2">
          <span class="badge bg-primary mb-2">März 2025</span>
         </div>
         <h3 class="card-title h5">Nordlichter-Safari Norwegen</h3>
         <p class="card-text flex-grow-1">Erleben Sie das magische Spektakel der Aurora Borealis in den unberührten Landschaften Nordnorwegens.</p>
         <div class="mt-auto">
          <div class="d-flex justify-content-between align-items-center mb-3">
           <span class="fw-bold text-primary">Ab 2.890€</span> <span class="text-muted small">7 Tage</span>
          </div>
          <a href="services.php" class="btn btn-outline-primary w-100">Details ansehen</a>
         </div>
        </div>
       </div>
      </div>
      <div class="col-md-4">
       <div class="card h-100 border-0 shadow-sm" data-aos="fade-up" data-aos-delay="200">
        <div class="ratio ratio-4x3">
         <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=400&amp;h=300&amp;fit=crop" alt="Schwedische Wälder" class="card-img-top" style="object-fit: cover;" loading="lazy">
        </div>
        <div class="card-body d-flex flex-column p-4">
         <div class="mb-2">
          <span class="badge bg-success mb-2">Juni 2025</span>
         </div>
         <h3 class="card-title h5">Mitternachtssonne Schweden</h3>
         <p class="card-text flex-grow-1">Wandern Sie durch endlose Wälder unter der Mitternachtssonne und entdecken Sie die schwedische Wildnis.</p>
         <div class="mt-auto">
          <div class="d-flex justify-content-between align-items-center mb-3">
           <span class="fw-bold text-primary">Ab 1.690€</span> <span class="text-muted small">5 Tage</span>
          </div>
          <a href="services.php" class="btn btn-outline-primary w-100">Details ansehen</a>
         </div>
        </div>
       </div>
      </div>
      <div class="col-md-4">
       <div class="card h-100 border-0 shadow-sm" data-aos="fade-up" data-aos-delay="300">
        <div class="ratio ratio-4x3">
         <img src="https://images.unsplash.com/photo-1552524123-0e9b0b205659?w=400&amp;h=300&amp;fit=crop" alt="Dänische Küste" class="card-img-top" style="object-fit: cover;" loading="lazy">
        </div>
        <div class="card-body d-flex flex-column p-4">
         <div class="mb-2">
          <span class="badge bg-warning text-dark mb-2">August 2025</span>
         </div>
         <h3 class="card-title h5">Dänische Inseln-Tour</h3>
         <p class="card-text flex-grow-1">Erkunden Sie die charmanten dänischen Inseln mit ihrer reichen Kultur und atemberaubenden Küstenlandschaft.</p>
         <div class="mt-auto">
          <div class="d-flex justify-content-between align-items-center mb-3">
           <span class="fw-bold text-primary">Ab 1.290€</span> <span class="text-muted small">4 Tage</span>
          </div>
          <a href="services.php" class="btn btn-outline-primary w-100">Details ansehen</a>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Interactive Poll Section -->
   <section class="py-4 py-md-5">
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-lg-8">
       <div class="card border-0 shadow" data-aos="fade-up">
        <div class="card-body p-4 p-md-5 text-center">
         <h2 class="h3 fw-light mb-4">Was ist Ihr Traumziel in Skandinavien?</h2>
         <form class="poll-form" method="POST" action="#">
          <input type="hidden" name="csrf_token" value="&lt;?php echo $csrfToken; ?&gt;">
          <div class="row g-3 mb-4">
           <div class="col-md-6">
            <div class="form-check form-check-card p-3 border rounded">
             <input class="form-check-input" type="radio" name="destination" id="norway" value="norway" required> <label class="form-check-label w-100" for="norway"> <strong>Norwegische Fjorde</strong> 
              <br> 
              <small class="text-muted">Spektakuläre Naturlandschaften</small> </label>
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-check form-check-card p-3 border rounded">
             <input class="form-check-input" type="radio" name="destination" id="sweden" value="sweden"> <label class="form-check-label w-100" for="sweden"> <strong>Schwedische Wälder</strong> 
              <br> 
              <small class="text-muted">Unberührte Wildnis</small> </label>
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-check form-check-card p-3 border rounded">
             <input class="form-check-input" type="radio" name="destination" id="denmark" value="denmark"> <label class="form-check-label w-100" for="denmark"> <strong>Dänische Hygge</strong> 
              <br> 
              <small class="text-muted">Gemütlichkeit und Kultur</small> </label>
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-check form-check-card p-3 border rounded">
             <input class="form-check-input" type="radio" name="destination" id="all" value="all"> <label class="form-check-label w-100" for="all"> <strong>Alles kombiniert</strong> 
              <br> 
              <small class="text-muted">Rundreise durch Skandinavien</small> </label>
            </div>
           </div>
          </div>
          <button type="submit" class="btn btn-primary px-4">Abstimmen</button>
         </form>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Image Slider Section -->
   <section class="py-4 py-md-5 bg-light">
    <div class="container">
     <div class="row mb-4">
      <div class="col-12 text-center">
       <h2 class="display-6 fw-light mb-3" data-aos="fade-up">Impressionen aus Skandinavien</h2>
       <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Lassen Sie sich inspirieren</p>
      </div>
     </div>
     <div id="scandinaviaSlider" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
      <div class="carousel-indicators">
       <button type="button" data-bs-target="#scandinaviaSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
       <button type="button" data-bs-target="#scandinaviaSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
       <button type="button" data-bs-target="#scandinaviaSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner rounded-3 overflow-hidden">
       <div class="carousel-item active">
        <div class="ratio" style="--bs-aspect-ratio: 50%;">
         <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=1200&amp;h=600&amp;fit=crop" class="d-block w-100" alt="Norwegische Fjorde bei Sonnenuntergang" style="object-fit: cover;" loading="lazy">
        </div>
        <div class="carousel-caption d-none d-md-block">
         <h3 class="h4 fw-light">Norwegische Fjorde</h3>
         <p>Die majestätische Schönheit der norwegischen Natur</p>
        </div>
       </div>
       <div class="carousel-item">
        <div class="ratio" style="--bs-aspect-ratio: 50%;">
         <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=1200&amp;h=600&amp;fit=crop" class="d-block w-100" alt="Schwedische Wälder im Herbst" style="object-fit: cover;" loading="lazy">
        </div>
        <div class="carousel-caption d-none d-md-block">
         <h3 class="h4 fw-light">Schwedische Wälder</h3>
         <p>Endlose Weiten und unberührte Wildnis</p>
        </div>
       </div>
       <div class="carousel-item">
        <div class="ratio" style="--bs-aspect-ratio: 50%;">
         <img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?w=1200&amp;h=600&amp;fit=crop" class="d-block w-100" alt="Dänische Küstenlandschaft" style="object-fit: cover;" loading="lazy">
        </div>
        <div class="carousel-caption d-none d-md-block">
         <h3 class="h4 fw-light">Dänische Küsten</h3>
         <p>Charmante Dörfer und malerische Landschaften</p>
        </div>
       </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#scandinaviaSlider" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Vorheriges</span></button>
      <button class="carousel-control-next" type="button" data-bs-target="#scandinaviaSlider" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Nächstes</span></button>
     </div>
    </div>
   </section>
  </main>
  <!-- Footer -->
  <!-- Bootstrap JS -->
  <!-- AOS Animation Library -->
  <!-- Custom JS -->
  <!-- Structured Data -->
  <!-- Initialize AOS -->
  <script>
        AOS.init({
            once: false,
            duration: 600,
            easing: 'ease-out',
            offset: 120,
            mirror: false
        });
    </script>
  <!--?php
// Output buffering beenden
ob_end_flush();
?-->
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