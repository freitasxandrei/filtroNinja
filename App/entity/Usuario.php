<?php

namespace App\entity;

use \App\db\database;
use \PDO;

class Usuario
{
    /**
     * Identificador único da vaga
     * @var integer
     */
    public $id;

    /**
     * Título da vaga
     * @var string
     */
    public $nome;

    /**
     * Descrição da vaga (pode conter html)
     * @var string
     */
    public $sobrenome;

    /**
     * Descrição da vaga (pode conter html)
     * @var int
     */
    public $idade;

    /**
     * Descrição da vaga (pode conter html)
     * @var int
     */
    public $cpf;

    /**
     * Define se a vaga está ativa ou não
     * @var text
     */
    public $descricao;

    /**
     * Descrição da vaga (pode conter html)
     * @var enum
     */
    public $sexo;

    /**
     * Descrição da vaga (pode conter html)
     * @var int
     */
    public $ordem;

    /**
     * Define se a vaga está ativa ou não
     * @var string
     */
    public $status; 

    public function cadastrarUsuario()
    {
        // Definir a data 
        // $this->data_inc = date('Y-m-d H:i:s');
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;

        // Inserir a vaga no bano e retornar o ID
        $objdatabase = new database('usuario');

        $this->id = $objdatabase->insert([
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'idade' => $this->idade,
            'cpf' => $this->cpf,
            'descricao' => $this->descricao,
            'sexo' => $this->sexo,  
            'ordem' => $this->ordem,
            'status' => $this->status,
        ]);

        return true;
    }


    /**
     * Método responsável por obter as vagas do banco de dados
     * @params string @where
     * @params string @order
     * @params string $limit
     * @return array
     */

    public static function getnoar($where = null, $order = null, $limit = null)
    {
        $objdatabase = new database('usuario');

        return ($objdatabase)->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsável por obter as vagas do banco de dados
     * @params string @id
     * @return Grupo
     */
    public static function getArUsuario($id)
    {
        $objdatabase = new database('usuario');

        return ($objdatabase)->select('id = ' . $id)->fetchObject(self::class);
    }
    /**
     * Função para excluir vagas no banco
     * @return boolean
     */
    public function excluirUsuario()
    {
        $objdatabase = new database('usuario');

        return ($objdatabase)->delete('id = ' . $this->id);
    }

    /**
     * Função para atualizar a vaga do banco de dados
     * @return boolean
     */
    public function atualizarUsuario() {
        //Definir a data
        // $this->data = date('Y-m-d H:i:s');

        $objDatabase = new database('usuario');

        return ($objDatabase)->update('id = ' . $this->id, [
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'cpf' => $this->cpf,
            'telefone' => $this->telefone,
            'email' => $this->email,  
            'numero_end' => $this->numero_end,
            'rua_end' => $this->rua_end,
            'bairro_end' => $this->bairro_end,
            'cidade_end' => $this->cidade_end,
            'estado_end' => $this->estado_end,   
            'focal' => $this->focal,
            'ordem' => $this->ordem,
            'status' => $this->status,
            'data_inc' => $this->data_inc,    
        ]);
    }
}
