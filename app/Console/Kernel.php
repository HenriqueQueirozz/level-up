<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;


use App\Mail\salesReports;
use App\Models\Sale;
use App\Models\Seller;
use App\Presenters\SalePresenter;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            $sellers = Seller::all();
            
            $sale = new Sale;
            $sales = $sale
                    ->where('date', date('Y-m-d'))
                    ->orderBy('id')
                    ->get();

            $sales = new SalePresenter($sales);
            $amount = number_format($sales->sumValue(), 2, ',', '.');
            $sales = $sales->formatedItems();
            
            foreach($sellers as $seller){
                Mail::to($seller)->send(new salesReports($seller, $sales, $amount));
            }
        })->everyTenSeconds();        
    }

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
