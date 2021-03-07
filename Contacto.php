<?php include_once 'includes/template/header.php'; ?>

<main class="container-fluid ">

  <section class=" pb-5">
    <div class="container-fluid header-text-contacto">
      <h1 class="pt-4">Contacto</h1>
      <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error
        amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a
        pariatur accusamus veniam.</p>
      <!--Header form-->
    </div>
    <div class="row no-gutter wrap">
      <div class="col-lg-5 mb-4">
        <div class="card ml-">
          <div class="card-body card-contacto">
            <div class="">
              <h3><i class=""></i>Deja tu mensaje</h3>
            </div>
            <p>Nuestros agentes se contactaran pronto con usted</p>
            <br>
            <div class="md-form">
              <i class=""></i>
              <label for="form-name">Tu nombre</label>
              <input type="text" id="form-name" class="form-control" placeholder="Escribe tu nombre completo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escribe tu nombre completo'">
            </div>

            <div class="md-form">
              <i class=""></i>
              <label for="form-email">Tu Correo</label>
              <input type="email" id="form-email" class="form-control" placeholder="lugoservicios@ejemplo.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'lugoservicios@ejemplo.com'">
            </div>

            <div class="md-form">
              <i class=></i>
              <label for="form-Subject">Asunto</label>
              <input type="text" id="form-Subject" class="form-control" placeholder="¿Cual es tu motivo de consulta?" onfocus="this.placeholder = ''" onblur="this.placeholder = '¿Cual es tu motivo de consulta?'">
            </div>

            <div class="md-form">
              <i class=""></i>
              <textarea id="form-text" class="textarea-contact mt-4" rows="" placeholder="Escribe tu mensaje..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escribe tu mensaje...'"></textarea>
              <label for="form-text">Escribe tu mensaje</label>
            </div>

            <div class="text-center mt-2">
              <button class="btn btn-light" type="submit" value="Submit" id="btn-enviar">Enviar</button>
            </div>

          </div>

        </div>
      </div>
      <!--Form with header-->
      <div class="col-12 col-lg-7 contact-info-container">
        <!--Mapa de google e info de contacto-->
        <div class="google-map">
          <!--Google map-->
          <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3484.324206360293!2d-67.50345619791287!3d-29.155117038503104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x969d64f56fedf163%3A0xd2238a59d76c8c67!2sParque%20De%20La%20Ciudad!5e0!3m2!1ses-419!2sar!4v1612966456571!5m2!1ses-419!2sar""></iframe><a
                  href=" https://piratebayproxy.net/">pirate bay proxy</a></div>
            <style>
              .mapouter {
                position: relative;
                text-align: right;
                width: 100%;
                height: 624px;
              }

              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                width: 100%;
                height: 624px;
              }

              .gmap_iframe {
                height: 624px !important;
              }
            </style>
          </div>
          <div class="row text-contact">
            <!--Texto contacto-->
            <div class="col-md-4">
              <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
              <p>La Rioja, Capital</p>
              <p>Argentina</p>
            </div>

            <div class="col-md-4">
              <a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
              <p>+ 54 3822 567 889</p>
              <p>Lunes a sabados, 8:00-16:00</p>
            </div>

            <div class="col-md-4">
              <a class="btn-floating blue accent-1"><i class="fas fa-envelope"></i></a>
              <p>info@gmail.com</p>
              <p>lugocon@gmail.com</p>
            </div>
          </div>

        </div>
        <!--Grid column-->

      </div>

  </section>
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