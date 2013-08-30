<?php
/**
 * Created by JetBrains PhpStorm.
 * User: keshav
 * Date: 30/8/13
 * Time: 12:58 PM
 * To change this template use File | Settings | File Templates.
 */

class EmailService
{

    public function sendEmail($data)
    {
        try {
            Mail::send('emails.participant', $data, function ($message) use ($data) {
                $message->to($data['userEmail'], $data['userName'])->subject('Thank you for participating in this national competition! ');
            });

        } catch (Exception $e) {
            throw $e;
        }


    }
}