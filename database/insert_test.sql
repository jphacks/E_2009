USE KINDRED;

#文字コードをUTFに変更
set character_set_database=utf8;
set character_set_server=utf8;


INSERT INTO SCHOOL VALUES
    (   17358,
        '関西学院大学',    
        '理工学部', 
        '神戸三田キャンパス',
        '兵庫県',
        '兵庫県三田市学園２丁目１',
        6691337);


INSERT INTO SCHOOL VALUES
    (   17360,
        '関西学院大学',    
        '法学部', 
        '西宮キャンパス',
        '兵庫県',
        '兵庫県西宮市上ケ原一番町１丁目１５５',
        6628501);

INSERT INTO SCHOOL VALUES
    (   21672,
        '近畿大学',    
        '工学部', 
        '神戸三田キャンパス',
        '兵庫県',
        '兵庫県三田市学園２丁目１',
        6691337);

INSERT INTO CIRCLE VALUES 
    (   17358,
        'テニスサークル',
        '運動系',
        '楽しいサークルですよ!!! いっぱい楽しみましょう',
        'tennis@gmail.com',
        'まったり',
        18,
        3);

INSERT INTO CIRCLE_TIME VALUES
    (   17358, 
        'テニスサークル',
        1, "13:00~15:00",
        null, null,
        null, null, 
        null, null,
        null, null,
        1, "10:00~18:00",
        1, "10:00~18:00"
    );

INSERT INTO CIRCLE_IMAGE VALUES
    (   17358, 
        'テニスサークル',
        "image_tennis/image1.jpg",
        "image_tennis/image2.jpg",
        null,
        null,
        null
    );

INSERT INTO CIRCLE VALUES 
    (   17358,
        'ゲームサークル',
        '文化系',
        'ゲームをするだけのサークルです。',
        'game@gmail.com',
        'まったり',
        5,
        3);

INSERT INTO CIRCLE_TIME VALUES
    (   17358, 
        'ゲームサークル',
        1, "13:00~15:00",
        1, "10:00~18:00",
        1, "10:00~18:00",
        null, null,
        null, null, 
        null, null,
        null, null
    );

INSERT INTO CIRCLE_IMAGE VALUES
    (   17358, 
        'ゲームサークル',
        "image_game/image1.jpg",
        "image_game/image2.jpg",
        null,
        null,
        null
    );

INSERT INTO CIRCLE VALUES 
    (   17360,
        '漫画サークル',
        '文化系',
        '漫画をたくさん読みましょう。同人誌も作ります',
        'https://docs.google.com/forms/d/e/1FAIpQLSejom5Yig/viewform',
        'そこそこ',
        3,
        4);

INSERT INTO CIRCLE_TIME VALUES
    (   17360,
        '漫画サークル',
        1, "13:00~15:00",
        1, "10:00~19:00",
        1, "10:00~18:00",
        null, null,
        1, "10:00~18:00",
        null, null,
        null, null
    );

INSERT INTO CIRCLE_IMAGE VALUES
    (   17360,
        '漫画サークル',
        "image_17360_manga/image1.jpg",
        null,
        null,
        null,
        null
    );


INSERT INTO CIRCLE VALUES 
    (   17360,
        'アメフト部',
        '運動系',
        '初心者大歓迎!!!!!!',
        null,
        'そこそこ',
        20,
        5);

INSERT INTO CIRCLE_TIME VALUES
    (   17360,
        'アメフト部',
        1, "13:00~15:00",
        1, "10:00~19:00",
        1, "10:00~18:00",
        1, "10:00~18:00",
        1, "10:00~18:00",
        null, null,
        null, null
    );

INSERT INTO CIRCLE_IMAGE VALUES
    (   17360,
        'アメフト部',
        "image_17360_aft/image1.jpg",
        null,
        null,
        null,
        null
    );



INSERT INTO CIRCLE VALUES 
    (   21672,
        'サッカーサークル',
        '運動系',
        '全国大会出場経験あり',
        null,
        'がっつり',
        15,
        6);

INSERT INTO CIRCLE_TIME VALUES
    (   21672,
        'サッカーサークル',
        1, "15:00~21:00",
        null, null,
        1, "15:00~21:00",
        1, "15:00~21:00",
        1, "15:00~21:00",
        1, "10:00~21:00",
        1, "10:00~21:00"
    );

INSERT INTO CIRCLE_IMAGE VALUES
    (   21672,
        'サッカーサークル',
        "image_21672_soccer/image1.jpg",
        "image_21672_soccer/image2.jpg",
        null,
        null,
        null
    );


INSERT INTO CIRCLE VALUES 
    (   21672,
        'Vtuberサークル',
        '文化系',
        'にじさんじ・ホロライブを研究しています',
        'vtuber@yahoo.com',
        'まったり',
        3,
        2);

INSERT INTO CIRCLE_TIME VALUES
    (   21672,
        'Vtuberサークル',
        null, null,
        null, null,
        null, null,
        null, null,
        1, "15:00~19:00",
        1, "15:00~19:00",
        null, null
    );

INSERT INTO CIRCLE_IMAGE VALUES
    (   21672,
        'Vtuberサークル',
        "image_21672_vtuber/image1.jpg",
        "image_21672_vtuber/image2.jpg",
        "image_21672_vtuber/image3.jpg",
        "image_21672_vtuber/image4.jpg",
        null
    );


INSERT INTO CIRCLE VALUES 
    (   21672,
        '数学サークル',
        '文化系',
        '素数の謎に迫ります',
        'math@hmail.com',
        'そこそこ',
        2,
        3);

INSERT INTO CIRCLE_TIME VALUES
    (   21672,
        '数学サークル',
        null, null,
        1, "15:00~19:00",
        null, null,
        1, "15:00~19:00",
        null, null,
        1, "15:00~19:00",
        null, null
    );

INSERT INTO CIRCLE_IMAGE VALUES
    (   21672,
        '数学サークル',
        "image_21672_math/image1.jpg",
        "image_21672_math/image2.jpg",
        "image_21672_math/image3.jpg",
        "image_21672_math/image4.jpg",
        "image_21672_math/image5.jpg"
    );