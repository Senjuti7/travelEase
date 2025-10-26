
<script>
    // feature pills toggle - desktop only (mobile hides details via CSS)
    (function() {
        const pills = document.querySelectorAll('.feature-compact .pill');
        const details = document.querySelectorAll('.feature-details .detail');

        function clearActive() {
            pills.forEach(p => p.classList.remove('active'));
            details.forEach(d => d.style.display = 'none');
        }
        pills.forEach(p => {
            p.addEventListener('click', () => {
                if (window.innerWidth <= 768) return; // ignore on mobile
                const key = p.getAttribute('data-key');
                clearActive();
                p.classList.add('active');
                const sel = document.querySelector('.feature-details .detail[data-key="' + key + '"]');
                if (sel) sel.style.display = 'block';
            });
        });
        // show first detail by default on large screens
        if (window.innerWidth > 768 && details.length) {
            clearActive();
            const firstP = pills[0];
            firstP.classList.add('active');
            const firstKey = firstP.getAttribute('data-key');
            const firstDetail = document.querySelector('.feature-details .detail[data-key="' + firstKey + '"]');
            if (firstDetail) firstDetail.style.display = 'block';
        }
    })();
</script>
</div>
</section>

<?php $this->load->view('home/boxes.php'); ?>
<?php $this->load->view('home/plan.php'); ?>
<?php $this->load->view('home/choose.php'); ?>


<?php $this->load->view('home/about.php'); ?>
<?php $this->load->view('template/faq.php'); ?>