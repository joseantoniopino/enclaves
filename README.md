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

