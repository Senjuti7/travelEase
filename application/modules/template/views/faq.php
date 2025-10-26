<?php
$faqs = [
    [
        "question" => "How can I book a flight on your website?",
        "answer" => "You can easily search for available flights using our quick search form, compare prices, and complete your booking online with secure payment options."
    ],
    [
        "question" => "Can I change or cancel my flight after booking?",
        "answer" => "Yes, most airlines allow changes or cancellations. You can manage your booking through your account dashboard or contact our support team for assistance."
    ],
    [
        "question" => "Do you offer discounts or special deals on flights?",
        "answer" => "Yes! We regularly provide special offers and seasonal discounts on domestic and international flights. Subscribe to our newsletter to stay updated."
    ],
    [
        "question" => "What payment methods do you accept?",
        "answer" => "We accept major credit/debit cards, UPI, net banking, and digital wallets to ensure a smooth and secure checkout experience."
    ],
];

?>

<style>
    .faq-section {
        background-color: #f9f9f9;
        padding: 60px 0;
    }
    .faq-title {
        color: #19183B;
    }
    .faq-card {
        border: none;
        background: #fff;
        transition: all 0.3s ease-in-out;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        cursor: pointer;
    }
    .faq-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 6px 18px rgba(0,0,0,0.12);
    }
    .faq-question {
        font-weight: 600;
        color: #30343f;
        font-size: 1.1rem;
    }
    .faq-answer {
        color: #555;
        font-size: 0.95rem;
        display: none;
        margin-top: 8px;
    }
    .faq-card.active .faq-answer {
        display: block;
    }
    .faq-card .icon {
        font-size: 1.3rem;
        color: #19183B;
        transition: transform 0.3s ease;
    }
    .faq-card.active .icon {
        transform: rotate(45deg);
    }
</style>

<section class="faq-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="fw-semibold text-uppercase faq-title">FAQs</span>
            <h4 class="fw-bold text-dark section-title">Frequently Asked Questions</h4>
            <p class="text-muted">Find quick answers to common queries about our services</p>
        </div>
        <div class="row g-4">
            <?php foreach ($faqs as $index => $faq): ?>
                <div class="col-md-6">
                    <div class="faq-card p-4" onclick="toggleFaq(this)">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="faq-question"><?= htmlspecialchars($faq['question']) ?></div>
                            <span class="icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <?= htmlspecialchars($faq['answer']) ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    function toggleFaq(card) {
        card.classList.toggle("active");
    }
</script>
