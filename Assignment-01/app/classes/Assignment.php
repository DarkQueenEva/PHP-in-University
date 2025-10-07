<?php

namespace App\classes;

class Assignment
{
    private array $bangladeshDivisions;

    public function __construct()
    {
        $this->bangladeshDivisions = [
            0=>[
                "name" => "Mymenshing",
                "districts" => [
                    "Mymenshing" => [
                        "name" => "Mymenshing",
                        "upazila" => ["Mymensingh Sadar", "Phulpur", "Gafargaon", "Trishal"]
                    ],
                    "Netrokona" => [
                        "name" => "Netrokona",
                        "upazila" => ["Netrokona Sadar", "Kendua", "Mohanganj", "Atpara"]
                    ],
                    "Jamalpur" => [
                        "name" => "Jamalpur",
                        "upazila" => ["Jamalpur Sadar", "Melandaha", "Sarishabari", "Dewanganj"]
                    ],
                    "Sherpur" => [
                        "name" => "Sherpur",
                        "upazila" => ["Sherpur Sadar", "Nalitabari", "Nakla", "Jhenaigati"]
                    ],

                ]
            ],
            1=>[
                "name" => "Dhaka",
                "districts" => [
                    "Dhaka" => [
                        "name" => "Dhaka",
                        "upazila" => ["Nawabganj", "Dohar", "Keraniganj", "Savar"]
                    ],
                    "Gazipur" => [
                        "name" => "Gazipur",
                        "upazila" => ["Gazipur Sadar", "Kapasia", "Sreepur", "Tongi"]
                    ],
                    "Munshiganj" => [
                        "name" => "Munshiganj",
                        "upazila" => ["Munshiganj Sadar", "Sirajdikhan", "Tongibari", "Lohajang"]
                    ],
                    "Tangail" => [
                        "name" => "Tangail",
                        "upazila" => ["Tangail Sadar", "Ghatail", "Mirzapur", "Gopalpur"]
                    ],
                ]
            ],

            2=>[
                "name" => "Chattogram",
                "districts" => [
                    "Bandarban" => [
                        "name" => "Bandarban",
                        "upazila" => ["Bandarban Sadar", "Ruma", "Thanchi", "Lama"]
                    ],
                    "Cox's Bazar" => [
                        "name" => "Cox's Bazar",
                        "upazila" => ["Chakaria", "Kutubdia", "Maheshkhali", "Ukhia"]
                    ],
                    "Rangamati" => [
                        "name" => "Rangamati",
                        "upazila" => ["Juraichhari", "Barkal", "Kaptai", "Langadu"]
                    ],
                    "Khagrachhari" => [
                        "name" => "Khagrachhari",
                        "upazila" => ["Khagrachhari Sadar", "Dighinala", "Panchhari", "Matiranga"]
                    ],
                ]
            ],

            3=>[
                "name" => "Rajshahi",
                "districts" => [
                    "Rajshahi" => [
                        "name" => "Rajshahi",
                        "upazila" => ["Bagha", "Charghat", "Godagari", "Paba"]
                    ],
                    "Chapainawabganj" => [
                        "name" => "Chapainawabganj",
                        "upazila" => ["Chapainawabganj Sadar", "Shibganj", "Gomostapur", "Nachole"]
                    ],
                    "Natore" => [
                        "name" => "Natore",
                        "upazila" => ["Bagatipara", "Baraigram", "Gurudaspur", "Lalpur"]
                    ],
                    "Sirajganj" => [
                        "name" => "Sirajganj",
                        "upazila" => ["Kazipur", "Bera", "Chatmohar", "Ishwardi"]
                    ]
                ]
            ],

            4=>[
                "name" => "Khulna",
                "districts" => [
                    "Bagerhat" => [
                        "name" => "Bagerhat",
                        "upazila" => ["Bagerhat Sadar", "Mollahat", "Morrelganj", "Fakirhat"]
                    ],
                    "Jessore" => [
                        "name" => "Jessore",
                        "upazila" => ["Abhaynagar", "Bagherpara", "Chaugachha", "Jhikargachha"]
                    ],
                    "Satkhira" => [
                        "name" => "Satkhira",
                        "upazila" => ["Assasuni", "Debhata", "Kaliganj", "Satkhira Sadar"]
                    ],
                    "Magura" => [
                        "name" => "Magura",
                        "upazila" => ["Magura Sadar", "Sreepur", "Shalikha", "Mohammadpur"]
                    ]
                ]
            ],

            5=>[
                "name" => "Sylhet",
                "districts" => [
                    "Sylhet" => [
                        "name" => "Sylhet",
                        "upazila" => ["Sylhet Sadar", "Beanibazar", "Bishwanath", "Companiganj"]
                    ],
                    "Sunamganj" => [
                        "name" => "Sunamganj",
                        "upazila" => ["Sunamganj Sadar", "Chhatak", "Jagannathpur", "Dowarabazar"]
                    ],
                    "Moulvibazar" => [
                        "name" => "Moulvibazar",
                        "upazila" => ["Barlekha", "Juri", "Kamalganj", "Kulaura"]
                    ],
                    "Habiganj" => [
                        "name" => "Habiganj",
                        "upazila" => ["Ajmiriganj", "Bahubal", "Baniachong", "Chunarughat"]
                    ]
                ]
            ],

            6=>[
                "name" => "Barishal",
                "districts" => [
                    "Barishal" => [
                        "name" => "Barishal",
                        "upazila" => ["Agailjhara", "Babuganj", "Bakerganj", "Uzirpur"]
                    ],
                    "Jhalokathi" => [
                        "name" => "Jhalokathi",
                        "upazila" => ["Jhalokathi Sadar", "Rajapur", "Kathalia", "halokathi Upazila"]
                    ],
                    "Bhola" => [
                        "name" => "Bhola",
                        "upazila" => ["Bhola Sadar", "Borhanuddin", "Char Fasson", "Daulatkhan"]
                    ],
                    "Patuakhali" => [
                        "name" => "Patuakhali",
                        "upazila" => ["Bauphal", "Dashmina", "Dumki", "Galachipa"]
                    ]
                ]
            ],

            7=>[
                "name" => "Rangpur",
                "districts" => [
                    "Lalmonirhat" => [
                        "name" => "Lalmonirhat",
                        "upazila" => ["Lalmonirhat Sadar", "Hatibandha", "Ainabari", "Patgram"]
                    ],
                    "Gaibandha" => [
                        "name" => "Gaibandha",
                        "upazila" => ["Gaibandha Sadar", "Sadullapur", "Saghat", "Phulbari"]
                    ],
                    "Dinajpur" => [
                        "name" => "Dinajpur",
                        "upazila" => ["Birampur", "Birganj", "Bochaganj", "Chirirbandar"]
                    ],
                    "Kurigram" => [
                        "name" => "Kurigram",
                        "upazila" => ["Bhurungamari", "Char Rajibpur", "Chilmari", "Kurigram Sadar"]
                    ]
                ]
            ]
        ];
    }

    public function getBangladeshDivision()
    {
        return $this->bangladeshDivisions;
    }

    public function index()
    {
        return header('Location: action.php?page=division');
    }
}