<?php
/**
* Zen Cart German Specific 
* Copyright 2022 torvista (https://github.com/torvista/Zen_Cart-Spanish_Language_Pack)
* @copyright Copyright 2003-2022 Zen Cart Development Team
* Zen Cart German Version - www.zen-cart-pro.at
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: spanish.php 2022-12-06 11:55:57Z webchills $
*/
// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

define('FOOTER_TEXT_BODY', 'Derechos  &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>. <a href="https://www.zen-cart.com" rel="noopener noreferrer" target="_blank">Zen Cart e-commerce</a>');

// look in your $PATH_LOCALE/locale directory for available locales...or use the script in /extras provided by this language pack
$locales = ['es_ES.UTF8', 'es-ES', 'Spanish_Spain.1252', 'es'];
@setlocale(LC_TIME, $locales);
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date() torvista changed m/d/Y->to d/m/Y

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
if (!function_exists('zen_date_raw')) {
function zen_date_raw($date, $reverse = false) {
if ($reverse) {
return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);//torvista changed to dd/mm/yyyy
} else {
return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);//torvista changed to dd/mm/yyyy
}
}
}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'EUR');

// Global entries for the <html> tag
if (FACEBOOK_OPEN_GRAPH_STATUS == "true") {
define('HTML_PARAMS','dir="ltr" lang="es-ES" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml"');

} else {
define('HTML_PARAMS', 'dir="ltr" lang="es-ES"');
}

// charset for web pages and emails
define('CHARSET', 'utf-8');


// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
define('TEXT_GV_NAME', 'Tarjeta Regalo');
define('TEXT_GV_NAMES', 'Tarjetas Regalo');

// used for redeem code, redemption code, or redemption id
define('TEXT_GV_REDEEM', 'Código de Canje');

// text for gender
define('MALE', 'Sr.');
define('FEMALE', 'Sra.');
define('DIVERS', 'Buzos/sin saludo');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/aaaa');

//text for sidebox heading links
define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[todos]');

// categories box text in sideboxes/categories.php
define('BOX_HEADING_CATEGORIES', 'Categorías');

// manufacturers box text in sideboxes/manufacturers.php
define('BOX_HEADING_MANUFACTURERS', 'Fabricantes');

// whats_new box text in sideboxes/whats_new.php
define('BOX_HEADING_WHATS_NEW', 'Novedades');
define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Nuevos productos...');

define('BOX_HEADING_FEATURED_PRODUCTS', 'Destacado');
define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Productos destacados...');
define('TEXT_NO_FEATURED_PRODUCTS', 'En breve añadiremos más productos. Visítenos regularmente para conocer las novedades.');

define('TEXT_NO_ALL_PRODUCTS', 'En breve añadiremos más productos. Visítenos regularmente para conocer las novedades.');
define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Todos los productos...');

// quick_find box text in sideboxes/quick_find.php
define('BOX_HEADING_SEARCH', 'Buscar');
define('BOX_SEARCH_ADVANCED_SEARCH', 'Búsqueda avanzada');

// specials box text in sideboxes/specials.php
define('BOX_HEADING_SPECIALS', 'Ofertas');
define('CATEGORIES_BOX_HEADING_SPECIALS', 'Ofertas...');

// reviews box text in sideboxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Comentarios');
define('BOX_REVIEWS_WRITE_REVIEW', 'Escriba un comentario sobre este producto.');
define('BOX_REVIEWS_NO_REVIEWS', 'Actualmente no hay comentarios sobre el producto.');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '¡%s de 5 estrellas!');

// shopping_cart box text in sideboxes/shopping_cart.php
define('BOX_HEADING_SHOPPING_CART', 'Carro de la compra');
define('BOX_SHOPPING_CART_EMPTY', 'No hay artículos en el carro');
define('BOX_SHOPPING_CART_DIVIDER', '-&nbsp;');

// order_history box text in sideboxes/order_history.php
define('BOX_HEADING_CUSTOMER_ORDERS', 'Compras recientes');

