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
define('TEXT_GV_REDEEM', 'C??digo de Canje');

// text for gender
define('MALE', 'Sr.');
define('FEMALE', 'Sra.');
define('DIVERS', 'Buzos/sin saludo');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/aaaa');

//text for sidebox heading links
define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[todos]');

// categories box text in sideboxes/categories.php
define('BOX_HEADING_CATEGORIES', 'Categor??as');

// manufacturers box text in sideboxes/manufacturers.php
define('BOX_HEADING_MANUFACTURERS', 'Fabricantes');

// whats_new box text in sideboxes/whats_new.php
define('BOX_HEADING_WHATS_NEW', 'Novedades');
define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Nuevos productos...');

define('BOX_HEADING_FEATURED_PRODUCTS', 'Destacado');
define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Productos destacados...');
define('TEXT_NO_FEATURED_PRODUCTS', 'En breve a??adiremos m??s productos. Vis??tenos regularmente para conocer las novedades.');

define('TEXT_NO_ALL_PRODUCTS', 'En breve a??adiremos m??s productos. Vis??tenos regularmente para conocer las novedades.');
define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Todos los productos...');

// quick_find box text in sideboxes/quick_find.php
define('BOX_HEADING_SEARCH', 'Buscar');
define('BOX_SEARCH_ADVANCED_SEARCH', 'B??squeda avanzada');

// specials box text in sideboxes/specials.php
define('BOX_HEADING_SPECIALS', 'Ofertas');
define('CATEGORIES_BOX_HEADING_SPECIALS', 'Ofertas...');

// reviews box text in sideboxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Comentarios');
define('BOX_REVIEWS_WRITE_REVIEW', 'Escriba un comentario sobre este producto.');
define('BOX_REVIEWS_NO_REVIEWS', 'Actualmente no hay comentarios sobre el producto.');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '??%s de 5 estrellas!');

// shopping_cart box text in sideboxes/shopping_cart.php
define('BOX_HEADING_SHOPPING_CART', 'Carro de la compra');
define('BOX_SHOPPING_CART_EMPTY', 'No hay art??culos en el carro');
define('BOX_SHOPPING_CART_DIVIDER', '-&nbsp;');

// order_history box text in sideboxes/order_history.php
define('BOX_HEADING_CUSTOMER_ORDERS', 'Compras recientes');

// best_sellers box text in sideboxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS', 'Los m??s vendidos');

// notifications box text in sideboxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', 'Avisos');
define('BOX_NOTIFICATIONS_NOTIFY', 'Notif??quenme cuando haya actualizaciones de <strong>%s</strong>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'No me notifiquen las actualizaciones de <strong>%s</strong>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', 'Info del fabricante');
define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'P??gina web de %s');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Otros productos');

// languages box text in sideboxes/languages.php
define('BOX_HEADING_LANGUAGES', 'Idiomas');

// currencies box text in sideboxes/currencies.php
define('BOX_HEADING_CURRENCIES', 'Divisas');

// information box text in sideboxes/information.php
define('BOX_HEADING_INFORMATION', 'Informaci??n');
define('BOX_INFORMATION_PRIVACY', 'Aviso de privacidad');
define('BOX_INFORMATION_CONDITIONS', 'Condiciones de uso');
define('BOX_INFORMATION_SHIPPING', 'Env??os y Devoluciones');
define('BOX_INFORMATION_WIDERRUFSRECHT', 'Derecho de retractaci??n');
define('BOX_INFORMATION_ZAHLUNGSARTEN', 'M??todos de pago');
define('BOX_INFORMATION_IMPRESSUM', 'Aviso legal');
define('BOX_INFORMATION_CONTACT', 'Cont??ctenos');
define('BOX_INFORMATION_UNSUBSCRIBE', 'Baja del bolet??n');

define('BOX_INFORMATION_SITE_MAP', 'Mapa del Sitio');

// information box text in sideboxes/more_information.php - were TUTORIAL_
define('BOX_HEADING_MORE_INFORMATION', 'M??s informaci??n');
define('BOX_INFORMATION_PAGE_2', 'P??gina 2');
define('BOX_INFORMATION_PAGE_3', 'P??gina 3');
define('BOX_INFORMATION_PAGE_4', 'P??gina 4');

