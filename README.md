MANUAL TÉCNICO  

APLICACIÓN CON LARAVEL Academia  

ELABORADO POR:        Alejandro Ramírez Zapata Yudi Karina Vásquez Moreno 

SENA 

CENTRO DE DISEÑO E INNOVACIÓN TECNOLÓGICA INDUSTRIAL            TECNOLOGÍA EN ANÁLISIS Y DESARROLLO DE SISTEMAS DE INFORMACIÓN DOSQUEBRAS RISARALDA 

SEPTIEMBRE DE 2021 

**TABLA DE CONTENIDO** 

1. **INTRODUCCIÓN** 

El presente proyecto surge de la necesidad de un sistema donde se puedan registrar aprendices y profesores para acceder a un curso, además este proyecto cuenta con interfaces por medio de las cuales el usuario que en este caso serían los aprendices y docentes se registraran y accederán a realizar un curso, el proyecto cuenta con controladores, vistas, funciones, métodos, donde se reflejara el funcionamiento del aplicativo en la forma de registrar editar, actualizar o eliminar un registro del usuario. 

Además, este software contara con su respectiva base de datos, donde se guarda la información suministrada por el estudiante o aprendiz y el docente, cabe resaltar que es de suma importancia que la base de datos este configurada al sistema software ya que sin esta no se podrá mostrar la efectividad de la misma. 

Se demostrará que con la implementación de este software se mejorará el control y manejo de la información generada en algunos de sus procesos.

2. **OBJETIVOS** 

**Objetivo General** 

Desarrollar una aplicación web que permita gestionar y controlar de forma rápida y eficiente el registro de estudiantes y docentes. 

**Objetivos Específicos** 

- Crear un sistema donde se puedan registrar aprendices y docentes. 
- Elaborar una base de datos donde se pueda guardar cada uno de los registros. 
- Gestionar métodos en los cuales se puede tener un correcto funcionamiento del aplicativo. 
- Integrar y gestionar los datos de los estudiantes para así brindar información confiable mediante procesos automatizados. 
3. **ALCANCE** 
- Este documento va dirigido a los diferentes personas o usuarios de los cuales vayan a intervenir en este proyecto como lo pueden ser programadores, instructores del Sena. 
- El sistema debe llegar al punto donde este tenga un módulo de autenticación de registró y login de usuarios, pruebas de verificación de usuarios duplicados, correo suplicado etc... El sistema aún no permite que usuarios se registren o inicien sesión, no contiene un módulo de gestión de usuarios, no ha sido probado en servidores 
- El proyecto software de Academia Senita, desarrollo toda la funcionalidad en Laravel y el fronted dentro del mismo backend con Bootstrap. En este software se realizó los controladores de usuarios, vistas de la interfaz, funciones, relaciones y métodos, cabe mencionar, que este proyecto para que sea aprovechable como se mencionaba anteriormente debe contar con la autenticación, pruebas de verificación y almacenar el proyecto en un hosting para que pueda ser usado por usuarios. 
4. **USUARIOS** 

Este proyecto está dirigido a los usuarios que desean ser parte de este aplicativo:  

**Aspirantes:** Son las personas que desean estudiar en Academia Senita, lo podrán hacer con su documento de identidad y cedula. Una vez registrados, pueden realizar la matrícula al programa deseado. 

**Estudiantes:** Son los usuarios que ya están registrados en Academia Senita los cuales podrán acceder solamente iniciando sesión. 

**Coordinadores:** Son los instructores, administrativos lo cuales tendrán un rol especial en el aplicativo ya que podrán disponer de las siguientes opciones: Editar o actualizar un curso, eliminar un curso o eliminar un estudiante. 

**Usuario Administrador**: Corresponde a administradores del sistema que tendrán la opción de realzar cambios en la software o sistema dependiendo de los requerimientos que necesite el usuario. 

Se debe aclarar que, en esta fase del proyecto, no se han completado los roles de usuario, privilegios administrativos ni tampoco autenticación, pruebas de verificación y ni almacenamiento del proyecto en un hosting para que pueda ser usado por usuarios. 

5. **HERRAMIENTAS UTILIZADAS EN EL DESARROLLO** 

Para construir este software fue necesario el uso de las siguientes herramientas: 

**5.1.** Visual Studio Code 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.001.png)

