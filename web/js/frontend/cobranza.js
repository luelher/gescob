
function detalle(id)
{
  celda = id.split('_');
  celda[2] = parseInt(celda[2])-4;

  c = $('ax_'+celda[1]+'_'+celda[2]);

  dir=getUrl()+'detallepagos?ci='+c.value;
  nombre='Detalle de Pagos' ;

  ancho=620;
  alto=340;
  nombre = '';
  params = 'width='+ancho+',height='+alto+',dependent=1,toolbar=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1';

  window.open(dir,nombre,params);

}