// best_sellers box text in sideboxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS', 'Los más vendidos');

// notifications box text in sideboxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', 'Avisos');
define('BOX_NOTIFICATIONS_NOTIFY', 'Notifíquenme cuando haya actualizaciones de <strong>%s</strong>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'No me notifiquen las actualizaciones de <strong>%s</strong>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', 'Info del fabricante');
define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'Página web de %s');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Otros productos');

// languages box text in sideboxes/languages.php
define('BOX_HEADING_LANGUAGES', 'Idiomas');

// currencies box text in sideboxes/currencies.php
define('BOX_HEADING_CURRENCIES', 'Divisas');

// information box text in sideboxes/information.php
define('BOX_HEADING_INFORMATION', 'Información');
define('BOX_INFORMATION_PRIVACY', 'Aviso de privacidad');
define('BOX_INFORMATION_CONDITIONS', 'Condiciones de uso');
define('BOX_INFORMATION_SHIPPING', 'Envíos y Devoluciones');
define('BOX_INFORMATION_WIDERRUFSRECHT', 'Derecho de retractación');
define('BOX_INFORMATION_ZAHLUNGSARTEN', 'Métodos de pago');
define('BOX_INFORMATION_IMPRESSUM', 'Aviso legal');
define('BOX_INFORMATION_CONTACT', 'Contáctenos');
define('BOX_INFORMATION_UNSUBSCRIBE', 'Baja del boletín');

define('BOX_INFORMATION_SITE_MAP', 'Mapa del Sitio');

// information box text in sideboxes/more_information.php - were TUTORIAL_
define('BOX_HEADING_MORE_INFORMATION', 'Más información');
define('BOX_INFORMATION_PAGE_2', 'Página 2');
define('BOX_INFORMATION_PAGE_3', 'Página 3');
define('BOX_INFORMATION_PAGE_4', 'Página 4');

//New billing address text
define('SET_AS_PRIMARY' , 'Marcar como dirección principal');

// javascript messages
define('JS_ERROR', 'Ha ocurrido un error durante el procesamiento del formulario.\n\nPor favor, realice las siguientes correcciones:\n\n');

define('JS_REVIEW_TEXT', '* El \'texto del comentario\' debe tener al menos ' . REVIEW_TEXT_MIN_LENGTH . ' caracteres.');
define('JS_REVIEW_RATING', '* Debe valorar el producto.');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Por favor seleccione un método de pago para su pedido.');

define('JS_ERROR_SUBMITTED', 'El formulario está siendo enviado. Por favor, presione OK y espere a que se procese el proceso.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Por favor, seleccione un método de pago para su pedido.');
define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Por favor, confirme los Términos y Condiciones acerca de este pedido haciendo click en la casilla inferior.');
define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Por favor, confirme la Política de Privacidad haciendo click en la casilla inferior.');

define('CATEGORY_COMPANY', 'Datos de la empresa');
define('CATEGORY_PERSONAL', 'Datos personales');
define('PULL_DOWN_DEFAULT', 'Seleccione su país');
define('PLEASE_SELECT', 'Seleccione ...');
define('TYPE_BELOW', 'Teclee una selección abajo ...');

