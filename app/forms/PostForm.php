<?php

namespace App\forms;

use Kris\LaravelFormBuilder\Form;

class PostForm extends Form
{



    public function buildForm()
    {

        $this->formOptions = [
            'method'=>'POST',
            'url'=>route('posts.store')
        ];
        foreach($this->getData() as $input){
            $this
                ->add($input['name'],$input['type'],[
                    'label'=>$input['title'],
                   // 'rules'=>$input->rules
                ]);

        }
        $this->add('submit','submit',[
            'label'=>'envoyer'
        ]);

    }
}
