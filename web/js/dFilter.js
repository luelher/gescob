/**
 * Librerías Javascript
 *
 * @package    Roraima
 * @author     $Author$ <desarrollo@cidesa.com.ve>
 * @version SVN: $Id$
 * 
 * @copyright  Copyright 2007, Cide S.A.
 * @license    http://opensource.org/licenses/gpl-2.0.php GPLv2
 */

/***
*
*  funcion para colocar formatos de mascaras definidas previamente
*  autor: CARLOS RAMIREZ
*
*/
function dFilter(tecla, obj, formato)
{
	aux = formato.split("-");
	tamaux = aux.length;
	valor = obj.value;
	id = obj.id;

	if (parseInt(tamaux) > 0)
	{
		if (tecla == (8))
		{
			if (valor=='')
			{
				$(id).value=valor;
			}else
			{
				hasta = valor.length;
				caracter2 = valor.charAt(hasta-2);//valor.substring(parseInt(hasta)-2,parseInt(hasta)-1);
				if (caracter2=='-' )
					$(id).value=valor.substring(0,parseInt(hasta)-1);
			}
		}else if(tecla ==(13) || tecla==(9))
		{
			hasta = valor.length;
			caracter1 = valor.charAt(hasta-1);
			if (caracter1=='-' )
			  $(id).value=$(id).value.substring(0,parseInt(hasta)-1);
		}else
		{
			valornew = valor.split("-");
			tamnew = parseInt(valornew.length);
			//for (r=0; r < parseInt(valornew.length); r++)
			if (tamnew>0)
			{	r = tamnew-1;
				//Comienza a validar la mascara
				if (aux[r].substring(0,1)=='#')
				{
				    RegExpTod = /^[a-z\d]+$/i;

					if(!(RegExpTod.test(valornew[r])))
					{
						$(id).value = valor.substring(0,valor.length-1);
					}
				}
				if (aux[r].substring(0,1)=='A' || aux[r].substring(0,1)=='a')
				{
					RegExpLet = /^[a-z]+$/i;

					if(!(RegExpLet.test(valornew[r])))
					{
						$(id).value = valor.substring(0,valor.length-1);
					}
				}
				if (aux[r].substring(0,1)==9)
				{
					RegExpDig =/^\d+$/;

					if(!(RegExpDig.test(valornew[r])))
					{
						$(id).value = valor.substring(0,valor.length-1);
					/*otra = valor.substring(valor.length-1,valor.length);
					if (otra in [0,1,2,3,4,5,6,7,8,9] || otra in [A,Z])
					{
						alert('introdujo'+otra);
					}*/
					}
				}
				if (aux[r].length==valornew[r].length)
				{
					$(id).value = $(id).value + '-';
				}
			}
		}
	}
}