define('ENTRY_COMPANY', 'Nombre de la empresa:');
define('ENTRY_COMPANY_ERROR', 'Teclee el nombre de la empresa.');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Salutación:');
define('ENTRY_GENDER_ERROR', 'Por favor escoja una opción (Sr./Sra.)');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', 'El nombre debe tener un mínimo de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Apellidos:');
define('ENTRY_LAST_NAME_ERROR', 'Cada apellido debe tener un mínimo de ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'La fecha de nacimiento debe tener el formato: DD/MM/YYYY (ej. 21/05/1970) o YYYY-MM-DD (ej 1970-05-21)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (ej. 21/05/1970 o 1970-05-21)');
define('ENTRY_EMAIL_ADDRESS', 'E-mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'El e-mail debe tener un mínimo de ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Este e-mail parece no ser válido - por favor, realice las correcciones necesarias.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Este e-mail ya existe en nuestra base de datos - por favor, entre con otro e-mail o cree otra cuenta con una dirección de e-mail diferente.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_EMAIL_ADDRESS_CONFIRM', 'Confirmar e-mail:');
define('ENTRY_EMAIL_ADDRESS_CONFIRM_NOT_MATCHING', 'DLas direcciones de correo electrónico indicadas no coinciden.');
define('ENTRY_NICK', 'Apodo del Foro:');
define('ENTRY_NICK_TEXT', ''); // note to display beside nickname input field
define('ENTRY_NICK_DUPLICATE_ERROR', 'Ese apodo ya existe.');
define('ENTRY_STREET_ADDRESS', 'Dirección:');
define('ENTRY_STREET_ADDRESS_ERROR', 'La dirección debe tener un mínimo de  ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Dirección (cont.):');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Código postal:');
define('ENTRY_POST_CODE_ERROR', 'El código postal debe tener un mínimo de ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Localidad:');
define('ENTRY_CUSTOMERS_REFERRAL', 'Código de referencia:');

define('ENTRY_CITY_ERROR', 'La localidad debe tener un mínimo de ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_ERROR', 'La provincia debe tener un mínimo de ' . ENTRY_STATE_MIN_LENGTH . ' caracteres.');
define('ENTRY_STATE_ERROR_SELECT', 'Por favor, seleccione una provincia en el menú desplegable.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', 'País:');
define('ENTRY_COUNTRY_ERROR', 'Debe seleccionar un país en el menú desplegable.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Teléfono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'El teléfono debe tener un mínimo de ' . ENTRY_TELEPHONE_MIN_LENGTH . ' números.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Quiero recibir el boletín de ' . STORE_NAME . ' sobre productos nuevos.');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_PASSWORD', 'Contraseña:');
define('ENTRY_PASSWORD_ERROR', 'La contraseña debe tener un mínimo de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'La confirmación de la contraseña y la contraseña deben ser iguales.');
define('ENTRY_PASSWORD_TEXT', '* (al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres)');
define('ENTRY_PASSWORD_CONFIRMATION', 'Confirmar contraseña:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Contraseña actual:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_NEW', 'Nueva contraseña:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'La nueva contraseña debe tener un mínimo de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'La confirmación de la contraseña debe ser igual a la nueva contraseña.');

define('FORM_REQUIRED_INFORMATION', '* Información obligatoria');
define('ENTRY_REQUIRED_SYMBOL', '*');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="alert">*</span>');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', '');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> Productos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> Pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> Comentarios)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> Productos Nuevos)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> Ofertas)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> Productos Destacados)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Mostrando de <strong>%d</strong> al <strong>%d</strong> (de <strong>%d</strong> products)');

define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Página anterior');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Página siguiente');
define('PREVNEXT_TITLE_PAGE_NO', 'Página %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Listado anterior de %d Páginas');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Listado siguiente de %d Páginas');
define('PREVNEXT_BUTTON_PREV', '[&laquo;&nbsp;Anterior]');
define('PREVNEXT_BUTTON_NEXT', '[Siguiente&nbsp;&raquo;]');

define('ARIA_PAGINATION_ROLE_LABEL_GENERAL','Paginación');
define('ARIA_PAGINATION_ROLE_LABEL_FOR','%s Paginación'); // eg: "Search results Pagination"
define('ARIA_PAGINATION_PREVIOUS_PAGE','Ir a la Página Anterior');
define('ARIA_PAGINATION_NEXT_PAGE','Ir a la Págian Siguiente');
define('ARIA_PAGINATION_CURRENT_PAGE','Pagina Actual');
define('ARIA_PAGINATION_CURRENTLY_ON',', ahora en la página %s');
define('ARIA_PAGINATION_GOTO','Ir a ');
define('ARIA_PAGINATION_PAGE_NUM','Página %s');
define('ARIA_PAGINATION_ELLIPSIS_PREVIOUS','Grupo anterior de páginas');
define('ARIA_PAGINATION_ELLIPSIS_NEXT','Grupo siguiente de páginas');
define('ARIA_PAGINATION_','');

