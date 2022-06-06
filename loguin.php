<link rel="stylesheet" href="assets/css/ventanaflotante.css">

<section class="ventana" id="vent">
            <div id="cerrar"><a href="javascript:salir()"><img src="assets/img/error.png"></a></div>
            <div class="form-register">
                <h4>REGISTRARSE</h4>
                <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
                <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
                <input class="controls" type="password" name="correo" id="correo" placeholder="Ingrese su Contraseña">
                <input class="botons" type="submit" value="Registrar">
                <p><a href="#">¿Ya tengo Cuenta?</a></p>
            </div>
        </section>
        <section class="ventana" id="ventsession">
            <div id="cerrar"><a href="javascript:salirsession()"><img src="assets/img/error.png"></a></div>
            <div class="form-register">
                <h4>INICIAR SESSION</h4>
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
                <input class="controls" type="password" name="correo" id="correo" placeholder="Ingrese su Contraseña">
                <input class="botons" type="submit" value="INICIAR SESSION">
                <p><a href="#">¿No tienes una cuenta?</a></p>
            </div>
        </section>
</selection>

<script>
    function abrir(){
        document.getElementById("vent") .style.display="block";
    }
    
    function salir(){
        document.getElementById("vent") .style.display="none";
    }
    function session(){
        document.getElementById("ventsession") .style.display="block";
    }
    function salirsession(){
        document.getElementById("ventsession") .style.display="none";
    }
    
</script>