#Remove-Item "C:\inventory\reports\*.*" | Where { ! $_.PSIsContainer }
#Remove-Item "C:\inventory\reports\*.*" | Where { ! $_.PSIsContainer }


#create query
Invoke-Expression C:\xampp\htdocs\avayareports\scripts\create_schedreport1.ps1
Invoke-Expression C:\xampp\htdocs\avayareports\scripts\create_schedreport2.ps1
Invoke-Expression C:\xampp\htdocs\avayareports\scripts\create_schedreport3.ps1

#execute query
Invoke-Expression C:\xampp\htdocs\avayareports\scripts\scheduledreport1.bat
Invoke-Expression C:\xampp\htdocs\avayareports\scripts\scheduledreport2.bat
Invoke-Expression C:\xampp\htdocs\avayareports\scripts\scheduledreport3.bat

Invoke-Expression C:\xampp\htdocs\avayareports\scripts\create_html_body.ps1
#Invoke-WebRequest C:\xampp\htdocs\avayareports\scripts\startUrl.ps1

$html_body  = Get-Content -path "C:\xampp\htdocs\avayareports\raw\html_body"

function sendMail{

    $dd = $(get-date).AddDays(-1).ToString("dd")
    $mm = $(get-date).AddDays(-1).ToString("MM")
    $yy = $(get-date).AddDays(-1).ToString("yyyy")

    
    $file1 = "C:\xampp\htdocs\avayareports\raw\dailyReport$dd$mm$yy.csv"   
	$file2 = "C:\xampp\htdocs\avayareports\raw\9222Report$dd$mm$yy.csv"
	$file3 = "C:\xampp\htdocs\avayareports\raw\vipReport$dd$mm$yy.csv"

    #insert/top header 
    @("call_id,segment,date,start_time,calling_party,dialed_number,disposition,disposition_time,split_skill,ans_logid,talk_time,hold_time,acw_time,trans_out,conf,assist,last_call_work_code,id,date1,start_time1") +  (Get-Content $file ) | Set-Content $file

     
     Write-Host "Sending Email"

     #SMTP server name
     $smtpServer = "smtp.nwc.com.sa"
     #$smtpServer = "cproexchub000.nwc.com.sa"

     #Creating a Mail object
     $msg = new-object Net.Mail.MailMessage

     #Creating SMTP server object
     $smtp = new-object Net.Mail.SmtpClient($smtpServer)



    $attachment = New-Object System.Net.Mail.Attachment –ArgumentList "C:\xampp\htdocs\avayareports\scripts\img$dd$mm$yy.png"
    $attachment.ContentDisposition.Inline = $True
    $attachment.ContentDisposition.DispositionType = "Inline"
    $attachment.ContentType.MediaType = "image/png"
    $attachment.ContentId = 'img$dd$mm$yy.png'


     

     $att1 = new-object Net.Mail.Attachment($file1)
	 $att2 = new-object Net.Mail.Attachment($file2)
	 $att3 = new-object Net.Mail.Attachment($file3)

     $msg.Attachments.Add($attachment)
     $msg.Attachments.Add($att1)
     $msg.Attachments.Add($att2)
     $msg.Attachments.Add($att3)
      
     $msg.From = "donotreply@nwc.com.sa"
     $msg.ReplyTo = "donotreply@nwc.com.sa"
    
     $recipient = ""
     $recipient +=       "rolly@nwc.com.sa"
     $recipient += "," + "mmusthafa@nwc.com.sa"     
     $recipient += "," + "pdevabhaktuni@nwc.com.sa"     
     $recipient += "," + "zahammad@nwc.com.sa"
     $recipient += "," + "vaahmed@nwc.com.sa"
     $recipient += "," + "srahiman@nwc.com.sa" 
     $recipient += "," + "ahamouda@nwc.com.sa"    
     $recipient += "," + "suvasu@nwc.com.sa"    
     $recipient += "," + "mdrahman@nwc.com.sa"    
    

     $msg.To.Add($recipient)     

     #$titleDate = get-date -uformat "(%m-%d-%Y) - %A" 
     #$titleDate = get-date -uformat "(%m-%d-%Y)" 
     $msg.subject = "NWC - AVAYA CMS Call Log Report for $dd/$mm/$yy" 
  
     ######
     $msg.IsBodyHTML = $true
     $msg.Body = $html_body
     ######
     
    
     #Sending email 
     $smtp.Send($msg)

     #remove raw file
     
  
}

sendMail


Remove-Item "C:\xampp\htdocs\avayareports\raw\*" -Force | Where { ! $_.PSIsContainer }
Remove-Item "C:\xampp\htdocs\avayareports\raw\*.*" -Force | Where { ! $_.PSIsContainer } img.png
#Remove-Item "C:\xampp\htdocs\avayareports\scripts\*.png"  -Force | Where { ! $_.PSIsContainer } 