Es un IDE desarrollado. Se utilizó la versión 1.60 cuya descarga se obtuvo de [https://code.visualstudio.com/updates/v1_60 ](https://code.visualstudio.com/updates/v1_60)

**5.1.1.**  Plugins instalados: 

- Bootstrap Snippets 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.002.jpeg)

- Laravel extensión Pack: incluye: Laravel Blade, laravel snippets 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.003.jpeg)

- Php intelephense  

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.004.png)

6. **METODOLOGÍA DE PROYECTO** 

**6.1. CASCADA** 

Para el desarrollo de este proyecto de software se utilizó la metodología CASCADA. El modelo en cascada o waterfall model, es la propuesta de un enfoque metodológico que consiste en ordenar de forma lineal las distintas etapas que se debe seguir al momento de desarrollar un software.

Este enfoque de cascada originalmente fue propuesto en 1970 por Winston W. Royce, es también conocido como modelo lineal o modelo de ciclo de vida de un programa, y millones de personas lo han incorporado a sus planes en las últimas cinco décadas.   

Lo que propone es **dividir en fases cada etapa del desarrollo de software** y completar cada una de ellas en un orden específico, es decir, no puedes iniciar la “fase 2” hasta que hayas concluido la “fase 1”. 

Otra de las características del modelo en cascada, es que se debe **hacer un análisis y comprobación del funcionamiento de cada una** de las fases al concluirlas, antes de pasar a la siguiente, detectando así los posibles errores y corrigiéndolos antes de avanzar. 

Finalmente, de esa forma, el seguimiento de tu proyecto avanzará controlado. Asimismo, como ya veremos en los próximos párrafos, con ayuda de las fases del modelo de cascada, **garantizarás un mantenimiento constante.** ¡Es ideal para vigilar el estado del software en todo momento!  

**1. Usa una estructura clara** 

En comparación con otras metodologías, la cascada se concentra mayormente en una serie de pasos claros y definidos. Su estructura es simple; cada proyecto atraviesa estos pasos: 

- Recopilación de los requisitos y la documentación 
- Diseño del sistema 
- Implementación 
- Pruebas 
- Entrega/implementación 
- Mantenimiento 

Debido a su incapacidad para adaptarse a los cambios, la metodología de cascada es más apta para los proyectos cortos que están bien definidos desde el principio. Si estás seguro de que los requisitos del proyecto son estáticos, la gestión de proyectos en cascada representa una manera directa de impulsar un proyecto mediante un proceso definido con claridad. Es simple de gestionar y sencillo de seguir. 

Los equipos deben realizar un paso completo antes de avanzar con el siguiente; si hay obstáculos para concretarlo, salen a la luz de inmediato. Es menos probable que los proyectos a medio terminar se dejen de lado, lo que genera para los equipos un proyecto más completo y más ordenado, en definitiva. 

Además de ser claro, el avance en la cascada es intuitivo. A diferencia de las metodologías de Six Sigma o Scrum, la cascada no exige certificaciones ni capacitación específica para los gerentes de proyecto o los empleados. Si delineas el proceso gráficamente al principio con Lucidchart y explicas la metodología, los integrantes del equipo podrán incorporarse en el sistema de cascada sin que una curva de aprendizaje pronunciada retrase su avance. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.005.jpeg)

7. **REQUISITOS TÉCNICOS PARA DESARROLLAR EL SISTEMA** 

Para el correcto desarrollo del proyecto se usaron 2 Computadores con las siguientes características: 

**RAM:** 64 Gb-Ram 

**Disco Duro:** 1Tb

**Procesador:** Intel(R) Xeon(R) W-10855M CPU @ 2.80GHz   2.81 GHz **Pantalla:** Resolución Hd – 1366 x 768 Px

Se utilizó la Base de Datos de ‘**MSQL**’ de manera Local, de esta manera se realizaron las pruebas. 

El ancho de banda utilizado para el proyecto fue de **5 GHz** 

8. **REQUISITOS TÉCNICOS PARA LA EJECUCIÓN DEL SISTEMA** 

La página web con todas sus funcionalidades, se podrá acceder desde cualquier computador que tenga mínimo estas características:

- Procesador:  

BASICO - Athlon/Celeron/Pentium. - Se recomienda tener un procesador (Core-i3) o uno semejante a su procesamiento 

- RAM:  

Desde los 512 MB de RAM – Se recomienda tener más de (3Gb-Ram) para que el sistema de información sea fluido en el sistema.

- Disco duro: 

Desde los 2 Gb de espacio libre en el pc. Se recomienda tener al menos (20-Gb) libres, para que no haya interrupción alguna.

