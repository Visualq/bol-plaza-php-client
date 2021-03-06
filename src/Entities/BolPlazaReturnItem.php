<?php

namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaReturnItem
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @param string $ReturnNumber
 * @param string $OrderId
 * @param string $ShipmentId
 * @param string $EAN
 * @param string $Title
 * @param string $Quantity
 * @param string $ReturnDateAnnouncement
 * @param string $ReturnReason
 * @param BolPlazaShipmentDetails $CustomerDetails
 */
class BolPlazaReturnItem extends BaseModel {

    protected $xmlEntityName = 'Item';

    protected $attributes = [
        'ReturnNumber',
        'OrderId',
        'ShipmentId',
        'EAN',
        'Title',
        'Quantity',
        'ReturnDateAnnouncement',
        'ReturnReason',
        'ReturnReasonComments'
    ];

    protected $nestedEntities = [
        'CustomerDetails' => 'BolPlazaReturnItemCustomerDetails',
    ];
}