//New billing address text
define('SET_AS_PRIMARY' , 'Marcar como direcci??n principal');

// javascript messages
define('JS_ERROR', 'Ha ocurrido un error durante el procesamiento del formulario.\n\nPor favor, realice las siguientes correcciones:\n\n');

define('JS_REVIEW_TEXT', '* El \'texto del comentario\' debe tener al menos ' . REVIEW_TEXT_MIN_LENGTH . ' caracteres.');
define('JS_REVIEW_RATING', '* Debe valorar el producto.');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Por favor seleccione un m??todo de pago para su pedido.');

define('JS_ERROR_SUBMITTED', 'El formulario est?? siendo enviado. Por favor, presione OK y espere a que se procese el proceso.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Por favor, seleccione un m??todo de pago para su pedido.');
define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Por favor, confirme los T??rminos y Condiciones acerca de este pedido haciendo click en la casilla inferior.');
define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Por favor, confirme la Pol??tica de Privacidad haciendo click en la casilla inferior.');

define('CATEGORY_COMPANY', 'Datos de la empresa');
define('CATEGORY_PERSONAL', 'Datos personales');
define('PULL_DOWN_DEFAULT', 'Seleccione su pa??s');
define('PLEASE_SELECT', 'Seleccione ...');
define('TYPE_BELOW', 'Teclee una selecci??n abajo ...');