define('TEXT_BASE_PRICE', 'Desde: ');

define('TEXT_CLICK_TO_ENLARGE', 'Ampliar imagen');
define('TEXT_CLOSE_WINDOW_IMAGE', 'Haga clic en la imagen para cerrarla');

define('TEXT_SORT_PRODUCTS', 'Ordenar productos ');
define('TEXT_DESCENDINGLY', 'en sentido descendente');
define('TEXT_ASCENDINGLY', 'en sentido ascendente');
define('TEXT_BY', ' por ');

define('TEXT_REVIEW_BY', 'por %s');
define('TEXT_REVIEW_DATE_ADDED', 'Fecha añadida: %s');
define('TEXT_NO_REVIEWS', 'No hay comentarios.');

define('TEXT_NO_NEW_PRODUCTS', 'Nuevos productos estarán muy pronto disponibles. Por favor, visítenos de nuevo.');

define('TEXT_UNKNOWN_TAX_RATE', 'Impuesto desconocido');

define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'AVISO: No se pudo localizar el archivo del idioma: ');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'La fecha de vencimiento de la tarjeta de crédito no es válido. Por favor revise la fecha e inténtelo de nuevo.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'El número de la tarjeta de crédito ingresado no es válido. Por favor revise el número e inténtelo de nuevo.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Los primeros cuatro dígitos del número ingresado son: %s. Si el número es correcto, nosotros no aceptamos este tipo de tarjeta de crédito. Si está equivocado, por favor inténtelo de nuevo.');

define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Cupones de descuento');
define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' FAQ');
define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Saldo ');
define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Cuenta');
define('GV_FAQ', TEXT_GV_NAME . ' FAQ');
define('ERROR_REDEEMED_AMOUNT', 'Enhorabuena, ha canjeado ');
define('ERROR_NO_REDEEM_CODE', 'No ha ingresado a ' . TEXT_GV_REDEEM . '.');
define('ERROR_NO_INVALID_REDEEM_GV', TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM.'inválido ');
define('TABLE_HEADING_CREDIT', 'Créditos disponibles');

define('TEXT_SEND_OR_SPEND', 'Tiene un saldo positivo en su ' . TEXT_GV_NAME . ' cuenta. Puede comprar algo o enviárselo a otro usuario. Para enviarlo, haga un click en el botón abajo.');
define('TEXT_BALANCE_IS', 'El saldo de su ' . TEXT_GV_NAME . ' es: ');
define('TEXT_AVAILABLE_BALANCE', 'Su Cuenta de' . TEXT_GV_NAME);

// payment method is GV/Discount
define('PAYMENT_METHOD_GV', 'Tarjeta Regalo/Cupón');
define('PAYMENT_MODULE_GV', 'TR/CD');

define('TABLE_HEADING_CREDIT_PAYMENT', 'Créditos disponibles');

//coupon redeem error messages (checkout payment)
define('TEXT_COUPON_LINK_TITLE', 'ver las condiciones del cupón');
define('TEXT_INVALID_REDEEM_COUPON', 'Código de Cupón "%s" no es válido');
define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Tiene que gastar un mínimo de %2$s para canjear Cupón "%1$s".');
define('TEXT_INVALID_COUPON_PRODUCT', 'El Cupón "%1$s" no es válido para ningún producto en el carro.');
define('TEXT_INVALID_COUPON_ORDER_LIMIT', 'Usted ha superado el máximo número de pedidos (%2$u) con lo que se puede utilizar el Cupón "%1$s".');
define('TEXT_INVALID_STARTDATE_COUPON', 'El Cupón "%1$s" no está válido hasta %2$s.');
define('TEXT_INVALID_FINISHDATE_COUPON', 'El Cupón "%1$s" no está válido (se caducó %2$s).');
define('TEXT_INVALID_USES_COUPON', 'El Cupón "%1$s" ya ha sido utilizado la máximo número de veces (%2$u).');//todo
define('TEXT_INVALID_USES_USER_COUPON', 'Usted ha utilizado el Cupón "%1$s" el número máximo de veces permitido por cliente (%2$u).');//todo
define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'El Cupón "%s" no es válido para la dirección que ha elegida.');
define('TEXT_ERROR', 'Ha ocurrido un error');

