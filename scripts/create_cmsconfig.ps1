#remove raw file
#Remove-Item "C:\xampp\htdocs\avayareports\scripts\cms_config\config.acsauto" | Where { ! $_.PSIsContainer }

$output = "C:\xampp\htdocs\avayareports\raw\config.acsauto"


Add-Content $output @'

'LANGUAGE=ENU
'SERVERNAME=10.30.47.25
Public Sub Main()

'## cvs_cmd_begin
'## ID = 2001
'## Description = "Report: Historical: Other: Call Records: Save HTML"
'## Parameters.Add "Report: Historical: Other: Call Records: Save HTML","_Desc"
'## Parameters.Add "Reports","_Catalog"
'## Parameters.Add "1","_Action"
'## Parameters.Add "1","_Quit"
'## Parameters.Add "Historical\Other\Call Records","_Report"
'## Parameters.Add "1","_ACD"
'## Parameters.Add "3682","_Top"
'## Parameters.Add "3157","_Left"
'## Parameters.Add "15285","_Width"
'## Parameters.Add "6135","_Height"
'## Parameters.Add "","_TimeZone"
'## Parameters.Add "The report Historical\Other\Call Records was not found on ACD 1.","_ReportNotFound"
'## Parameters.Add "*","_BeginProperties"

'@


##############################################################
##############################################################
##############################################################
$today = $(get-date).AddDays(+2).ToString("MM/dd/yyyy")
$yesterday = $(get-date).AddDays(-2).ToString("MM/dd/yyyy")
##############################################################
Add-Content $output "`'## Parameters.Add `"$yesterday`",`"Start Date`""  
##############################################################
Add-Content $output @'
'## Parameters.Add "00:00","Start Time"
'@
##############################################################

##############################################################
Add-Content $output "`'## Parameters.Add `"$today`",`"Stop Date`""  
##############################################################
Add-Content $output @'
'## Parameters.Add "00:00","Stop Time"
'@
##############################################################
##############################################################
##############################################################







Add-Content $output @'

'## Parameters.Add "*","_EndProperties"
'## Parameters.Add "*","_BeginViews"
'## Parameters.Add "*","_EndViews"
'## Parameters.Add "C:\xampp\htdocs\avayareports\raw\avaya_cms_report.html","_Output"
'## Parameters.Add "","_Template"
'## Parameters.Add "False","_UseFonts"

   On Error Resume Next

   cvsSrv.Reports.ACD = 1
   Set Info = cvsSrv.Reports.Reports("Historical\Other\Call Records")

   If Info Is Nothing Then
	  If cvsSrv.Interactive Then
		  MsgBox "The report Historical\Other\Call Records was not found on ACD 1.", vbCritical Or vbOKOnly, "Avaya CMS Supervisor"
	  Else
	   	  Set Log = CreateObject("ACSERR.cvsLog") 
		  Log.AutoLogWrite "The report Historical\Other\Call Records was not found on ACD 1."
		  Set Log = Nothing
	  End If
   Else

	   b = cvsSrv.Reports.CreateReport(Info,Rep)
	   If b Then
	
	      Rep.Window.Top = 3682
	      Rep.Window.Left = 3157
	      Rep.Window.Width = 15285
	      Rep.Window.Height = 6135    
      
'@

##############################################################
##############################################################
##############################################################
#$today = $(get-date).AddDays(0).ToString("MM/dd/yyyy")
#$yesterday = $(get-date).AddDays(-1).ToString("MM/dd/yyyy")
##############################################################
Add-Content $output "Rep.SetProperty `"Start Date`",`"$yesterday`""  
##############################################################
##############################################################
Add-Content $output "Rep.SetProperty `"Start Time`",`"00:00`""  
##############################################################

##############################################################
Add-Content $output "Rep.SetProperty `"Stop Date`",`"$today`""  
##############################################################
##############################################################
Add-Content $output "Rep.SetProperty `"Stop Time`",`"00:00`""  
##############################################################
##############################################################
##############################################################
##############################################################






Add-Content $output @'


	      b = Rep.SaveHTML("C:\xampp\htdocs\avayareports\raw\avaya_cms_report.html", False, "")

	

	

	      Rep.Quit

	

              If Not cvsSrv.Interactive Then cvsSrv.ActiveTasks.Remove Rep.TaskID
	      Set Rep = Nothing
	   End If

   End If
   Set Info = Nothing
'## cvs_cmd_end

End Sub

'@

#Get-Content "C:\xampp\htdocs\avayareports\raw\config.acsauto" -Raw 