- Ejecución: 

Se ha probado que el sistema funciona correctamente en los siguientes navegadores: 

- Google Chrome en su última versión
- Mozilla Firefox

Su funcionalidad y procesamiento corre perfectamente sin ninguna interrupción.

- Ancho de banda:  

Desde los (1-2 mg) se puede proceder a la visualización del sistema de información, pero se recomienda tener un ancho de banda mayor a (15mg).

9. **REGLAS DE NEGOCIO** 

**POLÍTICA DE TRATAMIENTO DE DATOS PERSONALES** 

La siguiente política, es aplicable a toda la información contenida en las diferentes bases de datos que se obtienen a través de los sistemas de información con que cuenta el MEN, específicamente los datos de la población vinculada al sistema educativo de preescolar, básica, media, educación para el trabajo y el desarrollo humano y educación superior en virtud de la función que, como garante del servicio público educativo, debe responder este Ministerio.  Los principios y disposiciones contenidos en esta política de protección de datos personales se aplicarán a todas las bases de datos que se encuentren en el MEN, ya sea como propietario, usuario, responsable o como encargado del tratamiento.

Con base en lo contenido en la Ley 1581 de 2012 y en el Capítulo 25 del Decreto 1074 de 2015, para la política de tratamiento de datos personales en el MEN se aplican las siguientes definiciones: 

**Autorización:** Es el permiso o consentimiento que da el titular de los datos para el tratamiento específico de estos, acorde con las funciones de la entidad. 

**Aviso de Privacidad:** Comunicación verbal o escrita generada por el responsable, dirigida al Titular de los Datos, para el Tratamiento de sus datos personales, mediante la cual se le informa acerca de la existencia de las Políticas de Tratamiento de información que le serán aplicables, la 

forma de acceder a las mismas y las finalidades del tratamiento que se pretende dar a los datos personales. 

**Base de Datos:** Conjunto organizado de datos personales que sea objeto de tratamiento.   **Base de datos personales:** Conjunto organizado de datos de carácter personal, creados, 

almacenados, organizados, tratados y con acceso manual o a través de programas de ordenador o software. 

**Dato personal:** Es la información que identifica a una persona o que pueda asociarse y la haga identificable; estos datos pueden ser numéricos, alfabéticos, gráficos, visuales, biométricos, o de 

cualquier otro tipo.  

**Datos sensibles:** Se entiende por datos sensibles aquellos que afectan la intimidad del Titular o cuyo uso indebido puede generar su discriminación, tales como aquellos que revelen el origen racial o étnico, la orientación política, las convicciones religiosas o filosóficas, la pertenencia a sindicatos, organizaciones sociales, de derechos humanos o que promueva intereses de cualquier partido político o que garanticen los derechos y garantías de partidos políticos de oposición, así como los datos relativos a la salud, a vida sexual, y datos biométricos.  

**Dato personal semiprivado:** Son datos que no tienen naturaleza íntima ni pública, cuyo conocimiento o divulgación puede interesar no solo a su titular, sino a un grupo de personas o a la sociedad en general. Para su tratamiento se requiere la autorización expresa del titular de la información. (Ej. Dato financiero y crediticio).  

**Dato personal público:** Es la información personal que la Constitución y las normas han determinado como públicos y que para su recolección y tratamiento no requiere de autorización del titular de la información y los cuales pueden ser ofrecidos u obtenidos sin reserva alguna.   

**Encargado del Tratamiento:** Persona natural o jurídica, pública o privada, que por sí misma o en asocio con otros, realice el Tratamiento de datos personales por cuenta del responsable del Tratamiento 

**Habeas Data:** Derecho fundamental que le asiste a toda persona para conocer, actualizar, rectificar y/o cancelar la información y datos personales que de ella se hayan recolectado en bases 

de datos públicas o privadas, acorde con lo dispuesto en la ley y demás normas que le apliquen.   

**Propietario de la base de datos:** El MEN es el propietario de la base de datos personales que por su misión ha organizado por medio de la información que recolecta a través de sus 

sistemas de información y tiene bajo su responsabilidad el tratamiento, gestión y resguardo de estas. 

**Responsable de la base de datos:** Es la persona o funcionario que tiene bajo su resguardo 

las bases de datos personales al interior del MEN.   

**Responsable del Tratamiento:** Persona natural o jurídica, pública o privada, que por sí misma o en asocio con otros, decida sobre la base de datos y/o el tratamiento de los datos. 