define('TEXT_VALID_COUPON', '¡Ha añadido un Cupón de Descuento a su pedido!');


// more info in place of buy now
define('MORE_INFO_TEXT','... más info');

// IP Address
define('TEXT_YOUR_IP_ADDRESS', 'Su dirección IP es: ');

//Generic Address Heading
define('HEADING_ADDRESS_INFORMATION', 'Dirección');

// cart contents
define('PRODUCTS_ORDER_QTY_TEXT_IN_CART', 'Cantidad en el carro: ');
define('PRODUCTS_ORDER_QTY_TEXT', 'Añadir al carro: ');
define('ARIA_QTY_ADD_TO_CART','Introduzca cantidad para añadir al carro');
define('ARIA_EDIT_QTY_IN_CART','Editar cantidad en el carro');
define('ARIA_DELETE_ITEM_FROM_CART', 'Borrar este artículo del carro');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
define('SUCCESS_ADDED_TO_CART_PRODUCT', 'El producto ha sido añadido al carro ...');
// only for where multiple add to cart is used:
define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'El producto(s) seleccionado ha sido añadido al carro ...');

define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// Shipping
define('TEXT_SHIPPING_WEIGHT','kg');
define('TEXT_SHIPPING_BOXES', 'Cajas');

// Cross Sell
define('TEXT_XSELL_PRODUCTS', 'Para este artículo recomendamos...');
// Discount Savings
define('PRODUCT_PRICE_DISCOUNT_PREFIX', 'Ahorre:&nbsp;');
define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% descuento');
define('PRODUCT_PRICE_DISCOUNT_AMOUNT', '&nbsp;descuento');

// Sale Maker Sale Price
define('PRODUCT_PRICE_SALE', 'Oferta:&nbsp;');

//universal symbols
define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
define('BOX_HEADING_BANNER_BOX', 'Patrocinador');
define('TEXT_BANNER_BOX', 'Por favor, visite a nuestro patrocinador ...');

// banner box 2
define('BOX_HEADING_BANNER_BOX2','Además puede ver...');
define('TEXT_BANNER_BOX2','Vea hoy!');

// banner_box - all
define('BOX_HEADING_BANNER_BOX_ALL', 'Patrocinador');
define('TEXT_BANNER_BOX_ALL', 'Por favor, visite a nuestro patrocinador ...');

// boxes defines
define('PULL_DOWN_ALL', 'Seleccione');
define('PULL_DOWN_MANUFACTURERS','- Reinicio -');
// shipping estimator
define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Seleccione');

// general Sort By
define('TEXT_INFO_SORT_BY', 'Ordenar por: ');

// close window image popups
define('TEXT_CLOSE_WINDOW',' - Haga click en la imagen para cerrar');
// close popups
define('TEXT_CURRENT_CLOSE_WINDOW','[ Cerrar ventana ]');

// iii 031104 added:  File upload error strings
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error:  Tipo de fichero no permitido.');
define('WARNING_NO_FILE_UPLOADED', 'Advertencia:  no se cargó el fichero.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Éxito:  fichero guardado correctamente.');
define('ERROR_FILE_NOT_SAVED', 'Error:  fichero no guardado.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error:  destino no escribible.');
define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: el destino no existe.');
define('ERROR_FILE_TOO_BIG', 'AVISO: El archivo es demasiado grande para cargarse!<br>El pedido puede procesarse pero, por favor, contáctenos para ayudarle');
// End iii added

define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'AVISO: Esta página web no estará operativa por razones de mantenimiento: ');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'AVISO: Esta página web no está operativa por razones de mantenimiento');

