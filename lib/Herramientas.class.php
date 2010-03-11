<?php


/**
 * Herramientas: Clase estática con funciones generales varias
 *
 * @package    Roraima
 * @subpackage lib
 * @author     $Author: jlobaton $ <desarrollo@cidesa.com.ve>
 * @version SVN: $Id: Herramientas.class.php 34400 2009-11-02 13:16:11Z jlobaton $
 *
 * @copyright  Copyright 2007, Cide S.A.
 * @license    http://opensource.org/licenses/gpl-2.0.php GPLv2
 */
class Herramientas
{
  /**
   * @static
   * @var string $prueba Definición del comentario de una variable.
   */
  static $prueba = 'Variable de Prueba';

  /**
   * @static
   * @var string REGVACIO Comentario para los registros vacíos.
   */
  CONST REGVACIO = '<!Registro no Encontrado o Vacio!>';

  /**
   * Función para retornar datos a partir de una sentencia sql.
   * Esta función retorna un arreglo de registros (Arreglo Bidimencional).
   * @todo Agregar el manejo de errores de base de datos
   *
   * @static
   * @param string $sql Instrucción SQL.
   * @param array &$output Arreglo bidimencional de respuesta.
   * @return bool verdadero si encontro datos.
   */
  public static function BuscarDatos($bd, $sql, &$output)
  {

    $con = Propel::getConnection($bd);
    $stmt = $con->createStatement();
    $rs = $stmt->executeQuery($sql, ResultSet::FETCHMODE_ASSOC);

    $output = array();

    while ($rs->next())
    {
      $fila = $rs->getRow();
      $output[] = $fila;
    }
    if (count($output)>0) return true; else return false;
  }

  public static function instr($palabra,$busqueda,$comienzo,$concurrencia)
  {
    $tamano=strlen($palabra);
    $cont=0;
    $cont_conc=0;

    for ($i=$comienzo;$i<=$tamano-1;$i++){
      $cont=$cont+1;
      if ($palabra[$i]==$busqueda):
      $cont_conc=$cont_conc+1;

      if ($cont_conc==$concurrencia):
      $i=$tamano;
      endif;
      endif;
    }
    if ($concurrencia > $cont_conc ):
    $cont=0;
    else:
    $cont;
    endif;

    return $instr=$cont;
  }

  public static function buscarCodigoPadre($campo, $tabla, $data)
  {
   if (!empty($data)){
    eval ('$field = '.ucfirst(strtolower($tabla)).'Peer::'.strtoupper($campo).';');

     $c = new Criteria();
     $c->add($field,$data);
     eval ('$registro = '.ucfirst(strtolower($tabla)).'Peer::doSelectone($c);');
     if ($registro)
     {
       return true;
     }
     else
     {
       return false;
     }
    }
  }

  public static function obtenerMensajeError($cod)
  {
    $errores = sfYaml::load('../config/errores.yml');

    if($errores[$cod]['msj']) return $errores[$cod]['msj'];
    else return 'Error fatal. Consulte al Administrador del Sistema';
  }

  public static function obtenerMenuAyuda($modulo)
  {
    $dir = sfConfig::get('sf_root_dir').'/apps/'.$modulo.'/config/ayuda_'.$modulo.'.yml';

    $menu = sfYaml::load($dir);

    return $menu;
  }

  public static function getMascaraPartida()
  {
    $result=array();
    $i=0;
    $formato="";
    $ruptura="";
      $sql = "SELECT lonniv FROM CPNIVELES where catpar='P' ORDER BY CONSEC";
      if (Herramientas::BuscarDatos($sql,&$result))
      {
        while ($i<count($result))
        {
          $lon= $result[$i]['lonniv'];
          $num='';
          $j=0;
          while ($j<$lon)
          {
            $num=$num.'#';
            $j++;
          }

          if ($i!=(count($result)-1))
          {
            $num=$num.'-';
          }

          $ruptura=$ruptura.$num;
          $i++;
        }
      }//if (Herramientas::BuscarDatos($sql,&$result))
    return $ruptura;
  }

   public static function Cargarcombo($tablas,$filtros_tablas,$filtros_variales,$campos_retornados)
  {
      $c = new Criteria();
      if ($filtros_tablas[0]!='')
      {
        for($a=0;$a<count($filtros_tablas);$a++)
        {
          eval('$c->add('.ucfirst(strtolower($tablas[0])).'Peer::'.strtoupper($filtros_tablas[$a]).','.chr(39).ucfirst(strtolower($filtros_variales[$a])).chr(39).');');
          //print ('$c->add('.ucfirst(strtolower($tablas[0])).'Peer::'.strtoupper($filtros_tablas[$a]).','.chr(39).ucfirst(strtolower($filtros_variales[$a])).chr(39).');');
        }
      }
      eval('$lista_arreglo = '.ucfirst(strtolower($tablas[0])).'Peer::doSelect($c);');
      $arreglo = array();
      foreach($lista_arreglo as $obj_estado)
      {
        eval('$arreglo[$obj_estado->get'.ucfirst(strtolower($campos_retornados[0])).'()] = $obj_estado->get'.ucfirst(strtolower($campos_retornados[1])).'();');
      }
      return $arreglo;
  }

public static function CargarDatosGrid(&$form,$obj,$arreglo = false)
  {
    $i=0;

    $fil=count($obj["datos"])+$obj["filas"];
    $col=count($obj["grabar"]);
    $grabar=$obj["grabar"];
    $campos=$obj["campos"];
    $tipos=$obj["tipos"];
    $name=$obj["name"];
    $eliminar=split("-",$form->getRequestParameter($name.'_txtidborrar'));


    /////////////////////////////////////////////////////////
    // CREAMOS EL ARREGLO DE OBJETOS A INCLUIR Y MODIFICAR //
    /////////////////////////////////////////////////////////
    $objetos=array();
    $objetos2=array();

    while ($i<$fil) {
       $j=0;
       $tabla = $obj['tabla'];
       $id=$name.'x'.$i.'id';

       $cajchk2=$name.'x_'.$i.'_2';
       $cajchk1=$name.'x_'.$i.'_1';
       $cajchk3=$name.'x_'.$i.'_3';
       $cajchk4=$name.'x_'.$i.'_4';
       $cajchk5=$name.'x_'.$i.'_5';

    if($arreglo){
      $clase = array();
    }
    if((trim($form->getRequestParameter($id))!="")) { // Modificación
      if(!$arreglo){
        eval('$clase = '.$tabla.'Peer::retrieveByPk($form->getRequestParameter($id));');
      }else{
        $clase['id'] = $form->getRequestParameter($id);
      }
      while ($j<$col){
        $pos=intval($grabar[$j]);
        $caja=$name.'x_'.$i.'_'.$pos;
        $tira1='$clase->set';
        $tira2='(';
        $tira3=');';

        if ($tipos[$pos-1]=="t"){
          if(!$arreglo)
              $valor = "'".$form->getRequestParameter($caja)."'";
          else
              $valor = $form->getRequestParameter($caja);
          }
        elseif ($tipos[$pos-1]=="m") {
            if ($form->getRequestParameter($caja)=="0,00")
                $valor = $form->getRequestParameter($caja);
            else
               $valor = Herramientas::toFloat($form->getRequestParameter($caja),3);
        }elseif ($tipos[$pos-1]=="f"){
          $dateFormat = new sfDateFormat('es_VE');
          $str_fecha = $form->getRequestParameter($caja);
          if (!is_array($str_fecha))
          {
            if($str_fecha!=''){
              $valor = $dateFormat->format($str_fecha, 'i', $dateFormat->getInputPattern('d'));
            }else $valor="";
          }
          else
          {
            $value_array = $str_fecha;
            $valor = $value_array['year'].'-'.$value_array['month'].'-'.$value_array['day'].(isset($value_array['hour']) ? ' '.$value_array['hour'].':'.$value_array['minute'].(isset($value_array['second']) ? ':'.$value_array['second'] : '') : '');
          }

          if(!$arreglo)
              $valor = "'".$valor."'";
          else
              $valor = $valor;

        }else{
          if(!$arreglo)
              $valor = "'".$form->getRequestParameter($caja)."'";
          else
              $valor = $form->getRequestParameter($caja);
          }

          if(!$arreglo){
            if($valor!="''") eval($tira1.$campos[$pos-1].$tira2.$valor.$tira3);
          }else{
            $clase[strtolower($campos[$pos-1])] = $valor;
          }

        $j++;
        }
        $objetos[] = $clase;
      }elseif ( (trim($form->getRequestParameter($id))=="") && ( (trim($form->getRequestParameter($cajchk1)!="")) || (trim($form->getRequestParameter($cajchk2)!="")) || (trim($form->getRequestParameter($cajchk3,'')!="") && trim($form->getRequestParameter($cajchk3,'')!="0,00")) || (trim($form->getRequestParameter($cajchk4,'')!="" && trim($form->getRequestParameter($cajchk4,'')!="0,00"))) || (trim($form->getRequestParameter($cajchk5,'')!="" && trim($form->getRequestParameter($cajchk5,'')!="0,00"))) ) ) { //nuevo
        if(!$arreglo){
          eval('$clase = new '.$tabla.'();');
        }else{
          $clase['id'] = '';
        }
        while ($j<$col) {
          $pos=intval($grabar[$j]);
          $caja=$name.'x_'.$i.'_'.$pos;
          $tira1='$clase->set';
          $tira2='(';
          $tira3=');';
          if ($tipos[$pos-1]=="t") {
              if(!$arreglo)
                $valor = "'".$form->getRequestParameter($caja)."'";
            else
                $valor = $form->getRequestParameter($caja);
            }elseif ($tipos[$pos-1]=="m") {
              if ($form->getRequestParameter($caja)=="0,00")
                $valor = $form->getRequestParameter($caja);
              else
               $valor = Herramientas::toFloat($form->getRequestParameter($caja),3);
            }
            elseif ($tipos[$pos-1]=="f"){
              $dateFormat = new sfDateFormat('es_VE');
              $str_fecha = $form->getRequestParameter($caja);
              if (!is_array($str_fecha))
              {
                if($str_fecha!=''){
                  $valor = $dateFormat->format($str_fecha, 'i', $dateFormat->getInputPattern('d'));
                }else $valor = "";
              }
              else
              {
                  $value_array = $str_fecha;
                  $valor = $value_array['year'].'-'.$value_array['month'].'-'.$value_array['day'].(isset($value_array['hour']) ? ' '.$value_array['hour'].':'.$value_array['minute'].(isset($value_array['second']) ? ':'.$value_array['second'] : '') : '');
              }
              if(!$arreglo)
              $valor = "'".$valor."'";
            else
                $valor = $valor;
              //$valor = "'".$valor."'";

            }else{
              if(!$arreglo)
                $valor = "'".$form->getRequestParameter($caja)."'";
            else
                $valor = $form->getRequestParameter($caja);
            }
            if(!$arreglo){
              if($valor!="''") eval($tira1.$campos[$pos-1].$tira2.$valor.$tira3);
            }else{
              $clase[strtolower($campos[$pos-1])] = $valor;
            }
            $j++;
          } // While
          $objetos[] = $clase;
      } // elseif
      $i++;
    } // While

//print "<pre>";
//print_r($objetos);
//print "</pre>";

    //////////////////////////////////////////////
    // CREAMOS EL ARREGLO DE OBJETOS A ELIMINAR //
    //////////////////////////////////////////////
    $i=0;
    $tabla = $obj['tabla'];
    while ($i<count($eliminar)) {
     if  ($eliminar[$i]!="")
     {
      if(!$arreglo){
        eval('$clase2 = '.$tabla.'Peer::retrieveByPk($eliminar[$i]);');
      }else $clase2 = $eliminar[$i];
      $objetos2[] = $clase2;
     }
      $i++;
    }

    $form->resultado=array($objetos,$objetos2);

    $context = sfContext::getInstance();

    // Para mantener la información luego de un submit
    $modulo = $context->getModuleName();
    $user = $context->getUser();

    $user->getAttributeHolder()->remove('grid_'.$name,'cidesa/forms/'.$modulo);
    $user->getAttributeHolder()->add(array('grid_'.$name => $form->resultado),'cidesa/forms/'.$modulo);

    return $form->resultado;
  }


