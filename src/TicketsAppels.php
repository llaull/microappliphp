<?php
/**
 * Created by PhpStorm.
 * User: laurent
 * Date: 26/06/2016
 * Time: 13:23
 */


/**
 * @Entity @Table(name="tickets__appels")
 */
class TicketsAppels
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="integer") */
    protected $compte_ID;
    /** @Column(type="integer") */
    protected $facture_ID;
    /** @Column(type="integer") */
    protected $abonne_ID;
    /** @Column(type="datetime") */
    protected $appel_datetime;
    /** @Column(type="string") */
    protected $appel_duree_reel;
    /** @Column(type="string") */
    protected $appel_duree_fact;
    /** @Column(type="string") */
    protected $appel_type;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCompteID()
    {
        return $this->compte_ID;
    }

    /**
     * @param mixed $compte_ID
     */
    public function setCompteID($compte_ID)
    {
        $this->compte_ID = $compte_ID;
    }

    /**
     * @return mixed
     */
    public function getFactureID()
    {
        return $this->facture_ID;
    }

    /**
     * @param mixed $facture_ID
     */
    public function setFactureID($facture_ID)
    {
        $this->facture_ID = $facture_ID;
    }

    /**
     * @return mixed
     */
    public function getAbonneID()
    {
        return $this->abonne_ID;
    }

    /**
     * @param mixed $abonne_ID
     */
    public function setAbonneID($abonne_ID)
    {
        $this->abonne_ID = $abonne_ID;
    }

    /**
     * @return mixed
     */
    public function getAppelDatetime()
    {
        return $this->appel_datetime;
    }

    /**
     * @param mixed $appel_datetime
     */
    public function setAppelDatetime($appel_datetime)
    {
        $this->appel_datetime = $appel_datetime;
    }

    /**
     * @return mixed
     */
    public function getAppelDureeReel()
    {
        return $this->appel_duree_reel;
    }

    /**
     * @param mixed $appel_duree_reel
     */
    public function setAppelDureeReel($appel_duree_reel)
    {
        $this->appel_duree_reel = $appel_duree_reel;
    }

    /**
     * @return mixed
     */
    public function getAppelDureeFact()
    {
        return $this->appel_duree_fact;
    }

    /**
     * @param mixed $appel_duree_fact
     */
    public function setAppelDureeFact($appel_duree_fact)
    {
        $this->appel_duree_fact = $appel_duree_fact;
    }

    /**
     * @return mixed
     */
    public function getAppelType()
    {
        return $this->appel_type;
    }

    /**
     * @param mixed $appel_type
     */
    public function setAppelType($appel_type)
    {
        $this->appel_type = $appel_type;
    }


}
