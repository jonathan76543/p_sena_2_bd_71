<div id="back"></div>

<div class="login-box">

  <div class="login-logo">

 <img src="vistas/img/plantilla/13.png" class="img-responsive" style="padding:30px 100px 0px 100px"> <!--PARA CAMBIAR EL LOGO-->
    
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">_____________        BIENVENIDOS       _____________</p>

    <form method="post">


      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
       <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
       
         
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">ingresar</button>
        </div>
       
      </div>

 <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
