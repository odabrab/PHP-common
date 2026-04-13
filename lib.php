<?php
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  MAIN PHP LIBRARY
////////
////////  File name:     lib.php.
////////  Author:        Marcio Barbado, Jr.
////////  Contact:       <marcio.barbado@bdslabs.com.br>.
////////  Place:         S&atilde;o Paulo, Brasil.
////////  Copyright (c): 2025, and 2026.
////////  License:       GNU GPL v2.
////////
////////  This program is free software; you can redistribute it
////////  and/or modify it under the terms of the GNU General
////////  Public License as published by the Free Software
////////  Foundation; version 2 of the License.
////////
////////  This program is distributed in the hope that it will be
////////  useful, but WITHOUT ANY WARRANTY; without even the
////////  implied warranty of MERCHANTABILITY or FITNESS FOR A
////////  PARTICULAR PURPOSE.  See the GNU General Public License
////////  for more details.
////////
////////  You should have received a copy of the GNU General
////////  Public License along with this program; if not, write
////////  to the Free Software Foundation, Inc., 59 Temple Place
////////  - Suite 330, Boston, MA  02111-1307, USA.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  STRUCTURE OF THIS FILE'S CONTENT
////////
////////  In the structure represented below, (CC) denotes a comment
////////  and code block, and (CO) denotes a comment-only block.
////////
////////  (CO) USAGE
////////    (CC) USAGE-ENFORCEMENT PRELIMINARY ROUTINE
////////    (CC) LIBRARY(IES)
////////    (CO) FUNCTION(S) AVAILABLE
////////--------------------------------------------------------------
////////      (CC) FUNCTION FUN_INT_TEMPLATE()
////////        (CO) FUNCTION FUN_INT_TEMPLATE() DECLARATION(S) AND
////////             INITIALIZATION(S)
////////          (CC) VARIABLE VAR_ADT_SOMETHING
////////          (CO) FUNCTION FUN_INT_TEMPLATE() DECLARATION(S) AND
////////               INITIALIZATION(S), CONSTRAINED
////////        (CC) FUNCTION FUN_INT_TEMPLATE() BODY
////////          (CC) FUNCTION FUN_INT_TEMPLATE() ENDING
////////--------------------------------------------------------------
////////      (CC) FUNCTION FUN_ARR_GETLOCALFILE()
////////        (CC) FUNCTION FUN_ARR_GETLOCALFILE() DECLARATION(S)
////////             AND INITIALIZATION(S)
////////          (CC) FUNCTION FUN_ARR_GETLOCALFILE() DECLARATION(S)
////////               AND INITIALIZATION(S), CONSTRAINED
////////        (CC) FUNCTION FUN_ARR_GETLOCALFILE() BODY
////////          (CC) FUNCTION FUN_ARR_GETLOCALFILE() ENDING
////////--------------------------------------------------------------
////////      (CC) FUNCTION FUN_ARR_NETWORK()
////////        (CC) FUNCTION FUN_ARR_NETWORK() DECLARATION(S) AND
////////             INITIALIZATION(S)
////////          (CC) FUNCTION FUN_ARR_NETWORK() DECLARATION(S) AND
////////               INITIALIZATION(S), CONSTRAINED
////////        (CC) FUNCTION FUN_ARR_NETWORK() BODY
////////          (CC) FUNCTION FUN_ARR_NETWORK() ENDING
////////--------------------------------------------------------------
////////      (CC) FUNCTION FUN_ARR_SHOWNEWS()
////////        (CC) FUNCTION FUN_ARR_SHOWNEWS() DECLARATION(S) AND
////////             INITIALIZATION(S)
////////          (CC) FUNCTION FUN_ARR_SHOWNEWS() DECLARATION(S) AND
////////               INITIALIZATION(S), CONSTRAINED
////////        (CC) FUNCTION FUN_ARR_SHOWNEWS() BODY
////////          (CC) FUNCTION FUN_ARR_SHOWNEWS() ENDING
////////--------------------------------------------------------------
////////      (CC) FUNCTION FUN_ARR_SHOWPRODUCTS()
////////        (CC) FUNCTION FUN_ARR_SHOWPRODUCTS() DECLARATION(S)
////////             AND INITIALIZATION(S)
////////          (CC) FUNCTION FUN_ARR_SHOWPRODUCTS() DECLARATION(S)
////////               AND INITIALIZATION(S), CONSTRAINED
////////        (CC) FUNCTION FUN_ARR_SHOWPRODUCTS() BODY
////////          (CC) FUNCTION FUN_ARR_SHOWPRODUCTS() ENDING
////////--------------------------------------------------------------
////////      (CC) FUNCTION FUN_BOO_BLOCKCONTROL()
////////        (CC) FUNCTION FUN_BOO_BLOCKCONTROL() DECLARATION(S)
////////             AND INITIALIZATION(S)
////////          (CC) FUNCTION FUN_BOO_BLOCKCONTROL() DECLARATION(S)
////////               AND INITIALIZATION(S), CONSTRAINED
////////        (CC) FUNCTION FUN_BOO_BLOCKCONTROL() BODY
////////          (CC) FUNCTION FUN_BOO_BLOCKCONTROL() ENDING
////////--------------------------------------------------------------
////////      (CC) FUNCTION FUN_BOO_ISPEARINSTALLED()
////////        (CC) FUNCTION FUN_BOO_ISPEARINSTALLED() DECLARATION(S)
////////             AND INITIALIZATION(S)
////////          (CC) FUNCTION FUN_BOO_ISPEARINSTALLED() DECLARATION(S)
////////               AND INITIALIZATION(S), CONSTRAINED
////////        (CC) FUNCTION FUN_BOO_ISPEARINSTALLED() BODY
////////          (CC) FUNCTION FUN_BOO_ISPEARINSTALLED() ENDING
////////--------------------------------------------------------------
////////      (CC) FUNCTION FUN_BOO_RMDIRECTORYORFILE()
////////        (CC) FUNCTION FUN_BOO_RMDIRECTORYORFILE()
////////             DECLARATION(S) AND INITIALIZATION(S)
////////          (CC) FUNCTION FUN_BOO_RMDIRECTORYORFILE()
////////               DECLARATION(S) AND INITIALIZATION(S),
////////               CONSTRAINED
////////        (CC) FUNCTION FUN_BOO_RMDIRECTORYORFILE() BODY
////////          (CC) FUNCTION FUN_BOO_RMDIRECTORYORFILE() ENDING
////////--------------------------------------------------------------
////////      (CC) FUNCTION FUN_CHA_QUOTING()
////////        (CC) FUNCTION FUN_CHA_QUOTING() DECLARATION(S) AND
////////             INITIALIZATION(S)
////////          (CC) FUNCTION FUN_CHA_QUOTING() DECLARATION(S) AND
////////               INITIALIZATION(S), CONSTRAINED
////////        (CC) FUNCTION FUN_CHA_QUOTING() BODY
////////          (CC) FUNCTION FUN_CHA_QUOTING() ENDING
////////--------------------------------------------------------------
////////      (CC) FUNCTION FUN_HANDLE_ERROR()
////////        (CC) FUNCTION FUN_HANDLE_ERROR() DECLARATION(S) AND
////////             INITIALIZATION(S)
////////          (CC) FUNCTION FUN_HANDLE_ERROR() DECLARATION(S) AND
////////               INITIALIZATION(S), CONSTRAINED
////////        (CC) FUNCTION FUN_HANDLE_ERROR() BODY
////////          (CC) FUNCTION FUN_HANDLE_ERROR() ENDING
////////--------------------------------------------------------------
////////      (CC) FUNCTION FUN_INT_ICMPPING()
////////        (CC) FUNCTION FUN_INT_ICMPPING() DECLARATION(S) AND
////////             INITIALIZATION(S)
////////          (CC) FUNCTION FUN_INT_ICMPPING() DECLARATION(S) AND
////////               INITIALIZATION(S), CONSTRAINED
////////        (CC) FUNCTION FUN_INT_ICMPPING() BODY
////////          (CC) FUNCTION FUN_INT_ICMPPING() ENDING
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CO) USAGE
////////
////////  The text herein is about this library's usage only.
////////  Additional information of the project as a whole may be
////////  available on a readme file.
////////
////////  This file is a PHP library, i.e., it is supposed to be used
////////  indirectly, by another script. The other script may need
////////  execution permissions. 
////////
////////  Usage example of this library is an inclusion like the
////////  following, which should take place on the calling script:
////////
////////  $choose_and_read-local_file-lib_include =
////////  (include './lib/lib.php') === FALSE ?
////////  (require './lib/lib.php') : TRUE;
////////
////////  Indented index
////////
////////  1) Introduction
////////  1.1) Section delimiters convention
////////  1.2) Naming prefix conventions
////////  2) Conclusion(s)
////////  3) Reference(s)
////////
////////
////////  1) Introduction
////////  This library implements a form containing a file field to be
////////  filled and uploaded to the server side. The file is sent to
////////  the URL of the directory of the page containing the form.
////////
////////  1.1) Section delimiter(s) convention(s)
////////
////////  1.2) Naming prefix convention(s)
////////
////////  arr     array
////////  Arr     array
////////  boo     boolean
////////  cha     character
////////  Cha     character
////////  CON     constant
////////  CON_MP  constant, big value
////////  flo     float
////////  fun     function
////////  fun_int function returning an integer value
////////  fun_tup function returning a tuple
////////  int     integer
////////  int_arr array of integers
////////  int_lst list of integers
////////  int_mp  integer, big value
////////  lst     Python list
////////  sth     something not clear ;-)
////////  str     string
////////  ufl     unsigned float
////////  uin     unsigned integer
////////  var     variable
////////  Var     variable
////////
////////  2) Conclusion(s)
////////
////////  3) Reference(s)
////////
////////  [1]
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) USAGE-ENFORCEMENT PRELIMINARY ROUTINE
////////
////////  The following control structure acts a constraint test,
////////  since it assures this library file is written in a way it
////////  cannot be directly accessed, which is accomplished by this
////////  first if structure.
////////
////////  Those who disobey are provided with a 404 answer.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  if ($_SERVER['SCRIPT_FILENAME'] == __FILE__){

    header('Status: 404 Not Found', TRUE, 404);

    exit();
  }

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) LIBRARY(IES)
////////
////////  Include-like and/or import-like instructions.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CO) FUNCTION(S) AVAILABLE
////////
////////  Quick description of the functions available.
////////
////////  * fun_int_template()
////////    A function template, which might be copied and pasted,
////////    when creating a function.
////////
////////  * fun_arr_getlocalfile()
////////    Chooses and reads a local file.
////////
////////  * fun_arr_network()
////////    Function usada para obter as especificacoes tecnicas da
////////    conexão de rede, e determinar a qualidade da conexão.
////////
////////  * fun_arr_shownews()
////////    Shows news items.
////////
////////  * fun_arr_showproducts()
////////    Shows product items.
////////
////////  * fun_boo_blockcontrol()
////////    This is a simple function created to control eventual
////////    account access blocking in dubious authentication
////////    situations, e.g., repeated password errors on login. In
////////    its current version, the function can block accounts
////////    themselves and/or merely block sessions.
////////
////////  * fun_boo_ispearinstalled()
////////    Checks whether PEAR is installed.
////////
////////  * fun_boo_rmdirectoryorfile()
////////    Removes a directory or a file.
////////
////////  * fun_cha_quoting()
////////    Provides the delimiter character used after a given
////////    position on a string. Examples of delimiter characters are
////////    quotation marks such as ' and ".
////////
////////  * fun_depurar_()
////////    analisa variaveis atraves de insercao direta da funcao no
////////    script a depurar.
////////
////////  * fun_footer()
////////
////////  * fun_formata_data()
////////
////////  * fun_formata_numero()
////////
////////  * fun_gerador_de_senhas()
////////
////////  * fun_handle_error()
////////    funcao usada para tratamento de excecoes.
////////
////////  * fun_int_icmpping()
////////    ping function for PHP.
////////
////////  * fun_javascript_alert()
////////
////////  * fun_menu_options()
////////
////////  * fun_obtem_contas()
////////
////////  * fun_obtem_demais_informacoes_do_cliente()
////////
////////  * fun_obtem_informacoes_do_operador()
////////
////////  * fun_obtem_tabela_de_login()
////////
////////  * fun_paginacao()
////////
////////  * fun_plp_bye()
////////
////////  * fun_plp_log()
////////
////////  * fun_qual_sistema()
////////    obtem o sistema operacional do lado do cliente.
////////
////////  * fun_recaptcha_function()
////////
////////  * fun_senha_expirou()
////////
////////  * fun_testes_basicos_de_login()
////////    verifica se a avaliacao de pre-login foi realizada, e se a
////////    sessao foi aprovada.
////////
////////  * fun_testes_basicos_para_area_restrita()
////////
////////  * fun_traz_certificado()
////////
////////  * fun_valida_senha()
////////    verifica se uma senha is dentro dos padroes definidos
////////    no arquivo de configuracoes.
////////
////////  * fun_web_browser_is_active()
////////    checks whether web browser connection is still active. It
////////    is normally used on while loops.
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_INT_TEMPLATE()
////////
////////  This is merely a template of a PHP function, as this library
////////  expects it to be written. It might be copied and pasted, in
////////  order to create a new function.
////////
////////  Each function should correspond to entries on both the
////////  STRUCTURE OF THIS FILE'S CONTENT and the
////////  (CO) FUNCTION(S) AVAILABLE sections of this file.
////////
////////  DESCRIPTION
////////  Function's detailed description.
////////
////////  PARAMETER(S)
////////
////////  * $var_boo_parameter
////////    Parameter description.
////////
////////  RETURN
////////  Return description.
////////
////////  EXAMPLE(S)
////////  Example(s) showing how to use the function.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  function fun_int_template($var_boo_parameter = TRUE){

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CO) FUNCTION FUN_INT_TEMPLATE() DECLARATION(S) AND
////////       INITIALIZATION(S)
////////
////////  Constant and variable declarations and initializations.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) CONSTANT CON_BOO_ARGUMENT
////////
////////  The $CON_BOO_ARGUMENT boolean constant is responsible for
////////  sheltering the $var_boo_parameter boolean parameter
////////  variable's value.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
      define('CON_BOO_ARGUMENT', $var_boo_parameter);

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) VARIABLE VAR_ADT_SOMETHING
////////
////////  PHP arrays are actually abstract data types.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
      $var_adt_something = array();
 
      $var_int_return    = 0;
      
      $var_int_something = 0;
      
      $var_str_something = '';

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CO) FUNCTION FUN_INT_TEMPLATE() DECLARATION(S) AND
////////       INITIALIZATION(S), CONSTRAINED
////////
////////  Constant and variable declarations and initializations,
////////  constrained.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_INT_TEMPLATE() BODY
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_INT_TEMPLATE() ENDING
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      return $var_int_return;
  } //  Function fun_int_template()'s end.

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_ARR_GETLOCALFILE()
////////
////////  This is merely a template of a basic PHP function. It might
////////  be copied and pasted, in order to create a new function.
////////
////////  Each function should correspond to entries on both the
////////  STRUCTURE OF THIS FILE'S CONTENT and the
////////  (CO) FUNCTION(S) AVAILABLE sections of this file.
////////
////////  DESCRIPTION
////////  Function's detailed description.
////////
////////  PARAMETER(S)
////////
////////  * $bool_parameter
////////    Parameter description.
////////
////////  RETURN
////////  Return description.
////////
////////  EXAMPLE(S)
////////  Example(s) showing how to use the function.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  function fun_arr_getlocalfile($bool_parameter = TRUE){

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_ARR_GETLOCALFILE() DECLARATION(S) AND
////////       INITIALIZATION(S)
////////
////////  Constant and variable declarations and initializations.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

    $var_arr_return;

    $var_str_url         = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $var_str_urlprefix   = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_ARR_GETLOCALFILE() DECLARATION(S) AND
