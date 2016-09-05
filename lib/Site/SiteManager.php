<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 4/29/2016
 * Time: 12:15 AM
 */

namespace Site;


class SiteManager
{

    //Display is what will show up as the Page Title and Main Header on the page
    const CommericalDisplay= "Commercial Vendors";
    const CraftersDisplay="Crafters";
    const CarDisplay="Car Show";
    const MotorcycleDisplay="Motorcycle Show";
    const TractorDisplay="Tractor Show";
    const FireDisplay="Firefighter Show";
    const MusicDisplay="Music Venue";

    //SlideShow are the folder where the slideshow is located
    const CraftersSlideShow="Crafters";
    const CarSlideShow="CarShow";
    const MotorcycleSlideShow="None";
    const TractorSlideShow="TractorShow";
    const FireSlideShow="FireFighter";
    const MusicSlideShow="MusicVenue";
    const CommercialSlideShow="Vendors";

    //Info is the link to the info tab of each page this is always a pdf
    const CraftersInfo="Crafters.jpg";
    const CarInfo="Cars.jpg";
    const MotorcycleInfo="Motorcycle.jpg";
    const TractorInfo="Tractor.jpg";
    const FireInfo="Firemancomp.jpg";
    const MusicInfo="Musicflier.jpg";

    //Form is the signup tab link it is embedded google form
    const CraftersForm="https://docs.google.com/forms/d/e/1FAIpQLScf62z7GBqhlVbDgHNOP2EZJkv90bBRqE9LqnsdeqouqRwlew/viewform?embedded=true";
    const CarForm="https://docs.google.com/forms/d/1_wTAd_RK3zp32WHtVB9NpAUKzgZDmQlrg9J8xusvsaI/viewform?embedded=true";
    const MotorcycleForm="https://docs.google.com/forms/d/e/1FAIpQLScdSMGs7GHSt6vEpLIox7CDpEiF4__PEpgnaKbZnlRRIHSENg/viewform?embedded=true";
    const TractorForm="https://docs.google.com/forms/d/e/1FAIpQLScV4zsYMg9Myrv6dYV9PcDCv1EcA3PRGwYp8v7zz0gJosWV9w/viewform?embedded=true";
    const FireForm="https://docs.google.com/forms/d/e/1FAIpQLScV4zsYMg9Myrv6dYV9PcDCv1EcA3PRGwYp8v7zz0gJosWV9w/viewform?embedded=true";
    const MusicForm="https://docs.google.com/forms/d/e/1FAIpQLScV4zsYMg9Myrv6dYV9PcDCv1EcA3PRGwYp8v7zz0gJosWV9w/viewform?embedded=true";

    //Map is largely still unknown end users still wants it should be a jpg
    const CraftersMap="";
    const CarMap="";
    const MotorcycleMap="";
    const TractorMap="";
    const FireMap="";
    const MusicMap="";

    //Icon is what will display on the Main page
    const CommericalIcon="commercialvendorswebsite.jpg";
    const CraftersIcon="crafters.jpg";
    const CarIcon="carshow.jpg";
    const MotorcycleIcon="motorcycle.jpg";
    const TractorIcon="tractor.jpg";
    const FireIcon="firefighter.jpg";
    const MusicIcon="music.jpg";

    //Num is the Number of which the icons will display
    const CommericalNum=0;
    const CraftersNum=1;
    const CarNum=2;
    const MotorcycleNum=3;
    const TractorNum=4;
    const FireNum=5;
    const MusicNum=6;
    
    const Total=4;



    public function __construct($id)
    {
        $this->id=$id;
        $this->initialize();
       // var_dump($this->Code);
        $this->current=$this->Code[$id];
        $this->find();
    }

    public function find(){
            if($this->id!=0){
                $this->previous=$this->Code[$this->id-1];
            }
            else{
                $this->previous=$this->Code[$this->total-1];
            }
            if($this->id!=$this->total-1){
                $this->next=$this->Code[$this->id+1];
            }
            else{
                $this->next=$this->Code[0];
            }
    }

    public function initialize(){
         $this->Code=array(
             self::CommericalNum => new IndividualSite(self::CommericalNum, self::CommericalDisplay,self::CommericalIcon, self::CommercialSlideShow),
             self::CraftersNum => new IndividualSite(self::CraftersNum, self::CraftersDisplay, self::CraftersIcon, self::CraftersSlideShow, self::CraftersInfo, self::CraftersForm, self::CraftersMap) ,
             self::CarNum => new IndividualSite(self::CarNum, self::CarDisplay, self::CarIcon, self::CarSlideShow, self::CarInfo, self::CarForm, self::CarMap) ,
             self::MotorcycleNum => new IndividualSite(self::MotorcycleNum, self::MotorcycleDisplay, self::MotorcycleIcon, self::MotorcycleSlideShow, self::MotorcycleInfo, self::MotorcycleForm, self::MotorcycleMap) ,
             self::TractorNum => new IndividualSite(self::TractorNum, self::TractorDisplay, self::TractorIcon, self::TractorSlideShow, self::TractorInfo, self::TractorForm, self::TractorMap) ,
             self::FireNum => new IndividualSite(self::FireNum, self::FireDisplay, self::FireIcon, self::FireSlideShow, self::FireInfo, self::FireForm, self::FireMap) ,
             self::MusicNum => new IndividualSite(self::MusicNum, self::MusicDisplay, self::MusicIcon, self::MusicSlideShow, self::MusicInfo, self::MusicForm, self::MusicMap) ,
         );
        $this->total=sizeof($this->Code);
    }

    /**
     * @return mixed
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function getCurrent()
    {
        return $this->current;
    }

    public function setId($id)
    {
        $this->id = $id;
        $this->current=$this->Code[$id];
        $this->find();

    }

    public function getId()
    {
        return $this->id;
    }

    public function getCount()
    {
        return $this->total;
    }

    public function getCodeIndex($index)
    {
        return $this->Code[$index];
    }

    private $id=0;
    private $type;
    private $next;
    private $previous;
    private $current;
    private $total;
    private $Code=array();
}