#remove raw file
Remove-Item "C:\xampp\htdocs\avayareports\raw\*.*" -Force | Where { ! $_.PSIsContainer }
#Remove-Item "C:\xampp\htdocs\avayareports\scripts\cms_config\*.*" -Force | Where { ! $_.PSIsContainer }










 