  /**
   * Función para retornar datos a una variable pero con mas de un filtro.
   * Esta función retorna un registro.
   *
   * @static
   * @param string $tabla tabla a comparar.
   * @param string $filtros arreglo de campos de la Tabla a la que se van a consultar y comparar.
   * @return string $variables es el nombre del campo que se quiere traer la data.
   * @param string $variables arreglo de variables o campos con la que se va hacer el filtro.
   */
  public static function getXx($tabla,$filtros,$variables,$result)
    {
      if (!empty($variables))
      {
        $c = new Criteria();
        //print $variables[0];
        if (($filtros[0]!='') && ($variables[0]!=''))
        {
            for($a=0;$a<count($filtros);$a++)
            {
              eval('$c->add('.ucfirst(strtolower($tabla)).'Peer::'.strtoupper($filtros[$a]).','.chr(39).$variables[$a].chr(39).');');
            }

          eval('$reg = '.ucfirst(strtolower($tabla)).'Peer::doSelectOne($c);');
          if ($reg)
           {
               eval('$r = $reg->get'.ucfirst(strtolower($result)).'();');
               return $r;
           }
        else
           {
               return '<!Registro no Encontrado o Vacio!>';
           }
        }
       }
    }
  /**
   * Función para retornar datos a una variale con un filtro.
   * Esta función retorna un registro.
   *
   * @static
   * @param string $fieldjoin Campo de la tabla a comparar.
   * @param string $join Tabla a la que se va a consultar
   * @return string $result es el nombre del campo que se quiere traer la data
   * @param string $data variale con la que se va hacer el filtro.
   */
  public static function getX($campos, $tabla, $result, $data)
  {
    if (!empty($data)){
    eval ('$field = '.ucfirst(strtolower($tabla)).'Peer::'.strtoupper($campos).';');

     $c = new Criteria();
     $c->add($field,$data);
     eval ('$reg = '.ucfirst(strtolower($tabla)).'Peer::doSelectone($c);');
     if ($reg)
     {
         eval('$r = $reg->get'.ucfirst(strtolower($result)).'();');
         return $r;
     }
     else
     {
       return '<!Registro no Encontrado o Vacio!>';
     }
    }
  }

  public static function autocompleteAjax($fieldjoin, $join, $result, $data, $filtros='', $variables='')
  {
       $data=strtoupper($data);
     eval ('$field = '.ucfirst(strtolower($join)).'Peer::'.strtoupper($fieldjoin).';');
     $resultado=array();
     $c = new Criteria();
     if ($filtros<>'')
     {
     for($a=0;$a<count($filtros);$a++)
         {
           eval('$c->add('.ucfirst(strtolower($join)).'Peer::'.strtoupper($filtros[$a]).','.chr(39).$variables[$a].chr(39).');');
         }
     }
     $c->add($field, $data.'%', Criteria::LIKE);
     $c->add($field, $data.'%', Criteria::LIKE);
     $c->addAscendingOrderByColumn($field);
     eval ('$des = '.ucfirst(strtolower($join)).'Peer::doSelect($c);');
     if ($des){
       $i=0;
       while ($i<count($des))
       {
         eval('$resultado[$i] = $des[$i]->get'.ucfirst(strtolower($result)).'();');
         $i++;
       }
     }else{
       $resultado[0]='';
     }
     return $resultado;
  }


  public static function mediaNumber($numero)
  {
    $resto = $numero % 2;
    if ($resto == 0) return 0;
    else return 1;
  }

  /**
   * Función similar al datediff de VB
   *
   * @static
   * @param string $interval Tipo de Comparación.
   * @param date $dateTimeBegin Fecha Inicial.
   * @param date $dateTimeEnd Fecha Final.
   * @return string Diferencia
   */
  public static function dateDiff($interval,$dateTimeBegin,$dateTimeEnd) {
    //Parse about any English textual datetime
    //$dateTimeBegin, $dateTimeEnd

    $dateTimeBegin=strtotime($dateTimeBegin);
    if($dateTimeBegin === -1) {
      return("..begin date Invalid");
    }

    $dateTimeEnd=strtotime($dateTimeEnd);
    if($dateTimeEnd === -1) {
      return("..end date Invalid");
    }

    $dif=$dateTimeEnd - $dateTimeBegin;

    switch($interval) {
      case "s"://seconds
        return($dif);

      case "n"://minutes
        return(floor($dif/60)); //60s=1m

      case "h"://hours
        return(floor($dif/3600)); //3600s=1h

      case "d"://days
        return(floor($dif/86400)); //86400s=1d

      case "ww"://Week
        return(floor($dif/604800)); //604800s=1week=1semana

      case "m": //similar result "m" dateDiff Microsoft
        $monthBegin=(date("Y",$dateTimeBegin)*12)+
        date("n",$dateTimeBegin);
        $monthEnd=(date("Y",$dateTimeEnd)*12)+
        date("n",$dateTimeEnd);
        $monthDiff=$monthEnd-$monthBegin;
        return($monthDiff);

      case "yyyy": //similar result "yyyy" dateDiff Microsoft
              return(date("Y",$dateTimeEnd) - date("Y",$dateTimeBegin));

      default:
        return(floor($dif/86400)); //86400s=1d
    }

  }

