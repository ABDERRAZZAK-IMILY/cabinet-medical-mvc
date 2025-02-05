<?php

class HomeController
{
    protected $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function index()
    {
        $data = [
            'username' => 'abdeljabbar modiri',
            'message' => 'Bienvenue sur votre tableau de bord!'
        ];

        echo $this->twig->render('home.html.twig', $data);
    }
}
