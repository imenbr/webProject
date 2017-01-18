<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 18/01/2017
 * Time: 16:08
 */
class maison
{

    private $_id;
    private $_adresse;
    private $_prix;
    private $_image;
    private $_date;
    private $_nomClient;


    /**
     * maison constructor.
     * @param $_id
     * @param $_adresse
     * @param $_prix
     * @param $_image
     * @param $_date
     * @param $_nomClient
     */


    public function __construct($_id, $_adresse, $_prix, $_image, $_date, $_nomClient)
    {
        $this->_id = $_id;
        $this->_adresse = $_adresse;
        $this->_prix = $_prix;
        $this->_image = $_image;
        $this->_date = $_date;
        $this->_nomClient = $_nomClient;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->_adresse;
    }

    /**
     * @param mixed $nom
     */
    public function setAdresse($adresse)
    {
        $this->_adresse= $adresse;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->_prix;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrix($prix)
    {
        $this->_prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * @param mixed $field
     */
    public function setImage($image)
    {
        $this->_image = $image;
    }

    /**
     * @return mixed
     */
    public function getNomClient()
    {
        return $this->_nomClient;
    }

    /**
     * @param mixed $field
     */
    public function setNomClient($nomClient)
    {
        $this->_nomClient = $nomClient;
    }


}