  /**
   * Función para cargar las configuración del Grid desde un
   * archivo .yml
   *
   * @static
   * @param string $conf Dirección del archivo .yml a usar ó arreglo de columnas para generar el $obj
   * @param array $per Registros que serán incluidos en el arreglo de configuración
   * @return array Configuración del Grid
   */
  public static function getConfigGrid($conf,$per = 'vacio')
  {
    if(is_array($conf) || !is_string($conf)){

      $opciones =  new OpcionesGrid();

      foreach($conf as $c){
        $opciones->addColumna($c);
      }

      return $opciones->getConfig($per);

    }else{

    if(stristr($conf, '/') === FALSE){
      $dirconf = sfConfig::get('sf_app_module_dir').'/'.sfContext::getInstance()->getModuleName().'/config/'.$conf;
      if(file_exists($dirconf.'.yml')) $confgrid = sfYaml::load($dirconf.'.yml');
      else{
        $dirconf = sfConfig::get('sf_lib_dir').'/grids/'.$conf;
        if(file_exists($dirconf.'.yml')) $confgrid = sfYaml::load($dirconf.'.yml');
        else $confgrid = array();
      }
    }else{
      $confgrid = sfYaml::load($conf.'.yml');
    }

    

    $opciones =  new OpcionesGrid();
    $colums = array();

    if(isset($confgrid)){

      foreach($confgrid as $confkey => $confval){

        switch($confkey){
          case 'opciones':

            foreach($confgrid[$confkey] as $key => $val){

              switch($key){
                case 'htmltotalfilas':
                  $metodo = 'setHTMLTotalFilas';
                  $opciones->$metodo($val);
                  break;
                case 'anchogrid':
                  $metodo = 'setAnchogrid';
                  $opciones->$metodo($val);
                  break;
                default:
                  $metodo = 'set'.ucfirst(strtolower($key));
                  $opciones->$metodo($val);
              }
            }

            break;
                default:
                  $indice = ((int)$confkey)-1;
                  $colums[$indice] = new Columna('');
                  foreach($confgrid[$confkey] as $key => $val){
                    switch($key){
                      case 'alineacionobjeto':
                        $metodo = 'setAlineacionObjeto';
                        $colums[$indice]->$metodo($val);
                        break;
                      case 'alineacioncontenido':
                        $metodo = 'setAlineacionContenido';
                        $colums[$indice]->$metodo($val);
                        break;
                      case 'nombrecampo':
                        $metodo = 'setNombreCampo';
                        $colums[$indice]->$metodo($val);
                        break;
                      case 'esnumerico':
                        $metodo = 'setEsNumerico';
                        $colums[$indice]->$metodo($val);
                        break;
                      case 'estotal':
                        $metodo = 'setEsTotal';
                        $colums[$indice]->$metodo($val[0],$val[1]);
                        break;
                      case 'jscript':
                        $metodo = 'setJScript';
                        $colums[$indice]->$metodo($val);
                        break;
                      case 'html':
                        $metodo = 'setHTML';
                        $colums[$indice]->$metodo($val);
                        break;
                      case 'esgrabable':
                        $metodo = 'setEsGrabable';
                        $colums[$indice]->$metodo($val);
                        break;
                      case 'catalogo':
                        $metodo = 'set'.ucfirst(strtolower($key));
                        if(count($val)==4) $val3 = $val[3]; else $val3='';
                        if(count($val)==5) $val4 = $val[4]; else $val4='';
                        $colums[$indice]->$metodo($val[0],$val[1],$val[2],$val3,$val4);
                        break;
                      case 'ajax':
                        $metodo = 'set'.ucfirst(strtolower($key));
                        $colums[$indice]->$metodo($val[0],$val[1],$val[2]);
                        break;
                      case 'clone':
                        //$index = ((int)$key)-1;
                        $colums[$indice] = clone $colums[$val];
                        break;
                      default:
                        $metodo = 'set'.ucfirst(strtolower($key));
                        $colums[$indice]->$metodo($val);
                    }
                  }
        }
      }
    }

    if (isset($opciones) && isset($colums)){

      foreach($colums as $c){
        $opciones->addColumna($c);
      }

      if(is_string($per) && $per='vacio') return array($opciones,$colums);
      else return $opciones->getConfig($per);
    }else return array();
  }

  }

  public static function getxLike($campos, $tabla, $result, $data)
  {
       eval ('$field = '.ucfirst(strtolower($tabla)).'Peer::'.strtoupper($campos).';');

     $c = new Criteria();
     $c->add($field,$data,Criteria::LIKE);
     eval ('$reg = '.ucfirst(strtolower($tabla)).'Peer::doSelectone($c);');
     if ($reg)
    {
         eval('$r = $reg->get'.ucfirst(strtolower($result)).'();');
       return $r;
      }
    else
    {
        return '<!Registro no Encontrado o Vacio!>';
      }
    }
   /**
   * Función getVerCorrelativo
   *
   * @static
   * @param string $campo Campo a Actualizar la suma del correlativo
   * @param string $tabla Tabla a Actualizar.
   * @return string $output mensaje de error
   * @return function  Retorna True si encuentra el Numero del correlativo de lo contrario false
   */
  public static function getVerCorrelativo($campo,$tabla,&$output)
  {
     $c = new Criteria();
     eval ('$c->addDescendingOrderByColumn('.ucfirst((strtolower($tabla))).'Peer::'.strtoupper($campo).');');
     eval ('$reg = '.ucfirst(strtolower($tabla)).'Peer::doSelectone($c);');
     if ($reg)
     {
         eval('$r = $reg->get'.ucfirst(strtolower($campo)).'();');
         $output = $r+1;
      return true;
     }
     else
     {
         $output='El numero inicial del Correlativo no ha sido definido';
        return false;
     }
  }

  /**
   * Función getSalvarCorrelativo
   *
   * @static
   * @param string $campo Campo a Actualizar la suma del correlativo
   * @param string $tabla Tabla a Actualizar.
   * @param string $tipo Para definir el tipo de Requerimiento en la salida del mensaje.
   * @param integer $r Numero a Actualizar en la tabla.
   * @return string $msg Mensaje a imprimir
   * @return function  Retorna True si se realizo con exito de lo contraripo false
   */
  public static function getSalvarCorrelativo($campo,$tabla,$tipo,$re,&$msg)
  {
     if ($re)
     {
      $c = new Criteria();
      $listo=false;
        eval ('$obj = '.ucfirst(strtolower($tabla)).'Peer::doSelectone($c);');
      if ($obj)
      {
        eval('$obj->set'.ucfirst(strtolower($campo)).'('.$re.');');
        eval('$obj->save();');
        $msg='Desea Imprimir la '.ucfirst(strtolower($tipo)).' N°'.$re;
        $listo=true;
      }
      if ($listo)
      {
        return true;
      }
      else
      {
        $msg='El numero inicial del Correlativo de '.ucfirst(strtolower($tipo)).' no ha sido definido';
        return false;
      }
     }
     else
     {
       $msg='El numero inicial del Correlativo de '.ucfirst(strtolower($tipo)).' no ha sido definido';
         return false;
     }
  }

  public static function getHay_Despacho($campo)
  {
    $c = new Criteria();
    $c->add(CadphartserPeer::REQART,$campo);
    $reg = CadphartserPeer::doSelectone($c);
    if ($reg) return true; else return false;
  }

  public static function getMascaraCategoria(){

    $result=array();
      $sql = "Select rupcat, ruppar, forpre From cpdefniv";
      $reg = CpdefnivPeer::doCount(new Criteria());
      $i=1;
      if (Herramientas::BuscarDatos($sql,&$result))
      {
    $categoria = $result[0]['rupcat'];
    $partidas = $result[0]['ruppar'];
    $formatocategoria = $result[0]['forpre'];
    $arr = explode('-',trim($formatocategoria));
    $mask = '';
    foreach ($arr as $index => $a){

      if(($index+1)==$categoria){
         $mask.= $a;
         break;
      }
      else  $mask.= $a.'-';

    }
    return $mask;
    }
      else return '#';

  }

  public static function getObtener_FormatoCategoria()
  {
    $result=array();
    $sql = "Select rupcat, ruppar, forpre From CpDefNiv";
    $i=1;
    if (Herramientas::BuscarDatos($sql,&$result))
    {
      $categoria = $result[0]['rupcat'];
      $partidas = $result[0]['ruppar'];
      $formatocategoria = $result[0]['forpre'];
      $posicion=0;
      while ($i<=$categoria)
      {
        $posicion=Herramientas::instr($formatocategoria,'-',$posicion,1)+$posicion;
        $i++;
      }
      $formatocategoria = substr($formatocategoria, 0, $posicion - 1);
      return $formatocategoria;
    }
    else return '#';
  }


  public static function getX_vacio($campos=array(), $tabla, $result, $data=array())
    {
	if (!empty($data[0]) or !empty($data)) {
        if (is_array($campos))
        {
          if (!empty($campos[0]) && (!empty($data[0])))
          {
          $c = new Criteria();
            for($a=0;$a<count($campos)-1;$a++)
            {
              //eval ('$field = '.ucfirst(strtolower($tabla)).'Peer::'.strtoupper($campos[$a]).';');
             eval('$c->add('.ucfirst(strtolower($tabla)).'Peer::'.strtoupper($campos[$a]).','.chr(39).$data[$a].chr(39).');');
            }
          }//if (!empty($campos[0]) && (!empty($data[0])))
        }// if (is_array($campos))
        else
          {
              eval ('$field = '.ucfirst(strtolower($tabla)).'Peer::'.strtoupper($campos).';');
         $c = new Criteria();
         $c->add($field,$data);
          }//else
           //$c->add($field,$data);

            //for($a=0;$a<count($campos);$a++)
            //{
              //eval('$c->add('.ucfirst(strtolower($tabla)).'Peer::'.strtoupper($campos[$a]).','.chr(39).$data[$a].chr(39).');');
            //}
         eval ('$reg = '.ucfirst(strtolower($tabla)).'Peer::doSelectone($c);');
         if ($reg)
         {
            eval('$r = $reg->get'.ucfirst(strtolower($result)).'();');
             return $r;
         }
         else
         {
           return '';
         }
	}
	      return '';
      }//end function