////////       INITIALIZATION(S), CONSTRAINED
////////
////////  Constant and variable declarations and initializations,
////////  constrained.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

    $var_str_urlcomplete = $var_str_urlprefix . $var_str_urlprefix;

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_ARR_GETLOCALFILE() BODY
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
?>
<form
  action   = "<?php echo $var_str_urlcomplete;?>"
  enctype  = "multipart/form-data"
  method   = "post"
>
  <label>
    Pick your API key file:
  </label>
  <input
    accept = ".asc,.txt"
    id     = "id_file"
    type   = "file"
  />
  <button type = "submit">
    Upload
  </button>
</form>
<?php
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_ARR_GETLOCALFILE() ENDING
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      return $var_arr_return;
  } //  Function fun_arr_getlocalfile() end.

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_ARR_NETWORK()
////////
////////  Consider the possibility of avoid loading a background video
////////  in case user has a really slow connection. The function may
////////  be useful for:
////////
////////  * content optimization (e.g.: responsive purposes); and
////////
////////  * testing the quality of users' connections.
////////
////////  Well, evaluating connections is not a simple task. A given
////////  connection may vary immensely as time goes by. This function
////////  tries many techniques, considering the average capabilities
////////  of ordinary PHP installations. The first and quickest way to
////////  ping the user and measure time is via connection_status().
////////  The second technique uses cURL to get average transfer
////////  speed, which is measured in bytes/second (bps). Once it
////////  cannot work via cURL, it tries the fsockopen() function with
////////  a manual timeout. It's slow. Finally, the last attempt is
////////  about an ICMP ping, which uses the fun_int_icmpping()
////////  function. The
////////  measure then is estimated based upon the timeout. As an
////////  example, 14,400 bps is a very low speed. The reason why ICMP
////////  ping stands as a last resort is based on the fact that not
////////  every PHP script can count on the proper privileges.
////////
////////  Argumento(s)
////////
////////  * $remote_address
////////
////////  * $remote_port
////////
////////  Return
////////  A boolean named $conn_quality, it will be TRUE for a good
////////  connection, or FALSE otherwise.
////////
////////  Exemplo(s)
////////  [EXEMPLOS_DE_USO].
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  function fun_arr_network($remote_address, $remote_port = 80){

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_ARR_NETWORK() DECLARATION(S) AND
////////       INITIALIZATION(S)
////////
////////  Constant and variable declarations and initializations.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      $address         = $remote_address;
      
      $port            = $remote_port;

      $conn_status;

      $conn_quality    = FALSE;

      $fsockopen_works = FALSE;

      $file_pointer_socket;
      
      $ch              = curl_init();
      
      $arr_curl_info;
      
      $int_start_time  = 0;
      
      $int_timeout     = 0;

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_ARR_NETWORK() DECLARATION(S) AND
////////       INITIALIZATION(S), CONSTRAINED
////////
////////  Constant and variable declarations and initializations.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  FUNCTION FUN_ARR_NETWORK() BODY
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      // The simplest PHP ping in town.
      echo '';
      $int_start_time	= microtime(TRUE);
      $conn_status	= connection_status();
      $int_timeout	= microtime(TRUE) - $int_start_time;
      $conn_quality	= $int_timeout < CFG_MAXTIME_PING ? TRUE : $conn_quality;

      // Well I guess we'll try the cURL way now, won't we, Junior?
      if (!$conn_quality && ($conn_status === 0))
        {
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
          curl_setopt($ch, CURLOPT_URL, gethostbyaddr($address));
          curl_setopt($ch, CURLOPT_HEADER, TRUE);
          curl_setopt($ch, CURLOPT_DNS_USE_GLOBAL_CACHE, FALSE);
          curl_setopt($ch, CURLOPT_NOBODY, TRUE);
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

          curl_exec($ch);

          if (curl_errno($ch) === 0)
            {
              $arr_curl_info	= curl_getinfo($ch);
              $conn_quality	= $arr_curl_info['speed_upload'] <= 14400 ? $conn_quality : TRUE;
            }

          else
            {
              error_log('cURL error: ' . curl_error($ch), 0);

              $errno			= 0;
              $errstr			= 'First fsockopen() attempt failed.';
              $int_start_time		= microtime(TRUE);
              $file_pointer_socket	= fsockopen($address, $port, $errno, $errstr, 2);
              $int_timeout		= microtime(TRUE) - $int_start_time;
              $fsockopen_works		= $file_pointer_socket != FALSE ? TRUE : $conn_quality;

              if (!$fsockopen_works)
                {
                  $errstr		= 'Second fsockopen() attempt failed.';
                  $int_start_time	= microtime(TRUE);
                  $file_pointer_socket	= fsockopen('tcp://' . $address, $port, $errno, $errstr, 2);
                  $int_timeout		= microtime(TRUE) - $int_start_time;
                  $fsockopen_works	= $file_pointer_socket != FALSE ? TRUE : $conn_quality;
                }

              fclose($file_pointer_socket);

              if ($fsockopen_works)
                {
                  $conn_quality		= (($int_timeout === 0) || ($int_timeout >= 1000)) ? $conn_quality : TRUE;
                }

              // If everything fails so far, last test involves a real ICMP ping.
              else
                {
                  $int_timeout	= fun_int_icmpping($address);
                  $conn_quality	= (($int_timeout === 0) || ($int_timeout >= 1000)) ? $conn_quality : TRUE;
                }
            }

          curl_close($ch);
        }

      return $conn_quality;
  } //  Function fun_arr_network()'s end.

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_ARR_SHOWNEWS()
////////
////////  This function is used to incorporate a news box somewhere on
////////  a web page. It performs a lot of HTML parsing.
////////
////////  What makes this box so cool is its news can be:
////////
////////  * Twitter tweets for a given hashtag like #infosec or
////////    #brexit for example. It uses cURL, then it performs HTML
////////    parsing both via string manipulation and regular
////////    expressions. The latter is NOT advisable since regex
////////    constitutes a Chomsky Type 3 grammar (regular grammar)
////////    while HTML itself is a Chomsky Type 2 grammar (context
////////    free grammar) [1]. For the challenging regex parsing –
////////    which only takes place when string manipulation fails,
////////    uses subpatterns (parentheses-delimited patterns); and/or
////////
////////	* RSS feeds.
////////
////////  References
////////  [1]  html - RegEx match open tags except XHTML
////////       self-contained tags:
////////  http://stackoverflow.com/questions/1732348/regex-match-open
////////  -tags-except-xhtml-self-contained-tags/
////////
////////	Parameter(s)
////////
////////	* $bool_with_urls
////////	  also show plain URLs when they're present on news
////////	  text(s).
////////
////////  RETURN
////////  It returns an array containing result itself (TRUE for
////////  success or FALSE otherwise), a string, and an error code if
////////  any.
////////
////////  EXAMPLE(S)
////////  Example(s) showing how to use the function.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  function fun_arr_shownews($bool_with_urls = TRUE){

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  FUNCTION DECLARATIONS
////////
////////  DOM is used.
////////  The DOMDocument class represents an entire HTML or XML
////////  document.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      $bool_show_urls;
      
      // Object to be created from the DOMDocument class.
      $domDocument;
      // This variable will store an object from the DOMNodeList
      // class.
      $domNodeList;
      // This variable will store an object.
      $domXPath;

      $int_backwards_length;

      // String of raw HTML.
      $str_original_html;

      // String of HTML still being processed.
      $str_intermediate_html;

      // String of prepared HTML.
      $str_final_html;

      // String of prepared HTML without so-called tweet actions.
      $str_final_html_wo_tactions;

      // String of prepared HTML without so-called tweet actions and
      // also without hyperlinks.
      $str_final_html_wo_tactions_and_hyperlinks;

      // String representing the title to be displayed.
      $str_title;

      // String identifying the start of a tweet.
      $str_tweet_start;

      // String identifying the end of a tweet.
      $str_tweet_end;

      // String denoting a typical URL pattern.
      $str_url_pattern;

      // String identifying the start of "tweet actions".
      $str_metadata_start;

      // String identifying the start of "tweet actions".
      $str_middot_start;

      // String identifying the start of "tweet actions".
      $str_tweet_actions_start;

      // String identifying the end of "tweet actions".
      $str_tweet_actions_end;
      
      // Mixed auxiliary used to find the "middot" beginning.
      $aux_start_pos_middot;

      // Mixed auxiliary used to find the "tweet actions" beginning.
      $aux_start_pos_tweet_actions;

      // Integer used to find the "tweet actions" beginning.
      $int_start_pos;

      // Integer used to find the "tweet actions" end.
      $int_end_pos;

      // String denoting the "tweet actions" part pattern.
      $str_tweet_actions_pattern;

      // Returned results.
      $arr_resultado_e_numero_do_erro;

      // cURL resource.
      $ch;

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////	FUNCTION'S VARIABLES INITIALIZATIONS
////////
////////	As of 2015, start and end of a tweet were contained
////////	within a div with the "timeline" class. Every table on
////////	that div contained one tweet.
////////	Inside each tweet, there's the so-called "tweet
////////	actions" little images to remove (e.g.: the clickable
////////	star used to favorite posts) since only the text is
////////	desired. In order to accomplish that, look for the
////////	spans with the "metadata", "middot" or "tweet-actions"
////////	classes.
////////	Also, a new cURL resource is created.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      $bool_show_urls					= $bool_with_urls;
      
      $domDocument					= new DOMDocument('1.0', 'utf-8');
      
      $int_backwards_length				= 0;
      $str_arr_remaining_hrefs_from_original		= array();
      $str_original_html				= '';
      $str_intermediate_html				= '';
      $str_final_html					= '';
      $str_final_html_wo_tactions			= '';
      $str_final_html_wo_tactions_and_hyperlinks	= '';

      $str_title					= '<b>
							     NEWS
							   </b><br />';

      $str_tweet_start					= "<table class=\"tweet";
      $str_tweet_end					= '</table>';

      $str_url_pattern					= '/i';

      $str_metadata_start				= "<span class=\"metadata";
      $str_middot_start					= "<span class=\"middot";
      $str_tweet_actions_start				= "<span class=\"tweet-actions";
      $str_tweet_actions_end				= '</span>';

      $aux_start_pos_metadata				= 0;
      $aux_start_pos_middot				= 0;
      $aux_start_pos_tweet_actions			= 0;
      $int_start_pos					= 0;
      $int_end_pos					= 0;

      $str_tweet_actions_pattern			= '';

      $arr_resultado_e_numero_do_erro			= array('bool_result' => FALSE, 'str_html' => '', 'str_errcode' => '0');

      $ch						= curl_init();

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////	FUNCTION BODY
////////
////////	cURL resource appropriate options setting (URL
////////	included).
////////	Strings here take zeroes on their first positions.
////////	The regular expression fed onto
////////	$str_tweet_actions_pattern has an ending "i", which
////////	adds ignore case capability.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_URL, 'https://mobile.twitter.com/hashtag/infosec');
      curl_setopt($ch, CURLOPT_HEADER, FALSE);

      // Grab URL's HTML content and pass it as a string.
      $str_original_html = curl_exec($ch);

      if ($str_original_html === FALSE)
        {
          throw new Exception(curl_error($ch), curl_errno($ch));

          die(curl_error($ch));

          // Close cURL resource, and free up system resources.
          curl_close($ch);

          return $arr_resultado_e_numero_do_erro;
        }

      // Close cURL resource, and free up system resources.
      curl_close($ch);

      $str_intermediate_html			.= trim(substr($str_original_html, stripos($str_original_html, $str_tweet_start)));
      $int_backwards_length			+= (strlen($str_intermediate_html) - 1) - stripos($str_intermediate_html, $str_tweet_end) - (strlen($str_tweet_end) - 1);
      $str_final_html				.= ($int_backwards_length > 0) ? substr($str_intermediate_html, 0, (-1) * $int_backwards_length) : $str_final_html;

      $aux_start_pos_metadata			+= stripos($str_final_html, $str_metadata_start);
      $aux_start_pos_middot			+= stripos($str_final_html, $str_middot_start);
      $aux_start_pos_tweet_actions		+= stripos($str_final_html, $str_tweet_actions_start);

      // This is the string manipulation solution.
      if (($aux_start_pos_metadata != FALSE) || ($aux_start_pos_middot != FALSE) || ($aux_start_pos_tweet_actions != FALSE))
        {
          $int_start_pos				+= ($aux_start_pos_metadata === FALSE) ? (($aux_start_pos_middot === FALSE) ? $aux_start_pos_tweet_actions : $aux_start_pos_middot) : $aux_start_pos_metadata;
          $int_end_pos					+= strripos($str_final_html, $str_tweet_actions_end) + strlen($str_tweet_actions_end);
          $str_final_html_wo_tactions			.= substr_replace($str_final_html, '', $int_start_pos, (-1) * (strlen($str_final_html) - $int_end_pos));
        }

      // Oh well, let's try the regex way then :-/
      else
        {
          $str_tweet_actions_pattern			.= '/^\A(?($aux_start_pos_middot != FALSE)$str_middot_start|$str_tweet_actions_start).*?($str_tweet_actions_end)\z/i';

          // Performs a replacement.
          $str_final_html_wo_tactions			= preg_replace($str_tweet_actions_pattern, '', ($int_backwards_length > 0) ? substr($str_intermediate_html, 0, (-1) * $int_backwards_length) : $str_final_html);
        }

      // After stripping <a> tags, there may be remaining URLs and
      // even href attributes inside unlike elements.
      $domXPath						= $domDocument->loadHTML(strip_tags($str_final_html_wo_tactions, '<br><div><img><span><strong><table><td><tr>')) === TRUE ? new DOMXPath($domDocument) : new DOMXPath();
      $domNodeList					= $domXPath->query('//*[@href]');
      
      foreach ($domNodeList as $htmlElement)
        {
          $htmlElement->removeAttribute('href');
        }
      
      $domDocument->preserveWhiteSpace			= FALSE;
      $domDocument->formatOutput			= TRUE;
      $str_final_html_wo_tactions_and_hyperlinks	= $domDocument->saveHTML($domDocument->getElementsByTagName('table')->item(0));
      $arr_resultado_e_numero_do_erro['str_html']	.= $str_title . $str_final_html_wo_tactions_and_hyperlinks;

      return $arr_resultado_e_numero_do_erro;
  } //  Function fun_arr_shownews()'s end.

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_ARR_SHOWPRODUCTS()
////////
////////  This function is used to incorporate a product area
////////  somewhere on a web page.
////////
////////  DESCRIPTION
////////  Function's detailed description.
////////
////////  PARAMETER(S)
////////
////////  * $var_par_boo_parameter
////////    Parameter description.
////////
////////  RETURN
////////  It returns the var_arr_return array variable, containing the
////////  result itself (TRUE for success or false otherwise), a
////////  string, and an error code if any.
////////
////////  EXAMPLE(S)
////////  Example(s) showing how to use the function.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  function fun_arr_showproducts($var_par_boo_parameter = TRUE){

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_ARR_SHOWNEWS() DECLARATION(S) AND
////////       INITIALIZATION(S)
////////
////////  Constant and variable declarations and initializations.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      $var_arr_return    = array('var_boo_result' => FALSE, 'var_str_html' => '', 'var_str_errorcode' => '0');

      $var_boo_argument  = $var_par_boo_parameter;
      
      $var_int_something = 0;
      
      $var_str_something = '';

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_INT_TEMPLATE() DECLARATION(S) AND
////////       INITIALIZATION(S), CONSTRAINED
////////
////////  Constant and variable declarations and initializations,
////////  constrained.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_INT_TEMPLATE() BODY
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_INT_TEMPLATE() ENDING
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      return $var_arr_return;
  } //  Function fun_arr_showproducts()'s end.

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_BOO_BLOCKCONTROL()
////////
////////  Realiza o controle de bloqueio durante as autenticacoes,
////////  e.g., login; sao 2 os tipos de bloqueio controlados por esta
////////  funcao, o bloqueio de sessoes e o de contas.
////////
////////  O bloqueio de sessoes obedece a tolerancia configurada em
////////  PLPCONF_TOLERANCIA_BLOQUEIO_SESSAO, cujo valor eh entregue
////////  ao argumento $tolerancia.
////////
////////  O bloqueio de contas obedece a tolerancia definida nas
////////  especificacoes.
////////
////////  O sistema ira portanto tolerar o numero de falhas definido
////////  em PLPCONF_TOLERANCIA_BLOQUEIO_SESSAO, e depois disso,
////////  fecha suas portas.
////////
////////  Caso se tenha fornecido um ID ou Codigo de Acesso valido
////////  durante as tentativas falhas, o NrCli ligado aquele ID ou
////////  Codigo de Acesso eh armazenado em no array:
////////
////////  $_SESSION['numero_do_cliente'] (I)
////////
////////  que preservara tais informacoes durante a sessao. E se um
////////  mesmo NrCli superar 3 ocorrencias no array, a conta a que
////////  diz respeito eh bloqueada. Entao, dispara-se ate duas
////////  notificacoes via e-mail, uma para o endereco de e-mail
////////  cadastrado na conta (caso exista), e outra para a area
////////  responsavel da organizacao que usa o plp, cujo endereco de
////////  e-mail eh definido pela seguinte variavel desta funcao:
////////
////////  $email_do_administrador        (II)
////////
////////  o desbloqueio ocorre de maneira automatica apos 24 horas
////////  mas eh independente do PHP por questoes de seguranca. Ele eh
////////  controlado por agendamentos ligados a scripts de shell Bash.
////////
////////  Exemplo: a funcao de bloqueio foi implementada de modo
////////  versatil. Mesmo que o sistema seja atacado por um bot que
////////  forneca IDs e/ou access codes inexistentes, a sessao do bot
////////  sera bloqueada apÃ³s excedida a tolerancia a erros. E nesse
////////  caso, nenhuma conta fica bloqueada mas o ataque do bot eh
////////  neutralizado.
////////
////////  Argumentos
////////
////////  $tolerancia
////////
////////  $tipo_de_informacao
////////  1 para ID; ou
////////  2 para Codigo de Acesso.
////////
////////  $informacao
////////  eh uma informacao recebida do form, exemplo: ID.
////////
////////  $padrao_da_informacao
////////  usa uma variavel das configuracoes.
////////
////////  $conta_existente
////////  a informacao recebida do form corresponde (TRUE) ou nao
////////  (FALSE) a uma conta existente; caso nao se saiba, utilizar
////////  NULL.
////////
////////  $arquivo
////////  Este parametro permite saber se o controle esta sendo feito
////////  sobre o "front end" ou sobre o "back end".
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  function fun_boo_blockcontrol($tolerancia, $tipo_de_informacao, $informacao, $padrao_da_informacao, $conta_existente = NULL, $arquivo){

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_BOO_BLOCKCONTROL() DECLARATION(S) AND
////////       INITIALIZATION(S)
////////
////////  Constant and variable declarations and initializations.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

    $resultado_e_numero_do_erro                = array('resultado' => FALSE, 'numero_do_erro' => '0');

    $_SESSION['tentativas_falhas']             = $_SESSION['tentativas_falhas'] + 1;

    $tipo_de_informacao_                       = $tipo_de_informacao;

    $informacao_                               = NULL;

    $padrao_da_informacao_                     = $padrao_da_informacao;

    $arquivo_                                  = $arquivo;

    $email_da_conta_bloqueada                  = NULL;

    $email_do_administrador                    = PLPCONF_MAINTENANCE ? PLPCONF_MAINTENANCE_EMAIL : PLPCONF_BLOCK_ADMINISTRATOR_EMAIL;

    $assunto_dos_emails_de_bloqueio            = PLPCONF_MAINTENANCE ? 'TESTES OURINVEST BLOQUEIO' : 'OURINVEST BLOQUEIO';

    $mensagem_do_email_1_de_bloqueio           = "\nNAO RESPONDA A ESTA MENSAGEM. ELA FOI GERADA AUTOMATICAMENTE.\n\nO acesso a sua conta via Internet foi bloqueado, e a área responsável já foi avisada.\n\nCaso possua dúvidas, entre em contato com o seu operador.\n\n\nBANCO OURINVEST\n";

    $mensagem_do_email_2_de_bloqueio           = NULL;

    $mensagem_do_email_1_de_bloqueio_formatada = wordwrap($mensagem_do_email_1_de_bloqueio, 70);

    $mensagem_do_email_2_de_bloqueio_formatada = NULL;

    $headers_dos_emails_de_bloqueio            = "From: naoresponda@ourinvest.com.br" . "\n" .
                                                 // "Bcc: " . $email_do_administrador . "\n" .
                                                 "Return-Path: naoresponda@ourinvest.com.br" . "\n";
                                                 // "MIME-Version: 1.0" . "\n" .
                                                 // "Content-type: text/html; charset=utf-8" . "\n" .
                                                 // "X-Priority: 1" . "\n" .
                                                 // "X-MSMail-Priority: High" . "\n" .
                                                 // "Importance: High" . "\n" .
                                                 // "Disposition-Notification-To: enderecoParaConfirmar" . "\n" .
                                                 // "X-Mailer: PHP/" . phpversion() . "\n";

    $envio_do_email_1                          = false;

    $envio_do_email_2                          = false;

    $rdbms_account                             = '';

    $rdbms_database                            = '';

    $var_boo_return                            = true;

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_BOO_BLOCKCONTROL() DECLARATION(S) AND
////////       INITIALIZATION(S), CONSTRAINED
////////
////////  Constant and variable declarations and initializations,
////////  constrained.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_BOO_BLOCKCONTROL() BODY
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

    if (!isset($_SESSION['informacoes_dentro_dos_padroes']) || (isset($_SESSION['informacoes_dentro_dos_padroes']) && ($_SESSION['informacoes_dentro_dos_padroes'] != TRUE))){

      switch ($tipo_de_informacao_){

        case 1:
          $informacao_ = preg_replace("/[^0-9]/", "", trim($informacao));
          break;

        case 2:
          $informacao_ = trim($informacao);
          break;

        default:
	  if (isset($_SESSION['informacoes_dentro_dos_padroes'])){

            unset($_SESSION['informacoes_dentro_dos_padroes']);
	  }

          $resultado_e_numero_do_erro['numero_do_erro'] = '151';

          return $resultado_e_numero_do_erro;
      } //  Structure switch() end.
    } //  Structure if() end.

    elseif (isset($_SESSION['informacoes_dentro_dos_padroes']) && ($_SESSION['informacoes_dentro_dos_padroes'] === TRUE)){

          $informacao_															= $informacao;
        }

      // TODO:	opcionalmente, sendo liberado, o "if" a seguir fara
      //		com que a contagem de erros em uma mesma sessao seja
      //		zerada sempre que a informacao recebida (exemplo: ID)
      //		numa tentativa de autenticacao for distinta daquela
      //		recebida anteriormente.
      //
      // if (($_SESSION['informacao_de_bloqueio'] != $informacao_) || ($_SESSION['tipo_de_informacao_de_bloqueio'] != $tipo_de_informacao_))
      if (0 == 1)
        {
          $_SESSION['numero_do_cliente'][$_SESSION['tentativas_falhas']]		= $informacao_;
          $_SESSION['tipo_de_informacao_de_bloqueio']							= $tipo_de_informacao_;
          $_SESSION['tentativas_falhas']										= 0;
        }

      switch ($arquivo_)
        {
      	  case PLPCONF_ARQUIVO_DE_SENHA4:
      	    $rdbms_account	= 'ourinvest4';
      	    $rdbms_database	= 'dbplplogin';

      	    break;

      	  case PLPCONF_ARQUIVO_DE_SENHA6:
      	    $rdbms_account	= 'ourinvest6';
      	    $rdbms_database	= 'dbplplogin_back_end';
      	  
      	    break;

      	  default:
      	    $resultado_e_numero_do_erro['numero_do_erro'] = '216';

      	    return $resultado_e_numero_do_erro;
        }

      $handle_controla_bloqueio			= fopen($arquivo_, 'r');
      $senha_ourinvest					= fread($handle_controla_bloqueio, filesize($arquivo_));
      fclose($handle_controla_bloqueio);

      $conexao_controla_bloqueio		= mysql_connect('172.17.0.13:3306', $rdbms_account, $senha_ourinvest);

      if (!$conexao_controla_bloqueio)
        {
          if (isset($_SESSION['informacoes_dentro_dos_padroes']))
            {
              unset($_SESSION['informacoes_dentro_dos_padroes']);
            }

          $resultado_e_numero_do_erro['numero_do_erro'] = '152';

          return $resultado_e_numero_do_erro;
        }

      else
        {
          $db_controla_bloqueio = mysql_select_db($rdbms_database, $conexao_controla_bloqueio);

          if (!$db_controla_bloqueio)
            {
              if (isset($_SESSION['informacoes_dentro_dos_padroes']))
                {
                  unset($_SESSION['informacoes_dentro_dos_padroes']);
                }

              $resultado_e_numero_do_erro['numero_do_erro'] = '153';

              return $resultado_e_numero_do_erro;
            }
        }

      $mysql_set_charset_					= mysql_set_charset('utf8', $conexao_controla_bloqueio);
      if (!$mysql_set_charset_)
        {
          if (isset($_SESSION['informacoes_dentro_dos_padroes']))
            {
              unset($_SESSION['informacoes_dentro_dos_padroes']);
            }

          $resultado_e_numero_do_erro['numero_do_erro'] = '154';

          return $resultado_e_numero_do_erro;
        }

      $query_rijndael						= "SET @rijndael = LOAD_FILE('/home/18digital/.plp/.rijndael.asc')";
      $query_update_controla_bloqueio		= '';
      $query_select_controla_bloqueio		= '';

      if (($tipo_de_informacao_ == 1) && ($rdbms_account === 'ourinvest4'))
        {
          $query_select_controla_bloqueio = sprintf("SELECT NrCli, Inscricao, eMail, bloqueio, data_bloqueio FROM dbplplogin." . PLPCONF_TBL_PREFIX . "tbl_Site_ClientePrimAcesso WHERE Inscricao = AES_ENCRYPT('%s', @rijndael)", mysql_real_escape_string($informacao_));
        }

      elseif (($tipo_de_informacao_ == 1) && ($rdbms_account === 'ourinvest6'))
        {
          $query_select_controla_bloqueio = sprintf("SELECT Chave, Inscricao, eMail, bloqueio, data_bloqueio FROM dbplplogin_back_end." . PLPCONF_TBL_PREFIX . "tbl_back_end_login WHERE Inscricao = AES_ENCRYPT('%s', @rijndael)", mysql_real_escape_string($informacao_));
        }

      elseif (($tipo_de_informacao_ == 2) && ($rdbms_account === 'ourinvest4'))
        {
          $query_select_controla_bloqueio = sprintf("SELECT NrCli, CdAcesso, eMail, bloqueio, data_bloqueio FROM dbplplogin." . PLPCONF_TBL_PREFIX . "tbl_Site_ClientePrimAcesso WHERE CdAcesso = AES_ENCRYPT('%s', @rijndael)", mysql_real_escape_string($informacao_));
        }

      else
        {
          if (isset($_SESSION['informacoes_dentro_dos_padroes']))
            {
              unset($_SESSION['informacoes_dentro_dos_padroes']);
            }

          $resultado_e_numero_do_erro['numero_do_erro'] = '155';
            
          return $resultado_e_numero_do_erro;
        }

      $resource_rijndael = mysql_query($query_rijndael);
      if (!$resource_rijndael)
        {
          if (isset($_SESSION['informacoes_dentro_dos_padroes']))
            {
              unset($_SESSION['informacoes_dentro_dos_padroes']);
            }

          $resultado_e_numero_do_erro['numero_do_erro'] = '156';

          return $resultado_e_numero_do_erro;
        }

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////	1o TESTE DO CONTROLE DE BLOQUEIO
////////
////////	Nao foi possivel determinar se a informacao fornecida
////////	corresponde a uma conta existente.
////////
////////	A tentativa falha ocorreu sem que fosse possivel
////////	determinar se "$informacao" corresponde a uma conta do
////////	plp.
////////
////////	Inicialmente, testa-se a variavel de sessao:
////////
////////	$_SESSION['informacoes_dentro_dos_padroes']	(I)
////////
////////	para verificar se a informacao fornecida obedece o seu
////////	padrao.
////////
////////	Caso a variavel de sessao (I) nao tenha sido inicializada,
////////	sera preciso testar a conformidade de "$informacao" antes
////////	de se prosseguir.
////////
////////	E se a variavel de sessao (I) tiver sido inicializada com
////////	o devido valor, TRUE, significara que todas as informacoes
////////	recebidas do form estao dentro dos seus padroes, incluindo
////////	"$informacao". Eh entao possivel determinar se corresponde
////////	a uma conta existente atraves de consultas (queries) ao
////////	servico RDBMS.
////////
////////	Caso a conta exista, o NrCli eh entao armazenado no array:
////////
////////	$_SESSION['numero_do_cliente']				(II)
////////
////////	e esse mesmo array eh analisado em seguida pois excedida a
////////	tolerancia para o numero de tentativas falhas em uma mesma
////////	conta, esta eh bloqueada.
////////
////////	Isso significa que se o array mencionado abrigar um mesmo
////////	NrCli repetidas vezes equivalentes a tolerancia
////////	especificada, a conta do plp associada aquele numero de
////////	cliente tera seu acesso bloqueado por 24 horas.
////////
////////	E se "$informacao" obedecer ao padrao sem corresponder a
////////	conta alguma, bloqueia-se no maximo a sessao, respeitando
////////	o contador de erros:
////////
////////	$_SESSION['tentativas_falhas']				(III)
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
      if ($conta_existente == NULL)
        {
          // A tentativa falha ocorreu sem que fosse possivel verificar o cumprimento do padrao por parte da informacao fornecida.
          if (!isset($_SESSION['informacoes_dentro_dos_padroes']))
            {
	          // Testa-se o padrao da informacao recebida, que eh do tipo ID, e se constata que ele nao eh respeitado. Logo, "$informacao" nao corresponde a conta alguma.
	          if (($tipo_de_informacao_ == 1) && (empty($informacao_) || (preg_match($padrao_da_informacao_, $informacao_) === 0) || (strpbrk($informacao_, "0123456789") === FALSE)))
	            {
			      // 1a estrutura: a tentativa falhou mas nao excedeu a tolerancia.
			      if ($_SESSION['tentativas_falhas'] <= $tolerancia)
			        {
			          return $resultado_e_numero_do_erro;
			        }

			      // 2a estrutura: a tentativa falhou e excedeu a tolerancia bloqueia-se apenas a sessao.
			      elseif ($_SESSION['tentativas_falhas'] > $tolerancia)
			        {
			          $resultado_e_numero_do_erro['resultado'] = TRUE;

			          return $resultado_e_numero_do_erro;
			        }

			      // 3a estrutura: erro.
			      else
			        {
			          $resultado_e_numero_do_erro['numero_do_erro'] = '157';

			          return $resultado_e_numero_do_erro;
			        }
	            }

	          // Testa-se o padrao da informacao recebida, que eh do tipo ID. Contudo, ocorre um erro durante o teste do padrao.
	          elseif (($tipo_de_informacao_ == 1) && (preg_match($padrao_da_informacao_, $informacao_) === FALSE))
	            {
	              $resultado_e_numero_do_erro['numero_do_erro'] = '158';

	              return $resultado_e_numero_do_erro;
	            }

	          // Testa-se o padrao da informacao recebida, que eh do tipo Codigo de Acesso, e se constata que ele nao eh respeitado. Logo, "$informacao" nao corresponde a conta alguma.
	          elseif (($tipo_de_informacao_ == 2) && (empty($informacao_) || (preg_match($padrao_da_informacao_, $informacao_) === 0) || (strpbrk($informacao_, "0123456789") === FALSE)))
	            {
			      // 1a estrutura: a tentativa falhou mas nao excedeu a tolerancia.
			      if ($_SESSION['tentativas_falhas'] <= $tolerancia)
			        {
			          return $resultado_e_numero_do_erro;
			        }

			      // 2a estrutura: a tentativa falhou e excedeu a tolerancia; bloqueia-se apenas a sessao.
			      elseif ($_SESSION['tentativas_falhas'] > $tolerancia)
			        {
			          $resultado_e_numero_do_erro['resultado'] = TRUE;

			          return $resultado_e_numero_do_erro;
			        }

			      // 3a estrutura: erro.
			      else
			        {
			          $resultado_e_numero_do_erro['numero_do_erro'] = '159';
			        	
			          return $resultado_e_numero_do_erro;
			        }
	            }

	          // Testa-se o padrao da informacao recebida, que eh do tipo Codigo de Acesso. Contudo, ocorre um erro durante o teste do padrao.
	          elseif (($tipo_de_informacao_ == 2) && (preg_match($padrao_da_informacao_, $informacao_) === FALSE))
	            {
	              $resultado_e_numero_do_erro['numero_do_erro'] = '160';

	              return $resultado_e_numero_do_erro;
	            }

	          // O teste referente ao padrao nao eh possivel pois a variavel que define o seu tipo possui valor inesperado.
	          elseif (($tipo_de_informacao_ != 1) && ($tipo_de_informacao_ != 2))
	            {
	              $resultado_e_numero_do_erro['numero_do_erro'] = '161';

	              return $resultado_e_numero_do_erro;
	            }

	          // A informacao recebida esta em conformidade com o seu padrao, e entao realiza-se uma verificacao para determinar se a referida informacao aponta para uma conta existente.
	          else
	            {
	              $resource_select_controla_bloqueio	= mysql_query($query_select_controla_bloqueio);
	              if (!$resource_select_controla_bloqueio)
	                {
	                  $resultado_e_numero_do_erro['numero_do_erro'] = '162';

	                  return $resultado_e_numero_do_erro;
	                }

	              $select_controla_bloqueio				= mysql_fetch_assoc($resource_select_controla_bloqueio);

	              // 1a estrutura: possibilidade 1, o conteudo do argumento "$informacao" obedece ao padrao mas nao corresponde a conta alguma.
	              if ((mysql_num_rows($resource_select_controla_bloqueio) == 0) || ($select_controla_bloqueio === FALSE))
	                {
	                  mysql_free_result($resource_select_controla_bloqueio);

				      // A tentativa falhou mas nao excedeu a tolerancia.
				      if ($_SESSION['tentativas_falhas'] <= $tolerancia)
				        {
				          return $resultado_e_numero_do_erro;
				        }

				      // A tentativa falhou e excedeu a tolerancia. Bloqueia-se apenas a sessao.
				      elseif ($_SESSION['tentativas_falhas'] > $tolerancia)
				        {
				          $resultado_e_numero_do_erro['resultado'] = TRUE;

				          return $resultado_e_numero_do_erro;
				        }

				      // Erro.
				      else
				        {
				          $resultado_e_numero_do_erro['numero_do_erro'] = '163';
				        	
				          return $resultado_e_numero_do_erro;
				        }
	                } // Fecha a 1a estrutura.

	              // 2a estrutura: possibilidade 2, o conteudo do argumento "$informacao" obedece ao padrao, e corresponde a uma conta cujo numero de cliente sera armazenado em "$_SESSION['numero_do_cliente']".
	              elseif (mysql_num_rows($resource_select_controla_bloqueio) == 1)
	                {
	                  switch ($rdbms_account)
	                    {
	                      case 'ourinvest4':
	                      	$_SESSION['numero_do_cliente'][($_SESSION['tentativas_falhas'] - 1)] = $select_controla_bloqueio['NrCli'];

	                      	break;

	                      case 'ourinvest6':
	                      	$_SESSION['numero_do_cliente'][($_SESSION['tentativas_falhas'] - 1)] = $select_controla_bloqueio['Chave'];

	                      	break;

	                      default:
	                      	$resultado_e_numero_do_erro['numero_do_erro'] = '224';

	                      	return $resultado_e_numero_do_erro;

	                        exit();

	                        break;
	                    }

			          // Verifica-se o numero de tentativas falhas ja realizadas para valores de NrCli eventualmente armazenados em "$_SESSION['numero_do_cliente']".
			          $frequency_array_ = array_count_values($_SESSION['numero_do_cliente']);

			          foreach($frequency_array_ as $indice_ => $frequencia_)
			            {
			              if ($rdbms_account === 'ourinvest4')
			                {
			                  $query_update_controla_bloqueio		= sprintf("UPDATE dbplplogin." . PLPCONF_TBL_PREFIX . "tbl_Site_ClientePrimAcesso SET bloqueio = 's' , data_bloqueio = NOW() WHERE NrCli = '%s'", mysql_real_escape_string($indice_));
			                  $query_select_eMail					= sprintf("SELECT NrCli, eMail FROM dbplplogin." . PLPCONF_TBL_PREFIX . "tbl_Site_ClientePrimAcesso WHERE NrCli = '%s'", mysql_real_escape_string($indice_));
			                }

			              elseif ($rdbms_account === 'ourinvest6')
			                {
			                  $query_update_controla_bloqueio		= sprintf("UPDATE dbplplogin_back_end." . PLPCONF_TBL_PREFIX . "tbl_back_end_login SET bloqueio = 's' , data_bloqueio = NOW() WHERE Chave = '%s'", mysql_real_escape_string($indice_));
			                  $query_select_eMail					= sprintf("SELECT Chave, eMail FROM dbplplogin_back_end." . PLPCONF_TBL_PREFIX . "tbl_back_end_login WHERE Chave = '%s'", mysql_real_escape_string($indice_));
			                }

			              else
			                {
			                  $resultado_e_numero_do_erro['numero_do_erro'] = '225';

			                  return $resultado_e_numero_do_erro;
			                }

			              // Contas que sofreram tres ou mais tentativas falhas de acesso sao bloqueadas e e-mails sao enviados.
			              if ($frequencia_ > 3)
			                {
			                  $resource_update_controla_bloqueio	= mysql_query($query_update_controla_bloqueio);
				              if (!$resource_update_controla_bloqueio)
				                {
				                  mysql_free_result($resource_select_controla_bloqueio);

				                  $resultado_e_numero_do_erro['numero_do_erro'] = '164';

				                  return $resultado_e_numero_do_erro;
				                }

				              else
				                {
						          $resource_select_eMail	= mysql_query($query_select_eMail);
						          if (!$resource_select_eMail)
						            {
						              mysql_free_result($resource_select_controla_bloqueio);

						              $resultado_e_numero_do_erro['numero_do_erro'] = '165';
						              
						              return $resultado_e_numero_do_erro;
						            }

						          $select_eMail				= mysql_fetch_assoc($resource_select_eMail);
						          $email_da_conta_bloqueada = trim($select_eMail['eMail']);

				                  mysql_free_result($resource_select_controla_bloqueio);
				                  mysql_free_result($resource_select_eMail);

				                  // A conta bloqueada nao possui um endereco de e-mail cadastrado, e assim somente a area responsavel do banco sera notificada. Uma mensagem apenas eh disparada.
				                  if (empty($email_da_conta_bloqueada))
				                    {
								      $mensagem_do_email_2_de_bloqueio				= "\nNAO RESPONDA A ESTA MENSAGEM. ELA FOI GERADA AUTOMATICAMENTE.\n\nO acesso via Internet a uma conta SEM E-MAIL CADASTRADO foi bloqueado.\n\n\nBANCO OURINVEST\n";
								      $mensagem_do_email_2_de_bloqueio_formatada	= wordwrap($mensagem_do_email_2_de_bloqueio, 70);

								      $envio_do_email_2								= mail($email_do_administrador, $assunto_dos_emails_de_bloqueio, $mensagem_do_email_2_de_bloqueio_formatada, $headers_dos_emails_de_bloqueio);
								      if (!$envio_do_email_2)
								        {
					                      $resultado_e_numero_do_erro['numero_do_erro'] = '166';

					                      return $resultado_e_numero_do_erro;
								        }
				                    }

				                  // A conta bloqueada possui um endereco de e-mail cadastrado, e assim duas mensagens sao disparadas.
				                  elseif (!empty($email_da_conta_bloqueada))
				                    {
								      $mensagem_do_email_2_de_bloqueio				= "\nNAO RESPONDA A ESTA MENSAGEM. ELA FOI GERADA AUTOMATICAMENTE.\n\nO acesso via Internet à conta cujo e-mail é\n\n" . (string)$email_da_conta_bloqueada . "\n\nfoi bloqueado.\n\n\nBANCO OURINVEST\n";
								      $mensagem_do_email_2_de_bloqueio_formatada	= wordwrap($mensagem_do_email_2_de_bloqueio, 70);

								      $envio_do_email_2								= mail($email_do_administrador, $assunto_dos_emails_de_bloqueio, $mensagem_do_email_2_de_bloqueio_formatada, $headers_dos_emails_de_bloqueio);
								      $envio_do_email_1								= mail($email_da_conta_bloqueada, $assunto_dos_emails_de_bloqueio, $mensagem_do_email_1_de_bloqueio_formatada, $headers_dos_emails_de_bloqueio);

								      if (!$envio_do_email_2 || !$envio_do_email_1)
								        {
					                      $resultado_e_numero_do_erro['numero_do_erro'] = '167';

					                      return $resultado_e_numero_do_erro;
								        }

								      $resultado_e_numero_do_erro['resultado'] = TRUE;

								      return $resultado_e_numero_do_erro;
				                    }

				                  else
				                    {
				                      $resultado_e_numero_do_erro['numero_do_erro'] = '168';

				                      return $resultado_e_numero_do_erro;
				                    }
				                }
			                }
			            } // Fecha a estrutura foreach.

			          unset($frequencia_);

				      // A tentativa falhou mas nao excedeu a tolerancia.
				      if ($_SESSION['tentativas_falhas'] <= $tolerancia)
				        {
				          return $resultado_e_numero_do_erro;
				        }

				      // A tentativa falhou e excedeu a tolerancia. Bloqueia-se a sessao.
				      elseif ($_SESSION['tentativas_falhas'] > $tolerancia)
				        {
				          $resultado_e_numero_do_erro['resultado'] = TRUE;
				        	
				          return $resultado_e_numero_do_erro;
				        }

				      // Erro.
				      else
				        {
				          $resultado_e_numero_do_erro['numero_do_erro'] = '169';

				          return $resultado_e_numero_do_erro;
				        }
	                } // Fecha a 2a estrutura.

	              // 3a estrutura: possibilidade 3, o conteudo do argumento "$informacao" obedece ao padrao mas corresponde a mais de uma conta, o que provavelmente indica a existencia de linha repetida.
	              else
	                {
	                  $resultado_e_numero_do_erro['numero_do_erro'] = '170';
	                	
	                  return $resultado_e_numero_do_erro;
	                } // Fecha a 3a estrutura.
	            }
            }

          // A tentativa falha ocorreu mas foi possivel verificar o cumprimento do padrao por parte da informacao fornecida.
          elseif (isset($_SESSION['informacoes_dentro_dos_padroes']) && ($_SESSION['informacoes_dentro_dos_padroes'] === TRUE))
            {
              unset($_SESSION['informacoes_dentro_dos_padroes']);

              $resource_select_controla_bloqueio	= mysql_query($query_select_controla_bloqueio);
              if (!$resource_select_controla_bloqueio)
                {
                  $resultado_e_numero_do_erro['numero_do_erro'] = '162';
                	
                  return $resultado_e_numero_do_erro;
                }

              $select_controla_bloqueio				= mysql_fetch_assoc($resource_select_controla_bloqueio);

              // 1a estrutura: possibilidade 1, o conteudo do argumento "$informacao" obedece ao padrao mas nao corresponde a conta alguma.
              if ((mysql_num_rows($resource_select_controla_bloqueio) == 0) || ($select_controla_bloqueio === FALSE))
                {
                  mysql_free_result($resource_select_controla_bloqueio);

			      // A tentativa falhou mas nao excedeu a tolerancia.
			      if ($_SESSION['tentativas_falhas'] <= $tolerancia)
			        {
			          return $resultado_e_numero_do_erro;
			        }

			      // A tentativa falhou e excedeu a tolerancia. Bloqueia-se apenas a sessao.
			      elseif ($_SESSION['tentativas_falhas'] > $tolerancia)
			        {
			          $resultado_e_numero_do_erro['resultado'] = TRUE;
			        	
			          return $resultado_e_numero_do_erro;
			        }

			      // Erro.
			      else
			        {
			          $resultado_e_numero_do_erro['numero_do_erro'] = '163';

			          return $resultado_e_numero_do_erro;
			        }
                } // Fecha a 1a estrutura.

              // 2a estrutura: possibilidade 2, o conteudo do argumento "$informacao" obedece ao padrao, e corresponde a uma conta cujo numero de cliente sera armazenado em "$_SESSION['numero_do_cliente']".
              elseif (mysql_num_rows($resource_select_controla_bloqueio) == 1)
                {
                  switch ($rdbms_account)
                    {
                	  case 'ourinvest4':
                	    $_SESSION['numero_do_cliente'][($_SESSION['tentativas_falhas'] - 1)] = $select_controla_bloqueio['NrCli'];

                	    break;

                	  case 'ourinvest6':
                	    $_SESSION['numero_do_cliente'][($_SESSION['tentativas_falhas'] - 1)] = $select_controla_bloqueio['Chave'];

                	    break;
                	
                	  default:
                	    $resultado_e_numero_do_erro['numero_do_erro'] = '226';
                	
                	    return $resultado_e_numero_do_erro;

                	    exit();

                	    break;
                    }

		          // Verifica-se o numero de tentativas falhas ja realizadas para valores de NrCli eventualmente armazenados em "$_SESSION['numero_do_cliente']".
		          $frequency_array_ = array_count_values($_SESSION['numero_do_cliente']);

		          foreach($frequency_array_ as $indice_ => $frequencia_)
		            {
		              if ($rdbms_account === 'ourinvest4')
		                {
		            	  $query_update_controla_bloqueio		= sprintf("UPDATE dbplplogin." . PLPCONF_TBL_PREFIX . "tbl_Site_ClientePrimAcesso SET bloqueio = 's' , data_bloqueio = NOW() WHERE NrCli = '%s'", mysql_real_escape_string($indice_));
		            	  $query_select_eMail					= sprintf("SELECT NrCli, eMail FROM dbplplogin." . PLPCONF_TBL_PREFIX . "tbl_Site_ClientePrimAcesso WHERE NrCli = '%s'", mysql_real_escape_string($indice_));
		            	}
		            	
		              elseif ($rdbms_account === 'ourinvest6')
		            	{
		            	  $query_update_controla_bloqueio		= sprintf("UPDATE dbplplogin_back_end." . PLPCONF_TBL_PREFIX . "tbl_back_end_login SET bloqueio = 's' , data_bloqueio = NOW() WHERE Chave = '%s'", mysql_real_escape_string($indice_));
		            	  $query_select_eMail					= sprintf("SELECT Chave, eMail FROM dbplplogin_back_end." . PLPCONF_TBL_PREFIX . "tbl_back_end_login WHERE Chave = '%s'", mysql_real_escape_string($indice_));
		            	}
		            	
		              else
		                {
		            	  $resultado_e_numero_do_erro['numero_do_erro'] = '227';

		            	  return $resultado_e_numero_do_erro;
		                }

		              // Contas que sofreram tres ou mais tentativas falhas de acesso sao bloqueadas e e-mails sao enviados.
		              if($frequencia_ > 3)
		                {
		                  $resource_update_controla_bloqueio	= mysql_query($query_update_controla_bloqueio);
			              if (!$resource_update_controla_bloqueio)
			                {
			                  mysql_free_result($resource_select_controla_bloqueio);

			                  $resultado_e_numero_do_erro['numero_do_erro'] = '164';
			                  
			                  return $resultado_e_numero_do_erro;
			                }

			              else
			                {
					          $resource_select_eMail	= mysql_query($query_select_eMail);
					          if (!$resource_select_eMail)
					            {
					              mysql_free_result($resource_select_controla_bloqueio);

					              $resultado_e_numero_do_erro['numero_do_erro'] = '230';

					              return $resultado_e_numero_do_erro;
					            }

					          $select_eMail				= mysql_fetch_assoc($resource_select_eMail);
					          $email_da_conta_bloqueada = trim($select_eMail['eMail']);

			                  mysql_free_result($resource_select_controla_bloqueio);
			                  mysql_free_result($resource_select_eMail);

			                  // A conta bloqueada nao possui um endereco de e-mail cadastrado, e assim somente a area responsavel do banco sera notificada. Uma mensagem apenas eh disparada.
			                  if (empty($email_da_conta_bloqueada))
			                    {
							      $mensagem_do_email_2_de_bloqueio				= '\nNAO RESPONDA A ESTA MENSAGEM. ELA FOI GERADA AUTOMATICAMENTE.\n\nO acesso via Internet a uma conta SEM E-MAIL CADASTRADO foi bloqueado.\n\n\nBANCO OURINVEST\n';
							      $mensagem_do_email_2_de_bloqueio_formatada	= wordwrap($mensagem_do_email_2_de_bloqueio, 70);

							      $envio_do_email_2								= mail($email_do_administrador, $assunto_dos_emails_de_bloqueio, $mensagem_do_email_2_de_bloqueio_formatada, $headers_dos_emails_de_bloqueio);
							      if (!$envio_do_email_2)
							        {
				                      $resultado_e_numero_do_erro['numero_do_erro'] = '166';

				                      return $resultado_e_numero_do_erro;
							        }
			                    }

			                  // A conta bloqueada possui um endereco de e-mail cadastrado, e assim duas mensagens sao disparadas.
			                  elseif (!empty($email_da_conta_bloqueada))
			                    {
							      $mensagem_do_email_2_de_bloqueio				= "\nNAO RESPONDA A ESTA MENSAGEM. ELA FOI GERADA AUTOMATICAMENTE.\n\nO acesso via Internet à conta cujo e-mail é\n\n" . (string)$email_da_conta_bloqueada . "\n\nfoi bloqueado.\n\n\nBANCO OURINVEST\n";
							      $mensagem_do_email_2_de_bloqueio_formatada	= wordwrap($mensagem_do_email_2_de_bloqueio, 70);

							      $envio_do_email_2								= mail($email_do_administrador, $assunto_dos_emails_de_bloqueio, $mensagem_do_email_2_de_bloqueio_formatada, $headers_dos_emails_de_bloqueio);
							      $envio_do_email_1								= mail($email_da_conta_bloqueada, $assunto_dos_emails_de_bloqueio, $mensagem_do_email_1_de_bloqueio_formatada, $headers_dos_emails_de_bloqueio);

							      if (!$envio_do_email_2 || !$envio_do_email_1)
							        {
				                      $resultado_e_numero_do_erro['numero_do_erro'] = '167';

				                      return $resultado_e_numero_do_erro;
							        }

							      $resultado_e_numero_do_erro['resultado'] = TRUE;

							      return $resultado_e_numero_do_erro;
			                    }

			                  else
			                    {
			                      $resultado_e_numero_do_erro['numero_do_erro'] = '168';

			                      return $resultado_e_numero_do_erro;
			                    }
			                }
		                }
		            } // Fecha a estrutura foreach.

		          unset($frequencia_);

			      // A tentativa falhou mas nao excedeu a tolerancia.
			      if ($_SESSION['tentativas_falhas'] <= $tolerancia)
			        {
			          return $resultado_e_numero_do_erro;
			        }

			      // A tentativa falhou e excedeu a tolerancia. Bloqueia-se a sessao.
			      elseif ($_SESSION['tentativas_falhas'] > $tolerancia)
			        {
			          $resultado_e_numero_do_erro['resultado'] = TRUE;

			          return $resultado_e_numero_do_erro;
			        }

			      // Erro.
			      else
			        {
			          $resultado_e_numero_do_erro['numero_do_erro'] = '171';
			        	
			          return $resultado_e_numero_do_erro;
			        }
                } // Fecha a 2a estrutura.

              // 3a estrutura: possibilidade 3, o conteudo do argumento "$informacao" obedece ao padrao mas corresponde a mais de uma conta, o que provavelmente indica a existencia de linha repetida.
              else
                {
                  $resultado_e_numero_do_erro['numero_do_erro'] = '172';
                	
                  return $resultado_e_numero_do_erro;
                } // Fecha a 3a estrutura.
            }

	      // Problemas: a variavel de sessao "$_SESSION['informacoes_dentro_dos_padroes']" foi inicializada mas possui valor inesperado. Impossivel verificar se existe uma conta.
	      elseif (isset($_SESSION['informacoes_dentro_dos_padroes']) && ($_SESSION['informacoes_dentro_dos_padroes'] != TRUE))
	        {
	          unset($_SESSION['informacoes_dentro_dos_padroes']);

	          $resultado_e_numero_do_erro['numero_do_erro'] = '173';

	          return $resultado_e_numero_do_erro;
	        }
        } // Fecha o 1o TESTE DO CONTROLE DE BLOQUEIO.

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////	2o TESTE DO CONTROLE DE BLOQUEIO
////////
////////	Uma tentativa falha ocorre, e eh possivel determinar que a
////////	informacao fornecida ("$informacao") corresponde a uma
////////	conta existente no plp:
////////
////////	  * 1a estrutura
////////	      possibilidade 1 (teste para confirmar e existencia
////////	      da conta), o conteudo do argumento "$informacao"
////////	      obedece ao padrao mas nao corresponde a conta
////////	      alguma, o que contraria o valor TRUE em
////////	      "$conta_existente";
////////
////////	  * 2a estrutura
////////	      possibilidade 2 (teste para confirmar e existencia
////////	      da conta), o conteudo do argumento "$informacao"
////////	      obedece ao padrao, e de fato corresponde a uma conta
////////	      cujo numero de cliente sera armazenado em
////////	      "$_SESSION['numero_do_cliente']"; a 2a estrutura
////////	      confirma o valor TRUE em "$conta_existente"; e
////////
////////	  * 3a estrutura
////////	      possibilidade 3, o conteudo do argumento
////////	      "$informacao" obedece ao padrao mas corresponde a
////////	      mais de uma conta, o que provavelmente indica a
////////	      existencia de linha repetida.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
      elseif ($conta_existente === TRUE)
        {
          $resource_select_controla_bloqueio	= mysql_query($query_select_controla_bloqueio);
          if (!$resource_select_controla_bloqueio)
            {
              $resultado_e_numero_do_erro['numero_do_erro'] = '174';
            	
              return $resultado_e_numero_do_erro;
            }

          $select_controla_bloqueio				= mysql_fetch_assoc($resource_select_controla_bloqueio);

          // 1a estrutura
          if ((mysql_num_rows($resource_select_controla_bloqueio) == 0) || ($select_controla_bloqueio === FALSE))
            {
              mysql_free_result($resource_select_controla_bloqueio);

		      // A tentativa falhou mas nao excedeu a tolerancia.
		      if ($_SESSION['tentativas_falhas'] <= $tolerancia)
		        {
		          return $resultado_e_numero_do_erro;
		        }

		      // A tentativa falhou e excedeu a tolerancia. Bloqueia-se apenas a sessao.
		      elseif ($_SESSION['tentativas_falhas'] > $tolerancia)
		        {
		          $resultado_e_numero_do_erro['resultado'] = TRUE;

		          return $resultado_e_numero_do_erro;
		        }

		      // Erro.
		      else
		        {
		          $resultado_e_numero_do_erro['numero_do_erro'] = '175';
		        	
		          return $resultado_e_numero_do_erro;
		        }
            } // Fecha a 1a estrutura.

          // 2a estrutura
          elseif (mysql_num_rows($resource_select_controla_bloqueio) == 1)
            {
              switch ($rdbms_account)
                {
            	  case 'ourinvest4':
            	    $_SESSION['numero_do_cliente'][($_SESSION['tentativas_falhas'] - 1)] = $select_controla_bloqueio['NrCli'];

            	    break;

            	  case 'ourinvest6':
            	    $_SESSION['numero_do_cliente'][($_SESSION['tentativas_falhas'] - 1)] = $select_controla_bloqueio['Chave'];

            	    break;
            			 
            	  default:
            	    $resultado_e_numero_do_erro['numero_do_erro'] = '228';

            	    return $resultado_e_numero_do_erro;

            	    exit();

            	    break;
            	}

	          // Verifica-se o numero de tentativas falhas ja realizadas para valores de NrCli eventualmente armazenados em "$_SESSION['numero_do_cliente']".
	          $frequency_array_ = array_count_values($_SESSION['numero_do_cliente']);

	          foreach($frequency_array_ as $indice_ => $frequencia_)
	            {
	              if ($rdbms_account === 'ourinvest4')
	            	{
	            		$query_update_controla_bloqueio		= sprintf("UPDATE dbplplogin." . PLPCONF_TBL_PREFIX . "tbl_Site_ClientePrimAcesso SET bloqueio = 's' , data_bloqueio = NOW() WHERE NrCli = '%s'", mysql_real_escape_string($indice_));
	            		$query_select_eMail					= sprintf("SELECT NrCli, eMail FROM dbplplogin." . PLPCONF_TBL_PREFIX . "tbl_Site_ClientePrimAcesso WHERE NrCli = '%s'", mysql_real_escape_string($indice_));
	            	}

	              elseif ($rdbms_account === 'ourinvest6')
	            	{
	            		$query_update_controla_bloqueio		= sprintf("UPDATE dbplplogin_back_end." . PLPCONF_TBL_PREFIX . "tbl_back_end_login SET bloqueio = 's' , data_bloqueio = NOW() WHERE Chave = '%s'", mysql_real_escape_string($indice_));
	            		$query_select_eMail					= sprintf("SELECT Chave, eMail FROM dbplplogin_back_end." . PLPCONF_TBL_PREFIX . "tbl_back_end_login WHERE Chave = '%s'", mysql_real_escape_string($indice_));
	            	}

	              else
	            	{
	            		$resultado_e_numero_do_erro['numero_do_erro'] = '229';
	            	
	            		return $resultado_e_numero_do_erro;
	            	}

	              // Contas que sofreram tres ou mais tentativas falhas de acesso sao bloqueadas e e-mails sao enviados.
	              if($frequencia_ > 3)
	                {
	                  $resource_update_controla_bloqueio	= mysql_query($query_update_controla_bloqueio);
		              if (!$resource_update_controla_bloqueio)
		                {
		                  mysql_free_result($resource_select_controla_bloqueio);

		                  $resultado_e_numero_do_erro['numero_do_erro'] = '176';

		                  return $resultado_e_numero_do_erro;
		                }

		              else
		                {
				          $resource_select_eMail	= mysql_query($query_select_eMail);
				          if (!$resource_select_eMail)
				            {
				              mysql_free_result($resource_select_controla_bloqueio);

				              $resultado_e_numero_do_erro['numero_do_erro'] = '177';
				              
				              return $resultado_e_numero_do_erro;
				            }

				          $select_eMail				= mysql_fetch_assoc($resource_select_eMail);
				          $email_da_conta_bloqueada = trim($select_eMail['eMail']);

		                  mysql_free_result($resource_select_controla_bloqueio);
		                  mysql_free_result($resource_select_eMail);

		                  // A conta bloqueada nao possui um endereco de e-mail cadastrado, e assim somente a area responsavel do banco sera notificada. Uma mensagem apenas eh disparada.
		                  if (empty($email_da_conta_bloqueada))
		                    {
						      $mensagem_do_email_2_de_bloqueio				= "\nNAO RESPONDA A ESTA MENSAGEM. ELA FOI GERADA AUTOMATICAMENTE.\n\nO acesso via Internet a uma conta SEM E-MAIL CADASTRADO foi bloqueado.\n\n\nBANCO OURINVEST\n";
						      $mensagem_do_email_2_de_bloqueio_formatada	= wordwrap($mensagem_do_email_2_de_bloqueio, 70);

						      $envio_do_email_2								= mail($email_do_administrador, $assunto_dos_emails_de_bloqueio, $mensagem_do_email_2_de_bloqueio_formatada, $headers_dos_emails_de_bloqueio);

						      if (!$envio_do_email_2)
						        {
			                      $resultado_e_numero_do_erro['numero_do_erro'] = '217';

			                      return $resultado_e_numero_do_erro;
						        }
		                    }

		                  // A conta bloqueada possui um endereco de e-mail cadastrado, e assim duas mensagens sao disparadas.
		                  elseif (!empty($email_da_conta_bloqueada))
		                    {
						      $mensagem_do_email_2_de_bloqueio				= "\nNAO RESPONDA A ESTA MENSAGEM. ELA FOI GERADA AUTOMATICAMENTE.\n\nO acesso via Internet à conta cujo e-mail é\n\n" . (string)$email_da_conta_bloqueada . "\n\nfoi bloqueado.\n\n\nBANCO OURINVEST\n";
						      $mensagem_do_email_2_de_bloqueio_formatada	= wordwrap($mensagem_do_email_2_de_bloqueio, 70);

						      $envio_do_email_2								= mail($email_do_administrador, $assunto_dos_emails_de_bloqueio, $mensagem_do_email_2_de_bloqueio_formatada, $headers_dos_emails_de_bloqueio);
						      $envio_do_email_1								= mail($email_da_conta_bloqueada, $assunto_dos_emails_de_bloqueio, $mensagem_do_email_1_de_bloqueio_formatada, $headers_dos_emails_de_bloqueio);

						      if (!$envio_do_email_2 || !$envio_do_email_1)
						        {
			                      $resultado_e_numero_do_erro['numero_do_erro'] = '218';

			                      return $resultado_e_numero_do_erro;
						        }

						      $resultado_e_numero_do_erro['resultado'] = TRUE;

						      return $resultado_e_numero_do_erro;
		                    }

		                  else
		                    {
		                      $resultado_e_numero_do_erro['numero_do_erro'] = '219';

		                      return $resultado_e_numero_do_erro;
		                    }
		                }
	                }
	            } // Fecha a estrutura foreach.

	          unset($frequencia_);

		      // A tentativa falhou mas nao excedeu a tolerancia.
		      if ($_SESSION['tentativas_falhas'] <= $tolerancia)
		        {
		          return $resultado_e_numero_do_erro;
		        }

		      // A tentativa falhou e excedeu a tolerancia. Bloqueia-se a sessao.
		      elseif ($_SESSION['tentativas_falhas'] > $tolerancia)
		        {
		          $resultado_e_numero_do_erro['resultado'] = TRUE;

		          return $resultado_e_numero_do_erro;
		        }

		      // Erro.
		      else
		        {
		        	$resultado_e_numero_do_erro['numero_do_erro'] = '220';

		        	return $resultado_e_numero_do_erro;
		        }
            } // Fecha a 2a estrutura.

          // 3a estrutura
          else
            {
              $resultado_e_numero_do_erro['numero_do_erro'] = '221';

              return $resultado_e_numero_do_erro;
            } // Fecha a 3a estrutura.
        } // Fecha o 2o TESTE DO CONTROLE DE BLOQUEIO.

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  3o TESTE DO CONTROLE DE BLOQUEIO
////////
////////  Uma tentativa falha ocorre, e eh possivel determinar que a
////////  informacao fornecida ("$informacao") nao corresponde a uma
////////  conta existente no plp:
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
      elseif ($conta_existente === FALSE)
        {
		  // 1a estrutura
		  if ($_SESSION['tentativas_falhas'] <= $tolerancia)
		    {
		      return $resultado_e_numero_do_erro;
		    }

		  // 2a estrutura
		  elseif ($_SESSION['tentativas_falhas'] > $tolerancia)
		    {
		      $resultado_e_numero_do_erro['resultado'] = TRUE;

		      return $resultado_e_numero_do_erro;
		    }

		  // 3a estrutura
		  else
		    {
		      $resultado_e_numero_do_erro['numero_do_erro'] = '222';

		      return $resultado_e_numero_do_erro;
		    }
        } // Fecha o 3o TESTE DO CONTROLE DE BLOQUEIO.

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
/////////////	4o TESTE DO CONTROLE DE BLOQUEIO
/////////////
/////////////	A variavel "$conta_existente" possui valor inesperado.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
      else
        {
          $resultado_e_numero_do_erro['numero_do_erro'] = '223';

          return $resultado_e_numero_do_erro;
        }

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_BOO_BLOCKCONTROL() ENDING
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      return $var_boo_return;
  } //  Function fun_boo_blockcontrol()'s end.

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_BOO_ISPEARINSTALLED()
////////
////////  fun_boo_ispearinstalled()
////////	  [TEXTO_COM_DESCRICAO_DETALHADA_MAS_SEM_EXEMPLOS].
////////
////////	Argumento(s)
////////	  [APRESENTACAO_DOS_ARGUMENTOS_COM_TEXTO(S)_E_TABELA(S)].
////////
////////	Retorno
////////	  [TEXTO(S)_E/OU_TABELA(S)_SOBRE_O_QUE_A_FUNCAO_RETORNA].
////////
////////	Exemplo(s)
////////	  [EXEMPLOS_DE_USO].
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  function fun_boo_ispearinstalled(){
    
    $var_boo_pearinstalled = FALSE;

    require_once 'System.php';

    $var_boo_pearinstalled = class_exists('System') ? TRUE : FALSE;

    return $var_boo_pearinstalled;
  } //  Function fun_boo_ispearinstalled()'s end.

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_BOO_RMDIRECTORYORFILE()
////////
////////  Removes an archive, a directory, a file or an inode.
////////
////////  DESCRIPTION
////////  Function's detailed description.
////////
////////  PARAMETER(S)
////////
////////  * $var_par_boo_parameter
////////    Parameter description.
////////
////////  RETURN
////////  Return description.
////////
////////  EXAMPLE(S)
////////  Example(s) showing how to use the function.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  function fun_boo_rmdirectoryorfile($var_par_int_type = 0, $var_par_str_path){

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUN_BOO_RMDIRECTORYORFILE() DECLARATION(S) AND
////////       INITIALIZATION(S)
////////
////////  Constant and variable declarations and initializations.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      $var_int_return = 0;

      $var_int_type   = $var_par_int_type;
      
      $var_str_path   = $var_par_str_path;

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_BOO_RMDIRECTORYORFILE() DECLARATION(S) AND
////////       INITIALIZATION(S), CONSTRAINED
////////
////////  Constant and variable declarations and initializations,
////////  constrained.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_BOO_RMDIRECTORYORFILE() BODY
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      switch($var_int_type){

        //  Directory
        case 0:
          
          if (is_dir($var_str_path)){

            rmdir($var_str_path);
          }
          
          else {
            
            $var_int_return = 1;
          }
          
          break;

        //  File.
        case 1:
          
          unlink($var_str_path);
          
          break;
        
        default:
          
          
      }

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_BOO_RMDIRECTORYORFILE() ENDING
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      return $var_int_return;
  } //  Function fun_boo_rmdirectoryorfile's end.

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_CHA_QUOTING()
////////
////////  This is merely a template of a basic PHP function. It might
////////  be copied and pasted, in order to create a new function.
////////
////////  Each function should correspond to entries on both the
////////  STRUCTURE OF THIS FILE'S CONTENT and the
////////  (CO) FUNCTION(S) AVAILABLE sections of this file.
////////
////////  PARAMETER(S)
////////
////////  * $var_par_boo_parameter
////////    Parameter description.
////////
////////  RETURN
////////  Return description.
////////
////////  EXAMPLE(S)
////////  Example(s) showing how to use the function.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  function fun_cha_quoting($var_par_boo_parameter){

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION CHA_FUN_QUOTING() DECLARATION(S) AND
////////       INITIALIZATION(S)
////////
////////  Constant and variable declaration(s) and initialization(s).
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      $bool_var   = $var_par_boo_parameter;

      $cha_retval = a;

      $int_var    = 0;

      $str_var    = '';

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_CHA_QUOTING() DECLARATION(S) AND
////////       INITIALIZATION(S), CONSTRAINED
////////
////////  Constant and variable declaration(s) and initialization(s),
////////  constrained.
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_CHA_QUOTING() BODY
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_CHA_QUOTING() ENDING
////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

      return $cha_retval;
    } //  Function fun_cha_quoting()'s end.

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  (CC) FUNCTION FUN_HANDLE_ERROR()
////////
////////  Esta eh a unica funcao da biblioteca "plp-library.php" que
////////  pode mostrar avisos sobre erros. Todo erro deve remeter a
////////  uma entrada na documentacao com uma descricao e uma solucao.
////////
////////  Erros de planos "a" possuem como solucao os planos "b".
////////
////////  O tratamento de erros cobre rotinas identificadas como
////////  importantes. Idealmente tais rotinas possuem o seguinte
////////  encadeamento de eventos:
////////
////////  i-  registro contendo codigo e mensagem do erro no
////////      arquivo de logs, usando inicialmente a funcao plp_log();
////////      falhando a primeira funcao, a aplicacao tenta usar a
////////      error_log() do PHP, esta ultima funciona com o logger
////////      associado ao ambiente PHP, definido no arquivo php.ini;
////////      e
////////
////////  ii- um plano b, que falhando, leva novamente aos registros
////////      descritos em "i", e entao indisponibiliza a aplicacao.
////////
////////  Todo erro deve possuir:
////////
////////  i-   um codigo que o identifica;
////////
////////  ii-  uma mensagem para sua primeira ocorrencia;
////////
////////  iii- uma outra mensagem para a sua segunda ocorrencia
////////       (plano b).
////////
////////  Sendo fatal o erro do plano b, a aplicacao lanca um aviso
////////  via web, e depois direciona para a pagina inicial.
////////
////////  Argumento(s)
////////
////////  $error_code
////////  Inteiro correspondente ao codigo/numero do erro, exemplos:
////////  32, 87, 156 e etc.
////////
////////  $plano_a
////////  FALSE  plano b.
////////  TRUE   plano a.
////////
////////  $erro_fatal
////////  FALSE  nenhuma mensagem eh mostrada via web.
////////  TRUE   uma mensagem eh mostrada via web.
////////
////////	Retorno
////////	  [TEXTO(S)_E/OU_TABELA(S)_SOBRE_O_QUE_A_FUNCAO_RETORNA].
////////
////////	Exemplo(s)
////////	  [EXEMPLOS_DE_USO].
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  function fun_handle_error($error_code, $plano_a, $erro_fatal){

      if (!is_int($error_code))
        {
          $error_code	= 199;
          $plano_a		= TRUE;
          $erro_fatal	= TRUE;
        }

      elseif ($error_code < 0)
        {
          $error_code	= 200;
          $plano_a		= TRUE;
          $erro_fatal	= TRUE;
        }

      $error_message  = 'Erro ' . (string)$error_code . ($plano_a ? ' a.' : ' b.');

      if (PLPCONF_DISPLAY_WARNINGS === -1)
        {
?>
<script type="text/javascript">
  alert('<?php echo $error_message; ?>');
</script>
<noscript>
  <b>
    <?php echo $error_message; ?>
  </b><br />
  <br />
  O acesso &agrave; &aacute;rea restrita ser&aacute; mais amig&aacute;vel em navegadores web com o suporte a JavaScript ativo.<br />
</noscript>
<?php
        }

      // Log do erro.
      $plp_error_log = plp_log('erro', $error_message) ? TRUE : error_log($error_message, 0);

      if (!$plp_error_log)
        {
          plp_bye((isset($conexao) && is_resource($conexao)) ? $conexao : 'NAO_HA', TRUE);

?>
<script type="text/javascript">
  alert('ERRO 198 b.');
</script>
<noscript>
  <b>
    ERRO 198 b.
  </b><br />
  <br />
  O acesso &agrave; &aacute;rea restrita ser&aacute; mais amig&aacute;vel em navegadores web com o suporte a JavaScript ativo.<br />
</noscript>
<?php

          // header('Location: area-restrita.php');

          exit();
        }

      if ($erro_fatal)
        {

?>
<b>
  ERRO: sistema sem disponibilidade, temporariamente.
</b><br />
<br />
O acesso &agrave; &aacute;rea restrita ser&aacute; mais amig&aacute;vel em navegadores web com o suporte a JavaScript ativo.<br />
<br />
Retorne &agrave; p&aacute;gina inicial <a href="http://<?php echo trim(PLPCONF_DOMAIN); ?>/">clicando aqui</a>.
<?php

          exit();
        }

      else
        {
          return;
        }
  }  //  Function fun_handle_error end.

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
////////  FUNCTION FUN_INT_ICMPPING()
////////
////////  ICMP ping packet with a pre-calculated checksum, through a
////////  raw socket.
////////
////////  The function is supposed to help with:
////////
////////  * online host testing; and
////////  * firewall testing.
////////
////////  This function is based in a post by geoff at spacevs dot com
////////  on php.net.
////////
////////  ICMP type 0: regular recipient echo reply. 
////////  ICMP type 8: regular sender echo request.
////////
////////  Please note the received data is often bigger than the sent
////////  one. 
////////
////////  Argumento(s)
////////
////////  $host
////////
////////	  $timeout
////////	  in seconds. It is used to set the socket.
////////
////////	  $packet
////////	  its content's called payload, here, a string with a
////////	  hex representation.
////////	  It is mainly interesting because it offers the
////////	  possibility of manually encoding (crafting) a packet.
////////	  Default value is CFG_PACKET, which is defined on the
////////	  configuration file.
////////
////////	Return
////////	  $result
////////	  An integer representing the timeout in milliseconds.
////////
////////  Exemplo(s)
////////	  [EXEMPLOS_DE_USO].
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  function fun_int_icmpping($host, $timeout = CFG_MAXTIME_PING, $packet = CFG_PACKET){

      $socket;
      $fp_socket;
      $ts;

      $ts	= 0;

      $socket = socket_create(AF_INET, SOCK_RAW, 1);

      if (is_resource($socket))
        {

          socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, array('sec' => $timeout, 'usec' => 0));
          socket_connect($socket, $host, NULL);

          $ts	= microtime(TRUE);

          socket_send($socket, $packet, strlen($package), 0);

          if (socket_read($socket, 255))
            {
              $result = microtime(TRUE) - $ts;
            }

          socket_close($socket);
        }

      else
        {
          $errorcode	= socket_last_error();

          error_log('socket error code ' . $errorcode . ': ' . socket_strerror($errorcode), 0);

          $ts		= microtime(TRUE);
          $fp_socket	= fsockopen('tcp://' . gethostbyaddr($host));
          $result	= microtime(TRUE) - $ts;

          if ($fp_socket == FALSE)
            {
              error_log('fsockopen error', 0);
            }

          else
            {
              fclose($fp_socket);
            }
        }

      return $result;      
    } // Function fun_int_icmpping()'s end.
?>
