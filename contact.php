<?php require_once 'includes/header.php'; ?>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('contact'); ?></h2>
            <p><?php echo t('contact_title'); ?></p>
        </div>
        
        <div style="max-width: 600px; margin: 0 auto;">
            <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="name" style="display: block; margin-bottom: 5px; font-weight: 600;"><?php echo t('name'); ?></label>
                    <input type="text" id="name" name="name" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                
                <div>
                    <label for="email" style="display: block; margin-bottom: 5px; font-weight: 600;"><?php echo t('email'); ?></label>
                    <input type="email" id="email" name="email" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                
                <div>
                    <label for="message" style="display: block; margin-bottom: 5px; font-weight: 600;"><?php echo t('message'); ?></label>
                    <textarea id="message" name="message" rows="5" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
                </div>
                
                <button type="submit" class="btn" style="border: none; cursor: pointer;"><?php echo t('submit'); ?></button>
            </form>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
