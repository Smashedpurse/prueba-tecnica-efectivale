# Prueba Técnica – Formulario de Contacto (Laravel 10)

Este proyecto es una mini aplicación de formulario de contacto desarrollada en **Laravel 10**.  
Permite registrar mensajes de contacto y visualizarlos en una tabla, cumpliendo con los requisitos de la prueba técnica.

---

## 📌 ¿Qué hace esta aplicación?

-   Muestra un formulario con los campos:
    -   Nombre
    -   Email
    -   Mensaje
-   Valida los campos antes de enviar la información
-   Envía los datos sin recargar la página (AJAX)
-   Guarda los mensajes en un archivo `.json`
-   Muestra los registros guardados en una tabla

---

## 🛠️ Requisitos previos (IMPORTANTE)

Antes de ejecutar el proyecto, asegúrate de tener instalado en tu computadora:

1. **PHP 8.1 o superior**
2. **Composer a partir de la versión 2** (Administrador de dependencias de PHP)

Es posible validar las versiones instaladas por medio de los siguientes comandos correspondientes:
PHP: php -v
Composer: composer -v

Esto dentro de la consola de comandos (CMD)

> ⚠️ Si no cuentas con estos requisitos, el proyecto no podrá ejecutarse.

---

## 📥 Descargar el proyecto

⚠️ Verificar si Git está instalado
Abre PowerShell o la terminal y ejecuta:

git --version

Si el comando devuelve una versión (por ejemplo: git version 2.x.x), Git ya está instalado.
Si no, puedes descargarlo desde:
https://git-scm.com/downloads

---

### 2️⃣ Ingresa a la liga del repositorio

Entra a este repositorio en GitHub // https://github.com/Smashedpurse/prueba-tecnica-efectivale

En GitHub:

1. Entra al repositorio
2. Haz clic en el botón **Code**
3. Copia la URL en formato HTTPS

https://github.com/Smashedpurse/prueba-tecnica-efectivale.git

---

### 3️⃣ Clonar el proyecto

Ubícate en la carpeta donde deseas guardar el proyecto:

cd Desktop (Esto para ingresar a tu escritorio y posteriormente a la carpeta donde desees instalar el proyecto)

Ejecuta el comando:

git clone https://github.com/Smashedpurse/prueba-tecnica-efectivale.git

Esto descargará el proyecto completo

---

### 4️⃣ Acceder al proyecto

Una vez descargado, entra a la carpeta del proyecto:

cd nombre-repositorio (prueba-tecnica-efectivale)

Ya de esta manera podremos tener acceso a la carpeta de nuestro proyecto

---

### 4️⃣ Instalación de dependencias

1- Una vez nos encontremos dentro de la carpeta, es necesario generar la instalación de las dependencias necesarias para que el proyecto funcione.
Para esto ingresaremos en nuestra terminal (cmd) dentro de la carpeta del proyecto el comando: composer install

⚠️ Es un proceso tardado por lo cual es importante !!! NO INTERRUMPIR !!! la descarga de las dependencias, de lo contrario nuestro proyecto nunca funcionará por falta de archivos necesarios

2- Generamos la llave de la aplicación por medio del comando: php artisan key:generate

Si el proceso finaliza de manera correcta obtendremos el mensaje: Application key set successfully.

5️⃣ Iniciar el servidor del proyecto

Para arrancar nuestro proyecto dentro de la terminal de este ingresamos el comando: php artisan serve

Si todo salió de manera correcta se reflejará la URL del proyecto el cual al estar sobre el y con click derecho podremos aperturar en nuestro navegador y disfrutar de la aplicación de captura de registros 🤓
