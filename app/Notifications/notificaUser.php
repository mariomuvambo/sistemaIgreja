<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class notificaUser extends Notification
{
    use Queueable;
    private $tituloAviso;
    private $dataAviso;
    private $localAviso;
    private $dataRAviso;
    private $participanteAviso;
    private $horaAviso;
    private $descricaoAviso;


    /**
     * Create a new notification instance.
     */
    public function __construct($tituloAviso, $dataAviso, $localAviso,$dataRAviso,  $participanteAviso,$horaAviso,$descricaoAviso)
    {
        //
        $this->tituloAviso = $tituloAviso;
        $this->localAviso = $localAviso;
        $this->dataAviso = $dataAviso;
        $this->dataRAviso = $dataRAviso;
        $this->participanteAviso = $participanteAviso;
        $this->horaAviso = $horaAviso;
        $this->descricaoAviso = $descricaoAviso;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->subject('IGREJA SAO JOA BATISTA')
        ->greeting('BEM VINDO ' )
        ->line('Sistema web Desenvolvido pelo Mario Muvambo')
        ->action('Entrar no sistema', url('/'))
        ->line('Obrigado por se cadastrar ao sistema!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
            'tituloAviso'=>$this->tituloAviso,
            'localAviso'=>$this->localAviso,
            'dataAviso'=>$this->dataAviso,
            'dataRAviso'=>$this->dataRAviso,
            'participanteAviso'=>$this->participanteAviso,
            'horaAviso'=>$this->horaAviso ,
            'descricaoAviso'=>$this->descricaoAviso,
            
        ];
    }
}
