<?php
/**
* Copyright 2022 torvista (https://github.com/torvista/Zen_Cart-Spanish_Language_Pack)
* Zen Cart German Specific
* @copyright Copyright 2003-2022 Zen Cart Development Team
* Zen Cart German Version - www.zen-cart-pro.at
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: paypalwpp.php 2022-12-06 12:57:24Z webchills $
*/

define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_EC', 'PayPal Express');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PRO20', 'PayPal Express (Pro 2.0 Payflow Edition) (UK)');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_EC', 'PayPal Payflow Pro - Gateway');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_GATEWAY', 'PayPal Express via Payflow Pro');

if (IS_ADMIN_FLAG === true) {
if (!defined('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE')) define('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE', 'undefined');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_DESCRIPTION', '<strong>PayPal Express Checkout</strong>%s<br><br><img src="images/checkout-logo-large-de.png" alt="PayPal Express"/><br><br>Dieses Modul ist eine <b>NVP/SOAP API-Integration</b>.<br>Infos zum Erstellen der API Zugangsdaten (<b>API Berechtigung mit Signatur</b>) finden Sie <a href="https://www.paypal.com/at/smarthelp/article/wie-fordere-ich-eine-api-berechtigung-mit-signatur-oder-zertifikat-an-faq3196" target=":blank">hier</a>.<br><br>' . (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' ? '<a href="https://manager.paypal.com/loginPage.do?partner=ZenCart" target="_blank">Verwalten Sie Ihren PayPal Account.</a>' : '<a href="https://www.paypal.com/de/webapps/mpp/merchant" target="_blank">Verwalten Sie Ihren PayPal Account.</a>') . '<br><br><font color="green">Konfiguration Anleitung:</font><br><span class="alert">1. </span><a href="https://www.paypal.com/de/webapps/mpp/merchant" target="_blank">Erstellen Sie einen PayPal Account.</a><br>' . 
(defined('MODULE_PAYMENT_PAYPALWPP_STATUS') ? '' : '... und drücken auf den Button "Installieren" um PayPal Express Checkout zu aktivieren.</br>') . 
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' && (!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE == '') ? '<span class="alert">2. </span><strong>API Zugangsdaten fehlen!</strong> Dieses Modul benutzt die <strong>API Signatur</strong> Option -- Bitte geben Sie in die unteren Felder Ihren Benutzernamen, Passwort und die Signatur ein.' : (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' && (!defined('MODULE_PAYMENT_PAYPALWPP_PFUSER') || MODULE_PAYMENT_PAYPALWPP_PFUSER == '') ? '<span class="alert">2. </span><strong>PAYFLOW Credentials</strong> Dieses Modul benötigt Ihre <strong>PAYFLOW Partner Daten</strong>. Bitte geben Sie diese in die Felder unten ein. Diese Daten werden für den reibungslosen Transaktionsablauf benötigt..' : '<span class="alert">2. </span>Bitte stellen Sie sicher, dass Sie die notwendigen Daten für dieses Modul eingegeben haben.') ) . 
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' ? '<br><span class="alert">3. </span>Aktivieren Sie in Ihrem Paypal Account <strong>Sofortige Zehlungsbenachrichtung</strong>:<br>unter Mein Profil wählen Sie <em>Sofortige Zahlungsbenachrichtung Einstellungen</em><ul style="margin-top: 0.5;"><li>und machen einen Haken in das dazugehörige Kästchen</li><li>Falls nicht bereits eine URL angegeben ist, geben Sie bitte folgende URL ein:<br>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</li></ul>' : '') . 
'<hr><font color="green"><strong>Voraussetzungen:</strong></font><br>*<strong>CURL</strong> wird für die Kommunikation mit dem Gateway genutzt und muss deshalb zwingend auf Ihrem Webspace vorhanden und aktiviert sein. Falls Sie einen CURL Proxy verwenden (NICHT empfohlen!), konfigurieren Sie diesen bitte unter Konfiguration -> Mein Shop<hr>');
}

