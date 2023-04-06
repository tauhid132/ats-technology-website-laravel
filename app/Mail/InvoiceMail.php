<?php

namespace App\Mail;

use App\Models\Order;
//use Barryvdh\DomPDF\PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $order;
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    

    public function build()
    {
        //$pdf = Pdf::loadView('pdfs.order-invoice',array('order' => $this->order));
        return $this->view('emails.sendInvoice',[
            'order' => $this->order,
        ])
        ->subject('Order Confirmation');
        //->attachData($pdf->output(), 'invoice.pdf');
    }
}
