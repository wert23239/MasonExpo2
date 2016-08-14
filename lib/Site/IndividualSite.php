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
    const IconPath = "Icon/";
    const namePath = "EventDisplay.php?id=";

    public function __construct($number,$display,$slideShow, $info, $forum, $map,$icon)
    {
        $this->name = self::namePath;
        $this->name .= $number;
        $this->number = $number;
        $this->display = $display;
        $this->slideShow = $this->getPictures($slideShow);
        $this->info = self::ImagePath;
        $this->info .= self::InfoPath;
        $this->info .= $info;
        $this->forum = $forum;
        $this->map=$map;
        $this->icon = self::ImagePath;
        $this->icon .= self::IconPath;
        $this->icon .= $icon;

    }

    private $name;
    private $number;
    private $display;
    private $slideShow=array();
    private $info;
    private $forum;
    private $map;
    private $icon;

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
    public function getForum()
    {
        return $this->forum;
    }

    /**
     * @param mixed $forum
     */
    public function setForum($forum)
    {
        $this->forum = $forum;
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




}