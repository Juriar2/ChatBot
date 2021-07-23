<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //nube
    "conceptos" => "Que es azure?
    <br>Servicios de azure
    <br>IaaS
    <br>PaaS
    <br>SaaS
    <br>Contenedor
    <br>Kubernetes
    <br>Máquina virtual
    <br>Serverless
    <br>Qué es la nube?
    <br>Qué empresas utilizan la nube?
    <br>Características de la nube
    <br>Nube privada
    <br>Nube publica
    <br>Nube híbrida
    <br>Infraestructura tradicional
    <br>Desventajas de la infraestructura tradicional",

    "que es azure?" => "Es un servicio en la nube de la empresa Microsoft. Con Azure es posible almacenar información y crear, administrar e implementar aplicaciones en cloud.<br>En apenas unos clics es posible disponer de Microsoft Azure funcionando y listo para trasladar el trabajo a la nube",

    "cuáles son los servicios de azure?" => "Almacenamiento, Análisis",
    "cuales son los servicios de azure?" => "Almacenamiento, Análisis",

    "iaas" => "Infraestructura como Servicio.<br>Es cuando no quieres comprar todo el equipo que necesita tu negocio o empresa y mejor se lo rentas a Azure. Por ejemplo una maquina virtual (Virtual Machine) o una Red virtual (Azure Virtual Network). Azure poner el equipo (Hardware o infraestructura) pero te encargas de toda la configuración. Imagina que rentas una casa, solo te dan la infraestructura y las llaves y tu configuras todo, la pintura, los muebles etc.",

    "paas" => "Plataforma como Servicio.<br>Azure te renta todo el sistema funcionando, es decir ya tiene el SO las Bases de datos, todo configruado para que tú solo te preocupes de desarrollar tu applicación. Servicios de Azure como app service, azure container, kubernetes y Azure Functions son PaaS. Imagina que rentas una casa amueblada, pintada y todo. Tu solo te dedicas a lo tuyo, cocinar, jugar en la Play etc.",

    "saas" => "Software como Servicio.<br>Es el más utilizado, usas un servicio ya creado donde solo tienes que logearte, por ejemplo gmail, zoom, whatsapp, facebook, office 365 (algunos son de pago o de suscripción) entras a la app y ya, no tienes que instalar nada, ni configrar nada, ni programar nada. Del hardware (infraestructura) y el software (los programas que se necesitan, el Sistema operativo, etc) se encarga Azure.",


    //contenedor maquina server
    "que es un contenedor?" => "Son entornos donde se almacenan aplicaciones con sus biblioteca y dependencias. Uno de los contenedores más reconocidos es Docker",

    "que es kubernetes?" => "Es el orquestador de los contenedores, es decir quien decide cuál de los contenedores debe funcionar o cuál asignarle que recursos etc.",

    "maquina virtual" => "Es un entorno aislado. Podemos usarla para realizar cambios en el registro.",
    "máquina virtual" => "Es un entorno aislado. Podemos usarla para realizar cambios en el registro.",

    "serverless?" => "Es computación sin servidor el proveedor de la nube ejecuta el código de la app. Se cobra por los recursos de consumo al ejecutarse el código.",

    //nubes
    "que es la nube?" => "Es una red enorme de servidores remotos, distribuidos por todo el mundo y conectados para que parezca que son un solo sistema. Tú no te darás cuenta de lo que pasa en la nube.<br> También me puede preguntar por:
    <br>Que empresas utilizan la nube?
    <br>Características de la nube
    <br>Nube privada
    <br>Nube pública
    <br>Nube Híbrida",

    "que empresas utilizan la nube?" => "Amazon, IBM, Salesforce, SAP, Netflix... ",

    "características de la nube?" => " *Cobro por tener el servicio activo\n Actualizaciones al servicio\ Administrar la escala del servidor",

    "caracteristicas de la nube?" => " *Cobro por tener el servicio activo\n Actualizaciones al servicio\ Administrar la escala del servidor",

    "nube publica?" => "Es una infraestructura para todos, cualquiera pude comprarla a un proveedor de internet",

    "nube privada?" => "Es un servicio privado que se ofrece a cierto usuario y se hace en un centro de datos propio. Tu como empresa tienes que poner la infraestructura de tu centro de datos, este gasto se llama CaPEX.",

    "nube hibrida?" => "Es el uso flexible de una nube publica y una privada. <br>1.- La nube híbrida mejora el rendimiento y desempeño<br>2.- Mejora la estructura<br>3.- Mejora separación ",

    "características de la nube híbrida?" => "1.-La nube híbrida mejora el rendimiento y desempeño<br>2.- Mejora la estructura<br>3.- Mejora separación",


    "que es la infraestructura tradicional?" => "La infraestructura tradicional es todo lo referente a lo físico o infraestructura física, lo cual un empleado da mantenimiento a todos sus componentes.",

    "desventajas de la infraestructura tradicional?" => "1.- Cualquier error recae sobre el personal de mantenimiento.<br>
        2.- Si un sistema cae o falla, el personal deberá presentar una solución para resolver el problema.",


    //vulnerables

    "recuperación covid?" => "El tiempo medio desde el inicio de los síntomas hasta la recuperación es de 2 semanas cuando la enfermedad ha sido leve y 3-6 semanas cuando ha sido grave o crítica.",




    //name
    "qué edad tienes?" => " estoy muy joven",
    "cuál es tu nombre?" => "Soy bot y estoy para servirte",
    "tienes nombre?" => "Marco",
    "quien te hizo?" => "Me hizo el Equipo de innovacción",


    //saludo
    "hola" => "Hola que tal!, puedes preguntarme cosas sobre Azure, o escribir CONCEPTOS para ver qué cosas te puedo enseñar.",
    "un saludo" => "Como te va",
    "hello" => "Un gusto de verte",
    "Qué tal?" => "Un gusto de verte",
    "Que tal?" => "Un gusto de verte",


    //despedida
    "adios" => "Cuídate",
    "adiós" => "Cuídate",
    "hasta la próxima" => "nos vemos pronto",
    "hasta la proxima" => "nos vemos pronto",
    "nos vemos" => "Te estaré esperando",
    "bye" => "Good bye ♥",
    "see you" => "See you later ♥",
    //
    "what is your name?" => " my name is Equipo de innovaccion",



    "tu nombre es?" => "Mi nombre es " . $bot -> getName(),
    "tu eres?" => "Yo soy un(a) " . $bot -> getGender()


];

if (isset($_GET['msg'])) {

    $msg = strtolower($_GET['msg']);
    $bot -> hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty -> reply('Hola');
        }elseif ($botty -> ask($msg, $questions) == "") {
            $botty -> reply("Lo siento, no esoy entrenda para eso.");

        }else {
            $botty -> reply($botty -> ask($msg, $questions));
        }
    });
}
