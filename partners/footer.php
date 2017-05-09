  </div><!-- /.row -->
</div><!-- /.container -->

<div id="footer">
<div class="container-fluid">
<div class="row">
  <div class="col-xs-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 text-center">
    <a href="about.php" class="footer-link">About</a> |
    <a href="contact.php" class="footer-link">Contact</a>
    <br><span class="small-text">&copy; 2017 Rate My Dentist. All rights reserved.</span>
  </div>
</div>
</div>
</div>

<script type="text/javascript">
$(document).ready(function () {
  $('[data-toggle=offcanvas]').click(function () {
    if ($('.sidebar-offcanvas').css('background-color') == 'rgb(255, 255, 255)') {
      $('.list-group-item').attr('tabindex', '-1');
    } else {
      $('.list-group-item').attr('tabindex', '');
    }
    $('.row-offcanvas').toggleClass('active');
    
  });
});
</script>

</body>
</html>