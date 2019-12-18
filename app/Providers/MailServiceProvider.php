<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Config;

class MailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (\Schema::hasTable('candidats')) {
            $mail = DB::table('candidats')->latest()->first();
            dd($mail);
            if ($mail) { //checking if table is not empty
                $config = array(
                    'driver'     => 'smtp',
                    'host'       => 'smtp.googlemail.com',
                    'port'       => '587',
                    'from'       => array('address' => $mail->email, 'name' => $mail->nom_complet),
                    'encryption' => 'tls',
                    'username'   => $mail->email,
                    'password'   => 'Mangetry22!',
                    'sendmail'   => '/usr/sbin/sendmail -bs',
                    'subject'   => $mail->message_motivation,
                    'pretend'    => false,
                );
                Config::set('mail', $config);
            }
        }
    }
}
