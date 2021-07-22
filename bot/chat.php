<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //nube
    "que es azure?" => "ES UN servicios en la nube de la empresa Microsoft Con Azure es posible almacenar información y crear, administrar e implementar aplicaciones en cloud. ... En apenas unos clics es posible disponer de Microsoft Azure funcionando y listo para trasladar el trabajo a la nube",
    "cuáles son los servicios de azure?" => "Almacenamiento,Análisis",
    //contenedor maquina server
    "que es contenedor?" =>"son  entorno donde se almacena applicaciones con sus biblioteca y dependencia uno de los contenedores ma reconocido es docker",
    "maquina virtual" =>"es un entorno aislado. Podemos usarla para realizar cambios en el registro" ,
    "serverless?" =>"Es computacion sin servidor el provedor de la nube ejecuta el codigo de la app se, cobra por los recursos, de consumo al ejecutarse el codigo",
    
    //nube
      "que empresa utiliza la nube?" => " Amazon IBM Salesforce SAP Netflix ",
      "caracteristica?" => " *Cobro por tener el servicio activo actualizaciones al servicio administrar al escala del servidor",
      "que es la infretutura tradicional?" => "la infraestrutura tradicional es todo  lo referente a lo  fisico o infraestrutura fisica  lo cual un empleado da mantenimiento a todos sus componentes",


    //nubes

    "desventaja infraestrutura tradicional?" => "1 cualquier error recae sobre el personal de mantenimiento
                                                2.- si un sistema caes o falla el personal debera presentar una solucion para resolver el problema",
    "nube publica?" => "Es una infraestrutura para todos, cualquiera pude comprarla aun provedor de internet",
    "recuperacion covid?" => "El tiempo medio desde el inicio de los síntomas hasta la recuperación es de 2 semanas cuando la enfermedad ha sido leve y 3-6 semanas cuando ha sido grave o crítica.",

    //vulnerables

    "nube privada?" => "es un servicio privado que se ofrece a cierto usuario y se hace en un propio centro de dato",
    "nube hibrida?" => "es el uso flexible de una nube publica y una privada",
    "caracteristica?" => " mejora el rendimiento y desempeño 2.- mejora la estrutura 3.- mejora separacion",

    
    //name
    "que edad tines?" =>" estoy muy joven",
    "cual es tu nombre?" =>"Soy bot y estoy para servirte",
    "tienes nombre?" =>"Marco",
    "quien te hizo?" =>"Me hizo el Equipo de innovaccion",


    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you lader ♥",
    //
    "what is your name?" =>" my name is Equipo de innovaccion",
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, no esoy entrenda para eso.");
            
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
