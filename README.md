# Proyecto Tienda Física/Online con Laravel

Este proyecto tiene como objetivo desarrollar una aplicación web utilizando el framework Laravel para gestionar una tienda tanto física como online. A continuación, se detallan los puntos pendientes a abordar:

## 1. Configuración del Entorno

- [x] Configuración del entorno de desarrollo local.
- [x] Configuración de la base de datos (MySQL, PostgreSQL, etc.).
- [x] Configuración de las variables de entorno.

## 2. Instalación y Configuración

- [x] Instalación de Laravel.
- [x] Configuración de la conexión a la base de datos.
- [ ] Configuración del sistema de autenticación.
- [ ] Configuración de la gestión de roles y permisos. (admin/guest)

## 3. Desarrollo de Funcionalidades

- [ ] Implementación y desarrollo del catálogo de productos. (crud)
- [ ] Desarrollo del carrito de compras.
- [ ] Mockup de pasarela de pago con form de datos de cliente (3 opciones de pago: standard, express, recoger en tienda física)
- [ ] Implementación del sistema de pedidos y facturación. (ver resumen de pedido y guardar en bd)
- [ ] Desarrollo del sistema de gestión de inventario.

## 4. Diseño y Frontend

- [ ] Diseño de la interfaz de usuario.
- [ ] Implementación de las vistas utilizando Blade.
- [ ] Integración de estilos CSS (Bootstrap, Tailwind CSS, etc.).

## 5. Documentación

- [ ] Documentación básica del Proyecto y casos de uso.

---
---

### Comandos útiles para desarrollar el proyecto en Laravel

- php artisan serve

Configuración necesaria después de hacer git clone:

  - cd tienda
  - composer install
  - cp .env.example .env
  - php artisan key:generate
  - php artisan migrate

### Versionado

- Laravel v10.47.0
  
- PHP v8.1.2
- Apache/2.4.56

https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.25/xampp-windows-x64-8.1.25-0-VS16.zip/download
