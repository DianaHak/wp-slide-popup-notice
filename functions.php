add_action('wp_footer', function () {
?>
<div id="st-slide-popup" class="st-slide-popup">
    <button class="st-close" aria-label="Close">&times;</button>

    <div class="st-content">
        <div class="st-icon">👋</div>

        <h3>Just a quick note</h3>

        <p>
            Thanks for visiting. We hope you find something useful here.
        </p>

        <p>
            Take a moment to explore the page — there may be helpful updates, resources, or information waiting for you.
        </p>
    </div>
</div>

<style>
.st-slide-popup {
    position: fixed;
    left: 20px;
    bottom: 20px;
    width: 360px;
    max-width: calc(100% - 40px);
    background: linear-gradient(180deg, #ffffff, #fafafa);
    border-radius: 26px;
    box-shadow: 0 30px 80px rgba(0,0,0,0.12);
    overflow: hidden;
    z-index: 999999;
    transform: translateX(-120%);
    opacity: 0;
    transition: transform 0.5s ease, opacity 0.5s ease;
    font-family: inherit;
}

.st-slide-popup.show {
    transform: translateX(0);
    opacity: 1;
}

.st-close {
    position: absolute;
    top: 12px;
    right: 12px;
    width: 34px;
    height: 34px;
    border: none;
    border-radius: 50%;
    background: #f2f2f2;
    color: #777;
    font-size: 22px;
    line-height: 1;
    cursor: pointer;
    z-index: 5;
}

.st-close:hover {
    background: #e7e7e7;
    color: #222;
}

.st-content {
    padding: 28px 24px 24px;
    text-align: center;
}

.st-icon {
    width: 74px;
    height: 74px;
    margin: 0 auto 18px;
    border-radius: 50%;
    background: radial-gradient(circle, #ffffff 0%, #f1f3f6 70%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 38px;
    box-shadow: inset 0 0 0 1px rgba(0,0,0,0.04);
}

.st-content h3 {
    margin: 0 0 12px;
    font-size: 22px;
    line-height: 1.2;
    font-weight: 900;
    letter-spacing: -0.3px;
    color: #151515;
}

.st-content p {
    margin: 0 auto 8px;
    max-width: 300px;
    font-size: 14px;
    line-height: 1.65;
    color: #606060;
}

.st-content p:last-child {
    margin-bottom: 0;
}

@media (max-width: 480px) {
    .st-slide-popup {
        left: 12px;
        bottom: 12px;
        width: calc(100% - 24px);
        max-width: none;
        border-radius: 22px;
    }

    .st-content {
        padding: 26px 20px 22px;
    }

    .st-icon {
        width: 64px;
        height: 64px;
        font-size: 32px;
        margin-bottom: 16px;
    }

    .st-content h3 {
        font-size: 20px;
    }

    .st-content p {
        font-size: 13.5px;
        max-width: 280px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const popup = document.getElementById('st-slide-popup');
    const closeBtn = document.querySelector('.st-close');
    const sessionKey = 'st_slide_popup_shown';

    if (!popup || sessionStorage.getItem(sessionKey)) {
        return;
    }

    function closePopup() {
        popup.classList.remove('show');
    }

    setTimeout(function () {
        popup.classList.add('show');
        sessionStorage.setItem(sessionKey, 'yes');

        setTimeout(function () {
            closePopup();
        }, 15000);

    }, 4000);

    if (closeBtn) {
        closeBtn.addEventListener('click', closePopup);
    }
});
</script>
<?php
});
