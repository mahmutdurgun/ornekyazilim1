<?php require_once 'includes/header.php'; ?>

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1><?php echo t('welcome_title'); ?></h1>
            <p><?php echo t('welcome_desc'); ?></p>
            <a href="about.php" class="btn"><?php echo t('read_more'); ?></a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('about_us_title'); ?></h2>
            <p><?php echo t('about_us_desc'); ?></p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🌱</div>
                <h3>Sürdürülebilir Tarım</h3>
                <p>Gelecek nesiller için doğayı koruyan üretim yöntemleri.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🚜</div>
                <h3>Modern Teknoloji</h3>
                <p>En son teknoloji ekipmanlar ile yüksek verimlilik.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔬</div>
                <h3>Ar-Ge Çalışmaları</h3>
                <p>Sürekli gelişim için bilimsel araştırmalar.</p>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
