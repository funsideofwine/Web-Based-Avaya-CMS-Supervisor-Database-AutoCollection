SELECT *
FROM `avaya_reports_db`.`avaya_cms_report_main` WHERE
DAY(date1) = '27'
and MONTH(date1) = '03'
and YEAR(date1) = '2019'
INTO OUTFILE 'C:\\xampp\\htdocs\\avayareports\\raw\\dailyReport27032019.csv'
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n';