  public static function Obtener_FormatoPresupuesto() //Dependiendo de un Criterio
  {
    $c = new Criteria();
    $dato= CadefartPeer::doSelectOne($c);
    if ($dato)
    {
     if ($dato->getAsiparrec()=='P')
     {
      $c = new Criteria();
      $formato= CpdefnivPeer::doSelectOne($c);
       if ($formato)
      {
       return $formato->getForpre();
       }
     }
    else
    {
      $result=array();
      $sql = "Select rupcat, ruppar, forpre From CpDefNiv";
      $i=1;
      if (Herramientas::BuscarDatos($sql,&$result))
      {
       $categoria = $result[0]['rupcat'];
       $partidas = $result[0]['ruppar'];
       $formatopresupuesto = $result[0]['forpre'];
       $posicion=0;
       while ($i<=$categoria)
      {
        $posicion=Herramientas::instr($formatopresupuesto,'-',$posicion,1)+$posicion;
        $i++;
      }
      $formatocategoria = substr($formatopresupuesto, 0, $posicion - 1);
      $formatopartida = trim(substr($formatopresupuesto, strlen($formatocategoria) + 1, strlen($formatopresupuesto)-1));
      return $formatopartida;
     }
     return $formatopartida;
    }
   }//if (dato)
  }

  public static function cargarMoneda()
  {
  $c = new Criteria();
  $lista_mon = TsdesmonPeer::doSelect($c);
  // TODO: Hacer un distinct para las monedas, ya que se repiten a futuro

  $monedas = array();

  foreach($lista_mon as $obj_mon)
  {
    $monedas += array($obj_mon->getCodmon() => $obj_mon->getNommon());
  }
  return $monedas;
    }

   public static function convnume($str)
  {
    if ($str=='')
    {
      $str=0;
    }
   $str = str_replace('.', '', $str);
   $str = str_replace(',', '.', $str);
   return floatval($str);
 }

  public static function formatoPresupuesto()
  {
    $c = new Criteria();
    $c->add(CpdefnivPeer::CODEMP,'001');
    $formato= CpdefnivPeer::doSelectOne($c);
    if ($formato)
    {
      return $formato->getForpre();
    }
  }

  /**
   * Función para retornar datos a partir de una sentencia sql.
   * Esta función retorna un arreglo de registros (Arreglo Bidimencional).
   * @todo Agregar el manejo de errores de base de datos
   *
   * @static
   * @param string $sql Instrucción SQL.
   * @param array &$output Arreglo bidimencional de respuesta.
   * @return bool verdadero si encontro datos.
   * @autor: Ing Jesus Lobaton. 07/06/2007
   */
  public static function EliminarRegistro($NombreTabla,$CampoClave,$ValorDelCampoClave)
  {
    eval ('$field = '.ucfirst(strtolower($NombreTabla)).'Peer::'.strtoupper($CampoClave).';');

    $c = new Criteria();
    $c->add($field,$ValorDelCampoClave);
  eval (ucfirst(strtolower($NombreTabla)).'Peer::doDelete($c);');
  }

  /**
   * Función para sumar los datos de un campo, en base a un arreglod e registros
   *
   * @static
   * @param array $arrayobj Arreglo de objetos a sumar
   * @param array &field Campo que se va a suma
   * @return float Suma total del campo &field de cada uno de los objetos de $arrayobj
   * @autor: Ing Luis Hernández. 18/06/2007
   */
  public static function sumFields($arrayobj, $field){

    $total = 0.0;

    $field = 'get'.ucfirst(strtolower($field));

    foreach($arrayobj as $obj){

      $total += $obj->$field();

    }

    return $total;

  }

  public static function getObtener_FormatoPartida_Formulacion()
  {
    $result=array();
    $sql = "Select rupcat, ruppar, forpre From ForDefNiv";
    $i=1;
    if (Herramientas::BuscarDatos($sql,&$result))
    {
      $categoria = $result[0]['rupcat'];
      $partidas = $result[0]['ruppar'];
      $codpre = $result[0]['forpre'];
      $posicion=0;
      while ($i<=$categoria)
      {
        $posicion=Herramientas::instr($codpre,'-',$posicion,1)+$posicion;
        $i++;
      }
      $formatocategoria = substr($codpre, 0, $posicion - 1);
      $formatopartida = trim(substr($codpre, strlen($formatocategoria) + 1, strlen($codpre)-1));
      return $formatopartida;
    }
    else return '#';
  }

  public static function getObtenerNiveles_Formulacion($sql)
  {
    $result=array();
    $i=0;
    if (Herramientas::BuscarDatos($sql,&$result))
    {
      $mascara='';
      while ($i<count($result))
      {
        $mascara = $mascara . '-' . trim($result[$i]['nomabr']);
        $i++;
      }
      $mascara= substr($mascara, 1, strlen($mascara));
      return $mascara;
    }
    else return '';
  }

  public static function formarCodigoPadre($codigo,&$nivelcodigo,&$cad,$formato)
  {
  $nivelcodigo='';
  $format=split("-",$formato);
    $lonfor=strlen($format[0]);
    $loncodigo=(strlen($codigo));
    //echo $formato;
   // exit();
    if ($lonfor==$loncodigo)
    {
      $nivelcodigo=1;
      $cad="";
      $pos=1;
      return false;
    }
    else
    {
      $pos=0;
      while (Herramientas::instr($codigo,'-',$pos,1)!=0)
      {
        $pos=Herramientas::instr($codigo,'-',$pos,1) +$pos;
      }
    }

    if ($pos>0)
    {
      $cad=(substr($codigo,0,$pos-1));
      return true;
     }
  }

  public static function ObtenerFormato($tabla, $formato)
  {
    $c = new Criteria();
  eval ('$registro = '.ucfirst(strtolower($tabla)).'Peer::doSelect($c);');
     if ($registro)
     {
       eval('$dato = $registro[0]->get'.ucfirst(strtolower($formato)).'();');
      return $dato;
     }
     else
     {
       return 'No Encontrado';
     }
  }

  public static function getmascaraarticulo()
  {
    $c = new Criteria();
    $formato= CadefartPeer::doSelectOne($c);
    if ($formato)
      return $formato->getForart();
    else
     return 'No Encontrado';
  }


  public static function Salvar_comprobante($numcom,$feccom,$descom,$debito,$credito,$grid,&$output)
  {
      $var=false;
      $arreglo=$grid[0];
      $i=0;
       $c= new Criteria();
      $c->add(Contabc1Peer::NUMCOM,$numcom);
      $c->add(Contabc1Peer::FECCOM,$feccom);
        $contabc1= Contabc1Peer::doSelectOne($c);
        if (count($contabc1)==0)
        {
        while ($i<count($grid[0]))
        {
          $reg = new Contabc1();
            $reg->setNumcom($numcom);
            $reg->setFeccom($feccom);
            If (($arreglo[$i]['mondebito']>0) and ($arreglo[$i]['moncredito']<=0))
            {
               $cre='D';
                $monto=$arreglo[$i]['mondebito'];
          }
          If (($arreglo[$i]["moncredito"]>0) and ($arreglo[$i]['mondebito']<=0))
            {
               $cre='C';
                $monto=$arreglo[$i]['moncredito'];
            }
            $reg->setDebcre($cre);
            $reg->setCodcta(str_replace("'","",$arreglo[$i]['codcta']));
            $reg->setNumasi($i+1);
          $reg->setRefasi($numcom);
            $desasi=ContabbPeer::getDescta(str_replace("'","",$arreglo[$i]['codcta']));
            $reg->setDesasi($desasi);
            $reg->setMonasi($monto);
          $reg->save();
          $i++;
          $var=true;
        }
      }
      return $var;
  }

  public static function obtenerFormatoCategoria(&$formatopar,&$iniciopartida) //especial para orden de pago
  {
    $result=array();
  $sql = "Select rupcat, ruppar, forpre From CpDefNiv";
  $i=1;
  if (Herramientas::BuscarDatos($sql,&$result))
  {
    $categoria = $result[0]['rupcat'];
    $partidas = $result[0]['ruppar'];
    $formatocategoria = $result[0]['forpre'];
    $posicion=0;
    while ($i<=$categoria)
    {
      $posicion=Herramientas::instr($formatocategoria,'-',$posicion,1)+$posicion;
      $i++;
    }
    $formatocategoria = substr($formatocategoria, 0, $posicion - 1);
    $formatopar=$result[0]['forpre'];
    $posicion=Herramientas::instr($formatopar,' ',$posicion+1,1)+$posicion;
    $iniciopartida=strlen($formatocategoria) + 1;
    return true;
  }else false;
  }

  public static function dateAdd($dmy,$num,$fecha,$signo)
  {
     if ($dmy=='d')
    {
      return date("Y-m-d", strtotime("$fecha $signo$num day"));
    }
    else if ($dmy=='m')
    {
      return date("Y-m-d", strtotime("$fecha $signo$num month"));
    }
    else if ($dmy=='y')
    {
      return date("Y-m-d", strtotime("$fecha $signo$num year"));
    }
    else if ($dmy=='ww')
    {
      return date("Y-m-d", strtotime("$fecha $signo$num week"));
    }
  }