define('MODULE_PAYMENT_PAYPALWPP_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_TITLE', 'Tarjeta de Crédito');
define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TITLE', 'PayPal');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_EC_HEADER', 'Compre rápido y seguro con PayPal:');
define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TYPE', 'PayPal Express Checkout');
define('MODULE_PAYMENT_PAYPALWPP_DP_TEXT_TYPE', 'PayPal Direct Payment');
define('MODULE_PAYMENT_PAYPALWPP_PF_TEXT_TYPE', 'Tarjeta de crédito'); //(used for payflow transactions)
define('MODULE_PAYMENT_PAYPALWPP_ERROR_HEADING', 'Lo sentimos pero no podemos procesar su tarjeta.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CARD_ERROR', 'Hubo un error en los datos que insertó. Revíselos e intente otra vez.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Tarjeta de crédito Nombre de pila:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_LASTNAME', ' Tarjeta de crédito Apellidos:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_OWNER', 'Nombre del propietario de la tarjeta:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_TYPE', 'Tipo de tarjeta de crédito:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_NUMBER', 'Número de la tarjeta de crédito:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de caducidad:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_ISSUE', 'Fecha de emisión:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER', ' Número CVV:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(en el reverso de la tarjeta)');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_DECLINED', 'Su tarjeta ha sido rechazada. Utilice otra tarjeta o póngase en contacto con su banco para más información');
define('MODULE_PAYMENT_PAYPALWPP_INVALID_RESPONSE', 'No podemos procesar su pedido. Inténtelo otra vez, elija un método de pago alternativo o póngase en contacto con la tienda para obtener asistencia.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_ERROR', 'Ocurrió un error cuando intentamos contactar con el procesador de pagos. Inténtelo otra vez, elija un método de pago alternativo o póngase en contacto con la tienda para obtener asistencia.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_MESSAGE', 'Estimado Propietario de la tienda,' . "\n" . 'Un error ocurrió en el intento de iniciar el proceso de validación del pago. Solamente se mostró el número del error al cliente. Los detalles del error se muestran abajo.' . "\n\n");
define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_SUBJECT', 'AVISO: Error PayPal Express Checkout');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADDR_ERROR', 'La dirección no es válida o no coincide con nuestra información. Corrija o elija otra dirección e intente otra vez.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CONFIRMEDADDR_ERROR', 'La dirección que seleccionó en PayPal no es una dirección confirmada. Vuelva a PayPal y elija o añada una dirección confirmada e intente otra vez.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal no pudo pagar esta transacción. Elija otro método de pago o compruebe las opciones de pago de su cuenta PayPal antes de seguir.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_PAYPAL_DECLINED', 'Disculpe las molestias. PayPal ha rechazado la transacción y nos ha comunicado que debería ponerse en contacto con Atención al Cliente Paypal para más información sobre el problema. Para completar su pedido ahora, debe usar otro método de pago.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ERROR', 'Ocurrió un error cuando intentamos procesar su tarjeta de crédito. Inténtelo otra vez, elija un método de pago alternativo o póngase en contacto con la tienda para obtener asistencia.');
define('MODULE_PAYMENT_PAYPALWPP_FUNDING_ERROR','Problema con el fuente de fondos; ir a paypal.com para hacer un pago directamente a ' . STORE_OWNER_EMAIL_ADDRESS); 
define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_CARD', 'Disculpe pero no aceptamos el tipo de tarjeta que introduzco. Por favor, utilice otra tarjeta.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_LOGIN', 'Hubo un problema en la validación de su cuenta. Inténtelo de nuevo.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_OWNER', '* El nombre del propietario de la tarjeta debe tener al menos'. CC_OWNER_MIN_LENGTH . ' caracteres.\n');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_NUMBER', '* El número de la tarjeta de crédito debe tener al menos' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVS_FAILURE_TEXT', 'AVISO: Fallo de la verificación de la dirección. ');
define('MODULE_PAYMENT_PAYPALWPP_ERROR_CVV_FAILURE_TEXT', 'ALERT: Fallo de la verificación del código CVV. ');
define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVSCVV_PROBLEM_TEXT', 'El pedido está pendiente de verificación por la tienda.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_UNILATERAL', ' -  Necesita registrar su PayPal API Credentials para poder hacer procesos avanzados de transacciones.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_STATE_ERROR', 'El estado asignado a su cuenta no es válido. Entre en su cuenta y cámbielo. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Disculpe las molestias. No podemos seguir con el pago porque la cuenta PayPal de la tienda no es PayPal Website Payments Pro ni han contratado PayPal gateway services. Elija un método de pago alternativo para su pedido.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Disculpe las molestias. Los parámetros de autentificación de la cuenta PayPal no han sido configurados o los parámetros API no son correctos. No podemos completar la transacción. Por favor, notifique a la tienda sobre este problema. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Lo sentimos - la cuenta PayPal de la tienda tiene base en un país donde actualmente Website Payments Pro no está disponible. Elija un método de pago alternativo para su pedido.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTA: ¡El módulo no está configurado todavía)</span>');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_GETDETAILS_ERROR', 'Hubo un problema recuperando los detalles de la transacción.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_TRANSSEARCH_ERROR', 'Hubo un problema para encontrar transacciones que coincidan con los criterios especificados.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_ERROR', 'Hubo un problema en cancelar la transacción. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_ERROR', 'Hubo un problema en la devolución de la cantidad especificado. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_ERROR', 'Hubo un problema en la autorización de la transacción. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_ERROR', 'Hubo un problema capturando la transacción. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUNDFULL_ERROR', 'Su petición de devolución fue rechazada por PayPal.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_REFUND_AMOUNT', 'Solicitó una devolución parcial pero no especificó la cantidad.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Solicitó una devolución total pero no marcó la casilla para confirmarlo.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_AUTH_AMOUNT', 'Solicitó un autorización pero no especificó una cantidad.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_CAPTURE_AMOUNT', 'Solicitó una captura de fondos pero no especificó una cantidad.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Confirmar');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_ERROR', 'Solicitó una cancelación pero no marcó la casilla de confirmación.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Confirmar');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_CONFIRM_ERROR', 'Solicitó un autorización pero no marcó la casilla de confirmación.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Solicitó una captura de fondos pero no marcó la casilla de confirmación.');

