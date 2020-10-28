<?php

class RegisterFacade
{
    public function register()
    {
        $s1 = new Step1();
        $s1->register();

        $s2 = new Step2();
        $s2->register();

        $s3 = new Step3();
        $s3->register();
    }
}