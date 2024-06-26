const quiz = [
    {
        q: 'Укажіть символ хімічного елемента, атомами якого утворена молекула aзоту.',
        options: [
            'As',
            'At',
            'N',
            'Ni'
        ],
        answer: 2
    },
    {
        q: 'Лише р – електрони беруть участь в утворенні хімічного зв’язку в речовині, формула якої',
        options: [
            'LiH',
            'H2',
            'LiF',
            'F2'
        ],
        answer: 3
    },
    {
        q: 'Безбарвну прозору рідину Х нагрівали у відкритій посудині. Твердий залишок після нагрівання – калій хлорид. Рідина Х – це',
        options: [
            'чиста речовина',
            'неоднорідна суміш',
            'істинний розчин',
            'колоїдний розчин'
        ],
        answer: 2
    },
    {
        q: 'Водно-спиртовий розчин фенолфталеїну набуде забарвлення, а водний розчин метилоранжу змінить колір під дією водного розчину газу, формула якого',
        options: [
            'NH3',
            'HCl',
            'H2S',
            'CH4'
        ],
        answer: 0
    },
    {
        q: 'Укажіть назву сполуки, складниками якої є ЛИШЕ неметалічні елементи.',
        options: [
            'натрій гідрогенкарбонат',
            'гідроген пероксид',
            'кальцій етаноат',
            'літій фенолят'
        ],
        answer: 1
    },

    {

        q: 'Середовище водного розчину солі Х лужне. Унаслідок доливання до нього водного розчину плюмбум(ІІ) нітрату утворився осад середньої солі. Сіль Х – це',
        options: [
            'цинк сульфат',
            'калій етаноат',
            'натрій сульфід',
            'амоній нітрат'
        ],
        answer: 2
    },

    {
        q: 'У складі молекули насиченого ациклічного вуглеводню гептакозану 56 атомів Гідрогену. Укажіть кількість атомів Карбону в його молекулі.',
        options: [
            '17',
            '27',
            '28',
            '58'
        ],
        answer: 1
    },

    {
        q: 'Унаслідок тримеризації етину добули речовину Х. Укажіть загальну формулу гомологічного ряду, до якого належить Х.',
        options: [
            'CnHn',
            'CnH2n',
            'CnH2n-2',
            'CnH2n-6'
        ],
        answer: 3
    },

    {
        q: 'Укажіть пару моделей молекул речовин, які ізомерні одна одній.',
        options: [
            '1, 2',
            '1, 3',
            '2, 3',
            '2, 4'
        ],
        answer: 3,
        im: 'c21.png'
    },

    {
        q: 'Тристеарат із триолеату добувають',
        options: [
            'гідратацією',
            'гідруванням',
            'дегідратацією',
            'дегідруванням'
        ],
        answer: 1
    },

    {
        q: 'Укажіть пропущені слова, позначені цифрами 1 і 2 в реченні: «Яєчний білок під час ___1___ реакції з купрум(ІІ) гідроксидом за надлишку лугу утворює сполуку ___2___ кольору».',
        options: [
            '1 – ксантопротеїнової; 2 – жовтого',
            '1 – ксантопротеїнової; 2 – фіолетового',
            '1 – біуретової; 2 – жовтого',
            '1 – біуретової; 2 – фіолетового'
        ],
        answer: 3
    },

    {
        q: 'Яким з описаних дослідів доведено амфотерні властивості однієї з речовин?',
        options: [
            'додавання краплі води до порошкуватої суміші алюмінію з йодом зумовило початок екзотермічної реакції',
            'під дією розчину алюміній хлориду універсальний індикаторний папірець набув червоного кольору',
            'унаслідок взаємодії алюмінію з хлоридною кислотою виділився безбарвний горючий газ',
            'свіжодобутий осад алюміній гідроксиду розчинився як у хлоридній кислоті, так і в розчині лугу, що взято в надлишку'
        ],
        answer: 3
    },

    {
        q: 'Укажіть назву за номенклатурою IUPAC речовини, структурну формулу якої наведено.',
        options: [
            '1,1,2-триметилпропан-1-ол',
            '2,3,3-триметилпропан-3-ол',
            '2,3-диметилбутан-2-ол',
            '2,3-диметилбутан-3-ол'
        ],
        answer: 2,
        img: 'c22.png'
    },

    {
        q: 'ПОМИЛКОВЕ твердження наведено в рядку',
        options: [
            'Для етану й бензену характерні реакції заміщення.',
            'Як бензен, так і етен вступає в реакцію гідрування.',
            'Бензен можна добути тримеризацією етину.',
            'Бензен взаємодіє з бромною водою.'
        ],
        answer: 3
    },

    {
        q: 'Етанол можна добути',
        options: [
            'гідратацією етину',
            'гідруванням етену',
            'гідруванням етаналю',
            'гідролізом метилетаноату'
        ],
        answer: 2
    },

    {
        q: 'Укажіть правильне твердження щодо сахарози.',
        options: [
            'належить до полісахаридів',
            'є нерозчинною у воді речовиною',
            'взаємодіє з йодом, унаслідок чого виникає синє забарвлення',
            'її молекула складається із залишків молекул глюкози й фруктози'
        ],
        answer: 3
    },

    {
        q: 'Щоби підтвердити відновні властивості метанової кислоти, потрібно використати',
        options: [
            'магнієву стружку',
            'розчин натрій карбонату',
            'амоніачний розчин аргентум(І) оксиду',
            'розчин лугу, забарвлений фенолфталеїном'
        ],
        answer: 2
    },

    {
        q: 'Алмаз і графіт – прості речовини',
        options: [
            'Сульфуру',
            'Карбону',
            'Оксигену',
            'Фосфору'
        ],
        answer: 1
    },

    {
        q: 'Укажіть хімічне явище',
        options: [
            'плавлення парафіну',
            'скисання молока',
            'замерзання води',
            'подрібнення крейди'
        ],
        answer: 1
    },

    {
        q: 'Укажіть правильне твердження.',
        options: [
            'В атомах Флуору й Хлору однакова загальна кількість електронів.',
            'Електронегативність Флуору менша, ніж електронегативність Хлору.',
            'Радіус атома Хлору більший, ніж радіус атома Флуору.',
            'Окисні властивості хлору виражені сильніше, ніж фтору.'
        ],
        answer: 2
    },

]