define('PRODUCTS_PRICE_IS_FREE_TEXT', '¡Es gratis!');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Llame para saber el precio');
define('TEXT_CALL_FOR_PRICE', 'Contáctenos para saber el precio');

define('TEXT_INVALID_SELECTION',' Elijó una Opción Inválida: ');
define('TEXT_ERROR_OPTION_FOR', ' En la Opción para: ');
define('TEXT_INVALID_USER_INPUT', 'Entrada del Usuario requerida<br>');

// product_listing
define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Mín: ');
define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING', 'Unidades:');

define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Máx:');
define('TEXT_PRODUCT_MODEL', 'Modelo: ');
define('TABLE_HEADING_MODEL', 'Modelo');

define('TEXT_PRODUCTS_MIX_OFF','*Mezclado DESHABILITADO');
define('TEXT_PRODUCTS_MIX_ON','*Mezclado HABILITADO');

define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br>*No puede mezclar las opciones de este producto para cumplir con la cantidad mínima necesaria.*<br>');
define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*La combinación de opciones está HABILITADA<br>');

define('ERROR_MAXIMUM_QTY', 'La cantidad añadida al carro ha sido modificada - hay una restricción del máximo permitido. Ver este producto:<br>');
define('ERROR_CORRECTIONS_HEADING', 'Por favor corrija lo siguiente: <br>');
define('ERROR_QUANTITY_ADJUSTED', 'La cantidad añadida al carro ha sido ajustada - El producto requerido no está disponible en cantidades fraccionadas. La cantidad de este producto es:<br>');
define('ERROR_QUANTITY_CHANGED_FROM', ', ha sido cambiado de: ');
define('ERROR_QUANTITY_CHANGED_TO', ' a ');

// Downloads Controller
define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','NOTA: Las descargas no están disponibles hasta que el pago haya sido comprobado');
define('TEXT_FILESIZE_BYTES', ' bytes');
define('TEXT_FILESIZE_KBS', ' KB');
define('TEXT_FILESIZE_MEGS', ' MB');
define('TEXT_FILESIZE_UNKNOWN', 'Desconocido');

// shopping cart errors
define('ERROR_PRODUCT', '<br>El articulo: ');
define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br>Lo sentimos pero este producto ha sido retirado de nuestro inventario.<br>Este producto ha sido eliminado de su carro. Contáctenos para más información.');
define('ERROR_PRODUCT_ATTRIBUTES','<br>El artículo: ');
define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br>Lo sentimos pero las opciones elegidas para este producto han sido modificadas y no están disponibles actualmente.<br>Este producto ha sido eliminado de su carro.');
define('ERROR_PRODUCT_QUANTITY_MIN',' ... Errores de cantidad mínima - ');
define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Errores de las cantidades de unidades - ');
define('ERROR_PRODUCT_OPTION_SELECTION','<br> ... Valores no válidos para la opción seleccionada ');
define('ERROR_PRODUCT_QUANTITY_ORDERED','<br>Usted pidió un total de: ');
define('ERROR_PRODUCT_QUANTITY_MAX',' ... Errores de cantidad máxima - ');
define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',' tiene una restricción de cantidad mínima. ');
define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Errores de las cantidades de unidades - ');
define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Errores de cantidad máxima - ');