define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_INITIATED', 'PayPal devolución para %s iniciada. ID Transacción: %s. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Historial de Estatus del Pedido/Comentario.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_INITIATED', 'PayPal Autorización para %s iniciada. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Historial de Estatus del Pedido/Comentario.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_INITIATED', 'PayPal Captura para %s iniciada. ID Comprobante: %s. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Historial de Estatus del Pedido/Comentario.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_INITIATED', 'PayPal petición de Cancelación iniciada. ID Transacción: %s. Refresque la pantalla para ver los detalles de confirmación actualizados en el apartado Historial de Estatus del Pedido/Comentario.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_API_ERROR', 'Hubo un error en la transacción. Diríjase a la guía del API o los archivos de transacciones para información detallada.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_ZONE_ERROR', 'Disculpe las molestias pero actualmente no podemos procesar pedidos utilizando este método de pago desde la zona geográfica que especificó en su dirección de cuenta. Elija otro método de pago. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ORDER_ALREADY_PLACED_ERROR', 'Parece que el pedido fue enviado dos veces. Revise Mi Cuenta para ver los detalles del pedido. Utilice el formulario Contáctenos si el pedido no aparece en la historia, pero ha sido pagado desde su cuenta PayPal. ');

define('MODULE_PAYMENT_PAYPALWPP_TEXT_BUTTON_ALTTEXT', 'Haga clic aquí para pagar vía PayPal Express Checkout');

// EC buttons -- Do not change these values:
define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/webstatic/de_DE/i/de-btn-expresscheckout.gif');
define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG_MOBILE', 'https://www.paypalobjects.com/webstatic/de_DE/i/de-btn-expresscheckout.gif');
define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_SM_IMG', 'https://www.paypalobjects.com/webstatic/de_DE/i/de-btn-expresscheckout.gif');
define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/webstatic/de_DE/i/de-pp-logo-100px.png');
define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_TXT', 'Einkaufen mit PayPal');
define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', '');

////////////////////////////////////////
// Styling of the PayPal Payment Page. Uncomment to customize.
// A BETTER WAY, HOWEVER, is to simply create a Custom Page Style at PayPal and mark it as Primary or name it in your Zen Cart PayPal EC settings.
//define('MODULE_PAYMENT_PAYPALWPP_HEADER_IMAGE', '');  // this should be an HTTPS URL to the image file
//define('MODULE_PAYMENT_PAYPALWPP_PAGECOLOR', '');  // 6-digit hex value
////// Styling of pseudo cart contents display section
//define('MODULE_PAYMENT_PAYPAL_LOGO_IMAGE', ''); // https path to your customized logo
//define('MODULE_PAYMENT_PAYPAL_CART_BORDER_COLOR', ''); // 6-digit hex value
////////////////////////////////////////


