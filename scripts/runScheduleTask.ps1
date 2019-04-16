#Import-Module TaskScheduler
Start-ScheduledTask -TaskName "\AvayaReportAutomation\avayacmsscript"
New-Item -Path 'C:\xampp\htdocs\avayareports\scripts\refresh.stat' -ItemType File