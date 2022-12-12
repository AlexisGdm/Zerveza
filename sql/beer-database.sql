CREATE DATABASE
    IF NOT EXISTS `beers` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

USE `beers`;

CREATE TABLE
    IF NOT EXISTS `beer` (
        `ID_beer` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        `NAME_beer` varchar(60) NOT NULL DEFAULT '',
        `TYPE_beer` varchar(15) NOT NULL DEFAULT '',
        `DESC_beer` varchar(900) DEFAULT NULL,
        `PHOTO_beer` varchar(30) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO
    `beer` (
        `ID_beer`,
        `NAME_beer`,
        `TYPE_beer`,
        `DESC_beer`,
        `PHOTO_beer`
    )
VALUES (
        1,
        'Cabrio Blonde',
        'Blonde',
        "Sa robe dorée et brillante est surmontée d'une belle mousse blanche généreuse. Son nez est marqué par des arômes doux aux notes florales. En bouche la Cabrio blonde est souple et rafraîchissante.",
        "beer1.png"
    ), (
        2,
        "Hoppy Wheat",
        "Blanche",
        "Cette bière de la brasserie Skumenn installée en Bretagne est une Hoppy Wheat, une blanche houblonnée, à base de blé avec une levure allemande et des houblons aromatiques. Elle présente un nez floral, agrumes et fruit exotiques. ",
        "beer2.png"
    ), (
        3,
        "Rêves d'étoiles",
        "Spéciale",
        "La bière Rêves d'étoiles de la microbrasserie Bendorf de Strasbourg en Alsace, est une bière de style Black IPA proposée aux professionnels du CHR, cavistes, épiceries fines... Avec sa robe noire aux reflets rubis, elle est surmontée d'une mousse crémeuse abondante. ",
        "beer3.png"
    ), (
        4,
        "Miel Harmonie",
        "Brune",
        "Sa robe brune prononcée est surmontée d'une fine mousse blanche tirant sur l'ivoire à la bonne tenue. Son nez est doux avec de légers accents torréfiés.",
        "beer4.png"
    ), (
        5,
        "Panic at Munich",
        "Brune",
        "Elle présente une robe brune surmontée d'une mousse fine et une pétillante moyenne. Au nez, elle développe un nez biscuit, malté et caramel. En bouche, vous apprécierez son amertume très légère toute en longueur et saveurs maltées. Gourmande mais très fine.",
        "beer5.png"
    ), (
        6,
        "La Minotte Ambrée",
        "Ambrée",
        "Cette bière ambrée de la brasserie La Minotte a un nez caramel (toffee), une bouche sweety maltée et une finale sur le clou de girofle. Une bière gourmande, toute en rondeur avec une amertume maîtrisée.",
        "beer6.png"
    ), (
        7,
        "L'Âge de Raison",
        "Ambrée",
        "Au nez, elle est intensément fruitée (fruits exotiques et épices). En bouche, des notes végétales et houblonnées terminent sur une finale sèche, longue et résineuse.",
        "beer7.png"
    ), (
        8,
        "The Yeast And The Beast",
        "Ambrée",
        "Elle possède un nez fruité comme un bonbon anglais, des notes de banane mure et de miel. En bouche, c'est une bière ronde et onctueuse, sur une finale légèrement houblonnée.",
        "beer8.png"
    ), (
        9,
        "La Polaris",
        "Blanche",
        "Cette bière de la brasserie Skumenn installée en Bretagne est une Hoppy Wheat, une blanche houblonnée, à base de blé avec une levure allemande et des houblons aromatiques. Elle présente un nez floral, agrumes et fruit exotiques. ",
        "beer9.png"
    ), (
        10,
        "Quatre Pays",
        "Blanche",
        "Cette bière de la brasserie Skumenn installée en Bretagne est une Hoppy Wheat, une blanche houblonnée, à base de blé avec une levure allemande et des houblons aromatiques. Elle présente un nez floral, agrumes et fruit exotiques. ",
        "beer10.png"
    ), (
        11,
        "White Rabbit",
        "Blanche",
        "Cette bière de la brasserie Skumenn installée en Bretagne est une Hoppy Wheat, une blanche houblonnée, à base de blé avec une levure allemande et des houblons aromatiques. Elle présente un nez floral, agrumes et fruit exotiques. ",
        "beer11.png"
    ), (
        12,
        "La gabarde blonde BIO",
        "Blonde",
        "Ella a un caractère épicé et fruité. Idéal sur les viandes blanches, barbecue et pizza, elle se déguste également en apéritif ou avec vos viandes grillées et fromages.",
        "beer12.png"
    ), (
        13,
        "Wheat ale",
        "Blanche",
        "Cette bière de la brasserie Skumenn installée en Bretagne est une Hoppy Wheat, une blanche houblonnée, à base de blé avec une levure allemande et des houblons aromatiques. Elle présente un nez floral, agrumes et fruit exotiques. ",
        "beer13.png"
    ), (
        14,
        "Pale ale",
        "Blonde",
        "Sèche et finement amère en bouche, cette pale ale est le fruit d'une fermentation haute lui conférant une riche palette aromatique, dans laquelle on retrouve des notes fruitées gourmandes.",
        "beer14.png"
    ), (
        15,
        "Ipa Vezelay",
        "Blonde",
        "Bières 100% bio répondant aux critères stricts de la reinheitsgebot , loi de pureté bavaroise édictée en 1516 définissant les ingrédients autorisés dans une bière de haute qualité : de l'eau, du malt, du houblon... et rien d'autre !",
        "beer15.png"
    ), (
        16,
        "Nonne Triple Bio",
        "Blonde",
        "La bière Nonne Triple des Brasseurs Savoyards est une bière forte, de caractère. À la fois ronde, savoureuse et savamment houblonnée, elle est à l’image de ces femmes Ingénieuses et légendaires qui surent nous transmettre leur héritage.",
        "beer16.png"
    ), (
        17,
        "Nonne de printemps",
        "Ambrée",
        "Laissez-vous tenter par la Nonne de mars bio des Brasseurs Savoyards : une spring pale ale légèrement ambrée aux saveurs gourmandes de noisettes grillées, de caramel et de fruits secs et une finale soutenue par une fine pointe d’amertume.",
        "beer17.png"
    ), (
        18,
        "Amber Ale",
        "Ambrée",
        "Bières 100% bio répondant aux critères stricts de la reinheitsgebot , loi de pureté bavaroise édictée en 1516 définissant les ingrédients autorisés dans une bière de haute qualité : de l'eau, du malt, du houblon...",
        "beer18.png"
    ), (
        19,
        "Nonnette ",
        "Brune",
        "Une fois versée dans un verre, la bière Nonette dévoile une belle robe de couleur brune foncée aux somptueux reflets couleur rubis. ",
        "beer19.png"
    ), (
        20,
        "Stout de Vezelay",
        "brune",
        "Des bières pur malt, sans sucre ajoutés, ni additifs, non filtrées et non pasteurisées, restituant tous les arômes du malt et du houblon.",
        "beer20.png"
    ), (
        21,
        "La gabarde",
        "Brune",
        "La gabarde est une Bière artisanale fabriquée selon une méthode traditionnelle.
        Classé parmi les meilleurs bières artisanales, elle est brassée avec des malts torréfiés et des céréales d'exceptions. Idéal sur les viandes rouges, barbecue et pizza épicé.",
        "beer21.png"
    ), (
        22,
        "Bière dorée",
        "Spéciale",
        "En bouche, le blé noir se dévoile et on relève de délicates notes grillées ainsi qu'un soupçon de caramel et de levures. La note finale en bouche est plutôt douce, on retrouve un côté fruits à coques ( noisettes et noix) et pomme cidrée avec une légère amertume.",
        "beer22.png"
    ), (
        23,
        "Organic Chocolat",
        "Spéciale",
        "Le milieu de bouche révèle des notes de café, davantage grillées, sans oublier de rester sur des nuances de caramel. La finale, crémeuse, est en harmonie avec le reste de la dégustation : suave et chocolatée, elle a su parler à notre palais.",
        "beer23.png"
    ), (
        24,
        "Coedo Shikkoku",
        "Speciale",
        "Cette bière noire se démarque par un profil aromatique qui reste léger. Agréable et douce au palais, elle ravira les amateurs de Guiness !",
        "beer24.png"
    ), (
        25,
        "Breiz'Ile",
        "Spéciale",
        "Bière avec l'esprit d'origine de la fabrication artisanale et des ingrédients de qualité...",
        "beer25.png"
    );

CREATE TABLE
    if not EXISTS `admin` (
        `id` int(11) NOT NULL,
        `LOGIN_ADMIN` varchar(255) NOT NULL,
        `PASS_ADMIN` varchar(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

INSERT INTO
    `admin` (
        `id`,
        `LOGIN_ADMIN`,
        `PASS_ADMIN`
    )
VALUES (1, 'admin', 'admin');

CREATE TABLE
    IF NOT EXISTS `Reservation` (
        `Id_reservation` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        `Last_name` varchar(25) NOT NULL DEFAULT '',
        `First_name` varchar(30) NOT NULL DEFAULT '',
        `Telephone` varchar(10) DEFAULT NULL,
        `Email` varchar(30) DEFAULT NULL,
        `Dates` varchar(30) DEFAULT NULL,
        `Number_persons` varchar(10) DEFAULT NULL,
        `Messages` varchar(300) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;