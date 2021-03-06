<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 4/29/2016
 * Time: 7:30 PM
 */

namespace Site;


class IndividualSite
{
    const InfoPath = "Info/";
    const ImagePath = "images/";
    const LogoPath =  "Logo/";
    const IconPath = "Icon/";
    const MapPath = "Map/";
    const namePath = "EventDisplay.php?id=";

    public function __construct($number, $display, $icon, $slideShow = "NULL", $info = "", $form = "", $map = "", $Logo="", $LogoLink="")
    {
        $this->name = self::namePath;
        $this->name .= $number;
        $this->number = $number;
        $this->display = $display;
        $this->slideShow = $this->getPictures($slideShow);
        $this->info = self::ImagePath;
        $this->info .= self::InfoPath;
        $this->info .= $info;
        $this->form = $form;
        $this->map=self::ImagePath;
        $this->map.=self::MapPath;
        $this->map.=$map;
        $this->icon = self::ImagePath;
        $this->icon .= self::IconPath;
        $this->icon .= $icon;
        $this->logo = self::ImagePath;
        $this->logo .= self::LogoPath;
        $this->logo .= $Logo;
        $this->logoLink .= $LogoLink;

    }

    private $name;
    private $number;
    private $display;
    private $slideShow=array();
    private $info;
    private $form;
    private $map;
    private $icon;
    private $logo;
    private $logoLink;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }



    public function getPictures($FolderName)
    {
        $dirName = "images/";
        $fullPath=$dirName.$FolderName."/";
       return  glob($fullPath."*.*");

    }
    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param mixed $display
     */
    public function setDisplay($display)
    {
        $this->display = $display;
    }

    /**
     * @return array
     */
    public function getSlideShow()
    {
        return $this->slideShow;
    }

    /**
     * @param array $slideShow
     */
    public function setSlideShow($slideShow)
    {
        $this->slideShow = $slideShow;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param mixed $info
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }

    /**
     * @return mixed
     */
    public function getform()
    {
        return $this->form;
    }

    /**
     * @param mixed $form
     */
    public function setForm($form)
    {
        $this->form = $form;
    }

    /**
     * @return mixed
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @param mixed $map
     */
    public function setMap($map)
    {
        $this->map = $map;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function getLogoLink()
    {
        return $this->logoLink;
    }


}