   public static function insertarRegistros($sql)
   {
    $reg = EmpresaPeer::doCount(new Criteria());
    $con = sfContext::getInstance()->getDatabaseConnection($connection='propel');
    $stmt = $con->createStatement();
    $rs = $stmt->executeQuery($sql, ResultSet::FETCHMODE_NUM);
   }

     public static function dia_semana ($dia, $mes, $ano)
  {
      $dias = array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado');
      return $dias[date("w", mktime(0, 0, 0, $mes, $dia, $ano))];
  }

  /**
   * Función para retornar un valor numerico si el dato ha sido modificado.
   * Esta función retorna un valor numerico.
   *
   * @static
   * @param string $valor Dato a comparar.
   * @param string $obj Objeto de la clase.
   * @param string $campo El que se va a comparar con el valor.
   * @author Ing Jesus Lobaton
   * Fecha: 05-09-2007
   */
  public static function ValidarCodigo($valor, $obj, $campo,$tipo='')
  {
    if($obj){
      $id= $obj->getId();
      if (strtoupper($tipo)=='F')
      {
        $dateFormat = new sfDateFormat('es_VE');
        $valor= $dateFormat->format($valor, 'i', $dateFormat->getInputPattern('d'));
      }
      eval('$campo = $obj->get'.ucfirst(strtolower($campo)).'();');
      if (!empty($id)){
        if ($valor == $campo){
          return -1;
          }else{
            return 1;
          }
        }else{
          return -1;
        }
    }else return 1;

  }

  public static function FormatoFecha($fecraya)
  {
   $fecha=split('-',$fecraya);
   $fecbarra=$fecha[2]."/".$fecha[1]."/".$fecha[0];
   return $fecbarra;
  }

  public static function genUrl($url)
  {
    $url = str_replace('?','/',$url);
    $url = str_replace('=','/',$url);
    $url = str_replace('&','/',$url);
    return $url;

  }



  public static function to_json($arra = array())
  {
    $json = '[';
    foreach($arra as $key => $value){
      if(is_array($value)){
        foreach($value as $k => $v){
          $json .= '["'.$key.'_'.$k.'","'.$value.'",""], ';
        }
      }else $json .= '["'.$key.'","'.$value.'",""], ';
    }
    return $json .= '["","",""]]';
  }

  public static function grid_to_json($arra = array(), $grid='a')
  {
    $json = '[';
    foreach($arra as $key0 => $value0){

      foreach($value0 as $key1 => $value1){
        $json .= '["'.$grid.'x_'.$key0.'_'.($key1+1).'","'.$value1.'",""], ';
      }
    }
    return $json .= '["","",""]]';
  }


  public function recorrerArreglo($carmodulo=array(),&$mod)
  {

    foreach($carmodulo as $m => $objmod ){

         if (is_array($objmod))
         {
     self::recorrerArreglo($objmod,&$mod);
         }
         else
       {
         $mod[$m]=$objmod;
       }
        }
  }
  /*<------------------------------------------------------------------------------------------------------->*/
  public static function Campos($codtipcar,$fecdes,&$arreglo,&$arreglo_indice)
  {
    $arreglo=array();
    $arreglo_pasos=array();
    $result=array();
    $j=0;
  $sql = "Select Distinct(gracar) as gracar from NPComOcp where CodTipCar='".$codtipcar."' and Fecdes='".$fecdes."'";
    if (Herramientas::BuscarDatos($sql,&$result))
    {
      while ($j<count($result))
      {
          $result2=array();
          $i=0;
        $sql2 = "Select pascar,suecar from Npcomocp where CodTipCar='".$codtipcar."' and Fecdes='".$fecdes."' and gracar='".$result[$j]['gracar']."' order by pascar asc";
          if (Herramientas::BuscarDatos($sql2,&$result2))
          {
            while ($i<count($result2))
            {
              $arreglo_pasos[$j][$i] = array($result2[$i]['suecar']);
              $i++;
            }
                $arreglo[$result[$j]['gracar']]= $arreglo_pasos[$j];
                $arreglo_indice[]=$result[$j]['gracar'];
          }
        $j++;
      }
    }
    if (count($arreglo)>0) return true; else return false;
  }

  public static function StringPos($token,$cadena,$pos=0)
  {
    $p = strrpos($token,$cadena,$pos);
        if($p===false)
           $p = -1;

    return $p;
  }

  public static function QuitarMonto(&$variable)
  {
    $res = strpos($variable,',',0);
        if ($res!== false)
        {
      $aux= split('\.',$variable);
      $var ='';
      $i=0;
      while ($i<count($aux))
      {
        $var = $var . $aux[$i];
        $i++;
      }
      $var = str_replace(',','.',$var);
      return $var;
        }else
          return $variable;

  }

  public static function QuitarMontov2($variable)
  {
    $res = strpos($variable,',',0);
        if ($res!== false)
        {
      $aux= split('\.',$variable);
      $var ='';
      $i=0;
      while ($i<count($aux))
      {
        $var = $var . $aux[$i];
        $i++;
      }
      $var = str_replace(',','.',$var);
      return $var;
        }else
          return $variable;

  }


  public static function isFloat($value)
  {
    $expresionfloat =  "/^(\d{1,3}\,)(\d{3,3}\,){1,10}(\.\d+)$/";
    $expresionfloat_1 =  "/^(\d{1,10})(\.\d+)$/";
    $expresionfloat_2 =  "/^(\d{1,3}\,){1,10}(\d{3,3})(\.\d+)$/";
    $expresionfloat_3 =  "/^(\d{1,20})$/";
    $expresionfloat_4 =  "/^(\d{1,20})(\.\d+)$/";

    if(preg_match($expresionfloat,$value) || preg_match($expresionfloat_1,$value) || preg_match($expresionfloat_2,$value) || preg_match($expresionfloat_3,$value) || preg_match($expresionfloat_4,$value) ) return true;
    else return false;
  }

  public static function isFloatVE($value)
  {
    $expresionfloatVE =  "/^(\d{1,3}\.)(\d{3,3}\.){1,10}(\,\d+)$/";
    $expresionfloatVE_1 =  "/^(\d{1,10})(\.\d+)$/";
    $expresionfloatVE_2 =  "/^(\d{1,3}\.){1,10}(\d{3,3})(\,\d+)$/";
    $expresionfloatVE_3 =  "/^(\d{1,20})$/";
    $expresionfloatVE_4 =  "/^(\d{1,20})(\,\d+)$/";

    if(preg_match($expresionfloatVE,$value) || preg_match($expresionfloatVE_1,$value) || preg_match($expresionfloatVE_2,$value) || preg_match($expresionfloatVE_3,$value) || preg_match($expresionfloatVE_4,$value) ) return true;
    else return false;

  }

  public static function FloatVEtoFloat($value){
    try{
      $sinpuntos = str_replace('.','',$value);
      $valor_en_float = (float)str_replace(',','.',$sinpuntos);
      if(is_nan($valor_en_float))
          return 0.00;
      else return $valor_en_float;
    }catch(Exception $e){return 0.00;}
  }

  public static function toFloat($value,$decimales=2)
  {
    $valorfloat = 0.0;
    if ( ($value==" ") || ($value=="") || ($value=="NaN"))
    {
      $valorfloat=0.00;
    }else{
      if(Herramientas::isFloat($value) || is_float($value)){
        $value = str_replace(',','',$value);
        $valorfloat = (float)$value;
      }else{

        if(Herramientas::isFloatVE($value))
          $valorfloat = Herramientas::FloatVEtoFloat($value);
        else
          $valorfloat = 0.00;
      }
    }
    return round($valorfloat,$decimales);
  }

  public static function getBuscar_correlativo($valor,$tblcorr,$campocorr,$tabla,$campocom)
  {
    $i=0;
    $seguir=true;
    if ($valor!='')
    {
      $puntero=$valor;
      $result=array();
       $sql = "select * from ".$tabla." where substr(".$campocom.",3,6)='".substr($valor,2,6)."'";
      if (Herramientas::BuscarDatos($sql,&$result))
      {
        if (Herramientas::getVerCorrelativo($campocorr,$tblcorr,&$r))//buscamos el correlastivo
               $puntero=$r;
          else
            $puntero=0;
        $i=0;
        while ($seguir)
        {
          $valor=str_pad($puntero, strlen($valor), '0', STR_PAD_LEFT);
          $sql1 = "select * from ".$tabla." where substr(".$campocom.",3,6)='".substr($valor,2,6)."'";
          if (Herramientas::BuscarDatos($sql1,&$result1))
          {
            $seguir=true;
            $puntero++;
          }
          else
          {
            $seguir=false;
            break;
          }
          $i++;
        }
      }
    }
    return $valor;
  }

