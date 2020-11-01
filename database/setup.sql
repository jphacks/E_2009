#最初一回のみ起動
DROP DATABASE KINDRED;

#データベースの作成
CREATE DATABASE KINDRED;

#学校テーブルの作成
CREATE TABLE KINDRED.SCHOOL(
    ID              INT             NOT NULL PRIMARY KEY,   #自動生成される?
    SCHOOL_NAME     VARCHAR(50)     NOT NULL,               #学校名
    DEPART_NAME     VARCHAR(50)     NOT NULL,               #学部名
    CAMPUS_NAME     VARCHAR(50)     NOT NULL,               #キャンパス名
    CAMPUS_PREF     VARCHAR(10)     NOT NULL,               #キャンパスの都道府県
    STREET_ADDRESS  VARCHAR(150)    NOT NULL,               #キャンパスの住所
    PORTAL_CODE     INT             NOT NULL                #郵便番号
);



#サークルテーブル
CREATE TABLE KINDRED.CIRCLE(
    ID              INT             NOT NULL PRIMARY KEY,   
    CIRCLE_NAME     VARCHAR(30)     NOT NULL,               #サークル名
    CIRCLE_CATEGORY VARCHAR(10)     NOT NULL,               #分類→運動系・文化系・その他
    INTRO           VARCHAR(520)    NOT NULL,               #紹介文→５００文字以内
    CONTACT         VARCHAR(2083)           ,               #お問い合わせ先　なければnull
    ENTHUSIASM      VARCHAR(10)     NOT NULL,               #ガチ度
    FREQ_DRINK      INT             NOT NULL,               #飲み会の頻度→ガッツリ・そこそこ・まったり
    FREQ_ACTIVITY   INT             NOT NULL                #活動の頻度 0~31
);

#サークル活動日時テーマ
CREATE TABLE KINDRED.CIRCLE_TIME(
    ID              INT             NOT NULL PRIMARY KEY,
    CIRCLE_NAME     VARCHAR(30)     NOT NULL,
    IS_MON          INT                     ,               #月曜日があるか　なければnull
    MON_TIME        VARCHAR(20)             ,               #月曜日の活動時間
    IS_TUE          INT                     ,
    TUE_TIME        VARCHAR(20)             ,
    IS_WED          INT                     ,
    WED_TIME        VARCHAR(20)             ,
    IS_THU          INT                     ,
    THU_TIME        VARCHAR(20)             ,
    IS_FRI          INT                    ,
    FRI_TIME        VARCHAR(20)             ,
    IS_SAT          INT             NOT NULL,
    SAT_TIME        VARCHAR(20)             ,
    IS_SUM          INT             NOT NULL,               #日曜日があるか　なければnull
    SUM_TIME        VARCHAR(20)                             #日曜日の活動時間
);

#サークル画像テーブル
CREATE TABLE KINDRED.CIRCLE_IMAGE(
    ID              INT             NOT NULL PRIMARY KEY,
    CIRCLE_NAME     VARCHAR(30)     NOT NULL,
    IMAGE1          VARCHAR(260)    NOT NULL,               #画像1 これは必須
    IMAGE2          VARCHAR(260)            ,
    IMAGE3          VARCHAR(260)            ,
    IMAGE4          VARCHAR(260)            ,
    IMAGE5          VARCHAR(260)            
);


