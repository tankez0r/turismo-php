<?php include_once 'includes/template/header.php'; ?>

<section class="header-title">

  <h1>Calendario de Eventos Turisticos en La Rioja</h1s>

</section>
<main class="container-fluid">
  <div class="contenedor-eventos">
    <div class="responsiveCal col-lg-6" style="margin-right: auto;">
      <iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=2&amp;bgcolor=%237986CB&amp;ctz=America%2FArgentina%2FBuenos_Aires&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;src=NGM4ZzhkYmY4Z2EzZWhjMzhmczFic2M1bWdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZXMuYXIjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23009688&amp;color=%230B8043&amp;hl=es_419&amp;showCalendars=0&amp;showNav=1&amp;showDate=0&amp;showTitle=0&amp;title=Lugo%20Consultora" style="border:solid 1px #777" width="100%" height="400" frameborder="0" scrolling="no"></iframe>
    </div>
    <div class="ap-event col-lg-5">
      <h2 class="col-12">En el mes de Marzo:</h2>
      <img src="./img/fotoslider2.jpg" alt="" class="col-8">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod dolores voluptatum est ad quasi numquam animi
        obcaecati molestias tenetur modi corporis repellendus rerum, omnis consectetur illo laborum optio ducimus rem.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique odit, nostrum ex dolorum aliquid eaque
        assumenda eveniet corporis sit cupiditate, quae provident soluta voluptatem praesentium itaque, architecto a
        corrupti omnis.</p>
    </div>
</main>
<?php include_once 'includes/template/footer.php'; ?>
<!----------------------------Javascript----------------------------->
<!--Scripts aplicaciones-->
<script>
  $('#navId a').click(e => {
    e.preventDefault();
    $(this).tab('show');
  });
</script>




<!--scritps de llamada-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../js/bar-shrink.js"></script>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function() {
    ga.q.push(arguments)
  };
  ga.q = [];
  ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('set', 'transport', 'beacon');
  ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
<!--Bootstrap 5.0.0 y popper-->
<script src="https://unpkg.com/@popperjs/core@2"></script>
</body>

</html>