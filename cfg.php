<?php
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  LICENSE (LICENCA): GNU GPL v2
////////
////////  Arquivo "cfg.php".
////////
////////  Copyright (c) 2015, 2023 Marcio Barbado, Jr.
////////  Sao Paulo, Brasil
////////
////////  <http://www.bdslabs.com.br/marcio/>
////////
////////	This program is free software; you can redistribute it
////////	and/or modify it under the terms of the GNU General
////////	Public License as published by the Free Software
////////	Foundation; version 2 of the License.
////////
////////	This program is distributed in the hope that it will be
////////	useful, but WITHOUT ANY WARRANTY; without even the
////////	implied warranty of MERCHANTABILITY or FITNESS FOR A
////////	PARTICULAR PURPOSE.  See the GNU General Public License
////////	for more details.
////////
////////	You should have received a copy of the GNU General
////////	Public License along with this program; if not, write
////////	to the Free Software Foundation, Inc., 59 Temple Place
////////	- Suite 330, Boston, MA  02111-1307, USA.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
////////	This is a config file (thus CFG) written in a such a
////////	way it cannot be directly accessed. Eh este exatamente
////////	o papel desta primeira estrutura "if" abaixo.
//////////////////////////////////////////////////////////////////////
  if ($_SERVER['SCRIPT_FILENAME'] == __FILE__)
    {
      header('Status: 404 Not Found', TRUE, 404);

      exit();
    }

//////////////////////////////////////////////////////////////////////
////////	DEFINICOES DE CONSTANTES (CONFIGURACOES)
////////
////////	CFG_FOLDER
////////	By default, this constant will automatically detect
////////	and store its location.
////////
////////	CFG_REMOTEHOST
////////	By default, this constant will automatically detect
////////	and store client side user agent's IP address.
////////
////////	CFG_REMOTEPORT
////////	By default, this constant will automatically detect
////////	and store client side's port being used.
////////
////////	CFG_PACKET
////////	It has 16 bytes of data.
////////	The first 14 bytes received (position 0 to 13) always
////////	form the ethernet header, and the remaining bytes are
////////	the IP datagram.
////////	Position 14 byte: tells whether it's IPv4.
////////	For packet crafting, \x00 is 0.
////////
////////	CFG_PHPVERSION
////////
////////	CFG_ZENDVERSION	  
////////
////////	CFG_MAXTIME_SOCKETCONNECT
////////	Reasonable value in seconds for a network socket
////////	creation.
////////
////////	CFG_MAXTIME_PING
////////	Reasonable value in seconds for a ping time.
//////////////////////////////////////////////////////////////////////

  // define('CFG_APACHEVERSION', apache_get_version());

  define('CFG_FOLDER', substr(getenv('REQUEST_URI') === FALSE ? $_SERVER['REQUEST_URI'] : getenv('REQUEST_URI'), 0, strpos(getenv('REQUEST_URI') === FALSE ? $_SERVER['REQUEST_URI'] : getenv('REQUEST_URI'), "/", 1)));

  define('CFG_HTML_METACOPYRIGHT', 'Copyright (c) 2006&ndash;2019 Marcio Barbado Junior. Some rights reserved.');

  // define('CFG_HTML_METADESCRIPTION', 'Desenvolvimento de software e hardware para InfoSec.');
  define('CFG_HTML_METADESCRIPTION', 'information security');

  // define('CFG_HTML_R1C3', 'LABORAT&Oacute;RIOS');
  define('CFG_HTML_R1C3', 'BASEMENT');

  // define('CFG_HTML_R1C4', 'CONTATO');

  // define('CFG_HTML_R5C11', 'PRODUTOS');
  define('CFG_HTML_R5C11', 'RESEARCH');

  // define('CFG_HTML_R5C12', 'SERVI&Ccedil;OS');
  define('CFG_HTML_R5C12', 'DEVELOPMENT');

  // define('CFG_HTML_R5C13', 'P&amp;D');
  define('CFG_HTML_R5C13', 'ABOUT');

  // define('CFG_HTML_R5C14', 'CLIENTES');

  // define('CFG_HTML_TITLE', '_bds Labs. | Desenvolvimento de Sistemas orientados a Seguran&ccedil;a da Informa&ccedil;&atilde;o');
  define('CFG_HTML_TITLE', '_bds Labs. | ahead the prompt information security');

  define('CFG_MAXTIME_PING', 1);

  define('CFG_MAXTIME_SOCKETCONNECT', 3);

  define('CFG_PACKET', '\x08\x00\x7d\x4b\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x45\x00');

  define('CFG_PHPVERSION', defined('PHP_VERSION_ID') ? PHP_VERSION_ID : phpversion());

  define('CFG_REMOTEPORT', getenv('REMOTE_PORT') === FALSE ? $_SERVER['REMOTE_PORT'] : getenv('REMOTE_PORT'));

  define('CFG_REMOTEHOST', getenv('REMOTE_ADDR') === FALSE ? $_SERVER['REMOTE_ADDR'] : getenv('REMOTE_ADDR'));

  define('CFG_ZENDVERSION', zend_version());

?>

