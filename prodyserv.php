<?php include_once 'includes/template/header.php'; ?>

<main class="container-fluid vertical-margin">
  <div class="row">
    <div class="blog-entry row">
      <img src="./img/fotoslider2.jpg" alt="" class="col-auto col-lg-5">
      <div class="text-blog col-auto col-lg-6">
        <h3>FORMULACIÓN Y GESTIÓN DE PROYECTOS DE INVERSIÓN TURÍSTICO</h3>
        <p>Ofrecemos ideas y proyectos creativos para instituciones públicas que pretenden alcanzar un desarrollo
          local
          a nivel municipal o regional, como así también trabajamos con entidades privadas que procuran obtener
          resultados desarrollando la actividad turística, en busca de un desarrollo económico, social y sustentable.
          Trabajamos en modelos de gestión y excelencia turística.
          También asesoramos a emprendedores que deseen invertir en proyectos innovadores y creativos cumpliendo con
          las
          necesidades y preferencias que el cliente solicita.
          Brindamos soluciones rentables, sostenibles y responsables con el medio ambiente, aprovechando los recursos
          sin comprometer al medio ambiente para el ocio y disfrute de los visitantes y turistas.
        </p>
      </div>
    </div>
    <div class="blog-entry row">
      <img src="./img/fotoslider2.jpg" alt="" class="col-auto col-lg-5">
      <div class="text-blog col-auto col-lg-6">
        <h3>PLANIFICACIÓN DE DESTINOS TURÍSTICOS</h3>
        <p>La planificación estratégica turística está orientada hacia la organización del destino turístico y hacia
          el
          aprovechamiento de las fortalezas internas y oportunidades externas del entorno (análisis FODA). Permite
          identificar los distintos actores que inciden en el desarrollo del turismo, promoviendo la eficiencia y
          efectividad de los esfuerzos.
          Es un proceso clave que tiene como objetivo realizar estrategias adaptadas a las características concretas
          de
          las entidades privadas o destinos, analizando concretamente el entorno en que se encuentran.
          La implantación de la estrategia y mecanismos de control y mejora continua serán las claves del éxito de
          acuerdo a la estrategia formulada y permitirá a la empresa o destino turístico adaptarse a los gustos y
          necesidades del turista.

        </p>
      </div>
    </div>
    <div class="blog-entry row">
      <img src="./img/fotoslider2.jpg" alt="" class="col-auto col-lg-5">
      <div class="text-blog col-lg-6">
        <h3>MARKETING TURÍSTICO</h3>
        <p>El Marketing es el nexo entre las entidades privadas y las instituciones públicas manteniendo una conexión
          entre el cliente actual o potencial. Son elementos esenciales al momento de transmitir y darse a conocer.
          Para cumplir objetivos, es indispensable definir estrategias de marketing y comunicación para que las
          acciones que se desarrollen sean efectivas, rentables y se alineen con los valores de cada empresa o destino
          y así acercarnos al cliente con la intención de superar sus expectativas y cubrir sus necesidades.
          Planes de marketing.
          Diseños web.
          Marketing digital.
          Diseño y desarrollo de productos.
          Stands y diseño de uniformes e indumentaria para promociones.
      </div>
      </p>
    </div>
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