define('ENTRY_COMPANY', 'Nombre de la empresa:');
define('ENTRY_COMPANY_ERROR', 'Teclee el nombre de la empresa.');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Salutaci??n:');
define('ENTRY_GENDER_ERROR', 'Por favor escoja una opci??n (Sr./Sra.)');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', 'El nombre debe tener un m??nimo de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Apellidos:');
define('ENTRY_LAST_NAME_ERROR', 'Cada apellido debe tener un m??nimo de ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'La fecha de nacimiento debe tener el formato: DD/MM/YYYY (ej. 21/05/1970) o YYYY-MM-DD (ej 1970-05-21)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (ej. 21/05/1970 o 1970-05-21)');
define('ENTRY_EMAIL_ADDRESS', 'E-mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'El e-mail debe tener un m??nimo de ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Este e-mail parece no ser v??lido - por favor, realice las correcciones necesarias.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Este e-mail ya existe en nuestra base de datos - por favor, entre con otro e-mail o cree otra cuenta con una direcci??n de e-mail diferente.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_EMAIL_ADDRESS_CONFIRM', 'Confirmar e-mail:');
define('ENTRY_EMAIL_ADDRESS_CONFIRM_NOT_MATCHING', 'DLas direcciones de correo electr??nico indicadas no coinciden.');
define('ENTRY_NICK', 'Apodo del Foro:');
define('ENTRY_NICK_TEXT', ''); // note to display beside nickname input field
define('ENTRY_NICK_DUPLICATE_ERROR', 'Ese apodo ya existe.');
define('ENTRY_STREET_ADDRESS', 'Direcci??n:');
define('ENTRY_STREET_ADDRESS_ERROR', 'La direcci??n debe tener un m??nimo de  ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Direcci??n (cont.):');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'C??digo postal:');
define('ENTRY_POST_CODE_ERROR', 'El c??digo postal debe tener un m??nimo de ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Localidad:');
define('ENTRY_CUSTOMERS_REFERRAL', 'C??digo de referencia:');

define('ENTRY_CITY_ERROR', 'La localidad debe tener un m??nimo de ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_ERROR', 'La provincia debe tener un m??nimo de ' . ENTRY_STATE_MIN_LENGTH . ' caracteres.');
define('ENTRY_STATE_ERROR_SELECT', 'Por favor, seleccione una provincia en el men?? desplegable.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', 'Pa??s:');
define('ENTRY_COUNTRY_ERROR', 'Debe seleccionar un pa??s en el men?? desplegable.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Tel??fono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'El tel??fono debe tener un m??nimo de ' . ENTRY_TELEPHONE_MIN_LENGTH . ' n??meros.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Quiero recibir el bolet??n de ' . STORE_NAME . ' sobre productos nuevos.');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_PASSWORD', 'Contrase??a:');
define('ENTRY_PASSWORD_ERROR', 'La contrase??a debe tener un m??nimo de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'La confirmaci??n de la contrase??a y la contrase??a deben ser iguales.');
define('ENTRY_PASSWORD_TEXT', '* (al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres)');
define('ENTRY_PASSWORD_CONFIRMATION', 'Confirmar contrase??a:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Contrase??a actual:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_NEW', 'Nueva contrase??a:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'La nueva contrase??a debe tener un m??nimo de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'La confirmaci??n de la contrase??a debe ser igual a la nueva contrase??a.');

define('FORM_REQUIRED_INFORMATION', '* Informaci??n obligatoria');
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

define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'P??gina anterior');
define('PREVNEXT_TITLE_NEXT_PAGE', 'P??gina siguiente');
define('PREVNEXT_TITLE_PAGE_NO', 'P??gina %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Listado anterior de %d P??ginas');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Listado siguiente de %d P??ginas');
define('PREVNEXT_BUTTON_PREV', '[&laquo;&nbsp;Anterior]');
define('PREVNEXT_BUTTON_NEXT', '[Siguiente&nbsp;&raquo;]');

define('ARIA_PAGINATION_ROLE_LABEL_GENERAL','Paginaci??n');
define('ARIA_PAGINATION_ROLE_LABEL_FOR','%s Paginaci??n'); // eg: "Search results Pagination"
define('ARIA_PAGINATION_PREVIOUS_PAGE','Ir a la P??gina Anterior');
define('ARIA_PAGINATION_NEXT_PAGE','Ir a la P??gian Siguiente');
define('ARIA_PAGINATION_CURRENT_PAGE','Pagina Actual');
define('ARIA_PAGINATION_CURRENTLY_ON',', ahora en la p??gina %s');
define('ARIA_PAGINATION_GOTO','Ir a ');
define('ARIA_PAGINATION_PAGE_NUM','P??gina %s');
define('ARIA_PAGINATION_ELLIPSIS_PREVIOUS','Grupo anterior de p??ginas');
define('ARIA_PAGINATION_ELLIPSIS_NEXT','Grupo siguiente de p??ginas');
define('ARIA_PAGINATION_','');

define('TEXT_BASE_PRICE', 'Desde: ');

define('TEXT_CLICK_TO_ENLARGE', 'Ampliar imagen');
define('TEXT_CLOSE_WINDOW_IMAGE', 'Haga clic en la imagen para cerrarla');

define('TEXT_SORT_PRODUCTS', 'Ordenar productos ');
define('TEXT_DESCENDINGLY', 'en sentido descendente');
define('TEXT_ASCENDINGLY', 'en sentido ascendente');
define('TEXT_BY', ' por ');

define('TEXT_REVIEW_BY', 'por %s');
define('TEXT_REVIEW_DATE_ADDED', 'Fecha a??adida: %s');
define('TEXT_NO_REVIEWS', 'No hay comentarios.');

define('TEXT_NO_NEW_PRODUCTS', 'Nuevos productos estar??n muy pronto disponibles. Por favor, vis??tenos de nuevo.');

define('TEXT_UNKNOWN_TAX_RATE', 'Impuesto desconocido');

define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'AVISO: No se pudo localizar el archivo del idioma: ');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'La fecha de vencimiento de la tarjeta de cr??dito no es v??lido. Por favor revise la fecha e int??ntelo de nuevo.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'El n??mero de la tarjeta de cr??dito ingresado no es v??lido. Por favor revise el n??mero e int??ntelo de nuevo.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Los primeros cuatro d??gitos del n??mero ingresado son: %s. Si el n??mero es correcto, nosotros no aceptamos este tipo de tarjeta de cr??dito. Si est?? equivocado, por favor int??ntelo de nuevo.');

