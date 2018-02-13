<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * todo
 *
 * @ORM\Table(name="todo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\todoRepository")
 */
class todo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=255)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=255)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="prioridade", type="string", length=255)
     */
    private $prioridade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dever_dia", type="datetime")
     */
    private $deverDia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dia_criacao", type="datetime")
     */
    private $diaCriacao;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return todo
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return todo
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return todo
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set prioridade
     *
     * @param string $prioridade
     *
     * @return todo
     */
    public function setPrioridade($prioridade)
    {
        $this->prioridade = $prioridade;

        return $this;
    }

    /**
     * Get prioridade
     *
     * @return string
     */
    public function getPrioridade()
    {
        return $this->prioridade;
    }

    /**
     * Set deverDia
     *
     * @param \DateTime $deverDia
     *
     * @return todo
     */
    public function setDeverDia($deverDia)
    {
        $this->deverDia = $deverDia;

        return $this;
    }

    /**
     * Get deverDia
     *
     * @return \DateTime
     */
    public function getDeverDia()
    {
        return $this->deverDia;
    }

    /**
     * Set diaCriacao
     *
     * @param \DateTime $diaCriacao
     *
     * @return todo
     */
    public function setDiaCriacao($diaCriacao)
    {
        $this->diaCriacao = $diaCriacao;

        return $this;
    }

    /**
     * Get diaCriacao
     *
     * @return \DateTime
     */
    public function getDiaCriacao()
    {
        return $this->diaCriacao;
    }
}

