#remove raw file
Remove-Item "C:\xampp\htdocs\avayareports\raw\html_body" | Where { ! $_.PSIsContainer }

$output = "C:\xampp\htdocs\avayareports\raw\html_body"


##############################################################
##############################################################
##############################################################
$dd = $(get-date).AddDays(-1).ToString("dd")
$mm = $(get-date).AddDays(-1).ToString("MM")
$yy = $(get-date).AddDays(-1).ToString("yyyy")

Add-Content $output @'
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns:m="http://schemas.microsoft.com/office/2004/12/omml" xmlns="http://www.w3.org/TR/REC-html40">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
      <meta name="Generator" content="Microsoft Word 15 (filtered medium)">
      <style>
         <!--
            /* Font Definitions */
            @font-face
            	{font-family:"Cambria Math";
            	panose-1:2 4 5 3 5 4 6 3 2 4;}
            @font-face
            	{font-family:"Calibri Light";
            	panose-1:2 15 3 2 2 2 4 3 2 4;}
            @font-face
            	{font-family:Calibri;
            	panose-1:2 15 5 2 2 2 4 3 2 4;}
            @font-face
            	{font-family:"Segoe UI";
            	panose-1:2 11 5 2 4 2 4 2 2 3;}
            @font-face
            	{font-family:"Browallia New";
            	panose-1:2 11 6 4 2 2 2 2 2 4;}
            @font-face
            	{font-family:FangSong;
            	panose-1:2 1 6 9 6 1 1 1 1 1;}
            @font-face
            	{font-family:"\@FangSong";
            	panose-1:2 1 6 9 6 1 1 1 1 1;}
            /* Style Definitions */
            p.MsoNormal, li.MsoNormal, div.MsoNormal
            	{margin:0in;
            	margin-bottom:.0001pt;
            	font-size:11.0pt;
            	font-family:"Calibri",sans-serif;}
            a:link, span.MsoHyperlink
            	{mso-style-priority:99;
            	color:#0563C1;
            	text-decoration:underline;}
            a:visited, span.MsoHyperlinkFollowed
            	{mso-style-priority:99;
            	color:#954F72;
            	text-decoration:underline;}
            p
            	{mso-style-priority:99;
            	mso-margin-top-alt:auto;
            	margin-right:0in;
            	mso-margin-bottom-alt:auto;
            	margin-left:0in;
            	font-size:12.0pt;
            	font-family:"Times New Roman",serif;}
            span.EmailStyle17
            	{mso-style-type:personal;
            	font-family:"Calibri",sans-serif;
            	color:windowtext;}
            span.EmailStyle18
            	{mso-style-type:personal;
            	font-family:"Calibri",sans-serif;
            	color:#1F497D;}
            span.EmailStyle19
            	{mso-style-type:personal;
            	font-family:"Calibri",sans-serif;
            	color:#1F497D;}
            span.EmailStyle20
            	{mso-style-type:personal;
            	font-family:"Calibri",sans-serif;
            	color:#1F497D;}
            span.EmailStyle21
            	{mso-style-type:personal;
            	font-family:"Calibri",sans-serif;
            	color:#1F497D;}
            span.EmailStyle23
            	{mso-style-type:personal-reply;
            	font-family:"Calibri",sans-serif;
            	color:#1F497D;}
            .MsoChpDefault
            	{mso-style-type:export-only;
            	font-size:10.0pt;}
            @page WordSection1
            	{size:8.5in 11.0in;
            	margin:1.0in 1.0in 1.0in 1.0in;}
            div.WordSection1
            	{page:WordSection1;}
            -->
      </style>
      <!--[if gte mso 9]>
      <xml>
         <o:shapedefaults v:ext="edit" spidmax="1026" />
      </xml>
      <![endif]--><!--[if gte mso 9]>
      <xml>
         <o:shapelayout v:ext="edit">
            <o:idmap v:ext="edit" data="1" />
         </o:shapelayout>
      </xml>
      <![endif]-->
   </head>
   <body bgcolor="#DBDBDB" lang="EN-US" link="#0563C1" vlink="#954F72">
      <div class="WordSection1">
         <p class="MsoNormal">
            <o:p>&nbsp;</o:p>
         </p>
         <p class="MsoNormal" align="center" style="text-align:center;line-height:150%">
            <span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">**</span><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#17375E;mso-style-textfill-fill-color:#17375E;mso-style-textfill-fill-alpha:100.0%"> </span><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">System generated E-mail, please do not reply to this mail</span><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#17375E;mso-style-textfill-fill-color:#17375E;mso-style-textfill-fill-alpha:100.0%"> </span>
            <span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">
               **
               <o:p></o:p>
            </span>
         </p>
         <p class="MsoNormal" align="center" style="text-align:center;line-height:150%">
            <span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">**</span><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#17375E;mso-style-textfill-fill-color:#17375E;mso-style-textfill-fill-alpha:100.0%"> </span><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">Pls Reach out <a href="mailto:MailgroupSystemAdmins@nwc.com.sa"><span style="color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">MailgroupSystemAdmins@nwc.com.sa</span></a> for any Queries</span><span s="" tyle="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#17375E;mso-style-textfill-fill-color:#17375E;mso-style-textfill-fill-alpha:100.0%"> </span>
            <span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">
               **
               <o:p></o:p>
            </span>
         </p>
         <p class="MsoNormal" align="center" style="text-align:center;line-height:150%">
            <i>
               <span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#595959">
                  <o:p>&nbsp;</o:p>
               </span>
            </i>
         </p>
         <div align="center">
            <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:665.9pt;b
               order-collapse:collapse">
               <tr style="height:40.5pt">
                  <td width="888" nowrap="" style="width:665.9pt;background:black;padding:0in 5.4pt 0in 5.4pt;height:40.5pt">
                     <p class="MsoNormal" align="center" style="text-align:center">
                        <span style="font-size:16.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:white">
						
'@
						
						
						
	##############################################################
	Add-Content $output "NWC - AVAYA CMS Call Log Report for $dd/$mm/$yy"
	#Add-Content $output @'
	#'@  
	##############################################################					
						

	Add-Content $output @'
					
						</span>
                        <b>
                           <span style="font-family:&quot;Segoe UI&quot;,sans-serif;color:white">
                              <o:p></o:p>
                           </span>
                        </b>
                     </p>
                  </td>
               </tr>
               <tr style="height:91.55pt">
                  <td width="888" valign="top" style="width:665.9pt;background:white;padding:0in 5.4pt 0in 5.4pt;height:91.55pt">
                     <p class="MsoNormal">
                        <span style="font-size:12.0pt;font-family:FangSong;color:#1F497D">
                           <o:p>&nbsp;</o:p>
                        </span>
                     </p>
                     <p class="MsoNormal">
                        <span style="color:#1F497D">
                           <o:p>&nbsp;</o:p>
                        </span>
                     </p>
					
					<div align="center">
                     <p class="MsoNormal" style="margin-left:.5in">
                        <span style="font-size:13.0pt;font-family:&quot;Calibri Light&quot;,sans-serif;color:#262626" align="center"></span>
						<span style="font-size:13.0pt;font-family:&quot;Calibri Light&quot;,sans-serif;color:#1F497D">
                        (See email attachement)</br></br>
'@

##############################################################
#Add-Content $output "<a href='http://hwinv.nwc.com.sa/avayareports/chart0.php?dd=$dd&mm=$mm&yy=$yy'>"
#Add-Content $output @'
#'@  
##############################################################
Add-Content $output @'
						   
						   
<span style="font-size:13.0pt;font-family:&quot;Calibri Light&quot;,sans-serif;color:#262626" align="center"></span>
<span style="font-size:13.0pt;font-family:&quot;Calibri Light&quot;,sans-serif;color:#1F497D">
						   
						   To open the Online Chart</br> please copy and paste the link below to your Google Chrome browser.</br></br>
'@
##############################################################
##############################################################
    $dd = $(get-date).AddDays(-1).ToString("dd")
    $mm = $(get-date).AddDays(-1).ToString("MM")
    $yy = $(get-date).AddDays(-1).ToString("yyyy")
Add-Content $output "<a href='http://hwinv.nwc.com.sa/avayareports/chart0.php?dd=$dd&mm=$mm&yy=$yy'>http://hwinv.nwc.com.sa/avayareports/chart0.php?dd=$dd&mm=$mm&yy=$yy</a>"
Add-Content $output "<img src='cid:img$dd$mm$yy.png'>"
  
##############################################################
##############################################################
Add-Content $output @'
</span>
                        <span style="font-size:13.0pt;font-family:&quot;Calibri Light&quot;,sans-serif;color:#1F497D">
                           <o:p></o:p>
                        </span>
                     </p>
					 </div>
                     <p class="MsoNormal">
                        <span style="color:#1F497D">
                           <o:p>&nbsp;</o:p>
                        </span>
                     </p>
                     <p class="MsoNormal">
                        <span style="color:#1F497D">
                           <o:p>&nbsp;</o:p>
                        </span>
                     </p>
					 
					 
					 
                     <div align="center">
                   
                     </div>
                     <p class="MsoNormal" style="margin-left:.5in">
                        <span style="font-size:16.0pt;font-family:&quot;Browallia New&quot;,sans-serif;color:#1F4E79">
                           <o:p>&nbsp;</o:p>
                        </span>
                     </p>
                     <p class="MsoNormal">
                        <span style="color:#1F497D">
                           <o:p>&nbsp;</o:p>
                        </span>
                     </p>
                     <p class="MsoNormal" style="margin-left:.5in">
                        <span style="font-size:16.0pt;font-family:&quot;Browallia New&quot;,sans-serif;color:#1F4E79">
                           <o:p>&nbsp;</o:p>
                        </span>
                     </p>
                     <p class="MsoNormal" style="margin-left:.5in">
                        <span style="font-size:10.0pt;font-family:&quot;Courier New&quot;;color:#1F497D"></span>
                        <span style="font-size:10.0pt;font-family:&quot;Courier New&quot;;color:#262626">
                           <o:p></o:p>
                        </span>
                     </p>
                     <p class="MsoNormal" style="margin-left:.5in">
                        <span style="font-size:10.0pt;font-family:&quot;Courier New&quot;;color:#262626"></span>
                        <span style="font-size:10.0pt;font-family:&quot;Courier New&quot;;color:#1F497D">
                           <o:p></o:p>
                        </span>
                     </p>
                     <p class="MsoNormal">
                        <span style="color:#1F497D">
                           <o:p>&nbsp;</o:p>
                        </span>
                     </p>
                     <p class="MsoNormal">
                        <span style="color:#1F497D">
                           <o:p>&nbsp;</o:p>
                        </span>
                     </p>
                  </td>
               </tr>
               <tr style="height:9.9pt">
                  <td width="888" valign="top" style="width:665.9pt;background:white;padding:0in 5.4pt 0in 5.4pt;height:9.9pt">
                     <p class="MsoNormal" align="center" style="text-align:center">
                        <span style="font-size:10.0pt;font-family:&quot;Courier New&quot;;color:#129640;mso-style-textfill-fill-color:#129640;mso-style-textfill-fill-alpha:100.0%">
                           ----- Developed by WIPRO Managed Services for NWC -----
                           <o:p></o:p>
                        </span>
                     </p>
                     <p class="MsoNormal" align="center" style="text-align:center">
                        <i>
                           <span style="color:#1F497D">
                              <o:p>&nbsp;</o:p>
                           </span>
                        </i>
                     </p>
                  </td>
               </tr>
            </table>
         </div>
         <p class="MsoNormal" align="center" style="text-align:center;line-height:150%">
            <o:p>&nbsp;</o:p>
         </p>
         <p class="MsoNormal">
            <o:p>&nbsp;</o:p>
         </p>
         <p class="MsoNormal">
            <o:p>&nbsp;</o:p>
         </p>
      </div>
   </body>
</html>
'@



Get-Content "C:\xampp\htdocs\avayareports\raw\html_body" -Raw 