define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Cupones de descuento');
define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' FAQ');
define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Saldo ');
define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Cuenta');
define('GV_FAQ', TEXT_GV_NAME . ' FAQ');
define('ERROR_REDEEMED_AMOUNT', 'Enhorabuena, ha canjeado ');
define('ERROR_NO_REDEEM_CODE', 'No ha ingresado a ' . TEXT_GV_REDEEM . '.');
define('ERROR_NO_INVALID_REDEEM_GV', TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM.'inv??lido ');
define('TABLE_HEADING_CREDIT', 'Cr??ditos disponibles');

define('TEXT_SEND_OR_SPEND', 'Tiene un saldo positivo en su ' . TEXT_GV_NAME . ' cuenta. Puede comprar algo o envi??rselo a otro usuario. Para enviarlo, haga un click en el bot??n abajo.');
define('TEXT_BALANCE_IS', 'El saldo de su ' . TEXT_GV_NAME . ' es: ');
define('TEXT_AVAILABLE_BALANCE', 'Su Cuenta de' . TEXT_GV_NAME);

// payment method is GV/Discount
define('PAYMENT_METHOD_GV', 'Tarjeta Regalo/Cup??n');
define('PAYMENT_MODULE_GV', 'TR/CD');

define('TABLE_HEADING_CREDIT_PAYMENT', 'Cr??ditos disponibles');

//coupon redeem error messages (checkout payment)
define('TEXT_COUPON_LINK_TITLE', 'ver las condiciones del cup??n');
define('TEXT_INVALID_REDEEM_COUPON', 'C??digo de Cup??n "%s" no es v??lido');
define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Tiene que gastar un m??nimo de %2$s para canjear Cup??n "%1$s".');
define('TEXT_INVALID_COUPON_PRODUCT', 'El Cup??n "%1$s" no es v??lido para ning??n producto en el carro.');
define('TEXT_INVALID_COUPON_ORDER_LIMIT', 'Usted ha superado el m??ximo n??mero de pedidos (%2$u) con lo que se puede utilizar el Cup??n "%1$s".');
define('TEXT_INVALID_STARTDATE_COUPON', 'El Cup??n "%1$s" no est?? v??lido hasta %2$s.');
define('TEXT_INVALID_FINISHDATE_COUPON', 'El Cup??n "%1$s" no est?? v??lido (se caduc?? %2$s).');
define('TEXT_INVALID_USES_COUPON', 'El Cup??n "%1$s" ya ha sido utilizado la m??ximo n??mero de veces (%2$u).');//todo
define('TEXT_INVALID_USES_USER_COUPON', 'Usted ha utilizado el Cup??n "%1$s" el n??mero m??ximo de veces permitido por cliente (%2$u).');//todo
define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'El Cup??n "%s" no es v??lido para la direcci??n que ha elegida.');
define('TEXT_ERROR', 'Ha ocurrido un error');

define('TEXT_VALID_COUPON', '??Ha a??adido un Cup??n de Descuento a su pedido!');


// more info in place of buy now
define('MORE_INFO_TEXT','... m??s info');

// IP Address
define('TEXT_YOUR_IP_ADDRESS', 'Su direcci??n IP es: ');

//Generic Address Heading
define('HEADING_ADDRESS_INFORMATION', 'Direcci??n');

// cart contents
define('PRODUCTS_ORDER_QTY_TEXT_IN_CART', 'Cantidad en el carro: ');
define('PRODUCTS_ORDER_QTY_TEXT', 'A??adir al carro: ');
define('ARIA_QTY_ADD_TO_CART','Introduzca cantidad para a??adir al carro');
define('ARIA_EDIT_QTY_IN_CART','Editar cantidad en el carro');
define('ARIA_DELETE_ITEM_FROM_CART', 'Borrar este art??culo del carro');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
define('SUCCESS_ADDED_TO_CART_PRODUCT', 'El producto ha sido a??adido al carro ...');
// only for where multiple add to cart is used:
define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'El producto(s) seleccionado ha sido a??adido al carro ...');