define('WARNING_SHOPPING_CART_COMBINED', 'AVISO: Para su comodidad, en el carro permanecen los productos añadidos en su última visita. Por favor, revise su carro antes de finalizar la sesión.');
define('WARNING_PRODUCT_QUANTITY_ADJUSTED', 'La cantidad ha sido ajustada al nivel de stock actual. ');
define('OUT_OF_STOCK_CANT_CHECKOUT', 'Los productos marcados ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' no tienen stock o no hay suficientes para completar su pedido.<br>Cambie la cantidad de los productos marcados (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Gracias');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Los productos marcados ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' no tienen stock.<br>Completaremos el pedido lo antes posible. ');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
define('ERROR_CUSTOMERS_ID_INVALID', 'La información del usuario no puede ser validada!<br>Por favor, conéctese o abra una nueva cuenta. ...');

define('TABLE_HEADING_FEATURED_PRODUCTS', 'Productos destacados  ');

define('TABLE_HEADING_NEW_PRODUCTS', 'Productos nuevos para %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Próximos productos');
define('TABLE_HEADING_DATE_EXPECTED', 'Fecha de espera');
define('TABLE_HEADING_SPECIALS_INDEX', 'Ofertas del mes en %s');

define('CAPTION_UPCOMING_PRODUCTS', 'Pronto tendremos estos productos disponibles');

// meta tags special defines
define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT', 'Es gratis!');

define('ASK_A_QUESTION', 'Realice una Pregunta sobre este producto');

// customer login
define('TEXT_SHOWCASE_ONLY', 'Contáctenos');
// set for login for prices
define('TEXT_LOGIN_FOR_PRICE_PRICE', 'Precio no disponible');
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE', 'Entrar para ver el precio');
// set for show room only
define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM', 'Sólo Exposición');

// authorization pending
define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Precio no disponible');
define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'PENDIENTE DE APROBACION');
define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE', 'Entrar a la tienda');
define('TEXT_AUTHORIZATION_PENDING_CHECKOUT', 'Comprar No Habilitada - Pendiente de Aprobación');

// text pricing
define('TEXT_CHARGES_WORD', 'Cargo Calculado:');
define('TEXT_PER_WORD','<br>Precio por palabra: ');
define('TEXT_WORDS_FREE',' Palabra(s) gratis ');
define('TEXT_CHARGES_LETTERS', 'Cargo Calculado:');
define('TEXT_PER_LETTER','<br>Precio por letra: ');
define('TEXT_LETTERS_FREE',' Letra(s) gratis ');
define('TEXT_ONETIME_CHARGES','*pago único = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*pago único = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Opción Descuentos al por mayor');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','CANTIDAD');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRECIO');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'En la opción Descuentos al por mayor se aplica un solo cargo');

// textarea attribute input fields
define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' caracteres máximos permitidos');

// Shipping Estimator
define('CART_SHIPPING_OPTIONS', 'Estimación de los gastos del envío:');
define('CART_SHIPPING_METHOD_TEXT', 'Métodos de envío disponibles:');
define('CART_SHIPPING_METHOD_RATES', 'Tarifas:');
define('CART_SHIPPING_METHOD_TO', 'Enviar a: ');
define('CART_SHIPPING_METHOD_FREE_TEXT', 'Envío gratis');
define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Descargas');
define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
define('CART_SHIPPING_METHOD_ADDRESS', 'Dirección:');
define('CART_ITEMS', 'Producto(s) en el carro: ');
define('ERROR_CART_UPDATE', '<strong>Por favor, actualice su pedido.</strong> ');
define('EMPTY_CART_TEXT_NO_QUOTE', '¡Lo siento! ha excedido el tiempo de su sesión ... Por favor, actualice su carro para obtener el presupuesto de envío ...');
define('CART_SHIPPING_QUOTE_CRITERIA', 'El precio de los portes depende del código postal elegido:');

// multiple product add to cart
define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Añadir: ');
define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Añadir: ');
define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Añadir: ');
define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Añadir: ');
//moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Descuentos por Cantidades');
define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Descuentos por Cantidades Precio Nuevo');
define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Descuentos por Cantidades');
define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Los descuentos pueden variar en función de las opciones elegidas');
define('TEXT_HEADER_DISCOUNTS_OFF', 'Descuentos por Cantidades no disponibles ...');

// sort order titles for dropdowns
define('PULL_DOWN_ALL_RESET','- RESETEAR - ');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Nombre del producto');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Productos - Descripción');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Precio - bajo a alto');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Precio - alto a bajo');
define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Modelo');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Fecha Añadida - Nueva a Antigua');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Fecha Añadida - Antigua a Nueva');