10. **DETALLES DE DISTRIBUCIÓN DE CARPETAS Y ARCHIVOS** 

A continuación, se mostrará las carpetas y los archivos y se explicara cuál es su función 

1. **Distribución de carpetas en el backend** 

**1.Controladores de recursos ‘Controllers’:** 

Dentro de Http tenemos la carpeta Controllers, donde a su vez tenemos los siguientes controladores que son de recursos:

- **Controller:** este es el controlador que se crea en los recursos de instalación de ‘Laravel’, como se puede ver a continuación. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.006.png)

Su contenido es el siguiente:

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.007.png)

**2. CourseConroller:** 

**Dentro de este archivo se contiene las rutas especificas en el momento que el usuario quiere hacer una acción, como se mostrará a continuación, se especifica la ruta que será redirigido el usuario al estar en la página principal; en términos Técnicos en el ‘index’, al igual que les asigna una ruta a las otras funciones como la de ‘Crear-Create’, ‘Store’- utilizada para agregar un estudiante, ‘Show-Mostrar’- es donde el usuario puede percibir la información del usuario creado, ‘edit-editar’- aquí se representa los datos del usuario registrado para así editarlos desde esta pestaña, ‘Update-Actualizar’- aquí se crean algoritmos para la actualización de los datos ingresados nuevamente desde la pestaña anterior de editar, ‘Destroy-Eliminar’- en este espacio se crea el algoritmo para eliminar los datos registrados de un usuario. A continuación, representaré la codificación de los algoritmos por medio de imágenes:**

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.008.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.009.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.010.png)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.011.png)

**3.StudentController: Este es el controlador para el Módulo de** 

**estudiantes:** 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.012.png)

El cual contiene lo siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.013.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.014.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.015.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.016.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.017.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.018.jpeg)

Dentro de este controlador y en sus diferentes funciones se le asigna nombre a la tabla de estudiantes como ‘apprentice’, para que de esta manera poderlo trabajar desde cada interfaz llamando esta variable para que nos recolecte la información creada en la Base de Datos 

**4.TeacherController** 

**Este controlador nos lleva al Módulo del profesor.** 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.019.png)

A continuación, se observará la codificación que se sitúa dentro de este controlador. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.020.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.021.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.022.png)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.023.png)

**5.Request** 

**Dentro de los ‘Request’ se encuentra las limitaciones que deben de tener los archivos e información pedida al usuario, a continuación, una imagen:** 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.024.png)

1. Dentro del Request ‘storeCourseRequest’ se encuentra lo siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.025.jpeg)

El cual se le está diciendo al usuario que el nombre no puede exceder un límite de 15 caracteres y la descripción de 60, la duración no puede tener un número mayor a 2 dígitos y que la imagen sea con extensión de la misma. 

2. Dentro del Request **‘storeStudentRequest’** se encuentra lo siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.026.jpeg)

3. Dentro del Request **'storeTeacherRequest'** se encuentra lo siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.027.jpeg)

**6. Modelos ‘Models’** 

**Dentro de esta carpeta encontramos los modelos en donde se le asigna la propiedad de público o privado a los datos que se encuentran en la tabla, además de ello también se crea las relaciones.** 

1. **Country** 

**A continuación, se mostrará lo que contiene este modelo:** 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.028.png)

2. **Course** 

A continuación, se mostrará lo que contiene este modelo: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.029.png)


3. **Department** 

A continuación, se mostrará lo que contiene este modelo: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.030.png)

4. **Municipality** 

A continuación, se mostrará lo que contiene este modelo: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.031.png)

5. **Student** 

A continuación, se mostrará lo que contiene este modelo: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.032.jpeg)

6. **Subject** 

A continuación, se mostrará lo que contiene este modelo: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.033.png)

7. **Teacher** 

A continuación, se mostrará lo que contiene este modelo: 


![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.034.png)

**7.Migraciones ‘Migrations’** 

Dentro de las migraciones se encuentra cada tabla que se encontrará en la Base de Datos, a continuación observamos como se ve en Visual Studio Code . 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.035.png)

1. **Courses** 

Esta tabla contiene lo siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.036.jpeg)

2. **add\_imagen\_to\_courses.php** Esta tabla contiene lo siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.037.jpeg)

3. **Subjects** 

Esta tabla contiene lo siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.038.jpeg)

4. **Teachers** 

Esta tabla contiene lo siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.039.jpeg)

5. **Countries** 