define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// Shipping
define('TEXT_SHIPPING_WEIGHT','kg');
define('TEXT_SHIPPING_BOXES', 'Cajas');

// Cross Sell
define('TEXT_XSELL_PRODUCTS', 'Para este art??culo recomendamos...');
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
define('BOX_HEADING_BANNER_BOX2','Adem??s puede ver...');
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
define('WARNING_NO_FILE_UPLOADED', 'Advertencia:  no se carg?? el fichero.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '??xito:  fichero guardado correctamente.');
define('ERROR_FILE_NOT_SAVED', 'Error:  fichero no guardado.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error:  destino no escribible.');
define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: el destino no existe.');
define('ERROR_FILE_TOO_BIG', 'AVISO: El archivo es demasiado grande para cargarse!<br>El pedido puede procesarse pero, por favor, cont??ctenos para ayudarle');
// End iii added

define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'AVISO: Esta p??gina web no estar?? operativa por razones de mantenimiento: ');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'AVISO: Esta p??gina web no est?? operativa por razones de mantenimiento');

define('PRODUCTS_PRICE_IS_FREE_TEXT', '??Es gratis!');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Llame para saber el precio');
define('TEXT_CALL_FOR_PRICE', 'Cont??ctenos para saber el precio');

define('TEXT_INVALID_SELECTION',' Elij?? una Opci??n Inv??lida: ');
define('TEXT_ERROR_OPTION_FOR', ' En la Opci??n para: ');
define('TEXT_INVALID_USER_INPUT', 'Entrada del Usuario requerida<br>');

// product_listing
define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','M??n: ');
define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING', 'Unidades:');

define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','M??x:');
define('TEXT_PRODUCT_MODEL', 'Modelo: ');
define('TABLE_HEADING_MODEL', 'Modelo');

define('TEXT_PRODUCTS_MIX_OFF','*Mezclado DESHABILITADO');
define('TEXT_PRODUCTS_MIX_ON','*Mezclado HABILITADO');

define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br>*No puede mezclar las opciones de este producto para cumplir con la cantidad m??nima necesaria.*<br>');
define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*La combinaci??n de opciones est?? HABILITADA<br>');

define('ERROR_MAXIMUM_QTY', 'La cantidad a??adida al carro ha sido modificada - hay una restricci??n del m??ximo permitido. Ver este producto:<br>');
define('ERROR_CORRECTIONS_HEADING', 'Por favor corrija lo siguiente: <br>');
define('ERROR_QUANTITY_ADJUSTED', 'La cantidad a??adida al carro ha sido ajustada - El producto requerido no est?? disponible en cantidades fraccionadas. La cantidad de este producto es:<br>');
define('ERROR_QUANTITY_CHANGED_FROM', ', ha sido cambiado de: ');
define('ERROR_QUANTITY_CHANGED_TO', ' a ');

// Downloads Controller
define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','NOTA: Las descargas no est??n disponibles hasta que el pago haya sido comprobado');
define('TEXT_FILESIZE_BYTES', ' bytes');
define('TEXT_FILESIZE_KBS', ' KB');
define('TEXT_FILESIZE_MEGS', ' MB');
define('TEXT_FILESIZE_UNKNOWN', 'Desconocido');

// shopping cart errors
define('ERROR_PRODUCT', '<br>El articulo: ');
define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br>Lo sentimos pero este producto ha sido retirado de nuestro inventario.<br>Este producto ha sido eliminado de su carro. Cont??ctenos para m??s informaci??n.');
define('ERROR_PRODUCT_ATTRIBUTES','<br>El art??culo: ');
define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br>Lo sentimos pero las opciones elegidas para este producto han sido modificadas y no est??n disponibles actualmente.<br>Este producto ha sido eliminado de su carro.');
define('ERROR_PRODUCT_QUANTITY_MIN',' ... Errores de cantidad m??nima - ');
define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Errores de las cantidades de unidades - ');
define('ERROR_PRODUCT_OPTION_SELECTION','<br> ... Valores no v??lidos para la opci??n seleccionada ');
define('ERROR_PRODUCT_QUANTITY_ORDERED','<br>Usted pidi?? un total de: ');
define('ERROR_PRODUCT_QUANTITY_MAX',' ... Errores de cantidad m??xima - ');
define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',' tiene una restricci??n de cantidad m??nima. ');
define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Errores de las cantidades de unidades - ');
define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Errores de cantidad m??xima - ');

