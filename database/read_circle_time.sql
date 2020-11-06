#サークル活動時間をIDを抜いて出力

USE KINDRED;

SELECT * EXCEPT (ID)
FROM CIRCLE_TIME
WHERE ID =                #ここに検索したいIDを入力
AND CIRCLE_NAME like ""   #ダブルクォーテーションの中にサークル名