  //Buscar el correlativo pero a diferencia de la otra funcion no le quita las 2 primeras letras
  public static function getBuscar_correlativoV2($valor,$tblcorr,$campocorr,$tabla,$campocom)
  {
    $i=0;
    $seguir=true;
    if ($valor!='')
    {
      $puntero=$valor;
      $result=array();
       $sql = "select * from ".$tabla." where $campocom='".$valor."'";
      if (Herramientas::BuscarDatos($sql,&$result))
      {
        if (Herramientas::getVerCorrelativo($campocorr,$tblcorr,&$r))//buscamos el correlastivo
               $puntero=$r;
          else
            $puntero=0;
        $i=0;
        while ($seguir)
        {
          $valor=str_pad($puntero, strlen($valor), '0', STR_PAD_LEFT);
          $sql1 = "select * from ".$tabla." where $campocom='".$valor."'";
          if (Herramientas::BuscarDatos($sql1,&$result1))
          {
            $seguir=true;
            $puntero++;
          }
          else
          {
            $seguir=false;
            break;
          }
          $i++;
        }
      }
    }
    return $valor;
  }


 public static function CargarDatosGridv2(&$form,$obj,$arreglo = false)
  {
    $i=0;
    $name=$obj["name"];
  $datosvista = $form->getRequestParameter('grid'.$name);
    //$fil=count($obj["datos"])+$obj["filas"];
    $fil=count($datosvista);
    $col=count($obj["grabar"]);
    $grabar=$obj["grabar"];
    $campos=$obj["campos"];
    $tipos=$obj["tipos"];
    $oculta=$obj["oculta"];
    $eliminar=split("-",$form->getRequestParameter($name.'_idborrado'));


    /////////////////////////////////////////////////////////
    // CREAMOS EL ARREGLO DE OBJETOS A INCLUIR Y MODIFICAR //
    /////////////////////////////////////////////////////////
    $objetos=array();
    $objetos2=array();

    while ($i<$fil) {
       $j=0;
       $tabla = $obj['tabla'];
       $id='grid'.$name.'_fila'.$i.'_id';
       $datosvista = $form->getRequestParameter('grid'.$name);

    //$form->getRequestParameter('grid'.$name.'['.$i.'][0]','');

       $cajchk1='grid'.$name.'['.$i.'][0]';
       $cajchk2='grid'.$name.'['.$i.'][1]';
       $cajchk3='grid'.$name.'['.$i.'][2]';
       $cajchk4='grid'.$name.'['.$i.'][3]';
       $cajchk5='grid'.$name.'['.$i.'][4]';

//    print '<pre>';
//    print_r($datosvista);
//    print '</pre>fffff';
//    exit();


    if($arreglo){
      $clase = array();
    }
    //print $tabla.'='.$form->getRequestParameter($id).':id    ';
    if((trim($form->getRequestParameter($id))!="") and  $form->getRequestParameter($id)!="0,00") { // Modificación
      if(!$arreglo){
        eval('$clase = '.$tabla.'Peer::retrieveByPk($form->getRequestParameter($id));');
      }else{
        $clase['id'] = $form->getRequestParameter($id);
      }
      while ($j<$col){
        $pos=intval($grabar[$j]);
        //if($oculta[$j]) $caja='grid'.$name.'['.$i.']['.($pos-1).']';
        $caja='grid'.$name.'['.$i.']['.($pos-1).']';
        $tira1='$clase->set';
        $tira2='(';
        $tira3=');';

        if ($tipos[$pos-1]=="t"){
          if(!$arreglo)
              $valor = "'".$form->getRequestParameter($caja)."'";
          else
              $valor = $form->getRequestParameter($caja);
          }
        elseif ($tipos[$pos-1]=="m") {
          //print $caja.'=='.$form->getRequestParameter($caja);
          $valor = self::FloatVEtoFloat($form->getRequestParameter($caja));
          //print '  '.$valor.'  ';
        }elseif ($tipos[$pos-1]=="f"){
          $dateFormat = new sfDateFormat('es_VE');
          $str_fecha = $form->getRequestParameter($caja);
          if (!is_array($str_fecha))
          {
            if($str_fecha!=''){
              $valor = $dateFormat->format($str_fecha, 'i', $dateFormat->getInputPattern('d'));
            }else $valor="";
          }
          else
          {
            $value_array = $str_fecha;
            $valor = $value_array['year'].'-'.$value_array['month'].'-'.$value_array['day'].(isset($value_array['hour']) ? ' '.$value_array['hour'].':'.$value_array['minute'].(isset($value_array['second']) ? ':'.$value_array['second'] : '') : '');
          }

          if(!$arreglo)
              $valor = "'".$valor."'";
          else
              $valor = $valor;
        }elseif ($tipos[$pos-1]=="k"){

          if($form->getRequestParameter($caja))
            $valor = $form->getRequestParameter($caja);
          else
            $valor = '0';
//      print $valor.'-';
        }else{
          if(!$arreglo)
              $valor = "'".$form->getRequestParameter($caja)."'";

          else
              $valor = $form->getRequestParameter($caja);
          }
          if(!$arreglo){
            if($valor!="''") {
              //print $tira1.$campos[$pos-1].$tira2.$valor.$tira3;
              eval($tira1.$campos[$pos-1].$tira2.$valor.$tira3);
            }
          }else{
            $clase[strtolower($campos[$pos-1])] = $valor;
          }

        $j++;
        }
        $objetos[] = $clase;
      }elseif ( (trim($form->getRequestParameter($id))=="") && ( (trim($form->getRequestParameter($cajchk1)!="")) || (trim($form->getRequestParameter($cajchk2)!="") && trim($form->getRequestParameter($cajchk2)!="0,00")) || (trim($form->getRequestParameter($cajchk3,'')!="") && trim($form->getRequestParameter($cajchk3,'')!="0,00")) || (trim($form->getRequestParameter($cajchk4,'')!="" && trim($form->getRequestParameter($cajchk4,'')!="0,00"))) || (trim($form->getRequestParameter($cajchk5,'')!="" && trim($form->getRequestParameter($cajchk5,'')!="0,00"))) ) ) { //nuevo
      //print 'nuevo--';
        if(!$arreglo){
          eval('$clase = new '.$tabla.'();');
        }else{
          $clase['id'] = '';
        }
        while ($j<$col) {
          $pos=intval($grabar[$j]);
          $caja='grid'.$name.'['.$i.']['.($pos-1).']';
          $tira1='$clase->set';
          $tira2='(';
          $tira3=');';
          if ($tipos[$pos-1]=="t") {
              if(!$arreglo)
                $valor = "'".$form->getRequestParameter($caja)."'";
            else
                $valor = $form->getRequestParameter($caja);
            }elseif ($tipos[$pos-1]=="m") {
              $valor = self::FloatVEtoFloat($form->getRequestParameter($caja));
            }
            elseif ($tipos[$pos-1]=="f"){
              $dateFormat = new sfDateFormat('es_VE');
              $str_fecha = $form->getRequestParameter($caja);
              if (!is_array($str_fecha))
              {
                if($str_fecha!=''){
                  $valor = $dateFormat->format($str_fecha, 'i', $dateFormat->getInputPattern('d'));
                }else $valor = "";
              }
              else
              {
                  $value_array = $str_fecha;
                  $valor = $value_array['year'].'-'.$value_array['month'].'-'.$value_array['day'].(isset($value_array['hour']) ? ' '.$value_array['hour'].':'.$value_array['minute'].(isset($value_array['second']) ? ':'.$value_array['second'] : '') : '');
              }
              $valor = "'".$valor."'";
            }elseif ($tipos[$pos-1]=="k"){
            if(($form->getRequestParameter($caja))) $valor = $form->getRequestParameter($caja);
            else $valor = '0';
            }else{
              if(!$arreglo)
                $valor = "'".$form->getRequestParameter($caja)."'";
            else
                $valor = $form->getRequestParameter($caja);
            }
            if(!$arreglo){
              if($valor!="''") eval($tira1.$campos[$pos-1].$tira2.$valor.$tira3);
            }else{
              $clase[strtolower($campos[$pos-1])] = $valor;
            }
            $j++;
          } // While
          $objetos[] = $clase;
      } // elseif
      $i++;
    } // While

//print "<pre>";
//print_r($objetos);
//print "</pre>";
//exit();

    //////////////////////////////////////////////
    // CREAMOS EL ARREGLO DE OBJETOS A ELIMINAR //
    //////////////////////////////////////////////
    $i=0;
    $tabla = $obj['tabla'];
    while ($i<count($eliminar)) {
     if  ($eliminar[$i]!="")
     {
      if(!$arreglo){
        eval('$clase2 = '.$tabla.'Peer::retrieveByPk($eliminar[$i]);');
      }else $clase2 = $eliminar[$i];
      $objetos2[] = $clase2;
     }
      $i++;
    }


    $form->resultado=array($objetos,$objetos2);

    $context = sfContext::getInstance();

    // Para mantener la información luego de un submit
    $modulo = $context->getModuleName();
    $user = $context->getUser();

    $user->getAttributeHolder()->remove('grid_'.$name,'cidesa/forms/'.$modulo);
    $user->getAttributeHolder()->add(array('grid_'.$name => $form->resultado),'cidesa/forms/'.$modulo);

    return $form->resultado;
  }

