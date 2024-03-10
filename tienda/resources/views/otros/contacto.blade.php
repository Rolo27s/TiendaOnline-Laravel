@extends('layouts.vistapadre')

@section('titulo')
Contacto
@endsection

@section('contenidoPrincipal')
    <br>
    <h1>¡Contacta con nosotros!</h1>

    <div class="contact-form">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>

    
    <div class="contact-info">
        <h2>Información de Contacto</h2>
        <p>Dirección: C. Alcalde Ramón Irrizarri Pastor, S/N, 29130 Alhaurín de la Torre, Málaga</p>
        <p>Teléfono: 951 29 83 13</p>
        <p>Correo Electrónico: info@todotienda.com</p>
        <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3204.006587870895!2d-4.578179348614968!3d36.65969958069215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd731ec560663ef7%3A0x80b65e4b55b46de9!2sIES%20Gerald%20Brenan!5e0!3m2!1ses!2ses!4v1647854178024!5m2!1ses!2ses"
    ></iframe>
        </div>
        <p>Síguenos en nuestras redes sociales:</p>
        <ul class="social-links">
            <li><a href="#" class="social-link">Facebook</a></li>
            <li><a href="#" class="social-link">Twitter</a></li>
            <li><a href="#" class="social-link">Instagram</a></li>
        </ul>
    </div>

@endsection