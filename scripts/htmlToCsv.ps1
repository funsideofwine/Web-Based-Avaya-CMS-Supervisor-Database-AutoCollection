$file0 = "C:\xampp\htdocs\avayareports\raw\avaya_cms_report.html"
$file1 = "C:\xampp\htdocs\avayareports\raw\avaya_cms_report1.csv"
$file2 = "C:\xampp\htdocs\avayareports\raw\avaya_cms_report2.csv"
$file3 = "C:\xampp\htdocs\avayareports\raw\avaya_cms_report.csv"
#$file4 = "C:\xampp\htdocs\avayareports\raw\avaya_cms_report4.csv"
#$file5 = "C:\xampp\htdocs\avayareports\raw\avaya_cms_report5.csv"
#$file6 = "C:\xampp\htdocs\avayareports\raw\avaya_cms_report6.csv"
#$file7 = "C:\xampp\htdocs\avayareports\raw\avaya_cms_reports7.csv"
#$file8 = "C:\xampp\htdocs\avayareports\raw\avaya_cms_reporstt.csv"
#$file9 = "C:\xampp\htdocs\avayareports\raw\avaya_cms_reportsssy.csv"
#$file10 = "C:\xampp\htdocs\avayareports\raw\avaya_cms_report111.csv"


#remove raw file
#Remove-Item "C:\xampp\htdocs\avayareports\raw\*.csv" -Force | Where { ! $_.PSIsContainer }


#skip the first 32 lines of the file
Get-Content $file0 | Select-Object -Skip 32 | Out-File $file1

#remove blank spaces
Get-Content $file1  | Foreach {$_.TrimEnd()}  | Set-Content "$file2"

#start cleaning
((Get-Content -path $file2 -Raw) -replace '<TR ALIGN=RIGHT>','') | Set-Content -Path $file3
((Get-Content -path $file3 -Raw) -replace '<TD ALIGN=LEFT>','') | Set-Content -Path $file3
((Get-Content -path $file3 -Raw) -replace '</TABLE>',',') | Set-Content -Path $file3
((Get-Content -path $file3 -Raw) -replace '</BODY>',',') | Set-Content -Path $file3
((Get-Content -path $file3 -Raw) -replace '</HTML>',',') | Set-Content -Path $file3
((Get-Content -path $file3 -Raw) -replace '<TD>','') | Set-Content -Path $file3
((Get-Content -path $file3 -Raw) -replace '&nbsp;','') | Set-Content -Path $file3
((Get-Content -path $file3 -Raw) -replace '</TD>',',') | Set-Content -Path $file3

#remove blank spaces
(gc $file3) | Foreach {$_.TrimEnd()} | where {$_ -ne ""} | Set-Content $file3

#convert multi-line to single-line
(Get-Content $file3 | Out-String) -replace "`r?`n(?!`r?`n)" | Set-Content $file3

#put next line every new record
((Get-Content -path $file3 -Raw) -replace '</TR>',"`r`n") | Set-Content -Path $file3

#remove blank spaces
(gc $file3) | Foreach {$_.TrimEnd()} | where {$_ -ne ""} | Set-Content $file3

((Get-Content -path $file3 -Raw) -replace ',,,',"") | Set-Content -Path $file3