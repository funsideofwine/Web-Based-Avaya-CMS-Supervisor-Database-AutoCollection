SELECT *
FROM `avaya_reports_db`.`avaya_cms_report`
INTO OUTFILE 'C:\\xampp\\htdocs\\avayareports\\raw\\avaya_cms_report_main.csv'
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n';