<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;

class BootManController extends Controller
{
    public function botman(Type $var = null){
        $config = [
            // Your driver-specific configuration
            "telegram" => [
               "token" => "1575860131:AAGjBhh8q8popfa5J97p2SAQQLOLsgwAxN8"
            ]
        ];

        DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);

        // Create an instance
        $botman = BotManFactory::create($config);

        // Give the bot something to listen for.
        $botman->hears('hello', function (BotMan $bot) {
            $bot->reply('Hello yourself.');
        });

        // Start listening
        return $botman->listen();

    }

    public function index()
    {
        return view('bootman');
    }
}
