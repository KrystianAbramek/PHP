<?php

    interface Data
    {
        public function getID();  
        public function getName();  
        public function getCode();  
    }

    class Patient implements Data
    {
        public function getID()
        {
            print "Obsługa metody getID()\n";
        }
        public function getName()
        {
            print "Obsługa metody getNAme()\n";
        }
        public function getCode()
        {
            print "Obsługa metody getCode()\n";
        }
    }

    $chory = new Patient;
    $chory->getID();
    $chory->getName();
    $chory->getCode();
    ?>