<?php

class RengCobPeer extends BaseRengCobPeer
{
  public static function getCobranza($ci,$desde,$hasta) {


    /*

    SELECT docum_cc.*
    FROM
    docum_cc
     * INNER JOIN
     * (reng_cob INNER JOIN cobros ON reng_cob.cob_num = cobros.cob_num)
     * ON docum_cc.nro_doc = reng_cob.doc_num
    WHERE
    docum_cc.co_cli = '13855446' and
    reng_cob.tp_doc_cob='GIRO'
    ORDER BY
    cobros.fec_cob DESC*

   */
    $desde = split('/', $desde);
    $hasta = split('/', $hasta);


    $c = new Criteria();
    $c->addJoin(RengCobPeer::DOC_NUM, DocumCcPeer::NRO_DOC);
    $c->addJoin(RengCobPeer::COB_NUM, CobrosPeer::COB_NUM);

    $c->add(DocumCcPeer::CO_CLI,$ci);
    $c->add(RengCobPeer::TP_DOC_COB,'GIRO');
    $c->add(CobrosPeer::FECCOM , CobrosPeer::FEC_COB." >= '$desde[2]-$desde[1]-$desde[0]'",Criteria::CUSTOM);
    $c->add(CobrosPeer::FEC_COB, CobrosPeer::FEC_COB." <= '$hasta[2]-$hasta[1]-$hasta[0]'",Criteria::CUSTOM);

    //$c->addDescendingOrderByColumn(CobrosPeer::FEC_COB);

    return RengCobPeer::doSelectOne($c);

  }
}