define('WARNING_SHOPPING_CART_COMBINED', 'AVISO: Para su comodidad, en el carro permanecen los productos a??adidos en su ??ltima visita. Por favor, revise su carro antes de finalizar la sesi??n.');
define('WARNING_PRODUCT_QUANTITY_ADJUSTED', 'La cantidad ha sido ajustada al nivel de stock actual. ');
define('OUT_OF_STOCK_CANT_CHECKOUT', 'Los productos marcados ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' no tienen stock o no hay suficientes para completar su pedido.<br>Cambie la cantidad de los productos marcados (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Gracias');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Los productos marcados ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' no tienen stock.<br>Completaremos el pedido lo antes posible. ');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
define('ERROR_CUSTOMERS_ID_INVALID', 'La informaci??n del usuario no puede ser validada!<br>Por favor, con??ctese o abra una nueva cuenta. ...');

define('TABLE_HEADING_FEATURED_PRODUCTS', 'Productos destacados  ');

define('TABLE_HEADING_NEW_PRODUCTS', 'Productos nuevos para %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Pr??ximos productos');
define('TABLE_HEADING_DATE_EXPECTED', 'Fecha de espera');
define('TABLE_HEADING_SPECIALS_INDEX', 'Ofertas del mes en %s');

define('CAPTION_UPCOMING_PRODUCTS', 'Pronto tendremos estos productos disponibles');

// meta tags special defines
define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT', 'Es gratis!');

define('ASK_A_QUESTION', 'Realice una Pregunta sobre este producto');

// customer login
define('TEXT_SHOWCASE_ONLY', 'Cont??ctenos');
// set for login for prices
define('TEXT_LOGIN_FOR_PRICE_PRICE', 'Precio no disponible');
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE', 'Entrar para ver el precio');
// set for show room only
define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM', 'S??lo Exposici??n');

// authorization pending
define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Precio no disponible');
define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'PENDIENTE DE APROBACION');
define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE', 'Entrar a la tienda');
define('TEXT_AUTHORIZATION_PENDING_CHECKOUT', 'Comprar No Habilitada - Pendiente de Aprobaci??n');

// text pricing
define('TEXT_CHARGES_WORD', 'Cargo Calculado:');
define('TEXT_PER_WORD','<br>Precio por palabra: ');
define('TEXT_WORDS_FREE',' Palabra(s) gratis ');
define('TEXT_CHARGES_LETTERS', 'Cargo Calculado:');
define('TEXT_PER_LETTER','<br>Precio por letra: ');
define('TEXT_LETTERS_FREE',' Letra(s) gratis ');
define('TEXT_ONETIME_CHARGES','*pago ??nico = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*pago ??nico = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Opci??n Descuentos al por mayor');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','CANTIDAD');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRECIO');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'En la opci??n Descuentos al por mayor se aplica un solo cargo');

// textarea attribute input fields
define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' caracteres m??ximos permitidos');

// Shipping Estimator
define('CART_SHIPPING_OPTIONS', 'Estimaci??n de los gastos del env??o:');
define('CART_SHIPPING_METHOD_TEXT', 'M??todos de env??o disponibles:');
define('CART_SHIPPING_METHOD_RATES', 'Tarifas:');
define('CART_SHIPPING_METHOD_TO', 'Enviar a: ');
define('CART_SHIPPING_METHOD_FREE_TEXT', 'Env??o gratis');
define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Descargas');
define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
define('CART_SHIPPING_METHOD_ADDRESS', 'Direcci??n:');
define('CART_ITEMS', 'Producto(s) en el carro: ');
define('ERROR_CART_UPDATE', '<strong>Por favor, actualice su pedido.</strong> ');
define('EMPTY_CART_TEXT_NO_QUOTE', '??Lo siento! ha excedido el tiempo de su sesi??n ... Por favor, actualice su carro para obtener el presupuesto de env??o ...');
define('CART_SHIPPING_QUOTE_CRITERIA', 'El precio de los portes depende del c??digo postal elegido:');