Esta tabla contiene lo siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.040.jpeg)

6. **departments** 

Esta tabla contiene lo siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.041.jpeg)

7. **municipalities** 

Esta tabla contiene lo siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.042.jpeg)

8. **Course\_subjects** 

Esta tabla contiene lo siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.043.jpeg)

9. **students** 

Esta tabla contiene lo siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.044.jpeg)

**8.Seeders** 

Aquí encontramos el autocompletar en el momento que se estén realizando las pruebas, con el objetivo que el programador se le sea más fácil y de una manera dinámica ingresar la información. 

1. **CountrySeeder** 

Dentro está la información que observamos en el momento de crear un Usuario: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.045.png)

2. **DepartmentSeeder** 

Dentro está la información que observamos en el momento de crear un Usuario: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.046.jpeg)

3. **MunicipalitySeeder** 

Dentro está la información que observamos en el momento de crear un Usuario: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.047.png)

4. **SubjectSeeder** 

Dentro está la información que observamos en el momento de crear un Usuario: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.048.png)

**9.Carpeta ‘Lang’** 

Dentro de ellas encontramos la información de respuesta que el sistema muestra al usuario, por defecto esta viene en inglés, por lo que se descargó el contenido en español, una carpeta obtenida desde Drive, compartida por el instructor, de igual manera, esta se puede descargar desde Google, a continuación, se muestra como quedan las carpetas. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.049.png)

10. **Carpeta Resources ‘Recursos’** 

Dentro de ella encontramos otra subcarpeta llamada View, las cuales contienes las ‘Vistas’ que serán observadas por el usuario, como se muestra a continuación: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.050.png)

1. Se tiene la siguiente carpeta de Courses con el siguiente contenido. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.051.png)

2. Dentro de ella encontramos el siguiente archivo llamado ‘add\_course.blade’  

Su misma codificación se encuentra en ‘Students’ , ‘Teachers’, lo único que cambia es la información que se muestra al usuario, a continuación, se mostrará el código: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.052.png)

3. Dentro de ella encontramos el siguiente archivo llamado ‘del\_course.blade’  

Su misma codificación se encuentra en ‘Students’ , ‘Teachers’, lo único que cambia es la información que se muestra al usuario, a continuación, se mostrará el código: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.053.png)

4. Dentro de ella encontramos el siguiente archivo llamado ‘edit\_course.blade’  

Su misma codificación se encuentra en ‘Students’ , ‘Teachers’, lo único que cambia es la información que se muestra al usuario, a continuación, se mostrará el código: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.054.png)

5. Aquí se encuentra el archivo llamado ‘create.blade’ el cual contiene la codificación de la vista en el momento de crear un nuevo usuario, como se muestra a continuación su código: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.055.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.056.jpeg)

6. Aquí se encuentra el archivo llamado ‘edit.blade’ el cual contiene la codificación de la vista en el momento de editar un nuevo usuario, como se muestra a continuación su código: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.057.jpeg)

10.7Aquí se encuentra el archivo llamado ‘index.blade’ el cual contiene la codificación de la vista en el momento de ver un usuario registrado en la Base de Datos, como se muestra a continuación su código: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.058.jpeg)

1. **Vista de estudiantes ‘Students’** 

A continuación, se mostrará la codificación que contiene el algoritmo de la vista de Crear un Estudiante, como se muestra en las siguientes imágenes: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.059.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.060.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.061.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.062.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.063.png)

Estas imágenes observadas anteriormente contienen la codificación de las vistas de crear un Estudiante. 

2. A continuación, se mostrará la codificación que contiene el algoritmo de la vista Editar el Estudiante, como se muestra en las siguientes imágenes: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.064.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.065.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.066.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.067.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.068.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.069.png)

3. En este espacio se encuentra la vista del Profesor ‘Teacher’. El archivo que contiene la vista de Crear un nuevo profesor se llama ‘Create.blade’, el cual contiene el siguiente la siguiente codificación.** 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.070.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.071.jpeg)

En ella podremos observar la vista de crear un nuevo profesor. 

4. A continuación, se mostrará la codificación que contiene el algoritmo de la vista Editar el Profesor ‘Teacher’, como se muestra en las siguientes imágenes: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.072.jpeg)

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.073.png)

5. La vista principal la cual se llamó ‘index’, muestra los profesores creados y almacenados en la Base de Datos, como se muestra a continuación: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.074.jpeg)

11. **Rutas principales para el proyecto Laravel** 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.075.png)

