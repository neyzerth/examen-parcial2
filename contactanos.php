<?php 
    include("includes/header.php");
?>
    <section>
        <h2>CONTACTO</h2>
        <!--IMAGES-->
    </section>
    <section>
        <h2>Llena el formulario de contacto</h2>
        <div>
            <form action="">
                <fieldset>
                    <legend>Informacion personal</legend>
                    <div>
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" placeholder="Tu nombre">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="ejemplo@email.com">
                    </div>
                    <div>
                        <label for="phone">Telefono</label>
                        <input type="text" name="phone" id="phone" placeholder="555 555 5555">
                    </div>
                    <div>
                        <label for="msg">Mensaje</label>
                        <textarea name="msg" id="msg" placeholder="Tu Mensaje"></textarea>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Informacion de la Propiedad</legend>
                    <div>
                        <label for="vencom">Vender o Comprar</label>

                    </div>
                    <div>

                    </div>
                </fieldset>

                <fieldset>
                    <legend>Contact</legend>
                    <div>
                        <label for="contactForm">Contact Form</label>

                        <label for="tel">Phone</label>
                        <input type="radio" name="tel" id="tel">

                        <label for="e-mail">Email</label>
                        <input type="radio" name="e-mail" id="e-mail">
                    </div>
                    <div>
                        <label for="date">Fecha</label>
                        <input type="date" name="date" id="date">
                    </div>
                    <div>
                        <label for="time">Hora</label>
                        <input type="time" name="time" id="time">
                    </div>
                </fieldset>
                <div>
                    <button>Contactar</button>
                </div>
            </form>
        </div>
    </section>
<?php 
    include("includes/footer.php");
?>