// multiple product add to cart
define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'A??adir: ');
define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'A??adir: ');
define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'A??adir: ');
define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'A??adir: ');
//moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Descuentos por Cantidades');
define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Descuentos por Cantidades Precio Nuevo');
define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Descuentos por Cantidades');
define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Los descuentos pueden variar en funci??n de las opciones elegidas');
define('TEXT_HEADER_DISCOUNTS_OFF', 'Descuentos por Cantidades no disponibles ...');

// sort order titles for dropdowns
define('PULL_DOWN_ALL_RESET','- RESETEAR - ');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Nombre del producto');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Productos - Descripci??n');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Precio - bajo a alto');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Precio - alto a bajo');
define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Modelo');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Fecha A??adida - Nueva a Antigua');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Fecha A??adida - Antigua a Nueva');

// downloads module defines
define('TABLE_HEADING_DOWNLOAD_DATE', 'Enlace Caduca');
define('TABLE_HEADING_DOWNLOAD_COUNT', 'Quedan');
define('HEADING_DOWNLOAD', 'Para bajar los archivos, haga click en el bot??n de Descarga y elija "Guardar en el disco" del men??.');
define('TABLE_HEADING_DOWNLOAD_FILENAME', 'Nombre del archivo');
define('TABLE_HEADING_PRODUCT_NAME', 'Nombre del productos');
define('TABLE_HEADING_BYTE_SIZE', 'Tama??o del archivo');
define('TEXT_DOWNLOADS_UNLIMITED', 'Ilimitado');
define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
define('PAYMENT_JAVASCRIPT_DISABLED', 'No puede continuar con el proceso de compra porque Javscript est?? desactivado en su navegador. Es imprescindible activarlo para completar la compra.');

// table headings for cart display and upcoming products
define('TABLE_HEADING_QUANTITY', 'Cantidad');
define('TABLE_HEADING_PRODUCTS', 'Art??culo');
define('TABLE_HEADING_TOTAL', 'Total');

// create account - login shared
define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Privacidad');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Por favor, acepte nuestra declaraci??n de privacidad marcando la siguiente casilla. Puede leer la declaraci??n de privacidad <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">aqu??</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'He le??do y acepto la declaraci??n de privacidad.');
define('TABLE_HEADING_ADDRESS_DETAILS', 'Direcci??n');
define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Datos de contacto adicionales');
define('TABLE_HEADING_DATE_OF_BIRTH', 'Confirma tu edad');
define('TABLE_HEADING_LOGIN_DETAILS', 'Datos de Login');
define('TABLE_HEADING_REFERRAL_DETAILS', '??C??mo supo de nosotros?');

define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Lo sentimos, pero no tratamos con direcciones de env??o/facturaci??n en "%s". Por favor, cont??ctenos.');

define('ENTRY_EMAIL_PREFERENCE', 'Bolet??n y preferencias de email');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY', 'Solo-TEXTO');
define('EMAIL_SEND_FAILED','ERROR: No se ha podido enviar el email a : "%s" <%s> con sujeto: "%s"');

define('DB_ERROR_NOT_CONNECTED', 'Error - No se ha podido conectar con la base de datos');
define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="https://docs.zen-cart.com/user/troubleshooting/error_71_maintenance_required/" rel="noopener" target="_blank">ERROR 0071: Parece que hay un problema con la base de datos. Precisa mantenimiento.</a>');

// EZ-PAGES Alerts
define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'AVISO: EZ-PAGES ENCABEZAMIENTO - Activado s??lo para la IP del Administrador.');
define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'AVISO: EZ-PAGES PIE - Activado s??lo para la IP del Administrador.');
define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'AVISO: EZ-PAGES CAJA LATERAL - Activado s??lo para la IP del Administrador.');

// extra product listing sorter
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Art??culos que empiezan por ...');
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
