# Store in variable
$Global:csv = (C:\xampp\mysql\bin\mysql.exe -h localhost -u root avaya_reports_db -B -e "SELECT * FROM avaya_cms_report") `
| ConvertFrom-Csv -Delimiter "`t"

# Out to csv
$Global:csv | Export-Csv "C:\xampp\htdocs\avayareports\raw\outfile1.csv" -NoTypeInformation


#`avaya_reports_db`.`avaya_cms_report`