<?php require_once 'includes/header.php'; ?>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('news'); ?></h2>
            <p><?php echo t('latest_news'); ?></p>
        </div>
        
        <div class="news-list">
            <article style="margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                <h3>Tarımda Dijital Dönüşüm Başlıyor</h3>
                <p style="color: #666; font-size: 0.9em;">20 Kasım 2025</p>
                <p>Tarım sektöründe dijitalleşme adımları hız kazanıyor. Yeni sensör teknolojileri ile verim artışı hedefleniyor.</p>
                <a href="#" style="color: var(--primary-color); font-weight: 600;"><?php echo t('read_more'); ?></a>
            </article>
            
            <article style="margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                <h3>Yeni Sezon Hazırlıkları</h3>
                <p style="color: #666; font-size: 0.9em;">15 Kasım 2025</p>
                <p>Çiftçilerimiz yeni sezon için hazırlıklara başladı. Toprak analizleri ve gübreleme çalışmaları devam ediyor.</p>
                <a href="#" style="color: var(--primary-color); font-weight: 600;"><?php echo t('read_more'); ?></a>
            </article>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
