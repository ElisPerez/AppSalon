# Variables de entorno

En la terminal, instalen el siguiente paquete:

composer require vlucas/phpdotenv

Crean un archivo ".env" en la raíz del proyecto junto a otro ".env.example" (el ".env.example" se sube al repositorio, pero sin datos). Luego, colocan las siguientes variables (pueden incluir las del MAILTRAP o no, es opcional pero recomendable):

#CONNECTION
DB_HOST = ""
DB_USER = ""
DB_PASSWORD = ""
DB_DATABASE = ""

#CONFIG MAILTRAP
MAIL_MAILER = ""
MAIL_HOST = ""
MAIL_PORT =
MAIL_USERNAME = ""
MAIL_PASSWORD = ""
MAIL_ENCRYPTION = ""

Lo importan de la siguiente manera en la función de la conexión en la base de datos:

use Dotenv\Dotenv;

Ya por último, colocan el siguiente código para usarlo:

$dotenv = Dotenv::createImmutable('DIRIGIR A RAIZ DEL PROYECTO');
$dotenv->load();

//Aqui salen errores:
$db = new mysqli($\_ENV['DB_HOST'], $\_ENV['DB_USER'], $\_ENV['DB_PASSWORD'], $\_ENV['DB_DATABASE']);

Para que no se suba al repositorio, en la raíz del proyecto crean el archivo ".gitignore", colocando el siguiente código (Incluso, ni se suben las carpetas del node_modules ni el vendor):

/node_modules
/vendor
.env

Ya quedaría listo, incluso para el PHPMailer no se tiene que volver a importar el uso del DOTENV, sólo úsenlo con esta variable: $\_ENV['NOMBRE_VARIABLE'];
