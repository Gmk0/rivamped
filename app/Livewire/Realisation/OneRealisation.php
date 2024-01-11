<?php

namespace App\Livewire\Realisation;

use App\Livewire\Web\News;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Realisation;
use Jorenvh\Share\Share;
use Livewire\Component;

use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use WireUi\Traits\Actions;

#[Layout('layouts.web-layout')]
class OneRealisation extends Component
{
    use Actions;

    public $post;
    public $otherpost;
    public $select;
    public String $comment;
    use WithPagination;

    public function mount($slug)
    {
        $this->post=Post::where('slug',$slug)->first();

        if($this->post == null)
        {
            return redirect()->back();
        }


        $this->otherpost=Post::where('id','!=', $this->post->id)->get();
    }
    public function render()
    {
        $url=route('Realisation.one',$this->post->slug);
        $share=New Share();
        $shareComponent = $share->page(
            $url,
            $this->post->title,
        )
            ->facebook()
            ->twitter()
            ->telegram()
            ->whatsapp();


        return view('livewire.realisation.one-realisation',
        ['comments'=>Comment::where('post_id', $this->post->id)->paginate(10),'shareCompenent'=> $shareComponent]
        );
    }

    public function postComment()
    {
        $this->validate(['comment' => 'required']);

        // Créer une nouvelle instance de Comment
        $comment = new Comment();

        // Définir les attributs du commentaire
        $comment->content = $this->comment;
        $comment->post_id = $this->post->id;
        $comment->user_id=auth()->id();


        // Enregistrer le commentairewe
        $comment->save();

        // Réinitialiser la variable comment
        $this->comment = '';
        $this->notification()->success(
            $title = 'Commentaire enregistré',
            $description = 'Votre commentaire a été enregistré avec succès.'
        );


        // Afficher un message de succès

    }

}
