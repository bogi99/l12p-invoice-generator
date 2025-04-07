<?php

namespace App\Logic;

use App\Models\serialNumber;



class PullNewInvoiceNumber
{
    protected $serialNumber;
    /**
     * Create a new class instance.
     *
     * @param  serialNumber  $serialNumber
     * @return void
     */

    public function __construct(serialNumber $serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }

    public function getNum()
    {
        $serial = $this->serialNumber::first();
        if ($serial) {
            $num = $serial->prefix . str_pad($serial->number, 5, '0', STR_PAD_LEFT);
            $serial->number += $serial->increment;
            $serial->save();
        } else {
            $num = 'AB00001';
        }
        return $num;
    }
}
