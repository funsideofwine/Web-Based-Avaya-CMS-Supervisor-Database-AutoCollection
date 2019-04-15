SELECT *
FROM `avaya_reports_db`.`avaya_cms_report_main` WHERE
DAY(date1) = '14'
and MONTH(date1) = '04'
and YEAR(date1) = '2019'
INTO OUTFILE 'C:\\xampp\\htdocs\\avayareports\\raw\\dailyReport14042019.csv'
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n';
