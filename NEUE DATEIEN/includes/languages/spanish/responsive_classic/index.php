<?php
/**
 * Copyright 2022 torvista (https://github.com/torvista/Zen_Cart-Spanish_Language_Pack)
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: index.php 2020-03-01 09:00:16Z webchills $
 */

define('TEXT_MAIN','Esta es la definición de la página de inicio en castellano cuando no existe ninguna plantilla definida. Está ubicada en: <strong>/includes/languages/spanish/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', '¡Bienvenido/a! ¿Quiere <a href="%s">identificarse</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Bienvenido, esperamos que disfrute de nuestro escaparate virtual.');
}

define('TEXT_GREETING_PERSONAL', '¡Hola <span class="greetUser">%s</span>! ¿Quiere ver nuestras <a href="%s">últimas novedades</a>?');

define('TEXT_INFORMATION', 'Defina aquí su página índice principal.');


if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Productos Disponibles');
  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_PRODUCTS', 'Nombre');
  define('TABLE_HEADING_MANUFACTURER', 'Fabricante');
  define('TABLE_HEADING_PRICE', 'Precio');
  define('TABLE_HEADING_WEIGHT', 'Peso');
  define('TABLE_HEADING_BUY_NOW', 'Comprar Ahora');
  define('TEXT_NO_PRODUCTS', 'No hay productos disponibles en esta categoría.');
  define('TEXT_NO_PRODUCTS2', 'No hay productos disponibles de este fabricante.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Número de productos: ');
  define('TEXT_SHOW', 'Filtrar Resultados por:');
  define('TEXT_BUY', 'Comprar 1 \'');
  define('TEXT_NOW', '\' ahora');
  define('TEXT_ALL_CATEGORIES', 'Todas las Categorías');
  define('TEXT_ALL_MANUFACTURERS', 'Todos los Fabricantes');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Bienvenido a nuestra tienda online');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Bienvenido a nuestra tienda online'); 
}
