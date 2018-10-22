<?php

namespace App\Mail;

use App\Article;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\ArticleController;


class ArticleCreated extends Mailable
{
    use Queueable, SerializesModels;

    public  $articol;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Article $articol)
    {
        $this->articol = $articol; 

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('admin.emails.articlecreated')->from('test@test.com')
        ->with([
                        'art_id' => $this->articol->id,
                        'art_title' => $this->articol->title,
                        'art_data' => $this->articol->created_at,
                    ]);
    }
}
