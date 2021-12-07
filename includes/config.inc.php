<?php 

////////////////////////
///Valores URI
////////////////////////
define('URI', $_SERVER['REQUEST_URI']);
define('BASE', (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' );
define('RRSS_FACEBOOK', 'https://www.facebook.com/wgsaoficial/');
define('RRSS_INSTAGRAM', 'https://www.instagram.com/wgsaoficial/');
define('RRSS_LINKEDIN', 'https://www.linkedin.com/company/wgsa/');
define('WHATSAPP', '5491131798552');
define('ENVIRONMENT', 'local');

////////////////////////
///API KEY RECAPTCHA
////////////////////////
define('RECAPTCHA_KEY_SITE', '6LdJXzsdAAAAAAYc71tTyUAAeyY5Z8ijDj_1XlyS');
define('RECAPTCHA_KEY_SECRET', '6LdJXzsdAAAAAJMdf7m1XvFPyKn45LaVZ-c2r2Tn');

////////////////////////
///API KEY PERFIT
////////////////////////
define('API_KEY_PERFIT', 'wgsa-kuPOeWLeHzb5HNPWngCyk2Pnt0xZqWC8');
define('LIST_PERFIT', 2); // Lista de Perfit para newsletters
define('LIST_PERFIT_SEGUROS', 3); // Lista de Perfit para consultas de seguros

////////////////////////
///Valores de DB Remota
////////////////////////
define('DSN_APP', 'mysql:host=localhost;dbname=lc_wg;charset=utf8;port:3306');
define('DB_USER_APP', 'homestead');
define('DB_PASS_APP', 'secret');

//////////////////////////////
///Valores de Envio de emails
//////////////////////////////
define('SMTP', '0.0.0.0'); 
define('USERNAME', 'testuser');
define('PASSWORD', 'testpwd'); 
define('EMAIL_CLIENT', 'info@wgsa.com.ar');
define('NAME_CLIENT', 'WGSA Seguros');
define('TEL_CLIENT', '2392-544127');
define('WAP_CLIENT', '11-55163751');
define('EMAIL_BCC', '');
define('EMAIL_PORT', 1025);
define('EMAIL_NAME', 'WGSA Seguros');
define('EMAIL_SUBJECT', 'Gracias por tu contacto');
define('EMAIL_CHARSET', 'utf-8');
define('EMAIL_ENCODING', 'quoted printable');

?>