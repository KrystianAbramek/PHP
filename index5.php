<?php

    abstract class Info
    {
        abstract public function getID();

        public function getName()
        {
            print "Obsługa metody getName()\n";
        }

        final public function getCode()
        {
            print "Obsługa metody getCode()";
        }
    }

    class Patient extends Info
    {
        public static function getID()
        {
            print "Obsługa metody getID()\n";
        }
    }

    $chory = new Patient;
    $chory->getID();
    $chory->Name();
    $chory->getCode();

?>