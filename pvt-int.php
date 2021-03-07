<?php include_once 'includes/template/header.php'; ?>

<main class="container-fluid vertical-margin">
  <div class="cont-box-pf row ">
    <div class="grey-box-ext col-12">
      <div class="grey-box-int">
        <div class="orange-box-int col-2 offset-3">
          <h2>¿Que Tiene Chilecito Para vos?</h2>
        </div>
        <ul class="list-grey-box">
          <li class="hotel">
            <p><img src="./img/hotel.png" alt=""> Hoteleria: <span>Contamos Con información de más de 30 hoteles, se
                pueden realizar
                reservaciones en todo momento.</span></p>
          </li>
          <li class="restaurant">
            <p> <img src="./img/restaurant.png" alt=""> Restaurantes: <span>Contamos con información de más de 20
                restaurantes</span></p>
          </li>
          <li class="transport">
            <p> <img src="./img/bus.png" alt=""> Traslados: <span>Contamos con información de más de 20 agencias de
                viajes</span></p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="cont-box-pf row">
    <div class="grey-box-ext col-12">
      <div class="grey-box-int " id="">
        <div class="orange-box-int col-2 offset-3">
          <h4>¿Que Tiene Chilecito Para vos?</h4>
        </div>
        <ul class="list-grey-box">
          <li class="hotel">
            <p><img src="./img/hotel.png" alt=""> Hoteleria: <span>Contamos Con información de más de 30 hoteles, se
                pueden realizar
                reservaciones en todo momento.</span></p>
          </li>
          <li class="restaurant">
            <p> <img src="./img/restaurant.png" alt=""> Restaurantes: <span>Contamos con información de más de 20
                restaurantes</span></p>
          </li>
          <li class="transport">
            <p> <img src="./img/bus.png" alt=""> Traslados: <span>Contamos con información de más de 20 agencias de
                viajes</span></p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row no-gutter wrap">
    <div class="col-lg-5 mb-4">
      <div class="card ml-">
        <div class="card-body card-contacto">
          <div class="">
            <h3><i class=""></i>¿Te interesa este tour?</h3>
          </div>
          <p>Nuestros agentes se contactaran pronto con usted</p>
          <br>
          <div class="md-form">
            <i class=""></i>
            <label for="form-name">Tu nombre</label>
            <input type="text" id="form-name" class="form-control" placeholder="Escribi tu nombre completo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escribi tu nombre completo'">

          </div>

          <div class="md-form">
            <i class=""></i>
            <label for="form-email">Tu Correo</label>
            <input type="text" id="form-email" class="form-control" placeholder="Lugoservicios@ejemplo.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lugoservicios@ejemplo.com'">
          </div>
          <div class="md-form">
            <i class=""></i>
            <label for="form-phone">Numero de Telefono (Celular o fijo)</label>
            <input type="tel" id="form-phone" class="form-control" placeholder="+54 3825 - 886828" onfocus="this.placeholder = ''" onblur="this.placeholder = '+54 3825 - 886828'">
          </div>

          <div class="md-form">
            <i class=></i>
            <span>Fecha de Viaje</span>
            <div class="row fecha-llegada ml-1">
              <input type="date" id="form-date-in" class="form-control col-3 text-form" onfocus="this.placeholder = ''" onblur="this.placeholder = 'dd/mm/aaaa'"> <label for="llegada" class="ml-4">Fecha de Llegada</label>
            </div>
            <div class="row fecha-llegada ml-1">
              <input type="date" id="form-date-out" class="form-control col-3 text-form" onfocus="this.placeholder = ''" onblur="this.placeholder = 'dd/mm/aaaa'">
              <label for="partida" class="ml-4">Fecha de Salida</label>
            </div>
          </div>
          <div class="md-form">
            <i class=""></i>
            <label for="pasajeros">Cantidad de pasajeros/acompañantes</label>
            <input type="number" id="form-passenger" class="form-control" min="0" max="5000" placeholder="Introduce el numero de pasajeros" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Introduce el numero de pasajeros'">
          </div>

          <div class="md-form">
            <i class=""></i>
            <textarea id="form-mensaje" class="textarea-contact mt-4" rows="" placeholder="Escribe tu mensaje..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escribe tu mensaje...'"></textarea>
            <label for="form-text">Escribe tu mensaje</label>
          </div>

          <div class="text-center mt-2">
            <button class="btn btn-light" type="submit" value="Submit" id="btn-enviar">Enviar</button>
          </div>

        </div>

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
<script src="./js/set-min-date.js"></script>

<div data-spy="scroll" data-target="#navId">

  <div id="navId">
    <ul class="nav nav-tabs" role="tablist">

    </ul>
  </div>

</div>


<script>
  $('div{1:div|body}').scrollspy({
    target: '#navId'
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