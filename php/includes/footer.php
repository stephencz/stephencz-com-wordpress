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
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>

<script>hljs.initHighlightingOnLoad();</script>

<script>
$(document).ready(function() {

  var cookie = Cookies.get('shouldType');

  if(cookie == null){
    Cookies.set('shouldType', 'true', { expires: 7 });
    cookie = Cookies.get('shouldType')
  }

  if(cookie == "true"){
    new TypeIt('#header', {
      strings: 'Stephen Czekalski',
      speed: 60,
      startDelay: 900
    }).destroy();

    new TypeIt('#description', {
      strings: 'Personal Website',
      speed: 60,
      startDelay: 2000
    }).destroy();

    new TypeIt('#email', {
      strings: 'contact@stephencz.com',
      speed: 60,
      startDelay: 4000
    }).destroy();

    Cookies.set('shouldType', 'false', { expires: 7 });
  }
  else
  {
    $('#header').text('Stephen Czekalski');
    $('#description').text('Personal Website');
    $('#email').text('contact@stephencz.com');
  }
});

</script>

<?php wp_footer(); ?>
</body>
</html>
