<?php
class Produto
{
    private $id;
    private $tipo;
    private $nome;
    private $descricao;
    private $preco;
    private $imagem;

    public function __construct($id, $tipo, $nome, $descricao, $preco, $imagem = "logo-serenatto.png")
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->imagem = $imagem;
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function getTipo(): string
    {
        return $this->tipo;
    }


    public function getNome(): string
    {
        return $this->nome;
    }


    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }

    public function getImagemDiretorio(): string
    {
        return "img/" . $this->imagem;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getPrecoFormatado(): string
    {
        return "R$ " . number_format($this->preco, 2);
    }
}
