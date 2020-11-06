#サークル画像1~5のみを出力

USE KINDRED;

SELECT IMAGE1, IMAGE2, IMAGE3, IMAGE4, IMAGE5
FROM CIRCLE_IMAGE
WHERE ID =                    #ここに検索したいIDを入力
AND CIRCLE_NAME like ""       #ダブルクォーテーションの中にサークル名