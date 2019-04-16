#remove raw file
Remove-Item "C:\xampp\htdocs\avayareports\scripts\scheduledreport2.sql" | Where { ! $_.PSIsContainer }

$output = "C:\xampp\htdocs\avayareports\scripts\scheduledreport2.sql"


##############################################################
##############################################################
##############################################################
$dd = $(get-date).AddDays(-1).ToString("dd")
$mm = $(get-date).AddDays(-1).ToString("MM")
$yy = $(get-date).AddDays(-1).ToString("yyyy")

Add-Content $output @'
SELECT *
FROM `avaya_reports_db`.`avaya_cms_report_main` WHERE
'@

##############################################################
Add-Content $output "DAY(date1) = `'$dd`'"
#Add-Content $output @'
#'@  
##############################################################
##############################################################
Add-Content $output "and MONTH(date1) = `'$mm`'"
#Add-Content $output @'
#'@  
##############################################################
##############################################################
Add-Content $output "and YEAR(date1) = `'$yy`'"
#Add-Content $output @'
#'@  
##############################################################
##############################################################
Add-Content $output "and dialed_number = `'159222`'"
#Add-Content $output @'
#'@  
##############################################################
##############################################################
Add-Content $output "INTO OUTFILE 'C:\\xampp\\htdocs\\avayareports\\raw\\9222Report$dd$mm$yy.csv'"
#Add-Content $output @'
#'@  
##############################################################
##############################################################
##############################################################
##############################################################
Add-Content $output @'
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n';
'@



#Get-Content "C:\xampp\htdocs\avayareports\scripts\scheduledreport.sql" -Raw 