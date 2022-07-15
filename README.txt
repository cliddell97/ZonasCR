Los datos en "distritos.php" y "cantones.php" están desactualizados y deben ser reemplazados con la información en "zonas.csv"

Su tarea es crear un script en php para leer el archivo "zonas.csv" y convertirlo en arreglos manteniendo el formato que está 
en los archivos distritos.php y cantones.php.

Existen muchas formas de leer archivos csv usando php, tal como:
https://www.php.net/manual/en/function.fgetcsv.php


No es necesario agregar tíldes ni convertir a minúscula/mayúscula los datos.
Para efectos de encoding, todo está (y debe quedar) en utf-8


Los entregables para esta tarea son:

- "distritos2.php": debe ser igual que "distritos.php" pero con los datos actualizados
- "cantones2.php": debe ser igual que "cantones.php" pero con los datos actualizados
- "<nombre>Zonas.php": script ejecutable para convertir crear lo arreglos con los datos de "zonas.csv"

Para entregar estos archivos, deben crear un branch con su nombre, agregar sus archivos, hacer un commit y un push al repositorio.

Usen los siguientes comandos como guía (en el servidor de desarrollo (conectarse por WinSCP), abran una terminal de putty):

cd ~/tareas/<Nombre>
ls
cd <Nombre>
git clone https://github.com/cliddell97/ZonasCR.git
cd ZonasCR
git checkout -b <Nombre>

//REALIZAR EL TRABAJO AQUÍ
//CUANDO HAYAN TERMINADO, SIGAN CON:

git add .
git commit -m "entrega <Nombre>"
git push origin <Nombre>


Los objetivos que se van a medir en esta tarea son:

- Manejo básico de PHP
- Manipulación de csv
- Procesamiento de texto
- Calidad de código
- Uso básico de Git/GitHub
- Colaboración en equipo

Aquí dejo las definiciones de los id de las provincias:

San José:
'region_id' => '609'

Alajuela:
'region_id' => '610'

Cartago:
'region_id' => '611'

Heredia:
'region_id' => '612'

Guanacaste:
'region_id' => '613'

Puntarenas:
'region_id' => '614'

Limón:
'region_id' => '615'


