<?php
/**
 * Authorize.net SIM Payment Module
 *
 * Copyright 2022 torvista (https://github.com/torvista/Zen_Cart-Spanish_Language_Pack)
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
 */

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net (SIM)');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Tarjeta de Crédito'); // Título del método de pago que ve el cliente


  if (defined('MODULE_PAYMENT_AUTHORIZENET_STATUS') && MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br /><br />Info de Pruebas:<br /><b>Números de prueba de tarjetas de crédito:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Nota:</b> Estos números serán denegados en modo Producción y aprobados en modo Test. Puede usar cualquier fecha futura y cualquier código de seguidad CVV de tres dígitos (cuatro para AMEX).<br /><br /><b>Número para comprobar denegación:</b><br /><br />Tarjeta #: 4222222222222<br /><br />Se puede usar este número de tarjeta para generar mensajes de denegación' : '') . '<br /><br /><strong>Parámetros</strong><br />Puede dejar en blanco las URLs de "response" y "receipt" y "relay" en su perfil de Merchant Authorize.net, o puede apuntar el URL "relay" a https://su_dominio.com/foldername/index.php?main_page=checkout_process<br><br>If you are having problems with this, see <a href="https://docs.zen-cart.com/user/modules/authorizenet_sim/" rel="noreferrer noopener" target="_blank">the SIM Setup FAQ article</a> for detailed setup instructions.');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Haga clic aquí para abrir una cuenta</a><br /><br /><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Haga clic aquí para identificarse en la zona de Merchants</a><br /><br /><strong>Requerimientos:</strong><br /><hr />*<strong>Cuenta Authorize.net</strong> (vea el enlace arriba para abrirla)<br />*<strong>nombre de usuario de Authorize.net y clave de transacción</strong> disponible en la zona Merchant <br><br>Ver <a href="https://docs.zen-cart.com/user/modules/authorizenet_sim/" rel="noreferrer noopener" target="_blank">SIM Setup FAQ</a> para más información.');
  }

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Tipo:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Propietario de la tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'Número de la tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de caducidad de la tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'Número CVV :');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', '¿Qué es esto?');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* El nombre del propietario de la tarjeta debe tener al menos ' . CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* El número de la tarjeta de crédito debe tener al menos ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* Tecle el número de 3 ó 4 dígitos de la cara trasera de la tarjeta.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Hubo un error al procesar su tarjeta de crédito. Por favor, inténtelo otra vez.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Su tarjeta de crédito fue rechazada. Por favor, inténtelo con otra tarjeta o contacte con su banco para más información.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', '¡Error en la tarjeta de crédito!');
