<?php

namespace App\entity;

use \App\db\database;
use \PDO;

class Noticia
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
    public $titulo;


    /**
     * Descrição da vaga (pode conter html)
     * @var string
     */
    public $descricao;

    /**
     * Define se a vaga está ativa ou não
     * @var string
     */
    public $status;

    /**
     * Data de publicação da vaga
     * @var timestamp
     */
    public $data;

    /**
     * Descrição da vaga (pode conter html)
     * @var string
     */
    public $autor;

    /**
     * Função para cadastrar a vaga no banco
     * @return boolean
     */
    public function cadastrar()
    {
        // Definir a data 
        $this->data = date('Y-m-d H:i:s');
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;

        // Inserir a vaga no bano e retornar o ID
        $objdatabase = new database('noticias');

        $this->id = $objdatabase->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'data' => $this->data,
            'autor' => $this->autor,
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

    public static function getNoticia($where = null, $order = null, $limit = null)
    {
        $objdatabase = new database('noticias');

        return ($objdatabase)->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsável por obter as vagas do banco de dados
     * @params string @id
     * @return Noticia
     */
    public static function getNoticias($id)
    {
        $objdatabase = new database('noticias');

        return ($objdatabase)->select('id = ' . $id)->fetchObject(self::class);
    }
    /**
     * Função para excluir vagas no banco
     * @return boolean
     */
    public function excluir()
    {
        $objdatabase = new database('noticias');

        return ($objdatabase)->delete('id = ' . $this->id);
    }

    /**
     * Função para atualizar a vaga do banco de dados
     * @return boolean
     */
    public function atualizar()
    {
        //Definir a data
        // $this->data = date('Y-m-d H:i:s');

        $objDatabase = new Database('noticias');

        return ($objDatabase)->update('id = ' . $this->id, [
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'autor' => $this->autor,
            'status' => $this->status,
            'data' => $this->data
        ]);
    }
}
