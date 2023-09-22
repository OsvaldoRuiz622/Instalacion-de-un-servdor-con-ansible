# Instalacion-de-un-servdor-con-ansible
Despliegue de aplicacion web con ansible
Instala tu aplicacion Web con Ansible.

Las herramientas de gestión de configuración como Ansible suelen utilizarse para optimizar el proceso de automatización de la configuración de los servidores estableciendo procedimientos estándares para nuevos servidores y reduciendo los errores humanos asociados con las configuraciones manuales.
Ansible ofrece una arquitectura sencilla que no requiere la instalación de software especial en los nodos. También proporciona un conjunto sólido de características y módulos incorporados que facilitan la escritura de secuencias de comandos de automatización.




Usar Ansible para automatizar los pasos de la aplicación de software que se instalan normalmente juntas para permitir que un servidor aloje aplicaciones web y sitios web dinámicos. Los datos del sitio que se almacenan en una base de datos y el contenido dinámico que se procesa mediante un lenguaje de programación.

La ejecución de este playbook realizará las siguientes acciones en sus hosts de Ansible:
- Instale los paquetes necesarios para que su aplicación web funcione.
- Crear una pagina web personal:
    Establezca la pagina web desarrollada.
    La pagina web se debe de ver en el dominio www.[primera letra del nombre][apellido].com
    Si se accede al servidor web vía la dirección IP se debe de ver esta pagina.
- Cree un nuevo VirtualHost dentro del servidor web y configure un root de documentos específico para ello.
     La app web se debe de desplegar en el dominio app.[primera letra del nombre][apellido].com
- Habilite el nuevo VirtualHost.
- Establezca la contraseña para el usuario administrador de la base de datos.
- Cargue su esquema de bases de datos en el servidor.
- Elimine las cuentas anónimas y la base de datos de prueba.
- Configure el firewall para que permita el tráfico HTTP en el puerto configurado (por defecto, el 80).
- Establezca la aplicación web desarrollada.

Una vez que el playbook se haya ejecutado por completo, dispondrá de un entorno web en ejecución, según las opciones que definió dentro de sus variables de configuración.
