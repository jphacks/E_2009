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
        "image/image1.jpg",
        "image/image2.jpg",
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
        "image_17360/image1.jpg",
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
        'ガッツリ',
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
        "image_21672/image1.jpg",
        "image_21672/image2.jpg",
        null,
        null,
        null
    );