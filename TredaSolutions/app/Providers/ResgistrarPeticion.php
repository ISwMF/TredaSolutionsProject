<?php

namespace App\Providers;

use App\Providers\NuevoEvento;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ResgistrarPeticion
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  NuevoEvento  $event
     * @return void
     */
    public function handle(NuevaPeticion $event)
    {
        if (isset($event->texto)) {
            $myfile = fopen("../storage/logs/entradas.log", "w") or die("Unable to open file!");
            $txt = $event->texto . "\n";
            fwrite($myfile, "[" . date("r") . "] Petición realizada: " . $txt);
            fclose($myfile);
        }
    }
}