Dentro del archivo web.php que está en routes, encontramos las rutas principales del proyecto como: 

**/courses**: esta ruta provee acceso hacia el controlador de recursos que, a su vez, el controlador los lleva a la vista 

**/teachers**: esta ruta provee acceso hacia el controlador de recursos que, a su vez, el controlador los lleva a la vista 

**/students**: esta ruta provee acceso hacia el controlador de recursos que, a su vez, el controlador los lleva a la vista 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.076.png)

12. **CONFIGURACIÓN DE LA BASE DE DATOS** 

Para el caso particular se usó MySQL y, específicamente, PhpMyadmin, herramienta contenida en XAMPP. 

Para poder trabajar en producción con la base de datos, se deben habilitar los servicios de Apache y MySQL, dando clic en los botones start del control panel 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.077.png)

Si algún puerto está ocupado, se hace el respectivo cambio usando el botón Admin. **Los datos de acceso a la base de datos son:** 

Host: 127.0.0.1 

Usuario: root 

Clave: ‘’ 

Nombre de la BD: academy 

Para la correcta configuración del proyecto Laravel y su conexión con la base de datos se agrega la información respectiva en el archivo .env  

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.078.png)

A través del siguiente panel se pueden hacer configuraciones en la base de datos: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.079.jpeg)

Se le recomienda al usuario que en el momento de crear la Base de Datos mantenga el mismo llamado en todos sus aspectos, es decir, en el momento de llamarlo desde nuestro código raíz hacerlo de la misma manera que la creamos. 

13. **DETALLES TÉCNICOS MÓDULOS DEL SISTEMA** 

**Módulo Estudiantes** 

Este módulo se ha creado para ingresar un nuevo usuario, cualquier persona puede registrarse, la información  aquí  suministrada  se  guardará  en  la  tabla  'Students’  de  la  base  de  datos  ya mencionada. Los campos han sido configurados para que en nombre y apellidos solo acepte letras. El campo para contraseña debe contener mínimo 8 caracteres, entre estos mínimos una mayúscula, minúsculas y números. 

Este módulo conecta con cursos, para registrar un estudiante debe existir un curso disponible

Al entrar a este módulo desde el navegador se vería así: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.080.jpeg)La vista (view) en Laravel que permite renderizar esta vista es estudiantes.show.blade. Además, existen otras vistas, dentro de la carpeta estudiantes, relacionadas con este módulo, los cuales permiten realizar el respectivo CRUD, como son: 

**Create.blade.php** Vista que provee el siguiente formulario en el navegador: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.081.jpeg)

**Show.blade.php** Vista que provee la siguiente información en el navegador: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.082.jpeg)

**Módulo Cursos** 

Este módulo se ha creado para ingresar un nuevo curso, la información aquí suministrada se guardará  en  la  tabla  'courses’  de  la  base  de  datos  ya  mencionada.  Los  campos  han  sido configurados para que  en nombre  del curso y descripción solo acepte letras. El campo para ‘Duración’ que solo tenga números de uno a dos dígitos. 

Al entrar a este módulo desde el navegador se vería así: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.083.png)

**Show.blade.php** Vista que provee la siguiente información en el navegador: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.084.jpeg)

**Módulo Profesores** 

Este módulo se ha creado para ingresar un nuevo profesor, la información aquí suministrada se guardará  en  la  tabla  'teachers’  de  la  base  de  datos  ya  mencionada.  Los  campos  han  sido configurados para que en nombre del profesor, apellidos y título universitario solo acepte letras. El campo para ‘Edad’ que sea un numero entero, al igual en el momento que se le pide al usuario la carga de su documento sea solo PDF y la imagen que sea de tipo ‘**BMP, GIF, JPG, TIF y PNG, JPEG**’. 

Al entrar a este módulo desde el navegador se vería así: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.085.png)

**Show.blade.php** Vista que provee la siguiente información en el navegador: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.086.jpeg)

14. **MODELO RELACIONAL BD DEL SISTEMA** 

La base de datos para este sistema, como ya se informó se llama academy y en este se puede ver reflejado todas las relaciones y multiplicidades que tiene cada uno , el modelo es el siguiente:

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.087.jpeg)

15. **DICCIONARIO DE DATOS** 

Se anexa documento Diccionario Datos almacenados en un documento PDF, disponible en el siguiente enlace, además se encontrará en la carpeta ‘anexo\_1’, del proyecto. 

