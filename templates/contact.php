<div class="contact-info">
    <div class="contact-item">
        <span class="contact-icon">📧</span>
        <a href="mailto:<?= $contact->email ?>" class="contact-link"><?= $contact->email ?></a>
    </div>
    <div class="contact-item">
        <span class="contact-icon">📱</span>
        <a href="tel:<?= $contact->phone ?>" class="contact-link"><?= $contact->phone_display ?></a>
    </div>
    <div class="contact-item">
        <span class="contact-icon">📍</span>
        <span><?= $contact->location ?></span>
    </div>
    <div class="contact-item">
        <span class="contact-icon">🌍</span>
        <span><?= $contact->language ?></span>
    </div>
    <div class="contact-item">
        <span class="contact-icon">🔗</span>
        <a href=<?= $contact->github['url'] ?>" target="_blank" class="contact-link"><?= $contact->github['display'] ?></a>
    </div>
</div>