// downloads module defines
define('TABLE_HEADING_DOWNLOAD_DATE', 'Enlace Caduca');
define('TABLE_HEADING_DOWNLOAD_COUNT', 'Quedan');
define('HEADING_DOWNLOAD', 'Para bajar los archivos, haga click en el botón de Descarga y elija "Guardar en el disco" del menú.');
define('TABLE_HEADING_DOWNLOAD_FILENAME', 'Nombre del archivo');
define('TABLE_HEADING_PRODUCT_NAME', 'Nombre del productos');
define('TABLE_HEADING_BYTE_SIZE', 'Tamaño del archivo');
define('TEXT_DOWNLOADS_UNLIMITED', 'Ilimitado');
define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
define('PAYMENT_JAVASCRIPT_DISABLED', 'No puede continuar con el proceso de compra porque Javscript está desactivado en su navegador. Es imprescindible activarlo para completar la compra.');

// table headings for cart display and upcoming products
define('TABLE_HEADING_QUANTITY', 'Cantidad');
define('TABLE_HEADING_PRODUCTS', 'Artículo');
define('TABLE_HEADING_TOTAL', 'Total');

// create account - login shared
define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Privacidad');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Por favor, acepte nuestra declaración de privacidad marcando la siguiente casilla. Puede leer la declaración de privacidad <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">aquí</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'He leído y acepto la declaración de privacidad.');
define('TABLE_HEADING_ADDRESS_DETAILS', 'Dirección');
define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Datos de contacto adicionales');
define('TABLE_HEADING_DATE_OF_BIRTH', 'Confirma tu edad');
define('TABLE_HEADING_LOGIN_DETAILS', 'Datos de Login');
define('TABLE_HEADING_REFERRAL_DETAILS', '¿Cómo supo de nosotros?');

define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Lo sentimos, pero no tratamos con direcciones de envío/facturación en "%s". Por favor, contáctenos.');

define('ENTRY_EMAIL_PREFERENCE', 'Boletín y preferencias de email');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY', 'Solo-TEXTO');
define('EMAIL_SEND_FAILED','ERROR: No se ha podido enviar el email a : "%s" <%s> con sujeto: "%s"');

define('DB_ERROR_NOT_CONNECTED', 'Error - No se ha podido conectar con la base de datos');
define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="https://docs.zen-cart.com/user/troubleshooting/error_71_maintenance_required/" rel="noopener" target="_blank">ERROR 0071: Parece que hay un problema con la base de datos. Precisa mantenimiento.</a>');

// EZ-PAGES Alerts
define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'AVISO: EZ-PAGES ENCABEZAMIENTO - Activado sólo para la IP del Administrador.');
define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'AVISO: EZ-PAGES PIE - Activado sólo para la IP del Administrador.');
define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'AVISO: EZ-PAGES CAJA LATERAL - Activado sólo para la IP del Administrador.');

// extra product listing sorter
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Artículos que empiezan por ...');
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Resetear --');

// The following message, with the associated severity, is displayed in the storefront header when an admin has logged into
// a customer's account.

// -----
// init_customer_auth.php substitutes the customer's name (%$1s) and customer's email address (%$2s)
// into this message.
//
define('EMP_SHOPPING_FOR_MESSAGE', 'Actualmente utilizando la cuenta de %1$s (%2$s).');

// -----
// Identify the messageStack "severity" to be applied to the above message, one of 'success',
// 'warning', 'caution', 'error' (defaults to 'success').
//
define('EMP_SHOPPING_FOR_MESSAGE_SEVERITY', 'success');

// Constants shared between multiple pages
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');

///////////////////////////////////////////////////////////

$file_list = [FILENAME_EMAIL_EXTRAS, FILENAME_HEADER, FILENAME_BUTTON_NAMES, FILENAME_ICON_NAMES, FILENAME_OTHER_IMAGES_NAMES, FILENAME_CREDIT_CARDS, FILENAME_WHOS_ONLINE, FILENAME_META_TAGS];
foreach ($file_list as $file) { 
$file = str_replace(".php","",$file); 
require_once(zen_get_file_directory(DIR_FS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . "/", $file . '.php', 'false'));
}

// END OF EXTERNAL LANGUAGE LINKS