[Diccionario de Datos ](https://drive.google.com/drive/folders/1jqJtfwvA86zNjwV5rjVsySP0mAQ1RuwX?usp=sharing)

16. **CLASES, LIBRERIAS Y MÉTODOS UTILIZADOS** 
2. **Clases utilizadas** 

Para el proyecto Academia Laravel se importaron las clases que vienen por defecto en elm proyecto 

`  `**Métodos utilizados:** 

Para este proyecto en la mayoría de los controladores se utilizaron los siguientes métodos: 

- **Método index:** Que lanza un listado de todos los registros de la tabla que se está trabajando. 
- **Método create:** En este método se muestra la vista de crear**  
- **Método store:** Método que añade un usuario  
- **Método show:** muestra los resultados del, usuario que se encuentran en la Base de Datos 
- **Método update:** Método el cual actualiza los datos del usuario 

**ERRORES COMUNES Y SOLUCIONES Al crear nuevos archivos de migración QueryException SQLSTATE[HY100]** 

Al crear un nuevo Modelo con su archivo de migración, y ejecutar dicha migración, es posible que dé un error como el siguiente: 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.088.png)

Este error sucede debido al orden en que se han creado los… por lo cual… 

Supongamos que usted va a crear un nuevo Modelo llamado Categoría, para categorizar los diferentes cursos de la Academia. En este caso, lo que usted debería hacer es abrir la terminal de Visual Studio Code y escribir el siguiente comando, ‘**php artisan make:model NOMBREMODELO**,esto lo que hará es crear el modelo, además de ello, crearemos la migración que tendrá los capos respectivos en la tabla de este Modelo. 

**Al intentar acceder a una vista desde el navegador lanza el error SQLSTATE[HY000] [2002] No se puede establecer una conexión.** 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.089.png)

Dicho error aparece ya que no tenemos MySQL y apache corriendo. Es posible que exista un problema con el servidor de base de datos. Pruebe reiniciar el XAMPP o revise que estos dos servicios estén en verde que afirma que sus servicios están corriendo perfectamente 

**Algunos errores que se pueden encontrar en el proyecto**  

- al intentar instalar laravel, te aparezca el siguiente error:  Client error:  GET http://cabinet.laravel.com/latest.zip  resulted in a  404 Not Found  

response:

`  `<html>

`  `<head><title>404 Not Found</title></head>

`  `<body>

`  `<center><h1>404 Not Found</h1></center>

`  `<hr><center>Hola</c (truncated...)

Puedes resolverlo escribiendo en la consola el siguiente comando:composer create-project --prefer-dist laravel/laravel blog 

- También se puede tener un problema ejecutando alguna acción en nuestro proyecto y esto podría ser porque no hemos ejecutado php artisan migrate:fresh, lo que hace es refrescar las migraciones a la Base de Datos. 

**CONTINUACIÓN DEL PROYECTO O MEJORAS EN EL MISMO** 

**Para agregar columnas nuevas a las tablas** 

Para los siguientes casos, se asume que el programador ejecutará nuevamente las migraciones con un fresh, reconstruyendo todas las tablas de la base de datos. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.090.png)

**Agregar columnas nuevas a la tabla Cursos** 

Para esto, diríjase a la ruta database/migration, al archivo 2022\_04\_30\_160631\_create\_courses\_table. Los campos actuales aparecen desde la línea 17. Agregue el o los campos deseados en la posición que prefiera. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.091.png)

También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo Curso, en la línea 11, protected $fillable y añadirlo dentro del array. 

**Agregar columnas nuevas a la tabla materias** 

Para esto, diríjase a la ruta database/migration, al archivo 2022\_04\_30\_160631\_create\_subjects\_table. Los campos actuales aparecen desde la línea 17. Agregue el o los campos deseados en la posición que prefiera. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.092.png)

También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de  datos  (Update  dentro  del  CRUD),  para  lo  cual  debe  dirigirse  al  modelo  Subject,  en  la  línea  11, protected $fillable y añadirlo dentro del array. 

**Agregar columnas nuevas a la tabla Docentes** 

Para esto, diríjase a la ruta database/migration, al archivo 2022\_04\_30\_160631\_create\_teachers\_table. Los campos actuales aparecen desde la línea 17. Agregue el o los campos deseados en la posición que prefiera. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.093.jpeg)

También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de  datos  (Update  dentro  del  CRUD),  para  lo  cual  debe  dirigirse  al  modelo  Teacher,  en  la  línea  11, protected $fillable y añadirlo dentro del array. 

