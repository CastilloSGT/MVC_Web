<?php

class Validacao
{
    private string $title;
    private string  $descricao;
    private $image;

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->title;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return void
     */
    public function Validar(): ?Exception
    {
        if ($this->title != "") {
            return (throw new Exception("Nome está vazio", 1));
        }
        if ($this->descricao != "") {
            return (throw new Exception("Descrição está vazia", 1));
        }

        return null;
    }
}