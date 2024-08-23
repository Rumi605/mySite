<?php
class Product {
    public $id;
    public $name;
    public $image;
    public $price;
    public $quantity;
    public $description;

    public function __construct($id, $name, $image, $price, $quantity, $description)
    {
      $this->id = $id;
      $this->name = $name;
      $this->image = $image;
      $this->price = $price;
      $this->quantity = $quantity;
      $this->description = $description;  
    }
    public static function getAllproducts(){
      return [
       new Product (1,"HTML и XHTML", ["../img/DSC_8892 1.png", "../img/DSC_8891 1.png"], 10500, 500, "Книга 'HTML и XHTML' представляет собой практическое руководство по созданию веб-страниц с использованием HTML и его строгой версии XHTML. В книге подробно описаны основы языка разметки HTML, его структура, основные теги и их использование для создания доступных и хорошо организованных веб-страниц. Авторы пошагово объясняют, как создавать различные элементы веб-страниц, включая текст, ссылки, изображения, таблицы и формы. Особое внимание уделено совместимости с различными браузерами и применению современных стандартов веб-разработки.
                    Это обязательное чтение как для новичков, так и для опытных веб-разработчиков, желающих расширить свои знания и навыки в создании структурированных и профессиональных веб-страниц."),
       new Product (2,"Создаем динамические веб-сайты с помощью PHP, NySQL, javaScript, CSS и HTML5", ["../img/DSC_8929 1.png", "../img/DSC_8930 1.png"], 10500, 500, "Шестое издание «HTML и XHTML» – самая полная и современная книга по языкам HTML и XHTML, разъясняющая работу и взаимодействие каждого их элемента. Она удачно сочетает в себе лучшие качества понятного учебного пособия, адресованного начинающим, и всеобъемлющего справочника, который всегда под рукой даже у опытных веб-программистов. Этот труд, ставший классическим, содержит все от базового описания синтаксиса и семантики до практических советов, поможет вам найти свой неповторимый стиль и в совершенстве овладеть языком веб-дизайна.

                    Описаны стандарты HTML 4.01, XHTML 1.0 и CSS2, приведен обзор еще не вступивших в силу стандартов XHTML 2 и CSS3. Уделено внимание и новейшим инициативам разработчиков XHTML (XFroms, XFrames и модуляризации), а также основам XML. Рассмотрены: управление внешним видом документа с помощью таблиц стилей; работа с HTML-кодом, сгенерированным автоматически; работа с фреймами, интерактивными формами, динамическими документами; интеграция HTML-кода с мультимедийными данными, сценариями JavaScript и Java-апплетами."),
       new Product (3,"Звездные войны: Столкновение на луне контрабандистов", ["../img/DSC_8966 1.png", "../img/DSC_8971 1.png"], 100000, 500, "Люк продолжает своё путешествие и отправляется в Храм Джедаев на Корусанте, чтобы углубить свои знания о джедаях. Однако его световой меч оказывается в чужих руках, и он попадает в заточение! Смогут ли его друзья прийти на помощь до того, как он окажется на Арене Смерти? Параллельно Хан и Лея сталкиваются с неожиданным противником, а Имперцы уже на пути за ними. Оказывается, таинственная женщина из прошлого Хана, имеющая личные обиды на него, находит след повстанцев. Чубакка выходит из-под контроля, а Хану приходится столкнуться... со своей возлюбленной?! Эта захватывающая история раскроет все тайны!"),
       new Product (4,"Звездные войны. Раздробленная империя...", ["../img/DSC_8972 1.png", "../img/DSC_8973 1.png"], 100000, 500, "Окунитесь в последние мгновения Битвы при Эндоре в романе 'Звездные войны'. Раздробленная империя. Путь к 'Пробуждению силы' от автора Грека Рака. В межзвездном пространстве над Лесной луной повстанцы сражаются в финальной отчаянной битве с Галактической Империей, надеясь положить конец тирании Императора Палпатина и принести мир в истерзанную Галактику.
                    Флот повстанцев оказывается в ловушке, когда Вторая Звезда Смерти вводится в строй, а щиты, защищающие спутник Эндора, до сих пор активны. Потенциальный триумф оборачивается катастрофой, и пилоты повстанцев вынуждены схлестнуться в жестоком бою с имперскими силами, чтобы защитить корабли Восстания и выиграть ценное время для общей победы."),
       new Product (5,"Звездные войны. Дарт вейдер: Тени и тайны. ", ["../img/DSC_8974 1.png", "../img/DSC_8976 1.png"], 100000  ,500, "В новом захватывающем романе о Звездных войнах, охотники за головами начинают свою следующую миссию, а Дарт Вейдер получает новое задание от Империи. Но в его сердце тлеют собственные мотивы. Сможет ли темный лорд выполнить свой долг? Союз Дарта Вейдера и Афры продолжает укрепляться, но насколько долговечен этот союз? Кто же такой загадочный новый агент Тагге? Одно известно наверняка: когда расследование Афры, нацеленное на защиту интересов Вейдера, сталкивается с личными целями Вейдера в интересах Империи, результаты могут оказаться фатально опасными!"),
       new Product (6,"Звездные войны: Оби-ван и Энакин.", ["../img/DSC_8977 1.png", "../img/DSC_8977 1.png"], 100000 , 500, "До того как стать героями Войн клонов, до своего трагического сражения на Мустафаре и за много десятилетий до последней встречи на борту 'Звезды Смерти' они были просто учителем Оби-Ваном Кеноби и юным падаваном Энакином Скайуокером. Посмотрите, как познавал Силу юный Скайуокер. Наставник и ученик постепенно становятся ближе друг к другу, но путь их тернист и труден. Когда их посылают помочь далёкой планете, в отношениях Оби-Вана и Энакина грядёт переломный момент. Выберутся ли учитель и падаван с этого примитивного мира с его смертельно опасными обитателями, когда вокруг полыхает война?"),
       new Product (7,"Звездные войны. Дарт Вейдер. Игра окончена. ", ["../img/DSC_8979 1.png"], 100, 1, "Дарт Вейдер ведёт собственную игру, но её конец уже близок. Инспектор Танот возвращается с потрясающими вестями, и кажется, что Вейдер выдержал испытания своего учителя. Однако даже расположение Императора не спасёт тёмного повелителя, если его тайны будут раскрыты. Дроиды-убийцы Три Нуля и БиТи-Один сеют хаос, выполняя свое задание, а постройка имперского дредноута 'Палач близится к завершению. Вейдер вынужден противостоять киборгу Кайло… и самому себе! Его обуревают видения Силы. Неужели он теперь действительно скорее машина, нежели человек? Сможет ли он пробить свой путь к отступлению с обрыва, чтобы узреть плоды своих операций и интриг?"),
       new Product (8,"Энциклопедия 'Звездные войны. Хроники. Год за годом'", ["../img/DSC_8982 1 (1).png", "../img/DSC_8985 1.png"], 100000, 500, "Эта книга стала бестселлером своего времени. В ней вы сможете погрузиться в уникальные моменты создания легендарного произведения 'Звездные войны', узнать все детали создания персонажей C-3PO и R2-D2, а также познакомиться с каждым участником процесса. Расширьте свои знания о вселенной Star Wars!"),
       new Product (9,"All you need is skill.", ["../img/DSC_8986 1.png", "../img/DSC_8987 1.png"], 100000, 500, "Мир охвачен войной с невидимым врагом - чудовищами, которых назвали мимиками. На одном из островов в южной части японии  из раза в раз повторяется один и тот же бой. Новобранец Кейдзи Кирия и ветеран Рита Вратаски по прозвищу Бешеная Гончая ведут свою нелегкую борьбу, чтобы наконец пережить этот день сурка “день сурка” Эта захватывающая манга погрузит вас в произведения суждений, страхов, целей и надежд. "),
       new Product (10,"All you need is kill.", ["../img/DSC_8988 1.png"], 100, 1, "На острове Котоиуси продолжается бесконечный бой с Мимиками. Пропасть между двумя солдатами, Кейдзи Кирией и Ритой Вратаски, стремительно сокращается. Становится различим огонек надежды, и момент истины уже не за горами. Эта захватывающая манга погрузит вас в произведения суждений, страхов, целей и надежд."),
      ];
     }

}