**Agregar columnas nuevas a la tabla Estudiantes** 

Para esto, diríjase a la ruta database/migration, al archivo 2022\_04\_30\_160631\_create\_students\_table. Los campos actuales aparecen desde la línea 17. Agregue el o los campos deseados en la posición que prefiera. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.094.jpeg)

También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse  al modelo Students, en la línea 11, protected $fillable y añadirlo dentro del array. 

**Agregar columnas nuevas a la tabla Países** 

Para esto, diríjase a la ruta database/migration, al archivo 2022\_04\_30\_160631\_create\_countries\_table. Los campos actuales aparecen desde la línea 17. Agregue el o los campos deseados en la posición que prefiera. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.095.png)

También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de  datos  (Update  dentro  del  CRUD),  para  lo  cual  debe  dirigirse  al  modelo  Country,  en  la  línea  11, protected $fillable y añadirlo dentro del array. 

**Agregar columnas nuevas a la tabla Departamentos** 

Para esto, diríjase a la ruta database/migration, al archivo 2022\_04\_30\_160631\_create\_subjects\_table. Los campos actuales aparecen desde la línea 17. Agregue el o los campos deseados en la posición que prefiera. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.096.png)

También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo Departamento, en la línea 11, protected $fillable y añadirlo dentro del array. 

**Agregar columnas nuevas a la tabla Municipios** 

Para esto, diríjase a la ruta database/migration, al archivo 

2022\_04\_30\_160631\_create\_municipalities\_table.  Los  campos  actuales  aparecen  desde  la  línea  17. Agregue el o los campos deseados en la posición que prefiera. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.097.png)

También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo Municipality, en la línea 11, protected $fillable y añadirlo dentro del array. 

**Cambio del idioma** 

Mencione  algunos  de  los  pasos  mostrados  en  el  video [https://www.youtube.com/watch?v=VYTy0v8pUGo&ab_channel=CarranzaWebStudio ](https://www.youtube.com/watch?v=VYTy0v8pUGo&ab_channel=CarranzaWebStudio) para  la configuración del idioma. 

**PASOS** 

La  carpeta  que  contiene  los  lenguajes  es  ‘resources’  y  dentro  de  ella  se  encuentra  una  subcarpeta llamada Lang, la cual viene por defecto con el idioma inglés, debemos de reconocer si queremos agregar otro se debe de crear otra carpeta que contenga el archivo del idioma elegido 

1. Creamos la carpeta en /lang/’Nombre de idioma’, dentro de ella debe de contener el archivo del idioma elegido 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.098.png)

2. Dirigirnos a la carpeta config/app.php, nos dirigimos donde dice ‘locale’, ya que  allí se le dice al sistema el idioma que quiere por defecto, una vez encontrada procedemos a cambiar ‘en’ por ‘es’, que el nombre que llamamos la carpeta de español. 

![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.099.png)![](Aspose.Words.c1e95c63-c780-4de7-9541-a207674d0b94.100.png)

Estimado programador, para más información sobre idiomas y localización, vaya a la página de la documentación oficial de Laravel en[ https://laravel.com/docs/9.x/localization.](https://laravel.com/docs/9.x/localization) 

**LICENCIA** 

Investigue en[ https://www.monografias.com/trabajos88/tipos-licencias-software/tipos-licencias- software ](https://www.monografias.com/trabajos88/tipos-licencias-software/tipos-licencias-software)sobre los tipos de licencia. Luego decida con su equipo de trabajo bajo qué licencia hipotética estará la aplicación Academia Laravel. Describa aquí dicha licencia. 

- Dicha licencia elegida es la siguiente: ‘LICENCIA DE SOFTWARE DE FREEWARE’, El proyecto será libre su descarga y de manera gratuita si así lo decide el creador además de ello, también puede crear restricciones en ella, existe también la oportunidad de denegar la venta por terceros. 

**COLABORACIÓN** 

Para que usted pueda colaborar con el desarrollo de este proyecto, bien sea para hacer mejoras o para crear su propia versión de programa, es necesario que siga estos pasos: 

11. Ejecuta **git** init en la terminal. ... 
11. Ejecuta **git** add . ... 
11. Ejecuta **git commit** -m "inserta Mensaje aquí". ... 
11. Ejecuta **git** remote -v. ... 
11. Finalmente, ejecuta **git push** origin master **para** empujar tus archivos **a Github**. 
