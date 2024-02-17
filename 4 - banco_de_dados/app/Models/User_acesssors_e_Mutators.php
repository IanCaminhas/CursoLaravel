<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Casts\Name;
use App\Casts\Tags;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'tags'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    /*Passando parâmetro: ags::class.':3'*/
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*
        Como criar um Acesssors ?
        Preciso colocar: get + nome do campo + Attribute
        Esse nome do banco pode ser igual a do banco ou criar outro campo qualquer.
        A primeira palavra sempre com letra maiúscula. Se for uma palavra composta,
        as iniciais devem ser maiúsculas.

        getNameAttribute. Esse name faz referência ao campo.
        Não posso fazer return $this->name, ou seja, fazer da seguinte forma:
         public function getNameAttribute(){
            return $this->name;
        } Isso daqui dá erro

        Entretanto, posso fazer:
        public function getNameAttribute(){
            return $this->email;
        }

        Por que dá certo com email ?
        email é diferente de name
    */

    public function getNameAttribute($value){
        return 'IPC_'.$value;
    }

    //Esse Acesssors vai substituir o arroba dos email pelos #
    public function getEmailAttribute($value){
        return str_replace('@','#', $value);
    }

    //Acesssors com nome de campo criado
    public function getFullNameAttribute(){
        return $this->name.' / '.str_replace('@', '#', $this->email);
    }

    /*
        Como criar um mutator ?
        Preciso colocar: set + nome do campo + Attribute
        Esse nome do banco pode ser igual a do banco ou criar outro.
        A primeira palavra sempre com letra maiúscula. Se for uma palavra composta,
        as iniciais devem ser maiúsculas.

        setNameAttribute. Esse name faz referência ao campo.
        Quando vier do banco de dados, posso usar o $value.
        Agora, posso fazer $this->name;
    */
    public function setNameAttribute($value) {

        // return $this->name = $value; acessando o nome pelo this
        //Acessando o atributo nome de outra maneira
        return $this->attributes['name'] = 'IPC_'.$value;
    }

    /* Seguinte lógica:
        Sempre que cadastrar um email, vou colocar um prefixo antes.
        Solução: mutator

    */
    public function setEmailAttribute($value) {
        return $this->attributes['email'] = $value;
    }

}
