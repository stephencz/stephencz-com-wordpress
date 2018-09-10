<div class="footer-wrapper">
  <div class="container">
    <div class="footer">
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/5.10.6/typeit.js"></script>

<script>hljs.initHighlightingOnLoad();</script>

<script>
new TypeIt('#header', {
  speed: 50,
  startDelay: 900
}).destroy();

new TypeIt('#description', {
  speed: 40,
  startDelay: 2000
}).destroy();

new TypeIt('#email', {
  speed: 60,
  startDelay: 4000
}).destroy();
</script>

<?php wp_footer(); ?>
</body>
</html>