// These are used for displaying raw transaction details in the Admin area:
define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Nombre');
define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Apellidos:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Empresa:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Dirección:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Calle:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Localidad:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Provincia:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Código postal:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'País:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Email del Pagador:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'ID Ebay:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'ID del Pagador:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Estado del Pagador:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Estatus de la Dirección:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Tipo de Pago:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Estatus del Pago:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Razón Pendiente:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Pedido:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Fecha de Pago:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Moneda:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Cantidad Bruta:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Tarifa del Pago:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Tasa de Cambio:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Productos en el Carro:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Tipo de Transacción:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID de transacción:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'ID de Transacción Padre:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Devoluciones</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Si quiere devolver este pedido en su totalidad, pinche aquí:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Hacer una Devolución Total');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Hacer una Devolución Parcial');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... o inserte la cantidad parcial ');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Inserte la ');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'de la devolución aquí y haga clic en Hacer Devolución Parcial');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '*No está permitido solicitar una Devolución Total después de tramitar una Devolución Parcial. <br />*Devoluciones parciales múltiple están permitidas hasta el valor total del pedido.');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Nota para mostrar al cliente:</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Devuelto por el administrador de la tienda.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK', 'Confirmar: ');
define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Comentarios del Sistema: ');
define('MODULE_PAYMENT_PAYPALWPP_ENTRY_PROTECTIONELIG', 'Elegible para Protección:');

define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Autorizaciones</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Si quiere autorizar parte de este pedido inserte la cantidad aquí:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Hacer una Autorización');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');

define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Captura de Autorizaciones</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Si quiere capturar todo o un valor parcial de la cantidad autorizada para este pedido, inserte la Cantidad de Captura y elija si es el último para este pedido. Marque la casilla de Confirmación antes de hacer la solicitación.<br />');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Hacer una Captura');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Cantidad para capturar:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', '¿Es esta la captura final?');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong> Nota para  mostrar al cliente:</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Gracias por el pedido.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Confirmar: ');

define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Cancelación de Autorizaciones</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Si quiere cancelar una autorización, inserte el ID de autorización aquí y confirme:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong> Nota para  mostrar al cliente:</strong>');    
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Gracias por su interés en nuestros productos.');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Hacer una Cancelación');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Estatus Trans.:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Código Aut.:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS Dirección Coincide:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS CP Coincide:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2 Coincide:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Días hasta vencimiento:');

// this text is used to announce the username/password when the module creates the customer account and emails data to them:
define('EMAIL_EC_ACCOUNT_INFORMATION', 'Sus datos para acceder a su cuenta (para revisar la compra) son los siguientes:');

define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Cargos únicos relacionados con ');
define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Recargos');
define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Cargos de manipulación y otros recargos');
define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Descuentos');
define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Créditos aplicados, incluyendo Cupones de Descuento, Tarjetas Regalo etc.');
define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'Estado de Pago en Revisión de Fraude: ');
define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Este es una notificación automática para avisarse de que PayPal ha marcado el pago de un pedido nuevo para ser revisado por el Equipo de Fraude. Suele tardar no más que 36 horas. Recomendamos que NO ENVÍE el pedido hasta que el pago haya sido revisado. Puede ver el estado de este pedido en su cuenta PayPal, Transacciones Recientes');

define('MODULES_PAYMENT_PAYPALWPP_TEXT_BLANK_ADDRESS', 'PROBLEMA: PayPal ha suministrado una dirección en blanco inesperada. <br />Para poder completar la compra, tiene que registrar en la tienda y añadir su dirección. Pinche en el botón abajo para abrir una cuenta.<br />A continuación puede elegir PayPal otra vez como método de pago. Perdone la molestia. Si todavía tiene un problema en terminar el pedido, contáctenos para ayuda. Gracias.');

define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'Todos los artículos en el carro (ver los detalles en la tienda y en el comprobante de la tienda).');
define('MODULES_PAYMENT_PAYPALWPP_MESSAGE_STACK_CHECKOUT_SHIPPING', 'Está pagando con PayPal y utilizando una dirección de envío registrada en PayPal.<br>Queremos asegurarnos de que esta dirección de envío es correcta, por lo que le hemos redirigido de nuevo a esta página.<br>Por favor, compruebe la dirección de envío y cámbiela si es necesario.<br>¿Dirección correcta? Bien!<br>Haga clic en continuar en la parte inferior derecha y, a continuación, confirme de nuevo en el último paso haciendo clic en el botón Comprar.<br>El pago de PayPal y el pedido no se procesarán hasta que confirme el pedido de esta forma.');