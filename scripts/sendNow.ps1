     Param(
        [Parameter(Mandatory=$True,Position=1)]
            [string]$reciever,[string]$filename,
        [switch]$force = $false
       )


	#C:\xampp\htdocs\kraken\batchfile\report\$reportname

	###########Define Variables########

    $fromaddress = "CMS Report Automated Report <donotreply@nwc.com.sa>"
    $toaddress = $reciever
	
	$CCaddress = "arprakash1@nwc.com.sa,rolly@nwc.com.sa"
	$bccaddress = ""

	
	#$fqdn = $fqdn.ToUpper()
	
	
    $Subject = "Testastika CSV Export Utility"
    $body = "This Mail is sent to $reciever by $sender"
    $attachment = "C:\xampp\htdocs\kraken\batchfile\report\$filename"
    $smtpserver = "smtp.nwc.com.sa"

    ####################################

    $message = new-object System.Net.Mail.MailMessage
    $message.From = $fromaddress
    $message.To.Add($toaddress)
    $message.CC.Add($CCaddress)
    $message.Bcc.Add($bccaddress)
    $message.IsBodyHtml = $True
    $message.Subject = $Subject
    $attach = new-object Net.Mail.Attachment($attachment)
    $message.Attachments.Add($attach)
    $message.body = $body
    $smtp = new-object Net.Mail.SmtpClient($smtpserver)
    $smtp.Send($message)

    #################################################################################
