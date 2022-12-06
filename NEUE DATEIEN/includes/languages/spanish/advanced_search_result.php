<?php

/**
 * Copyright 2022 torvista (https://github.com/torvista/Zen_Cart-Spanish_Language_Pack)
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: advanced_search_result.php 2020-03-01 08:49:16Z webchills $
 */

define('NAVBAR_TITLE_1', 'Búsqueda Avanzada');
define('NAVBAR_TITLE_2', 'Resultados de la Búsqueda');

//define('HEADING_TITLE_1', 'Advanced Search');
define('HEADING_TITLE', 'Búsqueda Avanzada');

define('HEADING_SEARCH_CRITERIA', 'Criterio de Búsqueda');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Buscar en la Descripción del Producto');
define('ENTRY_CATEGORIES', 'Categorías:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Incluir subcategorías');
define('ENTRY_MANUFACTURERS', 'Fabricantes:');
define('ENTRY_PRICE_FROM', 'Precio Desde:');
define('ENTRY_PRICE_TO', 'Precio Hasta:');
define('ENTRY_DATE_FROM', 'Fecha Desde:');
define('ENTRY_DATE_TO', 'Fecha Hasta:');

define('TEXT_SEARCH_HELP_LINK', 'Ayuda de la Búsqueda [?]');

define('TEXT_ALL_CATEGORIES', 'Todas las categorías');
define('TEXT_ALL_MANUFACTURERS', 'Todos los fabricantes');

define('HEADING_SEARCH_HELP', 'Ayuda de la Búsqueda');
define('TEXT_SEARCH_HELP', 'Las palabras pueden estar separadas por los operadores AND (Y) y/o OR (O) para un mejor control de los resultados de la búsqueda.<br /><br />Por ejemplo, Microsoft AND ratón generaría un lista de resultados conteniendo ambas palabras. Así, para ratón OR teclado, la lista de resultados contendría ambas o alguna de las palabras.<br /><br />Coincidencias exactas pueden buscarse encerrando las palabras en comillas dobles.<br /><br />Por ejemplo, \"computadoras portátiles\" generaría una lista de resultados coincidiendo con la frase exacta.<br /><br />Los paréntesis pueden usarse para un control más avanzado de los resultados.<br /><br />Por ejemplo, Microsoft AND (teclado OR ratón OR "visual basic").');//escape quotation marks
define('TEXT_CLOSE_WINDOW', 'Cerrar ventana [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_PRODUCTS', 'Nombre del producto');
define('TABLE_HEADING_MANUFACTURER', 'Fabricante');
define('TABLE_HEADING_PRICE', 'Precio');
define('TABLE_HEADING_WEIGHT', 'Peso');
define('TABLE_HEADING_BUY_NOW', 'Comprar ahora');

define('TEXT_NO_PRODUCTS', 'No hay productos que coincidan con su criterio de búsqueda.');

define('ERROR_AT_LEAST_ONE_INPUT', 'Debe rellenar al menos uno de los campos.');
define('ERROR_INVALID_FROM_DATE', ENTRY_DATE_FROM . ' no válida.');
define('ERROR_INVALID_TO_DATE', ENTRY_DATE_TO . ' no válida.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'La ' . ENTRY_DATE_TO . ' debe ser mayor o igual a la ' . ENTRY_DATE_FROM);
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'El ' . ENTRY_PRICE_FROM . ' debe ser un número.');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'El '. ENTRY_PRICE_TO. ' debe ser un número.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'El ' . ENTRY_PRICE_TO . ' debe ser mayor o igual al ' . ENTRY_PRICE_FROM);
define('ERROR_INVALID_KEYWORDS', 'Palabras no válidas.');
