<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use DB;
class EnviandoEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $saldoVendas;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $saldoVendas =  DB::select('select sum(valor) as valor from venda where DATE_FORMAT(created_at, "%m%d%Y") = DATE_FORMAT(now(), "%m%d%Y")') ;

        return $this->from('6973e926cc-e08ecd@inbox.mailtrap.io', 'Mailtrap')
            ->subject('Mailtrap Confirmation')
            ->markdown('/email/name')
            ->with([
                'name' =>  $saldoVendas[0]->valor ,
                'link' => 'https://mailtrap.io/inboxes'
            ]);
    }
}