  public static function validarPeriodoPresuesto($fecha='')
  {
    $posicion=strpos($fecha,'/');

    if ($posicion!=false)
    {
      $dateFormat = new sfDateFormat('es_VE');
      $fecha = $dateFormat->format($fecha, 'i', $dateFormat->getInputPattern('d'));
    }

    $c = new Criteria();
    $c->add(CpperejePeer::CERRADO,'C',Criteria::NOT_EQUAL);
    $c->add(CpperejePeer::FECDES,$fecha,Criteria::LESS_EQUAL);
    $c->add(CpperejePeer::FECHAS,$fecha,Criteria::GREATER_EQUAL);
    $c->add(CpperejePeer::FECINI,$fecha,Criteria::LESS_EQUAL);
    $c->add(CpperejePeer::FECCIE,$fecha,Criteria::GREATER_EQUAL);
    $result= CpperejePeer::doSelectOne($c);
    if ($result)
    {
     return true;
    }
    else
    { return false;}
  }

  public static function validarPeriodoFiscal($fecha='')
  {
    $posicion=strpos($fecha,'/');

    if ($posicion!=false)
    {
      $dateFormat = new sfDateFormat('es_VE');
      $fecha = $dateFormat->format($fecha, 'i', $dateFormat->getInputPattern('d'));
    }

    $c = new Criteria();
    $c->add(CpdefnivPeer::FECINI,$fecha,Criteria::LESS_EQUAL);
    $c->add(CpdefnivPeer::FECCIE,$fecha,Criteria::GREATER_EQUAL);
    $result= CpdefnivPeer::doSelectOne($c);
    if ($result)
    {
     return true;
    }
    else
    { return false;}
  }



  /** wil
   * Función para retornar el dia mes o año segun una fecha indicada
   * @static
   * @param string $fecha:   Fecha a evaluar.
   * @param string $formato: Formato que presenta la fecha a evaluar.
   * @param string $dmoa:    String que desea obtener ejemplo: 'd' para obtener el dia , 'Y' para el año etc.
   * @return string retorna el dia mes o ano segun $dmoa de la fecha $fecha.
   */
public static function obtenerDiaMesOAno($fecha,$formato,$dmoa)
{

  if ($fecha)
  {

    if(($formato == 'Y-m-d') or ($formato == 'Y/m/d'))
    {
      $ano = substr($fecha, 0, 4);
          $mes = substr($fecha, 5, 2);
        $dia  = substr($fecha, 8, 2);
    }
    elseif (($formato == 'y-m-d') or ($formato == 'y/m/d'))
    {
      $ano = substr($fecha, 0, 2);
          $mes = substr($fecha, 3, 2);
        $dia  = substr($fecha, 6, 2);
    }
    elseif (($formato == 'd/m/Y') or ($formato == 'd-m-Y'))
    {
      $dia = substr($fecha, 0, 2);
          $mes = substr($fecha, 3, 2);
        $ano  = substr($fecha, 6, 4);
    }
    elseif (($formato == 'd/m/y') or ($formato == 'd-m-y'))
    {
      $dia = substr($fecha, 0, 2);
          $mes = substr($fecha, 3, 2);
        $ano  = substr($fecha, 6, 2);
    }
    else
    {
      $ano = '';
          $mes = '';
        $dia = '';
    }

  }
  else
  {
      $ano = '';
          $mes = '';
        $dia = '';
  }

  if (($dmoa == 'Y') or ($dmoa == 'y'))
  {
    return $ano;
  }
  elseif (($dmoa == 'm') or ($dmoa == 'M'))
  {
    return $mes;
  }
  elseif (($dmoa == 'd') or ($dmoa == 'D'))
  {
    return $dia;
  }

  }

  public function r($val)
  {
    return round((float)$val,Constantes::DIGITOS);
  }

  public static function toFloatdecimal($value,$numdec)
  {
    $valorfloat = 0.0;
    if ( ($value==" ") || ($value=="") || ($value=="NaN"))
    {
      $valorfloat=0.00;
    }else{
      if(Herramientas::isFloat($value) || is_float($value)){
        $value = str_replace(',','',$value);
        $valorfloat = (double)$value;
      }else{

        if(Herramientas::isFloatVE($value))
          $valorfloat = Herramientas::FloatVEtoFloat2($value);
        else
          $valorfloat = 0.00;
      }
    }
    return round($valorfloat,$numdec);
  }

    public static function FloatVEtoFloat2($value){
    try{
      $sinpuntos = str_replace('.','',$value);
      $valor_en_float = (double)str_replace(',','.',$sinpuntos);
      if(is_nan($valor_en_float))
          return 0.00;
      else return $valor_en_float;
    }catch(Exception $e){return 0.00;}
  }

  public static function PrintR($obj)
  {
    print '<pre>';
    print_r($obj);
    print '</pre>';
  }

/*
 * provide jjsg
*/

  public static function Monto_disponible_ejecucion($ano,$codigo,&$mondis)
  {
      $var=false;
      $mondis=0;
      $result=array();
      $sql="select sum(monasi +
      coalesce(obtener_ejecucion(rtrim(codpre),'01','12','".$ano."','TRA'),0) +
      coalesce(obtener_ejecucion(rtrim(codpre),'01','12','".$ano."','ADI'),0) -
      coalesce(obtener_ejecucion(rtrim(codpre),'01','12','".$ano."','TRN'),0) -
      coalesce(obtener_ejecucion(rtrim(codpre),'01','12','".$ano."','DIS'),0) -
      coalesce(obtener_ejecucion(rtrim(codpre),'01','12','".$ano."','PRC'),0)) as mondis
      from cpasiini where CodPre = '".$codigo."' and anopre='".$ano."' and perpre='00'";
      if (Herramientas::BuscarDatos($sql,&$result))
      {
    if ($result[0]['mondis']!='')
    {
      $mondis=$result[0]['mondis'];
          $var=true;
    }
      }
      return $var;
  }
