<?php
    
    class Auto
    {
        protected function print1()
        {
            print "Klasa auto\n";
        }
    }

    class Stereo extends Auto
    {
        protected function print2()
        {
            print "Klasa stereo\n";
        }
    }

    class Radio extends Stereo
    {
        public function print3()
        {
            $this->print1();
            $this->print2();
            print "Klasa radio";
        }
    }

    $radio = new Radio();
    $radio->print3();

?>