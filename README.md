# OMNIS LUDO
Conversión de la web estática jueganes.org a un tema Wordpress


![Logo Asociación Cultural Jueganess](/assets/images/logo-jueganess-512-fondo-blanco.png)


ACTUALIZACION DEL TEMA
---------------------
En wp-config.php, añadir 

> define('OMNISLUDO_GITHUB_URI', 'https://api.github.com/repos/pisanowp/omnisludo/releases');
> define('OMNISLUDO_GITHUB_TOKEN', 'ghp_999999999999999999');


OMNISLUDO_GITHUB_URI, es el url dondes se encuentra las versiones del tema
OMNISLUDO_GITHUB_TOKEN, es la clave de acceso privada al repositorio
Si el reposotirorio es púbico, entonces definimos el token de acceso como:
> define('OMNISLUDO_GITHUB_TOKEN', false);



## VERSIONES
v0.4.0
- feat: Deshabilitar RESTAPI
- feat: Código UPDATER

v0.3.5
- feat: search form
- feat: información cuando no se recuperan datos

v0.3.1
- refact: Limpieza código
- fix: Imagen destacada
- feat: página 404 

v0.3.0
- feat: Menú pie de página
- feat: Añadir categorias en single.php archive.php
- feat: página 404 

v0.2.0
- feat: Paginación
- Estilo pagina archvie
- Imagen destacada por defecto 

v0.1.05
- Creación single.php, page.php, widget en footer y header 

v0.1.00
- Plantilla html a tema WordPress. 
- Creación template-jueganess con Contenido estático
