# Enclaves Espectaculares

## INTRODUCCIÓN

El proyecto es una api que quiere poder recrear el libro "Enclaves Espectaculares".

Este libro sirve para generar aleatoriamente enclaves para juegos de rol como ”Dungeons and Dragons”.

Se pueden generar enclaves de varios tipos.



* **Puestos comerciales**: Pequeños enclaves centrados en el comercio y en las necesidades de viajeros o personas que viven en la naturaleza.
* **Pueblos**: Pequeños enclaves rurales centrados en la comunidad y en la producción de algún tipo de recurso.
* **Villas**: Enclaves intermedios en los que se entremezcla la actividad de los puestos comerciales con la vida en comunidad de los pueblos.
* **Ciudades**: Enclaves urbanos de gran tamaño, divididos en distritos y con una posible estratificación social.
* **Capitales**: Enormes enclaves urbanos con una infraestructura social y gubernamental que supervisa y dirige una región.
* **Fortificaciones**: Bastiones fortificados (como torreones, castillos y fortalezas) que pueden encontrarse tanto en zonas rurales como urbanas.

Cada uno de este tipo de enclaves se genera tirando un dado de N caras en diferentes tablas siguiendo un orden específico. Se ha de tener en cuenta que el resultado en una de las tablas puede modificar el resultado en tablas posteriores a través de modificadores.

**Tabla**: Una tabla es un conjunto de filas y columnas como la que aparece a continuación

**Columna izquierda**: La parte superior de la columna izquierda de una tabla indica el dado que debes tirar (en el ejemplo, un dado de 10 caras, o «d10»). Debajo hay una fila por cada resultado posible (o, a veces, un intervalo de resultados). Una vez lanzado el dado, lo único que tienes que hacer es consultar la columna de la derecha para saber cuál es el resultado de tu tirada y anotarlo en tu hoja de enclave, cuaderno, etcétera.

**Modificadores**: En algunos casos, el resultado de una tirada influye en una tabla posterior del generador. Por lo general, el modificador reduce o aumenta una tirada futura (como, por ejemplo, «tirada de riqueza de la población –2»). Un modificador también puede añadir algún tipo de lugar o distrito, o incluso modificar el tipo de dado de una tabla posterior (por ejemplo, pedirte que tires un d6 en una tabla en la que normalmente tirarías un d10). Algunos resultados incluyen más de un modificador y aparecen así en las tablas:

| d10 | Título de la tirada                                            |
|-----|----------------------------------------------------------------|
| 1-2 | Resultado1 (Tirada en la tabla A -1) (Tirada en la tabla B +1) |
| 3-4 | Resultado2 (Tirada en la tabla A -2) (Tirada en la tabla B +2) |


## IDIOMA

El usuario final de esta API va a ser un usuario hispanohablante, pero el código va a ser en inglés. Es decir el nombre de clases, variables, constantes, métodos, nombres de tablas y columnas  etc… usará los nombres del libro en inglés “Spectacular Settlements”.

El valor del contenido de las tablas, los resultados de las apis, las descripciones, (y a futuro, la interfaz) usará los terminos del libro en español “Enclaves Espectaculares” \



## FRAMEWORS

El framework que se usa para el desarrollo es laravel, el lenguaje es php 8.3 y las bases de datos mysql y sqlite. El entorno está totalmente dockerizado con laravel sail. El sistema operativo del host es un linux mint.


## FINALIDAD

La finalidad del software es que un usuario pueda hacer una llamada a la api y que le devuelva un json con un enclave generado, habrá un endpoint por cada tipo de enclave, para que el usuario decida que tipo de enclave quiere generar.


## BASES DE DATOS

Las bases de datos van a servir para lo siguiente:



* Sqlite: esta base de datos se va a usar casi de forma estática para tener almacenada la información de cada tabla del libro “Enclaves espectaculares” de esta base de datos se leerán datos para ir generando aleatoriamente los enclaves de los usuarios.
* Los enclaves generados, los usuarios, y toda la data que sea relevante para el sistema se gestionará en la base de datos mysql.

Las migraciones y seeders de las diferentes bases de datos se gestionan en diferentes directorios

---

## Comando Personalizado `migrate:lite` en Laravel

El comando `migrate:lite` permite ejecutar diversas operaciones de migración en una segunda base de datos (`sqlite`), utilizando un directorio de migraciones específico (`database/migrations/lite`) y semillas ubicadas en `Database\Seeders\lite`.

## Firma del Comando

```php
protected $signature = 'migrate:lite {operation=migrate} {--force} {--seed} {--step} {--database=sqlite} {--path=database/migrations/lite}';
```

## Parámetros
- `{operation=migrate}` - Especifica la operación de migración a realizar. Puede ser `migrate`, `fresh`, `refresh`, `rollback`, `reset`, `install` o `status`.
- `{--force}` - Fuerza la operación de migración sin pedir confirmación.
- `{--seed}` - Ejecuta los seeders después de la operación de migración.
- `{--step}` - Especifica si se deben ejecutar las migraciones paso a paso.
- `{--database=sqlite}` -  Define la base de datos a utilizar. Por defecto es `sqlite`.
- `{--path=database/migrations/lite}` - Define el directorio de migraciones. Por defecto es `database/migrations/lite`.


## Ubicación de los directorios
- Migraciones: `database/migrations/lite`
- Seeders: `Database\Seeders\lite`

## Ejemplos de uso
### Migrar la base de datos `sqlite`
Ejecuta las migraciones en la base de datos sqlite utilizando el directorio `database/migrations/lite`.
```bash
php artisan migrate:lite
```
```bash
sail artisan migrate:lite
```

### Fresh
Elimina todas las tablas y vuelve a ejecutar todas las migraciones.
```bash
php artisan migrate:lite fresh
```
```bash
sail artisan migrate:lite fresh
```

### Refresh
Vuelve a ejecutar todas las migraciones.
```bash
php artisan migrate:lite refresh
```
```bash
sail artisan migrate:lite refresh
```

### Rollback
Deshace la última migración.
```bash
php artisan migrate:lite rollback
```
```bash
sail artisan migrate:lite rollback
```

### Seed
Ejecuta los seeders después de la migración.
```bash
php artisan migrate:lite --seed
```
```bash
sail artisan migrate:lite --seed
```

### Fresh con Seed
Elimina todas las tablas, vuelve a ejecutar todas las migraciones y ejecuta los seeders.
```bash
php artisan migrate:lite fresh --seed
```
```bash
sail artisan migrate:lite fresh --seed
```

