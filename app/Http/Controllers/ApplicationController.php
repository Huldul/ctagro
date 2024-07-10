<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderMail;
use App\Models\Application;
use Mail;

class ApplicationController extends Controller
{
    public function send_order(Request $request)
    {
        $data = [
            "name"=>$request->name,
            "number"=>$request->number,
            "email"=>$request->email,
            "text"=>$request->text,
            "region"=>$request->region,
            "message"=>$request->message,


        ];
        // dd($categ->title);

        // Добавить запись в модель Order
        $order = new Application;
        $order->name = $request->name;
        $order->number = $request->number;
        $order->email = $request->email;
        $order->text = $request->text;
        $order->region = $request->region;
        $order->message = $request->message;
        $order->save();

            // Возвращаем PDF пользователю

        try {
            \Log::info('Sending email to: ' . setting('.email_get'));
            Mail::to(setting('.email_get'))->send(new OrderMail($data));
            $message = 'Заявка успешно отправленна и email уведомление отправлено.';
        } catch (\Exception $e) {
            \Log::error('Error sending email: ' . $e->getMessage());
            $message = 'Заявка успешно отправленна.';
        }
        return redirect()->back()->with('success', 'Заявка отправленна успешно'); // Сохраняем или отображаем PDF

    }
}
