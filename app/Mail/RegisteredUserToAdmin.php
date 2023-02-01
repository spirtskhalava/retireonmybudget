<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class RegisteredUserToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $registeredUserDataToAdmin;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $registeredUser)
    {
        $this->registeredUserDataToAdmin = $this->formatUserDataToEmail($registeredUser);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New registered user')
                    ->view('emails.registered-user-to-admin');
    }

    private function formatUserDataToEmail($user) : array{
        $formatedData = [];
        $formatedData['Email'] = $user->email;
        $formatedData['City'] = $user->getHomeCity() ? $user->getHomeCity()->name : '';
        $formatedData['Destination Cities'] = $this->implodeMultivalues($user->destinationCities, 'name', '; ');
        return $formatedData;
    }

    private function implodeMultivalues($multiValueData, $valueToJoin = "name", $glue = ", ") : string{
        $string = "";
        foreach ($multiValueData as $data) {
            $string .= $data->$valueToJoin . $glue;
        }

        return substr($string, 0, -(strlen($glue)));
    }
}
