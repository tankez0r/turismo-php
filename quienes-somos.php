<?php include_once 'includes/template/header.php'; ?>
<section class="container-fluid cf-qs">
    <div class="qs-overflow row shadow-top" id="overflowbox">
      <div class="bg-shadow">
        <div class="cont-text-qs container-lg">
          <h1 class="text-qs">¿Quienes somos?</h1>
          <p class="text-qs">LuGo Consultora Turística es una empresa formada por profesionales orientados hacia la
            actividad turística y el desarrollo local y regional del territorio.
            Brindamos soluciones innovadoras que suplen las necesidades del mercado, adaptándonos a
            las exigencias de los clientes.
            Ofrecemos servicios de creación, desarrollo, puesta en valor y gestión de productos y servicios
            turísticos a entidades privadas y públicas. Analizamos el fenómeno turístico desde distintas
            perspectivas, articulando los saberes teóricos con la práctica, en base a análisis y diagnósticos
            profesionales que dé como resultado estrategias que generan acciones dirigidas al desarrollo
            social, económico y medioambientalmente sostenible.</p>
        </div>
      </div>
    </div>
    </div>

  </section>
<main class="container-fluid">
  <div class="vertical-margin">
    <article class="row article-box">
      <div class="box-img-art col-12 col-md-12 col-lg-7">
        <img src="./img/fotoslider1.jpg" alt="" class="img-art">
      </div>
      <div class="row col-md-12 col-lg-5 centrar-flex contenedor-text-mv">
        <h3 class="">Misión</h3>
        <p class="text-center">Somos una empresa que se dedica a la formulación y evaluación de
          proyectos turísticos
          locales
          y regionales, además de la planificación a través de ideas innovadoras para entidades públicas
          y privadas, buscando satisfacer las necesidades de nuestros clientes creando valor y haciendo
          la diferencia en la oferta de productos y servicios para incrementar el desarrollo económico,
          social y medioambiental sustentable de la actividad turística.</p>
      </div>
    </article>
    <article class="row article-box">
      <div class="row col-md-5 centrar-flex contenedor-text-mv">
        <h3 class="">Visión</h3>
        <p class="text-center" id="vision-p">Ser reconocida como empresa líder en la creación de productos y servicios
          turísticos
          innovadores y creativos en la región y el país. Con la confiabilidad y seguridad de sus clientes.</p>
      </div>
      <div class="box-img-art  col-md-7">
        <img src="./img/fotoslider3.jpg" alt="" class="">
      </div>
    </article>
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
<script src="js/quienes-somos.js"></script>
<script src="js/bar-shrink.js"></script>
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

<!--Cajita loca script-->
<script>
</script>
</body>

</html>