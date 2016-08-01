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
    const CraftersDisplay="Crafters";
    const CarDisplay="Car Show";
    const MotorcycleDisplay="Motorcycle Show";
    const TractorDisplay="Tractor Show";

    //SlideShow are the image colection that is displayed under the header
    const CraftersSlideShow=array("");
    const CarSlideShow=array("");
    const MotorcycleSlideShow=array("");
    const TractorSlideShow=array("");

    //Info is the link to the info tab of each page this is always a pdf
    const CraftersInfo="Crafters.png";
    const CarInfo="Cars.jpeg";
    const MotorcycleInfo="Motorcycle.jpeg";
    const TractorInfo="Tractor.jpeg";

    //Forum is the signup tab link it is embedded google forum
    const CraftersForum="https://docs.google.com/forms/d/e/1FAIpQLScf62z7GBqhlVbDgHNOP2EZJkv90bBRqE9LqnsdeqouqRwlew/viewform?embedded=true";
    const CarForum="https://docs.google.com/forms/d/1_wTAd_RK3zp32WHtVB9NpAUKzgZDmQlrg9J8xusvsaI/viewform?embedded=true";
    const MotorcycleForum="https://docs.google.com/forms/d/e/1FAIpQLScdSMGs7GHSt6vEpLIox7CDpEiF4__PEpgnaKbZnlRRIHSENg/viewform?embedded=true";
    const TractorForum="https://docs.google.com/forms/d/e/1FAIpQLScV4zsYMg9Myrv6dYV9PcDCv1EcA3PRGwYp8v7zz0gJosWV9w/viewform?embedded=true";


    //Map is largely still unknown end users still wants it should be a jpg
    const CraftersMap="";
    const CarMap="";
    const MotorcycleMap="";
    const TractorMap="";


    //Icon is what will display on the Main page
    const CraftersIcon="";
    const CarIcon="";
    const MotorcycleIcon="";
    const TractorIcon="";

    //Num is the Number of which the icons will display (should be 8 total when there done)
    const CraftersNum=0;
    const CarNum=1;
    const MotorcycleNum=2;
    const TractorNum=3;
    
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
             self::CraftersNum => new IndividualSite(self::CraftersNum,self::CraftersDisplay,self::CraftersSlideShow,self::CraftersInfo,
                 self::CraftersForum,self::CraftersMap,self::CraftersIcon) ,
             self::CarNum => new IndividualSite(self::CarNum,self::CarDisplay,self::CarSlideShow,self::CarInfo,
                 self::CarForum,self::CarMap,self::CarIcon) ,
             self::MotorcycleNum => new IndividualSite(self::MotorcycleNum,self::MotorcycleDisplay,self::MotorcycleSlideShow,self::MotorcycleInfo,
                 self::MotorcycleForum,self::MotorcycleMap,self::MotorcycleIcon) ,
             self::TractorNum => new IndividualSite(self::TractorNum,self::TractorDisplay,self::TractorSlideShow,self::TractorInfo,
                 self::TractorForum,self::TractorMap,self::TractorIcon) ,
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