/*
 * provide jjsg
 * codigo=codigo presupuestario de ultimo nivel
 *
 */

  public static function Monto_disponible($codigo)
  {
     $montodisponible=0;
    $result=array();
    $sql = "SELECT feccie FROM CPDEFNIV WHERE CODEMP='001'";
    if (Herramientas::BuscarDatos($sql,&$result))
    {
      $ano=substr(str_replace("'","",$result[0]['feccie']), 0, 4);
      $resul2 = array ();
      $sql1 = "SELECT nomabr FROM CPNIVELES ORDER BY CONSEC";
      if (Herramientas::BuscarDatos($sql1, & $resul2))
      {
        $longitud = 0;
        for ($a = 0; $a < count($resul2); $a++)
        {
          $longitud = $longitud +strlen($resul2[$a]['nomabr']) + 1;
        }
      $longitud = $longitud -1;
        $var = substr($codigo, 0, $longitud);
    if (Herramientas::Monto_disponible_ejecucion($ano,$var,&$mondis))
      $montodisponible=$mondis;
      }
    }
    return $montodisponible;
  }

    public static function getCampoModelo($val)
  {
    $x = array();
    $x=split('_',$val);
    $i=0;
    $field="";
    while ($i<count($x)){
      $y= $field;
        $field = $y.ucfirst(strtolower($x[$i]));
       $i++;
    }
    return $field;
  }

   public static function cambiarAcentosaHtml($val)
   {
    $val = str_replace("Á","&Aacute;",$val);
    $val = str_replace("á","&aacute;",$val);
    $val = str_replace("É","&Eacute;",$val);
    $val = str_replace("é","&eacute;",$val);
    $val = str_replace("Í","&Iacute;",$val);
    $val = str_replace("í","&iacute;",$val);
    $val = str_replace("Ó","&Oacute;",$val);
    $val = str_replace("ó","&oacute;",$val);
    $val = str_replace("Ú","&Uacute;",$val);
    $val = str_replace("ú","&uacute;",$val);
    return $val;
  }

  public static function BuscarDatos2($sql,&$output)
  {
    $con = Propel::getConnection(EmpresaUserPeer::DATABASE_NAME);
    $stmt = $con->createStatement();
    $rs = $stmt->executeQuery($sql, ResultSet::FETCHMODE_ASSOC);

    $output = array();

    while ($rs->next())
    {
      $fila = $rs->getRow();
      $output[] = $fila;
    }
    if (count($output)>0) return true; else return false;

  }

  public static function array_lineal($arr,$padre='')
  {
    $arrlin = array();
    foreach($arr as $k => $v){
      if(is_array($v)){
        if($padre!='') $p = $padre.' => '.$k; else $p=$k;
        $arrlin = array_merge($arrlin, self::array_lineal($v,$p));
      }else{
        $arrlin[$v] = $padre.' => '.$k;
      }
    }
    return $arrlin;
  }

    public static function obtenerNombreCampo($val){ // $campos
      $x = array();
      $x=split('_',$val);
      $i=0;
      $field="";
      while ($i<count($x)){
        $y= $field;
          $field = $y.ucfirst(strtolower($x[$i]));
          $i++;
      }
      return $field;
  }

  public static function llevar_a_viernes($fecha,&$mensaje)
  {
    $javascript="";
    $dia_semana=date("l",strtotime($fecha));
    $llevarviernes=date('d/m/Y',strtotime($fecha));
    if ($dia_semana=='Saturday')
    {
      $fec_dis=Herramientas::dateAdd('d',1,$fecha,'-');
      $mensaje="La Fecha de Terminación corresponde al Sábado ".date('d/m/Y',strtotime($fecha))." y será llevada al viernes ".date('d/m/Y',strtotime($fec_dis));
      $llevarviernes=date('d/m/Y',strtotime($fec_dis));
    }
    if ($dia_semana=='Sunday')
    {
      $fec_dis=Herramientas::dateAdd('d',2,$fecha,'-');
      $mensaje="La Fecha de Terminación corresponde al Domingo ".date('d/m/Y',strtotime($fecha))." y será llevada al viernes ".date('d/m/Y',strtotime($fec_dis));
      $llevarviernes=date('d/m/Y',strtotime($fec_dis));
    }
    return $llevarviernes;
  }

  public static function iif($testVar,$verdadero,$falso)
  {
      if ($testVar) {
          return $verdadero ;
      }
      else {
          return $falso ;
      }
  }
  public static function FormatoMonto($value,$dec='2')
  {
    $for='VE';
    if ($value==' ')
      $value=0;
    if ($for=='VE')
      $valor = number_format($value,$dec,',','.');
    elseif ($for=='IN')
        $valor = number_format($value,$dec,'.',',');
    else
        $valor = number_format($value,0);

    return $valor;
  }

  public static function FormatoNum($varmonto,$format='VE')
  {
    if($format=='VE')
    {
      $auxvar=str_replace(".","",$varmonto);
    $auxvar=str_replace(",",".",$auxvar);
    }else
    {
    $auxvar=str_replace(",","",$varmonto);
    $auxvar=str_replace(".",",",$auxvar);
    }

  return $auxvar;
  }

  public static function getCodempFromCedemp()
  {

    $usuario = UsuariosPeer::retrieveByPK(sfContext::getInstance()->getUser()->getAttribute('usuario_id'));

    $c = new Criteria();
    $c->add(NphojintPeer::CEDEMP,$usuario->getCedemp());
    $nphojint = NphojintPeer::doSelectOne($c);
    if($nphojint) return $nphojint->getCodemp();
    else return '';

  }

  public static function getNextvalSecuencia($seq){

    $result=array();

    $sql="SELECT nextval('".$seq."') as val;";

    if(Herramientas::BuscarDatos($sql,&$result)){
      return $result[0]['val'];
    }else return 0;

  }


  public static function ValidarGrid($grid)
  {
    $x = $grid[0];
    if (empty($x))
    {
      return 4;
    }
      return -1;
  }

    public static function ObtenerMesenLetras($mes)
  {
  			if($mes=='01')  return $mes='Enero';
			if($mes=='02')  return $mes='Febrero';
			if($mes=='03')  return $mes='Marzo';
			if($mes=='04')  return $mes='Abril';
			if($mes=='05')  return $mes='Mayo';
			if($mes=='06')	return $mes='Junio';
			if($mes=='07')  return $mes='Julio';
			if($mes=='08')	return $mes='Agosto';
			if($mes=='09')  return $mes='Septiembre';
			if($mes=='10')	return $mes='Octubre';
			if($mes=='11')  return $mes='Noviembre';
			if($mes=='12')  return $mes='Diciembre';
  }

  public static function AddDaysDate($orgDate,$day){
    $cd = strtotime($orgDate);
    $retDAY = date('Y-m-d H:i:s', mktime(date('H',$cd),date('i',$cd),date('s',$cd),date('m',$cd),date('d',$cd)+$day,date('Y',$cd)));
    return $retDAY;
  }

  public static function AddDaysDateVE($fecini,$dias){

  	$fecha = explode("/",$fecini);
  	$dyh = getdate(mktime(0, 0, 0, $fecha[1], $fecha[0], $fecha[2]) + 24*60*60*$dias);
  	$fecnue = str_pad($dyh['mday'], 2,'0',STR_PAD_LEFT)."/".str_pad($dyh['mon'], 2,'0',STR_PAD_LEFT)."/".$dyh['year'];
  	return($fecnue);

  }

  public static function buscarCodigoHijo($campo, $tabla, $data) {
	if (!empty($data)){
		eval ('$field = '.ucfirst(strtolower($tabla)).'Peer::'.strtoupper($campo).';');
		$c = new Criteria();
		$sql = "$campo LIKE '$data%' AND length($campo) > length('$data')";
		$c->add($field, $sql, Criteria::CUSTOM);
		eval ('$registro = '.ucfirst(strtolower($tabla)).'Peer::doSelectone($c);');
    	if ($registro)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
     	}
   	}
  }

  public static function obtenerCodigoPadre($campo, $tabla, $data)
  {
   if (!empty($data)){

   	$arraydata = split('-',$data);
   	$data = '';
   	for($i=0;$i<(count($arraydata)-1);$i++){
   		$data .= $arraydata[$i];
   		if($i!=(count($arraydata)-2)) $data .= '-';
   	}

    eval ('$field = '.ucfirst(strtolower($tabla)).'Peer::'.strtoupper($campo).';');

     $c = new Criteria();
     $c->add($field,$data);
     eval ('$registro = '.ucfirst(strtolower($tabla)).'Peer::doSelectOne($c);');
     if ($registro)
     {
     	eval ('$codpadre = $registro->get'.ucfirst(strtolower($campo)).'();');
     }
     else
     {
     	$codpadre='';
     }

     return $codpadre;
    } return '';
  }

    public static function Monto_disponible_ejecucionP($ano,$codigo,$perpre) {
    	$mondis=0;
      	$result=array();

      	if ($perpre=='00'){
      		$fecini='01';
      		$feccie='12';
      	} else {
      		$fecini=$perpre;
      		$feccie=$perpre;
      	}

      	$sql="select sum(monasi +
      	coalesce(obtener_ejecucion(rtrim(codpre),'".$fecini."','".$feccie."','".$ano."','TRA'),0) +
      	coalesce(obtener_ejecucion(rtrim(codpre),'".$fecini."','".$feccie."','".$ano."','ADI'),0) -
      	coalesce(obtener_ejecucion(rtrim(codpre),'".$fecini."','".$feccie."','".$ano."','TRN'),0) -
      	coalesce(obtener_ejecucion(rtrim(codpre),'".$fecini."','".$feccie."','".$ano."','DIS'),0) -
      	coalesce(obtener_ejecucion(rtrim(codpre),'".$fecini."','".$feccie."','".$ano."','PRC'),0)) as mondis
      	from cpasiini where codpre like '".$codigo."' and anopre='".$ano."' and perpre='".$perpre."';";
      	if (Herramientas::BuscarDatos($sql,&$result)) {
    		if ($result[0]['mondis']!='') {
      			$mondis=$result[0]['mondis'];
		    }
      	}
    	return $mondis;
  	}

	public static function Guardar_Grid($objgrid,$arrget,$clase)
	{
		$objupdate = $objgrid[0];
	    $j = 0;
		foreach($objupdate as $x)
		{
			foreach($arrget as $key => $val)
			{
				if(!is_numeric($key))
				{
					if(strpos($val,'='))
						eval('$x->set'.ucfirst($key).'('.$val.');');
					else
						eval('$x->set'.ucfirst($key).'($clase->get'.ucfirst($val).'());');
				}else
				{
					eval('$x->set'.ucfirst($val).'($clase->get'.ucfirst($val).'());');
				}
			}
			$x->save();
		}
	    $objdelete = $objgrid[1];
	    $j = 0;
		foreach($objdelete as $z)
		{
			$z->delete();
		}
		return '-1';
	}


	public static function DiasdeSemana($fecha)
	{
    	$fecha = str_replace("/","-",$fecha);
    	list($dia,$mes,$anio)=explode("-",$fecha);

	    return (((mktime ( 0, 0, 0, $mes, $dia, $anio) - mktime ( 0, 0, 0, 7, 17, 2006))/(60*60*24))+700000) % 7;
	}


	public static function DiasHabiles($FechaIni)
	{
	    $FechaFin  = substr($FechaIni,6,4)."/".substr($FechaIni,3,2)."/".substr($FechaIni,0,2);
	    $dHabil = 0;
	    while ($dHabil < 25){
				$FechaFin = H::dateadd("d", 1, $FechaIni,'+');
	        if (H::DiasdeSemana(H::FormatoFecha($FechaFin)) <> 6 and H::DiasdeSemana(H::FormatoFecha($FechaFin)) <> 0 ){
	            $dHabil = $dHabil + 1;
	        }
	        $FechaIni = $FechaFin;
	    }

	  return H::FormatoFecha($FechaFin);
	}

  public static function analizarNroTelefono($nro)
  {
    $nro = trim($nro);
    $cod = substr($nro, 1, 3);
    $tel = substr($nro, 4);
    
    return array($cod,$tel);

  }

  public static function esCelular($nro){
    $tel = self::analizarNroTelefono($nro);
    $cod = $tel[0];

    if($cod=='416' || $cod=='426' || $cod=='414' || $cod=='424' || $cod=='412') return true;
    else return false;

  }

}

class H extends Herramientas
{}
